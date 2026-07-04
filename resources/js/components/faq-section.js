document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('faqSection');
    
    if (section) {
        // Reveal Animations
        const reveals = document.querySelectorAll('.faq-reveal');
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-in');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        reveals.forEach(r => obs.observe(r));

        // FAQ Toggle
        const faqTriggers = document.querySelectorAll('.faq-trigger');
        faqTriggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                const item = trigger.closest('.faq-item');
                const body = item.querySelector('.faq-body');
                const icon = item.querySelector('.faq-icon');
                const isOpen = item.classList.contains('faq-open');

                // Close all others (optional accordion behavior)
                // document.querySelectorAll('.faq-item').forEach(otherItem => {
                //     if (otherItem !== item) {
                //         otherItem.classList.remove('faq-open');
                //         otherItem.querySelector('.faq-body').style.maxHeight = '0px';
                //         otherItem.querySelector('.faq-icon').textContent = '+';
                //     }
                // });

                if (isOpen) {
                    item.classList.remove('faq-open');
                    body.style.maxHeight = '0px';
                    icon.textContent = '+';
                    trigger.setAttribute('aria-expanded', 'false');
                } else {
                    item.classList.add('faq-open');
                    body.style.maxHeight = body.scrollHeight + 'px';
                    icon.textContent = '−';
                    trigger.setAttribute('aria-expanded', 'true');
                }
            });
        });
    }
});
