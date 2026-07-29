<?php

$badge             = get_field('badge');
$heading           = get_field('heading');
$description       = get_field('description');

$comparison = array(
    array(
        'class'       => 'comparison-box--left',
        'small_title' => get_field('left_small_title'),
        'heading'     => get_field('left_heading'),
        'icon'        => get_field('left_icon'),
        'items'       => get_field('left_items'),
    ),
    array(
        'class'       => 'comparison-box--right',
        'small_title' => get_field('right_small_title'),
        'heading'     => get_field('right_heading'),
        'icon'        => get_field('right_icon'),
        'items'       => get_field('right_items'),
    ),
);

$primary_button   = get_field('primary_button');
$secondary_button = get_field('secondary_button');



?>



<section class="comparison-section">

    <div class="wrap">

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

        <div class="comparison-wrapper">

            <?php foreach ($comparison as $card) : ?>

                <?php
                get_template_part(
                    'components/comparison-card',
                    null,
                    $card
                );
                ?>

            <?php endforeach; ?>

        </div>

        <div class="comparison-cta">

            <?php if ($primary_button) : ?>

                <a class="btn btn-primary"
                    href="<?php echo esc_url($primary_button['url']); ?>"
                    target="<?php echo esc_attr($primary_button['target'] ?: '_self'); ?>">

                    <?php echo esc_html($primary_button['title']); ?>

                </a>

            <?php endif; ?>


            <?php if ($secondary_button) : ?>

                <a class="btn btn-dark"
                    href="<?php echo esc_url($secondary_button['url']); ?>"
                    target="<?php echo esc_attr($secondary_button['target'] ?: '_self'); ?>">

                    <?php echo esc_html($secondary_button['title']); ?>

                </a>

            <?php endif; ?>

        </div>

    </div>

</section>