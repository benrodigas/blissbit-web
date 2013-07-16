<?php
    if ( ! function_exists( 'blissbit_content_nav' ) ) :
    /**
     * Displays navigation to next/previous pages when applicable.
     *
     * @since Twenty Twelve 1.0
     */
        function blissbit_content_nav( $html_id ) {
            global $wp_query;

            $html_id = esc_attr( $html_id );

            if ( $wp_query->max_num_pages > 1 ) : ?>
                <nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
                    <h2 class="assistive-text"><?php _e( 'Post Navigation', 'twentytwelve' ); ?></h2>
                    <div class="nav-previous alignleft"><?php next_posts_link( __( '<div class=""><span class="meta-nav">&larr;</span> Older Posts</div>', 'twentytwelve' ) ); ?></div>
                    <div class="nav-next alignright"><?php previous_posts_link( __( '<div class="">Newer Posts <span class="meta-nav">&rarr;</span></div>', 'twentytwelve' ) ); ?></div>
                </nav><!-- #<?php echo $html_id; ?> .navigation -->
            <?php endif;
        }
    endif;


    if ( ! function_exists( 'get_the_short_excerpt' ) ) :
        function get_the_short_excerpt($content) {
            global $post;

            $output = $content;
            
            // remove "Continue Reading"
            $output = substr(strip_tags($output), 0, -35);

            // trim to 250 chars
            $output = substr(strip_tags($output), 0, 250);
            
            return $output . '... <a href="'. get_permalink($post->ID) . '"> Continue Reading <span class="meta-nav">&rarr;</span></a>';

            //return $output . '... <a href="'. get_permalink($post->ID) . '"> Continue Reading <span class="meta-nav">&rarr;</span></a>'; 
        }
        
    endif;



    if ( ! function_exists( 'get_testimonials' ) ) :
        function get_testimonials($content) {
            
        }
        
    endif;



    if ( ! function_exists( 'get_banner_image_url' ) ) :
        function get_banner_image_url($id) {
            
            $output = "";
            $banner_image_url = get_post_meta($id, "banner_image_url", true);
            if ($banner_image_url != ''):
                $output = '<img src="'. $banner_image_url . '" alt="banner-image"/>';
            else:
                $output = '<img src="'. get_bloginfo( 'stylesheet_directory' ) .'/img/page_image/page_moveyourstuff.jpg" alt="banner-image"/>';  
            endif;

            return $output;
        }
        
    endif;









 
add_action( 'after_setup_theme', 'bootstrap_setup' );
 
if ( ! function_exists( 'bootstrap_setup' ) ):
 
    function bootstrap_setup(){
 
        add_action( 'init', 'register_menu' );
            
        function register_menu(){
            register_nav_menu( 'top-bar', 'Bootstrap Top Menu' ); 
        }
 
        class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
 
            
            function start_lvl( &$output, $depth ) {
 
                $indent = str_repeat( "\t", $depth );
                $output    .= "\n$indent<ul class=\"dropdown-menu\">\n";
                
            }
 
            function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
                
                $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
                $li_attributes = '';
                $class_names = $value = '';
 
                $classes = empty( $item->classes ) ? array() : (array) $item->classes;
                $classes[] = ($args->has_children) ? 'dropdown' : '';
                $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
                $classes[] = 'menu-item-' . $item->ID;
 
 
                $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
                $class_names = ' class="' . esc_attr( $class_names ) . '"';
 
                $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
                $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
                $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
 
                $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
                $attributes .= ($args->has_children)        ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
 
                $item_output = $args->before;
                $item_output .= '<a'. $attributes .'>';
                $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
                $item_output .= ($args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
                $item_output .= $args->after;
 
                $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
 
            function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
                
                if ( !$element )
                    return;
                
                $id_field = $this->db_fields['id'];
 
                //display this element
                if ( is_array( $args[0] ) ) 
                    $args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
                else if ( is_object( $args[0] ) ) 
                    $args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
                $cb_args = array_merge( array(&$output, $element, $depth), $args);
                call_user_func_array(array(&$this, 'start_el'), $cb_args);
 
                $id = $element->$id_field;
 
                // descend only when the depth is right and there are childrens for this element
                if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
 
                    foreach( $children_elements[ $id ] as $child ){
 
                        if ( !isset($newlevel) ) {
                            $newlevel = true;
                            //start the child delimiter
                            $cb_args = array_merge( array(&$output, $depth), $args);
                            call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
                        }
                        $this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
                    }
                        unset( $children_elements[ $id ] );
                }
 
                if ( isset($newlevel) && $newlevel ){
                    //end the child delimiter
                    $cb_args = array_merge( array(&$output, $depth), $args);
                    call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
                }
 
                //end this element
                $cb_args = array_merge( array(&$output, $element, $depth), $args);
                call_user_func_array(array(&$this, 'end_el'), $cb_args);
                
            }
            
        }
 
    }
 
endif;
?>
