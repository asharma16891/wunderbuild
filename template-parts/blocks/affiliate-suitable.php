<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading         = $fields['affiliate_suitable_heading'] ?? '';
$supporting_text = $fields['affiliate_suitable_supporting_text'] ?? '';
$items           = $fields['affiliate_suitable_items'] ?? [];

?>

<section class="affiliate-suitable section-global">

    <div class="wrap">

        <div class="affiliate-suitable__layout">

            <!-- LEFT -->
            <div class="affiliate-suitable__intro">

                <?php if ($heading) : ?>
                    
                        <?php echo wp_kses_post($heading); ?>
                    
                <?php endif; ?>


                <?php if ($supporting_text) : ?>
                    <p class="type-p1">
                        <?php echo esc_html($supporting_text); ?>
                    </p>
                <?php endif; ?>

            </div>


            <!-- RIGHT -->
            <?php if (!empty($items)) : ?>

                <div class="affiliate-suitable__list">

                    <?php foreach ($items as $index => $item) : 

                        $title = $item['text'] ?? '';

                        if (!$title) {
                            continue;
                        }

                        $number = str_pad($index + 1, 2, '0', STR_PAD_LEFT);

                    ?>

                        <div class="affiliate-suitable__row">

                            <div class="affiliate-suitable__index">
                                <?php echo esc_html($number); ?>
                            </div>

                            <div class="affiliate-suitable__title type-p1">
                                <?php echo esc_html($title); ?>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>