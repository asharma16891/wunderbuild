<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_mcp_access_timeline_fields');

function wunderbuild_register_mcp_access_timeline_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_mcp_access_timeline',
        'title' => 'MCP Access Timeline',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_mcp_access_timeline_heading',
                'label'        => 'Section Heading',
                'name'         => 'heading',
                'type'         => 'wysiwyg',
                'toolbar'      => 'basic',
                'media_upload' => 0,
            ),


            /*
            |--------------------------------------------------------------------------
            | Timeline Cards
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_mcp_access_timeline_items',
                'label'        => 'Timeline Cards',
                'name'         => 'timeline_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'min'          => 4,
                'max'          => 4,
                'button_label' => 'Add Timeline Card',

                'sub_fields' => array(

                    /*
                    |--------------------------------------------------------------------------
                    | Number
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'   => 'field_mcp_access_timeline_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Title
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'   => 'field_mcp_access_timeline_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Description
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'   => 'field_mcp_access_timeline_description',
                        'label' => 'Description',
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
                    'value'    => 'acf/mcp-access-timeline',
                ),
            ),
        ),

    ));
}