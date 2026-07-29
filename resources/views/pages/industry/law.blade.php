{{-- ============================================================
     law-firms.blade.php (ENHANCED)
     Landing page for the Law Firms industry page.
     ============================================================ --}}

@extends('layouts.app')

@section('title', 'Law Firm Web Development — Corammers')
@section('meta_description', 'Premium law firm websites with AI-powered intake, secure consultation booking, authority-building design and high-converting CTAs.')

@push('styles')
<link rel="stylesheet" href="{{ asset_v('css/pages/industry-law.css') }}">
@endpush

@section('content')
@php
    $robot = '<img loading="lazy" decoding="async" class="robot-light" src="/assets/robo.webp" alt="Robot"><img loading="lazy" decoding="async" class="robot-dark" src="/assets/robo.webp" alt="Robot">';
@endphp
<div class="pw-law">

<section class="lf-section lf-section--dark lf-hero">
    <div class="lf-glow"></div>
    <div class="lf-container">
        <div class="lf-hero__pill-wrap">
            <span class="lf-pill"><span class="lf-pill__dot"></span> Premium Web Development Services</span>
        </div>

        <h1 class="lf-heading lf-hero__heading">
            Why We're the <span class="accent">#1</span> Web<br>
            Development Partner<br>
            <span class="accent">For Law Firms</span>
        </h1>

        <p class="lf-hero__subtext">
            Secure your firm's future with an AI &amp; IT supervised digital oasis, leveraging AI-powered intake and practices, compliance-ready design to secure high-value clients.
        </p>

        <div class="lf-hero__ctas">
            <a href="#book-consultation" class="lf-btn lf-btn--primary">Book Free Consultation</a>
            <a href="#features" class="lf-btn lf-btn--dark">See Our Features</a>
        </div>

        <div class="lf-hero__stats">
            <div class="lf-stat">
                <div class="lf-stat__num" data-target="1000">0</div>
                <div class="lf-stat__label">Projects Delivered</div>
            </div>
            <div class="lf-stat">
                <div class="lf-stat__num" data-target="98">0</div>
                <div class="lf-stat__label">Client Satisfaction</div>
            </div>
            <div class="lf-stat">
                <div class="lf-stat__num">24/7</div>
                <div class="lf-stat__label">Support Available</div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== SECTION 2 — GAME-CHANGER FEATURES ===================== --}}
