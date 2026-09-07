<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_pricing_workflow_fields');

function wunderbuild_register_pricing_workflow_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_pricing_workflow',
        'title' => 'Pricing Workflow',

        'fields' => array(

            array(
                'key'   => 'field_pricing_workflow_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'wysiwyg',
                'toolbar' => 'full',
                'media_upload' => 0,
            ),

            array(
                'key'   => 'field_pricing_workflow_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 3,
            ),

            array(
                'key'          => 'field_pricing_workflow_cards',
                'label'       => 'Workflow Cards',
                'name'        => 'workflow_cards',
                'type'        => 'repeater',
                'layout'      => 'block',
                'button_label' => 'Add Workflow Card',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_pricing_workflow_card_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                        'placeholder' => '01',
                    ),

                    array(
                        'key'   => 'field_pricing_workflow_card_heading',
                        'label' => 'Heading',
                        'name'  => 'heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_pricing_workflow_card_description',
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
                    'value'    => 'acf/pricing-workflow',
                ),
            ),
        ),

    ));
}