@php
    $features = [
        [
            'icon' => '<circle cx="12" cy="12" r="10" /><circle cx="12" cy="12" r="6" /><circle cx="12" cy="12" r="2" />',
            'title' => 'Specialized for Marketing Agencies & SaaS',
            'desc' => 'Purpose-built recruitment solutions focused exclusively on your industry segment.',
        ],
        [
            'icon' => '<rect x="1" y="4" width="22" height="16" rx="2" ry="2" /><line x1="1" y1="10" x2="23" y2="10" />',
            'title' => '100% Contingent Hiring — Pay Only When You Hire',
            'desc' => 'Zero upfront risk. You pay only once your VA is placed, onboarded, and working.',
        ],
        [
            'icon' => '<circle cx="12" cy="12" r="10" /><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" /><path d="M2 12h20" />',
            'title' => 'Fully Compliant Global Hiring via EOR',
            'desc' => 'We own compliance, payroll, bonuses, and employee benefits globally.',
        ],
        [
            'icon' => '<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" /><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" /><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" /><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />',
            'title' => 'Pre-Trained, Ready-to-Deliver Talent',
            'desc' => 'VAs arrive trained in your stack marketing, sales, and operations tools.',
        ]
    ];

    $stats = [
        [ 'icon' => '<line x1="12" y1="1" x2="12" y2="23" /><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />', 'num' => '60%', 'label' => 'Payroll Savings' ],
        [ 'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />', 'num' => '70%', 'label' => 'Faster Hiring' ],
        [ 'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><polyline points="16 11 18 13 22 9" />', 'num' => '100%', 'label' => 'Contingent Model' ],
        [ 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />', 'num' => '$0', 'label' => 'Upfront Cost' ],
    ];

    $checks = [
        "You only pay when we place a VA you're genuinely happy with",
        "We manage contracts, compliance, and onboarding via Employer of Record (EOR)",
        "Sales, marketing, CS, or ops — our VAs feel like an extension of your team",
    ];

    $tags = [
        "60% payroll savings", "70% faster hiring", "No upfront costs", "Full EOR compliance", "Seamless onboarding"
    ];
@endphp

<div class="px-wrap">
    {{-- SECTION 1 --}}
    <section class="px-s1">
        <div class="px-s1-inner">
            <div class="px-s1-grid">
                
                {{-- LEFT: IMAGE COLUMN --}}
                <div class="px-img-col px-reveal">
                    <img src="{{ asset('assets/team2.webp') }}" alt="Staff augmentation team" onerror="this.style.display='none';" />
                    <div class="px-img-overlay"></div>
                    
                    <div class="px-img-label">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M22 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        Corammers
                    </div>
                    
                    <div class="px-float-badge">
                        <div class="px-float-badge-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="color: var(--px-acc);" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg>
                        </div>
                        <div>
                            <div class="px-float-num">70% Faster</div>
                            <div class="px-float-lbl">Average hiring velocity vs. traditional recruiting</div>
                        </div>
                    </div>
                </div>

                {{-- RIGHT: CONTENT COLUMN --}}
                <div class="px-content-col">
                    <div class="px-label-row px-reveal">
                        <div class="px-robot-badge">
                            <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="display:none;object-fit:contain;">
                            <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;">
                        </div>
                        <div class="px-label-pill">
                            <span class="px-label-dot"></span>
                            <span class="px-label-text">Staff Augmentation</span>
                        </div>
                    </div>

                    <h2 class="px-heading px-reveal" style="transition-delay: 0.1s;">
                        Don't Let Hiring <span class="px-heading-acc">Slow Your Growth</span>
                    </h2>

                    <p class="px-subtext px-reveal" style="transition-delay: 0.15s;">
                        Finding the right talent is tough. Freelancers lack consistency. Local hires are expensive. Meanwhile, your agency's growth stalls.
                    </p>
                    <p class="px-subtext px-reveal" style="margin-bottom: 0; transition-delay: 0.2s;">
                        Corammers helps you scale with vetted virtual team members trained, integrated, and contributing from day one.
                    </p>

                    {{-- Highlight Box --}}
                    <div class="px-highlight px-reveal" style="transition-delay: 0.25s;">
                        <h3 class="px-highlight-title">Top Talent. Zero Risk.</h3>
                        <p class="px-highlight-sub">Our model is built for agency operators:</p>
                        @foreach($checks as $check)
                            <div class="px-check-row">
                                <div class="px-check-circle">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="color: var(--px-acc);"><polyline points="20 6 9 17 4 12" /></svg>
                                </div>
                                <p class="px-check-text">{{ $check }}</p>
                            </div>
                        @endforeach
                    </div>

                    {{-- Tags --}}
                    <div class="px-tags px-reveal" style="transition-delay: 0.3s;">
                        @foreach($tags as $tag)
                            <span class="px-badge">
                                <span class="px-badge-dot"></span>
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>

                    <div class="px-reveal" style="transition-delay: 0.35s;">
                        <a href="{{ route('contact.index') }}" class="px-cta-btn">Book a Discovery Call</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION 2 --}}
    <section class="px-s2">
        <div class="px-s2-watermark">Corammers</div>
        <div class="px-s2-inner">
            
            <div class="px-sec-header">
                <div class="px-label-row px-reveal" style="justify-content: center; margin-bottom: 22px;">
                    <div class="px-robot-badge" style="width: 48px; height: 48px;">
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="display:none;object-fit:contain;">
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;">
                    </div>
                    <div class="px-label-pill">
                        <span class="px-label-dot"></span>
                        <span class="px-label-text">Our Advantages</span>
                    </div>
                </div>
                <h2 class="px-sec-heading px-reveal" style="transition-delay: 0.1s;">
                    Recruit Smarter, <span class="px-heading-acc" style="display: inline;">Scale Faster</span>
                </h2>
                <p class="px-sec-subtext px-reveal" style="transition-delay: 0.15s;">
                    The trusted recruitment partner for digital marketing agencies and SaaS businesses ready to grow.
                </p>
            </div>

            <div class="px-feat-grid">
                @foreach($features as $index => $feat)
                    <div class="px-feat-card px-reveal" style="transition-delay: {{ $index * 0.1 }}s;" onmouseover="this.querySelector('.px-feat-line').style.width='60%'" onmouseout="this.querySelector('.px-feat-line').style.width='28px'">
                        <div class="px-feat-num">{{ sprintf('%02d', $index + 1) }}</div>
                        <div class="px-feat-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">{!! $feat['icon'] !!}</svg>
                        </div>
                        <h3 class="px-feat-title">{{ $feat['title'] }}</h3>
                        <p class="px-feat-desc">{{ $feat['desc'] }}</p>
                        <div class="px-feat-line" style="width: 28px;"></div>
                    </div>
                @endforeach
            </div>

            <div class="px-stats px-reveal" style="transition-delay: 0.2s;">
                @foreach($stats as $stat)
                    <div class="px-stat-item">
                        <div class="px-stat-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">{!! $stat['icon'] !!}</svg>
                        </div>
                        <div class="px-stat-num">{{ $stat['num'] }}</div>
                        <div class="px-stat-label">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
</div>


