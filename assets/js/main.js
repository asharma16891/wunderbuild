document.addEventListener('DOMContentLoaded', function () {
  const menuLinks = document.querySelectorAll('a[href="#"]');

  menuLinks.forEach(function (link) {
    link.removeAttribute('href');
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const header = document.getElementById("siteHeader");
  const hero = document.querySelector(".hero");
  const Secondhero = document.querySelector(".pricing-selector");
  const thirdhero = document.querySelector(".wb-migration-hero");
  const fourthHero = document.querySelector(".wb-events-controls")
  const fifthHero = document.querySelector(".wb-article-breadcrumbs")

  function updateHeader() {
    // Keep header scrolled for solid background/gradient hero
    if (hero && hero.classList.contains("hero--gradient")) {
      header.classList.add("scrolled");
      return;
    }

    // Keep header scrolled for solid background/gradient hero
    if (Secondhero) {
      header.classList.add("scrolled");
      return;
    }
    if (thirdhero) {
      header.classList.add("scrolled");
      return;
    }
    if (fourthHero) {
      header.classList.add("scrolled");
      return;
    }
     if (fifthHero) {
      header.classList.add("scrolled");
      return;
    }

    // Normal behavior for image/video heroes
    header.classList.toggle("scrolled", window.scrollY > 40);
  }

  // Initial state
  updateHeader();

  // Scroll event
  window.addEventListener("scroll", updateHeader);

  // Mobile Menu
  const mobileToggle = document.querySelector(".mobile-toggle");
  const navLinks = document.querySelector(".nav-links");
  const navActions = document.querySelector(".nav-actions");

  if (mobileToggle && navLinks && navActions) {
    mobileToggle.addEventListener("click", function () {
      const isOpen = mobileToggle.classList.toggle("active");

      navLinks.classList.toggle("mobile-menu-open", isOpen);
      navActions.classList.toggle("mobile-menu-open", isOpen);

      header.classList.toggle("mobile-menu-open", isOpen);

      mobileToggle.setAttribute("aria-expanded", isOpen);
      mobileToggle.setAttribute(
        "aria-label",
        isOpen ? "Close menu" : "Open menu",
      );
    });
  }
});

// Product showcase tabs
(() => {
  const showcase = document.getElementById("showcase");
  if (!showcase) return;

  const tabs = [...showcase.querySelectorAll(".tab-btn")];
  const panels = [...showcase.querySelectorAll(".tab-panel")];

  const total = tabs.length;
  if (!total) return;

  let currentIndex = 0;
  let isAnimating = false;

  function render(index) {
    currentIndex = index;

    tabs.forEach((tab, i) => {
      tab.classList.toggle("active", i === index);
    });

    panels.forEach((panel, i) => {
      panel.classList.toggle("active", i === index);
    });
  }

  // function getTargetScroll(index) {
  //   const rect = showcase.getBoundingClientRect();
  //   const start = window.scrollY + rect.top;
  //   const scrollArea = showcase.offsetHeight - window.innerHeight;

  //   return start + (scrollArea / total) * index;
  // }
  function getTargetScroll(index) {
    const rect = showcase.getBoundingClientRect();
    const start = window.scrollY + rect.top;

    const scrollArea = showcase.offsetHeight - window.innerHeight;

    return start + (scrollArea / (total - 1)) * index;
  }

  function isPinned() {
    const rect = showcase.getBoundingClientRect();

    return rect.top <= 100 && rect.bottom >= window.innerHeight;
  }

  function goTo(index) {
    index = Math.max(0, Math.min(index, total - 1));

    if (index === currentIndex) return;

    isAnimating = true;

    render(index);

    window.scrollTo({
      top: getTargetScroll(index),
      behavior: "smooth",
    });

    setTimeout(() => {
      isAnimating = false;
    }, 700);
  }

  window.addEventListener(
    "wheel",
    function (e) {
      if (window.innerWidth <= 900) return;

      if (!isPinned()) return;

      if (isAnimating) {
        e.preventDefault();
        return;
      }

      if (e.deltaY > 25) {
        if (currentIndex < total - 1) {
          e.preventDefault();
          goTo(currentIndex + 1);
        }
      } else if (e.deltaY < -25) {
        if (currentIndex > 0) {
          e.preventDefault();
          goTo(currentIndex - 1);
        }
      }
    },
    { passive: false },
  );

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
      if (window.innerWidth <= 900) {
        render(index);
        return;
      }

      goTo(index);
    });
  });

  render(0);
})();

// Process path: fill grows and the active step updates as you scroll through the section
// Process Timeline
const pathContainer = document.getElementById("processPath");
const pathRows = document.querySelectorAll(".p-row");
const pathFill = document.getElementById("pathFill");

// Only run timeline JS if elements exist on the page
if (pathContainer && pathFill && pathRows.length) {
  let ticking = false;

  function updatePathOnScroll() {
    const rect = pathContainer.getBoundingClientRect();
    const viewportH = window.innerHeight;
    const raw = (viewportH / 2 - rect.top) / rect.height;
    const progress = Math.min(1, Math.max(0, raw));

    pathFill.style.height = progress * 100 + "%";

    const activeIndex = Math.min(
      pathRows.length - 1,
      Math.floor(progress * pathRows.length),
    );

    pathRows.forEach((r, i) => {
      r.classList.toggle("active", i === activeIndex);
    });

    ticking = false;
  }

  function onScroll() {
    if (!ticking) {
      requestAnimationFrame(updatePathOnScroll);
      ticking = true;
    }
  }

  window.addEventListener("scroll", onScroll, { passive: true });
  window.addEventListener("resize", onScroll);

  updatePathOnScroll();

  pathRows.forEach((row, index) => {
    row.addEventListener("mouseenter", () => {
      pathRows.forEach((r, i) => {
        r.classList.toggle("active", i === index);
      });

      pathFill.style.height = ((index + 1) / pathRows.length) * 100 + "%";
    });
  });
}

// Testimonials slider
(function () {
  const track = document.getElementById("tTrack");

  // Stop if testimonial slider doesn't exist on this page
  if (!track) return;

  const slides = track.querySelectorAll(".t-slide");
  const dotsWrap = document.getElementById("tDots");
  const prevBtn = document.getElementById("tPrev");
  const nextBtn = document.getElementById("tNext");
  const sliderWrap = document.querySelector(".t-slider-wrap");

  // Extra safety check
  if (!slides.length || !dotsWrap || !prevBtn || !nextBtn) return;

  let index = 0;
  let autoplay;

  slides.forEach((_, i) => {
    const dot = document.createElement("button");

    dot.className = "t-dot" + (i === 0 ? " active" : "");
    dot.setAttribute("aria-label", "Go to testimonial " + (i + 1));

    dot.addEventListener("click", () => goTo(i));

    dotsWrap.appendChild(dot);
  });

  const dots = dotsWrap.querySelectorAll(".t-dot");

  function goTo(i) {
    index = (i + slides.length) % slides.length;

    track.style.transform = "translateX(-" + index * 100 + "%)";

    dots.forEach((d, di) => {
      d.classList.toggle("active", di === index);
    });

    restartAutoplay();
  }

  function restartAutoplay() {
    clearInterval(autoplay);

    autoplay = setInterval(() => {
      goTo(index + 1);
    }, 6000);
  }

  prevBtn.addEventListener("click", () => {
    goTo(index - 1);
  });

  nextBtn.addEventListener("click", () => {
    goTo(index + 1);
  });

  // Swipe support
  let startX = null;

  track.addEventListener(
    "touchstart",
    (e) => {
      startX = e.touches[0].clientX;
    },
    { passive: true },
  );

  track.addEventListener("touchend", (e) => {
    if (startX === null) return;

    const dx = e.changedTouches[0].clientX - startX;

    if (dx > 40) {
      goTo(index - 1);
    } else if (dx < -40) {
      goTo(index + 1);
    }

    startX = null;
  });

  if (sliderWrap) {
    sliderWrap.addEventListener("mouseenter", () => {
      clearInterval(autoplay);
    });

    sliderWrap.addEventListener("mouseleave", restartAutoplay);
  }

  restartAutoplay();
})();

/* =========================================================
   FAQ ACCORDION
========================================================= */

document.addEventListener("DOMContentLoaded", function () {
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach(function (item) {
    const question = item.querySelector(".faq-question");

    question.addEventListener("click", function () {
      const isActive = item.classList.contains("active");

      // Close all FAQs
      faqItems.forEach(function (faq) {
        faq.classList.remove("active");
      });

      // Open clicked FAQ
      if (!isActive) {
        item.classList.add("active");
      }
    });
  });
});

/* =========================================================
   Inner pages dots action scroll
========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

  ScrollTrigger.matchMedia({
    // Desktop only
    "(min-width: 801px)": function () {
      const header = document.querySelector("header");
      const headerHeight = header ? header.offsetHeight : 100;
      const GAP = 20;

      document.querySelectorAll(".workflow-map").forEach((wrapper) => {
        const section = wrapper.querySelector(".hs-grid");
        if (!section) return;

        const dots = gsap.utils.toArray(wrapper.querySelectorAll(".hs-dot"));
        const cards = gsap.utils.toArray(wrapper.querySelectorAll(".hs-card"));

        if (!dots.length) return;

        const STEP_HEIGHT = window.innerHeight * 1.8;

        let current = -1;
        let clickMode = false;

        dots.forEach((dot) => dot.classList.remove("active", "next"));
        cards.forEach((card) => card.classList.remove("show"));

        function activate(index) {
          current = index;

          dots.forEach((dot, i) => {
            dot.classList.remove("active", "next");

            if (i === index) {
              dot.classList.add("active");
            } else if (i === index + 1) {
              dot.classList.add("next");
            }
          });

          cards.forEach((card, i) => {
            card.classList.remove("show");

            if (i === index) {
              card.classList.add("show");
            }
          });
        }

        const trigger = ScrollTrigger.create({
          trigger: section,

          start: `top top+=${headerHeight + GAP}`,

          end: "+=" + (dots.length - 1) * STEP_HEIGHT,

          pin: true,

          pinSpacing: true,

          scrub: 2,

          anticipatePin: 1,

          snap: {
            snapTo(value) {
              const total = dots.length - 1;
              return Math.round(value * total) / total;
            },
            duration: 0.8,
            ease: "power2.inOut",
            inertia: false,
          },

          onUpdate(self) {
            if (clickMode) return;

            const distance = self.scroll() - self.start;

            let index = Math.floor(
              (distance + STEP_HEIGHT * 0.5) / STEP_HEIGHT,
            );

            index = gsap.utils.clamp(0, dots.length - 1, index);

            if (index !== current) {
              activate(index);
            }
          },
        });

        dots.forEach((dot, index) => {
          dot.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            clickMode = true;

            activate(index);

            gsap.to(window, {
              scrollTo: {
                y: trigger.start + index * STEP_HEIGHT,
                autoKill: false,
              },

              duration: 0.8,

              ease: "power2.inOut",

              onComplete() {
                clickMode = false;
              },
            });
          });
        });
      });

      ScrollTrigger.refresh();
    },

    // Mobile (800px and below)
    "(max-width: 800px)": function () {
      ScrollTrigger.getAll().forEach((trigger) => trigger.kill());

      document.querySelectorAll(".hs-dot").forEach((dot) => {
        dot.classList.remove("active", "next");
      });

      document.querySelectorAll(".hs-card").forEach((card) => {
        card.classList.remove("show");
      });
    },
  });
});

document.addEventListener("DOMContentLoaded", () => {
  // no index-checking needed — CSS above already decides WHICH
  // sections get the effect. This just decides WHEN (in view or not).
  document.querySelectorAll(".hs-visual").forEach((visual) => {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          visual.classList.toggle("zoom-in", entry.isIntersecting);
        });
      },
      { threshold: 0.2 },
    );

    io.observe(visual);
  });

  document.querySelectorAll(".workflow-map").forEach((section, index) => {
    if (index === 1) {
      section.classList.add("workflow-second");
    }

    if (index === 2) {
      section.classList.add("workflow-third");
    }
  });
});

/* =========================================================
   Inner pages dots action scroll end here
========================================================= */

