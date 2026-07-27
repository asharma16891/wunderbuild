<?php

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