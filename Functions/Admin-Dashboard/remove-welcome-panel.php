<?php
/* via http://codex.wordpress.org/Plugin_API/Action_Reference/welcome_panel
In 3.5+, this hook allows you disable the Welcome Panel in the Dashboard. Removing the action also removes the corresponding Screen Option.
*/
remove_action( 'welcome_panel', 'wp_welcome_panel' );