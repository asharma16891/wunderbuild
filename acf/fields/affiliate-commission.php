<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_affiliate_commission_fields');

function wunderbuild_register_affiliate_commission_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_affiliate_commission',
        'title' => 'Affiliate Commission',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Left Commission Card
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_affiliate_commission_label',
                'label' => 'Commission Label',
                'name'  => 'commission_label',
                'type'  => 'text',
                
            ),

            array(
                'key'   => 'field_affiliate_commission_percentage',
                'label' => 'Commission Percentage',
                'name'  => 'commission_percentage',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_affiliate_commission_fee_text',
                'label' => 'Commission Supporting Text',
                'name'  => 'commission_fee_text',
                'type'  => 'text',
                
            ),


            /*
            |--------------------------------------------------------------------------
            | Right Content
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_affiliate_commission_heading',
                'label' => 'Heading',
                'name'  => 'commission_heading',
                'type'  => 'text',
                
            ),

            array(
                'key'   => 'field_affiliate_commission_description',
                'label' => 'Description',
                'name'  => 'commission_description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),

            array(
                'key'   => 'field_affiliate_commission_supporting_text',
                'label' => 'Supporting Text',
                'name'  => 'commission_supporting_text',
                'type'  => 'textarea',
                'rows'  => 4,
            ),


            /*
            |--------------------------------------------------------------------------
            | Editable Affiliate Details
            |--------------------------------------------------------------------------
            */

    

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/affiliate-commission',
                ),
            ),
        ),

    ));
}