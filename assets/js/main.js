// // Sticky nav on scroll
// const header = document.getElementById("siteHeader");
// window.addEventListener("scroll", () => {
//   header.classList.toggle("scrolled", window.scrollY > 40);
// });
// document.addEventListener("DOMContentLoaded", function () {

//   const mobileToggle = document.querySelector(".mobile-toggle");
//   const navLinks = document.querySelector(".nav-links");
//   const navActions = document.querySelector(".nav-actions");

//   if (mobileToggle && navLinks && navActions) {

//     mobileToggle.addEventListener("click", function () {

//       const isOpen = mobileToggle.classList.toggle("active");

//       navLinks.classList.toggle("mobile-menu-open", isOpen);
//       navActions.classList.toggle("mobile-menu-open", isOpen);

//       // Accessibility
//       mobileToggle.setAttribute("aria-expanded", isOpen);

//       mobileToggle.setAttribute(
//         "aria-label",
//         isOpen ? "Close menu" : "Open menu"
//       );

//     });

//   }

// });

document.addEventListener("DOMContentLoaded", function () {
  const header = document.getElementById("siteHeader");
  const hero = document.querySelector(".hero");
  const Secondhero = document.querySelector(".pricing-hero");

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

  function getTargetScroll(index) {
    const rect = showcase.getBoundingClientRect();
    const start = window.scrollY + rect.top;
    const scrollArea = showcase.offsetHeight - window.innerHeight;

    return start + (scrollArea / total) * index;
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

        cards.forEach(card => {

            if (card.dataset.plan === plan) {
                card.classList.add("active");
            } else {
                card.classList.remove("active");
            }

        });

    }


    // Job Tabs
    buttons.forEach(button => {

        button.addEventListener("click", () => {

            const plan = button.dataset.plan;

            buttons.forEach(btn => {
                btn.classList.remove("active");
            });

            button.classList.add("active");

            updatePricingCard(plan);

            const pricingGrid = getActiveGrid();

            if (pricingGrid) {

                const top =
                    pricingGrid.getBoundingClientRect().top +
                    window.pageYOffset -
                    headerHeight -
                    20;

                window.scrollTo({
                    top: top,
                    behavior: "smooth"
                });

            }

        });

    });


    // Monthly / Annual Toggle
    if (billingToggle) {

        billingToggle.addEventListener("click", () => {

            const isAnnual =
                billingToggle.classList.toggle("annual");

            billingToggle.setAttribute(
                "aria-pressed",
                isAnnual ? "true" : "false"
            );


            pricingGrids.forEach(grid => {

                const billingType = grid.dataset.billing;

                if (
                    isAnnual &&
                    billingType === "annual"
                ) {

                    grid.classList.add("active");

                } else if (
                    !isAnnual &&
                    billingType === "monthly"
                ) {

                    grid.classList.add("active");

                } else {

                    grid.classList.remove("active");

                }

            });


            // Get currently selected job tab
            const activeButton =
                document.querySelector(".job-btn.active");


            // Update cards based on active job tab
            if (activeButton) {

                updatePricingCard(
                    activeButton.dataset.plan
                );

            }

        });

    }

});



