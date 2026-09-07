<?php
/**
 * Template Name: Reviews Page
 */

get_header();



$wb_reviews = [

    [
        'id' => 1,
        'review_type' => 'text',
        'review_text' => 'The onboarding team made the transition easy and helped our team learn the system quickly.',
        'rating' => 5,
        'reviewer_name' => 'John Smith',
        'role' => 'Director',
        'company' => 'Smith Building Group',
        'review_date' => '2026-07-18',
        'source_label' => 'Verified customer review',
        'source_url' => '',
        'verification_status' => 'approved',
        'permission_status' => 'approved',

        'video_source' => '',
        'video_url' => '',
        'thumbnail' => '',
        'duration' => '',
        'captions' => '',
        'transcript' => '',

        'topic' => 'support-onboarding',

        'featured' => true,
        'featured_order' => 1,

        'private_source_ref' => '',
        'private_permission_record' => '',
        'private_notes' => '',
    ],

    [
        'id' => 2,
        'review_type' => 'video',
        'review_text' => 'Builder shares how migration and setup worked.',
        'rating' => 5,
        'reviewer_name' => 'Sarah Wilson',
        'role' => 'Estimator',
        'company' => 'Wilson Homes',
        'review_date' => '2026-07-12',
        'source_label' => 'Customer video',
        'source_url' => '',
        'verification_status' => 'approved',
        'permission_status' => 'approved',

        'video_source' => 'uploaded',
        'video_url' => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/13029988_3840_2160_30fps-1.mp4',
        'thumbnail' => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/mqdefault_6s-2-Picsart-AiImageEnhancer.png',
        'duration' => '2:45',
        'captions' => '',
        'transcript' => 'The customer explains how the migration and setup process worked and how the onboarding team helped the business move across.',

        'topic' => 'switching',

        'featured' => true,
        'featured_order' => 2,

        'private_source_ref' => '',
        'private_permission_record' => '',
        'private_notes' => '',
    ],

    [
        'id' => 3,
        'review_type' => 'text',
        'review_text' => 'We were able to move our processes into one place and give the team a much clearer way to manage work.',
        'rating' => 4.5,
        'reviewer_name' => 'Michael Brown',
        'role' => 'Operations Manager',
        'company' => 'Brown Residential',
        'review_date' => '2026-07-05',
        'source_label' => 'Verified customer review',
        'source_url' => '',
        'verification_status' => 'approved',
        'permission_status' => 'approved',

        'video_source' => '',
        'video_url' => '',
        'thumbnail' => '',
        'duration' => '',
        'captions' => '',
        'transcript' => '',

        'topic' => 'value',

        'featured' => false,
        'featured_order' => 0,

        'private_source_ref' => '',
        'private_permission_record' => '',
        'private_notes' => '',
    ],

    [
        'id' => 4,
        'review_type' => 'video',
        'review_text' => 'A builder talks through the day-to-day workflow and how the team uses Wunderbuild.',
        'rating' => 5,
        'reviewer_name' => 'David Taylor',
        'role' => 'Builder',
        'company' => 'Taylor Projects',
        'review_date' => '2026-06-28',
        'source_label' => 'Customer video',
        'source_url' => '',
        'verification_status' => 'approved',
        'permission_status' => 'approved',

        'video_source' => 'uploaded',
        'video_url' => '',
        'thumbnail' => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/review-video-thumb-2.jpg',
        'duration' => '3:12',
        'captions' => '',
        'transcript' => 'The builder discusses how the team uses Wunderbuild in its everyday workflow.',

        'topic' => 'product-workflow',

        'featured' => false,
        'featured_order' => 0,

        'private_source_ref' => '',
        'private_permission_record' => '',
        'private_notes' => '',
    ],

    [
        'id' => 5,
        'review_type' => 'text',
        'review_text' => 'Having the right information available to the team has made it easier to keep jobs moving.',
        'rating' => 5,
        'reviewer_name' => 'Emma Davis',
        'role' => 'Office Manager',
        'company' => 'Davis Construction',
        'review_date' => '2026-06-20',
        'source_label' => 'Verified customer review',
        'source_url' => '',
        'verification_status' => 'approved',
        'permission_status' => 'approved',

        'video_source' => '',
        'video_url' => '',
        'thumbnail' => '',
        'duration' => '',
        'captions' => '',
        'transcript' => '',

        'topic' => 'value',

        'featured' => false,
        'featured_order' => 0,

        'private_source_ref' => '',
        'private_permission_record' => '',
        'private_notes' => '',
    ],

    [
        'id' => 6,
        'review_type' => 'video',
        'review_text' => 'A team member shares their experience with support and onboarding.',
        'rating' => 4.5,
        'reviewer_name' => 'James Wilson',
        'role' => 'Project Manager',
        'company' => 'Wilson Building Co.',
        'review_date' => '2026-06-15',
        'source_label' => 'Customer video',
        'source_url' => '',
        'verification_status' => 'approved',
        'permission_status' => 'approved',

        'video_source' => 'uploaded',
        'video_url' => '',
        'thumbnail' => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/review-video-thumb-3.jpg',
        'duration' => '1:58',
        'captions' => '',
        'transcript' => 'The team member explains their experience with the onboarding and support process.',

        'topic' => 'support-onboarding',

        'featured' => false,
        'featured_order' => 0,

        'private_source_ref' => '',
        'private_permission_record' => '',
        'private_notes' => '',
    ],

    [
        'id' => 7,
        'review_type' => 'video',
        'review_text' => 'A customer explains how having connected information supports the wider team.',
        'rating' => 5,
        'reviewer_name' => 'Olivia Martin',
        'role' => 'Construction Manager',
        'company' => 'Martin Builders',
        'review_date' => '2026-06-10',
        'source_label' => 'Customer video',
        'source_url' => '',
        'verification_status' => 'approved',
        'permission_status' => 'approved',

        'video_source' => 'uploaded',
        'video_url' => '',
        'thumbnail' => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/review-video-thumb-2.jpg',
        'duration' => '2:20',
        'captions' => '',
        'transcript' => 'The customer discusses how connected information helps the team work across different parts of the job.',

        'topic' => 'product-workflow',

        'featured' => false,
        'featured_order' => 0,

        'private_source_ref' => '',
        'private_permission_record' => '',
        'private_notes' => '',
    ],

    [
        'id' => 8,
        'review_type' => 'text',
        'review_text' => 'The team had a clearer process for understanding what needed to happen next and where to get help.',
        'rating' => 4.5,
        'reviewer_name' => 'Daniel Harris',
        'role' => 'Project Coordinator',
        'company' => 'Harris Homes',
        'review_date' => '2026-06-04',
        'source_label' => 'Verified customer review',
        'source_url' => '',
        'verification_status' => 'approved',
        'permission_status' => 'approved',

        'video_source' => '',
        'video_url' => '',
        'thumbnail' => '',
        'duration' => '',
        'captions' => '',
        'transcript' => '',

        'topic' => 'support-onboarding',

        'featured' => false,
        'featured_order' => 0,

        'private_source_ref' => '',
        'private_permission_record' => '',
        'private_notes' => '',
    ],

];


