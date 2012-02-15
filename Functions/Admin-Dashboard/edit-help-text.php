<?php
// Dashboard: Edit Help Dropdown Text in various places
// source: http://sixrevisions.com/wordpress/10-techniques-for-customizing-the-wordpress-admin-panel/ tip #7
// If you take a look at the top right of the WordPress Admin panels you’ll see a button that says "Help." When you click it, Help text slides down.
// This is a great place to add your own custom Help text for a client. You can even customize it for different Admin panels. For example, you can add a different Help text for the Add New Post panel and another one for the Comments panel.
// Here’s how you go about it:

add_action('load-page-new.php','custom_help_page');
add_action('load-page.php','custom_help_page');
function custom_help_page() {
  add_filter('contextual_help','custom_page_help');
}
function custom_page_help($help) {
  // echo $help; // Uncomment if you just want to append your custom Help text to the default Help text
  echo "<h5>Custom Help text</h5>";
  echo "<p> HTML goes here.</p>";
}

// To find what file you should add the action to, just check the address bar in your browser and add the load- prefix right before the file name. For example, if you wanted to add the custom Help text to the Add New Post panel, which has a file name of post-new.php, then you would use load-post-new.php as the parameter of the add_action function shown above.