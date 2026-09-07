<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_contact_details_fields');

function wunderbuild_register_contact_details_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_contact_details',
        'title' => 'Contact Details',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_contact_details_heading',
                'label' => 'Section Heading',
                'name'  => 'heading',
                'type'  => 'text',
            ),


            /*
            |--------------------------------------------------------------------------
            | Contact Cards
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_contact_details_items',
                'label'        => 'Contact Details',
                'name'         => 'items',
                'type'         => 'repeater',

                'layout'       => 'block',

                'button_label' => 'Add Contact Detail',

                'sub_fields' => array(

                    /*
                    |--------------------------------------------------------------------------
                    | Icon
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'           => 'field_contact_detail_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Label
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_contact_detail_label',
                        'label'       => 'Label',
                        'name'        => 'label',
                        'type'        => 'text',
                        'placeholder' => 'Example: PHONE',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Main Value
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'         => 'field_contact_detail_value',
                        'label'       => 'Main Value',
                        'name'        => 'value',
                        'type'        => 'text',
                        'placeholder' => 'Example: 1300 16 16 26',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Main Value Link
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'           => 'field_contact_detail_link',
                        'label'         => 'Main Value Link',
                        'name'          => 'link',
                        'type'          => 'link',
                        'return_format' => 'array',
                        'instructions'  => 'Optional. Add a link to make the Main Value clickable.',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Description
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'        => 'field_contact_detail_description',
                        'label'      => 'Description',
                        'name'       => 'description',
                        'type'       => 'textarea',
                        'rows'       => 3,
                        'new_lines'  => 'br',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | Highlight Card
                    |--------------------------------------------------------------------------
                    */



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
                    'value'    => 'acf/contact-details',
                ),
            ),
        ),

    ));
}