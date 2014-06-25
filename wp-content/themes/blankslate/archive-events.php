<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop">Events</h1>
      <p>Keep up-to-date with the latest events in Public Affairs.</p>
       <hr />
      
       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




  
          
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
<?php wp_pagenavi(); ?>
 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>