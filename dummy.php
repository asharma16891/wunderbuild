<?php get_header(); ?>
<!-- HERO -->

<?php get_template_part('template-parts/blocks/hero'); ?>
<?php get_template_part('template-parts/blocks/trust'); ?>


<!-- TRUST BANNER -->
<section class="trust">
  <div class="trust-bg">
    <span class="blob blob-1"></span>
    <span class="blob blob-2"></span>
    <span class="blob blob-3"></span>
  </div>

  <div class="wrap">

    <div class="trust-grid">

      <div class="trust-card">
        <span class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M3 11.5L12 4l9 7.5" />
            <path d="M5 10.5V20h14v-9.5" />
            <path d="M9 20v-6h6v6" />
          </svg>
        </span>

        <h4>Built for residential builders</h4>

        <!-- <p>
            Designed specifically for residential construction teams to
            simplify daily workflows.
          </p> -->
      </div>

      <div class="trust-card">
        <span class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
            stroke-linejoin="round">
            <circle cx="12" cy="12" r="9" />
            <path d="M3 12h18" />
            <path d="M12 3a15 15 0 0 1 0 18" />
            <path d="M12 3a15 15 0 0 0 0 18" />
          </svg>
        </span>

        <h4>Made For Australian and New Zealand teams</h4>

        <!-- <p>
            Purpose-built for local builders with regional workflows and
            pricing.
          </p> -->
      </div>

      <div class="trust-card">
        <span class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M7 3h8l4 4v14H7z" />
            <path d="M15 3v4h4" />
            <path d="M10 12h6" />
            <path d="M10 16h6" />
          </svg>
        </span>

        <h4>From first estimate to final invoice</h4>

        <!-- <p>
            Manage everything from quoting through invoicing in one place.
          </p> -->
      </div>

      <div class="trust-card">
        <span class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M4 12a8 8 0 0 1 16 0" />
            <path d="M4 12v4a2 2 0 0 0 2 2h2v-6H6a2 2 0 0 0-2 2" />
            <path d="M20 12v4a2 2 0 0 1-2 2h-2v-6h2a2 2 0 0 1 2 2" />
          </svg>
        </span>

        <h4>Training and support included</h4>

        <!-- <p>
            Dedicated onboarding, training and continuous customer support.
          </p> -->
      </div>

    </div>

  </div>
</section>

<!-- PROCESS TIMELINE -->
<section class="process">
  <div class="wrap">

    <div class="section-head">
      <span class="badge badge-lime">How it works</span>
      <h2>The job is connected. Your software should be, too.</h2>
      <p>
        Wunderbuild keeps that chain visible, so your team works from the same job.
      </p>
    </div>

    <div class="process-path" id="processPath">
      <div class="path-fill" id="pathFill"></div>
      <div class="p-row row-left active">
        <div class="p-card">
          <h4>Lead</h4>
          <p>New work comes in and gets tracked before it slips through.</p>
        </div>
        <div class="p-node-col">
          <div class="p-node">1</div>
        </div>
      </div>
      <div class="p-row row-right">
        <div class="p-node-col">
          <div class="p-node">2</div>
        </div>
        <div class="p-card">
          <h4>Estimate</h4>
          <p>The job starts taking shape with costings and takeoffs.</p>
        </div>
      </div>
      <div class="p-row row-left">
        <div class="p-card">
          <h4>Quote request</h4>
          <p>Suppliers and trades price the scope of works.</p>
        </div>
        <div class="p-node-col">
          <div class="p-node">3</div>
        </div>
      </div>
      <div class="p-row row-right">
        <div class="p-node-col">
          <div class="p-node">4</div>
        </div>
        <div class="p-card">
          <h4>Job setup</h4>
          <p>Approved work becomes a live job with a real budget.</p>
        </div>
      </div>
      <div class="p-row row-left">
        <div class="p-card">
          <h4>Schedule</h4>
          <p>The programme starts moving, tasks assigned to the team.</p>
        </div>
        <div class="p-node-col">
          <div class="p-node">5</div>
        </div>
      </div>
      <div class="p-row row-right">
        <div class="p-node-col">
          <div class="p-node">6</div>
        </div>
        <div class="p-card">
          <h4>Site diary</h4>
          <p>The site record stays current with photos and notes.</p>
        </div>
      </div>
      <div class="p-row row-left">
        <div class="p-card">
          <h4>Variation</h4>
          <p>Changes stay attached to the job, not lost in a text thread.</p>
        </div>
        <div class="p-node-col">
          <div class="p-node">7</div>
        </div>
      </div>
      <div class="p-row row-right">
        <div class="p-node-col">
          <div class="p-node">8</div>
        </div>
        <div class="p-card">
          <h4>Progress claim</h4>
          <p>Claimed work stays clear against what's been done on site.</p>
        </div>
      </div>
      <div class="p-row row-left">
        <div class="p-card">
          <h4>Invoice</h4>
          <p>The money moves through Xero, tied to the right job.</p>
        </div>
        <div class="p-node-col">
          <div class="p-node">9</div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- PRODUCT SHOWCASE -->
