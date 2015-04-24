<?php
/**
 * After each update of the Yoast WordPress SEO plugin, the user is redirected
 * to the About page of the plugin (admin.php?page=wpseo_dashboard&intro=1#top#new)
 *
 * This is irritating at best and very unprofessional on websites of (large) companies and organisations
 * with many users that have the Administrator Role.
 *
 * This filter gloabally sets the "see about page" setting and the "ignore tour" setting to true
 *
 * Drop this file into the wp-content/mu-plugins folder (create it if it doesn't exist) and you and your fellow Admins
 * will not be disturbed anymore by this nonsense.
 *
 * @source: github.com/Yoast/wordpress-seo/pull/2235#issuecomment-95059096
 */

function so_remove_yoast_crap( $option ) {

	$option['seen_about'] = true;
	$option['ignore_tour'] = true;

	return $option;

}

add_filter( 'option_wpseo', 'so_remove_yoast_crap' );