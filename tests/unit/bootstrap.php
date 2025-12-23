<?php
// Require Composer autoloader for unit tests
$autoload_path = dirname(__DIR__, 2) . '/vendor/autoload.php';
if ( ! file_exists( $autoload_path ) ) {
    throw new Exception( 'Composer autoloader not found. Run "composer install" first.' );
}
require $autoload_path;
