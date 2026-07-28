<?php

/**
 * Template Name: New Work
 */

get_header();
?>

        <?php
        $without_items = [

            'Leads sit in one place, and estimates are built somewhere else.',

            'Supplier quotes, specifications, and documents get chased through email.',

            'The site waits for the latest task, file, or decision.',

            'Client decisions get buried in calls, messages, and memory.',

            'Costs change after the work has already been done.'

        ];

        $with_items = [

            'New work can move into pricing and job setup with less manual rebuilding.',

            'Quote requests, specifications, and documents stay closer to the job.',

            'Schedules, tasks, documents, checklists, and site diaries stay visible.',

            'Selections, approvals, communication, and variations stay attached.',

            'Budgets, expenses, actuals, claims, and invoices stay in closer sync with the live job.'

        ];

        $comparison = [

            [
                'variant' => 'without',
                'title'   => 'Without Wunderbuild',
                'icon'    => 'triangle-alert.svg',
                'items'   => $without_items,
            ],

            [
                'variant' => 'with',
                'title'   => 'With Wunderbuild',
                'icon'    => 'sparkles.svg',
                'items'   => $with_items,
            ]

        ];

        ?>


<section class="hero bg-field">
    <div class="blueprint-lines"></div>
    <div class="wrap hero-grid">
        <div>
            <!-- <div class="eyebrow"><span class="dot"></span>Built for residential builders in AU &amp; NZ</div> -->
            <h1>Keep leads visible before they go cold.</h1>
            <p class="lead">Wunderbuild helps builders keep lead stage, contact details, address, budget, assignee, expected close date, labels, notes, and related job information in one clear place.</p>
            <div class="hero-cta">
                <a href="#" class="btn btn-primary">Start a free trial</a>
                <a href="#" class="btn btn-ghost">Book a free demo</a>
            </div>
            <!-- <div class="hero-note">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
            stroke-linecap="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
          No credit card needed · Set up in a day
        </div> -->
        </div>

        <div class="hero-visual">
            <div class="dash-card dash-main">
                <div class="dash-topbar">
                    <span class="dash-title">7007 Hodgen Road</span>
                    <div class="dash-dots"><span></span><span></span><span></span></div>
                </div>
                <div class="dash-tabs">
                    <span class="active">Overview</span><span>Schedule</span><span>Budget</span><span>Claims</span>
                </div>
                <div class="dash-rows">
                    <div class="dash-row"><span>Site established</span><span class="bar"></span><span
                            class="dash-chip">Done</span></div>
                    <div class="dash-row"><span>Frame &amp; roof</span><span class="bar b2"></span><span
                            class="dash-chip">60%</span></div>
                    <div class="dash-row"><span>Fixing stage</span><span class="bar b3"></span><span
                            class="dash-chip">40%</span></div>
                    <div class="dash-row"><span>Progress claim 3</span><span class="bar" style="width:80%"></span><span
                            class="dash-chip">Sent</span></div>
                </div>
            </div>
            <div class="dash-card float-card fc-1">
                <span class="ic"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg></span>
                Budget approved
            </div>
            <div class="dash-card float-card fc-2">
                <span class="ic"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.2" stroke-linecap="round">
                        <path d="M12 2v20M2 12h20" />
                    </svg></span>
                Variation added
            </div>
            <div class="dash-card float-card fc-3">
                <span class="ic"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.2" stroke-linecap="round">
                        <rect x="3" y="4" width="18" height="16" rx="2" />
                        <path d="M8 2v4M16 2v4M3 10h18" />
                    </svg></span>
                Site diary updated
            </div>
        </div>
    </div>
</section>

