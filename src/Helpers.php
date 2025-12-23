<?php
namespace MyAwesome\Plugin;

class Helpers {
	public static function sanitize_custom_field( string $input ): string {
		return wp_strip_all_tags( $input );
	}
}
