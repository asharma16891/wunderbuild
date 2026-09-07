<?php

/**
 * ==========================================================
 * BLOG CATEGORIES
 * ==========================================================
 */

$allowed_categories = [
    'running-the-business',
    'estimating-and-cost-control',
    'planning-and-job-delivery',
    'clients-and-communication',
    'industry-and-compliance',
    'software-and-team-adoption',
    'wunderbuild-updates',
];


/**
 * ==========================================================
 * BLOG FILTER CATEGORIES
 * ==========================================================
 */

$blog_categories = [
    [
        'slug'  => 'all',
        'label' => 'All resources',
    ],
];

foreach ($allowed_categories as $category_slug) {

    $category = get_category_by_slug($category_slug);

    if ($category) {

        $blog_categories[] = [
            'slug'  => $category->slug,
            'label' => $category->name,
        ];
    }
}


/**
 * ==========================================================
 * FETCH WORDPRESS POSTS
 * ==========================================================
 */

$blog_query = new WP_Query(
    [
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => -1,
        'category_name'       => implode(',', $allowed_categories),
        'orderby'             => 'date',
        'order'               => 'DESC',
        'ignore_sticky_posts' => true,
    ]
);


/**
 * ==========================================================
 * FEATURED + LATEST POSTS
 * ==========================================================
 *
 * Newest post = Featured post
 * Remaining posts = Latest articles
 */

$featured_post = null;
$latest_posts  = [];

if (! empty($blog_query->posts)) {

    $featured_post = $blog_query->posts[0];

    $latest_posts = array_slice(
        $blog_query->posts,
        1
    );
}

?>

<main class="wb-blog">




    <!-- =====================================================
         BLOG NAV / FILTER BAR
    ====================================================== -->

    <section class="wb-blog-toolbar">

        <div class="wrap">

            <div class="wb-blog-toolbar__bar">


                <!-- CATEGORY TABS -->

                <div class="wb-blog-tabs-wrap">

                    <div
                        class="wb-blog-tabs"
                        role="tablist"
                        aria-label="Blog topics"
                        id="wb-blog-tabs">

                        <?php foreach ($blog_categories as $index => $category) : ?>

                            <button
                                type="button"
                                class="btn wb-blog-tab <?php echo $index === 0 ? 'is-active' : ''; ?>"
                                data-topic="<?php echo esc_attr($category['slug']); ?>"
                                role="tab"
                                aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">

                                <?php echo esc_html($category['label']); ?>

                            </button>

                        <?php endforeach; ?>

                    </div>


                    <!-- HORIZONTAL SCROLL BUTTON -->

                    <button
                        type="button"
                        class="wb-blog-tabs-next"
                        id="wb-blog-tabs-next"
                        aria-label="Show more blog topics">

                        <span aria-hidden="true">→</span>

                    </button>

                </div>


                <!-- SEARCH -->

                <form
                    class="wb-blog-search"
                    role="search"
                    novalidate>

                    <label
                        class="screen-reader-text"
                        for="wb-blog-search-input">

                        Search the blog

                    </label>


                    <svg
                        class="wb-blog-search__icon"
                        viewBox="0 0 24 24"
                        aria-hidden="true">

                        <circle
                            cx="11"
                            cy="11"
                            r="7">
                        </circle>

                        <path d="m20 20-4-4"></path>

                    </svg>


                    <input
                        id="wb-blog-search-input"
                        type="search"
                        placeholder="Search resources..."
                        autocomplete="off">


                    <button
                        type="button"
                        class="wb-blog-search__clear"
                        aria-label="Clear search"
                        hidden>

                        ×

                    </button>

                </form>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FEATURED ARTICLE
    ====================================================== -->

    <?php if ($featured_post) : ?>

        <?php

        /**
         * FEATURED POST CATEGORY
         */

        $featured_categories = get_the_category(
            $featured_post->ID
        );

        $featured_category = ! empty($featured_categories)
            ? $featured_categories[0]
            : null;


        /**
         * FEATURED POST IMAGE
         */

      $featured_image = get_the_post_thumbnail_url(
    $featured_post->ID,
    'full'
);

