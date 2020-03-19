<div class="text_content_area">
    <h2><?php the_sub_field("title"); ?></h2>
    <div class="column-holder">
    <?php
        if (have_rows("column")) {
            while(have_rows("column")) {
                the_row();
                ?>
                <div>
                    <img src="<?php the_sub_field("image"); ?>" />
                    <?php the_sub_field("text"); ?>
                </div>
                <?php
            }
        }
    ?>
    </div>
</div>