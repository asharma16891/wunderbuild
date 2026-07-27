<?php

if (!defined('ABSPATH')) {
    exit;
}

define('WB_VERSION', '1.0.0');

require_once get_stylesheet_directory() . '/inc/setup.php';
require_once get_stylesheet_directory() . '/inc/enqueue.php';
require_once get_stylesheet_directory() . '/inc/menus.php';
require_once get_stylesheet_directory() . '/inc/helpers.php';

require_once get_stylesheet_directory() . '/acf/load-acf.php';


// Allow SVG Upload
function wunderbuild_allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'wunderbuild_allow_svg_upload' );