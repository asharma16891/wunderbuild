<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading        = $fields['heading'] ?? '';
$feedback_steps = $fields['feedback_steps'] ?? [];

?>

<!-- =========================================================
     SECTION 07: HOW FEEDBACK MOVES
========================================================= -->

<section class="wb-feedback-flow section-global">

    <div class="wrap">

        <!-- =====================================================
             SECTION HEADING
        ====================================================== -->

        <?php if ($heading) : ?>

            <div class="section-head">

                <h2>
                    <?php echo nl2br(esc_html($heading)); ?>
                </h2>

            </div>

        <?php endif; ?>


        <!-- =====================================================
             FEEDBACK CARDS
        ====================================================== -->

        <?php if (!empty($feedback_steps)) : ?>

            <div class="wb-feedback-flow__grid">

                <?php foreach ($feedback_steps as $index => $step) : ?>

                    <?php

                    /*
                     * ----------------------------------------------------------
                     * BACKEND / ACF READY FIELDS
                     * ----------------------------------------------------------
                     */

                    $icon             = $step['icon'] ?? '';
                    $step_heading     = $step['step_heading'] ?? '';
                    $step_description = $step['step_description'] ?? '';

                    ?>

                    <article class="wb-feedback-card">

                        <!-- Icon -->

                        <?php if (!empty($icon)) : ?>

                            <div class="wb-feedback-card__icon">

                                <img
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
                                >

                            </div>

                        <?php endif; ?>


                        <!-- Content -->

                        <div class="wb-feedback-card__content">

                            <?php if ($step_heading) : ?>

                                <h3 class="type-h5">
                                    <?php echo nl2br(esc_html($step_heading)); ?>
                                </h3>

                            <?php endif; ?>


                            <?php if ($step_description) : ?>

                                <p>
                                    <?php echo nl2br(esc_html($step_description)); ?>
                                </p>

                            <?php endif; ?>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>