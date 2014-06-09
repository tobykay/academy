<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Modestas
 */
?>

<?php get_header(); ?>

<!-- sidebar -->
<?php get_sidebar(); ?>

<!-- container -->
<div id="container">
	
	<?php $posts = query_posts( array('s' => $_GET['s'], 'posts_per_page' => 6) ); ?>
	
	<?php if ( have_posts() ) : ?>
		
		<div class="wrap">
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'modestas-' ), '<span>"' . get_search_query() . '"</span>' ); ?></h1>
			</header><!-- .page-header -->
		</div>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>
	
	<?php if(count($posts) >= 6): ?>
		<a href="#" data-filter="s=<?php echo $_GET['s']; ?>" class="load-more"><?php echo __( 'Load more', 'modestas-' ); ?></a>
		<span class="no-more"><?php echo __( 'No older posts', 'modestas-' ); ?></span>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>