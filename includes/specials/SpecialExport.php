<?php
/**
 * Implements Special:Export
 *
 * Copyright © 2003-2008 Brion Vibber <brion@pobox.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup SpecialPage
 */

/**
 * A special page that allows users to export pages in a XML file
 *
 * @ingroup SpecialPage
 */
class SpecialExport extends SpecialPage {

	private $curonly, $doExport, $pageLinkDepth, $templates;
	private $images;

	public function __construct() {
		parent::__construct( 'Export' );
	}

	public function execute( $par ) {
		global $wgSitename, $wgExportAllowListContributors, $wgExportFromNamespaces;
		global $wgExportAllowHistory, $wgExportMaxHistory, $wgExportMaxLinkDepth;

		$this->setHeaders();
		$this->outputHeader();

		// Set some variables
		$this->curonly = true;
		$this->doExport = false;
		$request = $this->getRequest();
		$this->templates = $request->getCheck( 'templates' );
		$this->images = $request->getCheck( 'images' ); // Doesn't do anything yet
		$this->pageLinkDepth = $this->validateLinkDepth(
			$request->getIntOrNull( 'pagelink-depth' )
		);
		$nsindex = '';

		if ( $request->getCheck( 'addcat' ) ) {
			$page = $request->getText( 'pages' );
			$catname = $request->getText( 'catname' );

			if ( $catname !== '' && $catname !== null && $catname !== false ) {
				$t = Title::makeTitleSafe( NS_MAIN, $catname );
				if ( $t ) {
					/**
					 * @todo FIXME: This can lead to hitting memory limit for very large
					 * categories. Ideally we would do the lookup synchronously
					 * during the export in a single query.
					 */
					$catpages = $this->getPagesFromCategory( $t );
					if ( $catpages ) {
						$page .= "\n" . implode( "\n", $catpages );
					}
				}
			}
		}
		elseif( $request->getCheck( 'addns' ) && $wgExportFromNamespaces ) {
			$page = $request->getText( 'pages' );
			$nsindex = $request->getText( 'nsindex', '' );

			if ( strval( $nsindex ) !== ''  ) {
				/**
				 * Same implementation as above, so same @todo
				 */
				$nspages = $this->getPagesFromNamespace( $nsindex );
				if ( $nspages ) {
					$page .= "\n" . implode( "\n", $nspages );
				}
			}
		}
		elseif( $request->wasPosted() && $par == '' ) {
			$page = $request->getText( 'pages' );
			$this->curonly = $request->getCheck( 'curonly' );
			$rawOffset = $request->getVal( 'offset' );

			if( $rawOffset ) {
				$offset = wfTimestamp( TS_MW, $rawOffset );
			} else {
				$offset = null;
			}

			$limit = $request->getInt( 'limit' );
			$dir = $request->getVal( 'dir' );
			$history = array(
				'dir' => 'asc',
				'offset' => false,
				'limit' => $wgExportMaxHistory,
			);
			$historyCheck = $request->getCheck( 'history' );

			if ( $this->curonly ) {
				$history = WikiExporter::CURRENT;
			} elseif ( !$historyCheck ) {
				if ( $limit > 0 && ($wgExportMaxHistory == 0 || $limit < $wgExportMaxHistory ) ) {
					$history['limit'] = $limit;
				}
				if ( !is_null( $offset ) ) {
					$history['offset'] = $offset;
				}
				if ( strtolower( $dir ) == 'desc' ) {
					$history['dir'] = 'desc';
				}
			}

			if( $page != '' ) {
				$this->doExport = true;
			}
		} else {
			// Default to current-only for GET requests.
			$page = $request->getText( 'pages', $par );
			$historyCheck = $request->getCheck( 'history' );

			if( $historyCheck ) {
				$history = WikiExporter::FULL;
			} else {
				$history = WikiExporter::CURRENT;
			}

			if( $page != '' ) {
				$this->doExport = true;
			}
		}

		if( !$wgExportAllowHistory ) {
			// Override
			$history = WikiExporter::CURRENT;
		}

		$list_authors = $request->getCheck( 'listauthors' );
		if ( !$this->curonly || !$wgExportAllowListContributors ) {
			$list_authors = false ;
		}

		if ( $this->doExport ) {
			$this->getOutput()->disable();

			// Cancel output buffering and gzipping if set
			// This should provide safer streaming for pages with history
			wfResetOutputBuffers();
			$request->response()->header( "Content-type: application/xml; charset=utf-8" );

			if( $request->getCheck( 'wpDownload' ) ) {
				// Provide a sane filename suggestion
				$filename = urlencode( $wgSitename . '-' . wfTimestampNow() . '.xml' );
				$request->response()->header( "Content-disposition: attachment;filename={$filename}" );
			}

			$this->doExport( $page, $history, $list_authors );

			return;
		}

		$out = $this->getOutput();
		$out->addWikiMsg( 'exporttext' );

		$form = Xml::openElement( 'form', array( 'method' => 'post',
			'action' => $this->getTitle()->getLocalUrl( 'action=submit' ) ) );
		$form .= Xml::inputLabel( wfMsg( 'export-addcattext' )    , 'catname', 'catname', 40 ) . '&#160;';
		$form .= Xml::submitButton( wfMsg( 'export-addcat' ), array( 'name' => 'addcat' ) ) . '<br />';

		if ( $wgExportFromNamespaces ) {
			$form .= Xml::namespaceSelector( $nsindex, null, 'nsindex', wfMsg( 'export-addnstext' ) ) . '&#160;';
			$form .= Xml::submitButton( wfMsg( 'export-addns' ), array( 'name' => 'addns' ) ) . '<br />';
		}

		$form .= Xml::element( 'textarea', array( 'name' => 'pages', 'cols' => 40, 'rows' => 10 ), $page, false );
		$form .= '<br />';

		if( $wgExportAllowHistory ) {
			$form .= Xml::checkLabel(
				wfMsg( 'exportcuronly' ),
				'curonly',
				'curonly',
				$request->wasPosted() ? $request->getCheck( 'curonly' ) : true
			) . '<br />';
		} else {
			$out->addHTML( wfMsgExt( 'exportnohistory', 'parse' ) );
		}

		$form .= Xml::checkLabel(
			wfMsg( 'export-templates' ),
			'templates',
			'wpExportTemplates',
			$request->wasPosted() ? $request->getCheck( 'templates' ) : false
		) . '<br />';

		if( $wgExportMaxLinkDepth || $this->userCanOverrideExportDepth() ) {
			$form .= Xml::inputLabel( wfMsg( 'export-pagelinks' ), 'pagelink-depth', 'pagelink-depth', 20, 0 ) . '<br />';
		}
		// Enable this when we can do something useful exporting/importing image information. :)
		//$form .= Xml::checkLabel( wfMsg( 'export-images' ), 'images', 'wpExportImages', false ) . '<br />';
		$form .= Xml::checkLabel(
			wfMsg( 'export-download' ),
			'wpDownload',
			'wpDownload',
			$request->wasPosted() ? $request->getCheck( 'wpDownload' ) : true
		) . '<br />';

		if ( $wgExportAllowListContributors ) {
			$form .= Xml::checkLabel(
				wfMsg( 'exportlistauthors' ),
				'listauthors',
				'listauthors',
				$request->wasPosted() ? $request->getCheck( 'listauthors' ) : false
			) . '<br />';
		}

		$form .= Xml::submitButton( wfMsg( 'export-submit' ), Linker::tooltipAndAccesskeyAttribs( 'export' ) );
		$form .= Xml::closeElement( 'form' );

		$out->addHTML( $form );
	}

