<?php
/**
 * Plugin Name:       Lemmony Companion
 * Description:       The Lemmony Companion is a companion plugin for the Lemmony theme. Adds additional block editor blocks needed for the best theme experience.
 * Version:           1.2
 * Requires at least: 6.0
 * Requires PHP:      7.0
 * Author:            Shufflehound
 * Author URI:        https://shufflehound.com
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       lemmony-companion
 */

// Global constants.
define( 'LEMMONY_COMPANION', true );
define( 'LEMMONY_COMPANION_VERSION', '1.2' );


// Load editor blocks
function lemmony_companion_icon_block_init() {
	// Counter block
	register_block_type( __DIR__ . '/blocks/counter' );

	// Icon block
	register_block_type( __DIR__ . '/blocks/icon' );

	// Post featured image caption block
	register_block_type( __DIR__ . '/blocks/post-featured-image-caption' );

	// Typing Text
	register_block_type( __DIR__ . '/blocks/typing-text' );

	$theme = wp_get_theme();
	if( $theme->Name && ( strpos( strtolower( $theme->Name ), 'lemmony') !== false ) &&
	defined( 'LEMMONY_THEME_VERSION' ) && version_compare( LEMMONY_THEME_VERSION, '1.1.2', '>=') ) :
		// Hero auto slider
		register_block_type( __DIR__ . '/blocks/hero-auto-slider', [
			'script' => 'splide',
			'style' => 'splide'
		]);

		// Accordion
		register_block_type( __DIR__ . '/blocks/accordion' );
	endif;
}
add_action( 'init', 'lemmony_companion_icon_block_init' );


// Load lemmony files
$theme = wp_get_theme();
if( is_admin() && $theme->Name && ( strpos( strtolower( $theme->Name ), 'lemmony') !== false ) ) :
	require dirname( __FILE__ ) . '/inc/dashboard.php';
	require dirname( __FILE__ ) . '/inc/import-content.php';
	require dirname( __FILE__ ) . '/inc/import.php';
endif;
if( !is_admin() ) :
	require dirname( __FILE__ ) . '/inc/blocks.php';
endif;