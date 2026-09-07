<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_workspace_cta_fields');

function wunderbuild_register_workspace_cta_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_workspace_cta',
        'title' => 'Workspace CTA',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_workspace_cta_heading',
                'label'        => 'Heading',
                'name'         => 'heading',
                'type'         => 'wysiwyg',
                'toolbar'      => 'full',
                'media_upload' => 0,
            ),


            /*
            |--------------------------------------------------------------------------
            | Description
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_workspace_cta_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),


            /*
            |--------------------------------------------------------------------------
            | Button
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_workspace_cta_button',
                'label' => 'Button',
                'name'  => 'button',
                'type'  => 'link',
            ),

             array(
                'key'   => 'field_workspace_cta_button-1',
                'label' => 'Button',
                'name'  => 'button-1',
                'type'  => 'link',
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
                    'value'    => 'acf/workspace-cta',
                ),
            ),
        ),

    ));
}