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

 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>