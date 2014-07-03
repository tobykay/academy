<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop">Learning Materials</h1>
      <p>This section of the Academy provides learning materials and articles on a wide range of topics, including lobbying, public affairs and the regulation of the industry. </p>
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
                
                        <div class="grid_8">
                          <p class="smltitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <p class="smlcaption"><?php the_excerpt(); ?><span class="keywords"><?php the_tags(); ?></span></p>
                          <p><a href="<?php the_field('download'); ?>" target="_blank">Download</a></p>
                        </div>
                    </div>
        <hr />
        
             
                    


<?php endwhile; endif; ?>
<?php
if ($my_postlist) : wp_reset_query(); wp_pagenavi( array( 'query' => $my_postlist) ); wp_reset_postdata(); endif; ?>

 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>