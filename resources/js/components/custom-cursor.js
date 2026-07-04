document.addEventListener('DOMContentLoaded', () => {
    const cursor = document.getElementById('customCursor');
    if (!cursor) return;

    const outer = cursor.querySelector('.cursor-outer');
    const inner = cursor.querySelector('.cursor-inner');

    let mouseX = 0, mouseY = 0;
    let outerX = 0, outerY = 0;
    let innerX = 0, innerY = 0;
    
    // Check if device has pointer
    if (window.matchMedia("(hover: hover) and (pointer: fine)").matches) {
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        }, { passive: true });

        const render = () => {
            outerX += (mouseX - outerX) * 0.15;
            outerY += (mouseY - outerY) * 0.15;
            innerX += (mouseX - innerX) * 0.35;
            innerY += (mouseY - innerY) * 0.35;

            if (outer) outer.style.transform = `translate(${outerX}px, ${outerY}px) translate(-50%, -50%)`;
            if (inner) inner.style.transform = `translate(${innerX}px, ${innerY}px) translate(-50%, -50%)`;

            requestAnimationFrame(render);
        };
        requestAnimationFrame(render);

        // Hover effects
        const interactiveElements = document.querySelectorAll('a, button, .hero-card-el, input, textarea');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => cursor.classList.add('cursor-active'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('cursor-active'));
        });
    }
});
