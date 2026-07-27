<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_product_showcase_block');

function wunderbuild_register_product_showcase_block()
{
    if (!function_exists('acf_register_block_type')) {
        return;
    }

    acf_register_block_type(array(
        'name'              => 'product-showcase',
        'title'             => __('Product Showcase', 'wunderbuild'),
        'description'       => __('Product Showcase Section', 'wunderbuild'),
        'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/product-showcase.php',
        'category'          => 'layout',
        'icon'              => 'images-alt2',
        'keywords'          => array('product', 'showcase', 'tabs'),
        'mode'              => 'preview',
        'supports'          => array(
            'align' => false,
            'jsx'   => true,
        ),
    ));
}