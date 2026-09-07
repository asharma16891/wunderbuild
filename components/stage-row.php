<?php

$stage = $args['stage'];
$index = $args['index'];

$reverse = ($index % 2);

?>

<div class="stage-row">

    <?php if (!$reverse) : ?>

        <div class="stage-card">

            <div class="stage-tag">
                Stage <?php echo esc_html($stage['stage']); ?>
            </div>

            <div class="stage-mobile-head">

                <h3>
                    <?php echo esc_html($stage['title']); ?>
                </h3>

                <button class="stage-toggle" type="button">
                    <span></span>
                </button>

            </div>

            <div class="stage-content">

                <dl>

                    <div class="row">
                        <dt>Win</dt>
                        <dd><?php echo esc_html($stage['win']); ?></dd>
                    </div>

                    <div class="row">
                        <dt>Practice</dt>
                        <dd><?php echo esc_html($stage['practice']); ?></dd>
                    </div>

                    <div class="row">
                        <dt>Tools</dt>
                        <dd><?php echo esc_html($stage['tools']); ?></dd>
                    </div>

                </dl>

                <button class="btn btn-ghost btn-sm">
                    <?php echo esc_html($stage['button']); ?>
                </button>

            </div>

        </div>

        <div class="node-col">
            <div class="node">
                <?php echo esc_html($stage['stage']); ?>
            </div>
        </div>

        <div class="shot">
            <img
                src="<?php echo esc_url($stage['image']); ?>"
                alt="<?php echo esc_attr($stage['alt']); ?>">
        </div>

    <?php else : ?>

        <div class="shot">
            <img
                src="<?php echo esc_url($stage['image']); ?>"
                alt="<?php echo esc_attr($stage['alt']); ?>">
        </div>

        <div class="node-col">
            <div class="node">
                <?php echo esc_html($stage['stage']); ?>
            </div>
        </div>

        <div class="stage-card">

            <div class="stage-tag">
                Stage <?php echo esc_html($stage['stage']); ?>
            </div>

            <div class="stage-mobile-head">

                <h3>
                    <?php echo esc_html($stage['title']); ?>
                </h3>

                <button class="stage-toggle" type="button">
                    <span></span>
                </button>

            </div>

            <div class="stage-content">

                <dl>

                    <div class="row">
                        <dt>Win</dt>
                        <dd><?php echo esc_html($stage['win']); ?></dd>
                    </div>

                    <div class="row">
                        <dt>Practice</dt>
                        <dd><?php echo esc_html($stage['practice']); ?></dd>
                    </div>

                    <div class="row">
                        <dt>Tools</dt>
                        <dd><?php echo esc_html($stage['tools']); ?></dd>
                    </div>

                </dl>

                <button class="btn btn-ghost btn-sm">
                    <?php echo esc_html($stage['button']); ?>
                </button>

            </div>

        </div>

    <?php endif; ?>

</div>