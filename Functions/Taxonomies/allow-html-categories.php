<?php
// Allow HTML in category descriptions
remove_filter( 'pre_term_description', 'wp_filter_kses' );
?>