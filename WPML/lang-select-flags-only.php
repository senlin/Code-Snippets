<?php
// Add to FUNCTIONS.PHP WPML Function to show flags in top navigation
function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
            if(!$l['active']) echo '</a>';
        }
    }
}
?>

<?php // Add to Navigation Menu (HEADER.PHP) or somewhere else to show on website ?>
<div id="flags_language_selector"><?php language_selector_flags(); ?></div><!-- added to show flags for selecting languages -->
</div>