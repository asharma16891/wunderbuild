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

    ];

    foreach ($blocks as $block) {

        // acf_register_block_type([
        //     'name'              => $block['name'],
        //     'title'             => __($block['title'], 'wunderbuild'),
        //     'description'       => __($block['description'], 'wunderbuild'),
        //     'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/' . $block['name'] . '.php',
        //     'category'          => 'layout',
        //     'icon'              => $block['icon'],
        //     'keywords'          => $block['keywords'],
        //     'mode'              => 'preview',
        //     'supports'          => [
        //         'align' => false,
        //         'jsx'   => true,
        //     ],
        // ]);

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
