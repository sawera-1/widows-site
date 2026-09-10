<?php $__env->startSection('title', 'Windows Information — Energy Efficiency, Security & Quality | Modern UPVC Windows'); ?>
<?php $__env->startSection('meta_description', 'Everything you need to know about our UPVC windows — A+ energy ratings, PAS24:2022 security, Heritage 2800 profiles, Pilkington glass technology, colours, guarantees and in-house precision manufacturing.'); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/information.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="wi-page">


<section class="wi-hero" aria-label="Windows Information">
    <img src="<?php echo e(asset('assets/products/1.1.jpg')); ?>" alt="Premium UPVC Windows" class="wi-hero__bg" loading="eager">
    <div class="wi-hero__overlay" aria-hidden="true"></div>
    <div class="wi-hero__inner">
        <span class="wi-hero__eyebrow">Windows</span>
        <h1 class="wi-hero__title">What makes our windows <em>exceptional</em></h1>
        <p class="wi-hero__sub">We manufacture our windows right here in our own factory — giving us the freedom to deliver A+ rated, PAS24 certified, bespoke UPVC windows with no compromise.</p>
        <a href="/windows" class="wi-hero__cta" id="hero-cta-windows">
            Explore Window Designs
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>



<section class="wi-section">
    <div class="wi-container">
        <div class="wi-section__header">
            <span class="wi-section__eyebrow">Our Range</span>
            <h2 class="wi-section__title">Window Designs & Energy Performance</h2>
            <p class="wi-section__desc">Five distinct window styles, all manufactured to A+ standard and beyond.</p>
        </div>

        <div class="wi-grid-wrap">
        <div class="wi-grid wi-grid--2">

            
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:16/9;">
                    <img src="<?php echo e(asset('assets/products/1.2.jpg')); ?>" alt="Premium UPVC Window Designs" loading="lazy">
                </div>
                <h2 class="wi-card__title">Window Designs</h2>
                <div class="wi-card__body">
                    <p>Because we manufacture your windows in our own factory we are not restricted to supplier design limitations. We tailor your windows to your exact needs using our unique online window designer.</p>
                </div>
                <div class="wi-product-strip">
                    <?php $winProducts = [
                        ['name' => 'Standard', 'slug' => 'standard-casement', 'img' => '1.1.jpg'],
                        ['name' => 'French',   'slug' => 'french-windows',    'img' => '2.1.jpg'],
                        ['name' => 'Tilt & Turn','slug'=> 'tilt-and-turn-windows','img'=>'3.1.jpg'],
                        ['name' => 'Flush',    'slug' => 'flush-windows',     'img' => '4.1.jpg'],
                        ['name' => 'Sash',     'slug' => 'sash-windows',      'img' => '5.1.jpg'],
                    ]; ?>
                    <?php $__currentLoopData = $winProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/windows/<?php echo e($wp['slug']); ?>" class="wi-product-mini" id="mini-<?php echo e($wp['slug']); ?>">
                        <img src="<?php echo e(asset('assets/products/' . $wp['img'])); ?>" alt="<?php echo e($wp['name']); ?> Windows" class="wi-product-mini__img" loading="lazy">
                        <?php echo e($wp['name']); ?>

                        <svg class="wi-product-mini__arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div class="wi-card">
                <h2 class="wi-card__title">Window Energy Rating (WER)</h2>
                <div class="wi-card__body">
                    <p>As standard you receive ultra-efficient <strong>A+ rated windows</strong>. Our casement windows utilise some of the most advanced double glazing on the market — easily exceeding building regulations.</p>
                    <p>For even higher performance we also manufacture <strong>A++ triple glazed windows</strong>, BFRC certified.</p>
                </div>
                <div class="wi-energy-rating">
                    <div class="wi-energy-bar wi-energy-bar--app"><span>A++</span><span class="wi-energy-bar__label">Triple Glazed</span></div>
                    <div class="wi-energy-bar wi-energy-bar--ap wi-energy-bar--selected"><span>A+</span><span class="wi-energy-bar__label">Our Standard</span></div>
                    <div class="wi-energy-bar wi-energy-bar--a"><span>A</span></div>
                    <div class="wi-energy-bar wi-energy-bar--b"><span>B</span></div>
                    <div class="wi-energy-bar wi-energy-bar--c"><span>C</span></div>
                    <div class="wi-energy-bar wi-energy-bar--d"><span>D</span></div>
                    <div class="wi-energy-bar wi-energy-bar--e"><span>E</span></div>
                </div>
                <span class="wi-badge">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Exceeds Building Regulations
                </span>
            </div>

            
            <div class="wi-card">
                <div class="wi-img-float">
                    <img src="<?php echo e(asset('assets/products/4.2.jpg')); ?>" alt="Energy Efficient Glass" loading="lazy" style="border-radius:0;">
                </div>
                <h2 class="wi-card__title">Home Energy Efficiency</h2>
                <div class="wi-card__body">
                    <p>Our energy efficient windows make a real difference in winter by reducing heat loss through a special coating on each pane that reflects heat back into the room.</p>
                    <p>All units are filled with <strong>argon gas</strong> — denser than air, highly effective at reducing heat transfer.</p>
                </div>
                <ul class="wi-checklist" style="clear:both;">
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Advanced glazing technology</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Argon gas filled units</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Heat-reflecting glass coating</li>
                    <li><span class="wi-checklist__icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>Reduced energy consumption</li>
                </ul>
            </div>

            
            <div class="wi-card">
                <div class="wi-compare" style="margin-top:0;">
                    <div class="wi-compare-item">
                        <img src="<?php echo e(asset('assets/products/1.1.jpg')); ?>" alt="Standard UPVC Window" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Double Glazed A+</div>
                    </div>
                    <div class="wi-compare-item">
                        <img src="<?php echo e(asset('assets/products/4.1.jpg')); ?>" alt="Flush UPVC Window" class="wi-compare-item__img" loading="lazy">
                        <div class="wi-compare-item__label">Triple Glazed A++</div>
                    </div>
                </div>
                <h2 class="wi-card__title" style="margin-top:20px;">Triple Glazed — Now A++</h2>
                <div class="wi-card__body">
                    <p>Using the same advanced Pilkington glass as our double glazing, we add an extra KS pane with a thinner bead — achieving a superb <strong>A++ BFRC rating</strong> without increasing frame thickness.</p>
                </div>
                <div class="wi-rating-badge">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    <span class="wi-rating-badge__num">A++</span>
                    Rating — BFRC Certified
                </div>
            </div>

        </div>
        </div>
    </div>
