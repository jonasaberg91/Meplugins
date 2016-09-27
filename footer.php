<div class="clear"></div>
<footer class="no-max clear">
	<nav>
					
		<?php 

        $defaults = array(
        'container' => false,
        'theme_location'  => 'secondary-menu',
        'menu_class'  => 'no-bullet'
         );

        wp_nav_menu( $defaults );

    ?>

	</nav>
	<a class="logo" href="">Meplugins</a>
	<a class="twitter" href=""><span class="fa fa-twitter"></span></a>
</footer>
  <?php wp_footer(); ?>
  </body>
</html>