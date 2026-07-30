<?php

$fields = $args['fields'] ?? [];

$badge       = $fields['badge'] ?? '';
$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

$faqs        = $fields['faqs'] ?? [];

$bottom_text = $fields['bottom_text'] ?? '';
$button_text = $fields['button_text'] ?? '';
$button_link = $fields['button_link'] ?? [];

?>

<section class="faq-section">

    <div class="wrap">

        <!-- FAQ Header -->
        <div class="faq-head">

            <?php if (!empty($badge)) : ?>
                <span class="badge faq-badge">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if (!empty($heading)) : ?>
                <h2><?php echo nl2br(esc_html($heading)); ?></h2>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>

        </div>

        <!-- FAQ Accordion -->
        <?php if (!empty($faqs)) : ?>

            <div class="faq-list">

                <?php foreach ($faqs as $faq) :

                    $active = !empty($faq['default_open']) ? 'active' : '';

                ?>

                    <div class="faq-item <?php echo esc_attr($active); ?>">

                        <button class="faq-question" type="button">

                            <span>
                                <?php echo esc_html($faq['question'] ?? ''); ?>
                            </span>

                            <span class="faq-icon">
                                <span></span>
                                <span></span>
                            </span>

                        </button>

                        <div class="faq-answer">

                            <div class="faq-answer-inner">

                                <p>
                                    <?php echo esc_html($faq['answer'] ?? ''); ?>
                                </p>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

        <!-- CTA -->
        <div class="faq-cta">

            <?php if (!empty($bottom_text)) : ?>

                <p>
                    <?php echo esc_html($bottom_text); ?>
                </p>

            <?php endif; ?>

            <?php if (!empty($button_link)) : ?>

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