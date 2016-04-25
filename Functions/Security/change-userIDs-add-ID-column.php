<?php
/**
 * The following snippet is a collection of measures that can be taken to make it more difficult for
 * someone with bad intentions to "sniff" out the user-IDs of your site.
 *
 * The measures consist of direct SQL queries, a htaccess rule and lastly a snippet
 * that adds the new userIDs as a column in the WP backend
 *
 * @source: //wpwhitesecurity.com/wordpress-security/change-wordpress-administrator-id/
 * @source: //pippinsplugins.com/add-user-id-column-to-the-wordpress-users-table/
 */

/**
 * We start with the SQL queries
 */

// change tableprefix to the prefix you have set for your database
// change "123" to the ID you want to change it TO
// change "1" to the ID of the user you want to change (the current user)
// MAKE A DATABASE BACKUP BEFORE YOU DO THIS!!!
UPDATE tableprefix_users SET ID = 123 WHERE ID = 1;

// change tableprefix to the prefix you have set for your database
// change "123" to the ID you want to change it TO
// change "1" to the ID of the user you want to change (the current user)
// MAKE A DATABASE BACKUP BEFORE YOU DO THIS!!!
UPDATE tableprefix_usermeta SET user_id = 123 WHERE user_id = 1;

// change tableprefix to the prefix you have set for your database
// change "999" to the assign the counter that WP uses to assign the next user
// MAKE A DATABASE BACKUP BEFORE YOU DO THIS!!!
ALTER TABLE tableprefix_users AUTO_INCREMENT = 999


/**
 * Add the snippets below to the functions or functionality file
 * to show the (new) userIDs as a column in the WP backend
 */
add_filter( 'manage_users_columns', 'so_add_userid_column' );

function so_add_userid_column( $columns ) {

    $columns['user_id'] = 'User ID';
    return $columns;

}
 
add_action( 'manage_users_custom_column',  'so_show_userid_column_content', 10, 3 );

function so_show_userid_column_content( $value, $column_name, $user_id ) {

    $user = get_userdata( $user_id );
	if ( 'user_id' == $column_name )
		return $user_id;
    return $value;

}


/* If you don't want to muck around in the database, you can prevent "author=" searches
 * by adding this to the .htaccess file in the root
 *
 * @source: comment by user on aforementioned article - //wpwhitesecurity.com/wordpress-security/change-wordpress-administrator-id/#comment-263053
 */
RewriteCond %{QUERY_STRING} author= [NC]
RewriteRule .* /? [R=301,L]

