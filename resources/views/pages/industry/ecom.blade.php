{{-- ============================================================
     law-firms.blade.php (ENHANCED)
     Landing page for the Law Firms industry page.
     ============================================================ --}}

@extends('layouts.app')

@section('title', 'E-commerce Web Development — Corammers')
@section('meta_description', 'Premium e-commerce websites with AI shopping assistants, secure checkout, and high-converting storefronts.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/industry-law.css') }}">
@endpush

@section('content')
@php
    $robot = '<img loading="lazy" decoding="async" class="robot-light" src="/assets/robo.webp" alt="Robot"><img loading="lazy" decoding="async" class="robot-dark" src="/assets/robo.webp" alt="Robot">';
@endphp
<div class="pw-law">

<section class="lf-section lf-section--dark lf-hero">
    <div class="lf-glow"></div>
    <div class="lf-container">
        <div class="lf-hero__pill-wrap">
            <span class="lf-pill"><span class="lf-pill__dot"></span> Premium E-commerce Web Development Services</span>
        </div>

        <h1 class="lf-heading lf-hero__heading">
            Why We're the <span class="accent">#1</span> Web<br>
            Development Partner<br>
            <span class="accent">For E-commerce Brands</span>
        </h1>

        <p class="lf-hero__subtext">
            Create high-converting online stores that increase sales, improve customer experience, and help your business scale. We build fast, secure, mobile-first e-commerce websites with seamless shopping experiences, AI automation, and powerful integrations.
        </p>

        <div class="lf-hero__ctas">
            <a href="#book-consultation" class="lf-btn lf-btn--primary">Book Free Consultation</a>
            <a href="#features" class="lf-btn lf-btn--dark">See Our Features</a>
        </div>

        <div class="lf-hero__stats">
            <div class="lf-stat">
                <div class="lf-stat__num" data-target="1000">0</div>
                <div class="lf-stat__label">Projects Delivered</div>
            </div>
            <div class="lf-stat">
                <div class="lf-stat__num" data-target="98">0</div>
                <div class="lf-stat__label">Client Satisfaction</div>
            </div>
            <div class="lf-stat">
                <div class="lf-stat__num">24/7</div>
                <div class="lf-stat__label">Support Available</div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== SECTION 2 — GAME-CHANGER FEATURES ===================== --}}
