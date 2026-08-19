<?php

if (!defined('ABSPATH')) {
    exit;
}

$fields = $args['fields'] ?? [];

$heading      = $fields['heading'] ?? '';
$team_members = $fields['team_members'] ?? [];

?>

<section class="wb-team">

    <div class="wrap">

        <!-- Section Heading -->
        <?php if ($heading) : ?>

            <div class="section-head section-head--center">

                <h2>
                    <?php echo nl2br(esc_html($heading)); ?>
                </h2>

            </div>

        <?php endif; ?>


        <!-- Team Grid -->
        <?php if (!empty($team_members)) : ?>

            <div class="wb-team__grid">

                <?php foreach ($team_members as $member) : ?>

                    <?php

                    $image       = $member['image'] ?? [];
                    $name        = $member['name'] ?? '';
                    $role        = $member['role'] ?? '';
                    $department  = $member['department'] ?? '';
                    $description = $member['description'] ?? '';
                    $linkedin    = $member['linkedin'] ?? [];

                    ?>

                    <article class="wb-team-card">

                        <!-- Member Image -->
                        <?php if (!empty($image['url'])) : ?>

                            <img
                                src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt'] ?: $name); ?>"
                                class="wb-team-card__image"
                            >

                        <?php endif; ?>


                        <div class="wb-team-card__overlay">

                            <!-- Always Visible -->
                            <div class="wb-team-card__primary">

                                <?php if ($name) : ?>

                                    <h3>
                                        <?php echo esc_html($name); ?>
                                    </h3>

                                <?php endif; ?>


                                <?php if ($role) : ?>

                                    <p class="wb-team-card__role">
                                        <?php echo esc_html($role); ?>
                                    </p>

                                <?php endif; ?>

                            </div>


                            <!-- Reveal on Hover -->
                            <div class="wb-team-card__extra">

                                <?php if ($department || $description || !empty($linkedin['url'])) : ?>

                                    <div class="wb-team-card__line"></div>

                                <?php endif; ?>


                                <?php if ($department) : ?>

                                    <p class="wb-team-card__team">
                                        <?php echo esc_html($department); ?>
                                    </p>

                                <?php endif; ?>


                                <?php if ($description) : ?>

                                    <p class="wb-team-card__bio">
                                        <?php echo nl2br(esc_html($description)); ?>
                                    </p>

                                <?php endif; ?>


                                <?php if (!empty($linkedin['url'])) : ?>

                                    <a
                                        href="<?php echo esc_url($linkedin['url']); ?>"
                                        class="wb-team-card__linkedin"
                                        target="<?php echo esc_attr($linkedin['target'] ?: '_self'); ?>"
                                        aria-label="<?php echo esc_attr('View ' . $name . ' on LinkedIn'); ?>"
                                    >

                                        <span>
                                            <?php echo esc_html($linkedin['title'] ?: 'LinkedIn'); ?>
                                        </span>

                                        <svg
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                        >
                                            <path d="M5 19V9"></path>
                                            <path d="M5 5V5.01"></path>
                                            <path d="M10 19V13"></path>
                                            <path d="M10 13C10 10.8 11.8 9 14 9C16.2 9 18 10.8 18 13V19"></path>
                                        </svg>

                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>