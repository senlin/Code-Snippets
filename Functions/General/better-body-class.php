<?php
/**
 * Add our own classes to the body_class function
 * adapted from: http://www.mimoymima.com/2013/01/lab/better-body-class-function-wordpress/
 * 
 * @20131220: This in an update to the earlier code, where it was need to change the call to the body_class.
 * with the snippet below however that is no longer necessary and as an additional advantage it also keeps the
 * original WordPress body class which may (or may not) come in handy one day.
 */

function so_body_classes( $classes ) {

    global $post;

	// return some of these things
    if ( is_category() ) {
    	$classes[] =  'page_category';
    } elseif ( is_search() ) {
    	$classes[] = 'page_search';
    } elseif ( is_tag() ) {
    	$classes[] = 'page_tag';
    } elseif ( is_home() ) {
    	$classes[] = 'page_home';
    } elseif ( is_404() ) {
    	$classes[] = 'page_404';
    }

    // return page_(page name)
    if ( is_page() ) {
        $pn = $post->post_name;
        $classes[] = 'page_' . $pn;
    }

    // return parent_(parent name)
    $post_parent = get_post( $post->post_parent );
    $parentSlug = $post_parent->post_name;
    
    if ( is_page() && $post->post_parent ) {
		$classes[] = 'parent_' . $parentSlug;
    }

    // return template_(template name)
    $temp = get_page_template();
    if ( $temp != null ) {
        $path = pathinfo( $temp );
        $tmp = $path['filename'] . '.' . $path['extension'];
        $tn= str_replace( '.php', '', $tmp );
        $classes[] = 'template_' . $tn;
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
