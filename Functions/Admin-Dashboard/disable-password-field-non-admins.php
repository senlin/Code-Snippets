<?php
// disable password field on profile for non-administrators - http://wpengineer.com/2285/disable-password-fields-for-non-admins/
if ( is_admin() )
  add_action( 'init', 'so_disable_password_fields', 10 );
function so_disable_password_fields() {
  if ( ! current_user_can( 'administrator' ) )
    $show_password_fields = add_filter( 'show_password_fields', '__return_false' );
}
?>