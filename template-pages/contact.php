<?php

/**
 * Template Name: Contact Page
 */

get_header();

/**
 * Contact Page Data
 * Temporary static data.
 * Can easily be moved to ACF later.
 */

$contact_data = [

    'phone' => '1300 16 16 26',

    'general_email' => 'info@wunderbuild.com',

    'support_email' => 'support@wunderbuild.com',

    'office_address' => 'Level 32, 367 Collins St, Melbourne VIC 3000, Australia',

    'business_hours' => '',

    'demo_url' => '#',

    'routes' => [

        [
            'number' => '01',
            'title' => 'Sales and demos',
            'description' => 'For questions about the software, pricing, plans, or whether Wunderbuild fits the business.',
            'link_text' => 'Book a free demo',
            'link' => '#enquiry-form',
            'enquiry_type' => 'Sales or product demo'
        ],

        [
            'number' => '02',
            'title' => 'Product support',
            'description' => 'For help with the software, a technical issue, or a workflow inside an existing account.',
            'link_text' => 'Contact product support',
            'link' => '#enquiry-form',
            'enquiry_type' => 'Product support'
        ],

        [
            'number' => '03',
            'title' => 'Onboarding and training',
            'description' => 'For data migration, account setup, product training, or help getting the wider team started.',
            'link_text' => 'Book onboarding or training',
            'link' => '#enquiry-form',
            'enquiry_type' => 'Onboarding or data migration'
        ],

        [
            'number' => '04',
            'title' => 'Partners and affiliates',
            'description' => 'For Affiliate Program applications, industry collaboration, integrations, or partner enquiries.',
            'link_text' => 'Explore partners',
            'link' => '#enquiry-form',
            'enquiry_type' => 'Affiliate or partner enquiry'
        ],

        [
            'number' => '05',
            'title' => 'Events and collaboration',
            'description' => 'For co-hosted or supported events, speakers, sponsorship, or event questions.',
            'link_text' => 'View events',
            'link' => '#enquiry-form',
            'enquiry_type' => 'Events or collaboration'
        ],

        [
            'number' => '06',
            'title' => 'General enquiries',
            'description' => "For company, media, supplier, or other enquiries that don't fit the routes above.",
            'link_text' => 'Send an enquiry',
            'link' => '#enquiry-form',
            'enquiry_type' => 'General enquiry'
        ]

    ],

    'form' => [

        'title' => 'Send an enquiry.',

        'description' => 'Tell us what the question is about. The form should change slightly based on the enquiry type so people are not asked for information the receiving team does not need.',

        'helper_text' => "Don't include passwords, payment-card details, or other sensitive information.",

        'button_text' => 'Send enquiry',

        'success_message' => 'Thanks. Your enquiry has been sent.'

    ]

];

?>

<main class="contact-page">

    <!-- ==================================================
         HERO
         KEEPING YOUR EXISTING HERO EXACTLY AS IT IS
    =================================================== -->

    <section class="pricing-hero">

        <div class="blueprint-lines"></div>

        <div class="wrap">

            <div class="pricing-content">


                <span class="eyebrow">
                    Contact Wunderbuild </span>

                <h1>
                    Tell us what you need <br><span>help with.</span>


                </h1>

                <p>
                    Looking at Wunderbuild, already using it, or trying to find the right person? Choose the reason for getting in touch, and we’ll send the enquiry to the team best placed to help.

                </p>

                <div class="hero-buttons">

                    <a href="#" class="btn btn-primary">
                        Send an enquiry
                    </a>

                    <a href="#" class="btn btn-dark">
                        Book a free demo
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- ==================================================
         CONTACT ROUTES
    =================================================== -->

    <!-- =========================================
     CONTACT ROUTES
