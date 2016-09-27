<?php get_header(); ?>

<div class="header">
  <div class="container">
    <h1>the blog</h1>
  </div>
</div>

<section>
  <div class="container">

  <!-- primary column -->
  <div class="primary clear">
 
  		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article <?php post_class('post'); ?>>
                  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
                  <ul class="post-meta no-bullet">
                    <li class="author">
                        <span class="wpt-avatar small">
                          <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                        </span>
                        by <?php the_author_posts_link(); ?>                    
                    </li>
                    <li class="cat">in <?php the_category( ', ' ); ?></li>
                    <li class="date">on <?php the_time('F j, Y'); ?></li>
                  </ul>    
                  <?php if( get_the_post_thumbnail() ) : ?>
                  <div class="img-container">
                    <?php the_post_thumbnail('large'); ?>
                  </div>  
                  <?php endif; ?>          	
                </article>
      

  			<?php endwhile; else : ?>
  			
  			  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
  			
  			<?php endif; ?>
      
  </div><!-- end primary -->

  <!-- secondary column -->
  <div class="secondary clear">
    <?php get_sidebar(); ?>
  </div>


  </div>

  </section>

  <!-- clear -->
  <div class="clear"></div>




<?php get_footer(); ?>