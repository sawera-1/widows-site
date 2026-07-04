document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('statsSection');
    const header = document.getElementById('statsHeader');
    const grid = document.getElementById('statsGrid');
    
    if (section && header && grid) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    header.classList.add('is-visible');
                    grid.classList.add('is-visible');
                    
                    // Animate numbers
                    const items = grid.querySelectorAll('.stats-item');
                    items.forEach((item, index) => {
                        const numberEl = item.querySelector('.stats-number');
                        const target = parseInt(item.getAttribute('data-target'), 10);
                        if (numberEl && !isNaN(target)) {
                            // Delay based on index
                            setTimeout(() => {
                                countUp(numberEl, target, 1600 + index * 100);
                            }, 150 + index * 100);
                        }
                    });

                    obs.disconnect();
                }
            });
        }, { threshold: 0.2 });
        obs.observe(section);
    }
});

function countUp(el, target, duration) {
    let start = null;
    const step = (ts) => {
        if (!start) start = ts;
        const progress = Math.min((ts - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        el.innerText = Math.floor(eased * target);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}
