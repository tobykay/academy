<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row">
    <div class="grid_8 ">
        <h1 class="entry-title smlmargintop"><?php the_title(); ?></h1> <hr style="margin-top:15px;"/>
       <p class="intro"><em>  <?php	echo  get_field('intro'); ?> </em>
            </p> <?php
 
if(get_field('main_image'))
{
	echo '<img src=' . get_field('main_image') . ' width="608px">';
}
 
?>
     
         
        
        
            <p  class="caption">
            
              <?php the_content(); ?></p>
      <span class="hide-mobile"> <br /><br />    </span> 
        
<hr class="hide-screen">
        
         </div>    
       
    
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>