@extends('layouts.app')

@section('title', 'Choose Your Stable Door Style — uPVC & Composite Doors')
@section('meta_description', 'Browse 7 stable door models including Kelham, Kelham Grill, Normanton, Tuxford, Carburton, Newstead 1, and Newstead Solid. Customize sizes, colors, and hardware online.')

@push('styles')
<style>
    .wdc-container { width: 100%; max-width: 1280px; margin-inline: auto; padding-inline: 16px; }
    @media (min-width: 768px) { .wdc-container { padding-inline: 24px; } }
    .wdc-section { padding-block: 40px; }
    @media (min-width: 768px)  { .wdc-section { padding-block: 56px; } }

    .stable-grid-7 { display: grid; grid-template-columns: repeat(1, 1fr); gap: 18px; margin-bottom: 48px; }
    @media (min-width: 480px)  { .stable-grid-7 { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 768px)  { .stable-grid-7 { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 1024px) { .stable-grid-7 { grid-template-columns: repeat(7, 1fr); } }

    .wdc-card {
        display: flex; flex-direction: column;
        background: #fff; border: 1px solid #e5e5e5; border-radius: 3px;
        overflow: hidden; text-decoration: none; color: inherit;
        transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
    }
    .wdc-card:hover { border-color: #000; box-shadow: 0 6px 20px rgba(0,0,0,.10); transform: translateY(-2px); }
    [data-theme="dark"] .wdc-card { background: #111; border-color: #2a2a2a; }
    [data-theme="dark"] .wdc-card:hover { border-color: #fff; box-shadow: 0 6px 20px rgba(255,255,255,.06); }

    .wdc-door-wrap {
        width: 100%; height: 230px;
        display: flex; align-items: center; justify-content: center;
        background: #f8f8f8; padding: 14px; box-sizing: border-box;
        position: relative; overflow: hidden;
    }
    [data-theme="dark"] .wdc-door-wrap { background: #1a1a1a; }

    .wdc-card-body {
        padding: 12px 10px 14px; display: flex; flex-direction: column; gap: 4px;
        border-top: 1px solid #f0f0f0; flex: 1; text-align: center;
    }
    [data-theme="dark"] .wdc-card-body { border-color: #2a2a2a; }
    .wdc-card-name { font-size: 13px; font-weight: 800; color: #000; line-height: 1.2; }
    [data-theme="dark"] .wdc-card-name { color: #fff; }
    .wdc-card-desc { font-size: 11px; color: #64748b; line-height: 1.35; }
    [data-theme="dark"] .wdc-card-desc { color: #94a3b8; }

    .wdc-card-cta {
        display: inline-flex; align-items: center; justify-content: center; gap: 4px; font-size: 10px; font-weight: 700;
        letter-spacing: 1px; text-transform: uppercase; color: #737373; margin-top: auto;
        padding-top: 8px; border-top: 1px solid #f0f0f0; transition: color .2s;
    }
    .wdc-card:hover .wdc-card-cta { color: #000; }
    [data-theme="dark"] .wdc-card-cta { color: #555; border-color: #2a2a2a; }
    [data-theme="dark"] .wdc-card:hover .wdc-card-cta { color: #fff; }
</style>
@endpush

@section('content')

@php
$stableDoorModels = [
    ['key'=>'kelham',        'name'=>'Kelham',         'desc'=>'Large glazed top panel with vertical grooved lower sash.'],
    ['key'=>'kelham-grill',  'name'=>'Kelham Grill',   'desc'=>'Glazed top panel with Georgian grid bars and grooved lower sash.'],
    ['key'=>'normanton',     'name'=>'Normanton',      'desc'=>'Tall narrow vertical glass slit with vertical grooved sashes.'],
    ['key'=>'tuxford',       'name'=>'Tuxford',        'desc'=>'Diamond glass pane top center with vertical grooved sashes.'],
    ['key'=>'carburton',     'name'=>'Carburton',      'desc'=>'Solid composite stable door with full vertical tongue & groove detailing.'],
    ['key'=>'newstead-1',    'name'=>'Newstead 1',     'desc'=>'Inset vertical panel with central narrow glass slit and grooved lower sash.'],
    ['key'=>'newstead-solid','name'=>'Newstead Solid', 'desc'=>'Inset vertical panel top sash with grooved lower stable sash.'],
];
@endphp

<main id="content">
    <section class="w-full bg-white dark:bg-black wdc-section" aria-labelledby="wdc-heading">
        <div class="wdc-container">

            {{-- Page Heading --}}
            <div class="text-center mb-10 md:mb-14">
                <h1 id="wdc-heading" class="text-3xl md:text-4xl font-extrabold tracking-tight text-black dark:text-white mb-3" style="letter-spacing:-0.02em;">
                    Choose your Stable door style and get an instant price
                </h1>
                <p class="text-base text-gray-500 dark:text-gray-400 max-w-xl mx-auto leading-relaxed">
                    Select a stable door design below to configure sizes, frame colours, obscure glass, twin handles, and threshold options.
                </p>
            </div>

            {{-- 7 Stable Door Cards --}}
            <div class="stable-grid-7" role="list">
                @foreach($stableDoorModels as $door)
                    <a href="/doors/size?design={{ $door['key'] }}"
                       class="wdc-card"
                       role="listitem"
                       aria-label="Select {{ $door['name'] }} stable door style">

                        <div class="wdc-door-wrap">
                            @include('pages.doors.stabledoor-graphic', ['design' => $door['key']])
                        </div>

                        <div class="wdc-card-body">
                            <span class="wdc-card-name">{{ $door['name'] }}</span>
                            <span class="wdc-card-desc">{{ $door['desc'] }}</span>
                            <span class="wdc-card-cta">
                                Select Design &rarr;
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Bottom Return Link --}}
            <div class="text-center mt-8">
                <a href="/products" class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider rounded shadow transition-colors">
                    &hookleftarrow; Return to windows &amp; doors
                </a>
            </div>

        </div>
    </section>
</main>
@endsection
