<?php

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

$left_cards = $fields['left_cards'] ?? [];

$right_card = $fields['right_card'] ?? [];

$right_icon        = $right_card['icon'] ?? [];
$right_heading     = $right_card['heading'] ?? '';
$right_description = $right_card['description'] ?? '';

$button = $fields['button'] ?? [];

$button_text = $button['text'] ?? '';
$button_link = $button['link'] ?? [];

?>

<section class="support-onboarding section-global">

    <div class="wrap">

        <?php if ($heading || $description) : ?>

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

        <?php endif; ?>


        <div class="support-layout">


            <!-- LEFT CARDS -->
            <div class="support-side">

                <?php if (!empty($left_cards)) : ?>

                    <?php foreach ($left_cards as $card) : ?>

                        <?php
                        $icon        = $card['icon'] ?? [];
                        $card_heading = $card['heading'] ?? '';
                        $card_description = $card['description'] ?? '';
                        ?>

                        <div class="support-box wb-card-white wb-card--medium">

                            <?php if (!empty($icon['url'])) : ?>

                                <div class="support-icons">

                                    <img class="emoji"
                                        src="<?php echo esc_url($icon['url']); ?>"
                                        alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
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

                    <?php endforeach; ?>

                <?php endif; ?>

            </div>


            <!-- CENTER -->
            <div class="support-center">

                <div class="center-circles">

                    <svg width="70" height="70" viewBox="0 0 24 24" fill="none">

                        <path d="M12 3L20 7V12C20 17 16.8 20.7 12 22C7.2 20.7 4 17 4 12V7L12 3Z"
                            stroke="#1d1c1b"
                            stroke-width="1.8" />

                        <path d="M9 12L11 14L15.5 9.5"
                            stroke="#1d1c1b"
                            stroke-width="1.8"
                            stroke-linecap="round" />

                    </svg>

                    <h4>Support Hub</h4>

                   

                </div>

            </div>


            <!-- RIGHT -->
            <div class="support-side">

                <?php if (!empty($right_heading) || !empty($right_description) || !empty($right_icon['url'])) : ?>

                    <div class="support-box wb-card-white wb-card--medium">

                        <?php if (!empty($right_icon['url'])) : ?>

                            <div class="support-icons">

                                <img
                                    src="<?php echo esc_url($right_icon['url']); ?>"
                                    alt="<?php echo esc_attr($right_icon['alt'] ?? ''); ?>"
                                >

                            </div>

                        <?php endif; ?>


                        <?php if (!empty($right_heading)) : ?>

                            <h3 class="type-h5">
                                <?php echo esc_html($right_heading); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if (!empty($right_description)) : ?>

                            <p class="common-para">
                                <?php echo esc_html($right_description); ?>
                            </p>

                        <?php endif; ?>

                    </div>

                <?php endif; ?>


                <?php if (!empty($button_link['url'])) : ?>

                    <a
                        href="<?php echo esc_url($button_link['url']); ?>"
                        class="btn btn-primary"
                        target="<?php echo esc_attr($button_link['target'] ?? '_self'); ?>"
                    >
                        <?php echo esc_html($button_text); ?> →
                    </a>

                <?php endif; ?>

            </div>


        </div>

    </div>

</section>