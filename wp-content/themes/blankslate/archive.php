<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop"><?php 
if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
else { _e( 'Archives', 'blankslate' ); }
?></h1>
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
                        <!--<div class="grid_2">
                            <img src="http://placekitten.com/g/140/80">
                        </div>-->
                        <div class="grid_8">
                          <p class="smltitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <p class="smlcaption"><?php the_excerpt(); ?><span class="keywords"><?php the_tags(); ?></span></p>
                        </div>
                    </div>
        <hr />
        
             
                    


<?php endwhile; endif; ?>
<?php if ($my_postlist) : wp_reset_query(); wp_pagenavi( array( 'query' => $my_postlist) ); wp_reset_postdata(); endif; ?>
 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>