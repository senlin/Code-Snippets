<?php
/**
 * 3 hacks to add a class="button" to the WordPress comment submit button
 *
 * Read accompanying article at http://wpti.ps/?p=489
 */

/**
 * Hack #1
 * Add to the bottom of your theme’s comments.php file
 * Add styling without the `<style>` tags to theme's stylesheet
 *
 * @source: //stackoverflow.com/a/21833283/1381553
 */

$comments_args = array(
    // use the "Text or HTML to be displayed after the set of comment fields"-field to to add a class to the comment submit button
    'comment_notes_after' => '<input type="submit" class="button" id="submit-new" value="' . __( 'Post Comment', 'textdomain' ) . '" />'
);
 
comment_form( $comments_args );


// Styling ?>
<style type="text/css">
	.form-submit {
	    display: none;
	}
</style>

<?php
/**
 * Hack #2
 * Add to your functions.php or functionality plugin or file
 * Add same styling as of Hack #1 to theme's stylesheet
 *
 * @source: //www.codecheese.com/2013/11/wordpress-comment-form-with-twitter-bootstrap-3-supports/
 */

function so_comment_button() {
     
    echo '<input name="submit" class="button" type="submit" value="' . __( 'Post Comment', 'textdomain' ) . '" />';
     
}
 
add_action( 'comment_form', 'so_comment_button' );



/**
 * Hack #3
 * add this script without the `<script>` tags to one of your theme's .js files
 *
 * @source: //wordpress.stackexchange.com/a/60197/2015
 */
?>

<script type="text/javascript">
	jQuery(document).ready(function($) { //noconflict wrapper
	    $('#commentform input#submit').addClass('button');
	});//end noconflict
</script>

<?php


/**
 * Hack #4 - Add the button class to ALL submit buttons
 * add this script without the `<script>` tags to one of your theme's .js files
 *
 * @source: //github.com/tsquez/wp-forge/blob/master/js/functions.js
 */
?>

<script type="text/javascript">
	jQuery(document).ready(function($) {
	    $('input[type="submit"]').addClass('button');
	});
</script>

<?php
