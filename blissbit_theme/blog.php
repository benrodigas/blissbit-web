<?php
/*
Template Name: Blog
*/


get_header(); ?>




 <div class="container">
	<section id="blog-post">
		<div class="big-box">
          <?php while ( have_posts() ) : the_post(); ?>
              
                
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>

                <?php edit_post_link( __( 'Edit', 'blissbit' ), '<span class="edit-link">', '</span>' ); ?>
                <hr/>
                 
        <?php endwhile; // end of the loop. ?>





            
            		<?php
						$temp = $wp_query;
						$wp_query= null;
						$wp_query = new WP_Query();
						$wp_query->query('posts_per_page=10'.'&paged='.$paged);
					?>

					<?php if ( $wp_query->have_posts() ) : ?>
				

						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


							<?php get_template_part( 'content', "singlehome" ); ?>



						<?php endwhile; // end of the loop. ?>

						<hr>
						
						<?php blissbit_content_nav( 'nav-below' ); ?>

					<?php else : ?>

						<article id="post-0" class="post no-results not-found">
							<header class="entry-header">
								<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<p><?php _e( 'Apologies, but no results were found for the requested archive.', 'twentyeleven' ); ?></p>
							
							</div><!-- .entry-content -->
						</article><!-- #post-0 -->

                    <?php endif; ?>


			<?php $wp_query = $temp; ?>




			</div>
          </section>

      
     


<?php get_footer(); ?>