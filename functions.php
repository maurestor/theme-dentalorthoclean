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

/**
 * Define Constants
 */
define( 'ORTHOCLEAN_THEME_VERSION', '0.1' );
define( 'ORTHOCLEAN_THEME_SETTINGS', 'astra-settings' );
define( 'ORTHOCLEAN_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ORTHOCLEAN_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );



/**
 * Setup helper functions of Astra.
 */
require_once ORTHOCLEAN_THEME_DIR . 'inc/functions-extras.php';
