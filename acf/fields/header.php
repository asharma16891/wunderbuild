<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/include_fields', function () {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key' => 'group_header_settings',

        'title' => 'Header Settings',

        'fields' => array(

            array(
                'key' => 'field_header_logo',
                'label' => 'Logo',
                'name' => 'header_logo',
                'type' => 'image',
                'return_format' => 'array',
            ),

            array(
                'key' => 'field_login_button',
                'label' => 'Login Button',
                'name' => 'login_button',
                'type' => 'link',
            ),

            array(
                'key' => 'field_trial_button',
                'label' => 'Free Trial Button',
                'name' => 'trial_button',
                'type' => 'link',
            ),

        ),

        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-header',
                ),
            ),
        ),

    ));

});