@extends('layouts.app')

@section('title', 'Doors Information — Security, Energy Efficiency & Quality | Modern UPVC Windows')
@section('meta_description', 'Everything you need to know about our UPVC doors — PAS24 security, 5-point locking, Ultion cylinder upgrade, energy efficiency, Heritage profiles, colours, guarantees and in-house precision manufacturing.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/information.css') }}">
@endpush

@section('content')
<div class="wi-page">

{{-- ═══════════════════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-hero" aria-label="Doors Information">
    <div class="wi-hero__bg">
        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;">
            <div class="anim-composite">
                <!-- Animated Door -->
                <div class="anim-door">
                    <div class="anim-frame"></div>
                    <div class="anim-sash">
                        <div class="door-handle"></div>
                        <div class="door-mail-slot"></div>
                        <div class="glass-reflection"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wi-hero__overlay" aria-hidden="true"></div>
    <div class="wi-hero__inner">

    <h1 class="wi-hero__title" style="margin-bottom: 0;">What makes our doors <em>exceptional</em></h1>
            <p class="wi-hero__sub">We manufacture our doors in our own factory  giving us complete freedom to deliver PAS24 certified, energy efficient, bespoke UPVC doors precisely to your specification.</p>

</div>
</section>


{{-- ═══════════════════════════════════════════════════════════════════════════
     SECTION 1 — DESIGNS + ENERGY EFFICIENCY
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-section">
    <div class="wi-container">
        <div class="wi-section__header">
            <span class="wi-section__eyebrow">Our Range</span>
            <h2 class="wi-section__title">Door Designs & Energy Performance</h2>
            <p class="wi-section__desc">Three distinct door styles, all manufactured to high specification in our own factory.</p>
        </div>

        <div class="wi-grid-wrap">
        <div class="wi-grid wi-grid--2">

            {{-- S1 — Door Designs --}}
            <div class="wi-card">
                <div class="wi-card__img wi-card__img--full">
                    <img src="{{ asset('assets/products/door2.2.jpg') }}" alt="UPVC Door Designs" loading="lazy">
                </div>
                <h2 class="wi-card__title">Door Designs</h2>
                <div class="wi-card__body">
                    <p>Because we manufacture our doors in our own factory we are not restricted to supplier design limitations — we can tailor your doors to your exact requirements.</p>
                    <p>Side panels and lights are manufactured separately to the door and include a <strong>free reinforced 15 mm coupler</strong> for added strength.</p>
                </div>
                <div class="wi-product-strip">
                    @php 
                    $infoProducts = [
                        [
                            'name' => 'Standard Windows',
                            'slug' => 'standard-casement',
                            'type' => 'windows',
                            'img1' => '4.1.jpg',
                            'img2' => '4.2.jpg',
                        ],
                        [
                            'name' => 'French Windows',
                            'slug' => 'french-windows',
                            'type' => 'windows',
                            'img1' => '3.1.jpg',
                            'img2' => '3.2.jpg',
                        ],
                        [
                            'name' => 'Tilt & Turn Windows',
                            'slug' => 'tilt-and-turn-windows',
                            'type' => 'windows',
                            'img1' => '2.1.jpg',
                            'img2' => '2.2.jpg',
                        ],
                        [
                            'name' => 'Flush Windows',
                            'slug' => 'flush-windows',
                            'type' => 'windows',
                            'img1' => '5.1.jpg',
                            'img2' => '5.2.jpg',
                        ],
                        [
                            'name' => 'Sash Windows',
                            'slug' => 'sash-windows',
                            'type' => 'windows',
                            'img1' => '6.1.jpg',
                            'img2' => '6.2.jpg',
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
                    ]; @endphp
                    @foreach($infoProducts as $dp)
                    @if($dp['type'] === 'doors')
                    <a href="/doors/{{ $dp['slug'] }}" class="wi-product-mini" id="mini-{{ $dp['slug'] }}">
                        <img src="{{ asset('assets/products/' . $dp['img1']) }}" alt="{{ $dp['name'] }}" class="wi-product-mini__img" loading="lazy">
                        {{ $dp['name'] }}
                    </a>
                    @endif
                    @endforeach

                </div>
            </div>

            {{-- S2 — Door Energy Efficiency --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Energy Efficiency</h2>
                <div class="wi-card__body">
                    <p>A new door from Modern UPVC Windows makes a real difference in winter by minimising heat loss. On glazed doors the special coating on each pane reflects heat back into the room.</p>
                    <p>We use the same <strong>argon-filled sealed glass units</strong> as our A+ rated windows — high performance as standard.</p>
                </div>
                <div class="wi-energy-rating">
                    <div class="wi-energy-bar wi-energy-bar--app"><span>A++</span><span class="wi-energy-bar__label">Triple Glazed Option</span></div>
                    <div class="wi-energy-bar wi-energy-bar--ap wi-energy-bar--selected"><span>A+</span></div>
                    <div class="wi-energy-bar wi-energy-bar--a"><span>A</span></div>
                    <div class="wi-energy-bar wi-energy-bar--b"><span>B</span></div>
                </div>
                <ul class="wi-checklist" style="margin-top:16px; margin-bottom: 24px;">
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Argon gas filled glass units</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Heat-reflecting glass coating</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Thermally broken threshold options</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Minimised cold-bridging at frame</li>
                </ul>
                <div style="padding-top: 20px; border-top: 1px solid var(--wi-border);">
                    <ul class="wi-bullet-list" style="margin: 0;">
                        <li><strong>Lower heating bills:</strong> Maximum thermal retention keeps your home naturally warmer.</li>
                        <li><strong>Reduced carbon footprint:</strong> Sustainable manufacturing and improved energy efficiency.</li>
                        <li><strong>Eliminate draughts:</strong> Precision engineering ensures a perfect, airtight seal.</li>
                    </ul>
                </div>
            </div>

        </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════════════════
     SECTION 2 — SECURITY (dark full-width)
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-section wi-section--dark">
    <div class="wi-container">
        <div style="display:flex;align-items:flex-start;justify-content:space-between;flex-wrap:wrap;gap:24px;margin-bottom:32px;">
            <div>
                <span class="wi-section__eyebrow" style="color:rgba(255,255,255,.4);">Safety First</span>
                <h2 class="wi-section__title" style="color:#fff;">High Security as Standard</h2>
                <p class="wi-section__desc" style="color:rgba(255,255,255,.5);">PAS24:2022 certified. Our doors deliver serious protection from the moment they are installed.</p>
            </div>
            <div class="wi-pas24" style="border-color:rgba(255,255,255,.35);color:#fff;">
                <span class="wi-pas24__label">Certified</span>
                <span class="wi-pas24__num">PAS24</span>
                <span class="wi-pas24__year">:2022</span>
            </div>
        </div>

        <div class="wi-grid-wrap" style="border-color:#2a2a2a;">
        <div class="wi-security-grid" style="background:#2a2a2a;">

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon wi-security-feat__icon--borderless"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Ingenious 5-Point Security Lock</h4><p style="color:rgba(255,255,255,.45);">Industry-leading multipoint locking mechanism for maximum door security.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon wi-security-feat__icon--borderless"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Hookbolts</h4><p style="color:rgba(255,255,255,.45);">Hookbolts engage into the frame preventing the door being forced open from outside.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon wi-security-feat__icon--borderless"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">PAS24:2022 Compliant</h4><p style="color:rgba(255,255,255,.45);">Full accreditation making our doors stronger against break-ins. Required under Document Q.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon wi-security-feat__icon--borderless"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Internal Glazing Beads</h4><p style="color:rgba(255,255,255,.45);">Glass panels can only be removed from the inside — enhanced external security.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon wi-security-feat__icon--borderless"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Anti-Drill Cylinder</h4><p style="color:rgba(255,255,255,.45);">Our standard cylinder resists drilling and picking attacks for everyday security.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon wi-security-feat__icon--borderless"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Ultion Upgrade Available</h4><p style="color:rgba(255,255,255,.45);">Upgrade to Ultion 11-pin cylinder with a £1,000 break-in guarantee — the most secure cylinder available.</p></div>
            </div>

        </div>
        </div>

        {{-- Ultion Upgrade Feature --}}
        <div style="margin-top:1px;background:#131313;padding:var(--wi-pad);display:flex;align-items:flex-start;gap:20px;flex-wrap:wrap;border-top:1px solid #2a2a2a;">
            <div style="flex:1;min-width:280px;">7 
                <span class="wi-badge" style="margin-bottom:14px;background:rgba(255,255,255,.08);border-color:rgba(255,255,255,.15);color:rgba(255,255,255,.7);">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                    Optional Upgrade
                </span>
                <h3 style="font-size:1.2rem;font-weight:800;color:#fff;margin-bottom:10px;letter-spacing:-.015em;">Ultion Cylinder Lock Upgrade</h3>
                <p style="font-size:.93rem;color:rgba(255,255,255,.5);line-height:1.7;">An <strong style="color:rgba(255,255,255,.75);">11-pin security cylinder</strong> with a <strong style="color:rgba(255,255,255,.75);">£1,000 break-in guarantee</strong> from Ultion — the most secure euro cylinder on the market. Snapping resistant, drill resistant and pick resistant.</p>
            </div>
            <div style="display:flex;flex-direction:column;gap:6px;min-width:200px;">
                <div style="display:flex;align-items:center;gap:10px;padding:10px 14px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:14px;height:14px;color:rgba(255,255,255,.5);flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                    <span style="font-size:.82rem;color:rgba(255,255,255,.6);">11-pin security mechanism</span>
                </div>
                <div style="display:flex;align-items:center;gap:10px;padding:10px 14px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:14px;height:14px;color:rgba(255,255,255,.5);flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                    <span style="font-size:.82rem;color:rgba(255,255,255,.6);">Snap, drill &amp; pick resistant</span>
                </div>
                <div style="display:flex;align-items:center;gap:10px;padding:10px 14px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:14px;height:14px;color:rgba(255,255,255,.5);flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg>
                    <span style="font-size:.82rem;color:rgba(255,255,255,.6);">£1,000 break-in guarantee</span>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════════════════
     SECTION 3 — GLASS + COLOURS + FRAMES
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-section">
    <div class="wi-container">
        <div class="wi-section__header">
            <span class="wi-section__eyebrow">Materials & Finish</span>
            <h2 class="wi-section__title">Glass, Colours & Frames</h2>
            <p class="wi-section__desc">The same premium materials we use in our windows — specified for doors.</p>
        </div>

        <div class="wi-grid-wrap">
        <div class="wi-grid wi-grid--2">

            {{-- S5 — Glass Technology --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Glass Technology</h2>
                <div class="wi-card__body">
                    <p>Glazed door panels use the same advanced glass specification as our A+ windows — <strong>Pilkington KS inner pane</strong> with Optiwhite outer, argon gas filled, and black SuperSpacer.</p>
                </div>
                <table class="wi-spec-table">
                    <tbody>
                        <tr><td>Inner pane</td><td>Pilkington KS</td></tr>
                        <tr><td>Outer pane</td><td>Pilkington Optiwhite</td></tr>
                        <tr><td>Gas filling</td><td>Argon Gas</td></tr>
                        <tr><td>Spacer bar</td><td>Black SuperSpacer</td></tr>
                        <tr><td>Thickness (double)</td><td>28 mm</td></tr>
                        <tr><td>U-value</td><td>From 1.0 to 1.4</td></tr>
                    </tbody>
                </table>
                <p class="wi-card__body" style="margin-top:18px;"><strong>Optional decorative glass:</strong></p>
                <div class="wi-spec-pills">
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" stroke-width="1.5"/><line x1="3" y1="9" x2="21" y2="9" stroke-width="1.5"/><line x1="9" y1="3" x2="9" y2="21" stroke-width="1.5"/></svg>Georgian Bars</span>
                    <span class="wi-spec-pill">Obscure Glass</span>
                    <span class="wi-spec-pill">Lead-Lined Glass</span>
                    <span class="wi-spec-pill">Toughened Safety Glass</span>
                </div>

                <div style="margin-top: 40px; padding-top: 24px; border-top: 1px solid var(--wi-border);">
                    <h2 class="wi-card__title">Performance &amp; Protection</h2>
                    <div class="wi-card__body">
                        <p>Designed to provide excellent thermal performance, security and durability, our door systems combine high-quality glazing with robust profiles and hardware for everyday residential use.</p>
                    </div>
                    <div class="wi-spec-pills" style="margin-top:16px;">
                        <span class="wi-spec-pill">Energy Efficient</span>
                        <span class="wi-spec-pill">Secure Multi-Point Locking</span>
                        <span class="wi-spec-pill">Weather Resistant</span>
                        <span class="wi-spec-pill">Low Maintenance</span>
                    </div>
                </div>
            </div>

            {{-- S6 — Colours --}}
            <div class="wi-card">
                <div class="wi-card__img wi-card__img--full">
                    <img src="{{ asset('assets/products/door1.2.jpg') }}" alt="Door Colour Finishes" loading="lazy">
                </div>
                <h2 class="wi-card__title">Colours &amp; Finishes</h2>
                <div class="wi-card__body">
                    <p>Our door frames can be ordered in authentic wood-like finishes or <strong>bespoke flat colour coatings</strong> — matching most RAL codes and custom samples. Internal and external colours can differ.</p>
                    <p style="font-size:.85rem;color:var(--wi-text-muted);">Bespoke colour coating may extend delivery by up to 4 weeks.</p>
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
                    <div class="wi-swatch" style="background:#d0d0d0;" title="Agate Grey"></div>
                </div>
            </div>

            {{-- S7 — Door Frames --}}
            <div class="wi-card">
                <h2 class="wi-card__title">Door Frames</h2>
                <h3 class="wi-card__sub">Heritage 2800 Profile — Deceuninck</h3>
                <div class="wi-card__body">
                    <p>Our door frames use the same British-made <strong>Deceuninck Heritage 2800 profile</strong> as our windows. Sculptured, durable and precision-extruded — a consistently high standard across your entire installation.</p>
                </div>
                <div class="wi-spec-pills" style="margin-top:20px;">
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21l1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/></svg>British Manufactured</span>
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"/></svg>Heritage 2800</span>
                    <span class="wi-spec-pill">Low Maintenance</span>
                    <span class="wi-spec-pill">High Durability</span>
                </div>
            </div>

            {{-- S8 — Hardware --}}
            <div class="wi-card wi-card--grey">
                <h2 class="wi-card__title">Door Hardware</h2>
                <div class="wi-card__body">
                    <p>All hardware is chosen for longevity and appearance. We offer a variety of handles, letterboxes, knockers and hinges to complete the look of your door.</p>
                </div>
                <ul class="wi-checklist" style="margin-top:16px;">
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Choice of handle styles &amp; finishes</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Matching letterbox &amp; knocker options</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Heavy-duty stainless steel hinges</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Spy hole option for front doors</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Weather-resistant finish</li>
                </ul>
            </div>

        </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════════════════
     SECTION 4 — INDIVIDUAL DOOR TYPES
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-section" style="padding-top:0;">
    <div class="wi-container">
        <div class="wi-section__header">
            <span class="wi-section__eyebrow">Specific Styles</span>
            <h2 class="wi-section__title">Door Range</h2>
            <p class="wi-section__desc">Explore each door type and what makes it the right choice for your home.</p>
        </div>

        <div class="wi-grid-wrap">
        <div class="wi-grid wi-grid--3">

            {{-- S9 — PVC Doors --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:4/3;">
                    <img src="{{ asset('assets/products/door1.1.jpg') }}" alt="PVC UPVC Front Doors" loading="lazy" style="object-fit: contain; background: #fff;">
                </div>
                <h2 class="wi-card__title">PVC Doors</h2>
                <div class="wi-card__body">
                    <p>Our most versatile door style — suitable as front, back and side access doors. Fully customisable in colour, glass, hardware and size. PAS24:2022 certified as standard.</p>
                </div>
                <a href="/doors/pvc-doors" class="wi-card-cta" id="cta-pvc-doors">
                    View PVC Doors
                </a>
            </div>

            {{-- S10 — Flush Doors --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:4/3;">
                    <img src="{{ asset('assets/products/door2.1.jpg') }}" alt="Flush UPVC Doors" loading="lazy" style="object-fit: contain; background: #fff;">
                </div>
                <h2 class="wi-card__title">Flush Doors</h2>
                <div class="wi-card__body">
                    <p>A flat, contemporary look that works beautifully on modern homes. The sash sits flush within the outer frame — clean lines, minimal profile, maximum kerb appeal.</p>
                </div>
                <a href="/doors/flush-doors" class="wi-card-cta" id="cta-flush-doors">
                    View Flush Doors
                </a>
            </div>

            {{-- S11 — French Doors --}}
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:4/3;">
                    <img src="{{ asset('assets/products/door3.1.jpg') }}" alt="French UPVC Doors" loading="lazy" style="object-fit: contain; background: #fff;">
                </div>
                <h2 class="wi-card__title">French Doors</h2>
                <div class="wi-card__body">
                    <p>Double-leaf doors that open fully, flooding a room with natural light and creating a seamless connection to your garden or patio. Available in opening-in or opening-out configurations.</p>
                </div>
                <a href="/doors/french-doors" class="wi-card-cta" id="cta-french-doors">
                    View French Doors
                </a>
            </div>

        </div>
        </div>

        {{-- Guarantee --}}
        <div class="wi-grid-wrap" style="margin-top:1px;">
        <div class="wi-card" style="background:var(--wi-accent-bg);">
            <h2 class="wi-card__title">Door Guarantee</h2>
            <div class="wi-card__body">
                <p>We stand behind every door we manufacture with comprehensive warranty cover.</p>
            </div>
            <div class="wi-warranty-grid" style="margin-top:20px;">
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
                    <div class="wi-warranty-item__desc">Against condensation in units</div>
                </div>
                <div class="wi-warranty-item">
                    <div class="wi-warranty-item__num">5</div>
                    <span class="wi-warranty-item__unit">Years</span>
                    <div class="wi-warranty-item__label">Locking System</div>
                    <div class="wi-warranty-item__desc">Multi-point lock mechanism</div>
                </div>
                <div class="wi-warranty-item">
                    <div class="wi-warranty-item__num">1</div>
                    <span class="wi-warranty-item__unit">Year</span>
                    <div class="wi-warranty-item__label">Moving Hardware</div>
                    <div class="wi-warranty-item__desc">Against failure in operation</div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════════════════
     SECTION 5 — MANUFACTURING (dark banner)
     ═══════════════════════════════════════════════════════════════════════════ --}}
<div class="wi-prod-wrapper">
    <div class="wi-container">
        <div class="wi-prod-layout">
            <div>
                <div class="wi-divider-line" style="background:rgba(255,255,255,.3);"></div>
                <span class="wi-section__eyebrow" style="color:rgba(255,255,255,.35);">In Our Factory</span>
                <h2 class="wi-section__title" style="color:#fff;margin-top:10px;">Manufactured With Precision</h2>
                <div class="wi-card__body" style="color:rgba(255,255,255,.55);margin-top:12px;">
                    <p>We invest continuously in our manufacturing machinery to ensure millimetre accuracy and a premium finish. Every door passes our quality control system before it leaves the factory.</p>
                </div>
            </div>
            <div class="wi-production-highlights">
                <div class="wi-prod-highlight">
                    <div class="wi-prod-highlight__icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
                    </div>
                    <h3>Precision</h3>
                    <p>Accurate to the millimetre</p>
                </div>
                <div class="wi-prod-highlight">
                    <div class="wi-prod-highlight__icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3>Quality Control</h3>
                    <p>Every door rigorously checked</p>
                </div>
                <div class="wi-prod-highlight">
                    <div class="wi-prod-highlight__icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"/></svg>
                    </div>
                    <h3>Made In-House</h3>
                    <p>Full control start to finish</p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- ═══════════════════════════════════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════════════════════════════════ --}}
<section class="wi-section" style="padding-top:40px;">
    <div class="wi-container">
        <div class="wi-card wi-col-full" style="padding:0;">
            <div style="display:grid; grid-template-columns: 1fr 1fr; align-items: stretch;" class="wi-cta-split">
                <div class="wi-cta-split__img">
                    <img src="{{ asset('assets/about/p2.png') }}" alt="Design your doors" style="width:100%; height:100%; object-fit:cover; display:block;" loading="lazy">
                </div>
                <div style="padding: clamp(32px, 5vw, 64px); display:flex; flex-direction:column; justify-content:center;">
                    <h2 class="wi-section__title" style="margin-bottom:16px;">Ready to design your doors?</h2>
                    <p class="wi-section__desc" style="margin-bottom:32px; max-width:100%;">Browse our three door styles, configure your exact specification and get an instant online price.</p>
                    <div class="wi-cta-actions" style="justify-content:flex-start;">
                        <a href="/contact" class="wi-btn-primary" style="background:var(--wi-text-dark); color:var(--wi-card-bg);" id="cta-design-doors">
                            Design &amp; Price Your Doors
                        </a>
                    </div>
                </div>
            </div>
            <style>
            @media(max-width:767px){
                .wi-cta-split{grid-template-columns:1fr!important;}
                .wi-cta-split__img{height:250px;}
            }
            #cta-design-doors { transition: background 0.3s; }
            #cta-design-doors:hover { background: #555 !important; color: #fff !important; }
            [data-theme=dark] #cta-design-doors { background:#fff !important; color:#000 !important; }
            [data-theme=dark] #cta-design-doors:hover { background:#ccc !important; color:#000 !important; }
            </style>
        </div>
    </div>
</section>

</div>{{-- /wi-page --}}
@endsection
