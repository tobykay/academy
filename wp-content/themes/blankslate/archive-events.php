<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop">Events</h1>
      <p>Keep up-to-date with the latest events in Public Affairs.</p>
       <hr />
      
       
<?php

/**
 * The logic for displaying a collection gallery
 */

wp_reset_postdata();
global $post;

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$my_items = array(
    'post_type' => 'events',
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
                         
                          
                         <div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('thumbnail'); ?>" width="190px" class="hide-mobile">
                           
                           <img src="<?php the_field('thumbnail'); ?>" width="100%"  class="hide-screen">
                           
                           
                           </div> <div class="grid_5">
                          <p class="smltitle"><?php the_title(); ?></a></p>
                           
                                         <p class="smlcaption"><?php
 
$dateformatstring = "l d F, Y";
$unixtimestamp = strtotime(get_field('start_date'));
 
echo date_i18n($dateformatstring, $unixtimestamp);
 
                                              ?></p>
                           
                      
                <p class="smlcaption"><?php the_excerpt(); ?></p>
                          <p><a href="<?php the_field('eventurl'); ?>" target="_blank">Find out more...</a></p>
                       
                       
                       </div>
                       
                       </div>
                       
                       
                       
                       
                    </div> </div>
        <hr />
        
             
                    


<?php endwhile; endif; ?>
<?php if ($my_postlist) : wp_reset_query(); wp_pagenavi( array( 'query' => $my_postlist) ); wp_reset_postdata(); endif; ?>

 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>