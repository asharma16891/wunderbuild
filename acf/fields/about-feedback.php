<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_about_feedback_fields');

function wunderbuild_register_about_feedback_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_about_feedback',
        'title' => 'About Feedback',

        'fields' => array(

            /*
             * Section Heading
             */
            array(
                'key'   => 'field_about_feedback_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),


            /*
             * Feedback Steps
             */
            array(
                'key'          => 'field_about_feedback_steps',
                'label'        => 'Feedback Steps',
                'name'         => 'feedback_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Feedback Step',

                'sub_fields' => array(

                    /*
                     * Step Number
                     */
                    array(
                        'key'   => 'field_about_feedback_step_number',
                        'label' => 'Step Number',
                        'name'  => 'step_number',
                        'type'  => 'text',
                        'instructions' => 'Example: 01, 02, 03, 04',
                    ),


                    /*
                     * Icon
                     */
                    array(
                        'key'           => 'field_about_feedback_step_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),


                    /*
                     * Step Heading
                     */
                    array(
                        'key'   => 'field_about_feedback_step_heading',
                        'label' => 'Step Heading',
                        'name'  => 'step_heading',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),


                    /*
                     * Step Description
                     */
                    array(
                        'key'   => 'field_about_feedback_step_description',
                        'label' => 'Step Description',
                        'name'  => 'step_description',
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
                    'value'    => 'acf/about-feedback',
                ),
            ),
        ),

    ));
}