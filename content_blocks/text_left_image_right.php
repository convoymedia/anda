<div class="text_left_image_right <?php the_sub_field("style"); ?>">
    <?php 
        switch (get_sub_field("style")) { 
            case "shades_grey_curved":
            ?>
            <div class="image-holder-test">
                <img src="<?php echo get_template_directory_uri(); ?>/images/shades_grey_curved.png" class="main-image" />
                <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "shades_grey_curved"); ?>
                <img src="<?php echo $image[0]; ?>" class="underlay-image" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/responsive1.png" class="show-mobile" />
            </div>
            <div class="overlay-test">
                
                <h2><?php the_sub_field("title"); ?></h2>
                <?php the_sub_field("content"); ?>
                <?php if (get_sub_field("button_link")) { ?>
                <a href="<?php the_sub_field("button_link"); ?>">
                    <button><?php the_sub_field("button_title") ?></button>
                </a>
                <?php } ?>
            </div>
            <?php
            break;

            case "white_solid":
                $image = wp_get_attachment_image_src(get_sub_field("image"), "white_solid"); 
            ?>
            <div class="white-solid" style="background-image:url(<?php echo $image[0]; ?>);">
                <img src="<?php echo get_template_directory_uri(); ?>/images/white-solid.png" style="width:100%;height:100%;" />
            </div>
            <div class="overlay">
                <h2><?php the_sub_field("title"); ?></h2>
                <?php the_sub_field("content"); ?>
                <?php if (get_sub_field("button_link")) { ?>
                <a href="<?php the_sub_field("button_link"); ?>">
                    <button><?php the_sub_field("button_title") ?></button>
                </a>
                <?php } ?>
            </div>
            <br class="clear" />
            <?php
            break;

            case "light_grey_solid":
                $image = wp_get_attachment_image_src(get_sub_field("image"), "light_grey_solid"); 
            ?>
            <div class="white-solid" style="display:flex;align-items:center;margin-top:0px;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/light-grey.png" style="width:100%;height:auto;background-image:url(<?php echo $image[0]; ?>);background-size:cover;" />
            </div>
            <div class="overlay">
                <h2><?php the_sub_field("title"); ?></h2>
                <?php the_sub_field("content"); ?>
                <?php if (get_sub_field("button_link")) { ?>
                <a href="<?php the_sub_field("button_link"); ?>">
                    <button><?php the_sub_field("button_title") ?></button>
                </a>
                <?php } ?>
            </div>
            <br class="clear" />
            <?php
            break;

            case "dark_grey_solid":
                $image = wp_get_attachment_image_src(get_sub_field("image"), "dark_grey_solid"); 
                ?>
                <div class="image" style="background-image:url(<?php echo $image[0]; ?>);">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dark_grey_solid.png" style="width:100%;height:100%;" />
                </div>
                <div class="overlay">
                    <?php if (get_sub_field("title")) { ?><h2><?php the_sub_field("title"); ?></h2><?php } ?>
                    <?php the_sub_field("content"); ?>
                    <?php if (get_sub_field("button_link")) { ?>
                    <a href="<?php the_sub_field("button_link"); ?>">
                        <button><?php the_sub_field("button_title") ?></button>
                    </a>
                    <?php } ?>
                </div>
            <?php
            break;

            case "dark_grey_curved":
                $image = wp_get_attachment_image_src(get_sub_field("image"), "dark_grey_curved"); 
                ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/curved-top.png" style="width:100%;height:auto;;display:block" />
                <div class="flex-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dark-blob2.png" style="background-image:url(<?php echo $image[0]; ?>);" />
                    <div class="overlay">
                        <h2><?php the_sub_field("title"); ?></h2>
                        <?php the_sub_field("content"); ?>
                        <?php if (get_sub_field("button_link")) { ?>
                        <a href="<?php the_sub_field("button_link"); ?>">
                            <button><?php the_sub_field("button_title") ?></button>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            <?php
            break;
        }
        ?>
</div>