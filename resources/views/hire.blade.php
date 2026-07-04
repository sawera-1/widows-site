@extends('layouts.app')

@section('title', 'Hire Top Talent On-Demand — CORAMMERS')
@section('description', 'Hire vetted developers, marketers, and AI experts on-demand. Scale your team with pre-vetted professionals who integrate seamlessly into your workflow.')

@push('styles')
    @vite(['resources/css/pages/hire.css'])
@endpush

@push('scripts')
    @vite(['resources/js/pages/hire.js'])
@endpush

@php
/* ─────────────────────────────────────────────
   DATA — mirrored from Next.js siteData.js
───────────────────────────────────────────── */

$stats = [
    [
        'icon'   => '<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>',
        'number' => 100,
        'suffix' => '+',
        'label'  => 'Projects Delivered',
    ],
    [
        'icon'   => '<circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/>',
        'number' => 50,
        'suffix' => '+',
        'label'  => 'Clients Worldwide',
    ],
    [
        'icon'   => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        'number' => 5,
        'suffix' => '+',
        'label'  => 'Years Experience',
    ],
    [
        'icon'   => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
        'number' => 20,
        'suffix' => '+',
        'label'  => 'Experts Available',
    ],
];

$categories = [
    [
        'tag'   => 'Marketing',
        'icon'  => '<path d="m3 11 18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/>',
        'title' => 'Digital Marketing Experts',
        'desc'  => 'Purpose-built marketing talent focused exclusively on growing your agency and brand.',
        'roles' => ['Social Media Managers', 'SEO & AEO Specialists', 'Google Ads Managers', 'Email Marketers'],
    ],
    [
        'tag'   => 'Design',
        'icon'  => '<circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/>',
        'title' => 'Creative Design Talent',
        'desc'  => 'Skilled designers who bring your vision to life with precision and creative excellence.',
        'roles' => ['UI/UX Designers', 'Graphic Designers', 'Video Editors', 'Brand Strategists'],
    ],
    [
        'tag'   => 'Development',
        'icon'  => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>',
        'title' => 'Software Development Pros',
        'desc'  => 'Vetted developers who integrate seamlessly and contribute from day one.',
        'roles' => ['React / Next.js Developers', 'Laravel / PHP Developers', 'Mobile App Developers', 'AI & ML Engineers'],
    ],
];

$employees = [
    ['id' => 1, 'name' => 'Fiza Tariq', 'role' => 'UI/UX Designer', 'img' => 'assets/1.webp', 'tag' => 'React · Next.js', 'type' => 'Design'],
    ['id' => 2, 'name' => 'Muhammad Junaid', 'role' => 'Social Media Manager', 'img' => 'assets/2.webp', 'tag' => 'On-Page · AEO', 'type' => 'Marketing'],
    ['id' => 3, 'name' => 'Zafar', 'role' => 'Web Developer', 'img' => 'assets/3.webp', 'tag' => 'Figma · Prototyping', 'type' => 'Developer'],
    ['id' => 4, 'name' => 'Shayan Tariq', 'role' => 'Web Developer', 'img' => 'assets/4.webp', 'tag' => 'Meta · Google Ads', 'type' => 'Developer'],
    ['id' => 5, 'name' => 'Huzaifa', 'role' => 'Graphic Designer', 'img' => 'assets/5.webp', 'tag' => 'Node.js · Python', 'type' => 'Design'],
    ['id' => 6, 'name' => 'Alia', 'role' => 'Marketing Specialist', 'img' => 'assets/6.webp', 'tag' => 'HubSpot · Automation', 'type' => 'Marketing'],
    ['id' => 7, 'name' => 'Zain', 'role' => 'WordPress Developer', 'img' => 'assets/7.webp', 'tag' => 'Illustrator · Branding', 'type' => 'Developer'],
    ['id' => 8, 'name' => 'Maryam', 'role' => 'Web Developer', 'img' => 'assets/8.webp', 'tag' => 'Premiere · After Effects', 'type' => 'Developer'],
];

