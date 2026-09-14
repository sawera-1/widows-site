@extends('layouts.app')

@section('title', 'Modern UPVC Windows & Doors — Design, Price & Order Online')
@section('meta_description', 'Premium uPVC windows and doors. Design your perfect window or door online, get an instant price, and order with secure checkout and fast delivery.')

@push('styles')
<style>
    .gc { width:100%; max-width:1280px; margin-inline:auto; padding-inline:16px; }
    @media(min-width:768px){ .gc { padding-inline:24px; } }

    .wi-section__eyebrow {
        display: block;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #666;
        margin-bottom: 12px;
    }
    .dark .wi-section__eyebrow { color: #a3a3a3; }

    /* ===== SECTION SPACING ===== */
    .sec-sm { padding-block:32px; }
    .sec-md { padding-block:40px; }
    .sec-lg { padding-block:48px; }
    @media(min-width:768px){
        .sec-sm { padding-block:40px; }
        .sec-md { padding-block:56px; }
        .sec-lg { padding-block:64px; }
    }
    @media(min-width:1024px){
        .sec-sm { padding-block:48px; }
        .sec-md { padding-block:64px; }
        .sec-lg { padding-block:80px; }
    }

    /* ===== FLUID TYPOGRAPHY ===== */
    .fs-h1 { font-size:clamp(2rem,4vw + 0.5rem,3.5rem); font-weight:800; line-height:1.1; letter-spacing:-0.02em; }
    .fs-h2 { font-size:clamp(1.625rem,3vw + 0.25rem,2.75rem); font-weight:700; line-height:1.15; letter-spacing:-0.015em; }
    .fs-h3 { font-size:clamp(1.375rem,2vw + 0.25rem,2rem); font-weight:600; line-height:1.2; }
    .fs-body { font-size:clamp(0.9375rem,1vw + 0.25rem,1.125rem); line-height:1.7; }

    /* ===== HERO SLIDER ===== */
    .hero-slider {
        position: relative;
        overflow: hidden;
        width: 100%;
        /* Responsive banner height — wide banner on large screens, taller on small */
        height: clamp(320px, 55vw, 680px);
        background: #f5f5f5;
    }
    @media(max-width: 1024px) { .hero-slider { height: clamp(300px, 52vw, 560px); } }
    @media(max-width: 767px)  { .hero-slider { height: clamp(280px, 65vw, 420px); } }
    @media(max-width: 479px)  { .hero-slider { height: clamp(260px, 80vw, 380px); } }
    @media(max-width: 360px)  { .hero-slider { height: 280px; } }
    .hero-track { display:flex; height:100%; transition:transform 0.6s cubic-bezier(0.4,0,0.2,1); }
    .hero-slide { flex:0 0 100%; height:100%; position:relative; display:flex; align-items:center; justify-content:center; }
    .hero-slide-bg { position:absolute; inset:0; }
    .hero-slide-bg img { width:100%; height:100%; object-fit:cover; }
    .hero-slide-overlay { position:absolute; inset:0; background:rgba(0,0,0,0.45); }
    .hero-slide-content { position:relative; z-index:2; text-align:center; color:#fff; width:100%; max-width:700px; padding:0 24px; box-sizing:border-box; }
    .hero-slide-content h2 { font-size:clamp(1.5rem,3.5vw + 0.5rem,3.25rem); font-weight:800; line-height:1.1; margin-bottom:16px; letter-spacing:-0.02em; }
    .hero-slide-content p { font-size:clamp(0.8125rem,1vw + 0.25rem,1.125rem); line-height:1.6; margin-bottom:24px; opacity:0.9; }
    .hero-btn { display:inline-flex; align-items:center; gap:8px; padding:14px 32px; font-size:13px; font-weight:700; letter-spacing:1.5px; text-transform:uppercase; text-decoration:none; border:2px solid #fff; color:#fff; background:transparent; transition:all 0.3s; cursor:pointer; white-space:nowrap; }
    .hero-btn:hover { background:#fff; color:#000; }
    @media(max-width:479px){ .hero-btn { padding:12px 20px; font-size:11px; letter-spacing:1px; } }
    .hero-arrow { position:absolute; top:50%; transform:translateY(-50%); z-index:10; width:48px; height:48px; display:flex; align-items:center; justify-content:center; background:rgba(0,0,0,0.5); border:1px solid rgba(255,255,255,0.3); color:#fff; cursor:pointer; transition:all 0.3s; }
    .hero-arrow:hover { background:rgba(0,0,0,0.8); }
    .hero-arrow--prev { left:16px; }
    .hero-arrow--next { right:16px; }
    @media(max-width:639px){ .hero-arrow { width:36px; height:36px; } .hero-arrow--prev { left:8px; } .hero-arrow--next { right:8px; } }
    .hero-dots { position:absolute; bottom:20px; left:50%; transform:translateX(-50%); display:flex; gap:10px; z-index:10; }
    .hero-dot { width:10px; height:10px; border-radius:50%; border:2px solid #fff; background:transparent; cursor:pointer; transition:all 0.3s; padding:0; }
    .hero-dot.is-active { background:#fff; }

    /* ===== BENEFITS ===== */
    .benefits-grid { display:grid; grid-template-columns:1fr; gap:24px; }
    @media(min-width:640px){ .benefits-grid { grid-template-columns:repeat(2,1fr); } }
    @media(min-width:1024px){ .benefits-grid { grid-template-columns:repeat(4,1fr); } }
    .benefit-card { display:flex; flex-direction:column; align-items:center; text-align:center; padding:32px 16px; }
    .benefit-num { font-size:14px; font-weight:800; letter-spacing:2px; color:#000; margin-bottom:16px; width:40px; height:40px; display:flex; align-items:center; justify-content:center; border:2px solid #000; }
    .benefit-title { font-size:16px; font-weight:700; color:#000; margin-bottom:8px; letter-spacing:0.02em; }
    .benefit-desc { font-size:14px; line-height:1.6; color:#555; }

    /* ===== PRODUCT GRID ===== */
    .products-grid { display:grid; grid-template-columns:1fr; gap:24px; }
    @media(min-width:640px){ .products-grid { grid-template-columns:repeat(2,1fr); } }
    @media(min-width:1024px){ .products-grid { grid-template-columns:repeat(4,1fr); } }

    .product-card { display:flex; flex-direction:column; background:#fff; border:1px solid #e5e5e5; border-radius:4px; overflow:hidden; text-decoration:none; color:inherit; transition:border-color 0.3s, box-shadow 0.3s; }
    .product-card:hover { border-color:#000; box-shadow:0 4px 16px rgba(0,0,0,0.08); }



    .product-card__body { padding:20px; display:flex; flex-direction:column; flex:1; border-top:1px solid #f0f0f0; }
    .product-card__name { font-size:15px; font-weight:700; color:#000; margin-bottom:auto; padding-bottom:16px; }
    .product-card__cta { display:flex; align-items:center; gap:6px; font-size:13px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:#000; border-top:1px solid #f0f0f0; padding-top:16px; transition:color 0.3s; }
    .product-card:hover .product-card__cta { color:#555; }
    .product-card__cta svg { width:16px; height:16px; transition:transform 0.3s; }
    .product-card:hover .product-card__cta svg { transform:translateX(4px); }

    /* SVG placeholder for missing product images */
    .product-placeholder { width:60%; height:60%; display:flex; align-items:center; justify-content:center; }
    .product-placeholder svg { width:100%; height:100%; color:#d4d4d4; }

    /* ===== PRODUCT IMAGE HOVER SWAP ===== */
    .product-card__img { position:relative; width:100%; aspect-ratio:4/3; overflow:hidden; background:#f5f5f5; }
    .product-card__img img { position:absolute; inset:0; width:100%; height:100%; object-fit:contain; transition:opacity 0.4s ease; }
    .product-card__img .img-primary  { opacity:1; z-index:1; }
    .product-card__img .img-hover    { opacity:0; z-index:2; }
    .product-card:hover .img-primary { opacity:0; }
    .product-card:hover .img-hover   { opacity:1; }

    /* ===== DARK MODE OVERRIDES ===== */
    [data-theme="dark"] .benefit-num { color:#fff; border-color:#fff; }
    [data-theme="dark"] .benefit-title { color:#fff; }
    [data-theme="dark"] .benefit-desc { color:#a3a3a3; }
    [data-theme="dark"] .product-card { background:#111; border-color:#333; }
    [data-theme="dark"] .product-card:hover { border-color:#fff; }
    [data-theme="dark"] .product-card__img { background:#1a1a1a; }
    [data-theme="dark"] .product-card__name { color:#fff; }
    [data-theme="dark"] .product-card__cta { color:#fff; border-color:#333; }
    [data-theme="dark"] .product-card__body { border-color:#333; }
    [data-theme="dark"] .product-card__body .product-card__cta { border-color:#333; }
</style>
@endpush

@section('content')

<main id="content">

    {{-- ═══════════════════════════════════════════════════════════════════
         1. HERO BANNER SLIDER
    ═══════════════════════════════════════════════════════════════════ --}}
    <section aria-label="Hero banner" style="width:100%;max-width:none;background:#000;display:block;">
        <div class="hero-slider" id="heroSlider" style="width:100%;max-width:none;">
            <div class="hero-track" id="heroTrack">

                    {{-- Slide 1 --}}
                    <div class="hero-slide">
                        <div class="hero-slide-bg" style="background:#1a1a1a;">
                            <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;">
                                <svg viewBox="0 0 800 400" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%;opacity:0.15;">
                                    <rect x="200" y="60" width="400" height="280" rx="2" stroke="#fff" stroke-width="2"/>
                                    <line x1="400" y1="60" x2="400" y2="340" stroke="#fff" stroke-width="1.5"/>
                                    <line x1="200" y1="200" x2="600" y2="200" stroke="#fff" stroke-width="1"/>
                                    <rect x="220" y="80" width="160" height="100" rx="1" stroke="#fff" stroke-width="0.5" opacity="0.5"/>
                                    <rect x="420" y="80" width="160" height="100" rx="1" stroke="#fff" stroke-width="0.5" opacity="0.5"/>
                                    <rect x="220" y="220" width="160" height="100" rx="1" stroke="#fff" stroke-width="0.5" opacity="0.5"/>
                                    <rect x="420" y="220" width="160" height="100" rx="1" stroke="#fff" stroke-width="0.5" opacity="0.5"/>
                                </svg>
                            </div>
                        </div>
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content">
                            <h2>Premium uPVC Windows</h2>
                            <p>Design your perfect window online. Choose your style, size, colour and glazing — get an instant price.</p>
                            <a href="#products" class="hero-btn">Browse Windows</a>
                        </div>
                    </div>

                    {{-- Slide 2 --}}
                    <div class="hero-slide">
                        <div class="hero-slide-bg" style="background:#111;">
                            <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;">
                                <svg viewBox="0 0 800 400" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%;opacity:0.15;">
                                    <rect x="320" y="40" width="160" height="320" rx="2" stroke="#fff" stroke-width="2"/>
                                    <rect x="330" y="50" width="140" height="250" rx="1" stroke="#fff" stroke-width="0.5" opacity="0.5"/>
                                    <circle cx="460" cy="200" r="6" stroke="#fff" stroke-width="1.5"/>
                                </svg>
                            </div>
                        </div>
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content">
                            <h2>Quality uPVC Doors</h2>
                            <p>Front doors, French doors, patio doors — configure online and order direct with fast UK delivery.</p>
                            <a href="#products" class="hero-btn">Browse Doors</a>
                        </div>
                    </div>

                    {{-- Slide 3 --}}
                    <div class="hero-slide">
                        <div class="hero-slide-bg" style="background:#0d0d0d;">
                            <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;">
                                <svg viewBox="0 0 800 400" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%;opacity:0.12;">
                                    <rect x="100" y="100" width="250" height="200" rx="2" stroke="#fff" stroke-width="1.5"/>
                                    <rect x="450" y="100" width="250" height="200" rx="2" stroke="#fff" stroke-width="1.5"/>
                                    <path d="M100 200h250M450 200h250" stroke="#fff" stroke-width="0.5"/>
                                    <text x="400" y="380" text-anchor="middle" fill="#fff" font-size="14" opacity="0.4">DESIGN &amp; PRICE ONLINE</text>
                                </svg>
                            </div>
                        </div>
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content">
                            <h2>Design &amp; Price Online</h2>
                            <p>Use our online configurator to customise your windows and doors. Get instant pricing with no obligation.</p>
                            <a href="#products" class="hero-btn">Start Designing</a>
                        </div>
                    </div>

                </div>

                {{-- Dots --}}
                <div class="hero-dots" id="heroDots"></div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════
         2. BENEFITS / HOW IT WORKS
    ═══════════════════════════════════════════════════════════════════ --}}
    <section class="w-full bg-white dark:bg-black sec-md border-b border-gray-200 dark:border-gray-800" aria-label="How it works">
        <div class="gc">
            <div class="text-center mb-12">
                <span class="wi-section__eyebrow">The Process</span>
                <h2 class="fs-h2 text-black dark:text-white">How It Works</h2>
            </div>
            <div class="benefits-grid">

                {{-- Benefit 01 --}}
                <div class="benefit-card">
                    <img src="{{ asset('assets/icon/search.png') }}" alt="" class="w-10 h-10 mb-4 object-contain dark:invert" />
                    <div class="benefit-num">01</div>
                    <h3 class="benefit-title">Choose Product &amp; Size</h3>
                    <p class="benefit-desc">Choose your required window or door and enter your exact dimensions.</p>
                </div>

                {{-- Benefit 02 --}}
                <div class="benefit-card">
                    <img src="{{ asset('assets/icon/planning.png') }}" alt="" class="w-10 h-10 mb-4 object-contain dark:invert" />
                    <div class="benefit-num">02</div>
                    <h3 class="benefit-title">Design Online</h3>
                    <p class="benefit-desc">Configure your window or door design online with the available options.</p>
                </div>

                {{-- Benefit 03 --}}
                <div class="benefit-card">
                    <img src="{{ asset('assets/icon/paper.png') }}" alt="" class="w-10 h-10 mb-4 object-contain dark:invert" />
                    <div class="benefit-num">03</div>
                    <h3 class="benefit-title">Price Instantly</h3>
                    <p class="benefit-desc">Get an instant price based on your selected product, size and configuration.</p>
                </div>

                {{-- Benefit 04 --}}
                <div class="benefit-card">
                    <img src="{{ asset('assets/icon/express-delivery.png') }}" alt="" class="w-10 h-10 mb-4 object-contain dark:invert" />
                    <div class="benefit-num">04</div>
                    <h3 class="benefit-title">Secure Checkout &amp; Fast Delivery</h3>
                    <p class="benefit-desc">Complete your order through secure checkout and choose the available delivery option.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════
         3. PRODUCT CATEGORIES
    ═══════════════════════════════════════════════════════════════════ --}}


    <section class="w-full bg-white dark:bg-black sec-lg" aria-label="Product categories" id="products">
        <div class="gc">

            {{-- Section heading --}}
            <div class="text-center mb-12 md:mb-16">
                <span class="wi-section__eyebrow">Our Products</span>
                <h2 class="fs-h2 text-black dark:text-white mb-4">Windows &amp; Doors</h2>
                <p class="fs-body text-gray-500 dark:text-gray-400 max-w-xl mx-auto">Browse our range of premium uPVC windows and doors. Design online, get an instant price, and order with confidence.</p>
            </div>

            {{-- Product Grid --}}
            <div class="products-grid">
                @foreach($products as $product)
                    <a href="/{{ $product->category }}/{{ $product->slug }}" class="product-card group" aria-label="{{ $product->name }}">

                        {{-- Image area: primary shown by default, hover_image shown on hover --}}
                        <div class="product-card__img">
                            <img class="img-primary"
                                 src="{{ asset('assets/products/' . $product->image) }}"
                                 alt="{{ $product->name }}"
                                 loading="lazy">
                            <img class="img-hover"
                                 src="{{ asset('assets/products/' . $product->hover_image) }}"
                                 alt="{{ $product->name }} — alternate view"
                                 loading="lazy">
                        </div>

                        {{-- Card body --}}
                        <div class="product-card__body">
                            <span class="product-card__name">{{ $product->name }}</span>
                            <span class="product-card__cta">
                                Design &amp; Price
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </span>
                        </div>

                    </a>
                @endforeach
            </div>

        </div>
    </section>

</main>

@endsection

@push('scripts')
<script>
(function() {
    'use strict';

    // ═══════ HERO SLIDER ═══════
    const track = document.getElementById('heroTrack');
    const slider = document.getElementById('heroSlider');
    const dotsContainer = document.getElementById('heroDots');
    if (!track || !slider) return;

    const slides = track.querySelectorAll('.hero-slide');
    const total = slides.length;
    let current = 0;
    let interval = null;
    const INTERVAL_MS = 5000;

    // Build dots
    for (let i = 0; i < total; i++) {
        const dot = document.createElement('button');
        dot.className = 'hero-dot' + (i === 0 ? ' is-active' : '');
        dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        dot.addEventListener('click', function() { goTo(i); play(); });
        dotsContainer.appendChild(dot);
    }

    function goTo(index) {
        current = ((index % total) + total) % total;
        track.style.transform = 'translateX(-' + (current * 100) + '%)';
        updateDots();
    }

    function updateDots() {
        const dots = dotsContainer.querySelectorAll('.hero-dot');
        dots.forEach(function(d, i) {
            d.classList.toggle('is-active', i === current);
        });
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    function play() {
        clearInterval(interval);
        interval = setInterval(next, INTERVAL_MS);
    }

    document.getElementById('heroNext').addEventListener('click', function() { next(); play(); });
    document.getElementById('heroPrev').addEventListener('click', function() { prev(); play(); });

    // Touch support
    let touchStartX = 0;
    slider.addEventListener('touchstart', function(e) { touchStartX = e.changedTouches[0].screenX; clearInterval(interval); }, { passive: true });
    slider.addEventListener('touchend', function(e) {
        const diff = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) > 50) { diff > 0 ? next() : prev(); }
        play();
    }, { passive: true });

    play();

})();
</script>
@endpush