/*
|--------------------------------------------------------------------------
| PUBLICATION FILTER
|--------------------------------------------------------------------------
*/

$wb_reviews = array_values(
    array_filter(
        $wb_reviews,
        function ($review) {

            return
                ($review['verification_status'] ?? '') === 'approved' &&
                ($review['permission_status'] ?? '') === 'approved';
        }
    )
);


/*
|--------------------------------------------------------------------------
| SORT
|--------------------------------------------------------------------------
*/

usort(
    $wb_reviews,
    function ($a, $b) {

        $a_featured = !empty($a['featured']);
        $b_featured = !empty($b['featured']);

        if ($a_featured !== $b_featured) {
            return $a_featured ? -1 : 1;
        }

        if ($a_featured && $b_featured) {
            return
                (int) ($a['featured_order'] ?? 999)
                <=>
                (int) ($b['featured_order'] ?? 999);
        }

        return
            strtotime($b['review_date'] ?? '')
            <=>
            strtotime($a['review_date'] ?? '');
    }
);


/*
|--------------------------------------------------------------------------
| FILTER CONFIG
|--------------------------------------------------------------------------
*/

$allowed_types = [
    'all',
    'text',
    'video',
];

$topic_labels = [
    'product-workflow'   => 'Product & workflow',
    'support-onboarding' => 'Support & onboarding',
    'switching'          => 'Switching to Wunderbuild',
    'value'              => 'Value & business impact',
];

$allowed_topics = array_merge(
    ['all'],
    array_keys($topic_labels)
);


/*
|--------------------------------------------------------------------------
| CURRENT FILTER STATE
|--------------------------------------------------------------------------
*/

