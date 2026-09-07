<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_mcp_capabilities_fields');

function wunderbuild_register_mcp_capabilities_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_mcp_capabilities',
        'title' => 'MCP Capabilities',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_mcp_capabilities_heading',
                'label'         => 'Section Heading',
                'name'          => 'heading',
                'type'         => 'wysiwyg',
                'toolbar'      => 'full',
                'media_upload' => 0,
            ),


            /*
            |--------------------------------------------------------------------------
            | Capabilities
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_mcp_capabilities_items',
                'label'        => 'Capabilities',
                'name'         => 'capabilities',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Capability',

                'sub_fields' => array(

                    /*
                    |--------------------------------------------------------------------------
                    | Tab Icon
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'           => 'field_mcp_capability_icon',
                        'label'         => 'Tab Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Tab Title
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_mcp_capability_tab_title',
                        'label'       => 'Tab Title',
                        'name'        => 'tab_title',
                        'type'        => 'text',
                        'placeholder' => 'Example: Plans and documents',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Panel Heading
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_mcp_capability_panel_heading',
                        'label'       => 'Panel Heading',
                        'name'        => 'panel_heading',
                        'type'        => 'text',
                        'placeholder' => 'Example: Plans and documents',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Description
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'        => 'field_mcp_capability_description',
                        'label'      => 'Description',
                        'name'       => 'description',
                        'type'       => 'textarea',
                        'rows'      => 4,
                        'new_lines' => 'br',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Example Prompts
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'          => 'field_mcp_capability_prompts',
                        'label'        => 'Example Prompts',
                        'name'         => 'prompts',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Prompt',

                        'sub_fields' => array(

                            array(
                                'key'         => 'field_mcp_capability_prompt_text',
                                'label'       => 'Prompt',
                                'name'        => 'prompt',
                                'type'        => 'text',
                                'placeholder' => 'Enter example prompt',
                            ),

                        ),
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
                    'value'    => 'acf/mcp-capabilities',
                ),
            ),
        ),

    ));
}