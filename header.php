<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title('|', true, 'right');
          bloginfo('name'); ?></title>

  <link rel="preconnect" href="https://api.fontshare.com">
  <link href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@800,700,500,400&f[]=satoshi@400,500,700&display=swap"
    rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <?php
  $logo         = get_field('header_logo', 'option');
  $login_button = get_field('login_button', 'option');
  $trial_button = get_field('trial_button', 'option');
  ?>

  <header id="siteHeader">

    <nav class="navbar">

      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">

        <?php if ($logo) : ?>

          <img
            src="<?php echo esc_url($logo['url']); ?>"
            alt="<?php echo esc_attr($logo['alt']); ?>">

        <?php endif; ?>

      </a>

      <!-- Navigation -->
      <div class="nav-links">

        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary_menu',
          'container'      => false,
          'menu_class'     => 'primary-menu',
          'fallback_cb'    => false,
        ));
        ?>

      </div>

      <!-- Buttons -->
      <div class="nav-actions">

        <?php if ($login_button) : ?>

          <a
            href="<?php echo esc_url($login_button['url']); ?>"
            target="<?php echo esc_attr($login_button['target']); ?>"
            class="nav-login">

            <?php echo esc_html($login_button['title']); ?>

          </a>

        <?php endif; ?>


        <?php if ($trial_button) : ?>

          <a
            href="<?php echo esc_url($trial_button['url']); ?>"
            target="<?php echo esc_attr($trial_button['target']); ?>"
            class="btn btn-primary btn-sm">

            <?php echo esc_html($trial_button['title']); ?>

          </a>

        <?php endif; ?>

      </div>

      <button
        class="mobile-toggle"
        aria-label="Open menu"
        aria-expanded="false"
        type="button">

        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
          <line class="line line-1" x1="3" y1="6" x2="21" y2="6" />
          <line class="line line-2" x1="3" y1="12" x2="21" y2="12" />
          <line class="line line-3" x1="3" y1="18" x2="21" y2="18" />
        </svg>

      </button>

    </nav>

  </header>