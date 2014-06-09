<?php get_header(); ?>



<div class="row">
    <div class="grid_8 ">
       <h1 class="smlmargintop"><?php 
if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
else { _e( 'Archives', 'blankslate' ); }
?></h1>
       <hr />
      
       
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




  
          
                     <div class="row btmspace">
                        <!--<div class="grid_2">
                            <img src="http://placekitten.com/g/140/80">
                        </div>-->
                        <div class="grid_8">
                          <p class="smltitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <p class="smlcaption"><?php the_excerpt(); ?><span class="keywords"><?php the_tags(); ?></span></p>
                        </div>
                    </div>
        <hr />
        
             
                    


<?php endwhile; endif; ?>

 </div> 







<?php get_sidebar(); ?>
<?php get_footer(); ?>