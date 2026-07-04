document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('cb2Section');
    const box = document.getElementById('cb2Box');
    
    if (section && box) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    box.classList.add('is-visible');
                    obs.disconnect(); // Only animate once
                }
            });
        }, { threshold: 0.2 });
        obs.observe(section);
    }
});
