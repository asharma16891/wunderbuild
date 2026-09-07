<?php

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$cards       = $fields['cards'] ?? [];

if (empty($cards)) {
    return;
}

/*
 * Accent colors cycle per card
 */
$accents = [
    [
        'solid' => 'var(--lime)',
        'tint'  => 'rgba(180,255,80,.28)',
        'text'  => '#4a7311'
    ],
    [
        'solid' => 'var(--indigo)',
        'tint'  => 'rgba(179,153,255,.26)',
        'text'  => '#5a3fc0'
    ],
    [
        'solid' => 'var(--coral)',
        'tint'  => 'rgba(255,143,133,.26)',
        'text'  => '#c94b3e'
    ],
];

$total = count($cards);

/*
 * Build the dashed zig-zag connector path dynamically.
 * 3 cards per row.
 */
$points    = [];
$col_width = 1200 / 3;

foreach ($cards as $i => $card) {

    $col = $i % 3;
    $row = floor($i / 3);

    $x = ($col * $col_width) + ($col_width / 2);

    $is_middle = ($col === 1);

    $y = ($row * 200) + ($is_middle ? 50 : 150);

    $points[] = [$x, $y];
}

$path_d = '';

foreach ($points as $i => $p) {

    $path_d .= ($i === 0 ? 'M' : ' L')
        . $p[0]
        . ','
        . $p[1];
}

$svg_height = (floor(($total - 1) / 3) + 1) * 200;

?>

<section class="new-work section-global">

    <div class="wrap">

        <div class="section-head">

            <?php if (!empty($heading)) : ?>

                <h2>
                    <?php echo nl2br(esc_html($heading)); ?>
                </h2>

            <?php endif; ?>


            <?php if (!empty($description)) : ?>

                <p class="type-p1">
                    <?php echo esc_html($description); ?>
                </p>

            <?php endif; ?>

        </div>


        <div class="feature-grid">

            <!-- Zig-zag connector -->

            <svg
                class="v5-zigzag"
                viewBox="0 0 1200 <?php echo esc_attr($svg_height); ?>"
                preserveAspectRatio="none"
            >

                <path d="<?php echo esc_attr($path_d); ?>" />

                <?php foreach ($points as $p) : ?>

                    <circle
                        cx="<?php echo esc_attr($p[0]); ?>"
                        cy="<?php echo esc_attr($p[1]); ?>"
                        r="5"
                    />

                <?php endforeach; ?>

            </svg>


            <?php foreach ($cards as $index => $card) :

                $accent = $accents[$index % count($accents)];

                $num = str_pad(
                    $index + 1,
                    2,
                    '0',
                    STR_PAD_LEFT
                );

                /*
                 * ACF Image field
                 *
                 * return_format = array
                 */
                $image = $card['image'] ?? [];

            ?>

                <article
                    class="feature-card"
                    style="
                        --accent: <?php echo esc_attr($accent['solid']); ?>;
                        --accent-tint: <?php echo esc_attr($accent['tint']); ?>;
                        --accent-text: <?php echo esc_attr($accent['text']); ?>;
                    "
                >

                    <div class="feature-bignum">
                        <?php echo esc_html($num); ?>
                    </div>


                    <?php if (!empty($image)) : ?>

                        <div class="feature-icon">

                            <img
                                src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt'] ?: $card['title'] ?? ''); ?>"
                            >

                        </div>

                    <?php endif; ?>


                    <div class="feature-content">

                        <?php if (!empty($card['title'])) : ?>

                            <h3 class="type-h5">
                                <?php echo esc_html($card['title']); ?>
                            </h3>

                        <?php endif; ?>


                        <?php if (!empty($card['description'])) : ?>

                            <p class="common-para">
                                <?php echo esc_html($card['description']); ?>
                            </p>

                        <?php endif; ?>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>