<section class="showcase" id="showcase">
  <div class="wrap">
    <div class="section-head center" style="margin-left:auto;margin-right:auto;">
      <span class="badge badge-indigo">See it in action</span>
      <h2>See the job move through Wunderbuild.</h2>
      <p>Open the stage you care about to see how the work stays connected as the job progresses.</p>
    </div>

    <div class="tab-bar" id="tabBar">
      <button class="tab-btn active" data-tab="leads">Leads</button>
      <button class="tab-btn" data-tab="estimations">Estimations</button>
      <button class="tab-btn" data-tab="jobs">Jobs</button>
      <button class="tab-btn" data-tab="schedule">Schedule</button>
      <button class="tab-btn" data-tab="diaries">Site diaries</button>
      <button class="tab-btn" data-tab="budget">Job budget</button>
      <button class="tab-btn" data-tab="xero">Xero invoices</button>
    </div>

    <div class="tab-panels">

      <div class="tab-panel active" id="panel-leads">
        <div class="showcase-inner">
          <div class="showcase-text">
            <span class="cat">Leads</span>
            <h3>Track new work before it slips.</h3>
            <p>Keep your lead stages, contacts, addresses, budgets, and expected close dates in a single, clear view.
            </p>
            <a href="#" class="btn btn-primary btn-sm">
              Explore lead management

              <svg viewBox="0 0 24 24" width="18" height="18">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </a>
          </div>
          <div class="browser-mock">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Leads.png" alt="Leads">

          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-estimations">
        <div class="showcase-inner">
          <div class="showcase-text">
            <span class="cat">Estimations</span>
            <h3>Price the job with the details close by.</h3>
            <p>Keep your takeoffs, costings, quote requests, selections, and documents inside the estimate.</p>
            <a href="#" class="btn btn-primary btn-sm">
              Explore estimations

              <svg viewBox="0 0 24 24" width="18" height="18">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </a>
          </div>
          <div class="browser-mock">


            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Estimates.png" alt="Leads">


          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-jobs">
        <div class="showcase-inner">
          <div class="showcase-text">
            <span class="cat">Jobs</span>
            <h3>Turn accepted work into a live job.</h3>
            <p>See your job types, contract totals, budgets, members, and communications from the job record.</p>
            <a href="#" class="btn btn-primary btn-sm">
              Explore job management
              <svg viewBox="0 0 24 24" width="18" height="18">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </a>

          </div>
          <div class="browser-mock">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Jobs.png" alt="Leads">
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-schedule">
        <div class="showcase-inner">
          <div class="showcase-text">
            <span class="cat">Schedule</span>
            <h3>Keep the programme visible.</h3>
            <p>Plan your tasks, dates, assignees, reminders, and job links in a single schedule view.</p>

            <a href="#" class="btn btn-primary btn-sm">
              Explore scheduling
              <svg viewBox="0 0 24 24" width="18" height="18">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </a>

          </div>
          <div class="browser-mock">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Schedule.png" alt="Leads">

          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-diaries">
        <div class="showcase-inner">
          <div class="showcase-text">
            <span class="cat">Site diaries</span>
            <h3>Keep the site record attached to the job.</h3>
            <p>Record your site activities, completed works, photos, team members, and job histories without leaving
              the job flow.</p>
            <a href="#" class="btn btn-primary btn-sm">
              Explore site diaries
              <svg viewBox="0 0 24 24" width="18" height="18">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </a>

          </div>
          <div class="browser-mock">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Site Diary.png" alt="Leads">
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-budget">
        <div class="showcase-inner">
          <div class="showcase-text">
            <span class="cat">Job budget</span>
            <h3>Keep the money close to the work.</h3>
            <p>Track your adjusted contracts, actual costs, claimed amounts, claims remaining, and gross profits from
              the job view.</p>
            <a href="#" class="btn btn-primary btn-sm">
              Explore job costing
              <svg viewBox="0 0 24 24" width="18" height="18">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </a>
          </div>
          <div class="browser-mock">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Job Overview.png" alt="Leads">
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-xero">
        <div class="showcase-inner">
          <div class="showcase-text">
            <span class="cat">Xero invoices</span>
            <h3>Keep invoices moving through Xero.</h3>
            <p>Review your imported invoices, check bill details, approve items, and keep supplier costs tied to the
              right job.</p>

            <a href="#" class="btn btn-primary btn-sm">
              Explore Xero invoicing
              <svg viewBox="0 0 24 24" width="18" height="18">
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </a>

          </div>
          <div class="browser-mock">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Xero Invoices.png" alt="Leads">
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FEATURE SECTIONS -->
<!-- <section class="feature bg-field">
    <div class="wrap feature-grid">
      <div class="feature-text">
        <span class="cat badge-lime">Budgets</span>
        <h3>Every dollar, tied to the job.</h3>
        <p>Set an adjusted contract, track actual costs against it, and see claims and gross profit update as the job
          moves — no separate spreadsheet required.</p>
        <ul class="feature-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>Adjusted contract totals stay current as variations land</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>Claimed and claims-remaining shown side by side</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>Gross profit visible at a glance, per job</li>
        </ul>
        <a href="#" class="explore-link">Explore job budgets <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg></a>
      </div>
      <div class="feature-visual">
        <div class="browser-mock">
          <div class="browser-chrome"><span></span><span></span><span></span></div>
          <div class="browser-body">
            <div class="stat-strip">
              <div class="stat-pill">
                <div class="v">$680,440</div>
                <div class="l">Adjusted contract</div>
              </div>
              <div class="stat-pill">
                <div class="v">$87,600</div>
                <div class="l">Gross profit</div>
              </div>
            </div>
            <table class="budget-table">
              <tr>
                <th>Line</th>
                <th>Budget</th>
                <th>Actual</th>
              </tr>
              <tr>
                <td>Foundations</td>
                <td>$62,000</td>
                <td>$59,400</td>
              </tr>
              <tr>
                <td>Frame &amp; roof</td>
                <td>$118,000</td>
                <td>$121,300</td>
              </tr>
              <tr>
                <td>Fixing</td>
                <td>$74,500</td>
                <td>$41,000</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="dash-card glass-tag" style="top:-16px; right:-10px;">
          <span class="ic" style="width:22px;height:22px;background:rgba(180,255,80,.35);"></span>Variation added —
          $4,200
        </div>
      </div>
    </div>
  </section> -->

<!-- <section class="feature reverse bg-field">
    <div class="wrap feature-grid">
      <div class="feature-text">
        <span class="cat badge-indigo">Site diaries</span>
        <h3>The site record, without leaving the job.</h3>
        <p>Log completed work, weather, crew on site, and photos in seconds — every entry sits inside the job's own
          history, ready for the next progress claim.</p>
        <ul class="feature-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>Photos and notes attached directly to the job</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>Team members logged automatically each day</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>Full job history, searchable at claim time</li>
        </ul>
        <a href="#" class="explore-link">Explore site diaries <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg></a>
      </div>
      <div class="feature-visual">
        <div class="diary-card">
          <div class="diary-entry">
            <div class="top"><span>4 Jul, 2026 · Clear, 22°C</span><span>Robin S.</span></div>Fixing stage progressing
            well, plasterers on site, no delays.
          </div>
          <div class="diary-photo-row">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
        <div class="dash-card glass-tag" style="bottom:-14px; left:-12px;">
          <span class="ic" style="width:22px;height:22px;background:rgba(179,153,255,.3);"></span>Site diary updated
        </div>
      </div>
    </div>
  </section> -->

<!-- SUPPORT -->
<section class="support">
  <div class="wrap">
    <div class="section-head center" style="margin-left:auto;margin-right:auto;">
      <span class="badge badge-lime">Onboarding</span>
      <h2>You're not left to figure it out alone.</h2>
      <p>Wunderbuild comes with demos, training, and ongoing support, so your team can work through the software with
        people who know the product and the building process.</p>
    </div>
    <div class="support-grid">
      <div class="support-card">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6" />
          </svg></span>
        <h4>Start with your real work</h4>
        <p>Use your current job, team, and process as the starting point, not a generic software tour.</p>
      </div>
      <div class="support-card">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M12 3l9 4.5-9 4.5-9-4.5L12 3z" />
            <path d="M3 12l9 4.5 9-4.5M3 16.5l9 4.5 9-4.5" />
          </svg></span>
        <h4>Learn the parts you need first</h4>
        <p>Focus on the tools that matter now, then build from there as your team settles in.</p>
      </div>
      <div class="support-card">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
            stroke-linejoin="round">
            <circle cx="12" cy="12" r="9" />
            <path d="M9.5 9a2.5 2.5 0 0 1 5 0c0 1.5-2.5 2-2.5 3.5M12 17h.01" />
          </svg></span>
        <h4>Get help when the job won't wait</h4>
        <p>Ask questions, work through snags, and keep moving with support that understands the product.</p>
      </div>
    </div>
    <div style="text-align:center; margin-top:44px;">
      <a href="#" class="btn btn-primary">Explore support &amp; onboarding</a>
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
<?php get_footer(); ?>



<?php

/**
 * Template Name: How It Works
 */

