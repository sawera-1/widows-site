@extends('layouts.app')

@section('title', 'Hire Marketing Associates — CORAMMERS')
@section('description', 'Scale your marketing team instantly. Hire expert Social Media Managers, Email Marketing Specialists, and CRM Automation Experts at 20% of US market cost.')

@push('styles')
    @vite(['resources/css/pages/hire-marketing.css'])
@endpush

@push('scripts')
    @vite(['resources/js/pages/hire-marketing.js'])
@endpush

@section('content')
<div class="hd-wrapper">

    {{-- ══════════════════════════════════════════
         HERO
    ══════════════════════════════════════════ --}}
    <section class="hd-hero">
        <div class="hd-hero-bg"></div>
        <div class="hd-hero-overlay"></div>
        <div class="hd-hero-fade"></div>

        <div class="hd-hero-content">

            {{-- LEFT --}}
            <div>
                {{-- Label row --}}
                <div class="hd-hero-label-row">
                    <div class="hd-hero-robot-col">
                        <div class="hd-hero-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" class="hd-robot-img-dark"  alt="Robot" width="32" height="32" style="display:block;">
                            <img src="{{ asset('assets/robo.png') }}" class="hd-robot-img-light" alt="Robot" width="32" height="32" style="display:none;">
                        </div>
                        <div class="hd-hero-divider"></div>
                    </div>
                    <div class="hd-hero-pill">
                        <span class="hd-hero-pill-dot"></span>
                        <span class="hd-hero-pill-text">Staff Augmentation · Marketing</span>
                    </div>
                </div>

                <h1 class="hd-hero-heading">
                    Hire Marketing Associates<br>
                    to Scale Your <span class="hd-hero-accent">Growth</span>
                </h1>
                <p class="hd-hero-sub">
                    Marketing Associates execute, manage, and optimize your campaigns — from
                    social media to CRM automation — ensuring consistent performance and growth.
                </p>

                {{-- Points grid --}}
                <div class="hd-hero-points">
                    @foreach($heroPoints as $pt)
                        <div class="hd-hero-point">
                            <span class="hd-hero-point-icon">
                                <svg width="15" height="15" viewBox="0 0 16 16" fill="none">{!! $pt['icon'] !!}</svg>
                            </span>
                            {{ $pt['label'] }}
                        </div>
                    @endforeach
                </div>

                <div class="hd-hero-ctas">
                    <a href="{{ route('contact.index') }}" class="hd-btn-primary">
                        Hire Associates
                        <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                            <path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- RIGHT — Stats --}}
            <div class="hd-hero-right">
                @foreach($heroStats as $s)
                    <div class="hd-stat-card">
                        <div class="hd-stat-label">{{ $s['label'] }}</div>
                        <div class="hd-stat-value"><em>{{ $s['value'] }}</em>{{ $s['suffix'] }}</div>
                        <div class="hd-stat-sub">{{ $s['sub'] }}</div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════
         STAFF SERVICES
    ══════════════════════════════════════════ --}}
    <section class="hd-services" id="services">
        <div class="hd-services-inner">

            {{-- Section header --}}
            <div class="hd-reveal" style="margin-bottom:40px;">
                <div class="hd-section-label-row">
                    <div class="hd-robot-col">
                        <div class="hd-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="display:block;">
                        </div>
                        <div class="hd-section-divider"></div>
                    </div>
                    <div class="hd-label-pill">
                        <span class="hd-label-dot"></span>
                        <span class="hd-label-text">Dedicated Talent</span>
                    </div>
                </div>
                <h2 class="hd-sec-heading">
                    Staff <span class="hd-accent">Services</span>
                </h2>
                <p class="hd-sec-subtext">
                    Hire dedicated developers with zero overhead. Scale your team instantly —
                    no contracts, no HR hassles, no long onboarding cycles.
                </p>
            </div>

            {{-- Services grid --}}
            <div class="hd-svc-grid">
                @foreach($staffRoles as $i => $item)
                    <div class="hd-exp-card" data-idx="{{ $i }}">
                        <div class="hd-card-bar"></div>
                        <div class="hd-card-body">
                            <div class="hd-card-top">
                                <div class="hd-card-icon-box">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">{!! $item['icon'] !!}</svg>
                                </div>
                                <span class="hd-card-index">{{ $item['num'] }}</span>
                            </div>
                            <h3 class="hd-card-title">{{ $item['title'] }}</h3>
                            <p class="hd-card-desc">{{ $item['desc'] }}</p>
                            <ul class="hd-card-points">
                                @foreach($item['points'] as $pt)
                                    <li class="hd-card-point">
                                        <div class="hd-card-check">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"/>
                                            </svg>
                                        </div>
                                        {{ $pt }}
                                    </li>
                                @endforeach
                            </ul>
                            <a href="{{ route('contact.index') }}" class="hd-svc-hire-btn">
                                Hire Now
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         PRICING
    ══════════════════════════════════════════ --}}
    <section class="hd-pricing" id="pricing">
        <div class="hd-pricing-inner">

            {{-- Section header --}}
            <div class="hd-reveal" style="margin-bottom:40px;">
                <div class="hd-section-label-row">
                    <div class="hd-robot-col">
                        <div class="hd-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="display:block;">
                        </div>
                        <div class="hd-section-divider"></div>
                    </div>
                    <div class="hd-label-pill">
                        <span class="hd-label-dot"></span>
                        <span class="hd-label-text">Transparent Rates</span>
                    </div>
                </div>
                <h2 class="hd-sec-heading">
                    Staff <span class="hd-accent">Pricing</span>
                </h2>
                <p class="hd-sec-subtext">
                    Simple, flat-rate monthly pricing. No hidden fees, no surprise invoices —
                    just world-class talent billed cleanly every month.
                </p>
            </div>

            {{-- Pricing grid --}}
            <div class="hd-price-grid">
                @foreach($pricingData as $i => $item)
                    <div class="hd-price-card{{ $item['featured'] ? ' hd-featured' : '' }}" data-idx="{{ $i }}">
                        @if($item['featured'])
                            <div class="hd-price-ribbon">Most Popular</div>
                        @endif
                        <div class="hd-price-bar"></div>
                        <div class="hd-price-body">
                            <div class="hd-price-header">
                                <span class="hd-price-role">{{ $item['role'] }}</span>
                                <span class="hd-price-badge">Monthly</span>
                            </div>
                            <div class="hd-price-divider"></div>
                            <div class="hd-price-tiers">
                                {{-- Full Time --}}
                                <div class="hd-price-tier hd-fulltime">
                                    <div class="hd-tier-left">
                                        <span class="hd-tier-name">Full Time</span>
                                        <span class="hd-tier-hours">8 hrs / day</span>
                                    </div>
                                    <div class="hd-tier-price">{{ $item['fullTime'] }}<span>/mo</span></div>
                                </div>
                                {{-- Part Time --}}
                                <div class="hd-price-tier">
                                    <div class="hd-tier-left">
                                        <span class="hd-tier-name">Part Time</span>
                                        <span class="hd-tier-hours">4 hrs / day</span>
                                    </div>
                                    <div class="hd-tier-price">{{ $item['partTime'] }}<span>/mo</span></div>
                                </div>
                            </div>
                            <a href="{{ route('contact.index') }}" class="hd-price-cta">
                                Contact Us
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         CLIENT TICKER
    ══════════════════════════════════════════ --}}
    @include('components.client-ticker')

    {{-- ══════════════════════════════════════════
         TEAM / EMPLOYEES
    ══════════════════════════════════════════ --}}
    <section class="hd-team">
        <div class="hd-team-inner">

            {{-- Section header --}}
            <div style="margin-bottom:40px;">
                <div class="hd-section-label-row">
                    <div class="hd-robot-col">
                        <div class="hd-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="display:block;">
                        </div>
                        <div class="hd-section-divider"></div>
                    </div>
                    <div class="hd-label-pill">
                        <span class="hd-label-dot"></span>
                        <span class="hd-label-text">Our Experts</span>
                    </div>
                </div>
                <h2 class="hd-sec-heading">
                    Meet Our <span class="hd-accent">Experts</span>
                </h2>
                <p class="hd-sec-subtext">
                    Hand-picked professionals with years of industry experience.
                </p>
            </div>

            {{-- Team grid --}}
            <div class="hd-team-grid" id="hdTeamGrid">
                @foreach($employees as $i => $emp)
                    <div class="hd-emp-card" data-idx="{{ $i }}" style="display:none;">
                        <div class="hd-emp-img-wrap">
                            <img src="{{ asset($emp['img']) }}" alt="{{ $emp['name'] }}" loading="lazy">
                            <div class="hd-emp-img-overlay"></div>
                        </div>
                        <div class="hd-emp-info">
                            <div class="hd-emp-name-row">
                                <span class="hd-emp-name">{{ $emp['name'] }}</span>
                                <span class="hd-emp-available">
                                    <span class="hd-emp-available-dot"></span>
                                    Available
                                </span>
                            </div>
                            <span class="hd-emp-role">{{ $emp['role'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Load More --}}
            @if(count($employees) > 4)
                <div class="hd-load-more-wrap">
                    <div class="hd-load-more-container" id="hdLoadMoreBtn">
                        <div class="hd-lm-overlay" aria-hidden="true">
                            <span class="hd-lm-text">Load More</span>
                            <span class="hd-lm-dots">
                                <span class="hd-lm-dot"></span>
                                <span class="hd-lm-dot"></span>
                                <span class="hd-lm-dot"></span>
                            </span>
                        </div>
                        <div class="hd-lm-buttons">
                            <button class="hd-lm-icon-btn" type="button">
                                <span class="hd-lm-dots-icon">
                                    <span class="hd-lm-dot"></span>
                                    <span class="hd-lm-dot"></span>
                                    <span class="hd-lm-dot"></span>
                                </span>
                                <span class="hd-lm-spinner">
                                    <span class="hd-lm-spin-ring"></span>
                                </span>
                            </button>
                            <button class="hd-lm-text-btn" type="button">Load More</button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         TECH TICKER
    ══════════════════════════════════════════ --}}
    @include('components.tech-ticker')

    {{-- ══════════════════════════════════════════
         HIRING / STAFF AUGMENTATION SECTION
    ══════════════════════════════════════════ --}}
    @include('components.staff-augmentation-section')

    {{-- ══════════════════════════════════════════
         FAQ
    ══════════════════════════════════════════ --}}
    @include('components.faq-section')

    {{-- ══════════════════════════════════════════
         BOOK CONSULTATION
    ══════════════════════════════════════════ --}}
    @include('components.book-consultation-section')

</div>
@endsection