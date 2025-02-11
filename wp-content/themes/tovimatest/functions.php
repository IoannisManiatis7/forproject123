<?php
$src = get_template_directory_uri();
function tovimacom_styles() {
    wp_enqueue_style( 'tovima-style', get_stylesheet_uri() , '1.0.1');
    wp_enqueue_style( 'podcast', '/wp-content/themes/tovimatest/common/css/podcast.css', '', $version, 'all');
}
add_action('wp_enqueue_scripts', 'tovimacom_styles');    