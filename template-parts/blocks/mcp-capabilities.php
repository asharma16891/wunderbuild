<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading      = $fields['heading'] ?? '';
$capabilities = $fields['capabilities'] ?? [];

?>

<section class="mcp-capabilities section-space">

    <div class="wrap">

        <!-- SECTION HEADER -->
        <div class="section-head">

            <?php if (!empty($heading)) : ?>

                <div class="mcp-capabilities__heading">
                    <?php echo wp_kses_post($heading); ?>
                </div>

            <?php endif; ?>

        </div>


        <?php if (!empty($capabilities)) : ?>

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

                        $number = $index + 1;
                        $active = $index === 0;

                        ?>

                        <button
                            class="mcp-capability-tab <?php echo $active ? 'active' : ''; ?>"
                            id="mcp-tab-<?php echo esc_attr($number); ?>"
                            type="button"
                            role="tab"
                            aria-selected="<?php echo $active ? 'true' : 'false'; ?>"
                            aria-controls="mcp-panel-<?php echo esc_attr($number); ?>"
                            tabindex="<?php echo $active ? '0' : '-1'; ?>"
                            data-tab="<?php echo esc_attr($number); ?>"
                        >


                            <!-- STATIC ICONS -->

                            <span class="mcp-capability-tab__icon">

                                <?php if ($number === 1) : ?>

                                    <svg viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">

                                        <rect x="9" y="6" width="26" height="34" rx="3"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                        <path d="M15 14H29"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"/>

                                        <path d="M15 20H29"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"/>

                                        <path d="M15 26H25"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"/>

                                        <path d="M29 32H39"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"/>

                                    </svg>

                                <?php elseif ($number === 2) : ?>

                                    <svg viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">

                                        <rect x="7" y="10" width="34" height="29" rx="3"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                        <path d="M7 18H41"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                        <path d="M14 25H23"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"/>

                                        <path d="M14 31H30"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"/>

                                    </svg>

                                <?php elseif ($number === 3) : ?>

                                    <svg viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">

                                        <circle cx="24" cy="24" r="17"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                        <path d="M24 13V24L31 29"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>

                                        <path d="M15 36H33"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"/>

                                    </svg>

                                <?php elseif ($number === 4) : ?>

                                    <svg viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">

                                        <circle cx="17" cy="17" r="7"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                        <circle cx="32" cy="17" r="7"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                        <circle cx="24" cy="32" r="7"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                        <path d="M22 20L26 20"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                        <path d="M20 23L21 26"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                        <path d="M28 23L27 26"
                                            stroke="currentColor"
                                            stroke-width="2"/>

                                    </svg>

                                <?php endif; ?>

                            </span>


                            <?php if (!empty($capability['title'])) : ?>

                                <span class="mcp-capability-tab__title">
                                    <?php echo esc_html($capability['title']); ?>
                                </span>

                            <?php endif; ?>


                            <span class="mcp-capability-tab__arrow">
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

                        $number = $index + 1;
                        $active = $index === 0;

                        $title       = $capability['title'] ?? '';
                        $description = $capability['description'] ?? '';
                        $prompts     = $capability['prompts'] ?? [];

                        ?>

                        <article
                            class="mcp-capability-panel <?php echo $active ? 'active' : ''; ?>"
                            id="mcp-panel-<?php echo esc_attr($number); ?>"
                            role="tabpanel"
                            aria-labelledby="mcp-tab-<?php echo esc_attr($number); ?>"
                            data-panel="<?php echo esc_attr($number); ?>"

                            <?php if (!$active) : ?>
                                hidden
                            <?php endif; ?>
                        >


                            <div class="mcp-capability-panel__top">

                                <?php if (!empty($title)) : ?>

                                    <h3>
                                        <?php echo esc_html($title); ?>
                                    </h3>

                                <?php endif; ?>

                            </div>


                            <?php if (!empty($description)) : ?>

                                <p class="mcp-capability-panel__description">
                                    <?php echo esc_html($description); ?>
                                </p>

                            <?php endif; ?>


                            <?php if (!empty($prompts)) : ?>

                                <div class="mcp-capability-prompts">

                                    <div class="mcp-capability-prompts__head">
                                        Example prompts
                                    </div>


                                    <div class="mcp-prompt-list">

                                        <?php foreach ($prompts as $prompt) : ?>

                                            <?php if (!empty($prompt['prompt'])) : ?>

                                                <div class="mcp-prompt">
                                                    <?php echo esc_html($prompt['prompt']); ?>
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