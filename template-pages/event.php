<?php

/**
 * Template Name: Events
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();





/*
|--------------------------------------------------------------------------
| RENDER HERO / FIRST BLOCK
|--------------------------------------------------------------------------
*/

if (!empty($page_blocks[0])) {

    echo render_block($page_blocks[0]);

}



/*
|--------------------------------------------------------------------------
| GET EVENTS FROM EVENT CPT
|--------------------------------------------------------------------------
*/

$event_posts = get_posts(array(
    'post_type'      => 'event',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'meta_value',
    'meta_key'       => 'date',
    'order'          => 'ASC',
));


/*
|--------------------------------------------------------------------------
| PREPARE EVENT DATA
|--------------------------------------------------------------------------
*/

$events = array();

if (!empty($event_posts)) {

    foreach ($event_posts as $event_post) {

        /*
        |--------------------------------------------------------------------------
        | ACF FIELDS
        |--------------------------------------------------------------------------
        */

        $fields = get_fields($event_post->ID);

        if (empty($fields)) {
            $fields = array();
        }


        /*
        |--------------------------------------------------------------------------
        | IMAGE
        |--------------------------------------------------------------------------
        */

        $image = $fields['image'] ?? '';


        /*
        |--------------------------------------------------------------------------
        | BASIC EVENT DATA
        |--------------------------------------------------------------------------
        */

        $relationship = $fields['relationship'] ?? '';
        $format       = $fields['format'] ?? '';
        $description  = $fields['description'] ?? '';
        $date         = $fields['date'] ?? '';
        $start_time   = $fields['start_time'] ?? '';
        $end_time     = $fields['end_time'] ?? '';
        $timezone     = $fields['timezone'] ?? '';
        $location     = $fields['location'] ?? '';
        $price        = $fields['price'] ?? '';

        $registration_status = $fields['registration_status'] ?? '';

        $button_text = $fields['button_text'] ?? '';
        $button_url  = $fields['button_url'] ?? '';

        $featured = !empty($fields['featured']);

        $featured_order = $fields['featured_order'] ?? '';

        $recording = $fields['recording'] ?? '';
        $recap     = $fields['recap'] ?? '';

        $partner_logos = $fields['partner_logos'] ?? '';


        /*
        |--------------------------------------------------------------------------
        | FILTER SLUGS
        |--------------------------------------------------------------------------
        */

        $relationship_slug = sanitize_title($relationship);

        $format_slug = sanitize_title($format);


        /*
        |--------------------------------------------------------------------------
        | CREATE EVENT ARRAY
        |--------------------------------------------------------------------------
        */

        $events[] = array(
            'id'                  => $event_post->ID,
            'title'               => get_the_title($event_post->ID),
            'permalink'           => get_permalink($event_post->ID),

            'image'               => $image,

            'relationship'        => $relationship,
            'relationship_slug'   => $relationship_slug,

            'format'              => $format,
            'format_slug'         => $format_slug,

            'description'         => $description,

            'date'                => $date,

            'start_time'          => $start_time,
            'end_time'            => $end_time,
            'timezone'            => $timezone,

            'location'            => $location,

            'price'               => $price,

            'registration_status' => $registration_status,

            'button_text'         => $button_text,
            'button_url'          => $button_url,

            'featured'            => $featured,
            'featured_order'      => $featured_order,

            'recording'           => $recording,
            'recap'               => $recap,

            'partner_logos'       => $partner_logos,
        );
    }
}


/*
|--------------------------------------------------------------------------
| SORT EVENTS BY DATE
|--------------------------------------------------------------------------
*/

if (!empty($events)) {

    usort($events, function ($a, $b) {

        $date_a = !empty($a['date'])
            ? strtotime($a['date'])
            : PHP_INT_MAX;

        $date_b = !empty($b['date'])
            ? strtotime($b['date'])
            : PHP_INT_MAX;

        return $date_a <=> $date_b;
    });
}


/*
|--------------------------------------------------------------------------
| FIND FEATURED EVENT
|--------------------------------------------------------------------------
*/

$featured_event = null;

if (!empty($events)) {

    foreach ($events as $event) {

        if (!empty($event['featured'])) {

            $featured_event = $event;

            break;
        }
    }
}


/*
|--------------------------------------------------------------------------
| FILTER OPTIONS
|--------------------------------------------------------------------------
*/

