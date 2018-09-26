<?php 

class WP_REST_Server_Disable extends WP_REST_Server {

	public function serve_request( $path = null ) {

		$content_type = isset( $_GET['_jsonp'] ) ? 'application/javascript' : 'application/json';
		$this->send_header( 'Content-Type', $content_type . '; charset=' . get_option( 'blog_charset' ) );

		echo $this->json_error('invalid-request','REST API has been disabled.');
	}
}
