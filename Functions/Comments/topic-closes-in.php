<?php
/**
 * Supercool snippet of WPEngineer to inform your users that you will close the comments in xdays
 * The function calculates the difference between today and how many days there are left.
 *
 * @source: //wpengineer.com/2692/inform-user-about-automatic-comment-closing-time/
 */
add_action( 'comment_form_top', 'so_topic_closes_in' );

function so_topic_closes_in() {
    global $post;
    if ( $post->comment_status == 'open' ) {
        $close_comments_days_old = get_option( 'close_comments_days_old' );
        $expires = strtotime( "{$post->post_date_gmt} GMT" ) +  $close_comments_days_old * DAY_IN_SECONDS;
        printf( __( '(This topic will automatically close in %s. )', 'textdomain' ),  human_time_diff( $expires ) );
    }
}