<?php

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';
$problem_cards = $fields['problem_cards'] ?? [];

?>

<section class="adoption-problem section-global">

    <div class="wrap">

        <?php if ($heading) : ?>

            <div class="section-head">

                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>

            </div>

        <?php endif; ?>


        <?php if ($problem_cards) : ?>

            <div class="problem-flow">

                <?php foreach ($problem_cards as $card) : ?>

                    <div class="problem-card wb-card--medium">

                        <?php if (!empty($card['number'])) : ?>

                            <div class="problem-number">
                                <?php echo esc_html($card['number']); ?>
                            </div>

                        <?php endif; ?>


                        <?php if (!empty($card['card_heading'])) : ?>

                            <h3 class="type-h5">
                                <?php echo esc_html($card['card_heading']); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if (!empty($card['card_description'])) : ?>

                            <p class="common-para">
                                <?php echo esc_html($card['card_description']); ?>
                            </p>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>