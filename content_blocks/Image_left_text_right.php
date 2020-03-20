<div class="image_left_text_right">
    <img src="<?php echo get_template_directory_uri(); ?>/images/grey_left.png" class="main-image" />
    <img src="<?php the_sub_field("image"); ?>" class="underlay-image" />
    <div class="overlay">
        <h2><?php the_sub_field("title"); ?></h2>
        <?php the_sub_field("content"); ?>
        <a href="<?php the_sub_field("button_link"); ?>">
            <button><?php the_sub_field("button_title") ?></button>
        </a>
    </div>
</div>