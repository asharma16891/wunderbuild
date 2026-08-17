<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$routes      = $fields['routes'] ?? [];

?>

<section class="contact-routes section-space">

    <div class="wrap">

        <?php if (!empty($heading) || !empty($description)) : ?>

            <div class="section-head">

                <?php if (!empty($heading)) : ?>

                    <h2>
                        <?php echo wp_kses_post($heading); ?>
                    </h2>

                <?php endif; ?>


                <?php if (!empty($description)) : ?>

                    <p>
                        <?php echo esc_html($description); ?>
                    </p>

                <?php endif; ?>

            </div>

        <?php endif; ?>


        <!-- SVG ICON SPRITE -->

        <svg
            class="contact-icon-sprite"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
        >

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
                <circle
                    cx="32"
                    cy="48"
                    r="1.5"
                    fill="currentColor"
                />

            </symbol>

        </svg>


        <?php if (!empty($routes) && is_array($routes)) : ?>

            <div class="contact-routes__grid">

                <?php foreach ($routes as $route) : ?>

                    <?php

                    $icon         = $route['icon'] ?? 'general';
                    $title        = $route['title'] ?? '';
                    $route_desc   = $route['description'] ?? '';
                    $link_text    = $route['link_text'] ?? '';
                    $link         = $route['link'] ?? [];
                    $enquiry_type = $route['enquiry_type'] ?? '';

                    /*
                    |--------------------------------------------------------------------------
                    | Icon Mapping
                    |--------------------------------------------------------------------------
                    */

                    $icons = array(
                        'sales'      => 'icon-sales',
                        'support'    => 'icon-support',
                        'onboarding' => 'icon-onboarding',
                        'partners'   => 'icon-partners',
                        'events'     => 'icon-events',
                        'general'    => 'icon-general',
                    );

                    $icon_id = $icons[$icon] ?? 'icon-general';


                    /*
                    |--------------------------------------------------------------------------
                    | Link
                    |--------------------------------------------------------------------------
                    */

                    $link_url    = $link['url'] ?? '';
                    $link_target = $link['target'] ?? '_self';

                    ?>

                    <article class="contact-route-card">

                        <div class="contact-route-card__icon">

                            <svg
                                viewBox="0 0 64 64"
                                aria-hidden="true"
                            >

                                <use
                                    href="#<?php echo esc_attr($icon_id); ?>"
                                ></use>

                            </svg>

                        </div>


                        <div class="contact-route-card__content">

                            <?php if (!empty($title)) : ?>

                                <h3>
                                    <?php echo esc_html($title); ?>
                                </h3>

                            <?php endif; ?>


                            <?php if (!empty($route_desc)) : ?>

                                <p>
                                    <?php echo esc_html($route_desc); ?>
                                </p>

                            <?php endif; ?>

                        </div>


                        <?php if (!empty($link_url)) : ?>

                            <a
                                href="<?php echo esc_url($link_url); ?>"
                                target="<?php echo esc_attr($link_target); ?>"
                                class="contact-route-card__link"

                                <?php if (!empty($enquiry_type)) : ?>
                                    data-enquiry-route="<?php echo esc_attr($enquiry_type); ?>"
                                <?php endif; ?>
                            >

                                <?php if (!empty($link_text)) : ?>

                                    <span>
                                        <?php echo esc_html($link_text); ?>
                                    </span>

                                <?php endif; ?>


                                <span
                                    class="link-arrow"
                                    aria-hidden="true"
                                >
                                    →
                                </span>

                            </a>

                        <?php endif; ?>

                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>