<?php
/**
 * remove_action or remove_filter with external classes
 *
 * It is always very difficult to remove actions/filters that are added by plugins
 * By adding this general remove_class_action function to your code, it becomes super easy to
 * remove these actions and filters.
 *
 * Example usage below the code snippet.
 *
 * @source: //wordpress.stackexchange.com/questions/36013/remove-action-or-remove-filter-with-external-classes/339046#339046
 */

function remove_class_action( $tag, $class = '', $method, $priority = null ) : bool {

	global $wp_filter;

	if ( isset( $wp_filter[ $tag ] ) ) {
		$len = strlen( $method );
		foreach( $wp_filter[ $tag ] as $_priority => $actions ) {
			if ( $actions ) {
				foreach( $actions as $function_key => $data ) {
					if ( $data ) {
						if ( substr( $function_key, -$len ) == $method ) {
							if ( $class !== '' ) {
								$_class = '';
								if ( is_string( $data['function'][0] ) ) {
									$_class = $data['function'][0];
								} elseif ( is_object( $data['function'][0] ) ) {
									$_class = get_class( $data['function'][0] );
								} else {
									return false;
								}
								if ( $_class !== '' && $_class == $class ) {
									if ( is_numeric( $priority ) ) {
										if ( $_priority == $priority ) {
											//if ( isset( $wp_filter->callbacks[$_priority][$function_key] ) ) {}
											return $wp_filter[$tag]->remove_filter( $tag, $function_key, $_priority );
										}
									} else {
										return $wp_filter[$tag]->remove_filter( $tag, $function_key, $_priority );
									}
								}
							} else {
								if ( is_numeric( $priority ) ) {
									if ( $_priority == $priority ) {
										return $wp_filter[$tag]->remove_filter( $tag, $function_key, $_priority );
									}
								} else {
									return $wp_filter[$tag]->remove_filter( $tag, $function_key, $_priority );
								}
							}
						}
					}
				}
			}
		}
	}
	return false;
}


/* Example usage: */

/* Exact match */

add_action( 'plugins_loaded', function() {
    remove_class_action( 'plugins_loaded', 'MyClass', 'my_action', 0 );
} );

/* Any priority */

add_action( 'plugins_loaded', function() {
    remove_class_action( 'plugins_loaded', 'MyClass', 'my_action' );
} );

/* Any Class and any priority */

add_action( 'plugins_loaded', function() {
    remove_class_action( 'plugins_loaded', '', 'my_action' );
} );


