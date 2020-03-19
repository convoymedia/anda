<div class="two_column_image_text">
    <h2><?php the_sub_field('title'); ?></h2>
    <div class="column-holder">
        <div>
            <img src="<?php the_sub_field("left_image"); ?>" />
            <h3><?php the_sub_field("left_sub_title"); ?></h3>
            <?php the_sub_field("left_text"); ?>
            <a href="<?php the_sub_field("left_button_link"); ?>"><button><?php the_sub_field("left_button_title"); ?></button></a>
        </div>
        <div>
                <img src="<?php the_sub_field("right_image"); ?>" />
                <h3><?php the_sub_field("right_sub_title"); ?></h3>
                <?php the_sub_field("right_text"); ?>
                <a href="<?php the_sub_field("right_button_link"); ?>"><button><?php the_sub_field("right_button_title"); ?></button></a>
            </div>
        </div>
</div>