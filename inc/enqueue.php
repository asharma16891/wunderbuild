<?php

// Remove Parent Theme CSS
add_action('wp_enqueue_scripts', 'wunderbuild_remove_parent_theme_css', 999);

function wunderbuild_remove_parent_theme_css()
{
    wp_dequeue_style('twenty-twenty-one-style');
    wp_deregister_style('twenty-twenty-one-style');

    wp_dequeue_style('twentytwentyone-style');
    wp_deregister_style('twentytwentyone-style');

    wp_dequeue_style('style');
    wp_deregister_style('style');
}


// Load Child Theme CSS & JS
add_action('wp_enqueue_scripts', 'wunderbuild_enqueue_assets', 1000);

function wunderbuild_enqueue_assets()
{

    /* =========================================================
       MAIN CUSTOM CSS

       Do NOT load on:
       - Page ID 1202 = How It Works 2
       - Page ID 1204 = How It Works 3
    ========================================================= */

    if (!is_page(array(1202, 1204))) {

        $css_file = get_stylesheet_directory() . '/assets/css/custom-style.css';

        wp_enqueue_style(
            'wunderbuild-style',
            get_stylesheet_directory_uri() . '/assets/css/custom-style.css',
            array(),
            file_exists($css_file)
                ? filemtime($css_file)
                : WB_VERSION
        );
    }


    /* =========================================================
       TYPOGRAPHY SET 2
       PAGE ID: 1202
    ========================================================= */

    if (is_page(1202)) {

        $set2_css_file = get_stylesheet_directory() . '/assets/css/set-2.css';

        wp_enqueue_style(
            'wunderbuild-style-set2',
            get_stylesheet_directory_uri() . '/assets/css/set-2.css',
            array(),
            file_exists($set2_css_file)
                ? filemtime($set2_css_file)
                : WB_VERSION
        );
    }


    /* =========================================================
       TYPOGRAPHY SET 3
       PAGE ID: 1204
    ========================================================= */

    if (is_page(1204)) {

        $set3_css_file = get_stylesheet_directory() . '/assets/css/set-3.css';

        wp_enqueue_style(
            'wunderbuild-style-set3',
            get_stylesheet_directory_uri() . '/assets/css/set-3.css',
            array(),
            file_exists($set3_css_file)
                ? filemtime($set3_css_file)
                : WB_VERSION
        );
    }


    /* =========================================================
       PRICING
    ========================================================= */

    $pricing_css_file = get_stylesheet_directory() . '/assets/css/pricing.css';

    wp_enqueue_style(
        'wunderbuild-pricing',
        get_stylesheet_directory_uri() . '/assets/css/pricing.css',
        array(),
        file_exists($pricing_css_file)
            ? filemtime($pricing_css_file)
            : WB_VERSION
    );


    /* =========================================================
       SUPPORT / ONBOARDING
    ========================================================= */

    $support_css_file = get_stylesheet_directory() . '/assets/css/support-onboarding.css';

    wp_enqueue_style(
        'wunderbuild-support-onboarding',
        get_stylesheet_directory_uri() . '/assets/css/support-onboarding.css',
        array(),
        file_exists($support_css_file)
            ? filemtime($support_css_file)
            : WB_VERSION
    );


    /* =========================================================
       SWITCH TO WUNDERBUILD
    ========================================================= */

    $switch_css_file = get_stylesheet_directory() . '/assets/css/switch-to-wunderbuild.css';

    wp_enqueue_style(
        'switch-to-wunderbuild',
        get_stylesheet_directory_uri() . '/assets/css/switch-to-wunderbuild.css',
        array(),
        file_exists($switch_css_file)
            ? filemtime($switch_css_file)
            : WB_VERSION
    );


    /* =========================================================
       REVIEWS
    ========================================================= */

    $reviews_css_file = get_stylesheet_directory() . '/assets/css/reviews.css';

    wp_enqueue_style(
        'wunderbuild-reviews',
        get_stylesheet_directory_uri() . '/assets/css/reviews.css',
        array(),
        file_exists($reviews_css_file)
            ? filemtime($reviews_css_file)
            : WB_VERSION
    );


    /* =========================================================
       CONTACT
    ========================================================= */

    $contact_css_file = get_stylesheet_directory() . '/assets/css/contact.css';

    wp_enqueue_style(
        'wunderbuild-contact',
        get_stylesheet_directory_uri() . '/assets/css/contact.css',
        array(),
        file_exists($contact_css_file)
            ? filemtime($contact_css_file)
            : WB_VERSION
    );


    /* =========================================================
       MCP INTEGRATIONS
    ========================================================= */

    $mcp_css_file = get_stylesheet_directory() . '/assets/css/mcp-integrations.css';

    wp_enqueue_style(
        'wunderbuild-mcp-integrations',
        get_stylesheet_directory_uri() . '/assets/css/mcp-integrations.css',
        array(),
        file_exists($mcp_css_file)
            ? filemtime($mcp_css_file)
            : WB_VERSION
    );


    /* =========================================================
       WORKSPACE STUDIO
    ========================================================= */

    $workspace_css_file = get_stylesheet_directory() . '/assets/css/workspace-studio.css';

    wp_enqueue_style(
        'wunderbuild-workspace-studio',
        get_stylesheet_directory_uri() . '/assets/css/workspace-studio.css',
        array(),
        file_exists($workspace_css_file)
            ? filemtime($workspace_css_file)
            : WB_VERSION
    );


    /* =========================================================
       BLOG
    ========================================================= */

    $blog_css_file = get_stylesheet_directory() . '/assets/css/blog.css';

    wp_enqueue_style(
        'wunderbuild-blog',
        get_stylesheet_directory_uri() . '/assets/css/blog.css',
        array(),
        file_exists($blog_css_file)
            ? filemtime($blog_css_file)
            : WB_VERSION
    );


    /* =========================================================
       EVENT
    ========================================================= */

    $event_css_file = get_stylesheet_directory() . '/assets/css/event.css';

    wp_enqueue_style(
        'wunderbuild-event',
        get_stylesheet_directory_uri() . '/assets/css/event.css',
        array(),
        file_exists($event_css_file)
            ? filemtime($event_css_file)
            : WB_VERSION
    );


    /* =========================================================
       AFFILIATE
    ========================================================= */

    $affiliate_css_file = get_stylesheet_directory() . '/assets/css/affiliate.css';

    wp_enqueue_style(
        'wunderbuild-affiliate',
        get_stylesheet_directory_uri() . '/assets/css/affiliate.css',
        array(),
        file_exists($affiliate_css_file)
            ? filemtime($affiliate_css_file)
            : WB_VERSION
    );


    /* =========================================================
       ABOUT
    ========================================================= */

    $about_css_file = get_stylesheet_directory() . '/assets/css/about.css';

    wp_enqueue_style(
        'wunderbuild-about',
        get_stylesheet_directory_uri() . '/assets/css/about.css',
        array(),
        file_exists($about_css_file)
            ? filemtime($about_css_file)
            : WB_VERSION
    );


    /* =========================================================
       JS
    ========================================================= */

    $js_file = get_stylesheet_directory() . '/assets/js/main.js';

    wp_enqueue_script(
        'wunderbuild-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        file_exists($js_file)
            ? filemtime($js_file)
            : WB_VERSION,
        true
    );
}


/* =========================================================
   BLOCK EDITOR STYLES
========================================================= */

add_action(
    'enqueue_block_editor_assets',
    'wunderbuild_block_editor_styles'
);

function wunderbuild_block_editor_styles()
{
    $css_file = get_stylesheet_directory()
        . '/assets/css/custom-style.css';

    wp_enqueue_style(
        'wunderbuild-editor-style',
        get_stylesheet_directory_uri()
        . '/assets/css/custom-style.css',
        array(),
        file_exists($css_file)
            ? filemtime($css_file)
            : WB_VERSION
    );
}