// ============================================================
// Entrance fade for the 2nd/3rd repeated .workflow-map only.
// ============================================================

document.addEventListener("DOMContentLoaded", function () {
  const animatedItems = document.querySelectorAll(
    ".optA .stage-card, .optA .shot, .optA .node",
  );

  if (!animatedItems.length) return;

  const observer = new IntersectionObserver(
    function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");

          // Animate only once
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.15,
      rootMargin: "0px 0px -80px 0px",
    },
  );

  animatedItems.forEach(function (item) {
    observer.observe(item);
  });
  if (window.innerWidth <= 820) {
    const cards = document.querySelectorAll(".optA .stage-card");

    cards.forEach(function (card, index) {
      const button = card.querySelector(".stage-toggle");
      const image = card.parentElement.querySelector(".shot");

      // // first item open
      // if (index === 0) {
      //     card.classList.add('active');
      //     if (image) {
      //         image.classList.add('active');
      //     }
      // }

      button.addEventListener("click", function () {
        const opened = card.classList.contains("active");

        cards.forEach(function (c) {
          c.classList.remove("active");

          const img = c.parentElement.querySelector(".shot");

          if (img) {
            img.classList.remove("active");
          }
        });

        if (!opened) {
          card.classList.add("active");

          if (image) {
            image.classList.add("active");
          }
        }
      });
    });
  }
});

document.querySelectorAll(".menu-item-has-children").forEach((item) => {
  item.insertAdjacentHTML(
    "beforeend",
    `
        <button class="submenu-toggle" type="button" aria-label="Toggle submenu">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 9L12 15L18 9"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>
        </button>
        `,
  );
});

document.querySelectorAll(".submenu-toggle").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();

    const parent = this.closest(".menu-item-has-children");
    parent.classList.toggle("open");
  });
});

document.addEventListener("click", function (e) {
  // ---- PLAY ----
  const cover = e.target.closest(".video-cover");
  if (cover) {
    const embed = cover.nextElementSibling;
    if (!embed || !embed.classList.contains("video-embed")) return;

    playEmbed(embed);
    cover.style.display = "none";
    embed.style.display = "block";
    return;
  }

  // ---- STOP / PAUSE ----
  const stopBtn = e.target.closest(".video-stop-btn");
  if (stopBtn) {
    const embed = stopBtn.closest(".video-embed");
    const cover = embed?.previousElementSibling;
    if (!embed) return;

    stopEmbed(embed);
    embed.style.display = "none";
    if (cover && cover.classList.contains("video-cover")) {
      cover.style.display = "block";
    }
  }
});

function playEmbed(embed) {
  // only build the iframe the first time this video is played
  if (!embed.dataset.built) {
    const rawHtml = embed.dataset.embedSrc || "";
    embed.innerHTML = rawHtml;
    embed.dataset.built = "1";
  }

  const iframe = embed.querySelector("iframe");
  if (!iframe) return;

  let src = iframe.getAttribute("src") || "";
  src = addAutoplayParam(src);
  iframe.setAttribute("src", src);
  iframe.setAttribute("allow", "autoplay; fullscreen; picture-in-picture");

  // add the custom stop button once
  if (!embed.querySelector(".video-stop-btn")) {
    const btn = document.createElement("button");
    btn.className = "video-stop-btn";
    btn.type = "button";
    btn.setAttribute("aria-label", "Stop video");
    btn.innerHTML =
      '<svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>';
    embed.appendChild(btn);
  }
}

function stopEmbed(embed) {
  const iframe = embed.querySelector("iframe");
  if (!iframe) return;

  // this is the important part — YouTube/Vimeo iframes keep playing
  // (audio included) even when display:none is applied to a parent.
  // The only reliable way to actually stop playback is to clear the
  // src, which unloads the player entirely.
  const src = iframe.getAttribute("src");
  iframe.setAttribute("src", "");

  // rebuild fresh next time "play" is clicked
  embed.dataset.built = "";
  embed.innerHTML = "";
}

function addAutoplayParam(src) {
  if (!src) return src;

  const separator = src.includes("?") ? "&" : "?";

  if (src.includes("youtube.com") || src.includes("youtu.be")) {
    return src + separator + "autoplay=1&mute=0&enablejsapi=1";
  }

  if (src.includes("vimeo.com")) {
    return src + separator + "autoplay=1";
  }

  // unknown provider — leave as-is, cover/play button still worked,
  // the provider's own player controls will still show
  return src;
}

// section zooom in effect

if (typeof gsap !== "undefined") {
  gsap.registerPlugin(ScrollTrigger);
}

document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".workflow-item");

  const dots = document.querySelectorAll(".workflow-dot");

  const cards = document.querySelectorAll(".workflow-card");

  const path = document.querySelector("#workflow-path");

  if (!path || !items.length || !dots.length || !cards.length) {
    return;
  }

  /*--------------------------
Initial State
---------------------------*/

  gsap.set(cards, {
    opacity: 0,
    y: 60,
    scale: 0.92,
  });

  /* SVG Line */

  const length = path.getTotalLength();

  path.style.strokeDasharray = length;

  path.style.strokeDashoffset = length;

  /*--------------------------
Draw SVG
---------------------------*/

  gsap.to(path, {
    strokeDashoffset: 0,

    ease: "power2.out",

    duration: 2,

    scrollTrigger: {
      trigger: ".pricing-workflow",

      start: "top 70%",
    },
  });

  /*--------------------------
Cards Animation
---------------------------*/

  cards.forEach((card, index) => {
    gsap.to(card, {
      opacity: 1,

      y: 0,

      scale: 1,

      duration: 0.7,

      ease: "power3.out",

      delay: index * 0.15,

      scrollTrigger: {
        trigger: card,

        start: "top 82%",
      },
    });
  });

  /*--------------------------
Dots Animation
---------------------------*/

  dots.forEach((dot, index) => {
    gsap.from(dot, {
      scale: 0,

      duration: 0.5,

      delay: index * 0.18,

      ease: "back.out(2)",

      scrollTrigger: {
        trigger: dot,

        start: "top 82%",
      },
    });
  });

  /*--------------------------
Active Dot
---------------------------*/

  function activate(index) {
    items.forEach((item) => item.classList.remove("active"));

    dots.forEach((dot) => dot.classList.remove("active"));

    items[index].classList.add("active");

    dots[index].classList.add("active");
  }

  /*--------------------------
Scroll Active
---------------------------*/

  items.forEach((item, index) => {
    ScrollTrigger.create({
      trigger: item,

      start: "top center",

      end: "bottom center",

      onEnter() {
        activate(index);
      },

      onEnterBack() {
        activate(index);
      },
    });
  });

  /*--------------------------
Click Dot
---------------------------*/

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      activate(index);

      gsap.to(window, {
        duration: 1,

        scrollTo: {
          y: items[index],

          offsetY: 150,
        },

        ease: "power2.out",
      });
    });
  });

  /*--------------------------
Hover Animation
---------------------------*/

  cards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
      gsap.to(card, {
        y: -12,

        duration: 0.3,
      });
    });

    card.addEventListener("mouseleave", () => {
      gsap.to(card, {
        y: 0,

        duration: 0.3,
      });
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".job-btn");
  const pricingGrids = document.querySelectorAll(".pricing-grid");
  const billingToggle = document.querySelector(".billing-toggle");
  const header = document.querySelector("header");

  const headerHeight = header ? header.offsetHeight : 90;

  function getActiveGrid() {
    return document.querySelector(".pricing-grid.active");
  }

  function updatePricingCard(plan) {
    const activeGrid = getActiveGrid();

    if (!activeGrid) {
      return;
    }

    const cards = activeGrid.querySelectorAll(".pricing-card");

    cards.forEach((card) => {
      if (card.dataset.plan === plan) {
        card.classList.add("active");
      } else {
        card.classList.remove("active");
      }
    });
  }

  // Job Tabs
  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const plan = button.dataset.plan;

      buttons.forEach((btn) => {
        btn.classList.remove("active");
      });

      button.classList.add("active");

      // First update the selected card
      updatePricingCard(plan);

      const activeGrid = getActiveGrid();

      if (activeGrid) {
        // Find the selected card inside the active pricing grid
        const selectedCard = activeGrid.querySelector(
          `.pricing-card[data-plan="${plan}"]`
        );

        if (selectedCard) {
          const top =
            selectedCard.getBoundingClientRect().top +
            window.pageYOffset -
            headerHeight -
            20;

          window.scrollTo({
            top: top,
            behavior: "smooth",
          });
        }
      }
    });
  });

  // Monthly / Annual Toggle
  if (billingToggle) {
    billingToggle.addEventListener("click", () => {
      const isAnnual = billingToggle.classList.toggle("annual");

      billingToggle.setAttribute("aria-pressed", isAnnual ? "true" : "false");

      pricingGrids.forEach((grid) => {
        const billingType = grid.dataset.billing;

        if (isAnnual && billingType === "annual") {
          grid.classList.add("active");
        } else if (!isAnnual && billingType === "monthly") {
          grid.classList.add("active");
        } else {
          grid.classList.remove("active");
        }
      });

      // Get currently selected job tab
      const activeButton = document.querySelector(".job-btn.active");

      // Update cards based on active job tab
      if (activeButton) {
        updatePricingCard(activeButton.dataset.plan);
      }
    });
  }
});

// //////////////////////////////////////// scroll on switch to wunderland page js

