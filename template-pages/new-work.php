<?php

/**
 * Template Name: New Work
 */

get_header();
?>
<?php

$lead_features = [

    [
        'id'          => 'lead-details',
        'label'       => 'Lead details',
        'title'       => 'Keep the lead facts in one place',
        'description' => 'See the contact, address, assignee, stage, budget, expected close date, and labels without piecing the opportunity together from separate records.',
        'image'       => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1400&q=80',
        'alt'         => 'Team discussing project details'
    ],

    [
        'id'          => 'recent-notes',
        'label'       => 'Recent notes',
        'title'       => 'Keep every update attached',
        'description' => 'Add call summaries, internal notes, and important context against the lead, so the next person can pick up the full story.',
        'image'       => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1400&q=80',
        'alt'         => 'Business team collaborating'
    ],

    [
        'id'          => 'checklists',
        'label'       => 'Quality control',
        'title'       => 'Qualify the opportunity properly',
        'description' => 'Use repeatable checklists to confirm the information your team needs before the lead moves into estimating.',
        'image'       => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1400&q=80',
        'alt'         => 'Team working on project planning'
    ],

    [
        'id'          => 'tasks',
        'label'       => 'Task management',
        'title'       => 'Make the next action visible',
        'description' => 'Create follow-up tasks, assign responsibility, and set dates to prevent the opportunity from stalling between conversations.',
        'image'       => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1400&q=80',
        'alt'         => 'Modern office workspace'
    ],

    [
        'id'          => 'estimation',
        'label'         => 'Estimating',
        'title'         => 'Move qualified work into pricing',
        'description'   => 'Link the lead to an existing estimate or create a new one directly from the lead once the opportunity is ready to price.',
        'image'         => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1400&q=80',
        'alt'           => 'Business documents and calculator'
    ],

    [
        'id'          => 'documents',
        'label'       => 'File management',
        'title'       => 'Keep early files with the lead',
        'description' => 'Store plans, photos, briefs, and supporting files against the opportunity, so the team has the right information before pricing begins.',
        'image'       => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1400&q=80',
        'alt'         => 'People working in an office'
    ],

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
<section class="new-work-section">
    <div class="wrap">

        <div class="new-work-header">
            <span class="new-work-eyebrow">
                <span class="new-work-eyebrow-dot"></span>
                New work
            </span>

            <h2>Work gets messy when the details live everywhere.</h2>

            <p>
                New enquiries move quickly. When information is scattered across
                inboxes, spreadsheets, and notes, it becomes harder to know what
                needs attention next.
            </p>
        </div>


        <div class="new-work-grid">

            <!-- Card 01 -->
            <article class="new-work-card">
                <div class="new-work-card-top">
                    <span class="new-work-number">01</span>

                    <span class="new-work-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 20V10" />
                            <path d="M8 14l4-4 4 4" />
                            <path d="M5 4h14" />
                            <path d="M5 4v16" />
                        </svg>
                    </span>
                </div>

                <div class="new-work-card-content">
                    <h3>No clear owner</h3>

                    <p>
                        A good enquiry comes in, but no one is sure who's following up
                        on it.
                    </p>
                </div>

                <div class="new-work-card-line"></div>
            </article>


            <!-- Card 02 -->
            <article class="new-work-card">
                <div class="new-work-card-top">
                    <span class="new-work-number">02</span>

                    <span class="new-work-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="8" />
                            <path d="M12 8v4l3 2" />
                        </svg>
                    </span>
                </div>

                <div class="new-work-card-content">
                    <h3>No clear stage</h3>

                    <p>
                        The team can't see whether the lead is new, qualified, waiting
                        on information, in estimation, or ready to move.
                    </p>
                </div>

                <div class="new-work-card-line"></div>
            </article>


            <!-- Card 03 -->
            <article class="new-work-card">
                <div class="new-work-card-top">
                    <span class="new-work-number">03</span>

                    <span class="new-work-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M4 6h16" />
                            <path d="M4 12h10" />
                            <path d="M4 18h7" />
                            <path d="M17 15l3 3-3 3" />
                        </svg>
                    </span>
                </div>

                <div class="new-work-card-content">
                    <h3>No clear next step</h3>

                    <p>
                        The budget, address, client details, close date, and follow-up
                        notes are scattered, delaying the next action.
                    </p>
                </div>

                <div class="new-work-card-line"></div>
            </article>

        </div>


        <!-- Bottom Message -->
        <div class="new-work-bottom">
            <div class="new-work-bottom-line"></div>

            <p>
                When the details are connected, your team knows what to do next.
            </p>

            <span class="new-work-arrow">
                ↓
            </span>
        </div>

    </div>
</section>

<!-- lead feature layout -->
<section class="new-work-section lead-feature">

    <div class="new-work-header">


        <h2>Open the lead and see what needs to happen next.</h2>

        <p>
            Keep the contact, address, assignee, stage, budget, expected close date, notes, checklists, tasks, documents, and estimate connection together, so every follow-up starts with the full picture.
        </p>
    </div>


    <div class="lead-feature-layout wrap">

        <!-- LEFT SIDEBAR -->
        <div class="lead-feature-sidebar">

            <div class="lead-feature-sidebar-inner">

                <?php foreach ($lead_features as $index => $feature) : ?>

                    <button
                        type="button"
                        class="lead-feature-tab <?php echo $index === 0 ? 'active' : ''; ?>"
                        data-tab="<?php echo esc_attr($feature['id']); ?>">

                        <span class="feature-tab-content">

                            <span class="feature-tab-label">
                                <?php echo esc_html($feature['label']); ?>
                            </span>

                            <strong>
                                <?php echo esc_html($feature['title']); ?>
                            </strong>

                            <small>
                                <?php echo esc_html($feature['description']); ?>
                            </small>

                        </span>

                        <span class="feature-arrow" aria-hidden="true">
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true">
                                <path
                                    d="M5 12h13"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round" />

                                <path
                                    d="M13 6l6 6-6 6"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>

                    </button>

                <?php endforeach; ?>

            </div>

        </div>


        <!-- RIGHT IMAGE PREVIEW -->
        <div
            class="lead-feature-preview"
            id="featurePreview">

            <?php foreach ($lead_features as $index => $feature) : ?>

                <div
                    class="feature-content-item <?php echo $index === 0 ? 'active' : ''; ?>"
                    data-content="<?php echo esc_attr($feature['id']); ?>">

                    <div class="feature-image-wrapper">

                        <img
                            src="<?php echo esc_url($feature['image']); ?>"
                            alt="<?php echo esc_attr($feature['alt']); ?>"
                            loading="lazy">

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     COMPARISON SECTION
========================================================= -->

<section class="comparison-section">

    <div class="wrap">

        <!-- Section Heading -->
        <div class="comparison-head">


            <h2>
                What this replaces
            </h2>

            

        </div>


        <!-- Comparison Cards -->
        <div class="comparison-grid">

            <!-- Without Wunderbuild -->
            <div class="comparison-card without-card">

                <div class="comparison-card-head">
                    <span class="comparison-icon">
                        −
                    </span>

                    <h3>
                        Without Wunderbuild
                    </h3>
                </div>


                <div class="comparison-list">

                    <div class="comparison-item">
                        <span class="item-number">01</span>

                        <p>
                            Leads sit in one place, and estimates are built
                            somewhere else.
                        </p>
                    </div>


                    <div class="comparison-item">
                        <span class="item-number">02</span>

                        <p>
                            Supplier quotes, specifications, and documents
                            get chased through email.
                        </p>
                    </div>


                    <div class="comparison-item">
                        <span class="item-number">03</span>

                        <p>
                            The site waits for the latest task, file,
                            or decision.
                        </p>
                    </div>


                    <div class="comparison-item">
                        <span class="item-number">04</span>

                        <p>
                            Client decisions get buried in calls,
                            messages, and memory.
                        </p>
                    </div>


                    <div class="comparison-item">
                        <span class="item-number">05</span>

                        <p>
                            Costs change after the work has already been done.
                        </p>
                    </div>

                </div>

            </div>


            <!-- With Wunderbuild -->
            <div class="comparison-card with-card">

                <div class="comparison-card-head">

                    <span class="comparison-icon">
                        ✓
                    </span>

                    <h3>
                        With Wunderbuild
                    </h3>

                </div>


                <div class="comparison-list">

                    <div class="comparison-item">
                        <span class="item-number">01</span>

                        <p>
                            New work can move into pricing and job setup
                            with less manual rebuilding.
                        </p>
                    </div>


                    <div class="comparison-item">
                        <span class="item-number">02</span>

                        <p>
                            Quote requests, specifications, and documents
                            stay closer to the job.
                        </p>
                    </div>


                    <div class="comparison-item">
                        <span class="item-number">03</span>

                        <p>
                            Schedules, tasks, documents, checklists,
                            and site diaries stay visible.
                        </p>
                    </div>


                    <div class="comparison-item">
                        <span class="item-number">04</span>

                        <p>
                            Selections, approvals, communication,
                            and variations stay attached.
                        </p>
                    </div>


                    <div class="comparison-item">
                        <span class="item-number">05</span>

                        <p>
                            Budgets, expenses, actuals, claims, and invoices
                            stay in closer sync with the live job.
                        </p>
                    </div>

                </div>

            </div>

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

        <div style="text-align:center; margin-top:44px;">
            <a href="#" class="explore-link" style="justify-content:center;">Read more reviews <svg viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <polyline points="12 5 19 12 12 19" />
                </svg></a>
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
