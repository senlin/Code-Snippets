<?php
	// Hide WordPress Update
	// source: http://wpdaily.co/top-10-snippets/

function so_wp_hide_update() {
    remove_action('admin_notices', 'update_nag', 3);
}
add_action('admin_menu','so_wp_hide_update');