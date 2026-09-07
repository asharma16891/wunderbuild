<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';
$items   = $fields['items'] ?? [];

?>

<section class="workspace-access section-global">

    <div class="wrap">

        <!-- Section Heading -->
        <?php if (!empty($heading)) : ?>

            <div class="section-head">

                <h2>
                    <?php echo esc_html($heading); ?>
                </h2>

            </div>

        <?php endif; ?>


        <!-- Access Cards -->
        <?php if (!empty($items) && is_array($items)) : ?>

            <div class="workspace-access__grid">

                <?php foreach ($items as $item) : ?>

                    <?php

                    $icon        = $item['icon'] ?? [];
                    $title       = $item['title'] ?? '';
                    $description = $item['description'] ?? '';

                    // Get icon URL and alt text
                    $icon_url = '';
                    $icon_alt = '';

                    if (is_array($icon)) {

                        $icon_url = $icon['url'] ?? '';
                        $icon_alt = $icon['alt'] ?? '';

                    } elseif (is_numeric($icon)) {

                        $icon_url = wp_get_attachment_url($icon);
                        $icon_alt = get_post_meta(
                            $icon,
                            '_wp_attachment_image_alt',
                            true
                        );

                    } elseif (is_string($icon)) {

                        $icon_url = $icon;

                    }

                    ?>

                    <article class="workspace-access__card wb-card-white wb-card--medium">


                        <!-- Icon -->
                        <?php if (!empty($icon_url)) : ?>

                            <div class="workspace-access__icon">

                                <img
                                    src="<?php echo esc_url($icon_url); ?>"
                                    alt="<?php echo esc_attr($icon_alt); ?>"
                                >

                            </div>

                        <?php endif; ?>


                        <!-- Title -->
                        <?php if (!empty($title)) : ?>

                            <h3 class="type-h5">
                                <?php echo esc_html($title); ?>
                            </h3>

                        <?php endif; ?>


                        <!-- Description -->
                        <?php if (!empty($description)) : ?>

                            <p class="common-para">
                                <?php echo esc_html($description); ?>
                            </p>

                        <?php endif; ?>


                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>