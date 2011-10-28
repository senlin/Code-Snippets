<?php
// Insert custom content after each post http://digwp.com/2010/04/wordpress-custom-functions-php-template-part-2/
function add_post_content($content) {
	if(!is_feed() && !is_home()) {
		$content .= '<p>This article is copyright &copy; '.date('Y').'&nbsp;'.bloginfo('name').'</p>';
	}
	return $content;
}
add_filter('the_content', 'add_post_content');