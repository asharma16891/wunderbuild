<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

/*
|--------------------------------------------------------------------------
| Left Commission Card
|--------------------------------------------------------------------------
*/

$commission_label      = $fields['commission_label'] ?? '';
$commission_percentage = $fields['commission_percentage'] ?? '';
$commission_fee_text   = $fields['commission_fee_text'] ?? '';

/*
|--------------------------------------------------------------------------
| Right Content
|--------------------------------------------------------------------------
*/

$commission_heading         = $fields['commission_heading'] ?? '';
$commission_description     = $fields['commission_description'] ?? '';
$commission_supporting_text = $fields['commission_supporting_text'] ?? '';

?>

<section class="affiliate-commission section-global">

    <div class="wrap">

        <div class="affiliate-commission__card">

            <!-- Left: Commission Highlight -->
            <div class="affiliate-commission__highlight">

                <?php if ($commission_label) : ?>
                    <span class="affiliate-commission__label">
                        <?php echo esc_html($commission_label); ?>
                    </span>
                <?php endif; ?>


                <?php if ($commission_percentage) : ?>
                    <div class="affiliate-commission__percentage">

                        <?php
                        // Split 20% into 20 and %
                        $percentage_number = str_replace('%', '', $commission_percentage);
                        ?>

                        <?php echo esc_html($percentage_number); ?>
                        <span>%</span>

                    </div>
                <?php endif; ?>


                <?php if ($commission_fee_text) : ?>
                    <p class="common-para">
                        <?php echo esc_html($commission_fee_text); ?>
                    </p>
                <?php endif; ?>

            </div>


            <!-- Right: Content -->
            <div class="affiliate-commission__content">

                <?php if ($commission_heading) : ?>
                    <h2>
                        <?php echo esc_html($commission_heading); ?>
                    </h2>
                <?php endif; ?>


                <?php if ($commission_description) : ?>
                    <p class="affiliate-commission__intro common-para type-p1">
                        <?php echo esc_html($commission_description); ?>
                    </p>
                <?php endif; ?>


                <?php if ($commission_description && $commission_supporting_text) : ?>
                    <div class="affiliate-commission__divider"></div>
                <?php endif; ?>


                <?php if ($commission_supporting_text) : ?>
                    <p class="affiliate-commission__supporting common-para type-p2">
                        <?php echo esc_html($commission_supporting_text); ?>
                    </p>
                <?php endif; ?>

            </div>

        </div>

    </div>

</section>