<div class="text_content_area" <?php if (get_sub_field("width")) { ?> style="width:<?php the_sub_field("width"); ?>%;margin-left:auto;margin-right:auto;" <?php } ?>>
    <?php if (get_sub_field("title")) { ?><h2><?php the_sub_field("title"); ?></h2><?php } ?>
    <?php if (get_sub_field("text")) { ?>
        <div class="text"><?php the_sub_field("text"); ?></div>
    <?php } ?>
    <div class="column-holder">
    <?php
        if (have_rows("column")) {
            while(have_rows("column")) {
                the_row();
                ?>
                <?php if (get_sub_field("link")) { ?>
                    <a href="<?php the_sub_field("link"); ?>"  data-aos="fade-up">
                <?php } else { ?>
                <div  data-aos="fade-up">
                <?php } ?>
                    <img src="<?php the_sub_field("image"); ?>" />
                    <?php the_sub_field("text"); ?>
                <?php if (get_sub_field("link")) { ?>
                    </a>
                <?php } else { ?>
                    </div>
                <?php } ?>
                <?php
            }
        }
    ?>
    </div>
</div>