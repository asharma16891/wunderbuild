<?php

if (!defined('ABSPATH')) {
    exit;
}


// Options Pages

add_action('acf/init', 'wunderbuild_register_options_pages');

function wunderbuild_register_options_pages() {

    if (!function_exists('acf_add_options_page')) {
        return;
    }

    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-settings',
        'capability' => 'manage_options',
        'redirect'   => false,
        'icon_url'   => 'dashicons-admin-generic',
        'position'   => 60,
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Header',
        'menu_title'  => 'Header',
        'parent_slug' => 'theme-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Footer',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-settings',
    ));
}



require_once get_stylesheet_directory() . '/acf/register-acf-blocks.php';

// Field Groups
require_once get_stylesheet_directory() . '/acf/fields/header.php';
require_once get_stylesheet_directory() . '/acf/fields/footer.php';
require_once get_stylesheet_directory() . '/acf/fields/hero.php';
require_once get_stylesheet_directory() . '/acf/fields/trust.php';
require_once get_stylesheet_directory() . '/acf/fields/process.php';
require_once get_stylesheet_directory() . '/acf/fields/product-showcase.php';
require_once get_stylesheet_directory() . '/acf/fields/support.php';
require_once get_stylesheet_directory() . '/acf/fields/testimonials.php';
require_once get_stylesheet_directory() . '/acf/fields/final-cta.php';
require_once get_stylesheet_directory() . '/acf/fields/how-it-works-timeline.php';
require_once get_stylesheet_directory() . '/acf/fields/comparison.php';
require_once get_stylesheet_directory() . '/acf/fields/faqs.php';
