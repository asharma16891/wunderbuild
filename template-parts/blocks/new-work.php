<?php

$fields = $args['fields'] ?? [];

$badge       = $fields['badge'] ?? '';
$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$cards       = $fields['cards'] ?? [];

if (empty($cards)) {
    return;
}

?>

<section class="new-work">

    <div class="container">

        <div class="section-heading">

            <?php if (!empty($badge)) : ?>
                <span class="eyebrow">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if (!empty($heading)) : ?>
                <h2>
                    <?php echo nl2br(esc_html($heading)); ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p>
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>

        </div>

        <div class="feature-grid wrap">

            <?php foreach ($cards as $card) :

                $image = $card['image'] ?? [];

            ?>

                <article class="feature-card">

                    <?php if (!empty($image)) : ?>

                        <img
                            src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">

                    <?php endif; ?>

                    <div class="feature-content">

                        <?php if (!empty($card['title'])) : ?>

                            <h3>
                                <?php echo esc_html($card['title']); ?>
                            </h3>

                        <?php endif; ?>

                        <?php if (!empty($card['description'])) : ?>

                            <p>
                                <?php echo esc_html($card['description']); ?>
                            </p>

                        <?php endif; ?>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>