get_header();
?>
<section class="hero bg-field">
  <div class="blueprint-lines"></div>
  <div class="wrap hero-grid">
    <div>
      <!-- <div class="eyebrow"><span class="dot"></span>Built for residential builders in AU &amp; NZ</div> -->
      <h1>From the first enquiry to the final invoice.</h1>
      <p class="lead">Wunderbuild follows the way a building job actually moves. Track new work, price the job, set it up, run the site, manage client decisions, control costs, and keep claims and invoices connected.</p>
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
<section class="optA">
  <div class="wrap">

    <div class="section-head">
      <span class="badge" style="background:var(--lime); color:var(--charcoal);">
        How it works
      </span>

      <h2>
        The job moves in stages.<br>
        Wunderbuild keeps those stages connected.
      </h2>
    </div>


    <div class="stage-path" id="pathA">


      <!-- Stage 01 -->
      <div class="stage-row">

        <div class="stage-card">
          <div class="stage-tag">Stage 01</div>

          <h3>Track new work</h3>

          <dl>
            <div class="row">
              <dt>Win</dt>
              <dd>
                Keep new enquiries visible before they go cold.
              </dd>
            </div>

            <div class="row">
              <dt>Practice</dt>
              <dd>
                Keep the lead stages, contact details, addresses,
                budgets, assignees, and related notes where your
                team can see what needs follow-up.
              </dd>
            </div>

            <div class="row">
              <dt>Tools</dt>
              <dd>
                Leads, contacts, tasks, reminders
              </dd>
            </div>
          </dl>

          <button class="btn btn-ghost btn-sm">
            Track leads before they go cold
          </button>
        </div>

        <div class="node-col">
          <div class="node">01</div>
        </div>

        <div class="shot">
          <img
            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=80"
            alt="Team planning and tracking new construction work">
        </div>

      </div>


      <!-- Stage 02 -->
      <div class="stage-row">

        <div class="shot">
          <img
            src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=900&q=80"
            alt="Project estimation and planning">
        </div>

        <div class="node-col">
          <div class="node">02</div>
        </div>

        <div class="stage-card">
          <div class="stage-tag">Stage 02</div>

          <h3>Price the job</h3>

          <dl>
            <div class="row">
              <dt>Win</dt>
              <dd>
                Build the estimate with the details close by.
              </dd>
            </div>

            <div class="row">
              <dt>Practice</dt>
              <dd>
                Bring take-offs, supplier pricing, costings,
                specifications, quote requests, documents,
                and quote previews into a single pricing flow.
              </dd>
            </div>

            <div class="row">
              <dt>Tools</dt>
              <dd>
                Estimations, takeoff, costing, quote requests,
                specifications
              </dd>
            </div>
          </dl>

          <button class="btn btn-ghost btn-sm">
            Build a cleaner estimate
          </button>
        </div>

      </div>


      <!-- Stage 03 -->
      <div class="stage-row">

        <div class="stage-card">
          <div class="stage-tag">Stage 03</div>

          <h3>Set up the job</h3>

          <dl>
            <div class="row">
              <dt>Win</dt>
              <dd>
                Turn accepted work into a live job without
                starting all over again.
              </dd>
            </div>

            <div class="row">
              <dt>Practice</dt>
              <dd>
                Move from the estimate to the job setup with
                the right details, team members, and contract
                carried straight across.
              </dd>
            </div>

            <div class="row">
              <dt>Tools</dt>
              <dd>
                Jobs, contracts, team members, budgets
              </dd>
            </div>
          </dl>

          <button class="btn btn-ghost btn-sm">
            Set up the job in minutes
          </button>
        </div>

        <div class="node-col">
          <div class="node">03</div>
        </div>

        <div class="shot">
          <img
            src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=900&q=80"
            alt="Architectural project setup">
        </div>

      </div>


      <!-- Stage 04 -->
      <div class="stage-row">

        <div class="shot">
          <img
            src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=900&q=80"
            alt="Construction site management">
        </div>

        <div class="node-col">
          <div class="node">04</div>
        </div>

        <div class="stage-card">
          <div class="stage-tag">Stage 04</div>

          <h3>Run the site</h3>

          <dl>
            <div class="row">
              <dt>Win</dt>
              <dd>
                Keep work, timing, and site records visible.
              </dd>
            </div>

            <div class="row">
              <dt>Practice</dt>
              <dd>
                Plan programmes, assign tasks, keep documents
                up to date, use checklists, and record what
                happened on-site.
              </dd>
            </div>

            <div class="row">
              <dt>Tools</dt>
              <dd>
                Schedule, calendar, tasks, checklists,
                documents, site diaries
              </dd>
            </div>
          </dl>

          <button class="btn btn-ghost btn-sm">
            Keep the site moving
          </button>
        </div>

      </div>


      <!-- Stage 05 -->
      <div class="stage-row">

        <div class="stage-card">
          <div class="stage-tag">Stage 05</div>

          <h3>Manage client decisions</h3>

          <dl>
            <div class="row">
              <dt>Win</dt>
              <dd>
                Keep selections, approvals, and changes
                attached to the job.
              </dd>
            </div>

            <div class="row">
              <dt>Practice</dt>
              <dd>
                Keep client choices, messages, approvals,
                and changes out of scattered inboxes and
                tied back to the job they affect.
              </dd>
            </div>

            <div class="row">
              <dt>Tools</dt>
              <dd>
                Selections, communication, email logs,
                variations
              </dd>
            </div>
          </dl>

          <button class="btn btn-ghost btn-sm">
            Keep decisions to the job
          </button>
        </div>

        <div class="node-col">
          <div class="node">05</div>
        </div>

        <div class="shot">
          <img
            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=900&q=80"
            alt="Team discussing project decisions">
        </div>

      </div>


      <!-- Stage 06 -->
      <div class="stage-row">

        <div class="shot">
          <img
            src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=900&q=80"
            alt="Project budget and cost management">
        </div>

        <div class="node-col">
          <div class="node">06</div>
        </div>

        <div class="stage-card">
          <div class="stage-tag">Stage 06</div>

          <h3>Control costs</h3>

          <dl>
            <div class="row">
              <dt>Win</dt>
              <dd>
                See the money side before it drifts.
              </dd>
            </div>

            <div class="row">
              <dt>Practice</dt>
              <dd>
                Track quoted works, actual costs, budget
                movements, expenses, and variations against
                the live job.
              </dd>
            </div>

            <div class="row">
              <dt>Tools</dt>
              <dd>
                Budget, expenses, cost codes, purchase orders,
                variations, job costing
              </dd>
            </div>
          </dl>

          <button class="btn btn-ghost btn-sm">
            Catch cost issues early
          </button>
        </div>

      </div>


      <!-- Stage 07 -->
      <div class="stage-row">

        <div class="stage-card">
          <div class="stage-tag">Stage 07</div>

          <h3>Claim and invoice</h3>

          <dl>
            <div class="row">
              <dt>Win</dt>
              <dd>
                Get paid for work that's already done.
              </dd>
            </div>

            <div class="row">
              <dt>Practice</dt>
              <dd>
                Turn completed work into progress claims,
                keep them tied to the budget, and push
                approved invoices straight through to Xero.
              </dd>
            </div>

            <div class="row">
              <dt>Tools</dt>
              <dd>
                Progress claims, invoicing, Xero sync
              </dd>
            </div>
          </dl>

          <button class="btn btn-ghost btn-sm">
            Claim and invoice with confidence
          </button>
        </div>

        <div class="node-col">
          <div class="node">07</div>
        </div>

        <div class="shot">
          <img
            src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?auto=format&fit=crop&w=900&q=80"
            alt="Invoices and project payments">
        </div>

      </div>

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

      <span class="badge faq-badge">
        FAQs
      </span>

      <h2>
        Questions, answered.
      </h2>

      <p>
        Everything you need to know about bringing your
        building workflow into one connected place.
      </p>

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



<section class="pricing-selector">

    <div class="wrap">

        <div class="section-head">

            <span class="section-label">
                Find Your Plan
            </span>

            <h2>
                How many active jobs are
                <span>you running?</span>
            </h2>

            <p>
                Choose the range that matches the work your business is managing now.
            </p>

        </div>

        <div class="job-selector">

            <button class="job-btn active" data-plan="starter">
                1 Active Job
            </button>

            <button class="job-btn" data-plan="premium">
                2–10 Active Jobs
            </button>

            <button class="job-btn" data-plan="platinum">
                11–20 Active Jobs
            </button>

            <button class="job-btn" data-plan="ultimate">
                More than 20 Jobs
            </button>

        </div>

    </div>

</section>

