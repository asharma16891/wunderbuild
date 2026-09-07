<?php

if (!defined('ABSPATH')) {
    exit;
}


/*
|--------------------------------------------------------------------------
| BLOCK FIELDS
|--------------------------------------------------------------------------
*/

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? 'Browse the reviews.';

$wb_reviews = $fields['reviews'] ?? [];


/*
|--------------------------------------------------------------------------
| NORMALIZE REVIEW DATA
|--------------------------------------------------------------------------
*/

$normalized_reviews = [];

if (!empty($wb_reviews) && is_array($wb_reviews)) {

    foreach ($wb_reviews as $index => $review) {

        /*
        |--------------------------------------------------------------------------
        | THUMBNAIL
        |--------------------------------------------------------------------------
        */

        $thumbnail = '';

        if (!empty($review['thumbnail'])) {

            if (is_array($review['thumbnail'])) {
                $thumbnail = $review['thumbnail']['url'] ?? '';
            } else {
                $thumbnail = $review['thumbnail'];
            }
        }


        /*
        |--------------------------------------------------------------------------
        | REVIEW DATA
        |--------------------------------------------------------------------------
        */

        $normalized_reviews[] = [
            'id' => $index + 1,

            'review_type' => $review['review_type'] ?? 'text',

            'review_text' => $review['review_text'] ?? '',

            'rating' => $review['rating'] ?? '',

            'reviewer_name' => $review['reviewer_name'] ?? '',

            'role' => $review['role'] ?? '',

            'company' => $review['company'] ?? '',

            'review_date' => $review['review_date'] ?? '',

            'source_label' => $review['source_label']
    ?? $review['source']
    ?? '',

    'source_url' => $review['source_url'] ?? '',

    'private_source_ref' => $review['private_source_ref'] ?? '',


    /*
    |--------------------------------------------------------------------------
    | VERIFICATION / PERMISSION
    |--------------------------------------------------------------------------
    */

    'verification_status' => $review['verification_status'] ?? '',

    'private_permission_record' => $review['private_permission_record'] ?? '',

      'video_source' => $review['video_source'] ?? '',

            'topic' => $review['topic'] ?? '',

            'thumbnail' => $thumbnail,

            'video_url' => $review['video_url'] ?? '',

            'captions' => $review['captions'] ?? '',

            'duration' => $review['duration'] ?? '',

            'transcript' => $review['transcript'] ?? '',

            'featured' => !empty($review['featured']),

            'featured_order' => $review['featured_order'] ?? 0,

            'private_notes' => $review['private_notes'] ?? '',
        ];
    }
}

$wb_reviews = $normalized_reviews;


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

        /*
        |--------------------------------------------------------------
        | Featured reviews first
        |--------------------------------------------------------------
        */

        if ($a_featured !== $b_featured) {
            return $a_featured ? -1 : 1;
        }


        /*
        |--------------------------------------------------------------
        | Featured order
        |--------------------------------------------------------------
        */

        if ($a_featured && $b_featured) {

            return
                (int) ($a['featured_order'] ?? 999)
                <=>
                (int) ($b['featured_order'] ?? 999);
        }


        /*
        |--------------------------------------------------------------
        | Latest reviews first
        |--------------------------------------------------------------
        */

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

            /*
            |----------------------------------------------------------
            | Review Type
            |----------------------------------------------------------
            */

            if (
                $current_type !== 'all' &&
                ($review['review_type'] ?? '') !== $current_type
            ) {
                return false;
            }


            /*
            |----------------------------------------------------------
            | Review Topic
            |----------------------------------------------------------
            */

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
|--------------------------------------------------------------------------
| SHOW SECONDARY FILTERS
|--------------------------------------------------------------------------
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

