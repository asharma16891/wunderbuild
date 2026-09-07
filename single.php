<?php

/**
 * Template: Single Blog Article
 *
 * Uses native WordPress post data.
 * No ACF required for Sources, Author, or Related Articles.
 */

get_header();

if (have_posts()) :

    while (have_posts()) :
        the_post();

        /*
        |--------------------------------------------------------------------------
        | POST DATA
        |--------------------------------------------------------------------------
        */

        $post_id = get_the_ID();

        $title = get_the_title();

        $content = apply_filters(
            'the_content',
            get_the_content()
        );

        /*
        |--------------------------------------------------------------------------
        | CATEGORY
        |--------------------------------------------------------------------------
        */

        $categories = get_the_category();

        $category = !empty($categories)
            ? $categories[0]
            : null;

        $category_name = $category
            ? $category->name
            : '';

        $category_link = $category
            ? get_category_link($category->term_id)
            : '';

        /*
        |--------------------------------------------------------------------------
        | AUTHOR
        |--------------------------------------------------------------------------
        */

        $author_id = get_the_author_meta('ID');

        $author_name = get_the_author();

        $author_role = get_the_author_meta('description');

        $author_bio = get_the_author_meta('description');

        $author_avatar = get_avatar_url(
            $author_id,
            [
                'size' => 240,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | DATES
        |--------------------------------------------------------------------------
        */

        $publish_date = get_the_date(
            get_option('date_format')
        );

        $updated_date = get_the_modified_date(
            get_option('date_format')
        );

        $publish_date_machine = get_the_date('c');

        $updated_date_machine = get_the_modified_date('c');

        $show_updated_date =
            get_the_modified_time('U') >
            get_the_time('U');

        /*
        |--------------------------------------------------------------------------
        | READING TIME
        |--------------------------------------------------------------------------
        */

        $word_count = str_word_count(
            wp_strip_all_tags(
                get_the_content()
            )
        );

        $reading_minutes = max(
            1,
            ceil($word_count / 200)
        );

        $reading_time = $reading_minutes . ' min read';

        /*
        |--------------------------------------------------------------------------
        | FEATURED IMAGE
        |--------------------------------------------------------------------------
        */

        $featured_image = '';

        $featured_image_alt = '';

        if (has_post_thumbnail()) {

            $featured_image = get_the_post_thumbnail_url(
                $post_id,
                'full'
            );

            $featured_image_alt = get_post_meta(
                get_post_thumbnail_id($post_id),
                '_wp_attachment_image_alt',
                true
            );
        }

        /**
         * STANDFIRST / DESCRIPTION
         */

        $standfirst = get_the_excerpt();

        if (empty($standfirst)) {
            $standfirst = get_the_content();
        }

        $standfirst = wp_strip_all_tags($standfirst);
        $standfirst = preg_replace('/\s+/', ' ', $standfirst);

        $standfirst = wp_trim_words(
            $standfirst,
            35,
            '...'
        );

        /*
        |--------------------------------------------------------------------------
        | JSON-LD - ARTICLE
        |--------------------------------------------------------------------------
        */

        $article_schema = [

            '@context' => 'https://schema.org',

            '@type' => 'BlogPosting',

            'headline' => $title,

            'description' => wp_strip_all_tags($standfirst),

            'image' => $featured_image
                ? [$featured_image]
                : [],

            'datePublished' => $publish_date_machine,

            'dateModified' => $updated_date_machine,

            'author' => [
                '@type' => 'Person',
                'name' => $author_name,
            ],

            'publisher' => [
                '@type' => 'Organization',
                'name' => get_bloginfo('name'),
            ],

            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => get_permalink(),
            ],

        ];
?>

        <script type="application/ld+json">
            <?php
            echo wp_json_encode(
                $article_schema,
                JSON_UNESCAPED_SLASHES |
                    JSON_UNESCAPED_UNICODE
            );
            ?>
        </script>

        <?php
        /*
        |--------------------------------------------------------------------------
        | JSON-LD - BREADCRUMBS
        |--------------------------------------------------------------------------
        */

        $breadcrumb_schema = [

            '@context' => 'https://schema.org',

            '@type' => 'BreadcrumbList',

            'itemListElement' => [

                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => home_url('/'),
                ],

                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Resources',
                    'item' => home_url('/resources/'),
                ],

                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => 'Blog',
                    'item' => home_url('/resources/blog/'),
                ],

                [
                    '@type' => 'ListItem',
                    'position' => 4,
                    'name' => $title,
                ],

            ],

        ];
        ?>

        <script type="application/ld+json">
            <?php
            echo wp_json_encode(
                $breadcrumb_schema,
                JSON_UNESCAPED_SLASHES |
                    JSON_UNESCAPED_UNICODE
            );
            ?>
        </script>


        <main class="wb-single-blog">

            <!-- =====================================================
                 ARTICLE
            ====================================================== -->

            <article class="wb-article">

                <div class="wrap">

                    <!-- Breadcrumbs -->

                    <nav
                        class="wb-article-breadcrumbs"
                        aria-label="Breadcrumb">

                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            Home
                        </a>

                        <span aria-hidden="true">/</span>

                        <a href="<?php echo esc_url(home_url('/resources/')); ?>">
                            Resources
                        </a>

                        <span aria-hidden="true">/</span>

                        <a href="<?php echo esc_url(home_url('/resources/blog/')); ?>">
                            Blog
                        </a>

                        <?php if ($category_name) : ?>

                            <span aria-hidden="true">/</span>

                            <span>
                                <?php echo esc_html($category_name); ?>
                            </span>

                        <?php endif; ?>

                    </nav>


                    <!-- Category -->

                    <!-- <?php if ($category_name) : ?>

                        <div class="wb-article-category">

                            <?php if ($category_link) : ?>

                                <a href="<?php echo esc_url($category_link); ?>">
                                    <?php echo esc_html($category_name); ?>
                                </a>

                            <?php else : ?>

                                <?php echo esc_html($category_name); ?>

                            <?php endif; ?>

                        </div>

                    <?php endif; ?> -->


                    <!-- Article Header -->

                    <div class="wb-article-header">

                        <h1>
                            <?php echo esc_html($title); ?>
                        </h1>


                        <?php if (!empty($standfirst)) : ?>

                            <p class="wb-article-standfirst type-p1">
                                <?php echo esc_html($standfirst); ?>
                            </p>

                        <?php endif; ?>


                        <div class="wb-article-meta">

                            <!-- Author -->

                            <div class="wb-article-author">

                                <?php if ($author_avatar) : ?>

                                    <img
                                        src="<?php echo esc_url($author_avatar); ?>"
                                        alt="<?php echo esc_attr($author_name); ?>"
                                        width="48"
                                        height="48">

                                <?php endif; ?>


                                <div>

                                    <strong>
                                        <?php echo esc_html($author_name); ?>
                                    </strong>

                                    <?php if (!empty($author_role)) : ?>

                                        <span>
                                            <?php echo esc_html($author_role); ?>
                                        </span>

                                    <?php endif; ?>

                                </div>

                            </div>


                            <!-- Published -->

                            <div class="wb-article-meta__item">

                                <span class="wb-meta-label type-p3">
                                    Published
                                </span>

                                <time datetime="<?php echo esc_attr($publish_date_machine); ?>">
                                    <?php echo esc_html($publish_date); ?>
                                </time>

                            </div>


                            <!-- Updated -->

                            <?php if ($show_updated_date) : ?>

                                <div class="wb-article-meta__item">

                                    <span class="wb-meta-label type-p3">
                                        Updated
                                    </span>

                                    <time datetime="<?php echo esc_attr($updated_date_machine); ?>">
                                        <?php echo esc_html($updated_date); ?>
                                    </time>

                                </div>

                            <?php endif; ?>


                            <!-- Reading Time -->

                            <div class="wb-article-meta__item">

                                <span class="wb-meta-label type-p3">
                                    Reading time
                                </span>

                                <span>
                                    <?php echo esc_html($reading_time); ?>
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Featured Image -->

                  <?php if ($featured_image) : ?>

    <figure class="wb-article-featured">

        <img
            src="<?php echo esc_url($featured_image); ?>"
            alt="<?php echo esc_attr($featured_image_alt ?: $title); ?>"
            width="1800"
            height="950"
            fetchpriority="high">

    </figure>

