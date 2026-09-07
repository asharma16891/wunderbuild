<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_about_purpose_fields');

function wunderbuild_register_about_purpose_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_about_purpose',
        'title' => 'About Purpose',

        'fields' => array(

            /*
             * Section Heading
             */
            array(
                'key'   => 'field_about_purpose_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'text',
            ),


            /*
             * Purpose Cards
             */
            array(
                'key'          => 'field_about_purpose_cards',
                'label'        => 'Purpose Cards',
                'name'         => 'purpose_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Purpose Card',

                'sub_fields' => array(

                    /*
                     * Icon
                     */
                    array(
                        'key'           => 'field_about_purpose_card_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),

                    /*
                     * Card Label
                     */
                    array(
                        'key'   => 'field_about_purpose_card_label',
                        'label' => 'Card Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ),

                    /*
                     * Card Description
                     */
                    array(
                        'key'   => 'field_about_purpose_card_description',
                        'label' => 'Card Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ),

                ),
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/about-purpose',
                ),
            ),
        ),

    ));
}