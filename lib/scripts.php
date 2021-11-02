<?php add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'main', esc_html( get_stylesheet_directory_uri() ) . '/build/js/script-min.js', ['jquery'], 1, true );

	wp_enqueue_style( 'main', add_query_arg( array( 'v' => 1 ), get_stylesheet_uri() ) );
});

function cg_editor_script_enqueue() {
  wp_enqueue_script(
    'CG > Editor > JS',
    get_template_directory_uri() . '/build/js/editor-script-min.js',
		['jquery'],
		1,
		true
  );
}
add_action( 'enqueue_block_editor_assets', 'cg_editor_script_enqueue' );

add_action( 'wp_head', 'cg_load_google_font' );

function cg_load_google_font() {
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