$featured_cropped_image = $featured_image
    ? aq_resize(
        $featured_image,
        1200,
        630,
        true,
        true,
        false
    )
    : '';


        /**
         * FEATURED POST CONTENT
         */

        $featured_content = get_post_field(
            'post_content',
            $featured_post->ID
        );

        $featured_clean_content = wp_strip_all_tags(
            strip_shortcodes($featured_content)
        );


        /**
         * FEATURED EXCERPT
         * Limit to 20 words
         */

        $featured_excerpt = wp_trim_words(
            $featured_clean_content,
            20,
            '...'
        );


        /**
         * FEATURED READING TIME
         *
         * Average: 200 words per minute
         */

        $featured_word_count = str_word_count(
            $featured_clean_content
        );

        $featured_reading_time = max(
            1,
            ceil($featured_word_count / 200)
        );


        /**
         * FEATURED SEARCH CONTENT
         */

        $featured_search_content = strtolower(
            $featured_post->post_title . ' ' .
                $featured_clean_content . ' ' .
                (
                    $featured_category
                    ? $featured_category->name
                    : ''
                )
        );

        ?>


        <section class="wb-blog-featured">

            <div class="wrap">

                <div class="wb-blog-section-heading">

                    <h2>
                        Featured article
                    </h2>

                </div>


                <article
                    class="wb-blog-featured__card"
                    data-post
                    data-topic="<?php echo esc_attr(
                                    $featured_category
                                        ? $featured_category->slug
                                        : ''
                                ); ?>"
                    data-search="<?php echo esc_attr(
                                        $featured_search_content
                                    ); ?>">


                    <!-- FEATURED IMAGE -->

                    <a
                        href="<?php echo esc_url(
                                    get_permalink(
                                        $featured_post->ID
                                    )
                                ); ?>"
                        class="wb-blog-featured__image"
                        aria-label="<?php echo esc_attr(
                                        'Read ' .
                                            get_the_title(
                                                $featured_post->ID
                                            )
                                    ); ?>">

                       <?php if ($featured_image) : ?>

    <img
        src="<?php echo esc_url(
            $featured_cropped_image ?: $featured_image
        ); ?>"
        alt="<?php echo esc_attr(
            get_the_title($featured_post->ID)
        ); ?>"
        width="1200"
        height="630"
        loading="lazy">

<?php endif; ?>

                    </a>


                    <!-- FEATURED CONTENT -->

                    <div class="wb-blog-featured__content">


                        <!-- CATEGORY -->

                        <?php if ($featured_category) : ?>

                            <span class="wb-blog-category">

                                <?php echo esc_html(
                                    $featured_category->name
                                ); ?>

                            </span>

                        <?php endif; ?>


                        <!-- TITLE -->

                        <h3 class="type-h5">

                            <a href="<?php echo esc_url(
                                            get_permalink(
                                                $featured_post->ID
                                            )
                                        ); ?>">

                                <?php echo esc_html(
                                    get_the_title(
                                        $featured_post->ID
                                    )
                                ); ?>

                            </a>

                        </h3>


                        <!-- EXCERPT -->

                        <p class="common-para">

                            <?php echo esc_html(
                                $featured_excerpt
                            ); ?>

                        </p>


                        <!-- DATE + READING TIME -->

                        <div class="wb-blog-meta">

                            <time datetime="<?php echo esc_attr(
                                                get_the_date(
                                                    'c',
                                                    $featured_post->ID
                                                )
                                            ); ?>">

                                <?php echo esc_html(
                                    get_the_date(
                                        'j F Y',
                                        $featured_post->ID
                                    )
                                ); ?>

                            </time>

                            <span aria-hidden="true">·</span>

                            <span>

                                <?php echo esc_html(
                                    $featured_reading_time
                                ); ?> min read

                            </span>

                        </div>


                        <!-- BUTTON -->

                        <a
                            href="<?php echo esc_url(
                                        get_permalink(
                                            $featured_post->ID
                                        )
                                    ); ?>"
                            class="wb-blog-button">

                            Read featured article

                            <span aria-hidden="true">→</span>

                        </a>

                    </div>

                </article>

            </div>

        </section>

    <?php endif; ?>


    <!-- =====================================================
         LATEST ARTICLES
    ====================================================== -->

    <section class="wb-blog-latest">

        <div class="wrap">


            <!-- SECTION HEADING -->

            <div class="wb-blog-section-heading wb-blog-section-heading--latest">

                <div>

                    <h2>
                        Latest articles
                    </h2>

                </div>


                <span
                    class="wb-blog-results-count"
                    aria-live="polite">

                    <?php echo esc_html(
                        count($latest_posts)
                    ); ?>

                    articles

                </span>

            </div>


            <!-- BLOG GRID -->

            <div
                class="wb-blog-grid"
                id="wb-blog-grid">


                <?php foreach ($latest_posts as $post) : ?>

                    <?php

                    /**
                     * POST CATEGORY
                     */

                    $post_categories = get_the_category(
                        $post->ID
                    );

                    $post_category = ! empty($post_categories)
                        ? $post_categories[0]
                        : null;


                    /**
                     * POST IMAGE
                     */

                   $post_image = get_the_post_thumbnail_url(
    $post->ID,
    'full'
);

