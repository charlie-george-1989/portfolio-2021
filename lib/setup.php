<?php if( ! function_exists( 'cg_theme_support' ) ) {
	function cg_theme_support () {
		$supports = array(
			'post-thumbnails',
		);
		foreach ($supports as $support) {
			add_theme_support( $support );
		}
	}

	add_action( 'init', 'cg_theme_support' );
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

if ( !function_exists( 'cg_register_widgets' ) ) {
	function cg_register_widgets () {
		register_sidebar( array(
				'name'          => __( 'Footer Widget Area', 'charlie-george' ),
				'id'            => 'footer-widgets',
				'class'         => 'footer-widgets',
				'description'   => __( 'Widgets in this area will be shown in the footer.', 'charlie-george' ),
				'before_title'	=> '<h3>',
				'after_title'		=> '</h3>',
		) );
	}

	add_action( 'widgets_init', 'cg_register_widgets' );
}

add_theme_support( 'editor-styles' );
add_editor_style();
