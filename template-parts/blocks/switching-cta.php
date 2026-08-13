<?php

$fields = $args['fields'] ?? [];

$eyebrow     = $fields['eyebrow'] ?? '';
$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$button      = $fields['button'] ?? [];

?>

<section class="switching-cta">

    <div class="wrap">

        <div class="switching-cta-inner">

            <div class="switching-cta-content">

                <?php if ($eyebrow) : ?>

                    <span class="eyebrow">
                        <?php echo esc_html($eyebrow); ?>
                    </span>

                <?php endif; ?>


                <?php if ($heading) : ?>

                        <?php echo wp_kses_post($heading); ?>
                    

                <?php endif; ?>


                <?php if ($description) : ?>

                    <p>
                        <?php echo esc_html($description); ?>
                    </p>

                <?php endif; ?>

            </div>


            <?php if (!empty($button['url'])) : ?>

                <div class="btn btn-dark">

                    <a
                        href="<?php echo esc_url($button['url']); ?>"
                        class="switching-btn"
                        target="<?php echo esc_attr($button['target'] ?? '_self'); ?>"
                        <?php if (($button['target'] ?? '') === '_blank') : ?>
                            rel="noopener noreferrer"
                        <?php endif; ?>
                    >
                        <?php echo esc_html($button['title'] ?? ''); ?>
                        <span>→</span>
                    </a>

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>