<section class="pricing-plans">

    <div class="wrap">

        <div class="section-head">

            <h2>
                Choose the plan that fits
                <span>the live workload.</span>
            </h2>

            <p>
                Prices shown in Australian dollars.
            </p>

        </div>

        <div class="pricing-grid">

            <!-- Starter -->

            <div class="pricing-card active" data-plan="starter">

                <span class="plan-name">
                    Starter
                </span>

                <div class="price">

                    <sup>$</sup>123

                    <small>/month</small>

                </div>

                <p class="plan-desc">
                    For builders running one active job.
                </p>

                <ul>

                    <li>1 Active Job</li>

                    <li>Full Wunderbuild Software</li>

                    <li>Unlimited Estimates</li>

                    <li>Unlimited Team Members</li>

                    <li>No Lock-in Contract</li>

                </ul>

                <a href="#" class="btn btn-primary">
                    Start Free Trial
                </a>

            </div>

            <!-- Premium -->

            <div class="pricing-card" data-plan="premium">

                <span class="plan-name">
                    Premium
                </span>

                <div class="price">

                    <sup>$</sup>249

                    <small>/month</small>

                </div>

                <p class="plan-desc">
                    For building businesses running several jobs.
                </p>

                <ul>

                    <li>2–10 Active Jobs</li>

                    <li>Full Wunderbuild Software</li>

                    <li>Unlimited Estimates</li>

                    <li>Unlimited Team Members</li>

                    <li>No Lock-in Contract</li>

                </ul>

                <a href="#" class="btn btn-primary">
                    Start Free Trial
                </a>

            </div>

            <!-- Platinum -->

            <div class="pricing-card" data-plan="platinum">

                <span class="plan-name">
                    Platinum
                </span>

                <div class="price">

                    <sup>$</sup>375

                    <small>/month</small>

                </div>

                <p class="plan-desc">
                    For established builders managing more live jobs.
                </p>

                <ul>

                    <li>11–20 Active Jobs</li>

                    <li>Full Wunderbuild Software</li>

                    <li>Unlimited Estimates</li>

                    <li>Unlimited Team Members</li>

                    <li>No Lock-in Contract</li>

                </ul>

                <a href="#" class="btn btn-primary">
                    Start Free Trial
                </a>

            </div>

            <!-- Ultimate -->

            <div class="pricing-card" data-plan="ultimate">

                <span class="plan-name">
                    Ultimate
                </span>

                <div class="price">

                    <sup>$</sup>499

                    <small>/month</small>

                </div>

                <p class="plan-desc">
                    For builders with unlimited active jobs.
                </p>

                <ul>

                    <li>Unlimited Active Jobs</li>

                    <li>Full Wunderbuild Software</li>

                    <li>Unlimited Estimates</li>

                    <li>Unlimited Team Members</li>

                    <li>No Lock-in Contract</li>

                </ul>

                <a href="#" class="btn btn-primary">
                    Start Free Trial
                </a>

            </div>

        </div>

    </div>

</section>

<section class="pricing-workflow">

    <div class="wrap">

        <div class="section-head">
            <h2>
                The whole job is included
                <span>in every plan.</span>
            </h2>

            <p>
                You don’t need to upgrade just to unlock another part of the job.
                Every plan gives your team access to the connected Wunderbuild workflow.
            </p>
        </div>

        <div class="workflow-wrapper">

            <!-- SVG Road -->
            <svg class="workflow-svg"
                viewBox="0 0 1600 520"
                preserveAspectRatio="none">

                <path id="workflow-path"
                    d="
                    M40 260
                    C180 90 340 90 470 260
                    S760 430 930 260
                    S1220 90 1390 260
                    S1560 430 1600 260"
                    fill="none" />

            </svg>

            <!-- Timeline -->

            <div class="workflow-timeline">

                <!-- Step 1 -->

                <article class="workflow-item active">

                    <button class="workflow-dot active">
                        <span>01</span>
                    </button>

                    <div class="workflow-card">

                        <h4>Track New Work</h4>

                        <p>
                            Leads, contacts,
                            tasks and follow-ups.
                        </p>

                    </div>

                </article>


                <!-- Step 2 -->

                <article class="workflow-item">

                    <button class="workflow-dot">
                        <span>02</span>
                    </button>

                    <div class="workflow-card">

                        <h4>Price the Job</h4>

                        <p>
                            Take-offs,
                            supplier quotes,
                            estimating and
                            specifications.
                        </p>

                    </div>

                </article>


                <!-- Step 3 -->

                <article class="workflow-item">

                    <button class="workflow-dot">
                        <span>03</span>
                    </button>

                    <div class="workflow-card">

                        <h4>Set Up & Run</h4>

                        <p>
                            Scheduling,
                            checklists,
                            documents,
                            diaries and
                            time tracking.
                        </p>

                    </div>

                </article>


                <!-- Step 4 -->

                <article class="workflow-item">

                    <button class="workflow-dot">
                        <span>04</span>
                    </button>

                    <div class="workflow-card">

                        <h4>Manage Costs</h4>

                        <p>
                            Variations,
                            purchase orders,
                            budgets and
                            cost tracking.
                        </p>

                    </div>

                </article>


                <!-- Step 5 -->

                <article class="workflow-item">

                    <button class="workflow-dot">
                        <span>05</span>
                    </button>

                    <div class="workflow-card">

                        <h4>Claim & Invoice</h4>

                        <p>
                            Progress claims,
                            payment records
                            and accounting.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </div>

</section>

<section class="pricing-benefits">

    <div class="wrap">

        <div class="section-head">

            <h2>
                Pay for the <span>live workload</span>, not every person on the team.
            </h2>

            <p>
                Wunderbuild plans are based on the number of active jobs your business is running.
                The software stays included, and the team can work in the same system without
                another seat charge every time someone needs access.
            </p>

        </div>

        <div class="benefits-layout">

            <div class="benefit-card card-1">

                <div class="icon">

                    👥

                </div>

                <h3>Unlimited team members</h3>

                <p>
                    Bring the office, site team and wider business into the same system without paying another internal seat.
                </p>

            </div>

            <div class="benefit-card card-2">

                <div class="icon">

                    ⚡

                </div>

                <h3>Full software included</h3>

                <p>
                    Every plan includes the complete Wunderbuild workflow with no locked modules.
                </p>

            </div>

            <div class="center-circle">

                <div class="circle">

                    <h3>One Simple Plan</h3>

                    <span>Everything your team needs</span>

                </div>

            </div>

            <div class="benefit-card card-3">

                <div class="icon">

                    📋

                </div>

                <h3>Unlimited estimates</h3>

                <p>
                    Quote as many jobs as you like without affecting your active-job allowance.
                </p>

            </div>

            <div class="benefit-card card-4">

                <div class="icon">

                    🔒

                </div>

                <h3>No lock-in contract</h3>

                <p>
                    Upgrade or downgrade whenever your workload changes.
                </p>

            </div>

        </div>

    </div>

</section>

<section class="support-onboarding">

    <div class="wrap">

        <div class="section-head">

            <h2>
                You're not left to <span>work it out alone.</span>
            </h2>

            <p>
                Starting with new software can feel like another job on top of the jobs already moving.
                Wunderbuild provides practical onboarding, training and ongoing support to help your team get started.
            </p>

        </div>

        <div class="support-layout">

            <div class="support-side">

                <div class="support-box">

                    <div class="support-icons">
                        🚀
                    </div>

                    <h3>Start with your real work</h3>

                    <p>
                        Use the jobs, roles and processes already inside the business as the starting point.
                    </p>

                </div>

                <div class="support-box">

                    <div class="support-icons lime">
                        📚
                    </div>

                    <h3>Learn the parts you need first</h3>

                    <p>
                        Focus on the workflows that matter now, then build from there as the team settles in.
                    </p>

                </div>

            </div>

            <div class="support-center">

                <div class="center-circles">

                    <svg width="70" height="70" viewBox="0 0 24 24" fill="none">

                        <path d="M12 3L20 7V12C20 17 16.8 20.7 12 22C7.2 20.7 4 17 4 12V7L12 3Z"
                            stroke="#1d1c1b"
                            stroke-width="1.8" />

                        <path d="M9 12L11 14L15.5 9.5"
                            stroke="#1d1c1b"
                            stroke-width="1.8"
                            stroke-linecap="round" />

                    </svg>

                    <h3>Support Hub</h3>

                    <span>Training • Help • Onboarding</span>

                </div>

            </div>

            <div class="support-side">

                <div class="support-box">

                    <div class="support-icons coral">
                        🤝
                    </div>

                    <h3>Get help when questions come up</h3>

                    <p>
                        Use onboarding, training and product support whenever your team needs the next step.
                    </p>

                </div>

                <a href="#" class="support-btn">

                    Explore Support & Onboarding →

                </a>

            </div>

        </div>

    </div>

</section>