document.addEventListener("DOMContentLoaded", function () {
  const migrationSections = document.querySelectorAll(".wb-migration-process");

  migrationSections.forEach(function (section) {
    /*
    ========================================
    ELEMENTS
    ========================================
    */

    const steps = section.querySelectorAll(".wb-migration-process__step");

    const mobileSteps = section.querySelectorAll(
      ".wb-migration-process__mobile-step",
    );

    const desktopCards = section.querySelectorAll(
      ".wb-migration-process__desktop-card",
    );

    const scrollTrack = section.querySelector(
      ".wb-migration-process__scroll-track",
    );

    const trackFill = section.querySelector(
      ".wb-migration-process__track-fill",
    );

    const mobileLineFill = section.querySelector(
      ".wb-migration-process__mobile-line-fill",
    );

    /*
    ========================================
    BASIC CHECK
    ========================================
    */

    if (!steps.length) {
      return;
    }

    /*
    ========================================
    STATE
    ========================================
    */

    let currentStep = 0;

    let isAnimating = false;

    let animationTimer = null;

    /*
     * IMPORTANT
     *
     * This prevents the first wheel event
     * which makes the section sticky from
     * changing Step 01 -> Step 02.
     */
    let stickyEntryHandled = false;

    /*
     * Prevent repeated wheel events from
     * one trackpad gesture.
     */
    let wheelCooldown = false;

    let wheelCooldownTimer = null;

    /*
    ========================================
    UPDATE STEP
    ========================================
    */

    function updateStep(stepIndex) {
      stepIndex = Number(stepIndex);

      stepIndex = Math.max(0, Math.min(stepIndex, steps.length - 1));

      currentStep = stepIndex;

      /*
      ----------------------------------------
      DESKTOP STEPS
      ----------------------------------------
      */

      steps.forEach(function (step) {
        const isActive = Number(step.dataset.step) === stepIndex;

        step.classList.toggle("is-active", isActive);

        step.setAttribute("aria-selected", isActive ? "true" : "false");
      });

      /*
      ----------------------------------------
      DESKTOP CARDS
      ----------------------------------------
      */

      desktopCards.forEach(function (card) {
        const isActive = Number(card.dataset.stepContent) === stepIndex;

        card.classList.toggle("is-active", isActive);
      });

      /*
      ----------------------------------------
      MOBILE STEPS
      ----------------------------------------
      */

      mobileSteps.forEach(function (mobileStep) {
        const isActive = Number(mobileStep.dataset.mobileStep) === stepIndex;

        mobileStep.classList.toggle("is-active", isActive);
      });

      /*
      ----------------------------------------
      DESKTOP PROGRESS
      ----------------------------------------
      */

      if (trackFill && steps.length > 1) {
        const progress = (stepIndex / (steps.length - 1)) * 100;

        trackFill.style.width = progress + "%";
      }

      /*
      ----------------------------------------
      MOBILE PROGRESS
      ----------------------------------------
      */

      if (mobileLineFill && mobileSteps.length > 1) {
        const progress = (stepIndex / (mobileSteps.length - 1)) * 100;

        mobileLineFill.style.height = progress + "%";
      }
    }

    /*
    ========================================
    GET TRACK POSITION
    ========================================
    */

    function getTrackInfo() {
      if (!scrollTrack) {
        return null;
      }

      const rect = scrollTrack.getBoundingClientRect();

      const viewportHeight = window.innerHeight;

      return {
        rect: rect,
        viewportHeight: viewportHeight,
      };
    }

    /*
    ========================================
    CHECK IF SECTION HAS REACHED STICKY
    ========================================
    */

    function isStickyPosition() {
      const info = getTrackInfo();

      if (!info) {
        return false;
      }

      /*
       * Your sticky desktop element uses
       * approximately header height.
       *
       * We intentionally use a slightly
       * generous threshold here so the
       * first wheel event isn't treated
       * as Step 02.
       */

      const stickyPoint = 120;

      return info.rect.top <= stickyPoint;
    }

    /*
    ========================================
    IS SECTION CURRENTLY IN CONTROL AREA?
    ========================================
    */

    function isSectionActive() {
      if (window.innerWidth < 768) {
        return false;
      }

      if (!scrollTrack) {
        return false;
      }

      const info = getTrackInfo();

      if (!info) {
        return false;
      }

      const rect = info.rect;

      const viewportHeight = info.viewportHeight;

      /*
      Section must have reached
      the sticky area.
      */

      const hasReachedSticky = rect.top <= 120;

      /*
      Track must still have
      remaining scroll distance.
      */

      const hasRemainingTrack = rect.bottom > viewportHeight;

      return hasReachedSticky && hasRemainingTrack;
    }

    /*
    ========================================
    GET STEP POSITION
    ========================================
    */

    function getStepScrollPosition(stepIndex) {
      if (!scrollTrack) {
        return null;
      }

      const rect = scrollTrack.getBoundingClientRect();

      /*
      Absolute document position
      */

      const trackTop = rect.top + window.scrollY;

      /*
      Total scroll distance
      */

      const scrollDistance = scrollTrack.offsetHeight - window.innerHeight;

      if (scrollDistance <= 0) {
        return trackTop;
      }

      /*
      Divide scroll area equally
      between steps.
      */

      const progress = stepIndex / (steps.length - 1);

      return trackTop + scrollDistance * progress;
    }

    /*
    ========================================
    MOVE ONE STEP
    ========================================
    */

    function moveToStep(stepIndex) {
      if (isAnimating || !scrollTrack) {
        return;
      }

      stepIndex = Math.max(0, Math.min(stepIndex, steps.length - 1));

      if (stepIndex === currentStep) {
        return;
      }

      const target = getStepScrollPosition(stepIndex);

      if (target === null) {
        return;
      }

      /*
      Lock animation
      */

      isAnimating = true;

      /*
      Update UI
      */

      updateStep(stepIndex);

      /*
      Smooth movement
      */

      window.scrollTo({
        top: target,
        behavior: "smooth",
      });

      /*
      Unlock
      */

      clearTimeout(animationTimer);

      animationTimer = setTimeout(function () {
        isAnimating = false;
      }, 700);
    }

    /*
    ========================================
    HANDLE WHEEL
    ========================================
    */

    function handleWheel(event) {
      /*
      Desktop only
      */

      if (window.innerWidth < 768) {
        return;
      }

      if (!scrollTrack || steps.length < 2) {
        return;
      }

      /*
      ----------------------------------------
      FIRST IMPORTANT CHECK
      ----------------------------------------

      If section has NOT reached sticky
      position yet, DO NOTHING.

      Browser must be allowed to naturally
      scroll the section into position.
      */

      if (!isStickyPosition()) {
        return;
      }

      /*
      ----------------------------------------
      SECTION CONTROL AREA
      ----------------------------------------
      */

      if (!isSectionActive()) {
        return;
      }

      /*
      ----------------------------------------
      IGNORE ANIMATION WHEEL EVENTS
      ----------------------------------------
      */

      if (isAnimating) {
        event.preventDefault();
        return;
      }

      /*
      ----------------------------------------
      IGNORE SAME WHEEL GESTURE
      ----------------------------------------
      */

      if (wheelCooldown) {
        event.preventDefault();
        return;
      }

      /*
      Ignore tiny trackpad movement
      */

      if (Math.abs(event.deltaY) < 4) {
        return;
      }

      /*
      ======================================
      DOWN
      ======================================
      */

      if (event.deltaY > 0) {
        /*
        If there is another step
        */

        if (currentStep < steps.length - 1) {
          event.preventDefault();

          wheelCooldown = true;

          moveToStep(currentStep + 1);

          /*
          Wait for wheel gesture to finish
          */

          clearTimeout(wheelCooldownTimer);

          wheelCooldownTimer = setTimeout(function () {
            wheelCooldown = false;
          }, 550);
        }

        return;
      }

      /*
      ======================================
      UP
      ======================================
      */

      if (event.deltaY < 0) {
        if (currentStep > 0) {
          event.preventDefault();

          wheelCooldown = true;

          moveToStep(currentStep - 1);

          clearTimeout(wheelCooldownTimer);

          wheelCooldownTimer = setTimeout(function () {
            wheelCooldown = false;
          }, 550);
        }

        return;
      }
    }

    /*
    ========================================
    WHEEL EVENT
    ========================================
    */

    window.addEventListener("wheel", handleWheel, {
      passive: false,
    });

    /*
    ========================================
    DESKTOP STEP CLICK
    ========================================
    */

    steps.forEach(function (step) {
      step.addEventListener("click", function () {
        const stepIndex = Number(this.dataset.step);

        clearTimeout(animationTimer);

        clearTimeout(wheelCooldownTimer);

        isAnimating = false;

        wheelCooldown = false;

        updateStep(stepIndex);

        /*
          Only reposition when
          desktop section is already
          in sticky area.
          */

        if (window.innerWidth >= 768 && scrollTrack && isStickyPosition()) {
          const target = getStepScrollPosition(stepIndex);

          if (target !== null) {
            isAnimating = true;

            window.scrollTo({
              top: target,
              behavior: "smooth",
            });

            animationTimer = setTimeout(function () {
              isAnimating = false;
            }, 700);
          }
        }
      });
    });

    /*
    ========================================
    MOBILE INTERSECTION OBSERVER
    ========================================
    */

    /*
========================================
MOBILE SCROLL - ONE STEP AT A TIME
========================================
*/

    if (mobileSteps.length) {
      let mobileCurrentStep = 0;

      let mobileLocked = false;

      let mobileUnlockTimer = null;

      let lastScrollTop = window.scrollY;

      const MOBILE_LOCK_TIME = 450;

      /*
  ========================================
  UPDATE MOBILE STEP
  ========================================
  */

      function updateMobileStep(stepIndex) {
        stepIndex = Number(stepIndex);

        stepIndex = Math.max(0, Math.min(stepIndex, mobileSteps.length - 1));

        mobileCurrentStep = stepIndex;

        updateStep(stepIndex);
      }

      /*
  ========================================
  FIND MOBILE SCROLL DIRECTION
  ========================================
  */

      function handleMobileScroll() {
        /*
    Desktop completely untouched
    */

        if (window.innerWidth >= 768) {
          return;
        }

        /*
    Don't process while locked
    */

        if (mobileLocked) {
          lastScrollTop = window.scrollY;
          return;
        }

        const currentScrollTop = window.scrollY;

        /*
    Determine direction
    */

        let direction = 0;

        if (currentScrollTop > lastScrollTop) {
          direction = 1;
        } else if (currentScrollTop < lastScrollTop) {
          direction = -1;
        }

        lastScrollTop = currentScrollTop;

        if (direction === 0) {
          return;
        }

        /*
    ========================================
    CHECK WHETHER MOBILE SECTION IS VISIBLE
    ========================================
    */

        const rect = section.getBoundingClientRect();

        const viewportHeight = window.innerHeight;

        /*
    Section not visible
    */

        if (rect.bottom <= 0 || rect.top >= viewportHeight) {
          return;
        }

        /*
    ========================================
    CHANGE ONLY ONE CARD
    ========================================
    */

        const nextStep = mobileCurrentStep + direction;

        /*
    Don't go outside range
    */

        if (nextStep < 0 || nextStep >= mobileSteps.length) {
          return;
        }

        /*
    ========================================
    LOCK
    ========================================
    */

        mobileLocked = true;

        clearTimeout(mobileUnlockTimer);

        /*
    Change EXACTLY one card
    */

        updateMobileStep(nextStep);

        /*
    ========================================
    UNLOCK
    ========================================
    */

        mobileUnlockTimer = setTimeout(function () {
          mobileLocked = false;
        }, MOBILE_LOCK_TIME);
      }

      /*
  ========================================
  MOBILE SCROLL LISTENER
  ========================================
  */

      window.addEventListener("scroll", handleMobileScroll, {
        passive: true,
      });

      /*
  ========================================
  MOBILE CARD CLICK / TAP
  ========================================
  */

      mobileSteps.forEach(function (mobileStep) {
        mobileStep.addEventListener("click", function () {
          const stepIndex = Number(this.dataset.mobileStep);

          clearTimeout(mobileUnlockTimer);

          mobileLocked = false;

          mobileCurrentStep = stepIndex;

          updateStep(stepIndex);
        });
      });

      /*
  ========================================
  RESET ON RESIZE
  ========================================
  */

      window.addEventListener("resize", function () {
        if (window.innerWidth >= 768) {
          clearTimeout(mobileUnlockTimer);

          mobileLocked = false;

          mobileCurrentStep = currentStep;
        }
      });
    }

    /*
    ========================================
    RESIZE
    ========================================
    */

    window.addEventListener("resize", function () {
      clearTimeout(animationTimer);

      clearTimeout(wheelCooldownTimer);

      isAnimating = false;

      wheelCooldown = false;
    });

    /*
    ========================================
    INITIAL
    ========================================
    */

    updateStep(0);
  });
});

