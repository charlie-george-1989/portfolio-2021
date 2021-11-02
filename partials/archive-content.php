<?php if( have_posts() ) { ?>
  <section class="blog-roll">
    <?php while( have_posts() ) {
      the_post(); ?>
      <article>
        <a class="archive-link" href="<?php the_permalink(); ?>">
          <div class="blog-post">
            <div class="post-excerpt">
              <?php the_title('<h3>', '</h3>');
              the_excerpt(); ?>
              <p class="post-date"><?php echo get_the_date( 'F j Y' ); ?></p>
            </div>
          </div>
        </a>
      </article>
    <?php } ?>
  </section>
<?php }
