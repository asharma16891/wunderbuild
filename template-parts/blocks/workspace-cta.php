<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$button      = $fields['button'] ?? [];

?>

<section class="workspace-cta section-space">

    <div class="workspace-cta__bg"></div>

    <div class="wrap">

        <div class="workspace-cta__content">


            <?php if (!empty($heading)) : ?>

                <div class="workspace-cta__heading">
                    <?php echo wp_kses_post($heading); ?>
                </div>

            <?php endif; ?>


            <?php if (!empty($description)) : ?>

                <p>
                    <?php echo esc_html($description); ?>
                </p>

            <?php endif; ?>


            <?php if (!empty($button['url'])) : ?>

                <a
                    href="<?php echo esc_url($button['url']); ?>"
                    class="workspace-cta__button"
                    target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
                >

                    <span>
                        <?php echo esc_html($button['title']); ?>
                    </span>

                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none">

                        <path
                            d="M4 10H16M11 5L16 10L11 15"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                    </svg>

                </a>

            <?php endif; ?>


        </div>

    </div>

</section>