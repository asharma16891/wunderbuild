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
  if (!paths.length) {
    return;
  }

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
  const cards = document.querySelectorAll(".pricing-card");
  const pricingGrid = document.querySelector(".pricing-grid");
  const header = document.querySelector("header");

  const headerHeight = header ? header.offsetHeight : 90;

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const plan = button.dataset.plan;

      // Active button
      buttons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");

      // Active card
      cards.forEach((card) => {
        if (card.dataset.plan === plan) {
          card.classList.add("active");

          // Smooth scroll
          const top =
            pricingGrid.getBoundingClientRect().top +
            window.pageYOffset -
            headerHeight -
            20;

          window.scrollTo({
            top,
            behavior: "smooth",
          });
        } else {
          card.classList.remove("active");
        }
      });
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const process = document.querySelector(".wb-migration-process");

  if (!process) return;

  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
    console.warn("GSAP / ScrollTrigger is not loaded.");
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  /* =====================================================
       ELEMENTS
    ===================================================== */

  const desktopSteps = Array.from(
    process.querySelectorAll(".wb-migration-process__step"),
  );

  const mobileSteps = Array.from(
    process.querySelectorAll(".wb-migration-process__mobile-step"),
  );

  const trackFill = process.querySelector(".wb-migration-process__track-fill");

  const mobileLineFill = process.querySelector(
    ".wb-migration-process__mobile-line-fill",
  );

  const desktopCard = process.querySelector(
    ".wb-migration-process__desktop-card",
  );

  const cardLabel = process.querySelector(".wb-migration-process__card-label");

  const cardTitle = process.querySelector(
    ".wb-migration-process__card-content h3",
  );

  const cardText = process.querySelector(
    ".wb-migration-process__card-content p",
  );

  const cardIcon = process.querySelector(".wb-migration-process__icon-value");

  /* =====================================================
       DATA
    ===================================================== */

  const stepsData = [
    {
      label: "Step 01",
      title: "Export the data",
      text: "Export the records you want to bring across from the current system or files.",
      icon: "↓",
    },

    {
      label: "Step 02",
      title: "Send the files to Wunderbuild",
      text: "Provide the Excel or CSV files to the onboarding team.",
      icon: "↳",
    },

    {
      label: "Step 03",
      title: "We review and prepare them",
      text: "The team checks what can be imported and edits or restructures supported data where needed.",
      icon: "≡",
    },

    {
      label: "Step 04",
      title: "We import the supported records",
      text: "The prepared information is imported into the Wunderbuild account.",
      icon: "↓",
    },

    {
      label: "Step 05",
      title: "You check the result",
      text: "Review the imported records and request any necessary adjustments.",
      icon: "✓",
    },
  ];

  const totalSteps = stepsData.length - 1;

  let activeIndex = 0;
  let desktopTrigger = null;

  /* =====================================================
       UPDATE DESKTOP
    ===================================================== */

  function updateDesktop(index, animate = true) {
    index = Math.max(0, Math.min(index, totalSteps));

    activeIndex = index;

    desktopSteps.forEach((step, i) => {
      const active = i === index;

      step.classList.toggle("is-active", active);

      step.setAttribute("aria-selected", active ? "true" : "false");
    });

    const data = stepsData[index];

    if (animate) {
      gsap.to(desktopCard, {
        opacity: 0,
        y: 15,
        duration: 0.18,
        ease: "power2.out",
        onComplete: () => {
          cardLabel.textContent = data.label;
          cardTitle.textContent = data.title;
          cardText.textContent = data.text;
          cardIcon.textContent = data.icon;

          gsap.to(desktopCard, {
            opacity: 1,
            y: 0,
            duration: 0.35,
            ease: "power2.out",
          });
        },
      });
    } else {
      cardLabel.textContent = data.label;
      cardTitle.textContent = data.title;
      cardText.textContent = data.text;
      cardIcon.textContent = data.icon;
    }

    /* timeline */

    const progress = (index / totalSteps) * 100;

    gsap.to(trackFill, {
      width: `${progress}%`,
      duration: animate ? 0.35 : 0,
      ease: "power2.out",
    });
  }

  /* =====================================================
       UPDATE MOBILE
    ===================================================== */

  function updateMobile(index) {
    index = Math.max(0, Math.min(index, totalSteps));

    activeIndex = index;

    mobileSteps.forEach((step, i) => {
      step.classList.toggle("is-active", i === index);
    });

    /*
     * Fill vertical line until active step.
     */

    const activeStep = mobileSteps[index];

    if (activeStep && mobileLineFill) {
      const container = process.querySelector(".wb-migration-process__mobile");

      const number = activeStep.querySelector(
        ".wb-migration-process__mobile-number",
      );

      const containerRect = container.getBoundingClientRect();

      const numberRect = number.getBoundingClientRect();

      const height = numberRect.top - containerRect.top + numberRect.height / 2;

      gsap.to(mobileLineFill, {
        height: `${height}px`,
        duration: 0.35,
        ease: "power2.out",
      });
    }
  }

  /* =====================================================
       INITIAL
    ===================================================== */

  updateDesktop(0, false);
  updateMobile(0);

  /* =====================================================
       DESKTOP SCROLL
    ===================================================== */

  function createDesktopScroll() {
    if (window.innerWidth <= 767) {
      return;
    }

    desktopTrigger = ScrollTrigger.create({
      id: "wbMigrationProcessDesktop",

      trigger: process,

      start: "top top",

      end: () => {
        return "+=" + window.innerHeight * totalSteps;
      },

      pin: true,

      anticipatePin: 1,

      scrub: 0.25,

      invalidateOnRefresh: true,

      snap: {
        snapTo: (value) => {
          const step = Math.round(value * totalSteps);

          return step / totalSteps;
        },

        duration: {
          min: 0.2,
          max: 0.45,
        },

        delay: 0,

        ease: "power2.out",
      },

      onUpdate: (self) => {
        const index = Math.round(self.progress * totalSteps);

        if (index !== activeIndex) {
          updateDesktop(index);
        }
      },
    });
  }

  /* =====================================================
       DESKTOP CLICK
    ===================================================== */

  desktopSteps.forEach((step, index) => {
    step.addEventListener("click", () => {
      if (window.innerWidth <= 767) {
        return;
      }

      if (!desktopTrigger) {
        return;
      }

      const progress = index / totalSteps;

      const target =
        desktopTrigger.start +
        (desktopTrigger.end - desktopTrigger.start) * progress;

      window.scrollTo({
        top: target,

        behavior: "smooth",
      });
    });
  });

  /* =====================================================
       MOBILE SCROLL
    ===================================================== */

  function createMobileScroll() {
    if (window.innerWidth > 767) {
      return;
    }

    mobileSteps.forEach((step, index) => {
      ScrollTrigger.create({
        trigger: step,

        start: "top 60%",

        end: "bottom 40%",

        onEnter: () => {
          updateMobile(index);
        },

        onEnterBack: () => {
          updateMobile(index);
        },
      });
    });
  }

  /* =====================================================
       CREATE
    ===================================================== */

  createDesktopScroll();
  createMobileScroll();

  /* =====================================================
       RESIZE
    ===================================================== */

  let resizeTimer;

  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);

    resizeTimer = setTimeout(() => {
      if (desktopTrigger) {
        desktopTrigger.kill();

        desktopTrigger = null;
      }

      ScrollTrigger.getAll().forEach((trigger) => {
        if (trigger.trigger && process.contains(trigger.trigger)) {
          trigger.kill();
        }
      });

      activeIndex = 0;

      updateDesktop(0, false);
      updateMobile(0);

      createDesktopScroll();
      createMobileScroll();

      ScrollTrigger.refresh();
    }, 250);
  });
});

