<?php

$class       = $args['class'] ?? '';
$small_title = $args['small_title'] ?? '';
$heading     = $args['heading'] ?? '';
$icon        = $args['icon'] ?? '';
$items       = $args['items'] ?? array();

?>

<div class="comparison-box <?php echo esc_attr($class); ?>">

    <div class="comparison-heads">

        <div class="icon ">

            <?php if (!empty($icon)) : ?>

                <img
                    src="<?php echo esc_url($icon['url']); ?>"
                    alt="<?php echo esc_attr($icon['alt']); ?>">

            <?php endif; ?>

        </div>

        <div>

            <?php if ($small_title) : ?>

                <span class="type-p3"><?php echo esc_html($small_title); ?></span>

            <?php endif; ?>

            <?php if ($heading) : ?>

                <h3><?php echo esc_html($heading); ?></h3>

            <?php endif; ?>

        </div>

    </div>

    <?php if ($items) : ?>

        <div class="comparison-body">

            <?php foreach ($items as $item) : ?>

                <div class="comparison-row">

                    <span>
                        <?php echo esc_html($item['number']); ?>
                    </span>

                    <p>
                        <?php echo esc_html($item['text']); ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</div>