<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading     = $fields['affiliate_application_heading'] ?? '';
$description = $fields['affiliate_application_description'] ?? '';
$shortcode   = $fields['affiliate_application_shortcode'] ?? '';

?>

<section class="affiliate-application section-global">

    <div class="affiliate-application__bg"></div>

    <div class="wrap">

        <?php if (!empty($heading) || !empty($description)) : ?>

            <div class="section-head">

                <?php if (!empty($heading)) : ?>
                    <h2>
                        <?php echo nl2br(esc_html($heading)); ?>
                    </h2>
                <?php endif; ?>


                <?php if (!empty($description)) : ?>
                    <p class="type-p1">
                      <?php echo nl2br(esc_html($description)); ?>
                    </p>
                <?php endif; ?>

            </div>

        <?php endif; ?>


        <?php if (!empty($shortcode)) : ?>

            <div class="affiliate-application__form">

                <?php echo do_shortcode($shortcode); ?>

            </div>

        <?php endif; ?>

    </div>

</section>