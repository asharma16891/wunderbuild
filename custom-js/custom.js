// Sticky nav on scroll
const header = document.getElementById("siteHeader");
window.addEventListener("scroll", () => {
  header.classList.toggle("scrolled", window.scrollY > 40);
});
document.addEventListener("DOMContentLoaded", function () {

  const mobileToggle = document.querySelector(".mobile-toggle");
  const navLinks = document.querySelector(".nav-links");
  const navActions = document.querySelector(".nav-actions");

  if (mobileToggle && navLinks && navActions) {

    mobileToggle.addEventListener("click", function () {

      const isOpen = mobileToggle.classList.toggle("active");

      navLinks.classList.toggle("mobile-menu-open", isOpen);
      navActions.classList.toggle("mobile-menu-open", isOpen);

      // Accessibility
      mobileToggle.setAttribute("aria-expanded", isOpen);

      mobileToggle.setAttribute(
        "aria-label",
        isOpen ? "Close menu" : "Open menu"
      );

    });

  }

});

// Product showcase tabs
const tabBtns = document.querySelectorAll(".tab-btn");
const panels = document.querySelectorAll(".tab-panel");
tabBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    tabBtns.forEach((b) => b.classList.remove("active"));
    panels.forEach((p) => p.classList.remove("active"));
    btn.classList.add("active");
    document.getElementById("panel-" + btn.dataset.tab).classList.add("active");
  });
});

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
      Math.floor(progress * pathRows.length)
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

      pathFill.style.height =
        ((index + 1) / pathRows.length) * 100 + "%";
    });
  });
}

// Testimonials slider
// Testimonials Slider
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
    dot.setAttribute(
      "aria-label",
      "Go to testimonial " + (i + 1)
    );

    dot.addEventListener("click", () => goTo(i));

    dotsWrap.appendChild(dot);
  });

  const dots = dotsWrap.querySelectorAll(".t-dot");

  function goTo(i) {
    index = (i + slides.length) % slides.length;

    track.style.transform =
      "translateX(-" + index * 100 + "%)";

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
    { passive: true }
  );

  track.addEventListener("touchend", (e) => {
    if (startX === null) return;

    const dx =
      e.changedTouches[0].clientX - startX;

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

document.addEventListener('DOMContentLoaded', function () {

    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function (item) {

        const question = item.querySelector('.faq-question');

        question.addEventListener('click', function () {

            const isActive = item.classList.contains('active');

            // Close all FAQs
            faqItems.forEach(function (faq) {
                faq.classList.remove('active');
            });

            // Open clicked FAQ
            if (!isActive) {
                item.classList.add('active');
            }

        });

    });

});


document.addEventListener("DOMContentLoaded", function () {

    const layout = document.querySelector(".lead-feature-layout");
    const sidebar = document.querySelector(".lead-feature-sidebar-inner");
    const preview = document.querySelector(".lead-feature-preview");

    const tabs = document.querySelectorAll(".lead-feature-tab");
    const contents = document.querySelectorAll(".feature-content-item");

    if (!layout || !sidebar || !preview || !tabs.length || !contents.length) {
        return;
    }

    /*
    |--------------------------------------------------------------------------
    | Store original content positions
    |--------------------------------------------------------------------------
    */

    const originalPositions = [];

    contents.forEach(function (content) {
        originalPositions.push({
            element: content,
            parent: content.parentNode
        });
    });


    /*
    |--------------------------------------------------------------------------
    | Check mobile
    |--------------------------------------------------------------------------
    */

    function isMobile() {
        return window.innerWidth <= 800;
    }


    /*
    |--------------------------------------------------------------------------
    | Move content below clicked tab on mobile
    |--------------------------------------------------------------------------
    */

    function showTab(target, clickedTab) {

        // Remove active from all tabs
        tabs.forEach(function (tab) {
            tab.classList.remove("active");
        });

        // Add active to clicked tab
        clickedTab.classList.add("active");


        if (isMobile()) {

            const targetContent = document.querySelector(
                '.feature-content-item[data-content="' + target + '"]'
            );

            if (!targetContent) {
                return;
            }


            /*
            |--------------------------------------------------------------------------
            | Hide all content first
            |--------------------------------------------------------------------------
            */

            contents.forEach(function (content) {
                content.classList.remove("active");
            });


            /*
            |--------------------------------------------------------------------------
            | Move selected image directly after clicked tab
            |--------------------------------------------------------------------------
            */

            clickedTab.insertAdjacentElement(
                "afterend",
                targetContent
            );


            /*
            |--------------------------------------------------------------------------
            | Activate image
            |--------------------------------------------------------------------------
            */

            requestAnimationFrame(function () {
                targetContent.classList.add("active");
            });

        } else {

            /*
            |--------------------------------------------------------------------------
            | Desktop
            | Keep existing desktop preview behaviour
            |--------------------------------------------------------------------------
            */

            contents.forEach(function (content) {

                if (content.dataset.content === target) {

                    content.classList.remove("active");

                    // Restart animation
                    void content.offsetWidth;

                    content.classList.add("active");

                } else {

                    content.classList.remove("active");

                }

            });

        }

    }


    /*
    |--------------------------------------------------------------------------
    | Click Events
    |--------------------------------------------------------------------------
    */

    tabs.forEach(function (tab) {

        tab.addEventListener("click", function () {

            const target = tab.dataset.tab;

            showTab(target, tab);

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Handle Resize
    |--------------------------------------------------------------------------
    */

    let lastMobileState = isMobile();

    window.addEventListener("resize", function () {

        const currentMobileState = isMobile();

        // Only run when crossing mobile breakpoint
        if (currentMobileState === lastMobileState) {
            return;
        }

        lastMobileState = currentMobileState;


        /*
        |--------------------------------------------------------------------------
        | Going back to desktop
        |--------------------------------------------------------------------------
        */

        if (!currentMobileState) {

            // Move all content back to preview
            originalPositions.forEach(function (item) {

                item.parent.appendChild(item.element);

            });


            // Show first active content
            contents.forEach(function (content) {
                content.classList.remove("active");
            });

            const activeTab = document.querySelector(
                ".lead-feature-tab.active"
            );

            if (activeTab) {

                const activeContent = document.querySelector(
                    '.feature-content-item[data-content="' +
                    activeTab.dataset.tab +
                    '"]'
                );

                if (activeContent) {
                    activeContent.classList.add("active");
                }

            }

        }

    });


    /*
    |--------------------------------------------------------------------------
    | Initial Mobile State
    |--------------------------------------------------------------------------
    */

    if (isMobile()) {

        const activeTab = document.querySelector(
            ".lead-feature-tab.active"
        );

        if (activeTab) {

            const target = activeTab.dataset.tab;

            const targetContent = document.querySelector(
                '.feature-content-item[data-content="' + target + '"]'
            );

            if (targetContent) {

                targetContent.classList.add("active");

                activeTab.insertAdjacentElement(
                    "afterend",
                    targetContent
                );

            }

        }

    }

});




