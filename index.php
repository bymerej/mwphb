<?php

# Main wiki script; see design.doc
#
$wgRequestTime = microtime();

unset( $IP );
ini_set( "allow_url_fopen", 0 ); # For security...
if(!file_exists("LocalSettings.php")) {
	die( "You'll have to <a href='config/index.php'>set the wiki up</a> first!" );
}
include_once( "./LocalSettings.php" );

if( $wgSitename == "MediaWiki" ) {
	die( "You must set the site name in \$wgSitename before installation.\n\n" );
}

# PATH_SEPARATOR avaialble only from 4.3.0
$sep = (DIRECTORY_SEPARATOR == "\\") ? ";" : ":";
ini_set( "include_path", $IP . $sep . ini_get( "include_path" ) );

include_once( "Setup.php" );

wfProfileIn( "main-misc-setup" );
OutputPage::setEncodings(); # Not really used yet

# Query string fields
$action = $wgRequest->getVal( "action", "view" );

if( isset( $_SERVER['PATH_INFO'] ) && $wgUsePathInfo ) {
	$title = substr( $_SERVER['PATH_INFO'], 1 );
} else {
	$title = $wgRequest->getVal( "title" );
}

# Placeholders in case of DB error
$wgTitle = Title::newFromText( wfMsg( "badtitle" ) );
$wgArticle = new Article($wgTitle);

$action = strtolower( trim( $action ) );
if ( "" == $action ) { $action = "view"; }
if ($wgRequest->getVal( "printable" ) == "yes") {
	$wgOut->setPrintable();
}

if ( "" == $title && "delete" != $action ) {
	$wgTitle = Title::newFromText( wfMsg( "mainpage" ) );
} elseif ( $curid = $wgRequest->getInt( 'curid' ) ) {
	# URLs like this are generated by RC, because rc_title isn't always accurate
	$wgTitle = Title::newFromID( $curid );
} else {
	$wgTitle = Title::newFromURL( $title );
}
wfProfileOut( "main-misc-setup" );

# If the user is not logged in, the Namespace:title of the article must be in the Read array in
#  order for the user to see it.
if ( !$wgUser->getID() && is_array( $wgWhitelistRead ) && $wgTitle) {
	if ( !in_array( $wgLang->getNsText( $wgTitle->getNamespace() ) . ":" . $wgTitle->getDBkey(), $wgWhitelistRead ) ) {
		$wgOut->loginToUse();
		$wgOut->output();
		exit;
	}
}

if ( $search = $wgRequest->getText( 'search' ) ) {
	$wgTitle = Title::makeTitle( NS_SPECIAL, "Search" );
	if( $wgRequest->getVal( 'fulltext' ) ) {
		wfSearch( $search );
	} else {
		wfGo( $search );
	}
} else if( !$wgTitle or $wgTitle->getDBkey() == "" ) {
	$wgTitle = Title::newFromText( wfMsg( "badtitle" ) );
	$wgOut->errorpage( "badtitle", "badtitletext" );
} else if ( $wgTitle->getInterwiki() != "" ) {
	$url = $wgTitle->getFullURL();
	# Check for a redirect loop
	if ( !preg_match( "/^" . preg_quote( $wgServer ) . "/", $url ) && $wgTitle->isLocal() ) {
		$wgOut->redirect( $url );
	} else {
		$wgTitle = Title::newFromText( wfMsg( "badtitle" ) );
		$wgOut->errorpage( "badtitle", "badtitletext" );
	}
} else if ( ( $action == "view" ) && $wgTitle->getPrefixedDBKey() != $title ) {
	/* redirect to canonical url, make it a 301 to allow caching */
	$wgOut->redirect( $wgTitle->getFullURL(), '301');
} else if ( Namespace::getSpecial() == $wgTitle->getNamespace() ) {
	wfSpecialPage();
} else {
	if ( Namespace::getMedia() == $wgTitle->getNamespace() ) {
		$wgTitle = Title::makeTitle( Namespace::getImage(), $wgTitle->getDBkey() );
	}

	switch( $wgTitle->getNamespace() ) {
	case NS_IMAGE:
		include_once( "ImagePage.php" );
		$wgArticle = new ImagePage( $wgTitle );
		break;
	default:
		$wgArticle = new Article( $wgTitle );
	}

	wfQuery("BEGIN", DB_WRITE);
	switch( $action ) {
		case "view":
			$wgOut->setSquidMaxage( $wgSquidMaxage );
			$wgArticle->view();
			break;
		case "watch":
		case "unwatch":
		case "delete":
		case "revert":
		case "rollback":
		case "protect":
		case "unprotect":
			$wgArticle->$action();
			break;
		case "print":
			$wgArticle->view();
			break;
		case "dublincore":
			if( !$wgEnableDublinCoreRdf ) {
				wfHttpError( 403, "Forbidden", wfMsg( "nodublincore" ) );
			} else {
				include_once( "Metadata.php" );
				wfDublinCoreRdf( $wgArticle );
			}
			break;
		case "creativecommons":
			if( !$wgEnableCreativeCommonsRdf ) {
				wfHttpError( 403, "Forbidden", wfMsg("nocreativecommons") );
			} else {
				include_once( "Metadata.php" );
				wfCreativeCommonsRdf( $wgArticle );
			}
			break;
		case "edit":
		case "submit":
			if( !$wgCommandLineMode && !$wgRequest->checkSessionCookie() ) {
				User::SetupSession();
			}
			include_once( "EditPage.php" );
			$editor = new EditPage( $wgArticle );
			$editor->$action();
			break;
		case "history":
			if ($_SERVER["REQUEST_URI"] == $wgTitle->getInternalURL('action=history')) {
				$wgOut->setSquidMaxage( $wgSquidMaxage );
			}
			include_once( "PageHistory.php" );
			$history = new PageHistory( $wgArticle );
			$history->history();
			break;
		case "raw":
			include_once( "RawPage.php" );
			$raw = new RawPage( $wgArticle );
			$raw->view();
			break;
		case "purge":
			wfPurgeSquidServers(array($wgTitle->getInternalURL()));
			$wgOut->setSquidMaxage( $wgSquidMaxage );
			$wgArticle->view();
			break;
		default:
			$wgOut->errorpage( "nosuchaction", "nosuchactiontext" );
	}
	wfQuery("COMMIT", DB_WRITE);
}

$wgOut->output();

foreach ( $wgDeferredUpdateList as $up ) { $up->doUpdate(); }
logProfilingData();
wfDebug( "Request ended normally\n" );
?>
