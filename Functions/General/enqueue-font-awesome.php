<?php
/**
 * Function to properly enqueue Font Awesome
 *
 * This is just one example, you should add all your scripts and styles to the so_scripts function
 */

/**
 * When Font Awesome sees an update, you can adjust the version number
 *
 */
function so_fontawesome_url() {
	$fontawesome_url = '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css';

	return $fontawesome_url;
}

/**
 * Enqueue scripts and styles.
 *
 * When Font Awesome sees an update, you can adjust the version number 
 */
add_action( 'wp_enqueue_scripts', 'so_scripts' );

function so_scripts() {

	/* STYLES */
	wp_enqueue_style( 'fontawesome', so_fontawesome_url(), array(), '4.1.0' );

}