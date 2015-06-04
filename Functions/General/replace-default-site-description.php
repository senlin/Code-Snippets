<?php
/**
 * Useful for theme development
 * If you want to change the default site description of "Just another WordPress website"
 *
 * add this to your functions.php file
 */

function so_replace_default_site_description() {
	
	update_option( 'blogdescription', 'WHATEVER TAG YOU WANT' );

}

add_action( 'after_setup_theme', 'so_replace_default_site_description' );