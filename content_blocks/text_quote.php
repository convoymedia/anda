<div class="text_quote <?php the_sub_field("style"); ?>">
    <div class="quotes">
        <?php
            if (have_rows("text")) {
                while (have_rows("text")) {
                    the_row();
                    ?>
                    <div class="a-quote">
                        <div class="the-quote">
                            <?php the_sub_field("quote"); ?>
                        </div>
                        <div class="who-said-it">
                            <?php the_sub_field("person"); ?>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
</div>