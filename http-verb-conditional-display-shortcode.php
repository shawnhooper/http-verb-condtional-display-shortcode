<?php
/*
Plugin Name: HTTP Verb Conditional Display Shortcode
Description: Allows you to conditionally display a block of content depending on the HTTP verb (GET, POST, etc) used to call the page.
Version: 1.0.3
Author: Shawn Hooper, Actionable
*/

class HTTPVerbShortcodePlugin {

	function __construct() {
		add_shortcode( 'http_post_only', array( $this, 'render_shortcode_post_only' ) );
		add_shortcode( 'http_get_only', array( $this, 'render_shortcode_get_only' ) );
	}
	
	function render_shortcode_get_only( $atts, $content = null ) {
		global $_post;

		if ( $_SERVER['REQUEST_METHOD'] === 'GET' ) {
		     return $content;
		}
		
		return '';
	}

	function render_shortcode_post_only( $atts, $content = null ) {
		global $_post;

		if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
		     return $content;
		}
		
		return '';
	}

}

$httpVerbShortcodePlugin = new HTTPVerbShortcodePlugin();
