/**
 * Hire Page — JavaScript
 * Handles: scroll reveals, countUp stats, employee load-more,
 *           video card, process line hover, dark/light robot images
 */
(function () {
  'use strict';

  /* ── INTERSECTION OBSERVER REVEAL ── */
  function initReveal() {
    const els = document.querySelectorAll('.hire-reveal, .hire-hero-left, .hire-hero-right');
    if (!els.length) return;
    const obs = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    els.forEach(el => obs.observe(el));
  }

  /* ── COUNT-UP ANIMATION ── */
  function countUp(el, target, duration) {
    let start = null;
    const suffix = el.dataset.suffix || '';
    const step = ts => {
      if (!start) start = ts;
      const p = Math.min((ts - start) / duration, 1);
      const eased = 1 - Math.pow(1 - p, 4);
      el.textContent = Math.floor(eased * target) + suffix;
      if (p < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }

  function initCounters() {
    const counters = document.querySelectorAll('[data-count]');
    if (!counters.length) return;
    const obs = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          countUp(el, parseInt(el.dataset.count), 1800);
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.2 });
    counters.forEach(el => obs.observe(el));
  }

  /* ── EMPLOYEE LOAD-MORE ── */
  function initLoadMore() {
    const btn = document.getElementById('hireLoadMoreBtn');
    const cards = document.querySelectorAll('.hire-emp-card');
    if (!btn || !cards.length) return;

    const PAGE = 4;
    let visible = PAGE;

    // Show initial batch
    cards.forEach((c, i) => {
      if (i < PAGE) c.classList.add('hire-emp-visible');
    });

    // Hide button if no more
    if (cards.length <= PAGE) btn.style.display = 'none';

    btn.addEventListener('click', () => {
      if (btn.classList.contains('is-loading')) return;
      btn.classList.add('is-loading');

      setTimeout(() => {
        const next = Math.min(visible + PAGE, cards.length);
        for (let i = visible; i < next; i++) {
          cards[i].classList.add('hire-emp-visible');
        }
        visible = next;
        btn.classList.remove('is-loading');
        if (visible >= cards.length) btn.style.display = 'none';
      }, 900);
    });
  }

  /* ── PROCESS CARD LINE HOVER ── */
  function initProcessLines() {
    document.querySelectorAll('.hire-process-card').forEach(card => {
      const line = card.querySelector('.hire-process-line');
      if (!line) return;
      card.addEventListener('mouseenter', () => { line.style.width = '60%'; });
      card.addEventListener('mouseleave', () => { line.style.width = '28px'; });
    });
  }

  /* ── VIDEO CARD LABEL TOGGLE ── */
  function initVideoCard() {
    const card = document.querySelector('.hire-vid-card');
    const label = document.querySelector('.hire-vbtn-label');
    if (!card || !label) return;
    card.addEventListener('mouseenter', () => { label.textContent = 'Watch Video'; });
    card.addEventListener('mouseleave', () => { label.textContent = 'Play'; });
  }

  /* ── ROBOT IMAGE DARK / LIGHT ── */
  function syncRobotImages() {
    const isDark = document.documentElement.classList.contains('theme-dark');
    document.querySelectorAll('.hire-page-wrapper .hire-dark-img').forEach(img => {
      img.style.display = isDark ? 'block' : 'none';
    });
    document.querySelectorAll('.hire-page-wrapper .hire-light-img').forEach(img => {
      img.style.display = isDark ? 'none' : 'block';
    });
  }

  /* ── INIT ── */
  function init() {
    initReveal();
    initCounters();
    initLoadMore();
    initProcessLines();
    initVideoCard();
    syncRobotImages();
    window.addEventListener('theme-changed', syncRobotImages);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
