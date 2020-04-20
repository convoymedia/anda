<div class="product_modules">
    <?php
        if (get_sub_field("show_all")) {
            $products = get_posts([
                'post_type' => 'products',
                'post_status' => 'publish',
                'numberposts' => -1
            ]);
        }
        else {
            $products = get_sub_field("select_products");
        }

        if ($products) {
            foreach ($products as $p) {
                ?>
                <div class="product-item">
                    <div class="product-thumb" style="background-image:url(<?php echo get_the_post_thumbnail_url($p->ID); ?>);"></div>
                    <h3><?php echo $p->post_title; ?></h3>
                    <div><?php echo get_the_excerpt($p->ID); ?></div>
                    <a href="<?php echo get_the_permalink($p->ID); ?>"><button class="white">View</button></a>
                </div>
                <?php
            }
        }
    ?>
</div>