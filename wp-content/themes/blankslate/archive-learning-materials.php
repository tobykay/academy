<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop">Learning Materials</h1>
      <p>This section of the Academy provides learning materials and articles on a wide range of topics, including lobbying, public affairs and the regulation of the industry. </p>
       <hr />
      
       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




  
          
                     <div class="row btmspace">
                        <!--<div class="grid_2">
                            <img src="http://placekitten.com/g/140/80">
                        </div>-->
                        <div class="grid_8">
                          <p class="smltitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <p class="smlcaption"><?php the_excerpt(); ?><span class="keywords"><?php the_tags(); ?></span></p>
                          <p><a href="<?php the_field('download'); ?>" target="_blank">Download</a></p>
                        </div>
                    </div>
        <hr />
        
             
                    


<?php endwhile; endif; ?>

 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>