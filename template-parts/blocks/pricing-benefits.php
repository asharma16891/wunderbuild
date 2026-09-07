<?php

$fields = $args['fields'] ?? [];


$hide_hero = !empty($fields['hero_hide_section']);

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';



$benefits_cards = $fields['benefits_cards'] ?? [];

?>

<?php if (!$hide_hero) : ?>

<section class="pricing-benefits">

    <div class="wrap">

        <div class="section-head">

            <?php if (!empty($heading)) : ?>
                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p class="type-p1">
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>

        </div>

        <?php if (!empty($benefits_cards)) : ?>

            <div class="benefits-layout">

                <?php foreach ($benefits_cards as $index => $card) : ?>

                    <?php
                    $icon             = $card['icon'] ?? [];
                    $card_heading     = $card['heading'] ?? '';
                    $card_description = $card['description'] ?? '';

                    $card_class = 'card-' . ($index + 1);
                    ?>

                    <div class="benefit-card wb-card-white wb-card--medium <?php echo esc_attr($card_class); ?>">

                        <?php if (!empty($icon['url'])) : ?>

                            <div class="icon">
                                <img
                                    class="emoji"
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($icon['alt'] ?? $card_heading); ?>"
                                >
                            </div>

                        <?php endif; ?>

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

                    <?php if ($index === 1) : ?>

                        <div class="center-circle">

                            <div class="circle">

                                <h4>One Simple Plan</h4>

                                <p>Everything your team needs</p>

                            </div>

                        </div>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>

<?php endif; ?>