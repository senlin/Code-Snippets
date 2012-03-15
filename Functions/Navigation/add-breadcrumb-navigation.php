<?php // Add Breadcrumb Navigation, original article on: http://wpti.ps/?p=37
function so_write_breadcrumb() {
    $pid = $post->ID;
 $trail = '<a href="/">'. __('Home', 'so-base') .'</a>';
 
    if (is_front_page()) {
        // do nothing
	}
		elseif (is_page()) {
			$bcarray = array();
			$pdata = get_post($pid);
			$bcarray[] = ' &raquo; '.$pdata->post_title."\n";
			while ($pdata->post_parent) {
				$pdata = get_post($pdata->post_parent);
				$bcarray[] = ' &raquo; <a href="'.get_permalink($pdata->ID).'">'.$pdata->post_title.'</a>';
			}
		   $bcarray = array_reverse($bcarray);
			 foreach ($bcarray AS $listitem) {
				 $trail .= $listitem;
			 }
		}
		elseif (is_single()) {
			$pdata = get_the_category($pid);
			$adata = get_post($pid);
			if(!empty($pdata)){
				$data = get_category_parents($pdata[0]->cat_ID, TRUE, ' &raquo; ');
				$trail .= " &raquo; ".substr($data,0,-8);
			}
			$trail.= ' &raquo; '.$adata->post_title."\n";
		}
	   	elseif (is_category()) {
			$pdata = get_the_category($pid);
			$data = get_category_parents($pdata[0]->cat_ID, TRUE, ' &raquo; ');
			if(!empty($pdata)){
				$trail .= " &raquo; ".substr($data,0,-8);
			}
	   	}
 $trail.="";
 return $trail;
}