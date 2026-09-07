<?php

$fields = $args['fields'] ?? [];


/*
|--------------------------------------------------------------------------
| HERO FIELDS
|--------------------------------------------------------------------------
*/

$hide_hero = !empty($fields['hero_hide_section']);

$eyebrow         = $fields['hero_eyebrow'] ?? '';
$title           = $fields['hero_title'] ?? '';
$description     = $fields['hero_description'] ?? '';
$supporting_text = $fields['hero_supporting_text'] ?? '';

$primary   = $fields['hero_primary_button'] ?? [];
$secondary = $fields['hero_secondary_button'] ?? [];

$hero_image = $fields['hero_image'] ?? [];
$hero_video = $fields['hero_video'] ?? [];
$bg_color   = $fields['hero_background_color'] ?? '#F2F5F8';


/*
|--------------------------------------------------------------------------
| HIDE HERO
|--------------------------------------------------------------------------
|
| If "Hide Hero Section" is enabled in ACF,
| don't output the hero section.
|
*/

if ($hide_hero) {
    return;
}


/*
|--------------------------------------------------------------------------
| HERO BACKGROUND MODE
|--------------------------------------------------------------------------
|
| Video > Image > Gradient/Color
|
*/

if (!empty($hero_video['url'])) {

    $hero_mode = 'video';

} elseif (!empty($hero_image['url'])) {

    $hero_mode = 'image';

} else {

    $hero_mode = 'gradient';
}


/*
|--------------------------------------------------------------------------
| SECTION STYLE
|--------------------------------------------------------------------------
*/

$section_style = '';

if ($hero_mode === 'image') {

    $section_style = sprintf(
        'style="background-image:url(\'%s\'); background-color:%s;"',
        esc_url($hero_image['url']),
        esc_attr($bg_color)
    );

} elseif ($hero_mode === 'gradient') {

    $section_style = sprintf(
        'style="background-color:%s;"',
        esc_attr($bg_color)
    );
}

?>


<section
    class="hero hero--<?php echo esc_attr($hero_mode); ?>"
    <?php echo $section_style; ?>
>

    <?php if ($hero_mode === 'video'): ?>

        <video
            class="hero-bg-video"
            autoplay
            muted
            loop
            playsinline

            <?php if (!empty($hero_video['poster'])): ?>

                poster="<?php echo esc_url($hero_video['poster']); ?>"

            <?php endif; ?>
        >

            <source
                src="<?php echo esc_url($hero_video['url']); ?>"
                type="video/mp4"
            >

        </video>

    <?php endif; ?>


    <div class="wrap">

        <div class="hero-content">


            <?php if ($eyebrow): ?>

                <span class="eyebrow type-p3">

                    <?php echo esc_html($eyebrow); ?>

                </span>

            <?php endif; ?>


            <?php if ($title): ?>

                <?php echo wp_kses_post($title); ?>

            <?php endif; ?>


            <?php if ($description): ?>

                <p class="lead hero-text type-p1">

                    <?php echo esc_html($description); ?>

                </p>

            <?php endif; ?>


            <?php if ($supporting_text): ?>

                <p class="supporting-hero-text hero-text">

                    <?php echo esc_html($supporting_text); ?>

                </p>

            <?php endif; ?>


            <div class="hero-cta hero-buttons">


                <?php if ($primary): ?>

                    <a
                        href="<?php echo esc_url($primary['url']); ?>"
                        class="btn btn-primary"
                    >

                        <?php echo esc_html($primary['title']); ?>

                    </a>

                <?php endif; ?>


                <?php if ($secondary): ?>

                    <a
                        href="<?php echo esc_url($secondary['url']); ?>"
                        class="btn btn-ghost"
                    >

                        <?php echo esc_html($secondary['title']); ?>

                    </a>

                <?php endif; ?>


            </div>

        </div>

    </div>

</section>