	/**
	 * @return bool
	 */
	private function userCanOverrideExportDepth() {
		return $this->getUser()->isAllowed( 'override-export-depth' );
	}

	/**
	 * Do the actual page exporting
	 *
	 * @param $page String: user input on what page(s) to export
	 * @param $history Mixed: one of the WikiExporter history export constants
	 * @param $list_authors Boolean: Whether to add distinct author list (when
	 *                      not returning full history)
	 */
	private function doExport( $page, $history, $list_authors ) {
		$pageSet = array(); // Inverted index of all pages to look up

		// Split up and normalize input
		foreach( explode( "\n", $page ) as $pageName ) {
			$pageName = trim( $pageName );
			$title = Title::newFromText( $pageName );
			if( $title && $title->getInterwiki() == '' && $title->getText() !== '' ) {
				// Only record each page once!
				$pageSet[$title->getPrefixedText()] = true;
			}
		}

		// Set of original pages to pass on to further manipulation...
		$inputPages = array_keys( $pageSet );

		// Look up any linked pages if asked...
		if( $this->templates ) {
			$pageSet = $this->getTemplates( $inputPages, $pageSet );
		}
		$linkDepth = $this->pageLinkDepth;
		if( $linkDepth ) {
			$pageSet = $this->getPageLinks( $inputPages, $pageSet, $linkDepth );
		}

		/*
		 // Enable this when we can do something useful exporting/importing image information. :)
		 if( $this->images ) ) {
		 $pageSet = $this->getImages( $inputPages, $pageSet );
		 }
		 */

		$pages = array_keys( $pageSet );

		// Normalize titles to the same format and remove dupes, see bug 17374
		foreach( $pages as $k => $v ) {
			$pages[$k] = str_replace( " ", "_", $v );
		}

		$pages = array_unique( $pages );

		/* Ok, let's get to it... */
		if( $history == WikiExporter::CURRENT ) {
			$lb = false;
			$db = wfGetDB( DB_SLAVE );
			$buffer = WikiExporter::BUFFER;
		} else {
			// Use an unbuffered query; histories may be very long!
			$lb = wfGetLBFactory()->newMainLB();
			$db = $lb->getConnection( DB_SLAVE );
			$buffer = WikiExporter::STREAM;

			// This might take a while... :D
			wfSuppressWarnings();
			set_time_limit(0);
			wfRestoreWarnings();
		}

		$exporter = new WikiExporter( $db, $history, $buffer );
		$exporter->list_authors = $list_authors;
		$exporter->openStream();

		foreach( $pages as $page ) {
			/*
			 if( $wgExportMaxHistory && !$this->curonly ) {
			 $title = Title::newFromText( $page );
			 if( $title ) {
			 $count = Revision::countByTitle( $db, $title );
			 if( $count > $wgExportMaxHistory ) {
			 wfDebug( __FUNCTION__ .
			 ": Skipped $page, $count revisions too big\n" );
			 continue;
			 }
			 }
			 }*/
			#Bug 8824: Only export pages the user can read
			$title = Title::newFromText( $page );
			if( is_null( $title ) ) {
				continue; #TODO: perhaps output an <error> tag or something.
			}
			if( !$title->userCanRead() ) {
				continue; #TODO: perhaps output an <error> tag or something.
			}

			$exporter->pageByTitle( $title );
		}

		$exporter->closeStream();

		if( $lb ) {
			$lb->closeAll();
		}
	}

