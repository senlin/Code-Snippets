<?php //Change default Post title box text
function so_title_text_input( $title ){
return $title = __('Random text of your choosing', 'text-domain');
}
add_filter( 'enter_title_here', 'so_title_text_input' );