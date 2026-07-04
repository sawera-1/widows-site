function initServicesStack() {
    const track = document.getElementById('svcTrack');
    const panels = Array.from(document.querySelectorAll('.svc-panel'));
    const dots = Array.from(document.querySelectorAll('.svc-dot'));
    if (!track || !panels.length) return;

    let isMobile = window.innerWidth <= 768;
    const TOTAL_PANELS = panels.length;

    const clamp = (v, lo, hi) => Math.max(lo, Math.min(hi, v));

    const setup = () => {
        isMobile = window.innerWidth <= 768;
        if (isMobile) {
            track.style.height = '';
            panels.forEach(p => {
                p.style.position = 'relative';
                p.style.top = '';
                p.style.left = '';
                p.style.width = '100%';
                p.style.height = 'clamp(260px,82vw,480px)';
                p.style.transform = '';
                p.style.filter = '';
                p.style.zIndex = '';
                p.style.marginBottom = '14px';
            });
            return;
        }

        const sp = window.innerHeight - 64;
        const stickyH = window.innerHeight - 100;
        track.style.height = `${stickyH + sp * TOTAL_PANELS}px`;

        panels.forEach((p, i) => {
            p.style.position = 'absolute';
            p.style.top = '0';
            p.style.left = '0';
            p.style.width = '100%';
            p.style.height = '70vh';
            p.style.marginBottom = '';
            p.style.zIndex = String(i + 10);
            p.style.transform = i === 0 ? 'translateY(0)' : 'translateY(100vh)';
            p.style.filter = 'brightness(1)';
        });
    };

    const update = () => {
        if (isMobile) return;

        const trackTop = track.getBoundingClientRect().top + window.scrollY;
        const sp = window.innerHeight - 64;
        const STACK_OFF = 30;

        panels.forEach((p, i) => {
            if (window.scrollY < trackTop) {
                p.style.transform = i === 0 ? 'translateY(0)' : 'translateY(100vh)';
                p.style.filter = 'brightness(1)';
                return;
            }

            if (i === 0) {
                p.style.transform = 'translateY(0)';
                const npp = clamp((window.scrollY - trackTop - sp) / sp, 0, 1);
                p.style.filter = `brightness(${1 - npp * 0.42})`;
            } else {
                const progress = clamp((window.scrollY - trackTop - sp * i) / sp, 0, 1);
                const targetVh = (i * STACK_OFF / window.innerHeight) * 100;
                const currentY = 100 + (targetVh - 100) * progress;
                p.style.transform = `translateY(${currentY}vh)`;

                if (i < TOTAL_PANELS - 1) {
                    const npp2 = clamp((window.scrollY - trackTop - sp * (i + 1)) / sp, 0, 1);
                    p.style.filter = `brightness(${1 - npp2 * 0.42})`;
                } else {
                    p.style.filter = 'brightness(1)';
                }
            }
        });

        const raw = (window.scrollY - trackTop + sp / 2) / sp;
        const active = clamp(Math.floor(raw), 0, TOTAL_PANELS - 1);
        
        dots.forEach((d, i) => {
            if (i === active) {
                d.classList.add('is-active');
            } else {
                d.classList.remove('is-active');
            }
        });
    };

    let raf = false;
    const onScroll = () => {
        if (raf) return;
        raf = true;
        requestAnimationFrame(() => {
            update();
            raf = false;
        });
    };

    const onResize = () => {
        setup();
        update();
    };

    setup();
    update();

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onResize);
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initServicesStack);
} else {
    initServicesStack();
}
