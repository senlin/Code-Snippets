<?php
/**
 * Disable the editor for specific page templates
 * Especially useful when using [Meta Boxes](http://metabox.io) to fully customise the UX
 *
 * Usage: adjust the template name (and folder) on line 23
 *
 * @source: //snipplr.com/view.php?codeview&id=61412
 */
add_action( 'admin_init', 'so_remove_editor' );

function so_remove_editor() {
		
	// Get the Post ID.
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	
	if ( ! isset( $post_id ) ) return;
	
	// Get the name of the Page Template file.
	$template_file = get_post_meta( $post_id, '_wp_page_template', true );
	
	// Here you want to edit the template name
	if ( $template_file == 'templates/home.php' ) {
	
		remove_post_type_support( 'page', 'editor' );
	
	}
	
}