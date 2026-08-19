<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$address     = $fields['address'] ?? '';

?>

<section class="wb-location">

    <div class="wrap">

        <div class="wb-location__inner">

            <!-- Left Content -->
            <div class="wb-location__content">

                <?php if ($heading) : ?>
                    <div class="section-head">

                        <h2>
                            <?php echo nl2br(esc_html($heading)); ?>
                        </h2>

                    </div>
                <?php endif; ?>


                <?php if ($description) : ?>
                    <p class="wb-location__description">
                        <?php echo nl2br(esc_html($description)); ?>
                    </p>
                <?php endif; ?>

            </div>


            <!-- Location Card -->
            <div class="wb-location__card">

                <div class="wb-location__card-top">

                    <div class="wb-location__icon">

                        <!-- Location Icon -->
                        <svg
                            width="28"
                            height="28"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                        >
                            <path
                                d="M20 10C20 15 12 22 12 22C12 22 4 15 4 10C4 5.58 7.58 2 12 2C16.42 2 20 5.58 20 10Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />

                            <circle
                                cx="12"
                                cy="10"
                                r="3"
                                stroke="currentColor"
                                stroke-width="1.8"
                            />
                        </svg>

                    </div>

                </div>


                <?php if ($address) : ?>

                    <div class="wb-location__address">

                        <span class="wb-location__eyebrow">
                            Address
                        </span>

                        <address>
                            <?php echo nl2br(esc_html($address)); ?>
                        </address>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>