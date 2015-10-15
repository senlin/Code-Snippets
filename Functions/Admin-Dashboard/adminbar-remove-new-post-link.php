<?php
/**
 * Sometimes it is necessary to remove the Posts entirely from your WP install.
 * You can do this via this excellent plugin: //github.com/tonykwon/wp-disable-posts
 *
 * The plugin however doesn't address the New Post link in the admin bar.
 * To remove that we need another function: remove_nodes()
 *
 * @source: //wordpress.stackexchange.com/a/76647/2015
 */

add_action( 'admin_bar_menu', 'so_remove_new_post_link', 999 );

function so_remove_new_post_link() {
    
	global $wp_admin_bar;   
	$wp_admin_bar->remove_node( 'new-post' );
	
	// can be extended for other links in this submenu too:
	//$wp_admin_bar->remove_node( 'new-page' );
	//$wp_admin_bar->remove_node( 'new-media' );
	//$wp_admin_bar->remove_node( 'new-user' );

}

/**
 * Further to this function there is a bit more that needs to be removed or hidden.
 * 
 * First we need to make sure to remove the Uncategorized category from the site. This can only be done via the Database
 */
 
 // make sure to replace wp_ with your own site's table prefix. To be sure look it up in your wp-config.php file
 // DO THIS AT YOUR OWN RISK AND BACK UP YOUR DATABASE BEFORE YOU DO ANYTHING
 DELETE FROM `wp_terms` WHERE `slug` LIKE '%uncategorized%';
 
 /**
 * The following function adds a stylesheet that hides Post, Category and Tags from the Nav Menu editor as well as the Customizer
 * Below that follows a stylesheet that you can add to the css folder of your theme. If your theme does not have such a folder,
 * you can add it yourself.
 */

add_action( 'admin_enqueue_scripts', 'so_backend_styling' );

function so_backend_styling() {
    wp_enqueue_style( 'backend-styling', get_template_directory_uri() . '/css/backend.css', array(), null );
}

/**
 * Add to css/backend.css
 */

/* hide the Post and Category from wp-admin/nav-menus.php */
.nav-menu-meta .add-post, 
.nav-menu-meta .add-category,
/* hide the Post, Catrgory and Tags from the Customizer */
.wp-customizer #available-menu-items-post_type-post,
.wp-customizer #available-menu-items-taxonomy-category,
.wp-customizer #available-menu-items-taxonomy-post_tag {
    display: none;
}
