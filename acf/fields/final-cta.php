<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_final_cta_fields');

function wunderbuild_register_final_cta_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_final_cta',
        'title' => 'Final CTA',

        'fields' => array(

            array(
                'key'   => 'field_final_cta_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_final_cta_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'   => 'field_final_cta_primary_text',
                'label' => 'Primary Button Text',
                'name'  => 'primary_button_text',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_final_cta_primary_link',
                'label' => 'Primary Button Link',
                'name'  => 'primary_button_link',
                'type'  => 'link',
            ),

            array(
                'key'   => 'field_final_cta_secondary_text',
                'label' => 'Secondary Button Text',
                'name'  => 'secondary_button_text',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_final_cta_secondary_link',
                'label' => 'Secondary Button Link',
                'name'  => 'secondary_button_link',
                'type'  => 'link',
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/final-cta',
                ),
            ),
        ),

    ));
}