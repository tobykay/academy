<?php 
/*
YARPP Template: Academy
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?>  <div class="row">
            <div class="grid_8">
                   <h2>Related articles</h2> 
                <hr />
                
              
              
              
              
              
           
         <div class="row">
<?php if (have_posts()):?>

	<?php while (have_posts()) : the_post(); ?>
  
  
  
              <div class="grid_4">
                     <div class="row">
                        <div class="grid_2">
                          <a href="<?php the_permalink(); ?>"><img src="http://placekitten.com/g/140/80"></a>
                        </div>
                        <div class="grid_2">
                <p class="smltitle"><?php the_title(); ?></p>
                <p class="smlcaption"><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_excerpt(), 0,35); ?>...</a> </p>
                        </div>
                    </div>
              </div> 
                      
  
  
  
  
  

	<?php endwhile; ?>

<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>






   
           
               
              
              
                </div>
        
        
         </div>  
              
 
            
              
              
                            
              
              
 
       
             
                           
              
          </div>    






