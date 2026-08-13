<?php

if (!defined('ABSPATH')) {
    exit;
}


add_action('acf/init', 'wunderbuild_register_wb_timing_section_fields');


function wunderbuild_register_wb_timing_section_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }


    acf_add_local_field_group(array(

        'key'   => 'group_wb_timing_section',
        'title' => 'WB Timing Section',


        'fields' => array(


            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_wb_timing_section_heading',
                'label'         => 'Heading',
                'name'          => 'heading',
                'type'  => 'wysiwyg',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),


            /*
            |--------------------------------------------------------------------------
            | Section Description
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_wb_timing_section_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),


            /*
            |--------------------------------------------------------------------------
            | Card 01
            |--------------------------------------------------------------------------
            */

            array(
                'key'        => 'field_wb_timing_section_card_one',
                'label'      => 'Card 01',
                'name'       => 'card_one',
                'type'       => 'group',
                'layout'     => 'block',

                'sub_fields' => array(


                    array(
                        'key'   => 'field_wb_timing_card_one_label',
                        'label' => 'Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ),


                    array(
                        'key'   => 'field_wb_timing_card_one_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                    ),


                    array(
                        'key'   => 'field_wb_timing_card_one_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                ),
            ),


            /*
            |--------------------------------------------------------------------------
            | Card 02
            |--------------------------------------------------------------------------
            */

            array(
                'key'        => 'field_wb_timing_section_card_two',
                'label'      => 'Card 02',
                'name'       => 'card_two',
                'type'       => 'group',
                'layout'     => 'block',

                'sub_fields' => array(


                    array(
                        'key'   => 'field_wb_timing_card_two_label',
                        'label' => 'Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ),


                    array(
                        'key'   => 'field_wb_timing_card_two_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                    ),


                    array(
                        'key'   => 'field_wb_timing_card_two_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
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
                    'value'    => 'acf/wb-timing-section',
                ),
            ),
        ),

    ));
}