

    <p class="meta"><small><?php echo get_the_date(); ?> • <?php the_author_nickname(); ?> <!--• <?php the_category(', '); ?>--></small></p>



    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>

    <!--<p><a href="<?php the_permalink(); ?>" class="btn btn-mini">Continue Reading</a></p>-->




        


    
