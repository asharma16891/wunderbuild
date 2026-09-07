<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_workspace_types_fields');

function wunderbuild_register_workspace_types_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_workspace_types',
        'title' => 'Workspace Types',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'       => 'field_workspace_types_heading',
                'label'     => 'Section Heading',
                'name'      => 'heading',
                 'type'         => 'wysiwyg',
                'toolbar'      => 'full',
                'media_upload' => 0,
            ),


            /*
            |--------------------------------------------------------------------------
            | Workspace Type Cards
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_workspace_types_items',
                'label'        => 'Workspace Types',
                'name'         => 'items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Workspace Type',

                'sub_fields' => array(

                    /*
                    |--------------------------------------------------------------------------
                    | Icon
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'           => 'field_workspace_type_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Title
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_workspace_type_title',
                        'label'       => 'Title',
                        'name'        => 'title',
                        'type'        => 'text',
                        'placeholder' => 'Example: Form',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Description
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_workspace_type_description',
                        'label'       => 'Description',
                        'name'        => 'description',
                        'type'        => 'textarea',
                        'rows'       => 3,
                        'new_lines'  => '',
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
                    'value'    => 'acf/workspace-types',
                ),
            ),
        ),

    ));
}