<?php
/*
Template Name: Homepage
*/ get_header(); ?>

  








<div class="row">
    <div class="grid_8 ">
        <h1>Featured posts</h1>
        <?php echo do_shortcode("[huge_it_slider id='1']"); ?><br /><br />
      <!--  <div class="row">
            <div class="grid_4">
        <p class="caption"><?php echo substr(get_the_excerpt(), 0,130); ?>...<a href="<?php the_permalink(); ?>">Read more</a>.</p>
            </div> 
            <div class="grid_4">
              <p class="caption"><strong>Related tags:</strong></p>
                <p class="keywords"><?php the_tags(); ?></p>
            </div>
        </div>-->
        <div class="row">
            <div class="grid_4 twitter">
               
        <span class="twittertext"> <strong>Latest tweet</strong><br/><br/><?php if ( function_exists( "display_tweets" ) ) { display_tweets(); } ?>
</span>
            </div>
            <div class="grid_4 events">
        <center><h2>Upcoming events</h2>
                <hr />
          
        <?php  $query = new WP_Query(array(
    "post_type" => "events",
  'posts_per_page' => '1'
));
while ($query->have_posts()) : $query->the_post(); ?>

          
                <p><strong><?php the_title(); ?></strong><br />
                  
                  <?php
 
$dateformatstring = "l d F, Y";
$unixtimestamp = strtotime(get_field('start_date'));
 
echo date_i18n($dateformatstring, $unixtimestamp);
 
?>
                  
                  
                  
                  
             </p>
          
          
         <?php endwhile;?>    
          
          
          
          <p><a href="<?php echo site_url(); ?>/events/" style="color:white;">See all</a></p>
          
          
          
          
          
                </center>
            </div>
        </div>
        <div class="row">
            <div class="grid_8">
                   <h2>Latest articles</h2> 
                <hr />
    
            <div class="row">       <?php  $query = new WP_Query(array(
    "post_type" => "article",
  'postsperpage' => '4'
));
while ($query->have_posts()) : $query->the_post(); ?>
                <div class="grid_4">
                     <div class="row">
                        <div class="grid_2">
                            <img src="<?php	echo  get_field('main_image'); ?>" width="140px" height="80px" class="hide-mobile">
                           <img src="<?php	echo  get_field('main_image'); ?>" width="100%"  class="hide-screen">
                        </div>
                        <div class="grid_2">
                <p class="smltitle"><?php the_title(); ?></p>
                <p class="smlcaption"><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_excerpt(), 0,35); ?>...</a></p>
                        </div>
                    </div>
              </div>  
               <?php endwhile;?> 
              
            </div> 
                    
              
              
            
         </div>
        
        
         </div>    
         </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>