<!-- New Work / Problem Section -->
<section class="new-work">
    <div class="container">

        <div class="section-heading">
            <span class="eyebrow">New Work</span>
            <h2>Work gets messy when the details live everywhere.</h2>
            <p>
                Keep every enquiry organised from the first contact to the next step.
            </p>
        </div>

        <div class="feature-grid wrap">

            <article class="feature-card">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=700&auto=format&fit=crop&q=80" alt="Lead owner">

                <div class="feature-content">
                    <h3>No clear owner</h3>
                    <p>
                        Assign every enquiry to the right person so nothing gets missed.
                    </p>
                </div>
            </article>

            <article class="feature-card">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=700&auto=format&fit=crop&q=80" alt="Project stage">

                <div class="feature-content">
                    <h3>No clear stage</h3>
                    <p>
                        See exactly where every lead sits in your sales pipeline.
                    </p>
                </div>
            </article>

            <article class="feature-card">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=700&auto=format&fit=crop&q=80" alt="Next step">

                <div class="feature-content">
                    <h3>No clear next step</h3>
                    <p>
                        Keep follow-ups, notes and client details together.
                    </p>
                </div>
            </article>

        </div>

    </div>
</section>

<!-- lead feature layout -->
<?php
get_template_part(
    'template-pages/workflow-map'
);
?>



<!-- =========================================================
     COMPARISON SECTION
========================================================= -->

<section class="comparison-section">

    <div class="wrap">

        <!-- Section Heading -->
        <div class="comparison-head">

            <span class="badge comparison-badge">
                Why Wunderbuild
            </span>

            <h2>
                Less time chasing.
                <br>
                More time moving the job forward.
            </h2>

            <p>
                Most admin work doesn't look like one big problem.
                It shows up as small repeats, missed details, and
                extra checks across the day.
            </p>

        </div>


        <!-- Comparison Cards -->

       <div class="comparison-wrapper">

    <?php foreach ($comparison as $card): ?>

        <?php
        get_template_part(
            'components/comparison-card',
            null,
            $card
        );
        ?>

    <?php endforeach; ?>
    </div>
  


</section>


<!-- =========================================================
     FAQ SECTION
========================================================= -->

<section class="faq-section">

    <div class="wrap">

        <!-- FAQ Header -->
        <div class="faq-head">

            <h2>
                FAQs
            </h2>
        </div>


        <!-- FAQ Accordion -->
        <div class="faq-list">


            <!-- FAQ 01 -->
            <div class="faq-item active">

                <button class="faq-question" type="button">

                    <span>
                        Do I need to use every part of Wunderbuild straight away?
                    </span>

                    <span class="faq-icon">
                        <span></span>
                        <span></span>
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        <p>
                            No. Most teams start with the parts of the job that
                            need attention first, then build from there. You
                            might start with estimating, job setup, scheduling,
                            site diaries, cost control, or Xero invoicing,
                            depending on how your business currently works.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 02 -->
            <div class="faq-item">

                <button class="faq-question" type="button">

                    <span>
                        How does Wunderbuild connect each stage of a job?
                    </span>

                    <span class="faq-icon">
                        <span></span>
                        <span></span>
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        <p>
                            Wunderbuild keeps the records for each stage of
                            the job closer together, so leads, estimates,
                            site work, client decisions, costs, claims,
                            and financial records are easier to follow as
                            the work progresses.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 03 -->
            <div class="faq-item">

                <button class="faq-question" type="button">

                    <span>
                        Can Wunderbuild help if we're moving from spreadsheets
                        or another system?
                    </span>

                    <span class="faq-icon">
                        <span></span>
                        <span></span>
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        <p>
                            Yes. Wunderbuild is built to help builders bring
                            more of the job into one place. The exact setup
                            depends on how your jobs, documents, costs, team,
                            and current tools are organised.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 04 -->
            <div class="faq-item">

                <button class="faq-question" type="button">

                    <span>
                        Does Wunderbuild connect the office and the site?
                    </span>

                    <span class="faq-icon">
                        <span></span>
                        <span></span>
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        <p>
                            Yes. Wunderbuild brings office work, site work,
                            documents, communication, tasks, site records,
                            costs, claims, and invoices into a single job flow.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 05 -->
            <div class="faq-item">

                <button class="faq-question" type="button">

                    <span>
                        Does Wunderbuild work with Xero?
                    </span>

                    <span class="faq-icon">
                        <span></span>
                        <span></span>
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        <p>
                            Wunderbuild can surface supplier invoices imported
                            from Xero with their related job context. The exact
                            integration setup and supported accounting workflow
                            should be confirmed during onboarding.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 06 -->
            <div class="faq-item">

                <button class="faq-question" type="button">

                    <span>
                        Where should our team start?
                    </span>

                    <span class="faq-icon">
                        <span></span>
                        <span></span>
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        <p>
                            Start with the part of the job that involves the
                            most repetitive work, the most missing information,
                            or the most chasing. Your team can begin there,
                            then bring more of the workflow into Wunderbuild
                            as the process settles in.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- FAQ CTA -->
        <div class="faq-cta">

            <p>
                Still have questions?
            </p>

            <a href="#" class="btn btn-primary">
                Talk to our team
            </a>

        </div>

    </div>

