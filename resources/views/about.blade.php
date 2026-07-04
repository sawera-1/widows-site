@extends('layouts.app')

@section('title', 'About Us — CORAMMERS')
@section('description', 'A multidisciplinary tech studio crafting AI-powered apps, immersive VR experiences, and enterprise web platforms that scale without limits.')

@push('styles')
    @vite(['resources/css/pages/about.css'])
@endpush

@push('scripts')
    @vite(['resources/js/pages/about.js'])
@endpush

@section('content')
<div class="page-wrapper about-page-wrapper">
    <!-- HERO -->
    <section class="hero">
        <div class="hero-text">
            <h1 class="hero-heading reveal">WE BUILD DIGITAL <br /> FUTURES</h1>
            <p class="hero-sub reveal" style="transition-delay: 0.1s;">
                A multidisciplinary tech studio crafting AI-powered apps, immersive VR experiences,<br />
                and enterprise web platforms that scale without limits.
            </p>
        </div>

        <div class="about-inner">
            <div class="about-banner-wrap reveal" style="transition-delay: 0.2s; margin-top: 10px;">
                <img src="{{ asset('assets/about.webp') }}" alt="About Us" class="about-banner-img" />
                
                <!-- Floating Video Button -->
                <div class="floating-video-wrapper" style="position: absolute; inset: 0; z-index: 8; pointer-events: none;">
                    <div id="floatingVideoBtn" class="video-btn" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); pointer-events: auto; cursor: pointer;">
                        <span class="vbtn-ring vbtn-ring-1"></span>
                        <span class="vbtn-ring vbtn-ring-2"></span>
                        <span class="vbtn-ring vbtn-ring-3"></span>
                        <span class="vbtn-core">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="6 3 20 12 6 21 6 3" />
                            </svg>
                        </span>
                        <span class="vbtn-label">Play</span>
                    </div>
                </div>

                <div class="about-banner-glass">
                    <span class="glass-tag">Innovation First</span>
                    <p class="glass-text">We blend artistic creativity with technical excellence to build products that stand out.</p>
                </div>
                
                <div class="about-banner-overlay">
                    <h3 style="font-family: 'Poppins', sans-serif; font-size: 2rem; color: #fff; margin: 0 0 12px; font-weight: 800; letter-spacing: -0.02em;">United by Vision</h3>
                    <p style="font-family: 'Montserrat', sans-serif; font-size: 1.05rem; color: rgba(255,255,255,0.9); max-width: 540px; line-height: 1.7; margin: 0;">
                        Our global team works around the clock to ensure your project is
                        delivered with the highest quality standards and innovative features.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE SECTION -->
    <section class="exp-section">
        <div class="section-inner exp-grid">
            <div class="exp-left reveal">
                <div class="section-label-row">
                    <div class="section-robot-badge">
                        <!-- Theme switching handled by CSS or generic image -->
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" style="width: 32px; height: 32px; object-fit: contain; display: block;" />
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" style="width: 32px; height: 32px; object-fit: contain; display: none;" />
                    </div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">Since 2018</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <h2 class="exp-heading">Our<br /><span class="text-accent">Experience</span></h2>
                <p class="exp-intro">
                    Years of delivering digital excellence across development, design, and strategy — turning complex ideas into impactful solutions.
                </p>
                <div class="exp-stat-row">
                    <div class="exp-stat">
                        <span class="exp-stat-num">200+</span>
                        <span class="exp-stat-label">Projects Delivered</span>
                    </div>
                    <div class="exp-stat">
                        <span class="exp-stat-num">6+</span>
                        <span class="exp-stat-label">Years Active</span>
                    </div>
                </div>
            </div>

            <div class="exp-right">
                <!-- Item 1 -->
                <div class="exp-item reveal" style="transition-delay: 0.1s;">
                    <div class="exp-item-top">
                        <span class="exp-num">01</span>
                        <div class="exp-item-header">
                            <span class="exp-sub">Frontend & Backend Mastery</span>
                            <h3 class="exp-title">Web Development Experience</h3>
                        </div>
                    </div>
                    <div class="exp-item-body">
                        <p class="exp-desc">From pixel-perfect interfaces to robust server-side architectures, we craft end-to-end web solutions using React, Next.js, Laravel, and Node.js engineered for performance, scalability, and lasting impact.</p>
                        <div class="exp-tags">
                            <span class="exp-tag">React</span>
                            <span class="exp-tag">Next.js</span>
                            <span class="exp-tag">Laravel</span>
                            <span class="exp-tag">Node.js</span>
                        </div>
                    </div>
                    <div class="exp-divider"></div>
                </div>

                <!-- Item 2 -->
                <div class="exp-item reveal" style="transition-delay: 0.24s;">
                    <div class="exp-item-top">
                        <span class="exp-num">02</span>
                        <div class="exp-item-header">
                            <span class="exp-sub">Cross-Platform Excellence</span>
                            <h3 class="exp-title">Mobile & App Solutions</h3>
                        </div>
                    </div>
                    <div class="exp-item-body">
                        <p class="exp-desc">We design and build mobile-first applications for iOS and Android using Flutter and React Native. Every app we deliver is intuitive, fast, and built to grow with your business.</p>
                        <div class="exp-tags">
                            <span class="exp-tag">Flutter</span>
                            <span class="exp-tag">React Native</span>
                            <span class="exp-tag">iOS</span>
                            <span class="exp-tag">Android</span>
                        </div>
                    </div>
                    <div class="exp-divider"></div>
                </div>

                <!-- Item 3 -->
                <div class="exp-item reveal" style="transition-delay: 0.38s;">
                    <div class="exp-item-top">
                        <span class="exp-num">03</span>
                        <div class="exp-item-header">
                            <span class="exp-sub">Large-Scale Digital Infrastructure</span>
                            <h3 class="exp-title">Enterprise & Custom Projects</h3>
                        </div>
                    </div>
                    <div class="exp-item-body">
                        <p class="exp-desc">Complex workflows, integrations, and custom platforms are our specialty. We have delivered enterprise-grade solutions for businesses across industries handling everything from architecture to deployment.</p>
                        <div class="exp-tags">
                            <span class="exp-tag">SaaS</span>
                            <span class="exp-tag">API Design</span>
                            <span class="exp-tag">DevOps</span>
                            <span class="exp-tag">Custom CMS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SPECIALTIES SECTION -->
    <section class="spec-section">
        <div class="section-inner">
            <div class="spec-header reveal">
                <div class="section-label-row">
                    <div class="section-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" style="width: 32px; height: 32px; object-fit: contain; display: block;" />
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" style="width: 32px; height: 32px; object-fit: contain; display: none;" />
                    </div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">What We Do</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <div class="spec-heading-row">
                    <h2 class="spec-heading">Our <span class="text-accent">Specialties</span></h2>
                    <p class="spec-sub">
                        A focused set of disciplines — each executed with precision and depth across development, marketing, and design.
                    </p>
                </div>
            </div>

            <div class="spec-tabs reveal" style="transition-delay: 0.1s;">
                <button type="button" class="spec-tab spec-tab--active" data-category="All">
                    <span class="spec-tab-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    </span>
                    <span>All</span>
                    <span class="spec-tab-count">14</span>
                </button>
                <button type="button" class="spec-tab" data-category="Development">
                    <span class="spec-tab-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    </span>
                    <span>Development</span>
                    <span class="spec-tab-count">6</span>
                </button>
                <button type="button" class="spec-tab" data-category="Marketing">
                    <span class="spec-tab-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    </span>
                    <span>Marketing</span>
                    <span class="spec-tab-count">4</span>
                </button>
                <button type="button" class="spec-tab" data-category="Design">
                    <span class="spec-tab-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line></svg>
                    </span>
                    <span>Design</span>
                    <span class="spec-tab-count">4</span>
                </button>
            </div>

            <div class="spec-list" id="specList">
                <!-- Development Items -->
                <div class="spec-item reveal" data-category="Development" style="transition-delay: 0.04s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">01</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-development">Development</span>
                                <span class="spec-q-text">PHP & Laravel Development</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">We build robust, scalable web applications using PHP and the Laravel framework. From RESTful APIs to complex backend systems, our Laravel expertise powers high-performance products used by thousands of users daily.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-development">PHP</span>
                                <span class="spec-tag cat-development">Laravel</span>
                                <span class="spec-tag cat-development">REST API</span>
                                <span class="spec-tag cat-development">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Development" style="transition-delay: 0.09s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">02</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-development">Development</span>
                                <span class="spec-q-text">WordPress Solutions</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">Custom themes, plugins, and full WordPress ecosystems tailored to your brand. We go far beyond templates every WordPress project we deliver is unique, fast, and fully maintainable by your team.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-development">WordPress</span>
                                <span class="spec-tag cat-development">WooCommerce</span>
                                <span class="spec-tag cat-development">Custom Themes</span>
                                <span class="spec-tag cat-development">Plugins</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="spec-item reveal" data-category="Development" style="transition-delay: 0.14s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">03</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-development">Development</span>
                                <span class="spec-q-text">Custom Web Applications</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">When off-the-shelf tools aren't enough, we engineer bespoke web applications from scratch. Fully custom logic, databases, and interfaces designed around your exact business workflows and goals.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-development">React</span>
                                <span class="spec-tag cat-development">Next.js</span>
                                <span class="spec-tag cat-development">Node.js</span>
                                <span class="spec-tag cat-development">PostgreSQL</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Development" style="transition-delay: 0.19s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">04</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-development">Development</span>
                                <span class="spec-q-text">Ecommerce Platforms</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">From WooCommerce to fully custom storefronts, we build ecommerce experiences that convert. Seamless payment integrations, inventory management, and checkout flows optimized for every device.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-development">WooCommerce</span>
                                <span class="spec-tag cat-development">Shopify</span>
                                <span class="spec-tag cat-development">Stripe</span>
                                <span class="spec-tag cat-development">Payment Gateways</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Development" style="transition-delay: 0.24s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">05</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-development">Development</span>
                                <span class="spec-q-text">Mobile App Development</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">Cross-platform mobile apps built with Flutter and React Native. We deliver native-quality experiences on both iOS and Android from a single codebase reducing cost without sacrificing performance.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-development">Flutter</span>
                                <span class="spec-tag cat-development">React Native</span>
                                <span class="spec-tag cat-development">iOS</span>
                                <span class="spec-tag cat-development">Android</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Development" style="transition-delay: 0.29s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">06</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-development">Development</span>
                                <span class="spec-q-text">API & Backend Systems</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">Rock-solid API architecture and backend infrastructure. We design RESTful and GraphQL APIs built for reliability, security, and scale — complete with documentation, versioning, and monitoring.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-development">GraphQL</span>
                                <span class="spec-tag cat-development">REST API</span>
                                <span class="spec-tag cat-development">DevOps</span>
                                <span class="spec-tag cat-development">AWS</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Marketing Items -->
                <div class="spec-item reveal" data-category="Marketing" style="transition-delay: 0.34s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">07</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-marketing">Marketing</span>
                                <span class="spec-q-text">Social Media Marketing</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">Strategic social media campaigns that build communities, drive engagement, and convert followers into loyal customers. We manage content calendars, paid campaigns, and analytics across all major platforms.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-marketing">Instagram</span>
                                <span class="spec-tag cat-marketing">LinkedIn</span>
                                <span class="spec-tag cat-marketing">Facebook</span>
                                <span class="spec-tag cat-marketing">TikTok</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Marketing" style="transition-delay: 0.39s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">08</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-marketing">Marketing</span>
                                <span class="spec-q-text">SEO & AEO</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">Dominate search rankings with our proven SEO and Answer Engine Optimization strategies. We combine technical audits, keyword architecture, and content strategies to drive sustainable organic growth and AI-powered visibility.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-marketing">On-Page SEO</span>
                                <span class="spec-tag cat-marketing">Technical SEO</span>
                                <span class="spec-tag cat-marketing">AEO</span>
                                <span class="spec-tag cat-marketing">Link Building</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Marketing" style="transition-delay: 0.44s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">09</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-marketing">Marketing</span>
                                <span class="spec-q-text">Google Ads</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">High-converting Google Ads campaigns engineered for maximum ROI. From Search and Display to Shopping and YouTube, our PPC specialists create data-driven campaigns that put your brand in front of the right audience at the right moment.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-marketing">Search Ads</span>
                                <span class="spec-tag cat-marketing">Display Ads</span>
                                <span class="spec-tag cat-marketing">Shopping Ads</span>
                                <span class="spec-tag cat-marketing">YouTube Ads</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Marketing" style="transition-delay: 0.49s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">10</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-marketing">Marketing</span>
                                <span class="spec-q-text">Email Marketing</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">Automated email sequences and broadcast campaigns that nurture leads and drive repeat revenue. We craft compelling copy, design beautiful templates, and implement smart segmentation for measurable results.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-marketing">Automation</span>
                                <span class="spec-tag cat-marketing">Drip Campaigns</span>
                                <span class="spec-tag cat-marketing">Klaviyo</span>
                                <span class="spec-tag cat-marketing">Mailchimp</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Design Items -->
                <div class="spec-item reveal" data-category="Design" style="transition-delay: 0.54s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">11</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-design">Design</span>
                                <span class="spec-q-text">UI/UX Design</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">User interfaces crafted with empathy and precision. Our UX process starts with research and wireframes, moving through interactive prototypes to pixel-perfect final designs that delight users and drive business outcomes.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-design">Figma</span>
                                <span class="spec-tag cat-design">Prototyping</span>
                                <span class="spec-tag cat-design">User Research</span>
                                <span class="spec-tag cat-design">Design Systems</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Design" style="transition-delay: 0.59s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">12</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-design">Design</span>
                                <span class="spec-q-text">Graphic Design</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">Striking visual assets that communicate your brand story with clarity and impact. From social media graphics to print collateral, marketing materials, and everything in between all crafted to stand out.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-design">Print Design</span>
                                <span class="spec-tag cat-design">Social Graphics</span>
                                <span class="spec-tag cat-design">Infographics</span>
                                <span class="spec-tag cat-design">Illustrations</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Design" style="transition-delay: 0.64s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">13</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-design">Design</span>
                                <span class="spec-q-text">Video Editing</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">Professional video production and post-editing for brands that want to captivate. We handle everything from raw footage editing and motion graphics to colour grading, sound design, and final delivery.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-design">Motion Graphics</span>
                                <span class="spec-tag cat-design">Color Grading</span>
                                <span class="spec-tag cat-design">After Effects</span>
                                <span class="spec-tag cat-design">Reels</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spec-item reveal" data-category="Design" style="transition-delay: 0.69s;">
                    <div class="spec-trigger">
                        <div class="spec-trigger-left">
                            <span class="spec-num">14</span>
                            <div class="spec-trigger-meta">
                                <span class="spec-category-badge cat-design">Design</span>
                                <span class="spec-q-text">Branding & Identity</span>
                            </div>
                        </div>
                        <button class="spec-icon-wrap" type="button" aria-expanded="false">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </button>
                    </div>
                    <div class="spec-body-wrapper">
                        <div class="spec-body-inner">
                            <p class="spec-desc-text">Complete brand identity systems built from the ground up. We craft logos, typography systems, colour palettes, brand guidelines, and comprehensive visual identities that make your brand unmistakable and unforgettable.</p>
                            <div class="spec-tags">
                                <span class="spec-tag cat-design">Logo Design</span>
                                <span class="spec-tag cat-design">Brand Guidelines</span>
                                <span class="spec-tag cat-design">Typography</span>
                                <span class="spec-tag cat-design">Visual Identity</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spec-footer-strip reveal" style="transition-delay: 0.15s;">
                <div class="spec-stat-item">
                    <span class="spec-stat-num">14+</span>
                    <span class="spec-stat-label">Disciplines</span>
                </div>
                <div class="spec-stat-divider"></div>
                <div class="spec-stat-item">
                    <span class="spec-stat-num">200+</span>
                    <span class="spec-stat-label">Projects</span>
                </div>
                <div class="spec-stat-divider"></div>
                <div class="spec-stat-item">
                    <span class="spec-stat-num">6+</span>
                    <span class="spec-stat-label">Years</span>
                </div>
                <div class="spec-stat-divider"></div>
                <div class="spec-stat-item">
                    <span class="spec-stat-num">50+</span>
                    <span class="spec-stat-label">Expert Team</span>
                </div>
            </div>
        </div>
    </section>

    <!-- APPROACH SECTION -->
    <section class="approach-section">
        <div class="section-inner">
            <div class="approach-header reveal">
                <div class="section-label-row">
                    <div class="section-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" style="width: 32px; height: 32px; object-fit: contain; display: block;" />
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" style="width: 32px; height: 32px; object-fit: contain; display: none;" />
                    </div>
                    <div class="section-label-pill">
                        <span class="section-label-dot"></span>
                        <span class="section-label">How We Work</span>
                    </div>
                </div>
                <div class="section-divider"></div>
                <h2 class="approach-heading">Our <span class="text-accent">Approach</span></h2>
                <p class="approach-sub">
                    A process built on clarity, collaboration, and relentless attention to quality at every stage.
                </p>
            </div>

            <div class="approach-steps">
                <div class="approach-step reveal" style="transition-delay: 0.08s;">
                    <div class="approach-step-inner">
                        <span class="approach-step-num">01</span>
                        <div class="approach-step-line"></div>
                        <h3 class="approach-step-title">Understanding Requirements</h3>
                        <p class="approach-step-desc">Deep discovery sessions to align on goals, audience, and success metrics before a single line of code is written.</p>
                    </div>
                </div>
                <div class="approach-step reveal" style="transition-delay: 0.19s;">
                    <div class="approach-step-inner">
                        <span class="approach-step-num">02</span>
                        <div class="approach-step-line"></div>
                        <h3 class="approach-step-title">Strategic Planning</h3>
                        <p class="approach-step-desc">Roadmaps, tech stack decisions, and timelines crafted for clarity and speed so nothing is left to guesswork.</p>
                    </div>
                </div>
                <div class="approach-step reveal" style="transition-delay: 0.3s;">
                    <div class="approach-step-inner">
                        <span class="approach-step-num">03</span>
                        <div class="approach-step-line"></div>
                        <h3 class="approach-step-title">Development & Execution</h3>
                        <p class="approach-step-desc">Agile sprints with regular check-ins, transparent progress, and clean code delivery at every milestone.</p>
                    </div>
                </div>
                <div class="approach-step reveal" style="transition-delay: 0.41s;">
                    <div class="approach-step-inner">
                        <span class="approach-step-num">04</span>
                        <div class="approach-step-line"></div>
                        <h3 class="approach-step-title">Testing & Optimization</h3>
                        <p class="approach-step-desc">QA, performance tuning, and real-world validation before every launch because details define excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXISTING GLOBAL COMPONENTS -->
    <x-trust-badges-section />
    <x-blog-section />
    <x-portfolio-section />
    <x-contact-banner />
</div>
@endsection
