<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row">
    <div class="grid_8 ">
        <h1 class="entry-title smlmargintop"><?php the_title(); ?></h1> 
       <?php
 
if(get_field('main_image'))
{
	echo '<img src=' . get_field('main_image') . ' width="608px">';
}
 
?><br /><br />
     
         
        
        <p class="intro"><em>  <?php	echo  get_field('intro'); ?> </em>
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
        

        
         </div>    
       
    
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>