========================================== -->

    <section class="contact-routes section-space">

        <div class="wrap">

            <div class="section-head">

                <h2>
                    Start with the
                    <span>right team.</span>
                </h2>



            </div>


            <?php
            /*
         * SVG ICON SPRITE
         * Icons are defined once and reused inside the cards.
         */
            ?>

            <svg
                class="contact-icon-sprite"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <symbol id="icon-sales" viewBox="0 0 64 64">
                    <path d="M12 27L32 10l20 17" />
                    <path d="M18 24v28h28V24" />
                    <path d="M25 52V38h14v14" />
                    <path d="M32 19v10" />
                    <path d="M27 24h10" />
                </symbol>

                <symbol id="icon-support" viewBox="0 0 64 64">
                    <path d="M32 12a21 21 0 0 0-21 21v5a6 6 0 0 0 6 6h4V30h-4" />
                    <path d="M53 38v-5a21 21 0 0 0-21-21" />
                    <path d="M43 30h4v14h-4" />
                    <path d="M43 44c0 5-4 8-10 8" />
                    <circle cx="32" cy="52" r="2" />
                </symbol>

                <symbol id="icon-onboarding" viewBox="0 0 64 64">
                    <path d="M14 54V25l18-13 18 13v29" />
                    <path d="M24 54V36h16v18" />
                    <path d="M22 28h4" />
                    <path d="M38 28h4" />
                    <path d="M22 34h4" />
                    <path d="M38 34h4" />
                    <path d="M32 12v10" />
                </symbol>

                <symbol id="icon-partners" viewBox="0 0 64 64">
                    <path d="M24 38l-5 5a7 7 0 0 1-10-10l10-10a7 7 0 0 1 10 0" />
                    <path d="M40 26l5-5a7 7 0 0 1 10 10L45 41a7 7 0 0 1-10 0" />
                    <path d="M23 41l18-18" />
                    <path d="M26 29l9 9" />
                </symbol>

                <symbol id="icon-events" viewBox="0 0 64 64">
                    <rect x="12" y="16" width="40" height="38" rx="3" />
                    <path d="M20 10v12" />
                    <path d="M44 10v12" />
                    <path d="M12 27h40" />
                    <path d="M22 36h8" />
                    <path d="M34 36h8" />
                    <path d="M22 44h8" />
                    <path d="M34 44h8" />
                </symbol>

                <symbol id="icon-general" viewBox="0 0 64 64">
                    <circle cx="32" cy="32" r="21" />
                    <path d="M24 27a8 8 0 0 1 15 4c0 5-7 6-7 11" />
                    <circle cx="32" cy="48" r="1.5" fill="currentColor" />
                </symbol>
            </svg>


            <div class="contact-routes__grid">

                <?php foreach ($contact_data['routes'] as $index => $route) : ?>

                    <?php
                    $icons = [
                        'sales'      => 'icon-sales',
                        'support'    => 'icon-support',
                        'onboarding' => 'icon-onboarding',
                        'partners'   => 'icon-partners',
                        'events'     => 'icon-events',
                        'general'    => 'icon-general',
                    ];

                    $icon_key = array_keys($icons)[$index] ?? 'general';
                    $icon_id  = $icons[$icon_key];
                    ?>

                    <article class="contact-route-card">

                        <div class="contact-route-card__icon">

                            <svg
                                viewBox="0 0 64 64"
                                aria-hidden="true">
                                <use href="#<?php echo esc_attr($icon_id); ?>"></use>
                            </svg>

                        </div>


                        <div class="contact-route-card__content">

                            <h3>
                                <?php echo esc_html($route['title']); ?>
                            </h3>

                            <p>
                                <?php echo esc_html($route['description']); ?>
                            </p>

                        </div>


                        <a
                            href="<?php echo esc_url($route['link']); ?>"
                            class="contact-route-card__link"

                            <?php if (!empty($route['enquiry_type'])) : ?>

                            data-enquiry-route="<?php echo esc_attr($route['enquiry_type']); ?>"

                            <?php endif; ?>>

                            <span>
                                <?php echo esc_html($route['link_text']); ?>
                            </span>

                            <span
                                class="link-arrow"
                                aria-hidden="true">
                                →
                            </span>

                        </a>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- ==================================================
     ENQUIRY FORM
=================================================== -->

    <section
        class="contact-enquiry section-space"
        id="enquiry-form">

        <div class="wrap">

            <div class="contact-enquiry__grid">


                <!-- =========================================
                 LEFT CONTENT
            ========================================== -->

                <div class="contact-enquiry__intro">




                    <h2>
                        Send Enquiry

                    </h2>


                    <p class="contact-enquiry__description">
                        Tell us what the question is about. The form should change slightly based on the enquiry type so people are not asked for information the receiving team does not need.

                    </p>


                    <div class="contact-enquiry__note">

                        <div class="contact-enquiry__note-icon">
                            ✓
                        </div>

                        <div>

                            <strong>
                                Before you submit
                            </strong>

                            <p>
                                <?php echo esc_html(
                                    $contact_data['form']['helper_text']
                                ); ?>
                            </p>

                        </div>

                    </div>


                    <div class="contact-enquiry__meta">

                        <span>Usually responds within</span>

                        <strong>1 business day</strong>

                    </div>

                </div>


                <!-- =========================================
                 RIGHT FORM
            ========================================== -->

                <div class="contact-enquiry__form-card">



                    <!--
                    IMPORTANT:
                    This parent class scopes all CF7 styles.
                    Other Contact Form 7 forms on the website
                    will NOT be affected.
                -->

                    <div class="contact-enquiry__cf7">

                        <?php

                        echo do_shortcode(
                            '[contact-form-7 id="840cab8" title="Contact Us"]'
                        );

                        ?>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ==================================================
         CONTACT DETAILS
    =================================================== -->

    <!-- ==================================================
     CONTACT DETAILS
