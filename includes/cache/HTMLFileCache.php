<?php
/**
 * Contain the HTMLFileCache class
 * @file
 * @ingroup Cache
 */

/**
 * Handles talking to the file cache, putting stuff in and taking it back out.
 * Mostly called from Article.php for the emergency abort/fallback to cache.
 *
 * Global options that affect this module:
 * - $wgCachePages
 * - $wgCacheEpoch
 * - $wgUseFileCache
 * - $wgCacheDirectory
 * - $wgFileCacheDirectory
 * - $wgUseGzip
 *
 * @ingroup Cache
 */
class HTMLFileCache {

	/**
	 * @var Title
	 */
	var $mTitle;
	var $mFileCache, $mType;

	public function __construct( $title, $type = 'view' ) {
		$this->mTitle = $title;
		$this->mType = ( $type == 'view' ) ? $type : false;
		$this->fileCacheName(); // init name
	}

	public function fileCacheName() {
		if( !$this->mFileCache ) {
			global $wgCacheDirectory, $wgFileCacheDirectory, $wgFileCacheDepth;

			if ( $wgFileCacheDirectory ) {
				$dir = $wgFileCacheDirectory;
			} elseif ( $wgCacheDirectory ) {
				$dir = "$wgCacheDirectory/html";
			} else {
				throw new MWException( 'Please set $wgCacheDirectory in LocalSettings.php if you wish to use the HTML file cache' );
			}

			# Store other views of aspects of pages elsewhere
			$subdir = ($this->mType === 'view') ? '' : "{$this->mType}/";

			$key = $this->mTitle->getPrefixedDbkey();
			if ( $wgFileCacheDepth > 0 ) {
				$hash = md5( $key );
				for ( $i = 1; $i <= $wgFileCacheDepth; $i++ ) {
					$subdir .= substr( $hash, 0, $i ) . '/';
				}
			}
			# Avoid extension confusion
			$key = str_replace( '.', '%2E', urlencode( $key ) );
			$this->mFileCache = "{$dir}/{$subdir}{$key}.html";

			if( $this->useGzip() ) {
				$this->mFileCache .= '.gz';
			}

			wfDebug( __METHOD__ . ": {$this->mFileCache}\n" );
		}
		return $this->mFileCache;
	}

	public function isFileCached() {
		if( $this->mType === false ) {
			return false;
		}
		return file_exists( $this->fileCacheName() );
	}

	public function fileCacheTime() {
		return wfTimestamp( TS_MW, filemtime( $this->fileCacheName() ) );
	}

	/**
	 * Check if pages can be cached for this request/user
	 * @return bool
	 */
	public static function useFileCache() {
		global $wgUser, $wgUseFileCache, $wgShowIPinHeader, $wgRequest, $wgLang, $wgContLang;
		if( !$wgUseFileCache ) {
			return false;
		}
		// Get all query values
		$queryVals = $wgRequest->getValues();
		foreach( $queryVals as $query => $val ) {
			if( $query == 'title' || $query == 'curid' ) {
				continue; // note: curid sets title
			// Normal page view in query form can have action=view.
			// Raw hits for pages also stored, like .css pages for example.
			} elseif( $query == 'action' && $val == 'view' ) {
				continue;
			// Below are header setting params
			} elseif( $query == 'maxage' || $query == 'smaxage' ) {
				continue;
			} else {
				return false;
			}
		}
		// Check for non-standard user language; this covers uselang,
		// and extensions for auto-detecting user language.
		$ulang = $wgLang->getCode();
		$clang = $wgContLang->getCode();
		// Check that there are no other sources of variation
		return !$wgShowIPinHeader && !$wgUser->getId() && !$wgUser->getNewtalk() && $ulang == $clang;
	}

	/**
	 * Check if up to date cache file exists
	 * @param $timestamp string
	 *
	 * @return bool
	 */
	public function isFileCacheGood( $timestamp = '' ) {
		global $wgCacheEpoch;

		if( !$this->isFileCached() ) {
			return false;
		}

		$cachetime = $this->fileCacheTime();
		$good = $timestamp <= $cachetime && $wgCacheEpoch <= $cachetime;

		wfDebug( __METHOD__ . ": cachetime $cachetime, touched '{$timestamp}' epoch {$wgCacheEpoch}, good $good\n");
		return $good;
	}

	public function useGzip() {
		global $wgUseGzip;
		return $wgUseGzip;
	}

	/* In handy string packages */
	public function fetchRawText() {
		return file_get_contents( $this->fileCacheName() );
	}

	public function fetchPageText() {
		if( $this->useGzip() ) {
			/* Why is there no gzfile_get_contents() or gzdecode()? */
			return implode( '', gzfile( $this->fileCacheName() ) );
		} else {
			return $this->fetchRawText();
		}
	}

	/* Working directory to/from output */
	public function loadFromFileCache() {
		global $wgOut, $wgMimeType, $wgLanguageCode;
		wfDebug( __METHOD__ . "()\n");
		$filename = $this->fileCacheName();
		$wgOut->sendCacheControl();
		header( "Content-Type: $wgMimeType; charset=UTF-8" );
		header( "Content-Language: $wgLanguageCode" );
		if( $this->useGzip() ) {
			if( wfClientAcceptsGzip() ) {
				header( 'Content-Encoding: gzip' );
			} else {
				/* Send uncompressed */
				readgzfile( $filename );
				return;
			}
		}
		readfile( $filename );
		$wgOut->disable(); // tell $wgOut that output is taken care of
	}

	protected function checkCacheDirs() {
		$filename = $this->fileCacheName();
		$mydir2 = substr($filename,0,strrpos($filename,'/')); # subdirectory level 2
		$mydir1 = substr($mydir2,0,strrpos($mydir2,'/')); # subdirectory level 1

		wfMkdirParents( $mydir1, null, __METHOD__ );
		wfMkdirParents( $mydir2, null, __METHOD__ );
	}

	public function saveToFileCache( $text ) {
		global $wgUseFileCache;
		if( !$wgUseFileCache || strlen( $text ) < 512 ) {
			// Disabled or empty/broken output (OOM and PHP errors)
			return $text;
		}

		wfDebug( __METHOD__ . "()\n", false);

		$this->checkCacheDirs();

		$f = fopen( $this->fileCacheName(), 'w' );
		if($f) {
			$now = wfTimestampNow();
			if( $this->useGzip() ) {
				$rawtext = str_replace( '</html>',
					'<!-- Cached/compressed '.$now." -->\n</html>",
					$text );
				$text = gzencode( $rawtext );
			} else {
				$text = str_replace( '</html>',
					'<!-- Cached '.$now." -->\n</html>",
					$text );
			}
			fwrite( $f, $text );
			fclose( $f );
			if( $this->useGzip() ) {
				if( wfClientAcceptsGzip() ) {
					header( 'Content-Encoding: gzip' );
					return $text;
				} else {
					return $rawtext;
				}
			} else {
				return $text;
			}
		}
		return $text;
	}

	public static function clearFileCache( $title ) {
		global $wgUseFileCache;

		if ( !$wgUseFileCache ) {
			return false;
		}

		wfSuppressWarnings();

		$fc = new self( $title, 'view' );
		unlink( $fc->fileCacheName() );

		wfRestoreWarnings();

		return true;
	}
}
