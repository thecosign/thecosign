  <?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Stacker
 */
?>
<div id="footer">
	<div class="wrapper">
		<div id="footerwidgets">
			<?php /* Widgetised Area */
			if (!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer' )) ?>

		</div>
		<!-- End Footer Widgets-->
		
		<?php wp_footer(); ?>
	</div>
	<!-- End Wrapper -->
</div><!-- End Footer -->

</body>
</html>