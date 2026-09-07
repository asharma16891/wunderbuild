<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', function () {

    acf_add_local_field_group([
        'key' => 'group_wb_reviews_section',
        'title' => 'Reviews Section',

        'fields' => [

            /*
            |--------------------------------------------------------------------------
            | SECTION HEADING
            |--------------------------------------------------------------------------
            */

            [
                'key' => 'field_wb_reviews_heading',
                'label' => 'Heading',
                'name' => 'heading',
                'type' => 'text',
                'default_value' => 'Browse the reviews.',
            ],


            /*
            |--------------------------------------------------------------------------
            | REVIEWS REPEATER
            |--------------------------------------------------------------------------
            */

            [
                'key' => 'field_wb_reviews',
                'label' => 'Reviews',
                'name' => 'reviews',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Review',

                'sub_fields' => [

                    /*
                    |--------------------------------------------------------------------------
                    | REVIEW TYPE
                    |--------------------------------------------------------------------------
                    */

                    [
                        'key' => 'field_wb_review_type',
                        'label' => 'Review Type',
                        'name' => 'review_type',
                        'type' => 'select',
                        'choices' => [
                            'text' => 'Text',
                            'video' => 'Video',
                        ],
                        'default_value' => 'text',
                        'return_format' => 'value',
                    ],


                    /*
                    |--------------------------------------------------------------------------
                    | REVIEW TEXT
                    |--------------------------------------------------------------------------
                    */

                    [
                        'key' => 'field_wb_review_text',
                        'label' => 'Review Text',
                        'name' => 'review_text',
                        'type' => 'textarea',
                        'rows' => 4,
                    ],


                    /*
                    |--------------------------------------------------------------------------
                    | RATING
                    |--------------------------------------------------------------------------
                    */

                    


                    /*
                    |--------------------------------------------------------------------------
                    | REVIEWER DETAILS
                    |--------------------------------------------------------------------------
                    */

                    [
                        'key' => 'field_wb_reviewer_name',
                        'label' => 'Reviewer Full Name',
                        'name' => 'reviewer_name',
                        'type' => 'text',
                    ],

                    [
                        'key' => 'field_wb_review_role',
                        'label' => 'Job Position or Role',
                        'name' => 'role',
                        'type' => 'text',
                    ],

                    [
                        'key' => 'field_wb_review_company',
                        'label' => 'Company',
                        'name' => 'company',
                        'type' => 'text',
                    ],

                    [
                        'key' => 'field_wb_review_date',
                        'label' => 'Review Date',
                        'name' => 'review_date',
                        'type' => 'date_picker',
                        'display_format' => 'd/m/Y',
                        'return_format' => 'Y-m-d',
                    ],


                    /*
                    |--------------------------------------------------------------------------
                    | SOURCE
                    |--------------------------------------------------------------------------
                    */

                    [
                        'key' => 'field_wb_review_source',
                        'label' => 'Source',
                        'name' => 'source_label',
                        'type' => 'text',
                        'placeholder' => 'Verified customer review',
                    ],

                    [
                        'key' => 'field_wb_review_source_url',
                        'label' => 'Source URL',
                        'name' => 'source_url',
                        'type' => 'url',
                    ],

                    [
                        'key' => 'field_wb_review_private_source_ref',
                        'label' => 'Private Source Reference',
                        'name' => 'private_source_ref',
                        'type' => 'text',
                        'instructions' => 'Internal use only.',
                    ],


                    /*
                    |--------------------------------------------------------------------------
                    | VERIFICATION
                    |--------------------------------------------------------------------------
                    */

                    [
                        'key' => 'field_wb_review_verification_status',
                        'label' => 'Verification Status',
                        'name' => 'verification_status',
                        'type' => 'select',
                        'choices' => [
                            'pending' => 'Pending',
                            'approved' => 'Approved',
                            'rejected' => 'Rejected',
                        ],
                        'default_value' => 'pending',
                        'return_format' => 'value',
                    ],

                    [
                        'key' => 'field_wb_review_private_permission_record',
                        'label' => 'Private Permission Record',
                        'name' => 'private_permission_record',
                        'type' => 'textarea',
                        'rows' => 3,
                        'instructions' => 'Internal use only.',
                    ],


                    /*
                    |--------------------------------------------------------------------------
                    | VIDEO SOURCE
                    |--------------------------------------------------------------------------
                    */

                    [
                        'key' => 'field_wb_review_video_source',
                        'label' => 'Video Source',
                        'name' => 'video_source',
                        'type' => 'select',
                        'choices' => [
                            'uploaded' => 'Uploaded Video',
                            'youtube' => 'YouTube',
                            'vimeo' => 'Vimeo',
                            'external' => 'External URL',
                        ],
                        'return_format' => 'value',

                        'conditional_logic' => [
                            [
                                [
                                    'field' => 'field_wb_review_type',
                                    'operator' => '==',
                                    'value' => 'video',
                                ],
                            ],
                        ],
                    ],

                    [
                        'key' => 'field_wb_review_video',
                        'label' => 'Video URL or Media Reference',
                        'name' => 'video_url',
                        'type' => 'url',

                        'conditional_logic' => [
                            [
                                [
                                    'field' => 'field_wb_review_type',
                                    'operator' => '==',
                                    'value' => 'video',
                                ],
                            ],
                        ],
                    ],

                    [
                        'key' => 'field_wb_review_thumbnail',
                        'label' => 'Thumbnail',
                        'name' => 'thumbnail',
                        'type' => 'image',
                        'return_format' => 'array',

                        'conditional_logic' => [
                            [
                                [
                                    'field' => 'field_wb_review_type',
                                    'operator' => '==',
                                    'value' => 'video',
                                ],
                            ],
                        ],
                    ],

                    [
                        'key' => 'field_wb_review_duration',
                        'label' => 'Duration',
                        'name' => 'duration',
                        'type' => 'text',
                        'placeholder' => '2:45',

                        'conditional_logic' => [
                            [
                                [
                                    'field' => 'field_wb_review_type',
                                    'operator' => '==',
                                    'value' => 'video',
                                ],
                            ],
                        ],
                    ],

                    [
                        'key' => 'field_wb_review_captions',
                        'label' => 'Captions',
                        'name' => 'captions',
                        'type' => 'url',
                        'instructions' => 'Add the captions file URL.',

                        'conditional_logic' => [
                            [
                                [
                                    'field' => 'field_wb_review_type',
                                    'operator' => '==',
                                    'value' => 'video',
                                ],
                            ],
                        ],
                    ],

                    [
                        'key' => 'field_wb_review_transcript',
                        'label' => 'Transcript',
                        'name' => 'transcript',
                        'type' => 'textarea',
                        'rows' => 6,

                        'conditional_logic' => [
                            [
                                [
                                    'field' => 'field_wb_review_type',
                                    'operator' => '==',
                                    'value' => 'video',
                                ],
                            ],
                        ],
                    ],


                    /*
                    |--------------------------------------------------------------------------
                    | FEATURED
                    |--------------------------------------------------------------------------
                    */

                    [
                        'key' => 'field_wb_review_featured',
                        'label' => 'Featured Toggle',
                        'name' => 'featured',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1,
                    ],

                    [
                        'key' => 'field_wb_review_featured_order',
                        'label' => 'Featured Order',
                        'name' => 'featured_order',
                        'type' => 'number',
                        'min' => 1,
                        'step' => 1,
                        'default_value' => 1,

                        'conditional_logic' => [
                            [
                                [
                                    'field' => 'field_wb_review_featured',
                                    'operator' => '==',
                                    'value' => '1',
                                ],
                            ],
                        ],
                    ],


                    /*
                    |--------------------------------------------------------------------------
                    | REVIEW TOPIC
                    |--------------------------------------------------------------------------
                    */

                    [
                        'key' => 'field_wb_review_topic',
                        'label' => 'Review Topic',
                        'name' => 'topic',
                        'type' => 'select',

                        'choices' => [
                            'product-workflow' => 'Product & Workflow',
                            'support-onboarding' => 'Support & Onboarding',
                            'switching' => 'Switching to Wunderbuild',
                            'value' => 'Value & Business Impact',
                        ],

                        'return_format' => 'value',
                    ],


                    /*
                    |--------------------------------------------------------------------------
                    | PRIVATE NOTES
                    |--------------------------------------------------------------------------
                    */

                    [
                        'key' => 'field_wb_review_private_notes',
                        'label' => 'Private Notes',
                        'name' => 'private_notes',
                        'type' => 'textarea',
                        'rows' => 4,
                        'instructions' => 'Internal notes. Not displayed publicly.',
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
                    'value' => 'acf/review-section',
                ],
            ],
        ],


    ]);

});