import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
import './components/scroll-to-top.js';
import './components/about-section.js';
import './components/trust-badges-section.js';
import './components/blog-section.js';
import './components/book-consultation-section.js';
import './components/contact-banner.js';
import './components/contact-banner-two.js';
import './components/experience-section.js';
import './components/faq-section.js';
import './components/industry-section.js';
import './components/reviews-section.js';
import './components/portfolio-section.js';
import './components/why-choose-us-section.js';
import './components/stats-section.js';
import './components/services-stack-section.js';
import './components/hero-section.js';
import './components/custom-cursor.js';

import.meta.glob([
    '../images/**',
]);

document.addEventListener('DOMContentLoaded', () => {
    // ──────────────────────────────────────────────
    // THEME SWITCHER
    // ──────────────────────────────────────────────
    const htmlElement = document.documentElement;

    function toggleTheme() {
        const isDark = htmlElement.classList.contains('theme-dark');
        if (isDark) {
            htmlElement.classList.remove('theme-dark');
            htmlElement.classList.add('theme-light');
        } else {
            htmlElement.classList.remove('theme-light');
            htmlElement.classList.add('theme-dark');
        }

        // Notify other components (like Header) about the change
        window.dispatchEvent(new CustomEvent('theme-changed', {
            detail: { isDark: !isDark }
        }));
    }

    // ──────────────────────────────────────────────
    // HEADER LOGIC
    // ──────────────────────────────────────────────
    const header = document.getElementById('siteHeader');
    if (header) {
        setTimeout(() => header.classList.add('is-revealed'), 60);

        const onScroll = () => {
            if (window.scrollY > 80) {
                header.classList.add('is-hidden');
            } else {
                header.classList.remove('is-hidden');
            }
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        const navList = document.getElementById('headerNavList');
        const navItems = document.querySelectorAll('.sh-nav-item');

        navItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                if (navList) navList.classList.add('has-active');
                item.classList.add('is-active');
            });
            item.addEventListener('mouseleave', () => {
                if (navList) navList.classList.remove('has-active');
                item.classList.remove('is-active');
            });
        });

        window.addEventListener('theme-changed', (e) => {
            const isDark = e.detail.isDark;
            const logoLight = document.querySelector('.sh-logo-img.logo-light');
            const logoDark = document.querySelector('.sh-logo-img.logo-dark');
            if (logoLight) logoLight.style.display = isDark ? 'none' : 'block';
            if (logoDark) logoDark.style.display = isDark ? 'block' : 'none';
        });
    }

    // ──────────────────────────────────────────────
    // COMPACT MENU BAR LOGIC
    // ──────────────────────────────────────────────
    const compactBar = document.getElementById('compactBar');
    const menuBackdrop = document.getElementById('menuBackdrop');
    const menuPanel = document.getElementById('menuPanel');
    const cbMenuBtn = document.getElementById('cbMenuBtn');

    let menuOpen = false;

    if (compactBar) {
        const handleScrollCb = () => {
            if (window.scrollY > 80) {
                compactBar.classList.add('is-visible');
            } else {
                compactBar.classList.remove('is-visible');
            }
        };
        window.addEventListener('scroll', handleScrollCb, { passive: true });
        handleScrollCb();
    }

    function openMenu() {
        if (!menuPanel || !menuBackdrop) return;
        menuOpen = true;
        menuBackdrop.classList.add('is-open');
        menuPanel.classList.add('is-open');
        if (compactBar) compactBar.classList.add('menu-is-open');
        if (cbMenuBtn) cbMenuBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden'; // Prevent body scrolling
    }

    function closeMenu() {
        if (!menuPanel || !menuBackdrop) return;
        menuOpen = false;
        menuBackdrop.classList.remove('is-open');
        menuPanel.classList.remove('is-open');
        if (compactBar) compactBar.classList.remove('menu-is-open');
        if (cbMenuBtn) cbMenuBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';

        // Reset submenus
        setTimeout(() => {
            const mpLevel0 = document.getElementById('mpLevel0');
            if (mpLevel0) {
                mpLevel0.style.transform = 'translateX(0)';
                mpLevel0.style.position = 'relative';
            }
            document.querySelectorAll('.mp-sublevel').forEach(sub => {
                sub.classList.remove('slide-in');
            });
        }, 340);
    }

    const mpCloseBtn = document.getElementById('mpCloseBtn');
    if (mpCloseBtn) mpCloseBtn.addEventListener('click', closeMenu);
    if (menuBackdrop) menuBackdrop.addEventListener('click', closeMenu);

    // Allow closing with Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (menuOpen) closeMenu();
            if (searchOverlay && searchOverlay.classList.contains('is-open')) closeSearch();
        }
    });

    // Submenu Slide logic
    const mpLevel0 = document.getElementById('mpLevel0');
    document.querySelectorAll('.mp-link.has-submenu').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const targetId = btn.getAttribute('data-target');
            if (mpLevel0) {
                mpLevel0.style.transform = 'translateX(-100%)';
                mpLevel0.style.position = 'absolute';
            }
            const submenu = document.getElementById('submenu-' + targetId);
            if (submenu) {
                submenu.style.display = 'block';
                // Trigger reflow for transition
                submenu.offsetWidth;
                submenu.classList.add('slide-in');
            }
        });
    });

    document.querySelectorAll('.mp-back-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const parent = btn.parentElement;
            parent.classList.remove('slide-in');
            setTimeout(() => {
                parent.style.display = 'none';
            }, 340);

            if (mpLevel0) {
                mpLevel0.style.position = 'relative';
                mpLevel0.style.transform = 'translateX(0)';
            }
        });
    });

    // Close menu on standard link click
    document.querySelectorAll('.mp-link:not(.has-submenu)').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // ──────────────────────────────────────────────
    // SEARCH OVERLAY LOGIC
    // ──────────────────────────────────────────────
    const searchOverlay = document.getElementById('searchOverlay');
    const searchOverlayClose = document.getElementById('searchOverlayClose');
    const searchOverlayForm = document.getElementById('searchOverlayForm');
    const searchOverlayInput = document.getElementById('searchOverlayInput');

    function openSearch() {
        if (!searchOverlay || !searchOverlayInput) return;
        searchOverlay.classList.add('is-open');
        document.body.style.overflow = 'hidden';
        setTimeout(() => searchOverlayInput.focus(), 80);
    }

    function closeSearch() {
        if (!searchOverlay) return;
        searchOverlay.classList.remove('is-open');
        document.body.style.overflow = '';
        if (searchOverlayInput) searchOverlayInput.value = '';
    }

    if (searchOverlayClose) searchOverlayClose.addEventListener('click', closeSearch);
    if (searchOverlay) searchOverlay.addEventListener('click', (e) => { if (e.target === searchOverlay) closeSearch(); });
    if (searchOverlayForm && searchOverlayInput) {
        searchOverlayForm.addEventListener('submit', (e) => {
            if (!searchOverlayInput.value.trim()) e.preventDefault();
            else closeSearch();
        });
    }

    // ──────────────────────────────────────────────
    // GLOBAL EVENT DELEGATION FOR BUTTONS
    // ──────────────────────────────────────────────
    document.body.addEventListener('click', (e) => {
        const target = e.target.closest('button');
        if (!target) return;

        // Theme Toggles
        if (target.id === 'headerThemeBtn' || target.id === 'cbThemeBtn') {
            toggleTheme();
        }

        // Search Toggles
        if (target.id === 'headerSearchBtn' || target.id === 'cbSearchBtn') {
            openSearch();
        }

        // Menu Toggles
        if (target.id === 'headerMobileMenuBtn' || target.id === 'cbMenuBtn') {
            if (menuOpen) closeMenu();
            else openMenu();
        }
    });

});
import './components/staff-augmentation-section.js';
import './components/staff-augmentation-section-2.js';
