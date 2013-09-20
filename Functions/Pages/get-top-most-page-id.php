<?php
/**
 * Get any page's Top most Page ID.
 * Whether it is the direct parent, a grand parent or even a great grand parent it will always return the top most page ID
 *
 * source: http://www.webcitizenmag.com/2010/05/20/how-to-get-top-parent-page-id-in-wordpress/
 */

// Add this function to your functions.php file or functionality plugin
function so_get_top_most_page_id() {
	
	global $post;
	
	$ancestors = $post->ancestors;
	
	// Check if page is a child page (any level)
	if ( $ancestors ) {

		//  Grab the ID of top-level page from the tree
		return end( $ancestors );

	} else {
		// Page is the top level, so use its own id
		return $post->ID;
	}

}

// to output the page title in your page templates all you now need is 

	echo get_the_title( so_get_top_most_page_id( $post->ID ) );
