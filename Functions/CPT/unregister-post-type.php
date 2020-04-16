<?php
/**
 * Premium themes can register an enormous amount of post types that may or may not useful
 * The easiest way to get rid of them from the child theme is by hooking into the init function
 */

function so_unregister_post_type(){

    unregister_post_type( 'sample_posttype' );
    unregister_post_type( 'testimonials_posttype' );
    unregister_post_type( 'services_posttype' );
    unregister_post_type( 'slider_posttype' );
    unregister_post_type( 'faqs_posttype' );

}

add_action( 'init', 'so_unregister_post_type' );
