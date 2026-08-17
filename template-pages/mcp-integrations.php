<?php

/**
 * Template Name: Mcp Integrations Page
 */

get_header();
?>

<?php
/**
 * =========================================================
 * WUNDERBUILD - REVIEWS GALLERY
 * Sections 02 - 07
 * =========================================================
 */

/*
|--------------------------------------------------------------------------
| REVIEW DATA
|--------------------------------------------------------------------------
| Replace these records with your CMS / CPT data later.
| Private fields are intentionally kept in the array but never rendered.
|--------------------------------------------------------------------------
*/

$wb_reviews = [

    [
        'id'                    => 1,
        'review_type'           => 'text',
        'review_text'           => 'The onboarding team made the transition easy and helped our team learn the system quickly.',
        'rating'                => 5,
        'reviewer_name'         => 'John Smith',
        'role'                  => 'Director',
        'company'               => '',
        'review_date'           => '2026-07-18',
        'source_label'          => 'Customer review',
        'source_url'            => '',
        'verification_status'   => 'approved',
        'permission_status'     => 'approved',

        'video_url'             => '',
        'video_source'          => '',
        'thumbnail'             => '',
        'duration'              => '',
        'captions'              => '',
        'transcript'            => '',

        'topic'                 => 'support-onboarding',

        'featured'              => true,
        'featured_order'        => 1,

        // Private CMS fields
        'private_source_ref'    => '',
        'private_permission'    => true,
        'private_notes'         => '',
    ],

    [
        'id'                    => 2,
        'review_type'           => 'video',
        'review_text'           => 'Builder shares how migration and setup worked.',
        'rating'                => 5,
        'reviewer_name'         => 'Sarah Wilson',
        'role'                  => 'Estimator',
        'company'               => '',
        'review_date'           => '2026-07-12',
        'source_label'          => 'Customer video',
        'source_url'            => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/13029988_3840_2160_30fps-1.mp4',
        'verification_status'   => 'approved',
        'permission_status'     => 'approved',

        /*
         * Add real video URL here.
         * Example:
         * https://example.com/review.mp4
         */
        'video_url'             => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/13029988_3840_2160_30fps-1.mp4',
        'video_source'          => 'uploaded',
        'thumbnail'             => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/mqdefault_6s-2-Picsart-AiImageEnhancer.png',
        'duration'              => '2:45',

        /*
         * VTT file for captions.
         */
        'captions'              => '',

        'transcript'            => 'The customer explains how the migration and setup process worked and how the onboarding team helped the business move across.',

        'topic'                 => 'switching',

        'featured'              => true,
        'featured_order'        => 2,

        'private_source_ref'    => '',
        'private_permission'    => true,
        'private_notes'         => '',
    ],

    [
        'id'                    => 3,
        'review_type'           => 'text',
        'review_text'           => 'We were able to move our processes into one place and give the team a much clearer way to manage work.',
        'rating'                => 4.5,
        'reviewer_name'         => 'Michael Brown',
        'role'                  => 'Operations Manager',
        'company'               => '',
        'review_date'           => '2026-07-05',
        'source_label'          => 'Customer review',
        'source_url'            => '',
        'verification_status'   => 'approved',
        'permission_status'     => 'approved',

        'video_url'             => '',
        'video_source'          => '',
        'thumbnail'             => '',
        'duration'              => '',
        'captions'              => '',
        'transcript'            => '',

        'topic'                 => 'value',

        'featured'              => false,
        'featured_order'        => 0,

        'private_source_ref'    => '',
        'private_permission'    => true,
        'private_notes'         => '',
    ],

    [
        'id'                    => 4,
        'review_type'           => 'video',
        'review_text'           => 'A builder talks through the day-to-day workflow and how the team uses Wunderbuild.',
        'rating'                => 5,
        'reviewer_name'         => 'David Taylor',
        'role'                  => 'Builder',
        'company'               => '',
        'review_date'           => '2026-06-28',
        'source_label'          => 'Customer video',
        'source_url'            => '',
        'verification_status'   => 'approved',
        'permission_status'     => 'approved',

        'video_url'             => '',
        'video_source'          => 'uploaded',
        'thumbnail'             => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/review-video-thumb-2.jpg',
        'duration'              => '3:12',
        'captions'              => '',
        'transcript'            => 'The builder discusses how the team uses Wunderbuild in its everyday workflow.',

        'topic'                 => 'product-workflow',

        'featured'              => false,
        'featured_order'        => 0,

        'private_source_ref'    => '',
        'private_permission'    => true,
        'private_notes'         => '',
    ],

    [
        'id'                    => 5,
        'review_type'           => 'text',
        'review_text'           => 'Having the right information available to the team has made it easier to keep jobs moving.',
        'rating'                => 5,
        'reviewer_name'         => 'Emma Davis',
        'role'                  => 'Office Manager',
        'company'               => '',
        'review_date'           => '2026-06-20',
        'source_label'          => 'Customer review',
        'source_url'            => '',
        'verification_status'   => 'approved',
        'permission_status'     => 'approved',

        'video_url'             => '',
        'video_source'          => '',
        'thumbnail'             => '',
        'duration'              => '',
        'captions'              => '',
        'transcript'            => '',

        'topic'                 => 'value',

        'featured'              => false,
        'featured_order'        => 0,

        'private_source_ref'    => '',
        'private_permission'    => true,
        'private_notes'         => '',
    ],

    [
        'id'                    => 6,
        'review_type'           => 'video',
        'review_text'           => 'A team member shares their experience with support and onboarding.',
        'rating'                => 4.5,
        'reviewer_name'         => 'James Wilson',
        'role'                  => 'Project Manager',
        'company'               => '',
        'review_date'           => '2026-06-15',
        'source_label'          => 'Customer video',
        'source_url'            => '',
        'verification_status'   => 'approved',
        'permission_status'     => 'approved',

        'video_url'             => '',
        'video_source'          => 'uploaded',
        'thumbnail'             => 'https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/review-video-thumb-3.jpg',
        'duration'              => '1:58',
        'captions'              => '',
        'transcript'            => 'The team member explains their experience with the onboarding and support process.',

        'topic'                 => 'support-onboarding',

        'featured'              => false,
        'featured_order'        => 0,

        'private_source_ref'    => '',
        'private_permission'    => true,
        'private_notes'         => '',
    ],

];


