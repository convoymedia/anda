<div class="image_left_text_right <?php if ((get_sub_field("style") === "grey_solid_dark2")) { ?>d2<?php } ?><?php if (get_sub_field("style") === "grey_solid_light") { ?>sg<?php } ?><?php if (get_sub_field("style") === "grey_solid_dark") { ?>sgd<?php } ?>" <?php if (get_sub_field("style") === "grey_solid_light") { ?> style="background:#E2E2E2;" <?php } ?>>
    <?php if (get_sub_field("style") === "grey_solid_light") { ?>
        <div>
        <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "full"); ?>
            <div>
                <img src="<?php echo $image[0]; ?>" />
                <div class="image-text"><?php the_sub_field("image_text"); ?></div>
            </div>
    <?php }  else if ((get_sub_field("style") === "grey_solid_dark2")) { ?>
        <div class="dark2">
            <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "full"); ?>
            <img src="<?php echo $image[0]; ?>" />
        </div>
    <?php } else { ?>
        <div class="iltr-test">
            <img src="<?php echo get_template_directory_uri(); ?>/images/grey_left.png" class="main-image" />
            <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "shades_grey_solid_dark"); ?>
            <img src="<?php echo $image[0]; ?>" class="underlay-image" />
        </div>
    <?php } ?>
    <div class="iltr-overlay">
    <?php if (get_sub_field("title")) { ?><h2><?php the_sub_field("title"); ?></h2><?php } ?>
        <?php the_sub_field("content"); ?>
        <?php if (get_sub_field("include_button")) { ?>
            <a href="<?php the_sub_field("button_link"); ?>">
                <button><?php the_sub_field("button_title") ?></button>
            </a>
        <?php } ?>
    </div>
    <?php if (get_sub_field("style") === "grey_solid_light") { ?>
    </div>
    <?php } ?>
</div>