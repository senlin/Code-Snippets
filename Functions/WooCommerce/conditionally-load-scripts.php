<?php
/**
 * WooCommerce loads 3 CSS files and 5 JavaScript files on each and every page,
 * regardless of any need for them.
 * The function below stops loading them on irrelevant pages
 *
 * @source: //crunchify.com/how-to-stop-loading-woocommerce-js-javascript-and-css-files-on-all-wordpress-postspages/
 */

add_action( 'wp_enqueue_scripts', 'so_conditionally_load_wc_css_js' );

function so_conditionally_load_wc_css_js() {

	// Check if WooCommerce plugin is active
	if( function_exists( 'is_woocommerce' ) ){

		// Check if it's any of WooCommerce page
		if( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {

			## Dequeue WooCommerce styles
			wp_dequeue_style( 'woocommerce-layout' );
			wp_dequeue_style( 'woocommerce-general' );
			wp_dequeue_style( 'woocommerce-smallscreen' );

			## Dequeue WooCommerce scripts
			wp_dequeue_script( 'wc-cart-fragments' );
			wp_dequeue_script( 'woocommerce' );
			wp_dequeue_script( 'wc-add-to-cart' );

			wp_deregister_script( 'js-cookie' );
			wp_dequeue_script( 'js-cookie' );

		}
	}
}