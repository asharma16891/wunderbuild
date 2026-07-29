<?php

$badge        = get_field('badge');
$heading      = get_field('heading');
$description  = get_field('description');

$faqs         = get_field('faqs');

$bottom_text  = get_field('bottom_text');
$button_text  = get_field('button_text');
$button_link  = get_field('button_link');

?>

<section class="faq-section">

    <div class="wrap">

        <!-- FAQ Header -->
        <div class="faq-head">

            <?php if ($badge) : ?>
                <span class="badge faq-badge">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if ($heading) : ?>
                <h2><?php echo nl2br(esc_html($heading)); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>

        </div>


        <!-- FAQ Accordion -->
        <?php if ($faqs) : ?>

            <div class="faq-list">

                <?php foreach ($faqs as $faq) :

                    $active = !empty($faq['default_open']) ? 'active' : '';

                ?>

                    <div class="faq-item <?php echo esc_attr($active); ?>">

                        <button class="faq-question" type="button">

                            <span>
                                <?php echo esc_html($faq['question']); ?>
                            </span>

                            <span class="faq-icon">
                                <span></span>
                                <span></span>
                            </span>

                        </button>

                        <div class="faq-answer">

                            <div class="faq-answer-inner">

                                <p>
                                    <?php echo esc_html($faq['answer']); ?>
                                </p>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>


        <!-- CTA -->
        <div class="faq-cta">

            <?php if ($bottom_text) : ?>

                <p>
                    <?php echo esc_html($bottom_text); ?>
                </p>

            <?php endif; ?>


            <?php if ($button_link) : ?>

                <a
                    href="<?php echo esc_url($button_link['url']); ?>"
                    target="<?php echo esc_attr($button_link['target'] ?: '_self'); ?>"
                    class="btn btn-primary">

                    <?php echo esc_html($button_text); ?>

                </a>

            <?php endif; ?>

        </div>

    </div>

</section>