/*
|--------------------------------------------------------------------------
| ONLY APPROVED REVIEWS CAN APPEAR PUBLICLY
|--------------------------------------------------------------------------
*/

$wb_reviews = array_values(
    array_filter($wb_reviews, function ($review) {

        return (
            isset($review['verification_status']) &&
            $review['verification_status'] === 'approved' &&
            isset($review['permission_status']) &&
            $review['permission_status'] === 'approved'
        );
    })
);


/*
|--------------------------------------------------------------------------
| SORT
|--------------------------------------------------------------------------
| Featured reviews first in manual order.
| Remaining reviews newest first.
|--------------------------------------------------------------------------
*/

usort($wb_reviews, function ($a, $b) {

    if ($a['featured'] !== $b['featured']) {
        return $a['featured'] ? -1 : 1;
    }

    if ($a['featured'] && $b['featured']) {
        return $a['featured_order'] <=> $b['featured_order'];
    }

    return strtotime($b['review_date']) <=> strtotime($a['review_date']);
});


/*
|--------------------------------------------------------------------------
| FILTER VALUES
|--------------------------------------------------------------------------
*/

$allowed_types = [
    'all',
    'text',
    'video'
];

$allowed_topics = [
    'all',
    'product-workflow',
    'support-onboarding',
    'switching',
    'value'
];


$current_type = isset($_GET['review_type'])
    ? sanitize_key($_GET['review_type'])
    : 'all';

$current_topic = isset($_GET['review_topic'])
    ? sanitize_key($_GET['review_topic'])
    : 'all';

$current_page = isset($_GET['review_page'])
    ? max(1, absint($_GET['review_page']))
    : 1;


/*
|--------------------------------------------------------------------------
| VALIDATE FILTERS
|--------------------------------------------------------------------------
*/

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

$filtered_reviews = array_filter(
    $wb_reviews,
    function ($review) use ($current_type, $current_topic) {

        if (
            $current_type !== 'all' &&
            $review['review_type'] !== $current_type
        ) {
            return false;
        }

        if (
            $current_topic !== 'all' &&
            $review['topic'] !== $current_topic
        ) {
            return false;
        }

        return true;
    }
);

