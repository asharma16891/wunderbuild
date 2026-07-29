<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_footer_fields');

function wunderbuild_register_footer_fields()
{

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_footer_settings',
        'title' => 'Footer Settings',

        'fields' => array(

            // =============================
            // Footer Heading
            // =============================

            array(
                'key'   => 'field_footer_heading',
                'label' => 'Footer Heading',
                'name'  => 'footer_heading',
                'type'  => 'text',
            ),

            // =============================
            // Company Info
            // =============================

            array(
                'key'   => 'field_footer_logo',
                'label' => 'Footer Logo',
                'name'  => 'footer_logo',
                'type'  => 'image',
                'return_format' => 'array',
            ),

            array(
                'key'   => 'field_footer_company_title',
                'label' => 'Company Heading',
                'name'  => 'footer_company_title',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_footer_company_description',
                'label' => 'Company Description',
                'name'  => 'footer_company_description',
                'type'  => 'textarea',
                'rows'  => 4,
            ),

            // =============================
            // App Store Buttons
            // =============================

            array(
                'key'   => 'field_footer_google_play_image',
                'label' => 'Google Play Button Image',
                'name'  => 'footer_google_play_image',
                'type'  => 'image',
                'return_format' => 'array',
            ),

            array(
                'key'   => 'field_footer_google_play_link',
                'label' => 'Google Play Button Link',
                'name'  => 'footer_google_play_link',
                'type'  => 'url',
            ),

            array(
                'key'   => 'field_footer_app_store_image',
                'label' => 'App Store Button Image',
                'name'  => 'footer_app_store_image',
                'type'  => 'image',
                'return_format' => 'array',
            ),

            array(
                'key'   => 'field_footer_app_store_link',
                'label' => 'App Store Button Link',
                'name'  => 'footer_app_store_link',
                'type'  => 'url',
            ),

            // =============================
            // Newsletter
            // =============================

            array(
                'key'   => 'field_footer_newsletter_placeholder',
                'label' => 'Newsletter Placeholder',
                'name'  => 'footer_newsletter_placeholder',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_footer_newsletter_button',
                'label' => 'Newsletter Button Text',
                'name'  => 'footer_newsletter_button',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_footer_newsletter_note',
                'label' => 'Newsletter Note',
                'name'  => 'footer_newsletter_note',
                'type'  => 'textarea',
                'rows'  => 2,
            ),


            // =============================
            // Footer Menus
            // =============================

            array(
                'key'   => 'field_footer_menu_1_title',
                'label' => 'Footer Menu 1 Title',
                'name'  => 'footer_menu_1_title',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_footer_menu_2_title',
                'label' => 'Footer Menu 2 Title',
                'name'  => 'footer_menu_2_title',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_footer_menu_3_title',
                'label' => 'Footer Menu 3 Title',
                'name'  => 'footer_menu_3_title',
                'type'  => 'text',
            ),

            // =============================
            // Contact
            // =============================

            array(
                'key'   => 'field_footer_phone',
                'label' => 'Phone Number',
                'name'  => 'footer_phone',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_footer_email',
                'label' => 'Email',
                'name'  => 'footer_email',
                'type'  => 'email',
            ),

            array(
                'key'   => 'field_footer_address',
                'label' => 'Address',
                'name'  => 'footer_address',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            // =============================
            // Bottom Bar
            // =============================

            array(
                'key'   => 'field_footer_copyright',
                'label' => 'Copyright',
                'name'  => 'footer_copyright',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_footer_privacy',
                'label' => 'Privacy Policy',
                'name'  => 'footer_privacy',
                'type'  => 'link',
            ),

            array(
                'key'   => 'field_footer_terms',
                'label' => 'Terms & Conditions',
                'name'  => 'footer_terms',
                'type'  => 'link',
            ),

            // =============================
            // Social Links
            // =============================

            array(
                'key'   => 'field_footer_socials',
                'label' => 'Social Links',
                'name'  => 'footer_socials',
                'type'  => 'repeater',

                'button_label' => 'Add Social',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_footer_social_icon',
                        'label' => 'Icon',
                        'name'  => 'icon',
                        'type'  => 'image',
                        'return_format' => 'array',
                    ),

                    array(
                        'key'   => 'field_footer_social_link',
                        'label' => 'Link',
                        'name'  => 'link',
                        'type'  => 'url',
                    ),

                ),
            ),

        ),

        'location' => array(

            array(

                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'acf-options-footer',
                ),

            ),

        ),

    ));
}
