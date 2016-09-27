<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70671436-1', 'auto');
  ga('send', 'pageview');
</script>

  </head>
  <body <?php  body_class(); ?>>
    <header class="main no-max pad clear">
      <a class="logo" href="<?php bloginfo('url'); ?>"><span><?php bloginfo('name'); ?></span></a>
      <nav>

          <?php 

          $defaults = array(
            'container' => false,
            'theme_location'  => 'primary-menu',
            'menu_class'  => 'no-bullet'
          );

          wp_nav_menu( $defaults );

          ?>

      </nav>
        <a id="trigger-overlay" class="nav-button">Menu</a>
        <div class="overlay overlay-menu">
        <button type="button" class="overlay-close">Close</button>
          <nav>

            <?php 

            $defaults = array(
              'container' => false,
              'theme_location'  => 'primary-menu',
              'menu_class'  => 'no-bullet'
            );

            wp_nav_menu( $defaults );

            ?>

          </nav>
          <script src="<?php bloginfo('template_directory'); ?>/assets/js/overlay.js"></script>
        </div>
    </header>