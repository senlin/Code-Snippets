<?php 
/*
Plugin Name: Remove Tools Menu
Plugin URI: http://rynoweb.com/wordpress-plugins/
Description: Super simple plugin to remove the Tools menu from WordPress Admin - just because.
Version: 1.1
Author: Chuck Reynolds
Author URI: http://chuckreynolds.us
License: GPL2
*/
/*
	Copyright 2011 WordPress Remove Tools Menu plugin (email: chuck@rynoweb.com)
	
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.
	
	This program is distributed in the hope that it will be useful, 
	but WITHOUT ANY WARRANTY; without even the implied warranty of 
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

function ryno_dont_be_a_tool () {
	
	if (function_exists('remove_menu_page')) {
		remove_menu_page('tools.php');
	}

	else {
		global $menu;
		$restricted = array(__('Tools'));
		end ($menu);
		while (prev($menu)){
			$value = explode(' ',$menu[key($menu)][0]);
			if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
		}
	}
}
add_action('admin_menu', 'ryno_dont_be_a_tool');

?>