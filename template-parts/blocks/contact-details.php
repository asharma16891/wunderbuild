<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading = $fields['heading'] ?? '';
$items   = $fields['items'] ?? [];

?>

<section class="contact-details section-space">

    <div class="wrap">

        <!-- SECTION HEADER -->
        <?php if (!empty($heading)) : ?>

            <div class="contact-details__header">

                <h2>
                    <?php echo esc_html($heading); ?>
                </h2>

            </div>

        <?php endif; ?>


        <!-- CONTACT CARDS -->
        <?php if (!empty($items) && is_array($items)) : ?>

            <div class="contact-details__content">

                <?php foreach ($items as $item) : ?>

                    <?php

                    $icon_type  = $item['icon_type'] ?? '';
                    $label      = $item['label'] ?? '';
                    $value      = $item['value'] ?? '';
                    $description = $item['description'] ?? '';
                    $link       = $item['link'] ?? [];

                    ?>

                    <div class="contact-detail">

                        <!-- ICON -->
                        <div class="contact-detail__icon">

                            <?php if ($icon_type === 'phone') : ?>

                                <svg
                                    width="25"
                                    height="25"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M21 15.5V19C21 20.1 20.1 21 19 21C10.16 21 3 13.84 3 5C3 3.9 3.9 3 5 3H8.5C9.05 3 9.5 3.45 9.5 4V7.5C9.5 8.05 9.05 8.5 8.5 8.5H7C7.72 11.38 9.62 13.28 12.5 14V12.5C12.5 11.95 12.95 11.5 13.5 11.5H17C17.55 11.5 18 11.95 18 12.5V16C18 16.55 17.55 17 17 17H15.5"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>

                            <?php elseif ($icon_type === 'message') : ?>

                                <svg
                                    width="25"
                                    height="25"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M4 5.5C4 4.67 4.67 4 5.5 4H18.5C19.33 4 20 4.67 20 5.5V15.5C20 16.33 19.33 17 18.5 17H9L5 20V17.5C4.45 17.27 4 16.72 4 16V5.5Z"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />

                                    <path
                                        d="M7 8H17"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M7 12H14"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                    />
                                </svg>

                            <?php elseif ($icon_type === 'support') : ?>

                                <svg
                                    width="25"
                                    height="25"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M12 3C7.03 3 3 6.58 3 11C3 13.08 3.93 14.97 5.45 16.37L4.5 20L8.18 18.34C9.34 18.77 10.63 19 12 19C16.97 19 21 15.42 21 11C21 6.58 16.97 3 12 3Z"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />

                                    <path
                                        d="M8 11H8.01"
                                        stroke="currentColor"
                                        stroke-width="2.2"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M12 11H12.01"
                                        stroke="currentColor"
                                        stroke-width="2.2"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M16 11H16.01"
                                        stroke="currentColor"
                                        stroke-width="2.2"
                                        stroke-linecap="round"
                                    />
                                </svg>

                            <?php elseif ($icon_type === 'office') : ?>

                                <svg
                                    width="25"
                                    height="25"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M4 21V5C4 4.45 4.45 4 5 4H15C15.55 4 16 4.45 16 5V21"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />

                                    <path
                                        d="M16 9H19C19.55 9 20 9.45 20 10V21"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />

                                    <path
                                        d="M8 8H10"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M8 12H10"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M8 16H10"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M12 21V17H14V21"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linejoin="round"
                                    />

                                    <path
                                        d="M2.5 21H21.5"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                    />
                                </svg>

                            <?php endif; ?>

                        </div>


                        <!-- CONTENT -->
                        <div class="contact-detail__body">

                            <?php if (!empty($label)) : ?>

                                <span class="contact-detail__label">
                                    <?php echo esc_html($label); ?>
                                </span>

                            <?php endif; ?>


                            <?php if (!empty($value)) : ?>

                                <?php if (!empty($link['url'])) : ?>

                                    <a
                                        href="<?php echo esc_url($link['url']); ?>"
                                        class="contact-detail__value"
                                        target="<?php echo esc_attr($link['target'] ?? '_self'); ?>"
                                    >
                                        <?php echo nl2br(esc_html($value)); ?>
                                    </a>

                                <?php else : ?>

                                    <div class="contact-detail__value">

                                        <?php echo nl2br(esc_html($value)); ?>

                                    </div>

                                <?php endif; ?>

                            <?php endif; ?>


                            <?php if (!empty($description)) : ?>

                                <span class="contact-detail__description">

                                    <?php echo esc_html($description); ?>

                                </span>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>