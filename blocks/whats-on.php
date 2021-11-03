<?php

/**
* Block Name: Whats On

* @param   array $block The block settings and attributes.
* @param   string $content The block inner HTML (empty).
* @param   bool $is_preview True during AJAX preview.
* @param   int|string $post_id The post ID this block is saved to.
* @param   object $config is where we load the block fields;
*/

$id = 'cg-whats-on-' . $block['id'];

$classes = false;
if( isset( $block['className'] ) ) {
  $classes = $block['className'];
}

$whats_on_row = get_field('whats_on_row');
$i = 1;

?>

<section id="<?php echo $id ?>" class="whats-on-section full-bleed <?php echo $classes ?>">

  <?php foreach($whats_on_row as $row): ?>
  <?php $section_id = $id . '_' . 'section' . '_' . $i; ?>
  <?php $post_1 = $row['post_1']; ?>
  <?php $post_2 = $row['post_2']; ?>

    <!-- These variables will be passed to the partial -->
    <?php $args = array(
      'section_id' => $section_id,
      'post_1' => $post_1,
      'post_2' => $post_2,
    ); ?>

    <?php get_template_part( 'blocks/partials/row', null, $args); ?>

  <?php $i++; ?>
  <?php endforeach; ?>

</section>
