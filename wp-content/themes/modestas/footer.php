<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #wrapper div
 *
 * @package Modestas
 */
?>

	<footer id="footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'modestas_credits' ); ?>
			<?php echo ot_get_option( 'footer_text', '' ); ?>
		</div>
	</footer>

</div> <!-- wrapper -->

<?php wp_footer(); ?>

</body>
</html>