</section>

<!-- TESTIMONIALS -->
<section class="testimonials bg-field">
    <div class="wrap">
        <div class="section-head center" style="margin-left:auto;margin-right:auto;">
            <span class="badge badge-coral">Testimonials</span>
            <h2>Real builders. Real jobs. Real feedback.</h2>
            <p>Hear from the people who've discovered how Wunderbuild solved their biggest challenges.</p>
        </div>
        <div class="t-slider-wrap">
            <div class="t-track-viewport">
                <div class="t-track" id="tTrack">

                    <div class="t-slide">
                        <div class="t-card">
                            <div class="t-stars">
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                            </div>
                            <p class="t-quote">We stopped chasing progress claims across three different tools. Everything's attached to the job now, and it shows the moment we open it.</p>
                            <div class="t-person">
                                <div class="t-avatar"></div>
                                <div>
                                    <div class="name">Dale Whitfield</div>
                                    <div class="meta">Whitfield Residential · Brisbane, QLD</div>
                                </div>
                                <span class="t-badge">★ Verified Google review</span>
                            </div>
                        </div>
                    </div>



                    <div class="t-slide">
                        <div class="t-card">
                            <div class="t-stars">
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                            </div>
                            <p class="t-quote">Onboarding used our actual job files, not a demo account. My site supervisor was updating diaries by the end of week one.</p>
                            <div class="t-person">
                                <div class="t-avatar"></div>
                                <div>
                                    <div class="name">Priya Nair</div>
                                    <div class="meta">Nair Built Homes · Hamilton, NZ</div>
                                </div>
                                <span class="t-badge">$1.2M project · 8 months</span>
                            </div>
                        </div>
                    </div>

                    <div class="t-slide">
                        <div class="t-card">
                            <div class="t-stars">
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                                <svg viewBox="0 0 24 24">
                                    <polygon points="12 2 15 9 22 9.5 17 14.5 18.5 22 12 18 5.5 22 7 14.5 2 9.5 9 9" />
                                </svg>
                            </div>
                            <p class="t-quote">Variations used to get lost in text messages. Now they sit against the job budget where the office can actually see them.</p>
                            <div class="t-person">
                                <div class="t-avatar"></div>
                                <div>
                                    <div class="name">Marcus Ferro</div>
                                    <div class="meta">Ferro Construction · Geelong, VIC</div>
                                </div>
                                <span class="t-badge">$860K project · 6 months</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="t-controls">
                <button class="t-arrow" id="tPrev" aria-label="Previous testimonial">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6" />
                    </svg>
                </button>
                <div class="t-dots" id="tDots"></div>
                <button class="t-arrow" id="tNext" aria-label="Next testimonial">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6" />
                    </svg>
                </button>
            </div>
        </div>


    </div>
</section>

<!-- FINAL CTA -->
<section class="final-cta">
    <div class="final-glow"></div>
    <div class="wrap" style="position:relative; z-index:1;">
        <h2>Ready to stop carrying the whole job in your head?</h2>
        <p>Start with the job in front of you. Wunderbuild helps keep the work, the people, and the money connected from
            there.</p>
        <div class="actions">
            <a href="#" class="btn btn-primary">Start a free trial</a>
            <a href="#" class="btn btn-dark">Book a free demo</a>
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

<?php
get_footer();
