@extends('layouts.app')

@section('title', 'Professional Video Editing Services')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/web-development.css') }}">
@endpush

@section('content')
@php
    $bgWords = [
        ['text' => 'Premiere Pro',    'left' => '4%',  'top' => '8%'],
        ['text' => 'After Effects', 'left' => '38%', 'top' => '4%'],
        ['text' => 'DaVinci',   'left' => '60%', 'top' => '14%'],
        ['text' => 'Final Cut',    'left' => '78%', 'top' => '7%'],
        ['text' => 'Motion Graphics', 'left' => '8%',  'top' => '34%'],
        ['text' => 'Color Grading', 'left' => '52%', 'top' => '38%'],
        ['text' => 'Cinema 4D',    'left' => '74%', 'top' => '28%'],
        ['text' => 'Audition',   'left' => '18%', 'top' => '55%'],
        ['text' => 'Storytelling',   'left' => '44%', 'top' => '60%'],
        ['text' => 'CapCut',   'left' => '64%', 'top' => '68%'],
        ['text' => 'VFX',      'left' => '82%', 'top' => '50%'],
        ['text' => 'Logic Pro',     'left' => '28%', 'top' => '78%'],
    ];
    $row1 = ['Premiere Pro', 'After Effects', 'DaVinci Resolve', 'Final Cut Pro', 'CapCut'];
    $row2 = ['Color Grading', 'Sound Design', 'Motion Graphics', 'VFX', 'Storytelling'];
@endphp

<div class="pw-dev">

<section class="dev-hero pw-home" id="devHero">

    {{-- Ambient glow --}}
    <div class="dev-hero-glow" aria-hidden="true"></div>

    {{-- Floating background tech words --}}
    <div class="dev-hero-bgwords" aria-hidden="true">
        @foreach ($bgWords as $i => $w)
            <span class="dev-bgword" style="left:{{ $w['left'] }};top:{{ $w['top'] }};--dev-word-delay:{{ $i * 0.3 }}s;--dev-word-dur:{{ 4 + ($i * 0.7) % 4 }}s;">{{ $w['text'] }}</span>
        @endforeach
    </div>

    <div class="dev-hero-grid">

        {{-- ── LEFT: headline & copy ── --}}
        <div class="dev-hero-left">
            <div class="dev-badge">
                <span class="dev-badge-dot"></span>
                Video Editing
            </div>

            <h1 class="dev-hero-heading" style="font-size: clamp(2.5rem, 5vw, 4rem); line-height: 1.1;">
                Professional<br>
                <span class="accent">Video Editing</span><br>
                Services
            </h1>

            <p class="dev-hero-desc">
                Corammers transforms raw footage into engaging visual stories through professional video editing. From corporate videos and cinematic commercials to dynamic social media content, our creative editing helps your brand stand out and drives growth.
            </p>
        </div>

        {{-- ── CENTER: animated orb ── --}}
        <div class="dev-hero-orb-col">
            <div class="dev-orb-stage">
                <div class="dev-orb-outer-glow" aria-hidden="true"></div>
                <div class="dev-orb-ring dev-orb-ring-1" aria-hidden="true"></div>
                <div class="dev-orb-ring dev-orb-ring-2" aria-hidden="true"></div>
                <div class="dev-orb-wrap">
                    <canvas id="devOrbCanvas" class="dev-orb-canvas" width="430" height="430"></canvas>
                </div>
            </div>
        </div>

        {{-- ── RIGHT: secondary copy & CTA ── --}}
        <div class="dev-hero-right">
            <h3 class="dev-hero-right-title">Our Philosophy</h3>
            <p class="dev-hero-right-desc" style="font-style: italic;">
                "Corammers — Bringing Your Vision to Life Through Creative Video Editing."
            </p>
            <a href="/contact" class="dev-connect-btn">
                <span>Let's Connect</span>
            </a>
        </div>
    </div>

    {{-- ── Floating skill marquee (bottom-right) ── --}}
    <div class="dev-hero-marquee">
        <div class="dev-marquee-row dev-marquee-left">
            @foreach (array_merge($row1, $row1, $row1) as $tech)
                <span class="dev-pill">{{ $tech }}</span>
            @endforeach
        </div>
        <div class="dev-marquee-row dev-marquee-right">
            @foreach (array_merge($row2, $row2, $row2) as $tech)
                <span class="dev-pill">{{ $tech }}</span>
            @endforeach
        </div>
    </div>
