<?php
/**
 * Add our own classes to the body_class function
 * adapted from: http://www.mimoymima.com/2013/01/lab/better-body-class-function-wordpress/
 * 
 * @20131220: This in an update to the earlier code, where it was needed to change the call to the body_class.
 * with the snippet below however that is no longer necessary and as an additional advantage it also keeps the
 * original WordPress body class which may (or may not) come in handy one day.
 *
 * @20140423 adjusted the code to make it more useful
 */

function so_body_classes( $classes ) {

    global $post;

	// return some of these things
    if ( is_category() ) {
    	$classes[] =  'cat-archive';
    } elseif ( is_search() ) {
    	$classes[] = 'search-page';
    } elseif ( is_tag() ) {
    	$classes[] = 'tag-archive';
    } elseif ( is_home() ) {
    	$classes[] = 'home-page';
    } elseif ( is_404() ) {
    	$classes[] = 'error-page';
    }

    // return page-(page name)
    if ( is_page() ) {
        $pn = $post->post_name;
        $classes[] = 'page-' . $pn;
    }

    if ( is_page() && $post->post_parent ) {
		$classes[] = 'child-of-' . $parentSlug;
    }

    // if WPML has been installed return the language code
    if ( in_array( 'sitepress-multilingual-cms/sitepress.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	    if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
		    $lang = 'lang-' . ICL_LANGUAGE_CODE;
		    $classes[] = $lang;
	    }
    }

    return $classes;
    
}

add_filter( 'body_class', 'so_body_classes' );
