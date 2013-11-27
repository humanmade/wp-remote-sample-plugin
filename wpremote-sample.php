<?php
/*
Plugin Name: WP Remote Sample Plugin
Version: 0.2
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

	if ( ! is_object( $update_plugins ) )
			return $update_plugins;

	if ( ! isset( $update_plugins->response ) || ! is_array( $update_plugins->response ) )
		$update_plugins->response = array();

	// Do whatever you need to see if there's a new version of your plugin
	// Your response will need to look something like this:
	$update_plugins->response['wpremote-sample/wpremote-sample.php'] = (object)array(
			'slug'         => 'wpremote-sample',
			'new_version'  => '0.2',
			'url'          => 'https://github.com/humanmade/wp-remote-sample-plugin',
			'package'      => 'https://github.com/humanmade/wp-remote-sample-plugin/archive/0.2.zip',
		);


	return $update_plugins;
}