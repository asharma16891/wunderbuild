<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_blog_newsletter_fields');

function wunderbuild_register_blog_newsletter_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_wb_blog_newsletter',
        'title' => 'Blog Newsletter',

        'fields' => array(

            array(
                'key'   => 'field_wb_blog_newsletter_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_wb_blog_newsletter_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'   => 'field_wb_blog_newsletter_supporting_text',
                'label' => 'Supporting Text',
                'name'  => 'supporting_text',
                'type'  => 'text',
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/wb-newsletter-blog',
                ),
            ),
        ),

    ));
}