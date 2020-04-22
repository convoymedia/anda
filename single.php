<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<script>
    jQuery(document).ready(function($) {
        $(".iframe-container").click(function(event) {
            event.preventDefault();
            if (!$(this).hasClass("clicked")) {
                $(this).addClass("clicked");
            }
        })
    });
</script>
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
                    <?php $author = get_the_author_meta($post->post_author); ?>
                    <div class="author-image"><img src="<?php echo get_template_directory_uri(); ?>/images/author-cutout.png" style="background-image:url(<?php echo get_avatar_url($post->post_author); ?>)" /></div>
                    <div class="author-who"><div>By <?php echo get_the_author_meta("first_name") . " " . get_the_author_meta("last_name"); ?><br/><?php the_author_meta("description"); ?></div></div>
                </div>
                <?php the_content(); ?>
                <?php
                    switch(get_field("type")) {
                        case "video":
                            $v = get_field("video_details");
							?></div><div class="iframe-container"><div><?php echo $v['video_url']; ?></div></div><div class="post-content"><?php
                        break;
                    }
                ?>
                <div class="share">
                    <h2>Share: <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 'popup', 'width=600,height=600');" class="share-link"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com/intent/tweet?text=<?php echo get_bloginfo("name"). " " . get_the_title(). " " . get_the_permalink(); ?>" target="popup" onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo get_bloginfo("name"). " " . get_the_title(). " " . get_the_permalink(); ?>', 'popup', 'width=600,height=600');" class="social-share"><i class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="social-share" target="popup" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>', 'popup', 'width=600,height=600');"><i class="fab fa-linkedin-in"></i></a> <a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>"><i class="fas fa-envelope"></i></a></h2>
                </div>
            </div>
            </div>
            <div class="view-more-author">
                <div class="author-image"><img src="<?php echo get_template_directory_uri(); ?>/images/author-cutout.png" style="background-image:url(<?php echo get_avatar_url($post->post_author); ?>)" /></div>
                <div class="more-author"><a href="<?php echo get_author_posts_url($post->post_author); ?>">View more articles by <?php echo get_the_author_meta("first_name") . " " . get_the_author_meta("last_name"); ?></a></div>
            </div>
            <?php
        }
    }
?>



<div class="recent_articles" style="position:relative;display:block">
    <img src="<?php echo get_template_directory_uri(); ?>/images/inv-holder.png" />
    <div style="position:absolute;top:0px;left:0px;width:100%;height:75%;background:#333333;"></div>
        <div style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
            <h2>You may also like</h2>
            <div class="recent-posts">
                <div class="the-posts scroll-posts">
                    <?php
                        $recent_posts = get_posts(array(
                            'numberposts' => 3,
							'post_status' => 'publish' ,
							'exclude' => array(get_the_ID()),
							'orderby' => 'rand'
                        ));
                        foreach ($recent_posts as $post) {
                            ?>
                            <div class="post">
                                <a href="<?php echo get_permalink($post->ID) ?>">
                                    <?php echo get_the_post_thumbnail($post->ID, "recent_articles"); ?>
                                </a>
                                
                                <div class="post-text">
                                    <div class="cat">
                                        <?php
                                            echo get_cat_name(wp_get_post_categories($post->ID)[0]); 
                                        ?>
                                    </div>
                                    <div class="read-time">
                                        <?php echo do_shortcode('[rt_reading_time postfix="mins read" postfix_singular="min read" post_id="' . $post->ID . '"]'); ?>
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
                        wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form">
    <?php echo do_shortcode('[contact-form-7 id="128"]') ?>
</div>
<?php
	get_footer(); 
?>