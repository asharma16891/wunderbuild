<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';

$item_01 = $fields['item_01'] ?? [];
$item_02 = $fields['item_02'] ?? [];
$item_03 = $fields['item_03'] ?? [];
$item_04 = $fields['item_04'] ?? [];

?>

<section class="access-timeline section-space" style="background: var(--pearl);">

    <div class="wrap">

        <div class="section-head">

            <?php if (!empty($heading)) : ?>
                <h2><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>

        </div>


        <div class="access-timeline__wrap">

            <div class="access-timeline__line">

                <svg
                    class="access-wave"
                    viewBox="0 0 1400 180"
                    preserveAspectRatio="none"
                    aria-hidden="true"
                >

                    <path
                        d="M0 90
                           C100 20, 200 20, 300 90
                           S500 160, 600 90
                           S800 20, 900 90
                           S1100 160, 1200 90
                           S1350 20, 1400 60"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    />

                </svg>

            </div>


            <!-- 01 -->
            <article class="access-point access-point--01">

                <div class="access-point__marker">
                    <span>01</span>
                </div>

                <div class="access-point__content">

                    <?php if (!empty($item_01['heading'])) : ?>
                        <h3>
                            <?php echo esc_html($item_01['heading']); ?>
                        </h3>
                    <?php endif; ?>


                    <?php if (!empty($item_01['description'])) : ?>
                        <p>
                            <?php echo esc_html($item_01['description']); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </article>


            <!-- 02 -->
            <article class="access-point access-point--02">

                <div class="access-point__marker">
                    <span>02</span>
                </div>

                <div class="access-point__content">

                    <?php if (!empty($item_02['heading'])) : ?>
                        <h3>
                            <?php echo esc_html($item_02['heading']); ?>
                        </h3>
                    <?php endif; ?>


                    <?php if (!empty($item_02['description'])) : ?>
                        <p>
                            <?php echo esc_html($item_02['description']); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </article>


            <!-- 03 -->
            <article class="access-point access-point--03">

                <div class="access-point__marker">
                    <span>03</span>
                </div>

                <div class="access-point__content">

                    <?php if (!empty($item_03['heading'])) : ?>
                        <h3>
                            <?php echo esc_html($item_03['heading']); ?>
                        </h3>
                    <?php endif; ?>


                    <?php if (!empty($item_03['description'])) : ?>
                        <p>
                            <?php echo esc_html($item_03['description']); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </article>


            <!-- 04 -->
            <article class="access-point access-point--04">

                <div class="access-point__marker">
                    <span>04</span>
                </div>

                <div class="access-point__content">

                    <?php if (!empty($item_04['heading'])) : ?>
                        <h3>
                            <?php echo esc_html($item_04['heading']); ?>
                        </h3>
                    <?php endif; ?>


                    <?php if (!empty($item_04['description'])) : ?>
                        <p>
                            <?php echo esc_html($item_04['description']); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </article>

        </div>

    </div>

</section>