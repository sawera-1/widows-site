@extends('layouts.app')

@section('title', 'Industries We Serve — Corammers')
@section('description', 'Delivering tailored digital solutions across industries — from startups to enterprise-level organizations.')

@push('styles')
    @vite('resources/css/pages/industries.css')
@endpush

@php
/* ── Inline SVG helper — one per industry id ── */
function industryIcon(string $id): string {
    $icons = [
        'banking' => '<svg viewBox="0 0 48 48" fill="none" width="40" height="40"><rect x="4" y="20" width="40" height="4" rx="2" fill="currentColor" opacity=".9"/><rect x="8" y="24" width="4" height="16" rx="1" fill="currentColor" opacity=".7"/><rect x="16" y="24" width="4" height="16" rx="1" fill="currentColor" opacity=".7"/><rect x="24" y="24" width="4" height="16" rx="1" fill="currentColor" opacity=".7"/><rect x="32" y="24" width="4" height="16" rx="1" fill="currentColor" opacity=".7"/><rect x="4" y="40" width="40" height="4" rx="2" fill="currentColor" opacity=".9"/><polygon points="24,4 44,20 4,20" fill="currentColor"/><circle cx="24" cy="14" r="3" fill="var(--ip-icon-cutout)"/></svg>',
        'healthcare' => '<svg viewBox="0 0 48 48" fill="none" width="40" height="40"><rect x="6" y="6" width="36" height="36" rx="8" fill="currentColor" opacity=".15" stroke="currentColor" stroke-width="1.5"/><path d="M24 14 L24 34 M14 24 L34 24" stroke="currentColor" stroke-width="4" stroke-linecap="round"/><circle cx="24" cy="24" r="10" stroke="currentColor" stroke-width="1.5" fill="none" opacity=".4"/></svg>',
        'ecommerce' => '<svg viewBox="0 0 48 48" fill="none" width="40" height="40"><path d="M6 8 L12 8 L16 28 L38 28 L42 14 L14 14" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/><circle cx="18" cy="34" r="3" fill="currentColor"/><circle cx="34" cy="34" r="3" fill="currentColor"/><path d="M14 14 L38 14 L34 26 L18 26 Z" fill="currentColor" opacity=".2"/></svg>',
        'retail' => '<svg viewBox="0 0 48 48" fill="none" width="40" height="40"><rect x="6" y="20" width="36" height="22" rx="3" fill="currentColor" opacity=".15" stroke="currentColor" stroke-width="1.5"/><path d="M12 20 L10 10 L38 10 L36 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none"/><path d="M18 20 C18 23.3 20.7 26 24 26 C27.3 26 30 23.3 30 20" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round"/><rect x="20" y="30" width="8" height="12" rx="2" fill="currentColor" opacity=".6"/><rect x="10" y="28" width="6" height="7" rx="1" fill="currentColor" opacity=".4"/><rect x="32" y="28" width="6" height="7" rx="1" fill="currentColor" opacity=".4"/></svg>',
        'telecom' => '<svg viewBox="0 0 48 48" fill="none" width="40" height="40"><circle cx="24" cy="24" r="4" fill="currentColor"/><path d="M16 24 C16 19.6 19.6 16 24 16 C28.4 16 32 19.6 32 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" opacity=".7"/><path d="M10 24 C10 15.2 15.2 10 24 10 C32.8 10 38 15.2 38 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" opacity=".5"/><path d="M4 24 C4 10.7 10.7 4 24 4 C37.3 4 44 10.7 44 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" opacity=".25"/><line x1="24" y1="28" x2="24" y2="44" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><line x1="16" y1="44" x2="32" y2="44" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
        'travel' => '<svg viewBox="0 0 48 48" fill="none" width="40" height="40"><path d="M6 32 L18 20 L24 26 L32 14 L42 32" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 36 L40 36" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".5"/><path d="M20 20 L26 8 L32 20 Z" fill="currentColor" opacity=".7"/><circle cx="26" cy="8" r="3" fill="currentColor"/></svg>',
        'oil' => '<svg viewBox="0 0 48 48" fill="none" width="40" height="40"><polygon points="26,4 14,26 24,26 22,44 34,22 24,22" fill="currentColor" stroke="currentColor" stroke-width="1" opacity=".9"/><circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="1" fill="none" opacity=".2"/></svg>',
        'public' => '<svg viewBox="0 0 48 48" fill="none" width="40" height="40"><rect x="4" y="42" width="40" height="3" rx="1.5" fill="currentColor" opacity=".8"/><rect x="6" y="22" width="4" height="20" rx="1" fill="currentColor" opacity=".6"/><rect x="14" y="22" width="4" height="20" rx="1" fill="currentColor" opacity=".6"/><rect x="22" y="22" width="4" height="20" rx="1" fill="currentColor" opacity=".6"/><rect x="30" y="22" width="4" height="20" rx="1" fill="currentColor" opacity=".6"/><rect x="38" y="22" width="4" height="20" rx="1" fill="currentColor" opacity=".6"/><rect x="4" y="18" width="40" height="4" rx="2" fill="currentColor"/><polygon points="24,4 44,18 4,18" fill="currentColor" opacity=".8"/><circle cx="24" cy="12" r="2.5" fill="var(--ip-icon-cutout)"/></svg>',
        'startups' => '<svg viewBox="0 0 48 48" fill="none" width="40" height="40"><path d="M24 4 C24 4 34 10 34 24 L30 28 L18 28 L14 24 C14 10 24 4 24 4Z" fill="currentColor" opacity=".85"/><circle cx="24" cy="20" r="4" fill="var(--ip-icon-cutout)" opacity=".6"/><circle cx="24" cy="20" r="2.5" fill="currentColor"/><path d="M14 24 L8 30 L12 32 L16 28" fill="currentColor" opacity=".5"/><path d="M34 24 L40 30 L36 32 L32 28" fill="currentColor" opacity=".5"/><path d="M20 28 L18 38 L24 34 L30 38 L28 28" fill="currentColor" opacity=".4"/></svg>',
    ];
    return $icons[$id] ?? '';
}
function complianceIcon(string $type): string {
    $icons = [
        'shield' => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><path d="M24 4 L40 10 L40 26 C40 34 32 42 24 44 C16 42 8 34 8 26 L8 10 Z" fill="currentColor" opacity=".15" stroke="currentColor" stroke-width="1.5"/><path d="M16 24 L21 29 L32 18" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        'doc'    => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><rect x="10" y="4" width="28" height="40" rx="4" fill="currentColor" opacity=".12" stroke="currentColor" stroke-width="1.5"/><line x1="16" y1="16" x2="32" y2="16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><line x1="16" y1="22" x2="32" y2="22" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><line x1="16" y1="28" x2="26" y2="28" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="34" cy="34" r="8" fill="currentColor" opacity=".9"/><path d="M31 34 L33 36 L37 32" stroke="var(--ip-icon-cutout)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        'lock'   => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><rect x="10" y="22" width="28" height="22" rx="5" fill="currentColor" opacity=".15" stroke="currentColor" stroke-width="1.5"/><path d="M16 22 L16 16 C16 9.4 32 9.4 32 16 L32 22" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round"/><circle cx="24" cy="32" r="3" fill="currentColor"/><line x1="24" y1="35" x2="24" y2="39" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
        'search' => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><circle cx="22" cy="22" r="14" stroke="currentColor" stroke-width="2" fill="currentColor" fill-opacity=".1"/><circle cx="22" cy="22" r="8" stroke="currentColor" stroke-width="1.5" fill="none" opacity=".5"/><line x1="32" y1="32" x2="43" y2="43" stroke="currentColor" stroke-width="3" stroke-linecap="round"/><circle cx="22" cy="18" r="2" fill="currentColor" opacity=".7"/></svg>',
        'globe'  => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><circle cx="24" cy="24" r="18" stroke="currentColor" stroke-width="1.5" fill="currentColor" fill-opacity=".08"/><ellipse cx="24" cy="24" rx="8" ry="18" stroke="currentColor" stroke-width="1.5" fill="none" opacity=".5"/><line x1="6" y1="24" x2="42" y2="24" stroke="currentColor" stroke-width="1.5" opacity=".5"/><line x1="9" y1="16" x2="39" y2="16" stroke="currentColor" stroke-width="1" opacity=".3"/><line x1="9" y1="32" x2="39" y2="32" stroke="currentColor" stroke-width="1" opacity=".3"/></svg>',
        'chart'  => '<svg viewBox="0 0 48 48" fill="none" width="44" height="44"><rect x="6" y="28" width="8" height="14" rx="2" fill="currentColor" opacity=".5"/><rect x="18" y="18" width="8" height="24" rx="2" fill="currentColor" opacity=".7"/><rect x="30" y="10" width="8" height="32" rx="2" fill="currentColor" opacity=".9"/><path d="M8 24 L22 14 L34 8" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="3 2"/><circle cx="8" cy="24" r="3" fill="currentColor"/><circle cx="22" cy="14" r="3" fill="currentColor"/><circle cx="34" cy="8" r="3" fill="currentColor"/></svg>',
    ];
    return $icons[$type] ?? '';
}
@endphp