if (!function_exists('wb_review_filter_url')) {

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

if (!function_exists('wb_review_rating_markup')) {

    function wb_review_rating_markup($rating)
    {

        if ($rating === '' || $rating === null) {
            return;
        }

        $rating = (float) $rating;

?>

       

<?php
    }
}

?>


<section
    class="wb-reviews-gallery"
    aria-labelledby="wb-reviews-gallery-title">

    <div class="wrap">


        <!-- HEADER -->

        <div class="wb-reviews-gallery__header">

            <div class="section-head">

                <?php if (!empty($heading)) : ?>

                    <h2 id="wb-reviews-gallery-title">

                        <?php echo wp_kses_post($heading); ?>

                    </h2>

                <?php endif; ?>

            </div>


            <!-- PRIMARY FILTERS -->

            <nav
                class="wb-reviews-filter"
                aria-label="Review type filters">

                <a
                    href="<?php echo wb_review_filter_url('all', $current_topic); ?>"
                    class="btn <?php echo $current_type === 'all' ? 'is-active' : ''; ?>"
                    data-review-filter
                    aria-current="<?php echo $current_type === 'all' ? 'page' : 'false'; ?>">

                    All reviews

                </a>


                <a
                    href="<?php echo wb_review_filter_url('text', $current_topic); ?>"
                    class="btn <?php echo $current_type === 'text' ? 'is-active' : ''; ?>"
                    data-review-filter
                    aria-current="<?php echo $current_type === 'text' ? 'page' : 'false'; ?>">

                    Text reviews

                </a>


                <a
                    href="<?php echo wb_review_filter_url('video', $current_topic); ?>"
                    class="btn <?php echo $current_type === 'video' ? 'is-active' : ''; ?>"
                    data-review-filter
                    aria-current="<?php echo $current_type === 'video' ? 'page' : 'false'; ?>">

                    Video reviews

                </a>

            </nav>


            <!-- TOPIC FILTERS -->

           

        </div>


        <!-- STATUS -->

        <div
            class="wb-reviews-status"
            aria-live="polite"
            aria-atomic="true">

            Showing

            <strong>

                <?php echo esc_html($total_reviews); ?>

            </strong>

            <?php echo $total_reviews === 1 ? 'review' : 'reviews'; ?>

        </div>
		
		<div class="wb-reviews-results" id="wb-reviews-results">

    <!-- LOADER -->

    <div
        class="wb-reviews-loader"
        id="wb-reviews-loader"
        aria-hidden="true">

        <div class="wb-reviews-loader__spinner"></div>

        <span>Loading reviews...</span>

    </div>


        <!-- GRID -->

        <div
            class="<?php echo esc_attr($grid_class); ?>"
            id="wb-reviews-grid">

            <?php if (!empty($page_reviews)) : ?>

                <?php foreach ($page_reviews as $review) : ?>

                    <?php

                    /*
                    |--------------------------------------------------------------------------
                    | REVIEW DATA
                    |--------------------------------------------------------------------------
                    */

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

                                        <span aria-hidden="true">

                                            ▶

                                        </span>

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




                                    <?php if (!empty($review['review_text'])) : ?>

                                        <h2 class="wb-review-video__summary type-h5">

                                            <?php
                                            echo esc_html(
                                                $review['review_text']
                                            );
                                            ?>

                                    </h2>

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

                    


                            <?php if (!empty($review['review_text'])) : ?>

                                <blockquote class="type-h5">

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

                <?php echo esc_html($review['source_label']); ?>

            </a>

        <?php else : ?>

            <span>

                <?php echo esc_html($review['source_label']); ?>

            </span>

        <?php endif; ?>

    </div>

<?php endif; ?>


                        <?php endif; ?>

                    </article>

                <?php endforeach; ?>


            <?php else : ?>


                <!-- EMPTY STATE -->

                <div
                    class="wb-reviews-empty"
                    role="status">

                    <h3>No reviews found.</h3>

                    <p>
                        There are no reviews matching the selected filters.
                    </p>

                    <a
                        href="<?php echo esc_url(get_permalink()); ?>"
                        class="wb-reviews-empty__button btn">

                        View all reviews

                    </a>

                </div>

            <?php endif; ?>

        </div>


        <!-- PAGINATION -->

       <!-- LOAD MORE -->

<?php if ($current_page < $total_pages) : ?>

    <div class="wb-reviews-pagination">

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

    </div>

<?php endif; ?>

    </div>
		
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
                aria-label="">
            </div>

            <span class="wb-review-modal__topic"></span>

            <h2 class="type-h5" id="wb-review-modal-title"></h2>

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