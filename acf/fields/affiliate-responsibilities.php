<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action(
    'acf/init',
    'wunderbuild_register_affiliate_responsibilities_fields'
);

function wunderbuild_register_affiliate_responsibilities_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_affiliate_responsibilities',
        'title' => 'Affiliate Responsibilities',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | HEADING
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_responsibilities_heading',
                'label'        => 'Heading',
                'name'         => 'affiliate_responsibilities_heading',
                'type'         => 'textarea',
                'rows'         => 2,
            ),


            /*
            |--------------------------------------------------------------------------
            | TERMS LINK
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_responsibilities_terms_link',
                'label'        => 'Terms Link',
                'name'         => 'affiliate_responsibilities_terms_link',
                'type'         => 'link',
                'instructions' => 'Link displayed below the heading.',
                'return_format' => 'array',
            ),


            /*
            |--------------------------------------------------------------------------
            | RESPONSIBILITIES
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_responsibilities_items',
                'label'        => 'Responsibilities',
                'name'         => 'affiliate_responsibilities_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Responsibility',

                'sub_fields' => array(

                    array(
                        'key'          => 'field_affiliate_responsibility_title',
                        'label'        => 'Title',
                        'name'         => 'title',
                        'type'         => 'text',
                        'instructions' => 'Responsibility title.',
                    ),

                    array(
                        'key'          => 'field_affiliate_responsibility_description',
                        'label'        => 'Description',
                        'name'         => 'description',
                        'type'         => 'textarea',
                        'instructions' => 'Responsibility description.',
                        'rows'         => 3,
                    ),

                ),
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
                    'value'    => 'acf/affiliate-responsibilities',
                ),
            ),
        ),

    ));
}