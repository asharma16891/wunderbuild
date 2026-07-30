<?php

$fields = $args['fields'] ?? [];

$badge       = $fields['badge'] ?? '';
$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$cards        = $fields['cards'] ?? [];
$button_text = $fields['button_text'] ?? '';
$button_link = $fields['button_link'] ?? [];

?>

<section class="support">

    <div class="wrap">

        <div class="section-head center" style="margin-left:auto;margin-right:auto;">

            <?php if (!empty($badge)) : ?>
                <span class="badge badge-lime">
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

        <?php if (!empty($cards)) : ?>

            <div class="support-grid">

                <?php foreach ($cards as $card) :

                    $icon = $card['icon'] ?? [];

                ?>

                    <div class="support-card">

                        <?php if (!empty($icon)) : ?>
                            <span class="ic">
                                <img
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>">
                            </span>
                        <?php endif; ?>

                        <?php if (!empty($card['title'])) : ?>
                            <h4>
                                <?php echo esc_html($card['title']); ?>
                            </h4>
                        <?php endif; ?>

                        <?php if (!empty($card['description'])) : ?>
                            <p>
                                <?php echo esc_html($card['description']); ?>
                            </p>
                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

        <?php if (!empty($button_link)) : ?>

            <div style="text-align:center; margin-top:44px;">

                <a
                    href="<?php echo esc_url($button_link['url']); ?>"
                    target="<?php echo esc_attr($button_link['target'] ?: '_self'); ?>"
                    class="btn btn-primary">

                    <?php echo esc_html($button_text); ?>

                </a>

            </div>

        <?php endif; ?>

    </div>

</section>