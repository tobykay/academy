<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to modestas_comment() which is
 * located in the inc/template-tags.php file.
 *
 * @package Modestas
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="wrap">
	<div id="comments" class="comments-area">
		
		<?php $comment_type = get_post_meta(get_the_ID(),'comments_type', true); ?>
		
		<?php if(!$comment_type == 'standard'): ?>
		
			<?php // You can start editing here -- including this comment! ?>

			<?php if ( have_comments() ) : ?>
				<h2 class="comments-title"><?php printf( 'Comments ( %1$s )', get_comments_number()); ?></h2>

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
				<nav id="comment-nav-above" class="comment-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'modestas-' ); ?></h1>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'modestas-' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'modestas-' ) ); ?></div>
				</nav><!-- #comment-nav-above -->
				<?php endif; // check for comment navigation ?>

				<ol class="comment-list">
					<?php
						/* Loop through and list the comments. Tell wp_list_comments()
						 * to use modestas_comment() to format the comments.
						 * If you want to override this in a child theme, then you can
						 * define modestas_comment() and that will be used instead.
						 * See modestas_comment() in inc/template-tags.php for more.
						 */
						wp_list_comments( array( 'callback' => 'modestas_comment' ) );
					?>
				</ol><!-- .comment-list -->

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
				<nav id="comment-nav-below" class="comment-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'modestas-' ); ?></h1>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'modestas-' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'modestas-' ) ); ?></div>
				</nav><!-- #comment-nav-below -->
				<?php endif; // check for comment navigation ?>

			<?php endif; // have_comments() ?>

			<?php
				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
				<p class="no-comments"><?php _e( 'Comments are closed.', 'modestas-' ); ?></p>
			<?php endif; ?>

			<?php comment_form(); ?>
		
		<?php elseif($comment_type == 'facebook'): ?>
			
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=643096935716744";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			
			<div class="fb-comments" data-href="<?php the_permalink() ?>" data-numposts="10" data-colorscheme="light"></div>
			
		<?php endif; ?>

	</div><!-- #comments -->
</div>
