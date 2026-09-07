<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading    = $fields['affiliate_responsibilities_heading'] ?? '';
$terms_link = $fields['affiliate_responsibilities_terms_link'] ?? [];
$items      = $fields['affiliate_responsibilities_items'] ?? [];

?>

<section class="affiliate-responsibilities section-global">

    <div class="wrap">

        <div class="affiliate-responsibilities__intro section-head">

            <?php if (!empty($heading)) : ?>
                <h2>
                    <?php echo esc_html($heading); ?>
                </h2>
            <?php endif; ?>


            <?php if (!empty($terms_link)) : ?>

                <a
                    href="<?php echo esc_url($terms_link['url'] ?? '#'); ?>"
                    class="affiliate-responsibilities__terms"
                    <?php echo !empty($terms_link['target']) ? 'target="' . esc_attr($terms_link['target']) . '"' : ''; ?>>
                    <?php echo esc_html($terms_link['title'] ?? ''); ?>

                    <span>→</span>

                </a>

            <?php endif; ?>

        </div>


        <?php if (!empty($items) && is_array($items)) : ?>

            <div class="affiliate-responsibilities__list">

                <?php foreach ($items as $index => $item) : ?>

                    <?php

                    $title       = $item['title'] ?? '';
                    $description = $item['description'] ?? '';

                    $number = $index + 1;

                    ?>

                    <div class="affiliate-responsibility">

                        <div class="affiliate-responsibility__number type-p3">
                            <?php echo esc_html($number); ?>
                        </div>


                        <div class="affiliate-responsibility__content">

                            <?php if (!empty($title)) : ?>

                                <h3>
                                    <?php echo esc_html($title); ?>
                                </h3>

                            <?php endif; ?>


                            <?php if (!empty($description)) : ?>

                                <p>
                                    <?php echo nl2br(esc_html($description)); ?>
                                </p>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>