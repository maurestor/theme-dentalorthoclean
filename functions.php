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



// Carga el CSS principal del tema.
function orthoclean_enqueue_style() {
  wp_enqueue_style( 'orthoclean-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'orthoclean_enqueue_style' );


// Agregando script-miau
function miau_script(){
  wp_enqueue_script('script-miau', get_template_directory_uri(). '/assets/js/script.js');
  
}
add_action('wp_enqueue_scripts', 'miau_script');



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



function leaflet_map(){
  wp_enqueue_style( 'leaflet', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css');
}


// // Add specific CSS class by filter.

// add_filter( 'body_class', function( $classes ) {
//   return array_merge( $classes, array( 'container','my-0', 'm-auto') );
// } );

add_action('wp_head', 'custom_ajax_spinner', 1000 );
function custom_ajax_spinner() {
    ?>
    <style>
    .woocommerce .blockUI.blockOverlay:before,
    .woocommerce .loader:before {
        height: 3em;
        width: 3em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -.5em;
        margin-top: -.5em;
        display: block;
        content: "";
        -webkit-animation: none;
        -moz-animation: none;
        animation: none;
        background-image:url('<?php echo get_stylesheet_directory_uri() . "/img/my_spinner.gif"; ?>') !important;
        background-position: center center;
        background-size: cover;
        line-height: 1;
        text-align: center;
        font-size: 2em;
    }
    </style>
    <?php
}