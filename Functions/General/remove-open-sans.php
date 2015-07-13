<?php
/**
 * Remove Open Sans font that WordPress automatically adds to frontend
 * has optional action to remove it from backend too
 *
 * @alternative: ../Admin-Dashboard/disable-google-fonts-wp-backend.php
 */

function so_remove_open_sans() {
	wp_deregister_style( 'open-sans' );
	wp_register_style( 'open-sans', false );
}

add_action( 'wp_enqueue_scripts', 'so_remove_open_sans' );

// To remove it from WP Backend too, uncomment the line below.
// add_action('admin_enqueue_scripts', 'so_remove_open_sans');