$current_type = isset($_GET['review_type'])
    ? sanitize_key($_GET['review_type'])
    : 'all';

$current_topic = isset($_GET['review_topic'])
    ? sanitize_key($_GET['review_topic'])
    : 'all';

$current_page = isset($_GET['review_page'])
    ? max(1, absint($_GET['review_page']))
    : 1;

if (!in_array($current_type, $allowed_types, true)) {
    $current_type = 'all';
}

if (!in_array($current_topic, $allowed_topics, true)) {
    $current_topic = 'all';
}


/*
|--------------------------------------------------------------------------
| FILTER REVIEWS
|--------------------------------------------------------------------------
*/

$filtered_reviews = array_values(
    array_filter(
        $wb_reviews,
        function ($review) use ($current_type, $current_topic) {

            if (
                $current_type !== 'all' &&
                ($review['review_type'] ?? '') !== $current_type
            ) {
                return false;
            }

            if (
                $current_topic !== 'all' &&
                ($review['topic'] ?? '') !== $current_topic
            ) {
                return false;
            }

            return true;
        }
    )
);


/*
|--------------------------------------------------------------------------
| TOPIC COUNTS
|--------------------------------------------------------------------------
*/

$topic_counts = [];

foreach ($wb_reviews as $review) {

    $topic = $review['topic'] ?? '';

    if (!$topic) {
        continue;
    }

    if (!isset($topic_counts[$topic])) {
        $topic_counts[$topic] = 0;
    }

    $topic_counts[$topic]++;
}

/*
| Show only when enough topic content exists.
*/
$show_secondary_filters = count($topic_counts) >= 2;


/*
|--------------------------------------------------------------------------
| PAGINATION
|--------------------------------------------------------------------------
*/

$per_page = 6;

$total_reviews = count($filtered_reviews);

$total_pages = max(
    1,
    (int) ceil($total_reviews / $per_page)
);

$current_page = min(
    $current_page,
    $total_pages
);

$offset = ($current_page - 1) * $per_page;

$page_reviews = array_slice(
    $filtered_reviews,
    $offset,
    $per_page
);


/*
|--------------------------------------------------------------------------
| URL BUILDER
|--------------------------------------------------------------------------
*/

function wb_review_filter_url(
    $type = 'all',
    $topic = 'all',
    $page = 1
) {

    $params = [];

    if ($type !== 'all') {
        $params['review_type'] = $type;
    }

    if ($topic !== 'all') {
        $params['review_topic'] = $topic;
    }

    if ($page > 1) {
        $params['review_page'] = $page;
    }

    $url = get_permalink();

    if (!empty($params)) {
        $url = add_query_arg($params, $url);
    }

    return esc_url($url);
}


/*
|--------------------------------------------------------------------------
| DEFAULT POSTER
|--------------------------------------------------------------------------
*/

$default_review_poster =
    get_template_directory_uri() .
    '/assets/images/Estimates.png';


/*
|--------------------------------------------------------------------------
| GRID STATE
|--------------------------------------------------------------------------
*/

$has_text_reviews = false;
$has_video_reviews = false;

foreach ($page_reviews as $review) {

    if (($review['review_type'] ?? '') === 'video') {
        $has_video_reviews = true;
    }

    if (($review['review_type'] ?? '') === 'text') {
        $has_text_reviews = true;
    }
}

$grid_classes = ['wb-reviews-grid'];

if ($has_video_reviews && !$has_text_reviews) {
    $grid_classes[] = 'wb-reviews-grid--video-only';
}

if (count($page_reviews) === 1) {
    $grid_classes[] = 'wb-reviews-grid--single';
}

$grid_class = implode(' ', $grid_classes);


/*
|--------------------------------------------------------------------------
| RATING HELPER
|--------------------------------------------------------------------------
*/

function wb_review_rating_markup($rating) {

    if ($rating === '' || $rating === null) {
        return;
    }

    $rating = (float) $rating;

    ?>
    <div
        class="wb-review-rating"
        aria-label="<?php echo esc_attr($rating); ?> out of 5 stars">

        <span
            class="wb-review-rating__stars"
            aria-hidden="true">

            <?php echo esc_html('★★★★★'); ?>

        </span>

        <span class="wb-review-rating__number">

            <?php echo esc_html($rating); ?>/5

        </span>

    </div>
    <?php
}

?>


