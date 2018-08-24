<?php

/**
 * Snippet to use different background colors for different Post statuses
 * Different colors will show on main All Posts page (../wp-admin/edit.php)
 *
 * inspired by //borishoekmeijer.nl/tutorials/wordpress-snippet-collection/#highlighter_567837
 */

// set different colors for pages/posts in different statuses
add_action( 'admin_footer', 'so_posts_status_color' );

function so_posts_status_color() {
    ?>
    <style>
        .status-draft{background:lightblue!important;}
        .status-future{background:lightgreen!important;}
        .status-pending{background:pink!important;}
        .status-private{background:lightyellow!important;}
        .status-publish{background:aqua!important;}
        .status-publish.post-password-required{background:orange!important;}
        .status-publish.status-sticky{background-color:deepskyblue!important;}
    </style>
    <?php
}