$relationship_filters = array(
    array(
        'label' => 'All events',
        'value' => 'all',
    ),
    array(
        'label' => 'Wunderbuild events',
        'value' => 'wunderbuild-events',
    ),
    array(
        'label' => 'Co-hosted events',
        'value' => 'co-hosted-events',
    ),
    array(
        'label' => 'Supported events',
        'value' => 'supported-events',
    ),
);


$format_filters = array(
    array(
        'label' => 'All formats',
        'value' => 'all',
    ),
    array(
        'label' => 'In person',
        'value' => 'in-person',
    ),
    array(
        'label' => 'Online',
        'value' => 'online',
    ),
    array(
        'label' => 'Hybrid',
        'value' => 'hybrid',
    ),
);

?>

<main class="wb-events-page">



    


    <!-- =========================================================
         SECTION 01: ARCHIVE CONTROLS
    ========================================================== -->

    <section class="wb-events-controls section-global">

        <div class="wrap">

            <div class="section-head">

                <h2>
                    Find the right event.
                </h2>

            </div>


            <div class="wb-event-filters">


                <!-- =================================================
                     RELATIONSHIP FILTER
                ================================================== -->

                <div class="wb-event-filter">

                    <span class="wb-event-filter__label">
                        Event type
                    </span>


                    <button
                        type="button"
                        class="wb-event-dropdown"
                        data-filter-trigger="relationship"
                        aria-expanded="false">

                        <span data-filter-value="relationship">
                            All events
                        </span>

                        <span class="wb-event-dropdown__arrow">
                            ↓
                        </span>

                    </button>


                    <div
                        class="wb-event-dropdown__menu"
                        data-filter-menu="relationship">

                        <?php foreach ($relationship_filters as $filter) : ?>

                            <button
                                type="button"
                                class="<?php echo $filter['value'] === 'all' ? 'is-selected' : ''; ?>"
                                data-filter="relationship"
                                data-value="<?php echo esc_attr($filter['value']); ?>">

                                <?php echo esc_html($filter['label']); ?>

                            </button>

                        <?php endforeach; ?>

                    </div>

                </div>


                <!-- =================================================
                     FORMAT FILTER
                ================================================== -->

                <div class="wb-event-filter">

                    <span class="wb-event-filter__label">
                        Format
                    </span>


                    <button
                        type="button"
                        class="wb-event-dropdown"
                        data-filter-trigger="format"
                        aria-expanded="false">

                        <span data-filter-value="format">
                            All formats
                        </span>

                        <span class="wb-event-dropdown__arrow">
                            ↓
                        </span>

                    </button>


                    <div
                        class="wb-event-dropdown__menu"
                        data-filter-menu="format">

                        <?php foreach ($format_filters as $filter) : ?>

                            <button
                                type="button"
                                class="<?php echo $filter['value'] === 'all' ? 'is-selected' : ''; ?>"
                                data-filter="format"
                                data-value="<?php echo esc_attr($filter['value']); ?>">

                                <?php echo esc_html($filter['label']); ?>

                            </button>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>


        <!-- =========================================================
             SECTION 02: FEATURED EVENT
        ========================================================== -->

        <?php if ($featured_event) : ?>

            <?php

            $args = array(
                'fields' => $featured_event,
            );

            ?>

            <div class="wb-featured-event">

                <div class="wrap">

                    <div class="wb-blog-section-heading">

                        <h2>
                            Featured event
                        </h2>

                    </div>


                    <article class="wb-featured-event__card wb-card-white">


                        <!-- IMAGE -->

                        <div class="wb-featured-event__image">

                            <?php

                            $fields = $args['fields'] ?? [];

                            $featured_image = $fields['image'] ?? '';

                            ?>

                            <?php if (!empty($featured_image) && is_array($featured_image)) : ?>

    <?php

    $featured_image_url = $featured_image['url'];

    $featured_cropped_image = aq_resize(
        $featured_image_url,
        900,
        600,
        true
    );

    ?>

    <?php if ($featured_cropped_image) : ?>

        <img
            src="<?php echo esc_url($featured_cropped_image); ?>"
            alt="<?php echo esc_attr(
                $featured_image['alt'] ?? $fields['title']
            ); ?>"
            width="900"
            height="600"
            loading="lazy">

    <?php else : ?>

        <img
            src="<?php echo esc_url($featured_image_url); ?>"
            alt="<?php echo esc_attr(
                $featured_image['alt'] ?? $fields['title']
            ); ?>"
            width="<?php echo esc_attr(
                $featured_image['width'] ?? 900
            ); ?>"
            height="<?php echo esc_attr(
                $featured_image['height'] ?? 600
            ); ?>"
            loading="lazy">

    <?php endif; ?>

