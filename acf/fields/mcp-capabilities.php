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
                'type'          => 'wysiwyg',
                'toolbar'       => 'basic',
                'media_upload'  => 0,
                'tabs'          => 'visual',
            ),


            /*
            |--------------------------------------------------------------------------
            | Capability 01
            |--------------------------------------------------------------------------
            */

            array(
                'key'        => 'field_mcp_capability_one',
                'label'      => 'Capability 01',
                'name'       => 'capability_one',
                'type'       => 'group',
                'layout'     => 'block',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_mcp_capability_one_tab_title',
                        'label' => 'Tab Title',
                        'name'  => 'tab_title',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_one_heading',
                        'label' => 'Panel Heading',
                        'name'  => 'panel_heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_one_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                    array(
                        'key'   => 'field_mcp_capability_one_prompt_one',
                        'label' => 'Prompt 01',
                        'name'  => 'prompt_one',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_one_prompt_two',
                        'label' => 'Prompt 02',
                        'name'  => 'prompt_two',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_one_prompt_three',
                        'label' => 'Prompt 03',
                        'name'  => 'prompt_three',
                        'type'  => 'text',
                    ),

                ),
            ),


            /*
            |--------------------------------------------------------------------------
            | Capability 02
            |--------------------------------------------------------------------------
            */

            array(
                'key'        => 'field_mcp_capability_two',
                'label'      => 'Capability 02',
                'name'       => 'capability_two',
                'type'       => 'group',
                'layout'     => 'block',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_mcp_capability_two_tab_title',
                        'label' => 'Tab Title',
                        'name'  => 'tab_title',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_two_heading',
                        'label' => 'Panel Heading',
                        'name'  => 'panel_heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_two_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                    array(
                        'key'   => 'field_mcp_capability_two_prompt_one',
                        'label' => 'Prompt 01',
                        'name'  => 'prompt_one',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_two_prompt_two',
                        'label' => 'Prompt 02',
                        'name'  => 'prompt_two',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_two_prompt_three',
                        'label' => 'Prompt 03',
                        'name'  => 'prompt_three',
                        'type'  => 'text',
                    ),

                ),
            ),


            /*
            |--------------------------------------------------------------------------
            | Capability 03
            |--------------------------------------------------------------------------
            */

            array(
                'key'        => 'field_mcp_capability_three',
                'label'      => 'Capability 03',
                'name'       => 'capability_three',
                'type'       => 'group',
                'layout'     => 'block',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_mcp_capability_three_tab_title',
                        'label' => 'Tab Title',
                        'name'  => 'tab_title',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_three_heading',
                        'label' => 'Panel Heading',
                        'name'  => 'panel_heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_three_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                    array(
                        'key'   => 'field_mcp_capability_three_prompt_one',
                        'label' => 'Prompt 01',
                        'name'  => 'prompt_one',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_three_prompt_two',
                        'label' => 'Prompt 02',
                        'name'  => 'prompt_two',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_three_prompt_three',
                        'label' => 'Prompt 03',
                        'name'  => 'prompt_three',
                        'type'  => 'text',
                    ),

                ),
            ),


            /*
            |--------------------------------------------------------------------------
            | Capability 04
            |--------------------------------------------------------------------------
            */

            array(
                'key'        => 'field_mcp_capability_four',
                'label'      => 'Capability 04',
                'name'       => 'capability_four',
                'type'       => 'group',
                'layout'     => 'block',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_mcp_capability_four_tab_title',
                        'label' => 'Tab Title',
                        'name'  => 'tab_title',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_four_heading',
                        'label' => 'Panel Heading',
                        'name'  => 'panel_heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_four_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                    array(
                        'key'   => 'field_mcp_capability_four_prompt_one',
                        'label' => 'Prompt 01',
                        'name'  => 'prompt_one',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_four_prompt_two',
                        'label' => 'Prompt 02',
                        'name'  => 'prompt_two',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_mcp_capability_four_prompt_three',
                        'label' => 'Prompt 03',
                        'name'  => 'prompt_three',
                        'type'  => 'text',
                    ),

                ),
            ),

        ),

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