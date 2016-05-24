<?php
/**
 * Conditionally hide the output of SEO columns and metabox on CPT edit screens
 * using filters provided with plugin and conditional
 * needs priority 9 for columns to work
 *
 * @source filters:		//theseoframework.com/docs/api/filters/
 * @source function:	//codex.wordpress.org/Function_Reference/get_current_screen#Example (2nd example)
 * @source priority:	//wordpress.org/support/topic/filter-to-hide-columns-only-seems-to-work-globally?replies=2#post-8436117
 */

add_action( 'current_screen', 'so_hide_seo_backend_output_cpt', 9 );

function so_hide_seo_backend_output_cpt() {

	$current_screen = get_current_screen();

	if ( $current_screen ->post_type === 'wp-help' ) { // change wp-help into your own CPT

		add_filter( 'the_seo_framework_seobox_output', '__return_false' );

		add_filter( 'the_seo_framework_show_seo_column', '__return_false' );

	}

}