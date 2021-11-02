<html <?php language_attributes(); ?>>
  <head>
    <meta name="theme-color" content="#111111">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <?php wp_body_open(); ?>
    <header class="site-header-container">
      <div class="wrapper">
        <div class="site-header">
          <div class="site-logo-container">
            <a class="site-logo" href="<?php echo get_home_url(); ?>">
              <div class="logo">
                <?php echo file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ) ?>
              </div>
              <div class="logo-bg">
                <?php echo file_get_contents( get_template_directory() . '/assets/svg/logo-bg.svg' ) ?>
              </div>
            </a>
          </div>
          <div class="site-menu-toggle-container">
            <button class="menu-button"><span class="v-hidden"><?php _e( 'Toggle Navigation', 'charlie-george' ); ?></span><span class="material-icons">menu</span></button>
          </div>
          <nav class="site-nav">
            <?php if ( has_nav_menu( 'primary' ) ) {
              $primary_args = array(
                'theme_location'  => 'primary',
                'menu_class'      => 'primary',
                'container'       => false,
                'walker' => new CG_Mobile_Nav_Walker()
              );
              wp_nav_menu( $primary_args );
            } ?>
          </nav>
      </div>
    </header>
    <main>
      <div class="wrapper">
