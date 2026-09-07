<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_support_fields');

function wunderbuild_register_support_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_support',
        'title' => 'Support',

        'fields' => array(

           

            array(
                'key'   => 'field_support_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_support_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'          => 'field_support_cards',
                'label'        => 'Cards',
                'name'         => 'cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Card',

                'sub_fields' => array(

                    array(
                        'key'           => 'field_support_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                    ),

                    array(
                        'key'   => 'field_support_card_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_support_card_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                ),

            ),

            array(
                'key'   => 'field_support_button_text',
                'label' => 'Button Text',
                'name'  => 'button_text',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_support_button_link',
                'label' => 'Button Link',
                'name'  => 'button_link',
                'type'  => 'link',
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/support',
                ),
            ),
        ),

    ));
}