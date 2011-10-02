<?php
// ADD SEARCH BOX TO NAVIGATION
function add_search_box($items, $args) {
ob_start();
get_search_form();
$searchform = ob_get_contents();
ob_end_clean();
$items .= '<li class="nav_search">' . $searchform . '</li>';
return $items;
}
add_filter('wp_nav_menu_items','add_search_box', 10, 2);
// END ADD SEARCH BOX
?>