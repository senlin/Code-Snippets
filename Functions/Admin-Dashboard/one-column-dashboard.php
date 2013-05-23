<?php /*
 * One Column Dashboard
 *
 * source: http://wordpress.stackexchange.com/a/29307/2015
 */
 
function so_layout_columns( $columns ) {
    $columns['dashboard'] = 1;
    return $columns;
}
add_filter( 'screen_layout_columns', 'so_layout_columns' );

function so_layout_dashboard() {
    return 1;
}
add_filter( 'get_user_option_screen_layout_dashboard', 'so_layout_dashboard' );
