<?php




// Remove Parent Theme CSS
add_action('wp_enqueue_scripts', 'wunderbuild_remove_parent_theme_css', 999);

function wunderbuild_remove_parent_theme_css() {

    // Twenty Twenty-One parent theme CSS handles
    wp_dequeue_style('twenty-twenty-one-style');
    wp_deregister_style('twenty-twenty-one-style');

    wp_dequeue_style('twentytwentyone-style');
    wp_deregister_style('twentytwentyone-style');

    wp_dequeue_style('style');
    wp_deregister_style('style');
}


// Enqueue ONLY Custom js and CSS
add_action('wp_enqueue_scripts', 'wunderbuild_enqueue_custom_css', 1000);

function wunderbuild_enqueue_custom_css() {

    $css_file = get_stylesheet_directory() . '/assets/css/custom-style.css';

    wp_enqueue_style(
        'custom-style',
        get_stylesheet_directory_uri() . '/assets/css/custom-style.css',
        array(),
        file_exists($css_file) ? filemtime($css_file) : '1.0'
    );

    $js_file = get_stylesheet_directory() . '/custom-js/custom.js';

    wp_enqueue_script(
        'custom-js',
        get_stylesheet_directory_uri() . '/custom-js/custom.js',
        array('jquery'),
        file_exists($js_file) ? filemtime($js_file) : '1.0',
        true
    );
}

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