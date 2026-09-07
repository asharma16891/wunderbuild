<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action(
    'acf/init',
    'wunderbuild_register_partner_proof_section_fields'
);

function wunderbuild_register_partner_proof_section_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_partner_proof_section',
        'title' => 'Partner Proof Section',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | HEADING
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_partner_proof_heading',
                'label'        => 'Heading',
                'name'         => 'partner_proof_heading',
                'type'         => 'textarea',
                'rows'         => 2,
            ),


            /*
            |--------------------------------------------------------------------------
            | DESCRIPTION
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_partner_proof_description',
                'label'        => 'Description',
                'name'         => 'partner_proof_description',
                'type'         => 'textarea',
                'rows'         => 3,
            ),


            /*
            |--------------------------------------------------------------------------
            | TESTIMONIAL CARDS
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_partner_proof_items',
                'label'        => 'Partner Testimonials',
                'name'         => 'partner_proof_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Testimonial',

                'sub_fields' => array(

                    /*
                    | PARTNER TYPE
                    */

                    array(
                        'key'   => 'field_partner_proof_type',
                        'label' => 'Partner Type',
                        'name'  => 'partner_type',
                        'type'  => 'text',
                    ),


                    /*
                    | TESTIMONIAL
                    */

                    array(
                        'key'   => 'field_partner_proof_quote',
                        'label' => 'Testimonial Text',
                        'name'  => 'testimonial',
                        'type'  => 'textarea',
                        'rows'  => 5,
                    ),


                    /*
                    | PARTNER IMAGE
                    */

                    array(
                        'key'           => 'field_partner_proof_image',
                        'label'         => 'Partner Image',
                        'name'          => 'partner_image',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                    ),


                    /*
                    | PARTNER NAME
                    */

                    array(
                        'key'   => 'field_partner_proof_name',
                        'label' => 'Partner Name',
                        'name'  => 'partner_name',
                        'type'  => 'text',
                    ),


                    /*
                    | PARTNER ROLE
                    */

                    array(
                        'key'          => 'field_partner_proof_role',
                        'label'        => 'Partner Role / Company',
                        'name'         => 'partner_role',
                        'type'         => 'text',
                        'instructions' => 'Example: Founder, Partner Company',
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
                    'value'    => 'acf/partner-proof',
                ),
            ),
        ),

    ));
}