<section class="pricing-hero">

    <div class="blueprint-lines"></div>

    <div class="wrap">

        <div class="pricing-content">
            <h1>
                Pricing built around the
                <span>jobs you're running.</span>
            </h1>

            <p>
                Every Wunderbuild plan includes the full software,
                unlimited team members, and unlimited estimates.
                Choose the plan that matches the number of active
                jobs in your business.
            </p>

            <div class="hero-buttons">

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

<section class="adoption-problem">

    <div class="wrap">

        <div class="section-head">

            <h2>
                New software only helps when
                <span>the team knows what to do with it.</span>
            </h2>

        </div>

        <div class="problem-flow">

            <div class="problem-card">

                <div class="problem-number">01</div>

                <h3>Different roles need different answers</h3>

                <p>
                    The owner, estimator, project manager,
                    office team and site team will not all use
                    Wunderbuild in the same way.
                </p>

            </div>

            <div class="problem-card">

                <div class="problem-number">02</div>

                <h3>One session is not enough</h3>

                <p>
                    People need a way to revisit the system,
                    practise the work and continue learning as
                    responsibilities change.
                </p>

            </div>

            <div class="problem-card">

                <div class="problem-number">03</div>

                <h3>Questions continue after setup</h3>

                <p>
                    The first login is only the beginning.
                    The team still needs somewhere to go
                    when a job, feature or technical issue
                    needs attention.
                </p>

            </div>

        </div>

    </div>

</section>

<section class="initial-onboarding">

    <div class="wrap">

        <div class="section-head">

            <h2>
                Start with the work
                <span>already in front of you.</span>
            </h2>

            <p>
                Work through the account setup, the people who need access,
                and the parts of Wunderbuild the business plans to use first.
            </p>

        </div>

        <div class="onboarding-grid">

            <!-- Left -->

            <div class="onboarding-preview">

                <div class="preview-window">

                    <img src="https://www.wunderbuild.com/wp-content/uploads/2023/04/scott-blake-x-ghf9LjrVg-unsplash1.jpg" alt="Account setup">

                </div>

                <div class="floating-badge badge-top">
                    ✓ Account Created
                </div>

                <div class="floating-badge badge-bottom">
                    4 Tasks Remaining
                </div>

            </div>

            <!-- Right -->

            <div class="onboarding-card">

                <h3>
                    Get your team ready from day one.
                </h3>

                <ul>

                    <li>Add the people who need access</li>

                    <li>Set roles and permissions</li>

                    <li>Confirm the first workflows</li>

                    <li>Keep onboarding tasks and progress visible through the internal onboarding tracker.</li>

                </ul>

                <a href="#" class="btn btn-primary">
                    Start a free trial
                </a>

            </div>

        </div>

    </div>

</section>

<section class="product-training">
    <div class="wrap">



        <div class="training-grid">

            <!-- Content -->
            <div class="training-content">

                <h2>
                    Learn the parts you
                    <span>need first.</span>
                </h2>

                <p class="training-intro">
                    New customers can receive a broader overview of Wunderbuild
                    or focus a session on the areas their team wants to
                    understand in more depth.
                </p>

                <div class="training-points">

                    <div class="training-point">
                        <span class="point-number">01</span>

                        <div>
                            
                            <p>
                                Full product overview for teams starting from
                                the beginning.
                            </p>
                        </div>
                    </div>

                    <div class="training-point">
                        <span class="point-number">02</span>

                        <div>
                           
                            <p>
                                Focused guidance around specific workflows
                                or features.
                            </p>
                        </div>
                    </div>

                    <div class="training-point">
                        <span class="point-number">03</span>

                        <div>
                           
                            <p>
                                More practical help when a team is struggling
                                with adoption.
                            </p>
                        </div>
                    </div>

                    <div class="training-point">
                        <span class="point-number">04</span>

                        <div>
                            <h3>Train around your business</h3>
                            <p>
                                Training shaped around the roles and priorities
                                inside the business.
                            </p>
                        </div>
                    </div>

                </div>

                <a href="#" class="btn btn-primary">
                    Book onboarding or training
                </a>

            </div>
            <!-- Media -->
            <div class="training-media">
                <div class="training-image">
                    <!-- Replace with real training/workshop image -->
                    <img src="https://www.wunderbuild.com/wp-content/uploads/2023/04/scott-graham-5fNmWej4tAA-unsplash1.jpg" alt="Wunderbuild product training session">
                </div>

                <div class="training-badge">
                    <span>Training</span>
                    <strong>Built around your team</strong>
                </div>
            </div>


        </div>

    </div>
</section>

<section class="academy-section">

    <div class="wrap">

        <div class="section-head">

            <h2>
               Keep learning at your own pace.
            </h2>

            <p>
               Wunderbuild Academy gives subscribers a structured way to learn the software, revisit important workflows, and train new people as they join.
            </p>

            <a href="#" class="btn btn-primary mt-6">
                 Explore Wunderbuild Academy
            </a>

        </div>
        <!-- Academy Media -->

        <div class="academy-media">

            <img
                src="https://www.wunderbuild.com/wp-content/uploads/2023/06/framing-scaled.jpg"
                alt="Wunderbuild Academy learning dashboard">

            <!-- Small overlay -->

            <div class="academy-media-badge">

                <span class="academy-check">✓</span>

                <div>
                    <strong>Learning progress</strong>
                    <small>Track courses and modules</small>
                </div>

            </div>

        </div>


        <!-- Features -->

        <div class="academy-features">

            <div class="academy-feature">

                <span class="academy-number">01</span>

                <div>
                    <h3>Practical video lessons</h3>

                    <p>
                        Work through focused lessons based on the parts
                        of Wunderbuild the team needs to use.
                    </p>
                </div>

            </div>


            <div class="academy-feature">

                <span class="academy-number">02</span>

                <div>
                    <h3>Knowledge checks</h3>

                    <p>
                        Complete assessments that reinforce what has
                        been covered.
                    </p>
                </div>

            </div>


            <div class="academy-feature">

                <span class="academy-number">03</span>

                <div>
                    <h3>Progress tracking</h3>

                    <p>
                        See which courses and modules have been completed.
                    </p>
                </div>

            </div>


            <div class="academy-feature">

                <span class="academy-number">04</span>

                <div>
                    <h3>Certificates of completion</h3>

                    <p>
                        Receive a certificate after completing the
                        required lessons and assessments.
                    </p>
                </div>

            </div>


            <div class="academy-feature">

                <span class="academy-number">05</span>

                <div>
                    <h3>Training for new starters</h3>

                    <p>
                        Give new team members a consistent learning path
                        as they join.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

