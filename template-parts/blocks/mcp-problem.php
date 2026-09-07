<?php

if (!defined('ABSPATH')) {
    exit;
}

$heading = get_field('heading');
$cards   = get_field('cards');

?>

<section class="mcp-problem section-space section-global">

    <div class="wrap">

        <!-- SECTION HEADING -->
        <div class="section-head">

            <?php if (!empty($heading)) : ?>

                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>

            <?php endif; ?>

        </div>


        <!-- PROBLEM CARDS -->
        <div class="mcp-problem__grid">

            <?php if (!empty($cards) && is_array($cards)) : ?>

                <?php foreach ($cards as $card) : ?>

                    <article class="mcp-problem-card">

                        <div class="mcp-problem-card__icon">

                            <?php
                            $icon = $card['icon'] ?? [];
                            ?>

                            <?php if (!empty($icon['url'])) : ?>

                                <img
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
                                >

                            <?php endif; ?>

                        </div>


                        <div class="mcp-problem-card__content">

                            <?php if (!empty($card['card_heading'])) : ?>

                                <h3 class="type-h5">
                                    <?php echo esc_html($card['card_heading']); ?>
                                </h3>

                            <?php endif; ?>


                            <?php if (!empty($card['description'])) : ?>

                                <p class="common-para">
                                    <?php echo esc_html($card['description']); ?>
                                </p>

                            <?php endif; ?>

                        </div>

                    </article>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>

    </div>

</section>