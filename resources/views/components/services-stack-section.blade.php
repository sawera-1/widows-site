@php
$primary = '#d81d1f';

$services = [
    [
        'num' => '01.',
        'title' => 'AI Solutions',
        'desc' => 'Harness the power of large language models, diffusion networks, and custom AI pipelines. We integrate intelligent automation into your workflow enhancing creativity, not replacing it.',
        'bgGradient' => 'linear-gradient(135deg,#100808 0%,#200c0c 35%,#2e1010 60%,#180808 100%)',
        'accentGlow' => 'rgba(255,90,60,0.12)',
        'href' => '/services/ai',
    ],
    [
        'num' => '02.',
        'title' => 'Designing',
        'desc' => 'From brand identity to pixel-perfect UI, we craft visual experiences that resonate. Our design language blends restraint with boldness clean grids, expressive type, and purposeful motion.',
        'bgGradient' => 'linear-gradient(135deg,#0c0516 0%,#1a0630 35%,#210840 60%,#100320 100%)',
        'accentGlow' => 'rgba(180,100,255,0.12)',
        'href' => '/services/design',
    ],
    [
        'num' => '03.',
        'title' => 'Marketing',
        'desc' => 'Data-driven strategies that convert. We build full-funnel campaigns across organic and paid channels, turning audience insights into measurable growth that compounds over time.',
        'bgGradient' => 'linear-gradient(135deg,#061208 0%,#0c2010 35%,#122814 60%,#071209 100%)',
        'accentGlow' => 'rgba(100,220,80,0.12)',
        'href' => '/services/marketing',
    ],
    [
        'num' => '04.',
        'title' => 'Development',
        'desc' => 'We engineer scalable, high-performance digital products from blazing-fast web apps to complex back-end architectures. Every line of code is written with purpose, precision, and longevity in mind.',
        'bgGradient' => 'linear-gradient(135deg,#060d14 0%,#0b1929 35%,#0d2035 60%,#071018 100%)',
        'accentGlow' => 'rgba(0,200,255,0.12)',
        'href' => '/services/development',
    ],
    [
        'num' => '05.',
        'title' => 'Staff Augmentation',
        'desc' => 'Scale your team instantly with pre-vetted, senior-level talent. We embed dedicated specialists developers, designers, and strategists directly into your workflow, giving you the agility to move fast without the overhead of full-time hiring.',
        'bgGradient' => 'linear-gradient(135deg,#080e14 0%,#0d1a22 35%,#122130 60%,#090f16 100%)',
        'accentGlow' => 'rgba(255, 0, 111, 0.1)',
        'href' => '/staff',
    ],
];
@endphp

<section class="svc-section " id="svcSection">
    <div class="svc-inner">
        <!-- HEADER -->
        <div class="svc-header" id="svcHeader">
            <div class="svc-label-row">
                <div class="svc-robot-badge">
                    <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" loading="lazy" />
                </div>
                <div class="svc-label-pill">
                    <span class="svc-label-dot"></span>
                    <span class="svc-label-text">What We Do</span>
                </div>
            </div>

            <div class="svc-divider"></div>

            <h2 class="svc-heading">
                Our <span class="svc-accent-text">Services</span>
            </h2>

            <p class="svc-sub">
                We build, design, grow, and automate combining craft with technology to deliver
                digital experiences that captivate audiences and drive measurable results for
                ambitious brands.
            </p>
        </div>

        <!-- TRACK -->
        <div class="svc-track" id="svcTrack">
            <!-- STICKY CONTAINER -->
            <div class="svc-sticky" id="svcSticky">
                @foreach($services as $i => $svc)
                    <div class="svc-panel" data-index="{{ $i }}">
                        <!-- bg gradient -->
                        <div class="svc-panel-bg" style="background: {{ $svc['bgGradient'] }};"></div>
                        
                        <!-- accent radial glow -->
                        <div class="svc-panel-glow" style="background: radial-gradient(ellipse at 72% 50%, {{ $svc['accentGlow'] }} 0%, transparent 62%);"></div>
                        
                        <!-- Background Image -->
                        <div class="svc-panel-img">
                            <img src="{{ asset('assets/service/' . ($i + 1) . '.webp') }}" alt="{{ $svc['title'] }}" loading="lazy" />
                        </div>
                        
                        <!-- gradient overlay -->
                        <div class="svc-panel-overlay"></div>

                        <!-- decorative dot -->
                        <div class="svc-panel-dot">
                            <div class="svc-panel-dot-inner"></div>
                        </div>

                        <!-- CONTENT -->
                        <div class="svc-content">
                            <span class="svc-num">{{ $svc['num'] }}</span>
                            <h3 class="svc-title">{{ $svc['title'] }}</h3>
                            <p class="svc-desc">{{ $svc['desc'] }}</p>

                            <!-- button -->
                            <a href="{{ $svc['href'] }}" class="svc-btn">
                                <div class="svc-btn-shell">
                                    <div class="svc-btn-base">
                                        <span>View Work</span>
                                        <span class="svc-dots-icon svc-dots-light">
                                            <span></span><span></span><span></span>
                                        </span>
                                    </div>
                                    <div class="svc-btn-split">
                                        <div class="svc-btn-icon-box">
                                            <span class="svc-dots-icon svc-dots-dark">
                                                <span></span><span></span><span></span>
                                            </span>
                                        </div>
                                        <div class="svc-btn-text-box">
                                            View Work
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- bottom accent bar -->
                        <div class="svc-bottom-bar"></div>
                    </div>
                @endforeach

                <!-- PROGRESS DOTS (Desktop Only) -->
                <div class="svc-progress-dots" id="svcProgressDots">
                    @foreach($services as $i => $svc)
                        <div class="svc-dot" data-index="{{ $i }}"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
