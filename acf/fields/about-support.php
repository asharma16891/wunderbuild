<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_product_support_fields');

function wunderbuild_register_product_support_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_product_support',
        'title' => 'Product Support',

        'fields' => array(

            /*
             * Section Heading
             */
            array(
                'key'   => 'field_product_support_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),


            /*
             * Button
             */
            array(
                'key'           => 'field_product_support_button',
                'label'         => 'Button',
                'name'          => 'button',
                'type'          => 'link',
                'return_format' => 'array',
            ),


            /*
             * Support Cards
             */
            array(
                'key'          => 'field_product_support_cards',
                'label'        => 'Support Cards',
                'name'         => 'support_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Support Card',

                'sub_fields' => array(

                    /*
                     * Icon
                     */
                    array(
                        'key'           => 'field_product_support_card_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),


                    /*
                     * Card Heading
                     */
                    array(
                        'key'   => 'field_product_support_card_heading',
                        'label' => 'Card Heading',
                        'name'  => 'card_heading',
                        'type'  => 'text',
                    ),


                    /*
                     * Card Description
                     */
                    array(
                        'key'   => 'field_product_support_card_description',
                        'label' => 'Card Description',
                        'name'  => 'card_description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),


                ),
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/about-support',
                ),
            ),
        ),

    ));
}