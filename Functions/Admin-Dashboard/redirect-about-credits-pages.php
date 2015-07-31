<?php
/**
 * For a recent project we needed to block access to external http requests
 * The about.php and credits.php pages make these requests
 * The easiest way is to simply block access to these pages for all users
 *
 * We have adapted a function we found here:
 * @source: http://natko.com/block-access-to-wp-admin-and-wordpress-dashboard/
 */

function so_redirect_about_credits_pages() {
	
	$file = basename( $_SERVER['PHP_SELF'] );
	
	if ( $file == 'about.php' || $file == 'credits.php' && $file != 'admin-ajax.php' ) {

		wp_redirect( admin_url() );
		exit();

	}

}

add_action( 'init', 'so_redirect_about_credits_pages' );
