<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_support_routes_fields');

function wunderbuild_register_support_routes_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_support_routes',
        'title' => 'Support Routes',

        'fields' => array(



            array(
                'key'   => 'field_support_routes_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
                'instructions' => 'Main section heading.',
            ),



            array(
                'key'   => 'field_support_routes_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'   => 'field_support_routes_button',
                'label' => 'Button',
                'name'  => 'button',
                'type'  => 'link',
            ),



            array(
                'key'          => 'field_support_routes_cards',
                'label'        => 'Support Routes',
                'name'         => 'support_routes',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Support Route',

                'sub_fields' => array(

                    /*
                    | Number
                    */

                    array(
                        'key'   => 'field_support_route_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                        'instructions' => 'Example: 01, 02, 03',
                    ),

                    /*
                    | Icon
                    */

                    array(
                        'key'           => 'field_support_route_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),

                    /*
                    | Heading
                    */

                    array(
                        'key'   => 'field_support_route_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                    ),

                    /*
                    | Description
                    */

                    array(
                        'key'   => 'field_support_route_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ),

                    /*
                    | Button
                    */

                    array(
                        'key'   => 'field_support_route_button',
                        'label' => 'Button',
                        'name'  => 'button',
                        'type'  => 'link',
                    ),

                ),
            ),

        ),



        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/support-routes',
                ),
            ),
        ),

    ));
}
