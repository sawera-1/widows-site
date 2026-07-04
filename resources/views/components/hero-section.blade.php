@php
$accent = '#d81d1f';
@endphp

<section class="hero-section " id="heroSection" style="--accent-color: {{ $accent }}; --cursor-color: {{ $accent }};">
    <div aria-hidden="true" class="hero-glow"></div>
    
    <h1 class="hero-headline" id="heroHeadline">
        <span class="hero-headline-line">The vision</span>
        <span class="hero-headline-line">of engineering</span>
        <span class="hero-headline-sub">
            <span class="hero-headline-dim">is</span>
            <span class="video-icon" style="width: clamp(48px, 10vw, 90px); height: clamp(48px, 10vw, 90px);">
                <video autoplay loop muted playsinline preload="auto">
                    <source src="{{ asset('assets/hero/header1.webm') }}" type="video/webm" />
                </video>
            </span>
            <span>human</span>
            <span class="hero-headline-dim hero-headline-plus">+</span>
            <span class="video-icon" style="width: clamp(48px, 10vw, 90px); height: clamp(48px, 10vw, 90px);">
                <video autoplay loop muted playsinline preload="auto">
                    <source src="{{ asset('assets/hero/header2.webm') }}" type="video/webm" />
                </video>
            </span>
            <span>AI</span>
        </span>
    </h1>

    <div class="hero-cards-stage" id="heroCardsStage">
        @php
            $heroImages = [
                ['src' => 'assets/hero/hero1.webm', 'alt' => 'XPortfolio Preview', 'delay' => '0.0s'],
                ['src' => 'assets/hero/hero2.webm', 'alt' => 'Space Voyage Preview', 'delay' => '0.1s'],
                ['src' => 'assets/hero/hero3.webm', 'alt' => 'Stellar AI Preview', 'delay' => '0.2s'],
                ['src' => 'assets/hero/hero4.webm', 'alt' => 'Vex Ventures Preview', 'delay' => '0.3s'],
                ['src' => 'assets/hero/hero5.webm', 'alt' => 'Project Demo', 'delay' => '0.4s'],
            ];
            $cardPos = [
                ['left' => 5, 'top' => 32, 'z' => 1, 'dragX' => '-120px', 'rotate' => -4, 'scale' => 0.95, 'rotateY' => -12],
                ['left' => 150, 'top' => 32, 'z' => 1, 'dragX' => '-60px', 'rotate' => -3, 'scale' => 1.0, 'rotateY' => 0],
                ['left' => 285, 'top' => 32, 'z' => 1, 'dragX' => '0px', 'rotate' => 1, 'scale' => 1.1, 'rotateY' => 0],
                ['left' => 420, 'top' => 32, 'z' => 1, 'dragX' => '60px', 'rotate' => 1, 'scale' => 1.0, 'rotateY' => -1],
                ['left' => 555, 'top' => 32, 'z' => 1, 'dragX' => '120px', 'rotate' => 5, 'scale' => 0.95, 'rotateY' => 8]
            ];
        @endphp

        @foreach($heroImages as $i => $img)
            <div class="hero-card-wrapper hero-card-{{ $i }}"
                style="--drag-x: {{ $cardPos[$i]['dragX'] }}; --card-rotate: {{ $cardPos[$i]['rotate'] }}deg; --card-scale: {{ $cardPos[$i]['scale'] }}; --card-rotate-y: {{ $cardPos[$i]['rotateY'] }}deg; --card-delay: {{ $img['delay'] }}; left: {{ $cardPos[$i]['left'] }}px; top: {{ $cardPos[$i]['top'] }}px; z-index: {{ $cardPos[$i]['z'] }}">
                <div class="hero-card-el">
                    <video autoplay loop muted playsinline preload="auto">
                        <source src="{{ asset($img['src']) }}" type="video/webm" />
                    </video>
                </div>
            </div>
        @endforeach
        <svg class="hero-scribble" viewBox="0 0 110 55" fill="none" aria-hidden="true">
            <path d="M8 42 Q20 8 40 28 Q58 46 72 18 Q86 -4 102 24" stroke="{{ $accent }}" stroke-width="3.5" stroke-linecap="round" fill="none" />
        </svg>
    </div>

    <p class="hero-desc">
        We help businesses grow with high-performance mobile apps, modern websites,<br />
        smart SEO strategies, and scalable email solutions.
    </p>

    <div class="hero-ctas">
        <a href="/contact" class="hero-btn hero-btn-primary">
            Contact Me
        </a>
        <a href="/portfolio" class="hero-btn hero-btn-secondary">
            Discover Our Work
        </a>
    </div>
</section>
