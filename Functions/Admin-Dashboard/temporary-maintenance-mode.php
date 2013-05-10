<?php
	// Temp Maintenance - with http response 503 (Service Temporarily Unavailable)
	// This will only block users who are NOT an administrator from viewing the website.
	// source: http://wpdaily.co/top-10-snippets/
	
function so_wp_maintenance_mode() {
    
    if( ! current_user_can( 'edit_themes' ) || ! is_user_logged_in() ) {
        
        // Once you are doing something on the site that might break it, then you can uncomment this line. Once you're done comment it out again.
        //wp_die( 'Maintenance, please come back soon.', 'Maintenance - please come back soon.' , array('response' => '503') );
    }
}

add_action('get_header', 'so_wp_maintenance_mode');