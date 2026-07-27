<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_hero_fields');

function wunderbuild_register_hero_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key' => 'group_homepage_hero',

        'title' => 'Homepage Hero',

        'fields' => array(

            array(
                'key' => 'field_hero_badge',
                'label' => 'Badge',
                'name' => 'hero_badge',
                'type' => 'text',
            ),

            array(
                'key' => 'field_hero_title',
                'label' => 'Heading',
                'name' => 'hero_title',
                'type' => 'textarea',
                'rows' => 3,
            ),

            array(
                'key' => 'field_hero_description',
                'label' => 'Description',
                'name' => 'hero_description',
                'type' => 'textarea',
                'rows' => 4,
            ),

            array(
                'key' => 'field_primary_button',
                'label' => 'Primary Button',
                'name' => 'hero_primary_button',
                'type' => 'link',
            ),

            array(
                'key' => 'field_secondary_button',
                'label' => 'Secondary Button',
                'name' => 'hero_secondary_button',
                'type' => 'link',
            ),

            array(
                'key' => 'field_hero_image',
                'label' => 'Hero Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),

        ),

        'location' => array(
    array(
        array(
            'param' => 'block',
            'operator' => '==',
            'value' => 'acf/hero',
        ),
    ),
),

    ));
}