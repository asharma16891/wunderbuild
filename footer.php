<?php


$footer_logo            = get_field('footer_logo', 'option');
$footer_logo_text       = get_field('footer_logo_text', 'option');


$company_title          = get_field('footer_company_title', 'option');
$company_description    = get_field('footer_company_description', 'option');

$google_play_image = get_field('footer_google_play_image', 'option');
$google_play_link  = get_field('footer_google_play_link', 'option');

$app_store_image = get_field('footer_app_store_image', 'option');
$app_store_link  = get_field('footer_app_store_link', 'option');



$newsletter_title       = get_field('footer_newsletter_title', 'option');
$newsletter_description = get_field('footer_newsletter_description', 'option');
$newsletter_placeholder = get_field('footer_newsletter_placeholder', 'option');
$newsletter_button      = get_field('footer_newsletter_button', 'option');
$newsletter_note        = get_field('footer_newsletter_note', 'option');

$menu1_title            = get_field('footer_menu_1_title', 'option');
$menu2_title            = get_field('footer_menu_2_title', 'option');

$contact_title          = get_field('footer_contact_title', 'option');
$phone                  = get_field('footer_phone', 'option');
$email                  = get_field('footer_email', 'option');
$address                = get_field('footer_address', 'option');

$copyright              = get_field('footer_copyright', 'option');

$privacy                = get_field('footer_privacy', 'option');
$terms                  = get_field('footer_terms', 'option');

$socials                = get_field('footer_socials', 'option');

?>

<footer>

  <div class="wrap">



    <div class="footer-grid">

      <!-- ========================= -->
      <!-- Company -->
      <!-- ========================= -->

      <div class="footer-brand">

        <div class="logo" style="color:#fff;">

          <span class="logo-mark">

            <?php if ($footer_logo): ?>

              <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>">

            <?php endif; ?>

          </span>

          <?php echo esc_html($footer_logo_text); ?>

        </div>


        <p class="tagline">
          <?php echo esc_html($company_title); ?>
        </p>



        <p>
          <?php echo esc_html($company_description); ?>
        </p>


         <p class="tagline">
          <?php echo esc_html($newsletter_title); ?>
        </p>

       <div class="newsletter-form">
    <?php echo do_shortcode('[contact-form-7 id="59eaeef" title="Contact form 1"]'); ?>
</div>

        <div class="footer-brand">
          <p>
            <?php echo esc_html($newsletter_description); ?>
          </p>
        </div>

        <span class="newsletter-note">

          <?php echo esc_html($newsletter_note); ?>

        </span>


        





      </div>

      <!-- ========================= -->
      <!-- Footer Menu 1 -->
      <!-- ========================= -->

      <div>

        <h6>Wunderbuild</h6>

        <?php

        wp_nav_menu(array(

          'theme_location' => 'footer_menu_1',
          'container'      => false,
          'menu_class'     => 'foot-links',

        ));

        ?>

      </div>

      <!-- ========================= -->
      <!-- Footer Menu 2 -->
      <!-- ========================= -->

      <div>

        <h6>How it works</h6>

        <?php

        wp_nav_menu(array(

          'theme_location' => 'footer_menu_2',
          'container'      => false,
          'menu_class'     => 'foot-links',

        ));

        ?>

      </div>


      <!-- ========================= -->
      <!-- Contact -->
      <!-- ========================= -->

      <div class="foot-contact">

        <h6>Get in touch</h6>

        <?php if ($phone): ?>

          <a class="contact-row" href="tel:<?php echo preg_replace('/\s+/', '', $phone); ?>">

            <span class="contact-ic">

              <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">

                <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 2 .7 2.9a2 2 0 0 1-.4 2.1L8 10.1a16 16 0 0 0 6 6l1.4-1.4a2 2 0 0 1 2.1-.4c.9.4 1.9.6 2.9.7a2 2 0 0 1 1.7 2Z" />

              </svg>

            </span>

            <?php echo esc_html($phone); ?>

          </a>

        <?php endif; ?>


        <?php if ($email): ?>

          <a class="contact-row" href="mailto:<?php echo esc_attr($email); ?>">

            <span class="contact-ic">

              <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">

                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />

              </svg>

            </span>

            <?php echo esc_html($email); ?>

          </a>

        <?php endif; ?>


        <?php if ($address): ?>

          <div class="contact-row">

            <span class="contact-ic">

              <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">

                <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0Z" />

                <circle cx="12" cy="10" r="3" />

              </svg>

            </span>

            <?php echo nl2br(esc_html($address)); ?>

          </div>

        <?php endif; ?>

        <div class="store-badges">

          <?php if ($google_play_image) : ?>
            <a href="<?php echo esc_url($google_play_link ?: '#'); ?>" class="store-badge" target="_blank" rel="noopener">
              <img
                src="<?php echo esc_url($google_play_image['url']); ?>"
                alt="<?php echo esc_attr($google_play_image['alt']); ?>">
            </a>
          <?php endif; ?>

          <?php if ($app_store_image) : ?>
            <a href="<?php echo esc_url($app_store_link ?: '#'); ?>" class="store-badge" target="_blank" rel="noopener">
              <img
                src="<?php echo esc_url($app_store_image['url']); ?>"
                alt="<?php echo esc_attr($app_store_image['alt']); ?>">
            </a>
          <?php endif; ?>

        </div>


       

      </div>

    </div>

    <!-- ========================= -->
    <!-- Bottom Footer -->
    <!-- ========================= -->

    <div class="foot-bottom">

      <span>

        <?php echo esc_html($copyright); ?>

      </span>

      <div style="display:flex;gap:20px;">

        <?php if ($privacy): ?>

          <a href="<?php echo esc_url($privacy['url']); ?>">

            <?php echo esc_html($privacy['title']); ?>

          </a>

        <?php endif; ?>


        <?php if ($terms): ?>

          <a href="<?php echo esc_url($terms['url']); ?>">

            <?php echo esc_html($terms['title']); ?>

          </a>

        <?php endif; ?>

      </div>

      <div class="social">

        <?php if ($socials): ?>

          <?php foreach ($socials as $social): ?>

            <a href="<?php echo esc_url($social['link']); ?>">

              <img
                src="<?php echo esc_url($social['icon']['url']); ?>"
                alt="">

            </a>

          <?php endforeach; ?>

        <?php endif; ?>

      </div>

    </div>

  </div>

</footer>

<?php wp_footer(); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>
<script>
  Fancybox.bind('[data-fancybox="timeline-gallery"]', {
    animated: true,
    showClass: "fancybox-zoomIn",
    hideClass: "fancybox-zoomOut",
    dragToClose: true,
    Toolbar: {
      display: [
        "close"
      ]
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollToPlugin.min.js"></script>

</html>