<section class="lf-section lf-section--light" id="features">
    <div class="lf-container">
        <div class="label-row" style="justify-content:center; margin-bottom:24px;">
            <div style="display:flex; flex-direction:column; align-items:center; gap:10px;">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="section-divider" style="margin-bottom:0;"></div>
            </div>
            <div class="label-pill"><span class="label-dot"></span><span class="label-text">Core Features</span></div>
        </div>
        <h2 class="lf-heading">Game-Changer <span class="accent-plain" style="color:var(--primary);">Features</span></h2>
        <p class="lf-subtitle">Three revolutionary features that set you miles ahead of the competition</p>

        <div class="lf-cards-grid">
            {{-- Card 1 --}}
            <div class="lf-card">
                <div class="lf-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l7 17 2-7 7-2z"/></svg>
                </div>
                <span class="lf-card__title">Quick CTAs</span>
                <span class="lf-card__tag">&amp; Lead Generation Forms</span>
                <p class="lf-card__desc">To complement the flagship tool, these targeted elements capture leads at every stage of the decision-making process.</p>
                <span class="lf-card__list-label">What It Includes:</span>
                <ul class="lf-check-list lf-check-list--dots">
                    <li><span class="lf-dot"></span> Strategic CTA Placement: Contextual conversion points.</li>
                    <li><span class="lf-dot"></span> Smart, Multi-Tiered Forms: Step-by-step form completion.</li>
                    <li><span class="lf-dot"></span> Smart, Follow-up Triggers</li>
                </ul>
                <div class="lf-card__result">
                    <span class="lf-result-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.7 10.7l-4 4a.996.996 0 11-1.41-1.41L13.17 13H7c-.55 0-1-.45-1-1s.45-1 1-1h6.17l-1.88-1.88a.996.996 0 111.41-1.41l4 4c.39.39.39 1.03 0 1.41z"/></svg>
                    </span>
                    <p class="lf-card__desc"><strong>Result:</strong> A frictionless path to contact, capturing leads at various levels of readiness.</p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="lf-card">
                <div class="lf-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="8" width="16" height="12" rx="2"/><path d="M9 8V5a3 3 0 0 1 6 0v3"/><circle cx="9" cy="14" r="1"/><circle cx="15" cy="14" r="1"/></svg>
                </div>
                <span class="lf-card__title">Smart AI Chatbot</span>
                <span class="lf-card__tag">&amp; Automation System</span>
                <p class="lf-card__desc">Intelligent automation that works 24/7 to capture and nurture leads while you focus on running your business.</p>
                <span class="lf-card__list-label">What It Includes:</span>
                <ul class="lf-check-list lf-check-list--dots">
                    <li><span class="lf-dot"></span> 24/7 instant response to customer inquiries</li>
                    <li><span class="lf-dot"></span> Automated follow-up via Email/SMS/WhatsApp</li>
                    <li><span class="lf-dot"></span> Seamless CRM integration and lead tracking</li>
                </ul>
                <div class="lf-card__result">
                    <span class="lf-result-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.7 10.7l-4 4a.996.996 0 11-1.41-1.41L13.17 13H7c-.55 0-1-.45-1-1s.45-1 1-1h6.17l-1.88-1.88a.996.996 0 111.41-1.41l4 4c.39.39.39 1.03 0 1.41z"/></svg>
                    </span>
                    <p class="lf-card__desc"><strong>Result:</strong> Never a lead lost again with intelligent automation.</p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="lf-card">
                <div class="lf-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 3a9 9 0 0 0 0 18c1.5 0 2-1 2-2s-.5-1.5-.5-2 .5-1 1.5-1h1a4 4 0 0 0 4-4 8 8 0 0 0-8-9z"/></svg>
                </div>
                <span class="lf-card__title">Unique UI/UX Design</span>
                <span class="lf-card__tag">&amp; Clear case studies</span>
                <p class="lf-card__desc">While competitors rely on generic legal templates, our approach uses deliberate design and undeniable proof to build immediate professional trust.</p>
                <span class="lf-card__list-label">What It Includes:</span>
                <ul class="lf-check-list lf-check-list--dots">
                    <li><span class="lf-dot"></span> Unique UI/UX Design: The Silent Authority Builder</li>
                    <li><span class="lf-dot"></span> Clear Case Studies: The Proof in Practice</li>
                    <li><span class="lf-dot"></span> Multi-Format Presentation for Maximum Engagement</li>
                </ul>
                <div class="lf-card__result">
                    <span class="lf-result-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.7 10.7l-4 4a.996.996 0 11-1.41-1.41L13.17 13H7c-.55 0-1-.45-1-1s.45-1 1-1h6.17l-1.88-1.88a.996.996 0 111.41-1.41l4 4c.39.39.39 1.03 0 1.41z"/></svg>
                    </span>
                    <p class="lf-card__desc"><strong>Result:</strong> This powerful duo works in tandem to de-risk the decision to contact your firm.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== SECTION 3 — WHAT MOST LAW FIRMS ARE MISSING ===================== --}}
