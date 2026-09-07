<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_affiliate_receive_fields');

function wunderbuild_register_affiliate_receive_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        /*
        |--------------------------------------------------------------------------
        | FIELD GROUP
        |--------------------------------------------------------------------------
        */

        'key'   => 'group_affiliate_receive',
        'title' => 'Affiliate Receive',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | SECTION HEADING
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_receive_heading',
                'label'        => 'Heading',
                'name'         => 'affiliate_receive_heading',
                'type'         => 'textarea',
                'instructions' => 'Main heading for this section.',
                'rows'         => 2,
            ),


            /*
            |--------------------------------------------------------------------------
            | RECEIVE ITEMS
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_receive_items',
                'label'        => 'What You Receive',
                'name'         => 'affiliate_receive_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Item',

                'sub_fields' => array(

                    /*
                    |--------------------------------------------------------------------------
                    | ICON
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'           => 'field_affiliate_receive_item_image',
                        'label'         => 'Icon Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | TITLE
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'          => 'field_affiliate_receive_item_title',
                        'label'        => 'Title',
                        'name'         => 'title',
                        'type'         => 'text',
                        'instructions' => 'Card title.',
                    ),


                    /*
                    |--------------------------------------------------------------------------
                    | DESCRIPTION
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'          => 'field_affiliate_receive_item_description',
                        'label'        => 'Description',
                        'name'         => 'description',
                        'type'         => 'textarea',
                        'instructions' => 'Card description.',
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
                    'value'    => 'acf/affiliate-receive',
                ),
            ),
        ),

    ));
}
