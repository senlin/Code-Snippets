<?php // Protect Whole Site snippet
function protect_whole_site() {
    if ( !is_user_logged_in() ) {
        auth_redirect();
    }
}

add_action ('template_redirect', 'protect_whole_site');