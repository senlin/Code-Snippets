<?php
/**
 * Function to force English for the WP backend 
 *
 * @source: answer by Mircea Burdusa on https://www.linkedin.com/grp/post/1482937-6003792331411595265
 */

add_filter( 'locale', 'so_english_backend' );
 
function so_english_backend( $locale ) { 
	
	if ( is_admin() ) { 
		
		return 'en_US'; 
	
	} 
	
	return $locale; 

} 
