<?php
	// redirect user after login not to go to profile, but elsewhere
	// combination of http://www.shinephp.com/how-to-block-wordpress-admin-menu-item/ and
	// http://www.strangework.com/2010/03/26/how-to-redirect-a-user-after-logging-into-wordpress/

if ( current_user_can( 'subscriber' ) ) {

	function so_redirect_after_login() {
		
		global $redirect_to;
		
			if ( !isset( $_GET['redirect_to'] ) ) {
		
				$redirect_to = ( get_option( 'siteurl' ) . '/wp-admin/rest-of-url' );
		
			}
		
		}
	
	add_action( 'login_form', 'so_redirect_after_login' );
}
