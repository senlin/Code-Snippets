<?php
/**
 * Original function written as mini-plugin (Featured image for Open Graph) 
 * by @toscho (https://github.com/toscho) for MarketPress (http://marketpress.com/)
 * 
 * The functions inserts the featured image as Open Graph image for social sharing.
 * More info on http://marketpress.com/2013/how-social-networks-find-the-featured-image/
 * and/or https://github.com/inpsyde/mini-plugins
 * 
 * Licence:     GPL 2
 * License URI: http://opensource.org/licenses/GPL-2.0
 */

add_action( 'wp_head', 'so_ogp_image' );

/**
 * Create meta element for preview image.
 *
 * @wp-hook wp_head
 * @return  void
 */
function so_ogp_image() {

	// restricted to singular pages only
	if ( ! is_singular() )
		return;

	// there has to be a featured image set
	$thumb_id = get_post_thumbnail_id();

	// no featured image. stop.
	if ( empty ( $thumb_id ) )
		return;

	// FALSE or array
	$image = wp_get_attachment_image_src( $thumb_id );

	// nothing found for unknown reasons
	if ( empty ( $image ) )
		return;

	// make sure it is a real url
	$src = esc_url( $image[ 0 ] );

	// esc_url() returns an empty string for some invalid URLs
	if ( '' !== $src )
		print "<meta property='http://ogp.me/ns#image' content='$src' />";
}
