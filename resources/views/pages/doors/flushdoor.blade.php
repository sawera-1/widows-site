@extends('layouts.app')

@section('title', 'Choose Your Flush Door Style — uPVC Windows')
@section('meta_description', 'Browse 21 Flush double door designs. Customize dimensions, glazing, side panels, and frame colors for instant online quotes.')

@push('styles')
<style>
    .wdc-container { width: 100%; max-width: 1280px; margin-inline: auto; padding-inline: 16px; }
    @media (min-width: 768px) { .wdc-container { padding-inline: 24px; } }
    .wdc-section { padding-block: 40px; }
    @media (min-width: 768px)  { .wdc-section { padding-block: 56px; } }

    .flush-cat-title {
        font-size: 18px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em;
        color: #000; margin-bottom: 20px; padding-bottom: 8px; border-bottom: 2px solid #000;
    }
    [data-theme="dark"] .flush-cat-title { color: #fff; border-color: #fff; }

    .door-grid-5 { display: grid; grid-template-columns: repeat(1, 1fr); gap: 18px; margin-bottom: 48px; }
    @media (min-width: 480px)  { .door-grid-5 { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 768px)  { .door-grid-5 { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 1024px) { .door-grid-5 { grid-template-columns: repeat(5, 1fr); } }

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
        width: 100%; height: 210px;
        display: flex; align-items: center; justify-content: center;
        background: #f8f8f8; padding: 14px; box-sizing: border-box;
        position: relative; overflow: hidden;
    }
    [data-theme="dark"] .wdc-door-wrap { background: #1a1a1a; }

    .wdc-card-body {
        padding: 12px 14px 14px; display: flex; flex-direction: column; gap: 4px;
        border-top: 1px solid #f0f0f0; flex: 1; text-align: center;
    }
    [data-theme="dark"] .wdc-card-body { border-color: #2a2a2a; }
    .wdc-card-name { font-size: 13px; font-weight: 800; color: #000; line-height: 1.2; }
    [data-theme="dark"] .wdc-card-name { color: #fff; }
    .wdc-card-desc { font-size: 11px; color: #64748b; line-height: 1.4; }
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
$flushDoorCategories = [
    'Prehung Glazed Flush Doors' => [
        ['key'=>'prehung-door',           'name'=>'Prehung door',                  'desc'=>'Full height glazed double flush doors.'],
        ['key'=>'with-left-panel',        'name'=>'with left panel',               'desc'=>'Double flush doors with left side light.'],
        ['key'=>'with-right-panel',       'name'=>'with right panel',              'desc'=>'Double flush doors with right side light.'],
        ['key'=>'with-left-right-panels', 'name'=>'with left & right panels',      'desc'=>'Double flush doors with dual side lights.'],
        ['key'=>'with-side-openers',      'name'=>'with side panels & openers',    'desc'=>'Double flush doors with side lights & top opening vents.'],
    ],
    'Prehung Flush Doors with Top Light' => [
        ['key'=>'prehung-toplight',       'name'=>'Prehung door & top light',      'desc'=>'Full glazed double flush doors with overhead transom light.'],
        ['key'=>'left-panel-toplight',    'name'=>'with left panel & top light',   'desc'=>'Flush doors + left side light with continuous transom.'],
        ['key'=>'right-panel-toplight',   'name'=>'with right panel & top light',  'desc'=>'Flush doors + right side light with continuous transom.'],
        ['key'=>'left-right-toplight',    'name'=>'with left & right panels & top light', 'desc'=>'Full combination flush frame with side panels & top transom.'],
    ],
    'Mid-Rail Glazed Flush Doors' => [
        ['key'=>'prehung-midrail',        'name'=>'Prehung door (Mid-rail)',       'desc'=>'Double flush doors with horizontal mid-rail.'],
        ['key'=>'left-panel-midrail',     'name'=>'with left panel',               'desc'=>'Mid-rail double flush doors with left side light.'],
        ['key'=>'right-panel-midrail',    'name'=>'with right panel',              'desc'=>'Mid-rail double flush doors with right side light.'],
        ['key'=>'left-right-midrail',     'name'=>'with left & right panels',      'desc'=>'Mid-rail double flush doors with dual side lights.'],
        ['key'=>'side-openers-midrail',   'name'=>'with side panels & openers',    'desc'=>'Mid-rail double flush doors with side lights & top openers.'],
    ],
    'Mid-Rail Flush Doors with Top Light' => [
        ['key'=>'prehung-midrail-toplight', 'name'=>'Prehung door & top light',   'desc'=>'Mid-rail double flush doors with top transom light.'],
        ['key'=>'left-panel-midrail-toplight', 'name'=>'with left panel & top light', 'desc'=>'Mid-rail doors + left panel with top transom.'],
        ['key'=>'right-panel-midrail-toplight', 'name'=>'with right panel & top light', 'desc'=>'Mid-rail doors + right panel with top transom.'],
        ['key'=>'left-right-midrail-toplight', 'name'=>'with left & right panels & top light', 'desc'=>'Full mid-rail combination flush door with dual side panels & top transom.'],
    ],
    'Flush & Aluminium Doors' => [
        ['key'=>'flush-door-double',      'name'=>'Flush door',                    'desc'=>'Minimalist flush sash double doors.'],
        ['key'=>'flush-toplight',         'name'=>'Flush & top light',             'desc'=>'Flush double doors with top transom light.'],
        ['key'=>'aluminium-double',       'name'=>'Aluminium',                     'desc'=>'Architectural slimline aluminium double entrance doors.'],
    ],
];
@endphp

<main id="content">
    <section class="w-full bg-white dark:bg-black wdc-section">
        <div class="wdc-container">

            <div class="text-center mb-10 md:mb-14">
                <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-black dark:text-white mb-3" style="letter-spacing:-0.02em;">
                    Choose your Flush door style and get an instant price
                </h1>
                <p class="text-base text-gray-500 dark:text-gray-400 max-w-xl mx-auto leading-relaxed">
                    Select a Flush door configuration below to customize overall sizes, side lights, transom top lights, and hardware with instant pricing.
                </p>
            </div>

            @foreach($flushDoorCategories as $catTitle => $models)
                <div class="mb-12">
                    <h2 class="flush-cat-title">{{ $catTitle }}</h2>
                    <div class="door-grid-5">
                        @foreach($models as $door)
                            <a href="/doors/size?design={{ $door['key'] }}" class="wdc-card">
                                <div class="wdc-door-wrap">
                                    @include('pages.doors.flushdoor-graphic', ['design' => $door['key']])
                                </div>
                                <div class="wdc-card-body">
                                    <span class="wdc-card-name">{{ $door['name'] }}</span>
                                    <span class="wdc-card-desc">{{ $door['desc'] }}</span>
                                    <span class="wdc-card-cta">Select Design &rarr;</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="text-center mt-8">
                <a href="/products" class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider rounded shadow transition-colors">
                    &hookleftarrow; Return to windows &amp; doors
                </a>
            </div>

        </div>
    </section>
</main>
@endsection
