<?php
/**
 * Remove the Jetpack Dependency script from a parent theme
 * Some theme authors forget to include the plugin-enhancements.js file
 * Without it the notice that the theme depends on Jetpack cannot be dismissed
 *
 * Change "TEXTDOMAIN" on line 18 to the name of the parent theme.
 * Best to check the name in the plugin-enhancements.php file of the parent theme (usually the first line of the class)
 *
 * @source: //wpti.ps/?p=663
 */
 
 add_action( 'admin_head', 'bhi_remove_jetpack_dependency', 9 );

function bhi_remove_jetpack_dependency() {

	// Change "TEXTDOMAIN" to the name of the parent theme.
	remove_action( 'admin_head', array( 'TEXTDOMAIN_Theme_Plugin_Enhancements', 'init' ) );

}
