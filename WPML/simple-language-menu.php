<?php

	// Add a simple EN / 中文 Language Switcher to a site that runs with the WPML plugin
	
	// Add to functions.php or functionality plugin:

if ( ! function_exists( 'so_language_menu' ) ) {
	function so_language_menu() {	
		
		if ( function_exists( 'icl_get_languages' ) ) {
			
			$languages = icl_get_languages('orderby=name&order=ASC'); // you can change the parameters
			
			$counter = 0;
			
			if ( !empty( $languages ) ) {
				
				echo '<ul class="lang-nav">';
				
				foreach( $languages as $l ) {
					
					$counter += 1;

					if ( $l['active'] )
						
						continue;

					echo '<li id="' . $l['language_code'] . '">';

					echo '<a href="' . $l['url'] . '">';

					if ( $l['language_code'] == 'en' ) echo 'EN'; // Change this into any other language

					elseif ( $l['language_code'] == 'zh-hans') echo urldecode( '%E4%B8%AD%E6%96%87' ); // Change this into any other language

					echo '</a>';
					
					if ( $counter < sizeof( $languages ) ) echo '&nbsp;|&nbsp;'; // optional line as a separator between languages

					echo '</li>';
				}
				
				echo '</ul>';
			}
		}
	}
}

// Call in theme (header): ?>

<?php so_language_menu(); ?>
