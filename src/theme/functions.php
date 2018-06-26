<?php
//Load Styles
function datafutbol_load_styles() {
  wp_register_style('style', get_stylesheet_uri());
  wp_enqueue_style( 'style');
  wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
}
add_action( 'wp_enqueue_scripts', 'datafutbol_load_styles');

// Customize excerpt word count length
function custom_excerpt_length() {
	return 18;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );

/*
* Add custom logo support
*/
add_theme_support( 'custom-logo' );


//creacion de menus
function dataFutbol_menus(){
  register_nav_menus( array(
    'header-menu' => __('Header Menu', 'datafutbol'),
    'social-menu' => __('Social Menu', 'datafutbol'),
    'footer-menu' => __('Footer Menu', 'datafutbol')
  ));
}

add_action('init', 'dataFutbol_menus');