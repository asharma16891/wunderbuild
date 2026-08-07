<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_new_work_fields');

function wunderbuild_register_new_work_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key' => 'group_new_work',

        'title' => 'New Work',

        'fields' => array(

           

            array(
                'key' => 'field_new_work_heading',
                'label' => 'Heading',
                'name' => 'heading',
                'type' => 'textarea',
                'rows' => 3,
            ),

            array(
                'key' => 'field_new_work_description',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'rows' => 3,
            ),

            array(
                'key' => 'field_new_work_cards',
                'label' => 'Cards',
                'name' => 'cards',
                'type' => 'repeater',
                'button_label' => 'Add Card',
                'layout' => 'block',
                'sub_fields' => array(

                    array(
                        'key' => 'field_new_work_card_image',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                    ),

                    array(
                        'key' => 'field_new_work_card_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),

                    array(
                        'key' => 'field_new_work_card_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),

                ),
            ),

        ),

        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/new-work',
                ),
            ),
        ),

    ));
}