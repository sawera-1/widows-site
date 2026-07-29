@extends('layouts.app')

@section('title', 'Building a Scalable Design System for Modern SaaS Products — Corammers Blog')
@section('meta_description', 'A well-crafted design system removes ambiguity, accelerates delivery, and ensures every pixel speaks the same language — from prototype to production.')
@section('og_type', 'article')

@push('schema')
<script type="application/ld+json">{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    'headline' => 'Building a Scalable Design System for Modern SaaS Products',
    'description' => 'A well-crafted design system removes ambiguity, accelerates delivery, and ensures every pixel speaks the same language — from prototype to production.',
    'image' => asset('assets/logo/og-image.png'),
    'author' => ['@type' => 'Organization', 'name' => 'Corammers'],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Corammers',
        'logo' => ['@type' => 'ImageObject', 'url' => asset('assets/logo/logo.png')],
    ],
    'mainEntityOfPage' => url()->current(),
], JSON_UNESCAPED_SLASHES) !!}</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/blog-detail.css') }}">
@endpush

@section('content')
<div class="pw-blog-detail">

    {{-- ── HERO ── --}}
    <section class="hero">
        <div class="hero-decorations" aria-hidden="true">
            {{-- ── ORBITING RINGS ── --}}
            <div class="d-ring d-ring-1"></div>
            <div class="d-ring d-ring-2"></div>
            <div class="d-ring d-ring-3"></div>

            {{-- ── DIAGONAL LINES ── --}}
            <div class="d-line d-line-1"></div>
            <div class="d-line d-line-2"></div>
            <div class="d-line d-line-3"></div>

            {{-- ── FLOATING ICON: CODE BRACKETS ── --}}
            <div class="d-icon d-icon-code">
                <svg width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="16 18 22 12 16 6" />
                    <polyline points="8 6 2 12 8 18" />
                </svg>
                <span class="d-icon-label">Code</span>
            </div>

            {{-- ── FLOATING ICON: LAYOUT / GRID ── --}}
            <div class="d-icon d-icon-grid">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                    <line x1="3" y1="9" x2="21" y2="9" />
                    <line x1="9" y1="21" x2="9" y2="9" />
                </svg>
                <span class="d-icon-label">Layout</span>
            </div>

            {{-- ── FLOATING ICON: LAYERS ── --}}
            <div class="d-icon d-icon-layers">
                <svg width="58" height="58" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2L2 7l10 5 10-5-10-5z" />
                    <path d="M2 17l10 5 10-5" />
                    <path d="M2 12l10 5 10-5" />
                </svg>
                <span class="d-icon-label">Layers</span>
            </div>

            {{-- ── FLOATING ICON: PALETTE ── --}}
            <div class="d-icon d-icon-palette">
                <svg width="54" height="54" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="13.5" cy="6.5" r=".5" fill="currentColor" />
                    <circle cx="17.5" cy="10.5" r=".5" fill="currentColor" />
                    <circle cx="8.5" cy="7.5" r=".5" fill="currentColor" />
                    <circle cx="6.5" cy="12.5" r=".5" fill="currentColor" />
                    <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z" />
                </svg>
                <span class="d-icon-label">Design</span>
            </div>

            {{-- ── FLOATING ICON: ZAP / PERFORMANCE ── --}}
            <div class="d-icon d-icon-zap">
                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                </svg>
                <span class="d-icon-label">Speed</span>
            </div>

            {{-- ── DOT GRID ── --}}
            <div class="d-dot-grid d-dot-left"></div>
            <div class="d-dot-grid d-dot-right"></div>

            {{-- ── GLOW BLOBS ── --}}
            <div class="d-blob d-blob-1"></div>
            <div class="d-blob d-blob-2"></div>
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-text">
            <div class="hero-eyebrow-pill">
                <span class="hero-eyebrow-dot"></span>
                <span class="hero-eyebrow-text">Design Systems &nbsp;·&nbsp; 8 min read</span>
            </div>
            <h1 class="hero-title">Building a <span style="color:var(--primary)">Scalable Design System</span> for Modern SaaS Products</h1>
            <p class="hero-intro">A well-crafted design system is the silent engine behind every great product. It removes ambiguity, accelerates delivery, and ensures every pixel speaks the same language — from the first prototype to the thousandth user.</p>
        </div>
    </section>

    {{-- ── 65/35 LAYOUT ── --}}
    <div class="page-body">

        {{-- LEFT: BLOG --}}
        <main>
            <div class="reveal">
                <div class="blog-badge-row">
                    <div class="badge-stack">
                        <div class="blog-robot-badge">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-img robot-img-light">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-img robot-img-dark">
                        </div>
                        <div class="badge-underline"></div>
                    </div>
                    <div class="blog-category-pill">
                        <span class="blog-category-dot"></span>
                        <span class="blog-category-label">Design Systems</span>
                    </div>
                </div>
                <h2 class="blog-title sec-heading">Building a <span style="color:var(--primary)">Scalable Design System</span> for Modern SaaS Products</h2>
                <p class="blog-intro sec-sub">A well-crafted design system is the silent engine behind every great product. It removes ambiguity, accelerates delivery, and ensures every pixel speaks the same language — from the first prototype to the thousandth user.</p>
            </div>

            <div class="reveal">
                <div class="blog-section">
                    <h3 class="blog-section-heading sec-heading">Why <span style="color:var(--primary)">Design Systems</span> Matter</h3>
                    <p class="blog-para sec-sub">As product teams scale, inconsistency creeps in. Different engineers interpret the same Figma file in subtly different ways. Designers duplicate components across files. The result: a fragmented experience that erodes user trust without anyone noticing until it's too late.

