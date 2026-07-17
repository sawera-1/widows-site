@extends('layouts.app')

@section('title', 'Development Services — Corammers')
@section('meta_description', 'Web and mobile development by Corammers — fast, scalable Laravel, React and native apps built to convert.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/services-development.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
<style>
/* === Consultation Section Mobile Fixes === */
.bc-section {
    overflow-x: hidden !important;
    width: 100% !important;
    max-width: 100vw !important;
    box-sizing: border-box;
}

.bc-section .wd-intro-heading {
    font-size: clamp(2rem, 5vw, 4rem) !important;
    line-height: 1.2 !important;
    word-wrap: break-word;
}

@media (max-width: 992px) {
    .bc-section {
        padding-top: 90px !important; /* Prevent floating menu overlap */
        padding-bottom: 48px !important;
    }

    .bc-section .wd-inner {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .dev-intro-two-col.bc-two-col {
        display: flex !important;
        flex-direction: column !important;
        gap: 40px !important;
        width: 100% !important;
        max-width: 100% !important;
    }

    .dev-intro-two-col.bc-two-col > div {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        box-sizing: border-box !important;
    }

    .bc-widget-col {
        padding: 10px !important;
    }

    .calendly-inline-widget {
        min-width: 100% !important; /* override the 280px inline min-width */
    }
}
</style>
@endpush

@section('content')
@php
    /* ─── VERTICAL TICKER TECH DATA ─── */
    $techCol1 = [
        ['name' => 'HTML5', 'abbr' => 'HTML', 'color' => '#e34f26', 'bg' => 'rgba(227,79,38,0.13)'],
        ['name' => 'React', 'abbr' => 'JSX', 'color' => '#61dafb', 'bg' => 'rgba(97,218,251,0.13)'],
        ['name' => 'Node.js', 'abbr' => 'NODE', 'color' => '#68a063', 'bg' => 'rgba(104,160,99,0.13)'],
        ['name' => 'Python', 'abbr' => 'PY', 'color' => '#3776ab', 'bg' => 'rgba(55,118,171,0.13)'],
        ['name' => 'Next.js', 'abbr' => 'NEXT', 'color' => '#319533', 'bg' => 'rgba(255,255,255,0.08)'],
        ['name' => 'TypeScript', 'abbr' => 'TS', 'color' => '#3178c6', 'bg' => 'rgba(49,120,198,0.13)'],
    ];
    $techCol2 = [
        ['name' => 'CSS3', 'abbr' => 'CSS', 'color' => '#1572b6', 'bg' => 'rgba(21,114,182,0.13)'],
        ['name' => 'Vue.js', 'abbr' => 'VUE', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)'],
        ['name' => 'Laravel', 'abbr' => 'LAR', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)'],
        ['name' => 'WordPress', 'abbr' => 'WP', 'color' => '#21759b', 'bg' => 'rgba(33,117,155,0.13)'],
        ['name' => 'PHP', 'abbr' => 'PHP', 'color' => '#777bb4', 'bg' => 'rgba(119,123,180,0.13)'],
        ['name' => 'JavaScript', 'abbr' => 'JS', 'color' => '#f7df1e', 'bg' => 'rgba(247,223,30,0.13)'],
    ];
    $techCol3 = [
        ['name' => 'Next.js', 'abbr' => 'NEXT', 'color' => '#319533', 'bg' => 'rgba(255,255,255,0.08)'],
        ['name' => 'Python', 'abbr' => 'PY', 'color' => '#3776ab', 'bg' => 'rgba(55,118,171,0.13)'],
        ['name' => 'Vue.js', 'abbr' => 'VUE', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)'],
        ['name' => 'React', 'abbr' => 'JSX', 'color' => '#61dafb', 'bg' => 'rgba(97,218,251,0.13)'],
        ['name' => 'Node.js', 'abbr' => 'NODE', 'color' => '#68a063', 'bg' => 'rgba(104,160,99,0.13)'],
        ['name' => 'Laravel', 'abbr' => 'LAR', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)'],
    ];
    $techCol4 = [
        ['name' => 'CSS3', 'abbr' => 'CSS', 'color' => '#1572b6', 'bg' => 'rgba(21,114,182,0.13)'],
        ['name' => 'Vue.js', 'abbr' => 'VUE', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)'],
        ['name' => 'Laravel', 'abbr' => 'LAR', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)'],
        ['name' => 'WordPress', 'abbr' => 'WP', 'color' => '#21759b', 'bg' => 'rgba(33,117,155,0.13)'],
        ['name' => 'PHP', 'abbr' => 'PHP', 'color' => '#777bb4', 'bg' => 'rgba(119,123,180,0.13)'],
        ['name' => 'JavaScript', 'abbr' => 'JS', 'color' => '#f7df1e', 'bg' => 'rgba(247,223,30,0.13)'],
    ];

    /* generic tech glyph used in ticker icon wraps */
    $techGlyph = '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>';

    /* ─── Shared Devicon class map ─── */
    $devicons = [
        'HTML5' => 'devicon-html5-plain',
        'React' => 'devicon-react-original',
        'Node.js' => 'devicon-nodejs-plain',
        'Express.js' => 'devicon-express-original',
        'Python' => 'devicon-python-plain',
        'Next.js' => 'devicon-nextjs-plain',
        'TypeScript' => 'devicon-typescript-plain',
        'CSS3' => 'devicon-css3-plain',
        'CSS' => 'devicon-css3-plain',
        'Vue.js' => 'devicon-vuejs-plain',
        'Laravel' => 'devicon-laravel-plain',
        'WordPress' => 'devicon-wordpress-plain',
        'PHP' => 'devicon-php-plain',
        'JavaScript' => 'devicon-javascript-plain',
        'TailwindCSS' => 'devicon-tailwindcss-original',
        'MongoDB' => 'devicon-mongodb-plain',
        'MySQL' => 'devicon-mysql-plain',
        'Firebase' => 'devicon-firebase-plain',
        'Docker' => 'devicon-docker-plain',
        'Git' => 'devicon-git-plain',
        'GitHub' => 'devicon-github-original',
        'Vercel' => 'devicon-vercel-original',
        'GraphQL' => 'devicon-graphql-plain',
        'Figma' => 'devicon-figma-plain',
    ];

    $tickerItems = [
        ['label' => 'Custom Websites', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="14" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg>'],
        ['label' => 'Scalable Solutions', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>'],
        ['label' => 'SEO Optimized', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>'],
        ['label' => 'Fast Performance', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg>'],
        ['label' => 'Secure Systems', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>'],
        ['label' => 'React & Next.js', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>'],
    ];

    $developmentServices = [
        [
            'title' => 'Website Development',
            'perfectFor' => 'Growing businesses, startups, and personal brands ready to make an impact online.',
            'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'React', 'Bootstrap', 'Tailwind CSS', 'WordPress', 'PHP'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>',
            'link' => '/services/development/web',
        ],
        [
            'title' => 'E-Commerce Development',
            'perfectFor' => 'Product businesses, online retailers, and dropshippers ready to scale.',
            'technologies' => ['Shopify', 'WordPress', 'WooCommerce', 'Magento', 'React', 'Next.js', 'Node.js', 'PHP', 'Stripe', 'PayPal'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>',
            'link' => '/services/development/ecom',
        ],
        [
            'title' => 'Mobile App Development',
            'perfectFor' => 'Businesses wanting a direct mobile channel to engage and retain customers.',
            'technologies' => ['React Native', 'Flutter', 'Swift', 'Kotlin', 'Firebase', 'REST APIs', 'App Store', 'Google Play'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>',
            'link' => '/services/development/mobile',
        ],
        [
            'title' => 'Custom Web Applications',
            'perfectFor' => 'Startups, SaaS products, and businesses with specific platform requirements.',
            'technologies' => ['React', 'Next.js', 'TypeScript', 'Node.js', 'Laravel', 'Vue.js', 'AngularJS', 'Ruby on Rails', 'Express.js', 'MongoDB', 'MySQL', 'PostgreSQL', 'AWS'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
            'link' => '/services/development/custom',
        ],
    ];

    $pricingCards = [
        [
            'title' => 'Website Development', 'tier' => 'Starter', 'price' => '$400',
            'desc' => 'Build a fast, modern website that represents your brand and converts visitors into clients.',
            'features' => ['Up to 5 pages', 'Mobile responsive design', 'WordPress setup & theme customization', 'Contact form & social links', 'Basic SEO setup', 'Speed optimization', '1 revision round', '7 days post-launch support'],
            'ticker1' => ['HTML5', 'CSS3', 'JavaScript', 'React', 'WordPress', 'PHP', 'Tailwind CSS', 'Bootstrap'],
            'ticker2' => ['Google Analytics', 'Yoast SEO', 'Cloudflare', 'cPanel', 'WP Engine', 'Elementor', 'GTmetrix'],
            'highlight' => false,
            'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>',
        ],
        [
            'title' => 'E-Commerce Development', 'tier' => 'Starter', 'price' => '$550',
            'desc' => 'Launch an online store designed to sell, scale, and run smoothly.',
            'features' => ['WooCommerce or Shopify setup', 'Up to 20 products', 'Payment gateway integration', 'Basic store design', 'Shipping setup', 'Cart & checkout configuration', 'Mobile responsive', '1 revision round', '7 days support'],
            'ticker1' => ['Shopify', 'WooCommerce', 'WordPress', 'React', 'Next.js', 'PHP', 'Node.js', 'Magento'],
            'ticker2' => ['Stripe', 'PayPal', 'Klarna', 'Square', 'FedEx API', 'DHL API', 'Mailchimp', 'Klaviyo'],
            'highlight' => false,
            'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>',
        ],
        [
            'title' => 'Custom Web Applications', 'tier' => 'MVP', 'price' => '$1,200',
            'desc' => 'Turn your idea into a powerful, scalable digital product.',
            'features' => ['Core feature development', 'Clean UI design', 'User authentication', 'Basic dashboard', 'Database setup', 'Deployment', 'Testing & bug fixes', '1 revision round', '14 days support'],
            'ticker1' => ['React', 'Next.js', 'TypeScript', 'Node.js', 'Laravel', 'Vue.js', 'Express.js', 'MongoDB'],
            'ticker2' => ['AWS', 'Vercel', 'Docker', 'PostgreSQL', 'MySQL', 'Redis', 'JWT', 'Stripe'],
            'highlight' => true,
            'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
        ],
        [
            'title' => 'Mobile App Development', 'tier' => 'Starter', 'price' => '$1,500',
            'desc' => "Bring your business directly into your customers' hands.",
            'features' => ['Single platform (iOS or Android)', 'Core features implementation', 'Clean UI', 'User authentication', 'Push notifications', 'API integration', 'App store deployment', 'Testing & bug fixes', '1 revision round', '14 days support'],
            'ticker1' => ['React Native', 'Flutter', 'Swift', 'Kotlin', 'Expo', 'TypeScript', 'Dart'],
            'ticker2' => ['Firebase', 'REST APIs', 'Google Maps', 'OneSignal', 'Sentry', 'App Store', 'Google Play'],
            'highlight' => false,
            'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>',
        ],
    ];

    $buildSteps = [
        ['num' => '01', 'title' => 'Discovery', 'tag' => 'Strategy', 'desc' => 'Deep research into your business, audience, and competitors to define the strategic foundation.', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>'],
        ['num' => '02', 'title' => 'Design', 'tag' => 'UI / UX', 'desc' => 'Human-centered UI/UX wireframes, prototypes, and design systems crafted for clarity and beauty.', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>'],
        ['num' => '03', 'title' => 'Development', 'tag' => 'Engineering', 'desc' => 'Precision engineering clean, scalable code on modern frameworks with performance at its core.', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>'],
        ['num' => '04', 'title' => 'Deployment', 'tag' => 'Launch', 'desc' => 'Seamless launch with CI/CD pipelines, monitoring, and post-launch support ensuring zero downtime.', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"></path></svg>'],
    ];

    $staffPerks = [
        'Dedicated developers, designers & QA engineers',
        'Flexible engagement part-time or full-time',
        'Onboard in 48 hours no lengthy hiring cycles',
        'Work in your timezone, your tools, your process',
        'React, Node.js, Laravel, Flutter & more',
    ];

    $reviews = [
        ['name' => 'Sarah Mitchell', 'role' => 'CEO, ProBuild', 'text' => "the dashboard sync is literally so fast now and the team was super helpful with everything best agency we've worked with tbh", 'image' => '/assets/project/web/1.webp', 'avatar' => '/assets/im1.webp'],
        ['name' => 'James Okafor', 'role' => 'CTO, EasyBridge', 'text' => 'needed a system that actually scales and these guys delivered everything works perfectly and the quality is top notch really happy with it', 'image' => '/assets/project/custom/3.webm', 'avatar' => null],
        ['name' => 'Lucas Bernhard', 'role' => 'Researcher, SpaceBound', 'text' => "the app looks so good honestly didn't think it would be this nice but the design is just fire super easy to use too thanks guys", 'image' => '/assets/project/mobile/1.webm', 'avatar' => '/assets/im3.webp'],
        ['name' => 'Priya Nair', 'role' => 'Partner, Robotech', 'text' => 'handled the complicated ai stuff for our dashboard really well it was a tough project but they made it look easy solid results all around', 'image' => '/assets/project/custom/1.webm', 'avatar' => '/assets/im2.webp'],
        ['name' => 'Alex Chen', 'role' => 'Founder, DesignFlow', 'text' => 'love how clean the dashboard looks its exactly what i wanted the ui is super minimal and fast they really got our vision from day one', 'image' => '/assets/project/uiux/8.webm', 'avatar' => null],
        ['name' => 'Sophia Kim', 'role' => 'Manager, StayFit', 'text' => 'mobile app is super smooth no lag at all just a great user experience u can tell they care about the small details highly recommend', 'image' => '/assets/project/mobile/2.webm', 'avatar' => null],
        ['name' => 'Marcus Thorne', 'role' => 'Founder, TechFlow', 'text' => 'the custom software they built is a game changer for our warehouse operations super efficient and easy for the team to pick up definitely the best choice for us', 'image' => '/assets/project/custom/2.webm', 'avatar' => null],
        ['name' => 'Elena Rossi', 'role' => 'Director, VibeDesign', 'text' => 'honestly obsessed with the new branding and logo they did it just fits our vibe perfectly and the team was so chill to work with 10/10', 'image' => '/assets/project/uiux/6.webm', 'avatar' => null],
        ['name' => 'Omar Farouq', 'role' => 'Operations Lead, SyncAI', 'text' => 'honestly was skeptical about ai automation at first but the workflow they built just runs itself now we cut manual hours by like 70% which is insane', 'image' => '/assets/project/aiSol/1.webm', 'avatar' => null],
        ['name' => 'Nadia Petrov', 'role' => 'Creative Director, PixelMind', 'text' => 'the ai design visuals they created blew us away every concept was unique and on brand felt like they really understood our aesthetic from the very first call', 'image' => '/assets/project/aiDes/ai3.webp', 'avatar' => null],
    ];

    $collageItems = [
        ['src' => '/assets/project/web/1.webp', 'title' => 'ProBuild — Construction', 'desc' => 'Next-gen architectural excellence', 'class' => 'pf-collage-card-tall'],
        ['src' => '/assets/project/custom/3.webm', 'title' => 'EasyBridge — Fintech', 'desc' => 'Seamless mortgage application platform', 'class' => 'pf-collage-c2'],
        ['src' => '/assets/project/mobile/1.webm', 'title' => 'NASA Explorer', 'desc' => 'Interactive space exploration interface', 'class' => 'pf-collage-c3'],
        ['src' => '/assets/project/aiSol/3.webm', 'title' => 'n8n', 'desc' => 'AI', 'class' => 'pf-collage-c4'],
        ['src' => '/assets/project/uiux/7.webm', 'title' => 'Logo', 'desc' => 'FlexFlox', 'class' => 'pf-collage-c5'],
    ];

    $starIcon = '<svg width="18" height="18" viewBox="0 0 16 16" fill="#ffb33e" style="flex-shrink:0"><path d="M8 1.5L9.7 6H14.3L10.6 8.9L12 13.4L8 10.8L4 13.4L5.4 8.9L1.7 6H6.3L8 1.5Z" stroke="#ffb33e" stroke-width="1.2" stroke-linejoin="round"></path></svg>';
    $arrowIcon = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>';

    $robo = '<img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robo-light" style="object-fit:contain;display:block"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robo-dark" style="object-fit:contain;display:block">';
@endphp

<div class="pw-services-development">

    {{-- ═══ HERO — TICKER LAYOUT ═══ --}}
    <section class="dev-hero">
        <div class="dev-hero-inner">

            {{-- LEFT: Tickers 1 & 2 --}}
            <div class="dev-hero-ticker-group dev-ticker-left">
                <div class="dev-v-ticker-col" style="height:520px">
                    <div class="dev-v-ticker-track dev-v-ticker-track-up" style="--spd:22s">
                        @foreach(array_merge($techCol1, $techCol1) as $t)
                        <div class="dev-tech-card">
                            <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                                <i class="{{ $devicons[$t['name']] ?? 'devicon-code-plain' }}"></i>
                            </div>
                            <div class="dev-tech-card-info">
                                <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="dev-v-ticker-col" style="height:520px">
                    <div class="dev-v-ticker-track dev-v-ticker-track-down" style="--spd:26s">
                        @foreach(array_merge($techCol2, $techCol2) as $t)
                        <div class="dev-tech-card">
                            <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                                <i class="{{ $devicons[$t['name']] ?? 'devicon-code-plain' }}"></i>
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
            <div class="dev-hero-content">
                <div style="display:flex;flex-direction:column;align-items:center;margin-bottom:24px">
                    <div class="dev-hero-badge-row" style="align-items:flex-start">
                        <div style="display:flex;flex-direction:column;align-items:center">
                            <div class="dev-hero-robot-badge">{!! $robo !!}</div>
                            <div class="dev-hero-divider" style="margin:12px 0 0;width:48px"></div>
                        </div>
                        <div class="dev-hero-label-pill" style="margin-top:6px">
                            <span class="dev-hero-label-dot"></span>
                            <span class="dev-hero-label-text">Web Development</span>
                        </div>
                    </div>
                    <h1 class="dev-hero-heading" style="text-align:center;margin-top:24px;margin-bottom:0">
                        We Build<br>
                        <span class="dev-hero-accent">Scalable</span><br>
                        Web Applications
                    </h1>
                </div>

                <p class="dev-hero-desc">
                    We engineer high-performance websites and applications optimized for speed,
                    scalability, and seamless user experience using modern technologies.
                </p>

                <div class="dev-hero-cta-row">
                    <a href="/contact" class="dev-hero-btn">Contact Us</a>
                </div>
            </div>

            {{-- RIGHT: Tickers 3 & 4 --}}
            <div class="dev-hero-ticker-group dev-ticker-right">
                <div class="dev-v-ticker-col" style="height:520px">
                    <div class="dev-v-ticker-track dev-v-ticker-track-down" style="--spd:28s">
                        @foreach(array_merge($techCol3, $techCol3) as $t)
                        <div class="dev-tech-card">
                            <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                                <i class="{{ $devicons[$t['name']] ?? 'devicon-code-plain' }}"></i>
                            </div>
                            <div class="dev-tech-card-info">
                                <span class="dev-tech-card-name">{{ $t['name'] }}</span>
                                <span class="dev-tech-card-abbr">{{ $t['abbr'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="dev-v-ticker-col" style="height:520px">
                    <div class="dev-v-ticker-track dev-v-ticker-track-up" style="--spd:34s">
                        @foreach(array_merge($techCol4, $techCol4) as $t)
                        <div class="dev-tech-card">
                            <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                                <i class="{{ $devicons[$t['name']] ?? 'devicon-code-plain' }}"></i>
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

    {{-- ═══ TICKER BAND ═══ --}}
    <div class="wd-ticker">
        <div class="wd-ticker-track">
            @for($rep = 0; $rep < 4; $rep++)
            <div style="display:flex;align-items:center">
                @foreach($tickerItems as $item)
                <div class="wd-ticker-item">
                    <span class="wd-ticker-dot"></span>
                    <span style="display:flex;align-items:center;opacity:0.85">{!! $item['icon'] !!}</span>
                    {{ $item['label'] }}
                </div>
                @endforeach
            </div>
            @endfor
        </div>
    </div>

    {{-- ═══ OUR EXPERTISE — TWO COLUMN ═══ --}}
    <section class="wd-section">
        <div class="wd-inner">
            <div class="dev-intro-two-col reveal">

                {{-- LEFT --}}
                <div>
                    <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                        <div class="wd-label-row" style="align-items:flex-start">
                            <div style="display:flex;flex-direction:column;align-items:center">
                                <div class="wd-robot-badge">{!! $robo !!}</div>
                                <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                            </div>
                            <div class="wd-label-pill" style="margin-top:6px">
                                <span class="wd-label-dot"></span>
                                <span class="wd-label-text">Our Expertise</span>
                            </div>
                        </div>
                        <h2 class="wd-intro-heading" style="margin:24px 0 0">We Build Web Solutions That Drive Real Results</h2>
                    </div>
                    <p class="wd-intro-text">From pixel-perfect frontends to robust backend systems, our team architects digital products that grow with your business. We combine technical excellence with strategic thinking ensuring every line of code serves your goals.</p>
                    <p class="wd-intro-text">Whether you need a stunning marketing site, a complex SaaS platform, or a custom e-commerce solution, we deliver with precision, speed, and long-term scalability.</p>
                    <div style="display:flex;align-items:center;gap:28px;margin-top:14px;flex-wrap:wrap">
                        <a href="/contact" class="dev-hero-btn">Contact Us</a>
                        <div class="wd-intro-stat">
                            <strong>150+</strong>
                            <span>Projects Delivered</span>
                        </div>
                    </div>
                </div>

                {{-- RIGHT: Staff Augmentation Card --}}
                <a href="/staff" class="dev-staff-card">
                    <div class="dev-staff-card-badge">
                        <span class="dev-staff-card-badge-dot"></span>
                        Now Hiring
                    </div>
                    <h3 class="dev-staff-card-title">
                        Scale Your Team with<br>
                        <span class="dev-staff-card-accent">Staff Augmentation</span>
                    </h3>
                    <p class="dev-staff-card-desc">
                        Need expert developers without the overhead of full-time hiring? Our staff augmentation service gives you instant access to vetted, senior-level engineers who integrate seamlessly into your team.
                    </p>
                    <ul class="dev-staff-perks">
                        @foreach($staffPerks as $perk)
                        <li class="dev-staff-perk">
                            <span class="dev-staff-perk-dot"></span>
                            {{ $perk }}
                        </li>
                        @endforeach
                    </ul>
                    <div class="dev-staff-cta">Explore Staff Augmentation</div>
                </a>

            </div>
        </div>
    </section>

    {{-- ═══ DEVELOPMENT SERVICES CARDS ═══ --}}
    <section class="ds-section">
        <div class="ds-inner">
            <div class="reveal">
                <div style="display:flex;flex-direction:column;align-items:flex-start">
                    <div class="wd-label-row">
                        <div class="wd-robot-badge">{!! $robo !!}</div>
                        <div class="wd-label-pill">
                            <span class="wd-label-dot"></span>
                            <span class="wd-label-text">Our Solutions</span>
                        </div>
                    </div>
                    <div class="wd-section-divider"></div>
                    <h2 class="wd-section-heading" style="margin:0">Development Services</h2>
                </div>
                <p class="wd-section-sub">We specialize in building high-end digital products. Every project is scalable, secure, and built to perform.</p>
            </div>

            <div class="ds-grid">
                @foreach($developmentServices as $svc)
                <div class="ds-card-v2 reveal">
                    <div class="ds-v2-icon-wrap">{!! $svc['icon'] !!}</div>
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
                    <a href="{{ $svc['link'] ?? '/contact' }}" class="ds-v2-cta">Learn More</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ HOW WE BUILD ═══ --}}
    <section class="wd-section" style="overflow:hidden">
        <div class="wd-inner">
            <div class="reveal">
                <div style="display:flex;flex-direction:column;align-items:flex-start">
                    <div class="wd-label-row">
                        <div class="wd-robot-badge">{!! $robo !!}</div>
                        <div class="wd-label-pill">
                            <span class="wd-label-dot"></span>
                            <span class="wd-label-text">Our Methodology</span>
                        </div>
                    </div>
                    <div class="wd-section-divider"></div>
                    <h2 class="wd-section-heading" style="margin:0">How We Build Scalable Solutions</h2>
                </div>
                <p class="wd-section-sub">A proven, structured process — from initial discovery to flawless deployment, every phase is intentional and precise.</p>
            </div>
            <div class="hwb-flow">
                <div class="hwb-connector">
                    <div class="hwb-connector-fill"></div>
                </div>
                @foreach($buildSteps as $s)
                <div class="hwb-step reveal">
                    <span class="hwb-num-bg">{{ $s['num'] }}</span>
                    <div class="hwb-icon-ring">{!! $s['icon'] !!}</div>
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

    {{-- ═══ PRICING SECTION ═══ --}}
    <section class="pc-section">
        <div class="ds-inner">
            <div class="reveal" style="display:flex;flex-direction:column;align-items:center">
                <div style="display:flex;flex-direction:column;align-items:center;margin-bottom:24px">
                    <div class="wd-label-row" style="align-items:flex-start">
                        <div style="display:flex;flex-direction:column;align-items:center">
                            <div class="wd-robot-badge">{!! $robo !!}</div>
                            <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                        </div>
                        <div class="wd-label-pill" style="margin-top:6px">
                            <span class="wd-label-dot"></span>
                            <span class="wd-label-text">Pricing</span>
                        </div>
                    </div>
                    <h2 class="wd-section-heading" style="text-align:center;margin-top:24px;margin-bottom:0">Simple, Transparent Pricing</h2>
                </div>
                <p class="wd-section-sub" style="margin:0 auto;text-align:center">Pricing is based on the technology stack — no hidden fees, no surprises. Pick your tech and let&apos;s build.</p>
            </div>

            <div class="pc-grid">
                @foreach($pricingCards as $plan)
                <div class="pc-card reveal {{ $plan['highlight'] ? 'pc-card--highlight' : '' }}">
                    @if($plan['highlight'])
                    <div class="pc-popular-badge">Most Popular</div>
                    @endif
                    <div class="pc-card-topbar"></div>
                    <div class="pc-card-header">
                        <div class="pc-card-icon-wrap">{!! $plan['icon'] !!}</div>
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
                        <div class="pc-ticker-wrap">
                            <div class="pc-card-ticker">
                                @foreach(array_merge(...array_fill(0, 8, $plan['ticker1'])) as $t)
                                <span class="ds-v2-pill pc-mini-pill">{{ $t }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="pc-ticker-block">
                        <span class="pc-ticker-label">Tools &amp; Integrations</span>
                        <div class="pc-ticker-wrap">
                            <div class="pc-card-ticker pc-card-ticker--alt">
                                @foreach(array_merge(...array_fill(0, 8, $plan['ticker2'])) as $t)
                                <span class="ds-v2-pill pc-mini-pill">{{ $t }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="pc-divider"></div>

                    <ul class="pc-features">
                        @foreach($plan['features'] as $f)
                        <li class="pc-feat-item">
                            <span class="pc-feat-check">
                                <svg width="9" height="9" viewBox="0 0 10 10" fill="none">
                                    <path d="M1.5 5l2.5 2.5 4.5-5" stroke="{{ $plan['highlight'] ? '#111' : 'var(--accent-theme)' }}" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            {{ $f }}
                        </li>
                        @endforeach
                    </ul>

                    <a href="/contact" class="pc-btn">Contact Us</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ PORTFOLIO SECTION (inlined) ═══ --}}
    <section class="pf-section">
        <div class="pf-home-inner">
            <div class="pf-left">
                <div class="pf-label-row">
                    <div class="pf-robot-badge pf-robot-float">{!! $robo !!}</div>
                    <div class="pf-pill">
                        <span class="pf-dot pf-dot-pulse"></span>
                        <span class="pf-pill-text">Our Work</span>
                    </div>
                </div>
                <div class="pf-divider"></div>
                <h2 class="pf-heading">Work That<br><span>Speaks</span> Loudly</h2>
                <p class="pf-desc">From high-performance SaaS dashboards to immersive mobile experiences — every project we ship is crafted with precision, purpose, and a relentless focus on exceptional user experience.</p>
                <div class="pf-stats">
                    <div class="pf-stat"><span class="pf-stat-value">50+</span><span class="pf-stat-label">Projects</span></div>
                    <div class="pf-stat"><span class="pf-stat-value">5+</span><span class="pf-stat-label">Years</span></div>
                    <div class="pf-stat"><span class="pf-stat-value">98%</span><span class="pf-stat-label">Satisfaction</span></div>
                </div>
                <a href="/portfolio" class="pf-btn"><span>View Portfolio</span></a>
            </div>

            <div class="pf-home-collage">
                @foreach($collageItems as $item)
                <a href="/portfolio" class="pf-collage-card {{ $item['class'] }}">
                    @if(Str::endsWith($item['src'], '.webm'))
                    <video src="{{ $item['src'] }}" class="pf-collage-img" autoplay loop muted playsinline style="object-fit:cover; pointer-events:none;"></video>
                    @else
                    <img src="{{ $item['src'] }}" alt="{{ $item['title'] }}" loading="lazy" class="pf-collage-img">
                    @endif
                    <div class="pf-collage-overlay"></div>
                    <div class="pf-collage-content">
                        <h4 class="pf-collage-title">{{ $item['title'] }}</h4>
                        <p class="pf-collage-desc">{{ $item['desc'] }}</p>
                        <div class="pf-collage-explore">
                            <span>Explore</span>
                            <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M1 6H11M6 1L11 6L6 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                    </div>
                    <div class="pf-collage-badge"></div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ REVIEWS SECTION (inlined) ═══ --}}
    <section class="rev-section-bg">
        <div class="rev-inner">
            <div class="rev-header-wrap">
                <div style="max-width:700px">
                    <div class="rev-label-row">
                        <div class="rev-robot-badge">{!! $robo !!}</div>
                        <div class="rev-label-pill">
                            <span class="rev-label-dot"></span>
                            <span class="rev-label">Testimonials</span>
                        </div>
                    </div>
                    <div class="rev-divider"></div>
                    <h2 class="rev-heading">Words from our <br><span>Happy Clients</span></h2>
                </div>
                <div class="rev-nav">
                    <button class="rev-nav-btn" data-rev-dir="-1" aria-label="Previous">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                    <button class="rev-nav-btn" data-rev-dir="1" aria-label="Next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </div>

            <div class="rev-track-wrap" id="revTrackWrap">
                <div class="rev-track" id="revTrack">
                    @foreach($reviews as $r)
                    <div class="rev-card">
                        <div class="rev-card-img-wrap">
                            @if(Str::endsWith($r['image'], '.webm'))
                            <video src="{{ $r['image'] }}" class="rev-card-img" autoplay loop muted playsinline style="object-fit:cover; pointer-events:none;"></video>
                            @else
                            <img loading="lazy" decoding="async" src="{{ $r['image'] }}" alt="{{ $r['name'] }}" class="rev-card-img">
                            @endif
                            <div class="rev-card-img-overlay"></div>
                        </div>
                        <div class="rev-card-body">
                            <div class="rev-stars">
                                @for($s = 0; $s < 5; $s++){!! $starIcon !!}@endfor
                            </div>
                            <p class="rev-text">{{ $r['text'] }}</p>
                            <div class="rev-card-foot">
                                <div class="rev-person">
                                    <div class="rev-avatar-circle">
                                        @if($r['avatar'])
                                        <img loading="lazy" decoding="async" src="{{ $r['avatar'] }}" alt="{{ $r['name'] }}">
                                        @else
                                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="12" fill="var(--accent-theme)" fill-opacity="0.1"></rect><path d="M12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" stroke="var(--accent-theme)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18 19C18 16.2386 15.3137 14 12 14C8.68629 14 6 16.2386 6 19" stroke="var(--accent-theme)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
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
    </section>

    {{-- ═══ BOOK CONSULTATION SECTION ═══ --}}
    <section class="wd-section bc-section">
        <div class="wd-inner">
            <div class="dev-intro-two-col bc-two-col reveal">

                {{-- LEFT SIDE: Content --}}
                <div>
                    <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                        <div class="wd-label-row" style="align-items:flex-start">
                            <div style="display:flex;flex-direction:column;align-items:center">
                                <div class="wd-robot-badge">{!! $robo !!}</div>
                                <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                            </div>
                            <div class="wd-label-pill" style="margin-top:6px">
                                <span class="wd-label-dot"></span>
                                <span class="wd-label-text">Consultation</span>
                            </div>
                        </div>
                        <h2 class="wd-intro-heading" style="margin:24px 0 0">Book a <span style="color:var(--accent-theme,#D81D1F)">Consultation</span></h2>
                    </div>

                    <p class="wd-intro-text">
                        Schedule a free strategy consultation with our experts to discuss your business goals, project requirements, staffing needs, AI solutions, development initiatives, and growth opportunities. We'll help identify the most effective path forward for your organization.
                    </p>

                    {{-- Trust Metrics --}}
                    <div class="bc-stats-row">
                        @foreach([
                            ['value' => '200+', 'label' => 'Projects Delivered'],
                            ['value' => '98%', 'label' => 'Client Satisfaction'],
                            ['value' => '24h', 'label' => 'Avg Response Time'],
                            ['value' => '50+', 'label' => 'Expert Specialists'],
                        ] as $stat)
                            <div class="wd-intro-stat">
                                <strong>{{ $stat['value'] }}</strong>
                                <span>{{ $stat['label'] }}</span>
                            </div>
                        @endforeach
                    </div>

                    <p class="wd-intro-text">
                        Whether you're looking to scale your team, launch a new product, implement AI solutions, or improve operational efficiency — our specialists will help you identify the best strategy and next steps.
                    </p>

                    <ul class="dev-staff-perks" style="margin-top:4px;margin-bottom:0">
                        @foreach([
                            'Free initial consultation',
                            'Discuss project requirements',
                            'Expert technical guidance',
                            'Personalized solution recommendations',
                            'Clear project roadmap',
                            'Fast response and support'
                        ] as $benefit)
                            <li class="dev-staff-perk">
                                <span class="dev-staff-perk-dot"></span>
                                {{ $benefit }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- RIGHT SIDE: Booking Widget --}}
                <div class="dev-staff-card bc-widget-col" style="padding:10px;cursor:default">
                    <div class="calendly-inline-widget" data-url="https://calendly.com/mshayantariq/schedule-a-meeting?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:280px;height:700px;width:100%"></div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
<script src="https://assets.calendly.com/assets/external/widget.js" async></script>
<script>
(function () {
    var root = document.querySelector('.pw-services-development');
    if (!root) return;

        /* Reviews carousel: seamless infinite marquee */
    var track = root.querySelector('.rev-track');
    var wrap = root.querySelector('.rev-track-wrap');
    if (track && wrap) {
        var originals = Array.prototype.slice.call(track.children);
        var N = originals.length;
        
        var SPEED = 1.2;
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
                manualVelocity *= 0.92;
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

        root.querySelectorAll('.rev-nav-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var dir = btn.hasAttribute('data-rev-prev') ? -1 : (btn.hasAttribute('data-rev-next') ? 1 : 0);
                if(dir === 0) dir = parseInt(btn.getAttribute('data-rev-dir'), 10) || 0;
                manualVelocity += dir * 45;
            });
        });

        var rt;
        window.addEventListener('resize', function () { clearTimeout(rt); rt = setTimeout(setup, 200); });
    }
})();
</script>
@endpush
