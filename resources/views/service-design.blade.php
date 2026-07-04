@extends('layouts.app')

@section('title', 'Designing Services — CORAMMERS')
@section('description', 'We Craft Visual Experiences That Drive Real Results. From pixel-perfect interfaces to compelling brand identities, our team designs digital experiences that resonate.')

@push('styles')
    @vite(['resources/css/pages/service-design.css'])
@endpush

@push('scripts')
    @vite(['resources/js/pages/service-design.js'])
@endpush

@section('content')
<div x-data="designPage()" x-init="init()" :data-theme="theme">
<main class="dev-main" :style="mainStyle">

    {{-- ══════════════════════════════════════════
         HERO — TICKER LAYOUT
    ══════════════════════════════════════════ --}}
    <section class="dev-hero">
        <div class="dev-hero-inner">

            {{-- LEFT: Tickers 1 & 2 --}}
            <div class="dev-hero-ticker-group dev-ticker-left">
                <div class="dev-v-ticker-col" style="height:520px;">
                    <div class="dev-v-ticker-track dev-v-ticker-track-up" style="--spd:22s;">
                        @foreach(array_merge($techCol1, $techCol1) as $t)
                            <div class="dev-tech-card">
                                <div class="dev-tech-icon-wrap" style="background: {{ $t['bg'] }}; color: {{ $t['color'] }};">
                                    <x-tech-icon :name="$t['icon']" />
                                </div>
                                <div class="dev-tech-card-info">
                                    <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                    <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="dev-v-ticker-col" style="height:520px;">
                    <div class="dev-v-ticker-track dev-v-ticker-track-down" style="--spd:26s;">
                        @foreach(array_merge($techCol2, $techCol2) as $t)
                            <div class="dev-tech-card">
                                <div class="dev-tech-icon-wrap" style="background: {{ $t['bg'] }}; color: {{ $t['color'] }};">
                                    <x-tech-icon :name="$t['icon']" />
                                </div>
                                <div class="dev-tech-card-info">
                                    <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                    <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- MIDDLE: Content --}}
            <div class="dev-hero-content" x-bind:style="heroContentStyle">
                <div style="display:flex;flex-direction:column;align-items:center;margin-bottom:24px;">
                    <div class="dev-hero-badge-row" style="align-items:flex-start;">
                        <div style="display:flex;flex-direction:column;align-items:center;">
                            <div class="dev-hero-robot-badge">
                                <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                            </div>
                            <div class="dev-hero-divider" style="margin:12px 0 0;width:48px;"></div>
                        </div>
                        <div class="dev-hero-label-pill" style="margin-top:6px;">
                            <span class="dev-hero-label-dot"></span>
                            <span class="dev-hero-label-text">Designing Services</span>
                        </div>
                    </div>
                    <h1 class="dev-hero-heading" style="text-align:center;margin-top:24px;margin-bottom:0;">
                        We Craft<br>
                        <span class="dev-hero-accent">Visual</span><br>
                        Experiences
                    </h1>
                </div>

                <p class="dev-hero-desc">
                    We Craft Visual Experiences That Drive Real Results. From pixel-perfect interfaces to compelling brand identities, our team designs digital experiences that resonate.
                </p>

                <div class="dev-hero-cta-row">
                    <a href="{{ route('contact.index') }}" class="dev-hero-btn">
                        Contact Us
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

            {{-- RIGHT: Tickers 3 & 4 --}}
            <div class="dev-hero-ticker-group dev-ticker-right">
                <div class="dev-v-ticker-col" style="height:520px;">
                    <div class="dev-v-ticker-track dev-v-ticker-track-down" style="--spd:28s;">
                        @foreach(array_merge($techCol3, $techCol3) as $t)
                            <div class="dev-tech-card">
                                <div class="dev-tech-icon-wrap" style="background: {{ $t['bg'] }}; color: {{ $t['color'] }};">
                                    <x-tech-icon :name="$t['icon']" />
                                </div>
                                <div class="dev-tech-card-info">
                                    <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                    <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="dev-v-ticker-col" style="height:520px;">
                    <div class="dev-v-ticker-track dev-v-ticker-track-up" style="--spd:34s;">
                        @foreach(array_merge($techCol4, $techCol4) as $t)
                            <div class="dev-tech-card">
                                <div class="dev-tech-icon-wrap" style="background: {{ $t['bg'] }}; color: {{ $t['color'] }};">
                                    <x-tech-icon :name="$t['icon']" />
                                </div>
                                <div class="dev-tech-card-info">
                                    <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                    <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════
         TICKER BAND
    ══════════════════════════════════════════ --}}
    <div class="wd-ticker">
        <div class="wd-ticker-track">
            @for($rep = 0; $rep < 4; $rep++)
                <div style="display:flex;align-items:center;">
                    @foreach($tickerItems as $item)
                        <div class="wd-ticker-item">
                            <span class="wd-ticker-dot"></span>
                            <span style="display:flex;align-items:center;opacity:0.85;"><x-ticker-icon :name="$item['icon']" /></span>
                            {{ $item['label'] }}
                        </div>
                    @endforeach
                </div>
            @endfor
        </div>
    </div>

    {{-- ══════════════════════════════════════════
         OUR EXPERTISE — TWO COLUMN
    ══════════════════════════════════════════ --}}
    <section class="wd-section">
        <div class="wd-inner">
            <div class="dev-intro-two-col reveal">

                {{-- LEFT: expertise content --}}
                <div>
                    <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px;">
                        <div class="wd-label-row" style="align-items:flex-start;">
                            <div style="display:flex;flex-direction:column;align-items:center;">
                                <div class="wd-robot-badge">
                                    <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                                </div>
                                <div class="wd-section-divider" style="margin:12px 0 0;width:48px;"></div>
                            </div>
                            <div class="wd-label-pill" style="margin-top:6px;">
                                <span class="wd-label-dot"></span>
                                <span class="wd-label-text">Our Expertise</span>
                            </div>
                        </div>
                        <h2 class="wd-intro-heading" style="margin:24px 0 0;">We Craft Visual Experiences That Drive Real Results</h2>
                    </div>
                    <p class="wd-intro-text">From pixel-perfect interfaces to compelling brand identities, our team designs digital experiences that resonate. We combine aesthetic brilliance with strategic thinking — ensuring every design serves your goals.</p>
                    <p class="wd-intro-text">Whether you need a stunning marketing site, a complex UI system, or custom graphic design, we deliver with precision, creativity, and long-term scalability.</p>
                    <div style="display:flex;align-items:center;gap:28px;margin-top:14px;flex-wrap:wrap;">
                        <a href="{{ route('contact.index') }}" class="dev-hero-btn">
                            Contact Us
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <div class="wd-intro-stat">
                            <strong>150+</strong>
                            <span>Projects Delivered</span>
                        </div>
                    </div>
                </div>

                {{-- RIGHT: Staff Augmentation Card --}}
                <a href="{{ route('hire') }}" class="dev-staff-card">
                    <div class="dev-staff-card-badge">
                        <span class="dev-staff-card-badge-dot"></span>
                        Now Hiring
                    </div>

                    <h3 class="dev-staff-card-title">
                        Scale Your Team with<br>
                        <span class="dev-staff-card-accent">Design Support</span>
                    </h3>

                    <p class="dev-staff-card-desc">
                        Need expert designers without the overhead of full-time hiring? Our staff augmentation service gives you instant access to vetted, senior-level designers who integrate seamlessly into your team.
                    </p>

                    <ul class="dev-staff-perks">
                        @foreach($staffPerks as $perk)
                            <li class="dev-staff-perk">
                                <span class="dev-staff-perk-dot"></span>
                                {{ $perk }}
                            </li>
                        @endforeach
                    </ul>

                    <div class="dev-staff-cta">
                        Explore Staff Augmentation
                    </div>
                </a>

            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         DEVELOPMENT SERVICES CARDS
    ══════════════════════════════════════════ --}}
    <section class="ds-section">
        <div class="ds-inner">
            <div class="reveal">
                <div style="display:flex;flex-direction:column;align-items:flex-start;">
                    <div class="wd-label-row">
                        <div class="wd-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                        </div>
                        <div class="wd-label-pill">
                            <span class="wd-label-dot"></span>
                            <span class="wd-label-text">Our Solutions</span>
                        </div>
                    </div>
                    <div class="wd-section-divider"></div>
                    <h2 class="wd-section-heading" style="margin:0;">Designing Services</h2>
                </div>
                <p class="wd-section-sub">We specialize in crafting high-end digital experiences. Every project is beautiful, intuitive, and built to convert.</p>
            </div>

            <div class="ds-grid">
                @foreach($developmentServices as $idx => $svc)
                    <div class="ds-card-v2 reveal" style="transition-delay: {{ $idx * 0.1 }}s;">
                        <div class="ds-v2-icon-wrap"><x-service-icon :name="$svc['icon']" /></div>
                        <h3 class="ds-v2-title">{{ $svc['title'] }}</h3>
                        <p class="ds-v2-perfect-label">Perfect for</p>
                        <p class="ds-v2-perfect-text">{{ $svc['perfectFor'] }}</p>
                        <div class="ds-v2-divider"></div>
                        <p class="ds-v2-tech-label">Technologies</p>
                        <div class="ds-v2-tech-pills">
                            @foreach($svc['technologies'] as $tech)
                                <span class="ds-v2-pill">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <a href="{{ route('contact.index') }}" class="ds-v2-cta">Get Started</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         HOW WE BUILD
    ══════════════════════════════════════════ --}}
    <section class="wd-section" style="overflow:hidden;">
        <div class="wd-inner">
            <div class="reveal">
                <div style="display:flex;flex-direction:column;align-items:flex-start;">
                    <div class="wd-label-row">
                        <div class="wd-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                        </div>
                        <div class="wd-label-pill">
                            <span class="wd-label-dot"></span>
                            <span class="wd-label-text">Our Methodology</span>
                        </div>
                    </div>
                    <div class="wd-section-divider"></div>
                    <h2 class="wd-section-heading" style="margin:0;">How We Craft Visual Excellence</h2>
                </div>
                <p class="wd-section-sub">A proven, structured process — from initial discovery to flawless design handoff, every phase is intentional and precise.</p>
            </div>

            <div class="hwb-flow" x-ref="hwbFlow" x-init="observeHwbFlow($refs.hwbFlow)">
                <div class="hwb-connector">
                    <div class="hwb-connector-fill"></div>
                </div>
                @foreach($buildSteps as $i => $s)
                    <div class="hwb-step reveal" style="transition-delay: {{ $i * 0.14 }}s;">
                        <span class="hwb-num-bg">{{ $s['num'] }}</span>
                        <div class="hwb-icon-ring"><x-step-icon :name="$s['icon']" /></div>
                        <div class="hwb-step-body">
                            <h3 class="hwb-step-title">{{ $s['title'] }}</h3>
                            <p class="hwb-step-desc">{{ $s['desc'] }}</p>
                            <span class="hwb-step-tag">{{ $s['tag'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         PRICING SECTION
    ══════════════════════════════════════════ --}}
    <section class="pc-section">
        <div class="ds-inner">
            <div class="reveal" style="display:flex;flex-direction:column;align-items:center;">
                <div style="display:flex;flex-direction:column;align-items:center;margin-bottom:24px;">
                    <div class="wd-label-row" style="align-items:flex-start;">
                        <div style="display:flex;flex-direction:column;align-items:center;">
                            <div class="wd-robot-badge">
                                <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                            </div>
                            <div class="wd-section-divider" style="margin:12px 0 0;width:48px;"></div>
                        </div>
                        <div class="wd-label-pill" style="margin-top:6px;">
                            <span class="wd-label-dot"></span>
                            <span class="wd-label-text">Pricing</span>
                        </div>
                    </div>
                    <h2 class="wd-section-heading" style="text-align:center;margin-top:24px;margin-bottom:0;">Professional Design Plans</h2>
                </div>
                <p class="wd-section-sub" style="margin:0 auto;text-align:center;">Pricing is based on the scope and deliverables — no hidden fees, no surprises. Pick your plan and let's create.</p>
            </div>

            <div class="pc-grid">
                @foreach($pricingCards as $idx => $plan)
                    <div class="pc-card reveal {{ $plan['highlight'] ? 'pc-card--highlight' : '' }}" style="transition-delay: {{ $idx * 0.1 }}s;">
                        @if($plan['highlight'])
                            <div class="pc-popular-badge">Most Popular</div>
                        @endif

                        <div class="pc-card-topbar"></div>

                        <div class="pc-card-header">
                            <div class="pc-card-icon-wrap"><x-service-icon :name="$plan['icon']" /></div>
                            <div>
                                <div class="pc-tier-label">{{ $plan['tier'] }}</div>
                                <h3 class="pc-card-title">{{ $plan['title'] }}</h3>
                            </div>
                        </div>

                        <div class="pc-price-row">
                            <span class="pc-price">{{ $plan['price'] }}</span>
                            <span class="pc-price-note">/ project</span>
                        </div>

                        <p class="pc-desc">{{ $plan['desc'] }}</p>

                        <div class="pc-ticker-block">
                            <span class="pc-ticker-label">Tech Stack</span>
                            <div class="pc-ticker-wrap" :class="theme === 'dark' ? 'pc-ticker--dark' : 'pc-ticker--light'">
                                <div class="card-ticker" x-data="cardTicker()" @mouseenter="paused = true" @mouseleave="paused = false">
                                    <div class="card-ticker-track" :style="`animation-duration:22s;animation-play-state:${paused ? 'paused' : 'running'}`">
                                        @foreach(array_merge($plan['ticker1'], $plan['ticker1']) as $item)
                                            <span class="ds-v2-pill" style="font-size:0.64rem;padding:4px 12px;border-width:1px;">{{ $item }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pc-ticker-block">
                            <span class="pc-ticker-label">Tools &amp; Integrations</span>
                            <div class="pc-ticker-wrap" :class="theme === 'dark' ? 'pc-ticker--dark' : 'pc-ticker--light'">
                                <div class="card-ticker" x-data="cardTicker()" @mouseenter="paused = true" @mouseleave="paused = false">
                                    <div class="card-ticker-track" :style="`animation-duration:18s;animation-play-state:${paused ? 'paused' : 'running'}`">
                                        @foreach(array_merge($plan['ticker2'], $plan['ticker2']) as $item)
                                            <span class="ds-v2-pill" style="font-size:0.64rem;padding:4px 12px;border-width:1px;">{{ $item }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pc-divider"></div>

                        <ul class="pc-features">
                            @foreach($plan['features'] as $f)
                                <li class="pc-feat-item">
                                    <span class="pc-feat-check">
                                        <svg width="9" height="9" viewBox="0 0 10 10" fill="none">
                                            <path d="M1.5 5l2.5 2.5 4.5-5"
                                                :stroke="'{{ $plan['highlight'] ? '#111' : '' }}' || (theme === 'dark' ? '#ff4d4d' : '#cc0000')"
                                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    {{ $f }}
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('contact.index') }}" class="pc-btn">Contact Us</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         PORTFOLIO (shared component)
    ══════════════════════════════════════════ --}}
    <x-portfolio-section />

    {{-- ══════════════════════════════════════════
         REVIEWS (shared component)
    ══════════════════════════════════════════ --}}
    <x-reviews-section />

    {{-- ══════════════════════════════════════════
         BOOK CONSULTATION (shared component)
    ══════════════════════════════════════════ --}}
    <x-book-consultation-section />

</main>
</div>
@endsection