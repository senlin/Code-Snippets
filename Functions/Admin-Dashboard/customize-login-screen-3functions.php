<?php // CUSTOM ADMIN LOGIN HEADER LOGO

function my_custom_login_logo()
{
	echo '<style  type="text/css"> h1 a {  background-image:url('.get_bloginfo('template_directory').'/images/logo_admin.png)  !important; } </style>';
}
add_action('login_head',  'my_custom_login_logo');

// CUSTOM ADMIN LOGIN LOGO LINK

function change_wp_login_url()
{
	echo bloginfo('url');  // OR ECHO YOUR OWN URL
}
add_filter('login_headerurl', 'change_wp_login_url');

// CUSTOM ADMIN LOGIN LOGO & ALT TEXT

function change_wp_login_title()
{
	echo get_option('blogname'); // OR ECHO YOUR OWN ALT TEXT
}
add_filter('login_headertitle', 'change_wp_login_title');
