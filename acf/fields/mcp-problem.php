<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_mcp_problem_fields');

function wunderbuild_register_mcp_problem_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_mcp_problem',
        'title' => 'MCP Problem',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_mcp_problem_heading',
                'label'        => 'Heading',
                'name'         => 'heading',
                'type'         => 'wysiwyg',
                'toolbar'      => 'basic',
                'media_upload' => 0,
            ),


            /*
            |--------------------------------------------------------------------------
            | Problem Cards
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_mcp_problem_cards',
                'label'        => 'Problem Cards',
                'name'         => 'cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Card',

                'sub_fields' => array(

                    /*
                    | Icon
                    */

                    array(
                        'key'           => 'field_mcp_problem_card_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),


                    /*
                    | Card Heading
                    */

                    array(
                        'key'   => 'field_mcp_problem_card_heading',
                        'label' => 'Heading',
                        'name'  => 'card_heading',
                        'type'  => 'text',
                    ),


                    /*
                    | Description
                    */

                    array(
                        'key'   => 'field_mcp_problem_card_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 4,
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
                    'value'    => 'acf/mcp-problem',
                ),
            ),
        ),

    ));
}