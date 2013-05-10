<?php // Remove "Private" or "Protected" from Private or Protected Post Titles
// via http://www.viper007bond.com/2011/12/20/how-to-remove-or-change-private-or-protected-from-wordpress-post-titles/

add_filter( 'private_title_format', 'so_private_title_format' );
function yourprefix_private_title_format( $format ) {
    return '%s';
}

add_filter( 'protected_title_format', 'so_protected_title_format' );
function yourprefix_protected_title_format( $format ) {
    return '%s';
} 
