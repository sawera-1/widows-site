@extends('layouts.app')

@section('title', 'Staff Augmentation Services — Corammers')
@section('meta_description', 'Scale your team with Corammers staff augmentation — vetted developers, designers and marketing specialists, ready to embed with your team.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/staff.css') }}">
@endpush

@section('content')
<div class="pw-staff">
    <main class="sa-page" style="padding-top:80px">

        {{-- ══════════ SECTION 1 — HERO ══════════ --}}
        <section class="sec hero exp-section-bg">
            <div class="hero-inner">

                {{-- Left --}}
                <div class="hero-left go">
                    <div class="badge-group">
<div class="section-badge">
                        <div class="section-robot-badge">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:none">
                        </div>
                        <div class="section-label-pill">
                            <span class="section-label-dot"></span>
                            <span class="section-label">Staff Augmentation</span>
                        </div>
                    </div>
                    <div class="section-divider"></div>
</div>

                    <h1 class="section-heading">
                        Hire Top Talent <span class="accent">On-Demand</span> for Your Business Growth
                    </h1>
                    <p class="section-description" style="margin-bottom:24px">From developers to marketers and AI experts — scale your team with vetted professionals who integrate seamlessly into your workflow. Whether you're a startup, growing business, or enterprise, we connect you with skilled talent who deliver results.</p>
                    <div class="hero-btns">
                        <a href="/contact" class="btn-primary">Hire Talent</a>
                    </div>

                    <div class="hero-stats-row">
                        <div class="hero-stat-item">
                            <div class="hero-stat-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </div>
                            <div class="hero-stat-text">
                                <div class="hero-stat-title">98%</div>
                                <div class="hero-stat-label">Client Satisfaction</div>
                            </div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="hero-stat-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <div class="hero-stat-text">
                                <div class="hero-stat-title">500+</div>
                                <div class="hero-stat-label">Professionals</div>
                            </div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="hero-stat-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <div class="hero-stat-text">
                                <div class="hero-stat-title">24/7</div>
                                <div class="hero-stat-label">Support</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right --}}
                <div class="hero-right go">
                    <div class="hero-float-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#b6b1b1ff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" /><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" /><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" /><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" /></svg>
                        20+ Experts Ready
                    </div>

                    <div class="hero-img-main">
                        <img src="/assets/team1.webp" alt="Team collaboration" loading="eager">
                        <div style="position:absolute;inset:0;background:linear-gradient(135deg, transparent 60%, rgba(var(--primary-rgb),0.06) 100%);pointer-events:none"></div>
                    </div>

                    <div class="hero-float-card">
                        <div class="hfc-icon" style="background:linear-gradient(135deg, #D81D1F, #1f3828)">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="21" x2="16" y2="21" /><line x1="12" y1="17" x2="12" y2="21" /><path d="M7 4H17l-1 7a5 5 0 0 1-10 0L5 4z" /><path d="M5 9H3a2 2 0 0 0 0 4h2" /><path d="M19 9h2a2 2 0 0 1 0 4h-2" /></svg>
                        </div>
                        <div>
                            <div class="hfc-title">100+</div>
                            <div class="hfc-label">Projects Delivered</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════ SECTION 2 — STATS ══════════ --}}
        <section class="sec sec-alt">
            <div class="container">
                <div>
                    <div class="badge-group">
                        <div class="section-badge">
                            <div class="section-robot-badge">
                                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:none">
                            </div>
                            <div class="section-label-pill">
                                <span class="section-label-dot"></span>
                                <span class="section-label">By The Numbers</span>
                            </div>
                        </div>
                        <div class="section-divider"></div>
                    </div>
                    <h2 class="section-heading">Our <span class="accent">Track Record</span></h2>
                    <p class="section-description">Numbers that reflect our commitment to delivering exceptional results for our clients worldwide.</p>
                </div>

                <div class="stats-grid">
                    @php
                        $stats = [
                            ['num' => '200+', 'label' => 'Projects Delivered', 'icon' => '<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" /><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" /><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" /><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />'],
                            ['num' => '50+', 'label' => 'Clients Worldwide', 'icon' => '<circle cx="12" cy="12" r="10" /><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" /><path d="M2 12h20" />'],
                            ['num' => '5+', 'label' => 'Years Experience', 'icon' => '<circle cx="12" cy="12" r="10" /><polyline points="12 6 12 12 16 14" />'],
                            ['num' => '20+', 'label' => 'Experts Available', 'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M22 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" />'],
                        ];
                    @endphp
                    @foreach ($stats as $stat)
                        <div class="stat-card exp-card-base">
                            <div class="exp-card-topline"></div>
                            <div class="stat-icon-circle">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">{!! $stat['icon'] !!}</svg>
                            </div>
                            <span class="stat-number">{{ $stat['num'] }}</span>
                            <span class="stat-label">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ══════════ HIRING SECTION (px-*) ══════════ --}}
        <div class="px-wrap">
            <section class="px-s1">
                <div class="px-s1-inner">
                    <div class="px-s1-grid">
                        <div class="reveal">
                            <div class="px-img-col">
                                <img loading="lazy" decoding="async" src="/assets/team2.webp" alt="Staff augmentation team">
                                <div class="px-img-overlay"></div>
                                <div class="px-img-label">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--acc)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M22 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg>
                                    Corammers
                                </div>
                                <div class="px-float-badge">
                                    <div class="px-float-badge-icon">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--acc)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg>
                                    </div>
                                    <div>
                                        <div class="px-float-num">70% Faster</div>
                                        <div class="px-float-lbl">Average hiring velocity vs. traditional recruiting</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-content-col">
                            <div class="reveal">
                                <div class="badge-group">
