@extends('layouts.app')

@section('title', 'About Us — Corammers')
@section('meta_description', 'Meet Corammers: an engineering-led digital agency where human creativity meets AI. Our team, mission and the way we build.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/about.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
@endpush

@section('content')
@php
    $robo = '<img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robo-dark" style="width:32px;height:32px;object-fit:contain;display:block"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robo-light" style="width:32px;height:32px;object-fit:contain;display:block">';

    $experienceItems = [
        ['num' => '01', 'title' => 'Web Development Experience', 'sub' => 'Frontend & Backend Mastery', 'desc' => 'From pixel-perfect interfaces to robust server-side architectures, we craft end-to-end web solutions using React, Next.js, Laravel, and Node.js engineered for performance, scalability, and lasting impact.', 'tags' => ['React', 'Next.js', 'Laravel', 'Node.js']],
        ['num' => '02', 'title' => 'Mobile & App Solutions', 'sub' => 'Cross-Platform Excellence', 'desc' => 'We design and build mobile-first applications for iOS and Android using Flutter and React Native. Every app we deliver is intuitive, fast, and built to grow with your business.', 'tags' => ['Flutter', 'React Native', 'iOS', 'Android']],
        ['num' => '03', 'title' => 'Enterprise & Custom Projects', 'sub' => 'Large-Scale Digital Infrastructure', 'desc' => 'Complex workflows, integrations, and custom platforms are our specialty. We have delivered enterprise-grade solutions for businesses across industries handling everything from architecture to deployment.', 'tags' => ['SaaS', 'API Design', 'DevOps', 'Custom CMS']],
    ];

    $specialties = [
        ['category' => 'Development', 'title' => 'PHP & Laravel Development', 'desc' => 'We build robust, scalable web applications using PHP and the Laravel framework. From RESTful APIs to complex backend systems, our Laravel expertise powers high-performance products used by thousands of users daily.', 'tags' => ['PHP', 'Laravel', 'REST API', 'MySQL']],
        ['category' => 'Development', 'title' => 'WordPress Solutions', 'desc' => 'Custom themes, plugins, and full WordPress ecosystems tailored to your brand. We go far beyond templates every WordPress project we deliver is unique, fast, and fully maintainable by your team.', 'tags' => ['WordPress', 'WooCommerce', 'Custom Themes', 'Plugins']],
        ['category' => 'Development', 'title' => 'Custom Web Applications', 'desc' => "When off-the-shelf tools aren't enough, we engineer bespoke web applications from scratch. Fully custom logic, databases, and interfaces designed around your exact business workflows and goals.", 'tags' => ['React', 'Next.js', 'Node.js', 'PostgreSQL']],
        ['category' => 'Development', 'title' => 'Ecommerce Platforms', 'desc' => 'From WooCommerce to fully custom storefronts, we build ecommerce experiences that convert. Seamless payment integrations, inventory management, and checkout flows optimized for every device.', 'tags' => ['WooCommerce', 'Shopify', 'Stripe', 'Payment Gateways']],
        ['category' => 'Development', 'title' => 'Mobile App Development', 'desc' => 'Cross-platform mobile apps built with Flutter and React Native. We deliver native-quality experiences on both iOS and Android from a single codebase reducing cost without sacrificing performance.', 'tags' => ['Flutter', 'React Native', 'iOS', 'Android']],
        ['category' => 'Development', 'title' => 'API & Backend Systems', 'desc' => 'Rock-solid API architecture and backend infrastructure. We design RESTful and GraphQL APIs built for reliability, security, and scale — complete with documentation, versioning, and monitoring.', 'tags' => ['GraphQL', 'REST API', 'DevOps', 'AWS']],
        ['category' => 'Marketing', 'title' => 'Social Media Marketing', 'desc' => 'Strategic social media campaigns that build communities, drive engagement, and convert followers into loyal customers. We manage content calendars, paid campaigns, and analytics across all major platforms.', 'tags' => ['Instagram', 'LinkedIn', 'Facebook', 'TikTok']],
        ['category' => 'Marketing', 'title' => 'SEO & AEO', 'desc' => 'Dominate search rankings with our proven SEO and Answer Engine Optimization strategies. We combine technical audits, keyword architecture, and content strategies to drive sustainable organic growth and AI-powered visibility.', 'tags' => ['On-Page SEO', 'Technical SEO', 'AEO', 'Link Building']],
        ['category' => 'Marketing', 'title' => 'Google Ads', 'desc' => 'High-converting Google Ads campaigns engineered for maximum ROI. From Search and Display to Shopping and YouTube, our PPC specialists create data-driven campaigns that put your brand in front of the right audience at the right moment.', 'tags' => ['Search Ads', 'Display Ads', 'Shopping Ads', 'YouTube Ads']],
        ['category' => 'Marketing', 'title' => 'Email Marketing', 'desc' => 'Automated email sequences and broadcast campaigns that nurture leads and drive repeat revenue. We craft compelling copy, design beautiful templates, and implement smart segmentation for measurable results.', 'tags' => ['Automation', 'Drip Campaigns', 'Klaviyo', 'Mailchimp']],
        ['category' => 'Design', 'title' => 'UI/UX Design', 'desc' => 'User interfaces crafted with empathy and precision. Our UX process starts with research and wireframes, moving through interactive prototypes to pixel-perfect final designs that delight users and drive business outcomes.', 'tags' => ['Figma', 'Prototyping', 'User Research', 'Design Systems']],
        ['category' => 'Design', 'title' => 'Graphic Design', 'desc' => 'Striking visual assets that communicate your brand story with clarity and impact. From social media graphics to print collateral, marketing materials, and everything in between all crafted to stand out.', 'tags' => ['Print Design', 'Social Graphics', 'Infographics', 'Illustrations']],
        ['category' => 'Design', 'title' => 'Video Editing', 'desc' => 'Professional video production and post-editing for brands that want to captivate. We handle everything from raw footage editing and motion graphics to colour grading, sound design, and final delivery.', 'tags' => ['Motion Graphics', 'Color Grading', 'After Effects', 'Reels']],
        ['category' => 'Design', 'title' => 'Branding & Identity', 'desc' => 'Complete brand identity systems built from the ground up. We craft logos, typography systems, colour palettes, brand guidelines, and comprehensive visual identities that make your brand unmistakable and unforgettable.', 'tags' => ['Logo Design', 'Brand Guidelines', 'Typography', 'Visual Identity']],
    ];

    $catColors = [
        'Development' => ['bg' => 'rgba(234, 62, 62, 0.12)', 'text' => '#b07474', 'border' => 'rgba(234, 62, 62, 0.3)'],
        'Marketing'   => ['bg' => 'rgba(99,179,237,0.12)', 'text' => '#63b3ed', 'border' => 'rgba(99,179,237,0.3)'],
        'Design'      => ['bg' => 'rgba(237,137,54,0.12)', 'text' => '#ed8936', 'border' => 'rgba(237,137,54,0.3)'],
    ];

    $catIcons = [
        'All' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>',
        'Development' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
        'Marketing' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
        'Design' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"/><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"/><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"/><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"/></svg>',
    ];

    $specialtyCategories = ['All', 'Development', 'Marketing', 'Design'];
    $catCounts = ['All' => count($specialties)];
    foreach (['Development', 'Marketing', 'Design'] as $c) {
        $catCounts[$c] = count(array_filter($specialties, fn($s) => $s['category'] === $c));
    }

    $approachSteps = [
        ['num' => '01', 'title' => 'Understanding Requirements', 'desc' => 'Deep discovery sessions to align on goals, audience, and success metrics before a single line of code is written.'],
        ['num' => '02', 'title' => 'Strategic Planning', 'desc' => 'Roadmaps, tech stack decisions, and timelines crafted for clarity and speed so nothing is left to guesswork.'],
        ['num' => '03', 'title' => 'Development & Execution', 'desc' => 'Agile sprints with regular check-ins, transparent progress, and clean code delivery at every milestone.'],
        ['num' => '04', 'title' => 'Testing & Optimization', 'desc' => 'QA, performance tuning, and real-world validation before every launch because details define excellence.'],
    ];

    $clientLogos = [
        ['name' => 'Apple', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'],
        ['name' => 'Google', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg'],
        ['name' => 'Microsoft', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg'],
        ['name' => 'Amazon', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
        ['name' => 'Meta', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg'],
    ];

    $badges = [
        ['l1' => 'TOP', 'l2' => 'JAVA DEVS', 'l3' => 'UNITED STATES 2025', 'label' => "Top Java\nDevelopers"],
        ['l1' => 'TOP', 'l2' => 'WEB DEVS', 'l3' => 'NORTH CAROLINA 2025', 'label' => "Top Web\nDevelopers"],
        ['l1' => 'TOP', 'l2' => 'SOFTWARE', 'l3' => 'NORTH CAROLINA 2025', 'label' => "Top Software\nDevelopers"],
        ['l1' => 'TOP', 'l2' => 'AI AGENTS', 'l3' => 'UNITED STATES 2025', 'label' => "Top AI\nAgencies"],
        ['l1' => 'TOP', 'l2' => 'RATED', 'l3' => 'GLOBAL 2025', 'label' => "Top Rated\nAgency"],
        ['l1' => 'TOP', 'l2' => 'APP DEVS', 'l3' => 'NORTH CAROLINA 2025', 'label' => "Top App\nDevelopers"],
        ['l1' => 'TOP', 'l2' => 'B2B COMP', 'l3' => 'UNITED STATES 2025', 'label' => "Top B2B\nCompanies"],
        ['l1' => 'TOP', 'l2' => 'ECOMMERCE', 'l3' => 'GLOBAL 2025', 'label' => "Top eCommerce\nDevelopers"],
        ['l1' => 'TOP', 'l2' => 'UX/UI', 'l3' => 'UNITED STATES 2025', 'label' => "Top UX/UI\nDesigners"],
    ];

    $featuredPost = ['category' => 'Sales Development', 'title' => 'The Hidden Cost of "Almost Compliant" Global Hiring (And How EOR Fixes It)', 'author' => 'Shayan', 'date' => 'January 12, 2026', 'avatar' => '/assets/4.webp', 'image' => '/assets/ind7.webp', 'href' => '/blog/detail'];
    $gridPosts = [
        ['category' => 'Sales Development', 'title' => 'The Team Growth Calculator: How to Forecast Your Next Hire in 2 Minutes', 'author' => 'Shayan', 'date' => 'January 5, 2026', 'avatar' => '/assets/4.webp', 'image' => '/assets/ind2.webp', 'href' => '/blog/detail'],
        ['category' => 'Executive Assistant · Learning Center · Marketing', 'title' => 'Why Most Agencies Overhire in January (And How to Prevent It)', 'author' => 'Shayan', 'date' => 'December 29, 2025', 'avatar' => '/assets/4.webp', 'image' => '/assets/ind3.webp', 'href' => '/blog/detail'],
        ['category' => 'Executive Assistant · Marketing', 'title' => 'Team Culture & Virtual Workflows: Building Cohesion Across Borders', 'author' => 'Shayan', 'date' => 'December 21, 2025', 'avatar' => '/assets/4.webp', 'image' => '/assets/ind4.webp', 'href' => '/blog/detail'],
        ['category' => 'Business · Executive Assistant · Learning Center', 'title' => "When Hiring Feels Urgent, You're Already Late — Plan Ahead Instead", 'author' => 'Shayan', 'date' => 'December 14, 2025', 'avatar' => '/assets/4.webp', 'image' => '/assets/ind5.webp', 'href' => '/blog/detail'],
    ];

    $techStack = ['React', 'Next.js', 'Node.js', 'Express.js', 'Laravel', 'Vue.js', 'TypeScript', 'JavaScript', 'PHP', 'Python', 'HTML5', 'CSS', 'TailwindCSS', 'MongoDB', 'MySQL', 'Firebase', 'Docker', 'Git', 'GitHub', 'Vercel', 'GraphQL', 'Figma'];
    $techTripled = array_merge($techStack, $techStack, $techStack);
@endphp

<div class="pw-about">

    {{-- ── HERO ── --}}
    <section class="hero">
        <div class="hero-text">
            <h1 class="hero-heading">WE BUILD DIGITAL <br> FUTURES</h1>
            <p class="hero-sub">
                A multidisciplinary tech studio crafting AI-powered apps, immersive VR experiences,<br>
                and enterprise web platforms that scale without limits.
            </p>
        </div>

        <div class="about-inner">
            <div class="about-banner-wrap reveal">
                <img loading="lazy" decoding="async" src="/assets/about.webp" alt="About Us" class="about-banner-img">
                <a href="https://www.youtube.com/@codecaks" target="_blank" rel="noopener noreferrer" class="about-video-anchor">
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

    {{-- ── SECTION 1: EXPERIENCE ── --}}
    <section class="exp-section">
        <div class="section-inner exp-grid">
            <div class="exp-left reveal">
                <div class="section-label-row">
                    <div class="section-robot-badge">{!! $robo !!}</div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">Since 2018</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <h2 class="exp-heading">Our<br><span style="color:var(--accent-color)">Experience</span></h2>
                <p class="exp-intro">
                    Years of delivering digital excellence across development, design, and strategy — turning complex ideas into impactful solutions.
                </p>
                <div class="exp-stat-row">
                    <div class="exp-stat"><span class="exp-stat-num">200+</span><span class="exp-stat-label">Projects Delivered</span></div>
                    <div class="exp-stat"><span class="exp-stat-num">6+</span><span class="exp-stat-label">Years Active</span></div>
                </div>
            </div>

            <div class="exp-right">
                @foreach ($experienceItems as $i => $item)
                    <div class="exp-item reveal">
                        <div class="exp-item-top">
                            <span class="exp-num">{{ $item['num'] }}</span>
                            <div class="exp-item-header">
                                <span class="exp-sub">{{ $item['sub'] }}</span>
                                <h3 class="exp-title">{{ $item['title'] }}</h3>
                            </div>
                        </div>
                        <div class="exp-item-body">
                            <p class="exp-desc">{{ $item['desc'] }}</p>
                            <div class="exp-tags">
                                @foreach ($item['tags'] as $tag)
                                    <span class="exp-tag">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                        @if ($i < count($experienceItems) - 1)
                            <div class="exp-divider"></div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── SECTION 2: SPECIALTIES (accordion + filter tabs) ── --}}
    <section class="spec-section">
        <div class="section-inner">
            <div class="spec-header reveal">
                <div class="section-label-row">
                    <div class="section-robot-badge">{!! $robo !!}</div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">What We Do</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <div class="spec-heading-row">
                    <h2 class="spec-heading">Our <span style="color:var(--accent-color)">Specialties</span></h2>
                    <p class="spec-sub">
                        A focused set of disciplines — each executed with precision and depth across development, marketing, and design.
                    </p>
                </div>
            </div>

            <div class="spec-tabs reveal">
                @foreach ($specialtyCategories as $cat)
                    <button type="button" class="spec-tab{{ $cat === 'All' ? ' spec-tab--active' : '' }}" data-cat="{{ $cat }}">
                        <span class="spec-tab-icon">{!! $catIcons[$cat] !!}</span>
                        <span>{{ $cat }}</span>
                        <span class="spec-tab-count">{{ $catCounts[$cat] }}</span>
                    </button>
                @endforeach
            </div>

            <div class="spec-list">
                @foreach ($specialties as $i => $item)
                    @php $cat = $catColors[$item['category']] ?? $catColors['Development']; @endphp
                    <div class="spec-item reveal" data-cat="{{ $item['category'] }}" data-index="{{ $i }}">
                        <div class="spec-trigger">
                            <div class="spec-trigger-left">
                                <span class="spec-num">{{ sprintf('%02d', $i + 1) }}</span>
                                <div class="spec-trigger-meta">
                                    <span class="spec-category-badge" style="background:{{ $cat['bg'] }};color:{{ $cat['text'] }};border:1px solid {{ $cat['border'] }}">{{ $item['category'] }}</span>
                                    <span class="spec-q-text">{{ $item['title'] }}</span>
                                </div>
                            </div>
                            <button class="spec-icon-wrap" type="button" aria-expanded="false" aria-label="Open content">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="spec-body">
                            <div class="spec-body-inner">
                                <p class="spec-desc-text">{{ $item['desc'] }}</p>
                                <div class="spec-tags">
                                    @foreach ($item['tags'] as $tag)
                                        <span class="spec-tag" style="border-color:{{ $cat['border'] }};color:{{ $cat['text'] }};background:{{ $cat['bg'] }}">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="spec-footer-strip reveal">
                <div class="spec-stat-item"><span class="spec-stat-num">14+</span><span class="spec-stat-label">Disciplines</span></div>
                <div class="spec-stat-divider"></div>
                <div class="spec-stat-item"><span class="spec-stat-num">200+</span><span class="spec-stat-label">Projects</span></div>
                <div class="spec-stat-divider"></div>
                <div class="spec-stat-item"><span class="spec-stat-num">6+</span><span class="spec-stat-label">Years</span></div>
                <div class="spec-stat-divider"></div>
                <div class="spec-stat-item"><span class="spec-stat-num">50+</span><span class="spec-stat-label">Expert Team</span></div>
            </div>
        </div>
    </section>

    {{-- ── SECTION 3: APPROACH ── --}}
    <section class="approach-section">
        <div class="section-inner">
            <div class="approach-header reveal visible">
                <div class="section-label-row">
                    <div class="section-robot-badge">{!! $robo !!}</div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">How We Work</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <h2 class="approach-heading">Our <span style="color:var(--accent-color)">Approach</span></h2>
                <p class="approach-sub">
                    A process built on clarity, collaboration, and relentless attention to quality at every stage.
                </p>
            </div>

            <div class="approach-steps">
                @foreach ($approachSteps as $step)
                    <div class="approach-step reveal visible">
                        <div class="approach-step-inner">
                            <span class="approach-step-num">{{ $step['num'] }}</span>
                            <div class="approach-step-line"></div>
                            <h3 class="approach-step-title">{{ $step['title'] }}</h3>
                            <p class="approach-step-desc">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── CLIENT LOGO TICKER ── --}}
    <section class="logos-section">
        <div class="container">
            <p class="logos-label">Trusted by Industry Leaders</p>
            <div class="logos-slider-wrap">
                <div class="logos-track">
                    @foreach (array_merge($clientLogos, $clientLogos, $clientLogos) as $logo)
                        <div class="logo-item"><img loading="lazy" decoding="async" src="{{ $logo['url'] }}" alt="{{ $logo['name'] }}"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ── TRUST BADGES ── --}}
    <section class="tb-section">
        <div class="tb-inner">
            <div class="tb-grid">
                <div class="tb-left">
                    <div class="tb-eyebrow"><span class="tb-eyebrow-dot"></span>Certified &amp; Trusted</div>
                    <h2 class="tb-heading">Custom <span class="tb-hi">AI Agents</span> That<br>Think, Act, &amp; Deliver<br><span class="tb-hi">Real Results</span></h2>
                    <p class="tb-subtext">Recognised globally for building intelligent automation that drives measurable outcomes — not just demos.</p>
                    <a href="/contact" class="tb-btn">Let's Talk</a>
                </div>

                <div class="tb-right">
                    <div class="tb-badges-wrap">
                        <div class="tb-badges-row-top">
                            @foreach (array_slice($badges, 0, 5) as $b)
                                @include('pages.partials.about-hexbadge', ['b' => $b])
                            @endforeach
                        </div>
                        <div class="tb-badges-row-bot">
                            @foreach (array_slice($badges, 5, 4) as $b)
                                @include('pages.partials.about-hexbadge', ['b' => $b])
                            @endforeach
                        </div>
                    </div>

                    <div class="tb-trust-row">
                        <div class="tb-clutch-block">
                            <span class="tb-clutch-logo">Clutch</span>
                            <div class="tb-clutch-info">
                                <div class="tb-clutch-rating">
                                    <span class="tb-rating-score">5.0</span>
                                    <div class="tb-stars">
                                        @for ($i = 0; $i < 5; $i++)<span class="tb-star">★</span>@endfor
                                    </div>
                                </div>
                                <span class="tb-clutch-reviews">14 Reviews on Clutch</span>
                            </div>
                        </div>
                        <div class="tb-trust-divider"></div>
                        <div class="tb-tech-block">
                            <div class="tb-tech-icon">
                                <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="5" width="8" height="3" rx="1" fill="#0050a0" opacity=".8"/>
                                    <rect x="1" y="10" width="14" height="3" rx="1" fill="#0050a0"/>
                                    <rect x="1" y="15" width="10" height="3" rx="1" fill="#0050a0" opacity=".6"/>
                                    <circle cx="17" cy="16.5" r="3.5" fill="#D81D1F" opacity=".9"/>
                                </svg>
                            </div>
                            <div class="tb-tech-info">
                                <span class="tb-tech-label">Trusted on</span>
                                <span class="tb-tech-name">Tech Behemoths</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── BLOG SECTION ── --}}
    <section class="bs-section">
        <div class="bs-inner">
            <div class="bs-head">
                <div>
                    <div class="bs-label-row">
                        <div class="bs-robot">{!! $robo !!}</div>
                        <div class="bs-pill">
                            <span class="bs-pill-dot"></span>
                            <span class="bs-pill-text">Latest Insights</span>
                        </div>
                    </div>
                    <div class="bs-divider"></div>
                    <h2 class="bs-heading">From Our <span>Blog</span></h2>
                    <p class="bs-headsub">Expert perspectives on growth, hiring, and digital strategy — written for forward-thinking teams.</p>
                </div>

                <a href="/blog" style="text-decoration:none">
                    <div class="bs-view-all-container">
                        <div class="bs-view-all-base">
                            <span class="bs-view-all-text">View All Posts</span>
                            <div class="bs-view-all-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </div>
                        </div>
                        <div class="bs-view-all-hover">
                            <span class="bs-view-all-text">Explore Blog</span>
                            <div class="bs-view-all-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="bs-outer-grid">
                <div>
                    <a href="{{ $featuredPost['href'] }}" class="bs-feat-link">
                        <article class="bs-featured-card">
                            <img loading="lazy" decoding="async" src="{{ $featuredPost['image'] }}" alt="{{ $featuredPost['title'] }}" class="bs-feat-img">
                            <div class="bs-feat-grad"></div>
                            <div class="bs-feat-accent"></div>
                            <div class="bs-read-overlay"><div class="bs-read-circle"><span>Read</span></div></div>
                            <div class="bs-feat-content">
                                <div><span class="bs-catpill"><span class="bs-catpill-dot"></span>{{ $featuredPost['category'] }}</span></div>
                                <h2 class="bs-feat-title">{{ $featuredPost['title'] }}</h2>
                                <div class="bs-meta">
                                    <img loading="lazy" decoding="async" src="{{ $featuredPost['avatar'] }}" alt="{{ $featuredPost['author'] }}" class="bs-feat-avatar">
                                    <span class="bs-meta-author">{{ $featuredPost['author'] }}</span>
                                    <span class="bs-meta-sep">·</span>
                                    <span class="bs-meta-date">{{ $featuredPost['date'] }}</span>
                                </div>
                            </div>
                        </article>
                    </a>
                </div>

                <div class="bs-right-grid">
                    @foreach ($gridPosts as $post)
                        <a href="{{ $post['href'] }}" class="bs-card-link">
                            <article class="bs-card">
                                <div class="bs-card-imgwrap">
                                    <img loading="lazy" decoding="async" src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="bs-card-img">
                                    <div class="bs-card-imggrad"></div>
                                    <div class="bs-read-overlay"><div class="bs-read-circle"><span>Read</span></div></div>
                                </div>
                                <div class="bs-card-body">
                                    <p class="bs-card-cat">{{ $post['category'] }}</p>
                                    <h3 class="bs-card-title">{{ $post['title'] }}</h3>
                                    <div class="bs-card-meta">
                                        <img loading="lazy" decoding="async" src="{{ $post['avatar'] }}" alt="{{ $post['author'] }}" class="bs-card-avatar">
                                        <span class="bs-card-author">{{ $post['author'] }}</span>
                                        <span class="bs-card-sep">·</span>
                                        <span class="bs-card-date">{{ $post['date'] }}</span>
                                    </div>
                                </div>
                            </article>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ── PORTFOLIO SECTION ── --}}
    <section class="ps-section">
        <div class="ps-inner">
            <div class="ps-left">
                <div class="ps-label-row">
                    <div class="ps-robot-badge">{!! $robo !!}</div>
                    <div class="ps-label-pill">
                        <span class="ps-label-dot"></span>
                        <span class="ps-label-text">Portfolio</span>
                    </div>
                </div>
                <h2 class="ps-title">Showcasing Our <span>Latest</span><br>Projects</h2>
                <p class="ps-desc">
                    We craft high-quality, scalable, and impactful digital solutions
                    that drive measurable results. From sleek interfaces to robust
                    systems every project is built with purpose, precision, and craft.
                </p>
                <div class="ps-stats">
                    <div>
                        <div class="ps-stat-num">120+<span>.</span></div>
                        <div class="ps-stat-label">Projects Done</div>
                    </div>
                    <div>
                        <div class="ps-stat-num">98%<span>.</span></div>
                        <div class="ps-stat-label">Client Satisfaction</div>
                    </div>
                    <div>
                        <div class="ps-stat-num">40+<span>.</span></div>
                        <div class="ps-stat-label">Industries Served</div>
                    </div>
                </div>
                <a href="/portfolio" style="text-decoration:none">
                    <div class="ps-btn-container">
                        <div class="ps-btn-base"><span>View Portfolio</span></div>
                        <div class="ps-btn-hover"><span>Explore Work</span></div>
                    </div>
                </a>
            </div>

            <div class="ps-right">
                <div class="ps-deco-ring"></div>
                <div class="ps-deco-blob"></div>
                <div class="ps-img-wrap">
                    <svg viewBox="0 0 680 420" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;display:block;border-radius:inherit" class="ps-dash">
                        <rect width="680" height="420" rx="16" class="ps-dash-bg"/>
                        <rect width="680" height="40" rx="16" class="ps-dash-panel"/>
                        <rect width="680" height="24" y="16" class="ps-dash-panel"/>
                        <circle cx="22" cy="20" r="5" fill="#ff5f57"/>
                        <circle cx="38" cy="20" r="5" fill="#febc2e"/>
                        <circle cx="54" cy="20" r="5" fill="#28c840"/>
                        <rect x="0" y="40" width="160" height="380" class="ps-dash-panel"/>
                        <rect x="16" y="70" width="16" height="16" rx="3" class="ps-dash-accent"/>
                        <rect x="40" y="73" width="60" height="10" rx="3" class="ps-dash-accent" opacity="0.6"/>
                        <rect x="16" y="100" width="16" height="16" rx="3" class="ps-dash-txt" opacity="0.7"/>
                        <rect x="40" y="103" width="74" height="10" rx="3" class="ps-dash-txt" opacity="0.5"/>
                        <rect x="16" y="130" width="16" height="16" rx="3" class="ps-dash-txt" opacity="0.7"/>
                        <rect x="40" y="133" width="88" height="10" rx="3" class="ps-dash-txt" opacity="0.5"/>
                        <rect x="16" y="160" width="16" height="16" rx="3" class="ps-dash-txt" opacity="0.7"/>
                        <rect x="40" y="163" width="60" height="10" rx="3" class="ps-dash-txt" opacity="0.5"/>
                        <rect x="16" y="190" width="16" height="16" rx="3" class="ps-dash-txt" opacity="0.7"/>
                        <rect x="40" y="193" width="74" height="10" rx="3" class="ps-dash-txt" opacity="0.5"/>
                        <line x1="160" y1="40" x2="160" y2="420" class="ps-dash-line" stroke-width="1"/>
                        <rect x="172" y="52" width="136" height="72" rx="10" class="ps-dash-panel"/>
                        <text x="182" y="96" font-family="sans-serif" font-weight="800" font-size="18" class="ps-dash-val">$48.2K</text>
                        <rect x="182" y="108" width="40" height="8" rx="4" class="ps-dash-accent" opacity="0.85"/>
                        <rect x="322" y="52" width="136" height="72" rx="10" class="ps-dash-panel"/>
                        <text x="332" y="96" font-family="sans-serif" font-weight="800" font-size="18" class="ps-dash-val">12,840</text>
                        <rect x="332" y="108" width="40" height="8" rx="4" fill="#D81D1F" opacity="0.85"/>
                        <rect x="472" y="52" width="136" height="72" rx="10" class="ps-dash-panel"/>
                        <text x="482" y="96" font-family="sans-serif" font-weight="800" font-size="18" class="ps-dash-val">3.68%</text>
                        <rect x="482" y="108" width="40" height="8" rx="4" class="ps-dash-accent" opacity="0.85"/>
                        <rect x="172" y="140" width="310" height="180" rx="10" class="ps-dash-panel"/>
                        <rect x="200" y="210" width="20" height="80" rx="4" class="ps-dash-accent" opacity="0.85"/>
                        <rect x="232" y="235" width="20" height="55" rx="4" fill="#D81D1F" opacity="0.85"/>
                        <rect x="264" y="195" width="20" height="95" rx="4" class="ps-dash-accent" opacity="0.85"/>
                        <rect x="296" y="222" width="20" height="68" rx="4" fill="#D81D1F" opacity="0.85"/>
                        <rect x="328" y="180" width="20" height="110" rx="4" class="ps-dash-accent" opacity="0.85"/>
                        <rect x="360" y="215" width="20" height="75" rx="4" fill="#D81D1F" opacity="0.85"/>
                        <rect x="392" y="200" width="20" height="90" rx="4" class="ps-dash-accent" opacity="0.85"/>
                        <rect x="424" y="230" width="20" height="60" rx="4" fill="#D81D1F" opacity="0.85"/>
                        <rect x="456" y="185" width="20" height="105" rx="4" class="ps-dash-accent" opacity="0.85"/>
                        <rect x="494" y="140" width="174" height="180" rx="10" class="ps-dash-panel"/>
                        <polyline points="508,280 530,255 552,265 574,238 596,248 618,220 640,232 662,210" fill="none" class="ps-dash-stroke" stroke-width="2.5" stroke-linejoin="round" stroke-linecap="round"/>
                        <rect x="172" y="334" width="496" height="80" rx="10" class="ps-dash-panel"/>
                    </svg>
                    <div class="ps-badge">
                        <span class="ps-label-dot"></span>
                        <span class="ps-badge-text">Live Project</span>
                    </div>
                    <div class="ps-stat">
                        <div class="ps-stat-big">+34%</div>
                        <div class="ps-stat-sm">Growth</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── TECH TICKER ── --}}
    <section class="tt-section">
        <div class="tt-header">
            <h2 class="tt-title">Our <span class="tt-accent">Technology</span> Stack</h2>
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
                @endphp
                @foreach ($techTripled as $tech)
                    <div class="tt-card">
                        <div class="tt-icon">
                            <i class="{{ $devicons[$tech] ?? 'devicon-code-plain' }}" style="font-size: clamp(2rem, 4.5vw, 3.2rem);"></i>
                        </div>
                        <span class="tt-label">{{ $tech }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── CONTACT BANNER ── --}}
    <section class="cb-section">
        <div class="cb-box">
            <div class="cb-bglines">
                <svg width="100%" height="100%" viewBox="0 0 1200 400" preserveAspectRatio="none">
                    <path d="M0 100 Q 300 50 600 100 T 1200 100" stroke="black" fill="transparent" stroke-width="2"/>
                    <path d="M0 200 Q 300 150 600 200 T 1200 200" stroke="black" fill="transparent" stroke-width="2"/>
                    <path d="M0 300 Q 300 250 600 300 T 1200 300" stroke="black" fill="transparent" stroke-width="2"/>
                    <circle cx="100" cy="100" r="80" stroke="black" fill="transparent" stroke-width="1"/>
                    <circle cx="1100" cy="300" r="120" stroke="black" fill="transparent" stroke-width="1"/>
                    <rect x="400" y="50" width="40" height="40" stroke="black" fill="transparent" stroke-width="1" transform="rotate(45 420 70)"/>
                    <rect x="800" y="320" width="30" height="30" stroke="black" fill="transparent" stroke-width="1" transform="rotate(15 815 335)"/>
                </svg>
            </div>

            <div class="cb-label-pill">
                <div class="cb-robot-wrapper">{!! $robo !!}</div>
                <span class="cb-label-dot"></span>
                <span class="cb-label-text">Let's Work Together</span>
            </div>

            <h2 class="cb-heading">Have a Project in Mind?<br>Let's Build It.</h2>
            <p class="cb-sub">
                Whether you're starting from scratch or scaling an existing product, we'd love to hear about it.
                Let's create something remarkable together.
            </p>

            <div class="cb-btn-row">
                <a href="/contact" class="cb-btn-primary">Contact Me</a>
                <a href="/portfolio" class="cb-btn-secondary">View Portfolio</a>
            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('.pw-about');
    if (!root) return;

    var tabs = root.querySelectorAll('.spec-tab');
    var items = root.querySelectorAll('.spec-item');

    function closeItem(item) {
        item.classList.remove('spec-item--open');
        var body = item.querySelector('.spec-body');
        var icon = item.querySelector('.spec-icon-wrap');
        if (body) body.style.maxHeight = '0px';
        if (icon) { icon.classList.remove('spec-icon-wrap--open'); icon.setAttribute('aria-expanded', 'false'); }
    }

    /* ── Category filter tabs ── */
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var cat = tab.getAttribute('data-cat');
            tabs.forEach(function (t) { t.classList.remove('spec-tab--active'); });
            tab.classList.add('spec-tab--active');
            var visIndex = 0;
            items.forEach(function (item) {
                var show = cat === 'All' || item.getAttribute('data-cat') === cat;
                item.style.display = show ? '' : 'none';
                closeItem(item);
                if (show) {
                    var num = item.querySelector('.spec-num');
                    if (num) num.textContent = ('0' + (visIndex + 1)).slice(-2);
                    visIndex++;
                }
            });
        });
    });

    /* ── Accordion toggle ── */
    items.forEach(function (item) {
        var trigger = item.querySelector('.spec-icon-wrap');
        var body = item.querySelector('.spec-body');
        if (!trigger || !body) return;
        body.style.maxHeight = '0px';
        trigger.addEventListener('click', function () {
            var isOpen = item.classList.contains('spec-item--open');
            items.forEach(closeItem);
            if (!isOpen) {
                item.classList.add('spec-item--open');
                trigger.classList.add('spec-icon-wrap--open');
                trigger.setAttribute('aria-expanded', 'true');
                body.style.maxHeight = body.scrollHeight + 'px';
            }
        });
    });
})();
</script>
@endpush
