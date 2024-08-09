<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The main class
 *
 * @since 1.4.4
 */
class WpGetApi_Api_Enqueues {


	/**
	 * Main constructor
	 *
	 * @since 1.4.4
	 *
	 */
	public function __construct() {

		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts_styles' ) );
	}

	/**
	 * Enqueue scripts and styles.
	 */
	public function admin_scripts_styles( $hook_suffix ) {

		$v = WPGETAPIVERSION;
		//$v = time();

		if ( isset( $hook_suffix ) && strpos( $hook_suffix, 'wpgetapi_' ) !== false ) {

			wp_enqueue_script( 'wpgetapi-script', WPGETAPIURL . 'assets/js/wpgetapi-admin.js', array( 'jquery' ), $v );
			wp_enqueue_script( 'jquery-ui-tooltip', '', array( 'jquery-ui-core', 'wpgetapi-script' ) );

			$js_translations = $this->wpgetapi_js_translations();
			wp_localize_script( 'wpgetapi-script', 'wpgetapi_translations', $js_translations );

		}

		wp_enqueue_style( 'wpgetapi-style', WPGETAPIURL . 'assets/css/wpgetapi-admin.css', false, $v );
	}

	/**
	 * Returns array of translations used in javascript code.
	 *
	 * @return array
	 */
	public function wpgetapi_js_translations() {
		return apply_filters(
			'wpgetapi_js_translations',
			array(
				'duplicate_button_text'       => __( 'Duplicate', 'wpgetapi' ),
				'test_endpoint_button_text'   => __( 'Test Endpoint', 'wpgetapi' ),
				'copied_text'                 => __( 'Copied', 'wpgetapi' ),
				'browser_not_support_message' => __( 'Oops! Your browser doesn\'t support this.', 'wpgetapi' ),
			)
		);
	}
}

return new WpGetApi_Api_Enqueues();
