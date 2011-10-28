<?php
// CUSTOMIZE DASHBOARD HEADER LOGO

function custom_admin_logo() {
	echo '<style type="text/css">#header-logo { background-image: url('.get_bloginfo('stylesheet_directory').'/images/logo_admin_dashboard.png) !important; }</style>';
}
add_action('admin_head', 'custom_admin_logo');