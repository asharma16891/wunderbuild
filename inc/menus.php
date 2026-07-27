<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', 'wunderbuild_register_menus');

function wunderbuild_register_menus() {

    register_nav_menus(array(

        'primary_menu' => __('Primary Menu', 'wunderbuild'),

        'footer_menu_1' => __('Footer Menu 1', 'wunderbuild'),

        'footer_menu_2' => __('Footer Menu 2', 'wunderbuild'),

        'footer_menu_3' => __('Footer Menu 3', 'wunderbuild'),

    ));

}