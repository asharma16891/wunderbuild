<?php

$fields = $args['fields'] ?? [];

$heading          = $fields['heading'] ?? '';
$description      = $fields['description'] ?? '';
$background_color = $fields['background_color'] ?? '#F5F7F4';

$primary_button   = $fields['primary_button'] ?? [];
$secondary_button = $fields['secondary_button'] ?? [];

?>

<section
    class="pricing-hero"
    style="background-color:<?php echo esc_attr($background_color); ?>;">

    <div class="blueprint-lines"></div>

    <div class="wrap">

        <div class="pricing-content">

            <?php if (!empty($heading)) : ?>

                <h1>

                    <?php echo wp_kses_post($heading); ?>

                </h1>

                

            <?php endif; ?>


            <?php if (!empty($description)) : ?>

                <p>

                    <?php echo esc_html($description); ?>

                </p>

            <?php endif; ?>


            <div class="hero-buttons">

                <?php if (!empty($primary_button)) : ?>

                    <a
                        href="<?php echo esc_url($primary_button['url']); ?>"
                        target="<?php echo esc_attr($primary_button['target'] ?: '_self'); ?>"
                        class="btn btn-primary">

                        <?php echo esc_html($primary_button['title']); ?>

                    </a>

                <?php endif; ?>


                <?php if (!empty($secondary_button)) : ?>

                    <a
                        href="<?php echo esc_url($secondary_button['url']); ?>"
                        target="<?php echo esc_attr($secondary_button['target'] ?: '_self'); ?>"
                        class="btn btn-dark">

                        <?php echo esc_html($secondary_button['title']); ?>

                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>