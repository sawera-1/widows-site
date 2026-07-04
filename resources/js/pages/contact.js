document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const formSuccess = document.getElementById('formSuccess');
    const formError = document.getElementById('formError');

    // Intersection Observer for fade-up animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach((el) => {
        observer.observe(el);
    });

    if (submitBtn && contactForm) {
        submitBtn.addEventListener('mouseenter', () => {
            if (!submitBtn.classList.contains('isLoading')) {
                submitBtn.classList.add('isActive');
            }
        });

        submitBtn.addEventListener('mouseleave', () => {
            if (!submitBtn.classList.contains('isLoading')) {
                submitBtn.classList.remove('isActive');
            }
        });
        
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            if (submitBtn.classList.contains('isLoading')) return;

            // Form validation fallback
            const formData = new FormData(contactForm);
            if (!formData.get('name') || !formData.get('email') || !formData.get('message')) {
                return;
            }

            submitBtn.classList.add('isLoading');
            formSuccess.classList.remove('visible');
            formError.classList.remove('visible');

            try {
                const response = await fetch(contactForm.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                if (response.ok) {
                    formSuccess.classList.add('visible');
                    contactForm.reset();
                    
                    // Hide success message after 5 seconds
                    setTimeout(() => {
                        formSuccess.classList.remove('visible');
                    }, 5000);
                } else {
                    formError.classList.add('visible');
                }
            } catch (error) {
                formError.classList.add('visible');
            } finally {
                submitBtn.classList.remove('isLoading');
            }
        });
    }
});