	/**
	 * @param $title Title
	 * @return array
	 */
	private function getPagesFromCategory( $title ) {
		global $wgContLang;

		$name = $title->getDBkey();

		$dbr = wfGetDB( DB_SLAVE );
		$res = $dbr->select(
			array( 'page', 'categorylinks' ),
			array( 'page_namespace', 'page_title' ),
			array( 'cl_from=page_id', 'cl_to' => $name ),
			__METHOD__,
			array( 'LIMIT' => '5000' )
		);

		$pages = array();

		foreach ( $res as $row ) {
			$n = $row->page_title;
			if ($row->page_namespace) {
				$ns = $wgContLang->getNsText( $row->page_namespace );
				$n = $ns . ':' . $n;
			}

			$pages[] = $n;
		}
		return $pages;
	}

	/**
	 * @param $nsindex int
	 * @return array
	 */
	private function getPagesFromNamespace( $nsindex ) {
		global $wgContLang;

		$dbr = wfGetDB( DB_SLAVE );
		$res = $dbr->select(
			'page',
			array( 'page_namespace', 'page_title' ),
			array( 'page_namespace' => $nsindex ),
			__METHOD__,
			array( 'LIMIT' => '5000' )
		);

		$pages = array();

		foreach ( $res as $row ) {
			$n = $row->page_title;

			if ( $row->page_namespace ) {
				$ns = $wgContLang->getNsText( $row->page_namespace );
				$n = $ns . ':' . $n;
			}

			$pages[] = $n;
		}
		return $pages;
	}

