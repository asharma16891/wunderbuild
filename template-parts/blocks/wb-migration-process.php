<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

$migration_steps   = $fields['migration_steps'] ?? [];
$migration_content = $fields['migration_content'] ?? [];


/**
 * Get content data by step number
 */
if (!function_exists('wunderbuild_get_migration_content')) {

    function wunderbuild_get_migration_content($contents, $step_number)
    {
        foreach ($contents as $content) {

            if (
                !empty($content['step_number']) &&
                $content['step_number'] === $step_number
            ) {
                return $content;
            }

        }

        return [];
    }

}

?>


<section
    class="wb-migration-process"
    aria-labelledby="wb-migration-process-title"
>

    <div class="wb-migration-process__inner">


        <!-- ================= HEADING ================= -->

        <div class="section-head">

            <?php if ($heading) : ?>
                <h2 id="wb-migration-process-title">
                    <?php echo wp_kses_post($heading); ?>
                </h2>
            <?php endif; ?>


            <?php if ($description) : ?>
                <p>
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>

        </div>


        <?php if (!empty($migration_steps)) : ?>


            <!-- ================= DESKTOP ================= -->

            <div class="wb-migration-process__desktop">


                <!-- TIMELINE -->

                <div class="wb-migration-process__timeline">

                    <div class="wb-migration-process__track">
                        <span class="wb-migration-process__track-fill"></span>
                    </div>


                    <div class="wb-migration-process__steps">

                        <?php foreach ($migration_steps as $index => $step) : ?>

                            <?php
                            $number = !empty($step['number'])
                                ? $step['number']
                                : str_pad($index + 1, 2, '0', STR_PAD_LEFT);

                            $title = $step['title'] ?? '';
                            ?>

                            <button
                                type="button"
                                class="wb-migration-process__step <?php echo $index === 0 ? 'is-active' : ''; ?>"
                                data-step="<?php echo esc_attr($index); ?>"
                                aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                            >

                                <span class="wb-migration-process__number">
                                    <?php echo esc_html($number); ?>
                                </span>


                                <?php if ($title) : ?>

                                    <span class="wb-migration-process__name">
                                        <?php echo esc_html($title); ?>
                                    </span>

                                <?php endif; ?>

                            </button>

                        <?php endforeach; ?>

                    </div>

                </div>


                <!-- DESKTOP CONTENT CARDS -->

                <?php foreach ($migration_steps as $index => $step) : ?>

                    <?php

                    $number = !empty($step['number'])
                        ? $step['number']
                        : str_pad($index + 1, 2, '0', STR_PAD_LEFT);


                    $content = wunderbuild_get_migration_content(
                        $migration_content,
                        $number
                    );


                    $step_label = $content['step_label'] ?? 'Step ' . $number;
                    $card_heading = $content['heading'] ?? '';
                    $card_description = $content['description'] ?? '';
                    $icon = $content['icon'] ?? [];

                    ?>

                    <div
                        class="wb-migration-process__desktop-card <?php echo $index === 0 ? 'is-active' : ''; ?>"
                        data-step-content="<?php echo esc_attr($index); ?>"
                    >


                        <div class="wb-migration-process__card-icon">

                            <?php if (!empty($icon['url'])) : ?>

                                <img
                                    src="<?php echo esc_url($icon['url']); ?>"
                                    alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
                                >

                            <?php else : ?>

                                <span class="wb-migration-process__icon-value">
                                    ↓
                                </span>

                            <?php endif; ?>

                        </div>


                        <div class="wb-migration-process__card-content">


                            <?php if ($step_label) : ?>

                                <span class="wb-migration-process__card-label">
                                    <?php echo esc_html($step_label); ?>
                                </span>

                            <?php endif; ?>


                            <?php if ($card_heading) : ?>

                                <h3>
                                    <?php echo esc_html($card_heading); ?>
                                </h3>

                            <?php endif; ?>


                            <?php if ($card_description) : ?>

                                <p>
                                    <?php echo esc_html($card_description); ?>
                                </p>

                            <?php endif; ?>


                        </div>

                    </div>

                <?php endforeach; ?>


            </div>


            <!-- ================= MOBILE ================= -->

            <div class="wb-migration-process__mobile">


                <div class="wb-migration-process__mobile-line">
                    <span class="wb-migration-process__mobile-line-fill"></span>
                </div>


                <?php foreach ($migration_steps as $index => $step) : ?>

                    <?php

                    $number = !empty($step['number'])
                        ? $step['number']
                        : str_pad($index + 1, 2, '0', STR_PAD_LEFT);


                    $content = wunderbuild_get_migration_content(
                        $migration_content,
                        $number
                    );


                    $step_label = $content['step_label'] ?? 'Step ' . $number;
                    $card_heading = $content['heading'] ?? '';
                    $card_description = $content['description'] ?? '';

                    ?>


                    <article
                        class="wb-migration-process__mobile-step <?php echo $index === 0 ? 'is-active' : ''; ?>"
                        data-mobile-step="<?php echo esc_attr($index); ?>"
                    >


                        <div class="wb-migration-process__mobile-number">

                            <?php echo esc_html($number); ?>

                        </div>


                        <div class="wb-migration-process__mobile-card">


                            <?php if ($step_label) : ?>

                                <span class="wb-migration-process__mobile-label">
                                    <?php echo esc_html($step_label); ?>
                                </span>

                            <?php endif; ?>


                            <?php if ($card_heading) : ?>

                                <h3>
                                    <?php echo esc_html($card_heading); ?>
                                </h3>

                            <?php endif; ?>


                            <?php if ($card_description) : ?>

                                <p>
                                    <?php echo esc_html($card_description); ?>
                                </p>

                            <?php endif; ?>


                        </div>


                    </article>


                <?php endforeach; ?>


            </div>


        <?php endif; ?>


    </div>

</section>