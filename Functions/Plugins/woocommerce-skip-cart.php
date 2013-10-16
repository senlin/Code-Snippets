<?php
 /**
  * If your WooCommerce shop only has one product (or one with different variations), you don't really need a cart (keep the purchase process as short as possible).
  * This script clears the cart, adds the product to it and then redirects to the checkout page.
  * 
  * What this script does is:
  * 1. Check that it’s a click on one of the ‘buy’ links.
  * 2. Get the ID of the product we’re adding to the cart. This ID comes from the ‘buy’ link.
  * 3. Empty the cart, in case a different product was selected before.
  * 4. Add the new product to the cart.
  * 5. Redirect to the checkout page (skipping the cart page).
  * 
  * This way you have a ‘cart’ page on your site. The customer selects the product and arrives directly at the checkout page.
  * 
  * source and credits: WPML (Amir Helzer) - http://wpml.org/2013/10/improving-woocommerce-conversion-rates/
  */

add_action( 'init', array( $this, 'so_skip_cart' ) );

function so_skip_cart() {
    
    // Skips the cart page. Redirect to the checkout page.
    if( isset( $_GET['buy_now'] ) && $_GET['buy_now'] == '1' ) {
        
        global $woocommerce;
        
        $checkout_page_id = get_option( 'woocommerce_checkout_page_id' );
        
        if( isset( $_REQUEST['add-to-cart'] ) ) {
            $product_id    = intval( $_REQUEST['add-to-cart'] );
            $woocommerce->cart->empty_cart( $product_id );
            $woocommerce->cart->add_to_cart( $product_id );
        }
        
        wp_redirect ( get_permalink( $checkout_page_id, 'page', true ) );
        
        exit;
    }
}