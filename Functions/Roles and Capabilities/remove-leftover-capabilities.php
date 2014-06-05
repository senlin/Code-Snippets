<?php
/**
 * Function to Remove Capabilities that are left over from plugins or from your own trials
 *
 * Instructions:
 * 1. change the sample capabilities on line 17 with the capabilities you want to remove
 * 2. save the function (in your functions.php or functionality file/plugin
 * 3. optional: upload the file (if not in local environment)
 * 4. remove the function/file, the work is done
 *
 * @source: //chrisburbridge.com/delete-unwanted-wordpress-custom-capabilities/
 */

function so_remove_caps() {

    $delete_caps = array(
    	'edit_issues', 'publish_issues', 'edit_other_issues', 'read_private_issues','delete_issue', 'edit_issue'
    );

    global $wp_roles;

    foreach ( $delete_caps as $cap ) {

        foreach ( array_keys( $wp_roles->roles ) as $role ) {

            $wp_roles->remove_cap( $role, $cap );

        }

    }

}

add_action( 'admin_init', 'so_remove_caps' );
