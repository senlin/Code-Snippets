<?php
/**
 * Snippet to add Google Analytics tracking code for sites that use different domain per language
 * Add this snippet to header.php file just above closing </head> tag
 *
 * @src: https://wpml.org/forums/topic/google-analytics-setup/#post-4165953
 *
 */

// ANALYTICS TRACKING CODE

   // ES language
   if ( defined( 'ICL_LANGUAGE_CODE' ) && 'es' == ICL_LANGUAGE_CODE ) { ?>
          
        <!-- tracking code for ES -->
           
    <?php }
    // DE language
    else if ( defined( 'ICL_LANGUAGE_CODE' ) && 'de' == ICL_LANGUAGE_CODE ) { ?>
          
        <!-- tracking code for DE -->
          
    <?php }
    // NL language
    else if ( defined( 'ICL_LANGUAGE_CODE' ) && 'nl' == ICL_LANGUAGE_CODE ) { ?>
          
        <!-- tracking code for NL -->
          
    <?php }
    // Fallback (optional)
    else { ?>
       
        <!-- fallback tracking code (optional) -->
   
    <?php }

// ANALYTICS TRACKING CODE
