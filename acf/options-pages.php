<?php

if (!defined('ABSPATH')) {
    exit;
}

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