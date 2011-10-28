<?php // SWITCH CODE BASED ON BLOG ID via http://lauragentry.com/blog/2010/08/02/applying-one-theme-to-multiple-blogs-in-wordpress-multisite/ ?>
<?php
$current_blog_id = $GLOBALS['blog_id'];
if ($current_blog_id == 1) {
	// Do this for blog ID 1
} elseif ($current_blog_id == 2) {
	//Do this for blog ID 2
} else {
	//Do this as a default
} ?>