<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_trust_fields');

function wunderbuild_register_trust_fields() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_trust_section',
        'title' => 'Trust Section',

        'fields' => array(

            array(
                'key'           => 'field_trust_cards',
                'label'         => 'Trust Cards',
                'name'          => 'trust_cards',
                'type'          => 'repeater',
                'layout'        => 'block',
                'button_label'  => 'Add Card',

                'sub_fields' => array(

                    array(
                        'key'           => 'field_trust_card_icon',
                        'label'         => 'Icon',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'thumbnail',
                    ),

                    array(
                        'key'   => 'field_trust_card_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),

                ),

            ),

        ),

        'location' => array(

            array(

                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/trust',
                ),

            ),

        ),

    ));

}