<?php endif; ?>


                    <!-- =================================================
                         ARTICLE BODY
                    ================================================== -->

                    <div class="wb-article-reading-layout">

                        <!-- Table of Contents -->

                        <aside
                            class="wb-article-toc"
                            aria-label="Table of contents">

                            <div class="wb-article-toc__inner">

                                <strong>
                                    In this article
                                </strong>

                                <nav id="wb-article-toc"></nav>

                            </div>

                        </aside>


                        <!-- Gutenberg Content -->

                        <div class="wb-article-content">

                            <?php the_content(); ?>

                        </div>

                    </div>


                    <!-- =================================================
                         SOURCES
                    ================================================== -->

                    <section
                        class="wb-article-sources"
                        aria-labelledby="article-sources-heading">

                        <h2 id="article-sources-heading">
                            Sources
                        </h2>

                        <ul>

                            <li>
                                <a
                                    href="<?php echo esc_url(home_url('/')); ?>"
                                    target="_blank"
                                    rel="noopener">
                                    Wunderbuild
                                </a>
                            </li>

                        </ul>

                    </section>


                    <!-- =================================================
                         AUTHOR INFORMATION
                    ================================================== -->

                    <section
                        class="wb-article-author-box"
                        aria-labelledby="article-author-heading">

                        <div class="wb-article-author-box__image">

                            <?php if ($author_avatar) : ?>

                                <img
                                    src="<?php echo esc_url($author_avatar); ?>"
                                    alt="<?php echo esc_attr($author_name); ?>"
                                    width="96"
                                    height="96"
                                    loading="lazy">

                            <?php endif; ?>

                        </div>


                        <div class="wb-article-author-box__content">

                            <span class="wb-eyebrow">
                                About the author
                            </span>

                            <h2 id="article-author-heading">
                                <?php echo esc_html($author_name); ?>
                            </h2>


                            <?php if (!empty($author_role)) : ?>

                                <strong>
                                    <?php echo esc_html($author_role); ?>
                                </strong>

                            <?php endif; ?>


                            <?php if (!empty($author_bio)) : ?>

                                <p>
                                    <?php echo esc_html($author_bio); ?>
                                </p>

                            <?php endif; ?>

                        </div>

                    </section>


                    <!-- =================================================
                         RELATED ARTICLES
                    ================================================== -->

                    <?php
                    $related_args = [
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'post__not_in'   => [$post_id],
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ];

                    // First try same category posts
                    if ($category) {
                        $related_args['category__in'] = [$category->term_id];
                    }

                    $related_query = new WP_Query($related_args);

                    // If no same-category posts found,
                    // get latest posts instead
                    if (!$related_query->have_posts()) {

                        wp_reset_postdata();

                        $related_args = [
                            'post_type'      => 'post',
                            'posts_per_page' => 3,
                            'post__not_in'   => [$post_id],
                            'post_status'    => 'publish',
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ];

                        $related_query = new WP_Query($related_args);
                    }
                    ?>

                    <?php if ($related_query->have_posts()) : ?>

                        <section
                            class="wb-related-articles"
                            aria-labelledby="related-articles-heading">

                            <div class="section-head">

                                <h2>
                                    Related articles
                                </h2>

                            </div>

                            <div class="wb-blog-grid">

                                <?php while ($related_query->have_posts()) : ?>

                                    <?php $related_query->the_post(); ?>

                                    <article class="wb-blog-card">

                                        <?php if (has_post_thumbnail()) : ?>

                                            <a
                                                href="<?php the_permalink(); ?>"
                                                class="wb-blog-card__image">

                                                <?php the_post_thumbnail(
                                                    'medium_large',
                                                    [
                                                        'loading' => 'lazy',
                                                        'alt'     => get_the_title(),
                                                    ]
                                                ); ?>

                                            </a>

                                        <?php endif; ?>


                                        <div class="wb-blog-card__content">

                                            <?php
                                            $related_categories = get_the_category();

                                            if (!empty($related_categories)) :
                                            ?>

                                                <span class="wb-blog-category">
                                                    <?php echo esc_html($related_categories[0]->name); ?>
                                                </span>

                                            <?php endif; ?>


                                            <h3 class="type-h5">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>


                                            <p>
                                                <?php
                                                echo esc_html(
                                                    wp_trim_words(
                                                        get_the_excerpt(),
                                                        20
                                                    )
                                                );
                                                ?>
                                            </p>


                                            <div class="wb-blog-card__meta">

                                                <span>
                                                    <?php
                                                    echo esc_html(
                                                        get_the_date(
                                                            get_option('date_format')
                                                        )
                                                    );
                                                    ?>
                                                </span>

                                            </div>


                                            <a
                                                href="<?php the_permalink(); ?>"
                                                class="wb-blog-card__link">

                                                Read article

                                                <span aria-hidden="true">
                                                    →
                                                </span>

                                            </a>

                                        </div>

                                    </article>

                                <?php endwhile; ?>

                            </div>

                        </section>

                    <?php endif; ?>

                    <?php wp_reset_postdata(); ?>

                </div>

            </article>


            <?php

/*
|--------------------------------------------------------------------------
| GLOBAL BLOG SECTIONS
|--------------------------------------------------------------------------
*/

// Blog Newsletter
$enable_blog_newsletter = get_field(
    'enable_blog_newsletter',
    'option'
);

$blog_newsletter = get_field(
    'blog_newsletter',
    'option'
);

if ($enable_blog_newsletter && !empty($blog_newsletter)) {

    get_template_part(
        'template-parts/blocks/wb-newsletter-blog',
        null,
        array(
            'fields' => $blog_newsletter,
        )
    );
}


// Final CTA
$enable_final_cta = get_field(
    'enable_final_cta',
    'option'
);

$final_cta = get_field(
    'final_cta',
    'option'
);

if ($enable_final_cta && !empty($final_cta)) {

    get_template_part(
        'template-parts/blocks/final-cta',
        null,
        array(
            'fields' => $final_cta,
        )
    );
}

?>
           
        </main>




    <?php endwhile; ?>

<?php endif; ?>



<?php get_footer(); ?>