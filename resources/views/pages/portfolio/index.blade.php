@extends('layouts.app')

@section('title', 'Portfolio — Corammers')
@section('meta_description', 'Selected work by Corammers — websites, mobile apps, AI products and brand experiences delivered for real clients.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/portfolio.css') }}">
@endpush

@php
    $heroImages = [
        ['src' => '/assets/portfolio/1.webp', 'alt' => 'Web Dev', 'size' => 'wide', 'height' => 'mid'],
        ['src' => '/assets/portfolio/2.webp', 'alt' => 'AI Brain', 'size' => 'portrait', 'height' => 'tall'],
        ['src' => '/assets/portfolio/3.webp', 'alt' => 'PHP Laravel', 'size' => 'square', 'height' => 'short'],
        ['src' => '/assets/portfolio/4.webp', 'alt' => 'VR Tech', 'size' => 'portrait', 'height' => 'vtall'],
        ['src' => '/assets/portfolio/5.webp', 'alt' => 'Circuit', 'size' => 'landscape', 'height' => 'mid'],
        ['src' => '/assets/portfolio/6.webp', 'alt' => 'Code Matrix', 'size' => 'square', 'height' => 'tall'],
        ['src' => '/assets/portfolio/7.webp', 'alt' => 'Server', 'size' => 'wide', 'height' => 'short'],
        ['src' => '/assets/portfolio/8.webp', 'alt' => 'Developer', 'size' => 'portrait', 'height' => 'tall'],
        ['src' => '/assets/portfolio/9.webp', 'alt' => 'AI Robot', 'size' => 'square', 'height' => 'mid'],
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

    $aiSolutionProjects = [
        ['image' => '/assets/project/aiSol/1.webm', 'title' => 'AI Automation'],
        ['image' => '/assets/project/aiSol/2.webm', 'title' => 'Smart CRM'],
        ['image' => '/assets/project/aiSol/3.webm', 'title' => 'Neural ERP'],
        ['image' => '/assets/project/aiSol/4.webm', 'title' => 'Data Analytics'],
        ['image' => '/assets/project/aiSol/5.webm', 'title' => 'Vision Systems'],
    ];

    $aiDesignProjects = [
        
        ['image' => '/assets/project/aiDes/ai1.webp','title' => 'ai1', 'url' => 'https://www.youtube.com/watch?v=e_cr04R6vrg&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt'],
        ['image' => '/assets/project/aiDes/ai2.webp','title' => 'ai2', 'url' => 'https://www.youtube.com/watch?v=y8wJJ6CyfvY&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=3'],
        ['image' => '/assets/project/aiDes/ai3.webp','title' => 'ai3', 'url' => 'https://www.youtube.com/watch?v=Bvt45L4Krtc&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=6'],
        ['image' => '/assets/project/aiDes/ai4.webp','title' => 'ai4', 'url' => 'https://www.youtube.com/watch?v=9Uv7a4YjrFU&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=2'],
        ['image' => '/assets/project/aiDes/ai5.webp','title' => 'ai5', 'url' => 'https://www.youtube.com/watch?v=d79Tf7NZ0Kg&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=4'],
        ['image' => '/assets/project/aiDes/ai6.webp','title' => 'ai6', 'url' => 'https://www.youtube.com/watch?v=HH-zJqaATaY&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=9'],
        ['image' => '/assets/project/aiDes/ai7.webp', 'title' => 'ai7','url' => 'https://www.youtube.com/watch?v=b3iuAslbR6w&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=8'],
    ];
    

    $customProjects = [
        ['title' => 'Robotech', 'shortDesc' => 'Advanced robotics and industrial automation solutions.', 'desc' => 'A cutting-edge platform for robotics technology, showcasing industrial automation, smart machinery, and future-tech solutions for modern manufacturing.', 'tag' => 'AI', 'image' => '/assets/project/custom/1.webm', 'tech' => ['React', 'Three.js', 'Node.js', 'WebGL'], 'features' => ['3D model interaction', 'Real-time telemetry dashboard', 'Automated maintenance scheduling'], 'demo' => ['username' => 'admin@robotech.io', 'password' => 'robot_secure_99'], 'url' => 'https://templates.heydenstd.com/robotech/template-kit/home/?storefront=envato-elementsTB_iframe=true&width=600&height=550'],
        ['title' => 'AI Foundries', 'shortDesc' => 'Integrated ecosystem for artificial intelligence development.', 'desc' => 'A comprehensive AI development hub providing tools for machine learning, data processing, and neural network training in a collaborative environment.', 'tag' => 'SaaS', 'image' => '/assets/project/custom/2.webm', 'tech' => ['Next.js', 'Python', 'TensorFlow', 'AWS'], 'features' => ['Model training visualization', 'Collaborative workspaces', 'API deployment suite'], 'demo' => ['username' => 'dev@aifoundaries.com', 'password' => 'ai_pro_test_123'], 'url' => 'https://elementor.altdesain.com/aifoundaries/?storefront=envato-elementsTB_iframe%3Dtrue&width=600&height=550'],
        ['title' => 'EasyBridge', 'shortDesc' => 'Your Bridge to Homeownership.', 'desc' => 'Apply for your mortgage loan online in minutes. Simple, transparent, and stress-free — EasyBridge makes the path to your dream home a reality.', 'tag' => 'Fintech', 'image' => '/assets/project/custom/3.webm', 'tech' => ['PHP', 'Laravel', 'MySQL', 'Stripe'], 'features' => ['Quick mortgage application', 'Real-time status tracking', 'Secure document upload'], 'demo' => ['username' => 'borrower@easybridge.com', 'password' => 'loan_secure_456'], 'url' => 'https://easybridge.corammerswork.com/'],
        ['title' => 'CPA Connections', 'shortDesc' => 'Financial advisor recruitment and professional networking.', 'desc' => 'A specialized recruitment platform connecting top-tier financial advisors with leading CPA firms, featuring advanced matching algorithms and career management tools.', 'tag' => 'Marketing', 'image' => '/assets/project/custom/4.webm', 'tech' => ['Laravel', 'Vue.js', 'PostgreSQL'], 'features' => ['AI-powered candidate matching', 'Professional profile builder', 'Secure communication portal'], 'demo' => ['username' => 'recruiter@cpaconnect.com', 'password' => 'cpa_network_789'], 'url' => 'https://cpaconnections.com/'],
        ['title' => 'RippleQuest', 'shortDesc' => 'Interactive digital quest and engagement platform.', 'desc' => 'An immersive platform designed for digital storytelling and community engagement, featuring interactive quests, rewards systems, and social integration.', 'tag' => 'eCommerce', 'image' => '/assets/project/custom/5.webm', 'tech' => ['React', 'Firebase', 'GSAP'], 'features' => ['Dynamic quest builder', 'Reward points ecosystem', 'Real-time community feed'], 'demo' => ['username' => 'player@ripplequest.dev', 'password' => 'quest_start_2026'], 'url' => 'https://ripplequest.corammerswork.com/'],
        ['title' => 'Gadam', 'shortDesc' => 'Creative portfolio and digital agency toolkit.', 'desc' => 'A premium digital agency platform designed for high-end creative portfolios, featuring advanced layout systems and interactive media presentations.', 'tag' => 'Marketing', 'image' => '/assets/project/custom/6.webm', 'tech' => ['PHP', 'CodeIgniter', 'jQuery', 'GSAP'], 'features' => ['Bespoke animation engine', 'Dynamic project grids', 'Integrated contact management'], 'demo' => ['username' => 'creative@gadam.net', 'password' => 'agency_pro_test'], 'url' => 'https://kits.krakenbox.net/gadam/?storefront=envato-elementsTB_iframe%3Dtrue&width=600&height=550'],
    ];

    $designProjects = [
        ['image' => '/assets/project/uiux/1.webm'],
        ['image' => '/assets/project/uiux/2.webm'],
        ['image' => '/assets/project/uiux/3.webm'],
        ['image' => '/assets/project/uiux/4.webm'],
        ['image' => '/assets/project/uiux/5.webm'],
        ['image' => '/assets/project/uiux/6.webm'],
        ['image' => '/assets/project/uiux/7.webm'],
        ['image' => '/assets/project/uiux/8.webm'],
        ['image' => '/assets/project/uiux/9.webm'],
    ];

    $tagStyles = [
        'Marketing'   => ['bg' => 'rgba(245,158,11,0.15)', 'border' => 'rgba(245,158,11,0.45)', 'color' => '#d97706', 'dot' => '#d97706'],
        'PHP'         => ['bg' => 'rgba(139,92,246,0.15)', 'border' => 'rgba(139,92,246,0.45)', 'color' => '#7c3aed', 'dot' => '#7c3aed'],
        'eCommerce'   => ['bg' => 'rgba(16,185,129,0.15)', 'border' => 'rgba(16,185,129,0.45)', 'color' => '#059669', 'dot' => '#059669'],
        'Laravel'     => ['bg' => 'rgba(239,68,68,0.15)', 'border' => 'rgba(239,68,68,0.45)', 'color' => '#dc2626', 'dot' => '#dc2626'],
        'SaaS'        => ['bg' => 'rgba(132,204,22,0.15)', 'border' => 'rgba(132,204,22,0.45)', 'color' => '#65a30d', 'dot' => '#65a30d'],
        'Construction'=> ['bg' => 'rgba(20,184,166,0.15)', 'border' => 'rgba(20,184,166,0.45)', 'color' => '#0d9488', 'dot' => '#0d9488'],
        'Legal'       => ['bg' => 'rgba(71,85,105,0.15)', 'border' => 'rgba(71,85,105,0.45)', 'color' => '#475569', 'dot' => '#475569'],
        'Luxury'      => ['bg' => 'rgba(217,119,6,0.15)', 'border' => 'rgba(217,119,6,0.45)', 'color' => '#b45309', 'dot' => '#b45309'],
        'Hospitality' => ['bg' => 'rgba(219,39,119,0.15)', 'border' => 'rgba(219,39,119,0.45)', 'color' => '#db2777', 'dot' => '#db2777'],
        'Real Estate' => ['bg' => 'rgba(37,99,235,0.15)', 'border' => 'rgba(37,99,235,0.45)', 'color' => '#2563eb', 'dot' => '#2563eb'],
        'Mobility'    => ['bg' => 'rgba(124,58,237,0.15)', 'border' => 'rgba(124,58,237,0.45)', 'color' => '#7c3aed', 'dot' => '#7c3aed'],
        'AI'          => ['bg' => 'rgba(99,102,241,0.15)', 'border' => 'rgba(99,102,241,0.45)', 'color' => '#6366f1', 'dot' => '#6366f1'],
        'Fintech'     => ['bg' => 'rgba(16,185,129,0.15)', 'border' => 'rgba(16,185,129,0.45)', 'color' => '#059669', 'dot' => '#059669'],
        'Science'     => ['bg' => 'rgba(37,99,235,0.15)', 'border' => 'rgba(37,99,235,0.45)', 'color' => '#2563eb', 'dot' => '#2563eb'],
        'Art'         => ['bg' => 'rgba(219,39,119,0.15)', 'border' => 'rgba(219,39,119,0.45)', 'color' => '#db2777', 'dot' => '#db2777'],
        'Lifestyle'   => ['bg' => 'rgba(245,158,11,0.15)', 'border' => 'rgba(245,158,11,0.45)', 'color' => '#d97706', 'dot' => '#d97706'],
        'Travel'      => ['bg' => 'rgba(20,184,166,0.15)', 'border' => 'rgba(20,184,166,0.45)', 'color' => '#0d9488', 'dot' => '#0d9488'],
        'Wellness'    => ['bg' => 'rgba(132,204,22,0.15)', 'border' => 'rgba(132,204,22,0.45)', 'color' => '#65a30d', 'dot' => '#65a30d'],
        'Sports'      => ['bg' => 'rgba(37,99,235,0.15)', 'border' => 'rgba(37,99,235,0.45)', 'color' => '#2563eb', 'dot' => '#2563eb'],
    ];

    $tabs = [
        ['key' => 'web', 'label' => 'Web'],
        ['key' => 'custom', 'label' => 'Custom App'],
        ['key' => 'mobile', 'label' => 'Mobile App'],
        ['key' => 'ai-solution', 'label' => 'AI Solution'],
        ['key' => 'ai-design', 'label' => 'AI Creative'],
        ['key' => 'uiux', 'label' => 'UI/UX'],
    ];

    $tickerItems = [
        ['label' => 'Creative Web', 'icon' => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6" /><polyline points="8 6 2 12 8 18" /></svg>'],
        ['label' => 'Custom Mobile', 'icon' => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2" /><line x1="12" y1="18" x2="12.01" y2="18" /></svg>'],
        ['label' => 'UI/UX Design', 'icon' => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" /></svg>'],
        ['label' => 'Digital Strategy', 'icon' => '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>'],
        ['label' => 'Performance', 'icon' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg>'],
    ];

    // Reusable tag badge renderer
    $pfBadge = function ($tag) use ($tagStyles) {
        $cfg = $tagStyles[$tag] ?? $tagStyles['SaaS'];
        return '<span style="display:inline-flex;align-items:center;gap:6px;padding:5px 12px;border-radius:999px;background:' . $cfg['bg'] . ';border:1px solid ' . $cfg['border'] . ';backdrop-filter:blur(8px)">'
            . '<span style="width:6px;height:6px;border-radius:50%;background:' . $cfg['dot'] . ';box-shadow:0 0 6px ' . $cfg['dot'] . ';flex-shrink:0"></span>'
            . '<span style="font-family:\'Montserrat\',sans-serif;font-size:0.68rem;font-weight:700;color:' . $cfg['color'] . ';letter-spacing:0.12em;text-transform:uppercase">' . e($tag) . '</span></span>';
    };
@endphp

@section('content')
<div class="pw-portfolio">

    {{-- ── Hero ── --}}
    <section class="hero">
        <div class="hero-text">
            <h1 class="hero-heading visible">Portfolio</h1>
            <p class="hero-sub visible">
                Explore our curated selection of high-performance web platforms,<br>
                mobile applications, and creative digital experiences.
            </p>
        </div>

        <div class="hero-bottom-group">
            <div class="slider-wrap">
                <div class="slider-track">
                    @foreach(array_merge($heroImages, $heroImages) as $img)
                        <div class="slide-item" data-size="{{ $img['size'] }}" data-height="{{ $img['height'] }}">
                            <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" loading="lazy">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="hero-meta">
                <span class="scroll-label">
                    SCROLL
                    <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                        <line x1="2.5" y1="2.5" x2="11.5" y2="11.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                        <polyline points="6.5,11.5 11.5,11.5 11.5,6.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                    </svg>
                </span>
                <span class="copy-label">©2026</span>
            </div>
        </div>
    </section>

    <main class="pf-main">
        {{-- ── Sub Header + Tab Bar ── --}}
        <section class="pf-section">
            <div class="pf-inner">
                <div style="margin-bottom:48px">
                    <div class="pf-label-row">
                        <div class="pf-robot-badge">
                            <img loading="lazy" decoding="async" class="robo-dark" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain">
                            <img loading="lazy" decoding="async" class="robo-light" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain">
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

                <div style="display:flex;flex-direction:column;align-items:center;padding-bottom:56px">
                    {{-- Desktop Filter --}}
                    <div class="pf-segmented-control" id="pf-segmented">
                        <span class="pf-segment-pill" id="pf-segment-pill"></span>
                        @foreach($tabs as $i => $tab)
                            <button type="button" class="pf-segment-btn{{ $i === 0 ? ' pf-segment-active' : '' }}" data-filter="{{ $tab['key'] }}">
                                {{ $tab['label'] }}
                            </button>
                        @endforeach
                    </div>

                    {{-- Mobile Filter Dropdown --}}
                    <div class="pf-mobile-filter">
                        <div class="pf-dropdown-trigger" id="pf-dropdown-trigger">
                            <div class="pf-dropdown-label-wrap">
                                <span class="pf-dropdown-label">Show:</span>
                                <span class="pf-dropdown-value" id="pf-dropdown-value">{{ $tabs[0]['label'] }}</span>
                            </div>
                            <svg id="pf-dropdown-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="transition:transform 0.4s cubic-bezier(0.22,1,0.36,1);color:var(--primary)">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </div>
                        <div class="pf-dropdown-menu" id="pf-dropdown-menu">
                            @foreach($tabs as $i => $tab)
                                <button type="button" class="pf-dropdown-item{{ $i === 0 ? ' pf-active' : '' }}" data-filter="{{ $tab['key'] }}">
                                    {{ $tab['label'] }}
                                    <svg class="pf-dropdown-check" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" style="{{ $i === 0 ? '' : 'display:none' }}">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════ WEB PANEL ══════════ --}}
        <section class="pf-panel pf-panel-active" data-panel="web">
            <div class="pf-section" style="padding-top:80px">
                <div class="pf-inner">
                    <div class="proj-grid">
                        @foreach($webProjects as $p)
                            <div class="pf-card pf-card-visible"@if($loop->iteration > 3) hidden @endif style="background:var(--surface);cursor:pointer" onclick="window.open('{{ $p['url'] }}','_blank')">
                                <div style="position:relative;height:252px;overflow:hidden">
                                    @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline class="pf-web-slide-img" style="display:block;width:100%;height:auto;position:absolute;top:0;left:0;will-change:transform"></video>
@else
<img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy" class="pf-web-slide-img" style="display:block;width:100%;height:auto;position:absolute;top:0;left:0;will-change:transform">
@endif
                                    <div style="position:absolute;top:14px;left:14px;z-index:10">{!! $pfBadge($p['tag']) !!}</div>
                                    <div style="position:absolute;bottom:0;left:0;right:0;height:60px;z-index:4;pointer-events:none;background:linear-gradient(to top,var(--surface),transparent)"></div>
                                </div>
                                <div style="padding:20px 22px 26px;background:var(--surface);position:relative">
                                    <h3 style="font-family:'Poppins',sans-serif;font-size:1.05rem;font-weight:700;color:var(--text);margin:12px 0 8px;letter-spacing:-0.01em;line-height:1.3">{{ $p['title'] }}</h3>
                                    <p style="font-family:'Montserrat',sans-serif;font-size:0.86rem;color:var(--text-muted);line-height:1.75;margin:0">{{ $p['desc'] }}</p>
                                    <div style="margin-top:16px;display:flex;align-items:center;gap:6px">
                                        <span style="font-family:'Montserrat',sans-serif;font-size:0.72rem;font-weight:700;color:var(--primary);letter-spacing:0.12em;text-transform:uppercase">Explore</span>
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
            </div>
        </section>

        {{-- ══════════ CUSTOM PANEL ══════════ --}}
        <section class="pf-panel" data-panel="custom">
            <div class="pf-section">
                <div class="pf-inner">
                    <div class="custom-grid">
                        @foreach($customProjects as $idx => $p)
                            <div class="pf-card pf-card-visible"@if($loop->iteration > 3) hidden @endif style="border-radius:20px;height:auto;display:flex;flex-direction:column;background:var(--surface)">
                                <div style="position:relative;height:238px;overflow:hidden">
                                    @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline style="width:100%;height:100%;object-fit:cover;display:block"></video>
@else
<img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
@endif
                                    <div style="position:absolute;inset:0;background:linear-gradient(to bottom,transparent 50%,rgba(0,0,0,0.38) 100%);pointer-events:none"></div>
                                    <div style="position:absolute;top:14px;left:14px">{!! $pfBadge($p['tag']) !!}</div>
                                </div>
                                <div style="padding:18px 20px 20px;background:var(--surface);flex-grow:1;display:flex;flex-direction:column">
                                    <h3 style="font-family:'Poppins',sans-serif;font-size:1.1rem;font-weight:700;color:var(--text);margin:0 0 6px;letter-spacing:-0.01em">{{ $p['title'] }}</h3>
                                    <p style="font-family:'Montserrat',sans-serif;font-size:0.78rem;line-height:1.65;color:var(--text-soft);margin:0 0 16px;flex-grow:1">{{ $p['shortDesc'] }}</p>
                                    <div style="display:flex;gap:8px;margin-top:auto">
                                        <button type="button" class="pf-explore-btn" onclick="window.open('{{ $p['url'] }}','_blank')" style="flex:1;display:flex;align-items:center;justify-content:center;gap:6px;padding:9px 0;border-radius:10px;background:var(--primary);border:none;color:var(--filter-text-active);font-family:'Montserrat',sans-serif;font-size:0.7rem;font-weight:700;letter-spacing:0.07em;text-transform:uppercase;cursor:pointer;transition:all 0.3s ease">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" /><polyline points="15 3 21 3 21 9" /><line x1="10" y1="14" x2="21" y2="3" /></svg>
                                            Explore
                                        </button>
                                        <button type="button" class="pf-custom-toggle" data-target="pf-custom-details-{{ $idx }}" style="flex:1;padding:9px 0;border-radius:10px;background:transparent;border:1px solid var(--border);color:var(--text-muted);font-family:'Montserrat',sans-serif;font-size:0.7rem;font-weight:700;letter-spacing:0.07em;text-transform:uppercase;cursor:pointer;transition:all 0.3s ease">
                                            Details
                                        </button>
                                    </div>
                                </div>
                                <div class="pf-custom-details" id="pf-custom-details-{{ $idx }}" style="max-height:0;overflow:hidden;transition:max-height 0.52s cubic-bezier(0.4,0,0.2,1)">
                                    <div style="height:1px;background:linear-gradient(90deg,transparent,color-mix(in srgb,var(--primary),transparent 40%),transparent);margin:0 20px"></div>
                                    <div style="padding:22px 20px 24px;background:var(--bg-alt)">
                                        <p style="font-family:'Montserrat',sans-serif;font-size:0.81rem;line-height:1.9;color:var(--text-muted);margin:0 0 24px">{{ $p['desc'] }}</p>
                                        <p style="font-family:'Montserrat',sans-serif;font-size:0.63rem;font-weight:700;color:var(--text-soft);letter-spacing:0.16em;text-transform:uppercase;margin:0 0 9px">Technology</p>
                                        <div style="display:flex;flex-wrap:wrap;gap:7px;margin-bottom:22px">
                                            @foreach($p['tech'] as $t)
                                                <span style="padding:5px 13px;border-radius:999px;background:transparent;border:1px solid var(--primary);color:var(--text);font-family:'Montserrat',sans-serif;font-size:0.71rem;font-weight:600">{{ $t }}</span>
                                            @endforeach
                                        </div>
                                        <p style="font-family:'Montserrat',sans-serif;font-size:0.63rem;font-weight:700;color:var(--text-soft);letter-spacing:0.16em;text-transform:uppercase;margin:0 0 9px">Features</p>
                                        <div style="display:flex;flex-direction:column;gap:9px;margin-bottom:22px">
                                            @foreach($p['features'] as $f)
                                                <div style="display:flex;align-items:center;gap:9px">
                                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0"><polyline points="13 17 18 12 13 7" /><polyline points="6 17 11 12 6 7" /></svg>
                                                    <span style="font-family:'Montserrat',sans-serif;font-size:0.79rem;color:var(--text);font-weight:500;line-height:1.5">{{ $f }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                        <p style="font-family:'Montserrat',sans-serif;font-size:0.63rem;font-weight:700;color:var(--text-soft);letter-spacing:0.16em;text-transform:uppercase;margin:0 0 9px">Demo Account</p>
                                        <div style="background:var(--bg-alt);border:1px solid var(--border);border-radius:12px;padding:13px 16px;display:flex;flex-direction:column;gap:6px">
                                            <p style="font-family:'Montserrat',sans-serif;font-size:0.77rem;color:var(--text);margin:0"><span style="color:var(--text-soft);margin-right:10px;font-size:0.71rem">Username</span>{{ $p['demo']['username'] }}</p>
                                            <p style="font-family:'Montserrat',sans-serif;font-size:0.77rem;color:var(--text);margin:0"><span style="color:var(--text-soft);margin-right:10px;font-size:0.71rem">Password</span>{{ $p['demo']['password'] }}</p>
                                        </div>
                                    </div>
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
            </div>
        </section>

        {{-- ══════════ MOBILE PANEL ══════════ --}}
        <section class="pf-panel" data-panel="mobile">
            <div class="pf-section" style="padding-top:80px">
                <div class="pf-inner">
                    <div class="proj-grid">
                        @foreach($mobileProjects as $p)
                            <div class="pf-card pf-card-visible"@if($loop->iteration > 3) hidden @endif style="background:var(--surface)">
                                <div style="position:relative;height:252px;overflow:hidden">
                                    @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline style="width:100%;height:100%;object-fit:cover;display:block"></video>
@else
<img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
@endif
                                    <div style="position:absolute;top:14px;left:14px;z-index:10">{!! $pfBadge($p['tag']) !!}</div>
                                    <div style="position:absolute;bottom:0;left:0;right:0;height:60px;z-index:4;pointer-events:none;background:linear-gradient(to top,var(--surface),transparent)"></div>
                                </div>
                                <div style="padding:20px 22px 26px;background:var(--surface);position:relative">
                                    <h3 style="font-family:'Poppins',sans-serif;font-size:1.05rem;font-weight:700;color:var(--text);margin:12px 0 8px;letter-spacing:-0.01em;line-height:1.3">{{ $p['title'] }}</h3>
                                    <p style="font-family:'Montserrat',sans-serif;font-size:0.86rem;color:var(--text-muted);line-height:1.75;margin:0">{{ $p['desc'] }}</p>
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
            </div>
        </section>

        {{-- ══════════ AI SOLUTION PANEL ══════════ --}}
        <section class="pf-panel" data-panel="ai-solution">
            <div class="pf-section" style="padding-top:80px">
                <div class="pf-inner">
                    <div class="ai-grid">
                        @foreach($aiSolutionProjects as $p)
                            <div class="pf-card pf-card-visible"@if($loop->iteration > 2) hidden @endif style="border-radius:12px;overflow:hidden;position:relative">
                                <div style="width:100%;aspect-ratio:16/9;overflow:hidden;position:relative">
                                    @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline style="width:100%;height:100%;object-fit:cover;display:block"></video>
@else
<img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block">
@endif
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
            </div>
        </section>

      {{-- ══════════ AI DESIGN PANEL ══════════ --}}
{{--
    CHANGE SUMMARY vs original:
    1. Card gains  cursor:pointer  +  onclick="window.open(...)"
    2. Image wrapper gains  position:relative + overflow:hidden  (for zoom clipping)
    3. Image gains  .pf-card-img  class for the hover-zoom transition
    4. NEW: .pf-video-overlay div with .pf-play-btn-wrap + .pf-play-btn
       sits inside the image wrapper. The wrap adds THREE staggered
       animated pulse rings (::before/::after + .pf-play-btn-wrap span)
       so a ring is always mid-expansion.
    Everything else (grid, aspect-ratio, load-more, hidden logic) is unchanged.
--}}
<section class="pf-panel" data-panel="ai-design">
    <div class="pf-section" style="padding-top:80px">
        <div class="pf-inner">
            <div class="ai-grid">
                @foreach($aiDesignProjects as $p)
                    {{--
                        CHANGED: added  cursor:pointer  and  onclick  to open the YouTube URL.
                        The overlay's pointer-events:none lets this onclick fire
                        whether the user clicks the image, the play button, or a pulse ring.
                    --}}
                    <div class="pf-card pf-card-visible"
                         @if($loop->iteration > 2) hidden @endif
                         style="border-radius:12px;overflow:hidden;position:relative;cursor:pointer"
                         onclick="window.open('{{ $p['url'] }}','_blank')">

                        <div style="width:100%;aspect-ratio:16/9;overflow:hidden;position:relative">

                            @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline class="pf-card-img" style="width:100%;height:100%;object-fit:cover;display:block"></video>
@else
<img src="{{ $p['image'] }}"
                                 alt="{{ $p['title'] }}"
                                 loading="lazy"
                                 class="pf-card-img"
                                 style="width:100%;height:100%;object-fit:cover;display:block">
@endif

                            {{-- NEW: play button overlay with 3 staggered pulse rings --}}
                            <div class="pf-video-overlay">
                                <div class="pf-play-btn-wrap">
                                    <span class="pf-ring pf-ring-3"></span>
                                    <div class="pf-play-btn">
                                        {{--
                                            Solid black triangle. viewBox is square, polygon
                                            is optically centred. margin-left on the svg
                                            nudges the visual centre rightward.
                                        --}}
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="#000000" aria-hidden="true">
                                            <polygon points="6,3 20,12 6,21"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            {{-- END play button overlay --}}

                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Load More — unchanged --}}
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
    </div>
</section>
    

        {{-- ══════════ UI/UX PANEL ══════════ --}}
        <section class="pf-panel" data-panel="uiux">
            <div class="pf-section">
                <div class="pf-inner">
                    <div class="proj-grid">
                        @foreach($designProjects as $p)
                            <div class="pf-card pf-card-visible"@if($loop->iteration > 3) hidden @endif>
                                <div class="pf-card-img-wrap">
                                    @if(Str::endsWith($p['image'] ?? '', ['.webm', '.mp4']))
<video src="{{ $p['image'] }}" autoplay loop muted playsinline class="pf-card-img"></video>
@else
<img src="{{ $p['image'] }}" alt="Design Project" loading="lazy" class="pf-card-img">
@endif
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
            </div>
        </section>

        {{-- ── Ticker ── --}}
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
    </main>
</div>
@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('.pw-portfolio');
    if (!root) return;

    var tabLabels = {};
    root.querySelectorAll('.pf-segment-btn').forEach(function (b) {
        tabLabels[b.dataset.filter] = b.textContent.trim();
    });

    var pill = root.querySelector('#pf-segment-pill');

    function movePill(btn) {
        if (!pill || !btn) return;
        pill.style.left = btn.offsetLeft + 'px';
        pill.style.width = btn.offsetWidth + 'px';
    }

    function setFilter(key) {
        root.querySelectorAll('.pf-panel').forEach(function (panel) {
            panel.classList.toggle('pf-panel-active', panel.dataset.panel === key);
        });
        var activeBtn = null;
        root.querySelectorAll('.pf-segment-btn').forEach(function (b) {
            var on = b.dataset.filter === key;
            b.classList.toggle('pf-segment-active', on);
            if (on) activeBtn = b;
        });
        movePill(activeBtn);
        root.querySelectorAll('.pf-dropdown-item').forEach(function (b) {
            var on = b.dataset.filter === key;
            b.classList.toggle('pf-active', on);
            var check = b.querySelector('.pf-dropdown-check');
            if (check) check.style.display = on ? '' : 'none';
        });
        var valEl = root.querySelector('#pf-dropdown-value');
        if (valEl) valEl.textContent = tabLabels[key] || '';
    }

    root.querySelectorAll('.pf-segment-btn').forEach(function (b) {
        b.addEventListener('click', function () { setFilter(b.dataset.filter); });
    });
    root.querySelectorAll('.pf-dropdown-item').forEach(function (b) {
        b.addEventListener('click', function () {
            setFilter(b.dataset.filter);
            closeDropdown();
        });
    });

    // Initial pill position (retry once after layout settles)
    var firstActive = root.querySelector('.pf-segment-btn.pf-segment-active');
    movePill(firstActive);
    setTimeout(function () { movePill(root.querySelector('.pf-segment-btn.pf-segment-active')); }, 120);
    window.addEventListener('resize', function () {
        movePill(root.querySelector('.pf-segment-btn.pf-segment-active'));
    });

    // Mobile dropdown open/close
    var trigger = root.querySelector('#pf-dropdown-trigger');
    var menu = root.querySelector('#pf-dropdown-menu');
    var chevron = root.querySelector('#pf-dropdown-chevron');
    var dropdownOpen = false;
    function closeDropdown() {
        dropdownOpen = false;
        if (menu) menu.classList.remove('pf-open');
        if (chevron) chevron.style.transform = 'rotate(0)';
    }
    if (trigger) {
        trigger.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdownOpen = !dropdownOpen;
            if (menu) menu.classList.toggle('pf-open', dropdownOpen);
            if (chevron) chevron.style.transform = dropdownOpen ? 'rotate(180deg)' : 'rotate(0)';
        });
        document.addEventListener('click', function () { if (dropdownOpen) closeDropdown(); });
    }

    // Custom section details accordion
    root.querySelectorAll('.pf-custom-toggle').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var panel = root.querySelector('#' + btn.dataset.target);
            if (!panel) return;
            var isOpen = panel.style.maxHeight && panel.style.maxHeight !== '0px';
            if (isOpen) {
                panel.style.maxHeight = '0px';
                btn.textContent = 'Details';
                btn.style.borderColor = 'var(--border)';
                btn.style.color = 'var(--text-muted)';
            } else {
                panel.style.maxHeight = (panel.scrollHeight + 4) + 'px';
                btn.textContent = '✕  Close';
                btn.style.borderColor = 'var(--primary)';
                btn.style.color = 'var(--primary)';
            }
        });
    });

    // Load More functionality
    root.querySelectorAll('.pf-panel').forEach(function(panel) {
        var btn = panel.querySelector('.pf-loadmore-btn');
        var done = panel.querySelector('.pf-done');
        var isAiPanel = panel.dataset.panel === 'ai-solution' || panel.dataset.panel === 'ai-design';
        var BATCH = isAiPanel ? 2 : 3;
        var loading = false;
        
        if (btn) {
            btn.addEventListener('click', function () {
                if (loading) return;
                loading = true;
                btn.classList.add('is-loading');
                
                var labels = btn.querySelectorAll('.split-btn-label, .split-btn-text');
                var oldText = labels[0].innerText;
                labels.forEach(function(l) { l.innerText = 'Loading...'; });
                
                setTimeout(function() {
                    var hidden = panel.querySelectorAll('.pf-card[hidden]');
                    for (var i = 0; i < BATCH && i < hidden.length; i++) {
                        hidden[i].removeAttribute('hidden');
                    }
                    
                    loading = false;
                    btn.classList.remove('is-loading');
                    labels.forEach(function(l) { l.innerText = oldText; });
                    
                    if (panel.querySelectorAll('.pf-card[hidden]').length === 0) {
                        btn.style.display = 'none';
                        if (done) done.style.display = 'inline-flex';
                    }
                }, 600);
            });
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
