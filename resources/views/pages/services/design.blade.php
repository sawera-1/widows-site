@extends('layouts.app')

@section('title', 'Corammers')
@section('meta_description', 'We craft visual experiences that drive real results — UI/UX design, graphic design, video editing, and creative direction.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/services-design.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
@endpush

@section('content')
@php
    $robot = '<img loading="lazy" decoding="async" class="robo-light" src="/assets/robo.png" alt="Robot" width="32" height="32" style="object-fit:contain"><img loading="lazy" decoding="async" class="robo-dark" src="/assets/robo.png" alt="Robot" width="32" height="32" style="object-fit:contain">';

    $techCol1 = [
        ['name' => 'UI/UX Design', 'abbr' => 'UIUX', 'color' => '#a259ff', 'bg' => 'rgba(162,89,255,0.13)'],
        ['name' => 'Wireframing', 'abbr' => 'WIRE', 'color' => '#0acf83', 'bg' => 'rgba(10,207,131,0.13)'],
        ['name' => 'Prototyping', 'abbr' => 'PROTO', 'color' => '#ff7262', 'bg' => 'rgba(255,114,98,0.13)'],
        ['name' => 'Design Systems', 'abbr' => 'SYS', 'color' => '#1abcfe', 'bg' => 'rgba(26,188,254,0.13)'],
        ['name' => 'UX Research', 'abbr' => 'UXR', 'color' => '#f24e1e', 'bg' => 'rgba(242,78,30,0.13)'],
        ['name' => 'Interaction Design', 'abbr' => 'IXD', 'color' => '#ffcc00', 'bg' => 'rgba(255,204,0,0.13)'],
    ];
    $techCol2 = [
        ['name' => 'Brand Identity', 'abbr' => 'BRAND', 'color' => '#1572b6', 'bg' => 'rgba(21,114,182,0.13)'],
        ['name' => 'Logo Design', 'abbr' => 'LOGO', 'color' => '#ff7a18', 'bg' => 'rgba(255,122,24,0.13)'],
        ['name' => 'Visual Systems', 'abbr' => 'VIS', 'color' => '#42b883', 'bg' => 'rgba(66,184,131,0.13)'],
        ['name' => 'Creative Direction', 'abbr' => 'CD', 'color' => '#ff2d20', 'bg' => 'rgba(255,45,32,0.13)'],
        ['name' => 'Image Editing', 'abbr' => 'IMG', 'color' => '#31a8ff', 'bg' => 'rgba(49,168,255,0.13)'],
        ['name' => 'Content Design', 'abbr' => 'CNT', 'color' => '#777bb4', 'bg' => 'rgba(119,123,180,0.13)'],
    ];
    $techCol3 = [
        ['name' => 'Video Editing', 'abbr' => 'VID', 'color' => '#9999ff', 'bg' => 'rgba(153,153,255,0.13)'],
        ['name' => 'Motion Design', 'abbr' => 'MOTION', 'color' => '#d291ff', 'bg' => 'rgba(210,145,255,0.13)'],
       ['name' => 'Creative Tools', 'abbr' => 'TOOLS', 'color' => '#00c4cc', 'bg' => 'rgba(0,196,204,0.13)'],
        ['name' => 'Creative Editing', 'abbr' => 'EDIT', 'color' => '#00c9a7', 'bg' => 'rgba(0,201,167,0.13)'],
        ['name' => 'Visual Effects', 'abbr' => 'VFX', 'color' => '#f7df1e', 'bg' => 'rgba(247,223,30,0.13)'],
        ['name' => 'Content Production', 'abbr' => 'PROD', 'color' => '#ff4ecd', 'bg' => 'rgba(255,78,205,0.13)'],
    ];
    $techCol4 = [
        ['name' => 'Figma', 'abbr' => 'FIG', 'color' => '#a259ff', 'bg' => 'rgba(162,89,255,0.13)'],
        ['name' => 'Design Thinking', 'abbr' => 'THINK', 'color' => '#ff61f6', 'bg' => 'rgba(255,97,246,0.13)'],
        ['name' => 'Creative Tools', 'abbr' => 'TOOLS', 'color' => '#00c4cc', 'bg' => 'rgba(0,196,204,0.13)'],
        ['name' => 'UI Systems', 'abbr' => 'UI', 'color' => '#ff0000', 'bg' => 'rgba(255,0,0,0.13)'],
        ['name' => 'Prototyping Flow', 'abbr' => 'FLOW', 'color' => '#0055ff', 'bg' => 'rgba(0,85,255,0.13)'],
        ['name' => 'Visual Strategy', 'abbr' => 'STR', 'color' => '#888', 'bg' => 'rgba(136,136,136,0.13)'],
    ];

    $icoUiux = '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" /></svg>';
    $icoGraphic = '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2" /><circle cx="8.5" cy="8.5" r="1.5" /><polyline points="21 15 16 10 5 21" /></svg>';
    $icoVideo = '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z" /><rect x="1" y="5" width="15" height="14" rx="2" ry="2" /></svg>';
    $icoVisual = '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M8 12h8M12 8v8" /></svg>';

    $designServices = [
        ['title' => 'UI/UX Design', 'perfectFor' => 'Businesses and startups wanting professional, conversion-focused design that users love.', 'technologies' => ['Figma', 'Adobe XD', 'Framer', 'Maze', 'Zeplin', 'Hotjar', 'Uizard', 'Galileo AI', 'Relume'], 'icon' => $icoUiux],
        ['title' => 'Graphic Design', 'perfectFor' => 'Brands needing a consistent, professional visual identity that stands out.', 'technologies' => ['Adobe Illustrator', 'Photoshop', 'Figma', 'Canva Pro', 'InDesign', 'Adobe Firefly', 'Midjourney', 'Canva AI'], 'icon' => $icoGraphic],
        ['title' => 'Video Editing', 'perfectFor' => 'Brands, creators, and businesses needing consistent, scroll-stopping video content.', 'technologies' => ['Adobe Premiere Pro', 'After Effects', 'DaVinci Resolve', 'CapCut Pro', 'Final Cut Pro', 'Runway ML', 'Descript', 'ElevenLabs', 'Topaz Video AI'], 'icon' => $icoVideo],
        ['title' => 'Visual Systems', 'perfectFor' => 'Enterprises needing scalable design foundations and comprehensive visual guidelines.', 'technologies' => ['Design Systems', 'Tokenization', 'Brand Guidelines', 'Component Libraries', 'Storybook', 'Zeroheight'], 'icon' => $icoVisual],
    ];

    $icoDirection = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z" /><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" /><path d="M2 2l7.5 1.5" /><path d="M7 11c.105 0 .209-.004.312-.012" /></svg>';
    $icoUiux24 = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" /></svg>';
    $icoGraphic24 = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2" /><circle cx="8.5" cy="8.5" r="1.5" /><polyline points="21 15 16 10 5 21" /></svg>';
    $icoVideo24 = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z" /><rect x="1" y="5" width="15" height="14" rx="2" ry="2" /></svg>';

    $pricingCards = [
        ['title' => 'UI/UX Design', 'tier' => 'Starter', 'price' => '$400', 'desc' => 'Design experiences that feel effortless, look stunning, and convert visitors into customers.', 'features' => ['Up to 5 screens', 'Wireframes & user flow', 'Basic UI design', 'Mobile responsive layouts', 'Typography & color system', '1 revision round', '7 days support'], 'ticker1' => ['Figma', 'Adobe XD', 'Framer', 'Maze'], 'ticker2' => ['Zeplin', 'Hotjar', 'Uizard', 'Relume'], 'highlight' => false, 'icon' => $icoUiux24],
        ['title' => 'Graphic Design', 'tier' => 'Branding', 'price' => '$200', 'desc' => 'Build a brand identity so strong, people recognize you before they read your name.', 'features' => ['Logo design', '2 concepts', '3 revisions', 'Final files (PNG, SVG, PDF)', 'Basic color palette', 'Font selection', '7 days support'], 'ticker1' => ['Illustrator', 'Photoshop', 'Figma', 'Canva'], 'ticker2' => ['InDesign', 'Firefly', 'Midjourney', 'Canva AI'], 'highlight' => false, 'icon' => $icoGraphic24],
        ['title' => 'Video Editing', 'tier' => 'Monthly', 'price' => '$250', 'desc' => 'Professional video content that stops the scroll, builds your brand, and drives results.', 'features' => ['Up to 3 short videos/month', 'Captions & subtitles', 'Basic transitions & cuts', 'Background music sync', 'Aspect ratio optimization', '1 revision per video'], 'ticker1' => ['Premiere Pro', 'After Effects', 'DaVinci'], 'ticker2' => ['CapCut', 'Runway', 'ElevenLabs', 'Topaz'], 'highlight' => true, 'icon' => $icoVideo24],
        ['title' => 'Creative Direction', 'tier' => 'Enterprise', 'price' => '$1,200', 'desc' => 'End-to-end creative strategy and design leadership for complex platforms and brands.', 'features' => ['Full design strategy', 'Design system audit', 'Art direction', 'Brand consulting', 'Team mentorship', 'Unlimited revisions', 'Priority support'], 'ticker1' => ['Strategy', 'Leadership', 'Vision', 'Execution'], 'ticker2' => ['Planning', 'Audit', 'Review', 'Growth'], 'highlight' => false, 'icon' => $icoDirection],
    ];

    $designSteps = [
        ['num' => '01', 'title' => 'Discovery', 'desc' => 'Deep research into your brand, audience, and competitors to define the creative direction.', 'tag' => 'Strategy', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>'],
        ['num' => '02', 'title' => 'Wireframing', 'desc' => 'Structuring the layout and user flow to ensure a seamless and intuitive experience.', 'tag' => 'UX Design', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2" /><line x1="3" y1="9" x2="21" y2="9" /><line x1="9" y1="21" x2="9" y2="9" /></svg>'],
        ['num' => '03', 'title' => 'Visual Design', 'desc' => 'Crafting the aesthetic identity with precision colors, typography, and high-fidelity visuals.', 'tag' => 'UI Design', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" /></svg>'],
        ['num' => '04', 'title' => 'Handoff', 'desc' => 'Preparing all assets and documentation for a smooth transition to development or launch.', 'tag' => 'Delivery', 'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" /></svg>'],
    ];

    $tickerItems = [
        ['label' => 'UI/UX Design', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" /></svg>'],
        ['label' => 'Brand Identity', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg>'],
        ['label' => 'Visual Systems', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M8 12h8M12 8v8" /></svg>'],
        ['label' => 'Motion Graphics', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z" /><rect x="1" y="5" width="15" height="14" rx="2" ry="2" /></svg>'],
        ['label' => 'Creative Direction', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z" /><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" /><path d="M2 2l7.5 1.5" /><path d="M7 11c.105 0 .209-.004.312-.012" /></svg>'],
        ['label' => 'Figma & Adobe', 'icon' => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z" /><path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z" /><path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z" /><path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z" /><path d="M12 16h3.5a3.5 3.5 0 1 1-3.5 3.5V16z" /></svg>'],
    ];

    $reviews = [
        ['name' => 'Sarah Mitchell', 'role' => 'CEO, ProBuild', 'text' => "the dashboard sync is literally so fast now and the team was super helpful with everything best agency we've worked with tbh", 'image' => '/assets/project/web/1.webp', 'avatar' => '/assets/im1.webp'],
        ['name' => 'James Okafor', 'role' => 'CTO, EasyBridge', 'text' => 'needed a system that actually scales and these guys delivered everything works perfectly and the quality is top notch really happy with it', 'image' => '/assets/project/custom/3.webp', 'avatar' => null],
        ['name' => 'Lucas Bernhard', 'role' => 'Researcher, SpaceBound', 'text' => "the app looks so good honestly didn't think it would be this nice but the design is just fire super easy to use too thanks guys", 'image' => '/assets/project/mobile/1.webp', 'avatar' => '/assets/im3.webp'],
        ['name' => 'Priya Nair', 'role' => 'Partner, Robotech', 'text' => 'handled the complicated ai stuff for our dashboard really well it was a tough project but they made it look easy solid results all around', 'image' => '/assets/project/custom/1.webp', 'avatar' => '/assets/im2.webp'],
        ['name' => 'Alex Chen', 'role' => 'Founder, DesignFlow', 'text' => 'love how clean the dashboard looks its exactly what i wanted the ui is super minimal and fast they really got our vision from day one', 'image' => '/assets/project/uiux/8.webp', 'avatar' => null],
        ['name' => 'Sophia Kim', 'role' => 'Manager, StayFit', 'text' => 'mobile app is super smooth no lag at all just a great user experience u can tell they care about the small details highly recommend', 'image' => '/assets/project/mobile/2.webp', 'avatar' => null],
        ['name' => 'Marcus Thorne', 'role' => 'Founder, TechFlow', 'text' => 'the custom software they built is a game changer for our warehouse operations super efficient and easy for the team to pick up definitely the best choice for us', 'image' => '/assets/project/custom/2.webp', 'avatar' => null],
        ['name' => 'Elena Rossi', 'role' => 'Director, VibeDesign', 'text' => 'honestly obsessed with the new branding and logo they did it just fits our vibe perfectly and the team was so chill to work with 10/10', 'image' => '/assets/project/uiux/6.webp', 'avatar' => null],
        ['name' => 'Omar Farouq', 'role' => 'Operations Lead, SyncAI', 'text' => 'honestly was skeptical about ai automation at first but the workflow they built just runs itself now we cut manual hours by like 70% which is insane', 'image' => '/assets/project/aiSol/1.webp', 'avatar' => null],
        ['name' => 'Nadia Petrov', 'role' => 'Creative Director, PixelMind', 'text' => 'the ai design visuals they created blew us away every concept was unique and on brand felt like they really understood our aesthetic from the very first call', 'image' => '/assets/project/aiDes/ai3.webp', 'avatar' => null],
    ];

    $collage = [
        ['src' => '/assets/project/web/1.webp', 'title' => 'ProBuild — Construction', 'desc' => 'Next-gen architectural excellence', 'cls' => 'pf-card-tall', 'h' => 420],
        ['src' => '/assets/project/custom/3.webp', 'title' => 'EasyBridge — Fintech', 'desc' => 'Seamless mortgage application platform', 'cls' => '', 'h' => 200],
        ['src' => '/assets/project/mobile/1.webp', 'title' => 'NASA Explorer', 'desc' => 'Interactive space exploration interface', 'cls' => '', 'h' => 200],
        ['src' => '/assets/project/aiSol/3.webp', 'title' => 'n8n', 'desc' => 'AI', 'cls' => '', 'h' => 210],
        ['src' => '/assets/project/uiux/7.webp', 'title' => 'Logo', 'desc' => 'FlexFlox', 'cls' => '', 'h' => 210],
    ];
    $arrowIcon = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>';

    /* ─── Shared Devicon class map ─── */
    $devicons = [
        'UI/UX Design' => 'devicon-figma-plain',
        'Wireframing' => 'devicon-framermotion-original',
        'Prototyping' => 'devicon-xd-plain',
        'Design Systems' => 'devicon-storybook-plain',
        'UX Research' => 'devicon-google-plain',
        'Interaction Design' => 'devicon-framermotion-original',
        'Brand Identity' => 'devicon-illustrator-plain',
        'Logo Design' => 'devicon-illustrator-plain',
        'Visual Systems' => 'devicon-photoshop-plain',
        'Creative Direction' => 'devicon-behance-plain',
        'Image Editing' => 'devicon-photoshop-plain',
        'Content Design' => 'devicon-canva-original',
        'Video Editing' => 'devicon-premierepro-plain',
        'Motion Design' => 'devicon-aftereffects-plain',
        'Short-form Content' => 'devicon-capcut-plain',
        'Creative Editing' => 'devicon-premierepro-plain',
        'Visual Effects' => 'devicon-aftereffects-plain',
        'Content Production' => '<svg width="1.4rem" height="1.4rem" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"/><rect x="2" y="6" width="14" height="12" rx="2"/></svg>',
        'Figma' => 'devicon-figma-plain',
        'Design Thinking' => 'devicon-xd-plain',
        'Creative Tools' => 'devicon-photoshop-plain',
        'UI Systems' => 'devicon-storybook-plain',
        'Prototyping Flow' => 'devicon-framermotion-original',
        'Visual Strategy' => 'devicon-behance-plain',
    ];
@endphp

<div class="pw-services-design">
    <main style="padding-top:80px;background:var(--bg);color:var(--text)">

        {{-- HERO — TICKER LAYOUT --}}
        <section class="dev-hero">
            <div class="dev-hero-inner">

                {{-- LEFT: Tickers 1 & 2 --}}
                <div class="dev-hero-ticker-group dev-ticker-left">
                    <div class="dev-v-ticker-col" style="height:520px">
                        <div class="dev-v-ticker-track dev-v-ticker-track-up" style="--spd:22s">
                            @foreach(array_merge($techCol1, $techCol1) as $t)
                                <div class="dev-tech-card">
                                    <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                                        @php $icon = $devicons[$t['name']] ?? 'devicon-figma-plain'; @endphp
                                        @if(str_starts_with($icon, '<svg'))
                                            {!! $icon !!}
                                        @else
                                            <i class="{{ $icon }}"></i>
                                        @endif
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
                                        @php $icon = $devicons[$t['name']] ?? 'devicon-figma-plain'; @endphp
                                        @if(str_starts_with($icon, '<svg'))
                                            {!! $icon !!}
                                        @else
                                            <i class="{{ $icon }}"></i>
                                        @endif
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
                                <div class="dev-hero-robot-badge">{!! $robot !!}</div>
                                <div class="dev-hero-divider" style="margin:12px 0 0;width:48px"></div>
                            </div>
                            <div class="dev-hero-label-pill" style="margin-top:6px">
                                <span class="dev-hero-label-dot"></span>
                                <span class="dev-hero-label-text">Designing Services</span>
                            </div>
                        </div>
                        <h1 class="dev-hero-heading" style="text-align:center;margin-top:24px;margin-bottom:0">
                            We Craft<br>
                            <span class="dev-hero-accent">Visual</span><br>
                            Experiences
                        </h1>
                    </div>

                    <p class="dev-hero-desc">
                        We Craft Visual Experiences That Drive Real Results. From pixel-perfect interfaces to compelling brand identities, our team designs digital experiences that resonate.
                    </p>

                    <div class="dev-hero-cta-row">
                        <a href="/contact" class="dev-hero-btn">
                            Contact Us
                            {!! $arrowIcon !!}
                        </a>
                    </div>
                </div>

                {{-- RIGHT: Tickers 3 & 4 --}}
                <div class="dev-hero-ticker-group dev-ticker-right">
                    <div class="dev-v-ticker-col" style="height:520px">
                        <div class="dev-v-ticker-track dev-v-ticker-track-down" style="--spd:28s">
                            @foreach(array_merge($techCol3, $techCol3) as $t)
                                <div class="dev-tech-card">
                                    <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                                        @php $icon = $devicons[$t['name']] ?? 'devicon-figma-plain'; @endphp
                                        @if(str_starts_with($icon, '<svg'))
                                            {!! $icon !!}
                                        @else
                                            <i class="{{ $icon }}"></i>
                                        @endif
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
                                        @php $icon = $devicons[$t['name']] ?? 'devicon-figma-plain'; @endphp
                                        @if(str_starts_with($icon, '<svg'))
                                            {!! $icon !!}
                                        @else
                                            <i class="{{ $icon }}"></i>
                                        @endif
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

        {{-- TICKER BAND --}}
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

        {{-- OUR EXPERTISE — TWO COLUMN --}}
        <section class="wd-section">
            <div class="wd-inner">
                <div class="dev-intro-two-col reveal">

                    <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                        <div class="wd-label-row" style="align-items:flex-start">
                            <div style="display:flex;flex-direction:column;align-items:center">
                                <div class="wd-robot-badge">{!! $robot !!}</div>
                                <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                            </div>
                            <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Our Expertise</span></div>
                        </div>
                        <h2 class="wd-intro-heading" style="margin:24px 0 0">We Build Visual Solutions That Drive Real Results</h2>
                        <p class="wd-intro-text">From pixel-perfect interfaces to compelling brand identities, our team designs digital experiences that resonate with your audience. We combine creative intuition with strategic thinking ensuring every element serves your brand goals.</p>
                        <p class="wd-intro-text">Whether you need a cutting-edge UI/UX for your platform, a strong graphic identity, or high-impact video content, we deliver with precision and artistic vision.</p>
                        <div style="display:flex;align-items:center;gap:28px;margin-top:14px;flex-wrap:wrap">
                            <a href="/contact" class="dev-hero-btn">
                                Contact Us
                                {!! $arrowIcon !!}
                            </a>
                            <div class="wd-intro-stat">
                                <strong>200+</strong>
                                <span>Projects Delivered</span>
                            </div>
                        </div>
                    </div>

                    <a href="/staff" class="dev-staff-card">
                        <div class="dev-staff-card-badge">
                            <span class="dev-staff-card-badge-dot"></span>
                            Now Hiring
                        </div>

                        <h3 class="dev-staff-card-title">
                            Scale Your Team with<br>
                            <span class="dev-staff-card-accent">Design Support</span>
                        </h3>

                        <p class="dev-staff-card-desc">
                            Need expert designers without the overhead of full-time hiring? Our staff augmentation service gives you instant access to vetted, senior-level UI/UX and visual experts who integrate seamlessly.
                        </p>

                        <ul class="dev-staff-perks">
                            @foreach(['Dedicated UI/UX designers, graphic artists & motion experts', 'Flexible engagement — part-time or full-time', 'Onboard in 48 hours — no lengthy hiring cycles', 'Work in your timezone, your tools, your process', 'Figma, Adobe Suite, Cinema 4D & more'] as $perk)
                                <li class="dev-staff-perk">
                                    <span class="dev-staff-perk-dot"></span>
                                    {{ $perk }}
                                </li>
                            @endforeach
                        </ul>

                        <div class="dev-staff-cta">
                            Explore Staff Augmentation
                        </div>
                    </a>

                </div>
            </div>
        </section>

        {{-- DESIGN SERVICES CARDS --}}
        <section class="ds-section">
            <div class="ds-inner">
                <div class="reveal">
                    <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                        <div class="wd-label-row" style="align-items:flex-start">
                            <div style="display:flex;flex-direction:column;align-items:center">
                                <div class="wd-robot-badge">{!! $robot !!}</div>
                                <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                            </div>
                            <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Our Solutions</span></div>
                        </div>
                        <h2 class="wd-section-heading" style="margin:24px 0 0">Designing Services</h2>
                    </div>
                    <p class="wd-section-sub">We specialize in human-centered design. Every pixel is intentional, every interaction is meaningful, and every result is measurable.</p>
                </div>

                <div class="ds-grid">
                    @foreach($designServices as $svc)
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
                            <a href="/contact" class="ds-v2-cta">Get Started</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- HOW WE BUILD --}}
        <section class="wd-section" style="overflow:hidden">
            <div class="wd-inner">
                <div class="reveal">
                    <div class="wd-label-row">
                        <div class="wd-robot-badge">{!! $robot !!}</div>
                        <div class="wd-label-pill"><span class="wd-label-dot"></span><span class="wd-label-text">Our Methodology</span></div>
                    </div>
                    <div class="wd-section-divider"></div>
                    <h2 class="wd-section-heading">How We Craft Visual Excellence</h2>
                    <p class="wd-section-sub">A proven, creative process — from initial discovery to pixel-perfect handoff, every detail is meticulously designed.</p>
                </div>
                <div class="hwb-flow">
                    <div class="hwb-connector">
                        <div class="hwb-connector-fill"></div>
                    </div>
                    @foreach($designSteps as $s)
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

        {{-- PRICING --}}
        <section class="pc-section">
            <div class="ds-inner">
                <div class="reveal" style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                    <div class="wd-label-row" style="align-items:flex-start">
                        <div style="display:flex;flex-direction:column;align-items:center">
                            <div class="wd-robot-badge">{!! $robot !!}</div>
                            <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                        </div>
                        <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Pricing</span></div>
                    </div>
                    <h2 class="wd-section-heading" style="margin:24px 0 0">Professional Design Plans</h2>
                    <p class="wd-section-sub" style="margin:12px 0 0">Tailored design solutions for every stage of your brand — from rapid prototyping to full-scale visual identity.</p>
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
                                <div class="pc-ticker-wrap pc-ticker--light">
                                    <div class="pc-card-ticker">
                                        @foreach(array_merge($plan['ticker1'], $plan['ticker1']) as $t)
                                            <span class="ds-v2-pill" style="font-size:0.64rem;padding:4px 12px">{{ $t }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="pc-ticker-block">
                                <span class="pc-ticker-label">Tools & Integrations</span>
                                <div class="pc-ticker-wrap pc-ticker--light">
                                    <div class="pc-card-ticker" style="animation-duration:18s">
                                        @foreach(array_merge($plan['ticker2'], $plan['ticker2']) as $t)
                                            <span class="ds-v2-pill" style="font-size:0.64rem;padding:4px 12px">{{ $t }}</span>
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
                                                <path d="M1.5 5l2.5 2.5 4.5-5" stroke="var(--accent-theme, #D81D1F)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
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

        {{-- PORTFOLIO --}}
        <section class="pf-section">
            <div class="pf-home-inner">
                <div class="pf-content">
                    <div class="pf-label-row">
                        <div class="pf-robot-float">{!! $robot !!}</div>
                        <div class="pf-pill">
                            <span class="pf-dot-pulse"></span>
                            <span class="pf-pill-text">Our Work</span>
                        </div>
                    </div>
                    <div class="pf-divider"></div>
                    <h2 class="pf-heading">Work That<br><span class="pf-accent">Speaks</span> Loudly</h2>
                    <p class="pf-desc">From high-performance SaaS dashboards to immersive mobile experiences — every project we ship is crafted with precision, purpose, and a relentless focus on exceptional user experience.</p>
                    <div class="pf-stats">
                        @foreach([['value' => '50+', 'label' => 'Projects'], ['value' => '5+', 'label' => 'Years'], ['value' => '98%', 'label' => 'Satisfaction']] as $stat)
                            <div class="pf-stat">
                                <span class="pf-stat-value">{{ $stat['value'] }}</span>
                                <span class="pf-stat-label">{{ $stat['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                    <a href="/portfolio" class="pf-btn">View Portfolio</a>
                </div>

                <div class="pf-collage">
                    @foreach($collage as $item)
                        <a href="/portfolio" class="pf-collage-card {{ $item['cls'] }}" style="height:{{ $item['h'] }}px">
                            <img class="pf-collage-img" src="{{ $item['src'] }}" alt="{{ $item['title'] }}" loading="lazy">
                            <div class="pf-collage-overlay"></div>
                            <div class="pf-collage-content">
                                <h4 class="pf-collage-title">{{ $item['title'] }}</h4>
                                <p class="pf-collage-desc">{{ $item['desc'] }}</p>
                                <div class="pf-collage-explore">
                                    <span>Explore</span>
                                    <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M1 6H11M6 1L11 6L6 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                </div>
                            </div>
                            <div class="pf-badge-dot"></div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- REVIEWS --}}
        <section class="rev-section-bg">
            <div class="rev-inner">
                <div class="rev-header-wrap">
                    <div style="max-width:700px">
                        <div class="rev-label-row">
                            <div class="rev-robot-badge">{!! $robot !!}</div>
                            <div class="rev-label-pill">
                                <span class="rev-label-dot"></span>
                                <span class="rev-label">Testimonials</span>
                            </div>
                        </div>
                        <div class="rev-divider"></div>
                        <h2 class="rev-heading">Words from our <br><span class="rev-accent">Happy Clients</span></h2>
                    </div>

                    <div style="display:flex;gap:16px">
                        <button class="rev-nav-btn" data-rev-prev aria-label="Previous">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        </button>
                        <button class="rev-nav-btn" data-rev-next aria-label="Next">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        </button>
                    </div>
                </div>

                <div class="rev-track-wrap">
                    <div class="rev-track" data-rev-track>
                        @foreach(array_merge($reviews, $reviews) as $r)
                            <div class="rev-card">
                                <div class="rev-card-media">
                                    <img loading="lazy" decoding="async" src="{{ $r['image'] }}" alt="{{ $r['name'] }}">
                                </div>
                                <div class="rev-card-body">
                                    <div class="rev-stars">
                                        @for($s = 0; $s < 5; $s++)
                                            <svg width="18" height="18" viewBox="0 0 16 16" fill="#ffb33e" style="flex-shrink:0"><path d="M8 1.5L9.7 6H14.3L10.6 8.9L12 13.4L8 10.8L4 13.4L5.4 8.9L1.7 6H6.3L8 1.5Z" stroke="#ffb33e" stroke-width="1.2" stroke-linejoin="round" /></svg>
                                        @endfor
                                    </div>
                                    <p class="rev-text">{{ $r['text'] }}</p>
                                    <div class="rev-foot">
                                        <div class="rev-foot-left">
                                            <div class="rev-avatar-circle">
                                                @if($r['avatar'])
                                                    <img loading="lazy" decoding="async" src="{{ $r['avatar'] }}" alt="{{ $r['name'] }}">
                                                @else
                                                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="12" fill="var(--accent-theme)" fill-opacity="0.1" /><path d="M12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" stroke="var(--accent-theme)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M18 19C18 16.2386 15.3137 14 12 14C8.68629 14 6 16.2386 6 19" stroke="var(--accent-theme)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
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

        {{-- BOOK CONSULTATION --}}
       <section class="wd-section bc-section">
        <div class="wd-inner">
            <div class="dev-intro-two-col bc-two-col reveal">

                {{-- LEFT SIDE: Content --}}
                <div>
                    <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                        <div class="wd-label-row" style="align-items:flex-start">
                            <div style="display:flex;flex-direction:column;align-items:center">
                                <div class="wd-robot-badge">{!! $robot !!}</div>
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

    </main>
</div>
@endsection

@push('scripts')
<script src="https://assets.calendly.com/assets/external/widget.js" async></script>
<script>
(function () {
    var scope = document.querySelector('.pw-services-design');
    if (!scope) return;

    /* Reveal-on-scroll (content visible by default; this adds the animation class) */
    var reveals = scope.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); } });
        }, { threshold: 0.05, rootMargin: '0px 0px -50px 0px' });
        reveals.forEach(function (el) { io.observe(el); });
    } else {
        reveals.forEach(function (el) { el.classList.add('visible'); });
    }

    /* How-we-build connector fill on view */
    var flow = scope.querySelector('.hwb-flow');
    if (flow && 'IntersectionObserver' in window) {
        var fill = flow.querySelector('.hwb-connector-fill');
        var fo = new IntersectionObserver(function (entries) {
            if (entries[0].isIntersecting && fill) { fill.classList.add('hwb-connector-filled'); fo.disconnect(); }
        }, { threshold: 0.3 });
        fo.observe(flow);
    }

    /* Reviews carousel */
    var track = scope.querySelector('[data-rev-track]');
    if (track) {
        var GAP = 28;
        var cards = track.children;
        var half = cards.length / 2;
        var index = 0;
        var timer = null;

        function stepSize() {
            if (!cards.length) return 0;
            return cards[0].getBoundingClientRect().width + GAP;
        }
        function render() {
            track.style.transform = 'translateX(' + (-index * stepSize()) + 'px)';
        }
        function go(dir) {
            index += dir;
            if (index >= half) {
                index -= half;
                track.style.transition = 'none';
                render();
                void track.offsetWidth;
                track.style.transition = '';
            } else if (index < 0) {
                index += half;
                track.style.transition = 'none';
                render();
                void track.offsetWidth;
                track.style.transition = '';
            }
            render();
        }
        function start() { timer = setInterval(function () { go(1); }, 5000); }
        function stop() { clearInterval(timer); }

        var prev = scope.querySelector('[data-rev-prev]');
        var next = scope.querySelector('[data-rev-next]');
        if (prev) prev.addEventListener('click', function () { go(-1); });
        if (next) next.addEventListener('click', function () { go(1); });

        var wrap = scope.querySelector('.rev-track-wrap');
        if (wrap) {
            wrap.addEventListener('mouseenter', stop);
            wrap.addEventListener('mouseleave', start);
        }
        window.addEventListener('resize', render);
        render();
        start();
    }
})();
</script>
<script src="https://assets.calendly.com/assets/external/widget.js" async></script>
@endpush
