<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_product_training_fields');

function wunderbuild_register_product_training_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_product_training',
        'title' => 'Product Training',

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

          array(
    'key'   => 'field_product_training_heading',
    'label' => 'Heading',
    'name'  => 'heading',
    'type'  => 'text',
),

           

            array(
                'key'   => 'field_product_training_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

           

            array(
                'key'           => 'field_product_training_image',
                'label'         => 'Training Image',
                'name'          => 'image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),

            

            array(
                'key'          => 'field_product_training_points',
                'label'        => 'Training Points',
                'name'         => 'training_points',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Training Point',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_product_training_point_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                        'instructions' => 'Example: 01, 02, 03, 04',
                    ),

                    array(
                        'key'   => 'field_product_training_point_text',
                        'label' => 'Text',
                        'name'  => 'text',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),

                ),
            ),

           

            array(
                'key'   => 'field_product_training_button',
                'label' => 'Button',
                'name'  => 'button',
                'type'  => 'link',
            ),

        ),

        

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/product-training',
                ),
            ),
        ),

    ));
}