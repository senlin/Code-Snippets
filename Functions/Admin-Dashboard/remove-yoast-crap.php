<?php

/**
 * Plugin Name: SO Remove Yoast Crap
 * Plugin URI:  https://github.com/senlin/Code-Snippets/blob/master/Functions/Admin-Dashboard/remove-yoast-crap.php
 * Description: Set global filter that about page and tour of WordPress SEO plugin are seen resp. done
 * Author:      SO WP
 * Author URI:  http://so-wp.com/plugins/
 * Version:     1.0
 * License:     GPL2+
 */

/**
 * Silence is golden
 */
if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * After each update of the Yoast WordPress SEO plugin, the user is redirected
 * to the About page of the plugin (admin.php?page=wpseo_dashboard&intro=1#top#new)
 *
 * This is irritating at best and very unprofessional on websites of (large) companies and organisations
 * with many users that have the Administrator Role.
 *
 * This filter globally sets the "see about page" setting and the "ignore tour" setting to true
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

// Remove irritating adds sidebar
function ryc_style_function() {
	echo '<style type="text/css">
		#sidebar-container.wpseo_content_cell {display:none;}
	</style>';
}

add_action( 'admin_head', 'ryc_style_function' );

// disable page analysis function
add_filter( 'wpseo_use_page_analysis', '__return_false' );
