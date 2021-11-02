<?php if( !function_exists( 'cg_image_sizes' ) ) {
	function cg_image_sizes() {
		$image_sizes = array(
			'featured-image' => array( 1920, 1080, true ),
		);

		foreach ( $image_sizes as $name => $data ) {
			add_image_size( $name, $data[0], $data[1], $data[2] );
			add_image_size( $name . '-double', floor( $data[0] * 2 ), floor( $data[1] * 2 ), $data[2] );
			add_image_size( $name . '-half', floor( $data[0] / 2 ), floor( $data[1] / 2 ), $data[2] );
		}
	}

	add_action( 'init', 'cg_image_sizes' );
}

if( !function_exists( 'cg_image_options' ) ) {
	function cg_image_options( $sizes ) {
		global $_wp_additional_image_sizes;

		if ( empty( $_wp_additional_image_sizes ) ) {
			return $sizes;
		}

		foreach ( $_wp_additional_image_sizes as $id => $data ) {
			if ( ! isset( $sizes[ $id ] ) ) {
				$sizes[ $id ] = ucfirst( str_replace( '-', ' ', $id ) );
			}
		}

		return $sizes;
	}

	add_filter( 'image_size_names_choose', 'cg_image_options') ;
}
