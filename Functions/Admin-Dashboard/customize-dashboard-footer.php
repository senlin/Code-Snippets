<?php
// CUSTOMIZE DASHBOARD FOOTER
function so_replace_footer_admin ()
{
	echo '<span id="footer-thankyou">' . __( 'Custom Footer Text', 'textdomain') . '<a href="#" target="_blank">' . __( 'Link', 'textdomain' ) . '</a></span>';
}
add_filter('admin_footer_text', 'so_replace_footer_admin');
