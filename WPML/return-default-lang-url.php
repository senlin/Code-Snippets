<?php
/**
 * Return the home page of the default language in a WPML Setup
 *
 * @source //wpml.org/forums/topic/issues-with-using-different-domains-per-language/#post-598738
 */

global $sitepress; 
$so_default_lang_homepage = $sitepress->convert_url( get_home_url(), $sitepress->get_default_language() );