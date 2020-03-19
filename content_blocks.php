<?php
    if (have_rows('blocks')) {
        while (have_rows('blocks')) {
            the_row();
            include "content_blocks/" . get_row_layout() . ".php";
        }
    }
?>