@section('content')
<div class="ip-wrapper">

    {{-- ═══ HERO BANNER ═══ --}}
    <section class="ip-hero" style="background-image: url('{{ asset('assets/industry.webp') }}'); background-size: cover; background-position: center;">
        <div class="ip-hero-overlay"></div>
        <div class="ip-hero-content ip-reveal">
            <div class="ip-label-row">
                <div class="ip-robot-badge">
                    <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="display:none;object-fit:contain;">
                    <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;">
                </div>
                <div class="ip-label-pill">
                    <span class="ip-label-dot"></span>
                    <span class="ip-label-text">Our Expertise</span>
                </div>
            </div>
            <h1 class="ip-hero-heading">Industries We <span class="ip-accent-text">Serve</span></h1>
            <p class="ip-hero-desc">Delivering tailored digital solutions across industries  from startups to enterprise-level organizations.</p>
            <div class="ip-hero-btns">
                <a href="#solutions" class="ip-btn-primary">Explore Solutions</a>
                <a href="/contact" class="ip-btn-outline">Get in Touch</a>
            </div>
        </div>
    </section>

    {{-- ═══ INDUSTRY SOLUTIONS ═══ --}}
    <section class="ip-section" id="solutions">
        <div class="ip-container">
            <div class="ip-section-header ip-reveal">
                <div class="ip-label-row">
                    <div class="ip-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="display:none;object-fit:contain;">
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;">
                    </div>
                    <div class="ip-label-pill"><span class="ip-label-dot"></span><span class="ip-label-text">Sector Expertise</span></div>
                </div>
                <div class="ip-section-divider"></div>
                <h2 class="ip-section-heading">Industry-Specific <span class="ip-accent-text">Digital Solutions</span></h2>
                <p class="ip-section-sub">We don't believe in one-size-fits-all. Every industry has its own language, challenges, and compliance requirements — our solutions are built around yours.</p>
            </div>

            <div class="ip-industry-grid">
                @foreach($industries as $i => $ind)
                <div class="ip-ind-card ip-reveal" style="--delay:{{ ($i % 3) * 0.08 }}s">
                    <div class="ip-ind-glow"></div>
                    <div class="ip-ind-icon-wrap">
                        {!! industryIcon($ind['id']) !!}
                    </div>
                    <h3 class="ip-ind-title">{{ $ind['name'] }}</h3>
                    <p class="ip-ind-desc">{{ $ind['description'] }}</p>
                    <div class="ip-ind-divider"></div>
                    <ul class="ip-ind-solutions">
                        @foreach($ind['solutions'] as $sol)
                            <li class="ip-ind-solution-item">{{ $sol }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ USE CASES ═══ --}}
    <section class="ip-section ip-section-alt">
        <div class="ip-container">
            <div class="ip-section-header ip-reveal">
                <div class="ip-label-row">
                    <div class="ip-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="display:none;object-fit:contain;">
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;">
                    </div>
                    <div class="ip-label-pill"><span class="ip-label-dot"></span><span class="ip-label-text">Real Impact</span></div>
                </div>
                <div class="ip-section-divider"></div>
                <h2 class="ip-section-heading">Use Cases & <span class="ip-accent-text">Real Scenarios</span></h2>
                <p class="ip-section-sub">Stories from the field — how we translated complex problems into measurable results.</p>
            </div>
            <div class="ip-uc-grid">
                @foreach($useCases as $i => $uc)
                <div class="ip-uc-card ip-reveal" style="--delay:{{ ($i % 3) * 0.08 }}s">
                    <div class="ip-uc-icon-wrap">{!! industryIcon($uc['iconId']) !!}</div>
                    <p class="ip-uc-industry">{{ $uc['industry'] }}</p>
                    <h3 class="ip-uc-title">{{ $uc['title'] }}</h3>
                    <p class="ip-uc-desc">{{ $uc['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ CHALLENGES ═══ --}}
    <section class="ip-section">
        <div class="ip-container">
            <div class="ip-section-header ip-reveal">
                <div class="ip-label-row">
                    <div class="ip-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="display:none;object-fit:contain;">
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;">
                    </div>
                    <div class="ip-label-pill"><span class="ip-label-dot"></span><span class="ip-label-text">Problem &rarr; Solution</span></div>
                </div>
                <div class="ip-section-divider"></div>
                <h2 class="ip-section-heading">Challenges We <span class="ip-accent-text">Solve</span></h2>
                <p class="ip-section-sub">Every industry has its friction points. We identify them, then engineer elegant solutions.</p>
            </div>
            <div class="ip-challenges-grid">
                @foreach($challenges as $i => $ch)
                <div class="ip-challenge-card ip-reveal" style="--delay:{{ ($i % 2) * 0.1 }}s">
                    <div class="ip-challenge-left">
                        <p class="ip-ch-industry">{{ $ch['industry'] }}</p>
                        <p class="ip-ch-problem">⚠ {{ $ch['problem'] }}</p>
                    </div>
                    <div class="ip-challenge-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </div>
                    <div class="ip-challenge-right">
                        <p class="ip-ch-solution">{{ $ch['solution'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ TECH TICKER ═══ --}}
    <x-tech-ticker />

    {{-- ═══ CASE STATS (COUNT-UP) ═══ --}}
    <section class="ip-section ip-section-alt">
        <div class="ip-container">
            <div class="ip-section-header ip-reveal">
                <div class="ip-label-row">
                    <div class="ip-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="display:none;object-fit:contain;">
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;">
                    </div>
                    <div class="ip-label-pill"><span class="ip-label-dot"></span><span class="ip-label-text">Impact Numbers</span></div>
                </div>
                <div class="ip-section-divider"></div>
                <h2 class="ip-section-heading">Results That <span class="ip-accent-text">Speak</span></h2>
                <p class="ip-section-sub">Measurable outcomes from real-world engagements across industries.</p>
            </div>
            <div class="ip-stats-grid">
                @foreach($stats as $i => $stat)
                <div class="ip-stat-card ip-reveal" style="--delay:{{ ($i % 3) * 0.1 }}s"
                     data-value="{{ $stat['value'] }}" data-suffix="{{ $stat['suffix'] }}">
                    <p class="ip-stat-number"><span class="ip-stat-count">0</span>{{ $stat['suffix'] }}</p>
                    <p class="ip-stat-label">{{ $stat['label'] }}</p>
                    <p class="ip-stat-industry">{{ $stat['industry'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ COMPLIANCE ═══ --}}
    <section class="ip-section">
        <div class="ip-container">
            <div class="ip-section-header ip-reveal">
                <div class="ip-label-row">
                    <div class="ip-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="display:none;object-fit:contain;">
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;">
                    </div>
                    <div class="ip-label-pill"><span class="ip-label-dot"></span><span class="ip-label-text">Security & Compliance</span></div>
                </div>
                <div class="ip-section-divider"></div>
                <h2 class="ip-section-heading">Built to the <span class="ip-accent-text">Highest Standards</span></h2>
                <p class="ip-section-sub">Security isn't an afterthought — it's embedded in every layer of our solutions.</p>
            </div>
            <div class="ip-compliance-grid">
                @foreach($compliance as $i => $item)
                <div class="ip-compliance-card ip-reveal" style="--delay:{{ ($i % 3) * 0.08 }}s">
                    <div class="ip-compliance-icon">{!! complianceIcon($item['icon']) !!}</div>
                    <h3 class="ip-compliance-title">{{ $item['title'] }}</h3>
                    <p class="ip-compliance-desc">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ GLOBAL REACH ═══ --}}
    <section class="ip-section ip-section-alt">
        <div class="ip-container ip-world-map-section">
            <div class="ip-section-header ip-reveal">
                <div class="ip-label-row">
                    <div class="ip-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="display:none;object-fit:contain;">
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;">
                    </div>
                    <div class="ip-label-pill"><span class="ip-label-dot"></span><span class="ip-label-text">Global Reach</span></div>
                </div>
                <div class="ip-section-divider"></div>
                <h2 class="ip-section-heading">Streamlining <span class="ip-accent-text">Guest Journeys</span></h2>
                <p class="ip-section-sub">Our telecom and hospitality solutions span operations, security, and automation — globally.</p>
            </div>
            
            <div class="ip-world-map-container ip-reveal">
                <div class="ip-world-dots"></div>
                <svg class="ip-world-map-svg-lines" viewBox="0 0 1000 500" preserveAspectRatio="none">
                    <defs>
                        <marker id="arrowhead" markerWidth="6" markerHeight="4" refX="3" refY="2" orient="auto">
                            <polygon points="0 0, 6 2, 0 4" fill="#d81d1f" opacity="0.6" />
                        </marker>
                    </defs>
                    <polyline points="130,200 350,130 590,250 830,280" fill="none" stroke="rgba(216,29,31,0.5)" stroke-width="2" stroke-dasharray="8 4" marker-end="url(#arrowhead)" />
                    <g><circle cx="130" cy="200" r="8" fill="rgba(216,29,31,0.15)" /><circle cx="130" cy="200" r="4" fill="#d81d1f" /></g>
                    <g><circle cx="350" cy="130" r="8" fill="rgba(216,29,31,0.15)" /><circle cx="350" cy="130" r="4" fill="#d81d1f" /></g>
                    <g><circle cx="590" cy="250" r="8" fill="rgba(216,29,31,0.15)" /><circle cx="590" cy="250" r="4" fill="#d81d1f" /></g>
                    <g><circle cx="830" cy="280" r="8" fill="rgba(216,29,31,0.15)" /><circle cx="830" cy="280" r="4" fill="#d81d1f" /></g>
                </svg>
                <div class="ip-features-wrapper">
                    <div class="ip-telecom-feature" style="top: 22%; left: 1%;">
                        <div class="ip-tf-title">Enhanced Customer Engagement</div>
                        <div class="ip-tf-desc">Omni-channel platforms enable seamless, personalized customer experiences.</div>
                    </div>
                    <div class="ip-telecom-feature" style="top: 5%; left: 28%;">
                        <div class="ip-tf-title">Smarter Network Management</div>
                        <div class="ip-tf-desc">AI-based solutions predict and prevent issues, ensuring reliability.</div>
                    </div>
                    <div class="ip-telecom-feature" style="top: 52%; left: 51%;">
                        <div class="ip-tf-title">Robust Cybersecurity for Telecom</div>
                        <div class="ip-tf-desc">Secure sensitive customer data and network systems with advanced measures.</div>
                    </div>
                    <div class="ip-telecom-feature" style="top: 34%; right: 1%;">
                        <div class="ip-tf-title">Efficient Process Automation</div>
                        <div class="ip-tf-desc">Streamline operations like billing and support to enhance services.</div>
                    </div>
                    <div class="ip-telecom-feature" style="top: 62%; right: 1%;">
                        <div class="ip-tf-title">Scalable Solutions for Growth</div>
                        <div class="ip-tf-desc">Adapt to demand with flexible cloud infrastructure.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══ STAFF AUGMENTATION ═══ --}}
    <x-staff-augmentation-section />

    {{-- ═══ CLIENT TICKER ═══ --}}
    <x-client-ticker />

    {{-- ═══ CTA ═══ --}}
    <section class="ip-cta-section ip-reveal" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('assets/ind3.webp') }}'); background-size: cover; background-position: center;">
        <div class="ip-cta-inner">
            <h2 class="ip-cta-heading">Ready to Transform Your Industry?</h2>
            <p class="ip-cta-sub">Let's talk about how we can solve your specific challenges with technology that actually works.</p>
            <div class="ip-cta-btns">
                <a href="/contact" class="ip-btn-primary">Contact Us</a>
                <a href="/blog" class="ip-btn-outline">Read Our Insights</a>
            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
    @vite('resources/js/pages/industries.js')
@endpush
