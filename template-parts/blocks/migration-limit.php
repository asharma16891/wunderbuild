<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';
$cards   = $fields['cards'] ?? [];


/*
|--------------------------------------------------------------------------
| Card Style Classes
|--------------------------------------------------------------------------
*/

$style_classes = array(
    'orange' => 'wb-limit-peach',
    'purple' => 'wb-limit-indigo',
    'pink'   => 'wb-limit-coral',
    'green'  => 'wb-limit-lime',
);

?>


<section class="wb-migration-limits section-global">

    <div class="wrap">

        <?php if (!empty($heading)) : ?>

            <div class="section-head">

                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>

            </div>

        <?php endif; ?>


        <?php if (!empty($cards)) : ?>

            <div class="wb-migration-limits__grid">

                <?php foreach ($cards as $card) : ?>

                    <?php

                    $icon        = $card['icon'] ?? array();
                    $title       = $card['title'] ?? '';
                    $description = $card['description'] ?? '';
                    $style       = $card['style'] ?? 'orange';

                    /*
                    |--------------------------------------------------------------------------
                    | Get Existing CSS Class
                    |--------------------------------------------------------------------------
                    */

                    $style_class = $style_classes[$style] ?? 'wb-limit-peach';

                    ?>


                    <article class="wb-migration-limit-card <?php echo esc_attr($style_class); ?>">

                        <div class="wb-migration-limit-card__top">

                            <?php if (!empty($icon['url'])) : ?>

                                <span class="wb-migration-limit-card__icon">

                                    <img
                                        src="<?php echo esc_url($icon['url']); ?>"
                                        alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
                                    >

                                </span>

                            <?php endif; ?>

                        </div>


                        <?php if (!empty($title)) : ?>

                            <h3  class="type-h5">
                                <?php echo esc_html($title); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if (!empty($description)) : ?>

                            <p>
                                <?php echo esc_html($description); ?>
                            </p>

                        <?php endif; ?>


                    </article>


                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>