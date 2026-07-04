document.addEventListener('alpine:init', () => {
    Alpine.data('servicesPage', () => ({
        theme: 'light',
        mounted: false,

        init() {
            const isDark = document.documentElement.classList.contains('theme-dark');
            this.theme = isDark ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', this.theme);
            this.mounted = true;

            this.$nextTick(() => this.setupRevealObserver());

            // keep in sync if theme is toggled elsewhere (e.g. header switcher)
            window.addEventListener('theme-changed', (e) => {
                this.theme = e.detail.isDark ? 'dark' : 'light';
                document.documentElement.setAttribute('data-theme', this.theme);
            });
        },

        toggleTheme() {
            const next = this.theme === 'dark' ? 'light' : 'dark';
            this.theme = next;
            localStorage.setItem('codecaks-theme', next);
            document.documentElement.setAttribute('data-theme', next);
            window.dispatchEvent(new CustomEvent('theme-changed', { detail: { theme: next } }));
        },

        setupRevealObserver() {
            const observer = new IntersectionObserver(
                (entries) => entries.forEach((e) => {
                    if (e.isIntersecting) e.target.classList.add('visible');
                }),
                { threshold: 0.12 }
            );
            document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
        },

        observeHwbFlow(el) {
            if (!el) return;
            const fill = el.querySelector('.svc-hwb-connector-fill');
            const obs = new IntersectionObserver(([e]) => {
                if (e.isIntersecting && fill) {
                    fill.classList.add('svc-hwb-connector-filled');
                    obs.disconnect();
                }
            }, { threshold: 0.3 });
            obs.observe(el);
        },
    }));
});