// reviews page js

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
          "X-Requested-With": "XMLHttpRequest",
        },
      });

      if (!response.ok) {
        window.location.href = url;
        return;
      }

      const html = await response.text();

      const doc = new DOMParser().parseFromString(html, "text/html");

      const newGallery = doc.querySelector(".wb-reviews-gallery");

      const currentGallery = document.querySelector(".wb-reviews-gallery");

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

  document.addEventListener("click", (event) => {
    const link = event.target.closest(
      "[data-review-filter], [data-load-more], .wb-reviews-pages a",
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
    navigate(window.location.href, false);
  });

  /*
    |--------------------------------------------------------------------------
    | OPEN VIDEO
    |--------------------------------------------------------------------------
    */

  function openVideo(button) {
    const card = button.closest(".wb-review-card");

    if (!card) {
      return;
    }

    previousTrigger = button;

    /*
        |----------------------------------------------------------------------
        | MODAL ELEMENTS
        |----------------------------------------------------------------------
        */

    const video = modal.querySelector(".wb-review-modal__video");

    const unavailable = modal.querySelector(".wb-review-modal__unavailable");

    const title = modal.querySelector("#wb-review-modal-title");

    const role = modal.querySelector(".wb-review-modal__role");

    const summary = modal.querySelector(".wb-review-modal__summary");

    const topic = modal.querySelector(".wb-review-modal__topic");

    const rating = modal.querySelector(".wb-review-modal__rating");

    const transcript = modal.querySelector(".wb-review-transcript");

    const transcriptContent = transcript.querySelector("div");

    const captions = modal.querySelector(".wb-review-modal__captions");

    /*
        |----------------------------------------------------------------------
        | CARD DATA
        |----------------------------------------------------------------------
        */

    const name =
      card.querySelector(".wb-review-person strong")?.textContent.trim() || "";

    const roleText = [...card.querySelectorAll(".wb-review-person span")]
      .map((item) => item.textContent.trim())
      .filter(Boolean)
      .join(" · ");

    const reviewText =
      card.querySelector(".wb-review-video__summary")?.textContent.trim() || "";

    const topicText =
      card.querySelector(".wb-review-topic")?.textContent.trim() || "";

    const ratingText =
      card.querySelector(".wb-review-rating")?.textContent.trim() || "";

    const poster = card.querySelector(".wb-review-video__media img")?.src || "";

    /*
        |----------------------------------------------------------------------
        | DATA FROM BUTTON
        |----------------------------------------------------------------------
        */

    const videoUrl = button.dataset.videoUrl || "";

    const captionsUrl = button.dataset.captions || "";

    const transcriptText = button.dataset.transcript || "";

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

      transcriptContent.textContent = transcriptText;
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

    modal.setAttribute("aria-hidden", "false");

    document.body.classList.add("wb-review-modal-open");

    modal.querySelector(".wb-review-modal__close")?.focus();
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

    const video = modal.querySelector(".wb-review-modal__video");

    video.pause();

    video.removeAttribute("src");

    video.removeAttribute("poster");

    video.load();

    modal.hidden = true;

    modal.setAttribute("aria-hidden", "true");

    document.body.classList.remove("wb-review-modal-open");

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

  document.addEventListener("click", (event) => {
    const button = event.target.closest("[data-video-open]");

    if (button) {
      openVideo(button);

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

document.addEventListener("DOMContentLoaded", function () {
  const timeline = document.querySelector(".mcp-control__timeline");
  const steps = document.querySelectorAll(".mcp-control__step");
  const progress = document.querySelector(".mcp-control__line span");

  if (!timeline || !steps.length || !progress) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        const step = entry.target;

        step.classList.add("is-visible");

        setTimeout(() => {
          step.classList.add("is-active");
        }, 180);

        const index = [...steps].indexOf(step);

        const progressValue = ((index + 1) / steps.length) * 100;

        progress.style.height = `${progressValue}%`;
      });
    },
    {
      threshold: 0.45,
    },
  );

  steps.forEach((step) => {
    observer.observe(step);
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

      tab.setAttribute("aria-selected", isActive ? "true" : "false");
    });
  }

  /*
    |--------------------------------------------------------------------------
    | FILTER POSTS
    |--------------------------------------------------------------------------
    */

  function filterPosts(updateHistory = true) {
    let visibleCount = 0;

    posts.forEach(function (post) {
      const postTopic = post.dataset.topic || "";

      const searchableText = post.dataset.search || "";

      const topicMatches = activeTopic === "all" || postTopic === activeTopic;

      const searchMatches =
        !searchTerm || searchableText.includes(searchTerm.toLowerCase());

      const shouldShow = topicMatches && searchMatches;

      post.classList.toggle("is-hidden", !shouldShow);

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
      noResults.hidden = visibleCount !== 0;
    }

    /*
        |--------------------------------------------------------------------------
        | RESULT COUNT
        |--------------------------------------------------------------------------
        */

    if (resultsCount) {
      resultsCount.textContent =
        visibleCount + (visibleCount === 1 ? " article" : " articles");
    }

    /*
        |--------------------------------------------------------------------------
        | CLEAR SEARCH BUTTON
        |--------------------------------------------------------------------------
        */

    if (clearSearchButton) {
      clearSearchButton.hidden = !searchTerm;
    }

    /*
        |--------------------------------------------------------------------------
        | URL
        |--------------------------------------------------------------------------
        */

    if (updateHistory) {
      updateUrl();
    }
  }

  /*
    |--------------------------------------------------------------------------
    | TAB CLICK
    |--------------------------------------------------------------------------
    */

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      activeTopic = this.dataset.topic || "all";

      setActiveTab(activeTopic);

      filterPosts();
    });
  });

  /*
    |--------------------------------------------------------------------------
    | SEARCH
    |--------------------------------------------------------------------------
    */

  if (searchInput) {
    searchInput.addEventListener("input", function () {
      searchTerm = this.value.trim().toLowerCase();

      filterPosts();
    });
  }

  /*
    |--------------------------------------------------------------------------
    | CLEAR SEARCH
    |--------------------------------------------------------------------------
    */

  if (clearSearchButton) {
    clearSearchButton.addEventListener("click", function () {
      searchTerm = "";

      searchInput.value = "";

      searchInput.focus();

      filterPosts();
    });
  }

  /*
    |--------------------------------------------------------------------------
    | CLEAR ALL FILTERS
    |--------------------------------------------------------------------------
    */

  if (clearFilterButton) {
    clearFilterButton.addEventListener("click", function () {
      activeTopic = "all";

      searchTerm = "";

      setActiveTab("all");

      if (searchInput) {
        searchInput.value = "";
      }

      filterPosts();
    });
  }

  /*
    |--------------------------------------------------------------------------
    | KEYBOARD SUPPORT
    |--------------------------------------------------------------------------
    */

  tabs.forEach(function (tab, index) {
    tab.addEventListener("keydown", function (event) {
      let nextIndex = index;

      if (event.key === "ArrowRight") {
        nextIndex = (index + 1) % tabs.length;
      }

      if (event.key === "ArrowLeft") {
        nextIndex = (index - 1 + tabs.length) % tabs.length;
      }

      if (event.key === "ArrowRight" || event.key === "ArrowLeft") {
        event.preventDefault();

        tabs[nextIndex].focus();

        tabs[nextIndex].click();
      }
    });
  });

  /*
    |--------------------------------------------------------------------------
    | INITIAL URL STATE
    |--------------------------------------------------------------------------
    */

  const initialState = getUrlState();

  activeTopic = initialState.topic;

  searchTerm = initialState.search.trim().toLowerCase();

  /*
    |--------------------------------------------------------------------------
    | VALIDATE TOPIC
    |--------------------------------------------------------------------------
    */

  const validTopic = Array.from(tabs).some(function (tab) {
    return tab.dataset.topic === activeTopic;
  });

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
    searchInput.value = initialState.search;
  }

  filterPosts(false);
});
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.getElementById("wb-blog-tabs");
  const tabsWrap = document.querySelector(".wb-blog-tabs-wrap");
  const nextButton = document.getElementById("wb-blog-tabs-next");

  if (!tabs || !tabsWrap || !nextButton) {
    return;
  }

  /* =====================================================
       CHECK WHETHER MORE TABS ARE AVAILABLE
       ===================================================== */

  function updateTabScrollState() {
    const maxScroll = tabs.scrollWidth - tabs.clientWidth;

    const currentScroll = tabs.scrollLeft;

    /*
     * No horizontal overflow
     */

    if (maxScroll <= 5) {
      tabsWrap.classList.add("is-end");

      return;
    }

    /*
     * User reached the right side
     */

    if (currentScroll >= maxScroll - 5) {
      tabsWrap.classList.add("is-end");
    } else {
      tabsWrap.classList.remove("is-end");
    }
  }

  /* =====================================================
       NEXT BUTTON
       ===================================================== */

  nextButton.addEventListener("click", function () {
    const amount = Math.min(tabs.clientWidth * 0.55, 400);

    tabs.scrollBy({
      left: amount,
      behavior: "smooth",
    });
  });

  /* =====================================================
       TAB SCROLL
       ===================================================== */

  tabs.addEventListener("scroll", updateTabScrollState, {
    passive: true,
  });

  /* =====================================================
       RESIZE
       ===================================================== */

  window.addEventListener("resize", updateTabScrollState);

  /* =====================================================
       INITIAL CHECK
       ===================================================== */

  updateTabScrollState();
});

