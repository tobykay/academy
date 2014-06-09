<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>








<div class="row">
    <div class="grid_8 ">
        <h1 class="smlmargintop"><?php the_title(); ?></h1> 
      <hr />
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?><br /><br />

       <span class="infotextsml"> <?php the_date(); ?><br /><br /></span>
        
        
      
        
        
        <p class="intro"><em><?php	echo  get_field('intro'); ?></em>
            </p> <div class="hide-mobile">
        <?php
 
if(get_field('pullquote'))
{  ?>
  
  
  <div class="pullquote">  
    
 <?php	echo  get_field('pullquote'); ?>

      </div>
     <?php } ?>
  </div>
          
            <p  class="caption">
            
              <?php the_content(); ?></p>
 <br /><br />     
        
       <?php comment_form(); ?>
         </div>
    
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>