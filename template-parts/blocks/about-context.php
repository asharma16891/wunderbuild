<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';

$card_1_heading     = $fields['card_1_heading'] ?? '';
$card_1_description = $fields['card_1_description'] ?? '';

$card_2_heading     = $fields['card_2_heading'] ?? '';
$card_2_description = $fields['card_2_description'] ?? '';

$card_3_heading     = $fields['card_3_heading'] ?? '';
$card_3_description = $fields['card_3_description'] ?? '';

?>

<!-- Section 02: Context -->
<section class="wb-about-context">

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
            <article class="wb-context-card">

                <div class="wb-context-card__icon wb-context-card__icon--indigo">

                    <!-- Static Icon -->
                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                    >
                        <path
                            d="M4 20V5C4 4.44772 4.44772 4 5 4H10C10.5523 4 11 4.44772 11 5V20"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M11 9H18C18.5523 9 19 9.44772 19 10V20"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M2 20H22"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />
                        <path
                            d="M7 8H8"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />
                        <path
                            d="M7 12H8"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />
                        <path
                            d="M14 13H16"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />
                    </svg>

                </div>

                <div class="wb-context-card__content">

                    <?php if ($card_1_heading) : ?>
                        <h3>
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
            <article class="wb-context-card">

                <div class="wb-context-card__icon wb-context-card__icon--coral">

                    <!-- Static Icon -->
                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                    >
                        <path
                            d="M12 3L21 20H3L12 3Z"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M12 9V13"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />
                        <circle
                            cx="12"
                            cy="16.5"
                            r="0.8"
                            fill="currentColor"
                        />
                    </svg>

                </div>

                <div class="wb-context-card__content">

                    <?php if ($card_2_heading) : ?>
                        <h3>
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
            <article class="wb-context-card">

                <div class="wb-context-card__icon wb-context-card__icon--peach">

                    <!-- Static Icon -->
                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                    >
                        <path
                            d="M5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />
                        <path
                            d="M5 12V16C5 16.5523 5.44772 17 6 17H8V12H5Z"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M19 12V16C19 16.5523 18.5523 17 18 17H16V12H19Z"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M16 18C15 19.2 13.8 20 12 20H10"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />
                    </svg>

                </div>

                <div class="wb-context-card__content">

                    <?php if ($card_3_heading) : ?>
                        <h3>
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