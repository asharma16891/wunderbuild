<?php

$eyebrow     = get_field('eyebrow');
$heading     = get_field('heading');
$description = get_field('description');
$image       = get_field('image');

?>

<section class="workspace-roadmap section-global" data-roadmap-approved="false" >

    <div class="wrap">

        <div class="workspace-roadmap__grid">

            <!-- LEFT: CONTENT -->
            <div class="workspace-roadmap__content">

                <?php if ($eyebrow) : ?>
                    <span class="workspace-roadmap__label">
                        <?php echo esc_html($eyebrow); ?>
                    </span>
                <?php endif; ?>


                <?php if ($heading) : ?>
                    <h2>
                        <?php echo esc_html($heading); ?>
                    </h2>
                <?php endif; ?>


                <?php if ($description) : ?>
                    <p class="common-para type-p1">
                        <?php echo esc_html($description); ?>
                    </p>
                <?php endif; ?>

            </div>


            <!-- RIGHT: IMAGE -->
            <div class="workspace-roadmap__visual">

                <div class="workspace-roadmap__image-wrap">

                    <?php if ($image) : ?>

                        <img
                            src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt'] ?? ''); ?>"
                            loading="lazy"
                        >

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</section>