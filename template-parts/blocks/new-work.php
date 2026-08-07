<?php

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';
$cards       = $fields['cards'] ?? [];

if (empty($cards)) {
    return;
}

// Icon set that cycles per card — swap for a real ACF icon-picker field
// per card later if you want icons tied to specific card content.
$icon_paths = [
    'user'   => '<path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="8" r="4"/>',
    'layers' => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
    'alert'  => '<circle cx="12" cy="12" r="9"/><path d="M12 8v5M12 16h.01"/>',
    'clock'  => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/>',
    'file'   => '<path d="M7 3h8l4 4v14H7z"/><path d="M15 3v4h4M9 12h6M9 16h6"/>',
];
$icon_keys = array_keys($icon_paths);

// lime / indigo / coral cycle — swap or extend as needed
$accents = [
    ['solid' => 'var(--lime)',   'tint' => 'rgba(180,255,80,.28)',  'text' => '#4a7311'],
    ['solid' => 'var(--indigo)', 'tint' => 'rgba(179,153,255,.26)', 'text' => '#5a3fc0'],
    ['solid' => 'var(--coral)',  'tint' => 'rgba(255,143,133,.26)', 'text' => '#c94b3e'],
];

$total = count($cards);

// Build the dashed zig-zag connector path dynamically, 3 cards per row,
// alternating high/low the same way the CSS staggers every 2nd card in
// each row of 3 (nth-child pattern). Works for any card count.
$points      = [];
$col_width   = 1200 / 3;
foreach ($cards as $i => $card) {
    $col       = $i % 3;
    $row       = floor($i / 3);
    $x         = ($col * $col_width) + ($col_width / 2);
    $is_middle = ($col === 1); 
    $y         = ($row * 200) + ($is_middle ? 50 : 150);
    $points[]  = [$x, $y];
}
$path_d = '';
foreach ($points as $i => $p) {
    $path_d .= ($i === 0 ? 'M' : ' L') . $p[0] . ',' . $p[1];
}
$svg_height = (floor(($total - 1) / 3) + 1) * 200;

?>

<section class="new-work">

    <div class="wrap">

        <div class="section-heading">

            <?php if (!empty($heading)) : ?>
                <h2><?php echo nl2br(esc_html($heading)); ?></h2>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>

        </div>

        <div class="feature-grid">

            <svg class="v5-zigzag" viewBox="0 0 1200 <?php echo esc_attr($svg_height); ?>" preserveAspectRatio="none">
                <path d="<?php echo esc_attr($path_d); ?>" />
                <?php foreach ($points as $p) : ?>
                    <circle cx="<?php echo esc_attr($p[0]); ?>" cy="<?php echo esc_attr($p[1]); ?>" r="5" />
                <?php endforeach; ?>
            </svg>

            <?php foreach ($cards as $index => $card) :
                $icon   = $icon_paths[$icon_keys[$index % count($icon_keys)]];
                $accent = $accents[$index % count($accents)];
                $num    = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
            ?>

                <article
                    class="feature-card"
                    style="--accent: <?php echo esc_attr($accent['solid']); ?>; --accent-tint: <?php echo esc_attr($accent['tint']); ?>; --accent-text: <?php echo esc_attr($accent['text']); ?>;">

                    <div class="feature-bignum"><?php echo esc_html($num); ?></div>

                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                            <?php echo $icon; ?>
                        </svg>
                    </div>

                    <div class="feature-content">

                        <?php if (!empty($card['title'])) : ?>
                            <h3><?php echo esc_html($card['title']); ?></h3>
                        <?php endif; ?>

                        <?php if (!empty($card['description'])) : ?>
                            <p><?php echo esc_html($card['description']); ?></p>
                        <?php endif; ?>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>