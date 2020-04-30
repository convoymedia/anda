<div class="text_content_area">
    <h2><?php the_sub_field("title"); ?></h2>
    <div class="column-holder">
    <?php
        if (have_rows("column")) {
            while(have_rows("column")) {
                the_row();
                ?>
                <?php if (get_sub_field("link")) { ?>
                    <a href="<?php the_sub_field("link"); ?>">
                <?php } else { ?>
                <div>
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