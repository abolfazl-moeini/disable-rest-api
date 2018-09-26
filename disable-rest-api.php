<?php
/*
Plugin Name: Disable REST API
Plugin URI: #
Description: 
Author: Moeini
Author URI: #
Version: 1.0.0
*/

function _disable_rest_api() {

	if(! class_exists('WP_REST_Server_Disable')) {
		require dirname(__FILE__) . '/rest-server.php';
	}

	return 'WP_REST_Server_Disable';
}

add_filter('wp_rest_server_class', '_disable_rest_api', PHP_INT_MAX);
