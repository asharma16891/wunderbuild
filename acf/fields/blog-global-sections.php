<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_global_blog_sections');

function wunderbuild_register_global_blog_sections()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_wb_global_blog_sections',
        'title' => 'Global Blog Sections',

        'fields' => array(



        array(
        'key'           => 'field_wb_enable_blog_newsletter',
        'label'         => 'Enable Blog Newsletter',
        'name'          => 'enable_blog_newsletter',
        'type'          => 'true_false',
        'default_value' => 1,
        'ui'            => 1,
        'ui_on_text'    => 'Show',
        'ui_off_text'   => 'Hide',
    ),

            /*
            |--------------------------------------------------------------------------
            | BLOG NEWSLETTER
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_wb_global_blog_newsletter',
                'label' => 'Blog Newsletter',
                'name'  => 'blog_newsletter',
                'type'  => 'group',

                'layout' => 'block',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_wb_global_newsletter_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),

                    array(
                        'key'   => 'field_wb_global_newsletter_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                    array(
                        'key'   => 'field_wb_global_newsletter_supporting_text',
                        'label' => 'Supporting Text',
                        'name'  => 'supporting_text',
                        'type'  => 'text',
                    ),

                ),
            ),


            /*
            |--------------------------------------------------------------------------
            | FINAL CTA
            |--------------------------------------------------------------------------
            */


            array(
        'key'           => 'field_wb_enable_final_cta',
        'label'         => 'Enable Final CTA',
        'name'          => 'enable_final_cta',
        'type'          => 'true_false',
        'default_value' => 1,
        'ui'            => 1,
        'ui_on_text'    => 'Show',
        'ui_off_text'   => 'Hide',
    ),

            array(
                'key'   => 'field_wb_global_final_cta',
                'label' => 'Final CTA',
                'name'  => 'final_cta',
                'type'  => 'group',

                'layout' => 'block',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_wb_global_final_cta_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),

                    array(
                        'key'   => 'field_wb_global_final_cta_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                    array(
                        'key'   => 'field_wb_global_final_cta_primary_text',
                        'label' => 'Primary Button Text',
                        'name'  => 'primary_button_text',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_wb_global_final_cta_primary_link',
                        'label' => 'Primary Button Link',
                        'name'  => 'primary_button_link',
                        'type'  => 'link',
                    ),

                    array(
                        'key'   => 'field_wb_global_final_cta_secondary_text',
                        'label' => 'Secondary Button Text',
                        'name'  => 'secondary_button_text',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_wb_global_final_cta_secondary_link',
                        'label' => 'Secondary Button Link',
                        'name'  => 'secondary_button_link',
                        'type'  => 'link',
                    ),

                ),
            ),

        ),

        /*
        |--------------------------------------------------------------------------
        | SHOW ON THEME SETTINGS
        |--------------------------------------------------------------------------
        */

        'location' => array(

            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'theme-settings',
                ),
            ),

        ),

    ));
}