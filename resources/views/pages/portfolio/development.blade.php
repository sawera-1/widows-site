@extends('layouts.app')

@section('title', 'Development Portfolio — Corammers')
@section('meta_description', 'Development case studies by Corammers — production web and mobile projects, from architecture to launch.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/portfolio-development.css') }}">
@endpush

@php
    // ── Page-specific portfolio data (ported verbatim from the Next.js page;
    //    distinct from config('site.projects'), which holds different content) ──
    $tagWeb = [
        'Marketing'   => ['bg' => 'rgba(245,158,11,0.15)', 'border' => 'rgba(245,158,11,0.45)', 'color' => '#d97706', 'dot' => '#d97706'],
        'PHP'         => ['bg' => 'rgba(139,92,246,0.15)', 'border' => 'rgba(139,92,246,0.45)', 'color' => '#7c3aed', 'dot' => '#7c3aed'],
        'eCommerce'   => ['bg' => 'rgba(16,185,129,0.15)', 'border' => 'rgba(16,185,129,0.45)', 'color' => '#059669', 'dot' => '#059669'],
        'Laravel'     => ['bg' => 'rgba(239,68,68,0.15)',  'border' => 'rgba(239,68,68,0.45)',  'color' => '#dc2626', 'dot' => '#dc2626'],
        'SaaS'        => ['bg' => 'rgba(132,204,22,0.15)', 'border' => 'rgba(132,204,22,0.45)', 'color' => '#65a30d', 'dot' => '#65a30d'],
        'Construction'=> ['bg' => 'rgba(20,184,166,0.15)', 'border' => 'rgba(20,184,166,0.45)', 'color' => '#0d9488', 'dot' => '#0d9488'],
        'Legal'       => ['bg' => 'rgba(71,85,105,0.15)',  'border' => 'rgba(71,85,105,0.45)',  'color' => '#475569', 'dot' => '#475569'],
        'Luxury'      => ['bg' => 'rgba(217,119,6,0.15)',  'border' => 'rgba(217,119,6,0.45)',  'color' => '#b45309', 'dot' => '#b45309'],
        'Hospitality' => ['bg' => 'rgba(219,39,119,0.15)', 'border' => 'rgba(219,39,119,0.45)', 'color' => '#db2777', 'dot' => '#db2777'],
        'Real Estate' => ['bg' => 'rgba(37,99,235,0.15)',  'border' => 'rgba(37,99,235,0.45)',  'color' => '#2563eb', 'dot' => '#2563eb'],
        'Mobility'    => ['bg' => 'rgba(124,58,237,0.15)', 'border' => 'rgba(124,58,237,0.45)', 'color' => '#7c3aed', 'dot' => '#7c3aed'],
    ];
    $tagMobile = [
        'Marketing'   => ['bg' => 'rgba(245,158,11,0.15)', 'border' => 'rgba(245,158,11,0.45)', 'color' => '#d97706', 'dot' => '#d97706'],
        'React'       => ['bg' => 'rgba(139,92,246,0.15)', 'border' => 'rgba(139,92,246,0.45)', 'color' => '#7c3aed', 'dot' => '#7c3aed'],
        'eCommerce'   => ['bg' => 'rgba(16,185,129,0.15)', 'border' => 'rgba(16,185,129,0.45)', 'color' => '#059669', 'dot' => '#059669'],
        'Flutter'     => ['bg' => 'rgba(239,68,68,0.15)',  'border' => 'rgba(239,68,68,0.45)',  'color' => '#dc2626', 'dot' => '#dc2626'],
        'AI'          => ['bg' => 'rgba(132,204,22,0.15)', 'border' => 'rgba(132,204,22,0.45)', 'color' => '#65a30d', 'dot' => '#65a30d'],
        'Science'     => ['bg' => 'rgba(56,189,248,0.15)', 'border' => 'rgba(56,189,248,0.45)', 'color' => '#0ea5e9', 'dot' => '#0ea5e9'],
        'Art'         => ['bg' => 'rgba(236,72,153,0.15)', 'border' => 'rgba(236,72,153,0.45)', 'color' => '#db2777', 'dot' => '#db2777'],
        'Lifestyle'   => ['bg' => 'rgba(244,63,94,0.15)',  'border' => 'rgba(244,63,94,0.45)',  'color' => '#e11d48', 'dot' => '#e11d48'],
        'Travel'      => ['bg' => 'rgba(20,184,166,0.15)', 'border' => 'rgba(20,184,166,0.45)', 'color' => '#0d9488', 'dot' => '#0d9488'],
        'Fintech'     => ['bg' => 'rgba(34,197,94,0.15)',  'border' => 'rgba(34,197,94,0.45)',  'color' => '#16a34a', 'dot' => '#16a34a'],
        'Real Estate' => ['bg' => 'rgba(59,130,246,0.15)', 'border' => 'rgba(59,130,246,0.45)', 'color' => '#2563eb', 'dot' => '#2563eb'],
        'Wellness'    => ['bg' => 'rgba(168,85,247,0.15)', 'border' => 'rgba(168,85,247,0.45)', 'color' => '#9333ea', 'dot' => '#9333ea'],
        'Sports'      => ['bg' => 'rgba(234,179,8,0.15)',  'border' => 'rgba(234,179,8,0.45)',  'color' => '#ca8a04', 'dot' => '#ca8a04'],
    ];
    $tagCustom = [
        'Marketing' => ['bg' => 'rgba(245,158,11,0.12)', 'border' => 'rgba(245,158,11,0.4)', 'color' => '#d97706', 'dot' => '#d97706'],
        'PHP'       => ['bg' => 'rgba(139,92,246,0.12)', 'border' => 'rgba(139,92,246,0.4)', 'color' => '#7c3aed', 'dot' => '#7c3aed'],
        'eCommerce' => ['bg' => 'rgba(16,185,129,0.12)', 'border' => 'rgba(16,185,129,0.4)', 'color' => '#059669', 'dot' => '#059669'],
        'Laravel'   => ['bg' => 'rgba(239,68,68,0.12)',  'border' => 'rgba(239,68,68,0.4)',  'color' => '#dc2626', 'dot' => '#dc2626'],
        'SaaS'      => ['bg' => 'rgba(132,204,22,0.12)', 'border' => 'rgba(132,204,22,0.4)', 'color' => '#65a30d', 'dot' => '#65a30d'],
        'AI'        => ['bg' => 'rgba(216,29,31,0.12)', 'border' => 'rgba(216,29,31,0.4)', 'color' => '#D81D1F', 'dot' => '#D81D1F'],
        'Fintech'   => ['bg' => 'rgba(34,197,94,0.12)',  'border' => 'rgba(34,197,94,0.4)',  'color' => '#16a34a', 'dot' => '#16a34a'],
    ];

    $webProjects = [
        ['title' => 'ProBuild — Construction', 'desc' => 'Next-generation construction management and architectural excellence for high-end developments.', 'tag' => 'Construction', 'image' => '/assets/project/web/1.webp', 'url' => 'https://probuildconstructionco.com/'],
        ['title' => 'Oleeca — Skin Brand', 'desc' => 'A holistic beauty experience blending nature and science with a seamless digital storefront.', 'tag' => 'eCommerce', 'image' => '/assets/project/web/2.webp', 'url' => 'https://oleeca.corammerswork.com/'],
        ['title' => 'Shelder Roofing', 'desc' => 'Sustainable roofing systems and protective solutions engineered for longevity and style.', 'tag' => 'Construction', 'image' => '/assets/project/web/3.webp', 'url' => 'https://bumbleroofing.corammerswork.com/'],
        ['title' => 'Jipuragi Law Firm', 'desc' => 'Premium legal advisory platform delivering clarity and strategic advocacy in a complex world.', 'tag' => 'Legal', 'image' => '/assets/project/web/4.webp', 'url' => 'https://law-website.corammerswork.com/'],
        ['title' => 'Montres Auriva', 'desc' => 'Exquisite horology marketplace where heritage meets modern luxury in every timepiece.', 'tag' => 'Luxury', 'image' => '/assets/project/web/5.webp', 'url' => 'https://montresauriva.corammerswork.com/'],
        ['title' => 'The Flavor — Restaurant', 'desc' => 'A culinary journey through global flavors, presented with an award-winning digital presence.', 'tag' => 'Hospitality', 'image' => '/assets/project/web/6.webp', 'url' => 'https://restaurant-new.corammerswork.com/'],
        ['title' => 'Gainer Properties', 'desc' => "Intuitive real-estate ecosystem connecting elite buyers with the world's most prestigious addresses.", 'tag' => 'Real Estate', 'image' => '/assets/project/web/7.webp', 'url' => 'https://real-estate.corammerswork.com/'],
        ['title' => 'Marotta', 'desc' => 'Curated Mediterranean travel experiences and boutique hospitality redefined for the modern explorer.', 'tag' => 'Hospitality', 'image' => '/assets/project/web/8.webp', 'url' => 'https://maroota.corammerswork.com/en/#'],
        ['title' => 'Yape Mobility', 'desc' => 'Innovative urban mobility solutions for efficient and sustainable city transport.', 'tag' => 'Mobility', 'image' => '/assets/project/web/9.webp', 'url' => 'https://yapemobility.it/'],
    ];

     $mobileProjects = [
        ['title' => 'NASA Explorer', 'desc' => 'Interactive space exploration platform providing real-time data from NASA missions and satellite imagery.', 'tag' => 'Science', 'image' => '/assets/project/mobile/1.webm'],
        ['title' => 'Digital Art Canvas', 'desc' => 'A sophisticated platform for digital artists to showcase, trade, and collaborate on high-fidelity art.', 'tag' => 'Art', 'image' => '/assets/project/mobile/2.webm'],
        ['title' => 'Fodio — Food App', 'desc' => 'Seamless food ordering and delivery experience with personalized recommendations and live tracking.', 'tag' => 'Lifestyle', 'image' => '/assets/project/mobile/3.webm'],
        ['title' => 'Aplex AI', 'desc' => 'Advanced AI-powered assistant designed for productivity, creative automation, and data analysis.', 'tag' => 'AI', 'image' => '/assets/project/mobile/4.webm'],
        ['title' => 'Laxa — Travel Ticket', 'desc' => 'End-to-end travel booking engine for flights and trains with real-time status updates.', 'tag' => 'Travel', 'image' => '/assets/project/mobile/5.webm'],
        ['title' => 'Mpneto — Digital', 'desc' => 'Secure and intuitive digital financial platform for managing assets and peer-to-peer transactions.', 'tag' => 'Fintech', 'image' => '/assets/project/mobile/6.webm'],
        ['title' => 'Flex — Home Finder', 'desc' => 'Modern real-time property marketplace helping users find homes with immersive walkthroughs.', 'tag' => 'Real Estate', 'image' => '/assets/project/mobile/7.webm'],
        ['title' => 'Yoga Flow', 'desc' => 'Personalized wellness and yoga platform featuring expert-led sessions and health tracking.', 'tag' => 'Wellness', 'image' => '/assets/project/mobile/8.webm'],
        ['title' => 'Premiere League Hub', 'desc' => 'Comprehensive football analytics and live match tracking dashboard for sports enthusiasts.', 'tag' => 'Sports', 'image' => '/assets/project/mobile/9.webm'],
    ];

    $aiProjects = [
        ['image' => '/assets/project/aiSol/1.webm', 'title' => 'AI Automation'],
        ['image' => '/assets/project/aiSol/2.webm', 'title' => 'Smart CRM'],
        ['image' => '/assets/project/aiSol/3.webm', 'title' => 'Neural ERP'],
        ['image' => '/assets/project/aiSol/4.webm', 'title' => 'Data Analytics'],
        ['image' => '/assets/project/aiSol/5.webm', 'title' => 'Vision Systems'],
    ];

    $customProjects = [
        ['title' => 'Robotech', 'shortDesc' => 'Advanced robotics and industrial automation solutions.', 'desc' => 'A cutting-edge platform for robotics technology, showcasing industrial automation, smart machinery, and future-tech solutions for modern manufacturing.', 'tag' => 'AI', 'image' => '/assets/project/custom/1.webm', 'tech' => ['React', 'Three.js', 'Node.js', 'WebGL'], 'features' => ['3D model interaction', 'Real-time telemetry dashboard', 'Automated maintenance scheduling'], 'demo' => ['username' => 'admin@robotech.io', 'password' => 'robot_secure_99'], 'url' => 'https://templates.heydenstd.com/robotech/template-kit/home/?storefront=envato-elementsTB_iframe=true&width=600&height=550'],
        ['title' => 'AI Foundries', 'shortDesc' => 'Integrated ecosystem for artificial intelligence development.', 'desc' => 'A comprehensive AI development hub providing tools for machine learning, data processing, and neural network training in a collaborative environment.', 'tag' => 'SaaS', 'image' => '/assets/project/custom/2.webm', 'tech' => ['Next.js', 'Python', 'TensorFlow', 'AWS'], 'features' => ['Model training visualization', 'Collaborative workspaces', 'API deployment suite'], 'demo' => ['username' => 'dev@aifoundaries.com', 'password' => 'ai_pro_test_123'], 'url' => 'https://elementor.altdesain.com/aifoundaries/?storefront=envato-elementsTB_iframe%3Dtrue&width=600&height=550'],
        ['title' => 'EasyBridge', 'shortDesc' => 'Your Bridge to Homeownership.', 'desc' => 'Apply for your mortgage loan online in minutes. Simple, transparent, and stress-free — EasyBridge makes the path to your dream home a reality.', 'tag' => 'Fintech', 'image' => '/assets/project/custom/3.webm', 'tech' => ['PHP', 'Laravel', 'MySQL', 'Stripe'], 'features' => ['Quick mortgage application', 'Real-time status tracking', 'Secure document upload'], 'demo' => ['username' => 'borrower@easybridge.com', 'password' => 'loan_secure_456'], 'url' => 'https://easybridge.corammerswork.com/'],
        ['title' => 'CPA Connections', 'shortDesc' => 'Financial advisor recruitment and professional networking.', 'desc' => 'A specialized recruitment platform connecting top-tier financial advisors with leading CPA firms, featuring advanced matching algorithms and career management tools.', 'tag' => 'Marketing', 'image' => '/assets/project/custom/4.webm', 'tech' => ['Laravel', 'Vue.js', 'PostgreSQL'], 'features' => ['AI-powered candidate matching', 'Professional profile builder', 'Secure communication portal'], 'demo' => ['username' => 'recruiter@cpaconnect.com', 'password' => 'cpa_network_789'], 'url' => 'https://cpaconnections.com/'],
        ['title' => 'RippleQuest', 'shortDesc' => 'Interactive digital quest and engagement platform.', 'desc' => 'An immersive platform designed for digital storytelling and community engagement, featuring interactive quests, rewards systems, and social integration.', 'tag' => 'eCommerce', 'image' => '/assets/project/custom/5.webm', 'tech' => ['React', 'Firebase', 'GSAP'], 'features' => ['Dynamic quest builder', 'Reward points ecosystem', 'Real-time community feed'], 'demo' => ['username' => 'player@ripplequest.dev', 'password' => 'quest_start_2026'], 'url' => 'https://ripplequest.corammerswork.com/'],
        ['title' => 'Gadam', 'shortDesc' => 'Creative portfolio and digital agency toolkit.', 'desc' => 'A premium digital agency platform designed for high-end creative portfolios, featuring advanced layout systems and interactive media presentations.', 'tag' => 'Marketing', 'image' => '/assets/project/custom/6.webm', 'tech' => ['PHP', 'CodeIgniter', 'jQuery', 'GSAP'], 'features' => ['Bespoke animation engine', 'Dynamic project grids', 'Integrated contact management'], 'demo' => ['username' => 'creative@gadam.net', 'password' => 'agency_pro_test'], 'url' => 'https://kits.krakenbox.net/gadam/?storefront=envato-elementsTB_iframe%3Dtrue&width=600&height=550'],
    ];

    $tabs = [
        ['key' => 'web', 'label' => 'web'],
        ['key' => 'custom', 'label' => 'custom app'],
        ['key' => 'mobile', 'label' => 'mobile app'],
        ['key' => 'ai-solution', 'label' => 'ai solution'],
    ];

    $tickerItems = [
        ['label' => 'Web Development', 'icon' => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6" /><polyline points="8 6 2 12 8 18" /></svg>'],
        ['label' => 'Mobile Apps', 'icon' => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2" /><line x1="12" y1="18" x2="12.01" y2="18" /></svg>'],
        ['label' => 'UI/UX Design', 'icon' => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" /></svg>'],
        ['label' => 'API Integration', 'icon' => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" /><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" /></svg>'],
        ['label' => 'Performance', 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg>'],
        ['label' => 'Open Source', 'icon' => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" /><polyline points="3.27 6.96 12 12.01 20.73 6.96" /><line x1="12" y1="22.08" x2="12" y2="12" /></svg>'],
    ];
@endphp

@section('content')
<div class="pw-portfolio-development">

    {{-- ── HERO ── --}}
    <section class="pf-hero">
        <canvas class="pf-hero-canvas" data-sphere></canvas>
        <div class="pf-hero-content">
            <div class="pf-hero-badge">
                <span class="pf-hero-badge-pulse"></span>
                Available for Projects
            </div>
            <h1 class="pf-hero-title">
                Development<br><span>Portfolio</span>
            </h1>
            <p class="pf-hero-desc">
                A curated collection spanning website development, mobile apps, and tailored software solutions — engineered for performance and scale.
            </p>
        </div>
    </section>

    {{-- ── MAIN ── --}}
    <div class="pf-main">

        {{-- Selection Header + Filter --}}
        <section class="pf-section" style="padding-bottom:0">
            <div class="pf-inner">
                <div class="pf-reveal" style="margin-bottom:48px">
                    <div class="pf-label-row">
                        <div class="pf-robot-badge">
                            <img loading="lazy" decoding="async" class="robo-dark" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block">
                            <img loading="lazy" decoding="async" class="robo-light" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block">
                        </div>
                        <div class="pf-label-group">
                            <div class="pf-label-pill">
                                <span class="pf-label-dot"></span>
                                <span class="pf-label-text">Our Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="pf-section-divider"></div>
                    <h2 class="pf-section-heading">
                        Selection of <span style="color:var(--primary)">Our Work</span>
                    </h2>
                    <p class="pf-section-sub">
                        A diverse portfolio of high-performance solutions, crafted with precision and a passion for exceptional user experience.
                    </p>
                </div>

                <div style="display:flex;flex-direction:column;align-items:center;padding-bottom:24px">
                    {{-- Desktop Filter --}}
                    <div class="pf-segmented-control" id="pfd-segmented">
                        <span class="pf-segment-pill" id="pfd-pill"></span>
                        @foreach($tabs as $tab)
                            <button type="button" class="pf-segment-btn{{ $tab['key'] === 'web' ? ' pf-segment-active' : '' }}" data-filter="{{ $tab['key'] }}">{{ $tab['label'] }}</button>
                        @endforeach
                    </div>

                    {{-- Mobile Filter Dropdown --}}
                    <div class="pf-mobile-filter" id="pfd-mobile-filter">
                        <div class="pf-dropdown-trigger" id="pfd-dropdown-trigger">
                            <div class="pf-dropdown-label-wrap">
                                <span class="pf-dropdown-label">Show:</span>
                                <span class="pf-dropdown-value" id="pfd-dropdown-value">web</span>
                            </div>
                            <svg id="pfd-dropdown-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="transition:transform 0.4s cubic-bezier(0.22,1,0.36,1);color:var(--primary)">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </div>
                        <div class="pf-dropdown-menu" id="pfd-dropdown-menu">
                            @foreach($tabs as $tab)
                                <button type="button" class="pf-dropdown-item{{ $tab['key'] === 'web' ? ' pf-active' : '' }}" data-filter="{{ $tab['key'] }}">
                                    {{ $tab['label'] }}
                                    <svg class="pfd-check" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" style="{{ $tab['key'] === 'web' ? '' : 'display:none' }}">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ── WEB PANEL ── --}}
        <section class="pf-section pf-panel pf-panel-active" data-panel="web" style="padding-top:80px">
            <div class="pf-inner">
                <div class="proj-grid">
                    @foreach($webProjects as $p)
                        @php $cfg = $tagWeb[$p['tag']] ?? $tagWeb['SaaS']; @endphp
                        <div class="pf-card pfd-card" data-url="{{ $p['url'] }}" @if($loop->iteration > 3) hidden @endif>
                            <div class="pfd-card-media">
                                @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline class="pf-web-slide-img" style="display:block;width:100%;height:auto;position:absolute;top:0;left:0;will-change:transform"></video>
@else
<img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy" class="pf-web-slide-img" style="display:block;width:100%;height:auto;position:absolute;top:0;left:0;will-change:transform">
@endif

                                <div class="pfd-badge">
                                    <span class="pfd-tag" style="--tag-bg:{{ $cfg['bg'] }};--tag-border:{{ $cfg['border'] }};--tag-color:{{ $cfg['color'] }};--tag-dot:{{ $cfg['dot'] }}">
                                        <span class="pfd-tag-dot"></span>
                                        <span class="pfd-tag-text">{{ $p['tag'] }}</span>
                                    </span>
                                </div>
                                <div class="pfd-card-fade"></div>
                            </div>
                            <div class="pfd-card-body">
                                <div class="pfd-card-accent"></div>
                                <h3 class="pfd-card-title">{{ $p['title'] }}</h3>
                                <p class="pfd-card-desc">{{ $p['desc'] }}</p>
                                <div class="pfd-card-explore">
                                    <span>Explore</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 6H11M6 1L11 6L6 11" stroke="var(--primary)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pf-loadmore-wrap">
                    <button type="button" class="split-btn pf-loadmore-btn" style="width:240px">
                        <span class="split-btn-default">
                            <span class="split-btn-label">Load More</span>
                            <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                            <svg class="split-btn-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" /></svg>
                        </span>
                        <span class="split-btn-row">
                            <span class="split-btn-icon">
                                <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                                <svg class="split-btn-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" /></svg>
                            </span>
                            <span class="split-btn-text">Load More</span>
                        </span>
                    </button>
                    <div class="pf-done" style="display:none">All Projects Loaded</div>
                </div>
            </div>
        </section>

        {{-- ── CUSTOM PANEL ── --}}
        <section class="pf-section pf-panel" data-panel="custom" style="padding-top:40px">
            <div class="pf-inner">
                <div class="custom-grid">
                    @foreach($customProjects as $p)
                        @php $cfg = $tagCustom[$p['tag']] ?? $tagCustom['SaaS']; @endphp
                        <div class="pf-card pfd-custom-card" @if($loop->iteration > 3) hidden @endif>
                            <div class="pfd-custom-media">
                                @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline ></video>
@else
<img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy">
@endif
                                <div class="pfd-custom-media-grad"></div>
                                <div style="position:absolute;top:14px;left:14px">
                                    <span class="pfd-tag" style="--tag-bg:{{ $cfg['bg'] }};--tag-border:{{ $cfg['border'] }};--tag-color:{{ $cfg['color'] }};--tag-dot:{{ $cfg['dot'] }};padding:4px 11px">
                                        <span class="pfd-tag-dot" style="width:5px;height:5px;box-shadow:none"></span>
                                        <span class="pfd-tag-text" style="font-size:0.62rem;letter-spacing:0.14em">{{ $p['tag'] }}</span>
                                    </span>
                                </div>
                            </div>
                            <div class="pfd-custom-body">
                                <h3 class="pfd-custom-title">{{ $p['title'] }}</h3>
                                <p class="pfd-custom-short">{{ $p['shortDesc'] }}</p>
                                <div class="pfd-custom-actions">
                                    <a class="pfd-btn-explore" href="{{ $p['url'] }}" target="_blank" rel="noopener">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" /><polyline points="15 3 21 3 21 9" /><line x1="10" y1="14" x2="21" y2="3" /></svg>
                                        Explore
                                    </a>
                                    <button type="button" class="pfd-btn-details" data-toggle-details>
                                        <span class="pfd-details-open">Details</span>
                                        <span class="pfd-details-close">✕&nbsp;&nbsp;Close</span>
                                    </button>
                                </div>
                            </div>
                            <div class="pfd-custom-detail">
                                <div class="pfd-detail-rule"></div>
                                <div class="pfd-detail-inner">
                                    <p class="pfd-detail-desc">{{ $p['desc'] }}</p>
                                    <p class="pfd-detail-label">Technology</p>
                                    <div class="pfd-tech-row">
                                        @foreach($p['tech'] as $t)
                                            <span class="pfd-tech-chip">{{ $t }}</span>
                                        @endforeach
                                    </div>
                                    <p class="pfd-detail-label">Features</p>
                                    <div class="pfd-features">
                                        @foreach($p['features'] as $f)
                                            <div class="pfd-feature">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0"><polyline points="13 17 18 12 13 7" /><polyline points="6 17 11 12 6 7" /></svg>
                                                <span>{{ $f }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                    <p class="pfd-detail-label">Demo Account</p>
                                    <div class="pfd-demo-box">
                                        <p><span>Username</span>{{ $p['demo']['username'] }}</p>
                                        <p><span>Password</span>{{ $p['demo']['password'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pf-loadmore-wrap" style="margin-top:80px">
                    <button type="button" class="split-btn pf-loadmore-btn" style="width:240px">
                        <span class="split-btn-default">
                            <span class="split-btn-label">Load More</span>
                            <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                            <svg class="split-btn-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" /></svg>
                        </span>
                        <span class="split-btn-row">
                            <span class="split-btn-icon">
                                <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                                <svg class="split-btn-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" /></svg>
                            </span>
                            <span class="split-btn-text">Load More</span>
                        </span>
                    </button>
                    <div class="pf-done" style="display:none">All Projects Loaded</div>
                </div>
            </div>
        </section>

        {{-- ── MOBILE PANEL ── --}}
        <section class="pf-section pf-panel" data-panel="mobile" style="padding-top:80px">
            <div class="pf-inner">
                <div class="proj-grid">
                    @foreach($mobileProjects as $p)
                        @php $cfg = $tagMobile[$p['tag']] ?? $tagMobile['AI']; @endphp
                        <div class="pf-card pfd-card" @if($loop->iteration > 3) hidden @endif>
                            <div class="pfd-card-media">
                                @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline ></video>
@else
<img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy">
@endif
                                <div class="pfd-badge">
                                    <span class="pfd-tag" style="--tag-bg:{{ $cfg['bg'] }};--tag-border:{{ $cfg['border'] }};--tag-color:{{ $cfg['color'] }};--tag-dot:{{ $cfg['dot'] }}">
                                        <span class="pfd-tag-dot"></span>
                                        <span class="pfd-tag-text">{{ $p['tag'] }}</span>
                                    </span>
                                </div>
                                <div class="pfd-card-fade"></div>
                            </div>
                            <div class="pfd-card-body">
                                <div class="pfd-card-accent"></div>
                                <h3 class="pfd-card-title">{{ $p['title'] }}</h3>
                                <p class="pfd-card-desc">{{ $p['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pf-loadmore-wrap">
                    <button type="button" class="split-btn pf-loadmore-btn" style="width:240px">
                        <span class="split-btn-default">
                            <span class="split-btn-label">Load More</span>
                            <span style="position:relative;display:inline-flex;align-items:center;justify-content:center;width:14px;height:14px">
                                <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                                <svg class="split-btn-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" /></svg>
                            </span>
                        </span>
                        <span class="split-btn-row">
                            <span class="split-btn-icon">
                                <span style="position:relative;display:inline-flex;align-items:center;justify-content:center;width:14px;height:14px">
                                    <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                                    <svg class="split-btn-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" /></svg>
                                </span>
                            </span>
                            <span class="split-btn-text">Load More</span>
                        </span>
                    </button>
                    <div class="pf-done" style="display:none">All Projects Loaded</div>
                </div>
            </div>
        </section>

        {{-- ── AI SOLUTION PANEL ── --}}
        <section class="pf-section pf-panel" data-panel="ai-solution" style="padding-top:80px">
            <div class="pf-inner">
                <div class="ai-grid">
                    @foreach($aiProjects as $p)
                        <div class="pf-card pfd-ai-card" @if($loop->iteration > 2) hidden @endif>
                            <div class="pfd-ai-media">
                                @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline ></video>
@else
<img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy">
@endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pf-loadmore-wrap" style="margin-top:80px">
                    <button type="button" class="split-btn pf-loadmore-btn" style="width:240px">
                        <span class="split-btn-default">
                            <span class="split-btn-label">Load More</span>
                            <span style="position:relative;display:inline-flex;align-items:center;justify-content:center;width:14px;height:14px">
                                <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                                <svg class="split-btn-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" /></svg>
                            </span>
                        </span>
                        <span class="split-btn-row">
                            <span class="split-btn-icon">
                                <span style="position:relative;display:inline-flex;align-items:center;justify-content:center;width:14px;height:14px">
                                    <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                                    <svg class="split-btn-spinner" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" /></svg>
                                </span>
                            </span>
                            <span class="split-btn-text">Load More</span>
                        </span>
                    </button>
                    <div class="pf-done" style="display:none">All Projects Loaded</div>
                </div>
            </div>
        </section>

        {{-- ── TICKER ── --}}
        <div class="pf-ticker">
            <div class="pf-ticker-track">
                @for($rep = 0; $rep < 4; $rep++)
                    <div style="display:flex;align-items:center">
                        @foreach($tickerItems as $item)
                            <div class="pf-ticker-item">
                                <span style="color:inherit;display:flex;opacity:0.9">{!! $item['icon'] !!}</span>
                                {{ $item['label'] }}
                            </div>
                        @endforeach
                    </div>
                @endfor
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('.pw-portfolio-development');
    if (!root) return;

    var panels = root.querySelectorAll('.pf-panel');
    var segBtns = root.querySelectorAll('.pf-segment-btn');
    var dropItems = root.querySelectorAll('.pf-dropdown-item');
    var dropValue = root.querySelector('#pfd-dropdown-value');
    var pill = root.querySelector('#pfd-pill');
    var segmented = root.querySelector('#pfd-segmented');

    var labels = {};
    segBtns.forEach(function (b) { labels[b.dataset.filter] = b.textContent.trim(); });

    function movePill(btn) {
        if (!pill || !btn) return;
        pill.style.left = btn.offsetLeft + 'px';
        pill.style.width = btn.offsetWidth + 'px';
    }

    function setFilter(key) {
        panels.forEach(function (p) {
            p.classList.toggle('pf-panel-active', p.dataset.panel === key);
        });
        segBtns.forEach(function (b) {
            var on = b.dataset.filter === key;
            b.classList.toggle('pf-segment-active', on);
            if (on) movePill(b);
        });
        dropItems.forEach(function (b) {
            var on = b.dataset.filter === key;
            b.classList.toggle('pf-active', on);
            var chk = b.querySelector('.pfd-check');
            if (chk) chk.style.display = on ? '' : 'none';
        });
        if (dropValue && labels[key]) dropValue.textContent = labels[key];
    }

    segBtns.forEach(function (b) {
        b.addEventListener('click', function () { setFilter(b.dataset.filter); });
    });
    dropItems.forEach(function (b) {
        b.addEventListener('click', function () {
            setFilter(b.dataset.filter);
            closeDropdown();
        });
    });

    // Web/Mobile card click → open project URL
    root.querySelectorAll('.pfd-card[data-url]').forEach(function (card) {
        card.addEventListener('click', function () {
            var url = card.getAttribute('data-url');
            if (url) window.open(url, '_blank', 'noopener');
        });
    });

    // Custom card details accordion
    root.querySelectorAll('[data-toggle-details]').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var card = btn.closest('.pfd-custom-card');
            if (card) card.classList.toggle('pfd-open');
        });
    });

    // Mobile dropdown open/close
    var trigger = root.querySelector('#pfd-dropdown-trigger');
    var menu = root.querySelector('#pfd-dropdown-menu');
    var chevron = root.querySelector('#pfd-dropdown-chevron');
    function closeDropdown() {
        if (menu) menu.classList.remove('pf-open');
        if (chevron) chevron.style.transform = 'rotate(0)';
    }
    if (trigger) {
        trigger.addEventListener('click', function () {
            if (!menu) return;
            var open = menu.classList.toggle('pf-open');
            if (chevron) chevron.style.transform = open ? 'rotate(180deg)' : 'rotate(0)';
        });
    }
    document.addEventListener('click', function (e) {
        if (!root.querySelector('#pfd-mobile-filter').contains(e.target)) closeDropdown();
    });

    // Position pill on load + resize
    function initPill() {
        var active = root.querySelector('.pf-segment-btn.pf-segment-active');
        movePill(active);
    }
    window.addEventListener('resize', initPill);
    if (document.readyState === 'complete') initPill();
    else window.addEventListener('load', initPill);
    setTimeout(initPill, 120);

    /* ── Hero sphere canvas ── */
    var canvas = root.querySelector('[data-sphere]');
    if (canvas && canvas.getContext) {
        var ctx = canvas.getContext('2d');
        var W, H, cx, cy, R;
        var mouse = { x: -9999, y: -9999 };
        var accent = { r: 216, g: 29, b: 31 };

        function resize() {
            W = canvas.width = window.innerWidth;
            H = canvas.height = window.innerHeight;
            cx = W / 2; cy = H / 2;
            R = Math.min(W, H) * 0.38;
            if (R > 380) R = 380;
        }
        resize();

        function randInSphere() {
            while (true) {
                var x = Math.random() * 2 - 1, y = Math.random() * 2 - 1, z = Math.random() * 2 - 1;
                if (x * x + y * y + z * z <= 1) return [x, y, z];
            }
        }

        var COUNT = 900, bubbles = [];
        for (var i = 0; i < COUNT; i++) {
            var rr = randInSphere();
            bubbles.push({ x: rr[0], y: rr[1], z: rr[2], speed: 0.004 + Math.random() * 0.012, orbitAxis: Math.random() < 0.5 ? 'xz' : 'yz', phase: Math.random() * Math.PI * 2, r: 2.5 + Math.random() * 9, brightness: 0.03 + Math.random() * 0.16 });
        }

        var t = 0, rotY = 0, rotX = 0, rafId;
        var rotateY = function (x, z, a) { return [x * Math.cos(a) - z * Math.sin(a), x * Math.sin(a) + z * Math.cos(a)]; };
        var rotateX = function (y, z, a) { return [y * Math.cos(a) - z * Math.sin(a), y * Math.sin(a) + z * Math.cos(a)]; };

        function draw() {
            if (!W || !H) resize();
            if (!ctx || !W || !H) { rafId = requestAnimationFrame(draw); return; }

            ctx.clearRect(0, 0, W, H);
            var tRY = ((mouse.x - cx) / W) * 0.28;
            var tRX = ((mouse.y - cy) / H) * 0.18;
            rotY += (tRY - rotY) * 0.04;
            rotX += (tRX - rotX) * 0.04;

            ctx.beginPath(); ctx.arc(cx, cy, R, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(15, 15, 15, 0.95)'; ctx.fill();

            var ag = ctx.createRadialGradient(cx, cy, 0, cx, cy, R);
            ag.addColorStop(0, 'rgba(40,40,40,0.8)');
            ag.addColorStop(0.7, 'rgba(15,15,15,0.9)');
            ag.addColorStop(1, 'rgba(5,5,5,1)');
            ctx.beginPath(); ctx.arc(cx, cy, R, 0, Math.PI * 2);
            ctx.fillStyle = ag; ctx.fill();

            var projected = bubbles.map(function (b) {
                var x = b.x, y = b.y, z = b.z;
                var dt = t * b.speed + b.phase;
                if (b.orbitAxis === 'xz') { var r1 = rotateY(x, z, dt * 0.45); x = r1[0]; z = r1[1]; }
                else { var r2 = rotateX(y, z, dt * 0.45); y = r2[0]; z = r2[1]; }
                var r3 = rotateY(x, z, rotY); x = r3[0]; z = r3[1];
                var r4 = rotateX(y, z, rotX); y = r4[0]; z = r4[1];
                var r5 = rotateY(x, z, t * 0.003);
                var sx = r5[0], sz = r5[1];
                var scale = (sz + 1.15) / 2.15;
                return { px: cx + sx * R * 0.9, py: cy + y * R * 0.9, radius: b.r * Math.max(0.2, scale), z: sz, brightness: b.brightness, depth: Math.max(0.2, scale) };
            });
            projected.sort(function (a, b) { return a.z - b.z; });
            ctx.save();
            ctx.beginPath(); ctx.arc(cx, cy, R * 0.975, 0, Math.PI * 2); ctx.clip();
            projected.forEach(function (p) {
                if (p.radius < 0.5) return;
                var d = p.depth;
                var base = Math.floor(p.brightness * 22 + 5);
                var bg = ctx.createRadialGradient(p.px - p.radius * 0.2, p.py - p.radius * 0.25, 0, p.px, p.py, p.radius);
                bg.addColorStop(0, 'rgba(' + (base + 30) + ',' + (base + 30) + ',' + (base + 30) + ',' + (0.95 * d) + ')');
                bg.addColorStop(0.5, 'rgba(' + (base + 10) + ',' + (base + 10) + ',' + (base + 10) + ',' + (0.95 * d) + ')');
                bg.addColorStop(1, 'rgba(0,0,0,' + (0.98 * d) + ')');
                ctx.beginPath(); ctx.arc(p.px, p.py, p.radius, 0, Math.PI * 2);
                ctx.fillStyle = bg; ctx.fill();
                var isPrimary = p.brightness > 0.14;
                var sg = ctx.createRadialGradient(p.px - p.radius * 0.3, p.py - p.radius * 0.3, 0, p.px - p.radius * 0.3, p.py - p.radius * 0.3, p.radius * 0.48);
                if (isPrimary) {
                    sg.addColorStop(0, 'rgba(' + accent.r + ',' + accent.g + ',' + accent.b + ',' + (0.8 * d) + ')');
                    sg.addColorStop(0.4, 'rgba(' + accent.r + ',' + accent.g + ',' + accent.b + ',' + (0.2 * d) + ')');
                    sg.addColorStop(1, 'rgba(0,0,0,0)');
                } else {
                    sg.addColorStop(0, 'rgba(255,255,255,' + (0.7 * d) + ')');
                    sg.addColorStop(0.4, 'rgba(180,180,180,' + (0.3 * d) + ')');
                    sg.addColorStop(1, 'rgba(0,0,0,0)');
                }
                ctx.beginPath(); ctx.arc(p.px, p.py, p.radius, 0, Math.PI * 2);
                ctx.fillStyle = sg; ctx.fill();
            });
            ctx.restore();
            ctx.beginPath(); ctx.arc(cx, cy, R, 0, Math.PI * 2);
            ctx.strokeStyle = 'rgba(' + accent.r + ',' + accent.g + ',' + accent.b + ',0.35)';
            ctx.lineWidth = 2.5; ctx.stroke();
            t++; rafId = requestAnimationFrame(draw);
        }

        window.addEventListener('resize', resize);
        window.addEventListener('mousemove', function (e) { mouse.x = e.clientX; mouse.y = e.clientY; });
        draw();
    }

    // ── LOAD MORE LOGIC ──
    root.querySelectorAll('.pf-panel').forEach(function(panel) {
        var btn = panel.querySelector('.pf-loadmore-btn');
        var done = panel.querySelector('.pf-done');
        var panelType = panel.getAttribute('data-panel');
        var batchSize = (panelType === 'ai-solution' || panelType === 'ai-design' || panelType === 'logo') ? 2 : 3;
        var loading = false;

        if (btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                if (loading) return;
                loading = true;
                btn.classList.add('is-loading');

                var labels = btn.querySelectorAll('.split-btn-label, .split-btn-text');
                var oldText = labels[0] ? labels[0].innerText : 'Load More';
                labels.forEach(function(l) { l.innerText = 'Loading...'; });

                setTimeout(function() {
                    var hiddenCards = panel.querySelectorAll('.pf-card[hidden]');
                    for (var i = 0; i < batchSize && i < hiddenCards.length; i++) {
                        hiddenCards[i].removeAttribute('hidden');
                    }
                    
                    loading = false;
                    btn.classList.remove('is-loading');
                    labels.forEach(function(l) { l.innerText = oldText; });

                    var remaining = panel.querySelectorAll('.pf-card[hidden]');
                    if (remaining.length === 0) {
                        btn.style.display = 'none';
                        if (done) done.style.display = 'block';
                    }
                }, 600);
            });
            
            var remaining = panel.querySelectorAll('.pf-card[hidden]');
            if(remaining.length === 0) {
                btn.style.display = 'none';
                if (done) done.style.display = 'block';
            }
        }
    });
       // ── Web panel: slow image pan-down on hover (exact port of React WebCard) ──
    // Image is height:auto so it renders at its natural aspect ratio,
    // taller than the 252px container. On hover we translate it upward
    // by (rendered height − 252) px over 10 s, then snap back in 0.6 s.
    (function () {
        var isMobile = window.matchMedia('(max-width: 768px)').matches;
        var CONTAINER_H = 252;

        root.querySelectorAll('.pf-web-slide-img').forEach(function (img) {
            var scrollDist = 0;

            function calcDist() {
                var nH = img.naturalHeight || 0;
                var nW = img.naturalWidth  || 1;
                var dist = nH * (img.offsetWidth / nW) - CONTAINER_H;
                scrollDist = dist > 0 ? dist : 0;
            }

            // Measure once image is loaded
            if (img.complete && img.naturalWidth) {
                calcDist();
            } else {
                img.addEventListener('load', calcDist);
            }
            // Re-measure on window resize
            window.addEventListener('resize', calcDist);

            var card = img.closest('.pf-card');
            if (!card) return;

            card.addEventListener('mouseenter', function () {
                if (isMobile || scrollDist <= 0) return;
                img.style.transition = 'transform 10s cubic-bezier(0.22,1,0.36,1)';
                img.style.transform  = 'translateY(-' + scrollDist + 'px)';
            });
            card.addEventListener('mouseleave', function () {
                img.style.transition = 'transform 0.6s cubic-bezier(0.22,1,0.36,1)';
                img.style.transform  = 'translateY(0px)';
            });
        });
    })();
})();
</script>
@endpush
