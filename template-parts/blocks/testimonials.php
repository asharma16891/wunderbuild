<?php

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

$items       = $fields['testimonials'] ?? [];

$button_text = $fields['button_text'] ?? '';
$button_link = $fields['button_link'] ?? [];

if (empty($items)) {
    return;
}

?>

<section class="testimonials bg-field">

    <div class="wrap">

        <div class="section-head center" style="margin-left:auto;margin-right:auto;">


            <?php if (!empty($heading)) : ?>
                <h2><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p class="type-p1"><?php echo esc_html($description); ?></p>
            <?php endif; ?>

        </div>

        <div class="t-slider-wrap">

            <div class="t-track-viewport">

                <div class="t-track" id="tTrack">

                    <?php foreach ($items as $item) : ?>

                        <div class="t-slide">

                            <?php if (($item['content_type'] ?? '') === 'testimonial') : ?>

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

                                    <?php if (!empty($item['review'])) : ?>
                                        <h5 class="t-quote">
                                            <?php echo esc_html($item['review']); ?>
                                    </h5>
                                    <?php endif; ?>

                                    <div class="t-person">

                                        <div class="t-avatar">

                                            <?php if (!empty($item['avatar'])) : ?>

                                                <img
                                                    src="<?php echo esc_url($item['avatar']['url']); ?>"
                                                    alt="<?php echo esc_attr($item['avatar']['alt'] ?? ''); ?>">

                                            <?php endif; ?>

                                        </div>

                                        <div>

                                            <?php if (!empty($item['name'])) : ?>
                                                <div class="name type-p2 ">
                                                    <?php echo esc_html($item['name']); ?>
                                                </div>
                                            <?php endif; ?>

                                            <div class="meta type-p3">

                                                <?php
                                                echo esc_html($item['company'] ?? '');

                                                if (!empty($item['location'])) {
                                                    echo ' · ' . esc_html($item['location']);
                                                }
                                                ?>

                                            </div>

                                        </div>

                                        <?php if (!empty($item['review_badge'])) : ?>

                                            <span class="t-badge type-p3">
                                                <?php echo esc_html($item['review_badge']); ?>
                                            </span>

                                        <?php endif; ?>

                                    </div>

                                </div>

                            <?php elseif (($item['content_type'] ?? '') === 'image') : ?>

                                <div class="t-card t-card-image">

                                    <?php if (!empty($item['image'])) : ?>

                                        <img
                                            src="<?php echo esc_url($item['image']['url']); ?>"
                                            alt="<?php echo esc_attr($item['image']['alt'] ?? ''); ?>">

                                    <?php endif; ?>

                                </div>

                            <?php elseif (($item['content_type'] ?? '') === 'video') : ?>

                                <?php
                                $video = $item['video'] ?? '';
                                $cover = $item['video_cover'] ?? [];
                                ?>

                                <div class="t-card t-card-video">

                                    <?php if (!empty($cover)) : ?>

                                        <div class="video-cover">
                                            <img
                                                src="<?php echo esc_url($cover['url']); ?>"
                                                alt="<?php echo esc_attr($cover['alt'] ?? ''); ?>">

                                            <button class="video-play-btn" type="button" aria-label="Play video">
                                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <polygon points="8 5 19 12 8 19 8 5" fill="currentColor" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="video-embed" style="display:none;" data-embed-src="<?php echo esc_attr($video); ?>">
                                            <?php // filled in by JS on first play, so autoplay params can be injected 
                                            ?>
                                        </div>

                                    <?php else : ?>

                                        <?php echo $video; ?>

                                    <?php endif; ?>

                                </div>

                            <?php endif; ?>

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

        <?php if (!empty($button_link)) : ?>

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