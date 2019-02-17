<?php

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'ROBOTICS_COMPANION_VERSION' ) ) {
    define( 'ROBOTICS_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'ROBOTICS_COMPANION_DIR_PATH' ) ) {
    define( 'ROBOTICS_COMPANION_DIR_PATH', ROBOTICS_DIR_PATH_COMPANION );
}

// Define inc dir path constant
if( ! defined( 'ROBOTICS_COMPANION_INC_DIR_PATH' ) ) {
    define( 'ROBOTICS_COMPANION_INC_DIR_PATH', ROBOTICS_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'ROBOTICS_COMPANION_SW_DIR_PATH' ) ) {
    define( 'ROBOTICS_COMPANION_SW_DIR_PATH', ROBOTICS_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'ROBOTICS_COMPANION_EW_DIR_PATH' ) ) {
    define( 'ROBOTICS_COMPANION_EW_DIR_PATH', ROBOTICS_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'ROBOTICS_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'ROBOTICS_COMPANION_DEMO_DIR_PATH', ROBOTICS_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define plugin dir url constant
if( ! defined( 'ROBOTICS_COMPANION_DIR_URL' ) ) {
    define( 'ROBOTICS_COMPANION_DIR_URL', ROBOTICS_DIR_URI . 'inc/robotics-companion/' );
}
// Define plugin dir elementor widgets assets url constant
if( ! defined( 'ROBOTICS_COMPANION_EL_ASS_DIR_URL' ) ) {
    define( 'ROBOTICS_COMPANION_EL_ASS_DIR_URL', ROBOTICS_DIR_URI . 'inc/robotics-companion/inc/elementor-widgets/assets/' );
}


require_once ROBOTICS_COMPANION_DIR_PATH . 'robotics-init.php';
