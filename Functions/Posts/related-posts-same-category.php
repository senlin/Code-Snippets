<?php 
/**
 * Related Posts (Posts from the same category) to be used at the bottom of the single.php template
 *
 * source: http://wordpress.org/support/topic/random-posts-from-same-category
 */

$backup = $post;  // backup the current object

// Set the conditions
$categories = get_the_category( $post->ID );
if ( $categories ) {
	$category_ids = array();
	foreach( $categories as $individual_category ) $category_ids[] = $individual_category->term_id;
		$args = array ( // Set the arguments
	        'category__in' => $category_ids,
	        'post__not_in' => array($post->ID),
	        'posts_per_page'=> 5, // Number of related posts that will be shown.
	        'orderby' => 'rand', // randomly order them
	        'caller_get_posts'=>1
		);
		
		// Output starts here
		$related_posts = new WP_Query( $args );
		if ( $related_posts->have_posts() ) {
			echo '<ul class="related-posts"><h3>' . __( 'Related posts', 'textdomain' ) . '</h3>';
			while ( $related_posts->have_posts() ) { $related_posts->the_post();
		?>
			<li><a href="<?php the_permalink($post->ID); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
		<?php
			} // endwhile
			echo '</ul>';
		} // endif
	$post = $backup;  // copy it back
	wp_reset_query(); // to use the original query again
} // endif $categories