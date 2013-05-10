<?php
function so_remove_menus () {
global $menu;
		$restricted = array(__('Links')); // OR $restricted = array(__('Links'), __('Media'));
		end ($menu);
		while (prev($menu)){
			$value = explode(' ',$menu[key($menu)][0]);
			if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
		}
}
add_action('admin_menu', 'so_remove_menus');

// menu is made invisible, URL is still there!
function so_remove_top_level_menu() {
global $menu;
//remove post top level menu
unset($menu[5]);
}
add_action('admin_head', 'so_remove_top_level_menu');

// menu is made invisible, URL is still there!
function so_remove_sub_menu() {
global $submenu;
//remove Theme editor
unset($submenu['themes.php'][10]);
}
add_action('admin_head', 'so_remove_sub_menu');

// everything gone including URLs; menus of plugins need to be added separately
function so_remove_all_menus () {
global $menu, $submenu, $user_ID;
	$the_user = new WP_User($user_ID);
	$valid_page = "admin.php?page=contact-form-7/admin/admin.php"; // only contactform7 is allowed
	$restricted = array('index.php','edit.php','categories.php','upload.php','link-manager.php','edit-pages.php','edit-comments.php', 'themes.php', 'plugins.php', 'users.php', 'profile.php', 'tools.php', 'options-general.php');
	$restricted_str = 'widgets.php';
	end ($menu);
	while (prev($menu)){
		$menu_item = $menu[key($menu)];
		$restricted_str .= '|'.$menu_item[2];
		if(in_array($menu_item[2] , $restricted)){
			$submenu_item = $submenu[$menu_item[2]];
			if($submenu_item != NULL){
				$tmp = $submenu_item;
				$max = array_pop(array_keys($tmp));
				for($i = $max; $i > 0;$i-=5){
					 if($submenu_item[$i] != NULL){
						$restricted_str .= '|'.$submenu[$menu_item[2]][$i][2];
						unset($submenu[$menu_item[2]][$i]);
					}
				}
			}
			unset($menu[key($menu)]);
		}
	}
	$result = preg_match('/(.*?)\/wp-admin\/?('.$restricted_str.')??(('.$restricted_str.'){1})(.*?)/',$_SERVER['REQUEST_URI']);
	if ($result != 0 && $result != FALSE){
		wp_redirect(get_option('siteurl') . '/wp-admin/' . $valid_page);
		exit(0);
	}
}
add_action('admin_menu', 'so_remove_all_menus');
