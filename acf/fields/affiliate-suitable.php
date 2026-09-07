<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_affiliate_suitable_fields');

function wunderbuild_register_affiliate_suitable_fields()
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

        'key'   => 'group_affiliate_suitable',
        'title' => 'Affiliate Suitable',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | HEADING
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_affiliate_suitable_heading',
                'label'         => 'Heading',
                'name'          => 'affiliate_suitable_heading',
                'type'          => 'wysiwyg',
               
                'toolbar'       => 'full',
                'media_upload'  => 0,
            ),


            /*
            |--------------------------------------------------------------------------
            | SUPPORTING TEXT
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_suitable_supporting_text',
                'label'        => 'Supporting Text',
                'name'         => 'affiliate_suitable_supporting_text',
                'type'         => 'textarea',
                'instructions' => 'Text displayed below the heading.',
                'rows'         => 3,
            ),


            /*
            |--------------------------------------------------------------------------
            | SUITABLE ITEMS
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_affiliate_suitable_items',
                'label'        => 'Suitable For',
                'name'         => 'affiliate_suitable_items',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Item',

                'sub_fields' => array(

                    array(
                        'key'          => 'field_affiliate_suitable_item_text',
                        'label'        => 'Item Text',
                        'name'         => 'text',
                        'type'         => 'text',
                        'instructions' => 'Enter the suitable audience or profession.',
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
                    'value'    => 'acf/affiliate-suitable',
                ),
            ),
        ),

    ));
}