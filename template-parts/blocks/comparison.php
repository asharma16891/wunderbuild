<?php

$fields = $args['fields'] ?? [];

$badge       = $fields['badge'] ?? '';
$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

$comparison = [
    [
        'class'       => 'comparison-box--left',
        'small_title' => $fields['left_small_title'] ?? '',
        'heading'     => $fields['left_heading'] ?? '',
        'icon'        => $fields['left_icon'] ?? [],
        'items'       => $fields['left_items'] ?? [],
    ],
    [
        'class'       => 'comparison-box--right',
        'small_title' => $fields['right_small_title'] ?? '',
        'heading'     => $fields['right_heading'] ?? '',
        'icon'        => $fields['right_icon'] ?? [],
        'items'       => $fields['right_items'] ?? [],
    ],
];

$primary_button   = $fields['primary_button'] ?? [];
$secondary_button = $fields['secondary_button'] ?? [];

?>

<section class="comparison-section">

    <div class="wrap">

        <div class="comparison-head">

            <?php if (!empty($badge)) : ?>
                <span class="badge comparison-badge">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if (!empty($heading)) : ?>
                <h2><?php echo nl2br(esc_html($heading)); ?></h2>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
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

            <?php if (!empty($primary_button)) : ?>

                <a
                    class="btn btn-primary"
                    href="<?php echo esc_url($primary_button['url']); ?>"
                    target="<?php echo esc_attr($primary_button['target'] ?: '_self'); ?>">

                    <?php echo esc_html($primary_button['title']); ?>

                </a>

            <?php endif; ?>

            <?php if (!empty($secondary_button)) : ?>

                <a
                    class="btn btn-dark"
                    href="<?php echo esc_url($secondary_button['url']); ?>"
                    target="<?php echo esc_attr($secondary_button['target'] ?: '_self'); ?>">

                    <?php echo esc_html($secondary_button['title']); ?>

                </a>

            <?php endif; ?>

        </div>

    </div>

</section>