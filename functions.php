<?php 
/**
 * @Packge 	   : Robotics
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */
 
// Base URI
if( ! defined( 'ROBOTICS_DIR_URI' ) ) {
	define( 'ROBOTICS_DIR_URI', get_template_directory_uri().'/' );
}

// assets URI
if( ! defined( 'ROBOTICS_DIR_ASSETS_URI' ) ) {
	define( 'ROBOTICS_DIR_ASSETS_URI', ROBOTICS_DIR_URI.'assets/' );
}

// Css File URI
if( ! defined( 'ROBOTICS_DIR_CSS_URI' ) ) {
	define( 'ROBOTICS_DIR_CSS_URI', ROBOTICS_DIR_ASSETS_URI .'css/' );
}

// Js File URI
if( ! defined( 'ROBOTICS_DIR_JS_URI' ) ) {
	define( 'ROBOTICS_DIR_JS_URI', ROBOTICS_DIR_ASSETS_URI .'js/' );
}

// Base Directory
if( ! defined( 'ROBOTICS_DIR_PATH' ) ) {
	define( 'ROBOTICS_DIR_PATH', get_parent_theme_file_path().'/' );
}

//Inc Folder Directory
if( ! defined( 'ROBOTICS_DIR_PATH_INC' ) ) {
	define( 'ROBOTICS_DIR_PATH_INC', ROBOTICS_DIR_PATH.'inc/' );
}

//Robotics libraries Folder Directory
if( ! defined( 'ROBOTICS_DIR_PATH_LIBS' ) ) {
	define( 'ROBOTICS_DIR_PATH_LIBS', ROBOTICS_DIR_PATH_INC.'libraries/' );
}

//Classes Folder Directory
if( ! defined( 'ROBOTICS_DIR_PATH_CLASSES' ) ) {
	define( 'ROBOTICS_DIR_PATH_CLASSES', ROBOTICS_DIR_PATH_INC.'classes/' );
}

//Hooks Folder Directory
if( ! defined( 'ROBOTICS_DIR_PATH_HOOKS' ) ) {
	define( 'ROBOTICS_DIR_PATH_HOOKS', ROBOTICS_DIR_PATH_INC.'hooks/' );
}

//Widgets Folder Directory
if( ! defined( 'ROBOTICS_DIR_PATH_WIDGET' ) ) {
	define( 'ROBOTICS_DIR_PATH_WIDGET', ROBOTICS_DIR_PATH_INC.'widgets/' );
}

//Companion Folder Directory
if( ! defined( 'ROBOTICS_DIR_PATH_COMPANION' ) ) {
	define( 'ROBOTICS_DIR_PATH_COMPANION', ROBOTICS_DIR_PATH_INC.'robotics-companion/' );
}


// Admin Enqueue script
function robotics_admin_script(){
    wp_enqueue_style( 'robotics-admin', get_template_directory_uri().'/assets/css/robotics_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'robotics_admin', get_template_directory_uri().'/assets/js/robotics_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'robotics_admin_script' );


/**
 * Include File
 *
 */

require_once( ROBOTICS_DIR_PATH_INC . 'breadcrumbs.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'widgets-reg.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'robotics-functions.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'commoncss.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'support-functions.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( ROBOTICS_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( ROBOTICS_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( ROBOTICS_DIR_PATH_HOOKS . 'hooks.php' );
require_once( ROBOTICS_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( ROBOTICS_DIR_PATH_COMPANION . 'robotics-companion.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( ROBOTICS_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );

/**
 * Instantiate Robotics object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$obj = new Robotics();