document.addEventListener("DOMContentLoaded", function () {

    const migrationSections = document.querySelectorAll(
        ".wb-migration-process"
    );


    migrationSections.forEach(function (section) {

        const steps = section.querySelectorAll(
            ".wb-migration-process__step"
        );

        const mobileSteps = section.querySelectorAll(
            ".wb-migration-process__mobile-step"
        );

        const desktopCards = section.querySelectorAll(
            ".wb-migration-process__desktop-card"
        );

        const desktopSection = section.querySelector(
            ".wb-migration-process__desktop"
        );

        const trackFill = section.querySelector(
            ".wb-migration-process__track-fill"
        );

        const mobileLineFill = section.querySelector(
            ".wb-migration-process__mobile-line-fill"
        );


        /*
        ========================================
        UPDATE ACTIVE STEP
        ========================================
        */

        function updateStep(stepIndex) {

            stepIndex = String(stepIndex);


            /*
            ----------------------------------------
            DESKTOP STEPS
            ----------------------------------------
            */

            steps.forEach(function (step) {

                const isActive =
                    step.dataset.step === stepIndex;

                step.classList.toggle(
                    "is-active",
                    isActive
                );

                step.setAttribute(
                    "aria-selected",
                    isActive ? "true" : "false"
                );

            });


            /*
            ----------------------------------------
            DESKTOP CARDS
            ----------------------------------------
            */

            desktopCards.forEach(function (card) {

                const isActive =
                    card.dataset.stepContent === stepIndex;

                card.classList.toggle(
                    "is-active",
                    isActive
                );

            });


            /*
            ----------------------------------------
            MOBILE STEPS
            ----------------------------------------
            */

            mobileSteps.forEach(function (mobileStep) {

                const isActive =
                    mobileStep.dataset.mobileStep === stepIndex;

                mobileStep.classList.toggle(
                    "is-active",
                    isActive
                );

            });


            /*
            ----------------------------------------
            DESKTOP PROGRESS LINE
            ----------------------------------------
            */

            if (
                trackFill &&
                steps.length > 1
            ) {

                const progress =
                    (
                        Number(stepIndex) /
                        (steps.length - 1)
                    ) * 100;

                trackFill.style.width =
                    progress + "%";

            }


            /*
            ----------------------------------------
            MOBILE PROGRESS LINE
            ----------------------------------------
            */

            if (
                mobileLineFill &&
                mobileSteps.length > 1
            ) {

                const progress =
                    (
                        Number(stepIndex) /
                        (mobileSteps.length - 1)
                    ) * 100;

                mobileLineFill.style.height =
                    progress + "%";

            }

        }


        /*
        ========================================
        DESKTOP STEP CLICK
        ========================================
        */

        steps.forEach(function (step) {

            step.addEventListener(
                "click",
                function () {

                    updateStep(
                        this.dataset.step
                    );

                }
            );

        });


        /*
        ========================================
        DESKTOP SCROLL FUNCTIONALITY
        ========================================
        */

        let ticking = false;


        function handleDesktopScroll() {

            /*
            Only run on desktop
            */

            if (window.innerWidth < 768) {
                return;
            }


            if (
                !desktopSection ||
                steps.length < 2
            ) {
                return;
            }


            const rect =
                desktopSection.getBoundingClientRect();

            const windowHeight =
                window.innerHeight;


            /*
            Stop if section is outside viewport
            */

            if (
                rect.bottom < 0 ||
                rect.top > windowHeight
            ) {
                return;
            }


            /*
            Scroll position inside section
            */

            const scrollPosition =
                windowHeight * 0.5;


            let progress =
                (scrollPosition - rect.top) /
                rect.height;


            /*
            Keep progress between 0 and 1
            */

            progress = Math.max(
                0,
                Math.min(1, progress)
            );


            /*
            Convert progress to step number
            */

            const stepIndex =
                Math.round(
                    progress *
                    (steps.length - 1)
                );


            updateStep(stepIndex);

        }


        window.addEventListener(
            "scroll",
            function () {

                if (!ticking) {

                    window.requestAnimationFrame(
                        function () {

                            handleDesktopScroll();

                            ticking = false;

                        }
                    );

                    ticking = true;

                }

            },
            {
                passive: true
            }
        );


        window.addEventListener(
            "resize",
            function () {

                handleDesktopScroll();

            }
        );


        /*
        ========================================
        MOBILE SCROLL FUNCTIONALITY
        ========================================
        */

        if (
            "IntersectionObserver" in window &&
            mobileSteps.length
        ) {

            const mobileObserver =
                new IntersectionObserver(
                    function (entries) {

                        entries.forEach(
                            function (entry) {

                                if (
                                    entry.isIntersecting &&
                                    window.innerWidth < 768
                                ) {

                                    updateStep(
                                        entry.target
                                            .dataset
                                            .mobileStep
                                    );

                                }

                            }
                        );

                    },
                    {
                        threshold: 0.5
                    }
                );


            mobileSteps.forEach(
                function (mobileStep) {

                    mobileObserver.observe(
                        mobileStep
                    );

                }
            );

        }


        /*
        ========================================
        INITIAL STATE
        ========================================
        */

        updateStep("0");


        /*
        Run once after page load
        */

        setTimeout(
            function () {

                handleDesktopScroll();

            },
            100
        );

    });

});

    document.addEventListener("DOMContentLoaded", () => {

      const modal = document.getElementById("wb-review-modal");

      if (!modal) return;

      let previousTrigger = null;


      /*
      |--------------------------------------------------------------------------
      | FILTER / PAGINATION
      |--------------------------------------------------------------------------
      */

      async function navigate(url, push = true) {

        const scrollPosition = window.scrollY;

        try {

          const response = await fetch(url, {
            headers: {
              "X-Requested-With": "XMLHttpRequest"
            }
          });

          if (!response.ok) {
            window.location.href = url;
            return;
          }


          const html = await response.text();

          const doc = new DOMParser().parseFromString(
            html,
            "text/html"
          );


          const newGallery = doc.querySelector(
            ".wb-reviews-gallery"
          );

          const currentGallery = document.querySelector(
            ".wb-reviews-gallery"
          );


          if (!newGallery || !currentGallery) {
            window.location.href = url;
            return;
          }


          currentGallery.replaceWith(newGallery);


          if (push) {
            history.pushState({}, "", url);
          }


          /*
          |------------------------------------------------------------------
          | KEEP CURRENT SCROLL POSITION
          |------------------------------------------------------------------
          */

          requestAnimationFrame(() => {
            window.scrollTo(0, scrollPosition);
          });


        } catch (error) {

          window.location.href = url;

        }

      }


      /*
      |--------------------------------------------------------------------------
      | FILTERS + LOAD MORE + PAGINATION
      |--------------------------------------------------------------------------
      */

      document.addEventListener("click", event => {

        const link = event.target.closest(
          "[data-review-filter], [data-load-more], .wb-reviews-pages a"
        );


        if (!link) {
          return;
        }


        event.preventDefault();


        navigate(link.href);

      });


      /*
      |--------------------------------------------------------------------------
      | BACK / FORWARD
      |--------------------------------------------------------------------------
      */

      window.addEventListener("popstate", () => {

        navigate(
          window.location.href,
          false
        );

      });


      /*
      |--------------------------------------------------------------------------
      | OPEN VIDEO
      |--------------------------------------------------------------------------
      */

      function openVideo(button) {

        const card = button.closest(
          ".wb-review-card"
        );


        if (!card) {
          return;
        }


        previousTrigger = button;


        /*
        |----------------------------------------------------------------------
        | MODAL ELEMENTS
        |----------------------------------------------------------------------
        */

        const video = modal.querySelector(
          ".wb-review-modal__video"
        );

        const unavailable = modal.querySelector(
          ".wb-review-modal__unavailable"
        );

        const title = modal.querySelector(
          "#wb-review-modal-title"
        );

        const role = modal.querySelector(
          ".wb-review-modal__role"
        );

        const summary = modal.querySelector(
          ".wb-review-modal__summary"
        );

        const topic = modal.querySelector(
          ".wb-review-modal__topic"
        );

        const rating = modal.querySelector(
          ".wb-review-modal__rating"
        );

        const transcript = modal.querySelector(
          ".wb-review-transcript"
        );

        const transcriptContent = transcript.querySelector(
          "div"
        );

        const captions = modal.querySelector(
          ".wb-review-modal__captions"
        );


        /*
        |----------------------------------------------------------------------
        | CARD DATA
        |----------------------------------------------------------------------
        */

        const name =
          card.querySelector(
            ".wb-review-person strong"
          )?.textContent.trim() || "";


        const roleText =
          [...card.querySelectorAll(
            ".wb-review-person span"
          )]
            .map(item => item.textContent.trim())
            .filter(Boolean)
            .join(" · ");


        const reviewText =
          card.querySelector(
            ".wb-review-video__summary"
          )?.textContent.trim() || "";


        const topicText =
          card.querySelector(
            ".wb-review-topic"
          )?.textContent.trim() || "";


        const ratingText =
          card.querySelector(
            ".wb-review-rating"
          )?.textContent.trim() || "";


        const poster =
          card.querySelector(
            ".wb-review-video__media img"
          )?.src || "";


        /*
        |----------------------------------------------------------------------
        | DATA FROM BUTTON
        |----------------------------------------------------------------------
        */

        const videoUrl =
          button.dataset.videoUrl || "";


        const captionsUrl =
          button.dataset.captions || "";


        const transcriptText =
          button.dataset.transcript || "";


        /*
        |----------------------------------------------------------------------
        | FILL MODAL DETAILS
        |----------------------------------------------------------------------
        */

        title.textContent = name;

        role.textContent = roleText;

        summary.textContent = reviewText;

        topic.textContent = topicText;

        rating.textContent = ratingText;


        /*
        |----------------------------------------------------------------------
        | VIDEO
        |----------------------------------------------------------------------
        */

        video.pause();

        video.removeAttribute("src");


        if (videoUrl) {


          /*
          |------------------------------------------------------------------
          | VIDEO AVAILABLE
          |------------------------------------------------------------------
          */

          video.hidden = false;

          unavailable.hidden = true;


          /*
          |------------------------------------------------------------------
          | VIDEO URL
          |------------------------------------------------------------------
          */

          video.src = videoUrl;


          /*
          |------------------------------------------------------------------
          | POSTER
          |------------------------------------------------------------------
          */

          if (poster) {
            video.poster = poster;
          }


          /*
          |------------------------------------------------------------------
          | CAPTIONS
          |------------------------------------------------------------------
          */

          if (captionsUrl) {

            captions.src = captionsUrl;

            captions.hidden = false;

          } else {

            captions.removeAttribute("src");

            captions.hidden = true;

          }


          video.load();


        } else {


          /*
          |------------------------------------------------------------------
          | VIDEO NOT AVAILABLE
          |------------------------------------------------------------------
          */

          video.hidden = true;

          unavailable.hidden = false;

        }


        /*
        |----------------------------------------------------------------------
        | TRANSCRIPT
        |----------------------------------------------------------------------
        */

        if (transcriptText) {

          transcript.hidden = false;

          transcriptContent.textContent =
            transcriptText;

        } else {

          transcript.hidden = true;

          transcriptContent.textContent = "";

        }


        /*
        |----------------------------------------------------------------------
        | OPEN MODAL
        |----------------------------------------------------------------------
        */

        modal.hidden = false;

        modal.setAttribute(
          "aria-hidden",
          "false"
        );


        document.body.classList.add(
          "wb-review-modal-open"
        );


        modal.querySelector(
          ".wb-review-modal__close"
        )?.focus();

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


        const video = modal.querySelector(
          ".wb-review-modal__video"
        );


        video.pause();

        video.removeAttribute("src");

        video.removeAttribute("poster");

        video.load();


        modal.hidden = true;

        modal.setAttribute(
          "aria-hidden",
          "true"
        );


        document.body.classList.remove(
          "wb-review-modal-open"
        );


        if (previousTrigger) {

          previousTrigger.focus();

          previousTrigger = null;

        }

      }


      /*
      |--------------------------------------------------------------------------
      | VIDEO CLICK
      |--------------------------------------------------------------------------
      */

      document.addEventListener("click", event => {


        const button = event.target.closest(
          "[data-video-open]"
        );


        if (button) {

          openVideo(button);

          return;

        }


        const closeButton = event.target.closest(
          "[data-video-close]"
        );


        if (closeButton) {

          closeVideo();

        }

      });


      /*
      |--------------------------------------------------------------------------
      | ESCAPE
      |--------------------------------------------------------------------------
      */

      document.addEventListener("keydown", event => {

        if (
          event.key === "Escape" &&
          !modal.hidden
        ) {

          closeVideo();

        }

      });

    });


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

        const select = document.querySelector(
          'select[name="enquiry-type"]'
        );

        if (!select) {
          return;
        }

        select.value = selectedRoute;

        select.dispatchEvent(
          new Event("change", {
            bubbles: true
          })
        );

      });

    });