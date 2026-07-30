<?php

$fields = $args['fields'] ?? [];

$badge   = $fields['badge'] ?? '';
$heading = $fields['heading'] ?? '';
$items   = $fields['timeline'] ?? [];

if (empty($items)) {
    return;
}

?>

<section class="optA">

    <div class="wrap">

        <div class="section-head">

            <?php if (!empty($badge)) : ?>
                <span class="badge" style="background:var(--lime); color:var(--charcoal);">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if (!empty($heading)) : ?>
                <h2><?php echo nl2br(esc_html($heading)); ?></h2>
            <?php endif; ?>

        </div>

        <div class="stage-path" id="pathA">

            <?php foreach ($items as $index => $item) :

                $leftCard = ($index % 2 === 0);
                $number   = sprintf('%02d', $index + 1);

                $image  = $item['image'] ?? [];
                $button = $item['button_link'] ?? [];

            ?>

                <div class="stage-row">

                    <?php if ($leftCard) : ?>

                        <div class="stage-card">

                            <?php if (!empty($item['stage_badge'])) : ?>
                                <div class="stage-tag">
                                    <?php echo esc_html($item['stage_badge']); ?>
                                </div>
                            <?php endif; ?>

                            <div class="stage-mobile-head">
                                <h3><?php echo esc_html($item['title'] ?? ''); ?></h3>

                                <button class="stage-toggle" type="button">
                                    <span></span>
                                </button>
                            </div>

                            <div class="stage-content">

                                <dl>

                                    <div class="row">
                                        <dt>Win</dt>
                                        <dd><?php echo esc_html($item['win'] ?? ''); ?></dd>
                                    </div>

                                    <div class="row">
                                        <dt>Practice</dt>
                                        <dd><?php echo esc_html($item['feature'] ?? ''); ?></dd>
                                    </div>

                                    <div class="row">
                                        <dt>Tools</dt>
                                        <dd><?php echo esc_html($item['tools'] ?? ''); ?></dd>
                                    </div>

                                </dl>

                                <?php if (!empty($button)) : ?>

                                    <a
                                        href="<?php echo esc_url($button['url']); ?>"
                                        target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
                                        class="btn btn-ghost btn-sm">

                                        <?php echo esc_html($item['button_text'] ?? ''); ?>

                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>

                        <div class="node-col">
                            <div class="node"><?php echo esc_html($number); ?></div>
                        </div>

                        <div class="shot">

                            <?php if (!empty($image)) : ?>

                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">

                            <?php endif; ?>

                        </div>

                    <?php else : ?>

                        <div class="shot">

                            <?php if (!empty($image)) : ?>

                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">

                            <?php endif; ?>

                        </div>

                        <div class="node-col">
                            <div class="node"><?php echo esc_html($number); ?></div>
                        </div>

                        <div class="stage-card">

                            <?php if (!empty($item['stage_badge'])) : ?>
                                <div class="stage-tag">
                                    <?php echo esc_html($item['stage_badge']); ?>
                                </div>
                            <?php endif; ?>

                            <div class="stage-mobile-head">

                                <h3><?php echo esc_html($item['title'] ?? ''); ?></h3>

                                <button class="stage-toggle" type="button">
                                    <span></span>
                                </button>

                            </div>

                            <div class="stage-content">

                                <dl>

                                    <div class="row">
                                        <dt>Win</dt>
                                        <dd><?php echo esc_html($item['win'] ?? ''); ?></dd>
                                    </div>

                                    <div class="row">
                                        <dt>Practice</dt>
                                        <dd><?php echo esc_html($item['feature'] ?? ''); ?></dd>
                                    </div>

                                    <div class="row">
                                        <dt>Tools</dt>
                                        <dd><?php echo esc_html($item['tools'] ?? ''); ?></dd>
                                    </div>

                                </dl>

                                <?php if (!empty($button)) : ?>

                                    <a
                                        href="<?php echo esc_url($button['url']); ?>"
                                        target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
                                        class="btn btn-ghost btn-sm">

                                        <?php echo esc_html($item['button_text'] ?? ''); ?>

                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>

                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>