<section class="support-routes">

    <div class="wrap">

       <div class="section-head">

            <h2>
               Keep learning at your own pace.
            </h2>

            <p>
               Wunderbuild Academy gives subscribers a structured way to learn the software, revisit important workflows, and train new people as they join.
            </p>

            <a href="#" class="btn btn-primary mt-6">
                 Explore Wunderbuild Academy
            </a>

        </div>


        <div class="support-card-grid">

            <!-- Card 01 -->

            <article class="support-cards support-card-migration">

                <div class="support-card-top">

                    <span class="support-number">
                        01
                    </span>

                    <span class="support-icon">
                        <!-- File / Migration SVG -->
                        <svg width="26" height="26"
                             viewBox="0 0 24 24"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">

                            <path
                                d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>

                            <path
                                d="M14 2V8H20"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linejoin="round"/>

                            <path
                                d="M8 13H16M8 17H13"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"/>

                        </svg>
                    </span>

                </div>

                <h3>
                    Onboarding and data migration
                </h3>

                <p>
                    For file preparation, supported imports, additional
                    migration files, and questions about the progress
                    of the move.
                </p>

                <a href="/contact" class="support-card-link">
                    Get migration help
                    <span>→</span>
                </a>

            </article>


            <!-- Card 02 -->

            <article class="support-cards support-card-training">

                <div class="support-card-top">

                    <span class="support-number">
                        02
                    </span>

                    <span class="support-icon">

                        <!-- Training SVG -->

                        <svg width="26" height="26"
                             viewBox="0 0 24 24"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">

                            <path
                                d="M3 5.5C3 4.67 3.67 4 4.5 4H10C11.1 4 12 4.9 12 6V20C12 18.9 11.1 18 10 18H4.5C3.67 18 3 18.67 3 19.5V5.5Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linejoin="round"/>

                            <path
                                d="M21 5.5C21 4.67 20.33 4 19.5 4H14C12.9 4 12 4.9 12 6V20C12 18.9 12.9 18 14 18H19.5C20.33 18 21 18.67 21 19.5V5.5Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linejoin="round"/>

                        </svg>

                    </span>

                </div>

                <h3>
                    Onboarding training
                </h3>

                <p>
                    For full product overviews, focused learning sessions,
                    and more hands-on guidance when the team needs help
                    learning Wunderbuild.
                </p>

                <a href="/contact" class="support-card-link">
                    Explore training
                    <span>→</span>
                </a>

            </article>


            <!-- Card 03 -->

            <article class="support-cards support-card-product">

                <div class="support-card-top">

                    <span class="support-number">
                        03
                    </span>

                    <span class="support-icon">

                        <!-- Support SVG -->

                        <svg width="26" height="26"
                             viewBox="0 0 24 24"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">

                            <path
                                d="M4 13V11C4 6.58 7.58 3 12 3C16.42 3 20 6.58 20 11V13"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"/>

                            <path
                                d="M4 13H6C7.1 13 8 13.9 8 15V17C8 18.1 7.1 19 6 19H4V13Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linejoin="round"/>

                            <path
                                d="M20 13H18C16.9 13 16 13.9 16 15V17C16 18.1 16.9 19 18 19H20V13Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linejoin="round"/>

                            <path
                                d="M16 19C15.2 20.25 13.85 21 12 21"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"/>

                        </svg>

                    </span>

                </div>

                <h3>
                    Product support
                </h3>

                <p>
                    For broader product questions, technical issues,
                    and ongoing help after the initial onboarding work.
                </p>

                <a href="/contact" class="support-card-link">
                    Contact support
                    <span>→</span>
                </a>

            </article>

        </div>

    </div>

</section>

<section class="switching-cta">

    <div class="wrap">

        <div class="switching-cta-inner">

            <div class="switching-cta-content">

                <span class="eyebrow">
                    Switching to Wunderbuild
                </span>

                <h2>
                    Need to bring existing
                    <span>information across first?</span>
                </h2>

                <p>
                    The Data Migration Team can review, prepare, and import
                    supported records from the system or files you use now.
                </p>

            </div>

            <div class="btn btn-dark">

                <a
                    href="/why-wunderbuild/switching-to-wunderbuild"
                    class="switching-btn"
                >
                    Explore switching to Wunderbuild
                    <span>→</span>
                </a>

            </div>

        </div>

    </div>

</section>

<?php

/**
 * Template Name: Switch to Wunderbuild Page
 */

get_header();
?>


<section class="wb-migration-hero">

    <div class="wb-migration-hero__bg-shape wb-migration-hero__bg-shape--one"></div>
    <div class="wb-migration-hero__bg-shape wb-migration-hero__bg-shape--two"></div>

    <div class="wb-migration-hero__container">

        <div class="wb-migration-hero__content">

            <span class="wb-migration-hero__eyebrow">
                Switching to Wunderbuild
            </span>

            <h1 class="wb-migration-hero__title">
                Move to Wunderbuild
                <span>without starting from scratch.</span>
            </h1>

            <p class="wb-migration-hero__description">
                Send us the supported records your business still needs in
                Excel or CSV format. The onboarding team reviews the files,
                prepares what can move, imports the data, and works through
                any necessary adjustments with you.
            </p>

            <div class="wb-migration-hero__actions">

                <a
                    href="#"
                    class="btn btn-primary">
                    Book a free demo
                </a>

                <a
                    href="#"
                    class="btn btn-dark">
                    Start a free trial
                </a>

            </div>

        </div>


        <!-- Migration visual -->

        <div
            class="wb-migration-hero__visual"
            aria-label="File-based migration from an existing system to Wunderbuild">

            <div class="wb-migration-hero__flow">


                <!-- STEP 01 -->

                <div class="wb-migration-hero__stage wb-migration-hero__stage--source">

                    <div class="wb-migration-hero__stage-card">

                        <div class="wb-migration-hero__stage-icon wb-migration-hero__stage-icon--source">
                            <svg
                                width="28"
                                height="28"
                                viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true">
                                <rect
                                    x="3"
                                    y="4"
                                    width="18"
                                    height="16"
                                    rx="2"
                                    stroke="currentColor"
                                    stroke-width="1.8" />

                                <path
                                    d="M7 8h10M7 12h6M7 16h8"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round" />
                            </svg>
                        </div>

                        <div>
                            <span class="wb-migration-hero__stage-label">
                                YOUR CURRENT SYSTEM
                            </span>

                            <h3>
                                Existing records
                            </h3>

                            <p>
                                Current system or spreadsheets
                            </p>
                        </div>

                    </div>

                </div>


                <!-- CONNECTOR -->

                <div class="wb-migration-hero__connector">

                    <div class="wb-migration-hero__connector-line"></div>

                    <div class="wb-migration-hero__connector-label">
                        Export
                    </div>

                    <div class="wb-migration-hero__connector-arrow">
                        ↓
                    </div>

                </div>


                <!-- STEP 02 -->

                <div class="wb-migration-hero__stage wb-migration-hero__stage--file">

                    <div class="wb-migration-hero__file-card">

                        <div class="wb-migration-hero__file-top">

                            <div class="wb-migration-hero__file-icon">

                                <svg
                                    width="26"
                                    height="26"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    aria-hidden="true">
                                    <path
                                        d="M6 2.75h8l4 4V21.25H6V2.75Z"
                                        stroke="currentColor"
                                        stroke-width="1.7" />

                                    <path
                                        d="M14 2.75v4h4"
                                        stroke="currentColor"
                                        stroke-width="1.7" />

                                    <path
                                        d="M8.5 12h7M8.5 15.5h7"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round" />
                                </svg>

                            </div>

                            <span class="wb-migration-hero__file-type">
                                FILE
                            </span>

                        </div>

                        <strong>
                            Excel / CSV
                        </strong>

                        <span>
                            Supported records
                        </span>

                    </div>

                </div>


                <!-- CONNECTOR -->

                <div class="wb-migration-hero__connector">

                    <div class="wb-migration-hero__connector-line"></div>

                    <div class="wb-migration-hero__connector-label">
                        Review &amp; prepare
                    </div>

                    <div class="wb-migration-hero__connector-arrow">
                        ↓
                    </div>

                </div>


                <!-- STEP 03 -->

                <div class="wb-migration-hero__stage wb-migration-hero__stage--wunderbuild">

                    <div class="wb-migration-hero__stage-card wb-migration-hero__stage-card--destination">

                        <div class="wb-migration-hero__stage-icon wb-migration-hero__stage-icon--destination">

                            <svg
                                width="30"
                                height="30"
                                viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true">
                                <path
                                    d="M5 17.5V6.5L12 3l7 3.5v11L12 21l-7-3.5Z"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linejoin="round" />

                                <path
                                    d="M5 6.5 12 10l7-3.5M12 10v11"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linejoin="round" />

                            </svg>

                        </div>

                        <div>

                            <span class="wb-migration-hero__stage-label">
                                WUNDERBUILD
                            </span>

                            <h3>
                                Ready to work
                            </h3>

                            <p>
                                Supported data imported into your account
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="wb-migration-hero__note">
                <span class="wb-migration-hero__note-dot"></span>

                Assisted migration — your files are reviewed and prepared
                before import.
            </div>

        </div>

    </div>

</section>



