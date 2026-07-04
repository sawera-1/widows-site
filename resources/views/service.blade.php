@extends('layouts.app')

@section('title', 'Our Services — CORAMMERS')
@section('description', 'From data-driven social strategies to high-converting campaigns, we craft scalable, high-performance marketing machines that drive real ROI.')

@push('styles')
    @vite(['resources/css/pages/services.css'])
@endpush

@push('scripts')
    @vite(['resources/js/pages/services.js'])
@endpush

@section('content')
<div x-data="servicesPage()" x-init="init()" :data-theme="theme" class="svc-wrapper">

    {{-- ══════════════════════════════════════════
         NEW HERO SECTION
    ══════════════════════════════════════════ --}}
    <section class="svc-hero-section">
        <div class="svc-hero-inner">

            {{-- LEFT: Tickers 1 & 2 --}}
            <div class="svc-hero-ticker-group svc-left svc-ticker-left">
                <div class="svc-v-ticker-col" style="height:520px;">
                    <div class="svc-v-ticker-track svc-v-ticker-track-up" style="--spd:22s;">
                        @foreach(array_merge($techCol1, $techCol1) as $t)
                            <div class="svc-tech-card">
                                <div class="svc-tech-icon-wrap" style="background: {{ $t['bg'] }}; color: {{ $t['color'] }};">
                                    <x-tech-icon :name="$t['icon']" />
                                </div>
                                <div class="svc-tech-card-info">
                                    <span class="svc-tech-card-name">{{ $t['name'] }}</span>
                                    <span class="svc-tech-card-abbr">{{ $t['abbr'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="svc-v-ticker-col" style="height:520px;">
                    <div class="svc-v-ticker-track svc-v-ticker-track-down" style="--spd:26s;">
                        @foreach(array_merge($techCol2, $techCol2) as $t)
                            <div class="svc-tech-card">
                                <div class="svc-tech-icon-wrap" style="background: {{ $t['bg'] }}; color: {{ $t['color'] }};">
                                    <x-tech-icon :name="$t['icon']" />
                                </div>
                                <div class="svc-tech-card-info">
                                    <span class="svc-tech-card-name">{{ $t['name'] }}</span>
                                    <span class="svc-tech-card-abbr">{{ $t['abbr'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- MIDDLE: Content --}}
            <div class="svc-hero-content">
                <div class="svc-hero-label-block">
                    <div class="svc-process-label-row" style="align-items:flex-start;">
                        <div style="display:flex;flex-direction:column;align-items:center;">
                            <div class="svc-process-robot-badge">
                                <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                            </div>
                            <div class="svc-process-divider" style="margin:12px 0 0;width:48px;"></div>
                        </div>
                        <div class="svc-process-label-pill" style="margin-top:6px;">
                            <span class="svc-process-label-dot"></span>
                            <span class="svc-process-label-text">Our Services</span>
                        </div>
                    </div>
                    <h1 class="svc-hero-heading" style="text-align:center;margin-top:24px;margin-bottom:0;">
                        Our<br>
                        <span class="svc-accent">Services</span>
                    </h1>
                </div>

                <p class="svc-hero-desc">
                    From data-driven social strategies to high-converting campaign we craft scalable, high-performance marketing machines that drive real ROI.
                </p>

                <div class="svc-hero-cta-row">
                    <a href="{{ route('contact.index') }}" class="svc-btn-primary">
                        Contact Us
                    </a>
                </div>
            </div>

            {{-- RIGHT: Tickers 3 & 4 --}}
            <div class="svc-hero-ticker-group svc-right svc-ticker-right">
                <div class="svc-v-ticker-col" style="height:520px;">
                    <div class="svc-v-ticker-track svc-v-ticker-track-down" style="--spd:28s;">
                        @foreach(array_merge($techCol3, $techCol3) as $t)
                            <div class="svc-tech-card">
                                <div class="svc-tech-icon-wrap" style="background: {{ $t['bg'] }}; color: {{ $t['color'] }};">
                                    <x-tech-icon :name="$t['icon']" />
                                </div>
                                <div class="svc-tech-card-info">
                                    <span class="svc-tech-card-name">{{ $t['name'] }}</span>
                                    <span class="svc-tech-card-abbr">{{ $t['abbr'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="svc-v-ticker-col" style="height:520px;">
                    <div class="svc-v-ticker-track svc-v-ticker-track-up" style="--spd:34s;">
                        @foreach(array_merge($techCol4, $techCol4) as $t)
                            <div class="svc-tech-card">
                                <div class="svc-tech-icon-wrap" style="background: {{ $t['bg'] }}; color: {{ $t['color'] }};">
                                    <x-tech-icon :name="$t['icon']" />
                                </div>
                                <div class="svc-tech-card-info">
                                    <span class="svc-tech-card-name">{{ $t['name'] }}</span>
                                    <span class="svc-tech-card-abbr">{{ $t['abbr'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- end RIGHT --}}

        </div>
    </section>
    {{-- ══════════════════════ end new hero ══════════════════════ --}}


    {{-- ══════════════════════════════════════════
         SERVICES (shared component)
    ══════════════════════════════════════════ --}}
    <x-services-stack-section />

    {{-- ══════════════════════════════════════════
         HOW YOU GET OUR SERVICE / PROCESS
    ══════════════════════════════════════════ --}}
    <section class="svc-process-section">
        <div class="svc-section-inner">
            <div class="svc-section-header" style="display:flex;flex-direction:column;align-items:center;">
                <div style="display:flex;flex-direction:column;align-items:center;margin-bottom:24px;">
                    <div class="svc-process-label-row" style="align-items:flex-start;">
                        <div style="display:flex;flex-direction:column;align-items:center;">
                            <div class="svc-process-robot-badge">
                                <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" style="object-fit:contain;display:block;">
                            </div>
                            <div class="svc-process-divider" style="margin:12px 0 0;width:48px;"></div>
                        </div>
                        <div class="svc-process-label-pill" style="margin-top:6px;">
                            <span class="svc-process-label-dot"></span>
                            <span class="svc-process-label-text">Our Methodology</span>
                        </div>
                    </div>
                    <h2 class="svc-process-heading" :style="{ color: theme === 'dark' ? '#ffffff' : '#181818' }" style="text-align:center;margin-top:24px;margin-bottom:0;">How We Build Scalable Solutions</h2>
                </div>
                <p class="svc-process-sub" style="text-align:center;margin:0 auto;">A proven, structured process from initial discovery to flawless deployment, every phase is intentional and precise.</p>
            </div>

            <div class="svc-hwb-flow" x-ref="hwbFlow" x-init="observeHwbFlow($refs.hwbFlow)">
                <div class="svc-hwb-connector">
                    <div class="svc-hwb-connector-fill"></div>
                </div>
                @foreach($buildSteps as $i => $s)
                    <div class="svc-hwb-step" style="transition-delay: {{ $i * 0.14 }}s;">
                        <span class="svc-hwb-num-bg">{{ $s['num'] }}</span>
                        <div class="svc-hwb-icon-ring">
                            <x-step-icon :name="$s['icon']" />
                        </div>
                        <div class="svc-hwb-step-body">
                            <h3 class="svc-hwb-step-title">{{ $s['title'] }}</h3>
                            <p class="svc-hwb-step-desc">{{ $s['desc'] }}</p>
                            <span class="svc-hwb-step-tag">{{ $s['tag'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         TECH TICKER (shared component)
    ══════════════════════════════════════════ --}}
    <x-tech-ticker />

    {{-- ══════════════════════════════════════════
         STAFF AUGMENTATION (shared component)
    ══════════════════════════════════════════ --}}
    <x-staff-augmentation-section />

    {{-- ══════════════════════════════════════════
         FAQ (shared component)
    ══════════════════════════════════════════ --}}
    <x-faq-section />

    {{-- ══════════════════════════════════════════
         CONTACT BANNER (shared component)
    ══════════════════════════════════════════ --}}
    <x-contact-banner />

    {{-- ══════════════════════════════════════════
         CLIENT LOGO TICKER
    ══════════════════════════════════════════ --}}
    <x-client-ticker />

</div>
@endsection