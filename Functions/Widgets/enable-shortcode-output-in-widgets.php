<?php

// Enable shortcode output in widgets

// Enable for widget title
add_filter('widget_title', 'do_shortcode');

// Enable for widget text
add_filter('widget_text', 'do_shortcode');