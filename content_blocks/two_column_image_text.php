<div class="two_column_image_text">
    <h2><?php the_sub_field('title'); ?></h2>
    <div class="column-holder">
        <div>
            <img src="<?php the_sub_field("left_image"); ?>" />
            <h3><img src="<?php echo get_template_directory_uri(); ?>/images/<?php if (get_sub_field("left_sub_title_style") == "dark_grey") { ?>dark<?php  } else { ?>light<?php } ?>-blob.png" /><div class="blob-text"><?php the_sub_field("left_sub_title"); ?></div></h3>
            <p><?php the_sub_field("left_text"); ?></p>
            <a href="<?php the_sub_field("left_button_link"); ?>"><button><?php the_sub_field("left_button_title"); ?></button></a>
        </div>
        <div>
                <img src="<?php the_sub_field("right_image"); ?>" />
                <h3><img src="<?php echo get_template_directory_uri(); ?>/images/<?php if (get_sub_field("right_sub_title_style") == "dark_grey") { ?>dark<?php  } else { ?>light<?php } ?>-blob.png" /><div class="blob-text"><?php the_sub_field("right_sub_title"); ?></div></h3>
                <p><?php the_sub_field("right_text"); ?></p>
                <a href="<?php the_sub_field("right_button_link"); ?>"><button><?php the_sub_field("right_button_title"); ?></button></a>
            </div>
        </div>
</div>