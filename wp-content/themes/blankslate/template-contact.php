<?php
/*
Template Name: Contact
*/ get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>








<div class="row">
    <div class="grid_8 ">
        <h1 class="entry-title"><?php the_title(); ?></h1> 
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?><br /><br />
        <span class="infotext"><?php the_author(); ?><br /></span>
       <span class="infotextsml"> <?php the_date(); ?><br /><br /></span>
        
        
      
        
        
        <p class="intro"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mollis egestas ligula a ullamcorper. Curabitur vel neque et ipsum tincidunt imperdiet eget ut ipsum. </em>
            </p>
          
            <p  class="caption">
            
            <?php the_content(); ?>
 <br /><br />     
        
        
         </div>
    
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>