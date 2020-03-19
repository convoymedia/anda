<?php
    if (have_rows('block')) {
        echo "if";
        while (have_rows('block')) {
            echo "while";
            the_row();
            echo "content_blocks/" . get_row_layout() . ".php";
            include "content_blocks/" . get_row_layout() . ".php";
        }
    }
?>