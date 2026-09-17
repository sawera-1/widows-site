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
    .hero-track { display:flex; height:100%; transition:transform 1.2s cubic-bezier(0.65, 0, 0.35, 1); }
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

    .anim-composite {
        display: flex;
        gap: 3rem;
        align-items: flex-end;
        justify-content: center;
        background: radial-gradient(circle at center, rgba(255,255,255,0.08) 0%, transparent 70%);
        padding: 4rem 3rem;
        border-radius: 24px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: inset 0 0 40px rgba(0,0,0,0.5), 0 20px 50px rgba(0,0,0,0.5);
    }

    .anim-window {
        position: relative;
        width: 220px;
        height: 320px;
        perspective: 1200px;
        transform-style: preserve-3d;
    }

    .anim-door {
        position: relative;
        width: 220px;
        height: 460px;
        perspective: 1200px;
        transform-style: preserve-3d;
    }

    .anim-frame {
        position: absolute;
        inset: 0;
        border: 4px solid rgba(255,255,255,0.65);
        border-radius: 6px;
        background: linear-gradient(135deg, rgba(20,20,20,0.6) 0%, rgba(40,40,40,0.2) 100%);
        box-shadow: inset 0 5px 15px rgba(0,0,0,0.8), 0 10px 30px rgba(0,0,0,0.5);
    }

    .anim-mullion-h {
        position: absolute;
        left: 0; right: 0; top: 40%;
        height: 6px;
        background: rgba(255,255,255,0.65);
        transform: translateY(-50%);
        z-index: 2;
        box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .anim-top-glass {
        position: absolute;
        top: 6px; left: 6px; right: 6px; bottom: 60%;
        background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, rgba(255,255,255,0.02) 100%);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 2px;
        overflow: hidden;
    }

    .anim-sash {
        position: absolute;
        top: 40%; bottom: 6px;
        width: calc(50% - 6px);
        border: 3px solid rgba(255,255,255,0.65);
        background: linear-gradient(135deg, rgba(255,255,255,0.12) 0%, rgba(255,255,255,0.01) 100%);
        overflow: hidden;
        z-index: 1;
        border-radius: 2px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.4);
    }

    /* Door overrides */
    .anim-door .anim-sash {
        top: 6px; bottom: 6px;
        width: calc(100% - 12px);
        left: 6px;
        transform-origin: left;
        animation: openLeft 6s infinite alternate cubic-bezier(0.5, 0, 0.2, 1);
        animation-delay: 2s; /* Offset animation timing */
    }
    
    .door-handle {
        position: absolute;
        right: 12px;
        top: 50%;
        width: 6px;
        height: 48px;
        background: linear-gradient(to bottom, #999, #fff, #999);
        border-radius: 3px;
        transform: translateY(-50%);
        box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
    }
    
    .door-mail-slot {
        position: absolute;
        left: 50%;
        bottom: 50px;
        width: 50px;
        height: 8px;
        background: rgba(255,255,255,0.7);
        border-radius: 4px;
        transform: translateX(-50%);
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.8);
    }

    .anim-sash-left {
        left: 6px;
        transform-origin: left;
        animation: openLeft 6s infinite alternate cubic-bezier(0.5, 0, 0.2, 1);
    }

    .anim-sash-right {
        right: 6px;
        transform-origin: right;
        animation: openRight 6s infinite alternate cubic-bezier(0.5, 0, 0.2, 1);
        animation-delay: 0.5s;
    }

    @keyframes openLeft {
        0%, 20% { transform: rotateY(0deg); }
        80%, 100% { transform: rotateY(-35deg); }
    }

    @keyframes openRight {
        0%, 20% { transform: rotateY(0deg); }
        80%, 100% { transform: rotateY(35deg); }
    }

    .glass-reflection {
        position: absolute;
        top: -100%; left: -100%;
        width: 300%; height: 300%;
        background: linear-gradient(135deg, 
            rgba(255,255,255,0) 0%, 
            rgba(255,255,255,0) 35%, 
            rgba(255,255,255,0.2) 45%, 
            rgba(255,255,255,0.4) 50%, 
            rgba(255,255,255,0.1) 55%, 
            rgba(255,255,255,0) 65%, 
            rgba(255,255,255,0) 100%);
        animation: shine 4s infinite linear;
    }

    .anim-top-glass .glass-reflection {
        animation-delay: 2s;
    }
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
                                <div class="anim-window" style="transform: scale(1.35);">
                                    <div class="anim-frame"></div>
                                    <div class="anim-mullion-h"></div>
                                    <div class="anim-top-glass"><div class="glass-reflection"></div></div>
                                    <div class="anim-sash anim-sash-left"><div class="glass-reflection"></div></div>
                                    <div class="anim-sash anim-sash-right"><div class="glass-reflection"></div></div>
                                </div>
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
                                <div class="anim-door" style="transform: scale(1.15);">
                                    <div class="anim-frame"></div>
                                    <div class="anim-sash">
                                        <div class="door-handle"></div>
                                        <div class="glass-reflection"></div>
                                    </div>
                                </div>
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
                                <div class="anim-composite" style="transform: scale(1.15);">
                                    <div class="anim-window">
                                        <div class="anim-frame"></div>
                                        <div class="anim-mullion-h"></div>
                                        <div class="anim-top-glass"><div class="glass-reflection"></div></div>
                                        <div class="anim-sash anim-sash-left"><div class="glass-reflection"></div></div>
                                        <div class="anim-sash anim-sash-right"><div class="glass-reflection"></div></div>
                                    </div>
                                    <div class="anim-door">
                                        <div class="anim-frame"></div>
                                        <div class="anim-sash">
                                            <div class="door-handle"></div>
                                            <div class="door-mail-slot"></div>
                                            <div class="glass-reflection"></div>
                                        </div>
                                    </div>
                                </div>
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

    const nextBtn = document.getElementById('heroNext');
    const prevBtn = document.getElementById('heroPrev');
    if (nextBtn) nextBtn.addEventListener('click', function() { next(); play(); });
    if (prevBtn) prevBtn.addEventListener('click', function() { prev(); play(); });

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
