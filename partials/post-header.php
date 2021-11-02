<section class="title-area">
  <div class="wrapper">
    <?php $categories = wp_get_post_categories(get_the_ID()); ?>
    <p class="post-date"><?php echo the_time( 'F Y' ); ?></p>
    <?php the_title('<h1>', '</h1>'); ?>
    <ul class="entry-meta">
      <?php foreach( $categories as $category ) { ?>
        <li><?php echo get_cat_name($category); ?></li>
      <?php } ?>
    </ul>
  </div>
</section