<section class="lf-section lf-section--light" id="features">
    <div class="lf-container">
        <div class="label-row" style="justify-content:center; margin-bottom:24px;">
            <div style="display:flex; flex-direction:column; align-items:center; gap:10px;">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="section-divider" style="margin-bottom:0;"></div>
            </div>
            <div class="label-pill"><span class="label-dot"></span><span class="label-text">Core Features</span></div>
        </div>
        <h2 class="lf-heading">Game-Changer <span class="accent-plain" style="color:var(--primary);">Features</span></h2>
        <p class="lf-subtitle">Three revolutionary features that set you miles ahead of the competition</p>

        <div class="lf-cards-grid">
            {{-- Card 1 --}}
            <div class="lf-card">
                <div class="lf-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l7 17 2-7 7-2z"/></svg>
                </div>
                <span class="lf-card__title">High-Converting</span>
                <span class="lf-card__tag">Online Store</span>
                <p class="lf-card__desc">A powerful, modern storefront designed specifically to capture attention and drive sales.</p>
                <span class="lf-card__list-label">What It Includes:</span>
                <ul class="lf-check-list lf-check-list--dots">
                    <li><span class="lf-dot"></span> Modern storefront &amp; product catalog</li>
                    <li><span class="lf-dot"></span> Category pages &amp; intuitive product search</li>
                    <li><span class="lf-dot"></span> Seamless shopping cart &amp; mobile shopping experience</li>
                </ul>
                <div class="lf-card__result">
                    <span class="lf-result-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.7 10.7l-4 4a.996.996 0 11-1.41-1.41L13.17 13H7c-.55 0-1-.45-1-1s.45-1 1-1h6.17l-1.88-1.88a.996.996 0 111.41-1.41l4 4c.39.39.39 1.03 0 1.41z"/></svg>
                    </span>
                    <p class="lf-card__desc"><strong>Result:</strong> Increase conversions and customer engagement.</p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="lf-card">
                <div class="lf-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="8" width="16" height="12" rx="2"/><path d="M9 8V5a3 3 0 0 1 6 0v3"/><circle cx="9" cy="14" r="1"/><circle cx="15" cy="14" r="1"/></svg>
                </div>
                <span class="lf-card__title">AI Shopping Assistant</span>
                <span class="lf-card__tag">&amp; Sales Automation</span>
                <p class="lf-card__desc">Intelligent automation that works 24/7 to guide customers, offer personalized help, and recover lost sales.</p>
                <span class="lf-card__list-label">What It Includes:</span>
                <ul class="lf-check-list lf-check-list--dots">
                    <li><span class="lf-dot"></span> AI product recommendations &amp; chatbot</li>
                    <li><span class="lf-dot"></span> Customer support automation &amp; cart recovery</li>
                    <li><span class="lf-dot"></span> Personalized shopping assistance</li>
                </ul>
                <div class="lf-card__result">
                    <span class="lf-result-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.7 10.7l-4 4a.996.996 0 11-1.41-1.41L13.17 13H7c-.55 0-1-.45-1-1s.45-1 1-1h6.17l-1.88-1.88a.996.996 0 111.41-1.41l4 4c.39.39.39 1.03 0 1.41z"/></svg>
                    </span>
                    <p class="lf-card__desc"><strong>Result:</strong> Increase average order value and reduce abandoned carts.</p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="lf-card">
                <div class="lf-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 3a9 9 0 0 0 0 18c1.5 0 2-1 2-2s-.5-1.5-.5-2 .5-1 1.5-1h1a4 4 0 0 0 4-4 8 8 0 0 0-8-9z"/></svg>
                </div>
                <span class="lf-card__title">Secure Checkout</span>
                <span class="lf-card__tag">&amp; Business Growth</span>
                <p class="lf-card__desc">A frictionless, protected payment process combined with powerful backend management tools.</p>
                <span class="lf-card__list-label">What It Includes:</span>
                <ul class="lf-check-list lf-check-list--dots">
                    <li><span class="lf-dot"></span> Fast checkout &amp; secure payment gateways</li>
                    <li><span class="lf-dot"></span> Order tracking &amp; inventory management</li>
                    <li><span class="lf-dot"></span> Advanced analytics &amp; CRM integration</li>
                </ul>
                <div class="lf-card__result">
                    <span class="lf-result-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.7 10.7l-4 4a.996.996 0 11-1.41-1.41L13.17 13H7c-.55 0-1-.45-1-1s.45-1 1-1h6.17l-1.88-1.88a.996.996 0 111.41-1.41l4 4c.39.39.39 1.03 0 1.41z"/></svg>
                    </span>
                    <p class="lf-card__desc"><strong>Result:</strong> Deliver a seamless shopping experience that drives repeat purchases.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== SECTION 3 — WHAT MOST E-COMMERCE BUSINESSES ARE MISSING ===================== --}}
