<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_contact_routes_fields');

function wunderbuild_register_contact_routes_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_contact_routes',
        'title' => 'Contact Routes',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_contact_routes_heading',
                'label'         => 'Heading',
                'name'          => 'heading',
                'type'          => 'wysiwyg',
                'toolbar'       => 'basic',
                'media_upload'  => 0,
            ),

            /*
            |--------------------------------------------------------------------------
            | Section Description
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_contact_routes_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            /*
            |--------------------------------------------------------------------------
            | Contact Routes
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_contact_routes_items',
                'label'        => 'Contact Routes',
                'name'         => 'routes',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Route',

                'sub_fields' => array(

                    /*
                    | Icon
                    */

                    array(
                        'key'           => 'field_contact_route_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),

                    /*
                    | Title
                    */

                    array(
                        'key'   => 'field_contact_route_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),

                    /*
                    | Description
                    */

                    array(
                        'key'   => 'field_contact_route_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                    /*
                    | Button Text
                    */

                    array(
                        'key'   => 'field_contact_route_button_text',
                        'label' => 'Button Text',
                        'name'  => 'button_text',
                        'type'  => 'text',
                    ),

                    /*
                    | Button Link
                    */

                    array(
                        'key'           => 'field_contact_route_button_link',
                        'label'         => 'Button Link',
                        'name'          => 'button_link',
                        'type'          => 'link',
                        'return_format' => 'array',
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
                    'value'    => 'acf/contact-routes',
                ),
            ),
        ),

    ));
}