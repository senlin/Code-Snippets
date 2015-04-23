<?php
/**
 * Function to remove the emojis added to WP 4.2
 * function and filter taken from Classic Smilies plugin by Samuel Wood (Otto) 
 *
 * @source: https://wordpress.org/plugins/classic-smilies/
 */
add_action( 'init', 'so_remove_emojis', 1 );
	
function so_remove_emojis() {

	// disable any and all mention of emoji's
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'so_remove_tinymce_emoji' );	

}

// filter function used to remove the tinymce emoji plugin
function so_remove_tinymce_emoji( $plugins ) {
	return array_diff( $plugins, array( 'wpemoji' ) );
}