// review page js 



document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("wb-review-modal");

  /*
  |--------------------------------------------------------------------------
  | REVIEWS LOADER
  |--------------------------------------------------------------------------
  */

  function showReviewsLoader() {
    const results = document.getElementById("wb-reviews-results");

    if (results) {
      results.classList.add("is-loading");
    }
  }

  function hideReviewsLoader() {
    const results = document.getElementById("wb-reviews-results");

    if (results) {
      results.classList.remove("is-loading");
    }
  }

  /*
  |--------------------------------------------------------------------------
  | GALLERY NAVIGATION
  |--------------------------------------------------------------------------
  */

  async function fetchPage(url) {
    const response = await fetch(url, {
      headers: {
        "X-Requested-With": "XMLHttpRequest",
      },
    });

    if (!response.ok) {
      throw new Error("Request failed");
    }

    const html = await response.text();

    return new DOMParser().parseFromString(html, "text/html");
  }

  /*
  |--------------------------------------------------------------------------
  | REPLACE GALLERY
  |--------------------------------------------------------------------------
  */

  async function navigate(url, push = true) {
    const currentGallery = document.querySelector(".wb-reviews-gallery");

    if (!currentGallery) {
      window.location.href = url;
      return;
    }

    const scrollPosition = window.scrollY;

    showReviewsLoader();

    try {
      const doc = await fetchPage(url);

      const newGallery = doc.querySelector(".wb-reviews-gallery");

      if (!newGallery) {
        window.location.href = url;
        return;
      }

      /*
      |--------------------------------------------------------------------------
      | Replace only the gallery
      |--------------------------------------------------------------------------
      */

      currentGallery.replaceWith(newGallery);

      /*
      |--------------------------------------------------------------------------
      | Update URL
      |--------------------------------------------------------------------------
      */

      if (push) {
        history.pushState({}, "", url);
      }

      /*
      |--------------------------------------------------------------------------
      | Keep current scroll position
      |--------------------------------------------------------------------------
      */

      requestAnimationFrame(() => {
        window.scrollTo({
          top: scrollPosition,
          behavior: "auto",
        });

        hideReviewsLoader();
      });
    } catch (error) {
      console.error("Reviews navigation error:", error);

      window.location.href = url;
    }
  }

  /*
  |--------------------------------------------------------------------------
  | LOAD MORE
  |--------------------------------------------------------------------------
  */

  async function loadMore(url) {
    const currentGrid = document.querySelector("#wb-reviews-grid");

    if (!currentGrid) {
      window.location.href = url;
      return;
    }

    const loadMoreButton = document.querySelector("[data-load-more]");

    /*
    |--------------------------------------------------------------------------
    | Button loading state
    |--------------------------------------------------------------------------
    */

    if (loadMoreButton) {
      loadMoreButton.setAttribute("aria-busy", "true");
      loadMoreButton.style.pointerEvents = "none";
      loadMoreButton.setAttribute("aria-disabled", "true");
    }

    showReviewsLoader();

    try {
      const doc = await fetchPage(url);

      const newGrid = doc.querySelector("#wb-reviews-grid");

      const newPagination = doc.querySelector(".wb-reviews-pagination");

      const currentPagination = document.querySelector(
        ".wb-reviews-pagination"
      );

      if (!newGrid) {
        window.location.href = url;
        return;
      }

      /*
      |--------------------------------------------------------------------------
      | Add new cards
      |--------------------------------------------------------------------------
      */

      const newCards = newGrid.querySelectorAll(".wb-review-card");

      newCards.forEach((card) => {
        currentGrid.appendChild(card);
      });

      /*
      |--------------------------------------------------------------------------
      | Update load more button
      |--------------------------------------------------------------------------
      */

      if (currentPagination) {
        if (newPagination) {
          currentPagination.replaceWith(newPagination);
        } else {
          currentPagination.remove();
        }
      }

      /*
      |--------------------------------------------------------------------------
      | Update URL
      |--------------------------------------------------------------------------
      */

      history.pushState({}, "", url);
    } catch (error) {
      console.error("Reviews load more error:", error);

      window.location.href = url;
    } finally {
      hideReviewsLoader();

      const button = document.querySelector("[data-load-more]");

      if (button) {
        button.removeAttribute("aria-busy");
        button.removeAttribute("aria-disabled");
        button.style.pointerEvents = "";
      }
    }
  }

  /*
  |--------------------------------------------------------------------------
  | FILTER / PAGINATION / LOAD MORE CLICK
  |--------------------------------------------------------------------------
  */

  document.addEventListener("click", (event) => {
    /*
    |--------------------------------------------------------------------------
    | Review filters
    |--------------------------------------------------------------------------
    */

    const filterLink = event.target.closest("[data-review-filter]");

    if (filterLink) {
      event.preventDefault();

      /*
      | Don't trigger if already active
      */

      if (filterLink.classList.contains("is-active")) {
        return;
      }

      navigate(filterLink.href);

      return;
    }

    /*
    |--------------------------------------------------------------------------
    | Load more
    |--------------------------------------------------------------------------
    */

    const loadMoreLink = event.target.closest("[data-load-more]");

    if (loadMoreLink) {
      event.preventDefault();

      /*
      | Prevent double click while loading
      */

      if (loadMoreLink.getAttribute("aria-busy") === "true") {
        return;
      }

      loadMore(loadMoreLink.href);

      return;
    }

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    */

    const paginationLink = event.target.closest(".wb-reviews-pages a");

    if (paginationLink) {
      event.preventDefault();

      navigate(paginationLink.href);

      return;
    }
  });

  /*
  |--------------------------------------------------------------------------
  | BACK / FORWARD
  |--------------------------------------------------------------------------
  */

  window.addEventListener("popstate", () => {
    navigate(window.location.href, false);
  });

  /*
  |--------------------------------------------------------------------------
  | MODAL
  |--------------------------------------------------------------------------
  */

  if (!modal) {
    return;
  }

  let previousTrigger = null;

  /*
  |--------------------------------------------------------------------------
  | MODAL ELEMENTS
  |--------------------------------------------------------------------------
  */

  const video = modal.querySelector(".wb-review-modal__video");

  const captions = modal.querySelector(".wb-review-modal__captions");

  const unavailable = modal.querySelector(
    ".wb-review-modal__unavailable"
  );

  const unavailableImage = modal.querySelector(
    ".wb-review-modal__unavailable-image"
  );

  const title = modal.querySelector("#wb-review-modal-title");

  const role = modal.querySelector(".wb-review-modal__role");

  const date = modal.querySelector(".wb-review-modal__date");

  const summary = modal.querySelector(".wb-review-modal__summary");

  const topic = modal.querySelector(".wb-review-modal__topic");

  const rating = modal.querySelector(".wb-review-modal__rating");

  const transcript = modal.querySelector(".wb-review-transcript");

  const transcriptContent = transcript?.querySelector("div");

  /*
  |--------------------------------------------------------------------------
  | OPEN VIDEO
  |--------------------------------------------------------------------------
  */

  function openVideo(button) {
    previousTrigger = button;

    const videoUrl = button.dataset.videoUrl || "";

    const captionsUrl = button.dataset.captions || "";

    const transcriptText = button.dataset.transcript || "";

    const poster = button.dataset.poster || "";

    const name = button.dataset.name || "";

    const roleText = button.dataset.role || "";

    const company = button.dataset.company || "";

    const dateText = button.dataset.date || "";

    const ratingText = button.dataset.rating || "";

    const topicText = button.dataset.topic || "";

    const summaryText = button.dataset.summary || "";

    /*
    |--------------------------------------------------------------------------
    | DETAILS
    |--------------------------------------------------------------------------
    */

    if (title) {
      title.textContent = name;
    }

    if (role) {
      role.textContent = [roleText, company]
        .filter(Boolean)
        .join(" · ");
    }

    if (date) {
      date.textContent = dateText;
    }

    if (summary) {
      summary.textContent = summaryText;
    }

    if (topic) {
      topic.textContent = topicText;
    }

    if (rating) {
      rating.textContent = ratingText
        ? `${ratingText}/5 rating`
        : "";

      rating.setAttribute(
        "aria-label",
        ratingText
          ? `${ratingText} out of 5 stars`
          : ""
      );
    }

    /*
    |--------------------------------------------------------------------------
    | TRANSCRIPT
    |--------------------------------------------------------------------------
    */

    if (transcript && transcriptContent) {
      if (transcriptText) {
        transcript.hidden = false;
        transcriptContent.textContent = transcriptText;
      } else {
        transcript.hidden = true;
        transcriptContent.textContent = "";
      }
    }

    /*
    |--------------------------------------------------------------------------
    | RESET VIDEO
    |--------------------------------------------------------------------------
    */

    if (video) {
      video.pause();

      video.removeAttribute("src");

      video.removeAttribute("poster");

      video.hidden = true;
    }

    if (captions) {
      captions.removeAttribute("src");
      captions.hidden = true;
    }

    /*
    |--------------------------------------------------------------------------
    | VIDEO AVAILABLE
    |--------------------------------------------------------------------------
    */

    if (videoUrl && video) {
      video.hidden = false;

      if (unavailable) {
        unavailable.hidden = true;
      }

      video.src = videoUrl;

      if (poster) {
        video.poster = poster;
      }

      if (captions) {
        if (captionsUrl) {
          captions.src = captionsUrl;
          captions.hidden = false;
        } else {
          captions.removeAttribute("src");
          captions.hidden = true;
        }
      }

      video.load();
    } else {
      /*
      |--------------------------------------------------------------------------
      | VIDEO UNAVAILABLE
      |--------------------------------------------------------------------------
      */

      if (video) {
        video.hidden = true;
      }

      if (unavailable) {
        unavailable.hidden = false;
      }

      if (unavailableImage) {
        if (poster) {
          unavailableImage.src = poster;
        } else {
          unavailableImage.removeAttribute("src");
        }
      }
    }

    /*
    |--------------------------------------------------------------------------
    | OPEN MODAL
    |--------------------------------------------------------------------------
    */

    modal.hidden = false;

    modal.setAttribute("aria-hidden", "false");

    document.body.classList.add("wb-review-modal-open");

    requestAnimationFrame(() => {
      modal
        .querySelector(".wb-review-modal__close")
        ?.focus();
    });
  }

  /*
  |--------------------------------------------------------------------------
  | CLOSE VIDEO
  |--------------------------------------------------------------------------
  */

  function closeVideo() {
    if (modal.hidden) {
      return;
    }

    if (video) {
      video.pause();

      video.removeAttribute("src");

      video.removeAttribute("poster");

      video.load();
    }

    if (captions) {
      captions.removeAttribute("src");
      captions.hidden = true;
    }

    if (unavailableImage) {
      unavailableImage.removeAttribute("src");
    }

    if (unavailable) {
      unavailable.hidden = true;
    }

    modal.hidden = true;

    modal.setAttribute("aria-hidden", "true");

    document.body.classList.remove("wb-review-modal-open");

    /*
    |--------------------------------------------------------------------------
    | Return focus to trigger
    |--------------------------------------------------------------------------
    */

    if (previousTrigger && document.body.contains(previousTrigger)) {
      previousTrigger.focus();
    }

    previousTrigger = null;
  }

  /*
  |--------------------------------------------------------------------------
  | VIDEO / CLOSE CLICK
  |--------------------------------------------------------------------------
  */

  document.addEventListener("click", (event) => {
    const videoButton = event.target.closest("[data-video-open]");

    if (videoButton) {
      openVideo(videoButton);

      return;
    }

    const closeButton = event.target.closest("[data-video-close]");

    if (closeButton) {
      closeVideo();
    }
  });

  /*
  |--------------------------------------------------------------------------
  | ESCAPE
  |--------------------------------------------------------------------------
  */

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && !modal.hidden) {
      closeVideo();
    }
  });

  /*
  |--------------------------------------------------------------------------
  | FOCUS TRAP
  |--------------------------------------------------------------------------
  */

  document.addEventListener("keydown", (event) => {
    if (event.key !== "Tab" || modal.hidden) {
      return;
    }

    const focusable = modal.querySelectorAll(
      'button, [href], video, details, summary, [tabindex]:not([tabindex="-1"])'
    );

    const elements = Array.from(focusable).filter(
      (element) => !element.hasAttribute("disabled")
    );

    if (!elements.length) {
      return;
    }

    const first = elements[0];

    const last = elements[elements.length - 1];

    /*
    |--------------------------------------------------------------------------
    | Shift + Tab
    |--------------------------------------------------------------------------
    */

    if (
      event.shiftKey &&
      document.activeElement === first
    ) {
      event.preventDefault();

      last.focus();

      return;
    }

    /*
    |--------------------------------------------------------------------------
    | Tab
    |--------------------------------------------------------------------------
    */

    if (
      !event.shiftKey &&
      document.activeElement === last
    ) {
      event.preventDefault();

      first.focus();
    }
  });
});