$post_cropped_image = $post_image
    ? aq_resize(
        $post_image,
        400,
        250,
        true,
        true,
        false
    )
    : '';


                    /**
                     * POST CONTENT
                     */

                    $post_content = get_post_field(
                        'post_content',
                        $post->ID
                    );

                    $post_clean_content = wp_strip_all_tags(
                        strip_shortcodes($post_content)
                    );


                    /**
                     * POST EXCERPT
                     * Limit to 20 words
                     */

                    $post_excerpt = wp_trim_words(
                        $post_clean_content,
                        20,
                        '...'
                    );


                    /**
                     * POST READING TIME
                     *
                     * Average: 200 words per minute
                     */

                    $post_word_count = str_word_count(
                        $post_clean_content
                    );

                    $post_reading_time = max(
                        1,
                        ceil($post_word_count / 200)
                    );


                    /**
                     * SEARCH CONTENT
                     */

                    $post_search_content = strtolower(
                        $post->post_title . ' ' .
                            $post_clean_content . ' ' .
                            (
                                $post_category
                                ? $post_category->name
                                : ''
                            )
                    );

                    ?>


                    <article
                        class="wb-blog-card"
                        data-post
                        data-topic="<?php echo esc_attr(
                                        $post_category
                                            ? $post_category->slug
                                            : ''
                                    ); ?>"
                        data-search="<?php echo esc_attr(
                                            $post_search_content
                                        ); ?>">


                        <!-- IMAGE -->

                        <a
                            href="<?php echo esc_url(
                                        get_permalink(
                                            $post->ID
                                        )
                                    ); ?>"
                            class="wb-blog-card__image"
                            aria-label="<?php echo esc_attr(
                                            'Read ' .
                                                get_the_title(
                                                    $post->ID
                                                )
                                        ); ?>">

                            <?php if ($post_image) : ?>

                                <img
                                    src="<?php echo esc_url(
    $post_cropped_image ?: $post_image
); ?>"
                                    alt="<?php echo esc_attr(
                                                get_the_title(
                                                    $post->ID
                                                )
                                            ); ?>"
                                    loading="lazy">

                            <?php endif; ?>

                        </a>


                        <!-- CONTENT -->

                        <div class="wb-blog-card__content">


                            <!-- CATEGORY -->

                            <?php if ($post_category) : ?>

                                <span class="wb-blog-category">

                                    <?php echo esc_html(
                                        $post_category->name
                                    ); ?>

                                </span>

                            <?php endif; ?>


                            <!-- TITLE -->

                            <h3 class="type-h5">

                                <a href="<?php echo esc_url(
                                                get_permalink(
                                                    $post->ID
                                                )
                                            ); ?>">

                                    <?php echo esc_html(
                                        get_the_title(
                                            $post->ID
                                        )
                                    ); ?>

                                </a>

                            </h3>


                            <!-- EXCERPT -->

                            <p class="common-para">

                                <?php echo esc_html(
                                    $post_excerpt
                                ); ?>

                            </p>


                            <!-- DATE + READING TIME -->

                            <div class="wb-blog-meta">

                                <time datetime="<?php echo esc_attr(
                                                    get_the_date(
                                                        'c',
                                                        $post->ID
                                                    )
                                                ); ?>">

                                    <?php echo esc_html(
                                        get_the_date(
                                            'j F Y',
                                            $post->ID
                                        )
                                    ); ?>

                                </time>

                                <span aria-hidden="true">·</span>

                                <span>

                                    <?php echo esc_html(
                                        $post_reading_time
                                    ); ?> min read

                                </span>

                            </div>


                            <!-- READ ARTICLE -->

                            <a
                                href="<?php echo esc_url(
                                            get_permalink(
                                                $post->ID
                                            )
                                        ); ?>"
                                class="wb-blog-card__link">

                                Read article

                                <span aria-hidden="true">→</span>

                            </a>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>


            <!-- =================================================
                 NO RESULTS
            ================================================== -->

            <div
                class="wb-blog-no-results"
                id="wb-blog-no-results"
                hidden>

                <div class="wb-blog-no-results__icon">

                    <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true">

                        <circle
                            cx="11"
                            cy="11"
                            r="7">
                        </circle>

                        <path d="m20 20-4-4"></path>

                    </svg>

                </div>


                <h3>
                    No articles found
                </h3>


                <p>
                    No articles match that search yet.
                    Try another term or clear the filters
                    to keep browsing.
                </p>


                <button
                    type="button"
                    class="wb-blog-clear-filter"
                    id="wb-blog-clear-filter">

                    Clear filters

                </button>

            </div>

        </div>


    </section>





</main>

<?php

wp_reset_postdata();



?>