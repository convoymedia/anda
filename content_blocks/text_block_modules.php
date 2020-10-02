<div class="text-block-moduless" <?php if (get_sub_field("bg_colour")) { ?> style="background-color:<?php the_sub_field("bg_colour"); ?>" <?php } ?>>
<?php if (get_sub_field("title")) { ?><h2><?php the_sub_field("title"); ?></h2><?php } ?>
    <?php 
        if (get_sub_field("text")) {
            ?><div class="p"><?php the_sub_field("text"); ?></div><?php
        }
    ?>
    <div class="text-block-modules">
    <?php
        if (have_rows("module")) {
            while (have_rows("module")) {
                the_row();
                ?>
                <div data-aos="fade-up">
                    <div class="img"><img src="<?php the_sub_field("image"); ?>" /></div>
                    <div class="div">
                        <h3><?php the_sub_field("title"); ?></h3>
                        <p><?php the_sub_field("text"); ?></p>
                    </div>
                </div>
                <?php
            }
        }
    ?>
    </div>
</div>