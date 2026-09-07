<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading        = $fields['heading'] ?? '';
$timeline_items = $fields['timeline_items'] ?? [];

?>

<section class="access-timeline section-global section-space" style="background: var(--pearl);">

    <div class="wrap">

        <?php if (!empty($heading)) : ?>

            <div class="section-head">

                <h2>
                    <?php echo nl2br(esc_html($heading)); ?>
                </h2>

            </div>

        <?php endif; ?>


        <?php if (!empty($timeline_items) && is_array($timeline_items)) : ?>

            <div class="access-timeline__wrap">

                <div class="access-timeline__line">

                    <svg
                        class="access-wave"
                        viewBox="0 0 1400 180"
                        preserveAspectRatio="none"
                        aria-hidden="true"
                    >

                        <path
                            d="M0 90
                               C100 20, 200 20, 300 90
                               S500 160, 600 90
                               S800 20, 900 90
                               S1100 160, 1200 90
                               S1350 20, 1400 60"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        />

                    </svg>

                </div>


                <?php foreach ($timeline_items as $index => $item) : ?>

                    <?php

                    $number      = $item['number'] ?? sprintf('%02d', $index + 1);
                    $title       = $item['title'] ?? '';
                    $description = $item['description'] ?? '';

                    $item_number = $index + 1;

                    ?>

                    <article class="access-point access-point--<?php echo esc_attr(sprintf('%02d', $item_number)); ?>">

                        <div class="access-point__marker">

                            <span>
                                <?php echo esc_html($number); ?>
                            </span>

                        </div>


                        <div class="access-point__content wb-card-white wb-card--medium">

                            <?php if (!empty($title)) : ?>

                                <h3 class="type-h5">
                                    <?php echo esc_html($title); ?>
                                </h3>

                            <?php endif; ?>


                            <?php if (!empty($description)) : ?>

                                <p class="common-para">
                                    <?php echo nl2br(esc_html($description)); ?>
                                </p>

                            <?php endif; ?>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>