<?php
/**
 * Source: https://gist.github.com/paulund/5331369
 * Adjust the number on line 9 to your liking
 */
add_filter( 'preprocess_comment', 'so_minimal_comment_length' );

function so_minimal_comment_length( $commentdata ) {
    $minimalCommentLength = 20;

	if ( strlen( trim( $commentdata['comment_content'] ) ) < $minimalCommentLength ) 
        {
		wp_die( 'All comments must be at least ' . $minimalCommentLength . ' characters long.' );
        }
	return $commentdata;
}	
?>