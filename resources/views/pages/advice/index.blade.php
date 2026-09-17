@extends('layouts.app')

@section('title', 'Advice Centre — Modern UPVC Windows')
@section('meta_description', 'Expert guidance, installation tips, design inspiration, videos and downloads to help you choose and fit your windows and doors with confidence.')

@push('styles')
<style>
    /* ===== GLOBAL CONTAINER ===== */
    .ac-gc { width:100%; max-width:1280px; margin-inline:auto; padding-inline:20px; }
    @media(min-width:768px){ .ac-gc { padding-inline:24px; } }

    /* ===== HERO BANNER ===== */
    .ac-hero {
        position: relative;
        width: 100%;
        height: clamp(280px, 45vw, 450px);
        display: flex;
        align-items: center;
        justify-content: center;
        background: #000;
        overflow: hidden;
    }
    .ac-hero-bg {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: #050505;
    }
    .ac-hero-overlay {
        position: absolute; inset: 0; background: rgba(0,0,0,0.45);
    }
    .ac-hero-content {
        position: relative;
        z-index: 10;
        text-align: center;
        color: #fff;
        max-width: 800px;
        padding: 0 24px;
        box-sizing: border-box;
    }
    .ac-hero-title {
        font-size: clamp(2rem, 4vw + 0.5rem, 3.5rem);
        font-weight: 800;
        margin-bottom: 16px;
        line-height: 1.1;
        letter-spacing: -0.02em;
    }
    .ac-hero-subtitle {
        font-size: clamp(0.9375rem, 1vw + 0.25rem, 1.125rem);
        color: #fff;
        opacity: 0.9;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* ===== RESOURCES SECTION ===== */
    .ac-resources {
        padding: clamp(56px, 8vw, 96px) 0;
        background: #f9fafb;
    }
    .dark .ac-resources { background: #111; }
    .ac-resources-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
    }
    @media(min-width: 640px) { .ac-resources-grid { grid-template-columns: 1fr 1fr; } }
    @media(min-width: 1024px) { .ac-resources-grid { grid-template-columns: repeat(4, 1fr); } }

    .ac-resource-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        padding: 32px 24px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .dark .ac-resource-card { background: #000; border-color: #333; }
    .ac-resource-title {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .ac-resource-text {
        font-size: 0.95rem;
        color: #6b7280;
        line-height: 1.6;
        margin-bottom: 24px;
        flex-grow: 1;
    }
    .dark .ac-resource-text { color: #9ca3af; }
    .ac-resource-btn {
        display: inline-block;
        padding: 12px 24px;
        border: 1px solid #000;
        color: #000;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 1px;
        transition: all 0.2s;
    }
    .dark .ac-resource-btn { border-color: #fff; color: #fff; }
    .ac-resource-btn:hover { background: #000; color: #fff; }
    .dark .ac-resource-btn:hover { background: #fff; color: #000; }

    /* ===== MAIN CONTENT ===== */
    .ac-main {
        padding: clamp(32px, 4vw, 48px) 0 clamp(56px, 8vw, 96px) 0;
        background: #fff;
        color: #000;
    }
    .dark .ac-main { background: #000; color: #fff; }



    /* Featured Article */
    .ac-featured {
        display: grid;
        grid-template-columns: 1fr;
        gap: 32px;
        margin-bottom: clamp(48px, 6vw, 64px);
        border: 1px solid #e5e7eb;
        background: #f9fafb;
    }
    .dark .ac-featured { border-color: #333; background: #111; }
    @media(min-width: 900px) {
        .ac-featured { grid-template-columns: 1.2fr 1fr; gap: 0; }
    }
    .ac-featured-img {
        width: 100%;
        height: 100%;
        min-height: 300px;
        object-fit: cover;
    }
    .ac-featured-content {
        padding: clamp(32px, 5vw, 64px);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .ac-featured-cat {
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #6b7280;
        margin-bottom: 16px;
    }
    .dark .ac-featured-cat { color: #9ca3af; }
    .ac-featured-title {
        font-size: clamp(1.8rem, 3vw, 2.5rem);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 24px;
    }
    .ac-featured-excerpt {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 32px;
    }
    .dark .ac-featured-excerpt { color: #aaa; }
    
    .ac-btn-black {
        display: inline-block;
        padding: 16px 32px;
        background: #000;
        color: #fff;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background 0.2s;
        text-align: center;
        align-self: flex-start;
    }
    .ac-btn-black:hover { background: #333; }
    .dark .ac-btn-black { background: #fff; color: #000; }
    .dark .ac-btn-black:hover { background: #ccc; }

    /* Article Grid */
    .ac-section-title {
        font-size: 1.5rem;
        font-weight: 800;
        margin-bottom: 32px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .ac-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 32px;
        margin-bottom: 64px;
    }
    @media(min-width: 768px) { .ac-grid { grid-template-columns: 1fr 1fr; } }
    @media(min-width: 1024px) { .ac-grid { grid-template-columns: repeat(3, 1fr); } }

    /* Article Card */
    .ac-card {
        display: flex;
        flex-direction: column;
        border: 1px solid #e5e7eb;
        background: #fff;
        transition: border-color 0.2s, box-shadow 0.2s;
        height: 100%;
        overflow: hidden;
    }
    .dark .ac-card { background: #000; border-color: #333; }
    .ac-card:hover { border-color: #000; box-shadow: 0 4px 16px rgba(0,0,0,0.05); }
    .dark .ac-card:hover { border-color: #fff; }
    
    .ac-card-img-wrap {
        position: relative;
        width: 100%;
        padding-top: 66%; /* 3:2 Aspect Ratio */
        overflow: hidden;
        border-bottom: 1px solid #e5e7eb;
    }
    .dark .ac-card-img-wrap { border-color: #333; }
    .ac-card-img {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .ac-card:hover .ac-card-img { transform: scale(1.03); }

    .ac-card-body {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .ac-card-meta {
        display: flex;
        justify-content: space-between;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #6b7280;
        margin-bottom: 16px;
    }
    .ac-card-title {
        font-size: 1.25rem;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 12px;
        color: #000;
        transition: color 0.2s;
    }
    .dark .ac-card-title { color: #fff; }
    .ac-card-excerpt {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.5;
        margin-bottom: 24px;
        flex-grow: 1;
    }
    .dark .ac-card-excerpt { color: #aaa; }
    .ac-card-read {
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #000;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }
    .dark .ac-card-read { color: #fff; }
    .ac-card-read svg { width: 14px; height: 14px; transition: transform 0.2s; }
    .ac-card:hover .ac-card-read svg { transform: translateX(4px); }

    /* Pagination */
    .ac-pagination {
        display: flex;
        justify-content: center;
        gap: 8px;
    }
    .ac-pagination .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 40px;
        height: 40px;
        border: 1px solid #e5e7eb;
        background: #fff;
        color: #000;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s;
    }
    .dark .ac-pagination .page-link { background: #000; border-color: #333; color: #fff; }
    .ac-pagination .page-link:hover, .ac-pagination .page-link.active {
        background: #000; color: #fff; border-color: #000;
    }
    .dark .ac-pagination .page-link:hover, .dark .ac-pagination .page-link.active {
        background: #fff; color: #000; border-color: #fff;
    }
    .ac-pagination .page-link.disabled {
        opacity: 0.5; pointer-events: none;
    }
</style>
@endpush

@section('content')

{{-- 1. HERO --}}
<section class="ac-hero" aria-label="Advice Centre Hero">
    <div class="ac-hero-bg">
        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;">
            <div class="anim-composite">
                <!-- Animated Window -->
                <div class="anim-window">
                    <div class="anim-frame"></div>
                    <div class="anim-mullion-h"></div>
                    <div class="anim-top-glass">
                        <div class="glass-reflection"></div>
                    </div>
                    <div class="anim-sash anim-sash-left">
                        <div class="glass-reflection"></div>
                    </div>
                    <div class="anim-sash anim-sash-right">
                        <div class="glass-reflection"></div>
                    </div>
                </div>
                
                <!-- Animated Door -->
                <div class="anim-door">
                    <div class="anim-frame"></div>
                    <div class="anim-sash">
                        <div class="door-handle"></div>
                        <div class="door-mail-slot"></div>
                        <div class="glass-reflection"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ac-hero-overlay"></div>
    <div class="ac-hero-content">
        <h1 class="ac-hero-title">Advice Centre</h1>
        <p class="ac-hero-subtitle">Expert guidance, installation tips, design inspiration, videos and downloads to help you choose and fit your windows and doors with confidence.</p>
    </div>
</section>

{{-- 2. RESOURCES SECTION --}}
<section class="ac-resources">
    <div class="ac-gc">
        <div class="ac-resources-grid">
            @foreach($topArticles as $article)
            <div class="ac-resource-card">
                <h3 class="ac-resource-title">{{ $article->title }}</h3>
                <p class="ac-resource-text">{{ Str::limit($article->excerpt, 90) }}</p>
                <a href="{{ route('advice.show', $article->slug) }}" class="ac-resource-btn">Read Article</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 3. MAIN CONTENT --}}
<section class="ac-main">
    <div class="ac-gc">
        

        {{-- Featured Article --}}
        @if($featuredArticle && !request('q') && !request('category'))
            <div class="ac-featured">
                <img src="{{ asset($featuredArticle->featured_image ?? 'assets/about/window1.png') }}" alt="{{ $featuredArticle->title }}" class="ac-featured-img">
                <div class="ac-featured-content">
                    <h2 class="ac-featured-title">{{ $featuredArticle->title }}</h2>
                    <p class="ac-featured-excerpt">{{ $featuredArticle->excerpt }}</p>
                    <a href="{{ route('advice.show', $featuredArticle->slug) }}" class="ac-btn-black">Read Article</a>
                </div>
            </div>
        @endif

        {{-- Latest Articles Grid --}}
        <h2 class="ac-section-title">
            @if(request('q'))
                Search Results for "{{ request('q') }}"
            @elseif(request('category'))
                {{ $categories->where('slug', request('category'))->first()->name ?? 'Category' }} Articles
            @else
                Latest Articles
            @endif
        </h2>

        @if($articles->count() > 0)
            <div class="ac-grid">
                @foreach($articles as $article)
                    <a href="{{ route('advice.show', $article->slug) }}" class="ac-card">
                        <div class="ac-card-img-wrap">
                            <img src="{{ asset($article->featured_image ?? 'assets/about/window1.png') }}" alt="{{ $article->title }}" class="ac-card-img" loading="lazy">
                        </div>
                        <div class="ac-card-body">
                            <h3 class="ac-card-title">{{ $article->title }}</h3>
                            <p class="ac-card-excerpt">{{ Str::limit($article->excerpt, 120) }}</p>
                            <span class="ac-card-read">
                                Read Article
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>

        @else
            <p style="font-size: 1.1rem; color: #666; padding: 40px 0;">No articles found matching your criteria.</p>
        @endif

    </div>
</section>

@endsection
