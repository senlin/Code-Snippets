<?php
/**
 * It won't happen too often, but sometimes debugging on a live site is necessary
 * Use this snippet to not show every visitor the PHP Warnings
 *
 * @src: https://www.classicpress.net/blog/resolve-plugin-conflicts-without-deactivating-all-classicpress-plugins/
 */

if ( !empty( $_GET['secretkey'] ) && $_GET['secretkey'] === 'somevalue' ) {
    define( 'WP_DEBUG', true );
    define( 'WP_DEBUG_LOG', false );
    define( 'WP_DEBUG_DISPLAY', true );
    define( 'CONCATENATE_SCRIPTS', false );
}

/**
 * Then, to debug:
 * https://mysite.com/?p=123&secretkey=somevalue
 * or if I’m testing with pretty permalinks:
 * https://mysite.com/some-page-title/?secretkey=somevalue
 *
 * Make up a new secret key and value pair each time there’s need to debug in production (which should be fairly rare).
 * After completion, the constants get set back to disable debugging.
 */
