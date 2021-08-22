<?php
add_theme_support('title-tag');

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('weinrich-styles', get_template_directory_uri() . '/dist/styles/index.css');
    wp_enqueue_script('weinrich-scripts', get_template_directory_uri() . '/dist/scripts/index.js');
});
