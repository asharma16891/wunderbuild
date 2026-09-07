<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_workspace_access_fields');

function wunderbuild_register_workspace_access_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_workspace_access',
        'title' => 'Workspace Access',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'       => 'field_workspace_access_heading',
                'label'     => 'Section Heading',
                'name'      => 'heading',
                'type'      => 'textarea',
                'rows'      => 2,
                'new_lines' => '',
                'placeholder' => 'Build it at the desk. Use it where the work happens.',
            ),


            /*
            |--------------------------------------------------------------------------
            | Access Cards
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_workspace_access_items',
                'label'        => 'Access Cards',
                'name'         => 'items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Access Card',

                'sub_fields' => array(

                    /*
                    |--------------------------------------------------------------------------
                    | Icon
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'           => 'field_workspace_access_icon',
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
                        'key'         => 'field_workspace_access_title',
                        'label'       => 'Title',
                        'name'        => 'title',
                        'type'        => 'text',
                        'placeholder' => 'Example: Public links and QR codes',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Description
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_workspace_access_description',
                        'label'       => 'Description',
                        'name'        => 'description',
                        'type'        => 'textarea',
                        'rows'       => 3,
                        'new_lines'  => '',
                        'placeholder' => 'Enter card description',
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
                    'value'    => 'acf/workspace-access',
                ),
            ),
        ),

    ));
}