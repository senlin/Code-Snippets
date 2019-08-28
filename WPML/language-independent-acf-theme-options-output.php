<?php
/**
 * How to get language independent ACF theme options on a multilingual site running WPML
 *
 * Function has evolved by many to a solution that sets the language in the backend to "All languages" (@peterblickenstorfer)
 *
 * @original gist: https://gist.github.com/senlin/4fd15ba7a19533ceb9fe
 */

// Use this to force ACF to look for the "all" version of the fields.
	add_filter( 'acf/settings/current_language', function() { return 'all' ; } );

// Insert your regular ACF code between the add_filter and remove_filter lines.
	echo get_field('my_language_independent_option_field', 'option');

// Use this to re-enable language-specific retrieval of ACF fields.
	remove_filter( 'acf/settings/current_language', function() { return ICL_LANGUAGE_CODE ; } );


function force_redirect_to_the__all__version_of_global_options() {
	// correct page
		global $pagenow ;
		if( $pagenow === 'admin.php' && isset( $_GET['page'] ) && $_GET['page'] === 'global-options' ) { // global-options is the menu_slug you defined in acf_add_options_page
			// lang not 'all'?
				if( ICL_LANGUAGE_CODE !== 'all' ) {
					// manipulate query (set lang to "all")
						$query = $_GET;
						$query['lang'] = 'all';
						$query_result = http_build_query( $query );
					// redirect and die
						wp_redirect( get_admin_url() . 'admin.php?' . $query_result );
						die();
				}
		}
}
add_action( 'admin_init', 'force_redirect_to_the__all__version_of_global_options' );
