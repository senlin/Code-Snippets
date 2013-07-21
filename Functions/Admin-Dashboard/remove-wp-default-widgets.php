<?php
// Remove WP Default Widgets 2 Methods

// Short Method - removes all default widgets in one go
// source: http://wpmu.org/how-to-remove-default-wordpress-widgets-and-clean-up-your-widgets-page/#comment-134443
function so_remove_wp_default_widgets() {
	do_action( 'widgets_init' );
}

remove_action( 'init', 'wp_widgets_init', 1 );
add_action( 'init','so_remove_wp_default_widgets', 1 );

// Long Method - you can select which widgets to remove, comment out the ones you'd like to keep
// source: http://sixrevisions.com/wordpress/how-to-customize-the-wordpress-admin-area/
function so_remove_wp_default_widgets() {
	unregister_widget( 'WP_Widget_Pages' );
	unregister_widget( 'WP_Widget_Calendar' );
	unregister_widget( 'WP_Widget_Archives' );
	if ( get_option( 'link_manager_enabled' ) )
		unregister_widget( 'WP_Widget_Links' );
	unregister_widget( 'WP_Widget_Meta' );
	unregister_widget( 'WP_Widget_Search' );
	unregister_widget( 'WP_Widget_Text' );
	unregister_widget( 'WP_Widget_Categories' );
	unregister_widget( 'WP_Widget_Recent_Posts' );
	unregister_widget( 'WP_Widget_Recent_Comments' );
	unregister_widget( 'WP_Widget_RSS' );
	unregister_widget( 'WP_Widget_Tag_Cloud' );
	unregister_widget( 'WP_Nav_Menu_Widget' );
}

add_action( 'widgets_init', 'so_remove_wp_default_widgets', 1);