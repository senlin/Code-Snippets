<?php
/**
 * Some love it, some hate the scrollfree editor that was introduced with WP 4.0
 * Following WP policy of "decisions not options", Core turn it on for all users
 *
 * This snippet turns it off by default and leaves the user to choose.
 */
add_action( 'after_setup_theme', 'so_scrollfree_editor_off' );

function so_scrollfree_editor_off(){
	
	set_user_setting( 'editor_expand', 'off' );

}
