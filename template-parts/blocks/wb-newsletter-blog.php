<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading         = $fields['heading'] ?? '';
$description     = $fields['description'] ?? '';
$supporting_text = $fields['supporting_text'] ?? '';

?>

<section class="wb-blog-newsletter">

    <div class="wrap">

        <div class="wb-blog-newsletter__inner">

            <!-- LEFT CONTENT -->

            <div>

                <?php if ( ! empty( $heading ) ) : ?>

                    <?php
                    /*
                     * Allows:
                     * Useful updates,
                     * without the noise.
                     *
                     * First line = normal
                     * Second line = inside span
                     */

                    $heading_lines = preg_split(
                        '/\r\n|\r|\n/',
                        $heading
                    );

                    $first_line  = $heading_lines[0] ?? '';
                    $second_line = $heading_lines[1] ?? '';
                    ?>

                    <h2>

                        <?php echo esc_html( $first_line ); ?>

                        <?php if ( ! empty( $second_line ) ) : ?>

                            <br>

                            <span>
                                <?php echo esc_html( $second_line ); ?>
                            </span>

                        <?php endif; ?>

                    </h2>

                <?php endif; ?>


                <?php if ( ! empty( $description ) ) : ?>

                    <p>
                        <?php echo esc_html( $description ); ?>
                    </p>

                <?php endif; ?>

            </div>


            <!-- RIGHT CONTENT -->

            <div>

                <div class="wb-blog-newsletter__form">

    <?php echo do_shortcode('[contact-form-7 id="59eaeef" title="Contact form 1"]'); ?>

</div>


                <?php if ( ! empty( $supporting_text ) ) : ?>

                    <p class="wb-blog-newsletter__p">

                        <?php echo esc_html( $supporting_text ); ?>

                    </p>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>