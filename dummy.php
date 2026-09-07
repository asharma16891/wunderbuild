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
