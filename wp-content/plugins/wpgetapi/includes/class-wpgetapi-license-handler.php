<?php

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Wpgetapi_License_Handler Class
 */
class Wpgetapi_License_Handler {

	/**
	 * Main constructor
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->hooks();
	}

	/**
	 * Hooks
	 * @since  1.0.0
	 */
	public function hooks() {
		add_action( 'admin_menu', array( $this, 'license_menu' ) );
		add_action( 'admin_notices', array( $this, 'admin_notices' ) );
	}

	/**
	 * Checks if our extensions are installed
	 *
	 */
	public function has_extension() {

		if ( is_plugin_active( 'wpgetapi-woocommerce/wpgetapi-woocommerce.php' ) ||
			is_plugin_active( 'wpgetapi-post-import/wpgetapi-post-import.php' ) ||
			is_plugin_active( 'wpgetapi-api-importer/wpgetapi-api-importer.php' ) ||
			is_plugin_active( 'wpgetapi-oauth/wpgetapi-oauth.php' ) ||
			is_plugin_active( 'wpgetapi-extras/wpgetapi-extras.php' )
		) {
			return true;
		}
	}


	/**
	 * Adds the plugin license page to the admin menu.
	 *
	 * @return void
	 */
	public function license_menu() {

		add_submenu_page(
			'wpgetapi_setup',
			__( 'Plugin Licenses' ),
			__( 'Licenses' ),
			'manage_options',
			WPGETAPILICENSEPAGE,
			array( $this, 'license_page' )
		);
	}


	public function license_page() {

		add_settings_section(
			'wpgetapi_licenses_section',
			'',
			array( $this, 'license_key_settings_section' ),
			WPGETAPILICENSEPAGE
		);

		?>
		<div class="wrap">
			<h2><?php esc_html_e( 'WPGetAPI Extension Licenses' ); ?></h2>
			<form method="post" action="options.php">

				<?php
				do_settings_sections( WPGETAPILICENSEPAGE );
				settings_fields( 'wpgetapi_licenses_section' );

				// only show save button if extensions installed
				if ( $this->has_extension() ) {
					submit_button();
				}

				?>

			</form>
		<?php
	}


	/**
	 * Adds content to the settings section.
	 *
	 * @return void
	 */
	public function license_key_settings_section() {

		?>
			<div class="intro">
				<p>License fields will appear here if you have purchased any of our premium plugin extensions.<br>Enter your license keys to receive updates for your premium plugins.</p>
				<p><a class="button button-primary" target="_blank" href="https://wpgetapi.com/">View Premium Extensions</a></p>
			</div>

		<?php
	}


	/**
	 * This is a means of catching errors from the activation method above and displaying it to the customer
	 */
	public function admin_notices() {
		if ( isset( $_GET['sl_activation'] ) && ! empty( $_GET['message'] ) ) {

			switch ( $_GET['sl_activation'] ) {

				case 'false':
					$message = urldecode( $_GET['message'] );
					?>
					<div class="error">
						<p><?php echo wp_kses_post( $message ); ?></p>
					</div>
					<?php
					break;

				case 'true':
				default:
					?>
					<div class="error">
						<p>Activated successfully.</p>
					</div>
					<?php
					// Developers can put a custom success message here for when activation is successful if they way.
					break;

			}
		}
	}
}

return new Wpgetapi_License_Handler();

