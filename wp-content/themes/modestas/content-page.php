<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Modestas
 */
?>

<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" class="post <?php $all_classes = get_post_class(); foreach ($all_classes as $class) { echo $class . " "; } if($format == 'video' or $format == 'image' or ( empty($format) and has_post_thumbnail() ) ) { echo 'no-border'; } ?>">
	
	<?php
	
	// featured image
	if ( has_post_thumbnail() && empty($format) ) {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		echo '<a class="over-effect" href="' . get_permalink() . '" title="' . get_the_title() . '">';
		the_post_thumbnail('thumb_710_440');
		echo '<span class="over"></span><span class="fa fa-plus"></span>';
		echo '</a>';
	}
	
	// embed code
	if($format == 'video' && get_post_meta(get_the_ID(),'embed_code')) {
		echo get_post_meta(get_the_ID(),'embed_code', true);
	}
	
	/* gallery */
	$slides = get_post_meta(get_the_ID(), 'slides', true);
	
	if ( !empty( $slides ) ) {
		
		if(get_post_meta(get_the_ID(),'check_slider')) {
			echo '<div class="slides">';
			foreach( $slides as $slide ) {
				
				$id = custom_get_attachment_id( $slide['examplefield'] );
				
				$src = wp_get_attachment_image_src( (int)$id, 'thumb_710_440' );
				
				echo '<a href="' . $src[0] . '" class="slide over-effect" title="' . $slide['title'] . '">';
				echo '<img src="' . $src[0] . '" width="' . $src[1] . '" height="' . $src[2] . '" alt="' . $slide['title'] . '">';
				echo '<span class="over"></span><span class="fa fa-plus"></span>';
				echo '</a>';
				
			}
			echo '</div>';
		}else{
			echo '<div class="gallery">';
			foreach( $slides as $slide ) {
				
				$id = custom_get_attachment_id( $slide['examplefield'] );
				
				$src = wp_get_attachment_image_src( (int)$id, 'thumb_710_440' );
				
				echo '<div class="image">';
				echo '<a class="over-effect" href="' . $slide['examplefield'] . '" title="' . $slide['title'] . '">';
				echo '<img src="' . $src[0] . '" alt="' . $slide['title'] . '" />';
				echo '<span class="over"></span><span class="fa fa-plus"></span>';
				echo '</a>';
				echo '</div>';
				
			}
			echo '</div>';
		}
	}
	
	?>
	
	
	<div class="wrap">
		
		<header class="entry-header">
			<a href="<?php the_permalink( get_the_ID() ); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
		</header>
		
		<div class="date-box">
			<a href="<?php the_permalink( get_the_ID() ); ?>">
				<span class="ago"><?php echo human_timing(get_the_date('U')).' '.__( 'ago', 'modestas-' ); ?></span>
				<span class="date"> ( <?php echo get_the_date('d \o\f F, Y'); ?> ) </span>
			</a>
		</div>

		<div class="entry-content">
			
			<?php if($format == 'quote' && get_post_meta(get_the_ID(),'quote_content')): ?>
			<blockquote>
				<?php echo get_post_meta(get_the_ID(),'quote_content',true); ?>
			</blockquote>
			<?php elseif($format == 'link' && get_post_meta(get_the_ID(),'link_content')): ?>
				<?php $link_text = get_post_meta(get_the_ID(),'link_text') ? get_post_meta(get_the_ID(),'link_text', true) : get_post_meta(get_the_ID(),'link_content', true); ?>
				<a class="post-link" href="<?php echo get_post_meta(get_the_ID(),'link_content', true); ?>" <?php if(get_post_meta(get_the_ID(),'link_target')): ?>target="_blank"<?php endif; ?>>
					<?php echo $link_text; ?>
				</a>
			<?php endif; ?>
			
			<?php (is_single() or is_page()) ? the_content() : the_excerpt(); ?>
			
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'modestas-' ),
					'after'  => '</div>',
				) );
			?>
			
		</div>
	</div>

	<?php if(has_tag() && is_single()): ?>
	<div class="wrap">
		
		<h3>Categories:</h3>
		<div id="cat-list">
			<ul>
				<?php wp_list_categories("orderby=ID&title_li="); ?>
			</ul>
		</div>
		
		<h3>Tags:</h3>
		<?php the_tags('<ul class="tagcloud"><li>','</li><li>','</li></ul>'); ?>
		
	</div>
	<?php endif; ?>

	<?php
	// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || '0' != get_comments_number() ) {
		comments_template();
	}
	?>
	
</article>
