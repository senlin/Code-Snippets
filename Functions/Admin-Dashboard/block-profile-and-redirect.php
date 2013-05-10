<?php
// source: http://www.shinephp.com/how-to-block-wordpress-admin-menu-item/
// block profile menu for users with role subscriber

if ( is_user_logged_in() ) {

  if ( current_user_can( 'subscriber' ) ) {

    function so_remove_profile_submenu() {
      global $submenu;
      //remove Your profile submenu item
      unset( $submenu['profile.php'][5] );
    }
    add_action( 'admin_head', 'so_remove_profile_submenu' );
 
    function remove_profile_menu() {
	    global $menu;
	    // remove Profile top level menu
	    unset( $menu[70] );
	}
    add_action( 'admin_head', 'so_remove_profile_menu' );
 
 
    function so_profile_redirect() {
	    $result = stripos( $_SERVER['REQUEST_URI'], 'profile.php' );
		if ($result!==false) {
			wp_redirect( get_option( 'siteurl' ) . '/wp-admin/index.php' );
		}
	}
	add_action( 'admin_menu', 'so_profile_redirect' );
  }
}
// end of block profile menu for users with role
