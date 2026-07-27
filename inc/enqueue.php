<?php

// Remove Parent Theme CSS
add_action('wp_enqueue_scripts', 'wunderbuild_remove_parent_theme_css', 999);

function wunderbuild_remove_parent_theme_css() {

    wp_dequeue_style('twenty-twenty-one-style');
    wp_deregister_style('twenty-twenty-one-style');

    wp_dequeue_style('twentytwentyone-style');
    wp_deregister_style('twentytwentyone-style');

    wp_dequeue_style('style');
    wp_deregister_style('style');
}

// Load Child Theme CSS & JS
add_action('wp_enqueue_scripts', 'wunderbuild_enqueue_assets', 1000);

function wunderbuild_enqueue_assets() {

    // CSS
    $css_file = get_stylesheet_directory() . '/assets/css/custom-style.css';

    wp_enqueue_style(
        'wunderbuild-style',
        get_stylesheet_directory_uri() . '/assets/css/custom-style.css',
        array(),
        file_exists($css_file) ? filemtime($css_file) : WB_VERSION
    );

    // JS
    $js_file = get_stylesheet_directory() . '/assets/js/main.js';

    wp_enqueue_script(
        'wunderbuild-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        file_exists($js_file) ? filemtime($js_file) : WB_VERSION,
        true
    );
}