$process = [
    [
        'num'   => '01',
        'icon'  => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/>',
        'title' => 'Share Your Requirements',
        'desc'  => 'Tell us the role, skills, and timezone you need. We handle the rest from sourcing to vetting.',
    ],
    [
        'num'   => '02',
        'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'title' => 'We Source & Vet',
        'desc'  => 'Our team screens candidates rigorously — technical skills, soft skills, and culture fit.',
    ],
    [
        'num'   => '03',
        'icon'  => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>',
        'title' => 'Pay Only on Placement',
        'desc'  => 'Zero upfront risk. You pay only once your hire is placed, onboarded, and contributing.',
    ],
    [
        'num'   => '04',
        'icon'  => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'title' => 'Scale at Your Pace',
        'desc'  => 'Add more experts as your team grows. Our model flexes with your needs — up or down.',
    ],
];

$benefits = [
    [
        'icon'  => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>',
        'title' => '60% Payroll Savings',
        'desc'  => 'Hire world-class talent at a fraction of the local cost with full compliance via EOR.',
    ],
    [
        'icon'  => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'title' => '70% Faster Hiring',
        'desc'  => 'Skip the job board grind. We present pre-vetted candidates in days, not weeks.',
    ],
    [
        'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'title' => 'Full EOR Compliance',
        'desc'  => 'We own contracts, payroll, bonuses, and global compliance so you don\'t have to.',
    ],
    [
        'icon'  => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
        'title' => 'No Upfront Cost',
        'desc'  => '100% contingent model. You only pay when a hire is made and working.',
    ],
    [
        'icon'  => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
        'title' => 'Seamless Integration',
        'desc'  => 'Our talent works in your tools, your timezone, and your culture from day one.',
    ],
    [
        'icon'  => '<circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/>',
        'title' => 'Global Talent Pool',
        'desc'  => 'Access top professionals across 40+ countries — all vetted, all ready to contribute.',
    ],
];

$statsBar = [
    [
        'icon'  => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>',
        'num'   => '60%',
        'label' => 'Payroll Savings',
    ],
    [
        'icon'  => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'num'   => '70%',
        'label' => 'Faster Hiring',
    ],
    [
        'icon'  => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/>',
        'num'   => '100%',
        'label' => 'Contingent Model',
    ],
    [
        'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'num'   => '$0',
        'label' => 'Upfront Cost',
    ],
];
@endphp

