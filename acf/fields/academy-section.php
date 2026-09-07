<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_academy_section_fields');

function wunderbuild_register_academy_section_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_academy_section',
        'title' => 'Academy Section',

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

           

            array(
                'key'   => 'field_academy_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
                'instructions' => 'You can use HTML such as <span>your own pace.</span>',
            ),

           

            array(
                'key'   => 'field_academy_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            

            array(
                'key'   => 'field_academy_button',
                'label' => 'Button',
                'name'  => 'button',
                'type'  => 'link',
            ),

           

            array(
                'key'           => 'field_academy_image',
                'label'         => 'Academy Image',
                'name'          => 'image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),

            

            array(
                'key'          => 'field_academy_cards',
                'label'        => 'Academy Cards',
                'name'         => 'academy_cards',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Academy Card',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_academy_card_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                        'instructions' => 'Example: 01, 02, 03',
                    ),

                    array(
                        'key'   => 'field_academy_card_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_academy_card_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                ),
            ),

        ),

       

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/academy-section',
                ),
            ),
        ),

    ));
}