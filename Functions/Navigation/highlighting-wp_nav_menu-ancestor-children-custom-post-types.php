<?php
	// The code below then finds the menu item with this class CPT-menu-item and adds another “current_page_parent” class to it.
	// Furthermore, it removes the “current_page_parent” from the blog menu item, if this is present.
	// Source: http://vayu.dk/highlighting-wp_nav_menu-ancestor-children-custom-post-types/

add_filter('nav_menu_css_class', 'so_current_type_nav_class', 10, 2);
function so_current_type_nav_class($classes, $item) {
    // Get post_type for this post
    $post_type = get_query_var('post_type');

    // Removes current_page_parent class from blog menu item
    if ( get_post_type() == $post_type )
        $classes = array_filter($classes, "get_current_value" );

    // Go to Menus and add a menu class named: {custom-post-type}-menu-item
    // This adds a current_page_parent class to the parent menu item
    if( in_array( $post_type.'-menu-item', $classes ) )
        array_push($classes, 'current_page_parent');

    return $classes;
}
function get_current_value( $element ) {
    return ( $element != "current_page_parent" );
}