A design system solves this at the source. It establishes a single source of truth for color, spacing, typography, motion, and component behavior — shared across design and engineering in equal measure.</p>
                </div>
                <hr class="blog-divider">
            </div>

            <div class="reveal">
                <div class="blog-section">
                    <h3 class="blog-section-heading sec-heading">Starting With <span style="color:var(--primary)">Foundations</span></h3>
                    <p class="blog-para sec-sub">Before building a single component, get your foundations right. Define your color tokens — not just hex values, but semantic roles: primary, surface, on-surface, destructive, muted. Define your spacing scale (4px base grid is a reliable choice). Lock down your type ramp.

These decisions compound. Get them wrong early and you'll pay the debt in every component review for years. Get them right and the rest flows naturally.</p>
                </div>
                <hr class="blog-divider">
            </div>

            <div class="reveal">
                <div class="blog-section">
                    <h3 class="blog-section-heading sec-heading">Component Architecture <span style="color:var(--primary)">That Scales</span></h3>
                    <p class="blog-para sec-sub">Build components in layers: primitives (Box, Text, Stack), composites (Card, Input, Badge), and patterns (Form, Hero, Navigation). Each layer depends only on the layer below it.

Document usage guidelines alongside each component — not in a separate Notion page no one reads, but inline in Storybook or your component library tool of choice. Proximity drives adoption.</p>
                </div>
                <hr class="blog-divider">
            </div>

            <div class="reveal">
                <div class="blog-section">
                    <h3 class="blog-section-heading sec-heading">Keeping <span style="color:var(--primary)">It Alive</span></h3>
                    <p class="blog-para sec-sub">A design system is a living product, not a one-time deliverable. Assign clear ownership. Create a contribution model so teams can propose additions without breaking stability. Version your component library like any other package.

