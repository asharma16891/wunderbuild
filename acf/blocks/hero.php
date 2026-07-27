<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_hero_block');

function wunderbuild_register_hero_block() {

    if (!function_exists('acf_register_block_type')) {
        return;
    }

    acf_register_block_type(array(

        'name'              => 'hero',
        'title'             => __('Hero', 'wunderbuild'),
        'description'       => __('Hero Section', 'wunderbuild'),
        'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/hero.php',
        'category'          => 'layout',
        'icon'              => 'cover-image',
        'keywords'          => array('hero', 'banner'),
       

    ));
}