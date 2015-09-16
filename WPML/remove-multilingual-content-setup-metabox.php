<?php
/**
 * Remove "Multilingual Content Setup" meta box
 *
 * @source: //wpml.org/forums/topic/how-to-remove-ml-content-metabox/
 */
add_action( 'admin_head', 'so_remove_wpml_meta_box' );

function so_remove_wpml_meta_box() {

	$screen = get_current_screen();

	remove_meta_box( 'icl_div_config', $screen->post_type, 'normal' );

}
