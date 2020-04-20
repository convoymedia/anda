<?php
    if (get_sub_field("style") === "#575756") {
        $button_color = "#333333";
    }
    else {
        $button_color = "#575756";
    }

    if (get_sub_field("style") === "#F2F2F2") {
        $text_color = "#575756";
    }
    else {
        $text_color = "white";
    }

?>
<div class="icon_left_text_right_solid_bg" style="background-color:<?php the_sub_field("style"); ?>;">
    <div class="icon-text">
        <img src="<?php the_sub_field("icon"); ?>" />
        <div>
            <h3 style="color:<?php echo $text_color; ?>!important"><?php the_sub_field("title"); ?></h3>
            <div style="color:<?php echo $text_color; ?>!important"><?php the_sub_field("text"); ?></div>
            <a href="<?php the_sub_field("button_link"); ?>"><button style="background-color:<?php echo $button_color; ?>!important"><?php the_sub_field("button_title"); ?></button></a>
        </div>
    </div>
</div>