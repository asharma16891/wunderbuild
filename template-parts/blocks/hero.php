<?php

$badge       = get_field('hero_badge');
$title       = get_field('hero_title');
$description = get_field('hero_description');

$primary     = get_field('hero_primary_button');
$secondary   = get_field('hero_secondary_button');

$hero_image = get_field('hero_image');



?>

<section class="hero bg-field">
    <div class="blueprint-lines"></div>

    <div class="wrap hero-grid">

        <!-- Hero Content -->
        <div class="hero-content">

            <?php if ($badge) : ?>
                <div class="eyebrow">
                    <span class="dot"></span>
                    <?php echo esc_html($badge); ?>
                </div>
            <?php endif; ?>

            <?php if ($title) : ?>
                <h1><?php echo nl2br(esc_html($title)); ?></h1>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p class="lead">
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>

            <div class="hero-cta">

                <?php if ($primary) : ?>
                    <a
                        href="<?php echo esc_url($primary['url']); ?>"
                        class="btn btn-primary"
                        target="<?php echo esc_attr($primary['target'] ?: '_self'); ?>">
                        <?php echo esc_html($primary['title']); ?>
                    </a>
                <?php endif; ?>

                <?php if ($secondary) : ?>
                    <a
                        href="<?php echo esc_url($secondary['url']); ?>"
                        class="btn btn-ghost"
                        target="<?php echo esc_attr($secondary['target'] ?: '_self'); ?>">
                        <?php echo esc_html($secondary['title']); ?>
                    </a>
                <?php endif; ?>

            </div>

        </div>
<div class="hero-image">

    <img
        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-image.png"
        alt="Hero Image"
        class="hero-image-img">

</div>
    </div>

</section>