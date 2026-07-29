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

    // Section
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

    // ==========================
    // LEFT CARD
    // ==========================

    array(
        'key'   => 'field_left_small_title',
        'label' => 'Left Small Title',
        'name'  => 'left_small_title',
        'type'  => 'text',
    ),

    array(
        'key'   => 'field_left_heading',
        'label' => 'Left Heading',
        'name'  => 'left_heading',
        'type'  => 'text',
    ),

    array(
        'key'           => 'field_left_icon',
        'label'         => 'Left Icon',
        'name'          => 'left_icon',
        'type'          => 'image',
        'return_format' => 'array',
        'preview_size'  => 'medium',
        'library'       => 'all',
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
                'key'   => 'field_left_item_number',
                'label' => 'Item Number',
                'name'  => 'number',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_left_item_text',
                'label' => 'Item Text',
                'name'  => 'text',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

        ),
    ),

    // ==========================
    // RIGHT CARD
    // ==========================

    array(
        'key'   => 'field_right_small_title',
        'label' => 'Right Small Title',
        'name'  => 'right_small_title',
        'type'  => 'text',
    ),

    array(
        'key'   => 'field_right_heading',
        'label' => 'Right Heading',
        'name'  => 'right_heading',
        'type'  => 'text',
    ),

    array(
        'key'           => 'field_right_icon',
        'label'         => 'Right Icon',
        'name'          => 'right_icon',
        'type'          => 'image',
        'return_format' => 'array',
        'preview_size'  => 'medium',
        'library'       => 'all',
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
                'key'   => 'field_right_item_number',
                'label' => 'Item Number',
                'name'  => 'number',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_right_item_text',
                'label' => 'Item Text',
                'name'  => 'text',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

        ),
    ),

    // ==========================
    // BUTTONS
    // ==========================

    array(
    'key'   => 'field_comparison_primary_button',
    'label' => 'Primary Button',
    'name'  => 'primary_button',
    'type'  => 'link',
),

array(
    'key'   => 'field_comparison_secondary_button',
    'label' => 'Secondary Button',
    'name'  => 'secondary_button',
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