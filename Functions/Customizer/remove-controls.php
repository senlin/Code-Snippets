<?php
/**
 * function that removes unwanted controls from the Customizer
 *
 * @source: //wordpress.stackexchange.com/a/206951/2015
 */
add_action( 'customize_register', 'so_remove_customizer_controls', 999 );

function so_remove_customizer_controls( $wp_customize ) { 

   $wp_customize->remove_section( 'themes' );
   $wp_customize->remove_section( 'title_tagline' );
   $wp_customize->remove_panel( 'nav_menus' );
   $wp_customize->remove_panel( 'widgets' );
   $wp_customize->remove_section( 'static_front_page' );

}
