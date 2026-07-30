<?php

$fields = $args['fields'] ?? [];

$trust_cards = $fields['trust_cards'] ?? [];

if (empty($trust_cards)) {
    return;
}

?>

<section class="trust">

    <div class="trust-bg">
        <span class="blob blob-1"></span>
        <span class="blob blob-2"></span>
        <span class="blob blob-3"></span>
    </div>

    <div class="wrap">

        <div class="trust-grid">

            <?php foreach ($trust_cards as $card) : ?>

                <div class="trust-card">

                    <?php if (!empty($card['icon'])) : ?>

                        <span class="ic">

                            <img
                                src="<?php echo esc_url($card['icon']['url']); ?>"
                                alt="<?php echo esc_attr($card['icon']['alt'] ?? ''); ?>">

                        </span>

                    <?php endif; ?>

                    <?php if (!empty($card['title'])) : ?>

                        <h4>
                            <?php echo esc_html($card['title']); ?>
                        </h4>

                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>