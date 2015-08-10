<?php
/**
 * By default WordPress shows the images from Gravatar.com on the comments and in the Dashboard.
 * If your site doesn't use comments, you can disable the Gravatar in Settings > Discussion > Avatar Display 
 * But the user's Gravatar will still show in the top-right corner of the Dashboard.
 * To disable that completely, we need to filter the get_avatar() function.
 * From the Codex: The "get_avatar" filter can be used to alter the avatar image returned by the get_avatar() function.
 *
 * @source: codex.wordpress.org/Plugin_API/Filter_Reference/get_avatar
 */

add_filter( 'get_avatar', 'so_disable_gravatars', 1, 2 );

function so_disable_gravatars() {

    $avatar = '';

    return $avatar;
}
