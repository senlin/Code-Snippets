<?php
// add a favicon to your site
function add_favicon() {
	echo '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri() . '/images/favicon.ico" />';
}
add_action('wp_head', 'add_favicon');

// add favicon to your site II: use Gravatar as favicon (source: http://wp-snippets.com/2129/gravatar-as-favicon/)
//STEP 1: add to functions.php
function GravatarAsFavicon() {
//We need to establish the hashed value of your email address
	$GetTheHash = md5(strtolower(trim('you@yourdomain.com'))); // change to your own email address
	echo 'http://www.gravatar.com/avatar/' . $GetTheHash . '?s=16';
}

?>
<!-- STEP 2: add to header.php, before </head> closing tag --> 
<link rel="shortcut icon" href="<?php GravatarAsFavicon(); ?>" />
<?php
