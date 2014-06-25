<?php
/*
Template Name: Learning overview
*/ get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop">Learning Materials</h1>
      <p><?php the_content(); ?></p>
       <hr />
      
       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




  
          
                     <div class="row btmspace">
                
                        <div class="grid_8">
                         
                          
                         <div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('thumbnail1'); ?>" width="190px " class="hide-mobile">
                           
                           
                               <img src="<?php get_field('thumbnail1'); ?>" width="100%"  class="hide-screen">
                           
                           </div> <div class="grid_5">
                          <p class="smltitle"><?php the_field('title1'); ?></a></p>        
                <p class="smlcaption"><?php the_field('description1'); ?></p>
                          <p><a href="<?php the_field('materialsurl1'); ?>">Go to materials...</a></p>
                       
                       
                       </div>
                       
                       </div>
                         <hr />
      
      
      
      
      
      <div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('thumbnail2'); ?>" width="190px" class="hide-mobile">
                <img src="<?php get_field('thumbnail2'); ?>" width="100%"  class="hide-screen">
        </div> <div class="grid_5">
                          <p class="smltitle"><?php the_field('title2'); ?></a></p>        
                <p class="smlcaption"><?php the_field('description2'); ?></p>
                          <p><a href="<?php the_field('materialsurl2'); ?>">Go to materials...</a></p>
                       
                       
                       </div>
                       
                       </div>
                         <hr />
      


<div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('thumbnail3'); ?>" width="190px" class="hide-mobile">
          <img src="<?php get_field('thumbnail3'); ?>" width="100%"  class="hide-screen"></div> <div class="grid_5">
                          <p class="smltitle"><?php the_field('title3'); ?></a></p>        
                <p class="smlcaption"><?php the_field('description3'); ?></p>
                          <p><a href="<?php the_field('materialsurl3'); ?>">Go to materials...</a></p>
                       
                       
                       </div>
                       
                       </div>
                         <hr />
      


<div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('thumbnail4'); ?>" width="190px" class="hide-mobile">
          <img src="<?php get_field('thumbnail4'); ?>" width="100%"  class="hide-screen"></div> <div class="grid_5">
                          <p class="smltitle"><?php the_field('title4'); ?></a></p>        
                <p class="smlcaption"><?php the_field('description4'); ?></p>
                          <p><a href="<?php the_field('materialsurl4'); ?>">Go to materials...</a></p>
                       
                       
                       </div>
                       
                       </div>
                         <hr />
      


<div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('thumbnail5'); ?>" width="190px" class="hide-mobile">
          <img src="<?php get_field('thumbnail5'); ?>" width="100%"  class="hide-screen"></div> <div class="grid_5">
                          <p class="smltitle"><?php the_field('title5'); ?></a></p>        
                <p class="smlcaption"><?php the_field('description5'); ?></p>
                          <p><a href="<?php the_field('materialsurl5'); ?>">Go to materials...</a></p>
                       
                       
                       </div>
                       
                       </div>
                         <hr />
      
      


<div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('thumbnail6'); ?>" width="190px" class="hide-mobile">
          <img src="<?php get_field('thumbnail6'); ?>" width="100%"  class="hide-screen"></div> <div class="grid_5">
                          <p class="smltitle"><?php the_field('title6'); ?></a></p>        
                <p class="smlcaption"><?php the_field('description6'); ?></p>
                          <p><a href="<?php the_field('materialsurl6'); ?>">Go to materials...</a></p>
                       
                       
                       </div>
                       
                       </div>
                         <hr />
      




<div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('thumbnail7'); ?>" width="190px" class="hide-mobile">
          <img src="<?php get_field('thumbnail7'); ?>" width="100%"  class="hide-screen"></div> <div class="grid_5">
                          <p class="smltitle"><?php the_field('title7'); ?></a></p>        
                <p class="smlcaption"><?php the_field('description7'); ?></p>
                          <p><a href="<?php the_field('materialsurl7'); ?>">Go to materials...</a></p>
                       
                       
                       </div>
                       
                       </div>
                         <hr />
      




<div class="row"> 
                           <div class="grid_3"><img src="<?php the_field('thumbnail8'); ?>" width="190px" class="hide-mobile">
          <img src="<?php get_field('thumbnail8'); ?>" width="100%"  class="hide-screen"></div> <div class="grid_5">
                          <p class="smltitle"><?php the_field('title8'); ?></a></p>        
                <p class="smlcaption"><?php the_field('description8'); ?></p>
                          <p><a href="<?php the_field('materialsurl8'); ?>">Go to materials...</a></p>
                       
                       
                       </div>
                       
                       </div>
                         <hr />
      




      
      
      
      
      
      
      
      
      
      
      
      
                    </div>










</div>
   
        
             
                    


<?php endwhile; endif; ?>
<?php wp_pagenavi(); ?>
 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>