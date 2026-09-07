<?php

$fields = $args['fields'] ?? [];


$hide_hero = !empty($fields['hero_hide_section']);

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$button      = $fields['button'] ?? [];
$image       = $fields['image'] ?? [];
$academy_cards = $fields['academy_cards'] ?? [];

?>


<?php if (!$hide_hero) : ?>

<section class="academy-section section-global">

    <div class="wrap">

        <div class="section-head">

            <?php if ($heading) : ?>

                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>

            <?php endif; ?>


            <?php if ($description) : ?>

                <p class="type-p1">
                    <?php echo esc_html($description); ?>
                </p>

            <?php endif; ?>


            <?php if (!empty($button)) : ?>

                <a
                    href="<?php echo esc_url($button['url'] ?? '#'); ?>"
                    target="<?php echo esc_attr($button['target'] ?? '_self'); ?>"
                    class="btn btn-primary mt-6"
                >
                    <?php echo esc_html($button['title'] ?? ''); ?>
                </a>

            <?php endif; ?>

        </div>


        <!-- Academy Media -->

        <?php if (!empty($image)) : ?>

            <div class="academy-media">

                <img
                    src="<?php echo esc_url($image['url'] ?? ''); ?>"
                    alt="<?php echo esc_attr($image['alt'] ?? ''); ?>"
                >

                <!-- Static Badge -->

                <div class="academy-media-badge">

                    <span class="academy-check">
                        ✓
                    </span>

                    <div>

                        <strong>
                            Learning progress
                        </strong>

                        <small>
                            Track courses and modules
                        </small>

                    </div>

                </div>

            </div>

        <?php endif; ?>


        <!-- Academy Cards -->

        <?php if (!empty($academy_cards)) : ?>

            <div class="academy-features">

                <?php foreach ($academy_cards as $card) : ?>

                    <div class="academy-feature">

                        <?php if (!empty($card['number'])) : ?>

                            <span class="academy-number">
                                <?php echo esc_html($card['number']); ?>
                            </span>

                        <?php endif; ?>


                        <div>

                            <?php if (!empty($card['heading'])) : ?>

                                <h3 class="type-h5">
                                    <?php echo esc_html($card['heading']); ?>
                                </h3>

                            <?php endif; ?>


                            <?php if (!empty($card['description'])) : ?>

                                <p class="common-para">
                                    <?php echo esc_html($card['description']); ?>
                                </p>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>


<?php endif; ?>