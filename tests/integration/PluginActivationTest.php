<?php
/**
 * Integration test example
 * Tests that require WordPress environment
 */

class PluginActivationTest extends WP_UnitTestCase {

    public function test_plugin_is_loaded() {
        // Test that our helper class exists
        $this->assertTrue( class_exists( 'MyAwesome\Plugin\Helpers' ) );
    }

    public function test_wordpress_functions_work() {
        // Test with real WordPress functions
        $option_name = 'my_test_option';
        $option_value = 'test_value';

        update_option( $option_name, $option_value );
        $result = get_option( $option_name );

        $this->assertSame( $option_value, $result );
    }

    public function test_sanitize_custom_field_with_wordpress() {
        // Test our helper with WordPress environment
        $input = '<b>Hello</b> World';
        $expected = 'Hello World';

        $result = MyAwesome\Plugin\Helpers::sanitize_custom_field( $input );

        $this->assertEquals( $expected, $result );
    }
}
