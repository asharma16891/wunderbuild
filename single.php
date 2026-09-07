<?php

/**
 * Template: Single Blog Article
 *
 * Temporary static data.
 * Later replace the static $article array with native WordPress Post data.
 */

get_header();


/* =========================================================
   STATIC ARTICLE DATA
========================================================= */

$article = [

    'title' => 'How builders can keep estimating and job delivery connected',

    'category' => 'Estimating and cost control',

    'category_slug' => 'estimating-and-cost-control',

    'standfirst' => 'A practical look at how builders can reduce duplicated work by keeping estimates, tasks, schedules, and job information connected.',

    'author' => [
        'name' => 'Wunderbuild team',
        'role' => 'Wunderbuild',
        'bio' => 'The Wunderbuild team shares practical guidance for builders and their teams across estimating, job delivery, communication, and construction business operations.',
        'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=240&q=80',
    ],

    'publish_date' => '14 August 2026',

    'updated_date' => '20 August 2026',

    'show_updated_date' => true,

    'reading_time' => '6 min read',

    'featured_image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1800&q=85',

    'featured_image_alt' => 'Builders working on a residential construction site',

    /*
     * Gutenberg-style content.
     *
     * Later this can be replaced with:
     *
     * $article['content'] = get_the_content();
     *
     * or:
     *
     * echo apply_filters('the_content', get_the_content());
     */
    'content' => '

        <h2>Why estimating and delivery need to stay connected</h2>

        <p>
            Estimating is often treated as a separate stage of the job,
            but the information created during estimating continues to
            influence delivery long after the quote has been accepted.
        </p>

        <p>
            When that information is disconnected from the rest of the job,
            teams can end up entering the same information more than once,
            checking different versions of documents, or spending time
            looking for information that should already be available.
        </p>

        <h2>Keep the information moving with the job</h2>

        <p>
            A connected workflow gives the team a clearer path from the
            original estimate through to planning, delivery and final
            handover.
        </p>

        <h3>Start with a clear estimate</h3>

        <p>
            The estimate should provide a reliable starting point for the
            work that follows. Scope, costs and assumptions should be clear
            enough for the delivery team to understand what has been agreed.
        </p>

        <h3>Reduce duplicated information</h3>

        <p>
            Re-entering information creates unnecessary work and increases
            the chance of inconsistencies. Keeping important job information
            connected can make handovers simpler and easier to manage.
        </p>

        <blockquote>
            <p>
                Better information flow helps teams spend less time searching
                and more time managing the job.
            </p>
        </blockquote>

        <h2>Make handover part of the workflow</h2>

        <p>
            A strong handover should not feel like starting the job again.
            The information created during estimating should provide useful
            context for the people responsible for delivering the work.
        </p>

        <h3>Give the team one source of information</h3>

        <p>
            Teams work more efficiently when they know where to find current
            job information. A consistent workflow can reduce confusion
            around documents, tasks, costs and responsibilities.
        </p>

        <h2>What builders should review</h2>

        <ul>
            <li>Are estimating assumptions clearly documented?</li>
            <li>Is important job information being entered more than once?</li>
            <li>Can the delivery team easily access the agreed scope?</li>
            <li>Are cost and delivery information connected?</li>
            <li>Can the team identify the latest version of important information?</li>
        </ul>

        <h2>Final thoughts</h2>

        <p>
            Connecting estimating and job delivery is ultimately about
            reducing unnecessary friction. When the right information
            follows the job, builders and their teams can make decisions
            with greater confidence and keep the work moving.
        </p>

    ',

    'sources' => [
        [
            'title' => 'Wunderbuild',
            'url' => '#'
        ],
    ],

    'related_articles' => [

        [
            'title' => 'Five ways to improve cost control across active jobs',
            'category' => 'Estimating and cost control',
            'excerpt' => 'Simple ways builders can improve visibility and control across active residential projects.',
            'date' => '12 August 2026',
            'reading_time' => '5 min read',
            'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=800&q=80',
            'url' => '#',
        ],

        [
            'title' => 'A better way to organise information before the job starts',
            'category' => 'Planning and job delivery',
            'excerpt' => 'What to prepare before a project begins so teams have the information they need from day one.',
            'date' => '8 August 2026',
            'reading_time' => '4 min read',
            'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
            'url' => '#',
        ],

        [
            'title' => 'Keeping client communication clear throughout the build',
            'category' => 'Clients and communication',
            'excerpt' => 'Clear communication helps builders and clients stay aligned throughout the project.',
            'date' => '4 August 2026',
            'reading_time' => '6 min read',
            'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=800&q=80',
            'url' => '#',
        ],

    ],

];


