<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Modestas
 */
?>

<?php get_header(); ?>

<!-- sidebar -->
<?php get_sidebar(); ?>

<!-- container -->
<div id="container">
	
	<?php $posts = query_posts('posts_per_page=6&post_status=publish'); ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php get_template_part( 'content', 'page' ); ?>
		
	<?php endwhile; // end of the loop. ?>
	
	<?php if(count($posts) >= 6): ?>
	<a href="#" class="load-more"><?php echo __( 'Load more', 'modestas-' ); ?></a>
	<span class="no-more"><?php echo __( 'No older posts', 'modestas-' ); ?></span>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>