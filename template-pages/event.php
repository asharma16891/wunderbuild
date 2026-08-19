<?php

/**
 * Template Name: Events
 */

get_header();

/*
|--------------------------------------------------------------------------
| DEMO EVENT DATA
|--------------------------------------------------------------------------
| Later replace this array with Event CPT / ACF query.
*/

$events = [

    [
        'id' => 1,
        'relationship' => 'Wunderbuild events',
        'relationship_slug' => 'wunderbuild',
        'format' => 'Online',
        'format_slug' => 'online',
        'title' => 'Building better workflows for residential builders',
        'summary' => 'A practical session on simplifying the commercial and operational work that keeps residential projects moving.',
        'date' => '2026-09-10',
        'start_time' => '10:00 am',
        'end_time' => '11:00 am',
        'timezone' => 'AEST',
        'location' => 'Online',
        'status' => 'Registration open',
        'cta' => 'Register',
        'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1400&q=85',
        'price' => 'Free',
        'partner_logos' => [],
        'featured' => true,
        'recording' => '',
        'recap' => '',
    ],

    [
        'id' => 2,
        'relationship' => 'Co-hosted events',
        'relationship_slug' => 'co-hosted',
        'format' => 'Hybrid',
        'format_slug' => 'hybrid',
        'title' => 'The builder operations workshop',
        'summary' => 'A practical workshop focused on improving visibility, communication and control across active residential jobs.',
        'date' => '2026-09-18',
        'start_time' => '9:30 am',
        'end_time' => '12:00 pm',
        'timezone' => 'AEST',
        'location' => 'Melbourne + Online',
        'status' => 'Selling fast',
        'cta' => 'Register',
        'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1400&q=85',
        'price' => '$49',
        'partner_logos' => [],
        'featured' => false,
        'recording' => '',
        'recap' => '',
    ],

    [
        'id' => 3,
        'relationship' => 'Supported events',
        'relationship_slug' => 'supported',
        'format' => 'In person',
        'format_slug' => 'in-person',
        'title' => 'Residential building leaders breakfast',
        'summary' => 'Meet other builders and industry leaders to discuss the decisions shaping residential construction businesses.',
        'date' => '2026-10-02',
        'start_time' => '8:00 am',
        'end_time' => '10:00 am',
        'timezone' => 'AEST',
        'location' => 'Sydney, NSW',
        'status' => 'Waitlist',
        'cta' => 'Join the waitlist',
        'image' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?auto=format&fit=crop&w=1400&q=85',
        'price' => '$25',
        'partner_logos' => [],
        'featured' => false,
        'recording' => '',
        'recap' => '',
    ],

    [
        'id' => 4,
        'relationship' => 'Wunderbuild events',
        'relationship_slug' => 'wunderbuild',
        'format' => 'Online',
        'format_slug' => 'online',
        'title' => 'Getting more control over job delivery',
        'summary' => 'See practical ways builders can keep teams aligned and make job information easier to manage.',
        'date' => '2026-10-15',
        'start_time' => '11:00 am',
        'end_time' => '12:00 pm',
        'timezone' => 'AEDT',
        'location' => 'Online',
        'status' => 'Registration open',
        'cta' => 'Register',
        'image' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1400&q=85',
        'price' => 'Free',
        'partner_logos' => [],
        'featured' => false,
        'recording' => '',
        'recap' => '',
    ],

    [
        'id' => 5,
        'relationship' => 'Co-hosted events',
        'relationship_slug' => 'co-hosted',
        'format' => 'Online',
        'format_slug' => 'online',
        'title' => 'From estimating to delivery',
        'summary' => 'Explore the handover points where better information can make the difference between a smooth job and a difficult one.',
        'date' => '2026-07-20',
        'start_time' => '10:00 am',
        'end_time' => '11:00 am',
        'timezone' => 'AEST',
        'location' => 'Online',
        'status' => 'Registration closed',
        'cta' => 'View event details',
        'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1400&q=85',
        'price' => 'Free',
        'partner_logos' => [],
        'featured' => false,
        'recording' => 'https://example.com/recording',
        'recap' => 'https://example.com/recap',
    ],

    [
        'id' => 6,
        'relationship' => 'Supported events',
        'relationship_slug' => 'supported',
        'format' => 'In person',
        'format_slug' => 'in-person',
        'title' => 'Construction business community breakfast',
        'summary' => 'A community session for builders sharing practical lessons from running residential construction businesses.',
        'date' => '2026-06-12',
        'start_time' => '8:30 am',
        'end_time' => '10:30 am',
        'timezone' => 'AEST',
        'location' => 'Brisbane, QLD',
        'status' => 'Sold out',
        'cta' => 'View event details',
        'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1400&q=85',
        'price' => '$30',
        'partner_logos' => [],
        'featured' => false,
        'recording' => '',
        'recap' => 'https://example.com/recap',
    ],

];