	/**
	 * Expand a list of pages to include templates used in those pages.
	 * @param $inputPages array, list of titles to look up
	 * @param $pageSet array, associative array indexed by titles for output
	 * @return array associative array index by titles
	 */
	private function getTemplates( $inputPages, $pageSet ) {
		return $this->getLinks( $inputPages, $pageSet,
			'templatelinks',
			array( 'tl_namespace AS namespace', 'tl_title AS title' ),
			array( 'page_id=tl_from' )
		);
	}

	/**
	 * Validate link depth setting, if available.
	 * @param $depth int
	 * @return int
	 */
	private function validateLinkDepth( $depth ) {
		global $wgExportMaxLinkDepth;

		if( $depth < 0 ) {
			return 0;
		}

		if ( !$this->userCanOverrideExportDepth() ) {
			if( $depth > $wgExportMaxLinkDepth ) {
				return $wgExportMaxLinkDepth;
			}
		}

		/*
		 * There's a HARD CODED limit of 5 levels of recursion here to prevent a
		 * crazy-big export from being done by someone setting the depth
		 * number too high. In other words, last resort safety net.
		 */
		return intval( min( $depth, 5 ) );
	}

	/**
	 * Expand a list of pages to include pages linked to from that page.
	 * @param $inputPages array
	 * @param $pageSet array
	 * @param $depth int
	 * @return array
	 */
	private function getPageLinks( $inputPages, $pageSet, $depth ) {
		for( ; $depth > 0; --$depth ) {
			$pageSet = $this->getLinks(
				$inputPages, $pageSet, 'pagelinks',
				array( 'pl_namespace AS namespace', 'pl_title AS title' ),
				array( 'page_id=pl_from' )
			);
			$inputPages = array_keys( $pageSet );
		}

		return $pageSet;
	}

	/**
	 * Expand a list of pages to include images used in those pages.
	 *
	 * @param $inputPages array, list of titles to look up
	 * @param $pageSet array, associative array indexed by titles for output
	 *
	 * @return array associative array index by titles
	 */
	private function getImages( $inputPages, $pageSet ) {
		return $this->getLinks(
			$inputPages,
			$pageSet,
			'imagelinks',
			array( NS_FILE . ' AS namespace', 'il_to AS title' ),
			array( 'page_id=il_from' )
		);
	}

	/**
	 * Expand a list of pages to include items used in those pages.
	 */
	private function getLinks( $inputPages, $pageSet, $table, $fields, $join ) {
		$dbr = wfGetDB( DB_SLAVE );

		foreach( $inputPages as $page ) {
			$title = Title::newFromText( $page );

			if( $title ) {
				$pageSet[$title->getPrefixedText()] = true;
				/// @todo FIXME: May or may not be more efficient to batch these
				///        by namespace when given multiple input pages.
				$result = $dbr->select(
					array( 'page', $table ),
					$fields,
					array_merge(
						$join,
						array(
							'page_namespace' => $title->getNamespace(),
							'page_title' => $title->getDBkey()
						)
					),
					__METHOD__
				);

				foreach( $result as $row ) {
					$template = Title::makeTitle( $row->namespace, $row->title );
					$pageSet[$template->getPrefixedText()] = true;
				}
			}
		}

		return $pageSet;
	}

}
