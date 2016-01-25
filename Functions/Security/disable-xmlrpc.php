<?php
/**
 * 3steps to disable XMLRPC on your site to close a gaping security hole
 *
 * @source: //www.noupe.com/wordpress/wordpress-security-turn-off-the-xml-rpc-interface-94877.html
 */

// STEP 1
// Filter that disables the xmlrpc interface
add_filter( 'xmlrpc_enabled', '__return_false' );

// STEP 2
// Deactivate HTTP Header Entry
add_filter( 'wp_headers', 'so_remove_x_pingback' );

function so_remove_x_pingback( $headers ) {

	unset( $headers['X-Pingback'] );

	return $headers;

}
?>

// STEP 3
// block access to the file via .htaccess
<Files xmlrpc.php>
Order Deny,Allow
Deny from all
</Files>

