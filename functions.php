<?php
$siteurl = get_option('siteurl');
$themeurl = $siteurl.'/wp-content/themes/'.get_option('template');

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'admin/ot-loader.php' );
include_once('panel/theme-options.php');

if ( ! function_exists( 'phalmina_setup' ) ) :

	//adding css
	function phalmina_setup() {

		load_theme_textdomain( 'phalmina', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 825, 510, true );

		register_nav_menus( array(
			'header-menu' => __( 'Header Nav', 'Menu di Header' ),
			'footer-menu'  => __( 'Footer Nav', 'Menu di Footer' ),
			) );

		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			) );

		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
			) );

	// $color_scheme  = phalmina_get_color_scheme();
	// $default_color = trim( $color_scheme[0], '#' );

		add_theme_support( 'custom-background', apply_filters( 'phalmina_custom_background_args', array(
			'default-color'      => $default_color,
			'default-attachment' => 'fixed',
			) ) );

		add_editor_style( array( 'css/editor-style.css' ) );
	}
endif; // phalmina_setup
add_action( 'after_setup_theme', 'phalmina_setup' );

// widget initialize here
// function phalmina_widgets_init() {
// 	if (function_exists('register_sidebar')) {
// 		register_sidebar( array(
// 			'name'          => __( 'Widget Slider', 'phalmina' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => __( 'Add widgets here to appear in your sidebar.', 'phalmina' ),
// 			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</aside>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 			));
// 	}
// }
// add_action( 'widgets_init', 'phalmina_widgets_init' );

function phalmina_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.2' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.0' );

	// Load our main stylesheet.
	wp_enqueue_style( 'phalmina-style', get_stylesheet_uri() );

	if(!is_admin()){
		wp_deregister_script('jquery' );
		wp_register_script('jquery',get_template_directory_uri() . '/js/jquery-1.11.2.min.js', false, '1.11.2', true);
		wp_enqueue_script('jquery');
	}

	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.2', true );

}
add_action( 'wp_enqueue_scripts', 'phalmina_scripts' );

// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );
}


// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );
?>