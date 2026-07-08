@extends('layouts.app')

@section('title', 'Corammers')
@section('meta_description', 'A well-crafted design system removes ambiguity, accelerates delivery, and ensures every pixel speaks the same language — from prototype to production.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/blog-detail.css') }}">
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
            <h1 class="hero-title">Building a Scalable Design System for Modern SaaS Products</h1>
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
                            <img loading="lazy" decoding="async" src="/assets/robo.png" alt="Robot" class="robot-img robot-img-light">
                            <img loading="lazy" decoding="async" src="/assets/robo.png" alt="Robot" class="robot-img robot-img-dark">
                        </div>
                        <div class="badge-underline"></div>
                    </div>
                    <div class="blog-category-pill">
                        <span class="blog-category-dot"></span>
                        <span class="blog-category-label">Design Systems</span>
                    </div>
                </div>
                <h2 class="blog-title">Building a Scalable Design System for Modern SaaS Products</h2>
                <p class="blog-intro">A well-crafted design system is the silent engine behind every great product. It removes ambiguity, accelerates delivery, and ensures every pixel speaks the same language — from the first prototype to the thousandth user.</p>
            </div>

            <div class="reveal">
                <div class="blog-section">
                    <h3 class="blog-section-heading">Why Design Systems Matter</h3>
                    <p class="blog-para">As product teams scale, inconsistency creeps in. Different engineers interpret the same Figma file in subtly different ways. Designers duplicate components across files. The result: a fragmented experience that erodes user trust without anyone noticing until it's too late.

A design system solves this at the source. It establishes a single source of truth for color, spacing, typography, motion, and component behavior — shared across design and engineering in equal measure.</p>
                </div>
                <hr class="blog-divider">
            </div>

            <div class="reveal">
                <div class="blog-section">
                    <h3 class="blog-section-heading">Starting With Foundations</h3>
                    <p class="blog-para">Before building a single component, get your foundations right. Define your color tokens — not just hex values, but semantic roles: primary, surface, on-surface, destructive, muted. Define your spacing scale (4px base grid is a reliable choice). Lock down your type ramp.

These decisions compound. Get them wrong early and you'll pay the debt in every component review for years. Get them right and the rest flows naturally.</p>
                </div>
                <hr class="blog-divider">
            </div>

            <div class="reveal">
                <div class="blog-section">
                    <h3 class="blog-section-heading">Component Architecture That Scales</h3>
                    <p class="blog-para">Build components in layers: primitives (Box, Text, Stack), composites (Card, Input, Badge), and patterns (Form, Hero, Navigation). Each layer depends only on the layer below it.

Document usage guidelines alongside each component — not in a separate Notion page no one reads, but inline in Storybook or your component library tool of choice. Proximity drives adoption.</p>
                </div>
                <hr class="blog-divider">
            </div>

            <div class="reveal">
                <div class="blog-section">
                    <h3 class="blog-section-heading">Keeping It Alive</h3>
                    <p class="blog-para">A design system is a living product, not a one-time deliverable. Assign clear ownership. Create a contribution model so teams can propose additions without breaking stability. Version your component library like any other package.

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

                    <div class="form-card-body">
                        <p class="form-card-sub">How may we help you? Fill in the form and we'll be in touch within 24 hours.</p>

                        <div class="form-success" data-form-success hidden>
                            <span class="form-success-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </span>
                            Message received! We'll be in touch shortly.
                        </div>

                        <form data-contact-form>
                            <div class="form-row">
                                <input class="form-field" type="text" name="name" placeholder="Your Name *" required>
                            </div>
                            <div class="form-row">
                                <input class="form-field" type="email" name="email" placeholder="Email Address *" required>
                            </div>
                            <div class="form-row">
                                <input class="form-field" type="tel" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="form-row">
                                <textarea class="form-field" name="message" placeholder="How may we help you?"></textarea>
                            </div>
                            <button type="submit" class="form-submit">Send Message</button>
                        </form>
                    </div>
                </div>

                {{-- CONTACT DETAILS --}}
                <div class="contact-card">
                    <h4 class="contact-card-title">Contact Details</h4>

                    <div class="contact-item">
                        <div class="contact-icon-wrap">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l2.27-2.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </div>
                        <div>
                            <div class="contact-info-label">Phone</div>
                            <div class="contact-info-val">+92 349 967 4499</div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon-wrap">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <polyline points="22,6 12,13 2,6" />
                            </svg>
                        </div>
                        <div>
                            <div class="contact-info-label">Email</div>
                            <div class="contact-info-val">info@corammers.com</div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon-wrap">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div>
                            <div class="contact-info-label">Address</div>
                            <div class="contact-info-val">Gulberg Greens, Islamabad</div>
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
                            <img loading="lazy" decoding="async" src="/assets/robo.png" alt="Robot" class="robot-img robot-img-light">
                            <img loading="lazy" decoding="async" src="/assets/robo.png" alt="Robot" class="robot-img robot-img-dark">
                        </div>
                        <div class="badge-underline"></div>
                    </div>
                    <div class="blog-category-pill">
                        <span class="blog-category-dot"></span>
                        <span class="blog-category-label">Questions → Answers</span>
                    </div>
                </div>
                <p class="faq-eyebrow">Have Questions?</p>
                <h2 class="faq-title">Frequently Asked Questions</h2>
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