</section>



<section class="wi-section wi-section--dark">
    <div class="wi-container">
        <div style="display:flex;align-items:flex-start;justify-content:space-between;flex-wrap:wrap;gap:24px;margin-bottom:32px;">
            <div>
                <span class="wi-section__eyebrow" style="color:rgba(255,255,255,.4);">Safety First</span>
                <h2 class="wi-section__title" style="color:#fff;">Security — PAS24:2022</h2>
                <p class="wi-section__desc" style="color:rgba(255,255,255,.5);">Industry-leading protection built in as standard — required for new builds &amp; extensions under Document Q.</p>
            </div>
            <div class="wi-pas24" style="border-color:rgba(255,255,255,.35);color:#fff;">
                <span class="wi-pas24__label">Accredited</span>
                <span class="wi-pas24__num">PAS24</span>
                <span class="wi-pas24__year">:2022</span>
            </div>
        </div>

        <div class="wi-grid-wrap" style="border-color:#2a2a2a;">
        <div class="wi-security-grid" style="background:#2a2a2a;">

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon" style="background:#fff;"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">PAS24:2022 Accreditation</h4><p style="color:rgba(255,255,255,.45);">Strengthened against break-ins. Required for new builds &amp; extensions to comply with Document Q.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon" style="background:#fff;"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Yale Locking System</h4><p style="color:rgba(255,255,255,.45);">Free upgrade to Yale shootbolt locking — a highly secure, multi-point window lock.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon" style="background:#fff;"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Internal Glazing Beads</h4><p style="color:rgba(255,255,255,.45);">Glass can only be removed from the inside — preventing external removal of panes.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon" style="background:#fff;"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Two-Stage Locking</h4><p style="color:rgba(255,255,255,.45);">First position fully closes; second locks with a small ventilation gap — security without sacrificing airflow.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon" style="background:#fff;"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Key-Locking Handles</h4><p style="color:rgba(255,255,255,.45);">Key-locked handles add an additional barrier against unauthorised entry.</p></div>
            </div>

            <div class="wi-security-feat" style="background:#181818;">
                <div class="wi-security-feat__icon" style="background:#fff;"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                <div class="wi-security-feat__text"><h4 style="color:#fff;">Yale Shootbolt Upgrade</h4><p style="color:rgba(255,255,255,.45);">Optional shootbolt upgrade for even greater multi-point locking performance.</p></div>
            </div>

        </div>
        </div>
    </div>
