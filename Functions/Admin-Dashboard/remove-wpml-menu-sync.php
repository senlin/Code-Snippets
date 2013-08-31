<?php
/**
 * This function hides the WPML nav menu synchronisation link in backend
 */


if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
            
    add_action( 'admin_notices', array( $this, '_no_wpml_warning' ) );

    return false;            

}

function _no_wpml_warning() {
	
	?>
    
        <div class="message error"><p><?php printf(__( 'This is a WPML function and therefore only works if you have <a href="%s">the WPML plugin</a> installed.', 'theme-text-domain'), 
            'http://wpml.org/'); ?></p></div>
	<?php
    
}


function so_hide_wpml_sync_link() {

	?>

	<style>
		/* remove WPML nav menu synchronisation link in backend */
		.howto.icl_nav_menu_text > div > a {
		    display: none;
		}
		
	</style>

<?php }

add_action( 'admin_head-nav-menus.php', 'so_hide_wpml_sync_link' );

/**
 * This function removes the WPML Menu Sync submenu
 */

/* 20130820 Remove WP Menus Sync - http://wp.tutsplus.com/tutorials/creative-coding/customizing-your-wordpress-admin/ */
function so_remove_wpml_menu_sync() {  
    global $submenu;  

	if ( is_plugin_active( 'wpml-translation-management/plugin.php' ) ) {
		
		remove_submenu_page( 'wpml-translation-management/menu/main.php', 'sitepress-multilingual-cms/menu/menus-sync.php' );
		
	} else {
		
		remove_submenu_page('sitepress-multilingual-cms/menu/languages.php','sitepress-multilingual-cms/menu/menus-sync.php');
		
	}

}

add_action( 'admin_menu', 'so_remove_wpml_menu_sync', 999 );
