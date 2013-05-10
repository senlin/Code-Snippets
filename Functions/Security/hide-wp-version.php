<?php 
// Hide WordPress Version

function so_remove_version() {
	return '';
}
add_filter('the_generator', 'so_remove_version');

// While this line removes the WordPress version from the head tags and the RSS Feeds, you will still need to remove the readme.html file from the root of your WordPress install