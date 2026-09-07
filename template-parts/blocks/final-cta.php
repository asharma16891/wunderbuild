<?php

$fields = $args['fields'] ?? [];

$heading        = $fields['heading'] ?? '';
$description    = $fields['description'] ?? '';

$primary_text   = $fields['primary_button_text'] ?? '';
$primary_link   = $fields['primary_button_link'] ?? [];

$secondary_text = $fields['secondary_button_text'] ?? '';
$secondary_link = $fields['secondary_button_link'] ?? [];

?>

<section class="final-cta">

    <div class="final-glow"></div>

    <div class="wrap" style="position:relative; z-index:1;">

        <?php if (!empty($heading)) : ?>
            <h2><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>

        <?php if (!empty($description)) : ?>
            <p><?php echo esc_html($description); ?></p>
        <?php endif; ?>

        <div class="actions">

            <?php if (!empty($primary_link)) : ?>

                <a
                    href="<?php echo esc_url($primary_link['url']); ?>"
                    target="<?php echo esc_attr($primary_link['target'] ?: '_self'); ?>"
                    class="btn btn-primary">

                    <?php echo esc_html($primary_text); ?>

                </a>

            <?php endif; ?>

            <?php if (!empty($secondary_link)) : ?>

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