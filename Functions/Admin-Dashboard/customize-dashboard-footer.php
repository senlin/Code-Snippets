<?php
// CUSTOMIZE DASHBOARD FOOTER
function remove_footer_admin ()
{
	echo '<span id="footer-thankyou">';
	echo '__("Custom Footer Text ", "text-domain")';
	echo '<a href="#" target="_blank">';
	echo '__("Link", "text-domain")';
	echo '</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
