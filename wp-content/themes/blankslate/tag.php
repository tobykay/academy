<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h2><?php _e( 'Learning materials for: ', 'blankslate' ); ?><?php single_tag_title(); ?></h2>
       <hr />
      
       
<?php

/**
 * The logic for displaying a collection gallery
 */

wp_reset_postdata();
global $post;

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$my_items = array(
    'post_type' => 'learning-materials',
    'numberposts' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page'   => 10,
    'paged' => $paged
);

$my_postlist = new WP_Query( $my_items );

if($my_postlist->have_posts()) : while($my_postlist->have_posts()) : $my_postlist->the_post();
?>


  
          
                     <div class="row btmspace">
                        <!--<div class="grid_2">
                            <img src="http://placekitten.com/g/140/80">
                        </div>-->
                        <div class="grid_8">
                          <p class="smltitle"><?php the_title(); ?></p>
                          
                <p class="smlcaption"><?php the_excerpt(); ?><span class="keywords"><?php the_tags(); ?></span></p>
                           <p><a href="<?php the_field('download'); ?>" target="_blank">Download here</a></p>
                        </div>
                    </div>
        <hr />
        
             
                    


<?php endwhile; endif; ?>
<?php
if ($my_postlist) : wp_reset_query(); wp_pagenavi( array( 'query' => $my_postlist) ); wp_reset_postdata(); endif; ?>
 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>