<section class="lf-section lf-section--dark2">
    <div class="lf-glow"></div>
    <div class="lf-container">
        <h2 class="lf-heading" style="color:var(--white);">What Most Online Stores<br>Are <span class="accent">Missing</span></h2>
        <p class="lf-subtitle" style="color:var(--white);">(Why Their Websites Fail to Convert)</p>

        <div class="lf-missing-grid">
            @php
                $missingItems = [
                    ['title' => 'Slow & Poor Mobile Experience', 'desc' => 'Slow-loading stores and complicated mobile navigation drive users away'],
                    ['title' => 'Complicated Checkout Process', 'desc' => 'Too many steps in checkout lead to massive cart abandonment'],
                    ['title' => 'Weak Product Presentation', 'desc' => 'Low conversion rates due to poorly structured product and category pages'],
                    ['title' => 'No AI Customer Support', 'desc' => 'Failing to provide instant assistance or personalized recommendations'],
                    ['title' => 'Poor Inventory Management', 'desc' => 'Lack of proper tracking, fulfillment integration, or CRM connectivity'],
                    ['title' => 'Weak Customer Retention', 'desc' => 'Zero loyalty systems or automated cart recovery to bring buyers back'],
                ];
            @endphp

            @foreach ($missingItems as $item)
                <div class="lf-missing-item">
                    <span class="lf-missing-item__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    </span>
                    <div>
                        <div class="lf-missing-item__title">{{ $item['title'] }}</div>
                        <div class="lf-missing-item__desc">{{ $item['desc'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="lf-highlight-box">
            <p class="lf-highlight-box__quote">Don't Let These Gaps Cost You Sales</p>
            <p class="lf-highlight-box__sub">We fix every single one of these issues by implementing high-converting storefronts, powerful AI, and seamless checkouts.</p>
        </div>

        <div class="lf-cta-center">
            <a href="#book-consultation" class="lf-btn lf-btn--primary">Book Free Consultation</a>
        </div>
    </div>
</section>

{{-- ===================== SECTION 4 — WHAT WE DELIVER (CAROUSEL) ===================== --}}
<section class="lf-section lf-section--light">
    <div class="lf-container">
        <div class="label-row" style="justify-content:center; margin-bottom:24px;">
            <div style="display:flex; flex-direction:column; align-items:center; gap:10px;">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="section-divider" style="margin-bottom:0;"></div>
            </div>
            <div class="label-pill"><span class="label-dot"></span><span class="label-text">Our Services</span></div>
        </div>
        <h2 class="lf-heading">What We <span style="color:var(--primary);">Deliver</span></h2>
        <p class="lf-subtitle">Complete online store business upgrade, redesigned for maximum sales</p>

        <div class="lf-deliver-carousel">
            <div class="lf-deliver-track">
                {{-- Card 1 --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">High-Converting Product Pages</span>
                    <span class="lf-deliver-card__subtitle">( E-commerce Optimization )</span>
                    <p class="lf-deliver-card__desc">Designed to guide potential buyers securely and efficiently toward checkout.</p>
                    <ul class="lf-deliver-list">
                        <li>Professionally designed, high-converting "Add to Cart" and "Buy Now" buttons</li>
                        <li>Strategic product placement and recommended items for cross-selling</li>
                        <li>Sticky header carts and quick checkout for instant purchase access</li>
                    </ul>
                </div>

                {{-- Card 2 --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 3v6c0 5-3.5 8.5-8 9-4.5-.5-8-4-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">Fully Integrated Sales Automation</span>
                    <span class="lf-deliver-card__subtitle">( AI Shopping Tools )</span>
                    <p class="lf-deliver-card__desc">A professional, automated shopping experience that works 24/7.</p>
                    <ul class="lf-deliver-list">
                        <li>AI chatbots for instant customer support</li>
                        <li>Automated abandoned cart recovery emails and SMS</li>
                        <li>Personalized product recommendations based on browsing history</li>
                    </ul>
                </div>

                {{-- Card 3 --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 21h8M12 17v4M7 4h10v4a5 5 0 0 1-10 0V4z"/><path d="M17 5h3a2 2 0 0 1-2 4M7 5H4a2 2 0 0 0 2 4"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">Modern Brand Authority</span>
                    <span class="lf-deliver-card__subtitle">( Custom Storefronts )</span>
                    <p class="lf-deliver-card__desc">Perfect for brands that demand a high-end, sophisticated, and trustworthy shopping experience.</p>
                    <ul class="lf-deliver-list">
                        <li>Lightning-fast loading speeds essential for e-commerce SEO</li>
                        <li>SEO structured Category and detailed Product pages</li>
                        <li>Mobile-first optimization for frictionless mobile commerce</li>
                    </ul>
                </div>

                {{-- Card 4 (Duplicate for seamless carousel) --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">High-Converting Product Pages</span>
                    <span class="lf-deliver-card__subtitle">( E-commerce Optimization )</span>
                    <p class="lf-deliver-card__desc">Designed to guide potential buyers securely and efficiently toward checkout.</p>
                    <ul class="lf-deliver-list">
                        <li>Professionally designed, high-converting "Add to Cart" and "Buy Now" buttons</li>
                        <li>Strategic product placement and recommended items for cross-selling</li>
                        <li>Sticky header carts and quick checkout for instant purchase access</li>
                    </ul>
                </div>

                {{-- Card 5 (Duplicate for seamless carousel) --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 3v6c0 5-3.5 8.5-8 9-4.5-.5-8-4-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">Fully Integrated Sales Automation</span>
                    <span class="lf-deliver-card__subtitle">( AI Shopping Tools )</span>
                    <p class="lf-deliver-card__desc">A professional, automated shopping experience that works 24/7.</p>
                    <ul class="lf-deliver-list">
                        <li>AI chatbots for instant customer support</li>
                        <li>Automated abandoned cart recovery emails and SMS</li>
                        <li>Personalized product recommendations based on browsing history</li>
                    </ul>
                </div>

                {{-- Card 6 (Duplicate for seamless carousel) --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 21h8M12 17v4M7 4h10v4a5 5 0 0 1-10 0V4z"/><path d="M17 5h3a2 2 0 0 1-2 4M7 5H4a2 2 0 0 0 2 4"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">Modern Brand Authority</span>
                    <span class="lf-deliver-card__subtitle">( Custom Storefronts )</span>
                    <p class="lf-deliver-card__desc">Perfect for brands that demand a high-end, sophisticated, and trustworthy shopping experience.</p>
                    <ul class="lf-deliver-list">
                        <li>Lightning-fast loading speeds essential for e-commerce SEO</li>
                        <li>SEO structured Category and detailed Product pages</li>
                        <li>Mobile-first optimization for frictionless mobile commerce</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="lf-carousel-dots">
            <span class="lf-dot-item active"></span>
            <span class="lf-dot-item"></span>
            <span class="lf-dot-item"></span>
            <span class="lf-dot-item"></span>
            <span class="lf-dot-item"></span>
            <span class="lf-dot-item"></span>
        </div>
    </div>
</section>

{{-- ===================== SECTION 5 — WHAT OUR CLIENTS SAY ===================== --}}
@php
    $testimonialFiles = \Illuminate\Support\Facades\File::files(public_path('assets/testimonial'));
    
    // The extracted YouTube video IDs for the testimonials
    $videoIds = [
        'dwi0vEG8x_E',
        'v7gtwhV13e0',
        'kd3RUBD4moY',
        'yllaoStcSAg',
        '8VLoUyJtX0M',
        'KH9YOKsxb_8',
        'nXpKtCLT_Ps',
        'nI0VDH11KgY',
        'q-sCHdu_90M',
    ];
    
    $testimonials = [];
    $i = 0;
    foreach ($testimonialFiles as $file) {
        if (in_array(strtolower($file->getExtension()), ['webp', 'png', 'jpg', 'jpeg'])) {
            $filename = $file->getFilename();
            
            // Get ID from list or default
            $vid = $videoIds[$i] ?? 'dQw4w9WgXcQ';
            
            $testimonials[] = [
                'image'   => '/assets/testimonial/' . $filename,
                'name'    => 'Client Review',
                'videoId' => $vid,
                'url'     => 'https://www.youtube.com/watch?v=' . $vid,
            ];
            
            $i++;
        }
    }


@endphp

{{-- ── Section ── --}}
<section class="ts-section">
      <div class="lf-glow"></div>
    <div class="ts-inner">
        {{-- Heading --}}
        <h2 class="lf-heading" style="color:var(--white);">What Our <span class="accent">Clients</span> Say</h2>
        <p class="lf-subtitle" style="margin-bottom: 48px;">Hear from e-commerce founders who transformed their online sales</p>

        {{-- 3 × 3 grid --}}
        <div class="ts-grid">
            @foreach($testimonials as $i => $t)
                <div
                    class="ts-card"
                    role="button"
                    tabindex="0"
                    aria-label="Watch testimonial: {{ $t['name'] }}"
                    data-video-id="{{ $t['videoId'] }}"
                    data-video-url="{{ $t['url'] }}"
                    data-channel-name="{{ $t['name'] }}"
                    onclick="tsOpenModal(this, event)"
                    onkeydown="if(event.key==='Enter'||event.key===' ')tsOpenModal(this, event)"
                >
                    {{-- Thumbnail --}}
                    <img
                        src="{{ $t['image'] }}"
                        alt="{{ $t['name'] }}"
                        loading="lazy"
                        decoding="async"
                        class="ts-img"
                    >

                    {{-- Play button overlay --}}
                    <div class="ts-overlay" aria-hidden="true">
                        <div class="ts-play-wrap" style="left:50%; top:50%;">
                            <div class="ts-play-btn">
                                <svg
                                    width="22"
                                    height="22"
                                    viewBox="0 0 24 24"
                                    fill="#000000"
                                    aria-hidden="true"
                                >
                                    <polygon points="6,3 20,12 6,21"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    {{-- /overlay --}}

                </div>
            @endforeach
        </div>
        {{-- /ts-grid --}}

        {{-- Testimonials CTA --}}
        <div class="lf-highlight-box" style="margin-top: 64px;">
            <p class="lf-highlight-box__quote">Join 500+ Satisfied Clients</p>
            <p class="lf-highlight-box__sub" style="color:var(--white);">Transform your e-commerce business with a high-converting store</p>
        </div>

        <div class="lf-cta-center" style="margin-top: 32px;">
            <a href="#book-consultation" class="lf-btn lf-btn--primary">Book Free Consultation</a>
        </div>
    </div>
</section>

{{-- ── Video Modal ── --}}
<div class="ts-modal" id="tsModal" aria-hidden="true">
    <div class="ts-modal-backdrop" onclick="tsCloseModal()"></div>

    <div class="ts-modal-box" role="dialog" aria-modal="true" aria-labelledby="tsModalChannel">
        <button class="ts-modal-close" type="button" aria-label="Close video" onclick="tsCloseModal()">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
                <line x1="4" y1="4" x2="20" y2="20"/>
                <line x1="20" y1="4" x2="4" y2="20"/>
            </svg>
        </button>

        <div class="ts-modal-header">
            <span class="ts-modal-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="#FF0000" aria-hidden="true">
                    <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.3 3.6-6.3 3.6Z"/>
                </svg>
                <span id="tsModalChannel">Channel Name</span>
            </span>
            <a class="ts-modal-yt-link" id="tsModalYtLink" href="#" target="_blank" rel="noopener noreferrer">
                Watch on YouTube
            </a>
        </div>

        <div class="ts-modal-player" id="tsModalPlayer">
            {{-- iframe injected here via JS --}}
        </div>
    </div>
</div>

{{-- ── Scripts ── --}}
<script>
    /* ---------- Modal open / close ---------- */
    function tsOpenModal(card, event) {
        event.preventDefault();
        event.stopPropagation();

        var videoId  = card.getAttribute('data-video-id');
        var videoUrl = card.getAttribute('data-video-url');
        var channel  = card.getAttribute('data-channel-name');

        var modal    = document.getElementById('tsModal');
        var player   = document.getElementById('tsModalPlayer');
        var ytLink   = document.getElementById('tsModalYtLink');
        var chNameEl = document.getElementById('tsModalChannel');

        chNameEl.textContent = channel;
        ytLink.setAttribute('href', videoUrl);

        if (videoId) {
            player.innerHTML =
                '<iframe ' +
                    'src="https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0&modestbranding=1" ' +
                    'title="' + channel + '" ' +
                    'frameborder="0" ' +
                    'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ' +
                    'allowfullscreen>' +
                '</iframe>';
        } else {
            // Fallback: no valid video ID found, just link out
            player.innerHTML = '<div class="ts-modal-fallback">Video unavailable. <a href="' + videoUrl + '" target="_blank" rel="noopener noreferrer">Open on YouTube</a></div>';
        }

        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function tsCloseModal() {
        var modal  = document.getElementById('tsModal');
        var player = document.getElementById('tsModalPlayer');

        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        player.innerHTML = ''; // stop playback
        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') tsCloseModal();
    });

    /* ---------- Magnetic play button ---------- */
    (function () {
        var cards = document.querySelectorAll('.ts-card');

        cards.forEach(function (card) {
            var wrap = card.querySelector('.ts-play-wrap');
            if (!wrap) return;

            var isHovering = false;
            var rafId = null;

            // Target positions (percentages)
            var targetX = 50;
            var targetY = 50;
            
            // Current positions (percentages)
            var currentX = 50;
            var currentY = 50;

            function updatePosition() {
                // Smooth interpolation (lerp)
                currentX += (targetX - currentX) * 0.15;
                currentY += (targetY - currentY) * 0.15;

                wrap.style.left = currentX + '%';
                wrap.style.top  = currentY + '%';

                if (isHovering || Math.abs(targetX - currentX) > 0.1 || Math.abs(targetY - currentY) > 0.1) {
                    rafId = requestAnimationFrame(updatePosition);
                } else {
                    rafId = null;
                }
            }

            card.addEventListener('mouseenter', function () {
                isHovering = true;
                if (!rafId) {
                    rafId = requestAnimationFrame(updatePosition);
                }
            });

            card.addEventListener('mousemove', function (e) {
                var rect = card.getBoundingClientRect();
                var x = ((e.clientX - rect.left) / rect.width) * 100;
                var y = ((e.clientY - rect.top) / rect.height) * 100;
                
                // Keep the button completely within the card bounds
                targetX = Math.max(15, Math.min(85, x));
                targetY = Math.max(15, Math.min(85, y));
            });

            card.addEventListener('mouseleave', function () {
                isHovering = false;
                targetX = 50;
                targetY = 50;
                if (!rafId) {
                    rafId = requestAnimationFrame(updatePosition);
                }
            });
        });
    })();
</script>

{{-- ===================== SECTION 6 — PROCESS ===================== --}}
<section class="lf-section lf-section--light lf-process-section">
    <div class="lf-container">
        <div class="label-row" style="justify-content:center; margin-bottom:24px;">
            <div style="display:flex; flex-direction:column; align-items:center; gap:10px;">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="section-divider" style="margin-bottom:0;"></div>
            </div>
            <div class="label-pill"><span class="label-dot"></span><span class="label-text">How We Work</span></div>
        </div>
        <h2 class="lf-heading">A Smooth, Transparent, and<br>
            <span style="color:var(--primary);">Collaborative Process</span>
        </h2>
        <p class="lf-subtitle">From start to launch</p>

        <div class="lf-process">
            <div class="lf-process__list">

                {{-- Step 1 --}}
                <div class="lf-step lf-step--1">
                    <div class="lf-step__icon">
                        {{-- Video / Zoom icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z"/>
                        </svg>
                    </div>
                    <div class="lf-step__card">
                        <div class="lf-step__num">1</div>
                        <div class="lf-step__body">
                            <div class="lf-step__title">Book a Free 30-Minute Strategy Call</div>
                            <div class="lf-step__desc">Tell us about your products, target audience, and e-commerce goals.</div>
                        </div>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="lf-step lf-step--2">
                    <div class="lf-step__icon">
                        {{-- Document / clipboard icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                             fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 1.5L18.5 9H13V3.5zM6 20V4h5v7h7v9H6z"/>
                        </svg>
                    </div>
                    <div class="lf-step__card">
                        <div class="lf-step__num">2</div>
                        <div class="lf-step__body">
                            <div class="lf-step__title">Final Quote &amp; Timeline</div>
                            <div class="lf-step__desc">We offer flexible payments so you can start the project with just 5% upfront.</div>
                        </div>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="lf-step lf-step--3">
                    <div class="lf-step__icon">
                        {{-- Rocket icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                             fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.5 2 5.5 4.5 4 7c-2 3.5-2 7.5 0 11l1.4-1.4C3.9 14.2 4 11.1 5.5 8.5 6.8 6.3 9.2 4 12 4s5.2 2.3 6.5 4.5c1.5 2.6 1.6 5.7.1 8.1L20 18c2-3.5 2-7.5 0-11-1.5-2.5-4.5-5-8-5zm0 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm-1 9.9V22h2v-6.1A6.02 6.02 0 0 1 12 16a5.97 5.97 0 0 1-1-.1z"/>
                        </svg>
                    </div>
                    <div class="lf-step__card">
                        <div class="lf-step__num">3</div>
                        <div class="lf-step__body">
                            <div class="lf-step__title">Complete Website Delivered</div>
                            <div class="lf-step__desc">We build and launch your custom high-converting online store.</div>
                        </div>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="lf-step lf-step--4">
                    <div class="lf-step__icon">
                        {{-- Headphone icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                             fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a9 9 0 0 0-9 9v5a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H4v-1a8 8 0 0 1 16 0v1h-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1a3 3 0 0 0 3-3v-5a9 9 0 0 0-9-9z"/>
                        </svg>
                    </div>
                    <div class="lf-step__card">
                        <div class="lf-step__num">4</div>
                        <div class="lf-step__body">
                            <div class="lf-step__title">30 Days of Free Priority Support</div>
                            <div class="lf-step__desc">Any issues? We fix them immediately, at no cost.</div>
                        </div>
                    </div>
                </div>

            </div>{{-- /.lf-process__list --}}

            <div class="lf-process__cta">
                <a href="#book-consultation" class="lf-btn lf-btn--primary">
                    Start Your Project with 5% Upfront →
                </a>
            </div>
            <p class="lf-process__note">No hidden fees. Transparent pricing. Flexible payment options.</p>
        </div>
    </div>
</section>

{{-- ===================== SECTION 7 — BOOK A FREE CONSULTATION ===================== --}}
<section class="lf-section lf-section--dark" id="book-consultation">
    <div class="lf-glow"></div>
    <div class="lf-container">
        <h2 class="lf-heading" style="color:var(--white);">Book a Free <span class="accent">Consultation</span></h2>
        <p class="lf-subtitle">Let's discuss how we can transform your online store into a high-converting sales machine.</p>

        <div class="lf-book-grid">
            {{-- Left column --}}
            <div class="lf-book-left">
                {{-- Block 1: Main Expectations Card --}}
                <div class="lf-book-card">
                    <h3 class="lf-book-card__heading">What to Expect in Your Free Consultation:</h3>
                    <ul class="lf-book-list">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            In-depth analysis of your current website
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Custom strategy for your e-commerce brand
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Live demo of our exclusive features
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Transparent pricing and timeline discussion
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Answers to all your questions
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Solution to all your technical issues
                        </li>
                    </ul>
                </div>

                {{-- Block 2: 3 Icon Cards --}}
                <div class="lf-book-icons">
                    <div class="lf-icon-card">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:12px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <div class="lf-icon-card__title">30 Minutes</div>
                        <div class="lf-icon-card__sub">Quick &amp; Focused</div>
                    </div>
                    <div class="lf-icon-card">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:12px;"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                        <div class="lf-icon-card__title">Video Call</div>
                        <div class="lf-icon-card__sub">Via Zoom</div>
                    </div>
                    <div class="lf-icon-card">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:12px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <div class="lf-icon-card__title">Flexible</div>
                        <div class="lf-icon-card__sub">Your Schedule</div>
                    </div>
                </div>

                {{-- Block 3: Highlight Card --}}
                <div class="lf-book-highlight">
                    <h4 class="lf-book-highlight__heading">Limited Availability - Book Now!</h4>
                    <p class="lf-book-highlight__sub">We only take on 5 new projects per month to ensure exceptional quality and support.</p>
                </div>
            </div>

            {{-- Right column — Calendly widget in white card --}}
            <div class="lf-book-right">
                <div class="lf-white-card">
                    <div class="lf-white-card__header">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:16px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <h3 class="lf-calendar__heading" style="color:#111; margin-bottom:8px;">Schedule Your Free Call</h3>
                        <p class="lf-calendar__sub" style="color:#666; margin-bottom:24px;">Pick a time that works best for you</p>
                    </div>
                    
                    <div class="dev-staff-card bc-widget-col" style="padding:10px;cursor:default">
                        <!-- Calendly inline widget begin -->
                        <div class="calendly-inline-widget" data-url="https://calendly.com/mshayantariq/schedule-a-meeting?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:280px;height:550px;width:100%"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                        <!-- Calendly inline widget end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== SECTION 8 — OUR CASE STUDIES ===================== --}}
<section class="lf-section lf-section--light">
    <div class="lf-container" style="max-width: 1600px; width: 95%;">
        <div class="label-row" style="justify-content:center; margin-bottom:24px;">
            <div style="display:flex; flex-direction:column; align-items:center; gap:10px;">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="section-divider" style="margin-bottom:0;"></div>
            </div>
            <div class="label-pill"><span class="label-dot"></span><span class="label-text">Our Work</span></div>
        </div>
        <h2 class="lf-heading">Our <span style="color:var(--text-dark);">Case</span> <span style="color:var(--primary);">Studies</span></h2>
        <p class="lf-subtitle">Real projects, real results. See the quality of work we deliver.</p>

        <div class="lf-case-grid custom-case-grid">
            @php
                $caseStudies = [
                    ['tag' => 'E-commerce', 'title' => 'Oleeca', 'desc' => 'Redesigned the storefront to improve mobile conversions by 45% and reduced cart abandonment.', 'img' => '/assets/industry/ecom/ecom1.webp', 'link' => 'https://oleeca.corammerswork.com/'],
                    ['tag' => 'Online Store', 'title' => 'Zoopi', 'desc' => 'Integrated AI product recommendations, increasing average order value by over 30%.', 'img' => '/assets/industry/ecom/ecom2.webp', 'link' => 'https://zoopiwatch.com/'],
                    ['tag' => 'DTC Brand', 'title' => 'Poker', 'desc' => 'Built a high-performance checkout flow and subscription model for recurring revenue.', 'img' => '/assets/industry/ecom/ecom3.webp', 'link' => 'https://www.pokerrrrapp.com/'],
                    ['tag' => 'Retail', 'title' => 'Shimmer', 'desc' => 'Delivered a lightning-fast visual catalog with seamless inventory and shipping integration.', 'img' => '/assets/industry/ecom/ecom4.webp', 'link' => 'https://kitpro.site/shimmer/?storefront=envato-elementsTB_iframe%3Dtrue&width=600&height=550'],
                ];
            @endphp

            @foreach ($caseStudies as $case)
                <a href="{{ $case['link'] }}" target="_blank" rel="noopener noreferrer" class="lf-case-card-new">
                    <div class="lf-case-card-new__img" style="background-image:url('{{ $case['img'] }}');">
                        <span class="lf-case-card__tag">{{ $case['tag'] }}</span>
                    </div>
                    <div class="lf-case-card-new__body">
                        <div class="lf-case-card-new__title">{{ $case['title'] }}</div>
                        <p class="lf-case-card-new__desc">{{ $case['desc'] }}</p>
                        <span class="lf-case-card-new__link">View Project
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>


</div>{{-- .pw-law --}}
@endsection

@push('scripts')
<style>
/* === Consultation Section Mobile Fixes === */
#book-consultation {
    overflow-x: hidden !important;
    width: 100% !important;
    max-width: 100vw !important;
    box-sizing: border-box;
}



@media (max-width: 992px) {
    #book-consultation {
        padding-top: 80px !important; /* Space for floating menu */
        padding-bottom: 48px !important;
    }

    #book-consultation .lf-container {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .lf-book-grid {
        display: flex !important;
        flex-direction: column !important;
        gap: 40px !important;
    }

    .lf-book-left, .lf-book-right {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        box-sizing: border-box !important;
    }

    .lf-book-right .calendly-inline-widget {
        min-width: 100% !important;
    }
}

/* === New Case Studies Horizontal Cards === */
.custom-case-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 32px;
    margin-top: 48px;
}

.lf-case-card-new {
    display: flex;
    flex-direction: row;
    background-color: #0d0d0d;
    border-radius: 16px;
    overflow: hidden;
    text-decoration: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid rgba(255,255,255,0.08);
}

.lf-case-card-new:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

.lf-case-card-new__img {
    width: 45%;
    position: relative;
    background-size: cover;
    background-position: center;
    min-height: 200px;
}

.lf-case-card-new__img::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.2);
}

.lf-case-card-new__body {
    width: 55%;
    padding: 24px 32px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.lf-case-card-new__title {
    color: #ffffff;
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 12px;
}

.lf-case-card-new__desc {
    color: #a0a0a0;
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 24px;
}

.lf-case-card-new__link {
    color: #ffffff;
    font-size: 0.9rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: auto;
    transition: opacity 0.3s ease;
}

.lf-case-card-new:hover .lf-case-card-new__link {
    opacity: 0.8;
}

@media (max-width: 992px) {
    .custom-case-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 600px) {
    .lf-case-card-new__img {
        width: 40%;
        min-height: 180px;
    }
    .lf-case-card-new__body {
        width: 60%;
        padding: 20px 16px;
    }
    .lf-case-card-new__title {
        font-size: 1.1rem;
        margin-bottom: 8px;
    }
    .lf-case-card-new__desc {
        font-size: 0.85rem;
        margin-bottom: 16px;
    }
}
</style>
<script>
// Counter animation for stats
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('[data-target]');
    
    counters.forEach(counter => {
        const target = parseInt(counter.dataset.target);
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current) + '+';
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + '+';
            }
        };
        
        
        updateCounter();
    });

    // Deliver Carousel step-by-step animation
    const deliverTrack = document.querySelector('.lf-deliver-track');
    const deliverDots = document.querySelectorAll('.lf-carousel-dots .lf-dot-item');
    
    if (deliverTrack && deliverDots.length > 0) {
        let currentDotIndex = 0;
        
        setInterval(() => {
            // Update active dot
            currentDotIndex = (currentDotIndex + 1) % deliverDots.length;
            deliverDots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentDotIndex);
            });

            // Calculate shift distance dynamically (1 card width + gap)
            const firstCard = deliverTrack.firstElementChild;
            if (!firstCard) return;
            
            // Getting computed style for exact gap if needed, or simply let CSS variables handle the exact transform
            // We can do this cleanly in CSS using the variables!
            deliverTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 1, 0.5, 1)';
            deliverTrack.style.transform = `translateX(calc(var(--base-offset) - var(--card-width) - var(--card-gap)))`;

            // After transition, append first card to end and reset transform back to base
            setTimeout(() => {
                deliverTrack.style.transition = 'none';
                deliverTrack.style.transform = `translateX(var(--base-offset))`;
                deliverTrack.appendChild(deliverTrack.firstElementChild);
            }, 600);
            
        }, 4000); // 4 seconds per slide
    }
});
</script>
@endpush