<div class="blog_left_text_right">
    <div class="points-holder">
        <div class="header-holder">
            <img src="<?php echo get_template_directory_uri(); ?>/images/back1.png" />
            <h2><?php the_sub_field("title"); ?></h2>
        </div>
        <div class="text-side">
            <?php the_sub_field("content"); ?>
            
            <?php if (get_sub_field("include_button")) {
                ?><a href="<?php the_sub_field("button_link"); ?>"><button><?php the_sub_field("button_title"); ?></button></a>
            <?php } ?>
        </div>
    </div>
</div>