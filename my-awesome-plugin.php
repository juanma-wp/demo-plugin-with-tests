<?php
/**
 * Plugin Name: My Awesome Plugin
 * Plugin URI: https://juanma.codes
 * Description: A minimal WordPress plugin showcasing unit and integration testing setup
 * Version: 1.0.0
 * Author: Juan Manuel Garrido
 * Author URI: https://juanma.codes
 * License: GPL v2 or later
 * Text Domain: my-awesome-plugin
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Require Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Initialize plugin
add_action( 'init', function() {
    // Plugin initialization code
} );
