<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require 'inc/dental-template-functions.php';
require 'inc/dental-template-hooks.php';
/* Agregando script y css
 *
 */

// wp_enqueue_style( 'style', get_stylesheet_uri());
// add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles');

// function script_alpine(){
//   wp_register_script( 'alpine', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js', [], false, true);
//   wp_enqueue_script( 'alpine' );
// }
// add_action( 'wp_enqueue_script', 'script_alpine' );


/**
 * Define Constants
 */
define( 'ORTHOCLEAN_THEME_VERSION', '0.1' );
define( 'ORTHOCLEAN_THEME_SETTINGS', 'astra-settings' );
define( 'ORTHOCLEAN_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ORTHOCLEAN_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );


// CSS principal y JS
function mecarox_scripts() {
  wp_enqueue_style( 'mecarox', get_stylesheet_uri() );
  wp_enqueue_script( 'mecarox', get_stylesheet_directory_uri().'/assets/js/script.js' );
  // remove_action( 'wp_head',  'last_script');
  // add_action( 'wp_footer',  'last_script', 10);
  
}
add_action( 'wp_enqueue_scripts', 'mecarox_scripts' );


// Load final script
function mecarox_last_script(){
  wp_enqueue_script( 'last_script', get_stylesheet_directory_uri().'/assets/js/last.js', $in_footer=true);
}
add_action( 'wp_footer', 'mecarox_last_script');


add_theme_support('widgets');
add_theme_support('post-thumbnails');
// add_theme_support( 'post-formats' );
add_theme_support( 'html' );
add_theme_support( 'custom-header' );

$defaults = array(
    'default-image'          => '',
    'width'                  => 100,
    'height'                 => 100,
    'flex-height'            => true,
    'flex-width'             => true,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => true,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

add_theme_support( 'automatic-feed-links' );


add_theme_support( 'custom-logo', array(
    'height'               => 100,
    'width'                => 400,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
) );

// function add_classes_on_li($classes, $item, $args){
//   $classes[] = 'test-class';
//   return $classes;
// }
// add_filter( 'nav_menu_css', 'add_classes_on_li',1,3 );


// Agrengando menus
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'first-menu' => __( 'Primer Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );


//filtro para los menus INCOMPLETO
//#####################################
// function filtro_clas_li($classes, $item, $args) {
//   if ($args->theme_location == 'first-menu'){
//     $classes[] = 
//   }
// }

/* Tailwind CSS */
define( 'BIIIRD_THEME_VERSION', '1.0.2' );

add_action( 'wp_enqueue_scripts', 'enqueue_function', 10 );
function enqueue_function() {
    $version = ( wp_get_environment_type() === 'development' ) ?time() : BIIIRD_THEME_VERSION;
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/main.css', $version, true );
}


// Agregando iconify-iconos
function iconos_glypcs(){
  wp_enqueue_script('js-file', get_template_directory_uri(). '/assets/js/iconify.min.js');
}
add_action('wp_enqueue_scripts', 'iconos_glypcs');


function splider_headers(){
  wp_enqueue_script( 'splider', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js');
  wp_enqueue_style( 'splider', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css');
  wp_enqueue_style( 'splider', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide-core.min.css');

}
add_action( 'wp_enqueue_scripts', 'splider_headers'); 


//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
