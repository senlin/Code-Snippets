<?php
/**
 * Allow upload of SVG files to Media Library
 *
 * @source: //elegantthemes.com/blog/resources/how-to-create-an-animated-logo-with-svg-and-css#comment-224454
 */

add_filter( 'upload_mimes', 'so_allow_upload_svg' );

function so_allow_upload_svg( $mimes ) {
$mimes[ 'svg' ] = 'image/svg+xml';
return $mimes;
}

/**
 * To also allow SVG files upload to the Theme Customizer you need to add the following snippet too
 *
 * @source: //wordpress.stackexchange.com/a/159615/2015
 */

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'themeslug_logo',
        array(
            'label'      => __( 'Logo', 'themeslug' ),
            'section'    => 'themeslug_logo_section',
            'settings'   => 'themeslug_logo',
            'extensions' => array( 'jpg', 'jpeg', 'gif', 'png', 'svg' ),
        )
    )
);