<?php
/**
 * Remove already registered taxonomy from an object
 * In other words, remove the default Tags from the Posts post_type
 *
 * You can use this for either tags or categories, but the former seems more logical, hence default
 *
 * @source: //stackoverflow.com/a/26260657/1381553
 * @source: //developer.wordpress.org/reference/functions/unregister_taxonomy_for_object_type/
 */

add_action( 'init', 'so_unregister_taxonomy' );

function so_unregister_taxonomy() {

	unregister_taxonomy_for_object_type( 'post_tag', 'post' );

}
