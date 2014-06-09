<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Modestas
 */
?>
	
<div id="sidebar">
	
	<!-- header -->
	<header id="header" class="site-header" role="banner">
		
		<div class="logo">
			<a class="over-effect" href="<?php echo ot_get_option('logo_url', esc_url(home_url('/')) ); ?>" <?php if(ot_get_option('logo_url')): ?>target="_blank"<?php endif; ?>>
				<img src="<?php echo ot_get_option( 'logo_img' ); ?>" alt="">
			</a>
		</div>
		
		<h1 class="site-title"><a href="<?php echo ot_get_option('logo_url', esc_url(home_url('/')) ); ?>"><?php bloginfo('name'); ?></a></h1>
		
		<a href="#" id="mobile-menu"></a>
		
	</header>
	
	<div id="secondary" class="widget-area" role="complementary">
		
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		
		<?php if ( !dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<div id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</div>

			<div id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'modestas-' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</div>

		<?php endif; // end sidebar widget area ?>
		
		<!-- social -->
		<ul class="social">
			<?php if(ot_get_option('facebook')): ?><li><a href="<?php echo ot_get_option('facebook'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('twitter')): ?><li><a href="<?php echo ot_get_option('twitter'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('google_plus')): ?><li><a href="<?php echo ot_get_option('google_plus'); ?>" target="_blank" title="Google plus"><i class="fa fa-google-plus"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('youtube')): ?><li><a href="<?php echo ot_get_option('youtube'); ?>" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('pinterest')): ?><li><a href="<?php echo ot_get_option('pinterest'); ?>" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('instagram')): ?><li><a href="<?php echo ot_get_option('instagram'); ?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('linkedin')): ?><li><a href="<?php echo ot_get_option('linkedin'); ?>" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('skype')): ?><li><a href="<?php echo ot_get_option('skype'); ?>" target="_blank" title="Skype"><i class="fa fa-skype"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('tumblr')): ?><li><a href="<?php echo ot_get_option('tumblr'); ?>" target="_blank" title="Tumblr"><i class="fa fa-tumblr"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('dribbble')): ?><li><a href="<?php echo ot_get_option('dribbble'); ?>" target="_blank" title="Dribbble"><i class="fa fa-dribbble"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('flickr')): ?><li><a href="<?php echo ot_get_option('flickr'); ?>" target="_blank" title="Flickr"><i class="fa fa-flickr"></i></a></li><?php endif; ?>
			<?php if(ot_get_option('github')): ?><li><a href="<?php echo ot_get_option('github'); ?>" target="_blank" title="Github"><i class="fa fa-github"></i></a></li><?php endif; ?>
		</ul>
		
	</div><!-- #secondary -->
			
</div>
