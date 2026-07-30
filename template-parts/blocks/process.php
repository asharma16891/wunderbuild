<?php

$fields = $args['fields'] ?? [];

$badge       = $fields['process_badge'] ?? '';
$heading     = $fields['process_heading'] ?? '';
$description = $fields['process_description'] ?? '';
$steps       = $fields['process_steps'] ?? [];

?>

<section class="process">

    <div class="wrap">

        <div class="section-head">

            <?php if (!empty($badge)) : ?>
                <span class="badge badge-lime">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if (!empty($heading)) : ?>
                <h2>
                    <?php echo esc_html($heading); ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($description)) : ?>
                <p>
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>

        </div>

        <?php if (!empty($steps)) : ?>

            <div class="process-path" id="processPath">

                <div class="path-fill" id="pathFill"></div>

                <?php foreach ($steps as $index => $step) : ?>

                    <?php
                    $row_class = ($index % 2 === 0) ? 'row-left' : 'row-right';
                    $number = $index + 1;
                    ?>

                    <div class="p-row <?php echo esc_attr($row_class); ?> <?php echo ($index === 0) ? 'active' : ''; ?>">

                        <?php if ($row_class === 'row-left') : ?>

                            <div class="p-card">
                                <?php if (!empty($step['title'])) : ?>
                                    <h4><?php echo esc_html($step['title']); ?></h4>
                                <?php endif; ?>

                                <?php if (!empty($step['description'])) : ?>
                                    <p><?php echo esc_html($step['description']); ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="p-node-col">
                                <div class="p-node">
                                    <?php echo esc_html($number); ?>
                                </div>
                            </div>

                        <?php else : ?>

                            <div class="p-node-col">
                                <div class="p-node">
                                    <?php echo esc_html($number); ?>
                                </div>
                            </div>

                            <div class="p-card">
                                <?php if (!empty($step['title'])) : ?>
                                    <h4><?php echo esc_html($step['title']); ?></h4>
                                <?php endif; ?>

                                <?php if (!empty($step['description'])) : ?>
                                    <p><?php echo esc_html($step['description']); ?></p>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>