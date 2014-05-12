<?php
/**
 * Function to make it possible to query on is_post_type()
 * 
 * source: http://wordpress.stackexchange.com/a/22166/2015
 */
function is_post_type( $type ) {
    
    global $wp_query;
    
    if ( $type == get_post_type( $wp_query->post->ID) ) return true;
    
    return false;

}

/**
 * EXAMPLE
 * Now you can enqueue styles or scripts only for a specific Custom Post Type
 */
if ( is_single() && is_post_type( 'cpt-name' ) ) {

	// the script and/or style you want to enqueue

}  