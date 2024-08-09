<?php
if ( ! function_exists( 'celestium_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress
 * features.
 *
 * It is important to set up these functions before the init hook so
 * that none of these features are lost.
 *
 * @since celestium 1.0
 */

function celestium_setup() {
  // Add support for HTML5 tags
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

  // Add support for title tag
  add_theme_support( 'title-tag' );

  // Add support for post thumbnails
  add_theme_support( 'post-thumbnails' );

  // Add support for post formats
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Add support for block styles
  add_theme_support( 'wp-block-styles' );

  // Make theme available for translation.
  load_theme_textdomain( 'celestium' );
}
endif;  
add_action( 'after_setup_theme', 'celestium_setup' );

function celestium_enqueue_styles_and_scripts() {
	// Enqueue normalize.css
	wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0' );

  // Enqueue block.css
	wp_enqueue_style( 'celestium-blocks-style', get_template_directory_uri() . '/assets/css/block.css', array(), '1.0' );

	// Enqueue main stylesheet
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

  // The core GSAP library
	wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/assets/js/libs/gsap.min.js', array(), false, true );
	
	// ScrollTrigger - with gsap.js passed as a dependency
	wp_enqueue_script( 'gsap-st', get_template_directory_uri() . '/assets/js/libs/ScrollTrigger.min.js', array('gsap-js'), false, true );

  // Enqueue custom JavaScript
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true );

	// Enqueue custom JavaScript
	wp_enqueue_script( 'custom-animation-script', get_template_directory_uri() . '/assets/js/animations.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'celestium_enqueue_styles_and_scripts' );

// Enqueue core
require_once get_template_directory() . '/inc/core/init.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Upsell in the customizer
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Celestium_Upsell_Section extends WP_Customize_Section {
		public $type = 'celestium-upsell';
		public $button_text = '';
		public $url = '';
		public $background = '';
		public $text_color = '';
		protected function render() {
			$background = ! empty( $this->background ) ? esc_attr( $this->background ) : '#08142C';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="celestium_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

// Add Get Started
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function celestium_admin_notice() { 
	global $pagenow;
	$theme_args      = wp_get_theme();
	$meta            = get_option( 'celestium_admin_notice' );
	$name            = $theme_args->__get( 'Name' );
	$current_screen  = get_current_screen();

	if( !$meta ){
		if( is_network_admin() ){
				return;
		}

		if( ! current_user_can( 'manage_options' ) ){
				return;
		} if($current_screen->base != 'appearance_page_celestium-guide-page' ) { ?>

			<div class="notice notice-success is-dismissible">
				<p>⭐⭐⭐⭐⭐</p>
				<h1><?php esc_html_e('Thanks for choosing Celestium!', 'celestium'); ?></h1>
				<p>Unlock exclusive features, advanced customization options, and premium support to take your site to the next level. Get started today and experience the full potential of the <b>Celestium PRO</b>!</p>
				<div style="display: flex;">
				<p>
					<a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=celestium-guide-page' ) ); ?>"><?php esc_html_e('Get Started', 'celestium'); ?></a>
				</p>
				<p><a href="?celestium-dismissed" class="button button-secondary"><?php echo esc_html('Dismiss', 'celestium'); ?></a></p>
				</div>
		</div>
		<?php }?>
		<?php
	}
}

add_action( 'admin_notices', 'celestium_admin_notice' );

function celestium_notice_dismissed() {
	$user_id = get_current_user_id();
	if ( isset( $_GET['celestium-dismissed'] ) ) 
		update_option( 'celestium_admin_notice', true );
}
add_action( 'admin_init', 'celestium_notice_dismissed' );

if( ! function_exists( 'celestium_update_admin_notice' ) ) :
/**
* Updating admin notice on dismiss
*/
function celestium_update_admin_notice(){
	if ( isset( $_GET['celestium_admin_notice'] ) && $_GET['celestium_admin_notice'] = '1' ) {
		update_option( 'celestium_admin_notice', true );
	}
}
endif;
add_action( 'admin_init', 'celestium_update_admin_notice' );

// After switch theme function
add_action('after_switch_theme', 'celestium_getstart_setup_options');
function celestium_getstart_setup_options () {
	update_option('celestium_admin_notice', FALSE );
}

// Theme credit link
define('CELESTIUM_BUY_NOW',__('https://effethemes.com/themes/celestium-wordpress-theme/','celestium'));
define('CELESTIUM_PRO_DEMO',__('https://preview.effethemes.site/celestium-wordpress-theme/','celestium'));
define('CELESTIUM_REVIEW',__('https://wordpress.org/support/theme/celestium/reviews/#new-post','celestium'));
define('CELESTIUM_SUPPORT',__('https://wordpress.org/support/theme/celestium','celestium'));