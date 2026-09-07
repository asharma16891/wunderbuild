<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading = $fields['affiliate_receive_heading'] ?? '';
$items   = $fields['affiliate_receive_items'] ?? [];

?>

<section class="affiliate-receive section-global">

    <div class="affiliate-receive__bg">
        <span class="affiliate-grid-line line-one"></span>
        <span class="affiliate-grid-line line-two"></span>
        <span class="affiliate-grid-line line-three"></span>

        <span class="affiliate-dot dot-one"></span>
        <span class="affiliate-dot dot-two"></span>
        <span class="affiliate-dot dot-three"></span>
        <span class="affiliate-dot dot-four"></span>
    </div>


    <div class="wrap">

        <?php if (!empty($heading)) : ?>

            <div class="section-head">
                <h2>
                    <?php echo esc_html($heading); ?>
                </h2>
            </div>

        <?php endif; ?>


        <?php if (!empty($items) && is_array($items)) : ?>

            <div class="affiliate-receive__grid">

                <?php foreach ($items as $item) : ?>

                    <?php
                    $image       = $item['image'] ?? '';
                    $title       = $item['title'] ?? '';
                    $description = $item['description'] ?? '';
                    ?>

                    <article class="affiliate-receive__card wb-card-white wb-card--medium">

                        <?php if (!empty($image) && is_array($image)) : ?>

                            <div class="affiliate-receive__icon">

                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?: $title); ?>"
                                    loading="lazy"
                                >

                            </div>

                        <?php endif; ?>


                        <div class="affiliate-receive__content">

                            <?php if (!empty($title)) : ?>

                                <h3 class="type-h5">
                                    <?php echo esc_html($title); ?>
                                </h3>

                            <?php endif; ?>


                            <?php if (!empty($description)) : ?>

                                <p>
                                    <?php echo esc_html($description); ?>
                                </p>

                            <?php endif; ?>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>