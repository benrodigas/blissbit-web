




<?php get_header(); ?>



      <div class="container">

       <section id="blog-post">
			<div class="big-box">


          	<?php while ( have_posts() ) : the_post(); ?>
            
    			<?php get_template_part( 'content-single', get_post_format() ); ?>

    			<hr>
    			<?php comments_template( '', true ); ?>

    		<?php endwhile; // end of the loop. ?>
            
            		

          </div>
        </section>
       


<?php get_footer(); ?>