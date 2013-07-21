<?php
/**
 * Change Dashboard Sidebar Labels
 * source: http://wordpress.stackexchange.com/questions/9211/changing-admin-menu-labels
 * 
 * In the example below I am changing Posts to Articles and Category to Topic
 *
 * Disclaimer: this only changes the working in the Dashboard sidebar, not in the add/edit Posts/Category screens
 */
function so_change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Articles';
	$submenu['edit.php'][5][0] = 'Articles';
	$submenu['edit.php'][10][0] = 'Add Articles';
	$submenu['edit.php'][15][0] = 'Topic'; // Change name for categories
	echo '';
}

function so_change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Articles';
	$labels->singular_name = 'Article';
	$labels->add_new = 'Add Article';
	$labels->add_new_item = 'Add Article';
	$labels->edit_item = 'Edit Article';
	$labels->new_item = 'Article';
	$labels->view_item = 'View Article';
	$labels->search_items = 'Search Articles';
	$labels->not_found = 'No articles found';
	$labels->not_found_in_trash = 'No articles found in Trash';
}
add_action( 'init', 'so_change_post_object_label' );
add_action( 'admin_menu', 'so_change_post_menu_label' );