</section>



<section class="wi-section">
    <div class="wi-container">
        <div class="wi-section__header">
            <span class="wi-section__eyebrow">Materials & Finish</span>
            <h2 class="wi-section__title">Glass, Colours & Frames</h2>
            <p class="wi-section__desc">Premium materials chosen for durability, performance and visual quality.</p>
        </div>

        <div class="wi-grid-wrap">
        <div class="wi-grid wi-grid--2">

            
            <div class="wi-card">
                <h2 class="wi-card__title">Glass Technology — Pilkington</h2>
                <div class="wi-card__body">
                    <p>To achieve A+ energy efficiency we use the latest glass technology from Pilkington, known as <strong>Pilkington EnergiKare</strong>.</p>
                </div>
                <table class="wi-spec-table">
                    <tbody>
                        <tr><td>Inner pane</td><td>Pilkington KS</td></tr>
                        <tr><td>Outer pane</td><td>Pilkington Optiwhite</td></tr>
                        <tr><td>Gas filling</td><td>Argon Gas</td></tr>
                        <tr><td>Spacer bar</td><td>Black SuperSpacer</td></tr>
                        <tr><td>Thickness (double)</td><td>28 mm</td></tr>
                        <tr><td>Thickness (triple)</td><td>40 mm</td></tr>
                        <tr><td>U-value</td><td>From 0.70 to 1.22</td></tr>
                    </tbody>
                </table>
                <p class="wi-card__body" style="margin-top:18px;"><strong>Optional decorative glass:</strong></p>
                <div class="wi-spec-pills">
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" stroke-width="1.5"/><line x1="3" y1="9" x2="21" y2="9" stroke-width="1.5"/><line x1="9" y1="3" x2="9" y2="21" stroke-width="1.5"/></svg>Georgian Bars</span>
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="1" stroke-width="1.5"/><line x1="3" y1="12" x2="21" y2="12" stroke-width="1.5"/></svg>Square Lead</span>
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><polygon points="12,3 21,9 21,15 12,21 3,15 3,9" stroke-width="1.5"/></svg>Diamond Lead</span>
                </div>
            </div>

            
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:3/1;">
                    <img src="<?php echo e(asset('assets/products/5.1.jpg')); ?>" alt="UPVC Colour Finishes" loading="lazy">
                </div>
                <h2 class="wi-card__title">Colours &amp; Finishes</h2>
                <div class="wi-card__body">
                    <p>Our Heritage 2800 frames can be ordered in authentic wood-like finishes across an amazing array of colours. We also offer <strong>bespoke flat colour coatings</strong> — matching most RAL codes and custom samples.</p>
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
                    <div class="wi-swatch" style="background:#a1628c;" title="Purple"></div>
                    <div class="wi-swatch" style="background:#2b4590;" title="Royal Blue"></div>
                    <div class="wi-swatch" style="background:#d0d0d0;" title="Agate Grey"></div>
                </div>
            </div>

            
            <div class="wi-card wi-col-full">
                <div style="display:grid;grid-template-columns:1fr auto;gap:24px;align-items:start;" class="wi-blind-outer">
                    <div>
                        <h2 class="wi-card__title">Internal Magnetic Blinds</h2>
                        <div class="wi-card__body">
                            <p>Venetian blinds permanently sealed inside the glass units — maintenance-free, dust-proof and clean-looking.</p>
                        </div>
                        <div class="wi-blind-grid">
                            <div class="wi-blind-item">
                                <h4>Cordless</h4>
                                <p>Single magnetic slider on the edge of the sealed unit. Raise, lower and tilt completely cord-free.</p>
                            </div>
                            <div class="wi-blind-item">
                                <h4>Cordless Dual-Sided</h4>
                                <p>Slide guides on both edges of the glass for a symmetrical appearance.</p>
                            </div>
                            <div class="wi-blind-item">
                                <h4>Corded</h4>
                                <p>Rotational cord winder at the top — allows larger blind sizes and maximum light control.</p>
                            </div>
                        </div>
                    </div>
                    <div style="width:180px;flex-shrink:0;" class="wi-blind-img-col">
                        <img src="<?php echo e(asset('assets/products/2.2.jpg')); ?>" alt="Internal Magnetic Blinds" style="width:100%;display:block;border:1px solid var(--wi-border);" loading="lazy">
                    </div>
                </div>
                <style>
                @media(max-width:767px){
                    .wi-blind-outer{grid-template-columns:1fr!important;}
                    .wi-blind-img-col{width:100%!important;}
                }
                </style>
            </div>

            
            <div class="wi-card">
                <h2 class="wi-card__title">Window Frames</h2>
                <h3 class="wi-card__sub">Heritage 2800 Profile — Deceuninck</h3>
                <div class="wi-card__body">
                    <p>Our profile is made in Britain by <strong>Deceuninck</strong>, one of the leading profile extruders in the country. The Heritage 2800 has an attractive sculptured finish — durable, low-maintenance and ideal for high-performance glazing.</p>
                </div>
                <div class="wi-spec-pills" style="margin-top:20px;">
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21l1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/></svg>British Manufactured</span>
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/></svg>Heritage 2800</span>
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>Sculptured Finish</span>
                    <span class="wi-spec-pill"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>High Durability</span>
                </div>
            </div>

            
            <div class="wi-card">
                <h2 class="wi-card__title">Odd-Shaped Windows</h2>
                <div class="wi-card__body">
                    <p>Our non-rectangular windows have many unusual shapes to choose from, allowing you to complement any architectural style — from traditional to contemporary.</p>
                </div>
                <div class="wi-spec-pills" style="margin-top:16px;">
                    <span class="wi-spec-pill">Triangle</span>
                    <span class="wi-spec-pill">Pentagon</span>
                    <span class="wi-spec-pill">Circular</span>
                    <span class="wi-spec-pill">Hexagon</span>
                    <span class="wi-spec-pill">Apex</span>
                    <span class="wi-spec-pill">+ More</span>
                </div>
                <a href="/windows" class="wi-card-cta" style="margin-top:24px;" id="cta-odd-shapes">
                    Explore Window Designs
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>
        </div>
    </div>
