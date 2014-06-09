<?php
/**
 * The template for displaying Archive pages.
 *
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
	
	<div class="wrap white">
	
	<?php if ( have_posts() ) : ?>
		
			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'modestas-' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'modestas-' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'modestas-' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'modestas-' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'modestas-' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'modestas-' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'modestas-' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'modestas-');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'modestas-');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'modestas-' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'modestas-' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'modestas-' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'modestas-' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'modestas-' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'modestas-' );

						else :
							_e( 'Archives', 'modestas-' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

		<?php /* Start the Loop */ ?>
			
		<?php while ( have_posts() ) : the_post(); ?>
			<ul>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</li>
			</ul>
		<?php endwhile; ?>

		<?php modestas_paging_nav(); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>
		
	</div>
	
</div>

<?php get_footer(); ?>
