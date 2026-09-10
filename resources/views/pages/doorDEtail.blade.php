@extends('layouts.app')

@section('title', 'Windows & Doors Information — Quality, Technology & Guarantees | Modern UPVC Windows')
@section('meta_description', 'Discover what makes our windows and doors exceptional — energy efficiency, PAS24 security, Heritage 2800 profiles, Pilkington glass technology, comprehensive guarantees and precision manufacturing.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/information.css') }}">
@endpush

@section('content')
<div class="wi-page">

{{-- ═══════════════════════════════════════════════════════════════════════════
     HERO SECTION
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-hero" aria-label="Windows and Doors Information">
    <img src="{{ asset('assets/products/1.1.jpg') }}" alt="Premium UPVC Windows" class="wi-hero__bg" loading="eager">
    <div class="wi-hero__overlay" aria-hidden="true"></div>
    <div class="wi-hero__inner">
        <span class="wi-hero__eyebrow">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="14" height="14"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Windows &amp; Doors
        </span>
        <h1 class="wi-hero__title">What makes our windows &amp; doors <em>special</em></h1>
        <p class="wi-hero__sub">We manufacture our windows and doors in our own factory, giving us the freedom to create high-quality products tailored to your exact requirements.</p>
        <div class="wi-hero__features">
            <span class="wi-hero__feat"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Energy Efficiency</span>
            <span class="wi-hero__feat"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Advanced Security</span>
            <span class="wi-hero__feat"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Quality Materials</span>
            <span class="wi-hero__feat"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Bespoke Designs</span>
            <span class="wi-hero__feat"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Modern Manufacturing</span>
            <span class="wi-hero__feat"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Long-Term Durability</span>
        </div>
        <a href="/windows" class="wi-hero__cta">
            Explore Our Designs
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════════════════
     WINDOWS SECTION
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-section">
    <div class="wi-container">
        <div class="wi-section__header">
            <span class="wi-section__eyebrow">Our Products</span>
            <h2 class="wi-section__title">Windows</h2>
            <p class="wi-section__desc">Premium uPVC windows manufactured to your exact specification right here in our own factory.</p>
        </div>

        <div class="wi-grid wi-grid--2">

            {{-- S1: Window Designs --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:16/9;">
                    <img src="{{ asset('assets/about/window1.png') }}" alt="Window Designs" loading="lazy">
                </div>
                <h2 class="wi-card__title">Window Designs</h2>
                <div class="wi-card__body">
                    <p>Because we manufacture your windows right here in our own factory we are not restricted to supplier design limitations.</p>
                    <p>We can tailor your windows to your exact needs and using our unique online window designer you will find that we are sure to produce your exact window style.</p>
                </div>
                <div class="wi-product-strip" style="margin-top:20px;">
                    @php $winProducts = [
                        ['name' => 'Standard', 'slug' => 'standard-casement', 'img' => '1.1.jpg'],
                        ['name' => 'French', 'slug' => 'french-windows', 'img' => '2.1.jpg'],
                        ['name' => 'Tilt & Turn', 'slug' => 'tilt-and-turn-windows', 'img' => '3.1.jpg'],
                        ['name' => 'Flush', 'slug' => 'flush-windows', 'img' => '4.1.jpg'],
                        ['name' => 'Sash', 'slug' => 'sash-windows', 'img' => '5.1.jpg'],
                    ]; @endphp
                    @foreach($winProducts as $wp)
                    <a href="/windows/{{ $wp['slug'] }}" class="wi-product-mini">
                        <img src="{{ asset('assets/products/' . $wp['img']) }}" alt="{{ $wp['name'] }} Windows" class="wi-product-mini__img" loading="lazy">
                        {{ $wp['name'] }}
                        <svg class="wi-product-mini__arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- S2: Window Energy Rating --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Window Energy Rating (WER)</h2>
                <div class="wi-card__body">
                    <p>As standard you will receive ultra efficient <strong>A+ rated windows</strong>. Our latest casement windows utilise some of the most advanced double glazing on the market and actually now perform much better than a standard A rated window, at A+, one of the most advanced in the country.</p>
                    <p>Our windows easily exceed building regulations so you can have peace of mind that you are installing high-performance double glazing.</p>
                </div>
                <div class="wi-energy-rating">
                    <div class="wi-energy-bar wi-energy-bar--app">
                        <span>A++</span><span class="wi-energy-bar__label">Triple Glazed</span>
                    </div>
                    <div class="wi-energy-bar wi-energy-bar--ap wi-energy-bar--selected">
                        <span>A+</span><span class="wi-energy-bar__label">Our Standard</span>
                    </div>
                    <div class="wi-energy-bar wi-energy-bar--a">
                        <span>A</span><span class="wi-energy-bar__label"></span>
                    </div>
                    <div class="wi-energy-bar wi-energy-bar--b">
                        <span>B</span><span class="wi-energy-bar__label"></span>
                    </div>
                    <div class="wi-energy-bar wi-energy-bar--c">
                        <span>C</span><span class="wi-energy-bar__label"></span>
                    </div>
                    <div class="wi-energy-bar wi-energy-bar--d">
                        <span>D</span><span class="wi-energy-bar__label"></span>
                    </div>
                    <div class="wi-energy-bar wi-energy-bar--e">
                        <span>E</span><span class="wi-energy-bar__label"></span>
                    </div>
                </div>
                <span class="wi-badge" style="margin-top:12px;">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Exceeds Building Regulations
                </span>
            </div>

            {{-- S3: Home Energy Efficiency --}}
            <div class="wi-card">
                <div class="wi-img-float">
                    <img src="{{ asset('assets/about/window2.png') }}" alt="Energy Efficient Glass" loading="lazy" style="border-radius:10px;">
                </div>
                <h2 class="wi-card__title">Home Energy Efficiency</h2>
                <div class="wi-card__body">
                    <p>Our energy efficient windows will make a real difference in the winter and reduce your home's energy bills as a lot of heat is lost through the windows.</p>
                    <p>The special coating on each pane of glass reflects heat back into the room. All of our windows are filled with argon gas which is extremely effective in reducing heat loss as it has a higher density than air.</p>
                </div>
                <ul class="wi-checklist" style="clear:both;">
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Advanced glazing technology</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Argon gas filled units</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Reduced heat loss</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Improved thermal performance</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Lower energy consumption</li>
                </ul>
            </div>

            {{-- S4: Triple Glazed Windows --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Triple Glazed Windows — Now A++</h2>
                <div class="wi-card__body">
                    <p>For even higher energy efficiency, we manufacture A++ triple glazed windows.</p>
                    <p>Using the same advanced glass specification as our double glazing, with an extra pane of energy efficient Pilkington KS glass, and a thinner glass bead without increasing the frame thickness, achieving a superb A++ rating from the BFRC.</p>
                </div>
                <div class="wi-compare">
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/4.1.jpg') }}" alt="Standard Triple Glazed Window" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Standard</div>
                    </div>
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/4.2.jpg') }}" alt="Flush Triple Glazed Window" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Flush</div>
                    </div>
                </div>
                <div class="wi-rating-badge">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    <span class="wi-rating-badge__num">A++</span>
                    Rating — BFRC Certified
                </div>
            </div>

            {{-- S5: Security -- full width --}}
            <div class="wi-card wi-col-full">
                <div style="display:grid;grid-template-columns:1fr auto;gap:20px;align-items:start;flex-wrap:wrap;">
                    <div>
                        <h2 class="wi-card__title">Security — PAS24</h2>
                        <div class="wi-card__body">
                            <p>Our windows are highly secure with industry-leading protection built in as standard.</p>
                        </div>
                    </div>
                    <div class="wi-pas24">
                        <span class="wi-pas24__label">Accredited</span>
                        <span class="wi-pas24__num">PAS24</span>
                        <span class="wi-pas24__year">:2022</span>
                    </div>
                </div>
                <div class="wi-security-grid">
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>PAS24:2022 Accreditation</h4><p>Makes windows stronger against break-ins. Required for new builds &amp; extensions to comply with Document Q.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Yale Locking System</h4><p>Free upgrade to Yale shootbolt locking to ensure a highly secure window.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Internal Glazing Beads</h4><p>Glass can only be removed from the inside — preventing external removal of glass panes.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Two-Stage Locking</h4><p>Window is completely closed on the first setting, the second still locks but allows airflow through a small gap.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Key-Locking Handles</h4><p>Handles with key locks provide an additional layer of security against unauthorised entry.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Yale Shootbolt Upgrade</h4><p>Optional Yale shootbolt upgrade for even greater multipoint locking performance.</p></div>
                    </div>
                </div>
            </div>

            {{-- S6: Glass Technology --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Glass Technology</h2>
                <div class="wi-card__body">
                    <p>In order to achieve such a highly energy efficient window we only use the latest glass technology from Pilkington known as <strong>Pilkington EnergiKare</strong>.</p>
                </div>
                <table class="wi-spec-table">
                    <tbody>
                        <tr><td>Inner pane</td><td>Pilkington KS</td></tr>
                        <tr><td>Outer pane</td><td>Pilkington Optiwhite</td></tr>
                        <tr><td>Gas filling</td><td>Argon Gas</td></tr>
                        <tr><td>Spacer bar</td><td>Black SuperSpacer</td></tr>
                        <tr><td>Thickness (double)</td><td>28mm</td></tr>
                        <tr><td>Thickness (triple)</td><td>40mm</td></tr>
                        <tr><td>U-value</td><td>From 0.70 to 1.22</td></tr>
                    </tbody>
                </table>
                <p class="wi-card__body" style="margin-top:16px;"><strong>Optional decorative glass:</strong></p>
                <div class="wi-spec-pills">
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" stroke-width="1.5"/><line x1="3" y1="9" x2="21" y2="9" stroke-width="1.5"/><line x1="9" y1="3" x2="9" y2="21" stroke-width="1.5"/></svg>Georgian Bars</span>
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="1" stroke-width="1.5"/><line x1="3" y1="12" x2="21" y2="12" stroke-width="1.5"/></svg>Square Lead</span>
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><polygon points="12,3 21,9 21,15 12,21 3,15 3,9" stroke-width="1.5"/></svg>Diamond Lead</span>
                </div>
            </div>

            {{-- S7: Colours --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:3/1;">
                    <img src="{{ asset('assets/about/window3.png') }}" alt="Colour Finishes" loading="lazy">
                </div>
                <h2 class="wi-card__title">Colours &amp; Finishes</h2>
                <div class="wi-card__body">
                    <p>Our Heritage 2800 frames can be ordered in beautiful authentic wood-like finishes in an amazing array of colours and combinations.</p>
                    <p>Now you can customise your windows and doors with a vast range of <strong>bespoke flat colour coatings</strong>, free of woodgrain or texture. We can match most RAL and other colour codes as well as your own samples.</p>
                    <p style="font-size:.88rem;color:var(--wi-text-muted);">Bespoke colour coating will extend delivery times by up to 4 weeks.</p>
                </div>
                <div class="wi-swatches">
                    <div class="wi-swatch" style="background:#f5f5dc;" title="Cream"></div>
                    <div class="wi-swatch" style="background:#fffaf0;" title="White"></div>
                    <div class="wi-swatch" style="background:#c8a97a;" title="Light Oak"></div>
                    <div class="wi-swatch" style="background:#8b6534;" title="Golden Oak"></div>
                    <div class="wi-swatch" style="background:#5c3d2e;" title="Rosewood"></div>
                    <div class="wi-swatch" style="background:#2c3e2d;" title="Chartwell Green"></div>
                    <div class="wi-swatch" style="background:#374151;" title="Anthracite Grey"></div>
                    <div class="wi-swatch" style="background:#1f2937;" title="Slate Grey"></div>
                    <div class="wi-swatch" style="background:#1c1c1c;" title="Black"></div>
                    <div class="wi-swatch" style="background:#a1628c;" title="Purple"></div>
                    <div class="wi-swatch" style="background:#2b4590;" title="Royal Blue"></div>
                    <div class="wi-swatch" style="background:#d0d0d0;" title="Agate Grey"></div>
                </div>
            </div>

            {{-- S8: Internal Magnetic Blinds --}}
            <div class="wi-card wi-col-full">
                <div style="display:grid;grid-template-columns:1fr auto;gap:24px;align-items:start;" class="wi-blind-layout">
                    <div>
                        <h2 class="wi-card__title">Internal Magnetic Blinds</h2>
                        <div class="wi-card__body">
                            <p>These internal Venetian blinds are <strong>permanently sealed inside the glass units</strong>, offering maintenance-free operation and a clean, modern appearance.</p>
                        </div>
                        <div class="wi-blind-grid">
                            <div class="wi-blind-item">
                                <h4>Cordless</h4>
                                <p>Single magnetic slider on the edge of the sealed unit. Raise, lower and tilt completely cord-free.</p>
                            </div>
                            <div class="wi-blind-item">
                                <h4>Cordless Dual-Sided</h4>
                                <p>Slide guides on both left and right edges of the glass for a symmetrical appearance.</p>
                            </div>
                            <div class="wi-blind-item">
                                <h4>Corded</h4>
                                <p>Rotational cord winder at the top of the room-facing pane. Allows larger blind sizes and maximum light.</p>
                            </div>
                        </div>
                    </div>
                    <div style="width:180px;flex-shrink:0;" class="wi-blind-img-wrap">
                        <img src="{{ asset('assets/about/window4.png') }}" alt="Internal Magnetic Blinds" style="width:100%;border-radius:10px;border:1px solid var(--wi-border);" loading="lazy">
                    </div>
                </div>
                <style>
                @media(max-width:767px){
                    .wi-blind-layout{grid-template-columns:1fr!important;}
                    .wi-blind-img-wrap{width:100%!important;}
                }
                </style>
            </div>

            {{-- S9: Window Frames --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Window Frames</h2>
                <h3 class="wi-card__sub">Heritage 2800 Profile</h3>
                <div class="wi-card__body">
                    <p>Our profile is made in Britain by <strong>Deceuninck</strong>, one of the leading profile extruders in the country. We use the Heritage 2800 profile with an attractive sculptured finish.</p>
                </div>
                <div class="wi-spec-pills" style="margin-top:20px;">
                    <span class="wi-spec-pill">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21l1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/></svg>
                        British Manufactured
                    </span>
                    <span class="wi-spec-pill">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        Heritage 2800
                    </span>
                    <span class="wi-spec-pill">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                        Sculptured Finish
                    </span>
                    <span class="wi-spec-pill">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        High Durability
                    </span>
                </div>
            </div>

            {{-- S10: Flush Windows --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:16/9;">
                    <img src="{{ asset('assets/products/4.1.jpg') }}" alt="Flush Windows" loading="lazy">
                </div>
                <h2 class="wi-card__title">Flush Windows</h2>
                <div class="wi-card__body">
                    <p>We manufacture Heritage 2800 flush casement windows designed to replicate the timeless look of traditional wooden windows found in period properties, while offering far superior energy efficiency.</p>
                    <p>With the Heritage 2800 system, the openers sit neatly flush within the external frame rather than standing proud. Their clean lines and balanced proportions make them an excellent choice for contemporary homes.</p>
                    <p>Flush casement windows come <strong>A+ rated as standard</strong> with double glazing and feature precision 45-degree welded joints.</p>
                </div>
                <a href="/windows/flush-windows" class="wi-card-cta">
                    View Flush Windows
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            {{-- S11: French Windows --}}
            <div class="wi-card">
                <div class="wi-compare">
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/2.1.jpg') }}" alt="Standard French Windows" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Standard French</div>
                    </div>
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/2.2.jpg') }}" alt="Flush French Windows" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Flush French</div>
                    </div>
                </div>
                <h2 class="wi-card__title" style="margin-top:20px;">French Windows</h2>
                <div class="wi-card__body">
                    <p>We also manufacture French windows. They open completely without a central vertical bar in the way, allowing fire escape, maximum ventilation and ground-floor access.</p>
                    <p>Like all our windows, they feature a <strong>two-stage locking system</strong> for improved security and ventilation.</p>
                </div>
                <a href="/windows/french-windows" class="wi-card-cta">
                    View French Windows
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            {{-- S12: Tilt & Turn --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:16/9;">
                    <img src="{{ asset('assets/products/3.1.jpg') }}" alt="Tilt & Turn Windows" loading="lazy">
                </div>
                <h2 class="wi-card__title">Tilt &amp; Turn Windows</h2>
                <div class="wi-card__body">
                    <p>Our Tilt &amp; Turn windows open inwards and have a tilt function for easy ventilation while maintaining security.</p>
                    <p>By turning the handle to the middle position, the window can open like a normal side opener — giving you the best of both worlds.</p>
                </div>
                <a href="/windows/tilt-and-turn-windows" class="wi-card-cta">
                    View Tilt &amp; Turn Windows
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>{{-- /wi-grid --}}
    </div>
</section>

{{-- S13: Production — full-width dark banner --}}
<div class="wi-card wi-card--production" style="border-radius:0;margin:0;">
    <div class="wi-container" style="padding-top:clamp(48px,7vw,80px);padding-bottom:clamp(48px,7vw,80px);">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;" class="wi-prod-layout">
            <div>
                <div class="wi-divider" style="background:#93c5fd;"></div>
                <h2 class="wi-card__title" style="font-size:clamp(1.6rem,3vw,2.4rem);">Manufactured With Precision</h2>
                <div class="wi-card__body" style="margin-top:12px;">
                    <p>We keep investing heavily in our machinery to ensure both accuracy and a high quality finish.</p>
                    <p>Our quality control system ensures that each window leaves our factory to the highest standard.</p>
                </div>
            </div>
            <div class="wi-production-highlights">
                <div class="wi-prod-highlight">
                    <div class="wi-prod-highlight__icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
                    </div>
                    <h3>Precision</h3>
                    <p>Accurate manufacturing to the millimetre</p>
                </div>
                <div class="wi-prod-highlight">
                    <div class="wi-prod-highlight__icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3>Quality Control</h3>
                    <p>Every product rigorously checked</p>
                </div>
                <div class="wi-prod-highlight">
                    <div class="wi-prod-highlight__icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/></svg>
                    </div>
                    <h3>Made in Our Factory</h3>
                    <p>Controlled production from start to finish</p>
                </div>
            </div>
        </div>
    </div>
    <style>
    @media(max-width:767px){
        .wi-prod-layout{grid-template-columns:1fr!important;}
        .wi-production-highlights{grid-template-columns:1fr!important;}
    }
    </style>
</div>

<section class="wi-section">
    <div class="wi-container">
        <div class="wi-grid wi-grid--2">

            {{-- S14: Odd Shapes --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Odd-Shaped Windows</h2>
                <div class="wi-card__body">
                    <p>Our non-rectangular windows have many unusual shapes to choose from, allowing you to complement any architectural style.</p>
                </div>
                <div class="wi-spec-pills" style="margin-top:16px;">
                    <span class="wi-spec-pill">Triangle</span>
                    <span class="wi-spec-pill">Pentagon</span>
                    <span class="wi-spec-pill">Circular</span>
                    <span class="wi-spec-pill">Hexagon</span>
                    <span class="wi-spec-pill">Apex</span>
                    <span class="wi-spec-pill">+ More</span>
                </div>
                <a href="/windows" class="wi-card-cta" style="margin-top:24px;">
                    Explore Window Designs
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            {{-- S15: Window Guarantee --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Comprehensive Window Guarantee</h2>
                <div class="wi-card__body">
                    <p>We stand behind our products with industry-leading warranty cover giving you complete peace of mind.</p>
                </div>
                <div class="wi-warranty-grid">
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">10</div>
                        <span class="wi-warranty-item__unit">Years</span>
                        <div class="wi-warranty-item__label">Frames</div>
                        <div class="wi-warranty-item__desc">UPVC frame guarantee</div>
                    </div>
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">10</div>
                        <span class="wi-warranty-item__unit">Years</span>
                        <div class="wi-warranty-item__label">Sealed Glass</div>
                        <div class="wi-warranty-item__desc">Against condensation inside the unit</div>
                    </div>
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">1</div>
                        <span class="wi-warranty-item__unit">Year</span>
                        <div class="wi-warranty-item__label">Moving Hardware</div>
                        <div class="wi-warranty-item__desc">Against failure in operation</div>
                    </div>
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">2</div>
                        <span class="wi-warranty-item__unit">Years</span>
                        <div class="wi-warranty-item__label">Astragal Bars</div>
                        <div class="wi-warranty-item__desc">Decorative bar guarantee</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════════════════
     DOORS DIVIDER
     ═══════════════════════════════════════════════════════════════════════════ --}}
<div class="wi-divider-banner">
    <div class="wi-container">
        <span class="wi-divider-banner__eyebrow">Our Products</span>
        <h2 class="wi-divider-banner__title">Doors</h2>
        <p class="wi-divider-banner__sub">Designed for security, energy efficiency and everyday performance.</p>
    </div>
</div>


{{-- ═══════════════════════════════════════════════════════════════════════════
     DOORS SECTION
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-section">
    <div class="wi-container">
        <div class="wi-grid wi-grid--2">

            {{-- S16: Door Designs --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:16/9;">
                    <img src="{{ asset('assets/products/door1.1.jpg') }}" alt="Door Designs" loading="lazy">
                </div>
                <h2 class="wi-card__title">Door Designs</h2>
                <div class="wi-card__body">
                    <p>Because we manufacture our doors in our own factory we are not restricted to supplier design limitations, so we can tailor your doors to your needs.</p>
                    <p>Use our unique online UPVC door designer to create your exact door. Side panels/lights will be manufactured separately to the door including a <strong>free reinforced 15mm coupler</strong> for added strength.</p>
                </div>
                <div class="wi-product-strip" style="margin-top:20px;">
                    @php $doorProducts = [
                        ['name' => 'PVC Doors', 'slug' => 'pvc-doors', 'img' => 'door1.1.jpg'],
                        ['name' => 'Flush Doors', 'slug' => 'flush-doors', 'img' => 'door2.1.jpg'],
                        ['name' => 'French Doors', 'slug' => 'french-doors', 'img' => 'door3.1.jpg'],
                    ]; @endphp
                    @foreach($doorProducts as $dp)
                    <a href="/doors/{{ $dp['slug'] }}" class="wi-product-mini">
                        <img src="{{ asset('assets/products/' . $dp['img']) }}" alt="{{ $dp['name'] }}" class="wi-product-mini__img" loading="lazy">
                        {{ $dp['name'] }}
                        <svg class="wi-product-mini__arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- S17: Door Energy Efficiency --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Energy Efficiency</h2>
                <div class="wi-card__body">
                    <p>A new door from Modern UPVC Windows will make a real difference in the winter and help to reduce your home's energy bills, minimising heat loss.</p>
                    <p>On glazed doors the special coating on each pane reflects the heat back into the room. We use the same <strong>argon-filled sealed glass units</strong> as our A+ rated windows.</p>
                </div>
                <div class="wi-energy-rating">
                    <div class="wi-energy-bar wi-energy-bar--app">
                        <span>A++</span><span class="wi-energy-bar__label">Triple Glazed</span>
                    </div>
                    <div class="wi-energy-bar wi-energy-bar--ap wi-energy-bar--selected">
                        <span>A+</span><span class="wi-energy-bar__label">Our Standard</span>
                    </div>
                    <div class="wi-energy-bar wi-energy-bar--a">
                        <span>A</span>
                    </div>
                    <div class="wi-energy-bar wi-energy-bar--b">
                        <span>B</span>
                    </div>
                </div>
                <ul class="wi-checklist" style="margin-top:16px;">
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Argon gas filled glass units</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Heat-reflecting glass coating</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Thermally broken threshold options</li>
                </ul>
            </div>

            {{-- S18: Door Security --}}
            <div class="wi-card">
                <h2 class="wi-card__title">High Security as Standard</h2>
                <div class="wi-card__body">
                    <p>Our doors have high security built in as standard, giving you complete peace of mind every day.</p>
                </div>
                <div class="wi-security-grid">
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Ingenious 5-Point Security Lock</h4><p>Industry-leading multipoint locking mechanism for maximum door security.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Hookbolts</h4><p>Hookbolts engage into the frame to prevent door being forced open.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>PAS24 Compliant</h4><p>Full PAS24:2022 accreditation making our doors stronger against break-ins.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Internal Glazing Beads</h4><p>Glass panels can only be removed from the inside for enhanced security.</p></div>
                    </div>
                </div>
            </div>

            {{-- S19: Ultion Cylinder Lock --}}
            <div class="wi-card">
                <div style="display:grid;grid-template-columns:1fr auto;gap:20px;align-items:center;">
                    <div>
                        <span class="wi-badge" style="margin-bottom:12px;">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                            Optional Upgrade
                        </span>
                        <h2 class="wi-card__title">Ultion Cylinder Lock Upgrade</h2>
                        <div class="wi-card__body">
                            <p>A superb <strong>11-pin security cylinder</strong>, with a <strong>£1,000 break-in guarantee</strong> from Ultion — the most secure cylinder lock available.</p>
                        </div>
                    </div>
                    <div style="width:80px;flex-shrink:0;">
                        <div style="width:80px;height:80px;border-radius:50%;background:var(--wi-blue);display:flex;align-items:center;justify-content:center;">
                            <svg fill="none" stroke="#fff" viewBox="0 0 24 24" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>
                        </div>
                    </div>
                </div>
                <ul class="wi-bullet-list" style="margin-top:16px;">
                    <li>11-pin anti-snap cylinder</li>
                    <li>£1,000 break-in guarantee</li>
                    <li>Anti-pick, anti-drill, anti-bump</li>
                    <li>Upgrades any standard door lock</li>
                </ul>
            </div>

            {{-- S20: Low Threshold --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Low Threshold Upgrade</h2>
                <div class="wi-card__body">
                    <p>Superb <strong>Stormguard aluminium low threshold</strong>, with or without wheelchair ramps.</p>
                    <p>Non-slip surface ensures a safe grip in wet conditions. Thermally broken to meet thermal bridging and insulation requirements.</p>
                    <p>Complies with <strong>Part M of the building regulations</strong> when used with the ramps.</p>
                </div>
                <div class="wi-compare" style="margin-top:20px;">
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/door1.2.jpg') }}" alt="Low Threshold Open In" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Open In</div>
                    </div>
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/door2.2.jpg') }}" alt="Low Threshold Open Out" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Open Out</div>
                    </div>
                </div>
            </div>

            {{-- S21: Door Profiles --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Door Profiles — Heritage 2800</h2>
                <div class="wi-card__body">
                    <p>Our profile is made in Britain by <strong>Deceuninck</strong>. We use the Heritage 2800 profile with an attractive sculptured finish.</p>
                </div>
                <div class="wi-compare" style="margin-top:16px;">
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/door1.1.jpg') }}" alt="Standard Open-In Door" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Standard Open-In</div>
                    </div>
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/door2.1.jpg') }}" alt="Flush Open-Out Door" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Flush Open-Out</div>
                    </div>
                </div>
                <div class="wi-spec-pills" style="margin-top:16px;">
                    <span class="wi-spec-pill">British Manufactured</span>
                    <span class="wi-spec-pill">Heritage 2800</span>
                    <span class="wi-spec-pill">Sculptured Finish</span>
                </div>
            </div>

            {{-- S22: Door Glass --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Glass — Approved Document N Compliant</h2>
                <div class="wi-card__body">
                    <p>Toughened glass is supplied in all areas except top lights to meet current building regulations.</p>
                </div>
                <table class="wi-spec-table">
                    <tbody>
                        <tr><td>Inner pane</td><td>Pilkington KS</td></tr>
                        <tr><td>Outer pane</td><td>Pilkington Optiwhite</td></tr>
                        <tr><td>Gas filling</td><td>Argon Gas</td></tr>
                        <tr><td>Spacer bar</td><td>SuperSpacer</td></tr>
                        <tr><td>Thickness (double)</td><td>28mm</td></tr>
                        <tr><td>Thickness (triple)</td><td>40mm</td></tr>
                        <tr><td>U-value</td><td>From 0.70 to 1.22</td></tr>
                    </tbody>
                </table>
                <div class="wi-spec-pills" style="margin-top:16px;">
                    <span class="wi-spec-pill">Georgian Bar</span>
                    <span class="wi-spec-pill">Square Lead</span>
                    <span class="wi-spec-pill">Diamond Lead</span>
                </div>
            </div>

            {{-- S23: Triple Glazing for Doors --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Triple Glazed Doors</h2>
                <div class="wi-card__body">
                    <p>For even higher energy efficiency, we also manufacture triple glazed doors — achieving superior thermal performance without increasing the door frame thickness.</p>
                </div>
                <div class="wi-compare" style="margin-top:16px;">
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/door3.1.jpg') }}" alt="Triple Glazed Standard Open-In Door" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Standard Open-In</div>
                    </div>
                    <div class="wi-compare-item">
                        <img src="{{ asset('assets/products/door3.2.jpg') }}" alt="Triple Glazed Flush Open-Out Door" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Flush Open-Out</div>
                    </div>
                </div>
                <div class="wi-rating-badge">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    <span class="wi-rating-badge__num">A++</span>
                    Triple Glazed Rating Available
                </div>
            </div>

            {{-- S24: Door Colours --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:3/1;">
                    <img src="{{ asset('assets/about/window3.png') }}" alt="Door Colour Finishes" loading="lazy">
                </div>
                <h2 class="wi-card__title">Door Colours &amp; Finishes</h2>
                <div class="wi-card__body">
                    <p>Our Heritage 2800 door frames can be ordered in beautiful authentic wood-like finishes in an amazing array of colours and combinations.</p>
                    <p>Now you can customise your doors with a vast range of <strong>bespoke flat colour coatings</strong>, free of woodgrain or texture. We can match most RAL and other colour codes as well as your own samples.</p>
                    <p style="font-size:.88rem;color:var(--wi-text-muted);">Bespoke colour coating will extend delivery times by up to 4 weeks.</p>
                </div>
                <div class="wi-swatches">
                    <div class="wi-swatch" style="background:#f5f5dc;"></div>
                    <div class="wi-swatch" style="background:#fffaf0;"></div>
                    <div class="wi-swatch" style="background:#c8a97a;"></div>
                    <div class="wi-swatch" style="background:#8b6534;"></div>
                    <div class="wi-swatch" style="background:#5c3d2e;"></div>
                    <div class="wi-swatch" style="background:#2c3e2d;"></div>
                    <div class="wi-swatch" style="background:#374151;"></div>
                    <div class="wi-swatch" style="background:#1c1c1c;"></div>
                    <div class="wi-swatch" style="background:#2b4590;"></div>
                    <div class="wi-swatch" style="background:#d0d0d0;"></div>
                </div>
            </div>

            {{-- S25: Door Internal Magnetic Blinds --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Internal Magnetic Blinds</h2>
                <div class="wi-card__body">
                    <p>These internal Venetian blinds are <strong>permanently sealed inside the glass units</strong> — no cleaning, no cord tangles, and a clean look from inside and out.</p>
                </div>
                <div class="wi-blind-grid">
                    <div class="wi-blind-item">
                        <h4>Cordless</h4>
                        <p>Single magnetic slider on the edge of the sealed unit. Raise, lower and tilt cord-free.</p>
                    </div>
                    <div class="wi-blind-item">
                        <h4>Cordless Dual-Sided</h4>
                        <p>Slide guides on both left and right edges for a symmetrical appearance.</p>
                    </div>
                    <div class="wi-blind-item">
                        <h4>Corded</h4>
                        <p>Rotational cord winder at the top for larger blind sizes and maximum light control.</p>
                    </div>
                </div>
            </div>

            {{-- S26: Door Security PAS24 -- full width --}}
            <div class="wi-card wi-col-full">
                <div style="display:grid;grid-template-columns:1fr auto;gap:20px;align-items:start;">
                    <div>
                        <h2 class="wi-card__title">Door Security — PAS24</h2>
                        <div class="wi-card__body">
                            <p>Our doors hold full PAS24:2022 accreditation, making them one of the most secure available. PAS24 is required for new builds and extensions to comply with Document Q of the building regulations.</p>
                            <p style="margin-top:12px;padding:12px 16px;background:var(--wi-blue-bg);border-left:3px solid var(--wi-blue);border-radius:0 8px 8px 0;font-size:.9rem;">
                                <strong>Important:</strong> To comply with PAS24, laminated or acoustic laminated glass must be fitted to all easily accessible doors, door side panels and windows adjacent to a door.
                            </p>
                        </div>
                    </div>
                    <div class="wi-pas24">
                        <span class="wi-pas24__label">Accredited</span>
                        <span class="wi-pas24__num">PAS24</span>
                        <span class="wi-pas24__year">:2022</span>
                    </div>
                </div>
                <div class="wi-security-grid" style="margin-top:20px;">
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>PAS24:2022 Accreditation</h4><p>Full security certification for new builds, extensions and Document Q compliance.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Ingenious 5-Point Security Lock</h4><p>Multi-point locking engages across the full height of the door.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Hookbolts</h4><p>Secure hookbolts prevent the door being forced open even under significant pressure.</p></div>
                    </div>
                    <div class="wi-security-feat">
                        <div class="wi-security-feat__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z"/></svg></div>
                        <div class="wi-security-feat__text"><h4>Internal Glazing Beads</h4><p>Glass panels can only be removed from the inside for full security.</p></div>
                    </div>
                </div>
            </div>

            {{-- S27: Door Production --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Door Production</h2>
                <div class="wi-card__body">
                    <p>We keep investing heavily in our machinery to ensure both accuracy and a high quality finish.</p>
                    <p>Our quality control system ensures that each door leaves our factory to the highest standard — every hinge, lock point, and seal is checked before dispatch.</p>
                </div>
                <div class="wi-spec-pills" style="margin-top:16px;">
                    <span class="wi-spec-pill">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"/></svg>
                        Factory Direct
                    </span>
                    <span class="wi-spec-pill">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Quality Checked
                    </span>
                    <span class="wi-spec-pill">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><circle cx="12" cy="12" r="3"/></svg>
                        Precision Machinery
                    </span>
                </div>
            </div>

            {{-- S28: Door Panels --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Door Panels</h2>
                <div class="wi-card__body">
                    <p>All of our door panels have <strong>MDF reinforcement</strong> to increase both energy efficiency and security.</p>
                    <p>This reinforcement gives the door panel greater rigidity, better insulation properties, and improved resistance to forced entry.</p>
                </div>
                <ul class="wi-checklist" style="margin-top:16px;">
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>MDF reinforced panels</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Improved energy efficiency</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Greater structural rigidity</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Enhanced security resistance</li>
                </ul>
            </div>

            {{-- S29: Hardware & Ancillaries --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:16/9;">
                    <img src="{{ asset('assets/about/d1.png') }}" alt="Door Hardware" loading="lazy">
                </div>
                <h2 class="wi-card__title">Hardware &amp; Ancillaries</h2>
                <div class="wi-card__body">
                    <p>Our handles, hinges, letterplates and other parts are of extremely high quality, sourced from reputable companies.</p>
                    <p>Every piece of hardware is selected for durability, security performance, and aesthetic quality to complement our premium window and door products.</p>
                </div>
                <div class="wi-spec-pills" style="margin-top:16px;">
                    <span class="wi-spec-pill">Premium Handles</span>
                    <span class="wi-spec-pill">Quality Hinges</span>
                    <span class="wi-spec-pill">Letterplates</span>
                    <span class="wi-spec-pill">Cill Profiles</span>
                </div>
            </div>

            {{-- S30: Comprehensive Door Guarantee --}}
            <div class="wi-card wi-col-full">
                <h2 class="wi-card__title">Comprehensive Door Guarantee</h2>
                <div class="wi-card__body">
                    <p>We stand behind every door we make with a comprehensive guarantee package covering all key components.</p>
                </div>
                <div class="wi-warranty-grid" style="grid-template-columns:repeat(3,1fr);">
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">10</div>
                        <span class="wi-warranty-item__unit">Years</span>
                        <div class="wi-warranty-item__label">Frames</div>
                        <div class="wi-warranty-item__desc">UPVC frame guarantee</div>
                    </div>
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">10</div>
                        <span class="wi-warranty-item__unit">Years</span>
                        <div class="wi-warranty-item__label">Sealed Glass</div>
                        <div class="wi-warranty-item__desc">Against condensation inside the unit</div>
                    </div>
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">1</div>
                        <span class="wi-warranty-item__unit">Year</span>
                        <div class="wi-warranty-item__label">Moving Hardware</div>
                        <div class="wi-warranty-item__desc">Against failure in operation</div>
                    </div>
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">5</div>
                        <span class="wi-warranty-item__unit">Years</span>
                        <div class="wi-warranty-item__label">Internal Blinds</div>
                        <div class="wi-warranty-item__desc">2 years for external mechanism</div>
                    </div>
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">5</div>
                        <span class="wi-warranty-item__unit">Years</span>
                        <div class="wi-warranty-item__label">UPVC Panels</div>
                        <div class="wi-warranty-item__desc">Panel guarantee</div>
                    </div>
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">2</div>
                        <span class="wi-warranty-item__unit">Years</span>
                        <div class="wi-warranty-item__label">Astragal Bars</div>
                        <div class="wi-warranty-item__desc">Decorative bar guarantee</div>
                    </div>
                </div>
                <style>
                @media(max-width:639px){
                    .wi-warranty-grid[style*="repeat(3"]{grid-template-columns:1fr!important;}
                }
                @media(min-width:640px) and (max-width:899px){
                    .wi-warranty-grid[style*="repeat(3"]{grid-template-columns:repeat(2,1fr)!important;}
                }
                </style>
            </div>

        </div>{{-- /wi-grid --}}
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════════════════
     FINAL CTA SECTION
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-cta-section">
    <div class="wi-container wi-cta-section__inner">
        <h2 class="wi-cta-section__title">Ready to design your perfect window or door?</h2>
        <p class="wi-cta-section__sub">Choose from our range of window and door styles, customise your specifications and create a solution designed around your home.</p>
        <div class="wi-cta-actions">
            <a href="/windows" class="wi-btn-primary">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="18" height="18"><rect x="3" y="3" width="18" height="18" rx="2" stroke-width="1.5"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9h18M9 3v18"/></svg>
                Design Your Windows
            </a>
            <a href="/doors" class="wi-btn-primary">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21h18M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16M10 12h.01"/></svg>
                Design Your Doors
            </a>
            <a href="{{ route('contact') }}" class="wi-btn-outline">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                Get a Quote
            </a>
        </div>
    </div>
</section>

</div>{{-- /wi-page --}}
@endsection
