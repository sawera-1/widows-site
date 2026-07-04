document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('heroSection');
    const stage = document.getElementById('heroCardsStage');
    
    if (section) {
        // Initial visibility
        setTimeout(() => {
            section.classList.add('is-visible');
        }, 60);

        // Desktop mouse tracking for hero cards
        if (window.innerWidth > 768 && stage) {
            const wrappers = Array.from(stage.querySelectorAll('.hero-card-wrapper'));
            const cards = Array.from(stage.querySelectorAll('.hero-card-el'));

            const state = wrappers.map(() => ({
                curX: 0, curY: 0, tgtX: 0, tgtY: 0, baseCX: 0, baseCY: 0, width: 200,
            }));

            const mouse = { x: 0, y: 0, inside: false };
            let raf = null;
            let trackingEnabled = false;

            setTimeout(() => { trackingEnabled = true; }, 1400);

            const clamp = (v, lo, hi) => Math.max(lo, Math.min(hi, v));
            const lerp = (a, b, t) => a + (b - a) * t;

            const tick = () => {
                raf = null;
                if (!trackingEnabled) {
                    raf = requestAnimationFrame(tick);
                    return;
                }

                const mx = mouse.x;
                const my = mouse.y;
                const inside = mouse.inside;
                let stillMoving = false;

                wrappers.forEach((wrap, i) => {
                    const r = wrap.getBoundingClientRect();
                    const s = state[i];
                    if (!s) return;
                    s.baseCX = r.left + window.scrollX + r.width / 2;
                    s.baseCY = r.top + window.scrollY + r.height / 2;
                    s.width = r.width;
                });

                let closestIdx = -1, minDist = Infinity;
                if (inside) {
                    state.forEach((s, i) => {
                        const dx = mx - s.baseCX;
                        const dy = my - s.baseCY;
                        const d = Math.sqrt(dx * dx + dy * dy);
                        if (d < minDist) { minDist = d; closestIdx = i; }
                    });
                }

                cards.forEach((card, i) => {
                    const s = state[i];
                    if (!s) return;
                    
                    const ATTRACTION = 0.55;
                    const REPEL_STRENGTH = 1.1;
                    const THRESHOLD = s.width * 1.38;
                    const REPEL_RADIUS = s.width * 2.3;
                    const MAX_MOVE = s.width * 0.38;

                    if (inside) {
                        const dx = mx - s.baseCX;
                        const dy = my - s.baseCY;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        
                        if (i === closestIdx && dist < THRESHOLD) {
                            s.tgtX = clamp(dx * ATTRACTION, -MAX_MOVE, MAX_MOVE);
                            s.tgtY = clamp(dy * ATTRACTION, -MAX_MOVE, MAX_MOVE);
                        } else {
                            const t = Math.max(0, 1 - dist / REPEL_RADIUS);
                            const influence = t * t;
                            s.tgtX = clamp(-dx * influence * REPEL_STRENGTH, -MAX_MOVE, MAX_MOVE);
                            s.tgtY = clamp(-dy * influence * REPEL_STRENGTH, -MAX_MOVE, MAX_MOVE);
                        }
                    } else {
                        s.tgtX = 0; s.tgtY = 0;
                    }

                    s.curX = lerp(s.curX, s.tgtX, 0.1);
                    s.curY = lerp(s.curY, s.tgtY, 0.1);
                    card.style.transform = `translate3d(${s.curX.toFixed(2)}px,${s.curY.toFixed(2)}px,0)`;

                    if (Math.abs(s.curX - s.tgtX) > 0.05 || Math.abs(s.curY - s.tgtY) > 0.05) {
                        stillMoving = true;
                    }
                });

                if (inside || stillMoving) raf = requestAnimationFrame(tick);
            };

            section.addEventListener('mousemove', (e) => {
                mouse.x = e.pageX;
                mouse.y = e.pageY;
                mouse.inside = true;
                if (!raf) raf = requestAnimationFrame(tick);
            }, { passive: true });

            section.addEventListener('mouseleave', () => {
                mouse.inside = false;
                if (!raf) raf = requestAnimationFrame(tick);
            }, { passive: true });

            raf = requestAnimationFrame(tick);
        }
    }
});
