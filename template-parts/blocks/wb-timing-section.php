<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

/*
|--------------------------------------------------------------------------
| ACF Fields
|--------------------------------------------------------------------------
*/

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

$card_one = $fields['card_one'] ?? [];
$card_two = $fields['card_two'] ?? [];

?>

<section class="wb-timing-section">

    <div class="wb-timing-inner">

        <!-- Heading -->
        <div class="wb-timing-heading">

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


        <!-- Main Content -->
        <div class="wb-timing-layout">


            <!-- LEFT : TIME VISUAL - STATIC -->
            <div class="wb-timing-visual">

                <div class="wb-timing-visual-top">
                    <span>EXPECTED WINDOW</span>
                    <span>01</span>
                </div>


                <div class="wb-timing-clock">

                    <div class="wb-clock-ring wb-clock-ring-outer"></div>
                    <div class="wb-clock-ring wb-clock-ring-middle"></div>


                    <div class="wb-clock-center">
                        <strong>~2</strong>
                        <span>weeks max.</span>
                    </div>


                    <span class="wb-clock-dot dot-1"></span>
                    <span class="wb-clock-dot dot-2"></span>
                    <span class="wb-clock-dot dot-3"></span>
                    <span class="wb-clock-dot dot-4"></span>

                </div>


                <div class="wb-timing-visual-bottom">

                    <div>
                        <strong>Hours</strong>
                        <span>Smaller migrations</span>
                    </div>


                    <div>
                        <strong>Days</strong>
                        <span>Well-prepared files</span>
                    </div>


                    <div>
                        <strong>~2 weeks</strong>
                        <span>Larger migrations</span>
                    </div>

                </div>

            </div>


            <!-- RIGHT : FEATURES -->
            <div class="wb-timing-features">


                <!-- FEATURE 01 -->
                <article class="wb-timing-feature">

                    <div class="wb-timing-feature-icon wb-icon-lime">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 3v12"></path>
                            <path d="m7 10 5 5 5-5"></path>
                            <path d="M5 21h14"></path>
                        </svg>

                    </div>


                    <div class="wb-timing-feature-content">

                        <?php if (!empty($card_one['label'])) : ?>

                            <span>
                                <?php echo esc_html($card_one['label']); ?>
                            </span>

                        <?php endif; ?>


                        <?php if (!empty($card_one['heading'])) : ?>

                            <h3>
                                <?php echo esc_html($card_one['heading']); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if (!empty($card_one['description'])) : ?>

                            <p>
                                <?php echo esc_html($card_one['description']); ?>
                            </p>

                        <?php endif; ?>

                    </div>


                    <div class="wb-feature-arrow">
                        ↗
                    </div>

                </article>


                <!-- FEATURE 02 -->
                <article class="wb-timing-feature">

                    <div class="wb-timing-feature-icon wb-icon-indigo">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="8"></circle>
                            <path d="M12 8v4l3 2"></path>
                        </svg>

                    </div>


                    <div class="wb-timing-feature-content">

                        <?php if (!empty($card_two['label'])) : ?>

                            <span>
                                <?php echo esc_html($card_two['label']); ?>
                            </span>

                        <?php endif; ?>


                        <?php if (!empty($card_two['heading'])) : ?>

                            <h3>
                                <?php echo esc_html($card_two['heading']); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if (!empty($card_two['description'])) : ?>

                            <p>
                                <?php echo esc_html($card_two['description']); ?>
                            </p>

                        <?php endif; ?>

                    </div>


                    <div class="wb-feature-arrow">
                        ↗
                    </div>

                </article>


                <!-- SMALL NOTE - STATIC -->
                <div class="wb-timing-note">

                    <span class="wb-note-mark">i</span>

                    <p>
                        Timing isn't guaranteed. The onboarding team confirms
                        the likely window after reviewing your files and the
                        current migration queue.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>