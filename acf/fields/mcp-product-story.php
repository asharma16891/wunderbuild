<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_mcp_product_story_fields');

function wunderbuild_register_mcp_product_story_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_mcp_product_story',
        'title' => 'MCP Product Story',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_mcp_product_story_heading',
                'label'         => 'Heading',
                'name'          => 'heading',
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
                'key'   => 'field_mcp_product_story_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),

            /*
            |--------------------------------------------------------------------------
            | Note Text
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_mcp_product_story_note',
                'label' => 'Note Text',
                'name'  => 'note',
                'type'  => 'textarea',
                'rows'  => 3,
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
                    'value'    => 'acf/mcp-product-story',
                ),
            ),
        ),

    ));
}