/*
|--------------------------------------------------------------------------
| FEATURED EVENT
|--------------------------------------------------------------------------
*/

$featured_event = null;

foreach ($events as $event) {
    if (!empty($event['featured'])) {
        $featured_event = $event;
        break;
    }
}

/*
|--------------------------------------------------------------------------
| SORT EVENTS
|--------------------------------------------------------------------------
*/

usort($events, function ($a, $b) {
    return strtotime($a['date']) <=> strtotime($b['date']);
});

?>

<main class="wb-events-page">

    <!-- =========================================================
         SECTION 01: HERO
    ========================================================== -->

    <section class="wb-events-hero">

        <div class="wrap">

            <div class="wb-events-hero__grid">

                <div class="wb-events-hero__content">

                    <span class="wb-eyebrow">
                        Events
                    </span>

                    <h1>
                        Practical events for builders and their teams.
                    </h1>

                    <p class="wb-events-hero__intro">
                        Find Wunderbuild workshops, webinars, and industry
                        events built around the commercial and operational
                        decisions residential builders make every day.
                    </p>

                    <div class="wb-events-hero__actions">

                        <a href="#upcoming-events" class="wb-btn wb-btn--lime">
                            View upcoming events
                        </a>

                        <a href="#newsletter" class="wb-btn wb-btn--dark">
                            Hear about the next event
                        </a>

                    </div>

                </div>

                <?php if ($featured_event) : ?>

                    <div class="wb-events-hero__visual">

                        <img
                            src="<?php echo esc_url($featured_event['image']); ?>"
                            alt="<?php echo esc_attr($featured_event['title']); ?>"
                            width="900"
                            height="650"
                            fetchpriority="high">

                        <div class="wb-events-hero__event-badge">
                            <span>
                                <?php echo esc_html($featured_event['relationship']); ?>
                            </span>

                            <strong>
                                <?php echo esc_html($featured_event['title']); ?>
                            </strong>
                        </div>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </section>


    <!-- =========================================================
         SECTION 02: ARCHIVE CONTROLS
    ========================================================== -->

    <section class="wb-events-controls">

        <div class="wrap">

            <div class="section-head">


                <h2>
                    Find the right event.
                </h2>

            </div>


            <div class="wb-event-filters">

                <!-- Relationship -->

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

                        <button
                            type="button"
                            class="is-selected"
                            data-filter="relationship"
                            data-value="all">
                            All events
                        </button>

                        <button
                            type="button"
                            data-filter="relationship"
                            data-value="wunderbuild">
                            Wunderbuild events
                        </button>

                        <button
                            type="button"
                            data-filter="relationship"
                            data-value="co-hosted">
                            Co-hosted events
                        </button>

                        <button
                            type="button"
                            data-filter="relationship"
                            data-value="supported">
                            Supported events
                        </button>

                    </div>

                </div>


                <!-- Format -->

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

                        <button
                            type="button"
                            class="is-selected"
                            data-filter="format"
                            data-value="all">
                            All formats
                        </button>

                        <button
                            type="button"
                            data-filter="format"
                            data-value="in-person">
                            In person
                        </button>

                        <button
                            type="button"
                            data-filter="format"
                            data-value="online">
                            Online
                        </button>

                        <button
                            type="button"
                            data-filter="format"
                            data-value="hybrid">
                            Hybrid
                        </button>

                    </div>

                </div>


                <!-- View -->

                <div class="wb-event-filter">

                    <span class="wb-event-filter__label">
                        View
                    </span>

                    <button
                        type="button"
                        class="wb-event-dropdown"
                        data-filter-trigger="view"
                        aria-expanded="false">

                        <span data-filter-value="view">
                            Upcoming events
                        </span>

                        <span class="wb-event-dropdown__arrow">
                            ↓
                        </span>

                    </button>

                    <div
                        class="wb-event-dropdown__menu"
                        data-filter-menu="view">

                        <button
                            type="button"
                            class="is-selected"
                            data-filter="view"
                            data-value="upcoming">
                            Upcoming events
                        </button>

                        <button
                            type="button"
                            data-filter="view"
                            data-value="past">
                            Past events
                        </button>

                    </div>

                </div>

            </div>

        </div>
        <!-- =========================================================
             SECTION 03: FEATURED EVENT
        ========================================================== -->

        <?php if ($featured_event) : ?>

            <div class="wb-featured-event">

                <div class="wrap">
                    <div class="wb-blog-section-heading">
                        <h2>
                            Featured event
                        </h2>
                    </div>
                    <article class="wb-featured-event__card">

                        <div class="wb-featured-event__image">

                            <img
                                src="<?php echo esc_url($featured_event['image']); ?>"
                                alt="<?php echo esc_attr($featured_event['title']); ?>"
                                width="900"
                                height="650"
                                loading="lazy">

                        </div>


                        <div class="wb-featured-event__content">

                            <div class="wb-event-meta-row">

                                <span class="wb-event-label">
                                    <?php echo esc_html($featured_event['relationship']); ?>
                                </span>

                                <span>
                                    <?php echo esc_html($featured_event['format']); ?>
                                </span>

                            </div>


                            <h3>
                                <?php echo esc_html($featured_event['title']); ?>
                            </h3>


                            <p class="wb-featured-event__summary">
                                <?php echo esc_html($featured_event['summary']); ?>
                            </p>


                            <div class="wb-event-details">

                                <div>
                                    <strong>
                                        Date
                                    </strong>

                                    <span>
                                        <?php echo esc_html(date('j F Y', strtotime($featured_event['date']))); ?>
                                    </span>
                                </div>

                                <div>
                                    <strong>
                                        Time
                                    </strong>

                                    <span>
                                        <?php echo esc_html($featured_event['start_time']); ?>
                                        –
                                        <?php echo esc_html($featured_event['end_time']); ?>
                                        <?php echo esc_html($featured_event['timezone']); ?>
                                    </span>
                                </div>

                                <div>
                                    <strong>
                                        Location
                                    </strong>

                                    <span>
                                        <?php echo esc_html($featured_event['location']); ?>
                                    </span>
                                </div>

                            </div>


                            <div class="wb-event-footer">

                                <span class="wb-event-status">
                                    <?php echo esc_html($featured_event['status']); ?>
                                </span>

                                <a
                                    href="#"
                                    class="wb-btn wb-btn--lime">
                                    <?php echo esc_html($featured_event['cta']); ?>
                                </a>

                            </div>

                        </div>

                    </article>

                </div>

            </div>

        <?php endif; ?>

        <!-- =========================================================
             SECTION 04: UPCOMING EVENT CARDS
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
                <div
                    class="wb-events-grid"
                    id="wb-events-grid">
    
                    <?php foreach ($events as $event) : ?>
    
                        <article
                            class="wb-event-card"
                            data-event
                            data-relationship="<?php echo esc_attr($event['relationship_slug']); ?>"
                            data-format="<?php echo esc_attr($event['format_slug']); ?>"
                            data-date="<?php echo esc_attr($event['date']); ?>">
    
                            <div class="wb-event-card__image">
    
                                <img
                                    src="<?php echo esc_url($event['image']); ?>"
                                    alt="<?php echo esc_attr($event['title']); ?>"
                                    width="700"
                                    height="480"
                                    loading="lazy">
    
                                <span class="wb-event-card__status">
                                    <?php echo esc_html($event['status']); ?>
                                </span>
    
                            </div>
    
    
                            <div class="wb-event-card__content">
    
                                <div class="wb-event-card__top">
    
                                    <span>
                                        <?php echo esc_html($event['relationship']); ?>
                                    </span>
    
                                    <span>
                                        <?php echo esc_html($event['format']); ?>
                                    </span>
    
                                </div>
    
    
                                <h3>
                                    <?php echo esc_html($event['title']); ?>
                                </h3>
    
    
                                <p>
                                    <?php echo esc_html($event['summary']); ?>
                                </p>
    
    
                                <div class="wb-event-card__details">
    
                                    <strong>
                                        <?php echo esc_html(date('j F Y', strtotime($event['date']))); ?>
                                    </strong>
    
                                    <span>
                                        <?php echo esc_html($event['start_time']); ?>
                                        –
                                        <?php echo esc_html($event['end_time']); ?>
                                        ·
                                        <?php echo esc_html($event['timezone']); ?>
                                    </span>
    
                                    <span>
                                        <?php echo esc_html($event['location']); ?>
                                    </span>
    
                                </div>
    
    
                                <div class="wb-event-card__bottom">
    
                                    <?php if (!empty($event['price'])) : ?>
    
                                        <span class="wb-event-card__price">
                                            <?php echo esc_html($event['price']); ?>
                                        </span>
    
                                    <?php endif; ?>
    
    
                                    <a
                                        href="#"
                                        class="wb-event-card__link">
    
                                        <?php echo esc_html($event['cta']); ?>
    
                                        <span aria-hidden="true">
                                            →
                                        </span>
    
                                    </a>
    
                                </div>
    
                            </div>
    
                        </article>
    
                    <?php endforeach; ?>
    
                </div>
    
    
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
    
            </div>
    
        </div>
    </section>






    <!-- =========================================================
         SECTION 05: OPTIONAL CALENDAR VIEW
    ========================================================== -->

    <section class="wb-events-calendar">

        <div class="wrap">

            <div class="section-head">

                <h2>
                    Optional calendar view
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
                        September 2026
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

            </div>

        </div>

    </section>


    <!-- =========================================================
         SECTION 06: PAST EVENTS
    ========================================================== -->

    <section class="wb-past-events">

        <div class="wrap">

            <div class="section-head">


                <h2>
                    Past events and community moments
                </h2>

                <p>
                    Past events should show real learning and community
                    activity, not expired listings.
                </p>

            </div>


            <div class="wb-events-grid wb-events-grid--past">

                <?php foreach ($events as $event) : ?>

                    <?php if (strtotime($event['date']) < strtotime(current_time('Y-m-d'))) : ?>

                        <article class="wb-event-card wb-event-card--past">

                            <div class="wb-event-card__image">

                                <img
                                    src="<?php echo esc_url($event['image']); ?>"
                                    alt="<?php echo esc_attr($event['title']); ?>"
                                    width="700"
                                    height="480"
                                    loading="lazy">

                            </div>


                            <div class="wb-event-card__content">

                                <div class="wb-event-card__top">

                                    <span>
                                        <?php echo esc_html($event['relationship']); ?>
                                    </span>

                                    <span>
                                        <?php echo esc_html($event['format']); ?>
                                    </span>

                                </div>


                                <h3>
                                    <?php echo esc_html($event['title']); ?>
                                </h3>


                                <div class="wb-event-card__details">

                                    <strong>
                                        <?php echo esc_html(date('j F Y', strtotime($event['date']))); ?>
                                    </strong>

                                    <span>
                                        <?php echo esc_html($event['location']); ?>
                                    </span>

                                </div>


                                <p>
                                    <?php echo esc_html($event['summary']); ?>
                                </p>


                                <div class="wb-event-card__bottom">

                                    <?php if (!empty($event['recording'])) : ?>

                                        <a
                                            href="<?php echo esc_url($event['recording']); ?>"
                                            class="wb-event-card__link">
                                            Watch the recording →
                                        </a>

                                    <?php elseif (!empty($event['recap'])) : ?>

                                        <a
                                            href="<?php echo esc_url($event['recap']); ?>"
                                            class="wb-event-card__link">
                                            View the recap →
                                        </a>

                                    <?php else : ?>

                                        <a
                                            href="#"
                                            class="wb-event-card__link">
                                            View event details →
                                        </a>

                                    <?php endif; ?>

                                </div>

                            </div>

                        </article>

                    <?php endif; ?>

                <?php endforeach; ?>

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
                       Hear about the  <br> <span>next event.</span>

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
                    <p class="wb-blog-newsletter__p">Only useful updates. Unsubscribe anytime.</p>

                </div>



            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>