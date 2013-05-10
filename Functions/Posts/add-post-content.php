<?php
// Insert custom content after each post http://digwp.com/2010/04/wordpress-custom-functions-php-template-part-2/
function so_add_post_content($content) {
	if(!is_feed() && !is_home()) {
		$content .= '<p>This article is copyright &copy; '.date('Y').'&nbsp;'.bloginfo('name').'</p>';
	}
	return $content;
}
add_filter('the_content', 'so_add_post_content');