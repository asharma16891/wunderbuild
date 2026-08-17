<?php

/**
 * Template Name: Blog
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

/*
|--------------------------------------------------------------------------
| BLOG DEMO DATA
|--------------------------------------------------------------------------
| Temporary data for UI.
| Later this can be replaced with WP_Query / native WordPress Posts.
|--------------------------------------------------------------------------
*/

$blog_categories = [
    [
        'slug'  => 'all',
        'label' => 'All resources',
    ],
    [
        'slug'  => 'running-the-business',
        'label' => 'Running the business',
    ],
    [
        'slug'  => 'estimating-and-cost-control',
        'label' => 'Estimating & cost control',
    ],
    [
        'slug'  => 'planning-and-job-delivery',
        'label' => 'Planning & job delivery',
    ],
    [
        'slug'  => 'clients-and-communication',
        'label' => 'Clients & communication',
    ],
    [
        'slug'  => 'industry-and-compliance',
        'label' => 'Industry & compliance',
    ],
    [
        'slug'  => 'software-and-team-adoption',
        'label' => 'Software & team adoption',
    ],
    [
        'slug'  => 'wunderbuild-updates',
        'label' => 'Wunderbuild updates',
    ],
];

$blog_posts = [

    [
        'id' => 1,
        'title' => 'How builders can keep estimating and job delivery connected',
        'slug' => 'estimating-job-delivery-connected',
        'category' => 'estimating-and-cost-control',
        'category_label' => 'Estimating & cost control',
        'excerpt' => 'A practical look at how builders can reduce duplicated work by keeping estimates, costs, schedules, and job information connected.',
        'date' => '14 August 2026',
        'date_iso' => '2026-08-14',
        'reading_time' => '6 min read',
        'author' => 'Wunderbuild team',
        'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=80',
        'featured' => true,
        'url' => '#',
    ],

    [
        'id' => 2,
        'title' => 'Five ways to improve cost control across active jobs',
        'slug' => 'five-ways-improve-cost-control',
        'category' => 'estimating-and-cost-control',
        'category_label' => 'Estimating & cost control',
        'excerpt' => 'Simple processes that help construction teams keep job costs visible while work is moving across multiple sites.',
        'date' => '12 August 2026',
        'date_iso' => '2026-08-12',
        'reading_time' => '5 min read',
        'author' => 'Wunderbuild team',
        'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=900&q=80',
        'featured' => false,
        'url' => '#',
    ],

    [
        'id' => 3,
        'title' => 'A better way to organise information before the job starts',
        'slug' => 'organise-information-before-job-starts',
        'category' => 'planning-and-job-delivery',
        'category_label' => 'Planning & job delivery',
        'excerpt' => 'What to prepare before work begins so the team has the information, documents, contacts, and decisions it needs.',
        'date' => '10 August 2026',
        'date_iso' => '2026-08-10',
        'reading_time' => '7 min read',
        'author' => 'Wunderbuild team',
        'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=900&q=80',
        'featured' => false,
        'url' => '#',
    ],

    [
        'id' => 4,
        'title' => 'Keeping client communication clear throughout the build',
        'slug' => 'client-communication-throughout-build',
        'category' => 'clients-and-communication',
        'category_label' => 'Clients & communication',
        'excerpt' => 'Clear communication helps builders reduce confusion, keep decisions visible, and give clients a better experience.',
        'date' => '8 August 2026',
        'date_iso' => '2026-08-08',
        'reading_time' => '5 min read',
        'author' => 'Wunderbuild team',
        'image' => 'https://images.unsplash.com/photo-1521791055366-0d553872125f?auto=format&fit=crop&w=900&q=80',
        'featured' => false,
        'url' => '#',
    ],

    [
        'id' => 5,
        'title' => 'What builders should look for when adopting new software',
        'slug' => 'builders-software-adoption',
        'category' => 'software-and-team-adoption',
        'category_label' => 'Software & team adoption',
        'excerpt' => 'A practical checklist for evaluating whether new construction software will actually work for the people using it every day.',
        'date' => '5 August 2026',
        'date_iso' => '2026-08-05',
        'reading_time' => '8 min read',
        'author' => 'Wunderbuild team',
        'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=80',
        'featured' => false,
        'url' => '#',
    ],

    [
        'id' => 6,
        'title' => 'What is changing for builders in construction compliance',
        'slug' => 'construction-compliance-changes',
        'category' => 'industry-and-compliance',
        'category_label' => 'Industry & compliance',
        'excerpt' => 'An easy-to-follow overview of why keeping records, approvals, documents, and compliance information organised matters.',
        'date' => '2 August 2026',
        'date_iso' => '2026-08-02',
        'reading_time' => '6 min read',
        'author' => 'Wunderbuild team',
        'image' => 'https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=900&q=80',
        'featured' => false,
        'url' => '#',
    ],

    [
        'id' => 7,
        'title' => 'Why connected job information matters for growing builders',
        'slug' => 'connected-job-information',
        'category' => 'running-the-business',
        'category_label' => 'Running the business',
        'excerpt' => 'As a building business grows, disconnected information can create more admin. Here is how to keep the operation easier to manage.',
        'date' => '30 July 2026',
        'date_iso' => '2026-07-30',
        'reading_time' => '5 min read',
        'author' => 'Wunderbuild team',
        'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=900&q=80',
        'featured' => false,
        'url' => '#',
    ],

    [
        'id' => 8,
        'title' => 'What is new at Wunderbuild',
        'slug' => 'wunderbuild-updates',
        'category' => 'wunderbuild-updates',
        'category_label' => 'Wunderbuild updates',
        'excerpt' => 'Product improvements and updates designed to help residential builders manage work with less friction.',
        'date' => '28 July 2026',
        'date_iso' => '2026-07-28',
        'reading_time' => '4 min read',
        'author' => 'Wunderbuild team',
        'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80',
        'featured' => false,
        'url' => '#',
    ],
];