// blog page js end here

// js for event page
document.addEventListener("DOMContentLoaded", function () {
  const filters = {
    relationship: "all",
    format: "all",
    view: "upcoming",
  };

  const filterTriggers = document.querySelectorAll("[data-filter-trigger]");

  const filterContainers = document.querySelectorAll(".wb-event-filter");

  const eventCards = document.querySelectorAll("#wb-events-grid [data-event]");

  const emptyState = document.getElementById("wb-events-empty");

  /* =========================================================
       DROPDOWNS
    ========================================================== */

  filterTriggers.forEach(function (trigger) {
    trigger.addEventListener("click", function (event) {
      event.stopPropagation();

      const parent = trigger.closest(".wb-event-filter");

      const isOpen = parent.classList.contains("is-open");

      filterContainers.forEach(function (container) {
        container.classList.remove("is-open");

        const button = container.querySelector("[data-filter-trigger]");

        if (button) {
          button.setAttribute("aria-expanded", "false");
        }
      });

      if (!isOpen) {
        parent.classList.add("is-open");

        trigger.setAttribute("aria-expanded", "true");
      }
    });
  });

  document.addEventListener("click", function () {
    filterContainers.forEach(function (container) {
      container.classList.remove("is-open");

      const button = container.querySelector("[data-filter-trigger]");

      if (button) {
        button.setAttribute("aria-expanded", "false");
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

        const filterType = button.dataset.filter;

        const value = button.dataset.value;

        const label = button.textContent.trim();

        filters[filterType] = value;

        const filterContainer = button.closest(".wb-event-filter");

        const valueElement = filterContainer.querySelector(
          `[data-filter-value="${filterType}"]`,
        );

        if (valueElement) {
          valueElement.textContent = label;
        }

        filterContainer
          .querySelectorAll(".wb-event-dropdown__menu button")
          .forEach(function (item) {
            item.classList.remove("is-selected");
          });

        button.classList.add("is-selected");

        filterContainer.classList.remove("is-open");

        const trigger = filterContainer.querySelector("[data-filter-trigger]");

        if (trigger) {
          trigger.setAttribute("aria-expanded", "false");
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

    const today = new Date();
    today.setHours(0, 0, 0, 0);

    eventCards.forEach(function (card) {
      const relationship = card.dataset.relationship;

      const format = card.dataset.format;

      const date = new Date(card.dataset.date);

      date.setHours(0, 0, 0, 0);

      const relationshipMatch =
        filters.relationship === "all" || filters.relationship === relationship;

      const formatMatch = filters.format === "all" || filters.format === format;

      const viewMatch =
        filters.view === "upcoming" ? date >= today : date < today;

      if (relationshipMatch && formatMatch && viewMatch) {
        card.hidden = false;

        visibleCount++;
      } else {
        card.hidden = true;
      }
    });

    if (emptyState) {
      emptyState.hidden = visibleCount !== 0;
    }
  }

  /* =========================================================
       scroll to top LOGIC
    ========================================================== */

  function scrollToArchive() {
    const archiveSection = document.getElementById("upcoming-events");

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

  setTimeout(function () {
    scrollToArchive();
  }, 100);

  /* =========================================================
       CALENDAR
    ========================================================== */

  const calendarGrid = document.getElementById("calendar-grid");

  const calendarMonth = document.getElementById("calendar-month");

  const previousButton = document.getElementById("calendar-prev");

  const nextButton = document.getElementById("calendar-next");

  const todayButton = document.getElementById("calendar-today");

  if (!calendarGrid || !calendarMonth) {
    return;
  }

  const eventData = Array.from(eventCards).map(function (card) {
    return {
      title: card.querySelector("h3")?.textContent.trim(),

      date: card.dataset.date,
    };
  });

  let calendarDate = new Date();

  function renderCalendar() {
    const year = calendarDate.getFullYear();

    const month = calendarDate.getMonth();

    const monthName = calendarDate.toLocaleString("en-AU", {
      month: "long",
      year: "numeric",
    });

    calendarMonth.textContent = monthName;

    calendarGrid.innerHTML = "";

    const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    dayNames.forEach(function (day) {
      const element = document.createElement("div");

      element.className = "wb-calendar__day wb-calendar__day-name";

      element.textContent = day;

      calendarGrid.appendChild(element);
    });

    const firstDay = new Date(year, month, 1).getDay();

    const daysInMonth = new Date(year, month + 1, 0).getDate();

    for (let i = 0; i < firstDay; i++) {
      const empty = document.createElement("div");

      empty.className = "wb-calendar__day";

      calendarGrid.appendChild(empty);
    }

    for (let day = 1; day <= daysInMonth; day++) {
      const cell = document.createElement("div");

      cell.className = "wb-calendar__day";

      const number = document.createElement("strong");

      number.textContent = day;

      cell.appendChild(number);

      const monthValue = String(month + 1).padStart(2, "0");

      const dayValue = String(day).padStart(2, "0");

      const currentDate = `${year}-${monthValue}-${dayValue}`;

      eventData
        .filter(function (event) {
          return event.date === currentDate;
        })
        .forEach(function (event) {
          const eventElement = document.createElement("span");

          eventElement.className = "wb-calendar__event";

          eventElement.textContent = event.title;

          cell.appendChild(eventElement);
        });

      calendarGrid.appendChild(cell);
    }
  }

  previousButton?.addEventListener("click", function () {
    calendarDate.setMonth(calendarDate.getMonth() - 1);

    renderCalendar();
  });

  nextButton?.addEventListener("click", function () {
    calendarDate.setMonth(calendarDate.getMonth() + 1);

    renderCalendar();
  });

  todayButton?.addEventListener("click", function () {
    calendarDate = new Date();

    renderCalendar();
  });

  renderCalendar();
});

// js for event page end here
