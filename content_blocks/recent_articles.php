<div class="recent_articles">
    <?php
        $amount = get_sub_field("amount_of_articles");
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => $amount,
            'post_status' => 'publish' 
        ));
        foreach ($recent_posts as $post) {
            ?>
            <a href="<?php echo get_permalink($post['ID']) ?>">
                <?php echo the_title(); ?>
            <?php
        }
    ?>
</div>