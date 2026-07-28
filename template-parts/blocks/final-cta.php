<?php

$heading         = get_field('heading');
$description     = get_field('description');

$primary_text    = get_field('primary_button_text');
$primary_link    = get_field('primary_button_link');

$secondary_text  = get_field('secondary_button_text');
$secondary_link  = get_field('secondary_button_link');

?>

<section class="final-cta">

    <div class="final-glow"></div>

    <div class="wrap" style="position:relative; z-index:1;">

        <?php if ($heading) : ?>
            <h2><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>

        <?php if ($description) : ?>
            <p><?php echo esc_html($description); ?></p>
        <?php endif; ?>

        <div class="actions">

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