<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_migration_limit_fields');

function wunderbuild_register_migration_limit_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_wb_migration_limit',
        'title' => 'Migration Limit',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_migration_limit_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),



            /*
            |--------------------------------------------------------------------------
            | Migration Cards
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_migration_limit_cards',
                'label'        => 'Migration Cards',
                'name'         => 'cards',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Card',

                'sub_fields' => array(

                    /*
                    | Icon
                    */

                    array(
                        'key'           => 'field_migration_limit_card_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),


                    /*
                    | Title
                    */

                    array(
                        'key'   => 'field_migration_limit_card_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),


                    /*
                    | Description
                    */

                    array(
                        'key'   => 'field_migration_limit_card_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),


                    /*
                    | Card Style
                    */

                    array(
                        'key'           => 'field_migration_limit_card_style',
                        'label'         => 'Card Style',
                        'name'          => 'style',
                        'type'          => 'select',
                        'choices'       => array(
                            'orange' => 'Orange',
                            'purple' => 'Purple',
                            'pink'   => 'Pink',
                            'green'  => 'Green',
                        ),
                        'default_value' => 'orange',
                        'return_format' => 'value',
                    ),

                ),
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/migration-limit',
                ),
            ),
        ),

    ));
}