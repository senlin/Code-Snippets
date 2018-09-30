<?php
/**
 * Hide utterly useless Sizzify menu in admin sidebar
 *
 * @link: https://wordpress.org/plugins/elementor-addon-widgets/
 * @source: https://plugintests.com/plugins/elementor-addon-widgets/tips
 */

add_action( 'admin_menu', 'so_hide_sizzify', 101 );

function so_hide_sizzify() {
	//Hide "Sizzify".
	remove_menu_page('sizzify-admin');
	//Hide "Sizzify → Sizzify".
	remove_submenu_page('sizzify-admin', 'sizzify-admin');
	//Hide "Sizzify → More Features".
	remove_submenu_page('sizzify-admin', 'sizzify_more_features');
	//Hide "Sizzify → Template Directory".
	remove_submenu_page('sizzify-admin', 'sizzify_template_dir');
}
