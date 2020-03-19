<?php
    if (have_rows('block')) {
        while (have_rows('block')) {
            the_row();
            include "content_blocks/" . get_row_layout() . ".php";
        }
    }
?>