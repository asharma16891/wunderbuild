<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_workspace_cases_fields');

function wunderbuild_register_workspace_cases_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_workspace_cases',
        'title' => 'Workspace Cases',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_workspace_cases_heading',
                'label' => 'Section Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 3,
            ),


            /*
            |--------------------------------------------------------------------------
            | Workspace Cases
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_workspace_cases_items',
                'label'        => 'Workspace Cases',
                'name'         => 'cases',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Case',

                'sub_fields' => array(

                    /*
                    |--------------------------------------------------------------------------
                    | Image
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'           => 'field_workspace_case_image',
                        'label'         => 'Case Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Title
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'   => 'field_workspace_case_title',
                        'label' => 'Case Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Description
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'   => 'field_workspace_case_description',
                        'label' => 'Case Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                ),
            ),

        ),


        /*
        |--------------------------------------------------------------------------
        | Block Location
        |--------------------------------------------------------------------------
        */

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/workspace-cases',
                ),
            ),
        ),

    ));
}