<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_process_fields');

function wunderbuild_register_process_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_process_section',
        'title' => 'Process Timeline',

        'fields' => array(

          

            array(
                'key'   => 'field_process_heading',
                'label' => 'Heading',
                'name'  => 'process_heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_process_description',
                'label' => 'Description',
                'name'  => 'process_description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'          => 'field_process_steps',
                'label'        => 'Timeline Steps',
                'name'         => 'process_steps',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Step',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_process_step_title',
                        'label' => 'Step Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_process_step_description',
                        'label' => 'Step Description',
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
                    'value'    => 'acf/process',
                ),

            ),

        ),

    ));
}