</section>



<section class="wi-section" style="padding-top:0;">
    <div class="wi-container">
        <div class="wi-section__header">
            <span class="wi-section__eyebrow">Specific Styles</span>
            <h2 class="wi-section__title">Window Range</h2>
            <p class="wi-section__desc">Explore each window type and what makes it unique.</p>
        </div>

        <div class="wi-grid-wrap">
        <div class="wi-grid wi-grid--3">

            
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:4/3;">
                    <img src="<?php echo e(asset('assets/products/4.1.jpg')); ?>" alt="Flush UPVC Windows" loading="lazy">
                </div>
                <h2 class="wi-card__title">Flush Windows</h2>
                <div class="wi-card__body">
                    <p>Openers sit neatly flush within the external frame — replicating the timeless look of traditional wooden windows with far superior energy efficiency. A+ rated as standard.</p>
                </div>
                <a href="/windows/flush-windows" class="wi-card-cta" id="cta-flush">
                    View Flush Windows
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:4/3;">
                    <img src="<?php echo e(asset('assets/products/2.1.jpg')); ?>" alt="French UPVC Windows" loading="lazy">
                </div>
                <h2 class="wi-card__title">French Windows</h2>
                <div class="wi-card__body">
                    <p>Open completely without a central vertical bar — maximum ventilation, fire escape access and ground-floor access. Two-stage locking as standard.</p>
                </div>
                <a href="/windows/french-windows" class="wi-card-cta" id="cta-french">
                    View French Windows
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:4/3;">
                    <img src="<?php echo e(asset('assets/products/3.1.jpg')); ?>" alt="Tilt & Turn UPVC Windows" loading="lazy">
                </div>
                <h2 class="wi-card__title">Tilt &amp; Turn Windows</h2>
                <div class="wi-card__body">
                    <p>Open inwards for easy cleaning and safe ventilation. Turn the handle to middle position and the window opens like a standard side opener — best of both worlds.</p>
                </div>
                <a href="/windows/tilt-and-turn-windows" class="wi-card-cta" id="cta-tilt">
                    View Tilt &amp; Turn
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:4/3;">
                    <img src="<?php echo e(asset('assets/products/5.1.jpg')); ?>" alt="Sash UPVC Windows" loading="lazy">
                </div>
                <h2 class="wi-card__title">Sash Windows</h2>
                <div class="wi-card__body">
                    <p>Designed to replicate original timber sashes while delivering modern thermal and acoustic performance. Ideal for period properties and conservation areas.</p>
                </div>
                <a href="/windows/sash-windows" class="wi-card-cta" id="cta-sash">
                    View Sash Windows
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            
            <div class="wi-card">
                <div class="wi-card__img" style="aspect-ratio:4/3;">
                    <img src="<?php echo e(asset('assets/products/1.1.jpg')); ?>" alt="Standard Casement UPVC Windows" loading="lazy">
                </div>
                <h2 class="wi-card__title">Standard Casement Windows</h2>
                <div class="wi-card__body">
                    <p>Our most popular and versatile window style — fully customisable in size, colour and hardware. A+ rated, PAS24 certified and manufactured to the millimetre.</p>
                </div>
                <a href="/windows/standard-casement" class="wi-card-cta" id="cta-standard">
                    View Standard Windows
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            
            <div class="wi-card wi-card--grey">
                <h2 class="wi-card__title">Window Guarantee</h2>
                <div class="wi-card__body">
                    <p>Industry-leading warranty cover — complete peace of mind from the moment of installation.</p>
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
                        <div class="wi-warranty-item__desc">Against condensation</div>
                    </div>
                    <div class="wi-warranty-item">
                        <div class="wi-warranty-item__num">2</div>
                        <span class="wi-warranty-item__unit">Years</span>
                        <div class="wi-warranty-item__label">Astragal Bars</div>
                        <div class="wi-warranty-item__desc">Decorative bar guarantee</div>
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
    </div>
