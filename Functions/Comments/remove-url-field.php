<?php //Remove URL field from comment form
function so_remove_comment_fields($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','so_remove_comment_fields');