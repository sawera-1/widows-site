@extends('layouts.app')

@section('title', 'Design Portfolio — CodeOaks')
@section('meta_description', 'Crafting intuitive digital experiences and meaningful brand identities — where aesthetics meets functionality.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/portfolio-design.css') }}">
@endpush

@php
    // ── DESIGN PROJECT DATA (ported verbatim from the Next.js page) ──
    $designProjects = [
        ['id' => 1,  'type' => 'uiux',        'image' => '/assets/project/uiux/1.webp'],
        ['id' => 2,  'type' => 'uiux',        'image' => '/assets/project/uiux/2.webp'],
        ['id' => 3,  'type' => 'uiux',        'image' => '/assets/project/uiux/3.webp'],
        ['id' => 4,  'type' => 'uiux',        'image' => '/assets/project/uiux/4.webp'],
        ['id' => 5,  'type' => 'uiux',        'image' => '/assets/project/uiux/5.webp'],
        ['id' => 6,  'type' => 'uiux',        'image' => '/assets/project/uiux/9.webp'],
        ['id' => 7,  'type' => 'logo',        'image' => '/assets/project/uiux/7.webp'],
        ['id' => 8,  'type' => 'logo',        'image' => '/assets/project/uiux/8.webp'],
        ['id' => 9,  'type' => 'logo',        'image' => '/assets/project/uiux/9.webp'],
        ['id' => 10, 'type' => 'ai-creative', 'image' => '/assets/project/aiDes/ai1.webp', 'url' => 'https://www.youtube.com/watch?v=e_cr04R6vrg&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt'],
        ['id' => 11, 'type' => 'ai-creative', 'image' => '/assets/project/aiDes/ai2.webp', 'url' => 'https://www.youtube.com/watch?v=y8wJJ6CyfvY&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=3'],
        ['id' => 12, 'type' => 'ai-creative', 'image' => '/assets/project/aiDes/ai3.webp', 'url' => 'https://www.youtube.com/watch?v=Bvt45L4Krtc&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=6'],
        ['id' => 13, 'type' => 'ai-creative', 'image' => '/assets/project/aiDes/ai4.webp', 'url' => 'https://www.youtube.com/watch?v=9Uv7a4YjrFU&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=2'],
        ['id' => 14, 'type' => 'ai-creative', 'image' => '/assets/project/aiDes/ai5.webp', 'url' => 'https://www.youtube.com/watch?v=d79Tf7NZ0Kg&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=4'],
        ['id' => 15, 'type' => 'ai-creative', 'image' => '/assets/project/aiDes/ai6.webp', 'url' => 'https://www.youtube.com/watch?v=HH-zJqaATaY&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=9'],
        ['id' => 16, 'type' => 'ai-creative', 'image' => '/assets/project/aiDes/ai7.webp', 'url' => 'https://www.youtube.com/watch?v=b3iuAslbR6w&list=PLPGkp4Y87woaZQGn0Do9TBhgNq06hgVQt&index=8'],
    ];

    $uiux = array_values(array_filter($designProjects, fn ($p) => $p['type'] === 'uiux'));
    $logo = array_values(array_filter($designProjects, fn ($p) => $p['type'] === 'logo'));
    $ai   = array_values(array_filter($designProjects, fn ($p) => $p['type'] === 'ai-creative'));

    $tickerItems = [
        ['label' => 'Web Development', 'icon' => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>'],
        ['label' => 'Mobile Apps',     'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>'],
        ['label' => 'UI/UX Design',    'icon' => '<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>'],
        ['label' => 'API Integration', 'icon' => '<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>'],
        ['label' => 'Performance',     'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>'],
        ['label' => 'Open Source',     'icon' => '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/>'],
    ];

    $tabs = [
        ['key' => 'uiux',        'label' => 'UI/UX'],
        ['key' => 'logo',        'label' => 'Logo'],
        ['key' => 'ai-creative', 'label' => 'AI Creative'],
    ];
@endphp

@section('content')
<div class="pw-portfolio-design">
    <div class="pf-wrapper pf-light" data-active-filter="uiux">

        {{-- ── HERO ── --}}
        <section class="pf-hero">
            <canvas class="pf-hero-canvas" data-sphere></canvas>
            <div class="pf-hero-content">
                <div class="pf-hero-badge">
                    <span class="pf-hero-badge-pulse"></span>
                    Available for Projects
                </div>
                <h1 class="pf-hero-title">
                    Designing<br><span>Portfolio</span>
                </h1>
                <p class="pf-hero-desc">
                    Crafting intuitive digital experiences and meaningful brand identities — where aesthetics meets functionality.
                </p>
            </div>
        </section>

        {{-- ── MAIN ── --}}
        <main class="pf-main">
            {{-- Selection Header --}}
            <section class="pf-section" style="padding-bottom:0">
                <div class="pf-inner">
                    <div style="margin-bottom:48px">
                        <div class="pf-label-row">
                            <div class="pf-robot-badge">
                                <img loading="lazy" decoding="async" class="robo-light" src="/assets/robolight.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block">
                                <img loading="lazy" decoding="async" class="robo-dark" src="/assets/robo.webp" alt="Robot" style="width:32px;height:32px;object-fit:contain;display:block">
                            </div>
                            <div class="pf-label-group">
                                <div class="pf-label-pill">
                                    <span class="pf-label-dot"></span>
                                    <span class="pf-label-text">Our Portfolio</span>
                                </div>
                            </div>
                        </div>
                        <div class="pf-section-divider"></div>
                        <h2 class="pf-section-heading">
                            Selection of <span style="color:var(--primary)">Our Work</span>
                        </h2>
                        <p class="pf-section-sub">
                            A diverse portfolio of high-performance solutions, crafted with precision and a passion for exceptional user experience.
                        </p>
                    </div>

                    <div style="display:flex;flex-direction:column;align-items:center;padding-bottom:24px">
                        {{-- Desktop Filter --}}
                        <div class="pf-segmented-control">
                            <span class="pf-segment-pill" data-pill></span>
                            @foreach ($tabs as $tab)
                                <button
                                    class="pf-segment-btn{{ $tab['key'] === 'uiux' ? ' pf-segment-active' : '' }}"
                                    data-filter="{{ $tab['key'] }}"
                                >{{ $tab['label'] }}</button>
                            @endforeach
                        </div>

                        {{-- Mobile Filter Dropdown --}}
                        <div class="pf-mobile-filter">
                            <div class="pf-dropdown-trigger" data-dropdown-trigger>
                                <div class="pf-dropdown-label-wrap">
                                    <span class="pf-dropdown-label">Show:</span>
                                    <span class="pf-dropdown-value" data-dropdown-value>UI/UX</span>
                                </div>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" data-dropdown-caret style="transition:transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);color:var(--primary)">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>

                            <div class="pf-dropdown-menu" data-dropdown-menu>
                                @foreach ($tabs as $tab)
                                    <button
                                        class="pf-dropdown-item{{ $tab['key'] === 'uiux' ? ' pf-active' : '' }}"
                                        data-filter="{{ $tab['key'] }}"
                                    >
                                        <span>{{ $tab['label'] }}</span>
                                        <svg class="pf-dropdown-check" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" style="{{ $tab['key'] === 'uiux' ? '' : 'display:none' }}">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ── DESIGN SECTION (category panels) ── --}}
            <section class="pf-section" style="background:var(--bg);padding-top:40px">
                <div class="pf-inner">
                    {{-- UI/UX panel --}}
                    <div class="proj-grid pf-panel pf-panel-active" data-panel="uiux">
                        @foreach ($uiux as $p)
                            <div class="pf-card">
                                <div class="pf-card-img-wrap">
                                    <img src="{{ $p['image'] }}" alt="Design Project" loading="lazy" class="pf-card-img">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Logo panel (2-col like the React inline style) --}}
                    <div class="proj-grid pf-panel" data-panel="logo" style="grid-template-columns:repeat(2, 1fr)">
                        @foreach ($logo as $p)
                            <div class="pf-card">
                                <div class="pf-card-img-wrap">
                                    <img src="{{ $p['image'] }}" alt="Design Project" loading="lazy" class="pf-card-img">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- AI Creative panel --}}
                    <div class="ai-grid pf-panel" data-panel="ai-creative">
                        @foreach ($ai as $p)
                            <a class="pf-ai-card" href="{{ $p['url'] }}" target="_blank" rel="noopener noreferrer">
                                <div class="pf-ai-card-img-wrap">
                                    <img src="{{ $p['image'] }}" alt="AI Project" loading="lazy" class="pf-ai-card-img">
                                    <span class="pf-ai-arrow">
                                        <span class="pf-ai-arrow-ring r1"></span>
                                        <span class="pf-ai-arrow-ring r2"></span>
                                        <span class="pf-ai-arrow-ring r3"></span>
                                        <span class="pf-ai-arrow-circle">
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                                        </span>
                                        <span class="pf-ai-arrow-label">View Project</span>
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    {{-- All items are rendered up-front, so the "load more" flow ends
                         immediately with the done state (matches "All Project Loaded"). --}}
                    <div class="pf-loadmore-wrap">
                        <div class="pf-loadmore-done">All Project Loaded</div>
                    </div>
                </div>
            </section>

            {{-- ── Ticker ── --}}
            <div class="pf-ticker">
                <div class="pf-ticker-track">
                    @for ($rep = 0; $rep < 4; $rep++)
                        <div style="display:flex;align-items:center">
                            @foreach ($tickerItems as $item)
                                <div class="pf-ticker-item">
                                    <span style="color:inherit;display:flex;opacity:0.9">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">{!! $item['icon'] !!}</svg>
                                    </span>
                                    {{ $item['label'] }}
                                </div>
                            @endforeach
                        </div>
                    @endfor
                </div>
            </div>
        </main>

    </div>
