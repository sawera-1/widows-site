const initAlpineComponents = () => {
    Alpine.data('designPage', () => ({
        theme: 'light',
        mounted: false,
        visible: false,

        get isDark() {
            return this.theme === 'dark';
        },

        get mainStyle() {
            const dark = this.isDark;
            return {
                paddingTop: '80px',
                background: 'var(--bg)',
                color: 'var(--text)',
                '--accent-theme': dark ? '#ff4d4d' : '#cc0000',
                '--btn-text': dark ? '#111111' : '#ffffff',
                '--btn-shadow': dark ? 'rgba(255, 77, 77, 0.35)' : 'rgba(204, 0, 0, 0.35)',
            };
        },

        get heroContentStyle() {
            return {
                opacity: this.visible ? 1 : 0,
                transform: this.visible ? 'translateY(0)' : 'translateY(28px)',
                transition: 'opacity .7s cubic-bezier(.22,1,.36,1), transform .7s cubic-bezier(.22,1,.36,1)',
            };
        },

        init() {
            // Read initial theme from HTML class
            const isDark = document.documentElement.classList.contains('theme-dark');
            this.theme = isDark ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', this.theme);
            this.mounted = true;

            setTimeout(() => { this.visible = true; }, 150);

            this.$nextTick(() => this.setupRevealObserver());

            window.addEventListener('theme-changed', (e) => {
                this.theme = e.detail.isDark ? 'dark' : 'light';
                document.documentElement.setAttribute('data-theme', this.theme);
            });
        },

        toggleTheme() {
            // Note: If you want to toggle theme from this component, 
            // you'd typically want to dispatch the same event or call a global function
            // to keep it in sync with app.js
            const next = this.theme === 'dark' ? 'light' : 'dark';
            this.theme = next;
            document.documentElement.setAttribute('data-theme', next);
            if (next === 'dark') {
                document.documentElement.classList.remove('theme-light');
                document.documentElement.classList.add('theme-dark');
            } else {
                document.documentElement.classList.remove('theme-dark');
                document.documentElement.classList.add('theme-light');
            }
            window.dispatchEvent(new CustomEvent('theme-changed', { detail: { isDark: next === 'dark' } }));
        },

        setupRevealObserver() {
            const observer = new IntersectionObserver(
                (entries) => entries.forEach((e) => {
                    if (e.isIntersecting) e.target.classList.add('visible');
                }),
                { threshold: 0.05, rootMargin: '0px 0px -50px 0px' }
            );

            document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));

            // matches the original's re-check after 1s for late-mounted elements
            setTimeout(() => {
                document.querySelectorAll('.reveal:not(.visible)').forEach((el) => observer.observe(el));
            }, 1000);
        },

        observeHwbFlow(el) {
            if (!el) return;
            const fill = el.querySelector('.hwb-connector-fill');
            const obs = new IntersectionObserver(([e]) => {
                if (e.isIntersecting && fill) {
                    fill.classList.add('hwb-connector-filled');
                    obs.disconnect();
                }
            }, { threshold: 0.3 });
            obs.observe(el);
        },
    }));

    // Mirrors the React <CardTicker> component's pause-on-hover behavior
    Alpine.data('cardTicker', () => ({
        paused: false,
    }));
};

if (window.Alpine) {
    initAlpineComponents();
} else {
    document.addEventListener('alpine:init', initAlpineComponents);
}