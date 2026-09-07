<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_about_team_fields');

function wunderbuild_register_about_team_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_about_team',
        'title' => 'About Team',

        'fields' => array(

            /*
             * Section Heading
             */
            array(
                'key'   => 'field_about_team_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type'  => 'text',
            ),


            /*
             * Team Members
             */
            array(
                'key'          => 'field_about_team_members',
                'label'        => 'Team Members',
                'name'         => 'team_members',
                'type'         => 'repeater',
                'layout'       => 'block',
                'button_label' => 'Add Team Member',

                'sub_fields' => array(

                    /*
                     * Member Image
                     */
                    array(
                        'key'           => 'field_about_team_member_image',
                        'label'         => 'Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'array',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),


                    /*
                     * Member Name
                     */
                    array(
                        'key'   => 'field_about_team_member_name',
                        'label' => 'Name',
                        'name'  => 'name',
                        'type'  => 'text',
                    ),


                    /*
                     * Member Role
                     */
                    array(
                        'key'   => 'field_about_team_member_role',
                        'label' => 'Role',
                        'name'  => 'role',
                        'type'  => 'text',
                    ),


                    /*
                     * Department / Label
                     */
                    array(
                        'key'   => 'field_about_team_member_department',
                        'label' => 'Department / Label',
                        'name'  => 'department',
                        'type'  => 'text',
                        'instructions' => 'Example: PRODUCT & IMPLEMENTATION',
                    ),


                    /*
                     * Description
                     */
                    array(
                        'key'   => 'field_about_team_member_description',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ),


                    /*
                     * LinkedIn Link
                     */
                    array(
                        'key'           => 'field_about_team_member_linkedin',
                        'label'         => 'LinkedIn Link',
                        'name'          => 'linkedin',
                        'type'          => 'link',
                        'return_format' => 'array',
                    ),

                ),
            ),

        ),

        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/about-team',
                ),
            ),
        ),

    ));
}