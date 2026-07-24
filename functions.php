<?php

add_action('wp_enqueue_scripts', 'wunderbuild_child_theme_enqueue_styles');
function wunderbuild_child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

add_filter('acf/settings/save_json', function($path) {
    return get_template_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function($paths) {
    unset($paths[0]);
    $paths[] = get_template_directory() . '/acf-json';
    return $paths;
});

// Theme Settings Menu
add_action('admin_menu', 'wunderbuild_theme_settings_menu');

function wunderbuild_theme_settings_menu() {

    // Main Menu
    add_menu_page(
        __('Theme Settings', 'wunderbuild'),
        __('Theme Settings', 'wunderbuild'),
        'manage_options',
        'theme-settings',
        'wunderbuild_general_page',
        'dashicons-admin-generic',
        60
    );

    // General
    add_submenu_page(
        'theme-settings',
        __('General Settings', 'wunderbuild'),
        __('General', 'wunderbuild'),
        'manage_options',
        'theme-settings',
        'wunderbuild_general_page'
    );

    // Header
    add_submenu_page(
        'theme-settings',
        __('Header Settings', 'wunderbuild'),
        __('Header', 'wunderbuild'),
        'manage_options',
        'theme-header',
        'wunderbuild_header_page'
    );

    // Footer
    add_submenu_page(
        'theme-settings',
        __('Footer Settings', 'wunderbuild'),
        __('Footer', 'wunderbuild'),
        'manage_options',
        'theme-footer',
        'wunderbuild_footer_page'
    );
}

// Callback Pages
function wunderbuild_general_page() {
    echo '<div class="wrap"><h1>General Settings</h1></div>';
}

function wunderbuild_header_page() {
    echo '<div class="wrap"><h1>Header Settings</h1></div>';
}

function wunderbuild_footer_page() {
    echo '<div class="wrap"><h1>Footer Settings</h1></div>';
}

add_filter('acf/settings/save_json', function($path) {
    return get_template_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function($paths) {
    unset($paths[0]);
    $paths[] = get_template_directory() . '/acf-json';
    return $paths;
});