@section('content')
<div class="hire-page-wrapper">

    {{-- ══════════════════════════════════════════════
         SECTION 1 — HERO
    ══════════════════════════════════════════════ --}}
    <section class="hire-hero">
        <div class="hire-hero-inner">

            {{-- LEFT --}}
            <div class="hire-hero-left hire-reveal">

                {{-- Label row: robot badge + pill --}}
                <div class="hire-pill-row">
                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <div class="hire-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-light-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-dark-img"  alt="Robot" width="32" height="32" style="object-fit:contain;display:none;">
                        </div>
                        <div style="width:54px;height:4px;background:linear-gradient(90deg,var(--hire-acc),transparent);border-radius:2px;margin-top:8px;"></div>
                    </div>
                    <div class="hire-pill">
                        <span class="hire-pill-dot"></span>
                        <span class="hire-pill-text">Staff Augmentation</span>
                    </div>
                </div>

                <h1 class="hire-hero-heading">
                    Hire Top Talent <span class="hire-accent">On-Demand</span> for Your Business Growth
                </h1>

                <p class="hire-hero-sub">
                    From developers to marketers and AI experts — scale your team
                    with vetted professionals who integrate seamlessly into your workflow.
                </p>

                <div class="hire-hero-btns">
                    <a href="{{ route('contact.index') }}" class="hire-btn-primary">Hire Talent</a>
                </div>

                {{-- Trust row --}}
                <div class="hire-trust-row">
                    <div class="hire-avatars">
                        @foreach(['assets/im1.webp','assets/im2.webp','assets/im3.webp'] as $av)
                            <div class="hire-avatar">
                                <img src="{{ asset($av) }}" alt="" loading="lazy">
                            </div>
                        @endforeach
                    </div>
                    <div style="margin-left:14px;">
                        <div class="hire-stars-row">
                            @for($i=0;$i<5;$i++)
                                <svg width="14" height="14" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            @endfor
                        </div>
                        <div class="hire-trust-text"><strong>500+</strong> projects delivered</div>
                    </div>
                </div>
            </div>

            {{-- RIGHT --}}
            <div class="hire-hero-right hire-reveal" style="transition-delay:0.15s;">

                {{-- Floating badge --}}
                <div class="hire-float-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/>
                        <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/>
                    </svg>
                    20+ Experts Ready
                </div>

                {{-- Main image --}}
                <div class="hire-hero-img-wrap">
                    <img src="{{ asset('assets/team1.webp') }}" alt="Team collaboration" loading="eager">
                    <div style="position:absolute;inset:0;background:linear-gradient(135deg,transparent 60%,rgba(216,29,31,0.06) 100%);pointer-events:none;"></div>
                </div>

                {{-- Floating card --}}
                <div class="hire-float-card">
                    <div class="hire-float-card-icon" style="background:linear-gradient(135deg,#d81d1f,#a80e10);">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
                            <path d="M7 4H17l-1 7a5 5 0 0 1-10 0L5 4z"/>
                            <path d="M5 9H3a2 2 0 0 0 0 4h2"/><path d="M19 9h2a2 2 0 0 1 0 4h-2"/>
                        </svg>
                    </div>
                    <div>
                        <div class="hire-float-card-num">100+</div>
                        <div class="hire-float-card-lbl">Projects Delivered</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════════
         SECTION 2 — STATS COUNTER
    ══════════════════════════════════════════════ --}}
    <section class="hire-sec hire-sec-alt">
        <div class="hire-container">

            <div class="hire-sec-header">
                <div class="hire-pill-row hire-reveal" style="justify-content:center; margin-bottom:16px;">
                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <div class="hire-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-light-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-dark-img"  alt="Robot" width="32" height="32" style="object-fit:contain;display:none;">
                        </div>
                        <div style="width:54px;height:4px;background:linear-gradient(90deg,var(--hire-acc),transparent);border-radius:2px;margin-top:8px;"></div>
                    </div>
                    <div class="hire-pill">
                        <span class="hire-pill-dot"></span>
                        <span class="hire-pill-text">By The Numbers</span>
                    </div>
                </div>
                <h2 class="hire-sec-heading hire-reveal" style="transition-delay:0.1s;">
                    Our <span class="hire-accent">Track Record</span>
                </h2>
            </div>

            <div class="hire-stats-grid">
                @foreach($stats as $i => $stat)
                    <div class="hire-stat-card hire-reveal" style="transition-delay:{{ $i * 0.1 }}s;">
                        <div class="hire-stat-icon-wrap">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                {!! $stat['icon'] !!}
                            </svg>
                        </div>
                        <span class="hire-stat-num" data-count="{{ $stat['number'] }}" data-suffix="{{ $stat['suffix'] }}">
                            0{{ $stat['suffix'] }}
                        </span>
                        <span class="hire-stat-label">{{ $stat['label'] }}</span>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
 <x-staff-augmentation-section-2 />      
    {{-- ══════════════════════════════════════════════
         SECTION 3 — WHAT IS STAFF AUGMENTATION
    ══════════════════════════════════════════════ --}}
    <section class="hire-sec hire-sec-alt">
        <div class="hire-container">
            <div class="hire-hero-inner" style="gap: clamp(40px, 6vw, 80px);">
                
                {{-- Left --}}
                <div class="hire-hero-left hire-reveal">
                    <div class="hire-pill-row">
                        <div style="display:flex;flex-direction:column;align-items:center;">
                            <div class="hire-robot-badge">
                                <img src="{{ asset('assets/robo.png') }}" class="hire-light-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                                <img src="{{ asset('assets/robo.png') }}" class="hire-dark-img"  alt="Robot" width="32" height="32" style="object-fit:contain;display:none;">
                            </div>
                            <div style="width:54px;height:4px;background:linear-gradient(90deg,var(--hire-acc),transparent);border-radius:2px;margin-top:8px;"></div>
                        </div>
                        <div class="hire-pill">
                            <span class="hire-pill-dot"></span>
                            <span class="hire-pill-text">How It Works</span>
                        </div>
                    </div>
                    
                    <h2 class="hire-sec-heading" style="text-align:left;margin-bottom:18px;">
                        What Is <span class="hire-accent">Staff Augmentation</span>?
                    </h2>
                    
                    <p class="hire-sec-sub" style="text-align:left;margin:0 0 32px 0;">
                        Staff augmentation allows you to extend your in-house team with specialized experts on a flexible basis. Whether you need an extra developer to hit a deadline or a full marketing squad to launch a campaign, we seamlessly integrate top-tier talent into your existing workflows.
                    </p>

                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;">
                        <div>
                            <div style="width:40px;height:40px;border-radius:10px;background:rgba(var(--hire-acc-rgb),0.1);display:flex;align-items:center;justify-content:center;color:var(--hire-acc);margin-bottom:12px;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                                </svg>
                            </div>
                            <h3 style="font-family:'Poppins',sans-serif;font-size:1.05rem;font-weight:700;color:var(--hire-fg);margin-bottom:6px;">Fast Onboarding</h3>
                            <p style="font-family:'Montserrat',sans-serif;font-size:0.85rem;color:var(--hire-fg2);line-height:1.6;">Skip the weeks of interviewing. We match you with experts in days.</p>
                        </div>
                        <div>
                            <div style="width:40px;height:40px;border-radius:10px;background:rgba(var(--hire-acc-rgb),0.1);display:flex;align-items:center;justify-content:center;color:var(--hire-acc);margin-bottom:12px;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                                    <polyline points="17 6 23 6 23 12"/>
                                </svg>
                            </div>
                            <h3 style="font-family:'Poppins',sans-serif;font-size:1.05rem;font-weight:700;color:var(--hire-fg);margin-bottom:6px;">Scale As Needed</h3>
                            <p style="font-family:'Montserrat',sans-serif;font-size:0.85rem;color:var(--hire-fg2);line-height:1.6;">Scale your team up or down based on your project cycle.</p>
                        </div>
                        <div>
                            <div style="width:40px;height:40px;border-radius:10px;background:rgba(var(--hire-acc-rgb),0.1);display:flex;align-items:center;justify-content:center;color:var(--hire-acc);margin-bottom:12px;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="1" x2="12" y2="23"/>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                                </svg>
                            </div>
                            <h3 style="font-family:'Poppins',sans-serif;font-size:1.05rem;font-weight:700;color:var(--hire-fg);margin-bottom:6px;">Cost Efficient</h3>
                            <p style="font-family:'Montserrat',sans-serif;font-size:0.85rem;color:var(--hire-fg2);line-height:1.6;">No overhead, no benefits costs, no long-term employment risks.</p>
                        </div>
                        <div>
                            <div style="width:40px;height:40px;border-radius:10px;background:rgba(var(--hire-acc-rgb),0.1);display:flex;align-items:center;justify-content:center;color:var(--hire-acc);margin-bottom:12px;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                </svg>
                            </div>
                            <h3 style="font-family:'Poppins',sans-serif;font-size:1.05rem;font-weight:700;color:var(--hire-fg);margin-bottom:6px;">Zero Risk</h3>
                            <p style="font-family:'Montserrat',sans-serif;font-size:0.85rem;color:var(--hire-fg2);line-height:1.6;">If you aren't satisfied in the first 2 weeks, we replace the talent.</p>
                        </div>
                    </div>
                </div>

                {{-- Right --}}
                <div class="hire-hero-right hire-reveal" style="transition-delay:0.15s;">
                    <div class="hire-hero-img-wrap" style="aspect-ratio:1/1;">
                        <img src="{{ asset('assets/team2.webp') }}" alt="Developers collaborating" loading="lazy">
                        <div style="position:absolute;inset:0;background:linear-gradient(to top, rgba(0,0,0,0.6) 0%, transparent 60%);pointer-events:none;"></div>
                        <div style="position:absolute;bottom:24px;left:24px;z-index:2;">
                            <div style="font-size:2rem;font-weight:800;color:#fff;line-height:1;font-family:'Poppins',sans-serif;">98%</div>
                            <div style="font-size:0.8rem;color:rgba(255,255,255,0.8);margin-top:4px;font-family:'Montserrat',sans-serif;">Retention Rate</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-badge-ticker />
    {{-- ══════════════════════════════════════════════
         SECTION 4 — CATEGORY CARDS (What We Hire For)
    ══════════════════════════════════════════════ --}}
    <section class="hire-sec hire-sec-alt">
        <div class="hire-container">

            <div class="hire-sec-header">
                <div class="hire-pill-row hire-reveal" style="justify-content:center; margin-bottom:16px;">
                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <div class="hire-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-light-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-dark-img"  alt="Robot" width="32" height="32" style="object-fit:contain;display:none;">
                        </div>
                        <div style="width:54px;height:4px;background:linear-gradient(90deg,var(--hire-acc),transparent);border-radius:2px;margin-top:8px;"></div>
                    </div>
                    <div class="hire-pill">
                        <span class="hire-pill-dot"></span>
                        <span class="hire-pill-text">What We Hire For</span>
                    </div>
                </div>
                <h2 class="hire-sec-heading hire-reveal" style="transition-delay:0.1s;">
                    Roles Across Every <span class="hire-accent">Discipline</span>
                </h2>
                <p class="hire-sec-sub hire-reveal" style="transition-delay:0.15s;">
                    Whether you need a marketing expert, a designer, or a developer — we place the right person in the right seat.
                </p>
            </div>

            <div class="hire-cats-grid">
                @foreach($categories as $ci => $cat)
                    <div class="hire-cat-card hire-reveal" style="transition-delay:{{ $ci * 0.12 }}s;">

                        <div class="hire-cat-tag">
                            <span class="hire-cat-tag-dot"></span>
                            {{ $cat['tag'] }}
                        </div>

                        <div class="hire-cat-icon-wrap">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                {!! $cat['icon'] !!}
                            </svg>
                        </div>

                        <h3 class="hire-cat-title">{{ $cat['title'] }}</h3>
                        <p class="hire-cat-desc">{{ $cat['desc'] }}</p>

                        <ul class="hire-cat-roles">
                            @foreach($cat['roles'] as $role)
                                <li>
                                    <span class="hire-cat-check">
                                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                    </span>
                                    {{ $role }}
                                </li>
                            @endforeach
                        </ul>

                        <div class="hire-cat-glow"></div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════════
         SECTION 5 — EMPLOYEE GRID + LOAD MORE
    ══════════════════════════════════════════════ --}}
    <section class="hire-sec">
        <div class="hire-container">

            <div class="hire-sec-header">
                <div class="hire-pill-row hire-reveal" style="justify-content:center; margin-bottom:16px;">
                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <div class="hire-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-light-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-dark-img"  alt="Robot" width="32" height="32" style="object-fit:contain;display:none;">
                        </div>
                        <div style="width:54px;height:4px;background:linear-gradient(90deg,var(--hire-acc),transparent);border-radius:2px;margin-top:8px;"></div>
                    </div>
                    <div class="hire-pill">
                        <span class="hire-pill-dot"></span>
                        <span class="hire-pill-text">Available Talent</span>
                    </div>
                </div>
                <h2 class="hire-sec-heading hire-reveal" style="transition-delay:0.1s;">
                    Meet Our <span class="hire-accent">Ready-to-Deploy</span> Experts
                </h2>
                <p class="hire-sec-sub hire-reveal" style="transition-delay:0.15s;">
                    Pre-vetted, available, and trained to integrate into your workflow from day one.
                </p>
            </div>

            <div class="hire-emp-grid" id="hireEmpGrid">
                @foreach($employees as $ei => $emp)
                    <div class="hire-emp-card exp-card-base" style="transition-delay:{{ ($ei % 4) * 0.08 }}s;">
                        <div class="hire-emp-img-wrap">
                            <img src="{{ asset($emp['img']) }}" alt="{{ $emp['name'] }}" loading="lazy">
                            <div class="hire-emp-img-overlay"></div>
                        </div>
                        <div class="hire-emp-info">
                            <div class="hire-emp-name-row">
                                <span class="hire-emp-name">{{ $emp['name'] }}</span>
                                <span class="hire-emp-avail">
                                    <span class="hire-emp-avail-dot"></span>
                                    Available
                                </span>
                            </div>
                            <span class="hire-emp-role">{{ $emp['role'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Load More --}}
            <div class="hire-load-more-wrap">
                <div class="hire-load-more-container" id="hireLoadMoreBtn">
                    <div class="hire-lm-overlay" aria-hidden="true">
                        <span class="hire-lm-text">Load More</span>
                        <span class="hire-lm-dots">
                            <span class="hire-lm-dot"></span>
                            <span class="hire-lm-dot"></span>
                            <span class="hire-lm-dot"></span>
                        </span>
                    </div>
                    <div class="hire-lm-buttons">
                        <button class="hire-lm-icon-btn" type="button">
                            <span class="hire-lm-dots-icon">
                                <span class="hire-lm-dot"></span>
                                <span class="hire-lm-dot"></span>
                                <span class="hire-lm-dot"></span>
                            </span>
                            <span class="hire-lm-spinner">
                                <span class="hire-lm-spin-ring"></span>
                            </span>
                        </button>
                        <button class="hire-lm-text-btn" type="button">Load More</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════════
         SECTION 6 — VIDEO CARD (YouTube link)
    ══════════════════════════════════════════════ --}}
    <section class="hire-sec hire-sec-alt">
        <div class="hire-container">

            <div class="hire-sec-header" style="margin-bottom: 40px;">
                <div class="hire-pill-row hire-reveal" style="justify-content:center; margin-bottom:16px;">
                    <div style="display:flex;flex-direction:column;align-items:center;">
                        <div class="hire-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-light-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                            <img src="{{ asset('assets/robo.png') }}" class="hire-dark-img"  alt="Robot" width="32" height="32" style="object-fit:contain;display:none;">
                        </div>
                        <div style="width:54px;height:4px;background:linear-gradient(90deg,var(--hire-acc),transparent);border-radius:2px;margin-top:8px;"></div>
                    </div>
                    <div class="hire-pill">
                        <span class="hire-pill-dot"></span>
                        <span class="hire-pill-text">Environment</span>
                    </div>
                </div>
                <h2 class="hire-sec-heading hire-reveal" style="margin-bottom: 12px;">
                    See Us <span class="hire-accent">In Action</span>
                </h2>
                <p class="hire-sec-sub hire-reveal" style="transition-delay:0.1s; text-align:center; max-width:600px; margin: 0 auto;">
                    A glimpse into our collaborative environment and high standards.
                </p>
            </div>

            <div class="hire-vid-wrap hire-reveal" style="transition-delay:0.15s;">
                <a href="https://www.youtube.com/channel/UCsAe_vu362aRnXjWme2Ci0w/" target="_blank" rel="noopener noreferrer" style="text-decoration:none;display:block;">
                    <div class="hire-vid-card exp-card-base">
                        <div class="exp-card-topline"></div>
                        <video poster="{{ asset('assets/team2.webp') }}" loop playsinline style="width:100%;height:100%;object-fit:cover;display:block;"></video>
                        <div class="hire-vid-overlay">
                            <div class="hire-vid-hover-bg"></div>
                            <div class="hire-video-btn">
                                <div class="hire-vbtn-rings">
                                    <span class="hire-vbtn-ring hire-vbtn-ring-1"></span>
                                    <span class="hire-vbtn-ring hire-vbtn-ring-2"></span>
                                    <span class="hire-vbtn-ring hire-vbtn-ring-3"></span>
                                    <div class="hire-vbtn-core">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="#ffffff">
                                            <polygon points="5 3 19 12 5 21 5 3"/>
                                        </svg>
                                    </div>
                                </div>
                                <span class="hire-vbtn-label">Play</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.youtube.com/channel/UCsAe_vu362aRnXjWme2Ci0w/" target="_blank" rel="noopener noreferrer" style="text-decoration:none;display:block;">
                    <div class="hire-vid-card exp-card-base" style="animation-delay: 0.1s;">
                        <div class="exp-card-topline"></div>
                        <video poster="{{ asset('assets/team3.webp') }}" loop playsinline style="width:100%;height:100%;object-fit:cover;display:block;"></video>
                        <div class="hire-vid-overlay">
                            <div class="hire-vid-hover-bg"></div>
                            <div class="hire-video-btn">
                                <div class="hire-vbtn-rings">
                                    <span class="hire-vbtn-ring hire-vbtn-ring-1"></span>
                                    <span class="hire-vbtn-ring hire-vbtn-ring-2"></span>
                                    <span class="hire-vbtn-ring hire-vbtn-ring-3"></span>
                                    <div class="hire-vbtn-core">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="#ffffff">
                                            <polygon points="5 3 19 12 5 21 5 3"/>
                                        </svg>
                                    </div>
                                </div>
                                <span class="hire-vbtn-label">Play</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>

   
    

  
    {{-- ══════════════════════════════════════════════
         SECTION 11 — FAQ (existing component)
    ══════════════════════════════════════════════ --}}
    <x-faq-section />

</div>
@endsection
