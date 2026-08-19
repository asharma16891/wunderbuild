<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading        = $fields['heading'] ?? '';
$feedback_steps = $fields['feedback_steps'] ?? [];

?>

<!-- Section 07: How Feedback Moves -->
<section class="wb-feedback-flow">

    <div class="wrap">

        <!-- Section Heading -->
        <?php if ($heading) : ?>
            <div class="section-head">
                <h2>
                    <?php echo nl2br(esc_html($heading)); ?>
                </h2>
            </div>
        <?php endif; ?>


        <!-- Feedback Steps -->
        <?php if (!empty($feedback_steps)) : ?>

            <div class="wb-feedback-flow__steps">

                <?php foreach ($feedback_steps as $index => $step) : ?>

                    <?php

                    $step_number      = $step['step_number'] ?? '';
                    $icon             = $step['icon'] ?? '';
                    $step_heading     = $step['step_heading'] ?? '';
                    $step_description = $step['step_description'] ?? '';

                    $is_last_step = ($index === count($feedback_steps) - 1);

                    ?>

                    <article class="wb-feedback-step">

                        <div class="wb-feedback-step__visual">

                            <?php if ($step_number) : ?>
                                <div class="wb-feedback-step__number">
                                    <?php echo esc_html($step_number); ?>
                                </div>
                            <?php endif; ?>


                            <?php if (!$is_last_step) : ?>
                                <div class="wb-feedback-step__connector"></div>
                            <?php endif; ?>

                        </div>


                        <div class="wb-feedback-step__content">

                            <?php if (!empty($icon)) : ?>

                                <div class="wb-feedback-step__icon">

                                    <img
                                        src="<?php echo esc_url($icon['url']); ?>"
                                        alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
                                    >

                                </div>

                            <?php endif; ?>


                            <?php if ($step_heading) : ?>
                                <h3>
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