<?php
/**
 * WPML 3.1.7 introduced new Installer function for updates which is a massive improvement!
 *
 * There is however a little issue with the update nag showing a negative number for people
 * who have purchased the lifetime license.
 * Add this function to your functions.php file or functionality plugin and you will no longer be nagged.
 *
 * KEEP IN MIND THAT THIS FUNCTION IS ONLY USEFUL FOR LIFETIME LICENSES, USE AT YOUR OWN RISK
 *
 * @source: //wordpress.stackexchange.com/a/36110/2015
 */
function so_remove_wpml_renew_nag_on_lifetime_license() {
	
	remove_action( 'admin_notices', array( WP_Installer::instance(), 'setup_plugins_renew_warnings' ), 10 );
	remove_action( 'admin_notices', array( WP_Installer::instance(), 'queue_plugins_renew_warnings' ), 20 );

}

add_action( 'admin_notices', 'so_disable_wpml_renew_nag_on_lifetime_license' );
