<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_process_block');

function wunderbuild_register_process_block() {

    if (!function_exists('acf_register_block_type')) {
        return;
    }

    acf_register_block_type(array(

        'name'              => 'process',
        'title'             => __('Process Timeline', 'wunderbuild'),
        'description'       => __('Process Timeline Section', 'wunderbuild'),
        'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/process.php',
        'category'          => 'layout',
        'icon'              => 'editor-ol',
        'keywords'          => array('process', 'timeline', 'steps'),
        'mode'              => 'preview',

    ));
}