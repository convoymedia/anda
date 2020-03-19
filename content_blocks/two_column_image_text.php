<div>
    <h2><?php the_sub_field('title'); ?></h2>
    <img src="<?php the_sub_field("left_image"); ?>" />
    <?php the_sub_field("left_sub_title"); ?>
    <?php the_sub_field("left_text"); ?>
    <a href="<?php the_sub_field("left_button_link"); ?>"><button><?php the_sub_field("left_button_title"); ?></button></a>

    <img src="<?php the_sub_field("right_image"); ?>" />
    <?php the_sub_field("right_sub_title"); ?>
    <?php the_sub_field("right_text"); ?>
    <a href="<?php the_sub_field("right_button_link"); ?>"><button><?php the_sub_field("right_button_title"); ?></button></a>
</div>