<?php
/*
Plugin Name: Lies, lies, and More Lies
Version: 1.0
Plugin URI: https://github.com/tryonegg/tech-lies
Author: Tryon Eggleston
Description: This plugin attempts to trick detection scripts about what technology the site is running.
*/

add_filter(
	'wp_headers',
	function ( $headers ) {
		// Drip, drip, drop.
		$headers['x-generator'] = 'Drupal 111';

		//Let's be Node.js, that's popular.
		$headers['X-Powered-By'] = 'Express';

		// Are we Tumbler, or are we content?
		$headers['X-Tumblr-User'] = 'null';

		// Sprinkle in some ASP.net.
		$headers['X-AspNet-Version'] = 'null';

		return $headers;
	}
);

add_filter(
	'wp_head',
	function () {
		// Be all the CMSs!
		echo '<meta name="generator" content="Joomla!">';
		echo '<meta name="generator" content="TYPO3">';
		echo '<meta name="generator" content="Blogger">';
		echo '<meta name="generator" content="PHP-Nuke">';
		echo '<meta name="generator" content="Movable Type">';

		// Dreamweaver.
		echo '<!-- #BeginTemplate "/Templates/templateName.dwt" -->';

		// No No we make our pages in FrontPage.
		echo '<meta name="generator" content="Microsoft FrontPage 1.0">';

		//Let's say we use IIS.
		echo '<meta name="generator" content="Rock v1">';
	}
);

add_filter(
	'wp_footer',
	function () {
		// Cold Fusion, classic!
		echo "<!-- START headerTags.cfm -->";
	}
);