<?php endif; ?>

                        </div>


                        <!-- CONTENT -->

                        <div class="wb-featured-event__content">


                            <!-- META -->

                            <div class="wb-event-meta-row">

                                <?php if (!empty($fields['relationship'])) : ?>

                                    <span class="wb-event-label">
                                        <?php echo esc_html($fields['relationship']); ?>
                                    </span>

                                <?php endif; ?>


                                <?php if (!empty($fields['format'])) : ?>

                                    <span>
                                        <?php echo esc_html(ucwords(str_replace('-', ' ', $fields['format']))); ?>
                                    </span>

                                <?php endif; ?>

                            </div>


                            <!-- TITLE -->

                            <?php if (!empty($fields['title'])) : ?>

                                <h3 class="type-h5">
                                    <?php echo esc_html($fields['title']); ?>
                                </h3>

                            <?php endif; ?>


                            <!-- DESCRIPTION -->

                            <?php if (!empty($fields['description'])) : ?>

                                <p class="wb-featured-event__summary common-para">
                                    <?php echo nl2br(esc_html($fields['description'])); ?>
                                </p>

                            <?php endif; ?>


                            <!-- DETAILS -->

                            <div class="wb-event-details">


                                <?php if (!empty($fields['date'])) : ?>

                                    <div>

                                        <strong>
                                            Date
                                        </strong>

                                        <span>
                                            <?php
                                            echo esc_html(
                                                date(
                                                    'j F Y',
                                                    strtotime($fields['date'])
                                                )
                                            );
                                            ?>
                                        </span>

                                    </div>

                                <?php endif; ?>


                                <?php if (
                                    !empty($fields['start_time'])
                                    || !empty($fields['end_time'])
                                ) : ?>

                                    <div>

                                        <strong>
                                            Time
                                        </strong>

                                        <span>

                                            <?php if (!empty($fields['start_time'])) : ?>

                                                <?php echo esc_html($fields['start_time']); ?>

                                            <?php endif; ?>


                                            <?php if (
                                                !empty($fields['start_time'])
                                                && !empty($fields['end_time'])
                                            ) : ?>

                                                –

                                            <?php endif; ?>


                                            <?php if (!empty($fields['end_time'])) : ?>

                                                <?php echo esc_html($fields['end_time']); ?>

                                            <?php endif; ?>


                                            <?php if (!empty($fields['timezone'])) : ?>

                                                <?php echo esc_html($fields['timezone']); ?>

                                            <?php endif; ?>

                                        </span>

                                    </div>

                                <?php endif; ?>


                                <?php if (!empty($fields['location'])) : ?>

                                    <div>

                                        <strong>
                                            Location
                                        </strong>

                                        <span>
                                            <?php echo esc_html($fields['location']); ?>
                                        </span>

                                    </div>

                                <?php endif; ?>


                            </div>


                            <!-- FOOTER -->

                            <div class="wb-event-footer">


                                <?php if (!empty($fields['registration_status'])) : ?>

                                    <span class="wb-event-status">
                                        <?php echo esc_html($fields['registration_status']); ?>
                                    </span>

                                <?php endif; ?>


                                <?php if (
                                    !empty($fields['button_text'])
                                    && !empty($fields['button_url'])
                                ) : ?>

                                    <a
                                        href="<?php echo esc_url($fields['button_url']); ?>"
                                        class="btn btn-ghost btn-sm">

                                        <?php echo esc_html($fields['button_text']); ?>

                                    </a>

                                <?php endif; ?>


                            </div>

                        </div>

                    </article>

                </div>

            </div>

        <?php endif; ?>


        <!-- =========================================================
             SECTION 03: UPCOMING EVENTS
        ========================================================== -->

        <div
            class="wb-upcoming-events"
            id="upcoming-events">

            <div class="wrap">

                <div class="wb-blog-section-heading">

                    <h2>
                        Upcoming events
                    </h2>

                </div>


                <?php if (!empty($events)) : ?>

                    <div
                        class="wb-events-grid"
                        id="wb-events-grid">


                        <?php foreach ($events as $event) : ?>


                            <?php
                            /*
                            |--------------------------------------------------------------------------
                            | DO NOT SHOW FEATURED EVENT HERE
                            |--------------------------------------------------------------------------
                            |
                            | Featured event is already displayed above.
                            |
                            */

                            if (!empty($event['featured'])) {
                                continue;
                            }


                            /*
                            |--------------------------------------------------------------------------
                            | PASS EVENT DATA THROUGH ARGS
                            |--------------------------------------------------------------------------
                            */

                            $args = array(
                                'fields' => $event,
                            );

                            $fields = $args['fields'] ?? [];


                            /*
                            |--------------------------------------------------------------------------
                            | EVENT VALUES
                            |--------------------------------------------------------------------------
                            */

                            $relationship = $fields['relationship'] ?? '';
                            $format       = $fields['format'] ?? '';
                            $title        = $fields['title'] ?? '';
                            $description  = $fields['description'] ?? '';
                            $date         = $fields['date'] ?? '';

                            $start_time = $fields['start_time'] ?? '';
                            $end_time   = $fields['end_time'] ?? '';
                            $timezone   = $fields['timezone'] ?? '';

                            $location = $fields['location'] ?? '';
                            $price    = $fields['price'] ?? '';

                            $button_text = $fields['button_text'] ?? '';
                            $button_url  = $fields['button_url'] ?? '';

                            $image = $fields['image'] ?? '';

                            $relationship_slug = $fields['relationship_slug'] ?? '';
                            $format_slug       = $fields['format_slug'] ?? '';

                            ?>


                            <article
                                class="wb-event-card wb-card-white"
                                data-event
                                data-relationship="<?php echo esc_attr($relationship_slug); ?>"
                                data-format="<?php echo esc_attr($format_slug); ?>"
                                data-date="<?php echo esc_attr($date); ?>">


                                <!-- IMAGE -->

                               <div class="wb-event-card__image">

   <?php if (!empty($image) && is_array($image)) : ?>

    <?php
    $event_image_url = $image['url'];

    $event_cropped_image = aq_resize(
        $event_image_url,
        700,
        480,
        true
    );
    ?>

    <?php if ($event_cropped_image) : ?>

        <img
            src="<?php echo esc_url($event_cropped_image); ?>"
            alt="<?php echo esc_attr($image['alt'] ?? $title); ?>"
            width="700"
            height="480"
            loading="lazy">

    <?php else : ?>

        <img
            src="<?php echo esc_url($event_image_url); ?>"
            alt="<?php echo esc_attr($image['alt'] ?? $title); ?>"
            width="<?php echo esc_attr($image['width'] ?? 700); ?>"
            height="<?php echo esc_attr($image['height'] ?? 480); ?>"
            loading="lazy">

    <?php endif; ?>

