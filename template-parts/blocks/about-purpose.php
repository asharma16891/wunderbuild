<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading       = $fields['heading'] ?? '';
$purpose_cards = $fields['purpose_cards'] ?? [];

?>

<!-- Section 05: Purpose, Mission and Vision -->
<section class="wb-purpose section-global">

    <div class="wrap">

        <!-- Section Heading -->
        <?php if ($heading) : ?>
            <div class="section-head">
                <h2><?php echo esc_html($heading); ?></h2>
            </div>
        <?php endif; ?>


        <?php if (!empty($purpose_cards)) : ?>

            <div class="wb-purpose__grid">

                <?php foreach ($purpose_cards as $index => $card) : ?>

                    <?php

                    $icon        = $card['icon'] ?? '';
                    $label       = $card['label'] ?? '';
                    $description = $card['description'] ?? '';

                    /*
                     * Add different modifier classes based on card position.
                     *
                     * 1 = Purpose
                     * 2 = Mission
                     * 3 = Vision
                     */

                    $card_class = '';

                    if ($index === 0) {
                        $card_class = 'wb-purpose-card--purpose';
                    } elseif ($index === 1) {
                        $card_class = 'wb-purpose-card--mission';
                    } elseif ($index === 2) {
                        $card_class = 'wb-purpose-card--vision';
                    }

                    ?>

                    <article class="wb-purpose-card <?php echo esc_attr($card_class); ?>">

                        <?php if (!empty($icon)) : ?>
                            <div class="wb-purpose-card__icon">

                                <img
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($icon['alt']); ?>">

                            </div>
                        <?php endif; ?>


                        <div class="wb-purpose-card__content">

                            <?php if ($label) : ?>
                                <h3 class="wb-purpose-card__label type-h5">
                                    <?php echo esc_html($label); ?>
                                </h3>
                            <?php endif; ?>


                            <?php if ($description) : ?>
                                <p>
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