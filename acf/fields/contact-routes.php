
<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_contact_routes_fields');

function wunderbuild_register_contact_routes_fields()
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

        'key'   => 'group_contact_routes',
        'title' => 'Contact Routes',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | SECTION HEADING
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_contact_routes_heading',
                'label'        => 'Heading',
                'name'         => 'heading',
                'type'         => 'wysiwyg',
                'toolbar'      => 'full',
                'media_upload' => 0,
                'instructions' => 'Enter the main heading for the contact routes section.',
            ),

            /*
            |--------------------------------------------------------------------------
            | SECTION DESCRIPTION
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_contact_routes_description',
                'label'        => 'Description',
                'name'         => 'description',
                'type'         => 'textarea',
                'rows'         => 3,
                'instructions' => 'Enter the description shown below the heading.',
            ),

            /*
            |--------------------------------------------------------------------------
            | CONTACT ROUTES
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_contact_routes_items',
                'label'        => 'Contact Routes',
                'name'         => 'routes',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Route',
                'min'          => 1,

                'sub_fields' => array(

                    /*
                    |--------------------------------------------------------------------------
                    | ICON
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'           => 'field_contact_route_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                        'instructions'  => 'Select the icon for this contact route.',
                    ),

                    /*
                    |--------------------------------------------------------------------------
                    | TITLE
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'          => 'field_contact_route_title',
                        'label'        => 'Title',
                        'name'         => 'title',
                        'type'         => 'text',
                        'instructions' => 'Enter the route title.',
                    ),

                    /*
                    |--------------------------------------------------------------------------
                    | DESCRIPTION
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'          => 'field_contact_route_description',
                        'label'        => 'Description',
                        'name'         => 'description',
                        'type'         => 'textarea',
                        'rows'         => 3,
                        'instructions' => 'Enter the description for this route.',
                    ),

                    /*
                    |--------------------------------------------------------------------------
                    | BUTTON TEXT
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'          => 'field_contact_route_button_text',
                        'label'        => 'Button Text',
                        'name'         => 'button_text',
                        'type'         => 'text',
                        'instructions' => 'Enter the text displayed on the button.',
                    ),

                    /*
                    |--------------------------------------------------------------------------
                    | BUTTON LINK
                    |--------------------------------------------------------------------------
                    */

                    array(
                        'key'           => 'field_contact_route_button_link',
                        'label'         => 'Button Link',
                        'name'          => 'button_link',
                        'type'          => 'link',
                        'return_format' => 'array',
                        'instructions'  => 'Set the button link. For this form, use #enquiry-form.',
                    ),

                    /*
                    |--------------------------------------------------------------------------
                    | ENQUIRY TYPE
                    |--------------------------------------------------------------------------
                    |
                    | This value must match the option in the Contact Form 7
                    | enquiry-type dropdown.
                    |
                    */

                    array(
                        'key'           => 'field_contact_route_enquiry_type',
                        'label'         => 'Enquiry Type',
                        'name'          => 'enquiry_type',
                        'type'          => 'select',
                        'choices'       => array(
                            'Sales or product demo'         => 'Sales or product demo',
                            'Product support'               => 'Product support',
                            'Onboarding or data migration' => 'Onboarding or data migration',
                            'Training'                      => 'Training',
                            'Affiliate or partner enquiry' => 'Affiliate or partner enquiry',
                            'Events or collaboration'       => 'Events or collaboration',
                            'Media enquiry'                 => 'Media enquiry',
                            'General enquiry'               => 'General enquiry',
                        ),
                        'default_value' => 'General enquiry',
                        'allow_null'    => 1,
                        'multiple'      => 0,
                        'ui'            => 1,
                        'return_format' => 'value',
                        'instructions'  => 'Select which Contact Form 7 enquiry type this route should automatically select.',
                    ),

                ),
            ),

        ),

        /*
        |--------------------------------------------------------------------------
        | BLOCK LOCATION
        |--------------------------------------------------------------------------
        */

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/contact-routes',
                ),
            ),
        ),

    ));
}

