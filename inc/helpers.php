<?php

if (!defined('ABSPATH')) {
    exit;
}




function wunderbuild_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('automatic-feed-links');

    register_nav_menus([
        'primary' => __('Primary Menu', 'wunderbuild'),
        'footer'  => __('Footer Menu', 'wunderbuild'),
    ]);
}


add_action('after_setup_theme', 'wunderbuild_setup');
add_action('after_setup_theme', 'wunderbuild_register_menus');

function wunderbuild_register_menus() {

    register_nav_menus(array(

        'primary_menu' => __('Primary Menu', 'wunderbuild'),

        'footer_menu_1' => __('Footer Menu 1', 'wunderbuild'),

        'footer_menu_2' => __('Footer Menu 2', 'wunderbuild'),

        'footer_menu_3' => __('Footer Menu 3', 'wunderbuild'),

    ));

}

