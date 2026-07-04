document.addEventListener('DOMContentLoaded', () => {
    // 1. Intersection Observer for Fade Animations
    const section = document.getElementById('aboutSection');
    const animElements = document.querySelectorAll('.about-anim-fade');

    if (section && animElements.length > 0) {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animElements.forEach(el => el.classList.add('is-visible'));
                    obs.disconnect(); // Only animate once
                }
            });
        }, { threshold: 0.12 });
        obs.observe(section);
    }

    // 2. Floating Video Button Logic (Lerp Animation)
    const bannerOverlay = document.getElementById('aboutFloatingVideoOverlay');
    const btn = document.getElementById('aboutFloatingVideoBtn');
    const btnLabel = document.getElementById('vbtnLabel');

    if (bannerOverlay && btn) {
        let animFrame;
        let isHovering = false;
        let currentPos = { x: 50, y: 50 };
        let targetPos = { x: 50, y: 50 };

        const lerp = (a, b, t) => a + (b - a) * t;

        const loop = () => {
            currentPos.x = lerp(currentPos.x, targetPos.x, 0.1);
            currentPos.y = lerp(currentPos.y, targetPos.y, 0.1);
            btn.style.left = `${currentPos.x}%`;
            btn.style.top = `${currentPos.y}%`;
            animFrame = requestAnimationFrame(loop);
        };
        animFrame = requestAnimationFrame(loop);

        bannerOverlay.addEventListener('mousemove', (e) => {
            isHovering = true;
            const rect = bannerOverlay.getBoundingClientRect();
            const btnW = btn.offsetWidth || 70;
            const btnH = btn.offsetHeight || 100;
            const pad = 24;

            const rawX = e.clientX - rect.left;
            const rawY = e.clientY - rect.top;
            const clampedX = Math.max(btnW / 2 + pad, Math.min(rect.width - btnW / 2 - pad, rawX));
            const clampedY = Math.max(btnH / 2 + pad, Math.min(rect.height - btnH / 2 - pad, rawY));

            targetPos = {
                x: (clampedX / rect.width) * 100,
                y: (clampedY / rect.height) * 100,
            };
        });

        bannerOverlay.addEventListener('mouseleave', () => {
            isHovering = false;
            targetPos = { x: 50, y: 50 };
        });

        // Hover effect for the button
        btn.addEventListener('mouseenter', () => {
            btn.classList.add('video-btn-hovered');
            if(btnLabel) btnLabel.textContent = 'Watch Video';
        });
        btn.addEventListener('mouseleave', () => {
            btn.classList.remove('video-btn-hovered');
            if(btnLabel) btnLabel.textContent = 'Play';
        });

        // 3. Video Modal Logic
        const modal = document.getElementById('aboutVideoModal');
        const modalBox = document.getElementById('aboutVideoModalBox');
        const closeBtn = document.getElementById('aboutVideoCloseBtn');
        const videoEl = document.getElementById('aboutVideoElement');

        function openModal() {
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            if (videoEl) videoEl.play();
        }

        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = '';
            if (videoEl) {
                videoEl.pause();
                videoEl.currentTime = 0;
            }
        }

        btn.addEventListener('click', openModal);
        
        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (modal) {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeModal();
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal && modal.style.display === 'flex') {
                closeModal();
            }
        });
    }
});
