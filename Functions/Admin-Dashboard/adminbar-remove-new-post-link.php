<?php
/**
 * Sometimes it is necessary to remove the Posts entirely from your WP install.
 * You can do this via this excellent plugin: //github.com/tonykwon/wp-disable-posts
 *
 * The plugin however doesn't address the New Post link in the admin bar.
 * To remove that we need another function: remove_nodes()
 *
 * @source: //wordpress.stackexchange.com/a/76647/2015
 */

add_action( 'admin_bar_menu', 'so_remove_new_post_link', 999 );

function so_remove_new_post_link() {
    
	global $wp_admin_bar;   
	$wp_admin_bar->remove_node( 'new-post' );
	
	// can be extended for other links in this submenu too:
	//$wp_admin_bar->remove_node( 'new-page' );
	//$wp_admin_bar->remove_node( 'new-media' );
	//$wp_admin_bar->remove_node( 'new-user' );

}