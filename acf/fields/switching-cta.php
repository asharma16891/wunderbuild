<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_switching_cta_fields');

function wunderbuild_register_switching_cta_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_switching_cta',
        'title' => 'Switching CTA',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Eyebrow
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_switching_cta_eyebrow',
                'label' => 'Eyebrow',
                'name'  => 'eyebrow',
                'type'  => 'text',
                'instructions' => 'Example: Switching to Wunderbuild',
            ),

            /*
            |--------------------------------------------------------------------------
            | Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_switching_cta_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'          => 'wysiwyg',
                'tabs'          => 'visual,text',
                'toolbar'       => 'basic',
                'media_upload'  => 0,
                'delay'         => 0,
            ),

            /*
            |--------------------------------------------------------------------------
            | Description
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_switching_cta_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            /*
            |--------------------------------------------------------------------------
            | Button
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_switching_cta_button',
                'label' => 'Button',
                'name'  => 'button',
                'type'  => 'link',
            ),

        ),

       

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/switching-cta',
                ),
            ),
        ),

    ));
}