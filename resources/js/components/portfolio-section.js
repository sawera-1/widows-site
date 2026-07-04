document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('pfSection');
    const leftPanel = document.getElementById('pfLeftPanel');
    const collage = document.getElementById('pfCollage');

    if (section && leftPanel && collage) {
        // Entrance animation
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    leftPanel.classList.add('is-visible');
                    collage.classList.add('is-visible');
                    obs.disconnect();
                }
            });
        }, { threshold: 0.1 });
        obs.observe(section);
    }

    // Scroll image logic for tall web images
    const webCards = document.querySelectorAll('.pf-collage-card[data-type="web"]');
    webCards.forEach(card => {
        const img = card.querySelector('.pf-web-img');
        if (img) {
            const updateScrollDist = () => {
                const containerHeight = parseFloat(card.getAttribute('data-height'));
                const imgNaturalHeight = img.naturalHeight || 0;
                const imgNaturalWidth = img.naturalWidth || 1;
                const dist = imgNaturalHeight * (img.offsetWidth / imgNaturalWidth) - containerHeight;
                
                if (dist > 0) {
                    // Update CSS variable or data attribute to be used in CSS if needed
                    // For simplicity, we can apply inline style on hover via JS
                    card.dataset.scrollDist = dist;
                } else {
                    card.dataset.scrollDist = 0;
                }
            };

            if (img.complete) {
                updateScrollDist();
            } else {
                img.addEventListener('load', updateScrollDist);
            }

            window.addEventListener('resize', updateScrollDist);

            card.addEventListener('mouseenter', () => {
                const dist = card.dataset.scrollDist || 0;
                if (dist > 0) {
                    img.style.transform = `translateY(-${dist}px)`;
                }
            });

            card.addEventListener('mouseleave', () => {
                img.style.transform = `translateY(0px)`;
            });
        }
    });
});
