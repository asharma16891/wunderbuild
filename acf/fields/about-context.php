<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_about_context_fields');

function wunderbuild_register_about_context_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_about_context',
        'title' => 'About Context',

        'fields' => array(

            /*
             * Section Heading
             */
            array(
                'key'   => 'field_about_context_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),


            /*
             * Card 01
             */
            array(
                'key'       => 'field_about_context_card_1_tab',
                'label'     => 'Card 01',
                'name'      => '',
                'type'      => 'tab',
                'placement' => 'top',
            ),

            array(
                'key'           => 'field_about_context_card_1_image',
                'label'         => 'Card Image',
                'name'          => 'card_1_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),

            array(
                'key'   => 'field_about_context_card_1_heading',
                'label' => 'Card Heading',
                'name'  => 'card_1_heading',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_about_context_card_1_description',
                'label' => 'Card Description',
                'name'  => 'card_1_description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),


            /*
             * Card 02
             */
            array(
                'key'       => 'field_about_context_card_2_tab',
                'label'     => 'Card 02',
                'name'      => '',
                'type'      => 'tab',
                'placement' => 'top',
            ),

            array(
                'key'           => 'field_about_context_card_2_image',
                'label'         => 'Card Image',
                'name'          => 'card_2_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),

            array(
                'key'   => 'field_about_context_card_2_heading',
                'label' => 'Card Heading',
                'name'  => 'card_2_heading',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_about_context_card_2_description',
                'label' => 'Card Description',
                'name'  => 'card_2_description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),


            /*
             * Card 03
             */
            array(
                'key'       => 'field_about_context_card_3_tab',
                'label'     => 'Card 03',
                'name'      => '',
                'type'      => 'tab',
                'placement' => 'top',
            ),

            array(
                'key'           => 'field_about_context_card_3_image',
                'label'         => 'Card Image',
                'name'          => 'card_3_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),

            array(
                'key'   => 'field_about_context_card_3_heading',
                'label' => 'Card Heading',
                'name'  => 'card_3_heading',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_about_context_card_3_description',
                'label' => 'Card Description',
                'name'  => 'card_3_description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/about-context',
                ),
            ),
        ),

    ));
}
