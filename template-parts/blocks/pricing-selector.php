<?php

$fields = $args['fields'] ?? [];


$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

$job_tabs = $fields['job_tabs'] ?? [];



$pricing_heading     = $fields['pricing_heading'] ?? '';
$pricing_description = $fields['pricing_description'] ?? '';


$billing_toggle = $fields['billing_toggle'] ?? [];

$monthly_label = $billing_toggle['monthly_label'] ?? 'Monthly';
$annual_label  = $billing_toggle['annual_label'] ?? 'Annual';
$show_annual_plans = $fields['show_annual_plans'] ?? false;


$monthly_cards = $fields['monthly_cards'] ?? [];
$annual_cards  = $fields['annual_cards'] ?? [];


$default_plan = '';

if (!empty($job_tabs)) {
    foreach ($job_tabs as $tab) {
        if (!empty($tab['default_active'])) {
            $default_plan = $tab['slug'];
            break;
        }
    }
}


if (!$default_plan && !empty($job_tabs[0]['slug'])) {
    $default_plan = $job_tabs[0]['slug'];
}

?>

<section class="pricing-selector">

    <div class="wrap">

        <div class="section-head">




            <?php if ($heading) : ?>

                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>

            <?php endif; ?>


            <?php if ($description) : ?>

                <p>
                    <?php echo esc_html($description); ?>
                </p>

            <?php endif; ?>

        </div>


        <?php if ($job_tabs) : ?>

            <div class="job-selector">

                <?php foreach ($job_tabs as $tab) : ?>

                    <?php
                    $tab_slug = $tab['slug'] ?? '';
                    $is_active = ($tab_slug === $default_plan);
                    ?>

                    <button
                        type="button"
                        class="job-btn <?php echo $is_active ? 'active' : ''; ?>"
                        data-plan="<?php echo esc_attr($tab_slug); ?>">
                        <?php echo esc_html($tab['label'] ?? ''); ?>
                    </button>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>


<section class="pricing-plans">

    <div class="wrap">


        <div class="section-head">

            <?php if ($pricing_heading) : ?>

                <h2>
                    <?php echo wp_kses_post($pricing_heading); ?>
                </h2>

            <?php endif; ?>


            <?php if ($pricing_description) : ?>

                <p>
                    <?php echo esc_html($pricing_description); ?>
                </p>

            <?php endif; ?>

        </div>

        <?php if ($billing_toggle && $show_annual_plans) : ?>

            <div class="pricing-toggle">

                <span class="pricing-toggle-label monthly-label">
                    <?php echo esc_html($monthly_label); ?>
                </span>

                <button
                    type="button"
                    class="billing-toggle"
                    aria-label="Toggle pricing period"
                    aria-pressed="false">
                    <span class="billing-toggle-slider"></span>
                </button>

                <span class="pricing-toggle-label annual-label">
                    <?php echo esc_html($annual_label); ?>
                </span>

            </div>

        <?php endif; ?>


        <?php if ($monthly_cards) : ?>

            <div
                class="pricing-grid pricing-grid-monthly active"
                data-billing="monthly">

                <?php foreach ($monthly_cards as $card) : ?>

                    <?php
                    $plan_slug = $card['data_plan'] ?? '';
                    $is_highlighted = !empty($card['highlight']);
                    ?>

                    <div
                        class="pricing-card <?php echo $is_highlighted ? 'active' : ''; ?>"
                        data-plan="<?php echo esc_attr($plan_slug); ?>">

                        <?php if (!empty($card['badge'])) : ?>

                            <span class="plan-name">
                                <?php echo esc_html($card['badge']); ?>
                            </span>

                        <?php endif; ?>


                        <div class="price">

                            <sup>$</sup><?php echo esc_html($card['price'] ?? ''); ?>

                            <?php if (!empty($card['price_suffix'])) : ?>

                                <small>
                                    <?php echo esc_html($card['price_suffix']); ?>
                                </small>

                            <?php endif; ?>

                        </div>


                        <?php if (!empty($card['description'])) : ?>

                            <p class="plan-desc">
                                <?php echo esc_html($card['description']); ?>
                            </p>

                        <?php endif; ?>


                        <?php if (!empty($card['features'])) : ?>

                            <ul>

                                <?php foreach ($card['features'] as $feature) : ?>

                                    <li>
                                        <?php echo esc_html($feature['text'] ?? ''); ?>
                                    </li>

                                <?php endforeach; ?>

                            </ul>

                        <?php endif; ?>


                        <?php if (!empty($card['button'])) : ?>

                            <a
                                href="<?php echo esc_url($card['button']['url'] ?? '#'); ?>"
                                target="<?php echo esc_attr($card['button']['target'] ?? '_self'); ?>"
                                class="btn btn-primary">
                                <?php echo esc_html($card['button']['title'] ?? ''); ?>
                            </a>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>


      <?php if ($show_annual_plans && $annual_cards) : ?>

            <div
                class="pricing-grid pricing-grid-annual"
                data-billing="annual">

                <?php foreach ($annual_cards as $card) : ?>

                    <?php
                    $plan_slug = $card['data_plan'] ?? '';
                    $is_highlighted = !empty($card['highlight']);
                    ?>

                    <div
                        class="pricing-card <?php echo $is_highlighted ? 'active' : ''; ?>"
                        data-plan="<?php echo esc_attr($plan_slug); ?>">

                        <?php if (!empty($card['badge'])) : ?>

                            <span class="plan-name">
                                <?php echo esc_html($card['badge']); ?>
                            </span>

                        <?php endif; ?>


                        <div class="price">

                            <sup>$</sup><?php echo esc_html($card['price'] ?? ''); ?>

                            <?php if (!empty($card['price_suffix'])) : ?>

                                <small>
                                    <?php echo esc_html($card['price_suffix']); ?>
                                </small>

                            <?php endif; ?>

                        </div>


                        <?php if (!empty($card['description'])) : ?>

                            <p class="plan-desc">
                                <?php echo esc_html($card['description']); ?>
                            </p>

                        <?php endif; ?>


                        <?php if (!empty($card['features'])) : ?>

                            <ul>

                                <?php foreach ($card['features'] as $feature) : ?>

                                    <li>
                                        <?php echo esc_html($feature['text'] ?? ''); ?>
                                    </li>

                                <?php endforeach; ?>

                            </ul>

                        <?php endif; ?>


                        <?php if (!empty($card['button'])) : ?>

                            <a
                                href="<?php echo esc_url($card['button']['url'] ?? '#'); ?>"
                                target="<?php echo esc_attr($card['button']['target'] ?? '_self'); ?>"
                                class="btn btn-primary">
                                <?php echo esc_html($card['button']['title'] ?? ''); ?>
                            </a>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>