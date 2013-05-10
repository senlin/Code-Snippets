<?php
/** CUSTOM CONTACT FIELDS PROFILE - http://yoast.com/wordpress-rel-author-rel-me/ **/
function yoast_add_google_profile( $contactmethods ) {
	// Add Social Media Profiles
	$contactmethods['google_profile'] = 'Google Profile URL';
	$contactmethods['linkedin_profile'] = 'LinkedIn Profile URL';
	$contactmethods['twitter'] = 'Twitter URL';
	$contactmethods['facebook'] = 'Facebook Page';
	// Remove annoying and unwanted default fields
	unset($contactmethods['aim']);
	unset($contactmethods['jabber']);
	unset($contactmethods['yim']);

	return $contactmethods;
}
add_filter( 'user_contactmethods', 'yoast_add_google_profile', 10, 1);
