<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_workspace_fields');

function wunderbuild_register_workspace_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_workspace_fields',
        'title' => 'Workspace Fields',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'       => 'field_workspace_fields_heading',
                'label'     => 'Section Heading',
                'name'      => 'heading',
                'type'      => 'textarea',
                'rows'      => 2,
                'new_lines' => '',
            ),


            /*
            |--------------------------------------------------------------------------
            | Content Label
            |--------------------------------------------------------------------------
            */

            array(
                'key'         => 'field_workspace_fields_label',
                'label'       => 'Content Label',
                'name'        => 'content_label',
                'type'        => 'text',
                'placeholder' => 'Example: WORKSPACE FIELDS',
            ),


            /*
            |--------------------------------------------------------------------------
            | Content Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'         => 'field_workspace_fields_content_heading',
                'label'       => 'Content Heading',
                'name'        => 'content_heading',
                'type'        => 'text',
                'placeholder' => 'Example: Capture the detail',
            ),


            /*
            |--------------------------------------------------------------------------
            | Workspace Field Items
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_workspace_fields_items',
                'label'        => 'Workspace Field Items',
                'name'         => 'items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Workspace Field',

                'sub_fields' => array(

                    /*
                    |--------------------------------------------------------------------------
                    | Number
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_workspace_fields_item_number',
                        'label'       => 'Number',
                        'name'        => 'number',
                        'type'        => 'text',
                        'placeholder' => 'Example: 01',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Title
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_workspace_fields_item_title',
                        'label'       => 'Title',
                        'name'        => 'title',
                        'type'        => 'text',
                        'placeholder' => 'Example: Site evidence',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Description
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_workspace_fields_item_description',
                        'label'       => 'Description',
                        'name'        => 'description',
                        'type'        => 'textarea',
                        'rows'       => 3,
                        'new_lines'  => '',
                        'placeholder' => 'Enter description',
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
                    'value'    => 'acf/workspace-fields',
                ),
            ),
        ),

    ));
}