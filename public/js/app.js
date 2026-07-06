/* ═══════════════════════════════════════════════════════════════════════════
   app.js — all site behaviour in one small vanilla-JS file (no framework).
   Replaces the React hooks/GSAP from the Next.js version. Loaded with `defer`.
   ═══════════════════════════════════════════════════════════════════════════ */
(function () {
  'use strict';

  var doc = document;
  var root = doc.documentElement;
  var body = doc.body;

  /* ── Theme toggle ───────────────────────────────────────────────────────── */
  function currentTheme() {
    return root.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
  }
  function setTheme(t) {
    root.setAttribute('data-theme', t);
    try { localStorage.setItem('codecaks-theme', t); } catch (e) {}
  }
  doc.querySelectorAll('[data-toggle-theme]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      setTheme(currentTheme() === 'dark' ? 'light' : 'dark');
    });
  });

  /* ── Page loader: remove after slide-up finishes ────────────────────────── */
  var loader = doc.querySelector('[data-loader]');
  if (loader) {
    body.classList.add('no-scroll');
    var finish = function () {
      loader.classList.add('is-done');
      body.classList.remove('no-scroll');
    };
    loader.addEventListener('animationend', function (e) {
      if (e.animationName === 'loaderSlideUp') finish();
    });
    // Safety net in case the animationend event is missed
    setTimeout(finish, 2200);
  }

  /* ── Header reveal-in + hide-on-scroll; compact bar show-on-scroll ───────── */
  var header = doc.querySelector('[data-header]');
  var compact = doc.querySelector('[data-compact-bar]');
  if (header) setTimeout(function () { header.classList.add('is-revealed'); }, 60);

  function onScroll() {
    var y = window.scrollY;
    if (header) header.classList.toggle('is-hidden', y > 80);
    if (compact) compact.classList.toggle('is-visible', y > 80);
    if (scrollTopBtn) {
      var show = y > 400;
      scrollTopBtn.classList.toggle('is-visible', show);
      scrollTopBtn.classList.toggle('is-hidden', !show);
    }
  }

  /* ── Scroll to top ──────────────────────────────────────────────────────── */
  var scrollTopBtn = doc.querySelector('[data-scroll-top]');
  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ── Search overlay ─────────────────────────────────────────────────────── */
  var search = doc.querySelector('[data-search-overlay]');
  var searchInput = doc.querySelector('[data-search-input]');
  function openSearch() {
    if (!search) return;
    search.classList.add('is-open');
    body.classList.add('no-scroll');
    setTimeout(function () { if (searchInput) searchInput.focus(); }, 80);
  }
  function closeSearch() {
    if (!search) return;
    search.classList.remove('is-open');
    body.classList.remove('no-scroll');
  }
  doc.querySelectorAll('[data-open-search]').forEach(function (b) { b.addEventListener('click', openSearch); });
  doc.querySelectorAll('[data-close-search]').forEach(function (b) { b.addEventListener('click', closeSearch); });
  if (search) {
    search.addEventListener('click', function (e) { if (e.target === search) closeSearch(); });
  }
  doc.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && search && search.classList.contains('is-open')) closeSearch();
  });

  /* ── Mobile menu panel + sub-levels ─────────────────────────────────────── */
  var panel = doc.querySelector('[data-menu-panel]');
  var backdrop = doc.querySelector('[data-menu-backdrop]');
  var level0 = doc.querySelector('[data-menu-level0]');
  var subs = doc.querySelectorAll('[data-menu-sub]');

  function showLevel0() {
    if (level0) level0.hidden = false;
    subs.forEach(function (s) { s.hidden = true; });
  }
  function openMenu() {
    if (!panel) return;
    panel.classList.add('is-open');
    if (backdrop) backdrop.classList.add('is-open');
    body.classList.add('no-scroll');
  }
  function closeMenu() {
    if (!panel) return;
    panel.classList.remove('is-open');
    if (backdrop) backdrop.classList.remove('is-open');
    body.classList.remove('no-scroll');
    setTimeout(showLevel0, 340);
  }
  doc.querySelectorAll('[data-open-menu]').forEach(function (b) { b.addEventListener('click', openMenu); });
  doc.querySelectorAll('[data-close-menu]').forEach(function (b) { b.addEventListener('click', closeMenu); });
  if (backdrop) backdrop.addEventListener('click', closeMenu);

  doc.querySelectorAll('[data-menu-open-sub]').forEach(function (b) {
    b.addEventListener('click', function () {
      var id = b.getAttribute('data-menu-open-sub');
      if (level0) level0.hidden = true;
      subs.forEach(function (s) { s.hidden = s.getAttribute('data-menu-sub') !== id; });
    });
  });
  doc.querySelectorAll('[data-menu-back]').forEach(function (b) { b.addEventListener('click', showLevel0); });

  /* ── Custom cursor (fine-pointer only) ──────────────────────────────────── */
  var cursor = doc.getElementById('customCursor');
  if (cursor && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
    var outer = cursor.querySelector('.cursor-outer');
    var inner = cursor.querySelector('.cursor-inner');
    var mx = 0, my = 0, ox = 0, oy = 0, LERP = 0.15;
    doc.addEventListener('mousemove', function (e) {
      mx = e.clientX; my = e.clientY;
      inner.style.left = mx + 'px'; inner.style.top = my + 'px';
    });
    (function tick() {
      ox += (mx - ox) * LERP; oy += (my - oy) * LERP;
      outer.style.left = ox + 'px'; outer.style.top = oy + 'px';
      requestAnimationFrame(tick);
    })();
    var hoverSel = 'a, button, .hero-card, .work-card, .hero-card-el, [class*="btn"], [class*="item"], [class*="card"], [class*="trigger"]';
    function bind() {
      doc.querySelectorAll(hoverSel).forEach(function (el) {
        if (el.__curBound) return;
        el.__curBound = true;
        el.addEventListener('mouseenter', function () { cursor.classList.add('cursor-active'); });
        el.addEventListener('mouseleave', function () { cursor.classList.remove('cursor-active'); });
      });
    }
    bind();
    new MutationObserver(bind).observe(body, { childList: true, subtree: true });
  }

  /* ── Generic scroll-reveal: elements with [data-reveal] fade up on view ──── */
  var revealEls = doc.querySelectorAll('[data-reveal]');
  if (revealEls.length) {
    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (en.isIntersecting) { en.target.classList.add('is-visible'); io.unobserve(en.target); }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });
      revealEls.forEach(function (el) { io.observe(el); });
    } else {
      revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }
  }
})();
