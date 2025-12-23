<?php
use PHPUnit\Framework\TestCase;
use Brain\Monkey;
use Brain\Monkey\Functions;

class HelperFunctionsTest extends TestCase {

	protected function setUp(): void {
		parent::setUp();
		Monkey\setUp();
	}

	protected function tearDown(): void {
		Monkey\tearDown();
		parent::tearDown();
	}

	public function test_sanitize_custom_field() {
		// Mock WordPress function
		$input    = '<b>Hello</b> World';
		$expected = 'Hello World';

		Functions\expect( 'wp_strip_all_tags' )
			->once()
			->with( $input )
			->andReturn( $expected );

		$result = MyAwesome\Plugin\Helpers::sanitize_custom_field( $input );

		$this->assertEquals( $expected, $result );
	}

	public function test_mocked_wordpress_function() {
		// Mock WordPress functions when needed
		Functions\when( 'get_option' )->justReturn( 'test_value' );

		$option = get_option( 'my_setting' );
		$this->assertSame( 'test_value', $option );
	}
}
