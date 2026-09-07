<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_about_address_fields');

function wunderbuild_register_about_address_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_about_address',
        'title' => 'About Address',

        'fields' => array(

            array(
                'key'   => 'field_about_address_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_about_address_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'   => 'field_about_address_address',
                'label' => 'Address',
                'name'  => 'address',
                'type'  => 'textarea',
                'rows'  => 4,
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/about-address',
                ),
            ),
        ),

    ));
}