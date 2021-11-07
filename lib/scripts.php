<?php add_action( 'wp_enqueue_scripts', function() {

	// Global
	wp_enqueue_script( 'main', esc_html( get_stylesheet_directory_uri() ) . '/build/js/script-min.js', ['jquery'], 1, true );
	wp_enqueue_style( 'main', add_query_arg( array( 'v' => 1 ), get_stylesheet_uri() ) );

	// Google Map API script
	wp_enqueue_script( 'googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyCIa9uw8b1TWINJZHaz5hPRwLdAsJ8fIe8', NULL, 1, true );

	// Carousel CDN
	wp_register_script( 'slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery']);
	wp_register_style( 'slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

});

// Admin Scripts
add_action( 'enqueue_block_editor_assets', function() {
  wp_enqueue_script(
    'TEB > Editor > JS',
    get_template_directory_uri() . '/build/js/editor-script-min.js',
		['jquery'],
		1,
		true
  );
});

// Custom Admin Styles
function te_custom_admin_style() {

	// General
	wp_register_style( 'editor-style-css', get_template_directory_uri() . '/build/css/admin/editor-style-min.css', false, '1.0.0' );
	wp_enqueue_style( 'editor-style-css' );
	wp_register_style( 'typography-css', get_template_directory_uri() . '/build/css/common/typography-min.css', false, '1.0.0' );
	wp_enqueue_style( 'typography-css' );

	// WP blocks
	wp_register_style( 'button-css', get_template_directory_uri() . '/build/css/wp-blocks/button-min.css', false, '1.0.0' );
  wp_enqueue_style( 'button-css' );

	// ACF Blocks
	wp_register_style( 'rows-css', get_template_directory_uri() . '/build/css/blocks/hero-min.css', false, '1.0.0' );
	wp_enqueue_style( 'rows-css' );
	wp_register_style( 'hero-css', get_template_directory_uri() . '/build/css/blocks/rows-min.css', false, '1.0.0' );
	wp_enqueue_style( 'hero-css' );

}
add_action( 'admin_enqueue_scripts', 'te_custom_admin_style' );

add_action( 'wp_head', 'te_load_google_font' );

function te_load_google_font() {
	$google_fonts_url = 'https://fonts.googleapis.com/css2?family=Cinzel&family=Lato:wght@100;300;400;700&display=swap';
	$material_font_url = 'https://fonts.googleapis.com/icon?family=Material+Icons'; ?>

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="preload" as="style" href="<?php echo $google_fonts_url; ?>" />
	<link rel="stylesheet" href="<?php echo $google_fonts_url; ?>" media="print" onload="this.media='all'" />
	<link rel="preload" as="style" href="<?php echo $material_font_url; ?>" />
	<link rel="stylesheet" href="<?php echo $material_font_url; ?>" media="print" onload="this.media='all'" />
	<noscript>
		<link rel="stylesheet" href="<?php echo $google_fonts_url; ?>" />
		<link rel="stylesheet" href="<?php echo $material_font_url; ?>" />
	</noscript>
<?php }
