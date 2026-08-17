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
   // pricing page css
    $pricing_css_file = get_stylesheet_directory() . '/assets/css/pricing.css';

    wp_enqueue_style(
        'wunderbuild-pricing',
        get_stylesheet_directory_uri() . '/assets/css/pricing.css',
        array(),
        file_exists($pricing_css_file) ? filemtime($pricing_css_file) : WB_VERSION
    );

    // pricing page css
    $pricing_css_file = get_stylesheet_directory() . '/assets/css/support-onboarding.css';

    wp_enqueue_style(
        'wunderbuild-support-onboarding',
        get_stylesheet_directory_uri() . '/assets/css/support-onboarding.css',
        array(),
        file_exists($pricing_css_file) ? filemtime($pricing_css_file) : WB_VERSION
    );
   
     // switch to wunderbuild css
    $pricing_css_file = get_stylesheet_directory() . '/assets/css/switch-to-wunderbuild.css';

    wp_enqueue_style(
        'switch-to-wunderbuild',
        get_stylesheet_directory_uri() . '/assets/css/switch-to-wunderbuild.css',
        array(),
        file_exists($pricing_css_file) ? filemtime($pricing_css_file) : WB_VERSION
    );
     // review css
    $pricing_css_file = get_stylesheet_directory() . '/assets/css/reviews.css';

    wp_enqueue_style(
        'wunderbuild-reviews',
        get_stylesheet_directory_uri() . '/assets/css/reviews.css',
        array(),
        file_exists($pricing_css_file) ? filemtime($pricing_css_file) : WB_VERSION
    );

     // contact css
    $pricing_css_file = get_stylesheet_directory() . '/assets/css/contact.css';

    wp_enqueue_style(
        'wunderbuild-contact',
        get_stylesheet_directory_uri() . '/assets/css/contact.css',
        array(),
        file_exists($pricing_css_file) ? filemtime($pricing_css_file) : WB_VERSION
    );

     // contact css
    $pricing_css_file = get_stylesheet_directory() . '/assets/css/mcp-integrations.css';

    wp_enqueue_style(
        'wunderbuild-mcp-integrations.css',
        get_stylesheet_directory_uri() . '/assets/css/mcp-integrations.css',
        array(),
        file_exists($pricing_css_file) ? filemtime($pricing_css_file) : WB_VERSION
    );

      // workspace studuio css
    $pricing_css_file = get_stylesheet_directory() . '/assets/css/workspace-studio.css';

    wp_enqueue_style(
        'wunderbuild-workspace-studio',
        get_stylesheet_directory_uri() . '/assets/css/workspace-studio.css',
        array(),
        file_exists($pricing_css_file) ? filemtime($pricing_css_file) : WB_VERSION
    );

          // workspace studuio css
    $pricing_css_file = get_stylesheet_directory() . '/assets/css/blog.css';

    wp_enqueue_style(
        'wunderbuild-blog',
        get_stylesheet_directory_uri() . '/assets/css/blog.css',
        array(),
        file_exists($pricing_css_file) ? filemtime($pricing_css_file) : WB_VERSION
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


add_action('enqueue_block_editor_assets', 'wunderbuild_block_editor_styles');

function wunderbuild_block_editor_styles() {

    wp_enqueue_style(
        'wunderbuild-editor-style',
        get_stylesheet_directory_uri() . '/assets/css/custom-style.css',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/css/custom-style.css')
    );

}