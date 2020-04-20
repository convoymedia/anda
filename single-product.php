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
			the_post(); ?>
			<div class="blob-holder">
				<div class="the-blob">
					<img src="<?php echo get_template_directory_uri(); ?>/images/single-header.png" class="blob"/>
				</div>
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="the-product">
				<div class="product-imagery">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" />
					<ul>
					<li><img src="<?php echo get_the_post_thumbnail_url(); ?>" /></li>
					<?php
						$images = get_field("gallery");
						if ($images) {
							foreach ($images as $image) {
								?>
								<li>
									<img src="<?php echo $image; ?>" />
								</li>
								<?php
							}
						}
					?>
					</ul>
				</div>
				<div class="product-text">
					<h2><?php the_field("secondary_title"); ?></h2>
					<?php the_content(); ?>
					<button>Enquire Now</button>
				</div>
			</div>
			<?php
		}
	}
?>
<div class="text_quote light">
    <div class="quotes">
        <?php
            if (have_rows("quote")) {
                while (have_rows("quote")) {
                    the_row();
                    ?>
                    <div class="a-quote">
                        <div class="the-quote">
                            <?php the_sub_field("text"); ?>
                        </div>
                        <div class="who-said-it">
                            <?php the_sub_field("person"); ?>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
</div>
<div class="get_in_touch">
    <div class="touch-holder">
        <img src="http://www.convoyportal.com/clients/anda/wp-content/uploads/2020/03/background-form-1.jpg" />
        <div class="form-holder">
            <h2>Get in touch</h2>
            <?php echo do_shortcode('[contact-form-7 id="167"]'); ?>
        </div>
    </div>
</div>
<div class="recent_articles" style="position:relative;display:block">
    <img src="<?php echo get_template_directory_uri(); ?>/images/inv-holder.png" style="width:100%;height:auto" ?>
    <div style="position:absolute;top:0px;left:0px;width:100%;height:75%;background:#333333;"></div>
        <div style="position:absolute;top:0px;left:0px;width:100%;height:100%;">
            <h2>Recent Articles</h2>
            <div class="recent-posts">
                <div class="the-posts">
                    <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 8,
                            'post_status' => 'publish' 
                        ));
                        foreach ($recent_posts as $post) {
                            ?>
                            <div class="post">
                                <a href="<?php echo get_permalink($post['ID']) ?>">
                                    <?php echo get_the_post_thumbnail($post['ID'], "recent_articles"); ?>
                                </a>
                                
                                <div class="post-text">
                                    <div class="cat">
                                        <?php
                                            echo get_cat_name(wp_get_post_categories($post['ID'])[0]); 
                                        ?>
                                    </div>
                                    <div class="read-time">
                                        <?php echo do_shortcode('[rt_reading_time postfix="mins read" postfix_singular="min read" post_id="' . $post['ID'] . '"]'); ?>
                                    </div>
                                    <br class="clear"/>
                                    <?php
                                        $max_len = 55;
                                        $title = explode(" ", get_the_title($post['ID']));
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
                                    <a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $temp; ?></a>
                                    <a href="<?php echo get_permalink($post['ID']) ?>" class="button"><button>Read More</button></a>
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