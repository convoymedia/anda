<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<?php 
	if (have_posts()) {
		while ( have_posts() ) {
            the_post(); 
            ?>
            <div class="blob-holder blog-header">
                <div class="the-blob">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/post-header.png" class="blob" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"/>
                </div>
                
            </div>
            <div class="post-content">
                <h1><?php the_title(); ?></h1>
                <div class="meta">
                    <?php 
                        the_date(); 
                        echo " | ";
                        $cats = wp_get_post_categories(get_the_ID()); 
                        foreach ($cats as $cat) {
                            echo ' <a href="' . get_category_link($cat) . '">' . get_cat_name($cat) . '</a> '; 
                        }
                        echo " | ";
                        
                        switch (get_field("type")) {
							case "video":
								$v = get_field("video_details");
								echo $v['video_duration'];
							break;
							case "podcast":
								$v = get_field("podcast_details");
								echo $v['podcast_duration'];
							default:
							echo do_shortcode('[rt_reading_time postfix="mins read" postfix_singular="min read" post_id="' . get_the_ID() . '"]'); 
							break;
						}
					?>
                </div>
                <div class="post-author">
                    <?php $author = get_the_author_meta($post->post_author); print_r($author); ?>
                    <div class="author-image"><img src="<?php echo get_template_directory_uri(); ?>/images/author-cutout.png" style="background-image:url(<?php echo get_avatar_url($post->post_author); ?>)" /></div>
                    <div class="author-who"><div>By <?php echo get_the_author_meta("first_name") . " " . get_the_author_meta("last_name"); ?><br/><?php the_author_meta("description"); ?></div></div>
                </div>
                <?php the_content(); ?>
                <div class="share">
                    <h2>Share: <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo blog_info("name"). " " . get_the_title($post->ID). " " . get_permalink($post->ID)); ?>" class="share-link"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com/intent/tweet?text=<?php the_permalink();?> text" class="social-share"><i class="fab fa-twitter"></i></a> <i class="fab fa-linkedin-in"></i> <i class="fas fa-envelope"></i></h2>
                </div>
            </div>
            <?php
        }
    }
?>
<div class="form">
    <?php echo do_shortcode('[contact-form-7 id="128"]') ?>
</div>
<?php
	get_footer(); 
?>