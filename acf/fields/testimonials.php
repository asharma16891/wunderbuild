<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_testimonials_fields');

function wunderbuild_register_testimonials_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_testimonials',
        'title' => 'Testimonials',

        'fields' => array(

            array(
                'key'   => 'field_testimonials_badge',
                'label' => 'Badge',
                'name'  => 'badge',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_testimonials_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_testimonials_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'          => 'field_testimonials_items',
                'label'        => 'Testimonials',
                'name'         => 'testimonials',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Testimonial',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_testimonial_rating',
                        'label' => 'Rating',
                        'name'  => 'rating',
                        'type'  => 'number',
                        'min'   => 1,
                        'max'   => 5,
                        'default_value' => 5,
                    ),

                    array(
                        'key'   => 'field_testimonial_review',
                        'label' => 'Review',
                        'name'  => 'review',
                        'type'  => 'textarea',
                        'rows'  => 5,
                    ),

                    array(
                        'key'   => 'field_testimonial_name',
                        'label' => 'Name',
                        'name'  => 'name',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_testimonial_company',
                        'label' => 'Company',
                        'name'  => 'company',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_testimonial_location',
                        'label' => 'Location',
                        'name'  => 'location',
                        'type'  => 'text',
                    ),

                    array(
                        'key'           => 'field_testimonial_badge',
                        'label'         => 'Review Badge',
                        'name'          => 'review_badge',
                        'type'          => 'text',
                        'default_value' => '★ Verified Google review',
                    ),

                    array(
                        'key'           => 'field_testimonial_avatar',
                        'label'         => 'Avatar',
                        'name'          => 'avatar',
                        'type'          => 'image',
                        'return_format' => 'array',
                    ),

                ),

            ),

            array(
                'key'   => 'field_reviews_button_text',
                'label' => 'Button Text',
                'name'  => 'button_text',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_reviews_button_link',
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
                    'value'    => 'acf/testimonials',
                ),
            ),
        ),

    ));
}
