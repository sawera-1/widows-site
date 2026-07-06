@extends('layouts.app')

@section('title', 'Development Portfolio — CodeOaks')
@section('meta_description', 'A curated collection spanning website development, mobile apps, and tailored software solutions — engineered for performance and scale.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/portfolio-development.css') }}">
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
        ['title' => 'NASA Explorer', 'desc' => 'Interactive space exploration platform providing real-time data from NASA missions and satellite imagery.', 'tag' => 'Science', 'image' => '/assets/project/mobile/1.webp'],
        ['title' => 'Digital Art Canvas', 'desc' => 'A sophisticated platform for digital artists to showcase, trade, and collaborate on high-fidelity art.', 'tag' => 'Art', 'image' => '/assets/project/mobile/2.webp'],
        ['title' => 'Fodio — Food App', 'desc' => 'Seamless food ordering and delivery experience with personalized recommendations and live tracking.', 'tag' => 'Lifestyle', 'image' => '/assets/project/mobile/3.webp'],
        ['title' => 'Aplex AI', 'desc' => 'Advanced AI-powered assistant designed for productivity, creative automation, and data analysis.', 'tag' => 'AI', 'image' => '/assets/project/mobile/4.webp'],
        ['title' => 'Laxa — Travel Ticket', 'desc' => 'End-to-end travel booking engine for flights and trains with real-time status updates.', 'tag' => 'Travel', 'image' => '/assets/project/mobile/5.webp'],
        ['title' => 'Mpneto — Digital', 'desc' => 'Secure and intuitive digital financial platform for managing assets and peer-to-peer transactions.', 'tag' => 'Fintech', 'image' => '/assets/project/mobile/6.webp'],
        ['title' => 'Flex — Home Finder', 'desc' => 'Modern real-time property marketplace helping users find homes with immersive walkthroughs.', 'tag' => 'Real Estate', 'image' => '/assets/project/mobile/7.webp'],
        ['title' => 'Yoga Flow', 'desc' => 'Personalized wellness and yoga platform featuring expert-led sessions and health tracking.', 'tag' => 'Wellness', 'image' => '/assets/project/mobile/8.webp'],
        ['title' => 'Premiere League Hub', 'desc' => 'Comprehensive football analytics and live match tracking dashboard for sports enthusiasts.', 'tag' => 'Sports', 'image' => '/assets/project/mobile/9.webp'],
    ];

    $aiProjects = [
        ['id' => 1, 'image' => '/assets/project/aiSol/1.webp', 'title' => 'AI Automation'],
        ['id' => 2, 'image' => '/assets/project/aiSol/2.webp', 'title' => 'Smart CRM'],
        ['id' => 3, 'image' => '/assets/project/aiSol/3.webp', 'title' => 'Neural ERP'],
        ['id' => 4, 'image' => '/assets/project/aiSol/4.webp', 'title' => 'Data Analytics'],
        ['id' => 5, 'image' => '/assets/project/aiSol/5.webp', 'title' => 'Vision Systems'],
    ];

    $customProjects = [
        ['title' => 'Robotech', 'shortDesc' => 'Advanced robotics and industrial automation solutions.', 'desc' => 'A cutting-edge platform for robotics technology, showcasing industrial automation, smart machinery, and future-tech solutions for modern manufacturing.', 'tag' => 'AI', 'image' => '/assets/project/custom/1.webp', 'tech' => ['React', 'Three.js', 'Node.js', 'WebGL'], 'features' => ['3D model interaction', 'Real-time telemetry dashboard', 'Automated maintenance scheduling'], 'demo' => ['username' => 'admin@robotech.io', 'password' => 'robot_secure_99'], 'url' => 'https://templates.heydenstd.com/robotech/template-kit/home/?storefront=envato-elementsTB_iframe=true&width=600&height=550'],
        ['title' => 'AI Foundries', 'shortDesc' => 'Integrated ecosystem for artificial intelligence development.', 'desc' => 'A comprehensive AI development hub providing tools for machine learning, data processing, and neural network training in a collaborative environment.', 'tag' => 'SaaS', 'image' => '/assets/project/custom/2.webp', 'tech' => ['Next.js', 'Python', 'TensorFlow', 'AWS'], 'features' => ['Model training visualization', 'Collaborative workspaces', 'API deployment suite'], 'demo' => ['username' => 'dev@aifoundaries.com', 'password' => 'ai_pro_test_123'], 'url' => 'https://elementor.altdesain.com/aifoundaries/?storefront=envato-elementsTB_iframe%3Dtrue&width=600&height=550'],
        ['title' => 'EasyBridge', 'shortDesc' => 'Your Bridge to Homeownership.', 'desc' => 'Apply for your mortgage loan online in minutes. Simple, transparent, and stress-free — EasyBridge makes the path to your dream home a reality.', 'tag' => 'Fintech', 'image' => '/assets/project/custom/3.webp', 'tech' => ['PHP', 'Laravel', 'MySQL', 'Stripe'], 'features' => ['Quick mortgage application', 'Real-time status tracking', 'Secure document upload'], 'demo' => ['username' => 'borrower@easybridge.com', 'password' => 'loan_secure_456'], 'url' => 'https://easybridge.corammerswork.com/'],
        ['title' => 'CPA Connections', 'shortDesc' => 'Financial advisor recruitment and professional networking.', 'desc' => 'A specialized recruitment platform connecting top-tier financial advisors with leading CPA firms, featuring advanced matching algorithms and career management tools.', 'tag' => 'Marketing', 'image' => '/assets/project/custom/4.webp', 'tech' => ['Laravel', 'Vue.js', 'PostgreSQL'], 'features' => ['AI-powered candidate matching', 'Professional profile builder', 'Secure communication portal'], 'demo' => ['username' => 'recruiter@cpaconnect.com', 'password' => 'cpa_network_789'], 'url' => 'https://cpaconnections.com/'],
        ['title' => 'RippleQuest', 'shortDesc' => 'Interactive digital quest and engagement platform.', 'desc' => 'An immersive platform designed for digital storytelling and community engagement, featuring interactive quests, rewards systems, and social integration.', 'tag' => 'eCommerce', 'image' => '/assets/project/custom/5.webp', 'tech' => ['React', 'Firebase', 'GSAP'], 'features' => ['Dynamic quest builder', 'Reward points ecosystem', 'Real-time community feed'], 'demo' => ['username' => 'player@ripplequest.dev', 'password' => 'quest_start_2026'], 'url' => 'https://ripplequest.corammerswork.com/'],
        ['title' => 'Gadam', 'shortDesc' => 'Creative portfolio and digital agency toolkit.', 'desc' => 'A premium digital agency platform designed for high-end creative portfolios, featuring advanced layout systems and interactive media presentations.', 'tag' => 'Marketing', 'image' => '/assets/project/custom/6.webp', 'tech' => ['PHP', 'CodeIgniter', 'jQuery', 'GSAP'], 'features' => ['Bespoke animation engine', 'Dynamic project grids', 'Integrated contact management'], 'demo' => ['username' => 'creative@gadam.net', 'password' => 'agency_pro_test'], 'url' => 'https://kits.krakenbox.net/gadam/?storefront=envato-elementsTB_iframe%3Dtrue&width=600&height=550'],
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
                            <img loading="lazy" decoding="async" class="robo-light" src="/assets/robolight.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block">
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
                        <div class="pf-card pfd-card" data-url="{{ $p['url'] }}">
                            <div class="pfd-card-media">
                                <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy" draggable="false">
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
                <div class="pfd-loadmore-wrap"><div class="pfd-loadmore">All Project Loaded</div></div>
            </div>
        </section>

        {{-- ── CUSTOM PANEL ── --}}
        <section class="pf-section pf-panel" data-panel="custom" style="padding-top:40px">
            <div class="pf-inner">
                <div class="custom-grid">
                    @foreach($customProjects as $p)
                        @php $cfg = $tagCustom[$p['tag']] ?? $tagCustom['SaaS']; @endphp
                        <div class="pf-card pfd-custom-card">
                            <div class="pfd-custom-media">
                                <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy">
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
                <div class="pfd-loadmore-wrap" style="margin-top:80px"><div class="pfd-loadmore">All Project Loaded</div></div>
            </div>
        </section>

        {{-- ── MOBILE PANEL ── --}}
        <section class="pf-section pf-panel" data-panel="mobile" style="padding-top:80px">
            <div class="pf-inner">
                <div class="proj-grid">
                    @foreach($mobileProjects as $p)
                        @php $cfg = $tagMobile[$p['tag']] ?? $tagMobile['AI']; @endphp
                        <div class="pf-card pfd-card">
                            <div class="pfd-card-media">
                                <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy">
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
                <div class="pfd-loadmore-wrap"><div class="pfd-loadmore">All Project Loaded</div></div>
            </div>
        </section>

        {{-- ── AI SOLUTION PANEL ── --}}
        <section class="pf-section pf-panel" data-panel="ai-solution" style="padding-top:80px">
            <div class="pf-inner">
                <div class="ai-grid">
                    @foreach($aiProjects as $p)
                        <div class="pf-card pfd-ai-card">
                            <div class="pfd-ai-media">
                                <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pfd-loadmore-wrap" style="margin-top:80px"><div class="pfd-loadmore">All Project Loaded</div></div>
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
})();
</script>
@endpush
