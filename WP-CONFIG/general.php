<?php
define('WP_POST_REVISIONS', false);
define('WP_MEMORY_LIMIT', '128M');
define('AUTOSAVE_INTERVAL', 300); // 300 seconds is 5 mins
define('EMPTY_TRASH_DAYS', 1); // replace 1 with whatever number you have in mind
define('WP_CACHE', true); // only when caching plugin is used
/** define('TEMPLATEPATH', '/absolute/path/to/wp-content/themes/active-theme'); (optional) */
/** define('STYLESHEETPATH', '/absolute/path/to/wp-content/themes/active-theme'); (optional) */

/** Note that if you are on a shared-server the permissions of your wp-config.php should be 750. It means that no other user will be able to read your database username and password. If you have FTP or shell access, do the following:
chmod 750 wp-config.php
*/
?>