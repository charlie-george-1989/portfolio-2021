<section class="post-content-container">
  <div class="post-content">
    <div class="wrapper">
      <?php if(has_post_thumbnail() && !get_field('hide_featured_image') ) {
        the_post_thumbnail('featured-image');
      } ?>
      <div class="content-wrapper">
        <?php the_content(); ?>
        <ul class="post-pagination">
          <?php if( get_previous_post_link() ) { ?>
            <li><?php previous_post_link( '%link', 'Previous', false ); ?></li>
          <?php }
          if( get_next_post_link() ) { ?>
            <li><?php next_post_link( '%link', 'Next', false ); ?></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>
