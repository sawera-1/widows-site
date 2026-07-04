document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('bsSection');
    
    if (section) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    section.classList.add('is-visible');
                    obs.disconnect(); // Only animate once
                }
            });
        }, { threshold: 0.1 });
        obs.observe(section);
    }
});
