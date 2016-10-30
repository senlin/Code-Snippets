<?php
/**
 * A collection of functions you can use to modify the Storefront WooCommerce theme 
 *
 *
 */

// remove more link in Customizer
add_filter( 'storefront_customizer_more', '__return_false' );

// remove product search from header or replace with regular site search
add_action( 'storefront_header', 'so_remove_replace_search', 1 );

function so_remove_replace_search() {
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
	// optional add regular search
	//add_action( 'storefront_header', get_search_form(), 40 );
}

// change footer credit
add_action( 'init', 'so_adjust_footer_credit', 10 );

function so_adjust_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'so_add_copyright', 20 );
} 

function so_add_copyright() {
	echo '<div class="site-info">&copy;' . get_the_date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '</div>';
}

// add topbar - @source: //pootlepress.com/2015/02/21-tips-tricks-and-css-tweaks-for-woothemes-storefront/
add_action( 'storefront_before_header', 'so_storefront_add_topbar1' );

function so_storefront_add_topbar1() {
    ?>
    <div id="topbar">
        <div class="col-full">
            <p><?php _e( 'Your text here', 'storefront-child' ); ?></p>
        </div>
    </div>
    <?php
}

add_action( 'storefront_before_header', 'so_storefront_add_topbar2' );

function so_storefront_add_topbar2() {
    global $current_user;
    get_currentuserinfo();
    if ( ! empty( $current_user->user_firstname ) ) {
        $user = $current_user->user_firstname;
    } else {
        $user = __( 'guest', 'storefront-child' );
    }
    ?>
    <div id="topbar">
        <div class="col-full">
            <p><?php printf( 'Welcome %s!', 'storefront-child' ), $user; ?></p>
        </div>
    </div>
    <?php
}