Most importantly: measure usage. If a component exists but nobody uses it, find out why. The answer is usually a documentation gap or an API that doesn't match real usage patterns.</p>
                </div>
            </div>
        </main>

        {{-- RIGHT: SIDEBAR --}}
        <aside class="sidebar">
            <div class="reveal">
                {{-- FORM CARD --}}
                <div class="form-card">
                    {{-- ─ GET IN TOUCH banner ─ --}}
                    <div class="form-card-banner">
                        <div class="form-card-banner-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="banner-icon-svg">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                            </svg>
                        </div>
                        <div class="form-card-banner-text">
                            <div class="form-card-banner-sup">Contact Us</div>
                            <div class="form-card-banner-title">Get In Touch</div>
                        </div>
                    </div>

                    <div class="form-card-body" style="padding:0">
                        <div class="calendly-inline-widget" data-url="https://calendly.com/mshayantariq/schedule-a-meeting?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:280px;height:550px;width:100%"></div>
                    </div>
                </div>

                {{-- CONTACT DETAILS --}}
                <div class="contact-card">
                    <h4 class="contact-card-title">Socials</h4>

                    <div class="contact-item" style="padding-top: 8px;">
                        <div>
                            <div class="social-icons">
                                <a href="https://www.youtube.com/@MediaCorammers" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.016 3.016 0 0 0-2.122 2.136C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.55 9.376.55 9.376.55s7.505 0 9.377-.55a3.016 3.016 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/corammersmedia?igsh=YTYxdWo1dHlhcjc1" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/company/corammers/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </a>
                                <a href="mailto:corammers@gmail.com" aria-label="Email">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/share/19pNwtaKzg/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                    </svg>
                                </a>
                                <a href="https://wa.me/+923499674499" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                                    <svg viewBox="0 0 448 512" fill="currentColor">
                                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    {{-- ── FAQ ── --}}
    <section class="faq-section">
        <div class="reveal">
            <div class="faq-header">
                <div class="blog-badge-row">
                    <div class="badge-stack">
                        <div class="blog-robot-badge">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-img robot-img-light">
                            <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="robot-img robot-img-dark">
                        </div>
                        <div class="badge-underline"></div>
                    </div>
                    <div class="blog-category-pill">
                        <span class="blog-category-dot"></span>
                        <span class="blog-category-label">Questions → Answers</span>
                    </div>
                </div>
                <h2 class="faq-title sec-heading">Frequently <span style="color:var(--primary)">Asked Questions</span></h2>
            </div>
        </div>

        <div class="faq-list">
            @php
                $faqs = [
                    ['q' => 'What technologies do you use to build modern web applications?', 'a' => "We primarily work with Next.js, React, and Tailwind CSS for front-end development. On the backend we leverage Node.js, PostgreSQL, and cloud infrastructure on AWS and Vercel — ensuring scalable, maintainable, and performant solutions for every project."],
                    ['q' => 'How long does a typical project take from kickoff to launch?', 'a' => "Project timelines vary based on scope and complexity. A focused landing page or blog can ship in 1–2 weeks, while a full-featured SaaS product typically spans 8–16 weeks. We share a detailed roadmap during our discovery phase so you always know what to expect."],
                    ['q' => 'Do you offer post-launch support and maintenance?', 'a' => "Absolutely. We offer flexible retainer packages covering bug fixes, performance monitoring, feature iterations, and security updates. Our goal is to be a long-term partner, not just a delivery team."],
                    ['q' => 'Can you work with an existing codebase or design system?', 'a' => "Yes — we regularly integrate with existing codebases, component libraries, and design systems. We conduct a thorough audit before committing to a scope so there are no surprises mid-project."],
                    ['q' => 'How do we get started working together?', 'a' => "Simply fill out the contact form on this page or email us directly at info@corammers.com We'll schedule a free 30-minute discovery call to understand your goals and outline the best path forward."],
                ];
            @endphp

            @foreach ($faqs as $item)
                <div class="reveal">
                    <div class="faq-item">
                        <button class="faq-trigger" type="button" aria-expanded="false">
                            <span class="faq-q">{{ $item['q'] }}</span>
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-body">
                            <div class="faq-body-inner">
                                <p>{{ $item['a'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection

@push('scripts')
<script src="https://assets.calendly.com/assets/external/widget.js" async></script>
<script>
    (function () {
        var root = document.querySelector('.pw-blog-detail');
        if (!root) return;

        /* ── Reveal on scroll (entrance animation) ── */
        var reveals = root.querySelectorAll('.reveal');
        if ('IntersectionObserver' in window) {
            var ob = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) {
                        e.target.classList.add('reveal-in');
                        ob.unobserve(e.target);
                    }
                });
            }, { threshold: 0.1 });
            reveals.forEach(function (el) { ob.observe(el); });
        } else {
            reveals.forEach(function (el) { el.classList.add('reveal-in'); });
        }

        /* ── FAQ accordion ── */
        root.querySelectorAll('.faq-item').forEach(function (item) {
            var trigger = item.querySelector('.faq-trigger');
            var body = item.querySelector('.faq-body');
            var inner = item.querySelector('.faq-body-inner');
            var icon = item.querySelector('.faq-icon');
            if (!trigger || !body) return;
            trigger.addEventListener('click', function () {
                var open = item.classList.toggle('faq-open');
                trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
                if (icon) icon.textContent = open ? '−' : '+';
                body.style.maxHeight = open ? (inner.scrollHeight + 'px') : '0px';
            });
        });

        /* ── Contact form (client-side only, no backend) ── */
        var form = root.querySelector('[data-contact-form]');
        var success = root.querySelector('[data-form-success]');
        if (form && success) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                form.hidden = true;
                success.hidden = false;
                setTimeout(function () {
                    success.hidden = true;
                    form.hidden = false;
                    form.reset();
                }, 3200);
            });
        }
    })();
</script>
@endpush
