document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('saSection');
    
    if (section) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    section.classList.add('is-visible');
                    obs.disconnect();
                }
            });
        }, { threshold: 0.15 });
        obs.observe(section);
    }
});