$filtered_reviews = array_values($filtered_reviews);


<<<<<<< Updated upstream
/*
|--------------------------------------------------------------------------
| SECONDARY FILTER VISIBILITY
|--------------------------------------------------------------------------
| Only show topic filters if there is enough topic content.
|--------------------------------------------------------------------------
*/
=======
      

    </div>

</section>


<section>

  <!-- PRODUCT RECORDING -->
        <div class="mcp-hero__media">
>>>>>>> Stashed changes

$topic_counts = [];

foreach ($wb_reviews as $review) {

    if (!empty($review['topic'])) {

        if (!isset($topic_counts[$review['topic']])) {
            $topic_counts[$review['topic']] = 0;
        }

        $topic_counts[$review['topic']]++;
    }
}

$show_secondary_filters = count($topic_counts) >= 2;


/*
|--------------------------------------------------------------------------
| PAGINATION
|--------------------------------------------------------------------------
*/

$per_page = 6;

<<<<<<< Updated upstream
$total_reviews = count($filtered_reviews);

$total_pages = max(
    1,
    (int) ceil($total_reviews / $per_page)
);

$current_page = min(
    $current_page,
    $total_pages
);
=======
        </div>
</section>
>>>>>>> Stashed changes

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

function wb_review_filter_url($type = 'all', $topic = 'all', $page = 1)
{
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
| TOPIC LABELS
|--------------------------------------------------------------------------
*/

$topic_labels = [

    'product-workflow'   => 'Product & workflow',
    'support-onboarding' => 'Support & onboarding',
    'switching'          => 'Switching to Wunderbuild',
    'value'              => 'Value & business impact',

];

?>


<?php
/**
 * Wunderbuild Reviews Gallery
 *
 * PHP handles:
 * - Review data
 * - Filters
 * - Sorting
 * - Pagination
 * - Card markup
 *
 * JS only handles:
 * - AJAX-like filter navigation
 * - Browser history
 * - Video modal
 */

/*
|--------------------------------------------------------------------------
| SAFETY DEFAULTS
|--------------------------------------------------------------------------
*/

$current_type  = isset($current_type) ? $current_type : 'all';
$current_topic = isset($current_topic) ? $current_topic : 'all';

$page_reviews = isset($page_reviews) && is_array($page_reviews)
    ? $page_reviews
    : array();

$topic_labels = isset($topic_labels) && is_array($topic_labels)
    ? $topic_labels
    : array();

$topic_counts = isset($topic_counts) && is_array($topic_counts)
    ? $topic_counts
    : array();

$total_reviews = isset($total_reviews)
    ? (int) $total_reviews
    : count($page_reviews);

$total_pages = isset($total_pages)
    ? (int) $total_pages
    : 1;

$current_page = isset($current_page)
    ? (int) $current_page
    : 1;

$offset = isset($offset)
    ? (int) $offset
    : 0;


/*
|--------------------------------------------------------------------------
| SECONDARY FILTER VISIBILITY
|--------------------------------------------------------------------------
*/

$show_secondary_filters = !empty($show_secondary_filters);


/*
|--------------------------------------------------------------------------
| LAYOUT STATE
|--------------------------------------------------------------------------
|
| Important:
|
| Mixed:
| - Video = wider 2-column treatment
| - Text = normal 1-column
|
| Video only:
| - Videos become normal cards
| - So multiple videos can appear together
|
*/

$has_text_reviews  = false;
$has_video_reviews = false;

foreach ($page_reviews as $review) {
    if (($review['review_type'] ?? '') === 'video') {
        $has_video_reviews = true;
    } else {
        $has_text_reviews = true;
    }
}

$video_only = $has_video_reviews && !$has_text_reviews;
$single_review = count($page_reviews) === 1;

$grid_classes = array('wb-reviews-grid');

if ($video_only) {
    $grid_classes[] = 'wb-reviews-grid--video-only';
}

if ($single_review) {
    $grid_classes[] = 'wb-reviews-grid--single';
}

$grid_class = implode(' ', $grid_classes);
?>

<?php
/**
 * Wunderbuild Reviews Gallery
 *
 * Backend / ACF data remains the source of truth.
 */


/*
|--------------------------------------------------------------------------
| DEFAULT POSTER
|--------------------------------------------------------------------------
|
| For now use one common poster image.
|
| Upload:
| /wp-content/themes/YOUR-THEME/assets/images/review-poster.jpg
|
| Later backend can replace this with ACF thumbnail.
|
*/

$default_review_poster = get_template_directory_uri() . '/assets/images/Estimates.png';

?>


<section
    class="wb-reviews-gallery"
    aria-labelledby="wb-reviews-gallery-title"
>

    <div class="wb-reviews-gallery__inner">


        <!-- =========================================================
             HEADER
        ========================================================== -->

        <div class="wb-reviews-gallery__header">

            <div class="wb-reviews-gallery__heading">

                <span class="wb-reviews-gallery__eyebrow">
                    Customer reviews
                </span>

                <h2 id="wb-reviews-gallery-title">
                    Browse the reviews.
                </h2>

                <p>
                    See what builders and their teams say about
                    Wunderbuild, from switching and onboarding
                    through to everyday workflows and business impact.
                </p>

            </div>


            <!-- =====================================================
                 PRIMARY FILTERS
            ====================================================== -->

            <nav
                class="wb-reviews-filter"
                aria-label="Review type filters"
            >

                <!-- ALL -->

                <a
                    class="<?php echo $current_type === 'all' ? 'is-active' : ''; ?>"
                    href="<?php echo esc_url(
                        wb_review_filter_url('all', $current_topic)
                    ); ?>"
                    data-review-filter
                    data-type="all"
                    data-topic="<?php echo esc_attr($current_topic); ?>"
                    aria-current="<?php echo $current_type === 'all' ? 'page' : 'false'; ?>"
                >
                    All reviews
                </a>


                <!-- TEXT -->

                <a
                    class="<?php echo $current_type === 'text' ? 'is-active' : ''; ?>"
                    href="<?php echo esc_url(
                        wb_review_filter_url('text', $current_topic)
                    ); ?>"
                    data-review-filter
                    data-type="text"
                    data-topic="<?php echo esc_attr($current_topic); ?>"
                    aria-current="<?php echo $current_type === 'text' ? 'page' : 'false'; ?>"
                >
                    Text reviews
                </a>


                <!-- VIDEO -->

                <a
                    class="<?php echo $current_type === 'video' ? 'is-active' : ''; ?>"
                    href="<?php echo esc_url(
                        wb_review_filter_url('video', $current_topic)
                    ); ?>"
                    data-review-filter
                    data-type="video"
                    data-topic="<?php echo esc_attr($current_topic); ?>"
                    aria-current="<?php echo $current_type === 'video' ? 'page' : 'false'; ?>"
                >
                    Video reviews
                </a>

            </nav>


            <!-- =====================================================
                 SECONDARY TOPIC FILTERS
            ====================================================== -->

            <?php if ($show_secondary_filters) : ?>

                <nav
                    class="wb-reviews-topics"
                    aria-label="Review topic filters"
                >

                    <!-- ALL TOPICS -->

                    <a
                        class="<?php echo $current_topic === 'all' ? 'is-active' : ''; ?>"
                        href="<?php echo esc_url(
                            wb_review_filter_url($current_type, 'all')
                        ); ?>"
                        data-review-filter
                        data-type="<?php echo esc_attr($current_type); ?>"
                        data-topic="all"
                    >
                        All topics
                    </a>


                    <?php foreach ($topic_labels as $topic_key => $topic_label) : ?>

                        <?php

                        $topic_count = isset($topic_counts[$topic_key])
                            ? $topic_counts[$topic_key]
                            : 0;

                        if ($topic_count < 1) {
                            continue;
                        }

                        ?>

                        <a
                            class="<?php echo $current_topic === $topic_key ? 'is-active' : ''; ?>"
                            href="<?php echo esc_url(
                                wb_review_filter_url(
                                    $current_type,
                                    $topic_key
                                )
                            ); ?>"
                            data-review-filter
                            data-type="<?php echo esc_attr($current_type); ?>"
                            data-topic="<?php echo esc_attr($topic_key); ?>"
                        >
                            <?php echo esc_html($topic_label); ?>
                        </a>

                    <?php endforeach; ?>

                </nav>

            <?php endif; ?>

        </div>


        <!-- =========================================================
             RESULTS STATUS
        ========================================================== -->

        <div
            class="wb-reviews-status"
            data-review-status
            aria-live="polite"
            aria-atomic="true"
        >

            Showing

            <strong>
                <?php echo esc_html($total_reviews); ?>
            </strong>

            <?php echo $total_reviews === 1 ? 'review' : 'reviews'; ?>

        </div>


        <!-- =========================================================
             REVIEWS GRID
        ========================================================== -->

        <div
            class="
                wb-reviews-grid
                <?php
                echo count($page_reviews) === 1
                    ? 'wb-reviews-grid--single'
                    : '';
                ?>
            "
            id="wb-reviews-grid"
        >


            <?php if (!empty($page_reviews)) : ?>


                <?php foreach ($page_reviews as $index => $review) : ?>

                    <?php

                    $is_video = ($review['review_type'] ?? '') === 'video';

                    $card_class = $is_video
                        ? 'wb-review-card wb-review-card--video'
                        : 'wb-review-card wb-review-card--text';


                    /*
                    |--------------------------------------------------------------------------
                    | POSTER
                    |--------------------------------------------------------------------------
                    */

                    $poster = !empty($review['thumbnail'])
                        ? $review['thumbnail']
                        : $default_review_poster;


                    /*
                    |--------------------------------------------------------------------------
                    | DATE
                    |--------------------------------------------------------------------------
                    */

                    $formatted_date = !empty($review['review_date'])
                        ? date_i18n(
                            get_option('date_format'),
                            strtotime($review['review_date'])
                        )
                        : '';

                    ?>


                    <article
                        class="<?php echo esc_attr($card_class); ?>"
                        data-review-type="<?php echo esc_attr(
                            $review['review_type'] ?? ''
                        ); ?>"
                        data-review-topic="<?php echo esc_attr(
                            $review['topic'] ?? ''
                        ); ?>"
                    >


                        <?php if ($is_video) : ?>

                            <!-- =================================================
                                 VIDEO CARD
                            ================================================== -->

                            <div class="wb-review-video">


                                <!-- VIDEO IMAGE -->

                                <div class="wb-review-video__media">

                                    <img
                                        src="<?php echo esc_url($poster); ?>"
                                        alt=""
                                        loading="lazy"
                                    >


                                    <!-- PLAY BUTTON -->

                                    <button
                                        class="wb-review-video__play"
                                        type="button"
                                        aria-label="Watch review from <?php echo esc_attr(
                                            $review['reviewer_name'] ?? ''
                                        ); ?>"
                                        data-video-open
                                        data-video-url="<?php echo esc_url(
                                            $review['video_url'] ?? ''
                                        ); ?>"
                                        data-captions="<?php echo esc_url(
                                            $review['captions'] ?? ''
                                        ); ?>"
                                        data-transcript="<?php echo esc_attr(
                                            $review['transcript'] ?? ''
                                        ); ?>"
                                    >

                                        <span aria-hidden="true">
                                            ▶
                                        </span>

                                    </button>


                                    <!-- DURATION -->

                                    <?php if (!empty($review['duration'])) : ?>

                                        <span class="wb-review-video__duration">
                                            <?php echo esc_html(
                                                $review['duration']
                                            ); ?>
                                        </span>

                                    <?php endif; ?>

                                </div>


                                <!-- VIDEO DETAILS -->

                                <div class="wb-review-video__details">


                                    <!-- TOP -->

                                    <div class="wb-review-card__top">

                                        <span class="wb-review-card__number">
                                            <?php echo sprintf(
                                                '%02d',
                                                $offset + $index + 1
                                            ); ?>
                                        </span>


                                        <?php if (!empty($review['rating'])) : ?>

                                            <div
                                                class="wb-review-rating"
                                                aria-label="<?php echo esc_attr(
                                                    $review['rating']
                                                ); ?> out of 5"
                                            >

                                                <span
                                                    class="wb-review-rating__stars"
                                                    aria-hidden="true"
                                                >
                                                    ★★★★★
                                                </span>

                                                <span>
                                                    <?php echo esc_html(
                                                        $review['rating']
                                                    ); ?>
                                                </span>

                                            </div>

                                        <?php endif; ?>

                                    </div>


                                    <!-- TOPIC -->

                                    <?php if (!empty($review['topic'])) : ?>

                                        <span class="wb-review-topic">

                                            <?php
                                            echo esc_html(
                                                $topic_labels[
                                                    $review['topic']
                                                ] ?? $review['topic']
                                            );
                                            ?>

                                        </span>

                                    <?php endif; ?>


                                    <!-- SUMMARY -->

                                    <p class="wb-review-video__summary">

                                        <?php echo esc_html(
                                            $review['review_text'] ?? ''
                                        ); ?>

                                    </p>


                                    <!-- PERSON -->

                                    <div class="wb-review-person">

                                        <strong>
                                            <?php echo esc_html(
                                                $review['reviewer_name'] ?? ''
                                            ); ?>
                                        </strong>


                                        <?php if (!empty($review['role'])) : ?>

                                            <span>
                                                <?php echo esc_html(
                                                    $review['role']
                                                ); ?>
                                            </span>

                                        <?php endif; ?>


                                        <?php if (!empty($review['company'])) : ?>

                                            <span>
                                                <?php echo esc_html(
                                                    $review['company']
                                                ); ?>
                                            </span>

                                        <?php endif; ?>


                                        <?php if (!empty($formatted_date)) : ?>

                                            <time
                                                datetime="<?php echo esc_attr(
                                                    $review['review_date']
                                                ); ?>"
                                            >
                                                <?php echo esc_html(
                                                    $formatted_date
                                                ); ?>
                                            </time>

                                        <?php endif; ?>

                                    </div>

                                </div>

                            </div>


                        <?php else : ?>

                            <!-- =================================================
                                 TEXT REVIEW CARD
                            ================================================== -->

                            <div class="wb-review-card__top">

                                <span class="wb-review-card__number">
                                    <?php echo sprintf(
                                        '%02d',
                                        $offset + $index + 1
                                    ); ?>
                                </span>


                                <?php if (!empty($review['rating'])) : ?>

                                    <div
                                        class="wb-review-rating"
                                        aria-label="<?php echo esc_attr(
                                            $review['rating']
                                        ); ?> out of 5"
                                    >

                                        <span
                                            class="wb-review-rating__stars"
                                            aria-hidden="true"
                                        >
                                            ★★★★★
                                        </span>

                                        <span>
                                            <?php echo esc_html(
                                                $review['rating']
                                            ); ?>
                                        </span>

                                    </div>

                                <?php endif; ?>

                            </div>


                            <?php if (!empty($review['topic'])) : ?>

                                <span class="wb-review-topic">

                                    <?php
                                    echo esc_html(
                                        $topic_labels[
                                            $review['topic']
                                        ] ?? $review['topic']
                                    );
                                    ?>

                                </span>

                            <?php endif; ?>


                            <blockquote>

                                “<?php echo esc_html(
                                    $review['review_text'] ?? ''
                                ); ?>”

                            </blockquote>


                            <div class="wb-review-person">

                                <strong>
                                    <?php echo esc_html(
                                        $review['reviewer_name'] ?? ''
                                    ); ?>
                                </strong>


                                <?php if (!empty($review['role'])) : ?>

                                    <span>
                                        <?php echo esc_html(
                                            $review['role']
                                        ); ?>
                                    </span>

                                <?php endif; ?>


                                <?php if (!empty($review['company'])) : ?>

                                    <span>
                                        <?php echo esc_html(
                                            $review['company']
                                        ); ?>
                                    </span>

                                <?php endif; ?>


                                <?php if (!empty($formatted_date)) : ?>

                                    <time
                                        datetime="<?php echo esc_attr(
                                            $review['review_date']
                                        ); ?>"
                                    >
                                        <?php echo esc_html(
                                            $formatted_date
                                        ); ?>
                                    </time>

                                <?php endif; ?>

                            </div>


                            <?php if (!empty($review['source_label'])) : ?>

                                <div class="wb-review-source">

                                    <?php if (!empty($review['source_url'])) : ?>

                                        <a
                                            href="<?php echo esc_url(
                                                $review['source_url']
                                            ); ?>"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        >
                                            <?php echo esc_html(
                                                $review['source_label']
                                            ); ?>
                                        </a>

                                    <?php else : ?>

                                        <span>
                                            <?php echo esc_html(
                                                $review['source_label']
                                            ); ?>
                                        </span>

                                    <?php endif; ?>

                                </div>

                            <?php endif; ?>


                        <?php endif; ?>

                    </article>


                <?php endforeach; ?>


            <?php else : ?>


                <!-- =========================================================
                     EMPTY STATE
                ========================================================== -->

                <div
                    class="wb-reviews-empty"
                    role="status"
                >

                    <span
                        class="wb-reviews-empty__icon"
                        aria-hidden="true"
                    >
                        —
                    </span>


                    <h3>
                        No reviews found.
                    </h3>


                    <p>
                        There are no reviews matching the selected filters.
                        Try another review type or topic.
                    </p>


                    <a
                        href="<?php echo esc_url(get_permalink()); ?>"
                        class="wb-reviews-empty__button"
                    >
                        View all reviews
                    </a>

                </div>


            <?php endif; ?>

        </div>


        <!-- =========================================================
             PAGINATION
        ========================================================== -->

        <?php if ($total_pages > 1) : ?>

            <div class="wb-reviews-pagination">


                <!-- LOAD MORE -->

                <?php if ($current_page < $total_pages) : ?>

                    <a
                        href="<?php echo esc_url(
                            wb_review_filter_url(
                                $current_type,
                                $current_topic,
                                $current_page + 1
                            )
                        ); ?>"
                        class="wb-reviews-load-more"
                        data-load-more
                    >
                        Load more reviews
                    </a>

                <?php endif; ?>


                <!-- PAGINATION -->

                <nav
                    class="wb-reviews-pages"
                    aria-label="Reviews pagination"
                >

                    <?php for (
                        $page = 1;
                        $page <= $total_pages;
                        $page++
                    ) : ?>

                        <a
                            href="<?php echo esc_url(
                                wb_review_filter_url(
                                    $current_type,
                                    $current_topic,
                                    $page
                                )
                            ); ?>"
                            class="<?php echo $page === $current_page
                                ? 'is-active'
                                : ''; ?>"
                            <?php
                            echo $page === $current_page
                                ? 'aria-current="page"'
                                : '';
                            ?>
                        >
                            <?php echo esc_html($page); ?>
                        </a>

                    <?php endfor; ?>

                </nav>

            </div>

        <?php endif; ?>

    </div>

