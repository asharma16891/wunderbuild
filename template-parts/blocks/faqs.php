<?php

$fields = $args['fields'] ?? [];

$heading     = $fields['heading'] ?? '';
$description = $fields['description'] ?? '';

$faqs        = $fields['faqs'] ?? [];


?>

<section class="faq-section">

    <div class="wrap">

        <!-- FAQ Header -->
        <div class="faq-head">



            <?php if (!empty($heading)) : ?>
                <h2><?php echo nl2br(esc_html($heading)); ?></h2>
            <?php endif; ?>

            <!-- <?php if (!empty($description)) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?> -->

        </div>

        <!-- FAQ Accordion -->
        <?php if (!empty($faqs)) : ?>

            <div class="faq-list">

                <?php foreach ($faqs as $faq) :

                    $active = !empty($faq['default_open']) ? 'active' : '';

                ?>

                    <div class="faq-item <?php echo esc_attr($active); ?>">

                        <button class="faq-question" type="button">

                            <h6>
                                <?php echo esc_html($faq['question'] ?? ''); ?>
                            </h6>

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



    </div>

</section>