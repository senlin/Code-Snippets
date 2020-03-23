<?php
/**
 * Hides to utterly useless Translation Priority metabox
 * don't forget to first remove the terms and its translations!
 */

function so_wpml_admin_css() {
  echo '<style>#icl_translation_priority_dropdown{display:none}</style>';
}

add_action( 'admin_head', 'so_wpml_admin_css' );
