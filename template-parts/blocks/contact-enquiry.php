<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

?>

<section
    class="contact-enquiry section-space section-global"
    id="enquiry-form">

    <div class="wrap">

        <div class="contact-enquiry__grid">


            <!-- LEFT CONTENT -->
            <div class="contact-enquiry__intro">

                <?php if (!empty($heading)) : ?>

                    <h2>
                        <?php echo esc_html($heading); ?>
                    </h2>

                <?php endif; ?>


                <?php if (!empty($description)) : ?>

                    <p class="contact-enquiry__description type-p1">
                        <?php echo esc_html($description); ?>
                    </p>

                <?php endif; ?>


                <div class="contact-enquiry__note">

                    <div class="contact-enquiry__note-icon">
                        ✓
                    </div>

                    <div>

                        <strong class="type-p2">
                            Before you submit
                        </strong>

                        <p>
                            
                            Don't include passwords, payment-card details, or other sensitive information.  
                        </p>

                    </div>

                </div>


                <div class="contact-enquiry__meta">

                    <span>Usually responds within</span>

                    <strong>1 business day</strong>

                </div>

            </div>


            <!-- RIGHT FORM -->
            <div class="contact-enquiry__form-card">

                <div class="contact-enquiry__cf7">

                    <?php

                    // Keeping shortcode static as requested
                    echo do_shortcode(
                        '[contact-form-7 id="840cab8" title="Contact Us"]'
                    );

                    ?>

                </div>

            </div>

        </div>

    </div>

</section>