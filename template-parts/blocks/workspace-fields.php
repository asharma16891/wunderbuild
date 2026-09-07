<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading         = $fields['heading'] ?? '';
$content_label   = $fields['content_label'] ?? '';
$content_heading = $fields['content_heading'] ?? '';
$items           = $fields['items'] ?? [];

?>

<section class="workspace-fields workspace-fields--editor section-global">

    <div class="wrap">

        <!-- Section Heading -->
        <?php if (!empty($heading)) : ?>

            <div class="section-head">

                <h2>
                    <?php echo esc_html($heading); ?>
                </h2>

            </div>

        <?php endif; ?>


        <?php if (!empty($items) && is_array($items)) : ?>

            <div class="workspace-editor">

                <!-- Sidebar -->
                <aside class="workspace-editor__sidebar">

                    <div class="workspace-editor__brand">

                        <span class="workspace-editor__brand-dot"></span>

                        Workspace Studio

                    </div>


                    <div class="workspace-editor__nav">

                        <?php foreach ($items as $index => $item) : ?>

                            <?php

                            $number = $item['number'] ?? '';
                            $title  = $item['title'] ?? '';

                            // Create a unique ID from title
                            $target_id = 'workspace-' . sanitize_title($title);

                            ?>

                            <button
                                class="workspace-editor__nav-item <?php echo $index === 0 ? 'active' : ''; ?>"
                                type="button"
                                data-target="<?php echo esc_attr($target_id); ?>"
                            >

                                <?php if (!empty($number)) : ?>

                                    <span>
                                        <?php echo esc_html($number); ?>
                                    </span>

                                <?php endif; ?>


                                <?php if (!empty($title)) : ?>

                                    <?php echo esc_html($title); ?>

                                <?php endif; ?>

                            </button>

                        <?php endforeach; ?>

                    </div>

                </aside>


                <!-- Main Workspace -->
                <div class="workspace-editor__main">


                    <!-- Top Bar -->
                    <div class="workspace-editor__topbar">

                        <div>

                            <?php if (!empty($content_label)) : ?>

                                <span class="workspace-editor__label type-p3">

                                    <?php echo esc_html($content_label); ?>

                                </span>

                            <?php endif; ?>


                            <?php if (!empty($content_heading)) : ?>

                                <h3 class="type-h5">

                                    <?php echo esc_html($content_heading); ?>

                                </h3>

                            <?php endif; ?>

                        </div>

                    </div>


                    <!-- Workspace Content -->
                    <div class="workspace-editor__content">

                        <?php foreach ($items as $index => $item) : ?>

                            <?php

                            $number      = $item['number'] ?? '';
                            $title       = $item['title'] ?? '';
                            $description = $item['description'] ?? '';

                            $group_id = 'workspace-' . sanitize_title($title);

                            ?>

                            <div
                                class="workspace-group"
                                id="<?php echo esc_attr($group_id); ?>"
                            >

                                <div class="workspace-group__head">


                                    <!-- Number -->
                                    <?php if (!empty($number)) : ?>

                                        <span class="workspace-group__number">

                                            <?php echo esc_html($number); ?>

                                        </span>

                                    <?php endif; ?>


                                    <div>


                                        <!-- Title -->
                                        <?php if (!empty($title)) : ?>

                                            <h4 class="type-h6">

                                                <?php echo esc_html($title); ?>

                                            </h4>

                                        <?php endif; ?>


                                        <!-- Description -->
                                        <?php if (!empty($description)) : ?>

                                            <p class="common-para">

                                                <?php echo esc_html($description); ?>

                                            </p>

                                        <?php endif; ?>


                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        <?php endif; ?>

    </div>

</section>