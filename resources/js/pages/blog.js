document.addEventListener('DOMContentLoaded', () => {
    const BATCH_SIZE = 6;
    const blogGrid = document.getElementById('blogGrid');
    const blogMain = document.getElementById('blogMain');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const allLoadedMsg = document.getElementById('allLoadedMsg');

    if (!blogGrid || !blogMain) return;

    // Fade-up animation using IntersectionObserver
    const observerOptions = {
        threshold: 0.08,
        rootMargin: '0px 0px -50px 0px'
    };

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Reveal the visible items
                revealItems();
                sectionObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    sectionObserver.observe(blogMain);

    function revealItems() {
        const items = blogGrid.querySelectorAll('.blog-card');
        items.forEach((item, index) => {
            if (item.style.display !== 'none') {
                setTimeout(() => {
                    item.classList.add('is-visible');
                }, 70 * (index % BATCH_SIZE));
            }
        });
    }

    // Load More functionality
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', (e) => {
            e.preventDefault();
            
            if (loadMoreBtn.classList.contains('isLoading')) return;
            
            loadMoreBtn.classList.add('isLoading');
            
            // Simulate network request
            setTimeout(() => {
                const items = blogGrid.querySelectorAll('.blog-card');
                let newlyRevealed = 0;
                let lastIndex = 0;

                // Find the first hidden item
                items.forEach((item, index) => {
                    if (item.style.display === 'none' && newlyRevealed < BATCH_SIZE) {
                        item.style.display = 'block';
                        
                        // Force reflow for animation
                        void item.offsetWidth;
                        
                        setTimeout(() => {
                            item.classList.add('is-visible');
                        }, 70 * newlyRevealed);
                        
                        newlyRevealed++;
                        lastIndex = index;
                    }
                });

                loadMoreBtn.classList.remove('isLoading');

                // If all items are now visible
                if (lastIndex >= items.length - 1) {
                    loadMoreBtn.style.display = 'none';
                    if (allLoadedMsg) {
                        allLoadedMsg.style.display = 'inline-flex';
                    }
                }
            }, 1200);
        });
    }
});
