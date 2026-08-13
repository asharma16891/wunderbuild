<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_pricing_selector_fields');

function wunderbuild_register_pricing_selector_fields()
{

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(

        'key'   => 'group_pricing_selector',
        'title' => 'Pricing Selector',

        'fields' => array(


            array(
                'key'   => 'field_pricing_selector_eyebrow',
                'label' => 'Eyebrow',
                'name'  => 'eyebrow',
                'type'  => 'text',
            ),

            array(
                'key'   => 'field_pricing_selector_heading',
                'label' => 'Heading',
                'name'  => 'heading',
                'type' => 'textarea',
                'rows' => 2,
            ),

            array(
                'key'   => 'field_pricing_selector_description',
                'label' => 'Description',
                'name'  => 'description',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            array(
                'key'   => 'field_pricing_cards_heading',
                'label' => 'Pricing Cards Heading',
                'name'  => 'pricing_heading',
                'type' => 'textarea',
                'rows' => 2,
            ),

            array(
                'key'   => 'field_pricing_cards_description',
                'label' => 'Pricing Cards Description',
                'name'  => 'pricing_description',
                'type'  => 'textarea',
                'rows'  => 2,
            ),

            /*
            |--------------------------------------------------------------------------
            | Job Tabs
            |--------------------------------------------------------------------------
            */

            array(
                'key' => 'field_job_tabs',
                'label' => 'Job Range Tabs',
                'name' => 'job_tabs',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Tab',

                'sub_fields' => array(

                    array(
                        'key' => 'field_job_tab_label',
                        'label' => 'Tab Label',
                        'name' => 'label',
                        'type' => 'text',
                    ),

                    array(
                        'key' => 'field_job_tab_slug',
                        'label' => 'Tab Slug',
                        'name' => 'slug',
                        'type' => 'text',
                        'instructions' => 'Example: starter, premium',
                    ),

                    array(
                        'key' => 'field_job_tab_default',
                        'label' => 'Default Active',
                        'name' => 'default_active',
                        'type' => 'true_false',
                        'ui' => 1,
                    ),

                ),
            ),

            /*
            |--------------------------------------------------------------------------
            | Pricing Cards
            |--------------------------------------------------------------------------
            */

            /*
|--------------------------------------------------------------------------
| Billing Toggle
|--------------------------------------------------------------------------
*/

            array(
                'key' => 'field_pricing_billing_toggle',
                'label' => 'Billing Toggle',
                'name' => 'billing_toggle',
                'type' => 'group',

                'sub_fields' => array(

                    array(
                        'key' => 'field_billing_monthly_label',
                        'label' => 'Monthly Label',
                        'name' => 'monthly_label',
                        'type' => 'text',
                        'default_value' => 'Monthly',
                    ),

                    array(
                        'key' => 'field_billing_annual_label',
                        'label' => 'Annual Label',
                        'name' => 'annual_label',
                        'type' => 'text',
                        'default_value' => 'Annual',
                    ),

                ),
            ),


            /*
|--------------------------------------------------------------------------
| Monthly Pricing Cards
|--------------------------------------------------------------------------
*/

            array(
                'key' => 'field_pricing_monthly_cards',
                'label' => 'Monthly Pricing Cards',
                'name' => 'monthly_cards',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Monthly Pricing Card',

                'sub_fields' => array(

                    array(
                        'key' => 'field_monthly_plan_slug',
                        'label' => 'Data Plan',
                        'name' => 'data_plan',
                        'type' => 'text',
                        'instructions' => 'Must match the Job Tab slug, e.g. starter, premium, platinum, ultimate.',
                    ),

                    array(
                        'key' => 'field_monthly_plan_badge',
                        'label' => 'Badge',
                        'name' => 'badge',
                        'type' => 'text',
                    ),

                    array(
                        'key' => 'field_monthly_plan_price',
                        'label' => 'Price',
                        'name' => 'price',
                        'type' => 'number',
                    ),

                    array(
                        'key' => 'field_monthly_plan_suffix',
                        'label' => 'Price Suffix',
                        'name' => 'price_suffix',
                        'type' => 'text',
                        'default_value' => '/month',
                    ),

                    array(
                        'key' => 'field_monthly_plan_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ),

                    array(
                        'key' => 'field_monthly_plan_features',
                        'label' => 'Features',
                        'name' => 'features',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Feature',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_monthly_feature_text',
                                'label' => 'Feature',
                                'name' => 'text',
                                'type' => 'text',
                            ),

                        ),
                    ),

                    array(
                        'key' => 'field_monthly_plan_button',
                        'label' => 'Button',
                        'name' => 'button',
                        'type' => 'link',
                        'return_format' => 'array',
                    ),

                    array(
                        'key' => 'field_monthly_plan_highlight',
                        'label' => 'Highlight Card',
                        'name' => 'highlight',
                        'type' => 'true_false',
                        'ui' => 1,
                    ),

                ),
            ),


            /*
|--------------------------------------------------------------------------
| Annual Pricing Cards
|--------------------------------------------------------------------------
*/

            array(
                'key' => 'field_pricing_annual_cards',
                'label' => 'Annual Pricing Cards',
                'name' => 'annual_cards',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Annual Pricing Card',

                'sub_fields' => array(

                    array(
                        'key' => 'field_annual_plan_slug',
                        'label' => 'Data Plan',
                        'name' => 'data_plan',
                        'type' => 'text',
                        'instructions' => 'Must match the Job Tab slug, e.g. starter, premium, platinum, ultimate.',
                    ),

                    array(
                        'key' => 'field_annual_plan_badge',
                        'label' => 'Badge',
                        'name' => 'badge',
                        'type' => 'text',
                    ),

                    array(
                        'key' => 'field_annual_plan_price',
                        'label' => 'Price',
                        'name' => 'price',
                        'type' => 'number',
                    ),

                    array(
                        'key' => 'field_annual_plan_suffix',
                        'label' => 'Price Suffix',
                        'name' => 'price_suffix',
                        'type' => 'text',
                        'default_value' => '/year',
                    ),

                    array(
                        'key' => 'field_annual_plan_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ),

                    array(
                        'key' => 'field_annual_plan_features',
                        'label' => 'Features',
                        'name' => 'features',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Feature',

                        'sub_fields' => array(

                            array(
                                'key' => 'field_annual_feature_text',
                                'label' => 'Feature',
                                'name' => 'text',
                                'type' => 'text',
                            ),

                        ),
                    ),

                    array(
                        'key' => 'field_annual_plan_button',
                        'label' => 'Button',
                        'name' => 'button',
                        'type' => 'link',
                        'return_format' => 'array',
                    ),

                    array(
                        'key' => 'field_annual_plan_highlight',
                        'label' => 'Highlight Card',
                        'name' => 'highlight',
                        'type' => 'true_false',
                        'ui' => 1,
                    ),

                ),
            ),

        ),

        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/pricing-selector',
                ),
            ),
        ),

    ));
}