<div class="section-badge">
                                    <div class="section-robot-badge">
                                        <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                                        <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:none">
                                    </div>
                                    <div class="section-label-pill">
                                        <span class="section-label-dot"></span>
                                        <span class="section-label">Staff Augmentation</span>
                                    </div>
                                </div>
                                <div class="section-divider"></div>
</div>
                            </div>

                            <div class="reveal">
                                <h2 class="section-heading">Don't Let Hiring <span class="accent">Slow Your Growth</span></h2>
                            </div>
                            <div class="reveal"><p class="section-description">Finding the right talent is tough. Freelancers lack consistency. Local hires are expensive. Meanwhile, your agency's growth stalls. RepStack helps you scale with vetted virtual team members trained, integrated, and contributing from day one.</p></div>

                            <div class="reveal">
                                <div class="px-highlight">
                                    <h3 class="px-highlight-title">Top Talent. Zero Risk.</h3>
                                    <p class="px-highlight-sub">Our model is built for agency operators:</p>
                                    @foreach ([
                                        "You only pay when we place a VA you're genuinely happy with",
                                        "We manage contracts, compliance, and onboarding via Employer of Record (EOR)",
                                        "Sales, marketing, CS, or ops — our VAs feel like an extension of your team",
                                    ] as $t)
                                        <div class="px-check-row">
                                            <div class="px-check-circle">
                                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--acc)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12" /></svg>
                                            </div>
                                            <p class="px-check-text">{{ $t }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="reveal">
                                <div class="px-tags">
                                    @foreach (['60% payroll savings', '70% faster hiring', 'No upfront costs', 'Full EOR compliance', 'Seamless onboarding'] as $tag)
                                        <span class="px-badge"><span class="px-badge-dot"></span>{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="reveal">
                                <a href="/contact" class="px-cta-btn">Book a Discovery Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="px-s2">
                <div class="px-s2-inner">
                    <div class="px-sec-header text-center">
                        <div class="reveal">
                            <div class="badge-group">
<div class="section-badge">
                                <div class="section-robot-badge">
                                    <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                                    <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:none">
                                </div>
                                <div class="section-label-pill">
                                    <span class="section-label-dot"></span>
                                    <span class="section-label">Our Advantages</span>
                                </div>
                            </div>
                            <div class="section-divider"></div>
</div>
                        </div>
                        <div class="reveal">
                            <h2 class="section-heading">Recruit Smarter, <span class="accent" style="display:inline">Scale Faster</span></h2>
                        </div>
                        <div class="reveal">
                            <p class="section-description">The trusted recruitment partner for digital marketing agencies and SaaS businesses ready to grow.</p>
                        </div>
                    </div>

                    <div class="px-feat-grid">
                        @php
                            $features = [
                                ['title' => 'Specialized for Marketing Agencies & SaaS', 'desc' => 'Purpose-built recruitment solutions focused exclusively on your industry segment.', 'icon' => '<circle cx="12" cy="12" r="10" /><circle cx="12" cy="12" r="6" /><circle cx="12" cy="12" r="2" />'],
                                ['title' => '100% Contingent Hiring — Pay Only When You Hire', 'desc' => 'Zero upfront risk. You pay only once your VA is placed, onboarded, and working.', 'icon' => '<rect x="1" y="4" width="22" height="16" rx="2" ry="2" /><line x1="1" y1="10" x2="23" y2="10" />'],
                                ['title' => 'Fully Compliant Global Hiring via EOR', 'desc' => 'We own compliance, payroll, bonuses, and employee benefits globally.', 'icon' => '<circle cx="12" cy="12" r="10" /><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" /><path d="M2 12h20" />'],
                                ['title' => 'Pre-Trained, Ready-to-Deliver Talent', 'desc' => 'VAs arrive trained in your stack marketing, sales, and operations tools.', 'icon' => '<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" /><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" /><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" /><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />'],
                            ];
                        @endphp
                        @foreach ($features as $i => $f)
                            <div class="reveal">
                                <div class="px-feat-card">
                                    <div class="px-feat-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                                    <div class="px-feat-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--acc)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">{!! $f['icon'] !!}</svg>
                                    </div>
                                    <h3 class="px-feat-title">{{ $f['title'] }}</h3>
                                    <p class="px-feat-desc">{{ $f['desc'] }}</p>
                                    <div class="px-feat-line"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="reveal">
                        <div class="px-stats">
                            @php
                                $pxStats = [
                                    ['num' => '60%', 'label' => 'Payroll Savings', 'icon' => '<line x1="12" y1="1" x2="12" y2="23" /><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />'],
                                    ['num' => '70%', 'label' => 'Faster Hiring', 'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />'],
                                    ['num' => '100%', 'label' => 'Contingent Model', 'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><polyline points="16 11 18 13 22 9" />'],
                                    ['num' => '$0', 'label' => 'Upfront Cost', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />'],
                                ];
                            @endphp
                            @foreach ($pxStats as $s)
                                <div class="px-stat-item">
                                    <div class="px-stat-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">{!! $s['icon'] !!}</svg>
                                    </div>
                                    <div class="px-stat-num">{{ $s['num'] }}</div>
                                    <div class="px-stat-label">{{ $s['label'] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- ══════════ SECTION 3 — WHAT IS STAFF AUGMENTATION ══════════ --}}
        <section class="sec exp-section-bg">
            <div class="container">
                <div class="what-inner">
                    <div class="what-left">
                        <div class="badge-group">
<div class="section-badge">
                            <div class="section-robot-badge">
                                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:none">
                            </div>
                            <div class="section-label-pill">
                                <span class="section-label-dot"></span>
                                <span class="section-label">How It Works</span>
                            </div>
                        </div>
                        <div class="section-divider"></div>
</div>
                        <h2 class="section-heading">What Is <span class="accent">Staff Augmentation</span>?</h2>
                        <p class="section-description">Staff augmentation allows you to extend your in-house team with specialized experts without long hiring processes, overhead costs, or onboarding delays. You stay in control.</p>

                        @php
                            $benefits = [
                                ['title' => 'Instant Integration', 'desc' => 'Experts slot directly into your workflows and tools from day one.', 'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />'],
                                ['title' => 'Flexible Scaling', 'desc' => 'Scale your team up or down based on your project demands.', 'icon' => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18" /><polyline points="17 6 23 6 23 12" />'],
                                ['title' => 'Cost Efficient', 'desc' => 'No recruitment fees, office space, or employee benefits overhead.', 'icon' => '<line x1="12" y1="1" x2="12" y2="23" /><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />'],
                            ];
                        @endphp
                        @foreach ($benefits as $b)
                            <div class="what-benefit">
                                <div class="wb-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wb-icon-color)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">{!! $b['icon'] !!}</svg>
                                </div>
                                <div>
                                    <div class="wb-title">{{ $b['title'] }}</div>
                                    <div class="wb-desc">{{ $b['desc'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Right — Flow Diagram --}}
                    <div>
                        <div class="flow-diagram">
                            <div style="margin-bottom:36px;position:relative;z-index:1">
                                <div style="font-size:11px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:var(--tm);font-family:'Montserrat',sans-serif;margin-bottom:8px">How Integration Works</div>
                                <div style="height:2px;width:36px;background:linear-gradient(90deg, var(--primary), transparent);border-radius:2px"></div>
                            </div>

                            <div class="flow-row">
                                <div class="flow-node">
                                    <div class="flow-bubble client">
                                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" /><circle cx="12" cy="7" r="4" /></svg>
                                    </div>
                                    <div class="flow-label">Client</div>
                                    <div class="flow-sub">You &amp; Your Team</div>
                                </div>
                                <div class="flow-arrow">
                                    <div class="flow-line"></div>
                                    <div class="flow-arrow-label">Works with</div>
                                </div>
                                <div class="flow-node">
                                    <div class="flow-bubble team">
                                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" /><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" /></svg>
                                    </div>
                                    <div class="flow-label">Your Team</div>
                                    <div class="flow-sub">Core Staff</div>
                                </div>
                                <div class="flow-arrow">
                                    <div class="flow-line"></div>
                                    <div class="flow-arrow-label">Augmented by</div>
                                </div>
                                <div class="flow-node">
                                    <div class="flow-bubble expert">
                                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6" /><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" /></svg>
                                    </div>
                                    <div class="flow-label">Our Experts</div>
                                    <div class="flow-sub">Pre-Vetted Talent</div>
                                </div>
                            </div>

                            <div style="margin-top:36px;padding-top:24px;border-top:1px solid var(--br);display:flex;flex-wrap:wrap;gap:8px;position:relative;z-index:1">
                                @foreach (['Zero overhead', 'Day-one ready', 'Full control'] as $chip)
                                    <span style="display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:100px;background:rgba(var(--primary-rgb),0.10);border:1px solid rgba(var(--primary-rgb),0.22);font-size:11.5px;font-weight:600;color:var(--primary);font-family:'Montserrat',sans-serif;letter-spacing:0.03em">
                                        <span style="width:16px;height:16px;border-radius:50%;background:rgba(var(--primary-rgb),0.15);display:flex;align-items:center;justify-content:center">
                                            <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12" /></svg>
                                        </span>
                                        {{ $chip }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════ SECTION 4 — CATEGORIES ══════════ --}}
        <section class="sec sec-alt exp-section-bg">
            <div class="container">
                <div class="cats-header text-center">
                    <div class="badge-group">
<div class="section-badge">
                        <div class="section-robot-badge">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:none">
                        </div>
                        <div class="section-label-pill">
                            <span class="section-label-dot"></span>
                            <span class="section-label">Our Experts</span>
                        </div>
                    </div>
                    <div class="section-divider"></div>
</div>
                    <h2 class="section-heading">Browse Our <span class="accent">Specialized Roles</span></h2>
                    <p class="section-description">Choose from our diverse pool of vetted talent, ready to hit the ground running.</p>
                </div>

                <div class="cats-grid">
                    @php
                        $catIcons = [
                            1 => '<path d="m3 11 18-5v12L3 14v-3z" /><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6" />',
                            2 => '<circle cx="13.5" cy="6.5" r=".5" fill="currentColor" /><circle cx="17.5" cy="10.5" r=".5" fill="currentColor" /><circle cx="8.5" cy="7.5" r=".5" fill="currentColor" /><circle cx="6.5" cy="12.5" r=".5" fill="currentColor" /><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z" />',
                        ];
                        $codeIcon = '<polyline points="16 18 22 12 16 6" /><polyline points="8 6 2 12 8 18" />';
                    @endphp
                    @foreach (config('site.categories') as $cat)
                        <div class="cat-card exp-card-base">
                            <div class="exp-card-topline"></div>
                            <div class="cat-tag">
                                <span class="cat-tag-dot"></span>
                                {{ $cat['tag'] }}
                            </div>

                            <div class="cat-top">
                                <div class="exp-icon-wrap cat-icon-wrap">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--cat-icon-color)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">{!! $catIcons[$cat['id']] ?? $codeIcon !!}</svg>
                                </div>
                                <h3 class="cat-title">{{ $cat['title'] }}</h3>
                            </div>

                            <p class="cat-desc">{{ $cat['desc'] }}</p>

                            <ul class="cat-roles">
                                @foreach ($cat['roles'] as $r)
                                    <li>
                                        <span class="cat-check">
                                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--cat-check-color)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12" /></svg>
                                        </span>
                                        {{ $r }}
                                    </li>
                                @endforeach
                            </ul>

                            <div class="cat-glow"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ══════════ TRUST BADGE TICKER ══════════ --}}
        <section class="bt-section">
            <p class="bt-eyebrow">Certified &amp; Trusted Globally</p>

            <div class="bt-track-wrap">
                <div class="bt-track">
                    @php
                        $badges = [
                            ['l1' => 'TOP', 'l2' => 'JAVA DEVS', 'l3' => 'UNITED STATES 2025', 'label' => 'Top Java Developers'],
                            ['l1' => 'TOP', 'l2' => 'WEB DEVS', 'l3' => 'NORTH CAROLINA 2025', 'label' => 'Top Web Developers'],
                            ['l1' => 'TOP', 'l2' => 'SOFTWARE', 'l3' => 'NORTH CAROLINA 2025', 'label' => 'Top Software Developers'],
                            ['l1' => 'TOP', 'l2' => 'AI AGENTS', 'l3' => 'UNITED STATES 2025', 'label' => 'Top AI Agencies'],
                            ['l1' => 'TOP', 'l2' => 'RATED', 'l3' => 'GLOBAL 2025', 'label' => 'Top Rated Agency'],
                            ['l1' => 'TOP', 'l2' => 'MOBILE DEV', 'l3' => 'UNITED STATES 2025', 'label' => 'Top Mobile Developers'],
                            ['l1' => 'TOP', 'l2' => 'CLOUD', 'l3' => 'NORTH CAROLINA 2025', 'label' => 'Top Cloud Providers'],
                        ];
                        $tripled = array_merge($badges, $badges, $badges);
                    @endphp
                    @foreach ($tripled as $badge)
                        <div class="bt-badge">
                            <svg class="bt-hex" viewBox="0 0 54 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27 2L51 16V46L27 60L3 46V16L27 2Z" fill="#242420" stroke="#D81D1F" stroke-width="1.4" stroke-opacity="0.55" />
                                <text x="27" y="20" text-anchor="middle" fill="rgba(242,242,238,0.5)" font-size="5.5" font-family="Montserrat,sans-serif" font-weight="600" letter-spacing="0.4">{{ $badge['l1'] }}</text>
                                <text x="27" y="29" text-anchor="middle" fill="rgba(242,242,238,0.5)" font-size="5.5" font-family="Montserrat,sans-serif" font-weight="600" letter-spacing="0.4">{{ $badge['l2'] }}</text>
                                <text x="27" y="41" text-anchor="middle" fill="#ef4335" font-size="9.5" font-family="Poppins,sans-serif" font-weight="800">Clutch</text>
                                <text x="27" y="52" text-anchor="middle" fill="rgba(242,242,238,0.5)" font-size="5.5" font-family="Montserrat,sans-serif" font-weight="600" letter-spacing="0.4">{{ $badge['l3'] }}</text>
                            </svg>
                            <span class="bt-badge-label">{{ $badge['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="bt-trust-row">
                <div class="bt-clutch-block">
                    <span class="bt-clutch-logo">Clutch</span>
                    <div class="bt-clutch-info">
                        <div class="bt-rating-row">
                            <span class="bt-score">5.0</span>
                            <div class="bt-stars">
                                @for ($i = 0; $i < 5; $i++)<span class="bt-star">★</span>@endfor
                            </div>
                        </div>
                        <span class="bt-reviews">14 Reviews on Clutch</span>
                    </div>
                </div>

                <div class="bt-divider"></div>

                <div class="bt-tech-block">
                    <div class="bt-tech-icon">
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none">
                            <rect x="1" y="5" width="8" height="3" rx="1" fill="#0050a0" opacity=".8" />
                            <rect x="1" y="10" width="14" height="3" rx="1" fill="#0050a0" />
                            <rect x="1" y="15" width="10" height="3" rx="1" fill="#0050a0" opacity=".6" />
                            <circle cx="17" cy="16.5" r="3.5" fill="#D81D1F" opacity=".9" />
                        </svg>
                    </div>
                    <div class="bt-tech-info">
                        <span class="bt-tech-label">Trusted on</span>
                        <span class="bt-tech-name">Tech Behemoths</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════ SECTION 5 — TEAM ══════════ --}}
        <section class="sec exp-section-bg">
            <div class="container">
                <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:52px;flex-wrap:wrap;gap:22px">
                    <div>
                        <div class="badge-group">
<div class="section-badge">
                            <div class="section-robot-badge">
                                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:none">
                            </div>
                            <div class="section-label-pill">
                                <span class="section-label-dot"></span>
                                <span class="section-label">The Talent</span>
                            </div>
                        </div>
                        <div class="section-divider"></div>
</div>
                        <h2 class="section-heading">Meet Our <span class="accent">Experts</span></h2>
                        <p class="section-description">Hand-picked professionals with years of industry experience.</p>
                    </div>
                    <p class="section-description" style="max-width:340px;text-align:right;margin:0">
                        Every professional is screened for technical skill,
                        communication, and team compatibility.
                    </p>
                </div>

                <div class="team-grid">
                    @foreach (config('site.employees') as $emp)
                        <div class="emp-card exp-card-base">
                            <div class="emp-img-wrap">
                                <img src="{{ $emp['img'] }}" alt="{{ $emp['name'] }}" loading="lazy">
                            </div>
                            <div class="emp-info">
                                <div class="emp-name-row">
                                    <span class="emp-name">{{ $emp['name'] }}</span>
                                    <span style="display:flex;align-items:center;gap:5px;font-size:10px;font-weight:600;color:var(--primary);font-family:'Montserrat',sans-serif">
                                        <span style="width:6px;height:6px;border-radius:50%;background:var(--primary);box-shadow:0 0 6px var(--primary);display:inline-block"></span>
                                        Available
                                    </span>
                                </div>
                                <span class="emp-role">{{ $emp['role'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ══════════ SECTION 6 — VIDEO ══════════ --}}
        <section class="sec sec-alt exp-section-bg">
            <div class="container">
                <div>
                    <div class="badge-group">
                        <div class="section-badge">
                            <div class="section-robot-badge">
                                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:none">
                            </div>
                            <div class="section-label-pill">
                                <span class="section-label-dot"></span>
                                <span class="section-label">Team Culture</span>
                            </div>
                        </div>
                        <div class="section-divider"></div>
                    </div>
                    <h2 class="section-heading">See Us <span class="accent">In Action</span></h2>
                    <p class="section-description">A glimpse into our collaborative environment and high standards.</p>
                </div>

                <div class="vid-grid">
                    @foreach (['/assets/team3.webp', '/assets/team4.webp'] as $thumb)
                        <div>
                            <a href="https://www.youtube.com/channel/UCsAe_vu362aRnXjWme2Ci0w/" target="_blank" rel="noopener noreferrer" style="text-decoration:none;display:block">
                                <div class="vid-card exp-card-base">
                                    <div class="exp-card-topline"></div>
                                    <video poster="{{ $thumb }}" loop playsinline style="width:100%;height:100%;object-fit:cover;display:block"></video>
                                    <div class="vid-overlay">
                                        <div class="video-btn" style="flex-direction:column;gap:10px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
                                            <div class="vbtn-rings">
                                                <span class="vbtn-ring vbtn-ring-1"></span>
                                                <span class="vbtn-ring vbtn-ring-2"></span>
                                                <span class="vbtn-ring vbtn-ring-3"></span>
                                                <div class="vbtn-core" style="background:var(--primary)">
                                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="#ffffff"><polygon points="6 3 20 12 6 21 6 3" /></svg>
                                                </div>
                                            </div>
                                            <span class="vbtn-label" style="background:rgba(0,0,0,0.5);backdrop-filter:blur(4px);padding:6px 14px;font-size:0.7rem">Play</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ══════════ FAQ ══════════ --}}
        <section class="faq-section-bg">
            <div class="faq-inner">
                <div>
                    <div class="badge-group">
                      <div class="section-badge">
                        <div class="section-robot-badge">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:none">
                        </div>
                        <div class="section-label-pill">
                            <span class="section-label-dot"></span>
                            <span class="section-label">Have Questions?</span>
                        </div>
                    </div>
                    <div class="section-divider"></div>
                        </div>

                    <h2 class="section-heading">Frequently Asked <br><span style="color:var(--primary)">Questions</span></h2>
                </div>

                <div class="faq-list">
                    @php
                        $faqs = [
                            ['q' => 'What technologies do you use to build modern web applications?', 'a' => 'We primarily work with Next.js, React, and Tailwind CSS for front-end development. On the backend we leverage Node.js, PostgreSQL, and cloud infrastructure on AWS and Vercel ensuring scalable, maintainable, and performant solutions for every project.'],
                            ['q' => 'How long does a typical project take from kickoff to launch?', 'a' => 'Project timelines vary based on scope and complexity. A focused landing page or blog can ship in 1–2 weeks, while a full-featured SaaS product typically spans 8–16 weeks. We share a detailed roadmap during our discovery phase so you always know what to expect.'],
                            ['q' => 'Do you offer post-launch support and maintenance?', 'a' => 'Absolutely. We offer flexible retainer packages covering bug fixes, performance monitoring, feature iterations, and security updates. Our goal is to be a long-term partner, not just a delivery team.'],
                            ['q' => 'Can you work with an existing codebase or design system?', 'a' => 'Yes we regularly integrate with existing codebases, component libraries, and design systems. We conduct a thorough audit before committing to a scope so there are no surprises mid-project.'],
                            ['q' => 'How do we get started working together?', 'a' => "Simply fill out the contact form on this page or email us directly at  We'll schedule a free 30-minute discovery call to understand your goals and outline the best path forward."],
                        ];
                    @endphp
                    @foreach ($faqs as $item)
                        <div class="faq-item">
                            <button class="faq-trigger" type="button" aria-expanded="false">
                                <span class="faq-q">{{ $item['q'] }}</span>
                                <div class="faq-icon-wrap"><span class="faq-icon">+</span></div>
                            </button>
                            <div class="faq-body">
                                <div class="faq-body-inner"><p>{{ $item['a'] }}</p></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
</div>
@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('.pw-staff');
    if (!root) return;

    // Theme-aware robot images
    function syncRobots() {
        var dark = document.documentElement.getAttribute('data-theme') === 'dark';
        root.querySelectorAll('.robot-light').forEach(function (el) { el.style.display = dark ? 'none' : 'block'; });
        root.querySelectorAll('.robot-dark').forEach(function (el) { el.style.display = dark ? 'block' : 'none'; });
    }
    syncRobots();
    new MutationObserver(syncRobots).observe(document.documentElement, { attributes: true, attributeFilter: ['data-theme'] });

    // FAQ accordion
    root.querySelectorAll('.faq-item').forEach(function (item) {
        var trigger = item.querySelector('.faq-trigger');
        var icon = item.querySelector('.faq-icon');
        trigger.addEventListener('click', function () {
            var open = item.classList.toggle('faq-open');
            trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
            if (icon) icon.textContent = open ? '−' : '+';
        });
    });
})();
</script>
@endpush
