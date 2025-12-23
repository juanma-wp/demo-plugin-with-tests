<?php
/**
 * Bootstrap file for integration tests
 *
 * This bootstrap loads the WordPress test suite which provides:
 * - Full WordPress environment
 * - Database setup/teardown
 * - WordPress core functions
 */

// Path to WordPress tests directory
$_tests_dir = getenv( 'WP_TESTS_DIR' );

if ( ! $_tests_dir ) {
    // Default to wp-env location
    $_tests_dir = '/wordpress-phpunit';
}

if ( ! file_exists( $_tests_dir . '/includes/functions.php' ) ) {
    echo "Could not find $_tests_dir/includes/functions.php\n";
    echo "Run: npm install && npm run wp-env start\n";
    exit( 1 );
}

// Give access to tests_add_filter() function
require_once $_tests_dir . '/includes/functions.php';

/**
 * Manually load the plugin being tested
 */
function _manually_load_plugin() {
    require dirname( dirname( __FILE__ ) ) . '/my-awesome-plugin.php';
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

// Start up the WP testing environment
require $_tests_dir . '/includes/bootstrap.php';
