document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Reveal Animations (Intersection Observer)
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((e) => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    observer.unobserve(e.target);
                }
            });
        },
        { threshold: 0.1 }
    );

    document.querySelectorAll('.reveal').forEach((el) => {
        observer.observe(el);
    });

    // 2. Floating Video Button
    const bannerWrap = document.querySelector('.about-banner-wrap');
    const vBtn = document.getElementById('floatingVideoBtn');
    
    if (bannerWrap && vBtn) {
        let currentPos = { x: 50, y: 50 };
        let targetPos = { x: 50, y: 50 };
        let isHovering = false;
        let animRef;
        const btnLabel = vBtn.querySelector('.vbtn-label');

        const lerp = (a, b, t) => a + (b - a) * t;

        const loop = () => {
            currentPos.x = lerp(currentPos.x, targetPos.x, 0.1);
            currentPos.y = lerp(currentPos.y, targetPos.y, 0.1);
            vBtn.style.left = `${currentPos.x}%`;
            vBtn.style.top = `${currentPos.y}%`;
            animRef = requestAnimationFrame(loop);
        };
        animRef = requestAnimationFrame(loop);

        bannerWrap.addEventListener('mousemove', (e) => {
            if (!isHovering) return;
            const rect = bannerWrap.getBoundingClientRect();
            const btnW = vBtn.offsetWidth || 70;
            const btnH = vBtn.offsetHeight || 100;
            const pad = 24;
            const rawX = e.clientX - rect.left;
            const rawY = e.clientY - rect.top;
            const clampedX = Math.max(btnW / 2 + pad, Math.min(rect.width - btnW / 2 - pad, rawX));
            const clampedY = Math.max(btnH / 2 + pad, Math.min(rect.height - btnH / 2 - pad, rawY));
            
            targetPos = {
                x: (clampedX / rect.width) * 100,
                y: (clampedY / rect.height) * 100,
            };
        });

        vBtn.addEventListener('mouseenter', () => {
            isHovering = true;
            vBtn.classList.add('video-btn-hovered');
            if (btnLabel) btnLabel.innerText = 'Visit Channel';
        });

        bannerWrap.addEventListener('mouseleave', () => {
            isHovering = false;
            vBtn.classList.remove('video-btn-hovered');
            if (btnLabel) btnLabel.innerText = 'Play';
            targetPos = { x: 50, y: 50 };
        });

        vBtn.addEventListener('click', () => {
            window.open('https://www.youtube.com/@codecaks', '_blank', 'noopener,noreferrer');
        });
    }

    // 3. Specialties Tabs & Accordion
    const specTabs = document.querySelectorAll('.spec-tab');
    const specItems = document.querySelectorAll('.spec-item');
    
    if (specTabs.length > 0 && specItems.length > 0) {
        // Tab Filtering
        specTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Update active tab
                specTabs.forEach(t => t.classList.remove('spec-tab--active'));
                tab.classList.add('spec-tab--active');

                const category = tab.getAttribute('data-category');

                // Filter items and close all accordions
                specItems.forEach(item => {
                    // Close accordion
                    item.classList.remove('spec-item--open');
                    const btn = item.querySelector('.spec-icon-wrap');
                    if (btn) btn.classList.remove('spec-icon-wrap--open');
                    const bodyWrap = item.querySelector('.spec-body-wrapper');
                    if (bodyWrap) bodyWrap.style.maxHeight = '0px';

                    // Show/Hide based on category
                    if (category === 'All' || item.getAttribute('data-category') === category) {
                        item.classList.remove('hidden');
                        // Quick re-trigger reveal animation
                        item.classList.remove('visible');
                        setTimeout(() => item.classList.add('visible'), 50);
                    } else {
                        item.classList.add('hidden');
                        item.classList.remove('visible');
                    }
                });
            });
        });

        // Accordion Logic
        specItems.forEach(item => {
            const trigger = item.querySelector('.spec-trigger');
            const btn = item.querySelector('.spec-icon-wrap');
            const bodyWrap = item.querySelector('.spec-body-wrapper');
            const bodyInner = item.querySelector('.spec-body-inner');

            if (trigger && btn && bodyWrap && bodyInner) {
                trigger.addEventListener('click', () => {
                    const isOpen = item.classList.contains('spec-item--open');
                    
                    // Close all others first
                    specItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('spec-item--open')) {
                            otherItem.classList.remove('spec-item--open');
                            const otherBtn = otherItem.querySelector('.spec-icon-wrap');
                            const otherWrap = otherItem.querySelector('.spec-body-wrapper');
                            if (otherBtn) otherBtn.classList.remove('spec-icon-wrap--open');
                            if (otherWrap) otherWrap.style.maxHeight = '0px';
                        }
                    });

                    // Toggle current
                    if (isOpen) {
                        item.classList.remove('spec-item--open');
                        btn.classList.remove('spec-icon-wrap--open');
                        bodyWrap.style.maxHeight = '0px';
                    } else {
                        item.classList.add('spec-item--open');
                        btn.classList.add('spec-icon-wrap--open');
                        bodyWrap.style.maxHeight = bodyInner.scrollHeight + 'px';
                    }
                });

                // Handle resize recalculation for open accordions
                window.addEventListener('resize', () => {
                    if (item.classList.contains('spec-item--open')) {
                        bodyWrap.style.maxHeight = bodyInner.scrollHeight + 'px';
                    }
                });
            }
        });
    }
});
