<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';
$items   = $fields['items'] ?? [];

?>

<section class="mcp-control section-space section-global">

    <div class="wrap">

        <?php if (!empty($heading)) : ?>

            <div class="section-head">

                <h2>
                     <?php echo wp_kses_post($heading); ?>
                </h2>

            </div>

        <?php endif; ?>


        <?php if (!empty($items) && is_array($items)) : ?>

            <div class="mcp-control__grid">

                <?php foreach ($items as $item) : ?>

                    <?php

                    $icon        = $item['icon'] ?? [];
                    $title       = $item['title'] ?? '';
                    $description = $item['description'] ?? '';

                    ?>

                    <article class="mcp-control-card">

                        <?php if (!empty($icon)) : ?>

                            <div class="mcp-control-card__top">

                                <div class="mcp-control-card__icon">

                                    <?php if (is_array($icon)) : ?>

                                        <img
                                            src="<?php echo esc_url($icon['url'] ?? ''); ?>"
                                            alt="<?php echo esc_attr($icon['alt'] ?? $title); ?>"
                                        >

                                    <?php elseif (is_numeric($icon)) : ?>

                                        <?php
                                        $icon_url = wp_get_attachment_image_url(
                                            $icon,
                                            'full'
                                        );
                                        ?>

                                        <?php if (!empty($icon_url)) : ?>

                                            <img
                                                src="<?php echo esc_url($icon_url); ?>"
                                                alt="<?php echo esc_attr($title); ?>"
                                            >

                                        <?php endif; ?>

                                    <?php elseif (is_string($icon)) : ?>

                                        <img
                                            src="<?php echo esc_url($icon); ?>"
                                            alt="<?php echo esc_attr($title); ?>"
                                        >

                                    <?php endif; ?>

                                </div>

                            </div>

                        <?php endif; ?>


                        <div class="mcp-control-card__body">

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