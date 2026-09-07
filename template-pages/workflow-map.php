<?php

/**
 * ------------------------------------------------------------------
 * WORKFLOW MAP DATA
 * ------------------------------------------------------------------
 */

$workflow_map = [

    [
        'id' => 'lead-details',
        'label' => 'Lead details',
        'title' => 'Keep the lead facts in one place',
        'description' => 'See the contact, address, assignee, stage, budget, expected close date, and labels without piecing the opportunity together from separate records.',
        'icon' => 'menu',
        'dot_top' => '13.2%',
        'dot_left' => '17%',

        'card_top' => '16%',
        'card_left' => '8%',
    ],

    [
        'id' => 'recent-notes',
        'label' => 'Recent notes',
        'title' => 'Keep every update attached',
        'description' => 'Add call summaries, internal notes, and important context against the lead, so the next person can pick up the full story.',
        'icon' => 'message',
        'dot_top' => '13.2%',
        'dot_left' => '49%',

        'card_top' => '16%',
        'card_left' => '40%',
    ],

    [
        'id' => 'checklists',
        'label' => 'Checklists',
        'title' => 'Qualify the opportunity properly',
        'description' => 'Use repeatable checklists to confirm the information your team needs before the lead moves into estimating.',
        'icon' => 'check',
        'dot_top' => '39%',
        'dot_left' => '55%',

        'card_top' => '42%',
        'card_left' => '46%',
    ],

    [
        'id' => 'tasks',
        'label' => 'Tasks',
        'title' => 'Make the next action visible',
        'description' => 'Create follow-up tasks, assign responsibility, and set dates to prevent the opportunity from stalling between conversations.',
        'icon' => 'clipboard',
        'dot_top' => '64%',
        'dot_left' => '47%',

        'card_top' => '67%',
        'card_left' => '38%',
    ],

    [
        'id' => 'estimation',
        'label' => 'Estimation',
        'title' => 'Move qualified work into pricing',
        'description' => 'Link the lead to an existing estimate or create a new one directly from the lead once the opportunity is ready to price.',
        'icon' => 'calculator',
        'dot_top' => '65.2%',
        'dot_left' => '18%',

        'card_top' => '68%',
        'card_left' => '9%',
    ],

    [
        'id' => 'documents',
        'label' => 'Documents',
        'title' => 'Keep early files with the lead',
        'description' => 'Store plans, photos, briefs, and supporting files against the opportunity, so the team has the right information before pricing begins.',
        'icon' => 'file',
        'dot_top' => '41%',
        'dot_left' => '8%',

        'card_top' => '29%',
        'card_left' => '10%',
    ],

];

?>

<section class="workflow-map new-work-section">

    <div class="wrap">

        <div class="section-head new-work-header">

            <h2>
                Everything your team needs is <Span style="color: var(--lime);">connected</Span> in one workflow.
            </h2>
        </div>


        <div class="hs-grid">

            <!-- =======================================================
            LEFT IMAGE
            ======================================================== -->

            <div class="hs-visual">


                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project-overview.png" alt="Leads">

                <?php foreach ($workflow_map as $index => $item) : ?>

                    <button
                        class="hs-dot <?php echo $index == 0 ? 'active' : ''; ?>"
                        data-id="<?php echo esc_attr($item['id']); ?>"
                        style="top:<?php echo esc_attr($item['dot_top']); ?>; left:<?php echo esc_attr($item['dot_left']); ?>;">
                    </button>

                <?php endforeach; ?>


                <?php foreach ($workflow_map as $index => $item) : ?>

                    <div
                        class="hs-card <?php echo $index == 0 ? 'show' : ''; ?>"
                        data-id="<?php echo esc_attr($item['id']); ?>"
                        style="top:<?php echo esc_attr($item['card_top']); ?>; left:<?php echo esc_attr($item['card_left']); ?>;">

                        <span class="lbl">
                            <?php echo esc_html($item['label']); ?>
                        </span>

                        <h4>
                            <?php echo esc_html($item['title']); ?>
                        </h4>

                        <p>
                            <?php echo esc_html($item['description']); ?>
                        </p>

                    </div>

                <?php endforeach; ?>

            </div>


        </div>

          <div class="mobile-workflow">

           <?php foreach ($workflow_map as $item): ?>

               <div class="mobile-card">

                   <img
                       src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project-overview.png"
                       alt="">

                   <div class="mobile-card-content">

                       <span>
                           <?php echo esc_html($item['label']); ?>
                       </span>

                       <h3>
                           <?php echo esc_html($item['title']); ?>
                       </h3>

                       <p>
                           <?php echo esc_html($item['description']); ?>
                       </p>

                   </div>

               </div>

           <?php endforeach; ?>

       </div>


       <!-- CTA -->
       <div class="comparison-cta">

           <a href="#" class="btn btn-primary">
               Start a free trial
           </a>

           <a href="#" class="btn btn-dark">
               Book a free demo
           </a>

       </div>

   </div>

       

    </div>

</section>