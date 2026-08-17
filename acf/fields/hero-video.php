<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_hero_video_fields');

function wunderbuild_register_hero_video_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_hero_video',
        'title' => 'Hero Video',

        'fields' => array(

            /*
            |--------------------------------------------------------------------------
            | Video
            |--------------------------------------------------------------------------
            */

            array(
                'key'           => 'field_hero_video',
                'label'         => 'Hero Video',
                'name'          => 'video',
                'type'          => 'file',

                'return_format' => 'array',

                'library' => 'all',

                'mime_types' => 'mp4,webm',
            ),

        ),

        /*
        |--------------------------------------------------------------------------
        | Block Location
        |--------------------------------------------------------------------------
        */

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/hero-video',
                ),
            ),
        ),

    ));
}