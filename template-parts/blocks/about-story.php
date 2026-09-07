<?php

if (!defined('ABSPATH')) {
    exit;
}


/*
|--------------------------------------------------------------------------
| BLOCK FIELDS
|--------------------------------------------------------------------------
*/

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';

$founder = $fields['founder'] ?? [];

$timeline = $fields['timeline'] ?? [];


/*
|--------------------------------------------------------------------------
| FOUNDER DATA
|--------------------------------------------------------------------------
*/

$founder_name = $founder['name'] ?? '';

$founder_description = $founder['description'] ?? '';

$founder_image = $founder['image'] ?? [];


/*
|--------------------------------------------------------------------------
| FOUNDER IMAGE
|--------------------------------------------------------------------------
*/

$founder_image_url = '';

$founder_image_alt = '';

if (!empty($founder_image)) {

    if (is_array($founder_image)) {

        $founder_image_url = $founder_image['url'] ?? '';

        $founder_image_alt = $founder_image['alt'] ?? '';

    } else {

        $founder_image_url = $founder_image;

    }
}

?>

<section class="wb-origin-story-v2 section-global">

    <div class="wrap">


        <!-- Section Header -->

        <?php if (!empty($heading)) : ?>

            <div class="section-head">

                <h2>

                    <?php echo wp_kses_post($heading); ?>

                </h2>

            </div>

        <?php endif; ?>


        <!-- Founder Card -->

        <?php if (
            !empty($founder_name) ||
            !empty($founder_description) ||
            !empty($founder_image_url)
        ) : ?>

            <div class="wb-origin-story-v2__founder">


                <div class="wb-origin-story-v2__founder-mark">

                    <?php if (!empty($founder_image_url)) : ?>

                        <img
                            src="<?php echo esc_url($founder_image_url); ?>"
                            alt="<?php echo esc_attr($founder_image_alt); ?>">

                    <?php else : ?>

                        <span>WB</span>

                    <?php endif; ?>

                </div>


                <div class="wb-origin-story-v2__founder-content">

                    <span class="wb-origin-story-v2__label type-p3">

                        WHO BUILT IT

                    </span>


                    <?php if (!empty($founder_name)) : ?>

                        <h3 class="type-h5">

                            <?php echo esc_html($founder_name); ?>

                        </h3>

                    <?php endif; ?>


                    <?php if (!empty($founder_description)) : ?>

                        <p>

                            <?php echo esc_html($founder_description); ?>

                        </p>

                    <?php endif; ?>

                </div>

            </div>

        <?php endif; ?>


        <!-- Story Timeline -->

        <?php if (!empty($timeline) && is_array($timeline)) : ?>

            <div class="wb-origin-story-v2__timeline">


                <?php foreach ($timeline as $item) : ?>


                    <?php

                    $item_label = $item['label'] ?? '';

                    $item_title = $item['title'] ?? '';

                    $item_description = $item['description'] ?? '';

                    ?>


                    <article class="wb-origin-story-v2__item">


                        <div class="wb-origin-story-v2__rail">

                            <span></span>

                        </div>


                        <div class="wb-origin-story-v2__item-content">


                            <?php if (!empty($item_label)) : ?>

                                <span class="wb-origin-story-v2__item-label type-p3">

                                    <?php echo esc_html($item_label); ?>

                                </span>

                            <?php endif; ?>


                            <?php if (!empty($item_title)) : ?>

                                <h3 class="type-h5">

                                    <?php echo esc_html($item_title); ?>

                                </h3>

                            <?php endif; ?>


                            <?php if (!empty($item_description)) : ?>

                                <p>

                                    <?php echo esc_html($item_description); ?>

                                </p>

                            <?php endif; ?>


                        </div>

                    </article>


                <?php endforeach; ?>


            </div>

        <?php endif; ?>


    </div>

</section>