<?php
/**
 * Many see XMLRPC as a security issue / vulnerability. It certainly is for users with weak passwords.
 * This filter turns XMLRPC off, so nothing to worry anymore.
 *
 * @source: //developer.wordpress.org/reference/hooks/xmlrpc_enabled/
 */

add_filter( 'xmlrpc_enabled', '__return_false' );