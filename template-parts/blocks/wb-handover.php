<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];


/*
|--------------------------------------------------------------------------
| ACF Fields
|--------------------------------------------------------------------------
*/

$heading          = $fields['heading'] ?? '';
$description      = $fields['description'] ?? '';
$button_text      = $fields['button_text'] ?? '';
$button_link      = $fields['button_link'] ?? [];

$background_type  = $fields['background_type'] ?? 'image';
$background_image = $fields['background_image'] ?? [];
$background_color = $fields['background_color'] ?? '';


/*
|--------------------------------------------------------------------------
| Background
|--------------------------------------------------------------------------
*/

$section_style = '';

if ($background_type === 'image' && !empty($background_image['url'])) {

    $section_style = 'background-image: url(' . esc_url($background_image['url']) . ');';

} elseif ($background_type === 'color' && !empty($background_color)) {

    $section_style = 'background-color: ' . esc_attr($background_color);
}

?>


<section
    class="wb-handover"
    <?php if (!empty($section_style)) : ?>
        style="<?php echo esc_attr($section_style); ?>"
    <?php endif; ?>
>


    <div class="wb-handover__overlay"></div>


    <div class="wb-handover__inner">


        <div class="wb-handover__content">


            <?php if (!empty($heading)) : ?>

              
                    <?php echo wp_kses_post($heading); ?>
                

            <?php endif; ?>


            <?php if (!empty($description)) : ?>

                <p class="type-p1">
                  <?php echo esc_html($description); ?>
                </p>

            <?php endif; ?>


            <?php if (!empty($button_link['url'])) : ?>

                <a
                    href="<?php echo esc_url($button_link['url']); ?>"
                    class="btn btn-primary"
                    target="<?php echo esc_attr($button_link['target'] ?: '_self'); ?>"
                >

                    <?php
                    echo esc_html(
                        !empty($button_text)
                            ? $button_text
                            : $button_link['title']
                    );
                    ?>

                </a>

            <?php endif; ?>


        </div>


    </div>


</section>