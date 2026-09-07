<?php

$fields = $args['fields'] ?? [];


$hide_hero = !empty($fields['hero_hide_section']);

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$image       = $fields['image'] ?? '';
$points      = $fields['training_points'] ?? [];
$button      = $fields['button'] ?? '';

?>

<?php if (!$hide_hero) : ?>

    <section class="product-training section-global">

        <div class="wrap">

            <div class="training-grid">

                <!-- Content -->
                <div class="training-content">

                    <?php if (!empty($heading)) : ?>
                        <h2 class="type-h3">
                            <?php echo esc_html($heading); ?>
                        </h2>
                    <?php endif; ?>


                    <?php if ($description) : ?>

                        <p class="common-para type-p2">
                            <?php echo esc_html($description); ?>
                        </p>

                    <?php endif; ?>


                    <?php if (!empty($points)) : ?>

                        <div class="training-points">

                            <?php foreach ($points as $point) : ?>

                                <div class="training-point">

                                    <?php if (!empty($point['number'])) : ?>

                                        <span class="point-number">
                                            <?php echo esc_html($point['number']); ?>
                                        </span>

                                    <?php endif; ?>


                                    <div>

                                        <?php if (!empty($point['heading'])) : ?>

                                            <h3>
                                                <?php echo esc_html($point['heading']); ?>
                                            </h3>

                                        <?php endif; ?>


                                        <?php if (!empty($point['text'])) : ?>

                                            <p class="common-para">
                                                <?php echo esc_html($point['text']); ?>
                                            </p>

                                        <?php endif; ?>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    <?php endif; ?>


                    <?php if (!empty($button)) : ?>

                        <a
                            href="<?php echo esc_url($button['url'] ?? '#'); ?>"
                            target="<?php echo esc_attr($button['target'] ?? '_self'); ?>"
                            class="btn btn-primary">
                            <?php echo esc_html($button['title'] ?? ''); ?>
                        </a>

                    <?php endif; ?>

                </div>


                <!-- Media -->
                <div class="training-media">

                    <?php if (!empty($image)) : ?>

                        <div class="training-image">

                            <img
                                src="<?php echo esc_url($image['url'] ?? ''); ?>"
                                alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">

                        </div>

                    <?php endif; ?>


                    <!-- Static Badge -->
                    <!-- <div class="training-badge">

                    <span>Training</span>

                    <strong>
                        Built around your team
                    </strong>

                </div> -->

                </div>

            </div>

        </div>

    </section>


<?php endif; ?>