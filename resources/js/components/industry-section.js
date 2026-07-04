document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('indSection');
    const cols = document.querySelectorAll('.ind-col');
    let rafId = null;

    if (section && cols.length > 0) {
        const onScroll = () => {
            if (rafId) cancelAnimationFrame(rafId);
            rafId = requestAnimationFrame(() => {
                const rect = section.getBoundingClientRect();
                const p = (window.innerHeight / 2 - (rect.top + rect.height / 2)) / (window.innerHeight + rect.height);
                
                cols.forEach(col => {
                    const parallaxMultiplier = parseFloat(col.getAttribute('data-parallax') || "0");
                    const offset = p * parallaxMultiplier * 340;
                    col.style.transform = `translateY(${offset}px)`;
                });
            });
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        
        // Trigger once to set initial positions
        onScroll();
    }
});
