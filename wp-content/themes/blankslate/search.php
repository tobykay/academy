<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
       <hr />
      
       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




  
          
                     <div class="row btmspace">
                        <!--<div class="grid_2">
                            <img src="http://placekitten.com/g/140/80">
                        </div>-->
                        <div class="grid_8">
                          
                
 
                          

                          
    


                          
         
                  
      
                          
                          
                          
                          
                <?php

if ( 'learning-materials' == get_post_type() ) { ?>  

  <p class="smltitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <p class="smlcaption"><?php the_excerpt(); ?></span></p>
                          <p><a href="<?php the_field('download'); ?>" target="_blank">Download</a></p>

  <?php } elseif ( 'events' == get_post_type() ) { ?>  
                       
      <p class="smltitle"><?php the_title(); ?></a></p>
                           
                                         <p class="smlcaption"><?php
 
$dateformatstring = "l d F, Y";
$unixtimestamp = strtotime(get_field('start_date'));
 
echo date_i18n($dateformatstring, $unixtimestamp);
 
                                              ?></p>
                           
                      
                <p class="smlcaption"><?php the_excerpt(); ?></p>
                          <p><a href="<?php the_field('eventurl'); ?>" target="_blank">Find out more...</a></p>                   
      <?php } else { ?>  
                       
     <p class="smltitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <p class="smlcaption"><?php the_excerpt(); ?><span class="keywords"><?php the_tags(); ?></span></p>                     
                    
               

 <?php  } ?>          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                        </div>
                    </div>
        <hr />
        
             
                    


<?php endwhile; endif; ?>

 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>