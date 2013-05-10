<?php // conditional function based on ID / role / capabilities
function so_custom_dash() {
	$user_id = get_current_user_id();
	if ($user_id == 1) { // is one specific admin role
	    // Show This
	} elseif (!current_user_can('administrator')) { // is not the administrator
		// Show That
	} elseif (!current_user_can('manage_options')) { // cannot manage options
		
	} else {
		//rest can see everything they can in that role
	}
}

add_action('admin_head', 'so_custom_dash');


// needs to be used in combination with another function, for example: disable-sidebar-menus-4functions.php OR remove-dashboard-widgets.php

// REMOVE DASHBOARD MENUS FOR CERTAIN USERS - http://wordpress.stackexchange.com/questions/20942/allow-user-access-to-dashboard-only/20943#20943
// DOES NOT ENTIRELY WORK AND ONLY HIDES...
function so_hide_menu_items() {

    global $submenu;
	global $menu;
    global $user_ID; 

    if( $user_ID ) :

        /* Dashboard only acccess */
		$user_id = get_current_user_id();
		if ($user_id == 2) :

                $restricted = array(
					__('Links'),
					__('Comments'),
					__('Appearance'),
					__('Plugins'),
					__('Tools'),
					__('Settings')
            );
        endif;

    endif;  

    end ( $menu );

    while ( prev( $menu ) ) :
        $value = explode( ' ', $menu[key($menu)][0] );
        if( in_array( $value[0] != NULL?$value[0]:"" , $restricted ) ) :
            unset( $menu[key($menu)] );
        endif;
    endwhile;

}
add_action('admin_head', 'so_hide_menu_items');