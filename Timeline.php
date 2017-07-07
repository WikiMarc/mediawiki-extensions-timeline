<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'timeline' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Timeline'] = __DIR__ . '/i18n';
/*	wfWarn(
		'Deprecated PHP entry point used for Timeline extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
*/
	return;
} else {
	die( 'This version of the Timeline extension requires MediaWiki 1.28+' );
}
