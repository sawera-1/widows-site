document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('scrollToTopBtn');
    if (!btn) return;

    const onScroll = () => {
        if (window.scrollY > 400) {
            btn.classList.add('stt-visible');
            btn.classList.remove('stt-hidden');
        } else {
            btn.classList.add('stt-hidden');
            btn.classList.remove('stt-visible');
        }
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    
    // Check initial position
    onScroll();

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
