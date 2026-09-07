<?php

if (!defined('ABSPATH')) {
    exit;
}

define('WB_VERSION', '1.0.0');

require_once get_stylesheet_directory() . '/inc/enqueue.php';
require_once get_stylesheet_directory() . '/inc/helpers.php';

require_once get_stylesheet_directory() . '/acf/load-acf.php';


// Allow SVG Upload
function wunderbuild_allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'wunderbuild_allow_svg_upload' );


/**
 * Add Highlight / Mark option to TinyMCE
 */
add_filter('tiny_mce_before_init', 'wunderbuild_add_highlight_format');

function wunderbuild_add_highlight_format($init)
{
    $style_formats = array();

    if (!empty($init['style_formats'])) {
        $style_formats = json_decode($init['style_formats'], true);

        if (!is_array($style_formats)) {
            $style_formats = array();
        }
    }

    $style_formats[] = array(
        'title'  => 'Highlight',
        'inline' => 'mark',
        'classes' => 'wunderbuild-highlight',
    );

    $init['style_formats'] = wp_json_encode($style_formats);

    return $init;
}


/**
 * Add Formats dropdown to TinyMCE
 */
add_filter('mce_buttons_2', 'wunderbuild_add_formats_dropdown');

function wunderbuild_add_formats_dropdown($buttons)
{
    if (!in_array('styleselect', $buttons, true)) {
        array_unshift($buttons, 'styleselect');
    }

    return $buttons;
}
add_action( 'admin_head', function() {
    ?>
    <style>
        .acf-block-component .acf-block-fields__actions .acf-block-fields__edit {
            display: none !important;
        }
    </style>
    <?php
} );




function wb_register_event_cpt() {

    $args = array(
        'label'        => 'Events',
        'public'       => true,
        'show_ui'      => true,
        'menu_icon'    => 'dashicons-calendar-alt',

        'supports'     => array(
            'title',
            'thumbnail',
        ),

        'has_archive'  => false,

        'rewrite'      => array(
            'slug' => 'event-page',
        ),

        'show_in_rest' => true,
    );

    register_post_type('event', $args);
}

add_action('init', 'wb_register_event_cpt');



/**
 * Change blog post permalink
 */
function wb_blog_post_permalink($permalink, $post) {

    if ($post->post_type === 'post') {
        return home_url(
            '/resource/blog/' . $post->post_name . '/'
        );
    }

    return $permalink;
}
add_filter('post_link', 'wb_blog_post_permalink', 10, 2);


/**
 * Add rewrite rule for blog posts
 */
function wb_blog_rewrite_rule() {

    add_rewrite_rule(
        '^resource/blog/([^/]+)/?$',
        'index.php?name=$matches[1]',
        'top'
    );
}
add_action('init', 'wb_blog_rewrite_rule');



/* AQUA RESIZER START */

if (!class_exists('Aq_Exception')) {
    class Aq_Exception extends Exception {}
}

