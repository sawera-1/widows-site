@extends('layouts.app')

@section('title', 'AI Development Services — Corammers')
@section('meta_description', 'AI development by Corammers — chatbots, automation, LLM integrations and intelligent products that give you an edge.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/services-ai.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
@endpush

@php
    // ─── ROBOT ICON (theme-aware: two imgs, toggled by small JS on data-theme) ───
    $robo = function () {
        return '<img loading="lazy" decoding="async" class="pw-robo-light" src="/assets/robo.webp" alt="Robot" width="32" height="32" style="object-fit:contain;display:block">'
             . '<img loading="lazy" decoding="async" class="pw-robo-dark" src="/assets/robo.webp" alt="Robot" width="32" height="32" style="object-fit:contain;display:none">';
    };

    $arrowIcon = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>';

    // ─── VERTICAL TICKER TECH DATA ───
    $sparkle = '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l1.5 5.5L19 9l-5.5 1.5L12 16l-1.5-5.5L5 9l5.5-1.5z"/></svg>';
    $tc = fn($n,$a,$c,$b) => ['name'=>$n,'abbr'=>$a,'color'=>$c,'bg'=>$b];
    $techCol1 = [
        $tc('AI Automation','AUTO','#7c3aed','rgba(124,58,237,0.13)'),
        $tc('LLM Agents','LLM','#06b6d4','rgba(6,182,212,0.13)'),
        $tc('Generative AI','GEN','#a855f7','rgba(168,85,247,0.13)'),
        $tc('Smart Workflows','FLOW','#22c55e','rgba(34,197,94,0.13)'),
        $tc('Predictive AI','PRED','#f97316','rgba(249,115,22,0.13)'),
        $tc('Neural Networks','NN','#ef4444','rgba(239,68,68,0.13)'),
    ];
    $techCol2 = [
        $tc('Chatbots','CHAT','#0ea5e9','rgba(14,165,233,0.13)'),
        $tc('AI Integrations','API','#6366f1','rgba(99,102,241,0.13)'),
        $tc('Workflow Automation','WF','#14b8a6','rgba(20,184,166,0.13)'),
        $tc('Data Intelligence','DATA','#eab308','rgba(234,179,8,0.13)'),
        $tc('Cloud AI Systems','CLOUD','#3b82f6','rgba(59,130,246,0.13)'),
        $tc('AI Optimization','OPT','#ec4899','rgba(236,72,153,0.13)'),
    ];
    $techCol3 = [
        $tc('GPT Systems','GPT','#8b5cf6','rgba(139,92,246,0.13)'),
        $tc('AI Content Creation','CONTENT','#06b6d4','rgba(6,182,212,0.13)'),
        $tc('Voice AI','VOICE','#22c55e','rgba(34,197,94,0.13)'),
        $tc('AI Video Tools','VIDEO','#f43f5e','rgba(244,63,94,0.13)'),
        $tc('Automation Bots','BOTS','#6366f1','rgba(99,102,241,0.13)'),
        $tc('AI Analytics','ANALYTICS','#f59e0b','rgba(245,158,11,0.13)'),
    ];
    $techCol4 = [
        $tc('LangChain','LC','#10b981','rgba(16,185,129,0.13)'),
        $tc('API Systems','API','#3b82f6','rgba(59,130,246,0.13)'),
        $tc('n8n Automation','N8N','#ef4444','rgba(239,68,68,0.13)'),
        $tc('AI Pipelines','PIPE','#a855f7','rgba(168,85,247,0.13)'),
        $tc('Cloud Deployment','DEP','#0ea5e9','rgba(14,165,233,0.13)'),
        $tc('Smart Systems','SMART','#f97316','rgba(249,115,22,0.13)'),
    ];

    // ─── TICKER BAND ITEMS ───
    $tickerItems = [
        ['label'=>'AI Automation','icon'=>'<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>'],
        ['label'=>'LLM Agents','icon'=>'<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>'],
        ['label'=>'Generative AI','icon'=>'<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>'],
        ['label'=>'Neural Networks','icon'=>'<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>'],
        ['label'=>'Smart Workflows','icon'=>'<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>'],
        ['label'=>'Predictive ROI','icon'=>'<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/></svg>'],
    ];

    // ─── AI SERVICE CARDS ───
    $aiServices = [
        [
            'title'=>'AI Automation & Development',
            'link'=>'/services/ai/automation',
            'perfectFor'=>'Businesses wanting to automate repetitive tasks, reduce manual work, and scale operations intelligently with custom LLM agents.',
            'technologies'=>['GPT-4o','Claude 3.5','LangChain','n8n','Make','Voiceflow','Pinecone','AutoGPT'],
            'capabilities'=>['24/7 Intelligent Customer Support Agents','Automated Lead Qualification & CRM Sync','Custom RAG (Retrieval Augmented Generation)','Complex Workflow Orchestration','Voice AI & Speech-to-Text Integration'],
            'icon'=>'<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>',
        ],
        [
            'title'=>'AI Content Creation',
            'link'=>'/services/ai/content',
            'perfectFor'=>'Brands, agencies, and marketers wanting high-quality visual and audio content at scale with reduced cost and time.',
            'technologies'=>['Midjourney v6','Runway Gen-3','ElevenLabs','HeyGen','Sora','Adobe Firefly'],
            'capabilities'=>['Photorealistic Brand Imagery','AI-Generated Video Commercials','Studio-Quality Voice Cloning','Automated Social Media Asset Kits','Multilingual Content Localization'],
            'icon'=>'<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12L12 12L22 2M2 22L12 12L22 22"/><circle cx="12" cy="12" r="3"/></svg>',
        ],
    ];

    // ─── BUILD STEPS ───
    $buildSteps = [
        ['num'=>'01','title'=>'Discovery','desc'=>'Deep research into your business, audience, and competitors to define the strategic foundation.','tag'=>'Strategy','icon'=>'<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>'],
        ['num'=>'02','title'=>'Design','desc'=>'Human-centered UI/UX wireframes, prototypes, and design systems crafted for clarity and beauty.','tag'=>'UI / UX','icon'=>'<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>'],
        ['num'=>'03','title'=>'Development','desc'=>'Precision engineering clean, scalable code on modern frameworks with performance at its core.','tag'=>'Engineering','icon'=>'<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>'],
        ['num'=>'04','title'=>'Deployment','desc'=>'Seamless launch with CI/CD pipelines, monitoring, and post-launch support ensuring zero downtime.','tag'=>'Launch','icon'=>'<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>'],
    ];

    // ─── PRICING CARDS ───
    $pricingCards = [
        [
            'title'=>'AI Automation & Development','tier'=>'Starter','price'=>'$500',
            'desc'=>'Build intelligent systems that work 24/7 — automate workflows and handle customer interactions.',
            'features'=>['1 Custom AI Agent or Chatbot','n8n / Make Workflow Automation','CRM Integration (HubSpot/Slack)','Automated Lead Qualification','Monthly Strategy & ROI Report','24/7 System Monitoring','Custom API Integration'],
            'ticker1'=>['GPT-4o','Claude 3.5','LangChain','n8n','Make','Voiceflow','Python','API'],
            'ticker2'=>['HubSpot','Salesforce','Slack','Discord','Google Sheets','Notion','Airtable','Twilio'],
            'highlight'=>false,
            'icon'=>'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>',
        ],
        [
            'title'=>'AI Content Creation','tier'=>'Starter','price'=>'$300',
            'desc'=>'Create scroll-stopping visuals, videos, and marketing assets at scale.',
            'features'=>['5 AI-Generated Brand Creatives','2 AI Video Commercials','Studio-Quality Voiceovers','AI Copywriting & Caption Kit','Platform-Ready Delivery','Brand-Consistent Asset Training','Priority Batch Processing'],
            'ticker1'=>['Midjourney','Runway','ElevenLabs','HeyGen','DALL-E 3','Stable Diffusion','Canva','Adobe Firefly'],
            'ticker2'=>['Instagram','TikTok','YouTube','LinkedIn','Twitter','Facebook','CapCut','Premiere Pro'],
            'highlight'=>true,
            'icon'=>'<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M22 12L12 12L22 2M2 22L12 12L2 2"/></svg>',
        ],
    ];

    // ─── PORTFOLIO COLLAGE ───
    $collage = [
        ['src' => '/assets/project/web/1.webp', 'title' => 'ProBuild — Construction', 'desc' => 'Next-gen architectural excellence', 'cls' => 'pf-collage-card-tall'],
        ['src' => '/assets/project/custom/3.webm', 'title' => 'EasyBridge — Fintech', 'desc' => 'Seamless mortgage application platform', 'cls' => 'pf-card-2'],
        ['src' => '/assets/project/mobile/1.webm', 'title' => 'NASA Explorer', 'desc' => 'Interactive space exploration interface', 'cls' => 'pf-card-3'],
        ['src' => '/assets/project/aiSol/3.webm', 'title' => 'n8n', 'desc' => 'AI', 'cls' => 'pf-card-4'],
        ['src' => '/assets/project/uiux/7.webm', 'title' => 'Logo', 'desc' => 'FlexFlox', 'cls' => 'pf-card-5'],
    ];

    // ─── REVIEWS ───
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

    $starIcon = '<svg width="18" height="18" viewBox="0 0 16 16" fill="#ffb33e" style="flex-shrink:0"><path d="M8 1.5L9.7 6H14.3L10.6 8.9L12 13.4L8 10.8L4 13.4L5.4 8.9L1.7 6H6.3L8 1.5Z" stroke="#ffb33e" stroke-width="1.2" stroke-linejoin="round"/></svg>';

    /* ─── Shared Devicon class map ─── */
    $devicons = [
        'AI Automation' => 'devicon-python-plain',
        'LLM Agents' => 'devicon-google-plain',
        'Generative AI' => 'devicon-tensorflow-original',
        'Smart Workflows' => 'devicon-jupyter-plain',
        'Predictive AI' => 'devicon-pytorch-original',
        'Neural Networks' => 'devicon-tensorflow-original',
        'Chatbots' => 'devicon-npm-original-wordmark',
        'AI Integrations' => 'devicon-nodejs-plain',
        'Workflow Automation' => 'devicon-githubactions-plain',
        'Data Intelligence' => 'devicon-pandas-plain',
        'Cloud AI Systems' => 'devicon-amazonwebservices-plain-wordmark',
        'AI Optimization' => 'devicon-scikitlearn-plain',
        'GPT Systems' => '<svg width="1.4rem" height="1.4rem" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8V4H8"/><rect width="16" height="12" x="4" y="8" rx="2"/><path d="M2 14h2"/><path d="M20 14h2"/><path d="M15 13v2"/><path d="M9 13v2"/></svg>',
        'AI Content Creation' => 'devicon-canva-original',
        'Voice AI' => 'devicon-c-plain',
        'AI Video Tools' => 'devicon-premierepro-plain',
        'Automation Bots' => 'devicon-javascript-plain',
        'AI Analytics' => 'devicon-jupyter-plain',
        'LangChain' => 'devicon-python-plain',
        'API Systems' => 'devicon-express-original',
        'n8n Automation' => 'devicon-nodejs-plain',
        'AI Pipelines' => 'devicon-gitlab-plain',
        'Cloud Deployment' => 'devicon-docker-plain',
        'Smart Systems' => 'devicon-typescript-plain',
    ];
@endphp

@section('content')
<div class="pw-services-ai">

    {{-- ═══ HERO — TICKER LAYOUT ═══ --}}
    <section class="dev-hero">
        <div class="dev-hero-inner">

            {{-- LEFT tickers 1 & 2 --}}
            <div class="dev-hero-ticker-group dev-ticker-left">
                <div class="dev-v-ticker-col" style="height:520px">
                    <div class="dev-v-ticker-track dev-v-ticker-track-up" style="--spd:22s">
                        @foreach(array_merge($techCol1, $techCol1) as $t)
                            <div class="dev-tech-card">
                                <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                                    @php $icon = $devicons[$t['name']] ?? 'devicon-python-plain'; @endphp
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
                                    @php $icon = $devicons[$t['name']] ?? 'devicon-python-plain'; @endphp
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

            {{-- MIDDLE content --}}
            <div class="dev-hero-content">
                <div style="display:flex;flex-direction:column;align-items:center;margin-bottom:24px">
                    <div class="dev-hero-badge-row" style="align-items:flex-start">
                        <div style="display:flex;flex-direction:column;align-items:center">
                            <div class="dev-hero-robot-badge">{!! $robo() !!}</div>
                            <div class="dev-hero-divider" style="margin:12px 0 0;width:48px"></div>
                        </div>
                        <div class="dev-hero-label-pill" style="margin-top:6px">
                            <span class="dev-hero-label-dot"></span>
                            <span class="dev-hero-label-text">AI Automation</span>
                        </div>
                    </div>
                    <h1 class="dev-hero-heading" style="text-align:center;margin-top:24px;margin-bottom:0;max-width:1550px;margin-left:auto;margin-right:auto">
                        We Build AI Solutions<br>
                        That Drive<br>
                        <span class="dev-hero-accent">Real Results</span>
                    </h1>
                </div>

                <p class="dev-hero-desc">
                    From intelligent automation agents to generative content systems, our team architects AI products that grow with your business.
                </p>

                <div class="dev-hero-cta-row">
                    <a href="/contact" class="dev-hero-btn">
                        Contact Us
                        
                    </a>
                </div>
            </div>

            {{-- RIGHT tickers 3 & 4 --}}
            <div class="dev-hero-ticker-group dev-ticker-right">
                <div class="dev-v-ticker-col" style="height:520px">
                    <div class="dev-v-ticker-track dev-v-ticker-track-down" style="--spd:28s">
                        @foreach(array_merge($techCol3, $techCol3) as $t)
                            <div class="dev-tech-card">
                                <div class="dev-tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                                    @php $icon = $devicons[$t['name']] ?? 'devicon-python-plain'; @endphp
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
                                    @php $icon = $devicons[$t['name']] ?? 'devicon-python-plain'; @endphp
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
                <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                    <div class="wd-label-row" style="align-items:flex-start">
                        <div style="display:flex;flex-direction:column;align-items:center">
                            <div class="wd-robot-badge">{!! $robo() !!}</div>
                            <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                        </div>
                        <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Our Expertise</span></div>
                    </div>
                    <h2 class="wd-intro-heading" style="margin:24px 0 0">We Build AI Solutions That Drive Real Results</h2>
                    <p class="wd-intro-text">From intelligent automation agents to generative content systems, our team architects AI products that grow with your business. We combine technical excellence with strategic thinking ensuring every line of code serves your goals.</p>
                    <p class="wd-intro-text">Whether you need to automate your customer support, scale your content production, or integrate LLMs into your existing stack, we deliver with precision, speed, and long-term scalability.</p>
                    <div style="display:flex;align-items:center;gap:28px;margin-top:14px;flex-wrap:wrap">
                        <a href="/contact" class="dev-hero-btn">
                            Contact Us
                           
                        </a>
                        <div class="wd-intro-stat">
                            <strong>200+</strong>
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
                        @foreach(['Dedicated developers, designers & QA engineers','Flexible engagement — part-time or full-time','Onboard in 48 hours — no lengthy hiring cycles','Work in your timezone, your tools, your process','React, Node.js, Laravel, Flutter & more'] as $perk)
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

    {{-- ═══ AI SERVICES CARDS ═══ --}}
    <section class="ds-section">
        <div class="ds-inner">
            <div class="reveal">
                <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                    <div class="wd-label-row" style="align-items:flex-start">
                        <div style="display:flex;flex-direction:column;align-items:center">
                            <div class="wd-robot-badge">{!! $robo() !!}</div>
                            <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                        </div>
                        <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Our Solutions</span></div>
                    </div>
                    <h2 class="wd-section-heading" style="margin:24px 0 0">AI Solutions</h2>
                </div>
                <p class="wd-section-sub">We specialize in building high-end AI digital products. Every project is scalable, secure, and built to perform.</p>
            </div>

            <div class="ds-grid">
                @foreach($aiServices as $svc)
                    <div class="ds-card-v2 reveal">
                        <div class="ds-v2-icon-wrap">{!! $svc['icon'] !!}</div>
                        <h3 class="ds-v2-title">{{ $svc['title'] }}</h3>
                        <p class="ds-v2-perfect-label">Perfect for</p>
                        <p class="ds-v2-perfect-text">{{ $svc['perfectFor'] }}</p>

                        <div class="ds-v2-capabilities">
                            <p class="ds-v2-tech-label" style="color:var(--accent-theme);margin-bottom:8px">Key Capabilities</p>
                            @foreach($svc['capabilities'] as $cap)
                                <div class="ds-v2-cap-item">
                                    <span class="ds-v2-cap-dot"></span>
                                    {{ $cap }}
                                </div>
                            @endforeach
                        </div>

                        <div class="ds-v2-divider" style="margin:20px 0"></div>

                        <p class="ds-v2-tech-label">Technologies</p>
                        <div class="ds-v2-tech-pills">
                            @foreach($svc['technologies'] as $tech)
                                <span class="ds-v2-pill">{{ $tech }}</span>
                            @endforeach
                        </div>

                        <a href="{{ $svc['link'] ?? '/contact' }}" class="ds-v2-cta">
                            Learn More
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ HOW WE BUILD ═══ --}}
    <section class="wd-section" style="overflow:hidden">
        <div class="wd-inner">
            <div class="reveal">
                <div style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                    <div class="wd-label-row" style="align-items:flex-start">
                        <div style="display:flex;flex-direction:column;align-items:center">
                            <div class="wd-robot-badge">{!! $robo() !!}</div>
                            <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                        </div>
                        <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Our Methodology</span></div>
                    </div>
                    <h2 class="wd-section-heading" style="margin:24px 0 0">How We Build Scalable Solutions</h2>
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

    {{-- ═══ PRICING ═══ --}}
    <section class="pc-section">
        <div class="ds-inner">
            <div class="reveal" style="display:flex;flex-direction:column;align-items:flex-start;margin-bottom:24px">
                <div class="wd-label-row" style="align-items:flex-start">
                    <div style="display:flex;flex-direction:column;align-items:center">
                        <div class="wd-robot-badge">{!! $robo() !!}</div>
                        <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
                    </div>
                    <div class="wd-label-pill" style="margin-top:6px"><span class="wd-label-dot"></span><span class="wd-label-text">Pricing</span></div>
                </div>
                <h2 class="wd-section-heading" style="margin:24px 0 0">Simple, Transparent Pricing</h2>
                <p class="wd-section-sub" style="margin:12px 0 0">Pricing is based on the technology stack — no hidden fees, no surprises. Pick your tech and let&apos;s build.</p>
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
                            <div class="pc-ticker-wrap pc-ticker--light pw-card-ticker">
                                <div class="pw-card-ticker-track">
                                    @foreach(array_merge(...array_fill(0, 8, $plan['ticker1'])) as $tk)
                                        <span class="ds-v2-pill" style="font-size:0.64rem;padding:4px 12px;border-width:1px">{{ $tk }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="pc-ticker-block">
                            <span class="pc-ticker-label">Tools &amp; Integrations</span>
                            <div class="pc-ticker-wrap pc-ticker--light pw-card-ticker">
                                <div class="pw-card-ticker-track pw-card-ticker-track--fast">
                                    @foreach(array_merge(...array_fill(0, 8, $plan['ticker2'])) as $tk)
                                        <span class="ds-v2-pill" style="font-size:0.64rem;padding:4px 12px;border-width:1px">{{ $tk }}</span>
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
                                            <path d="M1.5 5l2.5 2.5 4.5-5" stroke="var(--accent-theme, #D81D1F)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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

    {{-- ═══ PORTFOLIO SECTION ═══ --}}
    <section class="pf-section">
        <div class="pf-home-inner">
            <div class="pf-content">
                <div class="pf-label-row">
                    <div class="pf-robot-float">{!! $robo() !!}</div>
                    <div class="pf-label-pill">
                        <span class="pf-dot-pulse"></span>
                        <span class="pf-label-text">Our Work</span>
                    </div>
                </div>
                <div class="pf-divider"></div>
                <h2 class="pf-heading">Work That<br><span>Speaks</span> Loudly</h2>
                <p class="pf-desc">From high-performance SaaS dashboards to immersive mobile experiences — every project we ship is crafted with precision, purpose, and a relentless focus on exceptional user experience.</p>
                <div class="pf-stats">
                    <div class="pf-stat"><span class="pf-stat-value">200+</span><span class="pf-stat-label">Projects</span></div>
                    <div class="pf-stat"><span class="pf-stat-value">5+</span><span class="pf-stat-label">Years</span></div>
                    <div class="pf-stat"><span class="pf-stat-value">98%</span><span class="pf-stat-label">Satisfaction</span></div>
                </div>
                <a href="/portfolio" class="pf-btn"><span>View Portfolio</span></a>
            </div>

            <div class="pf-home-collage">
                @foreach($collage as $item)
                    <a href="/portfolio" class="pf-collage-card {{ $item['cls'] }}">
                        <div class="pf-collage-img-wrap">
                            @if(str_ends_with($item['src'], '.webm'))
                                <video class="pf-collage-img" src="{{ $item['src'] }}" autoplay loop muted playsinline></video>
                            @else
                                <img class="pf-collage-img" src="{{ $item['src'] }}" alt="{{ $item['title'] }}" loading="lazy">
                            @endif
                        </div>
                        <div class="pf-collage-overlay"></div>
                        <div class="pf-collage-content">
                            <h4 class="pf-collage-title">{{ $item['title'] }}</h4>
                            <p class="pf-collage-cardesc">{{ $item['desc'] }}</p>
                            <div class="pf-collage-explore">
                                <span>Explore</span>
                                <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M1 6H11M6 1L11 6L6 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </div>
                        <div class="pf-collage-badge"></div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ REVIEWS SECTION ═══ --}}
    <section class="rev-section-bg">
        <div class="rev-inner">
            <div class="rev-header-wrap">
                <div style="max-width:700px">
                    <div class="rev-label-row">
                        <div class="rev-robot-badge">{!! $robo() !!}</div>
                        <div class="rev-label-pill">
                            <span class="rev-label-dot"></span>
                            <span class="rev-label">Testimonials</span>
                        </div>
                    </div>
                    <div class="rev-divider"></div>
                    <h2 class="rev-heading">Words from our <br><span>Happy Clients</span></h2>
                </div>
                <div class="rev-nav-group">
                    <button class="rev-nav-btn" data-rev-prev aria-label="Previous">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                    <button class="rev-nav-btn" data-rev-next aria-label="Next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </div>

            <div class="rev-track-wrap" id="revTrackWrap">
                <div class="rev-track" id="revTrack">
                    @foreach(array_merge($reviews, $reviews) as $r)
                        <div class="rev-card">
                            <div class="rev-card-img-wrap">
                                @if(str_ends_with($r['image'], '.webm'))
                                    <video class="rev-card-img" src="{{ $r['image'] }}" autoplay loop muted playsinline></video>
                                @else
                                    <img loading="lazy" decoding="async" class="rev-card-img" src="{{ $r['image'] }}" alt="{{ $r['name'] }}">
                                @endif
                                <div class="rev-card-img-grad"></div>
                            </div>
                            <div class="rev-card-body">
                                <div class="rev-stars">
                                    @for($s = 0; $s < 5; $s++){!! $starIcon !!}@endfor
                                </div>
                                <p class="rev-text">{{ $r['text'] }}</p>
                                <div class="rev-card-foot">
                                    <div class="rev-card-person">
                                        <div class="rev-avatar-circle">
                                            @if($r['avatar'])
                                                <img loading="lazy" decoding="async" src="{{ $r['avatar'] }}" alt="{{ $r['name'] }}">
                                            @else
                                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="12" fill="var(--accent-theme)" fill-opacity="0.1"/><path d="M12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" stroke="var(--accent-theme)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 19C18 16.2386 15.3137 14 12 14C8.68629 14 6 16.2386 6 19" stroke="var(--accent-theme)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
                                <div class="wd-robot-badge">{!! $robo() !!}</div>                                <div class="wd-section-divider" style="margin:12px 0 0;width:48px"></div>
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
    var root = document.querySelector('.pw-services-ai');
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
<script src="https://assets.calendly.com/assets/external/widget.js" async></script>
@endpush
