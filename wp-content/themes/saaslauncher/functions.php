<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'SAASLAUNCHER_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'SAASLAUNCHER_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
define( 'SAASLAUNCHER_DIR', trailingslashit( get_template_directory() ) );
define( 'SAASLAUNCHER_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'saaslauncher_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function saaslauncher_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		// Removing default patterns.
		remove_theme_support( 'core-block-patterns' );
		load_theme_textdomain( 'saaslauncher', get_template_directory() );
	}

endif;
add_action( 'after_setup_theme', 'saaslauncher_support' );

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'saaslauncher_styles' ) ) :
	function saaslauncher_styles() {
		// registering style for theme
		wp_enqueue_style( 'saaslauncher-style', get_stylesheet_uri(), array(), SAASLAUNCHER_VERSION );
		wp_enqueue_style( 'saaslauncher-aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), SAASLAUNCHER_VERSION );
		if ( is_rtl() ) {
			wp_enqueue_style(
				'saaslauncher-rtl-css',
				get_template_directory_uri() . '/assets/css/rtl.css',
				array(),
				SAASLAUNCHER_VERSION
			);
		}
		wp_enqueue_script( 'saaslauncher-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), SAASLAUNCHER_VERSION, true );
		wp_enqueue_script( 'saaslauncher-scripts', get_template_directory_uri() . '/assets/js/saaslauncher-scripts.js', array( 'jquery' ), SAASLAUNCHER_VERSION, true );
	}
endif;

add_action( 'wp_enqueue_scripts', 'saaslauncher_styles' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function saaslauncher_block_assets() {
	wp_enqueue_style( 'saaslauncher-swiper-bundle-editor-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), SAASLAUNCHER_VERSION );
	wp_enqueue_style( 'saaslauncher-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), SAASLAUNCHER_VERSION );
	wp_enqueue_script( 'saaslauncher-swiper-bundle-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), SAASLAUNCHER_VERSION, true );
}
add_action( 'enqueue_block_assets', 'saaslauncher_block_assets' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

if ( ! function_exists( 'saaslauncher_excerpt_more_postfix' ) ) {
	function saaslauncher_excerpt_more_postfix( $more ) {
		if ( is_admin() ) {
			return $more;
		}
		return '...';
	}
	add_filter( 'excerpt_more', 'saaslauncher_excerpt_more_postfix' );
}
function saaslauncher_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'saaslauncher_add_woocommerce_support' );

function saaslauncher_premium_access() {
	$status = false;

	if ( function_exists( 'cozy_addons_premium_access' ) ) {
		$status = cozy_addons_premium_access();
	}

	return $status;
}

function saaslauncher_is_plugin_installed( $plugin_slug ) {
	$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
	return file_exists( $plugin_path );
}
function saaslauncher_is_plugin_activated( $plugin_slug ) {
	return is_plugin_active( $plugin_slug );
}

/* Admin init */
if ( is_admin() ) {
	require_once SAASLAUNCHER_DIR . 'admin/class-admin.php';
	SaasLauncher_Admin::get_instance();
}
