<?php

if (!defined('ABSPATH')) {
    exit;
}

// Options Pages
require_once get_stylesheet_directory() . '/acf/options-pages.php';

// Register ACF Blocks
require_once get_stylesheet_directory() . '/acf/blocks/register-blocks.php';

// Field Groups
require_once get_stylesheet_directory() . '/acf/fields/header.php';
require_once get_stylesheet_directory() . '/acf/fields/footer.php';
require_once get_stylesheet_directory() . '/acf/fields/hero.php';
require_once get_stylesheet_directory() . '/acf/fields/trust.php';
require_once get_stylesheet_directory() . '/acf/fields/process.php';
require_once get_stylesheet_directory() . '/acf/fields/product-showcase.php';