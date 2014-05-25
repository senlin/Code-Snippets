<?php
/**
 * Function to allow for HTML in widget titles
 * using a shortcode you can design yourself
 *
 * usage:
 * [br]
 * [span]something[/span]
 * [anchor url="http://domain.com/"]something[/anchor]
 * 
 * Most of the widgets use a filter on widget title widget_title, but some custom widget might not apply or use this hook. 
 * On those widgets, this method will not work.
 *
 * source: http://wordpress.stackexchange.com/a/136800/2015
 */

// Original snippet
add_filter('widget_title', 'do_shortcode');

add_shortcode('br', 'so_shortcode_br');
function so_shortcode_br( $attr ){ return '<br />'; }

add_shortcode('span', 'so_shortcode_span');
function so_shortcode_span( $attr, $content ){ return '<span>'. $content . '</span>'; }

add_shortcode('anchor', 'so_shortcode_anchor');
function so_shortcode_anchor( $attr, $content ){ 
    return '<a href="'. ( isset($attr['url']) ? $attr['url'] : '' ) .'">'. $content . '</a>'; 
}

/**
 * Adjusted for use with Font Awesome font icons
 * 
 * usage: [fa]name-of-icon[/fa] for example [fa]wordpress[/fa] shows WordPress icon
 *
 * of course you need to have Font Awesome properly enqueued in your functions file too:
 * see https://github.com/senlin/Code-Snippets/tree/master/Functions/General/enqueue-font-awesome.php for that function 
 */
add_filter( 'widget_title', 'do_shortcode' );

add_shortcode( 'fa', 'so_shortcode_fa' );
function so_shortcode_fa( $attr, $content ) {
	return '<i class="fa fa-'. $content . '"></i>';
}