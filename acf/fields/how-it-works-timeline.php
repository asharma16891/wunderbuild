<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_how_it_works_timeline_fields');

function wunderbuild_register_how_it_works_timeline_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_how_it_works_timeline',
        'title' => 'How It Works Timeline',

        'fields' => array(

           

            array(
                'key'   => 'field_hit_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'          => 'field_hit_items',
                'label'        => 'Timeline',
                'name'         => 'timeline',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Stage',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_hit_stage_badge',
                        'label' => 'Stage Badge',
                        'name'  => 'stage_badge',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_hit_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_hit_win',
                        'label' => 'Win',
                        'name'  => 'win',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),

                    array(
                        'key'   => 'field_hit_feature',
                        'label' => 'Feature',
                        'name'  => 'feature',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),

                    array(
                        'key'   => 'field_hit_tools',
                        'label' => 'Tools',
                        'name'  => 'tools',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_hit_button_text',
                        'label' => 'Button Text',
                        'name'  => 'button_text',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_hit_button_link',
                        'label' => 'Button Link',
                        'name'  => 'button_link',
                        'type'  => 'link',
                    ),

                    array(
                        'key'           => 'field_hit_image',
                        'label'         => 'Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                    ),

                ),

            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/how-it-works-timeline',
                ),
            ),
        ),

    ));
}