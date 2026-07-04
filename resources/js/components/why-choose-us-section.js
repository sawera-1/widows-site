document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('wcuSection');
    const imgCol = document.getElementById('wcuImgCol');
    const contentCol = document.getElementById('wcuContentCol');

    if (section && imgCol && contentCol) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    imgCol.classList.add('is-visible');
                    contentCol.classList.add('is-visible');
                    obs.disconnect();
                }
            });
        }, { threshold: 0.12 });
        obs.observe(section);
    }
});
