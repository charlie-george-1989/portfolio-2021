<?php get_header(); ?>

<?php

$blogtime = current_time( 'mysql' );
list( $today_year, $today_month, $today_day, $hour, $minute, $second ) = preg_split( "([^0-9])", $blogtime );

?>

<!-- <p><?php echo "Month: " . $today_month . ". Hour: " . $hour; ?></p> -->

<?php $time = $hour ?>
<?php if ($time < 12): ?>
<?php endif; ?>

<?php if ($time > 21): ?>

<?php endif; ?>



<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <section id="content">
    <?php the_content(); ?>
  </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>