</div>
@endsection

@push('scripts')
<script>
(function () {
    var root = document.querySelector('.pw-portfolio-design');
    if (!root) return;

    var labels = { 'uiux': 'UI/UX', 'logo': 'Logo', 'ai-creative': 'AI Creative' };
    var panels = root.querySelectorAll('[data-panel]');
    var segBtns = root.querySelectorAll('.pf-segment-btn');
    var pill = root.querySelector('[data-pill]');
    var dropTrigger = root.querySelector('[data-dropdown-trigger]');
    var dropMenu = root.querySelector('[data-dropdown-menu]');
    var dropValue = root.querySelector('[data-dropdown-value]');
    var dropCaret = root.querySelector('[data-dropdown-caret]');
    var dropItems = root.querySelectorAll('.pf-dropdown-item');
    var wrapper = root.querySelector('.pf-wrapper');

    function movePill() {
        var active = root.querySelector('.pf-segment-btn.pf-segment-active');
        if (active && pill) {
            pill.style.left = active.offsetLeft + 'px';
            pill.style.width = active.offsetWidth + 'px';
        }
    }

    function setFilter(key) {
        panels.forEach(function (p) {
            p.classList.toggle('pf-panel-active', p.getAttribute('data-panel') === key);
        });
        segBtns.forEach(function (b) {
            b.classList.toggle('pf-segment-active', b.getAttribute('data-filter') === key);
        });
        dropItems.forEach(function (item) {
            var on = item.getAttribute('data-filter') === key;
            item.classList.toggle('pf-active', on);
            var check = item.querySelector('.pf-dropdown-check');
            if (check) check.style.display = on ? '' : 'none';
        });
        if (dropValue) dropValue.textContent = labels[key] || '';
        if (wrapper) wrapper.setAttribute('data-active-filter', key);
        movePill();
    }

    segBtns.forEach(function (b) {
        b.addEventListener('click', function () { setFilter(b.getAttribute('data-filter')); });
    });

    dropItems.forEach(function (item) {
        item.addEventListener('click', function () {
            setFilter(item.getAttribute('data-filter'));
            if (dropMenu) dropMenu.classList.remove('pf-open');
            if (dropCaret) dropCaret.style.transform = 'rotate(0)';
        });
    });

    if (dropTrigger) {
        dropTrigger.addEventListener('click', function () {
            var open = dropMenu.classList.toggle('pf-open');
            if (dropCaret) dropCaret.style.transform = open ? 'rotate(180deg)' : 'rotate(0)';
        });
    }

    window.addEventListener('resize', movePill);
    // Position the segmented pill once layout settles.
    movePill();
    setTimeout(movePill, 100);

    /* ── Hero sphere canvas (ported from useSphereCanvas) ── */
    var canvas = root.querySelector('[data-sphere]');
    if (canvas && canvas.getContext) {
        var ctx = canvas.getContext('2d');
        var W, H, cx, cy, R;
        var mouse = { x: -9999, y: -9999 };
        var accent = { r: 188, g: 234, b: 62 };

        function resize() {
            W = canvas.width = window.innerWidth;
            H = canvas.height = window.innerHeight;
            cx = W / 2; cy = H / 2;
            R = Math.min(W, H) * 0.38;
            if (R > 380) R = 380;
        }
        resize();

        function randInSphere() {
            while (true) {
                var x = Math.random() * 2 - 1, y = Math.random() * 2 - 1, z = Math.random() * 2 - 1;
                if (x * x + y * y + z * z <= 1) return [x, y, z];
            }
        }

        var COUNT = 900, bubbles = [];
        for (var i = 0; i < COUNT; i++) {
            var rr = randInSphere();
            bubbles.push({ x: rr[0], y: rr[1], z: rr[2], speed: 0.004 + Math.random() * 0.012, orbitAxis: Math.random() < 0.5 ? 'xz' : 'yz', phase: Math.random() * Math.PI * 2, r: 2.5 + Math.random() * 9, brightness: 0.03 + Math.random() * 0.16 });
        }

        var t = 0, rotY = 0, rotX = 0, rafId;
        var rotateY = function (x, z, a) { return [x * Math.cos(a) - z * Math.sin(a), x * Math.sin(a) + z * Math.cos(a)]; };
        var rotateX = function (y, z, a) { return [y * Math.cos(a) - z * Math.sin(a), y * Math.sin(a) + z * Math.cos(a)]; };

        function draw() {
            if (!W || !H) resize();
            if (!ctx || !W || !H) { rafId = requestAnimationFrame(draw); return; }

            ctx.clearRect(0, 0, W, H);
            var tRY = ((mouse.x - cx) / W) * 0.28;
            var tRX = ((mouse.y - cy) / H) * 0.18;
            rotY += (tRY - rotY) * 0.04;
            rotX += (tRX - rotX) * 0.04;

            ctx.beginPath(); ctx.arc(cx, cy, R, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(15, 15, 15, 0.95)'; ctx.fill();

            var ag = ctx.createRadialGradient(cx, cy, 0, cx, cy, R);
            ag.addColorStop(0, 'rgba(40,40,40,0.8)');
            ag.addColorStop(0.7, 'rgba(15,15,15,0.9)');
            ag.addColorStop(1, 'rgba(5,5,5,1)');
            ctx.beginPath(); ctx.arc(cx, cy, R, 0, Math.PI * 2);
            ctx.fillStyle = ag; ctx.fill();

            var projected = bubbles.map(function (b) {
                var x = b.x, y = b.y, z = b.z;
                var dt = t * b.speed + b.phase;
                if (b.orbitAxis === 'xz') { var r1 = rotateY(x, z, dt * 0.45); x = r1[0]; z = r1[1]; }
                else { var r2 = rotateX(y, z, dt * 0.45); y = r2[0]; z = r2[1]; }
                var r3 = rotateY(x, z, rotY); x = r3[0]; z = r3[1];
                var r4 = rotateX(y, z, rotX); y = r4[0]; z = r4[1];
                var r5 = rotateY(x, z, t * 0.003);
                var sx = r5[0], sz = r5[1];
                var scale = (sz + 1.15) / 2.15;
                return { px: cx + sx * R * 0.9, py: cy + y * R * 0.9, radius: b.r * Math.max(0.2, scale), z: sz, brightness: b.brightness, depth: Math.max(0.2, scale) };
            });
            projected.sort(function (a, b) { return a.z - b.z; });
            ctx.save();
            ctx.beginPath(); ctx.arc(cx, cy, R * 0.975, 0, Math.PI * 2); ctx.clip();
            projected.forEach(function (p) {
                if (p.radius < 0.5) return;
                var d = p.depth;
                var base = Math.floor(p.brightness * 22 + 5);
                var bg = ctx.createRadialGradient(p.px - p.radius * 0.2, p.py - p.radius * 0.25, 0, p.px, p.py, p.radius);
                bg.addColorStop(0, 'rgba(' + (base + 30) + ',' + (base + 30) + ',' + (base + 30) + ',' + (0.95 * d) + ')');
                bg.addColorStop(0.5, 'rgba(' + (base + 10) + ',' + (base + 10) + ',' + (base + 10) + ',' + (0.95 * d) + ')');
                bg.addColorStop(1, 'rgba(0,0,0,' + (0.98 * d) + ')');
                ctx.beginPath(); ctx.arc(p.px, p.py, p.radius, 0, Math.PI * 2);
                ctx.fillStyle = bg; ctx.fill();
                var isPrimary = p.brightness > 0.14;
                var sg = ctx.createRadialGradient(p.px - p.radius * 0.3, p.py - p.radius * 0.3, 0, p.px - p.radius * 0.3, p.py - p.radius * 0.3, p.radius * 0.48);
                if (isPrimary) {
                    sg.addColorStop(0, 'rgba(' + accent.r + ',' + accent.g + ',' + accent.b + ',' + (0.8 * d) + ')');
                    sg.addColorStop(0.4, 'rgba(' + accent.r + ',' + accent.g + ',' + accent.b + ',' + (0.2 * d) + ')');
                    sg.addColorStop(1, 'rgba(0,0,0,0)');
                } else {
                    sg.addColorStop(0, 'rgba(255,255,255,' + (0.7 * d) + ')');
                    sg.addColorStop(0.4, 'rgba(180,180,180,' + (0.3 * d) + ')');
                    sg.addColorStop(1, 'rgba(0,0,0,0)');
                }
                ctx.beginPath(); ctx.arc(p.px, p.py, p.radius, 0, Math.PI * 2);
                ctx.fillStyle = sg; ctx.fill();
            });
            ctx.restore();
            ctx.beginPath(); ctx.arc(cx, cy, R, 0, Math.PI * 2);
            ctx.strokeStyle = 'rgba(' + accent.r + ',' + accent.g + ',' + accent.b + ',0.35)';
            ctx.lineWidth = 2.5; ctx.stroke();
            t++; rafId = requestAnimationFrame(draw);
        }

        window.addEventListener('resize', resize);
        window.addEventListener('mousemove', function (e) { mouse.x = e.clientX; mouse.y = e.clientY; });
        draw();
    }
})();
</script>
@endpush
