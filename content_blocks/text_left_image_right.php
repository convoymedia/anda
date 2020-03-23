<div class="text_left_image_right">
    <img src="<?php echo get_template_directory_uri(); ?>/images/shades_grey_curved.png" class="main-image" />
    <?php $image = wp_get_attachment_image_src(get_sub_field("image"), "shades_grey_curved"); ?>
    <img src="<?php echo $image[0]; ?>" class="underlay-image" />
    <div class="overlay">
        <h2><?php the_sub_field("title"); ?></h2>
        <?php the_sub_field("content"); ?>
        <a href="<?php the_sub_field("button_link"); ?>">
            <button><?php the_sub_field("button_title") ?></button>
        </a>
    </div>
</div>