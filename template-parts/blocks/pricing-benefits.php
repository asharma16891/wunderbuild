<?php

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';



$benefits_cards = $fields['benefits_cards'] ?? [];

?>

<section class="pricing-benefits">

    <div class="wrap">

        <div class="section-head">

            <?php if (!empty($heading)) : ?>
                <?php echo wp_kses_post($heading); ?>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p>
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>

        </div>


        <?php if (!empty($benefits_cards)) : ?>

            <div class="benefits-layout">

                <?php foreach ($benefits_cards as $index => $card) : ?>

                    <?php
                    $icon        = $card['icon'] ?? [];
                    $card_heading = $card['heading'] ?? '';
                    $card_description = $card['description'] ?? '';

                    /*
                     * Generate card-1, card-2, card-3 etc.
                     */
                    $card_class = 'card-' . ($index + 1);
                    ?>

                    <div class="benefit-card <?php echo esc_attr($card_class); ?>">

                        <?php if (!empty($icon['url'])) : ?>

                            <div class="icon">

                                <img class="emoji"
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($icon['alt'] ?? $card_heading); ?>"
                                >

                            </div>

                        <?php endif; ?>


                        <?php if (!empty($card_heading)) : ?>

                            <h3>
                                <?php echo esc_html($card_heading); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if (!empty($card_description)) : ?>

                            <p>
                                <?php echo esc_html($card_description); ?>
                            </p>

                        <?php endif; ?>

                    </div>

                    <?php
                    /*
                     * Add center circle after the second card.
                     */
                    if ($index === 1) :
                    ?>

                         <div class="center-circle">

                <div class="circle">

                    <h3>One Simple Plan</h3>

                    <span>Everything your team needs</span>

                </div>

            </div>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>