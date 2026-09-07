<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_pricing_benefits_fields');

function wunderbuild_register_pricing_benefits_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_pricing_benefits',
        'title' => 'Pricing Benefits',

        'fields' => array(
			
			
			// Hide Hero Section
array(
    'key'           => 'field_hero_hide_section',
    'label'         => 'Hide Hero Section',
    'name'          => 'hero_hide_section',
    'type'          => 'true_false',
    'instructions'  => 'Enable this to hide the hero section on this page without deleting the content.',
    'default_value' => 0,
    'ui'            => 1,
    'ui_on_text'    => 'Hidden',
    'ui_off_text'   => 'Visible',
),

            /*
             * Section Heading
             */
            array(
                'key'   => 'field_pricing_benefits_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type' => 'textarea',
                'rows' => 2,
            ),

            /*
             * Section Description
             */
            array(
                'key'   => 'field_pricing_benefits_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),

           

            /*
             * Benefits Cards
             */
            array(
                'key'          => 'field_pricing_benefits_cards',
                'label'        => 'Benefits Cards',
                'name'         => 'benefits_cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Benefit',

                'sub_fields' => array(

                    array(
                        'key'           => 'field_pricing_benefit_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),

                    array(
                        'key'   => 'field_pricing_benefit_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_pricing_benefit_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ),

                ),
            ),

        ),

        /*
         * Show fields only for Pricing Benefits block
         */
        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/pricing-benefits',
                ),
            ),
        ),

    ));
}