<?php
	// Anti Spam Mailto Links
	// source: http://wpdaily.co/top-10-snippets/

function so_email_encode_function($atts, $content){
	return '<a href="'.antispambot($content).'">'.antispambot($content).'</a>';
}
add_shortcode('email', 'so_email_encode_function');
// Use shortcode [email]email@me.com[/email]