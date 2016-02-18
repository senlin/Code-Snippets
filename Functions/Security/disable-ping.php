<?php
/**
 * Ping has been and still is used to have WP sites that have this enabled participate in DDOS attacks
 * These small snippets disables ping on your site and remove it from the headers too.
 *
 * @source: //blog.sucuri.net/2016/02/wordpress-sites-leveraged-in-ddos-campaigns.html
 */

add_filter( 'xmlrpc_methods', 'so_remove_ping' );

function so_remove_ping( $methods ) {
   unset( $methods['pingback.ping'] );
   unset( $methods['pingback.extensions.getPingbacks'] );
   return $methods;
}

add_filter( 'wp_headers', 'so_remove_pingback_headers' );

function so_remove_pingback_headers( $headers ) {
   unset( $headers['X-Pingback'] );
   return $headers;
}