<section class="lf-section lf-section--dark2">
    <div class="lf-glow"></div>
    <div class="lf-container">
        <h2 class="lf-heading" style="color:var(--white);">What Most Law Firms<br>Are <span class="accent">Missing</span></h2>
        <p class="lf-subtitle" style="color:var(--white);">(Why Their Websites Fail to Convert)</p>

        <div class="lf-missing-grid">
            @php
                $missingItems = [
                    ['title' => 'Weak or Vague CTA Buttons', 'desc' => 'Visitors don\'t know the exact, secure next step'],
                    ['title' => 'Lack of Authority Signaling', 'desc' => 'Trust instantly collapses without accreditation'],
                    ['title' => 'Outdated, Slow Website Designs', 'desc' => 'Slow load times and poor mobile experience damages credibility'],
                    ['title' => 'Missing or Broken Credibility Links', 'desc' => 'Essential trust signals are missing or non-functional'],
                    ['title' => 'Zero Modern Visual Content', 'desc' => 'Failing to visually communicate the firm\'s professionalism'],
                    ['title' => 'No Secure Intake / Check System', 'desc' => 'Sending leads via standard email risks client security'],
                ];
            @endphp

            @foreach ($missingItems as $item)
                <div class="lf-missing-item">
                    <span class="lf-missing-item__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    </span>
                    <div>
                        <div class="lf-missing-item__title">{{ $item['title'] }}</div>
                        <div class="lf-missing-item__desc">{{ $item['desc'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="lf-highlight-box">
            <p class="lf-highlight-box__quote">Don't Let These Gaps Cost You Customers</p>
            <p class="lf-highlight-box__sub">We fix every single one of these issues and add premium features your competitors can't match.</p>
        </div>

        <div class="lf-cta-center">
            <a href="#book-consultation" class="lf-btn lf-btn--primary">Book Free Consultation</a>
        </div>
    </div>
</section>

{{-- ===================== SECTION 4 — WHAT WE DELIVER (CAROUSEL) ===================== --}}
<section class="lf-section lf-section--light">
    <div class="lf-container">
        <div class="label-row" style="justify-content:center; margin-bottom:24px;">
            <div style="display:flex; flex-direction:column; align-items:center; gap:10px;">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="section-divider" style="margin-bottom:0;"></div>
            </div>
            <div class="label-pill"><span class="label-dot"></span><span class="label-text">Our Services</span></div>
        </div>
        <h2 class="lf-heading">What We <span style="color:var(--primary);">Deliver</span></h2>
        <p class="lf-subtitle">Complete law firm business upgrade, redesigned for maximum impact</p>

        <div class="lf-deliver-carousel">
            <div class="lf-deliver-track">
                {{-- Card 1 --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">High-Converting CTA Strategy</span>
                    <span class="lf-deliver-card__subtitle">( Book Secure Consultation )</span>
                    <p class="lf-deliver-card__desc">Designed to guide potential clients securely and efficiently toward the next step.</p>
                    <ul class="lf-deliver-list">
                        <li>Professionally designed, compliant "Book Secure Consultation" buttons</li>
                        <li>Strategic placement for maximum clicks at points of high trust</li>
                        <li>Sticky header CTAs for instant scheduling access</li>
                    </ul>
                </div>

                {{-- Card 2 --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 3v6c0 5-3.5 8.5-8 9-4.5-.5-8-4-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">Fully Integrated Secure Consultation</span>
                    <span class="lf-deliver-card__subtitle">( Booking System )</span>
                    <p class="lf-deliver-card__desc">A professional, private booking experience with just a phone number.</p>
                    <ul class="lf-deliver-list">
                        <li>Calendar booking with sync with Google/Outlook</li>
                        <li>Automated reminders</li>
                        <li>Secure video conference (Zoom/Teams) integration</li>
                    </ul>
                </div>

                {{-- Card 3 --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 21h8M12 17v4M7 4h10v4a5 5 0 0 1-10 0V4z"/><path d="M17 5h3a2 2 0 0 1-2 4M7 5H4a2 2 0 0 0 2 4"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">Modern Authority-Building</span>
                    <span class="lf-deliver-card__subtitle">( Website Redesign )</span>
                    <p class="lf-deliver-card__desc">Perfect for firms that demand a high-end, sophisticated, and trustworthy online presence.</p>
                    <ul class="lf-deliver-list">
                        <li>Lightning-fast loading speeds essential for SEO</li>
                        <li>SEO structured Practice Area and Attorney Bio pages</li>
                        <li>Mobile-first optimization</li>
                    </ul>
                </div>

                {{-- Card 4 (Duplicate for seamless carousel) --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">High-Converting CTA Strategy</span>
                    <span class="lf-deliver-card__subtitle">( Book Secure Consultation )</span>
                    <p class="lf-deliver-card__desc">Designed to guide potential clients securely and efficiently toward the next step.</p>
                    <ul class="lf-deliver-list">
                        <li>Professionally designed, compliant "Book Secure Consultation" buttons</li>
                        <li>Strategic placement for maximum clicks at points of high trust</li>
                        <li>Sticky header CTAs for instant scheduling access</li>
                    </ul>
                </div>

                {{-- Card 5 (Duplicate for seamless carousel) --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 3v6c0 5-3.5 8.5-8 9-4.5-.5-8-4-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">Fully Integrated Secure Consultation</span>
                    <span class="lf-deliver-card__subtitle">( Booking System )</span>
                    <p class="lf-deliver-card__desc">A professional, private booking experience with just a phone number.</p>
                    <ul class="lf-deliver-list">
                        <li>Calendar booking with sync with Google/Outlook</li>
                        <li>Automated reminders</li>
                        <li>Secure video conference (Zoom/Teams) integration</li>
                    </ul>
                </div>

                {{-- Card 6 (Duplicate for seamless carousel) --}}
                <div class="lf-deliver-card">
                    <div class="lf-deliver-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 21h8M12 17v4M7 4h10v4a5 5 0 0 1-10 0V4z"/><path d="M17 5h3a2 2 0 0 1-2 4M7 5H4a2 2 0 0 0 2 4"/></svg>
                    </div>
                    <span class="lf-deliver-card__title">Modern Authority-Building</span>
                    <span class="lf-deliver-card__subtitle">( Website Redesign )</span>
                    <p class="lf-deliver-card__desc">Perfect for firms that demand a high-end, sophisticated, and trustworthy online presence.</p>
                    <ul class="lf-deliver-list">
                        <li>Lightning-fast loading speeds essential for SEO</li>
                        <li>SEO structured Practice Area and Attorney Bio pages</li>
                        <li>Mobile-first optimization</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="lf-carousel-dots">
            <span class="lf-dot-item active"></span>
            <span class="lf-dot-item"></span>
            <span class="lf-dot-item"></span>
            <span class="lf-dot-item"></span>
            <span class="lf-dot-item"></span>
            <span class="lf-dot-item"></span>
        </div>
    </div>
</section>

{{-- ===================== SECTION 5 — WHAT OUR CLIENTS SAY ===================== --}}
@php
    $testimonialFiles = \Illuminate\Support\Facades\File::files(public_path('assets/testimonial'));
    
    // The extracted YouTube video IDs for the testimonials
    $videoIds = [
        'dwi0vEG8x_E',
        'v7gtwhV13e0',
        'kd3RUBD4moY',
        'yllaoStcSAg',
        '8VLoUyJtX0M',
        'KH9YOKsxb_8',
        'nXpKtCLT_Ps',
        'nI0VDH11KgY',
        'q-sCHdu_90M',
    ];
    
    $testimonials = [];
    $i = 0;
    foreach ($testimonialFiles as $file) {
        if (in_array(strtolower($file->getExtension()), ['webp', 'png', 'jpg', 'jpeg'])) {
            $filename = $file->getFilename();
            
            // Get ID from list or default
            $vid = $videoIds[$i] ?? 'dQw4w9WgXcQ';
            
            $testimonials[] = [
                'image'   => '/assets/testimonial/' . $filename,
                'name'    => 'Client Review',
                'videoId' => $vid,
                'url'     => 'https://www.youtube.com/watch?v=' . $vid,
            ];
            
            $i++;
        }
    }


@endphp

{{-- ── Section ── --}}
<section class="ts-section">
    <div class="lf-glow"></div>
    <div class="ts-inner">
        {{-- Heading --}}
        <h2 class="lf-heading" style="color:var(--white);">What Our <span class="accent">Clients</span> Say</h2>
        <p class="lf-subtitle" style="margin-bottom: 48px;">Hear from law firm owners who transformed their online presence</p>

        {{-- 3 × 3 grid --}}
        <div class="ts-grid">
            @foreach($testimonials as $i => $t)
                <div
                    class="ts-card"
                    role="button"
                    tabindex="0"
                    aria-label="Watch testimonial: {{ $t['name'] }}"
                    data-video-id="{{ $t['videoId'] }}"
                    data-video-url="{{ $t['url'] }}"
                    data-channel-name="{{ $t['name'] }}"
                    onclick="tsOpenModal(this, event)"
                    onkeydown="if(event.key==='Enter'||event.key===' ')tsOpenModal(this, event)"
                >
                    {{-- Thumbnail --}}
                    <img
                        src="{{ $t['image'] }}"
                        alt="{{ $t['name'] }}"
                        loading="lazy"
                        decoding="async"
                        class="ts-img"
                    >

                    {{-- Play button overlay --}}
                    <div class="ts-overlay" aria-hidden="true">
                        <div class="ts-play-wrap" style="left:50%; top:50%;">
                            <div class="ts-play-btn">
                                <svg
                                    width="22"
                                    height="22"
                                    viewBox="0 0 24 24"
                                    fill="#000000"
                                    aria-hidden="true"
                                >
                                    <polygon points="6,3 20,12 6,21"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    {{-- /overlay --}}

                </div>
            @endforeach
        </div>
        {{-- /ts-grid --}}

        {{-- Testimonials CTA --}}
        <div class="lf-highlight-box" style="margin-top: 64px;">
            <p class="lf-highlight-box__quote">Join 500+ Satisfied Clients</p>
            <p class="lf-highlight-box__sub" style="color:var(--white);">Transform your law firms with a website that actually works for you</p>
        </div>

        <div class="lf-cta-center" style="margin-top: 32px;">
            <a href="#book-consultation" class="lf-btn lf-btn--primary">Book Free Consultation</a>
        </div>
    </div>
</section>

{{-- ── Video Modal ── --}}
<div class="ts-modal" id="tsModal" aria-hidden="true">
    <div class="ts-modal-backdrop" onclick="tsCloseModal()"></div>

    <div class="ts-modal-box" role="dialog" aria-modal="true" aria-labelledby="tsModalChannel">
        <button class="ts-modal-close" type="button" aria-label="Close video" onclick="tsCloseModal()">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
                <line x1="4" y1="4" x2="20" y2="20"/>
                <line x1="20" y1="4" x2="4" y2="20"/>
            </svg>
        </button>

        <div class="ts-modal-header">
            <span class="ts-modal-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="#FF0000" aria-hidden="true">
                    <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.3 3.6-6.3 3.6Z"/>
                </svg>
                <span id="tsModalChannel">Channel Name</span>
            </span>
            <a class="ts-modal-yt-link" id="tsModalYtLink" href="#" target="_blank" rel="noopener noreferrer">
                Watch on YouTube
            </a>
        </div>

        <div class="ts-modal-player" id="tsModalPlayer">
            {{-- iframe injected here via JS --}}
        </div>
    </div>
</div>

{{-- ── Scripts ── --}}
<script>
    /* ---------- Modal open / close ---------- */
    function tsOpenModal(card, event) {
        event.preventDefault();
        event.stopPropagation();

        var videoId  = card.getAttribute('data-video-id');
        var videoUrl = card.getAttribute('data-video-url');
        var channel  = card.getAttribute('data-channel-name');

        var modal    = document.getElementById('tsModal');
        var player   = document.getElementById('tsModalPlayer');
        var ytLink   = document.getElementById('tsModalYtLink');
        var chNameEl = document.getElementById('tsModalChannel');

        chNameEl.textContent = channel;
        ytLink.setAttribute('href', videoUrl);

        if (videoId) {
            player.innerHTML =
                '<div id="tsModalLoader" class="ts-modal-loader">' +
                    '<div class="ts-loader-spinner"></div>' +
                    '<div id="tsLoaderProgress" class="ts-loader-progress">0%</div>' +
                '</div>' +
                '<iframe ' +
                    'id="tsYoutubeIframe" ' +
                    'src="https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0&modestbranding=1" ' +
                    'title="' + channel + '" ' +
                    'frameborder="0" ' +
                    'style="opacity:0; transition: opacity 0.4s ease;" ' +
                    'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ' +
                    'allowfullscreen>' +
                '</iframe>';
                
            var iframe = document.getElementById('tsYoutubeIframe');
            var loader = document.getElementById('tsModalLoader');
            var progress = document.getElementById('tsLoaderProgress');
            
            var pct = 0;
            var interval = setInterval(function() {
                pct += Math.floor(Math.random() * 15) + 5;
                if (pct > 95) pct = 95;
                if (progress) progress.textContent = pct + '%';
            }, 100);

            iframe.onload = function() {
                clearInterval(interval);
                if (progress) progress.textContent = '100%';
                setTimeout(function() {
                    if (loader) {
                        loader.style.opacity = '0';
                        loader.style.transition = 'opacity 0.3s ease';
                        setTimeout(function() { loader.style.display = 'none'; }, 300);
                    }
                    iframe.style.opacity = '1';
                }, 200);
            };
        } else {
            // Fallback: no valid video ID found, just link out
            player.innerHTML = '<div class="ts-modal-fallback">Video unavailable. <a href="' + videoUrl + '" target="_blank" rel="noopener noreferrer">Open on YouTube</a></div>';
        }

        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function tsCloseModal() {
        var modal  = document.getElementById('tsModal');
        var player = document.getElementById('tsModalPlayer');

        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        player.innerHTML = ''; // stop playback
        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') tsCloseModal();
    });

    /* ---------- Magnetic play button ---------- */
    (function () {
        var cards = document.querySelectorAll('.ts-card');

        cards.forEach(function (card) {
            var wrap = card.querySelector('.ts-play-wrap');
            if (!wrap) return;

            var isHovering = false;
            var rafId = null;

            // Target positions (percentages)
            var targetX = 50;
            var targetY = 50;
            
            // Current positions (percentages)
            var currentX = 50;
            var currentY = 50;

            function updatePosition() {
                // Smooth interpolation (lerp)
                currentX += (targetX - currentX) * 0.15;
                currentY += (targetY - currentY) * 0.15;

                wrap.style.left = currentX + '%';
                wrap.style.top  = currentY + '%';

                if (isHovering || Math.abs(targetX - currentX) > 0.1 || Math.abs(targetY - currentY) > 0.1) {
                    rafId = requestAnimationFrame(updatePosition);
                } else {
                    rafId = null;
                }
            }

            card.addEventListener('mouseenter', function () {
                isHovering = true;
                if (!rafId) {
                    rafId = requestAnimationFrame(updatePosition);
                }
            });

            card.addEventListener('mousemove', function (e) {
                var rect = card.getBoundingClientRect();
                var x = ((e.clientX - rect.left) / rect.width) * 100;
                var y = ((e.clientY - rect.top) / rect.height) * 100;
                
                // Keep the button completely within the card bounds
                targetX = Math.max(15, Math.min(85, x));
                targetY = Math.max(15, Math.min(85, y));
            });

            card.addEventListener('mouseleave', function () {
                isHovering = false;
                targetX = 50;
                targetY = 50;
                if (!rafId) {
                    rafId = requestAnimationFrame(updatePosition);
                }
            });
        });
    })();
</script>

{{-- ===================== SECTION 6 — PROCESS ===================== --}}
<section class="lf-section lf-section--light lf-process-section">
    <div class="lf-container">
        <div class="label-row" style="justify-content:center; margin-bottom:24px;">
            <div style="display:flex; flex-direction:column; align-items:center; gap:10px;">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="section-divider" style="margin-bottom:0;"></div>
            </div>
            <div class="label-pill"><span class="label-dot"></span><span class="label-text">How We Work</span></div>
        </div>
        <h2 class="lf-heading">A Smooth, Transparent, and<br>
            <span style="color:var(--primary);">Collaborative Process</span>
        </h2>
        <p class="lf-subtitle">From start to launch</p>

        <div class="lf-process">
            <div class="lf-process__list">

                {{-- Step 1 --}}
                <div class="lf-step lf-step--1">
                    <div class="lf-step__icon">
                        {{-- Video / Zoom icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z"/>
                        </svg>
                    </div>
                    <div class="lf-step__card">
                        <div class="lf-step__num">1</div>
                        <div class="lf-step__body">
                            <div class="lf-step__title">Book a Free 30-Minute Zoom Meeting</div>
                            <div class="lf-step__desc">Tell us about your clinic, services, and website needs.</div>
                        </div>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="lf-step lf-step--2">
                    <div class="lf-step__icon">
                        {{-- Document / clipboard icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                             fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 1.5L18.5 9H13V3.5zM6 20V4h5v7h7v9H6z"/>
                        </svg>
                    </div>
                    <div class="lf-step__card">
                        <div class="lf-step__num">2</div>
                        <div class="lf-step__body">
                            <div class="lf-step__title">Final Quote &amp; Timeline</div>
                            <div class="lf-step__desc">We offer flexible payments so you can start the project with just 5% upfront.</div>
                        </div>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="lf-step lf-step--3">
                    <div class="lf-step__icon">
                        {{-- Rocket icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                             fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.5 2 5.5 4.5 4 7c-2 3.5-2 7.5 0 11l1.4-1.4C3.9 14.2 4 11.1 5.5 8.5 6.8 6.3 9.2 4 12 4s5.2 2.3 6.5 4.5c1.5 2.6 1.6 5.7.1 8.1L20 18c2-3.5 2-7.5 0-11-1.5-2.5-4.5-5-8-5zm0 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm-1 9.9V22h2v-6.1A6.02 6.02 0 0 1 12 16a5.97 5.97 0 0 1-1-.1z"/>
                        </svg>
                    </div>
                    <div class="lf-step__card">
                        <div class="lf-step__num">3</div>
                        <div class="lf-step__body">
                            <div class="lf-step__title">Complete Website Delivered</div>
                            <div class="lf-step__desc">We create the initial full website for your review.</div>
                        </div>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="lf-step lf-step--4">
                    <div class="lf-step__icon">
                        {{-- Headphone icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                             fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a9 9 0 0 0-9 9v5a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H4v-1a8 8 0 0 1 16 0v1h-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1a3 3 0 0 0 3-3v-5a9 9 0 0 0-9-9z"/>
                        </svg>
                    </div>
                    <div class="lf-step__card">
                        <div class="lf-step__num">4</div>
                        <div class="lf-step__body">
                            <div class="lf-step__title">30 Days of Free Priority Support</div>
                            <div class="lf-step__desc">Any issues? We fix them immediately, at no cost.</div>
                        </div>
                    </div>
                </div>

            </div>{{-- /.lf-process__list --}}

            <div class="lf-process__cta">
                <a href="#book-consultation" class="lf-btn lf-btn--primary">
                    Start Your Project with 5% Upfront →
                </a>
            </div>
            <p class="lf-process__note">No hidden fees. Transparent pricing. Flexible payment options.</p>
        </div>
    </div>
</section>

{{-- ===================== SECTION 7 — BOOK A FREE CONSULTATION ===================== --}}
<section class="lf-section lf-section--dark" id="book-consultation">
    <div class="lf-glow"></div>
    <div class="lf-container">
        <h2 class="lf-heading" style="color:var(--white);">Book a Free <span class="accent">Consultation</span></h2>
        <p class="lf-subtitle">Let's discuss how we can transform your law firm's website into a high-converting asset.</p>

        <div class="lf-book-grid">
            {{-- Left column --}}
            <div class="lf-book-left">
                {{-- Block 1: Main Expectations Card --}}
                <div class="lf-book-card">
                    <h3 class="lf-book-card__heading">What to Expect in Your Free Consultation:</h3>
                    <ul class="lf-book-list">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            In-depth analysis of your current website
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Custom strategy for your law firms
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Live demo of our exclusive features
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Transparent pricing and timeline discussion
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Answers to all your questions
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                            Solution to all your technical issues
                        </li>
                    </ul>
                </div>

                {{-- Block 2: 3 Icon Cards --}}
                <div class="lf-book-icons">
                    <div class="lf-icon-card">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:12px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <div class="lf-icon-card__title">30 Minutes</div>
                        <div class="lf-icon-card__sub">Quick &amp; Focused</div>
                    </div>
                    <div class="lf-icon-card">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:12px;"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                        <div class="lf-icon-card__title">Video Call</div>
                        <div class="lf-icon-card__sub">Via Zoom</div>
                    </div>
                    <div class="lf-icon-card">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:12px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <div class="lf-icon-card__title">Flexible</div>
                        <div class="lf-icon-card__sub">Your Schedule</div>
                    </div>
                </div>

                {{-- Block 3: Highlight Card --}}
                <div class="lf-book-highlight">
                    <h4 class="lf-book-highlight__heading">Limited Availability - Book Now!</h4>
                    <p class="lf-book-highlight__sub">We only take on 5 new projects per month to ensure exceptional quality and support.</p>
                </div>
            </div>

            {{-- Right column — Calendly widget in white card --}}
            <div class="lf-book-right">
                <div class="lf-white-card">
                    <div class="lf-white-card__header">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:16px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <h3 class="lf-calendar__heading" style="color:#111; margin-bottom:8px;">Schedule Your Free Call</h3>
                        <p class="lf-calendar__sub" style="color:#666; margin-bottom:24px;">Pick a time that works best for you</p>
                    </div>
                    
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

{{-- ===================== SECTION 8 — OUR CASE STUDIES ===================== --}}
<section class="lf-section lf-section--light">
    <div class="lf-container" style="max-width: 1600px; width: 95%;">
        <div class="label-row" style="justify-content:center; margin-bottom:24px;">
            <div style="display:flex; flex-direction:column; align-items:center; gap:10px;">
                <div class="robot-badge">{!! $robot !!}</div>
                <div class="section-divider" style="margin-bottom:0;"></div>
            </div>
            <div class="label-pill"><span class="label-dot"></span><span class="label-text">Our Work</span></div>
        </div>
        <h2 class="lf-heading">Our <span style="color:var(--text-dark);">Case</span> <span style="color:var(--primary);">Studies</span></h2>
        <p class="lf-subtitle">Real projects, real results. See the quality of work we deliver.</p>

        <div class="lf-case-grid custom-case-grid">
            @php
                $caseStudies = [
                    ['tag' => 'Law Firm', 'title' => 'Law Website Portfolio', 'desc' => "We refreshed the law firm's presence with verified accreditations and localized digital compliance.", 'img' => '/assets/industry/law/law1.webp', 'link' => 'https://law-website.corammerswork.com/'],
                    ['tag' => 'Legal Services', 'title' => 'WeCan Legal', 'desc' => 'Elevated WeCan\'s authority through authenticated credentials and integrated regulatory standards.', 'img' => '/assets/industry/law/law2.webp', 'link' => 'https://wecanlegal.ca/'],
                    ['tag' => 'Consulting', 'title' => 'Valuation Counsel', 'desc' => 'Fortified Valuation Counsel\'s credibility through verified certifications and streamlined legal disclosures.', 'img' => '/assets/industry/law/law3.webp', 'link' => 'https://valuationcounsel.law/'],
                    ['tag' => 'Law Firm', 'title' => 'Free Sample Pleading', 'desc' => 'Strengthened professional image through authenticated legal links and transparent policy integration.', 'img' => '/assets/industry/law/law4.webp', 'link' => 'https://freesamplepleading.com/'],
                ];
            @endphp

            @foreach ($caseStudies as $case)
                <a href="{{ $case['link'] }}" target="_blank" rel="noopener noreferrer" class="lf-case-card-new">
                    <div class="lf-case-card-new__img" style="background-image:url('{{ $case['img'] }}');">
                        <span class="lf-case-card__tag">{{ $case['tag'] }}</span>
                    </div>
                    <div class="lf-case-card-new__body">
                        <div class="lf-case-card-new__title">{{ $case['title'] }}</div>
                        <p class="lf-case-card-new__desc">{{ $case['desc'] }}</p>
                        <span class="lf-case-card-new__link">View Project
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D81D1F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>


</div>{{-- .pw-law --}}
@endsection

@push('scripts')
<style>
/* === Consultation Section Mobile Fixes === */
#book-consultation {
    overflow-x: hidden !important;
    width: 100% !important;
    max-width: 100vw !important;
    box-sizing: border-box;
}



@media (max-width: 992px) {
    #book-consultation {
        padding-top: 80px !important; /* Space for floating menu */
        padding-bottom: 48px !important;
    }

    #book-consultation .lf-container {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .lf-book-grid {
        display: flex !important;
        flex-direction: column !important;
        gap: 40px !important;
    }

    .lf-book-left, .lf-book-right {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        box-sizing: border-box !important;
    }

    .lf-book-right .calendly-inline-widget {
        min-width: 100% !important;
    }
}

/* === New Case Studies Horizontal Cards === */
.custom-case-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 32px;
    margin-top: 48px;
}

.lf-case-card-new {
    display: flex;
    flex-direction: row;
    background-color: #0d0d0d;
    border-radius: 16px;
    overflow: hidden;
    text-decoration: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid rgba(255,255,255,0.08);
}

.lf-case-card-new:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

.lf-case-card-new__img {
    width: 45%;
    position: relative;
    background-size: cover;
    background-position: center;
    min-height: 200px;
}

.lf-case-card-new__img::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.2);
}

.lf-case-card-new__body {
    width: 55%;
    padding: 24px 32px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.lf-case-card-new__title {
    color: #ffffff;
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 12px;
}

.lf-case-card-new__desc {
    color: #a0a0a0;
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 24px;
}

.lf-case-card-new__link {
    color: #ffffff;
    font-size: 0.9rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: auto;
    transition: opacity 0.3s ease;
}

.lf-case-card-new:hover .lf-case-card-new__link {
    opacity: 0.8;
}

@media (max-width: 992px) {
    .custom-case-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 600px) {
    .lf-case-card-new__img {
        width: 40%;
        min-height: 180px;
    }
    .lf-case-card-new__body {
        width: 60%;
        padding: 20px 16px;
    }
    .lf-case-card-new__title {
        font-size: 1.1rem;
        margin-bottom: 8px;
    }
    .lf-case-card-new__desc {
        font-size: 0.85rem;
        margin-bottom: 16px;
    }
}
</style>
<script>
// Counter animation for stats
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('[data-target]');
    
    counters.forEach(counter => {
        const target = parseInt(counter.dataset.target);
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current) + '+';
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + '+';
            }
        };
        
        
        updateCounter();
    });

    // Deliver Carousel step-by-step animation
    const deliverTrack = document.querySelector('.lf-deliver-track');
    const deliverDots = document.querySelectorAll('.lf-carousel-dots .lf-dot-item');
    
    if (deliverTrack && deliverDots.length > 0) {
        let currentDotIndex = 0;
        
        setInterval(() => {
            // Update active dot
            currentDotIndex = (currentDotIndex + 1) % deliverDots.length;
            deliverDots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentDotIndex);
            });

            // Calculate shift distance dynamically (1 card width + gap)
            const firstCard = deliverTrack.firstElementChild;
            if (!firstCard) return;
            
            // Getting computed style for exact gap if needed, or simply let CSS variables handle the exact transform
            // We can do this cleanly in CSS using the variables!
            deliverTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 1, 0.5, 1)';
            deliverTrack.style.transform = `translateX(calc(var(--base-offset) - var(--card-width) - var(--card-gap)))`;

            // After transition, append first card to end and reset transform back to base
            setTimeout(() => {
                deliverTrack.style.transition = 'none';
                deliverTrack.style.transform = `translateX(var(--base-offset))`;
                deliverTrack.appendChild(deliverTrack.firstElementChild);
            }, 600);
            
        }, 4000); // 4 seconds per slide
    }
});
</script>
@endpush