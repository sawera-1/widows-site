{{-- Full-screen search overlay. app.js toggles .is-open, focuses the field,
     closes on Escape / backdrop click. Submits to /search?q= --}}
<div class="search-overlay" data-search-overlay role="dialog" aria-modal="true" aria-label="Search">
    <button class="so-close" data-close-search aria-label="Close search">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" />
        </svg>
    </button>
    <div class="so-body">
        <p class="so-eyebrow">Start typing…</p>
        <div class="so-field-wrap">
            <form action="/search" method="GET">
                <input type="search" name="q" placeholder="Search" class="so-field" autocomplete="off" aria-label="Search" data-search-input>
            </form>
            <div class="so-line" aria-hidden="true"></div>
        </div>
    </div>
</div>
