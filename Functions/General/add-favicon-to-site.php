<?php
// add a favicon to your site I
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

// add favicon to your site II
function add_favicon() {
	echo '<link rel="shortcut icon" href="<?php echo bloginfo("stylesheet_directory") ?>/images/favicon.png"/>';
}
add_action('wp_head', 'add_favicon');

// add favicon to your site III: use Gravatar as favicon (source: http://wp-snippets.com/2129/gravatar-as-favicon/)
//STEP 1: add to functions.php
function GravatarAsFavicon() {
//We need to establish the hashed value of your email address
	$GetTheHash = md5(strtolower(trim('you@yourdomain.com'))); // change to your own email address
	echo 'http://www.gravatar.com/avatar/' . $GetTheHash . '?s=16';
}

//STEP 2: add to header.php, before </head> closing tag ?>
<link rel="shortcut icon" href="<?php GravatarAsFavicon(); ?>" />

<?php