// contact form js
document.addEventListener("DOMContentLoaded", function () {
  const enquiryForm = document.querySelector("#enquiry-form");

  if (!enquiryForm) {
    return;
  }

  document.addEventListener("click", function (event) {
    const link = event.target.closest("[data-enquiry-route]");

    if (!link) {
      return;
    }

    const selectedRoute = link.dataset.enquiryRoute;

    const select = document.querySelector('select[name="enquiry-type"]');

    if (!select) {
      return;
    }

    select.value = selectedRoute;

    select.dispatchEvent(
      new Event("change", {
        bubbles: true,
      }),
    );
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const wrapper = document.querySelector(".comparison-wrapper");
  const leftCard = document.querySelector(".comparison-box--left");
  const rightCard = document.querySelector(".comparison-box--right");

  if (!wrapper || !leftCard || !rightCard) {
    return;
  }

  function updateComparisonHeight() {
    if (window.innerWidth <= 1025) {
      wrapper.style.height = "auto";
      return;
    }

    const leftHeight = leftCard.offsetHeight + 100;
    const rightHeight = rightCard.offsetHeight;

    wrapper.style.height = Math.max(leftHeight, rightHeight) + "px";
  }

  updateComparisonHeight();

  window.addEventListener("resize", updateComparisonHeight);
});

document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".mcp-capability-tab");
  const panels = document.querySelectorAll(".mcp-capability-panel");

  if (!tabs.length || !panels.length) {
    return;
  }

  function activateTab(tab) {
    const tabId = tab.dataset.tab;

    tabs.forEach(function (item) {
      const isActive = item === tab;

      item.classList.toggle("active", isActive);
      item.setAttribute("aria-selected", isActive ? "true" : "false");

      item.setAttribute("tabindex", isActive ? "0" : "-1");
    });

    panels.forEach(function (panel) {
      const isActive = panel.dataset.panel === tabId;

      panel.classList.toggle("active", isActive);

      if (isActive) {
        panel.removeAttribute("hidden");

        /*
         * Restart the panel animation.
         */
        panel.style.animation = "none";

        requestAnimationFrame(function () {
          panel.style.animation = "";
        });
      } else {
        panel.setAttribute("hidden", "");
      }
    });
  }

  tabs.forEach(function (tab, index) {
    tab.addEventListener("click", function () {
      activateTab(tab);
    });

    tab.addEventListener("keydown", function (event) {
      let nextIndex = null;

      if (event.key === "ArrowDown" || event.key === "ArrowRight") {
        event.preventDefault();

        nextIndex = (index + 1) % tabs.length;
      }

      if (event.key === "ArrowUp" || event.key === "ArrowLeft") {
        event.preventDefault();

        nextIndex = (index - 1 + tabs.length) % tabs.length;
      }

      if (nextIndex !== null) {
        tabs[nextIndex].focus();
        activateTab(tabs[nextIndex]);
      }

      if (event.key === "Home") {
        event.preventDefault();

        tabs[0].focus();
        activateTab(tabs[0]);
      }

      if (event.key === "End") {
        event.preventDefault();

        tabs[tabs.length - 1].focus();
        activateTab(tabs[tabs.length - 1]);
      }
    });
  });
});

// js for workspace studio page start here

document.addEventListener("DOMContentLoaded", function () {
  const editor = document.querySelector(".workspace-editor");

  if (!editor) {
    return;
  }

  const content = editor.querySelector(".workspace-editor__content");
  const navItems = editor.querySelectorAll(".workspace-editor__nav-item");
  const groups = editor.querySelectorAll(".workspace-group");

  if (!content || !navItems.length || !groups.length) {
    return;
  }

  let isClickScrolling = false;
  let scrollTimer;

  /*
   * -----------------------------------------
   * Set active tab
   * -----------------------------------------
   */

  function setActive(targetId) {
    navItems.forEach(function (item) {
      item.classList.toggle("active", item.dataset.target === targetId);
    });

    groups.forEach(function (group) {
      group.classList.toggle("is-active", group.id === targetId);
    });
  }

  /*
   * -----------------------------------------
   * Scroll clicked section to TOP
   * -----------------------------------------
   */

  function scrollToGroup(target) {
    const contentRect = content.getBoundingClientRect();

    const targetRect = target.getBoundingClientRect();

    /*
     * Current scroll position +
     * distance between target and
     * scroll container.
     */

    const scrollTop = content.scrollTop + (targetRect.top - contentRect.top);

    content.scrollTo({
      top: scrollTop,
      behavior: "smooth",
    });
  }

  /*
   * -----------------------------------------
   * Sidebar click
   * -----------------------------------------
   */

  navItems.forEach(function (item) {
    item.addEventListener("click", function () {
      const targetId = item.dataset.target;

      const target = editor.querySelector("#" + targetId);

      if (!target) {
        return;
      }

      /*
       * Immediately activate clicked tab
       */

      setActive(targetId);

      /*
       * Prevent scroll listener from
       * changing active tab during
       * smooth scrolling.
       */

      isClickScrolling = true;

      clearTimeout(scrollTimer);

      /*
       * Move selected section
       * exactly to the top.
       */

      scrollToGroup(target);

      /*
       * Wait until smooth scroll
       * finishes.
       */

      scrollTimer = setTimeout(function () {
        isClickScrolling = false;
      }, 700);
    });
  });

  /*
   * -----------------------------------------
   * Detect active section while scrolling
   * -----------------------------------------
   */

  let ticking = false;

  content.addEventListener("scroll", function () {
    if (ticking || isClickScrolling) {
      return;
    }

    ticking = true;

    requestAnimationFrame(function () {
      const contentRect = content.getBoundingClientRect();

      /*
       * Active zone:
       * top portion of the content area.
       */

      const activeLine = contentRect.top + 80;

      let currentGroup = groups[0];

      groups.forEach(function (group) {
        const rect = group.getBoundingClientRect();

        if (rect.top <= activeLine) {
          currentGroup = group;
        }
      });

      if (currentGroup) {
        setActive(currentGroup.id);
      }

      ticking = false;
    });
  });

  /*
   * -----------------------------------------
   * Initial active state
   * -----------------------------------------
   */

  setActive(groups[0].id);
});
// js for workspace studio page start here

// blog page js
// document.addEventListener("DOMContentLoaded", function () {
//   const blog = document.querySelector(".wb-blog");

//   if (!blog) {
//     return;
//   }

//   /*
//     |--------------------------------------------------------------------------
//     | ELEMENTS
//     |--------------------------------------------------------------------------
//     */

//   const tabs = blog.querySelectorAll(".wb-blog-tab");

//   const searchInput = blog.querySelector("#wb-blog-search-input");

//   const clearSearchButton = blog.querySelector(".wb-blog-search__clear");

//   const clearFilterButton = blog.querySelector("#wb-blog-clear-filter");

//   const posts = blog.querySelectorAll("[data-post]");

//   const noResults = blog.querySelector("#wb-blog-no-results");

//   const resultsCount = blog.querySelector(".wb-blog-results-count");

//   /*
//     |--------------------------------------------------------------------------
//     | STATE
//     |--------------------------------------------------------------------------
//     */

//   let activeTopic = "all";

//   let searchTerm = "";

//   /*
//     |--------------------------------------------------------------------------
//     | URL STATE
//     |--------------------------------------------------------------------------
//     |
//     | Example:
//     |
//     | /resources/blog/?topic=estimating-and-cost-control&search=cost
//     |
//     */

//   function getUrlState() {
//     const params = new URLSearchParams(window.location.search);

//     return {
//       topic: params.get("topic") || "all",
//       search: params.get("search") || "",
//     };
//   }

//   function updateUrl() {
//     const url = new URL(window.location.href);

//     if (activeTopic && activeTopic !== "all") {
//       url.searchParams.set("topic", activeTopic);
//     } else {
//       url.searchParams.delete("topic");
//     }

//     if (searchTerm) {
//       url.searchParams.set("search", searchTerm);
//     } else {
//       url.searchParams.delete("search");
//     }

//     window.history.replaceState({}, "", url);
//   }

