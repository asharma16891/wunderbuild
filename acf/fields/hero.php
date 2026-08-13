<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_hero_fields');

function wunderbuild_register_hero_fields()
{

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key' => 'group_homepage_hero',

        'title' => 'Homepage Hero',

        'fields' => array(



         array(
                'key'   => 'field_hero_eyebrow',
                'label' => 'Eyebrow / Badge',
                'name'  => 'hero_eyebrow',
                'type'  => 'text',
                'instructions' => 'Text displayed above the hero heading.',
            ),
            
            array(
                'key' => 'field_hero_title',
                'label' => 'Heading',
                'name' => 'hero_title',
                 'type'  => 'wysiwyg',
                'toolbar' => 'basic',
                'media_upload' => 0,
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
                'key'           => 'field_hero_background_color',
                'label'         => 'Hero Background Color',
                'name'          => 'hero_background_color',
                'type'          => 'color_picker',
                'default_value' => '#F5F7F4',
                'enable_opacity' => 0,
                'return_format' => 'string',
            ),

            array(
                'key' => 'field_hero_image',
                'label' => 'Hero Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key'           => 'field_hero_video',
                'label'         => 'Hero Video',
                'name'          => 'hero_video',
                'type'          => 'file',
                'return_format' => 'array',
                'mime_types'    => 'mp4,webm,ogg',
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