<?php else : ?>

    <div
        class="wb-event-card__image-fallback"
        aria-hidden="true">
    </div>

<?php endif; ?>

</div>


                                <!-- CONTENT -->

                                <div class="wb-event-card__content">

                                    <div>

                                        <!-- TOP -->

                                        <div class="wb-event-card__top">


                                            <?php if ($relationship) : ?>

                                                <span>
                                                    <?php echo esc_html($relationship); ?>
                                                </span>

                                            <?php endif; ?>


                                            <?php if ($format) : ?>

                                                <span>
                                                    <?php echo esc_html(ucwords(str_replace('-', ' ', $format))); ?>
                                                </span>

                                            <?php endif; ?>


                                            <?php if ($title) : ?>

                                                <h3 class="type-h5">
                                                    <?php echo esc_html($title); ?>
                                                </h3>

                                            <?php endif; ?>


                                            <?php if ($description) : ?>

                                                <p class="common-para">
                                                    <?php echo nl2br(esc_html($description)); ?>
                                                </p>

                                            <?php endif; ?>


                                        </div>


                                        <!-- DETAILS -->

                                        <div class="wb-event-card__details">


                                            <?php if ($date) : ?>

                                                <div>

                                                    <strong>
                                                        <?php
                                                        echo esc_html(
                                                            date(
                                                                'j F Y',
                                                                strtotime($date)
                                                            )
                                                        );
                                                        ?>
                                                    </strong>

                                                    <?php if ($start_time || $end_time) : ?>

                                                        <br>

                                                        <span>

                                                            <?php if ($start_time) : ?>

                                                                <?php echo esc_html($start_time); ?>

                                                            <?php endif; ?>


                                                            <?php if ($start_time && $end_time) : ?>

                                                                –

                                                            <?php endif; ?>


                                                            <?php if ($end_time) : ?>

                                                                <?php echo esc_html($end_time); ?>

                                                            <?php endif; ?>


                                                            <?php if ($timezone) : ?>

                                                                ·
                                                                <?php echo esc_html($timezone); ?>

                                                            <?php endif; ?>

                                                        </span>

                                                    <?php endif; ?>

                                                </div>

                                            <?php endif; ?>


                                            <?php if ($location) : ?>

                                                <span>
                                                    <?php echo esc_html($location); ?>
                                                </span>

                                            <?php endif; ?>


                                        </div>

                                    </div>


                                    <!-- BOTTOM -->

                                    <div class="wb-event-card__bottom">


                                        <?php if ($price) : ?>

                                            <span class="wb-event-card__price">
                                                <?php echo esc_html($price); ?>
                                            </span>

                                        <?php endif; ?>


                                        <?php if ($button_text && $button_url) : ?>

                                            <a
                                                href="<?php echo esc_url($button_url); ?>"
                                                class="wb-event-card__link">

                                                <?php echo esc_html($button_text); ?>

                                                <span aria-hidden="true">
                                                    →
                                                </span>

                                            </a>

                                        <?php endif; ?>


                                    </div>

                                </div>

                            </article>


                        <?php endforeach; ?>


                    </div>


                    <!-- EMPTY STATE -->

                    <div
                        class="wb-events-empty"
                        id="wb-events-empty"
                        hidden>

                        <h3>
                            No events match these filters.
                        </h3>

                        <p>
                            Try another event type or format.
                        </p>

                    </div>


                <?php else : ?>


                    <div class="wb-events-empty">

                        <h3>
                            No events available.
                        </h3>

                        <p>
                            Please check back soon for upcoming events.
                        </p>

                    </div>


                <?php endif; ?>

            </div>

        </div>

    </section>


    <!-- =========================================================
         SECTION 04: OPTIONAL CALENDAR VIEW
    ========================================================== -->


    <section class="wb-events-calendar">

        <div class="wrap">

            <div class="section-head">

                <h2>
                    Calendar view
                </h2>

            </div>


            <div class="wb-calendar">

                <div class="wb-calendar__header">

                    <button
                        type="button"
                        class="wb-calendar__nav"
                        id="calendar-prev"
                        aria-label="Previous month">

                        ←

                    </button>


                    <strong id="calendar-month">
                        <?php echo esc_html(date('F Y')); ?>
                    </strong>


                    <button
                        type="button"
                        class="wb-calendar__nav"
                        id="calendar-next"
                        aria-label="Next month">

                        →

                    </button>

                </div>


                <button
                    type="button"
                    class="wb-calendar__today"
                    id="calendar-today">

                    Today

                </button>


                <div
                    class="wb-calendar__grid"
                    id="calendar-grid">
                </div>


                <script type="application/json" id="wb-calendar-events">
                    <?php

                    $calendar_events = array();

                    if (!empty($events)) {

                        foreach ($events as $event) {

                            // Only skip events without a date
                            if (empty($event['date'])) {
                                continue;
                            }

                            $calendar_events[] = array(
                                'id'       => (int) $event['id'],

                                'title'    => !empty($event['title'])
                                    ? $event['title']
                                    : 'Event',

                                'date'     => $event['date'],

                                'url'      => !empty($event['button_url'])
                                    ? $event['button_url']
                                    : $event['permalink'],

                                'location' => !empty($event['location'])
                                    ? $event['location']
                                    : '',
                            );
                        }
                    }

                    echo wp_json_encode(
                        $calendar_events,
                        JSON_HEX_TAG |
                            JSON_HEX_AMP |
                            JSON_HEX_APOS |
                            JSON_HEX_QUOT
                    );

                    ?>
                </script>

            </div>

        </div>


    </section>

<?php
if (have_posts()) :
while (have_posts()) :
the_post();

the_content();

endwhile;
endif;
?>


    


</main>

<?php get_footer(); ?>