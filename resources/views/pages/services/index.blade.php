@extends('layouts.app')

@section('title', 'Services — Corammers')
@section('meta_description', 'Explore Corammers services: web and mobile development, UI/UX design, AI solutions and digital marketing engineered for growth.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/services.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
@endpush

@php
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

    /* ─── Vertical hero ticker columns ─── */
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

    /* $techGlyph is no longer used for hero cards — kept only as a safe fallback icon */
    $techGlyph = '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>';
    /* ─── Build steps (process section) ─── */
    $buildSteps = [
        ['num' => '01', 'title' => 'Strategy & Discovery', 'desc' => 'We research your market, audience, and competitors to build a custom marketing blueprint.', 'tag' => 'Strategy',
         'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>'],
        ['num' => '02', 'title' => 'Creative & Content', 'desc' => 'Our team crafts high-converting visuals and copy tailored to your brand voice.', 'tag' => 'Creative',
         'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>'],
        ['num' => '03', 'title' => 'Launch & Execution', 'desc' => 'Campaigns go live across all selected channels with precision targeting and tracking.', 'tag' => 'Execution',
         'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>'],
        ['num' => '04', 'title' => 'Analysis & Optimization', 'desc' => 'Continuous monitoring and data-driven adjustments to ensure maximum ROI.', 'tag' => 'Growth',
         'icon' => '<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"></path></svg>'],
    ];

    /* ─── Services stack panels ─── */
    $services = [
        ['num' => '01.', 'title' => 'AI Solutions', 'href' => '/services/ai',
         'desc' => 'Harness the power of large language models, diffusion networks, and custom AI pipelines. We integrate intelligent automation into your workflow enhancing creativity, not replacing it.',
         'bg' => 'linear-gradient(135deg,#100808 0%,#200c0c 35%,#2e1010 60%,#180808 100%)', 'glow' => 'rgba(255,90,60,0.12)'],
        ['num' => '02.', 'title' => 'Designing', 'href' => '/services/design',
         'desc' => 'From brand identity to pixel-perfect UI, we craft visual experiences that resonate. Our design language blends restraint with boldness clean grids, expressive type, and purposeful motion.',
         'bg' => 'linear-gradient(135deg,#0c0516 0%,#1a0630 35%,#210840 60%,#100320 100%)', 'glow' => 'rgba(180,100,255,0.12)'],
        ['num' => '03.', 'title' => 'Marketing', 'href' => '/services/marketing',
         'desc' => 'Data-driven strategies that convert. We build full-funnel campaigns across organic and paid channels, turning audience insights into measurable growth that compounds over time.',
         'bg' => 'linear-gradient(135deg,#061208 0%,#0c2010 35%,#122814 60%,#071209 100%)', 'glow' => 'rgba(100,220,80,0.12)'],
        ['num' => '04.', 'title' => 'Development', 'href' => '/services/development',
         'desc' => 'We engineer scalable, high-performance digital products from blazing-fast web apps to complex back-end architectures. Every line of code is written with purpose, precision, and longevity in mind.',
         'bg' => 'linear-gradient(135deg,#060d14 0%,#0b1929 35%,#0d2035 60%,#071018 100%)', 'glow' => 'rgba(0,200,255,0.12)'],
        ['num' => '05.', 'title' => 'Staff Augmentation', 'href' => '/staff',
         'desc' => 'Scale your team instantly with pre-vetted, senior-level talent. We embed dedicated specialists  developers, designers, and strategists directly into your workflow, giving you the agility to move fast without the overhead of full-time hiring.',
         'bg' => 'linear-gradient(135deg,#080e14 0%,#0d1a22 35%,#122130 60%,#090f16 100%)', 'glow' => 'rgba(255,0,111,0.1)'],
    ];

    /* ─── Tech stack ticker ─── */
    $techStack = ['React','Next.js','Node.js','Express.js','Laravel','Vue.js','TypeScript','JavaScript','PHP','Python','HTML5','CSS','TailwindCSS','MongoDB','MySQL','Firebase','Docker','Git','GitHub','Vercel','GraphQL','Figma'];
    $ttGlyph = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>';

    /* ─── Staff augmentation image grid ─── */
    $saImages = [
        ['src' => '/assets/team1.webp', 'alt' => 'Team collaboration'],
        ['src' => '/assets/team2.webp', 'alt' => 'Developer at work'],
        ['src' => '/assets/team3.webp', 'alt' => 'Professional meeting'],
        ['src' => '/assets/team4.webp', 'alt' => 'Remote developer'],
        ['src' => '/assets/team5.webp', 'alt' => 'Office team'],
    ];

    /* ─── FAQ ─── */
    $faqs = [
        ['q' => 'What technologies do you use to build modern web applications?', 'a' => 'We primarily work with Next.js, React, and Tailwind CSS for front-end development. On the backend we leverage Node.js, PostgreSQL, and cloud infrastructure on AWS and Vercel ensuring scalable, maintainable, and performant solutions for every project.'],
        ['q' => 'How long does a typical project take from kickoff to launch?', 'a' => 'Project timelines vary based on scope and complexity. A focused landing page or blog can ship in 1–2 weeks, while a full-featured SaaS product typically spans 8–16 weeks. We share a detailed roadmap during our discovery phase so you always know what to expect.'],
        ['q' => 'Do you offer post-launch support and maintenance?', 'a' => 'Absolutely. We offer flexible retainer packages covering bug fixes, performance monitoring, feature iterations, and security updates. Our goal is to be a long-term partner, not just a delivery team.'],
        ['q' => 'Can you work with an existing codebase or design system?', 'a' => 'Yes we regularly integrate with existing codebases, component libraries, and design systems. We conduct a thorough audit before committing to a scope so there are no surprises mid-project.'],
        ['q' => 'How do we get started working together?', 'a' => "Simply fill out the contact form on this page or email us directly at info@corammers.com We'll schedule a free 30-minute discovery call to understand your goals and outline the best path forward."],
    ];

    /* ─── Client logos ─── */
        $clientLogos = [
        ['name' => 'Client 1', 'url' => '/assets/client/client1.webp'],
        ['name' => 'Client 2', 'url' => '/assets/client/client2.webp'],
        ['name' => 'Client 3', 'url' => '/assets/client/client3.webp'],
        ['name' => 'Client 4', 'url' => '/assets/client/client4.webp'],
        ['name' => 'Client 5', 'url' => '/assets/client/client5.webp'],
        ['name' => 'Client 6', 'url' => '/assets/client/client6.webp'],
        ['name' => 'Client 7', 'url' => '/assets/client/client7.webp'],
        ['name' => 'Client 8', 'url' => '/assets/client/client8.webp'],
        ['name' => 'Client 9', 'url' => '/assets/client/client9.webp'],
        ['name' => 'Client 10', 'url' => '/assets/client/client10.webp'],
    ];

    /* robot badge: light/dark handled via CSS classes below */
@endphp

@section('content')
<div class="pw-services">
  <main class="services-main">

    {{-- ══════════════ HERO ══════════════ --}}
    <section class="hero-section">
      <div class="hero-inner">

        {{-- LEFT tickers 1 & 2 --}}
        <div class="hero-ticker-group left ticker-left">
          <div class="v-ticker-col" style="height:520px">
            <div class="v-ticker-track v-ticker-track-up" style="--spd:22s">
              @foreach(array_merge($techCol1, $techCol1) as $t)
                <div class="tech-card">
                  <div class="tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                    <i class="{{ $devicons[$t['name']] ?? 'devicon-code-plain' }}"></i>
                  </div>
                  <div class="tech-card-info">
                    <span class="tech-card-name">{{ $t['name'] }}</span>
                    <span class="tech-card-abbr">{{ $t['abbr'] }}</span>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <div class="v-ticker-col" style="height:520px">
            <div class="v-ticker-track v-ticker-track-down" style="--spd:26s">
              @foreach(array_merge($techCol2, $techCol2) as $t)
                <div class="tech-card">
                  <div class="tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                    <i class="{{ $devicons[$t['name']] ?? 'devicon-code-plain' }}"></i>
                  </div>
                  <div class="tech-card-info">
                    <span class="tech-card-name">{{ $t['name'] }}</span>
                    <span class="tech-card-abbr">{{ $t['abbr'] }}</span>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>

        {{-- MIDDLE content --}}
        <div class="hero-content">
          <div style="display:flex;flex-direction:column;align-items:center;margin-bottom:24px">
            <div class="process-label-row" style="align-items:flex-start">
              <div style="display:flex;flex-direction:column;align-items:center">
                <div class="process-robot-badge">
                  <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                  <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:block">
                </div>
                <div class="process-divider" style="margin:12px 0 0;width:48px"></div>
              </div>
              <div class="process-label-pill" style="margin-top:6px">
                <span class="process-label-dot"></span>
                <span class="process-label-text">Our Services</span>
              </div>
            </div>
            <h1 class="hero-heading" style="text-align:center;margin-top:24px;margin-bottom:0">
              Our<br>
              <span class="accent">Services</span>
            </h1>
          </div>

          <p class="hero-desc">
            From data-driven social strategies to high-converting campaign we craft scalable, high-performance marketing machines that drive real ROI.
          </p>

          <div class="hero-cta-row">
            <a href="/contact" class="btn-primary">Contact Us</a>
          </div>
        </div>

        {{-- RIGHT tickers 3 & 4 --}}
        <div class="hero-ticker-group right ticker-right">
          <div class="v-ticker-col" style="height:520px">
            <div class="v-ticker-track v-ticker-track-down" style="--spd:28s">
              @foreach(array_merge($techCol3, $techCol3) as $t)
                <div class="tech-card">
                  <div class="tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                    <i class="{{ $devicons[$t['name']] ?? 'devicon-code-plain' }}"></i>
                  </div>
                  <div class="tech-card-info">
                    <span class="tech-card-name">{{ $t['name'] }}</span>
                    <span class="tech-card-abbr">{{ $t['abbr'] }}</span>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <div class="v-ticker-col" style="height:520px">
            <div class="v-ticker-track v-ticker-track-up" style="--spd:34s">
              @foreach(array_merge($techCol4, $techCol4) as $t)
                <div class="tech-card">
                  <div class="tech-icon-wrap" style="background:{{ $t['bg'] }};color:{{ $t['color'] }}">
                    <i class="{{ $devicons[$t['name']] ?? 'devicon-code-plain' }}"></i>
                  </div>
                  <div class="tech-card-info">
                    <span class="tech-card-name">{{ $t['name'] }}</span>
                    <span class="tech-card-abbr">{{ $t['abbr'] }}</span>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>

      </div>
    </section>

    {{-- ══════════════ SERVICES STACK (Service.js) ══════════════ --}}
    <section class="svc-section">
      <div class="svc-container">
        <div class="svc-header">
          <div class="svc-label-row">
            <div class="svc-robot-badge">
              <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
              <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:block">
            </div>
            <div class="svc-label-pill">
              <span class="svc-label-dot"></span>
              <span class="svc-label-text">What We Do</span>
            </div>
          </div>
          <div class="svc-divider"></div>
          <h2 class="svc-heading">Our <span>Services</span></h2>
          <p class="svc-sub">We build, design, grow, and automate combining craft with technology to deliver digital experiences that captivate audiences and drive measurable results for ambitious brands.</p>
        </div>

        <div class="svc-track" style="--panel-count:{{ count($services) }};">
          <div class="svc-sticky">
            @foreach($services as $i => $svc)
              <div class="svc-panel" style="--i:{{ $i }};">
                <div class="svc-panel-bg" style="background:{{ $svc['bg'] }}"></div>
                <div class="svc-panel-glow" style="background:radial-gradient(ellipse at 72% 50%,{{ $svc['glow'] }} 0%,transparent 62%)"></div>
                <div class="svc-panel-img-wrap">
                  <img loading="lazy" decoding="async" src="/assets/service/{{ $i + 1 }}.webp" alt="{{ $svc['title'] }}">
                </div>
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
              @foreach($services as $i => $svc)
                <span class="svc-progress-dot{{ $i === 0 ? ' is-active' : '' }}"></span>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- ══════════════ HOW WE BUILD (process) ══════════════ --}}
    <section class="process-section">
      <div class="section-inner">
        <div class="section-header reveal" style="display:flex;flex-direction:column;align-items:center">
          <div style="display:flex;flex-direction:column;align-items:center;margin-bottom:24px">
            <div class="process-label-row" style="align-items:flex-start">
              <div style="display:flex;flex-direction:column;align-items:center">
                <div class="process-robot-badge">
                  <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                  <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:block">
                </div>
                <div class="process-divider" style="margin:12px 0 0;width:48px"></div>
              </div>
              <div class="process-label-pill" style="margin-top:6px">
                <span class="process-label-dot"></span>
                <span class="process-label-text">Our Methodology</span>
              </div>
            </div>
            <h2 class="process-heading" style="text-align:center;margin-top:24px;margin-bottom:0">How We Build Scalable Solutions</h2>
          </div>
          <p class="process-sub" style="text-align:center;margin:0 auto">A proven, structured process from initial discovery to flawless deployment, every phase is intentional and precise.</p>
        </div>

        <div class="hwb-flow reveal">
          <div class="hwb-connector">
            <div class="hwb-connector-fill"></div>
          </div>
          @foreach($buildSteps as $i => $s)
            <div class="hwb-step reveal" style="transition-delay:{{ $i * 0.14 }}s">
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

    

    {{-- ══════════════ STAFF AUGMENTATION ══════════════ --}}
    <section class="sa-section">
      <div class="sa-inner">
        <div class="sa-left">
          <div class="sa-label-row">
            <div class="sa-robot-badge">
              <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
              <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:block">
            </div>
            <div class="sa-label-pill">
              <span class="sa-label-dot"></span>
              <span class="sa-label">Staff Augmentation</span>
            </div>
          </div>

          <h2 class="sa-heading">Scale Your Team with <mark>Pre-Vetted</mark> Developers</h2>

          <p class="sa-desc">Quickly extend your team with skilled developers tailored to your needs. Our staff augmentation services help you scale efficiently without the overhead, delays, or risks of traditional hiring.</p>

          <div class="sa-features">
            <span class="sa-feature-pill">
              <span class="sa-feature-pill-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg></span>
              Hire Remote Developers
            </span>
            <span class="sa-feature-pill">
              <span class="sa-feature-pill-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg></span>
              Flexible Scaling
            </span>
            <span class="sa-feature-pill">
              <span class="sa-feature-pill-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4"></path><path d="M4 6v12c0 1.1.9 2 2 2h14v-4"></path><path d="M18 12a2 2 0 0 0-2 2c0 1.1.9 2 2 2h4v-4h-4z"></path></svg></span>
              Save Time & Cost
            </span>
            <span class="sa-feature-pill">
              <span class="sa-feature-pill-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span>
              Seamless Team Integration
            </span>
          </div>

          <div class="sa-trust">
            <div class="sa-stars">
              @for($i = 0; $i < 5; $i++)
                <svg width="16" height="16" viewBox="0 0 24 24" fill="var(--sa-accent)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
              @endfor
            </div>
            <div class="sa-trust-divider"></div>
            <span class="sa-trust-text"><strong>Excellent</strong> · 200+ projects delivered</span>
            <div class="sa-trust-divider"></div>
            <span class="sa-trust-text" style="font-size:12px;opacity:0.75">Trustindex</span>
          </div>

          <div class="sa-cta-row">
            <a href="/contact" class="sa-btn">Book a Discovery Call</a>
          </div>
        </div>

        <div class="sa-grid">
          <div class="sa-grid-row">
            @foreach(array_slice($saImages, 0, 3) as $img)
              <div class="sa-img-wrap"><img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" loading="lazy"></div>
            @endforeach
          </div>
          <div class="sa-grid-row">
            @foreach(array_slice($saImages, 3, 2) as $img)
              <div class="sa-img-wrap"><img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" loading="lazy"></div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    {{-- ══════════════ FAQ ══════════════ --}}
    <section class="faq-section-bg">
      <div class="faq-inner">
        <div class="reveal">
          <div style="display:flex;align-items:flex-start;gap:10px;margin-bottom:14px">
            <div style="display:flex;flex-direction:column;align-items:center">
              <div class="faq-header-robot">
                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-light" style="width:32px;height:32px;object-fit:contain;display:block">
                <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-dark" style="width:32px;height:32px;object-fit:contain;display:block">
              </div>
              <div class="faq-header-divider"></div>
            </div>
            <div class="faq-header-pill">
              <span class="faq-header-dot"></span>
              <span class="faq-header-label">HAVE QUESTIONS?</span>
            </div>
          </div>
          <h2 class="faq-title">Frequently Asked <br><span>Questions</span></h2>
        </div>

        <div class="faq-list">
          @foreach($faqs as $item)
            <div class="faq-item">
              <button class="faq-trigger" type="button" aria-expanded="false">
                <span class="faq-q">{{ $item['q'] }}</span>
                <div class="faq-icon-wrap"><span class="faq-icon"></span></div>
              </button>
              <div class="faq-body">
                <div class="faq-body-inner">
                  <p>{{ $item['a'] }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
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
    {{-- ══════════════ CONTACT BANNER ══════════════ --}}
    <section class="cb-section">
      <div class="cb-container">
        <div class="cb-box reveal">
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
            <a href="/contact" class="cb-btn-primary">
              Get in Touch
            </a>
            <a href="/portfolio" class="cb-btn-secondary">View Portfolio</a>
          </div>

          <p class="cb-micro">Expert Guidance · Scalable Solutions · Global Delivery</p>
        </div>
      </div>
    </section>

  </main>
</div>
@endsection

@push('scripts')
<script>
(function () {
  var root = document.querySelector('.pw-services');
  if (!root) return;

  /* ── Robot icon: show correct variant for current theme ── */
  function syncRobots() {
    var dark = document.documentElement.getAttribute('data-theme') === 'dark';
    root.querySelectorAll('.robot-light').forEach(function (el) { el.style.display = dark ? 'none' : 'block'; });
    root.querySelectorAll('.robot-dark').forEach(function (el) { el.style.display = dark ? 'block' : 'none'; });
  }
  syncRobots();
  new MutationObserver(syncRobots).observe(document.documentElement, { attributes: true, attributeFilter: ['data-theme'] });

  /* ── Scroll reveal ── */
  root.classList.add('js-reveal');
  var revealEls = root.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); } });
    }, { threshold: 0.12 });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('visible'); });
  }

  /* ── HWB connector fill on scroll into view ── */
  var flow = root.querySelector('.hwb-flow');
  if (flow) {
    var fill = flow.querySelector('.hwb-connector-fill');
    if (fill && 'IntersectionObserver' in window) {
      var fo = new IntersectionObserver(function (entries) {
        if (entries[0].isIntersecting) { fill.classList.add('hwb-connector-filled'); fo.disconnect(); }
      }, { threshold: 0.3 });
      fo.observe(flow);
    } else if (fill) {
      fill.classList.add('hwb-connector-filled');
    }
  }

  /* ── FAQ accordion ── */
  root.querySelectorAll('.faq-item').forEach(function (item) {
    var trigger = item.querySelector('.faq-trigger');
    var body = item.querySelector('.faq-body');
    var inner = item.querySelector('.faq-body-inner');
    trigger.addEventListener('click', function () {
      var open = item.classList.toggle('faq-open');
      trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
      body.style.maxHeight = open ? (inner.scrollHeight + 'px') : '0px';
    });
  });
})();
</script>
@endpush
