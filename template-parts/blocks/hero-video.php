<?php

if (!defined('ABSPATH')) {
    exit;
}

$video = get_field('video');

?>

<section>

    <!-- PRODUCT RECORDING -->
    <div class="mcp-hero__media">

        <div class="mcp-hero__media-frame">

            <div class="mcp-hero__video">

                <?php if (!empty($video)) : ?>

                    <?php
                    $video_url = '';

                    if (is_array($video)) {
                        $video_url = $video['url'] ?? '';
                    } elseif (is_numeric($video)) {
                        $video_url = wp_get_attachment_url($video);
                    } elseif (is_string($video)) {
                        $video_url = $video;
                    }
                    ?>

                    <?php if (!empty($video_url)) : ?>

                        <video
                            controls
                            preload="metadata"
                            playsinline
                            poster="<?php echo esc_url(
                                get_template_directory_uri() . '/assets/images/mcp-hero-poster.jpg'
                            ); ?>"
                        >

                            <source
                                src="<?php echo esc_url($video_url); ?>"
                                type="video/mp4">

                        </video>

                    <?php endif; ?>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>