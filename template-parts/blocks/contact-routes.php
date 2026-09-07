<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$routes      = $fields['routes'] ?? [];

?>

<section class="contact-routes section-space section-global">

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


        <?php if (!empty($routes) && is_array($routes)) : ?>

            <div class="contact-routes__grid">

                <?php foreach ($routes as $route) : ?>

                    <?php

                    $icon         = $route['icon'] ?? [];
                    $title        = $route['title'] ?? '';
                    $route_desc   = $route['description'] ?? '';
                    $link_text    = $route['button_text'] ?? '';
                    $link         = $route['button_link'] ?? [];
                    $enquiry_type = $route['enquiry_type'] ?? '';

                    $link_url    = $link['url'] ?? '';
                    $link_target = $link['target'] ?? '_self';

                    ?>

                    <article class="contact-route-card">

                        <?php if (!empty($icon) && !empty($icon['ID'])) : ?>

                            <div class="contact-route-card__icon">

                                <?php
                                echo wp_get_attachment_image(
                                    $icon['ID'],
                                    'full',
                                    false,
                                    array(
                                        'alt' => esc_attr($icon['alt'] ?? $title),
                                    )
                                );
                                ?>

                            </div>

                        <?php endif; ?>


                        <div class="contact-route-card__content">

                            <?php if (!empty($title)) : ?>

                                <h3 class="type-h5">
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