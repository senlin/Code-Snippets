<?php
	// Body Class Function
	// source: http://www.mimoymima.com/2013/01/lab/better-body-class-function-wordpress/

function so_body_classes() {

    global $post;

 // echo some of these things
    if ( is_category() ) { echo 'page_category' . ' '; }
    elseif ( is_search() ) { echo 'page_search' . ' '; }
    elseif ( is_tag() ) { echo 'page_tag' . ' '; }
    elseif ( is_home() ) { echo 'page_home' . ' '; }
    elseif ( is_404() ) { echo 'page_404' . ' '; }

    // echo page_(page name)
    if( is_page() ) {
        $pn = $post->post_name;
        echo 'page_'.$pn.' ';
    }

    // echo parent_(parent name)
    $post_parent = get_post( $post->post_parent );
    $parentSlug = $post_parent->post_name;
    
    if ( is_page() && $post->post_parent ) {
            echo 'parent_' . $parentSlug .' ';
    }

    // echo template_(template name)
    $temp = get_page_template();
    if ( $temp != null ) {
        $path = pathinfo( $temp );
        $tmp = $path['filename'] . '.' . $path['extension'];
        $tn= str_replace( '.php', '', $tmp );
        echo 'template_' . $tn;
    }
}

// class in header.php: ?>
<body class='<?php so_body_classes(); ?>'>