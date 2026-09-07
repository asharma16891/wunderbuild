<?php

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$image = $fields['image'] ?? '';
$content_heading = $fields['content_heading'] ?? '';
$checklist = $fields['checklist'] ?? [];
$button = $fields['button'] ?? [];

?>

<section class="initial-onboarding section-global">

    <div class="wrap">

        <div class="section-head">

            <?php if ($heading) : ?>

                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>

            <?php endif; ?>


            <?php if ($description) : ?>

                <p class="type-p1">
                    <?php echo esc_html($description); ?>
                </p>

            <?php endif; ?>

        </div>


        <div class="onboarding-grid">


            <!-- Left -->

            <div class="onboarding-preview">

                <div class="preview-window">

                    <?php if (!empty($image)) : ?>

                        <img
                            src="<?php echo esc_url($image['url'] ?? ''); ?>"
                            alt="<?php echo esc_attr($image['alt'] ?? 'Account setup'); ?>"
                        >

                    <?php endif; ?>

                </div>


                <!-- Static Badge -->

                <div class="floating-badge badge-top">
                    ✓ Account Created
                </div>


                <!-- Static Badge -->

                <div class="floating-badge badge-bottom">
                    4 Tasks Remaining
                </div>

            </div>


            <!-- Right -->

            <div class="onboarding-card">

                <?php if ($content_heading) : ?>

                    <h3 class="type-h5">
                        <?php echo esc_html($content_heading); ?>
                    </h3>

                <?php endif; ?>


                <?php if (!empty($checklist)) : ?>

                    <ul>

                        <?php foreach ($checklist as $item) : ?>

                            <?php if (!empty($item['item'])) : ?>

                                <li class="type-p2">
                                    <?php echo esc_html($item['item']); ?>
                                </li>

                            <?php endif; ?>

                        <?php endforeach; ?>

                    </ul>

                <?php endif; ?>


                <?php if (!empty($button)) : ?>

                    <a
                        href="<?php echo esc_url($button['url'] ?? '#'); ?>"
                        target="<?php echo esc_attr($button['target'] ?? '_self'); ?>"
                        class="btn btn-primary"
                    >
                        <?php echo esc_html($button['title'] ?? ''); ?>
                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>