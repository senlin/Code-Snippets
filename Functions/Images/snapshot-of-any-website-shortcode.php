<?php
	// Shortcode that outputs a snapshot of any website
	// source: http://wpdaily.co/top-10-snippets/

function so_wp_snap($atts, $content = NULL) {
	extract(shortcode_atts(array(
		'snap' => 'http://s.wordpress.com/mshots/v1/',
		'url' => 'http://wpti.ps/',
		'alt' => 'WP TIPS',
		'w' => '400', // width
		'h' => '300' // height
	), $atts));

    $img = '<img alt="' . $alt . '" src="' . $snap . '' . urlencode($url) . '?w=' . $w . '&h=' . $h . '" />';
	return $img;
}
add_shortcode('snap', 'so_wp_snap');
// Use [snap url="http://wpti.ps/" alt="WP TIPS" w="400" h="300"]