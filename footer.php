</div>
</main>
<footer>
  <div class="site-footer-container">
    <div class="wrapper">
      <div class="site-footer">
        <?php if ( is_active_sidebar( 'footer-widgets' ) ) { ?>
          <ul class="footer-widgets">
            <?php dynamic_sidebar('footer-widgets'); ?>
          </ul>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="sub-footer-container">
    <div class="wrapper">
      <div class="sub-footer">
        <p>&copy; <?php echo bloginfo( 'name' ) . " " . date('Y') ?></p>
      </div>
    </div>
  </div>
</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
