<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_product_showcase_fields');

function wunderbuild_register_product_showcase_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_product_showcase',
        'title' => 'Product Showcase',

        'fields' => array(

            array(
                'key'   => 'field_ps_badge',
                'label' => 'Badge',
                'name'  => 'badge',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_ps_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_ps_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'          => 'field_ps_tabs',
                'label'        => 'Tabs',
                'name'         => 'tabs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Tab',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_ps_tab_title',
                        'label' => 'Tab Title',
                        'name'  => 'tab_title',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_ps_content_heading',
                        'label' => 'Content Heading',
                        'name'  => 'content_heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_ps_content_description',
                        'label' => 'Content Description',
                        'name'  => 'content_description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                    array(
                        'key'   => 'field_ps_button_text',
                        'label' => 'Button Text',
                        'name'  => 'button_text',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_ps_button_link',
                        'label' => 'Button Link',
                        'name'  => 'button_link',
                        'type'  => 'link',
                    ),

                    array(
                        'key'           => 'field_ps_image',
                        'label'         => 'Screenshot',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),

                ),
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/product-showcase',
                ),
            ),
        ),

    ));
}