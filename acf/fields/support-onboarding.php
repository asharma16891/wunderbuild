<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_support_onboarding_fields');

function wunderbuild_register_support_onboarding_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_support_onboarding',
        'title' => 'Support & Onboarding',

        'fields' => array(

            /*
             * Section Heading
             */
            array(
                'key'   => 'field_support_onboarding_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type' => 'textarea',
                'rows' => 2,
            ),

            /*
             * Section Description
             */
            array(
                'key'   => 'field_support_onboarding_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),

            /*
             * Left Cards
             */
            array(
                'key'          => 'field_support_onboarding_left_cards',
                'label'        => 'Left Cards',
                'name'         => 'left_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Left Card',

                'sub_fields' => array(

                    array(
                        'key'           => 'field_support_onboarding_left_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),

                    array(
                        'key'   => 'field_support_onboarding_left_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_support_onboarding_left_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ),

                ),
            ),

           

            /*
             * Right Card
             */
            array(
                'key'   => 'field_support_onboarding_right_card',
                'label' => 'Right Card',
                'name'  => 'right_card',
                'type'  => 'group',

                'sub_fields' => array(

                    array(
                        'key'           => 'field_support_onboarding_right_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),

                    array(
                        'key'   => 'field_support_onboarding_right_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_support_onboarding_right_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ),

                ),
            ),

            /*
             * Button
             */
            array(
                'key'   => 'field_support_onboarding_button',
                'label' => 'Button',
                'name'  => 'button',
                'type'  => 'group',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_support_onboarding_button_text',
                        'label' => 'Button Text',
                        'name'  => 'text',
                        'type'  => 'text',
                    ),

                    array(
                        'key'           => 'field_support_onboarding_button_link',
                        'label'         => 'Button Link',
                        'name'          => 'link',
                        'type'          => 'link',
                        'return_format' => 'array',
                    ),

                ),
            ),

        ),

        /*
         * Show only on Support & Onboarding block
         */
        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/support-onboarding',
                ),
            ),
        ),

    ));
}