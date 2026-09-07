<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];


$video = $fields['hero_video'] ?? '';


$video_url = '';


if (is_array($video)) {
    $video_url = $video['url'] ?? '';
} elseif (is_numeric($video)) {
    $video_url = wp_get_attachment_url($video);
} elseif (is_string($video)) {
    $video_url = $video;
}

?>

<section class="hero-video section-space">

    <!-- PRODUCT RECORDING -->
    <div class="mcp-hero__media">

        <div class="mcp-hero__media-frame">

            <div class="mcp-hero__video">

                <?php if (!empty($video_url)) : ?>

                    <video
                        controls
                        preload="metadata"
                        playsinline
                        poster="https://www.wunderbuild.com/wp-content/uploads/2023/04/scott-blake-x-ghf9LjrVg-unsplash1.jpg"
                    >

                        <source
                            src="<?php echo esc_url($video_url); ?>"
                            type="video/mp4"
                        >

                        Your browser does not support the video tag.

                    </video>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>