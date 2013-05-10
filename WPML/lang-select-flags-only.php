<?php
	// Show WPML language flags in top navigation

function so_language_selector_flags() {
    
    $languages = icl_get_languages( 'skip_missing=0&orderby=code' );

    if ( ! empty( $languages ) ) {

	    foreach( $languages as $l ) {

	        if ( ! $l['active'] ) 
	        
	        	echo '<a href="'.$l['url'].'">';

            	echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';

            if ( ! $l['active'] )
            
            	echo '</a>';

        }

    }

}

// Add to Navigation Menu (HEADER.PHP) or somewhere else to show on website ?>

<div id="flags_language_selector"><?php so_language_selector_flags(); ?></div>