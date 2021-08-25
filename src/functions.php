<?php
add_action('init', function () {
    add_theme_support('html5');
    add_theme_support('title-tag');
    add_theme_support('posts-format', ['gallery']);

    register_nav_menus([
        'header' => 'Navigation principale (en haut du site)',
        'footer' => 'Navigation légale (en base du site)',
    ]);
});

add_action('wp_enqueue_scripts', function () {
    // Load CSS
    wp_enqueue_style('weinrich-styles', get_template_directory_uri() . '/dist/styles/index.css');
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap', false);

    // Load JS
    wp_enqueue_script('weinrich-scripts', get_template_directory_uri() . '/dist/scripts/index.js');
});
