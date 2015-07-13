<?php
/**
 * Disable Loading of Google Fonts in WordPress Backend.
 *
 * @source: http://netzklad.de/2014/04/google-fonts-im-wordpress-backend-ohne-plugin-deaktivieren/
 *
 * @alternative: ../General/remove-open-sans.php
 */

function so_disable_google_fonts_wp_backend( $styles ) {
    
    // Open Sans always gets loaded in backend, independent on which theme has been activated
    $styles->add( 'open-sans', '' );
    
    // These fonts are added by the default themes and are therefore optional
    $styles->add( 'twentyfifteen-fonts', '' );
    $styles->add( 'twentyfourteen-lato', '' );
    $styles->add( 'twentythirteen-fonts', '' );
    $styles->add( 'twentytwelve-fonts', '' );
}

add_action( 'wp_default_styles', 'so_disable_google_fonts_wp_backend', 5 );