<?php
// CUSTOMIZE DASHBOARD HEADER LOGO

function so_custom_admin_logo() {
	echo '<style type="text/css">#header-logo { background-image: url('.get_bloginfo('stylesheet_directory').'/images/logo_admin_dashboard.png) !important; }</style>';
}
add_action('admin_head', 'so_custom_admin_logo');