<div class="two_column_image_text">
    <h2><?php the_sub_field('title'); ?></h2>
    <div class="column-holder">
        <div data-aos="fade-up">
            <?php $image = wp_get_attachment_image_src(get_sub_field("left_image"), "two_column"); ?>
            <img src="<?php echo $image[0]; ?>" />
            <div class="h3"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php if (get_sub_field("left_sub_title_style") == "dark_grey") { ?>dark<?php  } else { ?>light<?php } ?>-blob.png" /><div class="blob-text"><?php the_sub_field("left_sub_title"); ?></div></div>
            <p><?php the_sub_field("left_text"); ?></p>
            <a href="<?php the_sub_field("left_button_link"); ?>"><button><?php the_sub_field("left_button_title"); ?></button></a>
        </div>
        <div data-aos="fade-up">
            <?php $image = wp_get_attachment_image_src(get_sub_field("right_image"), "two_column"); ?>
            <img src="<?php echo $image[0]; ?>" />
            <div class="h3"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php if (get_sub_field("right_sub_title_style") == "dark_grey") { ?>dark<?php  } else { ?>light<?php } ?>-blob.png" /><div class="blob-text"><?php the_sub_field("right_sub_title"); ?></div></div>
            <p><?php the_sub_field("right_text"); ?></p>
            <a href="<?php the_sub_field("right_button_link"); ?>"><button><?php the_sub_field("right_button_title"); ?></button></a>
        </div>
    </div>
</div>