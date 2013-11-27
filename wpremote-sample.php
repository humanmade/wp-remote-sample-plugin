<?php
/*
Plugin Name: WP Remote Sample Plugin
Version: 0.1
Description: Human Made's awesome plugin
Author: Human Made
Author URI: http://hmn.md/
Plugin URI: http://hmn.md/
Text Domain: wpremote-sample
Domain Path: /languages
*/

/**
 * Filter the `update_plugins` transient to report your plugin as out of date.
 */
add_filter( 'site_transient_update_plugins', 'wprp_extend_filter_update_plugins' );
add_filter( 'transient_update_plugins', 'wprp_extend_filter_update_plugins' );
function wprp_extend_filter_update_plugins( $update_plugins ) {

	error_log( var_export( $update_plugins, true ) );

	return $update_plugins;
}