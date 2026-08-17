<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('acf/init', 'wunderbuild_register_acf_blocks');

function wunderbuild_register_acf_blocks()
{
    if (!function_exists('acf_register_block_type')) {
        return;
    }

    $blocks = [

        [
            'name'        => 'hero',
            'title'       => 'Hero',
            'description' => 'Hero Section',
            'icon'        => 'cover-image',
            'keywords'    => ['hero', 'banner'],
        ],

        [
            'name'        => 'trust',
            'title'       => 'Trust Section',
            'description' => 'Trust Cards Section',
            'icon'        => 'shield',
            'keywords'    => ['trust', 'features'],
        ],

        [
            'name'        => 'process',
            'title'       => 'Process Timeline',
            'description' => 'Process Timeline Section',
            'icon'        => 'editor-ol',
            'keywords'    => ['process', 'timeline', 'steps'],
        ],

        [
            'name'        => 'product-showcase',
            'title'       => 'Product Showcase',
            'description' => 'Product Showcase Section',
            'icon'        => 'images-alt2',
            'keywords'    => ['product', 'showcase', 'tabs'],
        ],

        [
            'name'        => 'support',
            'title'       => 'Support',
            'description' => 'Support Section',
            'icon'        => 'sos',
            'keywords'    => ['support', 'help', 'cards'],
        ],

        [
            'name'        => 'testimonials',
            'title'       => 'Testimonials',
            'description' => 'Testimonials Section',
            'icon'        => 'format-quote',
            'keywords'    => ['testimonial', 'reviews', 'feedback'],
        ],
        [
            'name'        => 'final-cta',
            'title'       => 'Final CTA',
            'description' => 'Final Call To Action Section',
            'icon'        => 'megaphone',
            'keywords'    => ['cta', 'call to action', 'banner'],
        ],
        [
            'name'        => 'how-it-works-timeline',
            'title'       => 'How It Works Timeline',
            'description' => 'How It Works Timeline Section',
            'icon'        => 'editor-ol',
            'keywords'    => ['timeline', 'how it works', 'stages'],
        ],
        [
            'name'        => 'comparison',
            'title'       => 'Comparison',
            'description' => 'Comparison Section',
            'icon'        => 'leftright',
            'keywords'    => ['comparison', 'before', 'after'],
        ],
        [
            'name'        => 'faqs',
            'title'       => 'FAQs',
            'description' => 'FAQs Section',
            'icon'        => 'editor-help',
            'keywords'    => ['faq', 'accordion', 'questions'],
        ],
        [
            'name'        => 'new-work',
            'title'       => 'New Work',
            'description' => 'New Work Section',
            'icon'        => 'grid-view',
            'keywords'    => ['new', 'work', 'cards'],
        ],
        [
            'name'        => 'workflow-map',
            'title'       => 'Workflow Map',
            'description' => 'Workflow Map Section',
            'icon'        => 'share-alt',
            'keywords'    => ['workflow', 'map', 'hotspots'],
        ],
        [
<<<<<<< Updated upstream
            'name'        => 'pricing-hero',
            'title'       => 'Pricing Hero',
            'description' => 'Pricing Hero Section',
            'icon'        => 'money-alt',
            'keywords'    => ['pricing', 'hero', 'banner'],
        ],
        [
            'name'        => 'pricing-selector',
            'title'       => 'Pricing Selector',
            'description' => 'Pricing Plans with Job Selector',
            'icon'        => 'money-alt',
            'keywords'    => ['pricing', 'plans', 'selector'],
        ],
        [
            'name'        => 'pricing-workflow',
            'title'       => 'Pricing Workflow',
            'description' => 'Pricing Workflow Section',
            'icon'        => 'editor-ol',
            'keywords'    => ['pricing', 'workflow', 'process', 'plans'],
        ],
        [
            'name'        => 'pricing-benefits',
            'title'       => 'Pricing Benefits',
            'description' => 'Pricing Benefits Section',
            'icon'        => 'star-filled',
            'keywords'    => ['pricing', 'benefits', 'features'],
        ],
        [
            'name'        => 'support-onboarding',
            'title'       => 'Support & Onboarding',
            'description' => 'Support and Onboarding Section',
            'icon'        => 'sos',
            'keywords'    => ['support', 'onboarding', 'help', 'training'],
        ],
        [
            'name'        => 'adoption-problem',
            'title'       => 'Adoption Problem',
            'description' => 'Adoption Problem Section',
            'icon'        => 'warning',
            'keywords'    => ['adoption', 'problem', 'training', 'support'],
        ],
        [
            'name'        => 'initial-onboarding',
            'title'       => 'Initial Onboarding',
            'description' => 'Initial Onboarding Section',
            'icon'        => 'welcome-learn-more',
            'keywords'    => ['onboarding', 'initial', 'setup'],
        ],
        [
            'name'        => 'product-training',
            'title'       => 'Product Training',
            'description' => 'Product Training Section',
            'icon'        => 'welcome-learn-more',
            'keywords'    => ['training', 'product', 'onboarding'],
        ],
        [
            'name'        => 'academy-section',
            'title'       => 'Academy Section',
            'description' => 'Academy learning and training section',
            'icon'        => 'welcome-learn-more',
            'keywords'    => ['academy', 'learning', 'training'],
        ],
        [
            'name'        => 'support-routes',
            'title'       => 'Support Routes',
            'description' => 'Support Routes Section',
            'icon'        => 'sos',
            'keywords'    => ['support', 'routes', 'help'],
        ],
        [
            'name'        => 'switching-cta',
            'title'       => 'Switching CTA',
            'description' => 'Switching to Wunderbuild CTA section',
            'icon'        => 'megaphone',
            'keywords'    => ['switching', 'migration', 'cta'],
        ],
        [
            'name'        => 'wb-migration-process',
            'title'       => 'WB Migration Process',
            'description' => 'Migration process steps section',
            'icon'        => 'list-view',
            'keywords'    => ['migration', 'process', 'steps', 'export'],
        ],
        [
            'name'        => 'migration-limit',
            'title'       => 'Migration Limit',
            'description' => 'Migration limitations cards section',
            'icon'        => 'warning',
            'keywords'    => ['migration', 'limit', 'data', 'cards'],
        ],
        [
            'name'        => 'wb-timing-section',
            'title'       => 'WB Timing Section',
            'description' => 'Timing information section',
            'icon'        => 'clock',
            'keywords'    => ['timing', 'migration', 'support'],
        ],
        [
            'name'        => 'wb-handover',
            'title'       => 'WB Handover',
            'description' => 'Handover CTA section',
            'icon'        => 'admin-customizer',
            'keywords'    => ['handover', 'support', 'onboarding', 'team'],
        ],
=======
            'name'        => 'hero-video',
            'title'       => 'Hero Video',
            'description' => 'Hero video section',
            'icon'        => 'video-alt3',
            'keywords'    => ['hero', 'video'],
        ],
        [
            'name'        => 'mcp-problem',
            'title'       => 'MCP Problem',
            'description' => 'MCP problem cards section',
            'icon'        => 'warning',
            'keywords'    => ['mcp', 'problem', 'cards', 'answer'],
        ],
        [
            'name'        => 'mcp-product-story',
            'title'       => 'MCP Product Story',
            'description' => 'MCP product story section',
            'icon'        => 'networking',
            'keywords'    => ['mcp', 'product', 'story', 'flow'],
        ],
        [
            'name'        => 'mcp-capabilities',
            'title'       => 'MCP Capabilities',
            'description' => 'MCP capabilities tabs section',
            'icon'        => 'screenoptions',
            'keywords'    => ['mcp', 'capabilities', 'tabs', 'prompts'],
        ],
        [
            'name'        => 'mcp-access-timeline',
            'title'       => 'MCP Access Timeline',
            'description' => 'MCP access timeline section',
            'icon'        => 'editor-ol',
            'keywords'    => ['mcp', 'access', 'timeline'],
        ],
        [
            'name'        => 'workspace-cta',
            'title'       => 'Workspace CTA',
            'description' => 'Workspace CTA section',
            'icon'        => 'button',
            'keywords'    => ['workspace', 'cta', 'call to action'],
        ],
        [
            'name'        => 'contact-routes',
            'title'       => 'Contact Routes',
            'description' => 'Contact routes cards section',
            'icon'        => 'location-alt',
            'keywords'    => ['contact', 'routes', 'support', 'sales'],
        ],
        [
            'name'        => 'contact-enquiry',
            'title'       => 'Contact Enquiry',
            'description' => 'Contact enquiry section with Contact Form 7',
            'icon'        => 'email',
            'keywords'    => ['contact', 'enquiry', 'form'],
        ],
        [
            'name'        => 'contact-details',
            'title'       => 'Contact Details',
            'description' => 'Contact details cards section',
            'icon'        => 'phone',
            'keywords'    => ['contact', 'details', 'phone', 'support', 'email'],
        ],

>>>>>>> Stashed changes

    ];

    foreach ($blocks as $block) {


        acf_register_block_type([
            'name'            => $block['name'],
            'title'           => __($block['title'], 'wunderbuild'),
            'description'     => __($block['description'], 'wunderbuild'),
            'render_callback' => 'wunderbuild_render_block',
            'category'        => 'layout',
            'icon'            => $block['icon'],
            'keywords'        => $block['keywords'],
            'mode'            => 'preview',
            'supports'        => [
                'align' => false,
                'jsx'   => true,
            ],
        ]);
    }
}



function wunderbuild_render_block($block, $content = '', $is_preview = false, $post_id = 0)
{
    $slug = str_replace('acf/', '', $block['name']);

    get_template_part(
        'template-parts/blocks/' . $slug,
        null,
        [
            'block'      => $block,
            'fields'     => get_fields(),
            'is_preview' => $is_preview,
            'post_id'    => $post_id,
        ]
    );
}
