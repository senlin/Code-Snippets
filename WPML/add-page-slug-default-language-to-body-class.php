<?php
/**
 * Add page slug of default language to body class
 *
 * Sometimes it is necessary to style pages that do not have a unique page template.
 * One could use the Page ID to style that page, but on multilingual sites, the page IDs differ per language,
 * so that would get old fast.
 *
 * The function below adds the slug of the default language if on a language other than the default language.
 *
 * Combined with the add-language-to-body-class function in this same directory, it becomes very easy to style language specific pages, without having to resort to ID numbers.
 */

if ( ! function_exists( 'so_body_class' ) ) {

	function so_body_class( $classes ) {

		global $post;
		$default_lang = apply_filters( 'wpml_default_language', NULL );

		if ( ! ( $default_lang === ICL_LANGUAGE_CODE ) ) {
			if ( is_page() ) {

				$default_lang_id = apply_filters( 'wpml_object_id', $post->ID, 'page', TRUE, $default_lang );
				$classes[]  = sanitize_html_class( get_post_field( 'post_name', $default_lang_id ) );
			}
		}

		return $classes;
	}
}

add_filter( 'body_class', 'so_body_class' );