</section>

@php
    $robo = '<img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robo-light" style="object-fit:contain;display:block"><img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robo-dark" style="object-fit:contain;display:block">';
    
    $webServices = [
        [
            'title' => 'Corporate Video Editing',
            'desc' => 'Create polished corporate videos, company presentations, interviews, training videos, and promotional content that strengthen your brand identity.',
            'technologies' => ['Corporate', 'Interviews', 'Presentations', 'Training'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>',
        ],
        [
            'title' => 'Social Media Video Editing',
            'desc' => 'Produce engaging content for Instagram, TikTok, Facebook, LinkedIn, and YouTube Shorts designed to maximize audience engagement.',
            'technologies' => ['TikTok', 'Instagram', 'Shorts', 'Reels'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
        ],
        [
            'title' => 'Commercial & Promotional Videos',
            'desc' => 'Edit marketing campaigns, advertisements, product launches, and promotional videos that capture attention and increase conversions.',
            'technologies' => ['Ads', 'Commercials', 'Promotions', 'Campaigns'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>',
        ],
        [
            'title' => 'Motion Graphics & Animation',
            'desc' => 'Enhance videos with animated titles, lower thirds, logo animations, infographics, and modern motion graphics.',
            'technologies' => ['Titles', 'Lower Thirds', 'Animations', 'Infographics'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0110 0v4"></path></svg>',
        ],
        [
            'title' => 'Color Grading & Audio Enhancement',
            'desc' => 'Deliver cinematic visuals through professional color correction while improving audio quality with sound design, music, and voice enhancement.',
            'technologies' => ['Color Correction', 'Sound Design', 'Voice Enhancement', 'Music'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>',
        ],
        [
            'title' => 'YouTube & Podcast Editing',
            'desc' => 'Create engaging YouTube videos and podcast episodes with smooth transitions, subtitles, branding, and optimized storytelling.',
            'technologies' => ['YouTube', 'Podcasts', 'Subtitles', 'Transitions'],
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',
        ],
    ];

    $clientLogos = [
        ['name' => 'Apple', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'],
        ['name' => 'Google', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg'],
        ['name' => 'Microsoft', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg'],
        ['name' => 'Amazon', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
        ['name' => 'Meta', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg'],
    ];
@endphp

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
                <h2 class="wd-section-heading" style="margin:0">Video Editing Services</h2>
            </div>
            <p class="wd-section-sub">From engaging social media reels to cinematic corporate films, our professional editing services transform your raw footage into compelling stories that drive measurable business impact.</p>
        </div>

        <div class="ds-grid">
            @foreach($webServices as $svc)
            <div class="ds-card-v2 reveal">
                <div class="ds-v2-icon-wrap">{!! $svc['icon'] !!}</div>
                <h3 class="ds-v2-title">{{ $svc['title'] }}</h3>
                <p class="ds-v2-desc">{{ $svc['desc'] }}</p>
                <div class="ds-v2-divider"></div>
                <p class="ds-v2-tech-label">SPECIALIZES IN</p>
                <div class="ds-v2-tech-pills">
                    @foreach($svc['technologies'] as $tech)
                    <span class="ds-v2-pill">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

   
   {{-- ══════════════ WHY CHOOSE CORAMMERS ══════════════ --}}
<section class="wc-section reveal">
    <div class="wc-inner">
        <div class="wc-grid">

            {{-- ── LEFT: Content ── --}}
            <div class="wc-content">
                <div class="wc-label-block">
                    <div class="wd-label-row">
                        <div class="wd-robot-badge">{!! $robo !!}</div>
                        <div class="wd-label-pill">
                            <span class="wd-label-dot"></span>
                            <span class="wd-label-text">Why Choose Us</span>
                        </div>
                    </div>
                    <div class="wd-section-divider"></div>
                </div>
                <h2 class="wc-heading">Why Choose Corammers for<br><span class="wc-accent">Video Editing</span></h2>
                <p class="wc-para">We focus on creative storytelling, cinematic quality, and fast turnarounds to deliver exceptional video content. Our expertise in motion graphics, color grading, and precise audio editing ensures your videos perform perfectly across every platform.</p>
                <p class="wc-tagline">Corammers — Bringing Your Vision to Life Through Creative Video Editing.</p>
                <a href="/contact" class="wc-cta-btn">Let's Edit Your Video</a>
            </div>

            {{-- ── RIGHT: Image + Play Button ── --}}
            <div class="wc-media">
                <div class="wc-img-wrap">
                    <img loading="lazy" decoding="async" src="/assets/team3.webp" alt="Why Choose Corammers" class="wc-img">
                    <div class="wc-img-overlay"></div>
                    <a href="https://www.youtube.com/@MediaCorammers" target="_blank" rel="noopener noreferrer" class="wc-play-btn" aria-label="Watch Corammers on YouTube">
                        <span class="wc-play-ring wc-play-ring-1"></span>
                        <span class="wc-play-ring wc-play-ring-2"></span>
                        <span class="wc-play-ring wc-play-ring-3"></span>
                        <span class="wc-play-core">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
                        </span>
                        <span class="wc-play-label">Watch Us</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- ══════════════ CLIENT LOGOS ══════════════ --}}
    <section class="logos-section reveal">
      <div class="section-inner">
        <p class="logos-label">Trusted by <span class="logos-accent">Industry Leaders</span></p>
        <div class="logos-slider-wrap">
          <div class="logos-track">
            @foreach(array_merge($clientLogos, $clientLogos, $clientLogos) as $logo)
              <div class="logo-item">
                <img loading="lazy" decoding="async" src="{{ $logo['url'] }}" alt="{{ $logo['name'] }}">
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    {{-- ══════════════ PORTFOLIO / FEATURED WORK ══════════════ --}}
    <section class="port-section reveal">
        <div class="port-inner">
            <div class="port-grid">

                {{-- ── RIGHT: Content (Now as a black card) ── --}}
                <div class="port-content">
                    <div class="port-content-card">
                        <h2 class="port-heading">Videos That Inspire,<br><span class="port-accent">Engage & Convert</span></h2>
                        <p class="port-para">Showcase Corammers' portfolio of promotional videos, corporate films, YouTube content, product videos, event highlights, commercials, podcasts, social media campaigns, motion graphics, and brand storytelling projects. Emphasize creativity, professional editing, and measurable business impact.</p>
                        <a href="/portfolio" class="port-cta-btn">View All Projects</a>
                    </div>
                </div>

                {{-- ── RIGHT: Portfolio Showcase ── --}}
                <div class="port-showcase">
                    @php
                        $collage = [
                            ['src' => '/assets/project/web/4.webp', 'title' => 'Legal Firm', 'desc' => 'Next-gen architectural excellence', 'style' => 'grid-column:1/2;grid-row:1/3;height:420px;', 'class' => 'pf-collage-card-tall'],
                            ['src' => '/assets/project/custom/4.webm', 'title' => 'CPA', 'desc' => 'Seamless mortgage application platform', 'style' => 'grid-column:2/3;grid-row:1/2;height:200px;', 'class' => ''],
                            ['src' => '/assets/project/mobile/5.webm', 'title' => ' Lax', 'desc' => 'Interactive AI interface', 'style' => 'grid-column:3/4;grid-row:1/2;height:200px;', 'class' => ''],
                            ['src' => '/assets/project/aiSol/2.webm', 'title' => 'n8n', 'desc' => 'AI', 'style' => 'grid-column:2/3;grid-row:2/3;height:210px;', 'class' => ''],
                            ['src' => '/assets/project/uiux/8.webm', 'title' => 'Logo', 'desc' => 'Creative', 'style' => 'grid-column:3/4;grid-row:2/3;height:210px;', 'class' => ''],
                        ];
                    @endphp
                    <div class="port-collage-grid">
                        @foreach($collage as $item)
                        <div class="port-col-card {{ $item['class'] }}" style="{{ $item['style'] }}">
                            @if(Str::endsWith($item['src'], '.webm') || Str::endsWith($item['src'], '.mp4'))
                                <video class="port-col-media" src="{{ $item['src'] }}" autoplay loop muted playsinline></video>
                            @else
                                <img class="port-col-media" src="{{ $item['src'] }}" alt="{{ $item['title'] }}" loading="lazy" decoding="async">
                            @endif
                            <div class="port-col-overlay">
                                <div class="port-col-content">
                                    <h4 class="port-col-title">{{ $item['title'] }}</h4>
                                    <p class="port-col-desc">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

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
            ['name' => 'Nadia Petrov', 'role' => 'Creative Director, PixelMind', 'text' => 'the ai design visuals they created blew us away every concept was unique and on brand felt like they really understood our aesthetic from the very first call', 'image' => '/assets/project/aiDes/ai3.webm', 'avatar' => null],
        ];
        $star = '<svg width="18" height="18" viewBox="0 0 16 16" fill="#ffb33e" style="flex-shrink:0"><path d="M8 1.5L9.7 6H14.3L10.6 8.9L12 13.4L8 10.8L4 13.4L5.4 8.9L1.7 6H6.3L8 1.5Z" stroke="#ffb33e" stroke-width="1.2" stroke-linejoin="round"/></svg>';
    @endphp
    <section class="rev-section-bg">
        <div class="rev-inner">
            <div class="rev-header-wrap">
                <div style="max-width:700px">
                    <div class="wd-label-row">
                        <div class="wd-robot-badge">{!! $robo !!}</div>
                        <div class="wd-label-pill">
                            <span class="wd-label-dot"></span>
                            <span class="wd-label-text">Testimonials</span>
                        </div>
                    </div>
                    <div class="section-divider"></div>
                    <h2 class="rev-heading">Words from our <br><span class="accent">Happy Clients</span></h2>
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
                            ['q' => 'What types of videos do you edit?', 'a' => 'We edit a wide variety of videos including corporate videos, commercials, promotional content, YouTube videos, social media reels, podcasts, event highlights, and product showcases.'],
                            ['q' => 'Do you edit YouTube videos?', 'a' => 'Yes, we provide full-service YouTube editing, adding engaging transitions, motion graphics, subtitles, and optimal pacing to retain viewer attention.'],
                            ['q' => 'Can you create social media reels?', 'a' => 'Absolutely. We specialize in producing dynamic, short-form content optimized for platforms like Instagram, TikTok, and YouTube Shorts to maximize audience engagement.'],
                            ['q' => 'Do you provide motion graphics?', 'a' => 'Yes, our team can enhance your videos with custom animated titles, lower thirds, logo animations, and infographics to make your content stand out.'],
                            ['q' => 'Can you add subtitles and captions?', 'a' => 'We definitely can. Adding accurate subtitles and captions is crucial for accessibility and social media viewing, and we include them upon request.'],
                            ['q' => 'Do you perform color grading?', 'a' => 'Yes, we provide professional color correction and cinematic color grading to ensure your footage looks stunning and aligns with your brand identity.'],
                            ['q' => 'Can you improve poor audio quality?', 'a' => 'We utilize advanced audio enhancement tools to clean up background noise, balance levels, and add sound design and music to improve overall audio quality.'],
                            ['q' => 'How long does video editing take?', 'a' => 'Turnaround times depend on the complexity and length of the project. Short social media reels can take 1-3 days, while longer corporate or commercial edits may take 1-2 weeks.'],
                            ['q' => 'Which file formats do you deliver?', 'a' => 'We typically deliver high-quality MP4 or MOV files, optimized for web, social media, or broadcast, depending on your specific requirements.'],
                            ['q' => 'Do you offer revisions?', 'a' => 'Yes, we include a set number of revision rounds in our projects to ensure the final video perfectly matches your vision and requirements.'],
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
        {{-- ══════════ booking══════════ --}}
        <section class="lf-section" id="book-consultation">
    <div class="lf-container">
        <h2 class="lf-heading">Ready to Transform Your Videos Into <span class="accent">Powerful Marketing Assets?</span></h2>
        <p class="lf-subtitle">Whether you need promotional videos, corporate content, YouTube editing, commercials, social media reels, podcasts, or cinematic storytelling, Corammers delivers professional video editing solutions that help your brand capture attention, engage audiences, and grow your business through compelling visual content.</p>

        <div class="lf-book-grid">
            {{-- Left column --}}
            <div class="lf-book-left">
                <div class="lf-why-card">
                    <h3 class="lf-left-heading">Why Book With Us?</h3>
                    <p class="lf-left-desc">
                        We help businesses transform raw footage into high-performing video assets that build trust, capture attention, and generate qualified leads.
                    </p>

                    <ul class="lf-why-list">
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="4" ry="4" stroke="currentColor"></rect>
                                <polyline points="9 12 11 14 15 10" stroke="currentColor"></polyline>
                            </svg>
                            Evaluate your current online presence
                        </li>
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="4" ry="4" stroke="currentColor"></rect>
                                <polyline points="9 12 11 14 15 10" stroke="currentColor"></polyline>
                            </svg>
                            Identify missed growth opportunities
                        </li>
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="4" ry="4" stroke="currentColor"></rect>
                                <polyline points="9 12 11 14 15 10" stroke="currentColor"></polyline>
                            </svg>
                            Build a tailored growth strategy
                        </li>
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="4" ry="4" stroke="currentColor"></rect>
                                <polyline points="9 12 11 14 15 10" stroke="currentColor"></polyline>
                            </svg>
                            Turn more visitors into clients
                        </li>
                    </ul>
                </div>

                <div class="lf-mini-grid">
                    <div class="lf-mini-card">
                        <div class="lf-mini-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <span>30 Min Call</span>
                    </div>
                    <div class="lf-mini-card">
                        <div class="lf-mini-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                        </div>
                        <span>Via Zoom</span>
                    </div>
                    <div class="lf-mini-card">
                        <div class="lf-mini-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                        </div>
                        <span>Custom Strategy</span>
                    </div>
                    <div class="lf-mini-card">
                        <div class="lf-mini-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3 7h7l-5.5 4.5L18.5 21 12 16.5 5.5 21 7.5 13.5 2 9h7z"></path></svg>
                        </div>
                        <span>No Obligation</span>
                    </div>
                </div>
            </div>

            {{-- Right column — Calendly widget in white card --}}
            <div class="lf-book-right">
                <div class="lf-white-card">
                    <div class="dev-staff-card bc-widget-col" style="padding:10px;cursor:default">
                        <!-- Calendly inline widget begin -->
                        <div class="calendly-inline-widget" data-url="https://calendly.com/mshayantariq/schedule-a-meeting?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:280px;height:550px;width:100%"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                        <!-- Calendly inline widget end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
(function () {
    var canvas = document.getElementById('devOrbCanvas');
    if (!canvas || !canvas.getContext) return;
    var ctx = canvas.getContext('2d');
    var W = canvas.width, H = canvas.height;
    var cx = W / 2, cy = H / 2, r = W / 2 - 2;
    var LAYERS = 140; // trimmed a bit vs. the React version for perf on a Blade page
    var t = 0, raf = null;

    function accentRGB() {
        // Reads the live --accent CSS var so the orb matches the current theme accent.
        var v = getComputedStyle(document.querySelector('.dev-hero') || document.body)
            .getPropertyValue('--accent').trim() || '#D81D1F';
        var m = v.match(/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i);
        if (!m) return { r: 216, g: 29, b: 31 };
        return { r: parseInt(m[1], 16), g: parseInt(m[2], 16), b: parseInt(m[3], 16) };
    }

    function draw() {
        var acc = accentRGB();
        ctx.clearRect(0, 0, W, H);

        var baseBg = ctx.createRadialGradient(cx - r * 0.3, cy - r * 0.3, r * 0.05, cx, cy, r);
        baseBg.addColorStop(0, 'rgba(' + acc.r + ',' + acc.g + ',' + acc.b + ',0.22)');
        baseBg.addColorStop(0.4, 'rgba(20,8,8,1)');
        baseBg.addColorStop(1, 'rgba(4,2,2,1)');
        ctx.beginPath();
        ctx.arc(cx, cy, r, 0, Math.PI * 2);
        ctx.fillStyle = baseBg;
        ctx.fill();

        ctx.save();
        ctx.beginPath();
        ctx.arc(cx, cy, r, 0, Math.PI * 2);
        ctx.clip();

        for (var i = 0; i < LAYERS; i++) {
            var pct = i / LAYERS;
            var noise = Math.sin(pct * 12 + t * 0.8) * 0.12 + Math.sin(pct * 7 + t * 0.5) * 0.08;
            var yPos = cy - r + 2 * r * pct + noise * r * 0.4;
            var halfW = Math.sqrt(Math.max(0, r * r - (yPos - cy) * (yPos - cy)));
            var wave = Math.sin(pct * 18 + t * 1.1 + i * 0.05) * halfW * 0.15;
            var alpha = 0.55 + Math.sin(pct * 14 + t * 0.8) * 0.2;
            var lum1 = 40 + Math.sin(pct * 8 + t * 0.7) * 20;
            var lum2 = 68 + Math.sin(pct * 11 + t * 0.9) * 16;

            var grad = ctx.createLinearGradient(cx - halfW + wave, yPos, cx + halfW + wave, yPos);
            grad.addColorStop(0, 'rgba(' + acc.r + ',' + acc.g + ',' + acc.b + ',0)');
            grad.addColorStop(0.25, 'rgba(' + acc.r + ',' + acc.g + ',' + acc.b + ',' + alpha + ')');
            grad.addColorStop(0.5, 'hsla(28,80%,' + lum2 + '%,' + (alpha * 0.75) + ')');
            grad.addColorStop(0.75, 'rgba(' + acc.r + ',' + acc.g + ',' + acc.b + ',' + alpha + ')');
            grad.addColorStop(1, 'rgba(' + acc.r + ',' + acc.g + ',' + acc.b + ',0)');

            ctx.beginPath();
            ctx.moveTo(cx - halfW + wave, yPos);
            ctx.lineTo(cx + halfW + wave, yPos);
            ctx.lineWidth = 2.5 + Math.sin(pct * 9 + t) * 1.5;
            ctx.strokeStyle = grad;
            ctx.stroke();
        }

        var spec = ctx.createRadialGradient(cx - r * 0.28, cy - r * 0.32, 2, cx - r * 0.28, cy - r * 0.32, r * 0.32);
        spec.addColorStop(0, 'rgba(255,240,220,0.3)');
        spec.addColorStop(1, 'rgba(255,240,220,0)');
        ctx.beginPath();
        ctx.arc(cx, cy, r, 0, Math.PI * 2);
        ctx.fillStyle = spec;
        ctx.fill();

        var sh = ctx.createRadialGradient(cx + r * 0.3, cy + r * 0.35, r * 0.05, cx + r * 0.3, cy + r * 0.35, r * 0.65);
        sh.addColorStop(0, 'rgba(0,0,0,0.65)');
        sh.addColorStop(1, 'rgba(0,0,0,0)');
        ctx.beginPath();
        ctx.arc(cx, cy, r, 0, Math.PI * 2);
        ctx.fillStyle = sh;
        ctx.fill();

        ctx.restore();
        t += 0.012;
        raf = requestAnimationFrame(draw);
    }

    // Pause when off-screen to save cycles
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                if (!raf) raf = requestAnimationFrame(draw);
            } else if (raf) {
                cancelAnimationFrame(raf);
                raf = null;
            }
        });
    }, { threshold: 0.05 });
    io.observe(canvas);
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
        (document.querySelector('.pw-dev') || document).querySelectorAll('.rev-nav-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var dir = parseInt(btn.getAttribute('data-rev-dir'), 10);
                manualVelocity += dir * 45; // inject velocity (45px/frame initially)
            });
        });

        var rt;
        window.addEventListener('resize', function () { clearTimeout(rt); rt = setTimeout(setup, 200); });
    }


    // FAQ accordion
    (document.querySelector('.pw-dev') || document).querySelectorAll('.faq-item').forEach(function (item) {
        var trigger = item.querySelector('.faq-trigger');
        var icon = item.querySelector('.faq-icon');
        if(trigger) {
            trigger.addEventListener('click', function () {
                var open = item.classList.toggle('faq-open');
                trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
                if (icon) icon.textContent = open ? '−' : '+';
            });
        }
    });

})();
</script>
@endpush
</div>
@endsection