<?php

$badge   = get_field('badge');
$heading = get_field('heading');
$items   = get_field('timeline');



if (empty($items)) {
    return;
}
?>

<section class="optA">

    <div class="wrap">

        <div class="section-head">

            <?php if ($badge) : ?>
                <span class="badge" style="background:var(--lime); color:var(--charcoal);">
                    <?php echo esc_html($badge); ?>
                </span>
            <?php endif; ?>

            <?php if ($heading) : ?>
                <h2><?php echo nl2br(esc_html($heading)); ?></h2>
            <?php endif; ?>

        </div>

        

        <div class="stage-path" id="pathA">

            <?php foreach ($items as $index => $item) :

                $leftCard = ($index % 2 === 0);

                $number = sprintf('%02d', $index + 1);

                $image  = $item['image'];
                $button = $item['button_link'];

            ?>

                <div class="stage-row">

                    <?php if ($leftCard) : ?>

                        <div class="stage-card">

                            <?php if ($item['stage_badge']) : ?>
                                <div class="stage-tag">
                                    <?php echo esc_html($item['stage_badge']); ?>
                                </div>
                            <?php endif; ?>

                            <div class="stage-mobile-head">
                                <h3><?php echo esc_html($item['title']); ?></h3>
                                <button class="stage-toggle" type="button">
                                 <span></span>
                                </button>

                            </div>
                            <div class="stage-content">
                                <dl>
    
                                    <div class="row">
                                        <dt>Win</dt>
                                        <dd><?php echo esc_html($item['win']); ?></dd>
                                    </div>
    
                                    <div class="row">
                                        <dt>Practice</dt>
                                        <dd><?php echo esc_html($item['feature']); ?></dd>
                                    </div>
    
                                    <div class="row">
                                        <dt>Tools</dt>
                                        <dd><?php echo esc_html($item['tools']); ?></dd>
                                    </div>
    
                                </dl>
    
                                <?php if ($button) : ?>
    
                                    <a
                                        href="<?php echo esc_url($button['url']); ?>"
                                        target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
                                        class="btn btn-ghost btn-sm">
    
                                        <?php echo esc_html($item['button_text']); ?>
    
                                    </a>
    
                                <?php endif; ?>

                            </div>



                        </div>

                        <div class="node-col">
                            <div class="node"><?php echo $number; ?></div>
                        </div>

                        <div class="shot">

                            <?php if ($image) : ?>

                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>">

                            <?php endif; ?>

                        </div>

                    <?php else : ?>

                        <div class="shot">

                            <?php if ($image) : ?>

                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>">

                            <?php endif; ?>

                        </div>

                        <div class="node-col">
                            <div class="node"><?php echo $number; ?></div>
                        </div>

                        <div class="stage-card">

                            <?php if ($item['stage_badge']) : ?>
                                <div class="stage-tag">
                                    <?php echo esc_html($item['stage_badge']); ?>
                                </div>
                            <?php endif; ?>

                            <div class="stage-mobile-head">
                                        <h3><?php echo esc_html($item['title']); ?></h3>
                                        <button class="stage-toggle" type="button">
                                     <span></span>
                                    </button>

                            </div>

                            <div class="stage-content">
                                <dl>
    
                                    <div class="row">
                                        <dt>Win</dt>
                                        <dd><?php echo esc_html($item['win']); ?></dd>
                                    </div>
    
                                    <div class="row">
                                        <dt>Practice</dt>
                                        <dd><?php echo esc_html($item['feature']); ?></dd>
                                    </div>
    
                                    <div class="row">
                                        <dt>Tools</dt>
                                        <dd><?php echo esc_html($item['tools']); ?></dd>
                                    </div>
    
                                </dl>
    
                                <?php if ($button) : ?>
    
                                    <a
                                        href="<?php echo esc_url($button['url']); ?>"
                                        target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
                                        class="btn btn-ghost btn-sm">
    
                                        <?php echo esc_html($item['button_text']); ?>
    
                                    </a>
    
                                <?php endif; ?>

                            </div>



                        </div>

                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<script>
  document.addEventListener('DOMContentLoaded', function() {

    const animatedItems = document.querySelectorAll(
      '.optA .stage-card, .optA .shot, .optA .node'
    );

    if (!animatedItems.length) return;

    const observer = new IntersectionObserver(
      function(entries, observer) {

        entries.forEach(function(entry) {

          if (entry.isIntersecting) {

            entry.target.classList.add('is-visible');

            // Animate only once
            observer.unobserve(entry.target);
          }

        });

      }, {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
      }
    );

    animatedItems.forEach(function(item) {
      observer.observe(item);
    });

  });
</script>