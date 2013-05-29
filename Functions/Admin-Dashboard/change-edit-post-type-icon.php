<?php
/**
 * Change Edit Posttype Icon in backend
 * freely adapted from http://wpsnipp.com/index.php/functions-php/change-custom-post-type-icon-for-new-and-edit-post-pages/
 * 
 * as an example we have used the "restaurant" Custom Post Type and icon, change line 9-11 to suit your post type and icon.
 */
function so_post_type_icon() {
	global $post_type;	
	?>
	<style>
		<?php if ( $post_type == 'restaurant' ) { ?>
			.icon32-posts-restaurant {
                background: url( "<?php echo get_stylesheet_directory_uri() . '/images/ico_restaurant.png';?>" ) no-repeat center center transparent !important;
                }
		<?php } ?>
	</style>
<?php }
add_action( 'admin_head', 'so_post_type_icon' );
add_action( 'admin_head-post.php', 'so_post_type_icon' );
add_action( 'admin_head-post-new.php', 'so_post_type_icon' );

