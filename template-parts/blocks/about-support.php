<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading       = $fields['heading'] ?? '';
$button        = $fields['button'] ?? [];
$support_cards = $fields['support_cards'] ?? [];

?>

<!-- Section 08: Product and Support -->
<section class="wb-product-support section-global">

    <div class="wrap">

        <div class="wb-product-support__layout">

            <!-- Left Content -->
            <div class="wb-product-support__intro">

                <?php if ($heading) : ?>
                    <div class="section-head">

                        <h2>
                            <?php echo nl2br(esc_html($heading)); ?>
                        </h2>

                    </div>
                <?php endif; ?>


                <?php if (!empty($button['url'])) : ?>

                    <a
                        href="<?php echo esc_url($button['url']); ?>"
                        class="wb-product-support__button btn btn-primary"
                        target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
                    >

                        <span>
                            <?php echo esc_html($button['title']); ?>
                        </span>

                        <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path d="M5 12H19"></path>
                            <path d="M13 6L19 12L13 18"></path>
                        </svg>

                    </a>

                <?php endif; ?>

            </div>


            <!-- Right Cards -->
            <?php if (!empty($support_cards)) : ?>

                <div class="wb-product-support__cards">

                    <?php foreach ($support_cards as $index => $card) : ?>

                        <?php

                        $icon             = $card['icon'] ?? [];
                        $card_heading     = $card['card_heading'] ?? '';
                        $card_description = $card['card_description'] ?? '';

                        /*
                         * Keep existing color classes
                         * based on card position.
                         */
                        $icon_class = '';

                        if ($index === 0) {
                            $icon_class = 'wb-product-support-card__icon--indigo';
                        } elseif ($index === 1) {
                            $icon_class = 'wb-product-support-card__icon--coral';
                        } elseif ($index === 2) {
                            $icon_class = 'wb-product-support-card__icon--peach';
                        } elseif ($index === 3) {
                            $icon_class = 'wb-product-support-card__icon--pearl';
                        }

                        ?>

                        <article class="wb-product-support-card">

                            <?php if (!empty($icon['url'])) : ?>

                                <div class="wb-product-support-card__icon <?php echo esc_attr($icon_class); ?>">

                                    <img
                                        src="<?php echo esc_url($icon['url']); ?>"
                                        alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
                                    >

                                </div>

                            <?php endif; ?>


                            <div class="wb-product-support-card__content">

                                <?php if ($card_heading) : ?>
                                    <h3 class="type-h5">
                                        <?php echo esc_html($card_heading); ?>
                                    </h3>
                                <?php endif; ?>


                                <?php if ($card_description) : ?>
                                    <p>
                                        <?php echo nl2br(esc_html($card_description)); ?>
                                    </p>
                                <?php endif; ?>

                            </div>


                            <div class="wb-product-support-card__arrow">

                                <svg
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                >
                                    <path d="M5 12H19"></path>
                                    <path d="M13 6L19 12L13 18"></path>
                                </svg>

                            </div>

                        </article>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>