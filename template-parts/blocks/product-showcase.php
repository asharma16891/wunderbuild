<?php

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$tabs        = $fields['tabs'] ?? [];

if (empty($tabs)) {
    return;
}

// Generic icon set that cycles per tab index — swap for a real ACF icon
// field per tab later if you want icons tied to specific tab content.

$icon_paths = [
    
    'lead-generation' => get_stylesheet_directory_uri() . '/assets/images/lead-generation.png',
    'quote' => get_stylesheet_directory_uri() . '/assets/images/quote.png',
    'briefcase' => get_stylesheet_directory_uri() . '/assets/images/briefcase.png',

    'diary' => get_stylesheet_directory_uri() . '/assets/images/calendar.png',

    'invoice' => get_stylesheet_directory_uri() . '/assets/images/diary.png',

    'revenue' => get_stylesheet_directory_uri() . '/assets/images/earning.png',


    'recruitment' => get_stylesheet_directory_uri() . '/assets/images/invoice.png',


];

$icon_keys = array_keys($icon_paths);

$accent_vars = ['var(--indigo)', 'var(--coral)', 'var(--peach)'];

?>

<section
    class="showcase showcase--v4"
    id="showcase"
    style="--tab-count: <?php echo count($tabs); ?>;">

    <div class="wrap">

        <div class="section-head center" style="margin-left:auto;margin-right:auto;">
            <?php if (!empty($heading)) : ?>
                <h2><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p class="type-p1"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>

        <div class="sticky-wrapper">
            <div class="showcase-layout">

                <!-- LEFT: vertical tab list -->
                <div class="tab-bar" id="tabBar">

                    <?php foreach ($tabs as $index => $tab) :
                        $slug   = sanitize_title($tab['tab_title'] ?? '');
                        $icon   = $icon_paths[$icon_keys[$index % count($icon_keys)]];
                        $accent = $accent_vars[$index % count($accent_vars)];
                    ?>

                        <button
                            class="tab-btn <?php echo ($index === 0) ? 'active' : ''; ?>"
                            data-tab="<?php echo esc_attr($slug); ?>"
                            style="--accent: <?php echo esc_attr($accent); ?>;">

                            <?php
                            $icon = $icon_paths[$icon_keys[$index % count($icon_keys)]];
                            ?>

                            <span class="ic">
                                <img
                                    src="<?php echo esc_url($icon); ?>"
                                    alt=""
                                    width="24"
                                    height="24">
                            </span>

                            <?php echo esc_html($tab['tab_title'] ?? ''); ?>

                        </button>

                    <?php endforeach; ?>

                </div>

                <!-- RIGHT: content + screenshot, cross-fades on scroll -->
                <div class="tab-panels">

                    <?php foreach ($tabs as $index => $tab) :
                        $slug        = sanitize_title($tab['tab_title'] ?? '');
                        $image       = $tab['image'] ?? [];
                        $button      = $tab['button_link'] ?? [];
                        $button_text = $tab['button_text'] ?? '';
                        $accent      = $accent_vars[$index % count($accent_vars)];
                    ?>

                        <div
                            class="tab-panel <?php echo ($index === 0) ? 'active' : ''; ?>"
                            id="panel-<?php echo esc_attr($slug); ?>">

                            <div class="showcase-inner">

                                <div class="showcase-text">

                                    <div class="shw-case-inner">
                                        <?php if (!empty($tab['tab_title'])) : ?>
                                            <span class="cat type-p3"><?php echo esc_html($tab['tab_title']); ?></span>
                                        <?php endif; ?>

                                        <?php if (!empty($tab['content_heading'])) : ?>
                                            <h3><?php echo esc_html($tab['content_heading']); ?></h3>
                                        <?php endif; ?>
                                        <?php if (!empty($tab['content_description'])) : ?>
                                            <p><?php echo esc_html($tab['content_description']); ?></p>
                                        <?php endif; ?>
                                    </div>



                                    <?php if (!empty($button)) : ?>

                                        <a href="<?php echo esc_url($button['url']); ?>"
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

                                <div class="browser-mock" style="--accent: <?php echo esc_attr($accent); ?>;">
                                    <div class="browser-body">
                                        <?php if (!empty($image['url'])) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

            </div>
        </div>

    </div>
</section>