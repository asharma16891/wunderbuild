<?php

$badge       = get_field('badge');
$heading     = get_field('heading');
$description = get_field('description');

$items       = get_field('testimonials');

$button_text = get_field('button_text');
$button_link = get_field('button_link');

if (!$items) {
    return;
}

?>

<section class="testimonials bg-field">

    <div class="wrap">

        <div class="section-head center" style="margin-left:auto;margin-right:auto;">

            <?php if ($badge) : ?>
                <span class="badge badge-coral">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if ($heading) : ?>
                <h2><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>

        </div>

        <div class="t-slider-wrap">

            <div class="t-track-viewport">

                <div class="t-track" id="tTrack">

                    <?php foreach ($items as $item) : ?>

                        <div class="t-slide">

                            <div class="t-card">

                                <div class="t-stars">

                                    <?php
                                    $rating = !empty($item['rating']) ? (int) $item['rating'] : 5;

                                    for ($i = 1; $i <= $rating; $i++) :
                                    ?>

                                        <svg viewBox="0 0 24 24">
                                            <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                        </svg>

                                    <?php endfor; ?>

                                </div>

                                <p class="t-quote">
                                    <?php echo esc_html($item['review']); ?>
                                </p>

                                <div class="t-person">

                                    <div class="t-avatar">

                                        <?php if (!empty($item['avatar'])) : ?>

                                            <img
                                                src="<?php echo esc_url($item['avatar']['url']); ?>"
                                                alt="<?php echo esc_attr($item['avatar']['alt']); ?>">

                                        <?php endif; ?>

                                    </div>

                                    <div>

                                        <div class="name">
                                            <?php echo esc_html($item['name']); ?>
                                        </div>

                                        <div class="meta">
                                            <?php
                                            echo esc_html($item['company']);

                                            if (!empty($item['location'])) {
                                                echo ' · ' . esc_html($item['location']);
                                            }
                                            ?>
                                        </div>

                                    </div>

                                    <?php if (!empty($item['review_badge'])) : ?>
                                        <span class="t-badge">
                                            <?php echo esc_html($item['review_badge']); ?>
                                        </span>
                                    <?php endif; ?>

                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

            <div class="t-controls">

                <button class="t-arrow" id="tPrev" aria-label="Previous testimonial">

                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6" />
                    </svg>

                </button>

                <div class="t-dots" id="tDots"></div>

                <button class="t-arrow" id="tNext" aria-label="Next testimonial">

                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6" />
                    </svg>

                </button>

            </div>

        </div>

        <?php if ($button_link) : ?>

            <div style="text-align:center; margin-top:44px;">

                <a
                    href="<?php echo esc_url($button_link['url']); ?>"
                    class="explore-link"
                    style="justify-content:center;"
                    target="<?php echo esc_attr($button_link['target'] ?: '_self'); ?>">

                    <?php echo esc_html($button_text); ?>

                    <svg viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round">

                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />

                    </svg>

                </a>

            </div>

        <?php endif; ?>

    </div>

</section>