<?php
// Create Meta Description from Content
// source: http://www.paulund.co.uk/automatically-create-meta-description-from-content
function so_create_meta_desc() {
	global $post;
if (!is_single()) { return; }
	$meta = strip_tags($post->post_content);
	$meta = strip_shortcodes($post->post_content);
	$meta = str_replace(array("\n", "\r", "\t"), ' ', $meta);
	$meta = substr($meta, 0, 125); // number of characters it takes from the content and uses as meta description
	echo "<meta name='description' content='$meta' />";
}
add_action('wp_head', 'so_create_meta_desc');