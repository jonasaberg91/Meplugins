<?php get_header(); ?>

<section class="row no-max pad content-pad">
  <div class="primary">

    <div class="container">

		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <article class="post">                

                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <ul class="post-meta no-bullet">
                  <li class="cat">in <?php the_category( ', ' ); ?></li>
                  <li class="date">on <?php the_time('F j, Y'); ?></li>
                </ul>    
                <?php if( get_the_post_thumbnail() ) : ?>
                <div class="img-container">
                  <?php the_post_thumbnail('large'); ?>
                </div>  
                <?php endif; ?>   

                <?php the_content(); ?>

              </article>
     
			
			<?php endwhile; else : ?>
			
			  <p><?php _e( 'Sorry, no posts found.', 'meplugins' ); ?></p>
			
			<?php endif; ?>

      </div>
    
    </div><!-- container end -->

</section>





<?php get_footer(); ?>