<section
    class="wb-reviews-gallery"
    aria-labelledby="wb-reviews-gallery-title">

    <div class="wrap">

        <div class="wb-reviews-gallery__header">

            <div class="section-head">

                <h2 id="wb-reviews-gallery-title">
                    Browse the reviews.
                </h2>

            </div>


            <!-- PRIMARY FILTERS -->

            <nav
                class="wb-reviews-filter"
                aria-label="Review type filters">

                <a
                    href="<?php echo wb_review_filter_url('all', $current_topic); ?>"
                    class="<?php echo $current_type === 'all' ? 'is-active' : ''; ?>"
                    data-review-filter
                    aria-current="<?php echo $current_type === 'all' ? 'page' : 'false'; ?>">

                    All reviews

                </a>

                <a
                    href="<?php echo wb_review_filter_url('text', $current_topic); ?>"
                    class="<?php echo $current_type === 'text' ? 'is-active' : ''; ?>"
                    data-review-filter
                    aria-current="<?php echo $current_type === 'text' ? 'page' : 'false'; ?>">

                    Text reviews

                </a>

                <a
                    href="<?php echo wb_review_filter_url('video', $current_topic); ?>"
                    class="<?php echo $current_type === 'video' ? 'is-active' : ''; ?>"
                    data-review-filter
                    aria-current="<?php echo $current_type === 'video' ? 'page' : 'false'; ?>">

                    Video reviews

                </a>

            </nav>


            <!-- TOPIC FILTERS -->

            <?php if ($show_secondary_filters) : ?>

                <nav
                    class="wb-reviews-topics"
                    aria-label="Review topic filters">

                    <a
                        href="<?php echo wb_review_filter_url($current_type, 'all'); ?>"
                        class="<?php echo $current_topic === 'all' ? 'is-active' : ''; ?>"
                        data-review-filter>

                        All topics

                    </a>

                    <?php foreach ($topic_labels as $topic_key => $topic_label) : ?>

                        <?php if (empty($topic_counts[$topic_key])) continue; ?>

                        <a
                            href="<?php echo wb_review_filter_url($current_type, $topic_key); ?>"
                            class="<?php echo $current_topic === $topic_key ? 'is-active' : ''; ?>"
                            data-review-filter>

                            <?php echo esc_html($topic_label); ?>

                        </a>

                    <?php endforeach; ?>

                </nav>

            <?php endif; ?>

        </div>


        <!-- STATUS -->

        <div
            class="wb-reviews-status"
            aria-live="polite"
            aria-atomic="true">

            Showing
            <strong><?php echo esc_html($total_reviews); ?></strong>
            <?php echo $total_reviews === 1 ? 'review' : 'reviews'; ?>

        </div>


        <!-- GRID -->

        <div
            class="<?php echo esc_attr($grid_class); ?>"
            id="wb-reviews-grid">

            <?php if (!empty($page_reviews)) : ?>

                <?php foreach ($page_reviews as $review) : ?>

                    <?php

                    $is_video =
                        ($review['review_type'] ?? '') === 'video';

                    $card_class = $is_video
                        ? 'wb-review-card wb-review-card--video'
                        : 'wb-review-card wb-review-card--text';

                    $poster = !empty($review['thumbnail'])
                        ? $review['thumbnail']
                        : $default_review_poster;

                    $formatted_date = !empty($review['review_date'])
                        ? date_i18n(
                            get_option('date_format'),
                            strtotime($review['review_date'])
                        )
                        : '';

                    $topic_key = $review['topic'] ?? '';

                    $topic_label =
                        $topic_labels[$topic_key]
                        ?? $topic_key;

                    ?>

                    <article
                        class="<?php echo esc_attr($card_class); ?>"
                        data-review-id="<?php echo esc_attr($review['id'] ?? ''); ?>"
                        data-review-type="<?php echo esc_attr($review['review_type'] ?? ''); ?>"
                        data-review-topic="<?php echo esc_attr($topic_key); ?>">

                        <?php if ($is_video) : ?>

                            <!-- VIDEO CARD -->

                            <div class="wb-review-video">

                                <div class="wb-review-video__media">

                                    <img
                                        src="<?php echo esc_url($poster); ?>"
                                        alt=""
                                        width="1200"
                                        height="675"
                                        loading="lazy">

                                    <button
                                        type="button"
                                        class="wb-review-video__play"
                                        aria-label="Watch review from <?php echo esc_attr($review['reviewer_name'] ?? 'customer'); ?>"
                                        data-video-open
                                        data-video-url="<?php echo esc_url($review['video_url'] ?? ''); ?>"
                                        data-captions="<?php echo esc_url($review['captions'] ?? ''); ?>"
                                        data-transcript="<?php echo esc_attr($review['transcript'] ?? ''); ?>"
                                        data-poster="<?php echo esc_url($poster); ?>"
                                        data-name="<?php echo esc_attr($review['reviewer_name'] ?? ''); ?>"
                                        data-role="<?php echo esc_attr($review['role'] ?? ''); ?>"
                                        data-company="<?php echo esc_attr($review['company'] ?? ''); ?>"
                                        data-date="<?php echo esc_attr($formatted_date); ?>"
                                        data-date-machine="<?php echo esc_attr($review['review_date'] ?? ''); ?>"
                                        data-rating="<?php echo esc_attr($review['rating'] ?? ''); ?>"
                                        data-topic="<?php echo esc_attr($topic_label); ?>"
                                        data-summary="<?php echo esc_attr($review['review_text'] ?? ''); ?>">

                                        <span aria-hidden="true">▶</span>

                                    </button>

                                    <?php if (!empty($review['duration'])) : ?>

                                        <span class="wb-review-video__duration">

                                            <?php
                                            echo esc_html(
                                                $review['duration']
                                            );
                                            ?>

                                        </span>

                                    <?php endif; ?>

                                </div>


                                <div class="wb-review-video__details">

                                    <div class="wb-review-card__top">

                                        <?php
                                        wb_review_rating_markup(
                                            $review['rating'] ?? ''
                                        );
                                        ?>

                                        <?php if ($topic_label) : ?>

                                            <span class="wb-review-topic">

                                                <?php
                                                echo esc_html(
                                                    $topic_label
                                                );
                                                ?>

                                            </span>

                                        <?php endif; ?>

                                    </div>


                                    <?php if (!empty($review['review_text'])) : ?>

                                        <p class="wb-review-video__summary">

                                            <?php
                                            echo esc_html(
                                                $review['review_text']
                                            );
                                            ?>

                                        </p>

                                    <?php endif; ?>


                                    <div class="wb-review-person">

                                        <?php if (!empty($review['reviewer_name'])) : ?>

                                            <strong>

                                                <?php
                                                echo esc_html(
                                                    $review['reviewer_name']
                                                );
                                                ?>

                                            </strong>

                                        <?php endif; ?>


                                        <?php if (!empty($review['role'])) : ?>

                                            <span>

                                                <?php
                                                echo esc_html(
                                                    $review['role']
                                                );
                                                ?>

                                            </span>

                                        <?php endif; ?>


                                        <?php if (!empty($review['company'])) : ?>

                                            <span>

                                                <?php
                                                echo esc_html(
                                                    $review['company']
                                                );
                                                ?>

                                            </span>

                                        <?php endif; ?>


                                        <?php if ($formatted_date) : ?>

                                            <time
                                                datetime="<?php echo esc_attr($review['review_date']); ?>">

                                                <?php
                                                echo esc_html(
                                                    $formatted_date
                                                );
                                                ?>

                                            </time>

                                        <?php endif; ?>

                                    </div>

                                </div>

                            </div>

                        <?php else : ?>

                            <!-- TEXT CARD -->

                            <div class="wb-review-card__top">

                                <?php
                                wb_review_rating_markup(
                                    $review['rating'] ?? ''
                                );
                                ?>

                                <?php if ($topic_label) : ?>

                                    <span class="wb-review-topic">

                                        <?php
                                        echo esc_html($topic_label);
                                        ?>

                                    </span>

                                <?php endif; ?>

                            </div>


                            <?php if (!empty($review['review_text'])) : ?>

                                <blockquote>

                                    “<?php
                                    echo esc_html(
                                        $review['review_text']
                                    );
                                    ?>”

                                </blockquote>

                            <?php endif; ?>


                            <div class="wb-review-person">

                                <?php if (!empty($review['reviewer_name'])) : ?>

                                    <strong>

                                        <?php
                                        echo esc_html(
                                            $review['reviewer_name']
                                        );
                                        ?>

                                    </strong>

                                <?php endif; ?>


                                <?php if (!empty($review['role'])) : ?>

                                    <span>

                                        <?php
                                        echo esc_html(
                                            $review['role']
                                        );
                                        ?>

                                    </span>

                                <?php endif; ?>


                                <?php if (!empty($review['company'])) : ?>

                                    <span>

                                        <?php
                                        echo esc_html(
                                            $review['company']
                                        );
                                        ?>

                                    </span>

                                <?php endif; ?>


                                <?php if ($formatted_date) : ?>

                                    <time
                                        datetime="<?php echo esc_attr($review['review_date']); ?>">

                                        <?php
                                        echo esc_html(
                                            $formatted_date
                                        );
                                        ?>

                                    </time>

                                <?php endif; ?>

                            </div>


                            <?php if (!empty($review['source_label'])) : ?>

                                <div class="wb-review-source">

                                    <?php if (!empty($review['source_url'])) : ?>

                                        <a
                                            href="<?php echo esc_url($review['source_url']); ?>"
                                            target="_blank"
                                            rel="noopener noreferrer">

                                            <?php
                                            echo esc_html(
                                                $review['source_label']
                                            );
                                            ?>

                                        </a>

                                    <?php else : ?>

                                        <span>

                                            <?php
                                            echo esc_html(
                                                $review['source_label']
                                            );
                                            ?>

                                        </span>

                                    <?php endif; ?>

                                </div>

                            <?php endif; ?>

                        <?php endif; ?>

                    </article>

                <?php endforeach; ?>

            <?php else : ?>

                <div
                    class="wb-reviews-empty"
                    role="status">

                    <h3>No reviews found.</h3>

                    <p>
                        There are no reviews matching the selected filters.
                    </p>

                    <a
                        href="<?php echo esc_url(get_permalink()); ?>"
                        class="wb-reviews-empty__button">

                        View all reviews

                    </a>

                </div>

            <?php endif; ?>

        </div>


        <!-- PAGINATION -->

        <?php if ($total_pages > 1) : ?>

            <div class="wb-reviews-pagination">

                <?php if ($current_page < $total_pages) : ?>

                    <a
                        href="<?php echo wb_review_filter_url(
                            $current_type,
                            $current_topic,
                            $current_page + 1
                        ); ?>"
                        class="wb-reviews-load-more"
                        data-load-more>

                        Load more reviews

                    </a>

                <?php endif; ?>


                <nav
                    class="wb-reviews-pages"
                    aria-label="Reviews pagination">

                    <?php for ($page = 1; $page <= $total_pages; $page++) : ?>

                        <a
                            href="<?php echo wb_review_filter_url(
                                $current_type,
                                $current_topic,
                                $page
                            ); ?>"
                            class="<?php echo $page === $current_page ? 'is-active' : ''; ?>"
                            <?php echo $page === $current_page ? 'aria-current="page"' : ''; ?>>

                            <?php echo esc_html($page); ?>

                        </a>

                    <?php endfor; ?>

                </nav>

            </div>

        <?php endif; ?>

    </div>

