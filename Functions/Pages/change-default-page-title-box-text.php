<?php //Change default Post title box text
function title_text_input( $title ){
return $title = __('Random text of your choosing', 'text-domain');
}
add_filter( 'enter_title_here', 'title_text_input' );