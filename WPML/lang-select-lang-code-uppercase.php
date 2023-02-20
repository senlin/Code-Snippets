<?php
/**
 * Custom Languages Switcher for WPML where Language Code is shown in uppercase
 * only useful for language codes of 2 letters
 */


function so_language_selector_uppercase_language_code() {

    $languages = icl_get_languages( 'skip_missing=0&orderby=code' );

    if( !empty( $languages ) ) {

    	echo '<ul>';

        foreach( $languages as $l ) {

			if( !$l['active'] ) echo '<li class="lang-sel"><a href="' . $l['url'] . '">';

	        	echo strtoupper($l['language_code']);

	        if( !$l['active'] ) echo '</a></li>';


		}

		echo '</ul>';

    }

}

// Add to Navigation Menu (HEADER.PHP) or somewhere else to show on website ?>

<div id="languages_selector" class="langcode-sel">
	<?php so_language_selector_uppercase_language_code(); ?>
</div>
