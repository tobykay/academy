<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop">Articles</h1>
      <p>Interel is at the heart of a global partnership of independent public affairs consultancies spanning some 43 countries and over 1000 consultants.  This section of the Academy provides first hand insight and local expertise in public affairs in these global markets.</p>
       <hr />
      
       


<?php

/**
 * The logic for displaying a collection gallery
 */

wp_reset_postdata();
global $post;

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$my_items = array(
    'post_type' => 'article',
    'numberposts' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page'   => 2,
    'paged' => $paged
);

$my_postlist = new WP_Query( $my_items );

if($my_postlist->have_posts()) : while($my_postlist->have_posts()) : $my_postlist->the_post();
?>
  
          
                     <div class="row btmspace">
                 
                        <div class="grid_8">
                         
                          
                         <div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('main_image'); ?>" width="190px"></div> <div class="grid_5">
                          <p class="smltitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <p class="smlcaption"><?php the_excerpt(); ?></p>
                          <p><span class="keywords"><?php the_tags(); ?></span></p>
                       
                       
                       </div>
                       
                       </div>
                       
                       
                       
                       
                    </div> </div>
        <hr />
        
             
                    


<?php endwhile; endif; ?>
<?php if ($my_postlist) : wp_reset_query(); wp_pagenavi( array( 'query' => $my_postlist) ); wp_reset_postdata(); endif; ?>

 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>