<?php
/*
Template Name: Contact
*/ get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>








<div class="row">
    <div class="grid_8 ">
        <h1 class="entry-title smlmargintop"><?php the_title(); ?></h1> <hr style="margin-top:15px;"/>
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>       
      
        
        
    
            </p>
          
            <p  class="caption">
            
            <?php the_content(); ?>
 <br /><br />     
        
        
         </div>
    
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>