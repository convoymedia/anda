<div class="recent_articles" style="position:relative;display:block">
    <img src="<?php echo get_template_directory_uri(); ?>/images/inv-holder.png" />
    <div style="position:absolute;top:0px;left:0px;width:100%;height:75%;background:#333333;"></div>
        <div class="rp-holder">
            <h2><?php the_sub_field("title"); ?></h2>
            <div class="recent-posts">
                <div class="the-posts scroll-posts">
                    <?php
                        $amount = get_sub_field("amount_of_articles");
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => $amount,
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