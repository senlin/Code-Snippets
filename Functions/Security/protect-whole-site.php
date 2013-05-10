<?php // Protect Whole Site snippet

function so_protect_whole_site() {
    if ( !is_user_logged_in() ) {
        auth_redirect();
    }
}

add_action ('template_redirect', 'so_protect_whole_site');