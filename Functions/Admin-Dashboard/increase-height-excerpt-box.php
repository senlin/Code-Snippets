<?php // Increase Height Excerpt Box (source: 1st snippet on http://spyrestudios.com/17-time-saving-code-snippets-for-wordpress-developers/)
add_action('admin_head', 'excerpt_textarea_height');
function excerpt_textarea_height() {
    echo'
    <style type="text/css">
        #excerpt{ height:500px; } 
    </style>
    ';
}