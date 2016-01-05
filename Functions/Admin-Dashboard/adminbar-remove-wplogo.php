<?php
/**
 * Sometimes it can be useful to remove the WordPress logo from the adminbar,
 * this function does that.
 */

add_action( 'wp_before_admin_bar_render', 'so_adminbar_remove_wplogo' );

function so_adminbar_remove_wplogo() {
	global $wp_admin_bar;
	
	$wp_admin_bar->remove_menu( 'wp-logo' );
}
