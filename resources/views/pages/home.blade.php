@extends('layouts.app')

@section('title', 'Corammers')
@section('meta_description', 'Corammers builds high-performance websites, mobile apps, AI solutions and growth marketing. Engineering with vision — human + AI.')

@push('styles')
{{-- The centre hero card is the LCP element — fetch it at top priority --}}
<link rel="preload" as="image" href="/assets/hero/hero3.webp" fetchpriority="high">
<link rel="stylesheet" href="{{ asset_v('css/pages/home.css') }}">
@endpush

@section('content')
@php
    // Video URLs for hero (kept verbatim from page.js)
    $VIDEO_HUMAN = 'https://d8j0ntlcm91z4.cloudfront.net/user_38xzZboKViGWJOttwIXH07lWA1P/hf_20260424_090051_64ea5059-da6b-492b-a171-aa7ecc767dc3.mp4';
    $VIDEO_AI = 'https://d8j0ntlcm91z4.cloudfront.net/user_38xzZboKViGWJOttwIXH07lWA1P/hf_20260424_093237_ff0ddc63-c068-4e29-96da-fdd0e40af133.mp4';

    $heroImages = [
        ['src' => '/assets/hero/hero1.webp', 'alt' => 'XPortfolio Preview'],
        ['src' => '/assets/hero/hero2.webp', 'alt' => 'Space Voyage Preview'],
        ['src' => '/assets/hero/hero3.webp', 'alt' => 'Stellar AI Preview'],
        ['src' => '/assets/hero/hero4.webp', 'alt' => 'Vex Ventures Preview'],
        ['src' => '/assets/hero/hero5.webp', 'alt' => 'Project Demo'],
    ];
    $cardPos = [
        ['left' => 5,   'top' => 32, 'dragX' => '-120px', 'rotate' => -4, 'scale' => 0.95, 'rotateY' => -12],
        ['left' => 150, 'top' => 32, 'dragX' => '-60px',  'rotate' => -3, 'scale' => 1.0,  'rotateY' => 0],
        ['left' => 285, 'top' => 32, 'dragX' => '0px',    'rotate' => 1,  'scale' => 1.1,  'rotateY' => 0],
        ['left' => 420, 'top' => 32, 'dragX' => '60px',   'rotate' => 1,  'scale' => 1.0,  'rotateY' => -1],
        ['left' => 555, 'top' => 32, 'dragX' => '120px',  'rotate' => 5,  'scale' => 0.95, 'rotateY' => 8],
    ];
 $techStack = ['React', 'Next.js', 'Node.js', 'Express.js', 'Laravel', 'Vue.js', 'TypeScript', 'JavaScript', 'PHP', 'Python', 'HTML5', 'CSS', 'TailwindCSS', 'MongoDB', 'MySQL', 'Firebase', 'Docker', 'Git', 'GitHub', 'Vercel', 'GraphQL', 'Figma'];
    $techTripled = array_merge($techStack, $techStack, $techStack);
    // Robot badge helper markup (light + dark image swap)
    $robot = '<img loading="lazy" decoding="async" class="robot-light" src="/assets/robo.webp" alt="Robot"><img loading="lazy" decoding="async" class="robot-dark" src="/assets/robo.webp" alt="Robot">';
@endphp

