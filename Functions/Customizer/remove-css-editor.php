<?php
/**
 * Remove the additional CSS section, introduced in WP 4.7, from the Customizer.
 *
 * @source: //gist.github.com/robincornett/cb3fd0024fd6eae6eff58da421f722f7#file-functions-php
 */

add_action( 'customize_register', 'bhi_remove_css_section', 15 );

function bhi_remove_css_section( $wp_customize ) {

	$wp_customize->remove_section( 'custom_css' );

}