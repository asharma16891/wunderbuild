<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';

$card_1_heading     = $fields['card_1_heading'] ?? '';
$card_1_description = $fields['card_1_description'] ?? '';
$card_1_image       = $fields['card_1_image'] ?? null;

$card_2_heading     = $fields['card_2_heading'] ?? '';
$card_2_description = $fields['card_2_description'] ?? '';
$card_2_image       = $fields['card_2_image'] ?? null;

$card_3_heading     = $fields['card_3_heading'] ?? '';
$card_3_description = $fields['card_3_description'] ?? '';
$card_3_image       = $fields['card_3_image'] ?? null;

?>

<!-- Section 02: Context -->
<section class="wb-about-context section-global">

    <div class="wrap">

        <!-- Section Heading -->
        <?php if ($heading) : ?>
            <div class="section-head">

                <h2>
                    <?php echo nl2br(esc_html($heading)); ?>
                </h2>

            </div>
        <?php endif; ?>


        <!-- Context Cards -->
        <div class="wb-about-context__grid">

            <!-- Card 01 -->
            <article class="wb-context-card wb-card-white wb-card--medium">

                <?php if (!empty($card_1_image)) : ?>
                    <div class="wb-context-card__icon wb-context-card__icon--indigo">

                        <?php
                        echo wp_get_attachment_image(
                            $card_1_image['ID'],
                            'thumbnail',
                            false,
                            array(
                                'alt' => $card_1_image['alt'] ?: $card_1_heading,
                            )
                        );
                        ?>

                    </div>
                <?php endif; ?>

                <div class="wb-context-card__content">

                    <?php if ($card_1_heading) : ?>
                        <h3 class="type-h5">
                            <?php echo esc_html($card_1_heading); ?>
                        </h3>
                    <?php endif; ?>

                    <?php if ($card_1_description) : ?>
                        <p>
                            <?php echo nl2br(esc_html($card_1_description)); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </article>


            <!-- Card 02 -->
            <article class="wb-context-card wb-card-white wb-card--medium">

                <?php if (!empty($card_2_image)) : ?>
                    <div class="wb-context-card__icon wb-context-card__icon--coral">

                        <?php
                        echo wp_get_attachment_image(
                            $card_2_image['ID'],
                            'thumbnail',
                            false,
                            array(
                                'alt' => $card_2_image['alt'] ?: $card_2_heading,
                            )
                        );
                        ?>

                    </div>
                <?php endif; ?>

                <div class="wb-context-card__content">

                    <?php if ($card_2_heading) : ?>
                        <h3 class="type-h5">
                            <?php echo esc_html($card_2_heading); ?>
                        </h3>
                    <?php endif; ?>

                    <?php if ($card_2_description) : ?>
                        <p>
                            <?php echo nl2br(esc_html($card_2_description)); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </article>


            <!-- Card 03 -->
            <article class="wb-context-card wb-card-white wb-card--medium">

                <?php if (!empty($card_3_image)) : ?>
                    <div class="wb-context-card__icon wb-context-card__icon--peach">

                        <?php
                        echo wp_get_attachment_image(
                            $card_3_image['ID'],
                            'thumbnail',
                            false,
                            array(
                                'alt' => $card_3_image['alt'] ?: $card_3_heading,
                            )
                        );
                        ?>

                    </div>
                <?php endif; ?>

                <div class="wb-context-card__content">

                    <?php if ($card_3_heading) : ?>
                        <h3 class="type-h5">
                            <?php echo esc_html($card_3_heading); ?>
                        </h3>
                    <?php endif; ?>

                    <?php if ($card_3_description) : ?>
                        <p>
                            <?php echo nl2br(esc_html($card_3_description)); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </article>

        </div>

    </div>

</section>