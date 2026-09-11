@extends('layouts.app')

@section('title', 'Window & Door Info — Modern UPVC Windows')
@section('meta_description', 'Browse our full range of premium uPVC windows and doors. Click any product to learn more, see options and get a price.')

@push('styles')
<style>
    /* ── Container ── */
    .info-gc { width: 100%; max-width: 1280px; margin-inline: auto; padding-inline: 20px; }
    @media(min-width: 768px) { .info-gc { padding-inline: 24px; } }

    /* ── Hero ── */
    .info-hero {
        position: relative;
        width: 100%;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #000;
        overflow: hidden;
    }
    .info-hero__bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.38;
    }
    .info-hero__content {
        position: relative;
        z-index: 10;
        text-align: center;
        color: #fff;
        max-width: 800px;
        padding: 0 20px;
    }
    .info-hero__title {
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        font-weight: 800;
        margin-bottom: 20px;
        line-height: 1.1;
    }
    .info-hero__sub {
        font-size: clamp(1.05rem, 2vw, 1.25rem);
        color: #ccc;
        line-height: 1.65;
        max-width: 600px;
        margin-inline: auto;
    }

    /* ── Section chrome ── */
    .info-section {
        padding: clamp(56px, 8vw, 96px) 20px;
    }
    .info-section-header {
        text-align: center;
        margin-bottom: clamp(40px, 5vw, 64px);
    }
    .wi-section__eyebrow {
        display: block;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #666;
        margin-bottom: 12px;
    }
    .dark .wi-section__eyebrow { color: #a3a3a3; }
    .info-section-header h2 {
        font-size: clamp(1.9rem, 3.5vw, 2.75rem);
        font-weight: 700;
        line-height: 1.15;
        margin-bottom: 16px;
    }
    .info-section-header p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #555;
        max-width: 560px;
        margin-inline: auto;
    }
    .dark .info-section-header p { color: #aaa; }

    /* ── Product grid ── */
    .info-products-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
    }
    @media(min-width: 640px)  { .info-products-grid { grid-template-columns: repeat(2, 1fr); } }
    @media(min-width: 1024px) { .info-products-grid { grid-template-columns: repeat(4, 1fr); } }

    /* ── Product card ── */
    .info-product-card {
        display: flex;
        flex-direction: column;
        background: #fff;
        border: 1px solid #e5e5e5;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        transition: border-color 0.3s, box-shadow 0.3s;
    }
    .dark .info-product-card { background: #111; border-color: #333; }
    .info-product-card:hover { border-color: #000; box-shadow: 0 4px 16px rgba(0,0,0,0.1); }
    .dark .info-product-card:hover { border-color: #fff; box-shadow: none; }

    /* image swap on hover */
    .info-card__img {
        position: relative;
        width: 100%;
        aspect-ratio: 4 / 3;
        overflow: hidden;
        background: #f5f5f5;
    }
    .dark .info-card__img { background: #1a1a1a; }
    .info-card__img img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: opacity 0.4s ease;
    }
    .info-card__img .img-primary { opacity: 1; z-index: 1; }
    .info-card__img .img-hover   { opacity: 0; z-index: 2; }
    .info-product-card:hover .img-primary { opacity: 0; }
    .info-product-card:hover .img-hover   { opacity: 1; }

    /* body */
    .info-card__body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex: 1;
        border-top: 1px solid #f0f0f0;
    }
    .dark .info-card__body { border-color: #333; }
    .info-card__name {
        font-size: 15px;
        font-weight: 700;
        color: #000;
        margin-bottom: auto;
        padding-bottom: 16px;
    }
    .dark .info-card__name { color: #fff; }
    .info-card__cta {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #000;
        border-top: 1px solid #f0f0f0;
        padding-top: 16px;
        transition: color 0.3s;
    }
    .dark .info-card__cta { color: #fff; border-color: #333; }
    .info-product-card:hover .info-card__cta { color: #555; }
    .dark .info-product-card:hover .info-card__cta { color: #ccc; }
    .info-card__cta svg {
        width: 15px;
        height: 15px;
        transition: transform 0.3s;
    }
    .info-product-card:hover .info-card__cta svg { transform: translateX(4px); }
</style>
@endpush

@section('content')

{{-- 1. HERO --}}
<section class="info-hero">
    <img src="{{ asset('assets/products/5.1.jpg') }}" alt="Window & Door Information" class="info-hero__bg">
    <div class="info-hero__content">
        <h1 class="info-hero__title">Window & Door Info</h1>
        <p class="info-hero__sub">Browse our full range of premium uPVC windows and doors. Click any product to explore options, learn more and get an instant price.</p>
    </div>
</section>

{{-- 2. PRODUCT GRID --}}
@php
    $infoProducts = [
        [
            'name' => 'Standard Windows',
            'slug' => 'standard-casement',
            'type' => 'windows',
            'img1' => '1.1.jpg',
            'img2' => '1.2.jpg',
        ],
        [
            'name' => 'French Windows',
            'slug' => 'french-windows',
            'type' => 'windows',
            'img1' => '2.1.jpg',
            'img2' => '2.2.jpg',
        ],
        [
            'name' => 'Tilt & Turn Windows',
            'slug' => 'tilt-and-turn-windows',
            'type' => 'windows',
            'img1' => '3.1.jpg',
            'img2' => '3.2.jpg',
        ],
        [
            'name' => 'Flush Windows',
            'slug' => 'flush-windows',
            'type' => 'windows',
            'img1' => '4.1.jpg',
            'img2' => '4.2.jpg',
        ],
        [
            'name' => 'Sash Windows',
            'slug' => 'sash-windows',
            'type' => 'windows',
            'img1' => '5.1.jpg',
            'img2' => '5.2.jpg',
        ],
        [
            'name' => 'PVC Doors',
            'slug' => 'pvc-doors',
            'type' => 'doors',
            'img1' => 'door1.1.jpg',
            'img2' => 'door1.2.jpg',
        ],
        [
            'name' => 'Flush Doors',
            'slug' => 'flush-doors',
            'type' => 'doors',
            'img1' => 'door2.1.jpg',
            'img2' => 'door2.2.jpg',
        ],
        [
            'name' => 'French Doors',
            'slug' => 'french-doors',
            'type' => 'doors',
            'img1' => 'door3.1.jpg',
            'img2' => 'door3.2.jpg',
        ],
    ];
@endphp

<section class="info-section bg-white dark:bg-black text-black dark:text-white">
    <div class="info-gc">

        <div class="info-section-header">
            <span class="wi-section__eyebrow">Our Products</span>
            <h2>Windows & Doors</h2>
            <p>Browse our range of premium uPVC windows and doors. Click a product to find out more.</p>
        </div>

        <div class="info-products-grid">
            @foreach($infoProducts as $product)
                <a href="/{{ $product['type'] }}/information"
                   class="info-product-card"
                   aria-label="{{ $product['name'] }}">

                    {{-- Image area with hover swap --}}
                    <div class="info-card__img">
                        <img class="img-primary"
                             src="{{ asset('assets/products/' . $product['img1']) }}"
                             alt="{{ $product['name'] }}"
                             loading="lazy">
                        <img class="img-hover"
                             src="{{ asset('assets/products/' . $product['img2']) }}"
                             alt="{{ $product['name'] }} — alternate view"
                             loading="lazy">
                    </div>

                    {{-- Card body --}}
                    <div class="info-card__body">
                        <span class="info-card__name">{{ $product['name'] }}</span>
                        <span class="info-card__cta">
                            Find Out More
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </div>

                </a>
            @endforeach
        </div>

    </div>
</section>

@endsection
