<?php
/**
 * List all sites in a Multisite Network
 *
 * @source: codex.wordpress.org/Function_Reference/wp_get_sites
 */
	
	$site_list = wp_get_sites(
		array(
			/**
			 * if network has large number of sites you can limit the output
			 * if wp_is_large_network() returns TRUE (there are more than 10K sites),
			 * wp_get_sites() will return an empty array.
			 */
			//'limit' => 100, // uncomment if you want to use the limit
			'offset' => 1 // skip the main site
		)
	);
		
	echo '<ul class="site-list">';
	
	foreach ( $site_list as $site ) {
		
		$site_details = get_blog_details( $site );
		
		echo '<li class="site"><a href="http://' . $site['domain'] . $site['path'] . '" title="' . $site_details->blogname . '">' . $site_details->blogname . '</a></li>';
		
	}
	
	echo '</ul>';				
