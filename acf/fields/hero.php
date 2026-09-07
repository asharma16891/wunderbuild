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
			
			// Hide Hero Section
array(
    'key'           => 'field_hero_hide_section',
    'label'         => 'Hide Hero Section',
    'name'          => 'hero_hide_section',
    'type'          => 'true_false',
    'instructions'  => 'Enable this to hide the hero section on this page without deleting the content.',
    'default_value' => 0,
    'ui'            => 1,
    'ui_on_text'    => 'Hidden',
    'ui_off_text'   => 'Visible',
),

            // Eyebrow / Badge
            array(
                'key'          => 'field_hero_eyebrow',
                'label'        => 'Eyebrow / Badge',
                'name'         => 'hero_eyebrow',
                'type'         => 'text',
                'instructions' => 'Text displayed above the hero heading.',
            ),

            // Heading
            array(
                'key'           => 'field_hero_title',
                'label'         => 'Heading',
                'name'          => 'hero_title',
                'type'          => 'wysiwyg',
                'toolbar'       => 'full',
                'media_upload'  => 0,
                'instructions'  => 'This is only for heading and highlighted text.',
            ),

            // Description
            array(
                'key'   => 'field_hero_description',
                'label' => 'Description',
                'name'  => 'hero_description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),

            // Supporting Text
            array(
                'key'          => 'field_hero_supporting_text',
                'label'        => 'Supporting Text',
                'name'         => 'hero_supporting_text',
                'type'         => 'textarea',
                'rows'         => 3,
            ),

            // Primary Button
            array(
                'key'   => 'field_primary_button',
                'label' => 'Primary Button',
                'name'  => 'hero_primary_button',
                'type'  => 'link',
            ),

            // Secondary Button
            array(
                'key'   => 'field_secondary_button',
                'label' => 'Secondary Button',
                'name'  => 'hero_secondary_button',
                'type'  => 'link',
            ),

            // Hero Background Type
            array(
                'key'           => 'field_hero_background_type',
                'label'         => 'Hero Background Type',
                'name'          => 'hero_background_type',
                'type'          => 'radio',

                'choices'       => array(
                    'color' => 'Background Color',
                    'image' => 'Image',
                    'video' => 'Video',
                ),

                // Background Color selected by default
                'default_value' => 'color',

                'layout'        => 'horizontal',
                'return_format' => 'value',

                'instructions'  => 'Choose how the hero background should be displayed.',
            ),

            // Hero Background Color
            array(
                'key'            => 'field_hero_background_color',
                'label'          => 'Hero Background Color',
                'name'           => 'hero_background_color',
                'type'           => 'color_picker',
                'default_value'  => '#F5F7F4',
                'enable_opacity' => 0,
                'return_format'  => 'string',

                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_hero_background_type',
                            'operator' => '==',
                            'value'    => 'color',
                        ),
                    ),
                ),
            ),

            // Hero Image
            array(
                'key'           => 'field_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'hero_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',

                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_hero_background_type',
                            'operator' => '==',
                            'value'    => 'image',
                        ),
                    ),
                ),
            ),

            // Hero Video
            array(
                'key'           => 'field_hero_video',
                'label'         => 'Hero Video',
                'name'          => 'hero_video',
                'type'          => 'file',
                'return_format' => 'array',
                'mime_types'    => 'mp4,webm,ogg',

                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_hero_background_type',
                            'operator' => '==',
                            'value'    => 'video',
                        ),
                    ),
                ),
            ),

        ),

        // Show these fields only on the Hero block
        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/hero',
                ),
            ),
        ),

    ));
}

