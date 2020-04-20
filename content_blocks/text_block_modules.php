<div class="text-block-moduless">
    <h2><?php the_sub_field("title"); ?></h2>
    <div class="text-block-modules">
    <?php
        if (have_rows("module")) {
            while (have_rows("module")) {
                the_row();
                ?>
                <div>
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