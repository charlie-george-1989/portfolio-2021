<!-- What's On section: Row -->

<?php $section_id = $args['section_id'] ?>
<?php $post_1 = $args['post_1'] ?>
<?php $post_2 = $args['post_2'] ?>

<div id="<?php echo $section_id ?>" class="row-section">

  <div class="wrapper">
    <div class="row">

      <div class="left-col">
        <a class="link" href="<?php echo get_the_permalink($post_1); ?>">
          <?php echo get_the_post_thumbnail($post_1); ?>
          <div class="title">
            <h3><?php echo get_the_title($post_1); ?></h3>
          </div>
        </a>
      </div>

      <div class="right-col">
        <a class="link" href="<?php echo get_the_permalink($post_2); ?>">
          <?php echo get_the_post_thumbnail($post_2); ?>
          <div class="title">
            <h3><?php echo get_the_title($post_2); ?></h3>
          </div>
        </a>
      </div>

    </div>
  </div>

</div>
