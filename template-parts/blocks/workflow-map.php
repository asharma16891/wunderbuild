<?php

$fields = $args['fields'] ?? [];

$heading          = $fields['heading'] ?? '';
$description         = $fields['description'] ?? '';
$workflow_image   = $fields['workflow_image'] ?? [];
$hotspots = $fields['hotspots'] ?? [];

if (!is_array($hotspots)) {
    $hotspots = [];
}

$primary_button   = $fields['primary_button'] ?? [];
$secondary_button = $fields['secondary_button'] ?? [];



?>

<section class="workflow-map new-work-section">

    <div class="wrap">

       <?php if (!empty($heading) || !empty($description)) : ?>

    <div class="section-head new-work-header">

        <?php if (!empty($heading)) : ?>

            <h2>
                <?php
                echo wp_kses(
                    $heading,
                    [
                        'span' => [
                            'class' => [],
                            'style' => [],
                        ],
                        'br' => [],
                    ]
                );
                ?>
            </h2>

        <?php endif; ?>

        <?php if (!empty($description)) : ?>

            <p>
                <?php echo esc_html($description); ?>
            </p>

        <?php endif; ?>

    </div>

<?php endif; ?>
        <div class="hs-grid">

            <div class="hs-visual">

                <?php if (!empty($workflow_image)) : ?>

                    <img
                        src="<?php echo esc_url($workflow_image['url']); ?>"
                        alt="<?php echo esc_attr($workflow_image['alt'] ?? ''); ?>">

                <?php endif; ?>

                <?php foreach ($hotspots as $index => $item) :

                    $id = 'hotspot-' . $index;

                ?>

                    <button
                        class="hs-dot <?php echo ($index === 0) ? 'active' : ''; ?>"
                        data-id="<?php echo esc_attr($id); ?>"
                        style="
                            top:<?php echo esc_attr($item['dot_top'] ?? '0'); ?>;
                            left:<?php echo esc_attr($item['dot_left'] ?? '0'); ?>;
                        ">
                    </button>

                <?php endforeach; ?>

                <?php foreach ($hotspots as $index => $item) :

                    $id = 'hotspot-' . $index;

                ?>

                    <div
                        class="hs-card <?php echo ($index === 0) ? 'show' : ''; ?>"
                        data-id="<?php echo esc_attr($id); ?>"
                        style="
                            top:<?php echo esc_attr($item['card_top'] ?? '0'); ?>;
                            left:<?php echo esc_attr($item['card_left'] ?? '0'); ?>;
                        ">

                        <?php if (!empty($item['label'])) : ?>

                            <span class="lbl">
                                <?php echo esc_html($item['label']); ?>
                            </span>

                        <?php endif; ?>

                        <?php if (!empty($item['title'])) : ?>

                            <h4>
                                <?php echo esc_html($item['title']); ?>
                            </h4>

                        <?php endif; ?>

                        <?php if (!empty($item['description'])) : ?>

                            <p>
                                <?php echo esc_html($item['description']); ?>
                            </p>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

        <div class="mobile-workflow">
            <?php if (!empty($workflow_image)) : ?>

                <div class="mobile-workflow-image">
                    <img
                        src="<?php echo esc_url($workflow_image['url']); ?>"
                        alt="<?php echo esc_attr($workflow_image['alt'] ?? ''); ?>">
                </div>

            <?php endif; ?>


            <?php foreach ($hotspots as $item) : ?>

                <div class="mobile-card">

                    <div class="mobile-card-content">

                        <?php if (!empty($item['label'])) : ?>

                            <span>
                                <?php echo esc_html($item['label']); ?>
                            </span>

                        <?php endif; ?>

                        <?php if (!empty($item['title'])) : ?>

                            <h3>
                                <?php echo esc_html($item['title']); ?>
                            </h3>

                        <?php endif; ?>

                        <?php if (!empty($item['description'])) : ?>

                            <p>
                                <?php echo esc_html($item['description']); ?>
                            </p>

                        <?php endif; ?>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <!-- <div class="comparison-cta">

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

        </div> -->

    </div>

</section>