@extends('layouts.app')

@section('title', 'Blog — CodeOaks')
@section('meta_description', 'Ideas, insights and inspiration from the CodeOaks journal.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/blog.css') }}">
@endpush

@section('content')
<div class="pw-blog">

    {{-- ── HERO ── --}}
    <section class="hero">
        <div class="slider-wrapper">
            @php
                $sliderImages = ['/assets/ind1.webp','/assets/ind2.webp','/assets/ind3.webp','/assets/ind4.webp','/assets/ind5.webp','/assets/ind6.webp','/assets/ind7.webp','/assets/ind8.webp'];
                $row = array_merge($sliderImages, $sliderImages);
            @endphp
            <div class="slider-row slider-row--rtl">
                @foreach($row as $src)
                    <img loading="lazy" decoding="async" src="{{ $src }}" alt="" class="slider-img">
                @endforeach
            </div>
            <div class="slider-row slider-row--ltr">
                @foreach($row as $src)
                    <img loading="lazy" decoding="async" src="{{ $src }}" alt="" class="slider-img">
                @endforeach
            </div>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-text">
            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                <span class="hero-badge-text">Our Journal</span>
            </div>
            <h1 class="hero-title">BLOG</h1>
            <p class="hero-sub">Ideas · Insights · Inspiration</p>
        </div>
    </section>

    {{-- ── SECTION ── --}}
    <main class="section-inner">
        <div class="sec-eyebrow-row">
            <div class="sec-robot-col">
                <div class="sec-robot-badge">
                    <img loading="lazy" decoding="async" src="/assets/robolight.webp" alt="Robot" class="pw-robot-light">
                    <img loading="lazy" decoding="async" src="/assets/robo.webp" alt="Robot" class="pw-robot-dark">
                </div>
                <div class="sec-robot-divider"></div>
            </div>
            <div class="sec-pill">
                <span class="sec-pill-dot"></span>
                <span class="sec-pill-text">Our Journal</span>
            </div>
        </div>

        <h2 class="section-title">Stories Worth <mark>Reading</mark></h2>

        <div class="blog-grid">
            @foreach(config('site.posts') as $i => $post)
                @php
                    $tag = $post['tag'];
                    $tagClass = in_array($tag, ['Design','Branding','Typography'], true) ? 'tag-'.$tag : 'tag-default';
                @endphp
                <article class="blog-card"@if($i >= 6) hidden data-extra="1"@endif>
                    <div class="blog-card-media">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" loading="lazy">
                        <div class="blog-card-badge">
                            <span class="tag-badge {{ $tagClass }}">
                                <span class="tag-badge-dot"></span>
                                <span class="tag-badge-text">{{ $tag }}</span>
                            </span>
                        </div>
                        <div class="blog-card-fade"></div>
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-card-date">{{ $post['date'] }}</span>
                        <h3 class="blog-card-title">{{ $post['title'] }}</h3>
                        <p class="blog-card-excerpt">{{ $post['excerpt'] }}</p>
                        <div class="blog-card-cta">
                            <a href="/blog/detail">
                                <span class="split-btn" style="width:130px">
                                    <span class="split-btn-default">
                                        <span class="split-btn-label">View</span>
                                        <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                                    </span>
                                    <span class="split-btn-row">
                                        <span class="split-btn-icon">
                                            <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                                        </span>
                                        <span class="split-btn-text">View</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="blog-loadmore">
            <button type="button" class="split-btn" style="width:240px" id="blogLoadMore">
                <span class="split-btn-default">
                    <span class="split-btn-label">Load More Posts</span>
                    <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                </span>
                <span class="split-btn-row">
                    <span class="split-btn-icon">
                        <span class="dots-arrow"><span class="d1"></span><span class="d2"></span><span class="d3"></span></span>
                    </span>
                    <span class="split-btn-text">Load More Posts</span>
                </span>
            </button>
            <div class="blog-done" id="blogDone" style="display:none">All Posts Loaded</div>
        </div>
    </main>

</div>
@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('.pw-blog');
    if (!root) return;

    // Toggle robot icon based on active theme (light vs dark image).
    function syncRobot() {
        var dark = document.documentElement.getAttribute('data-theme') === 'dark';
        var light = root.querySelector('.pw-robot-light');
        var darkImg = root.querySelector('.pw-robot-dark');
        if (light) light.style.display = dark ? 'none' : 'block';
        if (darkImg) darkImg.style.display = dark ? 'block' : 'none';
    }
    syncRobot();
    new MutationObserver(syncRobot).observe(document.documentElement, { attributes: true, attributeFilter: ['data-theme'] });

    // Load More: reveal hidden posts, one batch (6) at a time.
    var btn = root.querySelector('#blogLoadMore');
    var done = root.querySelector('#blogDone');
    var BATCH = 6;
    if (btn) {
        btn.addEventListener('click', function () {
            var hidden = root.querySelectorAll('.blog-card[hidden]');
            for (var i = 0; i < BATCH && i < hidden.length; i++) {
                hidden[i].removeAttribute('hidden');
            }
            if (root.querySelectorAll('.blog-card[hidden]').length === 0) {
                btn.style.display = 'none';
                if (done) done.style.display = 'inline-flex';
            }
        });
    }
})();
</script>
@endpush
