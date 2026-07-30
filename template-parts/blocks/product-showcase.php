<?php

$fields = $args['fields'] ?? [];

$badge       = $fields['badge'] ?? '';
$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$tabs        = $fields['tabs'] ?? [];

if (empty($tabs)) {
    return;
}

?>

<section class="showcase" id="showcase">
    <div class="wrap">

        <div class="section-head center" style="margin-left:auto;margin-right:auto;">

            <?php if (!empty($badge)) : ?>
                <span class="badge badge-indigo">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if (!empty($heading)) : ?>
                <h2><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>

        </div>

        <!-- Tabs -->
        <div class="tab-bar" id="tabBar">

            <?php foreach ($tabs as $index => $tab) :

                $slug = sanitize_title($tab['tab_title'] ?? '');
            ?>

                <button
                    class="tab-btn <?php echo ($index === 0) ? 'active' : ''; ?>"
                    data-tab="<?php echo esc_attr($slug); ?>">

                    <?php echo esc_html($tab['tab_title'] ?? ''); ?>

                </button>

            <?php endforeach; ?>

        </div>

        <!-- Panels -->
        <div class="tab-panels">

            <?php foreach ($tabs as $index => $tab) :

                $slug        = sanitize_title($tab['tab_title'] ?? '');
                $image       = $tab['image'] ?? [];
                $button      = $tab['button_link'] ?? [];
                $button_text = $tab['button_text'] ?? '';

            ?>

                <div
                    class="tab-panel <?php echo ($index === 0) ? 'active' : ''; ?>"
                    id="panel-<?php echo esc_attr($slug); ?>">

                    <div class="showcase-inner">

                        <div class="showcase-text">

                            <?php if (!empty($tab['tab_title'])) : ?>
                                <span class="cat">
                                    <?php echo esc_html($tab['tab_title']); ?>
                                </span>
                            <?php endif; ?>

                            <?php if (!empty($tab['content_heading'])) : ?>
                                <h3>
                                    <?php echo esc_html($tab['content_heading']); ?>
                                </h3>
                            <?php endif; ?>

                            <?php if (!empty($tab['content_description'])) : ?>
                                <p>
                                    <?php echo esc_html($tab['content_description']); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (!empty($button)) : ?>

                                <a
                                    href="<?php echo esc_url($button['url']); ?>"
                                    class="btn btn-primary btn-sm"
                                    target="<?php echo esc_attr($button['target'] ?: '_self'); ?>">

                                    <?php echo esc_html($button_text); ?>

                                    <svg viewBox="0 0 24 24" width="18" height="18">
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                        <polyline points="12 5 19 12 12 19" />
                                    </svg>

                                </a>

                            <?php endif; ?>

                        </div>

                        <div class="browser-mock">

                            <?php if (!empty($image)) : ?>

                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>
</section>