<div class="pw-home page-main">

    {{-- ════════════════ HERO SECTION ════════════════ --}}
    <section class="hero-section" id="heroSection">

        {{-- Glow orb (visible only in dark via CSS) --}}
        <div aria-hidden="true" class="hero-glow"></div>

        {{-- Headline --}}
        <h1 class="hero-headline">
            <span class="hg hg-1">The vision</span>
            <span class="hg hg-2">of engineering</span>
            <span class="hero-line3">
                <span class="hero-is">is</span>
                <span class="video-icon">
                    {{-- 5.4MB mp4: deferred via data-src so it never blocks first paint --}}
                    <video autoplay loop muted playsinline preload="none" data-lazy-video>
                        <source data-src="{{ $VIDEO_HUMAN }}" type="video/mp4">
                    </video>
                </span>
                <span>human</span>
                <span class="hero-plus">+</span>
                <span class="video-icon">
                    {{-- 3.7MB mp4: deferred via data-src so it never blocks first paint --}}
                    <video autoplay loop muted playsinline preload="none" data-lazy-video>
                        <source data-src="{{ $VIDEO_AI }}" type="video/mp4">
                    </video>
                </span>
                <span>AI</span>
            </span>
        </h1>

        {{-- Cards stage --}}
        <div class="hero-cards-stage" id="heroStage">
            @foreach ($heroImages as $i => $img)
                <div class="hero-card-wrapper hero-card-{{ $i }}"
                     style="--drag-x:{{ $cardPos[$i]['dragX'] }};--card-rotate:{{ $cardPos[$i]['rotate'] }}deg;--card-scale:{{ $cardPos[$i]['scale'] }};--card-rotate-y:{{ $cardPos[$i]['rotateY'] }}deg;--card-delay:{{ 0.12 + $i * 0.14 }}s;left:{{ $cardPos[$i]['left'] }}px;top:{{ $cardPos[$i]['top'] }}px;z-index:1;">
                    <div class="hero-card-el">
                        <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" draggable="false" loading="{{ $i < 3 ? 'eager' : 'lazy' }}" decoding="async" @if ($i === 2) fetchpriority="high" @endif>
                    </div>
                </div>
            @endforeach

            {{-- Scribble decoration --}}
            <svg class="hero-scribble" viewBox="0 0 110 55" fill="none" aria-hidden="true">
                <path d="M8 42 Q20 8 40 28 Q58 46 72 18 Q86 -4 102 24" stroke="var(--accent)" stroke-width="3.5" stroke-linecap="round" fill="none"></path>
            </svg>
        </div>

        {{-- Description --}}
        <p class="hero-desc">
            We help businesses grow with high-performance mobile apps, modern websites,<br>
            smart SEO strategies, and scalable email solutions.
        </p>

        {{-- CTAs --}}
        <div class="hero-ctas">
            <a href="/contact" class="hero-btn hero-btn-primary">Contact Us</a>
            <a href="/portfolio" class="hero-btn hero-btn-secondary">Discover Our Work</a>
        </div>
    </section>

    {{-- ════════════════ ABOUT ════════════════ --}}
    <section class="home-section" style="padding-bottom: 0;">
        <div class="home-inner">
            <div class="about-label-row label-row">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="label-pill">
                    <span class="label-dot"></span>
                    <span class="label-text">About Our Agency</span>
                </div>
            </div>
            <div class="section-divider"></div>
            <h2 class="about-heading">
                Innovating the Future of <br>
                <span class="accent">Digital Solutions</span>
            </h2>
            <p class="about-sub">
                We are a team of passionate creators, engineers, and strategists dedicated to pushing the boundaries of what's possible in the digital world. Our mission is to empower businesses with cutting-edge technology.
            </p>
        </div>

        <div class="about-inner" style="margin-top: 3rem; width: 100%;">
            <div class="about-banner-wrap reveal" style="border-radius: 0;">
                <img loading="lazy" decoding="async" src="/assets/about.webp" alt="About Us" class="about-banner-img">
                <a href="https://www.youtube.com/@MediaCorammers" target="_blank" rel="noopener noreferrer" class="about-video-anchor">
                    <span class="video-btn">
                        <span class="vbtn-ring vbtn-ring-1"></span>
                        <span class="vbtn-ring vbtn-ring-2"></span>
                        <span class="vbtn-ring vbtn-ring-3"></span>
                        <span class="vbtn-core">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
                        </span>
                        <span class="vbtn-label">Play</span>
                    </span>
                </a>
                <div class="about-banner-glass">
                    <span class="glass-tag">Innovation First</span>
                    <p class="glass-text">We blend artistic creativity with technical excellence to build products that stand out.</p>
                </div>
                <div class="about-banner-overlay">
                    <h3 style="font-family:Poppins;font-size:2rem;color:#fff;margin:0 0 12px;font-weight:800;letter-spacing:-0.02em">United by Vision</h3>
                    <p style="font-family:Montserrat;font-size:1.05rem;color:rgba(255,255,255,0.9);max-width:540px;line-height:1.7;margin:0">
                        Our global team works around the clock to ensure your project is
                        delivered with the highest quality standards and innovative features.
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- ════════════════ SERVICES ════════════════ --}}
    @php
        $services = [
            ['num' => '01.', 'title' => 'AI Solutions', 'desc' => 'Harness the power of large language models, diffusion networks, and custom AI pipelines. We integrate intelligent automation into your workflow enhancing creativity, not replacing it.', 'bg' => 'linear-gradient(135deg,#100808 0%,#200c0c 35%,#2e1010 60%,#180808 100%)', 'glow' => 'rgba(255,90,60,0.12)', 'href' => '/services/ai'],
            ['num' => '02.', 'title' => 'Designing', 'desc' => 'From brand identity to pixel-perfect UI, we craft visual experiences that resonate. Our design language blends restraint with boldness clean grids, expressive type, and purposeful motion.', 'bg' => 'linear-gradient(135deg,#0c0516 0%,#1a0630 35%,#210840 60%,#100320 100%)', 'glow' => 'rgba(180,100,255,0.12)', 'href' => '/services/design'],
            ['num' => '03.', 'title' => 'Marketing', 'desc' => 'Data-driven strategies that convert. We build full-funnel campaigns across organic and paid channels, turning audience insights into measurable growth that compounds over time.', 'bg' => 'linear-gradient(135deg,#061208 0%,#0c2010 35%,#122814 60%,#071209 100%)', 'glow' => 'rgba(100,220,80,0.12)', 'href' => '/services/marketing'],
            ['num' => '04.', 'title' => 'Development', 'desc' => 'We engineer scalable, high-performance digital products from blazing-fast web apps to complex back-end architectures. Every line of code is written with purpose, precision, and longevity in mind.', 'bg' => 'linear-gradient(135deg,#060d14 0%,#0b1929 35%,#0d2035 60%,#071018 100%)', 'glow' => 'rgba(0,200,255,0.12)', 'href' => '/services/development'],
            ['num' => '05.', 'title' => 'Staff Augmentation', 'desc' => 'Scale your team instantly with pre-vetted, senior-level talent. We embed dedicated specialists developers, designers, and strategists directly into your workflow, giving you the agility to move fast without the overhead of full-time hiring.', 'bg' => 'linear-gradient(135deg,#080e14 0%,#0d1a22 35%,#122130 60%,#090f16 100%)', 'glow' => 'rgba(255,0,111,0.1)', 'href' => '/staff'],
        ];
    @endphp
    <section class="home-section svc-stack-section">
        <div class="home-inner">
            <div class="label-row">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="label-pill">
                    <span class="label-dot"></span>
                    <span class="label-text">What We Do</span>
                </div>
            </div>
            <div class="section-divider"></div>
            <h2 class="sec-heading">Our <span class="accent">Services</span></h2>
            <p class="sec-sub">We build, design, grow, and automate combining craft with technology to deliver digital experiences that captivate audiences and drive measurable results for ambitious brands.</p>

            <div class="svc-track" style="--panel-count:{{ count($services) }};">
                <div class="svc-sticky">
                    @foreach ($services as $i => $svc)
                        <div class="svc-panel" style="--i:{{ $i }};">
                            <div class="svc-panel-bg" style="background:{{ $svc['bg'] }};"></div>
                            <div class="svc-panel-glow" style="background:radial-gradient(ellipse at 72% 50%,{{ $svc['glow'] }} 0%,transparent 62%);"></div>
                            <div class="svc-panel-img-wrap"><img loading="lazy" decoding="async" src="/assets/service/{{ $i + 1 }}.webp" alt="{{ $svc['title'] }}"></div>
                            <div class="svc-panel-overlay"></div>
                            <div class="svc-panel-content">
                                <span class="svc-panel-num">{{ $svc['num'] }}</span>
                                <h3 class="svc-panel-title">{{ $svc['title'] }}</h3>
                                <p class="svc-panel-desc">{{ $svc['desc'] }}</p>
                                <a href="{{ $svc['href'] }}" class="svc-btn">
                                    View Work
                                    <span class="svc-btn-dots"><span></span><span></span><span></span></span>
                                </a>
                            </div>
                            <div class="svc-panel-bar"></div>
                        </div>
                    @endforeach
                    <div class="svc-progress" aria-hidden="true">
                        @foreach ($services as $i => $svc)
                            <span class="svc-progress-dot{{ $i === 0 ? ' is-active' : '' }}"></span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ════════════════ EXPERIENCE (Our Process) ════════════════ --}}
    @php
        $expCards = [
            ['step' => '01', 'title' => 'Discovery & Strategy', 'desc' => 'We start by deeply understanding your goals, audience, and challenges to craft a tailored digital strategy.', 'icon' => '<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><circle cx="16" cy="16" r="10" stroke="var(--accent)" stroke-width="2.2"/><line x1="23" y1="23" x2="31" y2="31" stroke="var(--accent)" stroke-width="2.2" stroke-linecap="round"/><circle cx="16" cy="16" r="4" fill="var(--accent)" opacity="0.35"/></svg>'],
            ['step' => '02', 'title' => 'Design & Prototype', 'desc' => 'Our designers craft pixel-perfect interfaces with intuitive UX, validated through rapid interactive prototypes.', 'icon' => '<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="4" y="4" width="28" height="28" rx="6" stroke="var(--accent)" stroke-width="2.2"/><path d="M10 26 L16 10 L22 22 L26 16" stroke="var(--accent)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="26" cy="16" r="2" fill="var(--accent)"/></svg>'],
            ['step' => '03', 'title' => 'Build & Develop', 'desc' => 'We engineer scalable, performant solutions using modern tech stacks — clean code, tested and production-ready.', 'icon' => '<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><polyline points="10,13 4,18 10,23" stroke="var(--accent)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><polyline points="26,13 32,18 26,23" stroke="var(--accent)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><line x1="20" y1="8" x2="16" y2="28" stroke="var(--accent)" stroke-width="2.2" stroke-linecap="round"/></svg>'],
            ['step' => '04', 'title' => 'Launch & Grow', 'desc' => 'We deploy, monitor, and continuously iterate — ensuring your product evolves with your users and market.', 'icon' => '<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><path d="M18 4 C18 4 28 8 28 20 L18 32 L8 20 C8 8 18 4 18 4Z" stroke="var(--accent)" stroke-width="2.2" stroke-linejoin="round"/><circle cx="18" cy="18" r="4" fill="var(--accent)" opacity="0.45"/><circle cx="18" cy="18" r="2" fill="var(--accent)"/></svg>'],
        ];
    @endphp
    <section class="home-section">
        <div class="home-inner">
            <div class="label-row">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="label-pill">
                    <span class="label-dot"></span>
                    <span class="label-text">How We Work</span>
                </div>
            </div>
            <div class="section-divider"></div>
            <h2 class="sec-heading">Our <span class="accent">Process</span></h2>
            <p class="sec-sub">From first idea to final launch, every step is intentional. Here's how we turn your vision into a world-class digital product.</p>

            <div class="exp-grid">
                @foreach ($expCards as $card)
                    <div class="exp-card">
                        <div class="exp-card-topline"></div>
                        <div class="exp-step-num">{{ $card['step'] }}</div>
                        <div class="exp-icon-wrap">{!! $card['icon'] !!}</div>
                        <h3 class="exp-title">{{ $card['title'] }}</h3>
                        <p class="exp-desc">{{ $card['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ════════════════ WHY CHOOSE US ════════════════ --}}
    @php
        $wcuBullets = [
            ['title' => 'Expert Team', 'text' => 'Senior engineers and designers with 5+ years of industry experience across diverse domains.', 'icon' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="6" r="3.5" stroke="var(--accent)" stroke-width="1.6"/><path d="M2 16c0-3.314 3.134-6 7-6s7 2.686 7 6" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round"/></svg>'],
            ['title' => 'Transparent Process', 'text' => 'Weekly updates, live dashboards, and open communication — no guesswork, ever.', 'icon' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><rect x="2" y="3" width="14" height="12" rx="2.5" stroke="var(--accent)" stroke-width="1.6"/><path d="M6 8.5h6M6 11.5h4" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round"/><path d="M6 5.5h2" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round"/></svg>'],
            ['title' => 'Performance-First', 'text' => 'We obsess over load times, Core Web Vitals, and scalable architecture by default.', 'icon' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M3 13L7 8.5L10.5 11L15 5" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="15" cy="5" r="1.5" fill="var(--accent)"/></svg>'],
            ['title' => 'Ongoing Support', 'text' => "We don't disappear after launch. Long-term partnerships are at the heart of what we do.", 'icon' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 2C5.134 2 2 5.134 2 9c0 1.628.542 3.13 1.453 4.33L2 16l2.82-1.38A6.944 6.944 0 0 0 9 16c3.866 0 7-3.134 7-7s-3.134-7-7-7z" stroke="var(--accent)" stroke-width="1.6" stroke-linejoin="round"/><path d="M6.5 9.5s.5 1.5 2.5 1.5 2.5-1.5 2.5-1.5" stroke="var(--accent)" stroke-width="1.4" stroke-linecap="round"/><circle cx="7" cy="8" r="0.8" fill="var(--accent)"/><circle cx="11" cy="8" r="0.8" fill="var(--accent)"/></svg>'],
        ];
        $wcuStats = [['value' => '200+', 'label' => 'Projects'], ['value' => '8yr', 'label' => 'Experience'], ['value' => '98%', 'label' => 'Retention']];
    @endphp
    <section class="home-section">
        <div class="home-inner">
            <div class="wcu-grid">
                {{-- IMAGE COLUMN --}}
                <div class="wcu-img-col">
                    <div class="wcu-img-stack">
                        <div class="wcu-img-glow"></div>
                        <div class="wcu-frame-tl"></div>
                        <div class="wcu-frame-br"></div>
                        <div class="wcu-img-wrap">
                            <img src="/assets/chooseSection.webp" alt="Team collaborating on a digital project" loading="lazy">
                            <div class="wcu-img-overlay"></div>
                            <div class="wcu-stats-strip">
                                @foreach ($wcuStats as $s)
                                    <div class="wcu-stat-card">
                                        <span class="wcu-stat-value">{{ $s['value'] }}</span>
                                        <span class="wcu-stat-label">{{ $s['label'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="wcu-trust-badge">
                            <div class="wcu-trust-avatar-row">
                                @foreach (['/assets/im1.webp', '/assets/im2.webp', '/assets/im3.webp'] as $url)
                                    <div class="wcu-trust-avatar"><img src="{{ $url }}" alt="client" loading="lazy"></div>
                                @endforeach
                            </div>
                            <div>
                                <p class="wcu-trust-title">Trusted by 200+ clients</p>
                                <p class="wcu-trust-rating">★★★★★ 5.0 average rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CONTENT COLUMN --}}
                <div>
                    <div class="label-row">
                        <div class="robot-badge">{!! $robot !!}</div>
                        <div class="label-pill">
                            <span class="label-dot"></span>
                            <span class="label-text">Why Choose Us</span>
                        </div>
                    </div>
                    <div class="section-divider"></div>
                    <h2 class="sec-heading">
                        We Build More Than<br>
                        <span class="accent wcu-heading-underline">Products —</span>
                        <span class="wcu-trust-word">We Build Trust</span>
                    </h2>
                    <p class="sec-sub" style="opacity: 0.9;">Choosing the right partner is everything. We combine technical excellence with creative ambition and a relentless focus on your success — from first commit to final launch and beyond.</p>

                    <div class="wcu-bullets-list">
                        @foreach ($wcuBullets as $b)
                            <div class="wcu-bullet-card">
                                <div class="wcu-bullet-icon-wrap">{!! $b['icon'] !!}</div>
                                <div style="flex:1">
                                    <p class="wcu-bullet-title">{{ $b['title'] }}</p>
                                    <p class="wcu-bullet-text">{{ $b['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="#" onclick="openCalendlyModal(event)" style="text-decoration:none">
                        <div class="wcu-btn-container">
                            <div class="wcu-btn-base"><span>Start Your Journey</span></div>
                            <div class="wcu-btn-hover"><span>Let's Build It</span></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    

    {{-- ════════════════ PORTFOLIO ════════════════ --}}
    @php
        $collage = [
            ['src' => '/assets/project/web/1.webp', 'title' => 'ProBuild — Construction', 'desc' => 'Next-gen architectural excellence', 'style' => 'grid-column:1/2;grid-row:1/3;height:420px;', 'class' => 'pf-collage-card-tall'],
            ['src' => '/assets/project/custom/3.webm', 'title' => 'EasyBridge — Fintech', 'desc' => 'Seamless mortgage application platform', 'style' => 'grid-column:2/3;grid-row:1/2;height:200px;', 'class' => ''],
            ['src' => '/assets/project/mobile/1.webm', 'title' => 'NASA Explorer', 'desc' => 'Interactive space exploration interface', 'style' => 'grid-column:3/4;grid-row:1/2;height:200px;', 'class' => ''],
            ['src' => '/assets/project/aiSol/3.webm', 'title' => 'n8n', 'desc' => 'AI', 'style' => 'grid-column:2/3;grid-row:2/3;height:210px;', 'class' => ''],
            ['src' => '/assets/project/uiux/7.webm', 'title' => 'Logo', 'desc' => 'FlexFlox', 'style' => 'grid-column:3/4;grid-row:2/3;height:210px;', 'class' => ''],
        ];
        $pfStats = [['value' => '200+', 'label' => 'Projects'], ['value' => '5+', 'label' => 'Years'], ['value' => '98%', 'label' => 'Satisfaction']];
    @endphp
    <section class="home-section">
        <div class="pf-home-inner">
            <div class="pf-left">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <div class="label-row" style="margin-bottom: 14px;">
                        <div class="robot-badge">{!! $robot !!}</div>
                        <div class="label-pill">
                            <span class="label-dot"></span>
                            <span class="label-text">Our Work</span>
                        </div>
                    </div>
                    <div class="section-divider" style="margin-bottom: 0;"></div>
                </div>
                <h2 class="sec-heading">Work That<br><span class="accent">Speaks</span> Loudly</h2>
                <p class="sec-sub" style="max-width: 420px; margin: 0;">From high-performance SaaS dashboards to immersive mobile experiences — every project we ship is crafted with precision, purpose, and a relentless focus on exceptional user experience.</p>
                <div class="pf-stats">
                    @foreach ($pfStats as $stat)
                        <div class="pf-stat">
                            <span class="pf-stat-val">{{ $stat['value'] }}</span>
                            <span class="pf-stat-label">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                </div>
                <a href="/portfolio" class="pf-cta-btn">View Portfolio</a>
            </div>

            <div class="pf-home-collage">
                @foreach ($collage as $item)
                    <a href="/portfolio" class="pf-collage-card {{ $item['class'] }}" style="{{ $item['style'] }}">
                        @if(str_ends_with($item['src'], '.webm') || str_ends_with($item['src'], '.mp4'))
                            <video autoplay loop muted playsinline>
                                <source src="{{ $item['src'] }}" type="{{ str_ends_with($item['src'], '.webm') ? 'video/webm' : 'video/mp4' }}">
                            </video>
                        @else
                            <img src="{{ $item['src'] }}" alt="{{ $item['title'] }}">
                        @endif
                        <div class="pf-card-grad"></div>
                        <div class="pf-card-content">
                            <h4 class="pf-card-title">{{ $item['title'] }}</h4>
                            <p class="pf-card-desc">{{ $item['desc'] }}</p>
                            <div class="pf-card-explore">
                                <span>Explore</span>
                                <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M1 6H11M6 1L11 6L6 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </div>
                        </div>
                        <div class="pf-card-badge"></div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ════════════════ REVIEWS ════════════════ --}}
    @php
        $reviews = [
            ['name' => 'Sarah Mitchell', 'role' => 'CEO, ProBuild', 'text' => 'the dashboard sync is literally so fast now and the team was super helpful with everything best agency we\'ve worked with tbh', 'image' => '/assets/project/web/1.webp', 'avatar' => '/assets/im1.webp'],
            ['name' => 'James Okafor', 'role' => 'CTO, EasyBridge', 'text' => 'needed a system that actually scales and these guys delivered everything works perfectly and the quality is top notch really happy with it', 'image' => '/assets/project/custom/3.webm', 'avatar' => null],
            ['name' => 'Lucas Bernhard', 'role' => 'Researcher, SpaceBound', 'text' => 'the app looks so good honestly didn\'t think it would be this nice but the design is just fire super easy to use too thanks guys', 'image' => '/assets/project/mobile/1.webm', 'avatar' => '/assets/im3.webp'],
            ['name' => 'Priya Nair', 'role' => 'Partner, Robotech', 'text' => 'handled the complicated ai stuff for our dashboard really well it was a tough project but they made it look easy solid results all around', 'image' => '/assets/project/custom/1.webm', 'avatar' => '/assets/im2.webp'],
            ['name' => 'Alex Chen', 'role' => 'Founder, DesignFlow', 'text' => 'love how clean the dashboard looks its exactly what i wanted the ui is super minimal and fast they really got our vision from day one', 'image' => '/assets/project/uiux/8.webm', 'avatar' => null],
            ['name' => 'Sophia Kim', 'role' => 'Manager, StayFit', 'text' => 'mobile app is super smooth no lag at all just a great user experience u can tell they care about the small details highly recommend', 'image' => '/assets/project/mobile/2.webm', 'avatar' => null],
            ['name' => 'Marcus Thorne', 'role' => 'Founder, TechFlow', 'text' => 'the custom software they built is a game changer for our warehouse operations super efficient and easy for the team to pick up definitely the best choice for us', 'image' => '/assets/project/custom/2.webm', 'avatar' => null],
            ['name' => 'Elena Rossi', 'role' => 'Director, VibeDesign', 'text' => 'honestly obsessed with the new branding and logo they did it just fits our vibe perfectly and the team was so chill to work with 10/10', 'image' => '/assets/project/uiux/6.webm', 'avatar' => null],
            ['name' => 'Omar Farouq', 'role' => 'Operations Lead, SyncAI', 'text' => 'honestly was skeptical about ai automation at first but the workflow they built just runs itself now we cut manual hours by like 70% which is insane', 'image' => '/assets/project/aiSol/1.webm', 'avatar' => null],
            ['name' => 'Nadia Petrov', 'role' => 'Creative Director, PixelMind', 'text' => 'the ai design visuals they created blew us away every concept was unique and on brand felt like they really understood our aesthetic from the very first call', 'image' => '/assets/project/aiDes/ai3.webp', 'avatar' => null],
        ];
        $star = '<svg width="18" height="18" viewBox="0 0 16 16" fill="#ffb33e" style="flex-shrink:0"><path d="M8 1.5L9.7 6H14.3L10.6 8.9L12 13.4L8 10.8L4 13.4L5.4 8.9L1.7 6H6.3L8 1.5Z" stroke="#ffb33e" stroke-width="1.2" stroke-linejoin="round"/></svg>';
    @endphp
    <section class="rev-section-bg">
        <div class="rev-inner">
            <div class="rev-header-wrap">
                <div style="max-width:700px">
                    <div class="label-row">
                        <div class="robot-badge">{!! $robot !!}</div>
                        <div class="label-pill">
                            <span class="label-dot"></span>
                            <span class="label-text">Testimonials</span>
                        </div>
                    </div>
                    <div class="section-divider"></div>
                    <h2 class="sec-heading">Words from our <br><span class="accent">Happy Clients</span></h2>
                </div>
                <div style="display:flex;gap:16px">
                    <button class="rev-nav-btn" data-rev-dir="-1" aria-label="Previous">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                    <button class="rev-nav-btn" data-rev-dir="1" aria-label="Next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </div>

            <div class="rev-carousel">
            <div class="rev-track-wrap" id="revTrackWrap">
                <div class="rev-track" id="revTrack">
                    @foreach ($reviews as $r)
                        <div class="rev-card">
                            <div class="rev-card-img">
                                @if(str_ends_with($r['image'], '.webm') || str_ends_with($r['image'], '.mp4'))
                                    <video autoplay loop muted playsinline>
                                        <source src="{{ $r['image'] }}" type="{{ str_ends_with($r['image'], '.webm') ? 'video/webm' : 'video/mp4' }}">
                                    </video>
                                @else
                                    <img loading="lazy" decoding="async" src="{{ $r['image'] }}" alt="{{ $r['name'] }}">
                                @endif
                            </div>
                            <div class="rev-card-body">
                                <div class="rev-stars">{!! str_repeat($star, 5) !!}</div>
                                <p class="rev-text">{{ $r['text'] }}</p>
                                <div class="rev-foot">
                                    <div class="rev-foot-left">
                                        <div class="rev-avatar-circle">
                                            @if ($r['avatar'])
                                                <img loading="lazy" decoding="async" src="{{ $r['avatar'] }}" alt="{{ $r['name'] }}">
                                            @else
                                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="12" fill="var(--accent)" fill-opacity="0.1"/><path d="M12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" stroke="var(--accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 19C18 16.2386 15.3137 14 12 14C8.68629 14 6 16.2386 6 19" stroke="var(--accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="rev-name">{{ $r['name'] }}</p>
                                            <p class="rev-role">{{ $r['role'] }}</p>
                                        </div>
                                    </div>
                                    <div class="rev-fiverr">fi</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </div>
    </section>

    @php
        $indCols = [
            [
                ['title' => 'Travel & Hospitality', 'desc' => 'Travel websites: Exceptional digital experiences that inspire travelers and increase direct bookings.', 'img' => '/assets/ind1.webp', 'link' => '/industries/travel'],
                ['title' => 'Public Sector', 'desc' => 'Public Sector websites: Secure, accessible, and citizen-focused digital platforms.', 'img' => '/assets/ind2.webp', 'link' => '/industries/public'],
            ],
            [
                ['title' => 'Roofing Companies', 'desc' => 'High-performance roofing sites: Local SEO and instant quotes that turn leads into customers.', 'img' => '/assets/roofing.webp', 'link' => '/industries/roofing'],
                ['title' => 'Law Firms', 'desc' => 'Attorney websites: Building trust and authority through secure lead capture and expert design.', 'img' => '/assets/law.webp', 'link' => '/industries/law'],
                ['title' => 'Auto Mobile', 'desc' => 'High-impact auto sites: Interactive inventory and seamless test-drive booking to drive sales.', 'img' => '/assets/auto.webp', 'link' => '/industries/auto'],
            ],
            [
                ['title' => 'Financial Advisors', 'desc' => 'Financial websites: Building credibility with secure portals and expert data visualization.', 'img' => '/assets/finance.webp', 'link' => '/industries/finance'],
                ['title' => 'Aesthetic Clinics', 'desc' => 'Premium beauty sites: Stunning galleries and seamless booking to elevate your clinic.', 'img' => '/assets/medicine.webp', 'link' => '/industries/aesthetic'],
                ['title' => 'E-Commerce', 'desc' => 'E-commerce websites: High-converting online stores that increase sales and improve customer experience.', 'img' => '/assets/ind7.webp', 'link' => '/industries/ecom'],
            ],
        ];
        $indStats = [['n' => '9+', 'l' => 'Industries'], ['n' => '200+', 'l' => 'Projects'], ['n' => '98%', 'l' => 'Satisfaction']];
    @endphp
    <section class="home-section">
        <div class="ind-inner">
            <div class="ind-left">
                <div class="label-row">
                    <div class="robot-badge">{!! $robot !!}</div>
                    <div class="label-pill">
                        <span class="label-dot"></span>
                        <span class="label-text">Our Expertise</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <h2 class="sec-heading">Industries<br><span class="accent">We Serve</span></h2>
                <p class="sec-sub" style="max-width: 340px;">We deliver tailored digital solutions across a wide range of industries, helping businesses scale, innovate, and stay competitive in the modern digital landscape.</p>
                <div class="ind-stats">
                    @foreach ($indStats as $s)
                        <div class="ind-stat">
                            <span class="ind-stat-val">{{ $s['n'] }}</span>
                            <span class="ind-stat-label">{{ $s['l'] }}</span>
                        </div>
                    @endforeach
                </div>
                <a href="/industry" class="ind-cta-btn">View More Sectors</a>
            </div>

            <div class="ind-grid">
                @foreach ($indCols as $ci => $col)
                    <div class="ind-col ind-col-{{ $ci }}">
                        @foreach ($col as $item)
                            <div class="ind-cell">
                                <a href="{{ $item['link'] ?? '#' }}" class="ind-card" style="display:block; text-decoration:none;">
                                    <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" loading="lazy">
                                    <div class="ind-card-overlay"></div>
                                    <div class="ind-card-content">
                                        <span class="ind-card-tag">Industry</span>
                                        <p class="ind-card-title">{{ $item['title'] }}</p>
                                        <div class="ind-card-desc-wrap">
                                            <p class="ind-card-desc">{{ $item['desc'] }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ════════════════ STATS ════════════════ --}}
    @php
        $stats = [
            ['value' => 200, 'suffix' => '+', 'label' => 'Projects Delivered', 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>'],
            ['value' => '1M', 'suffix' => '+', 'label' => 'Lines of Code', 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>'],
            ['value' => 100, 'suffix' => '+', 'label' => 'Happy Clients', 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>'],
            ['value' => 8, 'suffix' => '+', 'label' => 'Years of Experience', 'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>'],
        ];
    @endphp
    <section class="home-section">
        <div class="home-inner">
            <div class="stats-label-row label-row">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="label-pill">
                    <span class="label-dot"></span>
                    <span class="label-text">Our Impact</span>
                </div>
            </div>
            <div class="section-divider"></div>
            <h2 class="sec-heading">Numbers That <span class="accent">Speak</span> For Themselves</h2>
            <p class="sec-sub">Milestones built on trust, craft, and consistent delivery across every project.</p>

            <div class="stats-grid">
                @foreach ($stats as $stat)
                    <div class="stat-item">
                        <div class="stat-icon">{!! $stat['icon'] !!}</div>
                        <div class="stat-value">{{ $stat['value'] }}{{ $stat['suffix'] }}</div>
                        <p class="stat-label">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ════════════════ STAFF AUGMENTATION ════════════════ --}}
    @php
        $saImages = [
            ['src' => '/assets/team1.webp', 'alt' => 'Team collaboration'],
            ['src' => '/assets/team2.webp', 'alt' => 'Developer at work'],
            ['src' => '/assets/team3.webp', 'alt' => 'Professional meeting'],
            ['src' => '/assets/team4.webp', 'alt' => 'Remote developer'],
            ['src' => '/assets/team5.webp', 'alt' => 'Office team'],
        ];
        $saFeatures = [
            ['icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>', 'text' => 'Hire Remote Developers'],
            ['icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>', 'text' => 'Flexible Scaling'],
            ['icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4"/><path d="M4 6v12c0 1.1.9 2 2 2h14v-4"/><path d="M18 12a2 2 0 0 0-2 2c0 1.1.9 2 2 2h4v-4h-4z"/></svg>', 'text' => 'Save Time & Cost'],
            ['icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>', 'text' => 'Seamless Team Integration'],
        ];
        $saStar = '<svg width="16" height="16" viewBox="0 0 24 24" fill="var(--accent)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
    @endphp
    <section class="home-section sa-section">
        <div class="sa-inner">
            <div class="sa-left">
                <div>
                    <div class="label-row sa-label-row">
                        <div class="robot-badge">{!! $robot !!}</div>
                        <div class="label-pill">
                            <span class="label-dot"></span>
                            <span class="label-text">Staff Augmentation</span>
                        </div>
                    </div>
                    <div class="section-divider" style="margin-bottom: 0;"></div>
                </div>
                <h2 class="sec-heading">Scale Your Team with <span class="accent">Pre-Vetted</span> Developers</h2>
                <p class="sec-sub" style="max-width: 480px; margin: 0;">Quickly extend your team with skilled developers tailored to your needs. Our staff augmentation services help you scale efficiently without the overhead, delays, or risks of traditional hiring.</p>
                <div class="sa-features">
                    @foreach ($saFeatures as $f)
                        <span class="sa-feature-pill">
                            <span class="sa-feature-pill-icon">{!! $f['icon'] !!}</span>
                            {{ $f['text'] }}
                        </span>
                    @endforeach
                </div>
                <div class="sa-trust">
                    <div class="sa-stars">{!! str_repeat($saStar, 5) !!}</div>
                    <div class="sa-trust-divider"></div>
                    <span class="sa-trust-text"><strong>Excellent</strong> ·  projects delivered</span>
                    <div class="sa-trust-divider"></div>
                    <span class="sa-trust-text" style="font-size:12px;opacity:0.75">Trustindex</span>
                </div>
                <div class="sa-cta-row">
                    <a href="#" onclick="openCalendlyModal(event)" class="sa-btn">Book a Discovery Call</a>
                </div>
            </div>

            <div class="sa-grid">
                <div class="sa-grid-row">
                    @foreach (array_slice($saImages, 0, 3) as $img)
                        <div class="sa-img-wrap"><img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" loading="lazy"></div>
                    @endforeach
                </div>
                <div class="sa-grid-row">
                    @foreach (array_slice($saImages, 3, 2) as $img)
                        <div class="sa-img-wrap"><img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" loading="lazy"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

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
    <div class="ts-inner">
        {{-- Heading --}}
        <h2 class="ts-heading" style="text-align: center; color: #ffffff !important;">What Our <span style="color: #ff0000 !important;">Client</span> Say</h2>

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
                '<div id="tsLoader" style="position: absolute; inset: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #0c0c0c; color: #ffffff; z-index: 10; font-family: monospace; font-size: 1.1rem; transition: opacity 0.4s ease;">' +
                    '<div style="width: 36px; height: 36px; border: 3px solid rgba(255,255,255,0.15); border-top-color: #ff0000; border-radius: 50%; animation: tsSpin 1s linear infinite; margin-bottom: 16px;"></div>' +
                    '<div id="tsLoaderText">0%</div>' +
                '</div>' +
                '<iframe ' +
                    'id="tsIframe" ' +
                    'style="opacity: 0; transition: opacity 0.5s ease; width: 100%; height: 100%;" ' +
                    'src="https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0&modestbranding=1" ' +
                    'title="' + channel + '" ' +
                    'frameborder="0" ' +
                    'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ' +
                    'allowfullscreen>' +
                '</iframe>' +
                '<style>@keyframes tsSpin { to { transform: rotate(360deg); } }</style>';

            var loaderText = document.getElementById('tsLoaderText');
            var loader = document.getElementById('tsLoader');
            var iframe = document.getElementById('tsIframe');
            
            var progress = 0;
            var interval = setInterval(function() {
                progress += Math.floor(Math.random() * 12) + 4;
                if (progress >= 99) progress = 99;
                if (loaderText) loaderText.textContent = progress + '%';
            }, 60);

            iframe.onload = function() {
                clearInterval(interval);
                if (loaderText) loaderText.textContent = '100%';
                setTimeout(function() {
                    if (loader) loader.style.opacity = '0';
                    iframe.style.opacity = '1';
                    setTimeout(function() {
                        if (loader) loader.style.display = 'none';
                    }, 400);
                }, 150);
            };
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
 {{-- ════════════════ TECH TICKER ════════════════ --}}
    <section class="tt-section">
        <div class="tt-header">
            <h2 class="sec-heading" style="margin: 0;">Our <span class="accent">Technology</span> Stack</h2>
        </div>
        <div class="tt-viewport">
            <div class="tt-track">
                @php
                    $devicons = [
                        'React' => 'devicon-react-original',
                        'Next.js' => 'devicon-nextjs-plain',
                        'Node.js' => 'devicon-nodejs-plain',
                        'Express.js' => 'devicon-express-original',
                        'Laravel' => 'devicon-laravel-original',
                        'Vue.js' => 'devicon-vuejs-plain',
                        'TypeScript' => 'devicon-typescript-plain',
                        'JavaScript' => 'devicon-javascript-plain',
                        'PHP' => 'devicon-php-plain',
                        'Python' => 'devicon-python-plain',
                        'HTML5' => 'devicon-html5-plain',
                        'CSS' => 'devicon-css3-plain',
                        'TailwindCSS' => 'devicon-tailwindcss-original',
                        'MongoDB' => 'devicon-mongodb-plain',
                        'MySQL' => 'devicon-mysql-plain',
                        'Firebase' => 'devicon-firebase-plain',
                        'Docker' => 'devicon-docker-plain',
                        'Git' => 'devicon-git-plain',
                        'GitHub' => 'devicon-github-original',
                        'Vercel' => 'devicon-vercel-original',
                        'GraphQL' => 'devicon-graphql-plain',
                        'Figma' => 'devicon-figma-plain'
                    ];
                    $techs = array_keys($devicons);
                    $techTripled = array_merge($techs, $techs, $techs);
                @endphp
                @foreach ($techTripled as $tech)
                    <div class="tt-card">
                        <div class="tt-icon">
                            <i class="{{ $devicons[$tech] ?? 'devicon-code-plain' }}" style="font-size: clamp(2rem, 4.5vw, 3.2rem); color: var(--soft-text); transition: color 0.35s ease;"></i>
                        </div>
                        <span class="tt-label">{{ $tech }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- ════════════════ CONTACT BANNER ════════════════ --}}
    <section class="cb-section home-section">
        <div class="cb-container">
            <div class="cb-box">
                <div class="cb-bg-lines">
                    <svg width="100%" height="100%" viewBox="0 0 1200 400" preserveAspectRatio="none">
                        <path d="M0 100 Q 300 50 600 100 T 1200 100" stroke="black" fill="transparent" stroke-width="2"></path>
                        <path d="M0 200 Q 300 150 600 200 T 1200 200" stroke="black" fill="transparent" stroke-width="2"></path>
                        <path d="M0 300 Q 300 250 600 300 T 1200 300" stroke="black" fill="transparent" stroke-width="2"></path>
                        <circle cx="100" cy="100" r="80" stroke="black" fill="transparent" stroke-width="1"></circle>
                        <circle cx="1100" cy="300" r="120" stroke="black" fill="transparent" stroke-width="1"></circle>
                        <rect x="400" y="50" width="40" height="40" stroke="black" fill="transparent" stroke-width="1" transform="rotate(45 420 70)"></rect>
                        <rect x="800" y="320" width="30" height="30" stroke="black" fill="transparent" stroke-width="1" transform="rotate(15 815 335)"></rect>
                    </svg>
                </div>
                <div class="cb-label-pill">
                    <span class="cb-label-dot"></span>
                    <span class="cb-label-text">Ready to Begin</span>
                </div>
                <h2 class="cb-heading">Have a Project in Mind?<br>Let's Build It.</h2>
                <p class="cb-sub">Whether you're starting from scratch or scaling an existing product, we'd love to hear about it. Send us a message and we'll get back to you within 24 hours.</p>
                <div class="cb-btn-row">
                    <a href="#" onclick="openCalendlyModal(event)" class="cb-btn-primary">
                        Get in Touch
                    </a>
                    <a href="/portfolio" class="cb-btn-secondary">View Portfolio</a>
                </div>
                <p class="cb-micro">Expert Guidance · Scalable Solutions · Global Delivery</p>
            </div>
        </div>
    </section>

{{-- ── Calendly Modal ── --}}
<div class="cal-modal" id="calModal" aria-hidden="true">
    <div class="cal-modal-backdrop" onclick="closeCalendlyModal()"></div>
    <div class="cal-modal-box" role="dialog" aria-modal="true" aria-labelledby="calModalTitle">
        <button class="cal-modal-close" type="button" aria-label="Close modal" onclick="closeCalendlyModal()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
        <div class="cal-modal-content">
            <h2 class="cal-modal-title">Book a <span style="color:var(--accent-color)">Consultation</span></h2>
            <div class="calendly-inline-widget" data-url="https://calendly.com/mshayantariq/schedule-a-meeting?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:280px;height:700px;width:100%"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        </div>
    </div>
</div>

<script>
    function openCalendlyModal(event) {
        if (event) {
            event.preventDefault();
            event.stopPropagation();
        }
        var modal = document.getElementById('calModal');
        var cc = document.getElementById('customCursor');
        if (modal) {
            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            if (cc) cc.style.display = 'none';
        }
    }

    function closeCalendlyModal() {
        var modal = document.getElementById('calModal');
        var cc = document.getElementById('customCursor');
        if (modal) {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            if (cc) cc.style.display = '';
        }
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeCalendlyModal();
    });
</script>

</div>
@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('.pw-home');
    if (!root) return;

    /* ── Reviews: seamless infinite marquee ── */
    var track = document.getElementById('revTrack');
    var wrap = document.getElementById('revTrackWrap');
    if (track && wrap) {
        var originals = Array.prototype.slice.call(track.children);
        var N = originals.length;
        
        var SPEED = 1.2; // px per frame
        var currentScroll = 0;
        var manualVelocity = 0;
        var isHovered = false;
        var setWidth = 0;
        var rAF = null;

        function setup() {
            while (track.children.length > N) track.removeChild(track.lastChild);
            if (!N) return;
            var cs = getComputedStyle(track);
            var gap = parseFloat(cs.columnGap || cs.gap || '28') || 28;
            setWidth = 0;
            originals.forEach(function (c) { setWidth += c.getBoundingClientRect().width + gap; });
            var wrapWidth = wrap.getBoundingClientRect().width;
            var need = Math.max(2, Math.ceil(wrapWidth / setWidth) + 2);
            var frag = document.createDocumentFragment();
            for (var k = 1; k < need; k++) {
                originals.forEach(function (c) { frag.appendChild(c.cloneNode(true)); });
            }
            track.appendChild(frag);
            track.style.animation = 'none';
        }

        function tick() {
            if (!isHovered && Math.abs(manualVelocity) < 0.1) {
                currentScroll += SPEED;
            }
            
            if (Math.abs(manualVelocity) > 0.1) {
                currentScroll += manualVelocity;
                manualVelocity *= 0.92; // friction
            } else {
                manualVelocity = 0;
            }

            if (setWidth > 0) {
                if (currentScroll >= setWidth) currentScroll -= setWidth;
                if (currentScroll < 0) currentScroll += setWidth;
                track.style.transform = 'translate3d(' + (-currentScroll) + 'px, 0, 0)';
            }
            rAF = requestAnimationFrame(tick);
        }

        setup();
        rAF = requestAnimationFrame(tick);

        track.addEventListener('mouseenter', function() { isHovered = true; });
        track.addEventListener('mouseleave', function() { isHovered = false; });
        track.addEventListener('touchstart', function() { isHovered = true; }, {passive: true});
        track.addEventListener('touchend', function() { isHovered = false; });

        // Arrows add smooth manual scrolling velocity
        root.querySelectorAll('.rev-nav-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var dir = parseInt(btn.getAttribute('data-rev-dir'), 10);
                manualVelocity += dir * 45; // inject velocity (45px/frame initially)
            });
        });

        var rt;
        window.addEventListener('resize', function () { clearTimeout(rt); rt = setTimeout(setup, 200); });
    }

    /* ── Hero mouse-repel (optional flourish) ── */
    var section = document.getElementById('heroSection');
    var stage = document.getElementById('heroStage');
    if (section && stage && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
        var cardsEl = stage.querySelectorAll('.hero-card-el');
        var wrappers = stage.querySelectorAll('.hero-card-wrapper');
        var state = Array.from(cardsEl).map(function () { return { curX: 0, curY: 0, tgtX: 0, tgtY: 0, cx: 0, cy: 0, w: 200 }; });
        var mouse = { x: 0, y: 0, inside: false };
        var raf = null, enabled = false;
        /* Card centres are static page coordinates once the entrance settles —
           measure them ONCE (and on resize), never inside the rAF loop. The
           loop below is then write-only: zero forced reflows per frame. */
        function measureCards() {
            wrappers.forEach(function (wrp, i) {
                var r = wrp.getBoundingClientRect();
                state[i].cx = r.left + window.scrollX + r.width / 2;
                state[i].cy = r.top + window.scrollY + r.height / 2;
                state[i].w = r.width;
            });
        }
        setTimeout(function () { measureCards(); enabled = true; }, 1400);
        var mrt;
        window.addEventListener('resize', function () { clearTimeout(mrt); mrt = setTimeout(measureCards, 200); });
        var clamp = function (v, lo, hi) { return Math.max(lo, Math.min(hi, v)); };
        var lerp = function (a, b, t) { return a + (b - a) * t; };
        function tick() {
            raf = null;
            if (!enabled) { raf = requestAnimationFrame(tick); return; }
            var moving = false;
            var closest = -1, min = Infinity;
            if (mouse.inside) {
                state.forEach(function (s, i) {
                    var dx = mouse.x - s.cx, dy = mouse.y - s.cy, d = Math.sqrt(dx * dx + dy * dy);
                    if (d < min) { min = d; closest = i; }
                });
            }
            cardsEl.forEach(function (card, i) {
                var s = state[i];
                var MAX = s.w * 0.38;
                if (mouse.inside) {
                    var dx = mouse.x - s.cx, dy = mouse.y - s.cy, dist = Math.sqrt(dx * dx + dy * dy);
                    if (i === closest && dist < s.w * 1.38) {
                        s.tgtX = clamp(dx * 0.55, -MAX, MAX); s.tgtY = clamp(dy * 0.55, -MAX, MAX);
                    } else {
                        var t = Math.max(0, 1 - dist / (s.w * 2.3)), inf = t * t;
                        s.tgtX = clamp(-dx * inf * 1.1, -MAX, MAX); s.tgtY = clamp(-dy * inf * 1.1, -MAX, MAX);
                    }
                } else { s.tgtX = 0; s.tgtY = 0; }
                s.curX = lerp(s.curX, s.tgtX, 0.1); s.curY = lerp(s.curY, s.tgtY, 0.1);
                card.style.transform = 'translate3d(' + s.curX.toFixed(2) + 'px,' + s.curY.toFixed(2) + 'px,0)';
                if (Math.abs(s.curX - s.tgtX) > 0.05 || Math.abs(s.curY - s.tgtY) > 0.05) moving = true;
            });
            if (mouse.inside || moving) raf = requestAnimationFrame(tick);
        }
        section.addEventListener('mousemove', function (e) { mouse = { x: e.pageX, y: e.pageY, inside: true }; if (!raf) raf = requestAnimationFrame(tick); });
        section.addEventListener('mouseleave', function () { mouse.inside = false; if (!raf) raf = requestAnimationFrame(tick); });
    }
})();
</script>
@endpush
