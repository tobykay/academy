<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h2><?php _e( 'Learning materials for: ', 'blankslate' ); ?><?php single_tag_title(); ?></h2>
       <hr />
      
       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




  
          
                     <div class="row btmspace">
                        <!--<div class="grid_2">
                            <img src="http://placekitten.com/g/140/80">
                        </div>-->
                        <div class="grid_8">
                          <p class="smltitle"><?php the_title(); ?></p>
                          
                <p class="smlcaption"><?php the_excerpt(); ?></span></p>
                           <p><a href="<?php the_field('download'); ?>" target="_blank">Download here</a></p>
                        </div>
                    </div>
        <hr />
        
             
                    


<?php endwhile; endif; ?>
<div class="navigation">
	<?php
	// Bring $wp_query into the scope of the function
	global $wp_query;

	// Backup the original property value
	$backup_page_total = $wp_query->max_num_pages;

	// Copy the custom query property to the $wp_query object
	$wp_query->max_num_pages = $loop->max_num_pages;
	?>

	<!-- now show the paging links -->
	<div class="alignleft"><?php previous_posts_link('Previous Entries'); ?></div>
	<div class="alignright"><?php next_posts_link('Next Entries'); ?></div>

	<?php
	// Finally restore the $wp_query property to it's original value
	$wp_query->max_num_pages = $backup_page_total;
	?>
</div>
 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>