</section>


<!-- VIDEO MODAL -->

<div
    class="wb-review-modal"
    id="wb-review-modal"
    hidden
    aria-hidden="true">

    <div
        class="wb-review-modal__overlay"
        data-video-close></div>


    <div
        class="wb-review-modal__dialog"
        role="dialog"
        aria-modal="true"
        aria-labelledby="wb-review-modal-title">

        <button
            class="wb-review-modal__close"
            type="button"
            aria-label="Close video review"
            data-video-close>

            ×

        </button>


        <div class="wb-review-modal__media">

            <video
                class="wb-review-modal__video"
                controls
                playsinline
                preload="metadata"
                hidden>

                <track
                    class="wb-review-modal__captions"
                    kind="captions"
                    srclang="en"
                    label="English">

            </video>


            <div
                class="wb-review-modal__unavailable"
                hidden>

                <img
                    class="wb-review-modal__unavailable-image"
                    src=""
                    alt="">

                <div class="wb-review-modal__unavailable-copy">

                    <strong>
                        Video currently unavailable
                    </strong>

                    <p>
                        The review details are still available below.
                    </p>

                </div>

            </div>

        </div>


        <div class="wb-review-modal__details">

            <div
                class="wb-review-modal__rating"
                aria-label=""></div>

            <span class="wb-review-modal__topic"></span>

            <h2 id="wb-review-modal-title"></h2>

            <p class="wb-review-modal__role"></p>

            <p class="wb-review-modal__date"></p>

            <p class="wb-review-modal__summary"></p>


            <details
                class="wb-review-transcript"
                hidden>

                <summary>
                    View transcript
                </summary>

                <div></div>

            </details>

        </div>

    </div>

</div>


<?php get_footer(); ?>