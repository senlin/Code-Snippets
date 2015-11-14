<?php
/**
 * WP 4.4 introduces automatic responsive image generation. Although very useful, for some sites it is not necessary.
 *
 * As official supporter of "Options, not Decisions", this filter is perfect to give you the option to turn this feature off.
 *
 * @source: //linkedin.com/grp/post/1482937-6069874958148923392
 */

remove_filter( 'the_content', 'wp_make_content_images_responsive' );

