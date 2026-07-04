document.addEventListener('DOMContentLoaded', () => {

    // ── INTERSECTION OBSERVER (Reveal animations) ──
    const reveals = document.querySelectorAll('.bd-reveal');
    if (reveals.length) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('is-visible');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

        reveals.forEach(el => io.observe(el));
    }

    // ── FAQ ACCORDION ──
    const faqItems = document.querySelectorAll('.bd-faq-item');
    faqItems.forEach(item => {
        const trigger = item.querySelector('.bd-faq-trigger');
        const body    = item.querySelector('.bd-faq-body');
        const inner   = item.querySelector('.bd-faq-body-inner');
        const icon    = item.querySelector('.bd-faq-icon');

        if (!trigger || !body || !inner) return;

        trigger.addEventListener('click', () => {
            const isOpen = item.classList.contains('is-open');

            // Close all others
            faqItems.forEach(other => {
                if (other !== item) {
                    other.classList.remove('is-open');
                    const b = other.querySelector('.bd-faq-body');
                    const ic = other.querySelector('.bd-faq-icon');
                    if (b)  b.style.maxHeight = '0';
                    if (ic) ic.textContent = '+';
                    other.querySelector('.bd-faq-trigger')?.setAttribute('aria-expanded', 'false');
                }
            });

            // Toggle this one
            if (isOpen) {
                item.classList.remove('is-open');
                body.style.maxHeight = '0';
                if (icon) icon.textContent = '+';
                trigger.setAttribute('aria-expanded', 'false');
            } else {
                item.classList.add('is-open');
                body.style.maxHeight = inner.scrollHeight + 'px';
                if (icon) icon.textContent = '−';
                trigger.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
