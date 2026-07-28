<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_comparison_fields');

function wunderbuild_register_comparison_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_comparison',
        'title' => 'Comparison',

        'fields' => array(

            array(
                'key'   => 'field_comparison_badge',
                'label' => 'Badge',
                'name'  => 'badge',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_comparison_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_comparison_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            // LEFT SIDE

            array(
                'key'   => 'field_left_title',
                'label' => 'Left Title',
                'name'  => 'left_title',
                'type'  => 'text',
            ),

            array(
                'key'           => 'field_left_icon',
                'label'         => 'Left Icon',
                'name'          => 'left_icon',
                'type'          => 'image',
                'return_format' => 'array',
            ),

            array(
                'key'          => 'field_left_items',
                'label'        => 'Left Items',
                'name'         => 'left_items',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Left Item',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_left_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_left_text',
                        'label' => 'Text',
                        'name'  => 'text',
                        'type'  => 'textarea',
                    ),

                ),

            ),

            // RIGHT SIDE

            array(
                'key'   => 'field_right_title',
                'label' => 'Right Title',
                'name'  => 'right_title',
                'type'  => 'text',
            ),

            array(
                'key'           => 'field_right_icon',
                'label'         => 'Right Icon',
                'name'          => 'right_icon',
                'type'          => 'image',
                'return_format' => 'array',
            ),

            array(
                'key'          => 'field_right_items',
                'label'        => 'Right Items',
                'name'         => 'right_items',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Right Item',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_right_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_right_text',
                        'label' => 'Text',
                        'name'  => 'text',
                        'type'  => 'textarea',
                    ),

                ),

            ),

            // BUTTONS

            array(
                'key'   => 'field_primary_button_text',
                'label' => 'Primary Button Text',
                'name'  => 'primary_button_text',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_primary_button_link',
                'label' => 'Primary Button Link',
                'name'  => 'primary_button_link',
                'type'  => 'link',
            ),

            array(
                'key'   => 'field_secondary_button_text',
                'label' => 'Secondary Button Text',
                'name'  => 'secondary_button_text',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_secondary_button_link',
                'label' => 'Secondary Button Link',
                'name'  => 'secondary_button_link',
                'type'  => 'link',
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/comparison',
                ),
            ),
        ),

    ));
}