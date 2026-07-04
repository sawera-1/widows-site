document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('revSection');
    const header = document.getElementById('revHeader');
    const track = document.getElementById('revTrack');
    const trackWrap = document.getElementById('revTrackWrap');
    const prevBtn = document.getElementById('revPrevBtn');
    const nextBtn = document.getElementById('revNextBtn');

    if (!section || !track) return;

    // Intersection Observer for Entrance
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                header.classList.add('is-visible');
                obs.disconnect();
            }
        });
    }, { threshold: 0.15 });
    obs.observe(section);

    // Carousel Logic
    let offset = 0;
    const CARD_GAP = 28;
    const TOTAL_CARDS = 10; // Number of unique cards
    let timerId = null;
    let dragging = false;
    let startX = 0;
    let dragDelta = 0;

    const updateTransform = (transition = true) => {
        track.style.transition = transition ? 'transform 0.6s cubic-bezier(.2,.8,.4,1)' : 'none';
        track.style.transform = `translateX(${offset + dragDelta}px)`;
    };

    const getStepSize = () => {
        const cardWidth = Math.min(400, window.innerWidth - 48);
        return cardWidth + CARD_GAP;
    };

    const normalizeOffset = (val) => {
        const stepSize = getStepSize();
        const maxOffset = TOTAL_CARDS * stepSize;
        let v = val % maxOffset;
        if (v > 0) v -= maxOffset;
        return v;
    };

    const go = (dir) => {
        const stepSize = getStepSize();
        offset = normalizeOffset(offset - dir * stepSize);
        updateTransform();
    };

    const startAuto = () => {
        if (timerId) clearInterval(timerId);
        timerId = setInterval(() => go(1), 5000);
    };

    const pauseAuto = () => {
        if (timerId) clearInterval(timerId);
    };

    if (prevBtn) prevBtn.addEventListener('click', () => { pauseAuto(); go(-1); startAuto(); });
    if (nextBtn) nextBtn.addEventListener('click', () => { pauseAuto(); go(1); startAuto(); });

    // Drag Logic
    if (trackWrap) {
        trackWrap.addEventListener('pointerdown', (e) => {
            dragging = true;
            startX = e.clientX;
            dragDelta = 0;
            pauseAuto();
            trackWrap.setPointerCapture(e.pointerId);
        });

        trackWrap.addEventListener('pointermove', (e) => {
            if (!dragging) return;
            dragDelta = e.clientX - startX;
            updateTransform(false);
        });

        const handlePointerUp = () => {
            if (!dragging) return;
            dragging = false;
            
            if (dragDelta < -60) go(1);
            else if (dragDelta > 60) go(-1);
            else updateTransform(); // snap back

            dragDelta = 0;
            startAuto();
        };

        trackWrap.addEventListener('pointerup', handlePointerUp);
        trackWrap.addEventListener('pointercancel', handlePointerUp);

        trackWrap.addEventListener('mouseenter', pauseAuto);
        trackWrap.addEventListener('mouseleave', () => {
            if (!dragging) startAuto();
        });
    }

    // Resize handling
    window.addEventListener('resize', () => {
        const stepSize = getStepSize();
        offset = Math.round(offset / stepSize) * stepSize;
        updateTransform(false);
    });

    // Start auto slide
    startAuto();
});
