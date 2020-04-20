<div class="blob-holder <?php the_sub_field("style"); ?>">
    <div class="the-blob">
        <?php
            switch (get_sub_field("style")) {
                case "blob1":
                ?>
                    <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "blob1"); ?>
                    <img src="<?php echo $image[0]; ?>" class="blob-image"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blob1.png" class="blob"/>
                <?php
                break;
                case "blob2":
                    ?>
                        <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "blob2"); ?>
                        <img src="<?php echo $image[0]; ?>" class="blob-image"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blob2.png" class="blob"/>
                    <?php
                    break;
                case "blob3":
                    ?>
                        <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "blob3"); ?>
                        <img src="<?php echo $image[0]; ?>" class="blob-image"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blob3.png" class="blob"/>
                    <?php
                    break;
                case "blob4":
                ?>
                    <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "blob4"); ?>
                    <img src="<?php echo $image[0]; ?>" class="blob-image"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blob4.png" class="blob"/>
                <?php   
                break;
                case "blob5":
                    ?>
                    <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "blob5"); ?>
                    <img src="<?php echo $image[0]; ?>" class="blob-image"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blob5.png" class="blob"/>
                <?php   
                break;
            }
        ?>
    </div>
    <h1><span><?php the_sub_field("page_title"); ?></span></h1>
</div>