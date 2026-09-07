<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_workspace_roadmap_fields');

function wunderbuild_register_workspace_roadmap_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_workspace_roadmap',
        'title' => 'Workspace Roadmap',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Eyebrow
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_workspace_roadmap_eyebrow',
                'label'         => 'Eyebrow',
                'name'          => 'eyebrow',
                'type'          => 'text',
                'default_value' => 'COMING TO WORKSPACE STUDIO',
            ),


            /*
            |--------------------------------------------------------------------------
            | Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_workspace_roadmap_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 3,
            ),


            /*
            |--------------------------------------------------------------------------
            | Description
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_workspace_roadmap_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 5,
            ),


            /*
            |--------------------------------------------------------------------------
            | Image
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_workspace_roadmap_image',
                'label'         => 'Image',
                'name'          => 'image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
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
                    'value'    => 'acf/workspace-roadmap',
                ),
            ),
        ),

    ));
}