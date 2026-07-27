<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_trust_block');

function wunderbuild_register_trust_block() {

    if (!function_exists('acf_register_block_type')) {
        return;
    }

    acf_register_block_type(array(

        'name'              => 'trust',
        'title'             => __('Trust Section', 'wunderbuild'),
        'description'       => __('Trust Cards Section', 'wunderbuild'),
        'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/trust.php',
        'category'          => 'layout',
        'icon'              => 'shield',
        'keywords'          => array('trust', 'features'),
        'mode'              => 'preview',

    ));
}