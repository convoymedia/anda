<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- add required fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,600&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

				
<?php
	wp_enqueue_script('jquery');
	wp_head();
?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://kit.fontawesome.com/d08277c8f7.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
	<div id="topbar">
		<div class="container smaller">
			<div class="alignleft"><?php dynamic_sidebar( 'bar-topleft-widget-area' ); ?></div>
			<div class="alignright socials"><?php dynamic_sidebar( 'bar-topright-widget-area' ); ?></div>
		</div>
	</div>

	<div id="access" class="container smaller" role="navigation">
		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo alignleft"><img src="<?php echo get_header_image(); ?>" /></a>
		<?php wp_nav_menu( array( 'container_class' => 'alignright', 'theme_location' => 'primary' ) ); ?>
		<br class="clear" />
	</div><!-- #access -->