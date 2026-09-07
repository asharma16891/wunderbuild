<?php

$fields = $args['fields'] ?? [];

$heading       = $fields['heading'] ?? '';
$description   = $fields['description'] ?? '';
$workflow_cards = $fields['workflow_cards'] ?? [];

?>

<section class="pricing-workflow section-global">

    <div class="wrap">

        <div class="section-head">

            <?php if (!empty($heading)) : ?>
             <?php echo wp_kses_post($heading); ?>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p class="type-p1">
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>

        </div>


        <?php if (!empty($workflow_cards)) : ?>

            <div class="workflow-wrapper">

                <!-- SVG Road -->
                <svg
                    class="workflow-svg"
                    viewBox="0 0 1600 520"
                    preserveAspectRatio="none">

                    <path
                        id="workflow-path"
                        d="
                            M40 260
                            C180 90 340 90 470 260
                            S760 430 930 260
                            S1220 90 1390 260
                            S1560 430 1600 260"
                        fill="none" />

                </svg>


                <!-- Timeline -->
                <div class="workflow-timeline">

                    <?php foreach ($workflow_cards as $index => $card) : ?>

                        <?php
                        $number      = $card['number'] ?? '';
                        $card_heading = $card['heading'] ?? '';
                        $card_description = $card['description'] ?? '';

                        // First card active by default
                        $active_class = ($index === 0) ? ' active' : '';
                        ?>

                        <article class="workflow-item<?php echo esc_attr($active_class); ?>">

                            <button
                                class="workflow-dot<?php echo esc_attr($active_class); ?>"
                                type="button"
                                aria-label="<?php echo esc_attr($card_heading); ?>">

                                <span>
                                    <?php echo esc_html($number); ?>
                                </span>

                            </button>


                            <div class="workflow-card wb-card-white wb-card--small">

                                <?php if (!empty($card_heading)) : ?>

                                    <h3 class="type-h5">
                                        <?php echo esc_html($card_heading); ?>
                                    </h3>

                                <?php endif; ?>


                                <?php if (!empty($card_description)) : ?>

                                    <p class="common-para">
                                        <?php echo esc_html($card_description); ?>
                                    </p>

                                <?php endif; ?>

                            </div>

                        </article>

                    <?php endforeach; ?>

                </div>

            </div>

        <?php endif; ?>

    </div>

</section>