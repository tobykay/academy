<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop">Articles</h1>
      <p>Interel is at the heart of a global partnership of independent public affairs consultancies spanning some 43 countries and over 1000 consultants.  This section of the Academy provides first hand insight and local expertise in public affairs in these global markets.</p>
       <hr />
      
       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




  
          
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

 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>