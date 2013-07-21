<?php

/** 
 * Icon for toolbar site link
 * The code below has been adapted "Icon for Toolbar Site Link" (http://wpengineer.com/?p=2366) Author Sergej Müller (http://ebiene.de) License GPLv3
 */
// If the function already exists we don't do anything.
if ( ! function_exists( 'so_add_toolbar_site_icon' ) ) {
	// add to admin area, inside head
	add_action( 'admin_head', 'so_add_toolbar_site_icon' );
	// add to frontend, inside head, uncomment to make available
	//add_action( 'wp_head', 'sm_add_adminbar_site_icon' );
	function so_add_toolbar_site_icon() {
		if ( ! is_admin_bar_showing() ) {
			return;
		}
		echo '<style>
			#wp-admin-bar-site-name > a.ab-item:before {
				float: left;
				width: 16px;
				height: 16px;
				margin: 5px 5px 0 -1px;
				display: block;
				content: "";
				opacity: 0.4;
				background: #000 url("http://www.google.com/s2/u/0/favicons?domain=' . parse_url( home_url(), PHP_URL_HOST ). '");
				border-radius: 16px;
			}
			#wp-admin-bar-site-name:hover > a.ab-item:before {
				opacity: 1;
			}
		</style>';
	}
}