if (!class_exists('Aq_Resize')) {

    class Aq_Resize {

        private static $instance = null;

        public $throwOnError = false;

        private function __construct() {}

        private function __clone() {}


        public static function getInstance() {

            if (self::$instance === null) {
                self::$instance = new self();
            }

            return self::$instance;
        }


        /**
         * Resize / Crop Image
         */
        public function process(
            $url,
            $width = null,
            $height = null,
            $crop = false,
            $single = true,
            $upscale = false
        ) {

            try {

                /* Check URL */

                if (empty($url)) {
                    throw new Aq_Exception(
                        'Image URL is required.'
                    );
                }


                /* Check dimensions */

                if (!$width && !$height) {
                    throw new Aq_Exception(
                        'Width or height is required.'
                    );
                }


                /* Check GD */

                if (!function_exists('imagecreatetruecolor')) {
                    throw new Aq_Exception(
                        'PHP GD extension is not available.'
                    );
                }


                /* WordPress uploads */

                $upload_dir = wp_upload_dir();

                $base_url = $upload_dir['baseurl'];
                $base_dir = $upload_dir['basedir'];


                /* Remove query string */

                $url = strtok($url, '?');


                /* Convert URL to local path */

                $url_no_protocol = preg_replace(
                    '/^https?:/i',
                    '',
                    $url
                );

                $base_url_no_protocol = preg_replace(
                    '/^https?:/i',
                    '',
                    $base_url
                );


                if (
                    strpos(
                        $url_no_protocol,
                        $base_url_no_protocol
                    ) !== false
                ) {

                    $file_path = str_replace(
                        $base_url_no_protocol,
                        $base_dir,
                        $url_no_protocol
                    );

                } else {

                    $file_path = ABSPATH . ltrim(
                        str_replace(
                            site_url('/'),
                            '',
                            $url
                        ),
                        '/'
                    );
                }


                /* Check image exists */

                if (!file_exists($file_path)) {
                    throw new Aq_Exception(
                        'Image file does not exist: ' . $file_path
                    );
                }


                /* Image information */

                $info = getimagesize($file_path);

                if (!$info) {
                    throw new Aq_Exception(
                        'Invalid image.'
                    );
                }


                $orig_width  = (int) $info[0];
                $orig_height = (int) $info[1];
                $mime        = $info['mime'];


                /*
                 * Calculate dimensions
                 */

                if ($crop && $width && $height) {

                    $dest_width  = (int) $width;
                    $dest_height = (int) $height;

                } elseif ($width && !$height) {

                    $ratio = $width / $orig_width;

                    $dest_width  = (int) $width;
                    $dest_height = (int) round(
                        $orig_height * $ratio
                    );

                } elseif ($height && !$width) {

                    $ratio = $height / $orig_height;

                    $dest_height = (int) $height;
                    $dest_width = (int) round(
                        $orig_width * $ratio
                    );

                } else {

                    $ratio = min(
                        $width / $orig_width,
                        $height / $orig_height
                    );

                    $dest_width = (int) round(
                        $orig_width * $ratio
                    );

                    $dest_height = (int) round(
                        $orig_height * $ratio
                    );
                }


                /*
                 * Prevent upscaling
                 */

                if (!$upscale) {

                    if ($dest_width > $orig_width) {
                        $dest_width = $orig_width;
                    }

                    if ($dest_height > $orig_height) {
                        $dest_height = $orig_height;
                    }
                }


                /*
                 * Destination filename
                 */

                $ext = strtolower(
                    pathinfo(
                        $file_path,
                        PATHINFO_EXTENSION
                    )
                );

                $name = wp_basename(
                    $file_path,
                    '.' . $ext
                );

                $dest_file_name =
                    $name . '-' .
                    $dest_width . 'x' .
                    $dest_height . '.' .
                    $ext;


                $dest_path =
                    dirname($file_path) .
                    DIRECTORY_SEPARATOR .
                    $dest_file_name;


                /*
                 * Return existing image
                 */

                if (file_exists($dest_path)) {

                    $dest_url = str_replace(
                        $base_dir,
                        $base_url,
                        $dest_path
                    );

                    return $single
                        ? $dest_url
                        : array(
                            $dest_url,
                            $dest_width,
                            $dest_height
                        );
                }


                /*
                 * Load original image
                 */

                switch ($mime) {

                    case 'image/jpeg':

                        $src_img =
                            imagecreatefromjpeg(
                                $file_path
                            );

                        break;


                    case 'image/png':

                        $src_img =
                            imagecreatefrompng(
                                $file_path
                            );

                        break;


                    case 'image/gif':

                        $src_img =
                            imagecreatefromgif(
                                $file_path
                            );

                        break;


                    case 'image/webp':

                        if (!function_exists(
                            'imagecreatefromwebp'
                        )) {
                            throw new Aq_Exception(
                                'WebP is not supported.'
                            );
                        }

                        $src_img =
                            imagecreatefromwebp(
                                $file_path
                            );

                        break;


                    default:

                        throw new Aq_Exception(
                            'Unsupported image type: ' . $mime
                        );
                }


                if (!$src_img) {
                    throw new Aq_Exception(
                        'Unable to load image.'
                    );
                }


                /*
                 * Create destination image
                 */

                $dst_img =
                    imagecreatetruecolor(
                        $dest_width,
                        $dest_height
                    );


                /*
                 * Transparency
                 */

                if (
                    $mime === 'image/png' ||
                    $mime === 'image/gif' ||
                    $mime === 'image/webp'
                ) {

                    imagealphablending(
                        $dst_img,
                        false
                    );

                    imagesavealpha(
                        $dst_img,
                        true
                    );

                    $transparent =
                        imagecolorallocatealpha(
                            $dst_img,
                            255,
                            255,
                            255,
                            127
                        );

                    imagefilledrectangle(
                        $dst_img,
                        0,
                        0,
                        $dest_width,
                        $dest_height,
                        $transparent
                    );
                }


                /*
                 * CROP
                 */

                if (
                    $crop &&
                    $width &&
                    $height
                ) {

                    $target_ratio =
                        $width / $height;

                    $source_ratio =
                        $orig_width / $orig_height;


                    /*
                     * Original image is wider
                     */

                    if ($source_ratio > $target_ratio) {

                        $src_height = $orig_height;

                        $src_width = (int) round(
                            $orig_height *
                            $target_ratio
                        );

                    } else {

                        /*
                         * Original image is taller
                         */

                        $src_width = $orig_width;

                        $src_height = (int) round(
                            $orig_width /
                            $target_ratio
                        );
                    }


                    /*
                     * Center crop
                     */

                    $src_x = (int) round(
                        ($orig_width - $src_width) / 2
                    );

                    $src_y = (int) round(
                        ($orig_height - $src_height) / 2
                    );


                    imagecopyresampled(
                        $dst_img,
                        $src_img,
                        0,
                        0,
                        $src_x,
                        $src_y,
                        $dest_width,
                        $dest_height,
                        $src_width,
                        $src_height
                    );

                } else {

                    /*
                     * Normal resize
                     */

                    imagecopyresampled(
                        $dst_img,
                        $src_img,
                        0,
                        0,
                        0,
                        0,
                        $dest_width,
                        $dest_height,
                        $orig_width,
                        $orig_height
                    );
                }


                /*
                 * Create directory
                 */

                $dir = dirname($dest_path);

                if (!file_exists($dir)) {
                    wp_mkdir_p($dir);
                }


                /*
                 * Save image
                 */

                switch ($mime) {

                    case 'image/jpeg':

                        imagejpeg(
                            $dst_img,
                            $dest_path,
                            90
                        );

                        break;


                    case 'image/png':

                        imagepng(
                            $dst_img,
                            $dest_path,
                            8
                        );

                        break;


                    case 'image/gif':

                        imagegif(
                            $dst_img,
                            $dest_path
                        );

                        break;


                    case 'image/webp':

                        imagewebp(
                            $dst_img,
                            $dest_path,
                            90
                        );

                        break;
                }


                /*
                 * Free memory
                 */

                imagedestroy($src_img);
                imagedestroy($dst_img);


                /*
                 * Return URL
                 */

                $dest_url = str_replace(
                    $base_dir,
                    $base_url,
                    $dest_path
                );


                if ($single) {
                    return $dest_url;
                }

                return array(
                    $dest_url,
                    $dest_width,
                    $dest_height
                );


            } catch (Aq_Exception $e) {

                error_log(
                    'Aq_Resize Error: ' .
                    $e->getMessage()
                );

                if ($this->throwOnError) {
                    throw $e;
                }

                return false;
            }
        }
    }
}


/**
 * aq_resize helper
 */

if (!function_exists('aq_resize')) {

    function aq_resize(
        $url,
        $width = null,
        $height = null,
        $crop = false,
        $single = true,
        $upscale = false
    ) {

        $aq_resize =
            Aq_Resize::getInstance();

        return $aq_resize->process(
            $url,
            $width,
            $height,
            $crop,
            $single,
            $upscale
        );
    }
}

/* AQUA RESIZER END */

