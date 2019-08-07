<?php
/**
 * Some themes load dashicons on frontend
 *
 * The following snippets show various ways to remove them from the frontend
 *
 * @source: //wordpress.stackexchange.com/questions/161476/how-to-remove-dashicons-min-css-from-frontend
 */

// remove dashicons from frontend
function so_deregister_styles() {
	wp_deregister_style( 'dashicons' );
}
add_action( 'wp_print_styles', 'so_deregister_styles', 99 );


// remove dashicons from frontend for non-admin
function so_dequeue_dashicon() {
    if ( current_user_can( 'update_core' ) ) {
        return;
    }
    wp_deregister_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'so_dequeue_dashicon' );

// Remove dashicons from frontend for unauthenticated users
function so_dequeue_dashicons() {
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}
add_action( 'wp_enqueue_scripts', 'so_dequeue_dashicons' );
