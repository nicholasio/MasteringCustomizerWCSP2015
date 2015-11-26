<?php
/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage Mastering Customizer
 */

define( 'MASTERING_CUSTOMIZER_VERSION', '1.0' );
define( 'MASTERING_CUSTOMIZER_URL',  get_stylesheet_directory_uri() );
define( 'MASTERING_CUSTOMIZER_TEMPLATE_URL', get_template_directory_uri() );
define( 'MASTERING_CUSTOMIZER_PATH', get_template_directory() . '/' );
define( 'MASTERING_CUSTOMIZER_INC', MASTERING_CUSTOMIZER_PATH . 'includes/' );

// Core functions and set up
require_once MASTERING_CUSTOMIZER_INC . 'core.php';

// Include the customizer functionality
require_once MASTERING_CUSTOMIZER_INC . 'customizer.php';

// Include custom control
require_once MASTERING_CUSTOMIZER_INC . 'custom-control.php';
