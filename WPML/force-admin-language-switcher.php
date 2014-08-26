<?php
/**
 * Useful WPML snippet that allows to force the admin language
 * in the language switcher (in the backend) upon login to be the same
 * as the profile language that the user has set.
 *
 * Adapt/Extend lines 19-21 to the languge(s) available on your site
 *
 * @source: //wpml.org/forums/topic/editing-language-doesnt-follow-admin-language/#post-348152
 */

function so_language_after_login( $user_login, $user ) {
    
    global $sitepress;
     
    $language = get_user_meta( $user->ID, 'icl_admin_language', true );
     
    // Languages customization starts here, adapt as per your website's language settings
    if ( $language === 'nl' )
        
        $sitepress->set_admin_language_cookie( 'nl' );
     
    return;
}
 
add_action( 'wp_login', 'so_language_after_login', 100, 2 );