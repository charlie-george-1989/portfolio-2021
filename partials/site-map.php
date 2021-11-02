<section class="site-map-title-area">
  <div class="wrapper">
    <h1><?php _e('Site Map', 'brandasylum'); ?></h1>
  </div>
</section>
<section class="site-map">
  <div class="wrapper">
    <?php $args = array(
      'post_type' => 'page',
      'posts_per_page' => -1,
      'status' => 'published'
    );

    $pages_query = new WP_Query($args);
    if( $pages_query->have_posts() ) { ?>
      <h2>Pages</h2>
      <ul class="site-map-list">
      <?php while( $pages_query->have_posts() ) {
        $pages_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"/><?php the_title(); ?></a></li>
      <?php }
      wp_reset_postdata(); ?>
      </ul>
    <?php }
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'status' => 'published'
    );

    $pages_query = new WP_Query($args);
    if( $pages_query->have_posts() ) { ?>
      <h2>Posts</h2>
      <ul class="site-map-list">
      <?php while( $pages_query->have_posts() ) {
        $pages_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"/><?php the_title(); ?></a></li>
      <?php }
      wp_reset_postdata(); ?>
      </ul>
    <?php } ?>
  </div>
</section>