//   /*
//     |--------------------------------------------------------------------------
//     | SET ACTIVE TAB
//     |--------------------------------------------------------------------------
//     */

//   function setActiveTab(topic) {
//     tabs.forEach(function (tab) {
//       const isActive = tab.dataset.topic === topic;

//       tab.classList.toggle("is-active", isActive);

//       tab.setAttribute("aria-selected", isActive ? "true" : "false");
//     });
//   }

//   /*
//     |--------------------------------------------------------------------------
//     | FILTER POSTS
//     |--------------------------------------------------------------------------
//     */

//   function filterPosts(updateHistory = true) {
//     let visibleCount = 0;

//     posts.forEach(function (post) {
//       const postTopic = post.dataset.topic || "";

//       const searchableText = post.dataset.search || "";

//       const topicMatches = activeTopic === "all" || postTopic === activeTopic;

//       const searchMatches =
//         !searchTerm || searchableText.includes(searchTerm.toLowerCase());

//       const shouldShow = topicMatches && searchMatches;

//       post.classList.toggle("is-hidden", !shouldShow);

//       if (shouldShow) {
//         visibleCount++;
//       }
//     });

//     /*
//         |--------------------------------------------------------------------------
//         | NO RESULTS
//         |--------------------------------------------------------------------------
//         */

//     if (noResults) {
//       noResults.hidden = visibleCount !== 0;
//     }

//     /*
//         |--------------------------------------------------------------------------
//         | RESULT COUNT
//         |--------------------------------------------------------------------------
//         */

//     if (resultsCount) {
//       resultsCount.textContent =
//         visibleCount + (visibleCount === 1 ? " article" : " articles");
//     }

//     /*
//         |--------------------------------------------------------------------------
//         | CLEAR SEARCH BUTTON
//         |--------------------------------------------------------------------------
//         */

//     if (clearSearchButton) {
//       clearSearchButton.hidden = !searchTerm;
//     }

//     /*
//         |--------------------------------------------------------------------------
//         | URL
//         |--------------------------------------------------------------------------
//         */

//     if (updateHistory) {
//       updateUrl();
//     }
//   }

//   /*
//     |--------------------------------------------------------------------------
//     | TAB CLICK
//     |--------------------------------------------------------------------------
//     */

//   tabs.forEach(function (tab) {
//     tab.addEventListener("click", function () {
//       activeTopic = this.dataset.topic || "all";

//       setActiveTab(activeTopic);

//       filterPosts();
//     });
//   });

//   /*
//     |--------------------------------------------------------------------------
//     | SEARCH
//     |--------------------------------------------------------------------------
//     */

//   if (searchInput) {
//     searchInput.addEventListener("input", function () {
//       searchTerm = this.value.trim().toLowerCase();

//       filterPosts();
//     });
//   }

//   /*
//     |--------------------------------------------------------------------------
//     | CLEAR SEARCH
//     |--------------------------------------------------------------------------
//     */

//   if (clearSearchButton) {
//     clearSearchButton.addEventListener("click", function () {
//       searchTerm = "";

//       searchInput.value = "";

//       searchInput.focus();

//       filterPosts();
//     });
//   }

//   /*
//     |--------------------------------------------------------------------------
//     | CLEAR ALL FILTERS
//     |--------------------------------------------------------------------------
//     */

//   if (clearFilterButton) {
//     clearFilterButton.addEventListener("click", function () {
//       activeTopic = "all";

//       searchTerm = "";

//       setActiveTab("all");

//       if (searchInput) {
//         searchInput.value = "";
//       }

//       filterPosts();
//     });
//   }

//   /*
//     |--------------------------------------------------------------------------
//     | KEYBOARD SUPPORT
//     |--------------------------------------------------------------------------
//     */

//   tabs.forEach(function (tab, index) {
//     tab.addEventListener("keydown", function (event) {
//       let nextIndex = index;

//       if (event.key === "ArrowRight") {
//         nextIndex = (index + 1) % tabs.length;
//       }

//       if (event.key === "ArrowLeft") {
//         nextIndex = (index - 1 + tabs.length) % tabs.length;
//       }

//       if (event.key === "ArrowRight" || event.key === "ArrowLeft") {
//         event.preventDefault();

//         tabs[nextIndex].focus();

//         tabs[nextIndex].click();
//       }
//     });
//   });

//   /*
//     |--------------------------------------------------------------------------
//     | INITIAL URL STATE
//     |--------------------------------------------------------------------------
//     */

//   const initialState = getUrlState();

//   activeTopic = initialState.topic;

//   searchTerm = initialState.search.trim().toLowerCase();

//   /*
//     |--------------------------------------------------------------------------
//     | VALIDATE TOPIC
//     |--------------------------------------------------------------------------
//     */

//   const validTopic = Array.from(tabs).some(function (tab) {
//     return tab.dataset.topic === activeTopic;
//   });

//   if (!validTopic) {
//     activeTopic = "all";
//   }

//   /*
//     |--------------------------------------------------------------------------
//     | INITIAL UI
//     |--------------------------------------------------------------------------
//     */

//   setActiveTab(activeTopic);

//   if (searchInput) {
//     searchInput.value = initialState.search;
//   }

//   filterPosts(false);
// });


// document.addEventListener("DOMContentLoaded", function () {
//   const tabs = document.getElementById("wb-blog-tabs");
//   const tabsWrap = document.querySelector(".wb-blog-tabs-wrap");
//   const nextButton = document.getElementById("wb-blog-tabs-next");

//   if (!tabs || !tabsWrap || !nextButton) {
//     return;
//   }

//   /* =====================================================
//        CHECK WHETHER MORE TABS ARE AVAILABLE
//        ===================================================== */

//   function updateTabScrollState() {
//     const maxScroll = tabs.scrollWidth - tabs.clientWidth;

//     const currentScroll = tabs.scrollLeft;

//     /*
//      * No horizontal overflow
//      */

//     if (maxScroll <= 5) {
//       tabsWrap.classList.add("is-end");

//       return;
//     }

//     /*
//      * User reached the right side
//      */

//     if (currentScroll >= maxScroll - 5) {
//       tabsWrap.classList.add("is-end");
//     } else {
//       tabsWrap.classList.remove("is-end");
//     }
//   }

//   /* =====================================================
//        NEXT BUTTON
//        ===================================================== */

//   nextButton.addEventListener("click", function () {
//     const amount = Math.min(tabs.clientWidth * 0.55, 400);

//     tabs.scrollBy({
//       left: amount,
//       behavior: "smooth",
//     });
//   });

//   /* =====================================================
//        TAB SCROLL
//        ===================================================== */

//   tabs.addEventListener("scroll", updateTabScrollState, {
//     passive: true,
//   });

//   /* =====================================================
//        RESIZE
//        ===================================================== */

//   window.addEventListener("resize", updateTabScrollState);

//   /* =====================================================
//        INITIAL CHECK
//        ===================================================== */

//   updateTabScrollState();
// });


// =====================================================
// BLOG PAGE FILTER, SEARCH & SCROLL
// =====================================================

