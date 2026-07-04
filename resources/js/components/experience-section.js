document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('expSection');
    const header = document.getElementById('expHeader');
    
    if (section && header) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    header.classList.add('is-visible');
                    obs.disconnect(); // Only animate once
                }
            });
        }, { threshold: 0.12 });
        obs.observe(section);
    }
});
