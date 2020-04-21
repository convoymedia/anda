<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<script>
	jQuery(document).ready(function($) {
		$(".filter a").each(function() {
			if (this.href == window.location.href) {
				console.log(this.href)
				$(this).addClass("active");
			}
		});
	});
</script>

<div class="blob-holder">
	<div class="the-blob">
		<img src="<?php echo get_template_directory_uri(); ?>/images/articles-header.png" class="blob"/>
	</div>
	<h1>Articles</h1>
</div>
<div class="text_block">
    <div class="text-content"> 
        <h2><?php the_field("title", "option"); ?></h2>
        <div class="text-holder">
			<?php the_field("content", "option"); ?>
		</div>
    </div>
</div>
<div class="container">
	<div class="filter">
		<div>
		<a href="<?php echo get_post_type_archive_link( 'post' ); ?>">All</a>
			<?php
				$terms = get_terms( 'category', array(
					'hide_empty' => false,
				) ); 
				foreach ($terms as $term) {
					echo '<a href="' . get_category_link($term->term_id) . '">' . $term->name . '</a>';
				}
			?>
		</div>
		<ul class="filter-widgets">
			<?php dynamic_sidebar("blog-filter-widget-area"); ?>
		</ul>
	</div>
	<h3>Featured</h3>
	<div class="featured-post">
		<?php
			$featured = get_field("featured_post", "option"); 
		?>
		<div class="featured-image"><img src="<?php echo get_the_post_thumbnail_url($featured->ID); ?>" /></div>
		<div class="featured-text">
			<div>
				<div class="cat">
					<?php
						switch (get_field("type", $featured->ID)) {
							case "video":
								echo "Video";
							break;
							case "podcast":
								echo "Podcast";
							default:
								echo get_cat_name(wp_get_post_categories($featured->ID)[0]); 
							break;
						}
					?>
				</div>
				<div class="read-time">
					<?php
						switch (get_field("type", $featured->ID)) {
							case "video":
								$v = get_field("video_details", $featured->ID);
								echo $v['video_duration'];
							break;
							case "podcast":
								$v = get_field("podcast_details", $featured->ID);
								echo $v['podcast_duration'];
							default:
							echo do_shortcode('[rt_reading_time postfix="mins read" postfix_singular="min read" post_id="' . $featured->ID . '"]'); 
							break;
						}
					?>
				</div>
				<br class="clear"/>
				<h2><?php echo $featured->post_title; ?></h2>
				<a href="<?php echo get_permalink($featured->ID); ?>"><button class="white">Read more</button></a>
			</div>
		</div>
	</div>
	<div class="recent-posts main-posts">
		<div class="the-posts">
<?php 
	while (have_posts()) {
		the_post();
		?>
			<div class="post">
				<a href="<?php echo get_permalink($post->ID) ?>">
					<?php echo get_the_post_thumbnail($post->ID, "recent_articles"); ?>
				</a>
				
				<div class="post-text">
					<div class="cat">
						<?php
							switch (get_field("type")) {
								case "video":
									echo "Video";
								break;
								case "podcast":
									echo "Podcast";
								default:
									echo get_cat_name(wp_get_post_categories($post->ID)[0]); 
								break;
							}
						?>
					</div>
					<div class="read-time">
						<?php
							switch (get_field("type")) {
								case "video":
									$v = get_field("video_details");
									echo $v['video_duration'];
								break;
								case "podcast":
									$v = get_field("podcast_details");
									echo $v['podcast_duration'];
								default:
								echo do_shortcode('[rt_reading_time postfix="mins read" postfix_singular="min read" post_id="' . $post->ID . '"]'); 
								break;
							}
						?>
					</div>
					<br class="clear"/>
					<?php
						$max_len = 55;
						$title = explode(" ", get_the_title($post->ID));
						$temp = "";

						foreach ($title as $word) {
							if (strlen(trim($temp)) + strlen($word) <= $max_len) {
								$temp = $temp . " " . $word;
								//echo (strlen(trim($temp))). " ";
							}
							else {
								//echo strlen($temp)+ strlen($word);
								$temp = $temp . "...";
								break;
							}
						}
					?>
					<a href="<?php echo get_permalink($post->ID) ?>"><?php echo $temp; ?></a>
					<a href="<?php echo get_permalink($post->ID) ?>" class="button"><button>Read More</button></a>
				</div>
			</div>
			<?php
		}
	?>
		</div>
		<div style="width:100%;text-align:center>">
		<?php echo do_shortcode('[ajax-loadmore-button]'); ?>
		</div>
	</div>
</div>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div class="next">
				<?php previous_posts_link( __( 'Newer posts &rarr;', 'twentyten' ) ); ?>
</div>
<?php endif; ?>

<div class="form">
    <?php echo do_shortcode('[contact-form-7 id="128"]') ?>
</div>