document.addEventListener("DOMContentLoaded", function () {
  const blog = document.querySelector(".wb-blog");

  if (!blog) {
    return;
  }

  /*
  |--------------------------------------------------------------------------
  | ELEMENTS
  |--------------------------------------------------------------------------
  */

  const tabs = blog.querySelectorAll(".wb-blog-tab");

  const searchInput = blog.querySelector("#wb-blog-search-input");

  const clearSearchButton = blog.querySelector(".wb-blog-search__clear");

  const clearFilterButton = blog.querySelector("#wb-blog-clear-filter");

  const posts = blog.querySelectorAll("[data-post]");

  const featuredSection = blog.querySelector(".wb-blog-featured");
  const featuredPost = blog.querySelector(".wb-blog-featured__card");

  const noResults = blog.querySelector("#wb-blog-no-results");

  const resultsCount = blog.querySelector(".wb-blog-results-count");

  /*
  |--------------------------------------------------------------------------
  | STATE
  |--------------------------------------------------------------------------
  */

  let activeTopic = "all";

  let searchTerm = "";

  /*
  |--------------------------------------------------------------------------
  | URL STATE
  |--------------------------------------------------------------------------
  |
  | Example:
  |
  | /resources/blog/?topic=estimating-and-cost-control&search=cost
  |
  */

  function getUrlState() {
    const params = new URLSearchParams(window.location.search);

    return {
      topic: params.get("topic") || "all",
      search: params.get("search") || "",
    };
  }

  function updateUrl() {
    const url = new URL(window.location.href);

    if (activeTopic && activeTopic !== "all") {
      url.searchParams.set("topic", activeTopic);
    } else {
      url.searchParams.delete("topic");
    }

    if (searchTerm) {
      url.searchParams.set("search", searchTerm);
    } else {
      url.searchParams.delete("search");
    }

    window.history.replaceState({}, "", url);
  }

  /*
  |--------------------------------------------------------------------------
  | SET ACTIVE TAB
  |--------------------------------------------------------------------------
  */

  function setActiveTab(topic) {
    tabs.forEach(function (tab) {
      const isActive = tab.dataset.topic === topic;

      tab.classList.toggle("is-active", isActive);

      tab.setAttribute(
        "aria-selected",
        isActive ? "true" : "false"
      );
    });
  }

  /*
  |--------------------------------------------------------------------------
  | SCROLL TO FIRST VISIBLE CARD
  |--------------------------------------------------------------------------
  */

  function scrollToFirstVisiblePost() {
    const firstVisiblePost = Array.from(posts).find(function (post) {
      return !post.classList.contains("is-hidden");
    });

    /*
    |--------------------------------------------------
    | NO RESULTS
    |--------------------------------------------------
    */

    if (!firstVisiblePost) {
      if (noResults) {
        const headerOffset = 120;

        const noResultsPosition =
          noResults.getBoundingClientRect().top +
          window.pageYOffset;

        window.scrollTo({
          top: noResultsPosition - headerOffset,
          behavior: "smooth",
        });
      }

      return;
    }

    /*
    |--------------------------------------------------
    | SCROLL TO FIRST CARD
    |--------------------------------------------------
    */

    const headerOffset = 120;

    const postPosition =
      firstVisiblePost.getBoundingClientRect().top +
      window.pageYOffset;

    const scrollPosition =
      postPosition - headerOffset;

    window.scrollTo({
      top: scrollPosition,
      behavior: "smooth",
    });
  }

  /*
  |--------------------------------------------------------------------------
  | FILTER POSTS
  |--------------------------------------------------------------------------
  */

  function filterPosts(
    updateHistory = true,
    shouldScroll = false
  ) {
    let visibleCount = 0;

    /*
    |--------------------------------------------------------------------------
    | FEATURED ARTICLE
    |--------------------------------------------------------------------------
    */

    if (featuredSection && featuredPost) {
      const featuredTopic =
        featuredPost.dataset.topic || "";

      const featuredSearchText =
        featuredPost.dataset.search || "";

      const featuredTopicMatches =
        activeTopic === "all" ||
        featuredTopic === activeTopic;

      const featuredSearchMatches =
        !searchTerm ||
        featuredSearchText.includes(
          searchTerm.toLowerCase()
        );

      const showFeatured =
        featuredTopicMatches &&
        featuredSearchMatches;

      /*
      | Hide/show the ENTIRE featured section
      | including the "Featured article" heading.
      */

      featuredSection.hidden = !showFeatured;
    }

    /*
    |--------------------------------------------------------------------------
    | LATEST ARTICLES
    |--------------------------------------------------------------------------
    */

    posts.forEach(function (post) {

      /*
      | Skip the featured post because it is handled above.
      */

      if (post === featuredPost) {
        return;
      }

      const postTopic =
        post.dataset.topic || "";

      const searchableText =
        post.dataset.search || "";

      const topicMatches =
        activeTopic === "all" ||
        postTopic === activeTopic;

      const searchMatches =
        !searchTerm ||
        searchableText.includes(
          searchTerm.toLowerCase()
        );

      const shouldShow =
        topicMatches &&
        searchMatches;

      post.classList.toggle(
        "is-hidden",
        !shouldShow
      );

      if (shouldShow) {
        visibleCount++;
      }
    });

    /*
    |--------------------------------------------------------------------------
    | NO RESULTS
    |--------------------------------------------------------------------------
    */

    if (noResults) {
      noResults.hidden =
        visibleCount !== 0;
    }

    /*
    |--------------------------------------------------------------------------
    | RESULT COUNT
    |--------------------------------------------------------------------------
    */

    if (resultsCount) {
      resultsCount.textContent =
        visibleCount +
        (
          visibleCount === 1
            ? " article"
            : " articles"
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CLEAR SEARCH BUTTON
    |--------------------------------------------------------------------------
    */

    if (clearSearchButton) {
      clearSearchButton.hidden =
        !searchTerm;
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE URL
    |--------------------------------------------------------------------------
    */

    if (updateHistory) {
      updateUrl();
    }

    /*
    |--------------------------------------------------------------------------
    | SCROLL AFTER FILTER
    |--------------------------------------------------------------------------
    */

    if (shouldScroll) {
      setTimeout(function () {
        scrollToFirstVisiblePost();
      }, 50);
    }
  }

  /*
  |--------------------------------------------------------------------------
  | TAB CLICK
  |--------------------------------------------------------------------------
  */

  tabs.forEach(function (tab) {
    tab.addEventListener(
      "click",
      function () {
        activeTopic =
          this.dataset.topic || "all";

        setActiveTab(activeTopic);

        filterPosts(true, true);
      }
    );
  });

  /*
  |--------------------------------------------------------------------------
  | SEARCH
  |--------------------------------------------------------------------------
  */

/*
|--------------------------------------------------------------------------
| SEARCH
|--------------------------------------------------------------------------
|
| Typing does NOT filter the posts.
| Search is performed only when ENTER is pressed.
|
*/

const searchForm = blog.querySelector(".wb-blog-search");

if (searchInput) {

  searchInput.addEventListener("keydown", function (event) {

    if (event.key !== "Enter") {
      return;
    }

    event.preventDefault();

    searchTerm = this.value
      .trim()
      .toLowerCase();

    filterPosts(true, true);

  });
}


/*
|--------------------------------------------------------------------------
| PREVENT FORM SUBMIT / PAGE RELOAD
|--------------------------------------------------------------------------
*/

if (searchForm) {

  searchForm.addEventListener("submit", function (event) {

    event.preventDefault();

    searchTerm = searchInput
      ? searchInput.value.trim().toLowerCase()
      : "";

    filterPosts(true, true);

  });

}

  /*
  |--------------------------------------------------------------------------
  | CLEAR SEARCH
  |--------------------------------------------------------------------------
  */

  if (clearSearchButton) {
    clearSearchButton.addEventListener(
      "click",
      function () {
        searchTerm = "";

        if (searchInput) {
          searchInput.value = "";
          searchInput.focus();
        }

        filterPosts(true, true);
      }
    );
  }

  /*
  |--------------------------------------------------------------------------
  | CLEAR ALL FILTERS
  |--------------------------------------------------------------------------
  */

  if (clearFilterButton) {
    clearFilterButton.addEventListener(
      "click",
      function () {
        activeTopic = "all";

        searchTerm = "";

        setActiveTab("all");

        if (searchInput) {
          searchInput.value = "";
        }

        filterPosts(true, true);
      }
    );
  }

  /*
  |--------------------------------------------------------------------------
  | KEYBOARD SUPPORT
  |--------------------------------------------------------------------------
  */

  tabs.forEach(function (tab, index) {
    tab.addEventListener(
      "keydown",
      function (event) {
        let nextIndex = index;

        if (event.key === "ArrowRight") {
          nextIndex =
            (index + 1) %
            tabs.length;
        }

        if (event.key === "ArrowLeft") {
          nextIndex =
            (index - 1 + tabs.length) %
            tabs.length;
        }

        if (
          event.key === "ArrowRight" ||
          event.key === "ArrowLeft"
        ) {
          event.preventDefault();

          tabs[nextIndex].focus();

          tabs[nextIndex].click();
        }
      }
    );
  });

  /*
  |--------------------------------------------------------------------------
  | INITIAL URL STATE
  |--------------------------------------------------------------------------
  */

  const initialState =
    getUrlState();

  activeTopic =
    initialState.topic;

  searchTerm =
    initialState.search
      .trim()
      .toLowerCase();

  /*
  |--------------------------------------------------------------------------
  | VALIDATE TOPIC
  |--------------------------------------------------------------------------
  */

  const validTopic =
    Array.from(tabs).some(
      function (tab) {
        return (
          tab.dataset.topic ===
          activeTopic
        );
      }
    );

  if (!validTopic) {
    activeTopic = "all";
  }

  /*
  |--------------------------------------------------------------------------
  | INITIAL UI
  |--------------------------------------------------------------------------
  */

  setActiveTab(activeTopic);

  if (searchInput) {
    searchInput.value =
      initialState.search;
  }

  // Initial page load: DO NOT SCROLL
  filterPosts(false, false);
});


// =====================================================
// BLOG CATEGORY TABS HORIZONTAL SCROLL
// =====================================================

document.addEventListener("DOMContentLoaded", function () {
  const tabs =
    document.getElementById(
      "wb-blog-tabs"
    );

  const tabsWrap =
    document.querySelector(
      ".wb-blog-tabs-wrap"
    );

  const nextButton =
    document.getElementById(
      "wb-blog-tabs-next"
    );

  if (
    !tabs ||
    !tabsWrap ||
    !nextButton
  ) {
    return;
  }

  /*
  |--------------------------------------------------------------------------
  | CHECK WHETHER MORE TABS ARE AVAILABLE
  |--------------------------------------------------------------------------
  */

  function updateTabScrollState() {
    const maxScroll =
      tabs.scrollWidth -
      tabs.clientWidth;

    const currentScroll =
      tabs.scrollLeft;

    /*
    |--------------------------------------------------
    | NO HORIZONTAL OVERFLOW
    |--------------------------------------------------
    */

    if (maxScroll <= 5) {
      tabsWrap.classList.add(
        "is-end"
      );

      return;
    }

    /*
    |--------------------------------------------------
    | USER REACHED THE RIGHT SIDE
    |--------------------------------------------------
    */

    if (
      currentScroll >=
      maxScroll - 5
    ) {
      tabsWrap.classList.add(
        "is-end"
      );
    } else {
      tabsWrap.classList.remove(
        "is-end"
      );
    }
  }

  /*
  |--------------------------------------------------------------------------
  | NEXT BUTTON
  |--------------------------------------------------------------------------
  */

  nextButton.addEventListener(
    "click",
    function () {
      const amount =
        Math.min(
          tabs.clientWidth * 0.55,
          400
        );

      tabs.scrollBy({
        left: amount,
        behavior: "smooth",
      });
    }
  );

  /*
  |--------------------------------------------------------------------------
  | TAB SCROLL
  |--------------------------------------------------------------------------
  */

  tabs.addEventListener(
    "scroll",
    updateTabScrollState,
    {
      passive: true,
    }
  );

  /*
  |--------------------------------------------------------------------------
  | RESIZE
  |--------------------------------------------------------------------------
  */

  window.addEventListener(
    "resize",
    updateTabScrollState
  );

  /*
  |--------------------------------------------------------------------------
  | INITIAL CHECK
  |--------------------------------------------------------------------------
  */

  updateTabScrollState();
});





// blog page js end here

// JS for event page
document.addEventListener("DOMContentLoaded", function () {

  const filters = {
    relationship: "all",
    format: "all",
    view: "upcoming",
  };


  const filterTriggers =
    document.querySelectorAll("[data-filter-trigger]");

  const filterContainers =
    document.querySelectorAll(".wb-event-filter");

  const eventCards =
    document.querySelectorAll("#wb-events-grid [data-event]");

  const emptyState =
    document.getElementById("wb-events-empty");


  /* =========================================================
     DROPDOWNS
  ========================================================== */

  filterTriggers.forEach(function (trigger) {

    trigger.addEventListener("click", function (event) {

      event.stopPropagation();

      const parent =
        trigger.closest(".wb-event-filter");

      const isOpen =
        parent.classList.contains("is-open");


      filterContainers.forEach(function (container) {

        container.classList.remove("is-open");

        const button =
          container.querySelector("[data-filter-trigger]");

        if (button) {
          button.setAttribute(
            "aria-expanded",
            "false"
          );
        }

      });


      if (!isOpen) {

        parent.classList.add("is-open");

        trigger.setAttribute(
          "aria-expanded",
          "true"
        );

      }

    });

  });


  document.addEventListener("click", function () {

    filterContainers.forEach(function (container) {

      container.classList.remove("is-open");

      const button =
        container.querySelector("[data-filter-trigger]");

      if (button) {

        button.setAttribute(
          "aria-expanded",
          "false"
        );

      }

    });

  });


  /* =========================================================
     FILTER SELECTION
  ========================================================== */

  document
    .querySelectorAll(".wb-event-dropdown__menu button")
    .forEach(function (button) {

      button.addEventListener("click", function (event) {

        event.stopPropagation();


        const filterType =
          button.dataset.filter;

        const value =
          button.dataset.value;

        const label =
          button.textContent.trim();


        filters[filterType] = value;


        const filterContainer =
          button.closest(".wb-event-filter");


        const valueElement =
          filterContainer.querySelector(
            `[data-filter-value="${filterType}"]`
          );


        if (valueElement) {

          valueElement.textContent =
            label;

        }


        filterContainer
          .querySelectorAll(
            ".wb-event-dropdown__menu button"
          )
          .forEach(function (item) {

            item.classList.remove(
              "is-selected"
            );

          });


        button.classList.add(
          "is-selected"
        );


        filterContainer.classList.remove(
          "is-open"
        );


        const trigger =
          filterContainer.querySelector(
            "[data-filter-trigger]"
          );


        if (trigger) {

          trigger.setAttribute(
            "aria-expanded",
            "false"
          );

        }


        applyFilters();


        setTimeout(function () {

          scrollToArchive();

        }, 100);

      });

    });


  /* =========================================================
     FILTER LOGIC
  ========================================================== */

  function applyFilters() {

    let visibleCount = 0;


    const today =
      new Date();

    today.setHours(
      0,
      0,
      0,
      0
    );


    eventCards.forEach(function (card) {

      const relationship =
        card.dataset.relationship || "";

      const format =
        card.dataset.format || "";

      const dateString =
        card.dataset.date || "";


      let date = null;


      if (dateString) {

        date = new Date(
          dateString + "T00:00:00"
        );

      }


      const relationshipMatch =
        filters.relationship === "all" ||
        filters.relationship === relationship;


      const formatMatch =
        filters.format === "all" ||
        filters.format === format;


      const viewMatch =
        filters.view === "upcoming"
          ? (!date || date >= today)
          : (!date || date < today);


      if (
        relationshipMatch &&
        formatMatch &&
        viewMatch
      ) {

        card.hidden = false;

        visibleCount++;

      } else {

        card.hidden = true;

      }

    });


    if (emptyState) {

      emptyState.hidden =
        visibleCount !== 0;

    }

  }


  /* =========================================================
     SCROLL TO UPCOMING EVENTS
  ========================================================== */

  function scrollToArchive() {

    const archiveSection =
      document.getElementById(
        "upcoming-events"
      );


    if (!archiveSection) {
      return;
    }


    const headerOffset = 30;


    const sectionTop =
      archiveSection.getBoundingClientRect().top +
      window.pageYOffset -
      headerOffset;


    window.scrollTo({

      top: sectionTop,

      behavior: "smooth",

    });

  }


  applyFilters();


  /* =========================================================
     CALENDAR
  ========================================================== */

  const calendarGrid =
    document.getElementById(
      "calendar-grid"
    );


  const calendarMonth =
    document.getElementById(
      "calendar-month"
    );


  const previousButton =
    document.getElementById(
      "calendar-prev"
    );


  const nextButton =
    document.getElementById(
      "calendar-next"
    );


  const todayButton =
    document.getElementById(
      "calendar-today"
    );


  const calendarEventsElement =
    document.getElementById(
      "wb-calendar-events"
    );


  /*
  |--------------------------------------------------------------------------
  | CHECK CALENDAR ELEMENTS
  |--------------------------------------------------------------------------
  */

  if (
    !calendarGrid ||
    !calendarMonth ||
    !calendarEventsElement
  ) {

    console.log(
      "Calendar elements not found."
    );

    return;

  }


  /*
  |--------------------------------------------------------------------------
  | GET EVENT DATA FROM PHP
  |--------------------------------------------------------------------------
  */

  let eventData = [];


  try {

    const json =
      calendarEventsElement.textContent.trim();


    if (json) {

      eventData =
        JSON.parse(json);

    }


    if (!Array.isArray(eventData)) {

      eventData = [];

    }

  } catch (error) {

    console.error(
      "Calendar JSON error:",
      error
    );

    eventData = [];

  }


  console.log(
    "Calendar events:",
    eventData
  );


  /*
  |--------------------------------------------------------------------------
  | CURRENT CALENDAR DATE
  |--------------------------------------------------------------------------
  */

  let calendarDate =
    new Date();


  /*
  |--------------------------------------------------------------------------
  | RENDER CALENDAR
  |--------------------------------------------------------------------------
  */

  function renderCalendar() {

    const year =
      calendarDate.getFullYear();


    const month =
      calendarDate.getMonth();


    /*
    |--------------------------------------------------------------------------
    | MONTH TITLE
    |--------------------------------------------------------------------------
    */

    calendarMonth.textContent =
      calendarDate.toLocaleString(
        "en-AU",
        {
          month: "long",
          year: "numeric",
        }
      );


    /*
    |--------------------------------------------------------------------------
    | CLEAR CALENDAR
    |--------------------------------------------------------------------------
    */

    calendarGrid.innerHTML = "";


    /*
    |--------------------------------------------------------------------------
    | DAY NAMES
    |--------------------------------------------------------------------------
    */

    const dayNames = [
      "Sun",
      "Mon",
      "Tue",
      "Wed",
      "Thu",
      "Fri",
      "Sat",
    ];


    dayNames.forEach(function (day) {

      const element =
        document.createElement("div");


      element.className =
        "wb-calendar__day wb-calendar__day-name";


      element.textContent =
        day;


      calendarGrid.appendChild(
        element
      );

    });


    /*
    |--------------------------------------------------------------------------
    | FIRST DAY OF MONTH
    |--------------------------------------------------------------------------
    */

    const firstDay =
      new Date(
        year,
        month,
        1
      ).getDay();


    /*
    |--------------------------------------------------------------------------
    | DAYS IN MONTH
    |--------------------------------------------------------------------------
    */

    const daysInMonth =
      new Date(
        year,
        month + 1,
        0
      ).getDate();


    /*
    |--------------------------------------------------------------------------
    | EMPTY DAYS
    |--------------------------------------------------------------------------
    */

    for (
      let i = 0;
      i < firstDay;
      i++
    ) {

      const empty =
        document.createElement("div");


      empty.className =
        "wb-calendar__day wb-calendar__day--empty";


      calendarGrid.appendChild(
        empty
      );

    }


    /*
    |--------------------------------------------------------------------------
    | CREATE CALENDAR DAYS
    |--------------------------------------------------------------------------
    */

    for (
      let day = 1;
      day <= daysInMonth;
      day++
    ) {

      const cell =
        document.createElement("div");


      cell.className =
        "wb-calendar__day";


      /*
      |--------------------------------------------------------------------------
      | DAY NUMBER
      |--------------------------------------------------------------------------
      */

      const number =
        document.createElement("strong");


      number.textContent =
        day;


      cell.appendChild(
        number
      );


      /*
      |--------------------------------------------------------------------------
      | CREATE YYYY-MM-DD
      |--------------------------------------------------------------------------
      */

      const monthValue =
        String(month + 1).padStart(
          2,
          "0"
        );


      const dayValue =
        String(day).padStart(
          2,
          "0"
        );


      const currentDate =
        `${year}-${monthValue}-${dayValue}`;


      /*
      |--------------------------------------------------------------------------
      | FIND EVENTS FOR THIS DAY
      |--------------------------------------------------------------------------
      */

      const matchingEvents =
        eventData.filter(function (event) {

          return (
            event &&
            event.date &&
            event.date === currentDate
          );

        });


      /*
      |--------------------------------------------------------------------------
      | DISPLAY EVENTS
      |--------------------------------------------------------------------------
      */

      matchingEvents.forEach(
        function (event) {

          const eventElement =
            document.createElement("a");


          eventElement.className =
            "wb-calendar__event";


          /*
          | Never show null
          */

          eventElement.textContent =
            event.title ||
            "Event";


          /*
          | Event URL
          */

         if (event.url) {

  eventElement.href = event.url;

  // Open event in a new tab
  eventElement.target = "_blank";

  // Security for new tab
  eventElement.rel = "noopener noreferrer";

} else {

  eventElement.href = "#";

}


          /*
          | Location tooltip
          */

          if (event.location) {

            eventElement.title =
              event.location;

          }


          cell.appendChild(
            eventElement
          );

        }
      );


      /*
      |--------------------------------------------------------------------------
      | ADD CELL
      |--------------------------------------------------------------------------
      */

      calendarGrid.appendChild(
        cell
      );

    }

  }


  /*
  |--------------------------------------------------------------------------
  | PREVIOUS MONTH
  |--------------------------------------------------------------------------
  */

  if (previousButton) {

    previousButton.addEventListener(
      "click",
      function () {

        calendarDate.setMonth(
          calendarDate.getMonth() - 1
        );


        renderCalendar();

      }
    );

  }


  /*
  |--------------------------------------------------------------------------
  | NEXT MONTH
  |--------------------------------------------------------------------------
  */

  if (nextButton) {

    nextButton.addEventListener(
      "click",
      function () {

        calendarDate.setMonth(
          calendarDate.getMonth() + 1
        );


        renderCalendar();

      }
    );

  }


  /*
  |--------------------------------------------------------------------------
  | TODAY
  |--------------------------------------------------------------------------
  */

  if (todayButton) {

    todayButton.addEventListener(
      "click",
      function () {

        calendarDate =
          new Date();


        renderCalendar();

      }
    );

  }


  /*
  |--------------------------------------------------------------------------
  | INITIAL RENDER
  |--------------------------------------------------------------------------
  */

  renderCalendar();

});


  // js for event page end here

  document.addEventListener("DOMContentLoaded", function () {

    const articleContent = document.querySelector(
      ".wb-article-content"
    );

    const toc = document.getElementById(
      "wb-article-toc"
    );

    if (!articleContent || !toc) {
      return;
    }


    /* =========================================================
       TABLE OF CONTENTS
    ========================================================== */

    const headings = articleContent.querySelectorAll(
      "h2, h3"
    );


    if (!headings.length) {
      const tocWrapper =
        document.querySelector(".wb-article-toc");

      if (tocWrapper) {
        tocWrapper.hidden = true;
      }

      return;
    }


    headings.forEach(function (heading, index) {

      /*
       * Create ID if Gutenberg heading doesn't
       * already have one.
       */

      if (!heading.id) {

        heading.id =
          "article-heading-" + (index + 1);

      }


      const link =
        document.createElement("a");

      link.href =
        "#" + heading.id;

      link.textContent =
        heading.textContent.trim();


      if (heading.tagName.toLowerCase() === "h3") {

        link.classList.add(
          "is-h3"
        );

      }


      link.addEventListener(
        "click",
        function (event) {

          event.preventDefault();

          const target =
            document.getElementById(
              heading.id
            );

          if (!target) {
            return;
          }


          const headerOffset = 100;

          const targetPosition =
            target.getBoundingClientRect().top +
            window.pageYOffset -
            headerOffset;


          window.scrollTo({

            top: targetPosition,

            behavior: "smooth"

          });


          /*
           * Update browser URL without
           * causing another jump.
           */

          if (
            window.history &&
            window.history.pushState
          ) {

            window.history.pushState(
              null,
              "",
              "#" + heading.id
            );

          }

        }
      );


      toc.appendChild(link);

    });


    /* =========================================================
       ACTIVE TOC ITEM
    ========================================================== */

    const tocLinks =
      toc.querySelectorAll("a");


    if (
      "IntersectionObserver" in window &&
      headings.length
    ) {

      const observer =
        new IntersectionObserver(
          function (entries) {

            entries.forEach(function (entry) {

              if (!entry.isIntersecting) {
                return;
              }


              tocLinks.forEach(
                function (link) {

                  link.classList.remove(
                    "is-active"
                  );

                }
              );


              const activeLink =
                toc.querySelector(
                  'a[href="#' +
                  entry.target.id +
                  '"]'
                );


              if (activeLink) {

                activeLink.classList.add(
                  "is-active"
                );

              }

            });

          },
          {
            rootMargin:
              "-110px 0px -65% 0px",

            threshold: 0
          }
        );


      headings.forEach(function (heading) {

        observer.observe(
          heading
        );

      });

    }

  });