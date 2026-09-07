<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_adoption_problem_fields');

function wunderbuild_register_adoption_problem_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_adoption_problem',
        'title' => 'Adoption Problem',

        'fields' => array(


            array(
                'key'   => 'field_adoption_problem_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'textarea',
                'rows'  => 2,
            ),


            array(
                'key'         => 'field_adoption_problem_cards',
                'label'       => 'Problem Cards',
                'name'        => 'problem_cards',
                'type'        => 'repeater',
                'layout'      => 'block',
                'button_label' => 'Add Problem Card',

                'sub_fields' => array(

                    array(
                        'key'   => 'field_adoption_problem_number',
                        'label' => 'Number',
                        'name'  => 'number',
                        'type'  => 'text',
                        'instructions' => 'Example: 01, 02, 03',
                    ),

                    array(
                        'key'   => 'field_adoption_problem_card_heading',
                        'label' => 'Card Heading',
                        'name'  => 'card_heading',
                        'type'  => 'text',
                    ),

                    array(
                        'key'   => 'field_adoption_problem_card_description',
                        'label' => 'Card Description',
                        'name'  => 'card_description',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ),

                ),
            ),

        ),

       

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/adoption-problem',
                ),
            ),
        ),

    ));
}