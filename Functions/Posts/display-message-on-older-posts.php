<?php //display a message on older posts
function older_post_message () {
	$posted = get_the_time('U');
	$current = current_time('timestamp');
	//Convert difference in seconds to days
	$diffTime = ($current - $posted) / (60*60*24);
	if($diffTime > 365){
		echo '<div class=older-post-message>' . __('This post was written more than a year ago and <em>might</em> not be entirely accurate anymore.', 'wptips') . '</div><br />';
	}
}
add_action('loop_start','older_post_message');