document.addEventListener('DOMContentLoaded', () => {

    // ── 1. INTERSECTION OBSERVER — reveal animations ──
    const reveals = document.querySelectorAll('.ip-reveal');
    if (reveals.length) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('is-visible');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.07, rootMargin: '0px 0px -40px 0px' });

        reveals.forEach(el => io.observe(el));
    }

    // ── 2. COUNT-UP — triggered once the stat card is visible ──
    function easeOut(t) { return 1 - Math.pow(1 - t, 3); }

    function runCountUp(card) {
        const target  = parseInt(card.dataset.value, 10);
        const suffix  = card.dataset.suffix || '';
        const display = card.querySelector('.ip-stat-count');
        if (!display || isNaN(target)) return;

        const duration = 1800;
        let start = null;

        function step(ts) {
            if (!start) start = ts;
            const progress = Math.min((ts - start) / duration, 1);
            display.textContent = Math.floor(easeOut(progress) * target);
            if (progress < 1) requestAnimationFrame(step);
            else display.textContent = target;
        }
        requestAnimationFrame(step);
    }

    const statCards = document.querySelectorAll('.ip-stat-card');
    if (statCards.length) {
        const statIO = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    runCountUp(e.target);
                    statIO.unobserve(e.target);
                }
            });
        }, { threshold: 0.25 });

        statCards.forEach(card => statIO.observe(card));
    }
});
