<?php
/**
 * Snippet taken from Remove Widget Titles plugin by Stephen Cronin
 * (because I think it is nonsense to install a plugin for a simple function like this)
 * 
 * Removes the title from any widget that has a title starting with the "!" character.
 *
 * @source: wordpress.org/plugins/remove-widget-titles/
 */
 
// Add the filter and function, returning the widget title only if the first character is not "!"
add_filter( 'widget_title', 'so_remove_widget_title' );

function so_remove_widget_title( $widget_title ) {
	if ( substr ( $widget_title, 0, 1 ) == '!' )
		return;
	else 
		return ( $widget_title );
}