/**
 * Staff Augmentation Section 2 — JavaScript
 * Handles:
 *  1. Scroll-reveal (.px-reveal → .active)
 *  2. Dark / Light robot image switching
 */

(function () {
    'use strict';

    // ── 1. SCROLL REVEAL ──────────────────────────────────────────
    function initReveal() {
        const reveals = document.querySelectorAll('.px-wrap .px-reveal');
        if (!reveals.length) return;

        const obs = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        reveals.forEach(el => obs.observe(el));
    }

    // ── 2. DARK / LIGHT ROBOT IMAGE SWITCHER ─────────────────────
    function syncRobotImages() {
        const isDark = document.documentElement.classList.contains('theme-dark');
        document.querySelectorAll('.px-wrap .dark-img').forEach(img => {
            img.style.display = isDark ? 'block' : 'none';
        });
        document.querySelectorAll('.px-wrap .light-img').forEach(img => {
            img.style.display = isDark ? 'none' : 'block';
        });
    }

    function init() {
        initReveal();
        syncRobotImages();

        // React to theme changes dispatched by app.js
        window.addEventListener('theme-changed', syncRobotImages);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
