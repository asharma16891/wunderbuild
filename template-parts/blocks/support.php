<?php

$badge       = get_field('badge');
$heading     = get_field('heading');
$description = get_field('description');
$cards       = get_field('cards');
$button_text = get_field('button_text');
$button_link = get_field('button_link');

?>

<section class="support">

    <div class="wrap">

        <div class="section-head center" style="margin-left:auto;margin-right:auto;">

            <?php if ($badge) : ?>
                <span class="badge badge-lime">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if ($heading) : ?>
                <h2><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>

        </div>

        <?php if ($cards) : ?>

            <div class="support-grid">

                <?php foreach ($cards as $card) :

                    $icon = $card['icon'];

                ?>

                    <div class="support-card">

                        <?php if ($icon) : ?>
                            <span class="ic">
                                <img
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($icon['alt']); ?>">
                            </span>
                        <?php endif; ?>

                        <h4>
                            <?php echo esc_html($card['title']); ?>
                        </h4>

                        <p>
                            <?php echo esc_html($card['description']); ?>
                        </p>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

        <?php if ($button_link) : ?>

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