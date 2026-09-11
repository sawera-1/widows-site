@extends('layouts.app')

@section('title', 'Choose Your Flush Window Style — uPVC Windows')
@section('meta_description', 'Browse all available Flush uPVC window frame designs. Select a style to design, price and order online.')

@push('styles')
<style>
    /* ── Container ───────────────────────────────────────── */
    .wdc-container { width: 100%; max-width: 1280px; margin-inline: auto; padding-inline: 16px; }
    @media (min-width: 768px) { .wdc-container { padding-inline: 24px; } }

    /* ── Section spacing ─────────────────────────────────── */
    .wdc-section { padding-block: 40px; }
    @media (min-width: 768px)  { .wdc-section { padding-block: 56px; } }
    @media (min-width: 1024px) { .wdc-section { padding-block: 72px; } }

    /* ── Grid ────────────────────────────────────────────── */
    .wdc-grid { display: grid; grid-template-columns: 1fr; gap: 20px; }
    @media (min-width: 540px)  { .wdc-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 1024px) { .wdc-grid { grid-template-columns: repeat(4, 1fr); } }

    /* ── Card ────────────────────────────────────────────── */
    .wdc-card {
        display: flex; flex-direction: column;
        background: #fff; border: 1px solid #e5e5e5; border-radius: 3px;
        overflow: hidden; text-decoration: none; color: inherit;
        transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
    }
    .wdc-card:hover { border-color: #000; box-shadow: 0 6px 20px rgba(0,0,0,.10); transform: translateY(-2px); }
    [data-theme="dark"] .wdc-card { background: #111; border-color: #2a2a2a; }
    [data-theme="dark"] .wdc-card:hover { border-color: #fff; box-shadow: 0 6px 20px rgba(255,255,255,.06); }

    /* ── Window preview area ─── */
    .wdc-window-wrap {
        width: 100%; height: 200px;
        display: flex; align-items: center; justify-content: center;
        background: #f8f8f8; padding: 22px; box-sizing: border-box;
    }
    @media (min-width: 768px) { .wdc-window-wrap { height: 220px; } }
    [data-theme="dark"] .wdc-window-wrap { background: #1a1a1a; }

    /* ── HTML/CSS FLUSH WINDOW COMPONENT ──────────────────── */
    .upvc-window {
        --frame: #737373;
        --frame-dark: #4b4b4b;
        --mullion: #8a8a8a;
        --glass-a: #eef2f5;
        --glass-b: #d7e1e8;

        position: relative;
        width: 100%;
        max-width: 220px;
        aspect-ratio: 4 / 3;
        display: grid;
        grid-template-columns: var(--upvc-cols);
        grid-template-rows: var(--upvc-rows);
        gap: 4px;
        background: var(--mullion);
        border: 7px solid var(--frame);
        border-radius: 1px;
        padding: 4px;
        box-sizing: border-box;
        box-shadow: inset 0 0 0 1px var(--frame-dark);
        transition: border-color .2s ease;
    }
    .wdc-card:hover .upvc-window { --frame: #000; --frame-dark: #000; }
    [data-theme="dark"] .upvc-window { --frame: #9a9a9a; --frame-dark: #666; --mullion: #555; --glass-a: #2b2f33; --glass-b: #1c2024; }
    [data-theme="dark"] .wdc-card:hover .upvc-window { --frame: #fff; --frame-dark: #fff; }

    .upvc-pane {
        background: linear-gradient(135deg, var(--glass-a) 0%, var(--glass-b) 100%);
        box-shadow: inset 0 0 0 1px rgba(0,0,0,.08);
        border: 1px solid rgba(0,0,0,0.12);
        min-width: 0; min-height: 0;
    }

    /* Wide (multi-light) windows read better a bit shorter */
    .upvc-window.is-wide { max-width: 100%; aspect-ratio: 16 / 9; }

    /* ── Card body ───────────────────────────────────────── */
    .wdc-card-body {
        padding: 16px 20px 20px; display: flex; flex-direction: column; gap: 8px;
        border-top: 1px solid #f0f0f0; flex: 1;
    }
    [data-theme="dark"] .wdc-card-body { border-color: #2a2a2a; }
    .wdc-card-name { font-size: 14px; font-weight: 700; color: #000; line-height: 1.3; letter-spacing: .01em; }
    [data-theme="dark"] .wdc-card-name { color: #fff; }
    .wdc-card-cta {
        display: inline-flex; align-items: center; gap: 5px; font-size: 11px; font-weight: 700;
        letter-spacing: 1.2px; text-transform: uppercase; color: #737373; margin-top: auto;
        padding-top: 8px; border-top: 1px solid #f0f0f0; transition: color .2s;
    }
    .wdc-card:hover .wdc-card-cta { color: #000; }
    .wdc-card-cta svg { width: 13px; height: 13px; transition: transform .2s; flex-shrink: 0; }
    .wdc-card:hover .wdc-card-cta svg { transform: translateX(3px); }
    [data-theme="dark"] .wdc-card-cta { color: #555; border-color: #2a2a2a; }
    [data-theme="dark"] .wdc-card:hover .wdc-card-cta { color: #fff; }
</style>
@endpush

@section('content')

@php
$windowFrames = [
    [
        'name' => 'Flush Standard Casement',
        'desc' => 'Flush sash single-pane casement frame',
        'url'  => '/windows/size?design=standard-casement&style=flush',
        'cols' => [1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Flush Two Light',
        'desc' => 'Flush sash side-by-side dual window',
        'url'  => '/windows/size?design=two-light&style=flush',
        'cols' => [1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Flush French Casement',
        'desc' => 'Flush twin-sash French opening style',
        'url'  => '/windows/size?design=french&style=flush',
        'cols' => [1,1.15], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Flush Two Light, Top Light',
        'desc' => 'Flush dual sash with full-width fanlight',
        'url'  => '/windows/size?design=two-light-top&style=flush',
        'cols' => [1,1], 'rows' => [0.35,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Flush Three Light',
        'desc' => 'Flush triple-sash window opening',
        'url'  => '/windows/size?design=three-light&style=flush',
        'cols' => [1,1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Flush Three Light, Top Light',
        'desc' => 'Flush triple sash with top fanlight row',
        'url'  => '/windows/size?design=three-light-top&style=flush',
        'cols' => [1,1,1], 'rows' => [0.35,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Flush Horizontal Split',
        'desc' => 'Flush single sash divided into upper and lower lights',
        'url'  => '/windows/size?design=horizontal-split&style=flush',
        'cols' => [1], 'rows' => [1,1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]] ],
    ],
    [
        'name' => 'Flush Four Pane Grid',
        'desc' => 'Flush even 2×2 glazing bar arrangement',
        'url'  => '/windows/size?design=four-pane-grid&style=flush',
        'cols' => [1,1], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Flush Six Pane Grid',
        'desc' => 'Flush even 3×2 glazing bar arrangement',
        'url'  => '/windows/size?design=six-pane-grid&style=flush',
        'cols' => [1,1,1], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Flush Wide Sash + Sidelight',
        'desc' => 'Flush full-height light beside two stacked lights',
        'url'  => '/windows/size?design=wide-stacked-sidelight&style=flush',
        'cols' => [1.3,1], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,3]],
            ['c'=>[2,3],'r'=>[1,2]], ['c'=>[2,3],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Flush Narrow Bookend Lights',
        'desc' => 'Flush centre lights flanked by split sidelights',
        'url'  => '/windows/size?design=narrow-bookend&style=flush',
        'cols' => [0.55,1,1,0.55], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]],
            ['c'=>[2,3],'r'=>[1,3]], ['c'=>[3,4],'r'=>[1,3]],
            ['c'=>[4,5],'r'=>[1,2]], ['c'=>[4,5],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Flush Georgian Three Light',
        'desc' => 'Flush decorative narrow centre bar for classic look',
        'url'  => '/windows/size?design=georgian-three-light&style=flush',
        'cols' => [1,0.5,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Flush Wide Four Light',
        'desc' => 'Flush four equal sashes across wide opening',
        'url'  => '/windows/size?design=wide-four-light&style=flush',
        'wide' => true,
        'cols' => [1,1,1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]], ['c'=>[4,5],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Flush Wide Five Light',
        'desc' => 'Flush five equal sashes for large openings',
        'url'  => '/windows/size?design=wide-five-light&style=flush',
        'wide' => true,
        'cols' => [1,1,1,1,1], 'rows' => [1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[4,5],'r'=>[1,2]], ['c'=>[5,6],'r'=>[1,2]],
        ],
    ],
    [
        'name' => 'Flush Lantern / Roof Light',
        'desc' => 'Flush overhead glazed lantern-style row',
        'url'  => '/windows/size?design=lantern&style=flush',
        'wide' => true,
        'cols' => [1], 'rows' => [1,1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]] ],
    ],
    [
        'name' => 'Flush Bay Window Set',
        'desc' => 'Flush three-panel angled bay projection',
        'url'  => '/windows/size?design=bay&style=flush',
        'wide' => true,
        'cols' => [1,1.3,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Flush Six Light, Top Light',
        'desc' => 'Flush three-over-three sashes with fanlight row',
        'url'  => '/windows/size?design=six-light-top&style=flush',
        'wide' => true,
        'cols' => [1,1,1], 'rows' => [0.4,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Flush Tilt & Turn',
        'desc' => 'Flush versatile inward-opening tilt & turn',
        'url'  => '/windows/size?design=tilt-and-turn&style=flush',
        'cols' => [1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]] ],
    ],
];
@endphp

<main id="content">
    <section class="w-full bg-white dark:bg-black wdc-section" aria-labelledby="wdc-heading">
        <div class="wdc-container">

            {{-- Section heading --}}
            <div class="text-center mb-10 md:mb-14">
                <h1 id="wdc-heading" class="text-3xl md:text-4xl font-extrabold tracking-tight text-black dark:text-white mb-3" style="letter-spacing:-0.02em;">
                    Choose your Flush window style and get an instant price
                </h1>
                <p class="text-base text-gray-500 dark:text-gray-400 max-w-lg mx-auto leading-relaxed">
                    Select a flush window frame style below to customize your dimensions, frame colors, handles, and glazing.
                </p>
            </div>

            {{-- Frame grid --}}
            <div class="wdc-grid" role="list">
                @foreach($windowFrames as $frame)
                    <a href="{{ $frame['url'] }}"
                       class="wdc-card"
                       role="listitem"
                       aria-label="Select {{ $frame['name'] }} window design">

                        <div class="wdc-window-wrap">
                            @php
                                $colsCss = implode(' ', array_map(fn($c) => $c.'fr', $frame['cols']));
                                $rowsCss = implode(' ', array_map(fn($r) => $r.'fr', $frame['rows']));
                                $isWide  = $frame['wide'] ?? false;
                            @endphp
                            <div class="upvc-window {{ $isWide ? 'is-wide' : '' }}"
                                 style="--upvc-cols:{{ $colsCss }};--upvc-rows:{{ $rowsCss }};"
                                 role="img"
                                 aria-label="{{ $frame['name'] }} window frame configuration">
                                @foreach($frame['cells'] as $cell)
                                    <div class="upvc-pane"
                                         style="grid-column:{{ $cell['c'][0] }}/{{ $cell['c'][1] }};grid-row:{{ $cell['r'][0] }}/{{ $cell['r'][1] }};"></div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Card body --}}
                        <div class="wdc-card-body">
                            <span class="wdc-card-name">{{ $frame['name'] }}</span>
                            <span class="text-xs text-gray-400 dark:text-gray-600 leading-relaxed">{{ $frame['desc'] }}</span>
                            <span class="wdc-card-cta">
                                Select Design
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </span>
                        </div>

                    </a>
                @endforeach
            </div>

            {{-- Bottom note --}}
            <p class="text-center text-xs text-gray-400 dark:text-gray-600 mt-12 tracking-wide">
                Need help choosing the right Flush window design?
                <a href="/contact" class="underline text-black dark:text-white hover:no-underline ml-1">Contact our team</a> — we're happy to help.
            </p>

        </div>
    </section>
</main>

@endsection