/*
|--------------------------------------------------------------------------
| FEATURED POST
|--------------------------------------------------------------------------
*/

$featured_post = null;

foreach ($blog_posts as $post) {
    if (!empty($post['featured'])) {
        $featured_post = $post;
        break;
    }
}
?>

<main class="wb-blog">
    <section class="pricing-hero">

        <div class="blueprint-lines"></div>

        <div class="wrap">

            <div class="pricing-content">
                <h1>
                    Pricing built around the
                    <span>jobs you're running.</span>
                </h1>

                <p>
                    Every Wunderbuild plan includes the full software,
                    unlimited team members, and unlimited estimates.
                    Choose the plan that matches the number of active
                    jobs in your business.
                </p>

                <div class="hero-buttons">

                    <a href="#" class="btn btn-primary">
                        Start a free trial
                    </a>

                    <a href="#" class="btn btn-dark">
                        Book a free demo
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         BLOG NAV / FILTER BAR
    ========================================================== -->

<!-- =========================================================
     BLOG NAV / FILTER BAR
========================================================== -->

<section class="wb-blog-toolbar">

    <div class="wrap">

        <div class="wb-blog-toolbar__bar">

            <div class="wb-blog-tabs-wrap">

                <div
                    class="wb-blog-tabs"
                    role="tablist"
                    aria-label="Blog topics"
                    id="wb-blog-tabs">

                    <?php foreach ($blog_categories as $index => $category) : ?>

                        <button
                            type="button"
                            class="wb-blog-tab <?php echo $index === 0 ? 'is-active' : ''; ?>"
                            data-topic="<?php echo esc_attr($category['slug']); ?>"
                            role="tab"
                            aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">

                            <?php echo esc_html($category['label']); ?>

                        </button>

                    <?php endforeach; ?>

                </div>


                <!-- Horizontal scroll indicator -->

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


    <!-- =========================================================
         FEATURED ARTICLE
    ========================================================== -->

    <?php if ($featured_post) : ?>

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
                    data-topic="<?php echo esc_attr($featured_post['category']); ?>"
                    data-search="<?php echo esc_attr(
                                        strtolower(
                                            $featured_post['title'] . ' ' .
                                                $featured_post['excerpt'] . ' ' .
                                                $featured_post['category_label']
                                        )
                                    ); ?>">

                    <a
                        href="<?php echo esc_url($featured_post['url']); ?>"
                        class="wb-blog-featured__image"
                        aria-label="<?php echo esc_attr(
                                        'Read ' . $featured_post['title']
                                    ); ?>">

                        <img
                            src="<?php echo esc_url($featured_post['image']); ?>"
                            alt=""
                            loading="lazy">

                    </a>


                    <div class="wb-blog-featured__content">

                        <span class="wb-blog-category">
                            <?php echo esc_html($featured_post['category_label']); ?>
                        </span>

                        <h3>
                            <a href="<?php echo esc_url($featured_post['url']); ?>">
                                <?php echo esc_html($featured_post['title']); ?>
                            </a>
                        </h3>

                        <p>
                            <?php echo esc_html($featured_post['excerpt']); ?>
                        </p>


                        <div class="wb-blog-meta">

                            <time datetime="<?php echo esc_attr($featured_post['date_iso']); ?>">
                                <?php echo esc_html($featured_post['date']); ?>
                            </time>

                            <span aria-hidden="true">·</span>

                            <span>
                                <?php echo esc_html($featured_post['reading_time']); ?>
                            </span>

                        </div>


                        <a
                            href="<?php echo esc_url($featured_post['url']); ?>"
                            class="wb-blog-button">
                            Read featured article
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </article>

            </div>

        </section>

    <?php endif; ?>


    <!-- =========================================================
         LATEST ARTICLES
    ========================================================== -->

    <section class="wb-blog-latest">

        <div class="wrap">

            <div class="wb-blog-section-heading wb-blog-section-heading--latest">

                <div>

                    <h2>
                        Latest articles
                    </h2>

                </div>

                <span
                    class="wb-blog-results-count"
                    aria-live="polite">
                    <?php echo count($blog_posts) - ($featured_post ? 1 : 0); ?>
                    articles
                </span>

            </div>


            <div
                class="wb-blog-grid"
                id="wb-blog-grid">

                <?php foreach ($blog_posts as $post) : ?>

                    <?php
                    if (!empty($post['featured'])) {
                        continue;
                    }
                    ?>

                    <article
                        class="wb-blog-card"
                        data-post
                        data-topic="<?php echo esc_attr($post['category']); ?>"
                        data-search="<?php echo esc_attr(
                                            strtolower(
                                                $post['title'] . ' ' .
                                                    $post['excerpt'] . ' ' .
                                                    $post['category_label']
                                            )
                                        ); ?>">

                        <a
                            href="<?php echo esc_url($post['url']); ?>"
                            class="wb-blog-card__image"
                            aria-label="<?php echo esc_attr(
                                            'Read ' . $post['title']
                                        ); ?>">

                            <img
                                src="<?php echo esc_url($post['image']); ?>"
                                alt=""
                                loading="lazy">

                        </a>


                        <div class="wb-blog-card__content">

                            <span class="wb-blog-category">
                                <?php echo esc_html($post['category_label']); ?>
                            </span>


                            <h3>

                                <a href="<?php echo esc_url($post['url']); ?>">

                                    <?php echo esc_html($post['title']); ?>

                                </a>

                            </h3>


                            <p>
                                <?php echo esc_html($post['excerpt']); ?>
                            </p>


                            <div class="wb-blog-meta">

                                <time datetime="<?php echo esc_attr($post['date_iso']); ?>">
                                    <?php echo esc_html($post['date']); ?>
                                </time>

                                <span aria-hidden="true">·</span>

                                <span>
                                    <?php echo esc_html($post['reading_time']); ?>
                                </span>

                            </div>


                            <a
                                href="<?php echo esc_url($post['url']); ?>"
                                class="wb-blog-card__link">
                                Read article
                                <span aria-hidden="true">→</span>
                            </a>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>


            <!-- =====================================================
                 NO RESULTS
            ====================================================== -->

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
                            r="7"></circle>

                        <path d="m20 20-4-4"></path>
                    </svg>
                </div>

                <h3>
                    No articles found
                </h3>

                <p>
                    No articles match that search yet. Try another term or
                    clear the filters to keep browsing.
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


    <!-- =========================================================
         NEWSLETTER
    ========================================================== -->

    <section class="wb-blog-newsletter">

        <div class="wrap">

            <div class="wb-blog-newsletter__inner">

                <div>

                    <h2>
                       Useful updates, <br> <span>without the noise.</span>

                    </h2>

                    <p>
                        Get Wunderbuild events, product updates, and builder stories sent straight to your inbox.
                    </p>

                </div>

                <div>
                    <form class="wb-blog-newsletter__form">
    
                        <label
                            class="screen-reader-text"
                            for="wb-blog-email">
                            Email address
                        </label>
    
                        <input
                            id="wb-blog-email"
                            type="email"
                            placeholder="Your email address"
                            required>
    
                        <button type="submit">
                            Join
                        </button>
    
                    </form>
                    <p class="wb-blog-newsletter__p"> Only useful updates. Unsubscribe anytime.</p>

                </div>



            </div>

        </div>

    </section>




</main>

<?php get_footer(); ?>