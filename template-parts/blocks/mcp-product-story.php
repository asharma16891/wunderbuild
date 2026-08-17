<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$note        = $fields['note'] ?? '';

?>

<section class="mcp-product-story section-space">

    <div class="wrap">

        <div class="mcp-product-story__box">

            <div class="mcp-product-story__content">

                <div class="section-head">

                    <?php if (!empty($heading)) : ?>

                        <?php echo wp_kses_post($heading); ?>

                    <?php endif; ?>

                </div>


                <?php if (!empty($description)) : ?>

                    <p class="mcp-product-story__description">
                        <?php echo esc_html($description); ?>
                    </p>

                <?php endif; ?>


                <?php if (!empty($note)) : ?>

                    <div class="mcp-product-story__note">

                        <span class="mcp-product-story__note-icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">

                                <path
                                    d="M12 3L21 20H3L12 3Z"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linejoin="round"
                                />

                                <path
                                    d="M12 9V13"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                />

                                <circle
                                    cx="12"
                                    cy="16.5"
                                    r="0.8"
                                    fill="currentColor"
                                />

                            </svg>

                        </span>

                        <p>
                            <?php echo esc_html($note); ?>
                        </p>

                    </div>

                <?php endif; ?>

            </div>


            <!-- ANIMATED VISUAL - STATIC -->

            <div class="mcp-product-story__visual" aria-hidden="true">

                <div class="mcp-flow">

                    <div class="mcp-flow__grid"></div>

                    <div class="mcp-flow__line mcp-flow__line--one"></div>

                    <div class="mcp-flow__line mcp-flow__line--two"></div>

                    <div class="mcp-flow__line mcp-flow__line--three"></div>


                    <div class="mcp-flow__node mcp-flow__node--one">
                        <span></span>
                    </div>

                    <div class="mcp-flow__node mcp-flow__node--two">
                        <span></span>
                    </div>

                    <div class="mcp-flow__node mcp-flow__node--three">
                        <span></span>
                    </div>


                    <div class="mcp-flow__document mcp-flow__document--one">

                        <span></span>
                        <span></span>
                        <span></span>

                    </div>


                    <div class="mcp-flow__document mcp-flow__document--two">

                        <span></span>
                        <span></span>
                        <span></span>

                    </div>


                    <div class="mcp-flow__document mcp-flow__document--three">

                        <span></span>
                        <span></span>
                        <span></span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>