</section>



<!-- ================================================================
     VIDEO MODAL
================================================================ -->

<div
    class="wb-review-modal"
    id="wb-review-modal"
    hidden
    aria-hidden="true"
>


    <!-- OVERLAY -->

    <div
        class="wb-review-modal__overlay"
        data-video-close
    ></div>


    <!-- DIALOG -->

    <div
        class="wb-review-modal__dialog"
        role="dialog"
        aria-modal="true"
        aria-labelledby="wb-review-modal-title"
    >


        <!-- CLOSE -->

        <button
            class="wb-review-modal__close"
            type="button"
            aria-label="Close video review"
            data-video-close
        >
            ×
        </button>


        <!-- =========================================================
             MEDIA
        ========================================================== -->

        <div class="wb-review-modal__media">


            <!-- VIDEO -->

            <video
                class="wb-review-modal__video"
                controls
                playsinline
                preload="metadata"
                hidden
            >

                <track
                    class="wb-review-modal__captions"
                    kind="captions"
                    srclang="en"
                    label="English"
                    hidden
                >

            </video>


            <!-- UNAVAILABLE -->

            <div
                class="wb-review-modal__unavailable"
                hidden
            >

                <img
                    src="<?php echo esc_url(
                        $default_review_poster
                    ); ?>"
                    alt=""
                >

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


        <!-- =========================================================
             REVIEW DETAILS
        ========================================================== -->

        <div class="wb-review-modal__details">


            <!-- RATING -->

            <div class="wb-review-modal__rating"></div>


            <!-- TOPIC -->

            <span class="wb-review-modal__topic wb-review-topic"></span>


            <!-- NAME -->

            <h2 id="wb-review-modal-title"></h2>


            <!-- ROLE -->

            <p class="wb-review-modal__role"></p>


            <!-- REVIEW -->

            <p class="wb-review-modal__summary"></p>


            <!-- TRANSCRIPT -->

            <details
                class="wb-review-transcript"
                hidden
            >

                <summary>
                    View transcript
                </summary>

                <div></div>

            </details>


        </div>

    </div>

</div>


<!-- =========================================================
     VIDEO MODAL
========================================================== -->










<?php
get_footer();
