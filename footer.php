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
		<ul class="fifth">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		</ul>
		<ul class="fifth">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</ul>
		<ul class="fifth">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
		</ul>
		<ul class="fifth">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
		</ul>
		<ul class="fifth">
			<?php dynamic_sidebar( 'fifth-footer-widget-area' ); ?>
		</ul>
		<br class="clear" />
	</div>
</div>
<div id="extra-footer">
	<?php dynamic_sidebar( 'under-footer-widget-area' ); ?>
</div>
<div id="mobile-menu" class="show-mobile">
	<?php wp_nav_menu( array( 'container_class' => 'mobmenu', 'theme_location' => 'mobile' ) ); ?>
	<div class="break"></div>
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