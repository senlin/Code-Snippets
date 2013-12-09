<?php
/**
 * Append items to nav menu
 * via [WP Snippets till Christmas](http://advent.squareonemd.co.uk/)
 *
 * With a few alterations, you can append (or prepend) anything to a nav menu.
 * A few examples would be search fields, dynamically generated ‘Log In’ and ‘Log Out’ links, ‘User Profile’ or ‘User Account’ links, fancy images/icon fonts, etc
 *
 * source https://gist.github.com/woodent/1249995
 */

/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
add_filter( 'wp_nav_menu_items', 'so_add_admin_link', 10, 2 );

function so_add_admin_link( $items, $args ) {
    if( $args->theme_location == 'footer_menu' ) { // change 'footer_menu' to the menu in the theme_location of your choice
        $items = $items . '<li><a title="' . esc_attr( __( 'Admin', 'textdomain' ) ) . '" href="' . esc_url( admin_url() ) . '">' . esc_attr( __( 'Admin', 'textdomain' ) ) . '</a></li>';
    }
    return $items;
}
