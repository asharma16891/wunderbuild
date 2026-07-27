<?php

$badge       = get_field('process_badge');
$heading     = get_field('process_heading');
$description = get_field('process_description');
$steps       = get_field('process_steps');

?>

<section class="process">

    <div class="wrap">

        <div class="section-head">

            <?php if ($badge) : ?>
                <span class="badge badge-lime">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if ($heading) : ?>
                <h2>
                    <?php echo esc_html($heading); ?>
                </h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p>
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>

        </div>

        <?php if ($steps) : ?>

            <div class="process-path" id="processPath">

                <div class="path-fill" id="pathFill"></div>

                <?php foreach ($steps as $index => $step) : ?>

                    <?php
                    $row_class = ($index % 2 == 0) ? 'row-left' : 'row-right';
                    $number = $index + 1;
                    ?>

                    <div class="p-row <?php echo esc_attr($row_class); ?> <?php echo ($index == 0) ? 'active' : ''; ?>">

                        <?php if ($row_class == 'row-left') : ?>

                            <div class="p-card">
                                <h4><?php echo esc_html($step['title']); ?></h4>

                                <p>
                                    <?php echo esc_html($step['description']); ?>
                                </p>
                            </div>

                            <div class="p-node-col">
                                <div class="p-node">
                                    <?php echo $number; ?>
                                </div>
                            </div>

                        <?php else : ?>

                            <div class="p-node-col">
                                <div class="p-node">
                                    <?php echo $number; ?>
                                </div>
                            </div>

                            <div class="p-card">
                                <h4><?php echo esc_html($step['title']); ?></h4>

                                <p>
                                    <?php echo esc_html($step['description']); ?>
                                </p>
                            </div>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>