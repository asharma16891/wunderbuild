<?php

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

$left_cards = $fields['left_cards'] ?? [];

$center_content = $fields['center_content'] ?? [];

$center_icon        = $center_content['icon'] ?? [];
$center_heading     = $center_content['heading'] ?? '';
$center_description = $center_content['description'] ?? '';

$right_card = $fields['right_card'] ?? [];

$right_icon        = $right_card['icon'] ?? [];
$right_heading     = $right_card['heading'] ?? '';
$right_description = $right_card['description'] ?? '';

$button = $fields['button'] ?? [];

$button_text = $button['text'] ?? '';
$button_link = $button['link'] ?? [];

?>

<section class="support-onboarding">

    <div class="wrap">

        <?php if ($heading || $description) : ?>

            <div class="section-head">

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

                        <div class="support-box">

                            <?php if (!empty($icon['url'])) : ?>

                                <div class="support-icons">

                                    <img class="emoji"
                                        src="<?php echo esc_url($icon['url']); ?>"
                                        alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
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

                    <?php endforeach; ?>

                <?php endif; ?>

            </div>


            <!-- CENTER -->
            <div class="support-center">

                <div class="center-circles">

                    <?php if (!empty($center_icon['url'])) : ?>

                        <img
                            src="<?php echo esc_url($center_icon['url']); ?>"
                            alt="<?php echo esc_attr($center_icon['alt'] ?? ''); ?>"
                        >

                    <?php endif; ?>


                    <?php if (!empty($center_heading)) : ?>

                        <h3>
                            <?php echo esc_html($center_heading); ?>
                        </h3>

                    <?php endif; ?>


                    <?php if (!empty($center_description)) : ?>

                        <span>
                            <?php echo esc_html($center_description); ?>
                        </span>

                    <?php endif; ?>

                </div>

            </div>


            <!-- RIGHT -->
            <div class="support-side">

                <?php if (!empty($right_heading) || !empty($right_description) || !empty($right_icon['url'])) : ?>

                    <div class="support-box">

                        <?php if (!empty($right_icon['url'])) : ?>

                            <div class="support-icons">

                                <img
                                    src="<?php echo esc_url($right_icon['url']); ?>"
                                    alt="<?php echo esc_attr($right_icon['alt'] ?? ''); ?>"
                                >

                            </div>

                        <?php endif; ?>


                        <?php if (!empty($right_heading)) : ?>

                            <h3>
                                <?php echo esc_html($right_heading); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if (!empty($right_description)) : ?>

                            <p>
                                <?php echo esc_html($right_description); ?>
                            </p>

                        <?php endif; ?>

                    </div>

                <?php endif; ?>


                <?php if (!empty($button_link['url'])) : ?>

                    <a
                        href="<?php echo esc_url($button_link['url']); ?>"
                        class="support-btn"
                        target="<?php echo esc_attr($button_link['target'] ?? '_self'); ?>"
                    >
                        <?php echo esc_html($button_text); ?> →
                    </a>

                <?php endif; ?>

            </div>


        </div>

    </div>

</section>