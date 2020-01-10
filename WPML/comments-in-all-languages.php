<?php
/**
 * view ALL the comments available for a specific page in each and every translated page
 *
 * Problem that exists for many years already and most likely due to many different requirements never a real solution presented
 * original ticket on Support forum: //wpml.org/forums/topic/show-comments-in-all-languages-for-each-translated-page/
 * different solutions, most recent one: //wpml.org/forums/topic/show-comments-in-all-languages-for-each-translated-page/#post-2720106
 */

global $sitepress;

remove_filter( 'comments_clauses', array( $sitepress, 'comments_clauses' ), 10, 2 );

add_action( 'pre_get_comments', function( $c ) {
    $id = [];
    $languages = apply_filters( 'wpml_active_languages', '' );
    if( 1 < count( $languages ) ) {
        foreach( $languages as $l ) {
            $id[] = apply_filters( 'wpml_object_id', $c->query_vars['post_id'], 'page', FALSE, $l['code']);
        }
    }

    $c->query_vars['post_id'] = '';
    $c->query_vars['post__in'] = $id;

    return $c;
});
