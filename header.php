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
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#333333">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#333333">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#333333">
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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	jQuery(document).ready(function($) {
		AOS.init();
		
		$('.scroll-posts').slick({
  			infinite: true,
  			slidesToShow: 4,
  			slidesToScroll: 4,
			nextArrow: '<div class="slick-next"></div>',
        	prevArrow: '<div class="slick-prev"></div>',
			responsive: [{
				breakpoint: 1230,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			}, {
      			breakpoint: 1000,
      			settings: "unslick"
    		}]
		});

		$('.quotes').slick({
  			infinite: true,
			speed: 500,
			autoplay:true,
			arrows:false
		});

		$(".open-menu").click(function(event) {
			event.preventDefault();
			$("#mobile-menu").addClass("show").delay(500).animate({"opacity" : 1});
		})

		$(".mobmenu-close").click(function(event) {
			event.preventDefault()
			$("#mobile-menu").removeClass("show");
		})

		$(".fifth h3").click(function(event) {
			event.preventDefault();
			if ($(this).next("div").hasClass("grow")) {
				$(this).next("div").removeClass("grow");
			}
			else {
				$(this).next("div").addClass("grow");
			}
		})
	});
</script>
</head>

<body <?php body_class(); ?>>
	<div id="topbar">
		<div class="container smaller hide-mobile">
			<div class="alignleft"><?php dynamic_sidebar( 'bar-topleft-widget-area' ); ?></div>
			<div class="alignright socials"><?php dynamic_sidebar( 'bar-topright-widget-area' ); ?></div>
		</div>
		<div class="show-mobile tbar">
			<div class="alignleft"><?php dynamic_sidebar( 'mobilebar-topleft-widget-area' ); ?></div>
			<div class="alignright socials"><?php dynamic_sidebar( 'mobilebar-topright-widget-area' ); ?></div>
		</div>
	</div>

	<div id="access" class="container smaller" role="navigation">
		<div class="git show-mobile">
			<div>Get in touch</div>
		</div>
		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo alignleft"><img src="<?php echo get_header_image(); ?>" /></a>
		<?php wp_nav_menu( array( 'container_class' => 'alignright', 'theme_location' => 'primary' ) ); ?>
		<div class="show-mobile open-menu"></div>
		<br class="clear" />
	</div><!-- #access -->
	
	
	<div class="get-in-touch">
		<img src="<?php echo get_template_directory_uri(); ?>/images/getintouch.png" />
		<div><a href="http://anda-test-uk.stackstaging.com/get-in-touch/">Get in touch</a></div>
	</div>