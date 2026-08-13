<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_initial_onboarding_fields');

function wunderbuild_register_initial_onboarding_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_initial_onboarding',
        'title' => 'Initial Onboarding',

        'fields' => array(

            array(
                'key'   => 'field_initial_onboarding_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),


            array(
                'key'   => 'field_initial_onboarding_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),


            array(
                'key'   => 'field_initial_onboarding_image',
                'label' => 'Image',
                'name'  => 'image',
                'type'  => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),


            array(
                'key'   => 'field_initial_onboarding_content_heading',
                'label' => 'Content Heading',
                'name'  => 'content_heading',
                'type'  => 'text',
            ),


            array(
                'key'          => 'field_initial_onboarding_checklist',
                'label'        => 'Checklist',
                'name'         => 'checklist',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Checklist Item',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_initial_onboarding_checklist_item',
                        'label' => 'Item',
                        'name'  => 'item',
                        'type'  => 'text',
                    ),

                ),
            ),


            array(
                'key'   => 'field_initial_onboarding_button',
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
                    'value'    => 'acf/initial-onboarding',
                ),
            ),
        ),

    ));
}