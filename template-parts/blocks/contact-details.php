<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';
$items   = $fields['items'] ?? [];

?>

<section class="contact-details section-space section-global">

    <div class="wrap">

        <?php if (!empty($heading)) : ?>

            <div class="section-head">

                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>

            </div>

        <?php endif; ?>


        <?php if (!empty($items) && is_array($items)) : ?>

            <div class="contact-details__content">

                <?php foreach ($items as $item) : ?>

                    <?php

                    $icon        = $item['icon'] ?? [];
                    $label       = $item['label'] ?? '';
                    $value       = $item['value'] ?? '';
                    $link        = $item['link'] ?? [];
                    $description = $item['description'] ?? '';

                    $link_url    = $link['url'] ?? '';
                    $link_target = $link['target'] ?? '_self';

                    ?>

                    <article class="contact-detail">

                        <?php if (!empty($icon['url'])) : ?>

                            <div class="contact-detail__icon">

                                <img
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
                                >

                            </div>

                        <?php endif; ?>


                        <div class="contact-detail__body">


                            <!-- LABEL -->

                            <?php if (!empty($label)) : ?>

                                <span class="contact-detail__label type-p2">

                                    <?php echo esc_html($label); ?>

                                </span>

                            <?php endif; ?>


                            <!-- MAIN VALUE -->

                            <?php if (!empty($value)) : ?>

                                <?php if (!empty($link_url)) : ?>

                                    <a
                                        href="<?php echo esc_url($link_url); ?>"
                                        target="<?php echo esc_attr($link_target); ?>"
                                        class="contact-detail__value type-p2"
                                    >

                                        <?php echo esc_html($value); ?>

                                    </a>

                                <?php else : ?>

                                    <div class="contact-detail__value type-p3">

                                        <?php echo esc_html($value); ?>

                                    </div>

                                <?php endif; ?>

                            <?php endif; ?>


                            <!-- DESCRIPTION -->

                            <?php if (!empty($description)) : ?>

                                <div class="contact-detail__description type-p2">

                                    <?php echo wp_kses_post(
                                        nl2br($description)
                                    ); ?>

                                </div>

                            <?php endif; ?>


                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>