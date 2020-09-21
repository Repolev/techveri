<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'CONSULTANCY_THEME_DIR', get_template_directory() );
define( 'CONSULTANCY_THEME_URI', get_template_directory_uri() );
define( 'CONSULTANCY_CORE_PLUGIN', WP_PLUGIN_DIR.'/designthemes-core-features' );

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'CONSULTANCY_THEME_NAME', $themeData->get('Name'));
	define( 'CONSULTANCY_THEME_VERSION', $themeData->get('Version'));
endif;

/* ---------------------------------------------------------------------------
 * Loads Kirki
 * ---------------------------------------------------------------------------*/
require_once( CONSULTANCY_THEME_DIR .'/kirki/index.php' );

/* ---------------------------------------------------------------------------
 * Loads Codestar
 * ---------------------------------------------------------------------------*/
require_once CONSULTANCY_THEME_DIR .'/cs-framework/cs-framework.php';

define( 'CS_ACTIVE_TAXONOMY',   false );
define( 'CS_ACTIVE_SHORTCODE',  false );
define( 'CS_ACTIVE_CUSTOMIZE',  false );

/* ---------------------------------------------------------------------------
 * Create function to get theme options
 * --------------------------------------------------------------------------- */
function consultancy_cs_get_option($key, $value = '') {

	$v = cs_get_option( $key );

	if ( !empty( $v ) ) {
		return $v;
	} else {
		return $value;
	}
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'CONSULTANCY_LANG_DIR', CONSULTANCY_THEME_DIR. '/languages' );
load_theme_textdomain( 'consultancy', CONSULTANCY_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Style
 * ---------------------------------------------------------------------------*/
function consultancy_admin_scripts() {
	wp_enqueue_style('consultancy-admin', CONSULTANCY_THEME_URI .'/cs-framework-override/style.css');
}
add_action( 'admin_enqueue_scripts', 'consultancy_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( CONSULTANCY_THEME_DIR .'/framework/register-functions.php' );
require_once( CONSULTANCY_THEME_DIR .'/framework/utils.php' );

// Header -----------------------------------------------------------------------
require_once( CONSULTANCY_THEME_DIR .'/framework/register-head.php' );

// Menu -------------------------------------------------------------------------
require_once( CONSULTANCY_THEME_DIR .'/framework/register-menu.php' );
require_once( CONSULTANCY_THEME_DIR .'/framework/register-mega-menu.php' );

// Hooks ------------------------------------------------------------------------
require_once( CONSULTANCY_THEME_DIR .'/framework/register-hooks.php' );

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'consultancy_widgets_init' );
function consultancy_widgets_init() {
	require_once( CONSULTANCY_THEME_DIR .'/framework/register-widgets.php' );
}

// Plugins ---------------------------------------------------------------------- 
require_once( CONSULTANCY_THEME_DIR .'/framework/register-plugins.php' );

// WooCommerce ------------------------------------------------------------------
if( function_exists( 'is_woocommerce' ) ){
	require_once( CONSULTANCY_THEME_DIR .'/framework/register-woocommerce.php' );
}

// WP Store Locator -------------------------------------------------------------
if( class_exists( 'WP_Store_locator' ) ){
	require_once( CONSULTANCY_THEME_DIR .'/framework/register-storelocator.php' );
} 

// Register Gutenberg -----------------------------------------------------------
require_once( CONSULTANCY_THEME_DIR .'/framework/register-gutenberg-editor.php' );

?>