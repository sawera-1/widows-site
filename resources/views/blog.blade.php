@extends('layouts.app')

@push('styles')
    @vite('resources/css/pages/blog.css')
@endpush

@section('content')
<div class="blog-page-wrapper">
    <section class="hero">
        <div class="slider-wrapper">
            @php
                $sliderImages = [
                    asset('assets/ind1.webp'),
                    asset('assets/ind2.webp'),
                    asset('assets/ind3.webp'),
                    asset('assets/ind4.webp'),
                    asset('assets/ind5.webp'),
                    asset('assets/ind6.webp'),
                    asset('assets/ind7.webp'),
                    asset('assets/ind8.webp'),
                ];
                $row1 = array_merge($sliderImages, $sliderImages);
                $row2 = array_merge($sliderImages, $sliderImages);
            @endphp
            <div class="slider-row slider-row--rtl">
                @foreach($row1 as $src)
                    <img src="{{ $src }}" alt="" class="slider-img" />
                @endforeach
            </div>
            <div class="slider-row slider-row--ltr">
                @foreach($row2 as $src)
                    <img src="{{ $src }}" alt="" class="slider-img" />
                @endforeach
            </div>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-text">
            <div class="hero-eyebrow-pill">
                <span class="hero-eyebrow-dot"></span>
                <span class="hero-eyebrow-text">Our Journal</span>
            </div>
            <h1 class="hero-title">BLOG</h1>
            <p class="hero-sub">Ideas &middot; Insights &middot; Inspiration</p>
        </div>
    </section>

    <main class="section-inner" id="blogMain">
        <div class="exp-label-row">
            <div style="display: flex; flex-direction: column; align-items: center;">
                <div class="exp-robot-badge">
                    <img src="{{ asset('assets/robo.png') }}" class="light-img" alt="Robot" style="width: 32px; height: 32px; object-fit: contain; display: block;" />
                    <img src="{{ asset('assets/robo.png') }}" class="dark-img" alt="Robot" style="width: 32px; height: 32px; object-fit: contain; display: none;" />
                </div>
            </div>
            <div class="exp-label-pill">
                <span class="exp-label-dot"></span>
                <span class="exp-label">Our Journal</span>
            </div>
        </div>
        <h2 class="section-title">Stories Worth <mark>Reading</mark></h2>

        <div class="blog-grid" id="blogGrid">
            @foreach($posts as $i => $post)
                <div class="blog-card" style="display: {{ $i < 6 ? 'block' : 'none' }};" data-index="{{ $i }}">
                    <div class="bc-img-wrap">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" loading="lazy" class="bc-img" />
                        <div class="bc-tag-wrap">
                            <span class="tag-badge tag-{{ strtolower($post['tag']) }}">
                                <span class="tag-dot"></span>
                                <span class="tag-text">{{ $post['tag'] }}</span>
                            </span>
                        </div>
                        <div class="bc-img-overlay"></div>
                    </div>
                    <div class="bc-content">
                        <div class="bc-hover-line"></div>
                        <span class="bc-date">{{ $post['date'] }}</span>
                        <h3 class="bc-title">{{ $post['title'] }}</h3>
                        <p class="bc-excerpt">{{ $post['excerpt'] }}</p>
                        <div class="bc-action">
                            <a href="/blog/detail?id={{ $post['id'] }}" class="lmc">
                                <div class="lmDefault">
                                    <span class="lmDefaultLabel">View</span>
                                    <span class="lmArrow"><span></span><span></span><span></span></span>
                                </div>
                                <div class="lmSplit">
                                    <button class="lmIconSq">
                                        <span class="lmArrow"><span></span><span></span><span></span></span>
                                    </button>
                                    <button class="lmTextSq">View</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="load-more-wrap">
            @if(count($posts) > 6)
                <button class="lmc" id="loadMoreBtn">
                    <div class="lmDefault">
                        <span class="lmDefaultLabel">Load More Posts</span>
                        <span class="lmArrow"><span></span><span></span><span></span></span>
                    </div>
                    <div class="lmSplit">
                        <div class="lmIconSq">
                            <span class="lmArrow"><span></span><span></span><span></span></span>
                            <div class="lmSpinner"></div>
                        </div>
                        <div class="lmTextSq">Load More Posts</div>
                    </div>
                </button>
            @endif
            <div id="allLoadedMsg" class="all-loaded-msg" style="display: none;">
                All Posts Loaded
            </div>
        </div>
    </main>
</div>
@endsection

@push('scripts')
    @vite('resources/js/pages/blog.js')
@endpush
