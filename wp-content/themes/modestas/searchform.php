<?php
/**
 * The template for displaying search forms in Modestas
 *
 * @package Modestas
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<!--span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'modestas-' ); ?></span-->
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'modestas-' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'modestas-' ); ?>">
</form>