<section class="adoption-problem">

    <div class="wrap">

        <div class="section-head">

            <h2>
                The move gets harder when the old system is still running the business.
            </h2>

        </div>

        <div class="problem-flow">

            <div class="problem-card">

                <div class="problem-number">01</div>

                <h3>The records are spread out</h3>

                <p>
                    Contacts, leads, costings, schedules, templates, jobs, and accounting records may sit across different systems and files.
                </p>

            </div>

            <div class="problem-card">

                <div class="problem-number">02</div>

                <h3>The exports need work</h3>

                <p>
                    A file can contain useful data and still need cleaning, mapping, or restructuring before it can be imported.
                </p>

            </div>

            <div class="problem-card">

                <div class="problem-number">03</div>

                <h3>Live jobs keep changing</h3>

                <p>
                    The team cannot freeze active work while the move is prepared, checked, and completed.
                </p>

            </div>

        </div>

    </div>

</section>


<section class="wb-migration-process" aria-labelledby="wb-migration-process-title">

    <div class="wb-migration-process__inner">

        <!-- Heading -->
        <div class="section-head">

            <h2>
                Send us the files. We’ll help prepare the move.
            </h2>
            <p>
                The customer supplies the exported files. The onboarding team checks what is supported, prepares the data, completes the import, and works through the review with the customer.
            </p>

        </div>


        <!-- ================= DESKTOP TIMELINE ================= -->

        <div class="wb-migration-process__desktop">

            <div class="wb-migration-process__timeline">

                <div class="wb-migration-process__track">
                    <span class="wb-migration-process__track-fill"></span>
                </div>


                <div class="wb-migration-process__steps">

                    <button
                        type="button"
                        class="wb-migration-process__step is-active"
                        data-step="0"
                        aria-selected="true">
                        <span class="wb-migration-process__number">01</span>
                        <span class="wb-migration-process__name">Export</span>
                    </button>

                    <button
                        type="button"
                        class="wb-migration-process__step"
                        data-step="1"
                        aria-selected="false">
                        <span class="wb-migration-process__number">02</span>
                        <span class="wb-migration-process__name">Send</span>
                    </button>

                    <button
                        type="button"
                        class="wb-migration-process__step"
                        data-step="2"
                        aria-selected="false">
                        <span class="wb-migration-process__number">03</span>
                        <span class="wb-migration-process__name">Prepare</span>
                    </button>

                    <button
                        type="button"
                        class="wb-migration-process__step"
                        data-step="3"
                        aria-selected="false">
                        <span class="wb-migration-process__number">04</span>
                        <span class="wb-migration-process__name">Import</span>
                    </button>

                    <button
                        type="button"
                        class="wb-migration-process__step"
                        data-step="4"
                        aria-selected="false">
                        <span class="wb-migration-process__number">05</span>
                        <span class="wb-migration-process__name">Review</span>
                    </button>

                </div>

            </div>


            <!-- Desktop content -->

            <div class="wb-migration-process__desktop-card">

                <div class="wb-migration-process__card-icon">
                    <span class="wb-migration-process__icon-value">↓</span>
                </div>

                <div class="wb-migration-process__card-content">

                    <span class="wb-migration-process__card-label">
                        Step 01
                    </span>

                    <h3>Export the data</h3>

                    <p>
                        Export the records you want to bring across from
                        the current system or files.
                    </p>

                </div>

            </div>

        </div>


        <!-- ================= MOBILE TIMELINE ================= -->

        <div class="wb-migration-process__mobile">

            <div class="wb-migration-process__mobile-line">
                <span class="wb-migration-process__mobile-line-fill"></span>
            </div>


            <!-- STEP 01 -->

            <article
                class="wb-migration-process__mobile-step is-active"
                data-mobile-step="0">

                <div class="wb-migration-process__mobile-number">
                    01
                </div>

                <div class="wb-migration-process__mobile-card">

                    <span class="wb-migration-process__mobile-label">
                        Step 01
                    </span>

                    <h3>Export the data</h3>

                    <p>
                        Export the records you want to bring across from
                        the current system or files.
                    </p>

                </div>

            </article>


            <!-- STEP 02 -->

            <article
                class="wb-migration-process__mobile-step"
                data-mobile-step="1">

                <div class="wb-migration-process__mobile-number">
                    02
                </div>

                <div class="wb-migration-process__mobile-card">

                    <span class="wb-migration-process__mobile-label">
                        Step 02
                    </span>

                    <h3>Send the files to Wunderbuild</h3>

                    <p>
                        Provide the Excel or CSV files to the onboarding team.
                    </p>

                </div>

            </article>


            <!-- STEP 03 -->

            <article
                class="wb-migration-process__mobile-step"
                data-mobile-step="2">

                <div class="wb-migration-process__mobile-number">
                    03
                </div>

                <div class="wb-migration-process__mobile-card">

                    <span class="wb-migration-process__mobile-label">
                        Step 03
                    </span>

                    <h3>We review and prepare them</h3>

                    <p>
                        The team checks what can be imported and edits or
                        restructures supported data where needed.
                    </p>

                </div>

            </article>


            <!-- STEP 04 -->

            <article
                class="wb-migration-process__mobile-step"
                data-mobile-step="3">

                <div class="wb-migration-process__mobile-number">
                    04
                </div>

                <div class="wb-migration-process__mobile-card">

                    <span class="wb-migration-process__mobile-label">
                        Step 04
                    </span>

                    <h3>We import the supported records</h3>

                    <p>
                        The prepared information is imported into the
                        Wunderbuild account.
                    </p>

                </div>

            </article>


            <!-- STEP 05 -->

            <article
                class="wb-migration-process__mobile-step"
                data-mobile-step="4">

                <div class="wb-migration-process__mobile-number">
                    05
                </div>

                <div class="wb-migration-process__mobile-card">

                    <span class="wb-migration-process__mobile-label">
                        Step 05
                    </span>

                    <h3>You check the result</h3>

                    <p>
                        Review the imported records and request any
                        necessary adjustments.
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>

<section class="support">

    <div class="wrap">

        <div class="section-head center" style="margin-left:auto;margin-right:auto;">



            <h2>You're not left to figure it out alone.</h2>

            <p>Wunderbuild comes with demos, training, and ongoing support, so your team can work through the software with people who know the product and the building process.</p>

        </div>


        <div class="support-grid">

            <!-- 01 -->
            <div class="support-card">
                <span class="ic">
                    <img decoding="async"
                        src="https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/svgviewer-png-output.svg"
                        alt="">
                </span>

                <h4>Contacts and leads</h4>

                <p>
                    Client, supplier, and subcontractor contacts, plus the leads
                    the team still needs to follow.
                </p>
            </div>


            <!-- 02 -->
            <div class="support-card">
                <span class="ic">
                    <img decoding="async"
                        src="https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/svgviewer-png-output-1.svg"
                        alt="">
                </span>

                <h4>Estimates and costings</h4>

                <p>
                    Estimates, estimation costings, actual costings, price lists,
                    and assemblies where the supplied data is supported.
                </p>
            </div>


            <!-- 03 -->
            <div class="support-card">
                <span class="ic">
                    <img decoding="async"
                        src="https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/svgviewer-png-output-2.svg"
                        alt="">
                </span>

                <h4>Jobs, schedules, and timesheets</h4>

                <p>
                    Active or historical job information, schedules, and timesheet
                    records where appropriate.
                </p>
            </div>


            <!-- 04 -->
            <div class="support-card">
                <span class="ic">
                    <img decoding="async"
                        src="https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/svgviewer-png-output-2.svg"
                        alt="">
                </span>

                <h4>Business setup</h4>

                <p>
                    Cost codes and other supported records that help rebuild the
                    working structure inside Wunderbuild.
                </p>
            </div>


            <!-- 05 -->
            <div class="support-card">
                <span class="ic">
                    <img decoding="async"
                        src="https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/svgviewer-png-output-2.svg"
                        alt="">
                </span>

                <h4>Reusable templates</h4>

                <p>
                    Estimate, schedule, specification, checklist, and email
                    templates.
                </p>
            </div>


            <!-- 06 -->
            <div class="support-card">
                <span class="ic">
                    <img decoding="async"
                        src="https://staging.wunderbuild.com.au/wp-content/uploads/2026/08/svgviewer-png-output-2.svg"
                        alt="">
                </span>

                <h4>Supported Xero bills</h4>

                <p>
                    Supported payable invoice, credit, and allocation records
                    confirmed during the file review.
                </p>
            </div>

        </div>

    </div>

