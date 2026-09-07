<?php

if (!defined('ABSPATH')) {
    exit;
}


// Options Pages

add_action('acf/init', 'wunderbuild_register_options_pages');

function wunderbuild_register_options_pages() {

    if (!function_exists('acf_add_options_page')) {
        return;
    }

    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-settings',
        'capability' => 'manage_options',
        'redirect'   => false,
        'icon_url'   => 'dashicons-admin-generic',
        'position'   => 60,
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Header',
        'menu_title'  => 'Header',
        'parent_slug' => 'theme-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Footer',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-settings',
    ));
}



require_once get_stylesheet_directory() . '/acf/register-acf-blocks.php';

// Field Groups
require_once get_stylesheet_directory() . '/acf/fields/header.php';
require_once get_stylesheet_directory() . '/acf/fields/footer.php';
require_once get_stylesheet_directory() . '/acf/fields/hero.php';
require_once get_stylesheet_directory() . '/acf/fields/trust.php';
require_once get_stylesheet_directory() . '/acf/fields/process.php';
require_once get_stylesheet_directory() . '/acf/fields/product-showcase.php';
require_once get_stylesheet_directory() . '/acf/fields/support.php';
require_once get_stylesheet_directory() . '/acf/fields/testimonials.php';
require_once get_stylesheet_directory() . '/acf/fields/final-cta.php';
require_once get_stylesheet_directory() . '/acf/fields/how-it-works-timeline.php';
require_once get_stylesheet_directory() . '/acf/fields/comparison.php';
require_once get_stylesheet_directory() . '/acf/fields/faqs.php';
require_once get_stylesheet_directory() . '/acf/fields/new-work.php';
require_once get_stylesheet_directory() . '/acf/fields/workflow-map.php';
require_once get_stylesheet_directory() . '/acf/fields/pricing-selector.php';
require_once get_stylesheet_directory() . '/acf/fields/pricing-workflow.php';
require_once get_stylesheet_directory() . '/acf/fields/pricing-benefits.php';
require_once get_stylesheet_directory() . '/acf/fields/support-onboarding.php';
require_once get_stylesheet_directory() . '/acf/fields/adoption-problem.php';
require_once get_stylesheet_directory() . '/acf/fields/initial-onboarding.php';
require_once get_stylesheet_directory() . '/acf/fields/product-training.php';
require_once get_stylesheet_directory() . '/acf/fields/academy-section.php';
require_once get_stylesheet_directory() . '/acf/fields/support-routes.php';
require_once get_stylesheet_directory() . '/acf/fields/switching-cta.php';
require_once get_stylesheet_directory() . '/acf/fields/wb-migration-process.php';
require_once get_stylesheet_directory() . '/acf/fields/migration-limit.php';
require_once get_stylesheet_directory() . '/acf/fields/wb-timing-section.php';
require_once get_stylesheet_directory() . '/acf/fields/wb-handover.php';
require_once get_stylesheet_directory() . '/acf/fields/hero-video.php';
require_once get_stylesheet_directory() . '/acf/fields/mcp-problem.php';
require_once get_stylesheet_directory() . '/acf/fields/mcp-product-story.php';
require_once get_stylesheet_directory() . '/acf/fields/mcp-capabilities.php';
require_once get_stylesheet_directory() . '/acf/fields/mcp-access-timeline.php';
require_once get_stylesheet_directory() . '/acf/fields/workspace-cta.php';
require_once get_stylesheet_directory() . '/acf/fields/contact-routes.php';
require_once get_stylesheet_directory() . '/acf/fields/contact-enquiry.php';
require_once get_stylesheet_directory() . '/acf/fields/contact-details.php';
require_once get_stylesheet_directory() . '/acf/fields/workspace-types.php';
require_once get_stylesheet_directory() . '/acf/fields/workspace-fields.php';
require_once get_stylesheet_directory() . '/acf/fields/workspace-access.php';
require_once get_stylesheet_directory() . '/acf/fields/workspace-cases.php';
require_once get_stylesheet_directory() . '/acf/fields/workspace-roadmap.php';
require_once get_stylesheet_directory() . '/acf/fields/wb-newsletter-blog.php';
require_once get_stylesheet_directory() . '/acf/fields/affiliate-commission.php';
require_once get_stylesheet_directory() . '/acf/fields/affiliate-suitable.php';
require_once get_stylesheet_directory() . '/acf/fields/affiliate-receive.php';
require_once get_stylesheet_directory() . '/acf/fields/affiliate-responsibilities.php';
require_once get_stylesheet_directory() . '/acf/fields/affiliate-application.php';
require_once get_stylesheet_directory() . '/acf/fields/partner-proof.php';
require_once get_stylesheet_directory() . '/acf/fields/about-context.php';
require_once get_stylesheet_directory() . '/acf/fields/about-purpose.php';
require_once get_stylesheet_directory() . '/acf/fields/about-feedback.php';
require_once get_stylesheet_directory() . '/acf/fields/about-support.php';
require_once get_stylesheet_directory() . '/acf/fields/about-team.php';
require_once get_stylesheet_directory() . '/acf/fields/about-address.php';
require_once get_stylesheet_directory() . '/acf/fields/review-section.php';
require_once get_stylesheet_directory() . '/acf/fields/about-story.php';
require_once get_stylesheet_directory() . '/acf/fields/events-section.php';
require_once get_stylesheet_directory() . '/acf/fields/blog-global-sections.php';