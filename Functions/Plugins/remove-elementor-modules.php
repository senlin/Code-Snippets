<?php
/**
 * Specific file for all Elementor related functions
 *
 * usually name of the module can be found by looking up the get_name() function
 */

add_action( 'elementor/widgets/widgets_registered', 'so_hide_elementor_modules', 20 );

function so_hide_elementor_modules( $widgets_manager ) {
	// Elementor elements
	$widgets_manager->unregister_widget_type( 'google_maps' );
	// Premium Sizzify widgets
	$widgets_manager->unregister_widget_type( 'eaw_flipcard' );
	$widgets_manager->unregister_widget_type( 'eaw-review-box' );
	$widgets_manager->unregister_widget_type( 'eaw-share-buttons' );
	$widgets_manager->unregister_widget_type( 'eaw-typed-headline' );
	// Sizzify widgets
	$widgets_manager->unregister_widget_type( 'obfx-newsletter' );
	// Anywhere Elementor Pro plugin
	$widgets_manager->unregister_widget_type( 'ae-acf-gallery' );
	$widgets_manager->unregister_widget_type( 'ae-acf-repeater' );
	$widgets_manager->unregister_widget_type( 'ae-cf-google-map' );
	$widgets_manager->unregister_widget_type( 'ae-tax-custom-field' );
	$widgets_manager->unregister_widget_type( 'ae-searchform' );
	$widgets_manager->unregister_widget_type( 'ae-custom-field' );
	$widgets_manager->unregister_widget_type( 'ae-author' );
	$widgets_manager->unregister_widget_type( 'ae-post-comments' );
	$widgets_manager->unregister_widget_type( 'ae-portfolio' );
}
