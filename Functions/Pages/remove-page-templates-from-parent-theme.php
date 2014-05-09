<?php
/**
 * Remove Page Templates from the Parent Theme so they are no longer an option in the Child Theme
 * This solution works for WP 3.9 and up
 * 
 * @source: http://wordpress.stackexchange.com/a/138555/2015
 */

add_filter( 'theme_page_templates', 'so_remove_page_template' ); 

function so_remove_page_template( $pages_templates ) { 
	
	unset( $pages_templates['onecolumn-page.php'] ); // change this for the name of the template you want to remove 

	return $pages_templates; 
}
