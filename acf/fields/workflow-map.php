<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_workflow_map_fields');

function wunderbuild_register_workflow_map_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_workflow_map',
        'title' => 'Workflow Map',

        'fields' => array(

            array(
                'key'           => 'field_workflow_heading',
                'label'         => 'Heading',
                'name'          => 'heading',
                'type'          => 'wysiwyg',
                'tabs'          => 'visual,text',
                'toolbar'       => 'basic',
                'media_upload'  => 0,
                'delay'         => 0,
            ),

            array(
                'key' => 'field_workflow_description',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'rows' => 3,
            ),

            array(
                'key'           => 'field_workflow_image',
                'label'         => 'Workflow Image',
                'name'          => 'workflow_image',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'large',
            ),

            array(
                'key'   => 'field_workflow_hotspots',
                'label' => 'Hotspots',
                'name'  => 'hotspots',
                'type'  => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Hotspot',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_hotspot_label',
                        'label' => 'Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_hotspot_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_hotspot_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),

                    array(
                        'key'   => 'field_hotspot_dot_top',
                        'label' => 'Dot Top',
                        'name'  => 'dot_top',
                        'type'  => 'text',
                        'instructions' => 'Example: 13.2%',
                    ),

                    array(
                        'key'   => 'field_hotspot_dot_left',
                        'label' => 'Dot Left',
                        'name'  => 'dot_left',
                        'type'  => 'text',
                        'instructions' => 'Example: 17%',
                    ),

                    array(
                        'key'   => 'field_hotspot_card_top',
                        'label' => 'Card Top',
                        'name'  => 'card_top',
                        'type'  => 'text',
                        'instructions' => 'Example: 16%',
                    ),

                    array(
                        'key'   => 'field_hotspot_card_left',
                        'label' => 'Card Left',
                        'name'  => 'card_left',
                        'type'  => 'text',
                        'instructions' => 'Example: 8%',
                    ),

                ),
            ),

            array(
                'key'   => 'field_workflow_primary_button',
                'label' => 'Primary Button',
                'name'  => 'primary_button',
                'type'  => 'link',
            ),

            array(
                'key'   => 'field_workflow_secondary_button',
                'label' => 'Secondary Button',
                'name'  => 'secondary_button',
                'type'  => 'link',
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/workflow-map',
                ),
            ),
        ),

    ));
}
