<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_wb_handover_fields');

function wunderbuild_register_wb_handover_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_wb_handover',
        'title' => 'WB Handover',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_wb_handover_heading',
                'label'         => 'Heading',
                'name'          => 'heading',
                'type'  => 'wysiwyg',
                'toolbar' => 'full',
                'media_upload' => 0,
            ),


            /*
            |--------------------------------------------------------------------------
            | Description
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_wb_handover_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),


            /*
            |--------------------------------------------------------------------------
            | Button
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_wb_handover_button_text',
                'label' => 'Button Text',
                'name'  => 'button_text',
                'type'  => 'text',
            ),

            array(
                'key'           => 'field_wb_handover_button_link',
                'label'         => 'Button Link',
                'name'          => 'button_link',
                'type'          => 'link',
                'return_format' => 'array',
            ),


            /*
            |--------------------------------------------------------------------------
            | Background Type
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_wb_handover_background_type',
                'label'         => 'Background Type',
                'name'          => 'background_type',
                'type'          => 'button_group',

                'choices' => array(
                    'image' => 'Background Image',
                    'color' => 'Background Color',
                ),

                'default_value' => 'image',

                'return_format' => 'value',

                'layout' => 'horizontal',
            ),


            /*
            |--------------------------------------------------------------------------
            | Background Image
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_wb_handover_background_image',
                'label'         => 'Background Image',
                'name'          => 'background_image',
                'type'          => 'image',

                'return_format' => 'array',

                'preview_size' => 'medium',

                'library' => 'all',

                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_wb_handover_background_type',
                            'operator' => '==',
                            'value'    => 'image',
                        ),
                    ),
                ),
            ),


            /*
            |--------------------------------------------------------------------------
            | Background Color
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_wb_handover_background_color',
                'label' => 'Background Color',
                'name'  => 'background_color',
                'type'  => 'color_picker',

                'conditional_logic' => array(
                    array(
                        array(
                            'field'    => 'field_wb_handover_background_type',
                            'operator' => '==',
                            'value'    => 'color',
                        ),
                    ),
                ),
            ),

        ),


        /*
        |--------------------------------------------------------------------------
        | Block Location
        |--------------------------------------------------------------------------
        */

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/wb-handover',
                ),
            ),
        ),

    ));
}