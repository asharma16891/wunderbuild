<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_faq_fields');

function wunderbuild_register_faq_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_faqs',
        'title' => 'FAQs',

        'fields' => array(

            array(
                'key'   => 'field_faq_badge',
                'label' => 'Badge',
                'name'  => 'badge',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_faq_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_faq_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'          => 'field_faq_items',
                'label'        => 'FAQs',
                'name'         => 'faqs',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add FAQ',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_faq_question',
                        'label' => 'Question',
                        'name'  => 'question',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_faq_answer',
                        'label' => 'Answer',
                        'name'  => 'answer',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ),

                    array(
                        'key'   => 'field_faq_open',
                        'label' => 'Open by Default',
                        'name'  => 'default_open',
                        'type'  => 'true_false',
                        'ui'    => 1,
                    ),

                ),

            ),

            array(
                'key'   => 'field_faq_bottom_text',
                'label' => 'Bottom Text',
                'name'  => 'bottom_text',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_faq_button_text',
                'label' => 'Button Text',
                'name'  => 'button_text',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_faq_button_link',
                'label' => 'Button Link',
                'name'  => 'button_link',
                'type'  => 'link',
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/faqs',
                ),
            ),
        ),

    ));
}