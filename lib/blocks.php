<?php function cg_register_acf_block_types() {

  acf_register_block_type(array(
    'name'              => 'hero',
    'title'             => __('Hero', 'charlie-george'),
    'description'       => __('Hero Block', 'charlie-george'),
    'render_template'   => 'blocks/hero.php',
    'category'          => 'cg',
    'icon'              => 'cover-image',
    'mode'              => 'preview',
    'keywords'          => array( 'hero', 'cg', 'charlie-george' ),
    'enqueue_assets'    => function(){
      wp_enqueue_style( 'CG > Blocks > Hero > CSS', get_template_directory_uri() . '/build/css/hero-min.css' );
      // wp_enqueue_script( 'CG > Blocks > Gallery > CSS', get_template_directory_uri() . '/build/js/hero-min.js', array('jquery', 'slick-js'), '', true );
    },
    'supports'          => array(
      'mode'  => true,
      'align' => false,
    ),
  ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'cg_register_acf_block_types');
}
