@extends('layouts.app')

@section('title', e($post['title']) . ' — Corammers Blog')
@section('description', e($post['excerpt']))

@push('styles')
    @vite('resources/css/pages/blog-detail.css')
@endpush

@section('content')
<div class="bd-page-wrapper">

    {{-- ── HERO ── --}}
    <section class="bd-hero"
        style="background-image: linear-gradient(rgba(0,0,0,0.78), rgba(0,0,0,0.78)), url('{{ $post['image'] }}');">

        {{-- Decorative BG --}}
        <div class="bd-hero-decorations" aria-hidden="true">
            <div class="d-ring d-ring-1"></div>
            <div class="d-ring d-ring-2"></div>
            <div class="d-ring d-ring-3"></div>
            <div class="d-line d-line-1"></div>
            <div class="d-line d-line-2"></div>
            <div class="d-line d-line-3"></div>
            <div class="d-icon d-icon-code">
                <svg width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                <span class="d-icon-label">Code</span>
            </div>
            <div class="d-icon d-icon-grid">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
                <span class="d-icon-label">Layout</span>
            </div>
            <div class="d-icon d-icon-layers">
                <svg width="58" height="58" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                <span class="d-icon-label">Layers</span>
            </div>
            <div class="d-icon d-icon-zap">
                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                <span class="d-icon-label">Speed</span>
            </div>
            <div class="d-dot-grid d-dot-left"></div>
            <div class="d-dot-grid d-dot-right"></div>
            <div class="d-blob d-blob-1"></div>
            <div class="d-blob d-blob-2"></div>
        </div>

        <div class="bd-hero-overlay"></div>

        <div class="bd-hero-text">
            <div class="bd-hero-pill">
                <span class="bd-hero-pill-dot"></span>
                <span class="bd-hero-pill-label">{{ $post['tag'] }} &nbsp;·&nbsp; {{ $post['readTime'] }}</span>
            </div>
            <h1 class="bd-hero-title">{{ $post['title'] }}</h1>
            @if($post['excerpt'])
                <p class="bd-hero-intro">{{ $post['excerpt'] }}</p>
            @endif
        </div>
    </section>

    {{-- ── MAIN 65/35 LAYOUT ── --}}
    <div class="bd-page-body">

        {{-- LEFT: BLOG CONTENT --}}
        <main class="bd-main bd-reveal">

            {{-- Label Row --}}
            <div class="bd-label-row">
                <div class="bd-robot-col">
                    <div class="bd-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:none;" />
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;" />
                    </div>
                    <div class="bd-divider-line"></div>
                </div>
                <div class="bd-category-pill">
                    <span class="bd-category-dot"></span>
                    <span class="bd-category-label">{{ $post['tag'] }}</span>
                </div>
            </div>

            @if($post['date'])
                <p class="bd-date">{{ $post['date'] }}</p>
            @endif

            <h2 class="bd-blog-title">{{ $post['title'] }}</h2>
            @if($post['excerpt'])
                <p class="bd-blog-intro">{{ $post['excerpt'] }}</p>
            @endif

            {{-- Featured Image --}}
            <div class="bd-featured-img bd-reveal" style="--delay:0.05s">
                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}"
                    width="1200" height="420"
                    loading="eager"
                    style="width:100%;height:420px;object-fit:cover;display:block;" />
            </div>

            {{-- Article Sections --}}
            @foreach($post['sections'] as $i => $section)
                <div class="bd-section bd-reveal" style="--delay:{{ $i * 0.06 }}s">
                    <h3 class="bd-section-heading">{{ $section['heading'] }}</h3>
                    <p class="bd-section-para">{{ $section['body'] }}</p>
                </div>
                @if(!$loop->last)
                    <hr class="bd-divider" />
                @endif
            @endforeach

        </main>

        {{-- RIGHT: STICKY SIDEBAR --}}
        <aside class="bd-sidebar bd-reveal" style="--delay:0.1s">

            {{-- Calendly Card --}}
            <div class="bd-form-card">
                <div class="bd-form-card-banner">
                    <div class="bd-form-card-banner-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    </div>
                    <div class="bd-form-card-banner-text">
                        <div class="bd-form-card-sup">Book a Call</div>
                        <div class="bd-form-card-title">Schedule a Meeting</div>
                    </div>
                </div>
                <div class="bd-calendly-wrap">
                    <div class="calendly-inline-widget"
                        data-url="https://calendly.com/mshayantariq/schedule-a-meeting?hide_event_type_details=1&hide_gdpr_banner=1"
                        style="min-width:320px;height:700px;width:100%;">
                    </div>
                </div>
            </div>

        </aside>
    </div>

    {{-- ── FAQ SECTION ── --}}
    <section class="bd-faq-section">
        <div class="bd-faq-header bd-reveal">
            <div class="bd-label-row">
                <div class="bd-robot-col">
                    <div class="bd-robot-badge">
                        <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:none;" />
                        <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;" />
                    </div>
                    <div class="bd-divider-line"></div>
                </div>
                <div class="bd-category-pill">
                    <span class="bd-category-dot"></span>
                    <span class="bd-category-label">Questions &rarr; Answers</span>
                </div>
            </div>
            <p class="bd-faq-eyebrow">Have Questions?</p>
            <h2 class="bd-faq-title">Frequently Asked <mark>Questions</mark></h2>
        </div>

        <div class="bd-faq-list">
            @foreach($faqs as $i => $faq)
                <div class="bd-faq-item bd-reveal" style="--delay:{{ $i * 0.05 }}s">
                    <button class="bd-faq-trigger" aria-expanded="false">
                        <span class="bd-faq-q">{{ $faq['q'] }}</span>
                        <span class="bd-faq-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="bd-faq-body">
                        <div class="bd-faq-body-inner">
                            <p>{{ $faq['a'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection

@push('scripts')
    {{-- Calendly (defer loading until after page paint) --}}
    <script>
        window.addEventListener('load', function () {
            var s = document.createElement('script');
            s.src = 'https://assets.calendly.com/assets/external/widget.js';
            s.async = true;
            document.head.appendChild(s);
        });
    </script>
    @vite('resources/js/pages/blog-detail.js')
@endpush
