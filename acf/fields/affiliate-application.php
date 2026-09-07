<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action(
    'acf/init',
    'wunderbuild_register_affiliate_application_fields'
);

function wunderbuild_register_affiliate_application_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_affiliate_application',
        'title' => 'Affiliate Application',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | HEADING
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_application_heading',
                'label'        => 'Heading',
                'name'         => 'affiliate_application_heading',
                'type'         => 'textarea',
                'rows'         => 2,
            ),


            /*
            |--------------------------------------------------------------------------
            | DESCRIPTION
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_application_description',
                'label'        => 'Description',
                'name'         => 'affiliate_application_description',
                'type'         => 'textarea',
                'instructions' => 'Enter the description below the heading.',
                'rows'         => 3,
            ),


            /*
            |--------------------------------------------------------------------------
            | SHORTCODE
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_application_shortcode',
                'label'        => 'Form Shortcode',
                'name'         => 'affiliate_application_shortcode',
                'type'         => 'textarea',
                'instructions' => 'Paste the form shortcode here.',
                'rows'         => 2,
            ),

        ),

        /*
        |--------------------------------------------------------------------------
        | BLOCK LOCATION
        |--------------------------------------------------------------------------
        */

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/affiliate-application',
                ),
            ),
        ),

    ));
}