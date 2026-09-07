<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_contact_enquiry_fields');

function wunderbuild_register_contact_enquiry_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_contact_enquiry',
        'title' => 'Contact Enquiry',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_contact_enquiry_heading',
                'label'         => 'Heading',
                'name'          => 'heading',
                'type'          => 'text',
                'required'      => 1,
                
            ),

            /*
            |--------------------------------------------------------------------------
            | Description
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_contact_enquiry_description',
                'label'         => 'Description',
                'name'          => 'description',
                'type'          => 'textarea',
                'rows'          => 3,
                'new_lines'     => 'br',
                
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
                    'value'    => 'acf/contact-enquiry',
                ),
            ),
        ),

    ));
}