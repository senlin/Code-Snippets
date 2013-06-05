<?php
/**
 * Remove WordPress SEO (by Yoast) Stuff
 *
 * These different functions from various sources can come in handy when you manage sites for other people 
 * and you don't want to give them too much control or you don't want to risk them messing up the settings.
 * 
 */

// get rid of WordPress SEO metabox - adapted from http://wordpress.stackexchange.com/a/91184/2015
if ( ! is_super_admin() ) {        
	function so_remove_wp_seo_meta_box() {
	    remove_meta_box( 'wpseo_meta', 'page', 'normal' ); // change page into any post_type
	}
    add_action( 'add_meta_boxes', 'so_remove_wp_seo_meta_box', 100000 );
}

// get rid of irritating WordPress SEO Columns - http://yoast.com/wordpress/seo/api/#filters
add_filter( 'wpseo_use_page_analysis', '__return_false' );