</section>

<section class="wb-migration-limits">

    <div class="wrap">

        <div class="wb-migration-limits__head">

            <h2>
                Know what can and cannot move
                <span>before the import begins.</span>
            </h2>

        </div>


        <div class="wb-migration-limits__grid">

            <!-- Card 01 -->
            <article class="wb-migration-limit-card wb-limit-peach">

                <div class="wb-migration-limit-card__top">

                 

                    <span class="wb-migration-limit-card__icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <rect x="7" y="4" width="18" height="24" rx="2"
                                stroke="#1d1c1b" stroke-width="1.8" />
                            <path d="M11 10H21M11 15H21M11 20H17"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round" />
                            <path d="M20 4V8H25"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>

                </div>

                <h3>
                    Job-specific documents
                </h3>

                <p>
                    Job-specific documents are not currently part of the
                    standard import process. Non-job-specific files may be
                    stored as templates where appropriate.
                </p>

            </article>


            <!-- Card 02 -->
            <article class="wb-migration-limit-card wb-limit-indigo">

                <div class="wb-migration-limit-card__top">

                 
                    <span class="wb-migration-limit-card__icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <rect x="5" y="7" width="22" height="18" rx="3"
                                stroke="#1d1c1b" stroke-width="1.8" />
                            <path d="M5 12H27"
                                stroke="#1d1c1b" stroke-width="1.8" />
                            <path d="M10 17H22M10 21H17"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round" />
                            <circle cx="22" cy="21" r="2"
                                stroke="#1d1c1b" stroke-width="1.5" />
                        </svg>
                    </span>

                </div>

                <h3>
                    Accounting data
                </h3>

                <p>
                    Accounting migration is limited to supported Xero
                    payable records. It is not a full accounting-history
                    migration.
                </p>

            </article>


            <!-- Card 03 -->
            <article class="wb-migration-limit-card wb-limit-coral">

                <div class="wb-migration-limit-card__top">

                  
                    <span class="wb-migration-limit-card__icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M8 16A8 8 0 0 1 22 10"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round" />
                            <path d="M22 10V6M22 10H18"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M24 16A8 8 0 0 1 10 22"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round" />
                            <path d="M10 22V26M10 22H14"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>

                </div>

                <h3>
                    Live-job updates
                </h3>

                <p>
                    Changes made in the old system after the export don't
                    update automatically in Wunderbuild.
                </p>

            </article>


            <!-- Card 04 -->
            <article class="wb-migration-limit-card wb-limit-lime">

                <div class="wb-migration-limit-card__top">

                   

                    <span class="wb-migration-limit-card__icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M16 5V27"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round" />
                            <path d="M10 11L16 5L22 11"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 21L16 27L22 21"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6 16H26"
                                stroke="#1d1c1b" stroke-width="1.8"
                                stroke-linecap="round" />
                        </svg>
                    </span>

                </div>

                <h3>
                    Start fresh where it is clearer
                </h3>

                <p>
                    Some builders keep existing jobs in the previous system
                    and begin all new work in Wunderbuild.
                </p>

            </article>

        </div>

    </div>

</section>

<section class="wb-timing-section">

    <div class="wb-timing-inner">

        <!-- Heading -->
        <div class="wb-timing-heading">

            <h2>
                The timing depends on
                <span>the files being moved.</span>
            </h2>

            <p>
                A smaller, well-prepared migration may take a few hours or days.
                Larger or more complex migrations may take up to around two weeks.
                The onboarding team confirms the likely timing after reviewing the
                number of files, the condition of the data, and the current queue.
            </p>
        </div>


        <!-- Main Content -->
        <div class="wb-timing-layout">


            <!-- LEFT : TIME VISUAL -->
            <div class="wb-timing-visual">

                <div class="wb-timing-visual-top">
                    <span>EXPECTED WINDOW</span>
                    <span>01</span>
                </div>

                <div class="wb-timing-clock">

                    <div class="wb-clock-ring wb-clock-ring-outer"></div>
                    <div class="wb-clock-ring wb-clock-ring-middle"></div>

                    <div class="wb-clock-center">
                        <strong>~2</strong>
                        <span>weeks max.</span>
                    </div>

                    <span class="wb-clock-dot dot-1"></span>
                    <span class="wb-clock-dot dot-2"></span>
                    <span class="wb-clock-dot dot-3"></span>
                    <span class="wb-clock-dot dot-4"></span>

                </div>

                <div class="wb-timing-visual-bottom">

                    <div>
                        <strong>Hours</strong>
                        <span>Smaller migrations</span>
                    </div>

                    <div>
                        <strong>Days</strong>
                        <span>Well-prepared files</span>
                    </div>

                    <div>
                        <strong>~2 weeks</strong>
                        <span>Larger migrations</span>
                    </div>

                </div>

            </div>


            <!-- RIGHT : FEATURES -->
            <div class="wb-timing-features">


                <!-- FEATURE 01 -->
                <article class="wb-timing-feature">

                   

                    <div class="wb-timing-feature-icon wb-icon-lime">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 3v12"></path>
                            <path d="m7 10 5 5 5-5"></path>
                            <path d="M5 21h14"></path>
                        </svg>
                    </div>

                    <div class="wb-timing-feature-content">

                        <span>INCLUDED SUPPORT</span>

                        <h3>
                            Migration support is included
                        </h3>

                        <p>
                            Preparation and importing of supported records are
                            included in the subscription and can begin during
                            the trial.
                        </p>

                    </div>

                    <div class="wb-feature-arrow">
                        ↗
                    </div>

                </article>


                <!-- FEATURE 02 -->
                <article class="wb-timing-feature">

                    

                    <div class="wb-timing-feature-icon wb-icon-indigo">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="8"></circle>
                            <path d="M12 8v4l3 2"></path>
                        </svg>
                    </div>

                    <div class="wb-timing-feature-content">

                        <span>TRANSITION PERIOD</span>

                        <h3>
                            Both systems can run during the change
                        </h3>

                        <p>
                            Customers may continue using the previous system
                            alongside Wunderbuild while the account is prepared.
                        </p>

                    </div>

                    <div class="wb-feature-arrow">
                        ↗
                    </div>

                </article>


                <!-- SMALL NOTE -->
                <div class="wb-timing-note">

                    <span class="wb-note-mark">i</span>

                    <p>
                        Timing isn't guaranteed. The onboarding team confirms
                        the likely window after reviewing your files and the
                        current migration queue.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="wb-handover">

    <div class="wb-handover__overlay"></div>

    <div class="wb-handover__inner">

        <div class="wb-handover__content">

            

            <h2>
                Once the records are in,
                <span>the team can take over.</span>
            </h2>

            <p>
                Migration gets the supported information into the account.
                Training and ongoing support then help the wider team
                understand how to work with it.
            </p>

            <a href="/why-wunderbuild/support-and-onboarding"
               class="btn btn-primary">

                Explore support and onboarding
            </a>

        </div>

    </div>

</section>

<section class="switching-cta">

    <div class="wrap">

        <div class="switching-cta-inner">

            <div class="switching-cta-content">

                <span class="eyebrow">
                    Switching to Wunderbuild
                </span>

                <h2>
                    Need to bring existing
                    <span>information across first?</span>
                </h2>

                <p>
                    The Data Migration Team can review, prepare, and import
                    supported records from the system or files you use now.
                </p>

            </div>

            <div class="btn btn-dark">

                <a
                    href="/why-wunderbuild/switching-to-wunderbuild"
                    class="switching-btn">
                    Explore switching to Wunderbuild
                    <span>→</span>
                </a>

            </div>

        </div>

    </div>

</section>







