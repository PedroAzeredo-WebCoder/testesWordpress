<?php

/**
 * Styles and scripts loading
 */
add_action('wp_enqueue_scripts', 's3_enqueue_scripts');
function s3_enqueue_scripts() {
    wp_enqueue_style('app', get_stylesheet_directory_uri() . '/assets/css/app.css');

    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'));
}
