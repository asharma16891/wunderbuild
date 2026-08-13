<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_migration_process_fields');

function wunderbuild_register_migration_process_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_wb_migration_process',
        'title' => 'WB Migration Process',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_migration_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            /*
            |--------------------------------------------------------------------------
            | Section Description
            |--------------------------------------------------------------------------
            */

            array(
                'key'   => 'field_migration_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            /*
            |--------------------------------------------------------------------------
            | Migration Steps
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_migration_steps',
                'label'        => 'Migration Steps',
                'name'         => 'migration_steps',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Step',

                'sub_fields' => array(

                    array(
                        'key'          => 'field_migration_step_number',
                        'label'        => 'Step Number',
                        'name'         => 'number',
                        'type'         => 'text',
                        'instructions' => 'Example: 01, 02, 03',
                    ),

                    array(
                        'key'   => 'field_migration_step_title',
                        'label' => 'Step Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),

                ),
            ),

            /*
            |--------------------------------------------------------------------------
            | Step Content Cards
            |--------------------------------------------------------------------------
            */

            array(
                'key'          => 'field_migration_content_cards',
                'label'        => 'Migration Content',
                'name'         => 'migration_content',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Migration Content',

                'sub_fields' => array(

                    /*
                    | Related Step
                    */

                    array(
                        'key'          => 'field_migration_content_step',
                        'label'        => 'Step Number',
                        'name'         => 'step_number',
                        'type'         => 'text',
                        'instructions' => 'Example: 01',
                    ),

                    /*
                    | Small Label
                    */

                    array(
                        'key'   => 'field_migration_content_label',
                        'label' => 'Step Label',
                        'name'  => 'step_label',
                        'type'  => 'text',
                        'instructions' => 'Example: STEP 01',
                    ),

                    /*
                    | Icon
                    */

                    array(
                        'key'           => 'field_migration_content_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                        'library'       => 'all',
                    ),

                    /*
                    | Heading
                    */

                    array(
                        'key'   => 'field_migration_content_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                    ),

                    /*
                    | Description
                    */

                    array(
                        'key'   => 'field_migration_content_description',
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
                    'value'    => 'acf/wb-migration-process',
                ),
            ),
        ),

    ));
}