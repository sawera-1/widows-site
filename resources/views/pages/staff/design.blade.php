@extends('layouts.app')

@section('title', 'Hire Creative Designers — CodeOaks')
@section('meta_description', 'Hire dedicated UI/UX designers, graphic designers and video editors. High-quality visuals and experiences that elevate your brand and drive conversions.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/staff-design.css') }}">
@endpush

@section('content')
<div class="pw-staff-design sd-wrapper">

    {{-- ══════════ HERO BANNER ══════════ --}}
    <section class="sd-hero">
        <div class="sd-hero-bg loaded"></div>
        <div class="sd-hero-overlay"></div>
        <div class="sd-hero-fade"></div>

        <div class="sd-hero-content">
            <div>
                <div class="section-label-row">
                    <div class="section-robot-badge"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block"></div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">Staff Augmentation · Design</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <h1 class="sd-hero-heading">
                    Hire Creative Designers
                    <span class="sd-hero-accent">That Elevate Your Brand</span>
                </h1>
                <p class="sd-hero-sub">
                    Our designers craft high-quality visuals and experiences from UI/UX to graphics
                    and video helping your brand stand out and convert.
                </p>
                @php
                    $heroPoints = [
                        ['label' => 'UI/UX Design', 'icon' => '<svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="1" y="3" width="14" height="10" rx="2" stroke="currentColor" stroke-width="1.5" /><path d="M5 6h6M5 9h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg>'],
                        ['label' => 'Graphic Design', 'icon' => '<svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5" /><path d="M5.5 10.5l2-5 2 5M6.5 9h3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg>'],
                        ['label' => 'Video Editing', 'icon' => '<svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="1" y="3" width="10" height="10" rx="2" stroke="currentColor" stroke-width="1.5" /><path d="M11 6l4-2v8l-4-2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>'],
                        ['label' => 'Brand Identity', 'icon' => '<svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M8 2l1.8 3.6L14 6.6l-3 2.9.7 4.1L8 11.5l-3.7 2.1.7-4.1L2 6.6l4.2-.9z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" /></svg>'],
                    ];
                @endphp
                <div class="sd-hero-points">
                    @foreach ($heroPoints as $pt)
                        <div class="sd-hero-point">
                            <span class="sd-hero-point-icon">{!! $pt['icon'] !!}</span>
                            {{ $pt['label'] }}
                        </div>
                    @endforeach
                </div>
                <div class="sd-hero-ctas">
                    <a href="/contact" class="sd-btn-primary">Hire Designers</a>
                </div>
            </div>
            <div class="sd-hero-right">
                @php
                    $stats = [
                        ['label' => 'Creative Designers', 'value' => '25', 'suffix' => '+', 'sub' => 'UI, Graphics & Video'],
                        ['label' => 'Brands Elevated', 'value' => '120', 'suffix' => '+', 'sub' => 'Visually stunning results'],
                        ['label' => 'Time to Onboard', 'value' => '48', 'suffix' => 'h', 'sub' => 'Fast team integration'],
                    ];
                @endphp
                @foreach ($stats as $s)
                    <div class="sd-stat-card">
                        <div class="sd-stat-label">{{ $s['label'] }}</div>
                        <div class="sd-stat-value"><em>{{ $s['value'] }}</em>{{ $s['suffix'] }}</div>
                        <div class="sd-stat-sub">{{ $s['sub'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════ STAFF SERVICES ══════════ --}}
    <section class="sd-services" id="services">
        <div class="sd-services-inner">
            <div class="sd-reveal" style="margin-bottom:40px">
                <div class="section-label-row">
                    <div class="section-robot-badge"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block"></div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">Dedicated Talent</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <h2 class="sec-heading">
                    Staff <span class="accent">Services</span>
                </h2>
                <p class="sec-subtext">
                    Hire dedicated developers with zero overhead. Scale your team instantly
                    no contracts, no HR hassles, no long onboarding cycles.
                </p>
            </div>

            @php
                $staffRoles = [
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="var(--primary)" stroke-width="1.5" /><circle cx="12" cy="12" r="4" stroke="var(--primary)" stroke-width="1.5" stroke-dasharray="2.2 1.8" /><path d="M12 2v3M12 19v3M2 12h3M19 12h3" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" /></svg>',
                        'title' => 'UI/UX Designer',
                        'desc' => 'Build a powerful visual identity with expert designers focused on creativity, consistency, and conversion.',
                        'num' => '01',
                        'points' => ['Figma & Prototyping Expertise', 'Responsive Web Design', 'User Flow Optimization'],
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2L22 7.5V17.5L12 23L2 17.5V7.5L12 2Z" stroke="var(--primary)" stroke-width="1.5" /><circle cx="12" cy="12.5" r="2.5" fill="var(--primary)" opacity="0.85" /></svg>',
                        'title' => 'Graphic Designer',
                        'desc' => 'Build a powerful visual identity with expert designers focused on creativity, consistency, and conversion.',
                        'num' => '02',
                        'points' => ['Brand Identity & Logos', 'Marketing Collateral Design', 'Social Media Creatives'],
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><rect x="6" y="2" width="12" height="20" rx="2.5" stroke="var(--primary)" stroke-width="1.5" /><path d="M10 18h4" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" /><path d="M9 8l2 2-2 2M13 10h2" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                        'title' => 'Video Editor',
                        'desc' => 'Build a powerful visual identity with expert designers focused on creativity, consistency, and conversion.',
                        'num' => '03',
                        'points' => ['Premiere Pro & After Effects', 'Short-Form Content (Reels)', 'Ad Creative Production'],
                    ],
                ];
            @endphp
            <div class="sd-svc-grid">
                @foreach ($staffRoles as $item)
                    <div class="sd-exp-card sd-card-visible">
                        <div class="sd-card-bar"></div>
                        <div class="sd-card-body">
                            <div class="sd-card-top">
                                <div class="sd-card-icon-box">{!! $item['icon'] !!}</div>
                                <span class="sd-card-index">{{ $item['num'] }}</span>
                            </div>
                            <h3 class="sd-card-title">{{ $item['title'] }}</h3>
                            <p class="sd-card-desc">{{ $item['desc'] }}</p>
                            <ul class="sd-card-points">
                                @foreach ($item['points'] as $pt)
                                    <li class="sd-card-point">
                                        <div class="sd-card-check">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12" />
                                            </svg>
                                        </div>
                                        {{ $pt }}
                                    </li>
                                @endforeach
                            </ul>
                            <a href="/contact" class="sd-svc-hire-btn">
                                Hire Now
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════ STAFF PRICING ══════════ --}}
    <section class="sd-pricing" id="pricing">
        <div class="sd-pricing-inner">
            <div class="sd-reveal" style="margin-bottom:40px">
                <div class="section-label-row">
                    <div class="section-robot-badge"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block"></div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">Transparent Rates</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <h2 class="sec-heading">
                    Staff <span class="accent">Pricing</span>
                </h2>
                <p class="sec-subtext">
                    Simple, flat-rate monthly pricing. No hidden fees, no surprise invoices
                    just world-class talent billed cleanly every month.
                </p>
            </div>

            @php
                $pricingData = [
                    ['role' => 'UI/UX Designer', 'fullTime' => '$750', 'partTime' => '$400', 'featured' => true],
                    ['role' => 'Graphic Designer', 'fullTime' => '$600', 'partTime' => '$320', 'featured' => false],
                    ['role' => 'Video Editor', 'fullTime' => '$600', 'partTime' => '$320', 'featured' => false],
                ];
            @endphp
            <div class="sd-price-grid">
                @foreach ($pricingData as $item)
                    <div class="sd-price-card sd-card-visible @if ($item['featured']) featured @endif">
                        @if ($item['featured'])
                            <div class="sd-price-featured-ribbon">Most Popular</div>
                        @endif
                        <div class="sd-price-bar"></div>
                        <div class="sd-price-body">
                            <div class="sd-price-header">
                                <span class="sd-price-role">{{ $item['role'] }}</span>
                                <span class="sd-price-badge">Monthly</span>
                            </div>

                            <div class="sd-price-divider"></div>

                            <div class="sd-price-tiers">
                                <div class="sd-price-tier fulltime">
                                    <div class="sd-tier-left">
                                        <span class="sd-tier-name">Full Time</span>
                                        <span class="sd-tier-hours">8 hrs / day</span>
                                    </div>
                                    <div class="sd-tier-price">
                                        {{ $item['fullTime'] }}<span>/mo</span>
                                    </div>
                                </div>
                                <div class="sd-price-tier">
                                    <div class="sd-tier-left">
                                        <span class="sd-tier-name">Part Time</span>
                                        <span class="sd-tier-hours">4 hrs / day</span>
                                    </div>
                                    <div class="sd-tier-price">
                                        {{ $item['partTime'] }}<span>/mo</span>
                                    </div>
                                </div>
                            </div>

                            <a href="/contact" class="sd-price-cta">
                                Contact Us
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════ THE TEAM ══════════ --}}
    <section class="sd-team">
        <div class="sd-team-inner">
            <div style="margin-bottom:40px">
                <div class="section-label-row">
                    <div class="section-robot-badge"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block"></div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">Our Experts</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <h2 class="sec-heading">
                    Meet Our <span class="accent">Experts</span>
                </h2>
                <p class="sec-subtext">Hand-picked professionals with years of industry experience.</p>
            </div>

            @php
                $employees = [
                    ['id' => 1, 'name' => 'Fiza Tariq', 'role' => 'UI/UX Designer', 'img' => '/assets/1.webp'],
                    ['id' => 2, 'name' => 'Muhammad Junaid', 'role' => 'Social Media Manager', 'img' => '/assets/2.webp'],
                    ['id' => 3, 'name' => 'Zafar', 'role' => 'Web Developer', 'img' => '/assets/3.webp'],
                    ['id' => 4, 'name' => 'Shayan Tariq', 'role' => 'Web Developer', 'img' => '/assets/4.webp'],
                    ['id' => 5, 'name' => 'Huzaifa', 'role' => 'Graphic Designer', 'img' => '/assets/5.webp'],
                    ['id' => 6, 'name' => 'Alia', 'role' => 'Marketing Specialist', 'img' => '/assets/6.webp'],
                    ['id' => 7, 'name' => 'Zain', 'role' => 'WordPress Developer', 'img' => '/assets/7.webp'],
                    ['id' => 8, 'name' => 'Maryam', 'role' => 'Web Developer', 'img' => '/assets/8.webp'],
                ];
            @endphp
            <div class="team-grid">
                @foreach ($employees as $i => $emp)
                    <div class="emp-card js-emp-card @if ($i >= 4) is-hidden @endif" style="animation-delay:{{ ($i % 4) * 0.09 }}s">
                        <div class="emp-img-wrap">
                            <img src="{{ $emp['img'] }}" alt="{{ $emp['name'] }}" loading="lazy">
                            <div class="pw-emp-scrim" style="position:absolute;inset:0;background:transparent;transition:background 0.4s ease"></div>
                        </div>
                        <div class="emp-info">
                            <div class="emp-name-row">
                                <span class="emp-name">{{ $emp['name'] }}</span>
                                <span style="display:flex;align-items:center;gap:5px;font-size:10px;font-weight:600;color:var(--primary);font-family:'Montserrat', sans-serif">
                                    <span style="width:6px;height:6px;border-radius:50%;background:var(--primary);box-shadow:0 0 6px var(--primary);display:inline-block"></span>
                                    Available
                                </span>
                            </div>
                            <span class="emp-role">{{ $emp['role'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="load-more-wrap js-load-more-wrap">
                <button type="button" class="js-load-more" style="position:relative;width:205px;height:52px;border-radius:16px;overflow:hidden;cursor:pointer;flex-shrink:0;border:none;padding:0;background:var(--primary)">
                    <span style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;gap:11px">
                        <span class="pw-load-more-label" style="font-family:'Montserrat', sans-serif;font-size:0.9rem;font-weight:700;color:#111;letter-spacing:0.02em;white-space:nowrap">Load More</span>
                        <span style="position:relative;width:11px;height:11px;display:inline-block;flex-shrink:0;margin-left:2px">
                            <span class="pw-lm-dot" style="position:absolute;top:0;left:0;width:4px;height:4px;border-radius:50%"></span>
                            <span class="pw-lm-dot" style="position:absolute;top:50%;right:0;transform:translateY(-50%);width:4px;height:4px;border-radius:50%"></span>
                            <span class="pw-lm-dot" style="position:absolute;bottom:0;left:0;width:4px;height:4px;border-radius:50%"></span>
                        </span>
                    </span>
                </button>
            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
<script>
    (function () {
        var root = document.querySelector('.pw-staff-design');
        if (!root) return;

        /* Reveal-on-scroll for .sd-reveal blocks */
        var reveals = root.querySelectorAll('.sd-reveal');
        if ('IntersectionObserver' in window) {
            var obs = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) {
                        e.target.classList.add('sd-visible');
                        obs.unobserve(e.target);
                    }
                });
            }, { threshold: 0.1 });
            reveals.forEach(function (el) { obs.observe(el); });
        } else {
            reveals.forEach(function (el) { el.classList.add('sd-visible'); });
        }

        /* Load More — reveal 4 more employees at a time */
        var wrap = root.querySelector('.js-load-more-wrap');
        var btn = root.querySelector('.js-load-more');
        var hidden = Array.prototype.slice.call(root.querySelectorAll('.js-emp-card.is-hidden'));
        if (hidden.length === 0 && wrap) { wrap.style.display = 'none'; }
        if (btn) {
            btn.addEventListener('click', function () {
                hidden.splice(0, 4).forEach(function (card) { card.classList.remove('is-hidden'); });
                hidden = Array.prototype.slice.call(root.querySelectorAll('.js-emp-card.is-hidden'));
                if (hidden.length === 0 && wrap) { wrap.style.display = 'none'; }
            });
        }
    })();
</script>
@endpush
