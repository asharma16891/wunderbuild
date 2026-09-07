<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading     = $fields['partner_proof_heading'] ?? '';
$description = $fields['partner_proof_description'] ?? '';
$items       = $fields['partner_proof_items'] ?? [];

?>

<section class="partner-proof-section section-global">

    <div class="partner-proof-bg-shape partner-shape-1"></div>
    <div class="partner-proof-bg-shape partner-shape-2"></div>

    <div class="wrap">

        <!-- Section Header -->
        <?php if (!empty($heading) || !empty($description)) : ?>

            <div class="section-head">

                <?php if (!empty($heading)) : ?>
                    <h2>
                        <?php echo nl2br(esc_html($heading)); ?>
                    </h2>
                <?php endif; ?>


                <?php if (!empty($description)) : ?>
                    <p class="type-p1">
                        <?php echo nl2br(esc_html($description)); ?>
                    </p>
                <?php endif; ?>

            </div>

        <?php endif; ?>


        <!-- Partner Proof Cards -->
        <?php if (!empty($items) && is_array($items)) : ?>

            <div class="partner-proof-grid">

                <?php foreach ($items as $index => $item) : ?>

                    <?php

                    $partner_type = $item['partner_type'] ?? '';
                    $testimonial  = $item['testimonial'] ?? '';
                    $partner_image = $item['partner_image'] ?? [];
                    $partner_name = $item['partner_name'] ?? '';
                    $partner_role = $item['partner_role'] ?? '';

                    /*
                     * Card accent classes:
                     * 1 = Indigo
                     * 2 = Coral
                     * 3 = Peach
                     * Then repeat.
                     */
                    $card_classes = array(
                        'partner-card-indigo',
                        'partner-card-coral',
                        'partner-card-peach',
                    );

                    $card_class = $card_classes[$index % 3];

                    ?>

                    <article class="partner-proof-card <?php echo esc_attr($card_class); ?>">

                        <div class="partner-card-accent"></div>


                        <div class="partner-proof-card-top type-p3">

                            <?php if (!empty($partner_type)) : ?>
                                <span class="partner-relationship">
                                    <?php echo esc_html($partner_type); ?>
                                </span>
                            <?php endif; ?>


                            <div class="partner-quote-mark type-p2">
                                “
                            </div>

                        </div>


                        <?php if (!empty($testimonial)) : ?>
                            <blockquote class="partner-quote type-p2">
                                <?php echo nl2br(esc_html($testimonial)); ?>
                            </blockquote>
                        <?php endif; ?>


                        <?php if (
                            !empty($partner_image) ||
                            !empty($partner_name) ||
                            !empty($partner_role)
                        ) : ?>

                            <div class="partner-person">

                                <?php if (!empty($partner_image)) : ?>

                                    <div class="partner-image">

                                        <?php

                                        /*
                                         * Supports ACF image return formats:
                                         * Array, ID, or URL
                                         */

                                        if (is_array($partner_image)) {

                                            $image_url = $partner_image['url'] ?? '';
                                            $image_alt = $partner_image['alt'] ?? $partner_name;

                                        } elseif (is_numeric($partner_image)) {

                                            $image_url = wp_get_attachment_image_url(
                                                $partner_image,
                                                'medium'
                                            );

                                            $image_alt = $partner_name;

                                        } else {

                                            $image_url = $partner_image;
                                            $image_alt = $partner_name;

                                        }

                                        ?>

                                        <?php if (!empty($image_url)) : ?>

                                            <img
                                                src="<?php echo esc_url($image_url); ?>"
                                                alt="<?php echo esc_attr($image_alt); ?>"
                                                loading="lazy"
                                            >

                                        <?php endif; ?>

                                    </div>

                                <?php endif; ?>


                                <div class="partner-details">

                                    <?php if (!empty($partner_name)) : ?>
                                        <p class="type-p2">
                                            <?php echo esc_html($partner_name); ?>
                                    </p>
                                    <?php endif; ?>


                                    <?php if (!empty($partner_role)) : ?>
                                        <p class="type-p3">
                                            <?php echo esc_html($partner_role); ?>
                                        </p>
                                    <?php endif; ?>

                                </div>

                            </div>

                        <?php endif; ?>

                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>