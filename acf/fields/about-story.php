<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', function () {

    acf_add_local_field_group([
        'key' => 'group_wb_about_story',
        'title' => 'About Story',

        'fields' => [

            /*
            |--------------------------------------------------------------------------
            | SECTION HEADING
            |--------------------------------------------------------------------------
            */

            [
                'key' => 'field_wb_about_story_heading',
                'label' => 'Section Heading',
                'name' => 'heading',
                'type' => 'text',
            ],


            /*
            |--------------------------------------------------------------------------
            | FOUNDER CARD
            |--------------------------------------------------------------------------
            */

            [
                'key' => 'field_wb_about_story_founder',
                'label' => 'Founder',
                'name' => 'founder',
                'type' => 'group',

                'sub_fields' => [


                    [
                        'key' => 'field_wb_about_story_founder_name',
                        'label' => 'Founder Name',
                        'name' => 'name',
                        'type' => 'text',
                    ],

                    [
                        'key' => 'field_wb_about_story_founder_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 4,
                    ],


                    [
                        'key' => 'field_wb_about_story_founder_image',
                        'label' => 'Founder Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                    ],

                ],
            ],


            /*
            |--------------------------------------------------------------------------
            | STORY TIMELINE
            |--------------------------------------------------------------------------
            */

            [
                'key' => 'field_wb_about_story_timeline',
                'label' => 'Story Timeline',
                'name' => 'timeline',
                'type' => 'repeater',

                'layout' => 'block',

                'button_label' => 'Add Story Point',

                'sub_fields' => [

                    [
                        'key' => 'field_wb_about_story_timeline_label',
                        'label' => 'Small Label',
                        'name' => 'label',
                        'type' => 'text',
                        'placeholder' => 'THE PROBLEM',
                    ],

                    [
                        'key' => 'field_wb_about_story_timeline_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'placeholder' => 'When and where it began.',
                    ],

                    [
                        'key' => 'field_wb_about_story_timeline_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 4,
                    ],

                   

                ],
            ],

        ],


        /*
        |--------------------------------------------------------------------------
        | BLOCK LOCATION
        |--------------------------------------------------------------------------
        */

        'location' => [
            [
                [
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/about-story',
                ],
            ],
        ],

    ]);

});