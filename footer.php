<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<div id="footer">
	<div class="container">
		<div class="fifth">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		</div>
		<div class="fifth">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
		</div>
		<div class="fifth">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
		</div>
		<div class="fifth">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
		</div>
		<div class="fifth">
			<?php dynamic_sidebar( 'fifth-footer-widget-area' ); ?>
		</div>
		<br class="clear" />
	</div>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>