</section>



<div class="wi-prod-wrapper">
    <div class="wi-container">
        <div class="wi-prod-layout">
            <div>
                <div class="wi-divider-line" style="background:rgba(255,255,255,.3);"></div>
                <span class="wi-section__eyebrow" style="color:rgba(255,255,255,.35);">In Our Factory</span>
                <h2 class="wi-section__title" style="color:#fff;margin-top:10px;">Manufactured With Precision</h2>
                <div class="wi-card__body" style="color:rgba(255,255,255,.55);margin-top:12px;">
                    <p>We invest continuously in machinery to ensure millimetre accuracy and a high-quality finish. Our quality-control system ensures every window leaves our factory to the highest standard.</p>
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
                    <p>Every window rigorously checked</p>
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



<section class="wi-cta-section">
    <div class="wi-container">
        <div class="wi-cta-section__inner">
            <h2 class="wi-cta-section__title">Ready to design your windows?</h2>
            <p class="wi-cta-section__sub">Browse our five window styles, configure your exact specification and get an instant online price.</p>
            <div class="wi-cta-actions">
                <a href="/windows" class="wi-btn-primary" id="cta-design-windows">
                    Design &amp; Price Your Windows
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="/contact" class="wi-btn-outline" id="cta-contact-windows">
                    Speak to an Expert
                </a>
            </div>
        </div>
    </div>
</section>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/windows-info.blade.php ENDPATH**/ ?>