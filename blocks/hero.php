<?php

/**
* Block Name: Hero

* @param   array $block The block settings and attributes.
* @param   string $content The block inner HTML (empty).
* @param   bool $is_preview True during AJAX preview.
* @param   int|string $post_id The post ID this block is saved to.
* @param   object $config is where we load the block fields;
*/

$id = 'cg-hero-' . $block['id'];

$classes = false;
if( isset( $block['className'] ) ) {
  $classes = $block['className'];
}

$config = (object) [
  'background_type' => get_field( 'background_type' ),
  'background_colour' => get_field( 'background_colour' ),
  'background_image' => get_field( 'background_image' ),
  'title' => get_field( 'title' ),
  'introduction' => get_field( 'introduction' ),
  'text_colour' => get_field( 'text_colour' )
];

if ( $config->background_type == "colour" ) {
  $background_style = "background-color: " . $config->background_colour . ';';
} else {
  $background_style = "background: url(" . $config->background_image['url'] . ') center center no-repeat; background-size: cover;';
}

?>

<section id="<?php echo $id ?>" class="hero-section full-bleed <?php echo $classes ?>" style="<?php echo $background_style; ?>">

  <style>
    .hero-section {
      --text--colour: <?php echo $config->text_colour; ?>;
    }
  </style>

  <div class="wrapper">
    <div class="container">
      <h1 class="heading"><?php echo $config->title ?></h1>
      <p class="body"><?php echo $config->introduction ?></p>
    </div>
  </div>

</section>
