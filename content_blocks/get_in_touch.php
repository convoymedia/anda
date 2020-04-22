<div class="get_in_touch" style="background-color:<?php the_sub_field("background_colour"); ?>">
    <div class="touch-holder">
        <img src="<?php the_sub_field("image"); ?>" />
        <div class="the-text-holder">
            <?php the_sub_field("left_text"); ?>
        </div>
        <div class="form-holder">
            <h2><?php the_sub_field("title"); ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="167"]'); ?>
        </div>
    </div>
</div>