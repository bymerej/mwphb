module( 'mediawiki.util.js' );

test( '-- Initial check', function(){

	ok( mw.util, 'mw.util defined' );

});

test( 'rawurlencode', function(){

	equals( mw.util.rawurlencode( 'Test:A & B/Here' ), 'Test%3AA%20%26%20B%2FHere' );

});

test( 'wikiUrlencode', function(){

	equals( mw.util.wikiUrlencode( 'Test:A & B/Here' ), 'Test:A_%26_B/Here' );

});

test( 'addCSS', function(){

	var a = mw.util.addCSS( '#bodyContent { visibility: hidden; }' );
	ok(  a, 'function works' );
	same( a.disabled, false, 'property "disabled" is available and set to false' );
	
	var $b = $('#bodyContent');
	equals( $b.css('visibility'), 'hidden', 'Added style properties are in effect.' );
	

});

test( 'toggleToc', function(){

	ok( mw.util.toggleToc );

});

test( 'wikiGetlink', function(){

	// Not part of startUp module
	mw.config.set( 'wgArticlePath', '/wiki/$1' );

	var hrefA = mw.util.wikiGetlink( 'Sandbox' );
	
	equals( hrefA, '/wiki/Sandbox', 'Simple title; Get link for "Sandbox"' );

	var hrefB = mw.util.wikiGetlink( 'Foo:Sandbox ? 5+5=10 ! (test)/subpage' );
	
	equals( hrefB, '/wiki/Foo:Sandbox_%3F_5%2B5%3D10_%21_%28test%29/subpage', 'Advanced title; Get link for "Foo:Sandbox ? 5+5=10 ! (test)/subpage"' );

});

test( 'getParamValue', function(){

	var url = 'http://mediawiki.org/?foo=wrong&foo=right#&foo=bad';

	equal( mw.util.getParamValue( 'foo', url ), 'right', 'Use latest one, ignore hash' );
	deepEqual( mw.util.getParamValue( 'bar', url ), null, 'Return null when not found' );

});

test( 'getActionFrom', function(){

	// Example urls
	var	urlA = 'http://mediawiki.org/wiki/Article',
		urlB = 'http://mediawiki.org/w/index.php?title=Article&action=edit',
		urlC = 'http://mediawiki.org/edit/Article',
		urlD = 'http://mediawiki.org/w/index.php/Article';

	// Common settings
	mw.config.set( {
		'wgActionPaths': [],
		'wgArticlePath': '/wiki/$1'
	});

	equal( mw.util.getActionFrom( urlA ), 'view', 'wgArticlePath (/wiki/$1) support' );
	equal( mw.util.getActionFrom( urlB ), 'edit', 'action-parameter support' );

	// Custom settings
	mw.config.set( 'wgActionPaths', {
		'view': '/view/$1',
		'edit': '/edit/$1'
	});

	equal( mw.util.getActionFrom( urlC ), 'edit', 'wgActionPaths support' );

	// Default settings
	mw.config.set( {
		'wgActionPaths': [],
		'wgArticlePath': '/w/index.php/$1' 
	});
	equal( mw.util.getActionFrom( urlD ), 'view', 'wgArticlePath (/index.php/$1) support' );

});

test( 'getTitleFrom', function(){

	// Example urls
	var	urlA = 'http://mediawiki.org/wiki/Article',
		urlB = 'http://mediawiki.org/w/index.php?title=Article&action=edit',
		urlC = 'http://mediawiki.org/edit/Article',
		urlD = 'http://mediawiki.org/w/index.php/Article';

	// Common settings
	mw.config.set( {
		'wgActionPaths': [],
		'wgArticlePath': '/wiki/$1'
	});

	equal( mw.util.getTitleFrom( urlA ), 'Article', 'wgArticlePath (/wiki/$1) support' );
	equal( mw.util.getTitleFrom( urlB ), 'Article', 'action-parameter support' );

	// Custom settings
	mw.config.set( 'wgActionPaths', {
		'view': '/view/$1',
		'edit': '/edit/$1'
	});

	equal( mw.util.getTitleFrom( urlC ), 'Article', 'wgActionPaths support' );

	// Default settings
	mw.config.set( {
		'wgActionPaths': [],
		'wgArticlePath': '/w/index.php/$1' 
	});

	equal( mw.util.getTitleFrom( urlD ), 'Article', 'wgArticlePath (/index.php/$1) support' );

});

test( 'tooltipAccessKey', function(){

	equals( typeof mw.util.tooltipAccessKeyPrefix, 'string', 'mw.util.tooltipAccessKeyPrefix must be a string' );
	ok( mw.util.tooltipAccessKeyRegexp instanceof RegExp, 'mw.util.tooltipAccessKeyRegexp instance of RegExp' );
	ok( mw.util.updateTooltipAccessKeys, 'mw.util.updateTooltipAccessKeys' );

});

test( '$content', function(){

	ok( mw.util.$content instanceof jQuery, 'mw.util.$content instance of jQuery' );
	same( mw.util.$content.length, 1, 'mw.util.$content must have length of 1' );

});

test( 'addPortletLink', function(){

	var a = mw.util.addPortletLink( 'p-tb', 'http://mediawiki.org/wiki/ResourceLoader', 'ResourceLoader', 't-rl', 'More info about ResourceLoader on MediaWiki.org ', 'l', '#t-specialpages' );
	
	ok( $.isDomElement(a), 'addPortletLink returns a DomElement' );
	
	var b = mw.util.addPortletLink( "p-tb", "http://mediawiki.org/", "MediaWiki.org", "t-mworg", "Go to MediaWiki.org ", "m", "#t-rl" );
	
	equals( $(a).text(), 'ResourceLoader', 'Link contains correct text' );
	equals( $(b).next().text(), 'ResourceLoader', 'Link was inserted in correct nextnode position' );

});

test( 'jsMessage', function(){

	var a = mw.util.jsMessage( "MediaWiki is <b>Awesome</b>." );

	ok( a, 'Basic return value checking' );

});

test( 'validateEmail', function(){

	same( mw.util.validateEmail( "" ), null, 'Empty string should return null' );
	same( mw.util.validateEmail( "user@localhost" ), true );

	// testEmailWithCommasAreInvalids
	same( mw.util.validateEmail( "user,foo@example.org" ), false, 'Comma' );
	same( mw.util.validateEmail( "userfoo@ex,ample.org" ), false, 'Comma' );

	// testEmailWithHyphens
	same( mw.util.validateEmail( "user-foo@example.org" ), true, 'Hyphen' );
	same( mw.util.validateEmail( "userfoo@ex-ample.org" ), true, 'Hyphen' );

});

test( 'isIPv6Address', function(){

	// Based on IPTest.php > IPv6
	same( mw.util.isIPv6Address( "" ), false, 'Empty string is not an IP' );
	same( mw.util.isIPv6Address( ":fc:100::" ), false, 'IPv6 starting with lone ":"' );
	same( mw.util.isIPv6Address( "fc:100::" ), true );
	same( mw.util.isIPv6Address( "fc:100:a:d:1:e:ac::" ), true );
	same( mw.util.isIPv6Address( ":::" ), false );
	same( mw.util.isIPv6Address( "::0:" ), false );

});

test( 'isIPv4Address', function(){

	// Based on IPTest.php > IPv4
	same( mw.util.isIPv4Address( "" ), false, 'Empty string is not an IP' );
	same( mw.util.isIPv4Address( "...." ), false );
	same( mw.util.isIPv4Address( "1.24.52.13" ), true );

});