/* =========================================================
   JSON-LD DATA
========================================================= */

$article_schema = [

    '@context' => 'https://schema.org',

    '@type' => 'BlogPosting',

    'headline' => $article['title'],

    'description' => $article['standfirst'],

    'image' => [
        $article['featured_image']
    ],

    'datePublished' => '2026-08-14',

    'dateModified' => '2026-08-20',

    'author' => [
        '@type' => 'Person',
        'name' => $article['author']['name'],
    ],

    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Wunderbuild',
    ],

];


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
            'name' => $article['title'],
        ],

    ],

];

?>

<script type="application/ld+json">
    <?php
    echo wp_json_encode(
        $article_schema,
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
    );
    ?>
</script>

<script type="application/ld+json">
    <?php
    echo wp_json_encode(
        $breadcrumb_schema,
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
    );
    ?>
</script>


<main class="wb-single-blog">


    <!-- =====================================================
         ARTICLE HEADER
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

                <span aria-hidden="true">/</span>

                <span>
                    <?php echo esc_html($article['category']); ?>
                </span>

            </nav>


            <!-- Category -->

            <div class="wb-article-category">
                <?php echo esc_html($article['category']); ?>
            </div>


            <!-- Article Header -->

            <div class="wb-article-header">

                <h1>
                    <?php echo esc_html($article['title']); ?>
                </h1>


                <?php if (! empty($article['standfirst'])) : ?>

                    <p class="wb-article-standfirst">
                        <?php echo esc_html($article['standfirst']); ?>
                    </p>

                <?php endif; ?>


                <div class="wb-article-meta">


                    <div class="wb-article-author">

                        <?php if (! empty($article['author']['image'])) : ?>

                            <img
                                src="<?php echo esc_url($article['author']['image']); ?>"
                                alt="<?php echo esc_attr($article['author']['name']); ?>"
                                width="48"
                                height="48">

                        <?php endif; ?>


                        <div>

                            <strong>
                                <?php echo esc_html($article['author']['name']); ?>
                            </strong>

                            <?php if (! empty($article['author']['role'])) : ?>

                                <span>
                                    <?php echo esc_html($article['author']['role']); ?>
                                </span>

                            <?php endif; ?>

                        </div>

                    </div>


                    <div class="wb-article-meta__item">

                        <span class="wb-meta-label">
                            Published
                        </span>

                        <time>
                            <?php echo esc_html($article['publish_date']); ?>
                        </time>

                    </div>


                    <?php if ($article['show_updated_date']) : ?>

                        <div class="wb-article-meta__item">

                            <span class="wb-meta-label">
                                Updated
                            </span>

                            <time>
                                <?php echo esc_html($article['updated_date']); ?>
                            </time>

                        </div>

                    <?php endif; ?>


                    <div class="wb-article-meta__item">

                        <span class="wb-meta-label">
                            Reading time
                        </span>

                        <span>
                            <?php echo esc_html($article['reading_time']); ?>
                        </span>

                    </div>


                </div>

            </div>


            <!-- Featured Image -->

            <?php if (! empty($article['featured_image'])) : ?>

                <figure class="wb-article-featured">

                    <img
                        src="<?php echo esc_url($article['featured_image']); ?>"
                        alt="<?php echo esc_attr($article['featured_image_alt']); ?>"
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

                        <nav id="wb-article-toc">
                        </nav>

                    </div>

                </aside>


                <!-- Gutenberg Content -->

                <div class="wb-article-content">

                    <?php
                    /*
                     * Static Gutenberg-compatible content for now.
                     *
                     * Later replace this with:
                     *
                     * echo apply_filters(
                     *     'the_content',
                     *     get_the_content()
                     * );
                     */

                    echo apply_filters(
                        'the_content',
                        $article['content']
                    );
                    ?>

                </div>

            </div>


            <!-- =================================================
                 SOURCES
            ================================================== -->

            <?php if (! empty($article['sources'])) : ?>

                <section
                    class="wb-article-sources"
                    aria-labelledby="article-sources-heading">

                    <h2 id="article-sources-heading">
                        Sources
                    </h2>

                    <ul>

                        <?php foreach ($article['sources'] as $source) : ?>

                            <li>

                                <a
                                    href="<?php echo esc_url($source['url']); ?>">

                                    <?php echo esc_html($source['title']); ?>

                                </a>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                </section>

            <?php endif; ?>


            <!-- =================================================
                 AUTHOR INFORMATION
            ================================================== -->

            <section
                class="wb-article-author-box"
                aria-labelledby="article-author-heading">


                <div class="wb-article-author-box__image">

                    <?php if (! empty($article['author']['image'])) : ?>

                        <img
                            src="<?php echo esc_url($article['author']['image']); ?>"
                            alt="<?php echo esc_attr($article['author']['name']); ?>"
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

                        <?php echo esc_html($article['author']['name']); ?>

                    </h2>


                    <?php if (! empty($article['author']['role'])) : ?>

                        <strong>
                            <?php echo esc_html($article['author']['role']); ?>
                        </strong>

                    <?php endif; ?>


                    <?php if (! empty($article['author']['bio'])) : ?>

                        <p>
                            <?php echo esc_html($article['author']['bio']); ?>
                        </p>

                    <?php endif; ?>

                </div>

            </section>


            <!-- =================================================
                 RELATED ARTICLES
            ================================================== -->

            <?php if (! empty($article['related_articles'])) : ?>

                <section
                    class="wb-related-articles"
                    aria-labelledby="related-articles-heading">

                    <div class="wb-section-heading wb-section-heading--center">

                        <span class="wb-eyebrow">
                            Keep reading
                        </span>

                        <h2 id="related-articles-heading">
                            Related articles
                        </h2>

                    </div>


                    <div class="wb-blog-grid">


                        <?php foreach ($article['related_articles'] as $related) : ?>

                            <article class="wb-blog-card">


                                <a
                                    href="<?php echo esc_url($related['url']); ?>"
                                    class="wb-blog-card__image">

                                    <img
                                        src="<?php echo esc_url($related['image']); ?>"
                                        alt="<?php echo esc_attr($related['title']); ?>"
                                        width="800"
                                        height="500"
                                        loading="lazy">

                                </a>


                                <div class="wb-blog-card__content">


                                    <span class="wb-blog-card__category">

                                        <?php echo esc_html($related['category']); ?>

                                    </span>


                                    <h3>

                                        <a
                                            href="<?php echo esc_url($related['url']); ?>">

                                            <?php echo esc_html($related['title']); ?>

                                        </a>

                                    </h3>


                                    <p>

                                        <?php echo esc_html($related['excerpt']); ?>

                                    </p>


                                    <div class="wb-blog-card__meta">

                                        <span>
                                            <?php echo esc_html($related['date']); ?>
                                        </span>

                                        <span>
                                            <?php echo esc_html($related['reading_time']); ?>
                                        </span>

                                    </div>


                                    <a
                                        href="<?php echo esc_url($related['url']); ?>"
                                        class="wb-blog-card__link">

                                        Read article

                                        <span aria-hidden="true">
                                            →
                                        </span>

                                    </a>


                                </div>

                            </article>

                        <?php endforeach; ?>


                    </div>

                </section>

            <?php endif; ?>


        </div>

    </article>


    <!-- =====================================================
         NEWSLETTER
    ====================================================== -->

    <section class="wb-blog-newsletter">

        <div class="wrap">

            <div class="wb-blog-newsletter__inner">


                <div class="wb-blog-newsletter__content">

                    <span class="wb-eyebrow">
                        Stay informed
                    </span>

                    <h2>
                        Useful updates, without the noise.
                    </h2>

                    <p>
                        Get Wunderbuild events, product updates,
                        and builder stories sent straight to your inbox.
                    </p>

                    <small>
                        Only useful updates. Unsubscribe anytime.
                    </small>

                </div>


                <form
                    class="wb-blog-newsletter__form"
                    action="#"
                    method="post">

                    <label
                        for="wb-blog-email"
                        class="screen-reader-text">

                        Email address

                    </label>


                    <input
                        type="email"
                        id="wb-blog-email"
                        name="email"
                        placeholder="Email address"
                        autocomplete="email"
                        required>


                    <button
                        type="submit"
                        class="wb-btn wb-btn--lime">

                        Join

                    </button>

                </form>


            </div>

        </div>

    </section>


    <!-- =====================================================
         FINAL CTA
    ====================================================== -->

    <section class="wb-blog-final-cta">

        <div class="wrap">

            <div class="wb-blog-final-cta__inner">

                <span class="wb-eyebrow">
                    Wunderbuild
                </span>

                <h2>
                    The whole job, in one place.
                </h2>

                <p>
                    See how Wunderbuild keeps the work, the team,
                    and the numbers connected from the first estimate
                    to final handover.
                </p>


                <div class="wb-blog-final-cta__actions">

                    <a
                        href="#"
                        class="wb-btn wb-btn--lime">

                        Start a free trial

                    </a>


                    <a
                        href="#"
                        class="wb-btn wb-btn--dark">

                        Book a free demo

                    </a>

                </div>

            </div>

        </div>

    </section>


</main>


<?php get_footer(); ?>