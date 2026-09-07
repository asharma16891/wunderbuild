<?php
$heading = get_field('heading');
$cases   = get_field('cases');
?>

<section class="ws-use-cases">

    <div class="ws-use-cases__inner">

        <?php if ($heading) : ?>
            <div class="section-head">
                <h2><?php echo esc_html($heading); ?></h2>
            </div>
        <?php endif; ?>


        <?php if ($cases) : ?>

            <div class="ws-use-cases__list">

                <?php foreach ($cases as $index => $case) : 

                    $image       = $case['image'] ?? '';
                    $image_alt   = $case['image_alt'] ?? '';
                    $title       = $case['title'] ?? '';
                    $description = $case['description'] ?? '';

                    // Reverse every even item: 2, 4, 6, 8
                    $reverse_class = (($index + 1) % 2 === 0)
                        ? ' ws-use-case--reverse'
                        : '';

                    // Icon color remains static
                    $icon_color_class = (($index + 1) % 2 === 0)
                        ? ' ws-use-case__icon--peach'
                        : ' ws-use-case__icon--indigo';
                ?>

                    <article class="ws-use-case<?php echo esc_attr($reverse_class); ?>">

                        <?php
                        /**
                         * For odd items:
                         * Image first, content second
                         *
                         * For even items:
                         * Content first, image second
                         */
                        ?>

                        <?php if (($index + 1) % 2 !== 0) : ?>

                            <!-- Image -->
                            <div class="ws-use-case__media">

                                <?php if ($image) : ?>

                                    <img
                                        src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr(
                                            $image_alt ? $image_alt : $image['alt']
                                        ); ?>"
                                    >

                                <?php endif; ?>

                            </div>

                        <?php endif; ?>


                        <!-- Content -->
                        <div class="ws-use-case__content">

                            <div class="ws-use-case__icon <?php echo esc_attr($icon_color_class); ?>">

                                <?php
                                /*
                                 * STATIC ICONS
                                 * These are controlled by the repeater position.
                                 */
                                ?>

                                <?php if ($index === 0) : ?>

                                    <!-- QR ICON -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true">

                                        <rect x="3" y="3" width="7" height="7"
                                            rx="1.5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"/>

                                        <rect x="14" y="3" width="7" height="7"
                                            rx="1.5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"/>

                                        <rect x="3" y="14" width="7" height="7"
                                            rx="1.5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"/>

                                        <path
                                            d="M14 14h3v3h-3zM18 18h3v3h-3zM18 14h3M14 18v3"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                    </svg>


                                <?php elseif ($index === 1) : ?>

                                    <!-- WORKER / ID ICON -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true">

                                        <rect
                                            x="3"
                                            y="4"
                                            width="18"
                                            height="16"
                                            rx="2.5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <circle
                                            cx="9"
                                            cy="10"
                                            r="2.2"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M5.8 16c.8-2 2-3 3.2-3s2.4 1 3.2 3"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                        <path
                                            d="M14 9h4M14 12h4M14 15h3"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                    </svg>


                                <?php elseif ($index === 2) : ?>

                                    <!-- CLIPBOARD ICON -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true">

                                        <rect
                                            x="5"
                                            y="4"
                                            width="14"
                                            height="17"
                                            rx="2"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M9 4.5V3h6v1.5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                        <path
                                            d="M8.5 10h7M8.5 13.5h7M8.5 17h4"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                    </svg>


                                <?php elseif ($index === 3) : ?>

                                    <!-- DOCUMENT CHECK ICON -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true">

                                        <path
                                            d="M6 3h8l4 4v14H6z"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linejoin="round"
                                        />

                                        <path
                                            d="M14 3v5h5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linejoin="round"
                                        />

                                        <path
                                            d="m8.5 14 2 2 4.5-5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />

                                    </svg>


                                <?php elseif ($index === 4) : ?>

                                    <!-- TOOL / EQUIPMENT ICON -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true">

                                        <path
                                            d="M14.5 5.5a4 4 0 0 0-5 5l-5.2 5.2a2 2 0 0 0 2.8 2.8l5.2-5.2a4 4 0 0 0 5-5l-2.4 2.4-2.5-.5-.5-2.5z"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linejoin="round"
                                        />

                                        <path
                                            d="m15 15 4.5 4.5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                    </svg>


                                <?php elseif ($index === 5) : ?>

                                    <!-- BOX / ORDER ICON -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true">

                                        <path
                                            d="m4 7 8-4 8 4-8 4z"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linejoin="round"
                                        />

                                        <path
                                            d="M4 7v10l8 4 8-4V7M12 11v10"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linejoin="round"
                                        />

                                        <path
                                            d="m8 5 8 4"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                    </svg>


                                <?php elseif ($index === 6) : ?>

                                    <!-- CALENDAR ICON -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true">

                                        <rect
                                            x="3"
                                            y="5"
                                            width="18"
                                            height="16"
                                            rx="2"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M7 3v4M17 3v4M3 9h18"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                        <path
                                            d="M7 13h3M14 13h3M7 17h3"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                    </svg>


                                <?php elseif ($index === 7) : ?>

                                    <!-- WARRANTY / CHAT ICON -->
                                    <svg viewBox="0 0 24 24" aria-hidden="true">

                                        <path
                                            d="M5 4h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-7l-4 4v-4H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linejoin="round"
                                        />

                                        <path
                                            d="M8 9h8M8 13h5"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                    </svg>

                                <?php endif; ?>

                            </div>


                            <?php if ($title) : ?>
                                <h3><?php echo esc_html($title); ?></h3>
                            <?php endif; ?>


                            <?php if ($description) : ?>
                                <p class="common-para"><?php echo esc_html($description); ?></p>
                            <?php endif; ?>

                        </div>


                        <?php if (($index + 1) % 2 === 0) : ?>

                            <!-- Image -->
                            <div class="ws-use-case__media">

                                <?php if ($image) : ?>

                                    <img
                                        src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr(
                                            $image_alt ? $image_alt : $image['alt']
                                        ); ?>"
                                    >

                                <?php endif; ?>

                            </div>

                        <?php endif; ?>

                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>