<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading      = $fields['heading'] ?? '';
$capabilities = $fields['capabilities'] ?? [];

?>

<section class="mcp-capabilities section-space section-global">

    <div class="wrap">


        <!-- =========================
             SECTION HEADER
        ========================== -->

        <?php if (!empty($heading)) : ?>

            <div class="section-head">

                <h2>
                    <?php echo wp_kses_post($heading); ?>
                </h2>

            </div>

        <?php endif; ?>


        <?php if (!empty($capabilities) && is_array($capabilities)) : ?>

            <div class="mcp-capabilities__layout">


                <!-- =========================
                     TABS
                ========================== -->

                <div
                    class="mcp-capabilities__tabs"
                    role="tablist"
                    aria-label="Capabilities"
                >

                    <?php foreach ($capabilities as $index => $capability) : ?>

                        <?php

                        $number    = $index + 1;

                        $icon      = $capability['icon'] ?? [];
                        $tab_title = $capability['tab_title'] ?? '';

                        $is_active = $index === 0;

                        ?>

                        <button
                            class="mcp-capability-tab <?php echo $is_active ? 'active' : ''; ?>"
                            id="mcp-tab-<?php echo esc_attr($number); ?>"
                            type="button"
                            role="tab"
                            aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>"
                            aria-controls="mcp-panel-<?php echo esc_attr($number); ?>"
                            tabindex="<?php echo $is_active ? '0' : '-1'; ?>"
                            data-tab="<?php echo esc_attr($number); ?>"
                        >


                            <!-- ICON -->

                            <?php if (!empty($icon['url'])) : ?>

                                <span class="mcp-capability-tab__icon">

                                    <img
                                        src="<?php echo esc_url($icon['url']); ?>"
                                        alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>"
                                    >

                                </span>

                            <?php endif; ?>


                            <!-- TAB TITLE -->

                            <?php if (!empty($tab_title)) : ?>

                                <span class="mcp-capability-tab__title">

                                    <?php echo esc_html($tab_title); ?>

                                </span>

                            <?php endif; ?>


                            <!-- ARROW -->

                            <span
                                class="mcp-capability-tab__arrow"
                                aria-hidden="true"
                            >
                                →
                            </span>

                        </button>

                    <?php endforeach; ?>

                </div>


                <!-- =========================
                     CONTENT PANELS
                ========================== -->

                <div class="mcp-capabilities__panels">


                    <?php foreach ($capabilities as $index => $capability) : ?>

                        <?php

                        $number        = $index + 1;

                        $panel_heading = $capability['panel_heading'] ?? '';
                        $description   = $capability['description'] ?? '';
                        $prompts       = $capability['prompts'] ?? [];

                        $is_active = $index === 0;

                        ?>

                        <article
                            class="mcp-capability-panel <?php echo $is_active ? 'active' : ''; ?>"
                            id="mcp-panel-<?php echo esc_attr($number); ?>"
                            role="tabpanel"
                            aria-labelledby="mcp-tab-<?php echo esc_attr($number); ?>"
                            data-panel="<?php echo esc_attr($number); ?>"

                            <?php if (!$is_active) : ?>
                                hidden
                            <?php endif; ?>
                        >


                            <!-- PANEL HEADING -->

                            <?php if (!empty($panel_heading)) : ?>

                                <div class="mcp-capability-panel__top">

                                    <h3>
                                        <?php echo esc_html($panel_heading); ?>
                                    </h3>

                                </div>

                            <?php endif; ?>


                            <!-- DESCRIPTION -->

                            <?php if (!empty($description)) : ?>

                                <p class="mcp-capability-panel__description">

                                    <?php echo wp_kses_post(
                                        nl2br($description)
                                    ); ?>

                                </p>

                            <?php endif; ?>


                            <!-- EXAMPLE PROMPTS -->

                            <?php if (!empty($prompts) && is_array($prompts)) : ?>

                                <div class="mcp-capability-prompts">

                                    <div class="mcp-capability-prompts__head">

                                        Example prompts

                                    </div>


                                    <div class="mcp-prompt-list">

                                        <?php foreach ($prompts as $prompt_item) : ?>

                                            <?php

                                            $prompt = $prompt_item['prompt'] ?? '';

                                            ?>

                                            <?php if (!empty($prompt)) : ?>

                                                <div class="mcp-prompt type-p3">

                                                    <?php echo esc_html($prompt); ?>

                                                </div>

                                            <?php endif; ?>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            <?php endif; ?>


                        </article>

                    <?php endforeach; ?>


                </div>

            </div>

        <?php endif; ?>


    </div>

</section>