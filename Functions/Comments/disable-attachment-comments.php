<?php
/**
 * Disable commenting on Attachment pages
 *
 * @source: https://codex.wordpress.org/Function_Reference/comments_open
 */
add_filter( 'comments_open', 'so_disable_attachment_pages_comments', 10 , 2 );

function so_disable_attachment_pages_comments( $open, $post_id ) {
	
	$post = get_post( $post_id );
	
	if ( 'attachment' == $post->post_type )
		$open = false;

	return $open;

}