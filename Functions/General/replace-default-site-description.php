<?php
/**
 * Useful for theme development
 * If you want to change the default site description of "Just another WordPress website"
 *
 * add this to your functions.php file;
 * if your theme already has the `after_theme_setup`-call, then just add the `update_option` line and forget about the rest
 */

function so_replace_default_site_description() {
	
	update_option( 'blogdescription', 'WHATEVER TAG YOU WANT' );

}

add_action( 'after_theme_setup', 'so_replace_default_site_description' );