=================================================== -->

    <section class="contact-details section-space">

        <div class="wrap">

            <!-- SECTION HEADER -->

            <div class="contact-details__header">



                <h2>
                    Wunderbuild contact details

                </h2>



            </div>


            <!-- CONTACT CARDS -->

            <div class="contact-details__content">


                <!-- =========================================
                 PHONE
            ========================================== -->

                <div class="contact-detail">

                    <div class="contact-detail__icon">

                        <svg
                            width="25"
                            height="25"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path
                                d="M21 15.5V19C21 20.1 20.1 21 19 21C10.16 21 3 13.84 3 5C3 3.9 3.9 3 5 3H8.5C9.05 3 9.5 3.45 9.5 4V7.5C9.5 8.05 9.05 8.5 8.5 8.5H7C7.72 11.38 9.62 13.28 12.5 14V12.5C12.5 11.95 12.95 11.5 13.5 11.5H17C17.55 11.5 18 11.95 18 12.5V16C18 16.55 17.55 17 17 17H15.5"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </div>


                    <div class="contact-detail__body">

                        <span class="contact-detail__label">
                            Phone
                        </span>

                        <a
                            href="tel:<?php echo esc_attr(
                                            preg_replace(
                                                '/[^0-9+]/',
                                                '',
                                                $contact_data['phone']
                                            )
                                        ); ?>"
                            class="contact-detail__value">
                            <?php echo esc_html(
                                $contact_data['phone']
                            ); ?>
                        </a>

                        <span class="contact-detail__description">
                            Talk to our team directly.
                        </span>

                    </div>

                </div>


                <!-- =========================================
                 GENERAL & SALES
            ========================================== -->

                <div class="contact-detail">

                    <div class="contact-detail__icon">

                        <svg
                            width="25"
                            height="25"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path
                                d="M4 5.5C4 4.67 4.67 4 5.5 4H18.5C19.33 4 20 4.67 20 5.5V15.5C20 16.33 19.33 17 18.5 17H9L5 20V17.5C4.45 17.27 4 16.72 4 16V5.5Z"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                                stroke-linejoin="round" />

                            <path
                                d="M7 8H17"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round" />

                            <path
                                d="M7 12H14"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round" />
                        </svg>

                    </div>


                    <div class="contact-detail__body">

                        <span class="contact-detail__label">
                            General &amp; sales
                        </span>

                        <a
                            href="mailto:<?php echo esc_attr(
                                                $contact_data['general_email']
                                            ); ?>"
                            class="contact-detail__value">
                            <?php echo esc_html(
                                $contact_data['general_email']
                            ); ?>
                        </a>

                        <span class="contact-detail__description">
                            Sales and general enquiries.
                        </span>

                    </div>

                </div>


                <!-- =========================================
                 PRODUCT SUPPORT
            ========================================== -->

                <div class="contact-detail">

                    <div class="contact-detail__icon">

                        <svg
                            width="25"
                            height="25"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path
                                d="M12 3C7.03 3 3 6.58 3 11C3 13.08 3.93 14.97 5.45 16.37L4.5 20L8.18 18.34C9.34 18.77 10.63 19 12 19C16.97 19 21 15.42 21 11C21 6.58 16.97 3 12 3Z"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                                stroke-linejoin="round" />

                            <path
                                d="M8 11H8.01"
                                stroke="currentColor"
                                stroke-width="2.2"
                                stroke-linecap="round" />

                            <path
                                d="M12 11H12.01"
                                stroke="currentColor"
                                stroke-width="2.2"
                                stroke-linecap="round" />

                            <path
                                d="M16 11H16.01"
                                stroke="currentColor"
                                stroke-width="2.2"
                                stroke-linecap="round" />
                        </svg>

                    </div>


                    <div class="contact-detail__body">

                        <span class="contact-detail__label">
                            Product support
                        </span>

                        <a
                            href="mailto:<?php echo esc_attr(
                                                $contact_data['support_email']
                                            ); ?>"
                            class="contact-detail__value">
                            <?php echo esc_html(
                                $contact_data['support_email']
                            ); ?>
                        </a>

                        <span class="contact-detail__description">
                            Help with your Wunderbuild account.
                        </span>

                    </div>

                </div>


                <!-- =========================================
                 OFFICE
            ========================================== -->

                <div class="contact-detail">

                    <div class="contact-detail__icon">

                        <svg
                            width="25"
                            height="25"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path
                                d="M4 21V5C4 4.45 4.45 4 5 4H15C15.55 4 16 4.45 16 5V21"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                                stroke-linejoin="round" />

                            <path
                                d="M16 9H19C19.55 9 20 9.45 20 10V21"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                                stroke-linejoin="round" />

                            <path
                                d="M8 8H10"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round" />

                            <path
                                d="M8 12H10"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round" />

                            <path
                                d="M8 16H10"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round" />

                            <path
                                d="M12 21V17H14V21"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linejoin="round" />

                            <path
                                d="M2.5 21H21.5"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round" />
                        </svg>

                    </div>


                    <div class="contact-detail__body">

                        <span class="contact-detail__label">
                            Office
                        </span>

                        <address class="contact-detail__value">
                            <?php echo esc_html(
                                $contact_data['office_address']
                            ); ?>
                        </address>

                        <span class="contact-detail__description">
                            Melbourne, Australia.
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="faq-section">

        <div class="wrap">

            <!-- FAQ Header -->
            <div class="faq-head">



                <h2>
                    Contact FAQs
                </h2>



            </div>


            <!-- FAQ Accordion -->
            <div class="faq-list">

                <!-- FAQ 01 -->
                <div class="faq-item active">

                    <button class="faq-question" type="button">
                        <span>
                            How do I book a product demo?
                        </span>

                        <span class="faq-icon">
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>
                                Use the Book a free demo button or choose Sales or product demo
                                in the enquiry form.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- FAQ 02 -->
                <div class="faq-item">

                    <button class="faq-question" type="button">
                        <span>
                            Where should I send a support question?
                        </span>

                        <span class="faq-icon">
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>
                                Use the Product support route so the request reaches the team
                                that can check the account and workflow.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- FAQ 03 -->
                <div class="faq-item">

                    <button class="faq-question" type="button">
                        <span>
                            Can I book onboarding or training?
                        </span>

                        <span class="faq-icon">
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>
                                Yes. Use the Onboarding or data migration or Training enquiry
                                type, or the approved booking route.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- FAQ 04 -->
                <div class="faq-item">

                    <button class="faq-question" type="button">
                        <span>
                            Who should I contact about moving data?
                        </span>

                        <span class="faq-icon">
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>
                                Choose Onboarding or data migration and include the system,
                                file type, and records you need help importing.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- FAQ 05 -->
                <div class="faq-item">

                    <button class="faq-question" type="button">
                        <span>
                            Where do I apply for the Affiliate Program?
                        </span>

                        <span class="faq-icon">
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>
                                Use the Affiliate Program page to read the program details
                                and submit an application.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- FAQ 06 -->
                <div class="faq-item">

                    <button class="faq-question" type="button">
                        <span>
                            Can I contact Wunderbuild about an event or partnership?
                        </span>

                        <span class="faq-icon">
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>
                                Yes. Choose Events, Collaboration, Affiliate, or Partner Enquiry.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- FAQ 07 -->
                <div class="faq-item">

                    <button class="faq-question" type="button">
                        <span>
                            Where is Wunderbuild based?
                        </span>

                        <span class="faq-icon">
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>
                                Wunderbuild is based at Level 32, 367 Collins St, Melbourne VIC
                                3000, Australia, and serves builders across Australia and
                                New Zealand.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- FAQ 08 -->
                <div class="faq-item">

                    <button class="faq-question" type="button">
                        <span>
                            Should I include passwords in the form?
                        </span>

                        <span class="faq-icon">
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>
                                No. Never send passwords, payment-card information, or other
                                sensitive credentials through the form.
                            </p>
                        </div>
                    </div>

                </div>

            </div>




        </div>

    </section>


    <!-- FINAL CTA -->
    <section class="final-cta">
        <div class="final-glow"></div>
        <div class="wrap" style="position:relative; z-index:1;">
            <h2>The whole job, in one place.</h2>
            <p>See how Wunderbuild keeps the work, the team, and the numbers connected from the first estimate to final handover.</p>
            <div class="actions">
                <a href="#" class="btn btn-primary">Start a free trial</a>
                <a href="#" class="btn btn-dark">Book a free demo</a>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>