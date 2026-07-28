<?php

$badge              = get_field('badge');
$heading            = get_field('heading');
$description        = get_field('description');

$left_title         = get_field('left_title');
$left_icon          = get_field('left_icon');
$left_items         = get_field('left_items');

$right_title        = get_field('right_title');
$right_icon         = get_field('right_icon');
$right_items        = get_field('right_items');

$primary_text       = get_field('primary_button_text');
$primary_link       = get_field('primary_button_link');

$secondary_text     = get_field('secondary_button_text');
$secondary_link     = get_field('secondary_button_link');

?>

<section class="comparison-section">

    <div class="wrap">

        <!-- Section Heading -->
        <div class="comparison-head">

            <?php if ($badge) : ?>
                <span class="badge comparison-badge">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if ($heading) : ?>
                <h2><?php echo nl2br(esc_html($heading)); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>

        </div>


        <div class="comparison-grid">

            <!-- WITHOUT -->
            <div class="comparison-card without-card">

                <div class="comparison-card-head">

                    <span class="comparison-icon">

                        <?php if ($left_icon) : ?>

                            <img src="<?php echo esc_url($left_icon['url']); ?>"
                                alt="<?php echo esc_attr($left_icon['alt']); ?>">

                        <?php else : ?>

                            −

                        <?php endif; ?>

                    </span>

                    <h3><?php echo esc_html($left_title); ?></h3>

                </div>


                <?php if ($left_items) : ?>

                    <div class="comparison-list">

                        <?php foreach ($left_items as $item) : ?>

                            <div class="comparison-item">

                                <span class="item-number">
                                    <?php echo esc_html($item['number']); ?>
                                </span>

                                <p>
                                    <?php echo esc_html($item['text']); ?>
                                </p>

                            </div>

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>

            </div>


            <!-- WITH -->
            <div class="comparison-card with-card">

                <div class="comparison-card-head">

                    <span class="comparison-icon">

                        <?php if ($right_icon) : ?>

                            <img src="<?php echo esc_url($right_icon['url']); ?>"
                                alt="<?php echo esc_attr($right_icon['alt']); ?>">

                        <?php else : ?>

                            ✓

                        <?php endif; ?>

                    </span>

                    <h3><?php echo esc_html($right_title); ?></h3>

                </div>


                <?php if ($right_items) : ?>

                    <div class="comparison-list">

                        <?php foreach ($right_items as $item) : ?>

                            <div class="comparison-item">

                                <span class="item-number">
                                    <?php echo esc_html($item['number']); ?>
                                </span>

                                <p>
                                    <?php echo esc_html($item['text']); ?>
                                </p>

                            </div>

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>

            </div>

        </div>


        <div class="comparison-cta">

            <?php if ($primary_link) : ?>

                <a
                    href="<?php echo esc_url($primary_link['url']); ?>"
                    target="<?php echo esc_attr($primary_link['target'] ?: '_self'); ?>"
                    class="btn btn-primary">

                    <?php echo esc_html($primary_text); ?>

                </a>

            <?php endif; ?>


            <?php if ($secondary_link) : ?>

                <a
                    href="<?php echo esc_url($secondary_link['url']); ?>"
                    target="<?php echo esc_attr($secondary_link['target'] ?: '_self'); ?>"
                    class="btn btn-dark">

                    <?php echo esc_html($secondary_text); ?>

                </a>

            <?php endif; ?>

        </div>

    </div>

</section>