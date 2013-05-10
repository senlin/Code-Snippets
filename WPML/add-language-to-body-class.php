<?php
	// add language to body class

if ( !function_exists( 'so_body_class' ) ) {
	
	function so_body_class( $classes ) {
		
		// Add language slug to body classes
		if ( defined( 'ICL_LANGUAGE_CODE' ) )
			
			$classes[] = ICL_LANGUAGE_CODE;

		return $classes;
	}
}
add_filter( 'body_class', 'so_body_class' );
