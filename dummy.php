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