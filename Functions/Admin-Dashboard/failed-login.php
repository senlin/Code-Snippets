<?php
// adjust error message WP login screen - adapt output to make it your own
function failed_login () {
	return __( 'the login information you have entered is incorrect.', 'textdomain' )
}
add_filter ( 'login_errors', 'failed_login' );