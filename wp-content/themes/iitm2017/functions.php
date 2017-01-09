<?php

// Register Custom Content Types
require_once('includes/register-slider.php');
require_once('includes/register-quickfact.php');
require_once('includes/register-eventdates.php');
require_once('includes/register-eventreports.php');
require_once('includes/register-partners.php');

// Register Main Menu
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Add Styles And Scripts To The Theme
function add_css_js() {
wp_enqueue_style( 'materialize', get_template_directory_uri() . '/css/materialize.min.css', false, NULL, 'all' );
wp_enqueue_style( 'owl', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.css', false, NULL, 'all' );
wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/libs/owl-carousel/owl.theme.css', false, NULL, 'all' );
wp_enqueue_style( 'owl-transition', get_template_directory_uri() . '/libs/owl-carousel/owl.transitions.css', false, NULL, 'all' );	
wp_enqueue_style( 'megamenu', get_template_directory_uri() . '../uploads/maxmegamenu/style.css', false, NULL, 'all' );
wp_enqueue_style( 'style', get_stylesheet_uri() );	
wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', false, NULL, 'all' );

wp_enqueue_script('materialize',get_template_directory_uri() .'/js/materialize.min.js', array('jquery'), false, true);
wp_enqueue_script('owl',get_template_directory_uri() .'/libs/owl-carousel/owl.carousel.min.js', array('jquery'), false, true);
wp_enqueue_script('fontawesome','https://use.fontawesome.com/50f7d4f33c.js', array(), false, true);	
}
add_action( 'wp_enqueue_scripts', 'add_css_js' );

//Making jQuery to load from Google Library
function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery');

// Enable Widget Areas
function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Widget Sidebar', 'wpb' ),
		'id' => 'widget-sidebar',
		'description' => __( 'The sidebar at the bottom of regular pages', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	}

add_action( 'widgets_init', 'wpb_widgets_init' );

?>