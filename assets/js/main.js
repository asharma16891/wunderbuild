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


document.addEventListener("DOMContentLoaded", () => {

    const dots = document.querySelectorAll(".hs-dot");
    const cards = document.querySelectorAll(".hs-card");
    const items = document.querySelectorAll(".hs-item");

    function activate(id) {

        dots.forEach(dot => {
            dot.classList.toggle(
                "active",
                dot.dataset.id === id
            );
        });

        cards.forEach(card => {
            card.classList.toggle(
                "show",
                card.dataset.id === id
            );
        });

        items.forEach(item => {
            item.classList.toggle(
                "active",
                item.dataset.id === id
            );
        });

    }

    dots.forEach(dot => {

        dot.addEventListener("click", function () {

            activate(this.dataset.id);

        });

    });

    items.forEach(item => {

        item.addEventListener("click", function () {

            activate(this.dataset.id);

        });

    });

});

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
        if (window.innerWidth <= 820) {

            const cards = document.querySelectorAll('.optA .stage-card');

            cards.forEach(function(card, index) {

                const button = card.querySelector('.stage-toggle');
                const image = card.parentElement.querySelector('.shot');

                // // first item open
                // if (index === 0) {
                //     card.classList.add('active');
                //     if (image) {
                //         image.classList.add('active');
                //     }
                // }

                button.addEventListener('click', function() {

                    const opened = card.classList.contains('active');

                    cards.forEach(function(c) {

                        c.classList.remove('active');

                        const img = c.parentElement.querySelector('.shot');

                        if (img) {
                            img.classList.remove('active');
                        }

                    });

                    if (!opened) {

                        card.classList.add('active');

                        if (image) {
                            image.classList.add('active');
                        }

                    }

                });

            });

        }

    });