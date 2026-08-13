<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_pricing_hero_fields');

function wunderbuild_register_pricing_hero_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_pricing_hero',
        'title' => 'Pricing Hero',

        'fields' => array(

            array(
                'key' => 'field_pricing_heading',
                'label' => 'Heading',
                'name' => 'heading',
                'type' => 'wysiwyg',
                'tabs' => 'all',  
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),

            array(
                'key' => 'field_pricing_description',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'rows' => 3,
            ),

            array(
                'key' => 'field_pricing_background_color',
                'label' => 'Background Color',
                'name' => 'background_color',
                'type' => 'color_picker',
                'default_value' => '#FFFFFF',
            ),

            array(
                'key' => 'field_pricing_primary_button',
                'label' => 'Primary Button',
                'name' => 'primary_button',
                'type' => 'link',
            ),

            array(
                'key' => 'field_pricing_secondary_button',
                'label' => 'Secondary Button',
                'name' => 'secondary_button',
                'type' => 'link',
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/pricing-hero',
                ),
            ),
        ),

    ));
}