/**
 * Hire Developer Page — JavaScript
 * Handles: scroll reveals, card stagger animations, load-more employees,
 *           background parallax, robot image sync (dark/light)
 */
(function () {
  'use strict';

  /* ── HERO BG LOADED ── */
  function initHeroBg() {
    const bg = document.querySelector('.hd-hero-bg');
    if (!bg) return;
    const img = new Image();
    img.src = bg.style.backgroundImage
      ? bg.style.backgroundImage.replace(/url\(['"]?([^'"]+)['"]?\)/, '$1')
      : '/assets/staffbanner.webp';
    img.onload = () => bg.classList.add('hd-bg-loaded');
  }

  /* ── INTERSECTION REVEAL ── */
  function initReveal() {
    const els = document.querySelectorAll('.hd-reveal');
    if (!els.length) return;
    const obs = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('hd-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    els.forEach(el => obs.observe(el));
  }

  /* ── CARD STAGGER (services, pricing) ── */
  function initCardStagger(gridSelector, cardSelector, visibleClass) {
    const cards = document.querySelectorAll(gridSelector + ' ' + cardSelector);
    if (!cards.length) return;
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const idx = parseInt(entry.target.dataset.idx || '0', 10);
          const colDelay = (idx % 4) * 90;
          setTimeout(() => {
            entry.target.classList.add(visibleClass);
          }, colDelay);
        }
      });
    }, { threshold: 0.08 });
    cards.forEach(card => obs.observe(card));
  }

  /* ── EMPLOYEE LOAD-MORE ── */
  function initLoadMore() {
    const grid = document.getElementById('hdTeamGrid');
    if (!grid) return;
    const btn = document.getElementById('hdLoadMoreBtn');

    const PAGE = 4;
    const cards = Array.from(grid.querySelectorAll('.hd-emp-card'));
    let visible = 0;

    // Show initial batch
    function showBatch(count) {
      const next = Math.min(visible + count, cards.length);
      for (let i = visible; i < next; i++) {
        const card = cards[i];
        const delay = (i % 4) * 90;
        setTimeout(() => {
          card.style.display = '';
          // Force reflow then add visible class
          requestAnimationFrame(() => card.classList.add('hd-emp-visible'));
        }, delay);
      }
      visible = next;
      if (btn && visible >= cards.length) btn.style.display = 'none';
    }

    // Initially hide all
    cards.forEach(c => { c.style.display = 'none'; });
    showBatch(PAGE);

    if (btn) {
      btn.addEventListener('click', () => {
        if (btn.classList.contains('is-loading')) return;
        btn.classList.add('is-loading');
        setTimeout(() => {
          showBatch(PAGE);
          btn.classList.remove('is-loading');
        }, 900);
      });
    }
  }
  /* ── ROBOT IMAGE DARK / LIGHT ── */
  function syncRobotImages() {
    const isDark = document.documentElement.classList.contains('theme-dark');
    document.querySelectorAll('.hd-robot-img-dark').forEach(img => {
      img.style.display = isDark ? 'block' : 'none';
    });
    document.querySelectorAll('.hd-robot-img-light').forEach(img => {
      img.style.display = isDark ? 'none' : 'block';
    });
  }

  /* ── INIT ── */
  function init() {
    initHeroBg();
    initReveal();
    initCardStagger('.hd-svc-grid',   '.hd-exp-card',   'hd-card-visible');
    initCardStagger('.hd-price-grid', '.hd-price-card',  'hd-card-visible');
    initLoadMore();
    syncRobotImages();
    window.addEventListener('theme-changed', syncRobotImages);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
