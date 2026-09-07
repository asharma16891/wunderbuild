<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_event_fields');

function wunderbuild_register_event_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        /*
        |--------------------------------------------------------------------------
        | FIELD GROUP
        |--------------------------------------------------------------------------
        */

        'key'   => 'group_event',
        'title' => 'Event Details',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | EVENT IMAGE
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_event_image',
                'label'         => 'Event Image',
                'name'          => 'image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),

            /*
            |--------------------------------------------------------------------------
            | RELATIONSHIP / EVENT TYPE
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_relationship',
                'label' => 'Relationship',
                'name'  => 'relationship',
                'type'  => 'text',
                'instructions' => 'Example: Wunderbuild events, Co-hosted events, Supported events',
            ),

            /*
            |--------------------------------------------------------------------------
            | FORMAT
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_format',
                'label' => 'Format',
                'name'  => 'format',
                'type'  => 'select',
                'choices' => array(
                    'online'    => 'Online',
                    'in-person' => 'In person',
                    'hybrid'    => 'Hybrid',
                ),
                'default_value' => 'online',
                'allow_null'    => 1,
                'multiple'      => 0,
                'return_format' => 'value',
            ),

            /*
            |--------------------------------------------------------------------------
            | DESCRIPTION
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 5,
            ),

            /*
            |--------------------------------------------------------------------------
            | DATE
            |--------------------------------------------------------------------------
            */

            array(
                'key'            => 'field_event_date',
                'label'          => 'Date',
                'name'           => 'date',
                'type'           => 'date_picker',
                'display_format' => 'j F Y',
                'return_format'  => 'Y-m-d',
                'first_day'      => 1,
            ),

            /*
            |--------------------------------------------------------------------------
            | START TIME
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_start_time',
                'label' => 'Start Time',
                'name'  => 'start_time',
                'type'  => 'text',
                'instructions' => 'Example: 10:00 am',
            ),

            /*
            |--------------------------------------------------------------------------
            | END TIME
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_end_time',
                'label' => 'End Time',
                'name'  => 'end_time',
                'type'  => 'text',
                'instructions' => 'Example: 11:00 am',
            ),

            /*
            |--------------------------------------------------------------------------
            | TIMEZONE
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_timezone',
                'label' => 'Timezone',
                'name'  => 'timezone',
                'type'  => 'text',
                'default_value' => 'AEST',
            ),

            /*
            |--------------------------------------------------------------------------
            | LOCATION
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_location',
                'label' => 'Location',
                'name'  => 'location',
                'type'  => 'text',
                'instructions' => 'Example: Online, Melbourne + Online, Sydney, NSW',
            ),

            /*
            |--------------------------------------------------------------------------
            | PRICE
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_price',
                'label' => 'Price',
                'name'  => 'price',
                'type'  => 'text',
                'instructions' => 'Example: Free, $49, $25',
            ),

            /*
            |--------------------------------------------------------------------------
            | REGISTRATION STATUS
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_registration_status',
                'label' => 'Registration Status',
                'name'  => 'registration_status',
                'type'  => 'text',
                'default_value' => 'Registration open',
                'instructions' => 'Example: Registration open, Selling fast, Waitlist, Sold out',
            ),

            /*
            |--------------------------------------------------------------------------
            | BUTTON TEXT
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_button_text',
                'label' => 'Button Text',
                'name'  => 'button_text',
                'type'  => 'text',
                'default_value' => 'Register',
            ),

            /*
            |--------------------------------------------------------------------------
            | BUTTON URL
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_button_url',
                'label' => 'Button URL',
                'name'  => 'button_url',
                'type'  => 'url',
            ),

            /*
            |--------------------------------------------------------------------------
            | FEATURED EVENT
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_featured',
                'label' => 'Featured Event',
                'name'  => 'featured',
                'type'  => 'true_false',
                'ui'    => 1,
                'default_value' => 0,
            ),

            /*
            |--------------------------------------------------------------------------
            | FEATURED ORDER
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_featured_order',
                'label' => 'Featured Order',
                'name'  => 'featured_order',
                'type'  => 'number',
                'min'   => 0,
                'step'  => 1,
                'instructions' => 'Optional. Lower numbers appear first.',
            ),

            /*
            |--------------------------------------------------------------------------
            | RECORDING
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_recording',
                'label' => 'Recording URL',
                'name'  => 'recording',
                'type'  => 'url',
            ),

            /*
            |--------------------------------------------------------------------------
            | RECAP
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_event_recap',
                'label' => 'Recap URL',
                'name'  => 'recap',
                'type'  => 'url',
            ),

            /*
            |--------------------------------------------------------------------------
            | PARTNER LOGOS
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_event_partner_logos',
                'label'        => 'Partner Logos',
                'name'         => 'partner_logos',
                'type'         => 'gallery',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library'     => 'all',
            ),

        ),

        /*
        |--------------------------------------------------------------------------
        | LOCATION
        |--------------------------------------------------------------------------
        */

        'location' => array(

            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'event',
                ),
            ),

        ),

        /*
        |--------------------------------------------------------------------------
        | OPTIONS
        |--------------------------------------------------------------------------
        */

        'position'            => 'normal',
        'style'               => 'default',
        'label_placement'     => 'top',
        'instruction_placement' => 'label',
        'active'              => true,
    ));
}