<?php get_header(); ?>


<div class="container">


<?php while ( have_posts() ) : the_post(); ?>



      <div class="content">

        <h1 class="entry-title"><?php the_title(); ?></h1>

        <?php the_content(); ?>

        <?php edit_post_link( __( 'Edit', 'blissbit' ), '<span class="edit-link">', '</span>' ); ?>

      </div><!-- /.content -->




            
            

              
              
              
              

         
<?php endwhile; // end of the loop. ?>




<?php get_footer(); ?>


      
