<?php

$fields = $args['fields'] ?? [];

$heading        = $fields['heading'] ?? '';
$description    = $fields['description'] ?? '';
$main_button    = $fields['button'] ?? [];
$support_routes = $fields['support_routes'] ?? [];

?>

<section class="support-routes">

    <div class="wrap">

        <div class="section-head">

            <?php if ($heading) : ?>
                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>
            <?php endif; ?>


            <?php if ($description) : ?>
                <p>
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>


            <?php if (!empty($main_button['url'])) : ?>

                <a
                    href="<?php echo esc_url($main_button['url']); ?>"
                    class="btn btn-primary mt-6"
                    target="<?php echo esc_attr($main_button['target'] ?? '_self'); ?>"
                    <?php if (($main_button['target'] ?? '') === '_blank') : ?>
                        rel="noopener noreferrer"
                    <?php endif; ?>
                >
                    <?php echo esc_html($main_button['title'] ?? ''); ?>
                </a>

            <?php endif; ?>

        </div>


        <?php if (!empty($support_routes)) : ?>

            <div class="support-card-grid">

                <?php foreach ($support_routes as $index => $route) : ?>

                    <?php
                    $number      = $route['number'] ?? '';
                    $icon        = $route['icon'] ?? [];
                    $route_title = $route['heading'] ?? '';
                    $route_desc  = $route['description'] ?? '';
                    $route_button = $route['button'] ?? '';

                    /*
                     * Keep the existing card color/style classes.
                     * They are based on the card position.
                     */
                    $card_classes = [
                        0 => 'support-card-migration',
                        1 => 'support-card-training',
                        2 => 'support-card-product',
                    ];

                    $card_class = $card_classes[$index] ?? '';
                    ?>

                    <article class="support-cards <?php echo esc_attr($card_class); ?>">

                        <div class="support-card-top">

                            <?php if ($number) : ?>

                                <span class="support-number">
                                    <?php echo esc_html($number); ?>
                                </span>

                            <?php endif; ?>


                            <?php if (!empty($icon['url'])) : ?>

                                <span class="support-icon">

                                    <img
                                        src="<?php echo esc_url($icon['url']); ?>"
                                        alt="<?php echo esc_attr($icon['alt'] ?? $route_title); ?>"
                                    >

                                </span>

                            <?php endif; ?>

                        </div>


                        <?php if ($route_title) : ?>

                            <h3>
                                <?php echo esc_html($route_title); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if ($route_desc) : ?>

                            <p>
                                <?php echo esc_html($route_desc); ?>
                            </p>

                        <?php endif; ?>


                        <?php if (!empty($route_button['url'])) : ?>

                            <a
                                href="<?php echo esc_url($route_button['url']); ?>"
                                class="support-card-link"
                                target="<?php echo esc_attr($route_button['target'] ?? '_self'); ?>"
                                <?php if (($route_button['target'] ?? '') === '_blank') : ?>
                                    rel="noopener noreferrer"
                                <?php endif; ?>
                            >

                                <?php echo esc_html($route_button['title'] ?? ''); ?>

                                <span aria-hidden="true">→</span>

                            </a>

                        <?php endif; ?>

                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>