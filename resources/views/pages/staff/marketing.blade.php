@extends('layouts.app')

@section('title', 'Hire Digital Marketing Experts — Corammers')
@section('meta_description', 'Hire digital marketing specialists from Corammers — SEO, paid media and growth strategy that deliver measurable results.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/staff-marketing.css') }}">
@endpush

@section('content')
<div class="pw-staff-marketing sd-wrapper">

    {{-- ══════════ HERO BANNER ══════════ --}}
    <section class="sd-hero" style="--primary:#D81D1F;--primary-rgb:188, 234, 62">
        <div class="sd-hero-bg loaded"></div>
        <div class="sd-hero-overlay"></div>
        <div class="sd-hero-fade"></div>

        <div class="sd-hero-content">
            <div>
                <div style="display:flex;align-items:flex-start;gap:10px;margin-bottom:14px">
                    <div style="display:flex;flex-direction:column;align-items:center">
                        <div style="display:flex;align-items:center;justify-content:center;width:48px;height:48px;border-radius:14px;flex-shrink:0;border:1.5px solid rgba(216,29,31,0.4);background:rgba(216,29,31,0.1);animation:float-robot 3s ease-in-out infinite;box-shadow:0 8px 20px rgba(216,29,31,0.15)">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block">
                        </div>
                        <div style="width:54px;height:4px;background:linear-gradient(90deg, #D81D1F, transparent);border-radius:2px;margin-top:8px"></div>
                    </div>
                    <div style="display:inline-flex;align-items:center;gap:8px;padding:6px 16px 6px 8px;border-radius:100px;margin-top:6px;border:1.5px solid rgba(216,29,31,0.3);background:rgba(216,29,31,0.08)">
                        <span style="width:8px;height:8px;border-radius:50%;background:#D81D1F;box-shadow:0 0 10px #D81D1F;animation:pulse-dot 2s ease-in-out infinite"></span>
                        <span style="font-family:'Montserrat', sans-serif;font-size:0.85rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;color:#ffffff">Staff Augmentation · Marketing</span>
                    </div>
                </div>
                <h1 class="sd-hero-heading">
                    Hire Marketing Associates
                    <span class="sd-hero-accent">to Scale Your Growth</span>
                </h1>
                <p class="sd-hero-sub">
                    Marketing Associates execute, manage, and optimize your campaigns — from social media
                    to CRM automation — ensuring consistent performance and growth.
                </p>
                <div class="sd-hero-points">
                    <div class="sd-hero-point">
                        <span class="sd-hero-point-icon">
                            <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
                                <circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5" />
                                <path d="M5 8c0-1.66 1.34-3 3-3s3 1.34 3 3-1.34 3-3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <circle cx="8" cy="8" r="1" fill="currentColor" />
                            </svg>
                        </span>
                        Social Media Management
                    </div>
                    <div class="sd-hero-point">
                        <span class="sd-hero-point-icon">
                            <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
                                <rect x="1" y="3" width="14" height="10" rx="2" stroke="currentColor" stroke-width="1.5" />
                                <path d="M1 6l7 4 7-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </span>
                        Email Marketing
                    </div>
                    <div class="sd-hero-point">
                        <span class="sd-hero-point-icon">
                            <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
                                <rect x="2" y="4" width="12" height="8" rx="2" stroke="currentColor" stroke-width="1.5" />
                                <path d="M5 8h6M5 10h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </span>
                        CRM Automation
                    </div>
                    <div class="sd-hero-point">
                        <span class="sd-hero-point-icon">
                            <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
                                <path d="M2 12l4-4 3 3 5-7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        Performance Marketing
                    </div>
                </div>
                <div class="sd-hero-ctas">
                    <a href="/contact" class="sd-btn-primary">Hire Associates</a>
                </div>
            </div>
            <div class="sd-hero-right">
                <div class="sd-stat-card">
                    <div class="sd-stat-label">Marketing Experts</div>
                    <div class="sd-stat-value"><em>30</em>+</div>
                    <div class="sd-stat-sub">Across all channels</div>
                </div>
                <div class="sd-stat-card">
                    <div class="sd-stat-label">Campaigns Managed</div>
                    <div class="sd-stat-value"><em>150</em>+</div>
                    <div class="sd-stat-sub">On time, every time</div>
                </div>
                <div class="sd-stat-card">
                    <div class="sd-stat-label">Time to Onboard</div>
                    <div class="sd-stat-value"><em>48</em>h</div>
                    <div class="sd-stat-sub">Fast team integration</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════ STAFF SERVICES ══════════ --}}
    <section class="sd-services" id="services">
        <div class="sd-services-inner">
            <div class="sd-reveal" style="margin-bottom:40px">
                <div style="display:flex;align-items:flex-start;gap:10px;margin-bottom:14px">
                    <div style="display:flex;flex-direction:column;align-items:center">
                        <div class="pw-robot-badge" style="display:flex;align-items:center;justify-content:center;width:48px;height:48px;border-radius:14px;flex-shrink:0;border:1.5px solid rgba(var(--primary-rgb),0.4);background:rgba(var(--primary-rgb),0.1);animation:float-robot 3s ease-in-out infinite;box-shadow:0 8px 20px rgba(var(--primary-rgb),0.15)">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robot-light" style="width:32px;height:32px;object-fit:contain">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robot-dark" style="width:32px;height:32px;object-fit:contain">
                        </div>
                        <div class="pw-robot-line" style="width:54px;height:4px;border-radius:2px;margin-top:8px"></div>
                    </div>
                    <div class="pw-label-pill" style="display:inline-flex;align-items:center;gap:8px;padding:6px 16px 6px 8px;border-radius:100px;margin-top:6px;border:1.5px solid rgba(var(--primary-rgb),0.35);background:rgba(var(--primary-rgb),0.07)">
                        <span style="width:8px;height:8px;border-radius:50%;background:var(--primary);box-shadow:0 0 10px var(--primary);animation:pulse-dot 2s ease-in-out infinite"></span>
                        <span class="pw-label-text" style="font-family:'Montserrat', sans-serif;font-size:0.85rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase">Dedicated Talent</span>
                    </div>
                </div>
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
                        'title' => 'Social Media Manager',
                        'desc' => 'Get reliable marketing execution with professionals who handle content, automation, and performance — so you can focus on growth.',
                        'num' => '01',
                        'points' => ['Content Calendars & Scheduling', 'Audience Growth Strategy', 'Platform Analytics & Insights'],
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2L22 7.5V17.5L12 23L2 17.5V7.5L12 2Z" stroke="var(--primary)" stroke-width="1.5" /><circle cx="12" cy="12.5" r="2.5" fill="var(--primary)" opacity="0.85" /></svg>',
                        'title' => 'Email Marketing Specialist',
                        'desc' => 'Get reliable marketing execution with professionals who handle content, automation, and performance — so you can focus on growth.',
                        'num' => '02',
                        'points' => ['Email Campaign Management', 'Drip Sequence Automation', 'Open & Click Rate Optimization'],
                    ],
                    [
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><rect x="3" y="6" width="18" height="12" rx="3" stroke="var(--primary)" stroke-width="1.5" /><circle cx="8" cy="12" r="1.5" fill="var(--primary)" /><circle cx="12" cy="12" r="1.5" fill="var(--primary)" /><circle cx="16" cy="12" r="1.5" fill="var(--primary)" /><path d="M8 6V3M12 6V3M16 6V3M8 18v3M12 18v3M16 18v3" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" /></svg>',
                        'title' => 'CRM Automation & AI Expert',
                        'desc' => 'Get reliable marketing execution with professionals who handle content, automation, and performance — so you can focus on growth.',
                        'num' => '03',
                        'points' => ['CRM Workflow Automation', 'AI-Powered Lead Scoring', 'HubSpot / Zoho / Salesforce'],
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
                <div style="display:flex;align-items:flex-start;gap:10px;margin-bottom:14px">
                    <div style="display:flex;flex-direction:column;align-items:center">
                        <div class="pw-robot-badge" style="display:flex;align-items:center;justify-content:center;width:48px;height:48px;border-radius:14px;flex-shrink:0;border:1.5px solid rgba(var(--primary-rgb),0.4);background:rgba(var(--primary-rgb),0.1);animation:float-robot 3s ease-in-out infinite;box-shadow:0 8px 20px rgba(var(--primary-rgb),0.15)">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robot-light" style="width:32px;height:32px;object-fit:contain">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robot-dark" style="width:32px;height:32px;object-fit:contain">
                        </div>
                        <div class="pw-robot-line" style="width:54px;height:4px;border-radius:2px;margin-top:8px"></div>
                    </div>
                    <div class="pw-label-pill" style="display:inline-flex;align-items:center;gap:8px;padding:6px 16px 6px 8px;border-radius:100px;margin-top:6px;border:1.5px solid rgba(var(--primary-rgb),0.35);background:rgba(var(--primary-rgb),0.07)">
                        <span style="width:8px;height:8px;border-radius:50%;background:var(--primary);box-shadow:0 0 10px var(--primary);animation:pulse-dot 2s ease-in-out infinite"></span>
                        <span class="pw-label-text" style="font-family:'Montserrat', sans-serif;font-size:0.85rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase">Transparent Rates</span>
                    </div>
                </div>
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
                    ['role' => 'Social Media Manager', 'fullTime' => '$500', 'partTime' => '$280', 'featured' => false],
                    ['role' => 'Email Marketing Specialist', 'fullTime' => '$500', 'partTime' => '$280', 'featured' => false],
                    ['role' => 'CRM Automation & AI Expert', 'fullTime' => '$700', 'partTime' => '$380', 'featured' => true],
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

                            <a href="#" class="sd-price-cta">
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
                <div style="display:flex;align-items:flex-start;gap:10px;margin-bottom:14px">
                    <div style="display:flex;flex-direction:column;align-items:center">
                        <div class="pw-robot-badge" style="display:flex;align-items:center;justify-content:center;width:48px;height:48px;border-radius:14px;flex-shrink:0;border:1.5px solid rgba(var(--primary-rgb),0.4);background:rgba(var(--primary-rgb),0.1);animation:float-robot 3s ease-in-out infinite;box-shadow:0 8px 20px rgba(var(--primary-rgb),0.15)">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robot-light" style="width:32px;height:32px;object-fit:contain">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robot-dark" style="width:32px;height:32px;object-fit:contain">
                        </div>
                        <div class="pw-robot-line" style="width:54px;height:4px;border-radius:2px;margin-top:8px"></div>
                    </div>
                    <div class="pw-label-pill" style="display:inline-flex;align-items:center;gap:8px;padding:6px 16px 6px 8px;border-radius:100px;margin-top:6px;border:1.5px solid rgba(var(--primary-rgb),0.35);background:rgba(var(--primary-rgb),0.07)">
                        <span style="width:8px;height:8px;border-radius:50%;background:var(--primary);box-shadow:0 0 10px var(--primary);animation:pulse-dot 2s ease-in-out infinite"></span>
                        <span class="pw-label-text" style="font-family:'Montserrat', sans-serif;font-size:0.85rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase">Our Experts</span>
                    </div>
                </div>
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
                    <div class="emp-card js-emp-card" @if ($i >= 4) data-hidden="1" style="animation-delay:{{ ($i % 4) * 0.09 }}s;display:none" @else style="animation-delay:{{ ($i % 4) * 0.09 }}s" @endif>
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
                <button type="button" class="sd-split-btn" id="marketingLoadMore">
                    <span class="sd-split-btn-default">
                        <span class="sd-split-btn-label">Load More</span>
                        <span style="position:relative;display:inline-flex;align-items:center;justify-content:center;width:14px;height:14px">
                            <span class="sd-dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                            <svg class="sd-split-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-dasharray="20 12" /></svg>
                        </span>
                    </span>
                    <span class="sd-split-btn-row">
                        <span class="sd-split-btn-icon">
                            <span style="position:relative;display:inline-flex;align-items:center;justify-content:center;width:14px;height:14px">
                                <span class="sd-dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                                <svg class="sd-split-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-dasharray="20 12" /></svg>
                            </span>
                        </span>
                        <span class="sd-split-btn-text">Load More</span>
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
        var root = document.querySelector('.pw-staff-marketing');
        if (!root) return;

        /* Reveal-on-scroll for .sd-reveal blocks (visible by default; adds sd-visible) */
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

        /* Load More — reveal PAGE employees at a time, with spinner + stagger reveal */
        var PAGE = 4;
        var wrap = root.querySelector('.js-load-more-wrap');
        var btn = root.querySelector('#marketingLoadMore');
        function hiddenCards() {
            return Array.prototype.slice.call(root.querySelectorAll('.js-emp-card[data-hidden="1"]'));
        }
        var hiddenList = hiddenCards();
        if (hiddenList.length === 0 && wrap) { wrap.style.display = 'none'; }

        var loading = false;
        function loadMore() {
            if (loading) return;
            loading = true;
            if (btn) btn.classList.add('is-loading');
            var labels = btn ? btn.querySelectorAll('.sd-split-btn-label, .sd-split-btn-text') : [];
            var oldText = labels.length ? labels[0].innerText : '';
            labels.forEach(function(l) { l.innerText = 'Loading...'; });

            setTimeout(function () {
                var batch = hiddenList.splice(0, PAGE);
                batch.forEach(function (card, i) {
                    var delay = (i % PAGE) * 90;
                    card.style.display = '';
                    card.removeAttribute('data-hidden');
                    card.classList.add('lm2-reveal');
                    card.style.transitionDelay = delay + 'ms';
                    void card.offsetHeight;
                    card.classList.add('lm2-reveal-in');
                });
                hiddenList = hiddenCards();
                loading = false;
                if (btn) btn.classList.remove('is-loading');
                labels.forEach(function(l) { l.innerText = oldText; });
                if (hiddenList.length === 0 && wrap) {
                    wrap.style.display = 'none';
                }
            }, 900);
        }
        if (btn) {
            btn.addEventListener('click', loadMore);
        }
    })();
</script>
@endpush
