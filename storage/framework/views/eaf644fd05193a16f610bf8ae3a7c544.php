<?php $__env->startSection('title', 'Choose Your Sliding Sash Window Style — uPVC Windows'); ?>
<?php $__env->startSection('meta_description', 'Select your sliding sash style and glazing bar design to get an instant online quote.'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* ── Container ───────────────────────────────────────── */
    .wdc-container { width: 100%; max-width: 1280px; margin-inline: auto; padding-inline: 16px; }
    @media (min-width: 768px) { .wdc-container { padding-inline: 24px; } }

    /* ── Section spacing ─────────────────────────────────── */
    .wdc-section { padding-block: 40px; }
    @media (min-width: 768px)  { .wdc-section { padding-block: 56px; } }
    @media (min-width: 1024px) { .wdc-section { padding-block: 72px; } }

    /* ── Grid ────────────────────────────────────────────── */
    .wdc-grid { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 48px; }
    @media (min-width: 540px)  { .wdc-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 900px)  { .wdc-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 1200px) { .wdc-grid { grid-template-columns: repeat(5, 1fr); } }

    .wdc-grid-10 { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 48px; }
    @media (min-width: 540px)  { .wdc-grid-10 { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 900px)  { .wdc-grid-10 { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 1200px) { .wdc-grid-10 { grid-template-columns: repeat(5, 1fr); } }

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
        width: 100%; height: 220px;
        display: flex; align-items: center; justify-content: center;
        background: #f8f8f8; padding: 14px; box-sizing: border-box;
        position: relative; overflow: hidden;
    }
    @media (min-width: 768px) { .wdc-window-wrap { height: 230px; } }
    [data-theme="dark"] .wdc-window-wrap { background: #1a1a1a; }

    /* ── Dynamic HTML/CSS UPVC Sash Window Visualizer ───────── */
    .upvc-sash-window {
        --frame: #737373;
        --frame-dark: #4b4b4b;
        --mullion: #8a8a8a;
        --glass-a: #eef2f5;
        --glass-b: #d7e1e8;

        position: relative;
        width: 100%;
        max-width: 130px;
        max-height: 185px;
        aspect-ratio: 2 / 3;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: var(--sash-rows, 1fr 1fr);
        gap: 4px;
        background: var(--mullion);
        border: 5px solid var(--frame);
        border-radius: 1px;
        padding: 4px;
        box-sizing: border-box;
        box-shadow: inset 0 0 0 1px var(--frame-dark);
        transition: border-color .2s ease;
        overflow: hidden;
    }
    .wdc-card:hover .upvc-sash-window { --frame: #000; --frame-dark: #000; }
    [data-theme="dark"] .upvc-sash-window { --frame: #9a9a9a; --frame-dark: #666; --mullion: #555; --glass-a: #2b2f33; --glass-b: #1c2024; }
    [data-theme="dark"] .wdc-card:hover .upvc-sash-window { --frame: #fff; --frame-dark: #fff; }

    .upvc-pane {
        background: linear-gradient(135deg, var(--glass-a) 0%, var(--glass-b) 100%);
        box-shadow: inset 0 0 0 1px rgba(0,0,0,.08);
        min-width: 0; min-height: 0; position: relative; overflow: hidden;
    }

    /* Sliding arrow indicators matching Image 2 */
    .upvc-pane.pane-top::after {
        content: "↓"; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);
        font-size: 16px; font-weight: 900; color: rgba(0,0,0,0.3); pointer-events: none;
    }
    .upvc-pane.pane-bottom::after {
        content: "↑"; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);
        font-size: 16px; font-weight: 900; color: rgba(0,0,0,0.3); pointer-events: none;
    }

    /* Curved top head styles matching Image 2 */
    .upvc-sash-window.is-swept {
        border-top-left-radius: 40px 24px !important;
        border-top-right-radius: 40px 24px !important;
    }
    .upvc-sash-window.is-arch {
        border-top-left-radius: 65px !important;
        border-top-right-radius: 65px !important;
    }

    /* Decorative Glazing Bars Overlays */
    .bars-centre .upvc-pane::after {
        content: ""; position: absolute; left: 50%; top: 0; bottom: 0; width: 2px;
        background: rgba(0,0,0,0.3); transform: translateX(-50%);
    }
    .bars-three .upvc-pane::before {
        content: ""; position: absolute; left: 33.3%; top: 0; bottom: 0; width: 1.5px; background: rgba(0,0,0,0.3);
    }
    .bars-three .upvc-pane::after {
        content: ""; position: absolute; right: 33.3%; top: 0; bottom: 0; width: 1.5px; background: rgba(0,0,0,0.3);
    }
    .bars-georgian .upvc-pane::before {
        content: ""; position: absolute; left: 50%; top: 0; bottom: 0; width: 1.5px; background: rgba(0,0,0,0.3); transform: translateX(-50%);
    }
    .bars-georgian .upvc-pane::after {
        content: ""; position: absolute; top: 50%; left: 0; right: 0; height: 1.5px; background: rgba(0,0,0,0.3); transform: translateY(-50%);
    }
    .bars-half-georgian .upvc-pane:first-child::before {
        content: ""; position: absolute; left: 50%; top: 0; bottom: 0; width: 1.5px; background: rgba(0,0,0,0.3); transform: translateX(-50%);
    }
    .bars-half-georgian .upvc-pane:first-child::after {
        content: ""; position: absolute; top: 50%; left: 0; right: 0; height: 1.5px; background: rgba(0,0,0,0.3); transform: translateY(-50%);
    }
    .bars-margin .upvc-pane::after {
        content: ""; position: absolute; inset: 12%; border: 1.5px solid rgba(0,0,0,0.25);
    }

    /* ── Card body ───────────────────────────────────────── */
    .wdc-card-body {
        padding: 14px 18px 18px; display: flex; flex-direction: column; gap: 6px;
        border-top: 1px solid #f0f0f0; flex: 1;
    }
    [data-theme="dark"] .wdc-card-body { border-color: #2a2a2a; }
    .wdc-card-name { font-size: 14px; font-weight: 700; color: #000; line-height: 1.3; letter-spacing: .01em; }
    [data-theme="dark"] .wdc-card-name { color: #fff; }
    .wdc-card-desc { font-size: 12px; color: #64748b; line-height: 1.5; }
    [data-theme="dark"] .wdc-card-desc { color: #94a3b8; }

    .delivery-warning {
        display: inline-flex; align-items: center; gap: 4px;
        font-size: 10.5px; font-weight: 700; color: #b45309; background: #fffbeb;
        border: 1px solid #fde68a; border-radius: 3px; padding: 4px 8px; margin-top: 4px;
        line-height: 1.3;
    }
    [data-theme="dark"] .delivery-warning { background: #2d1a04; color: #fde68a; border-color: #78350f; }

    .wdc-card-cta {
        display: inline-flex; align-items: center; gap: 5px; font-size: 10.5px; font-weight: 700;
        letter-spacing: 1.2px; text-transform: uppercase; color: #737373; margin-top: auto;
        padding-top: 8px; border-top: 1px solid #f0f0f0; transition: color .2s;
    }
    .wdc-card:hover .wdc-card-cta { color: #000; }
    .wdc-card-cta svg { width: 12px; height: 12px; transition: transform .2s; flex-shrink: 0; }
    .wdc-card:hover .wdc-card-cta svg { transform: translateX(3px); }
    [data-theme="dark"] .wdc-card-cta { color: #555; border-color: #2a2a2a; }
    [data-theme="dark"] .wdc-card:hover .wdc-card-cta { color: #fff; }

    /* Selected state badge */
    .selected-style-bar {
        display: flex; align-items: center; justify-content: space-between;
        background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 4px;
        padding: 12px 16px; margin-bottom: 24px; font-size: 13px; font-weight: 700;
    }
    [data-theme="dark"] .selected-style-bar { background: #1e293b; border-color: #334155; color: #fff; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<?php
/* ── Level 1: Sash Styles ── */
$sashStyles = [
    'equal' => [
        'name' => 'Equal sashes',
        'desc' => 'Equal sized top and bottom sashes (50/50 split).',
        'rows' => [1, 1],
        'warning' => null,
    ],
    '2-fifths' => [
        'name' => '2 fifths top sash',
        'desc' => 'The top sash sized at ⅖ of the overall height (40/60 split).',
        'rows' => [0.67, 1],
        'warning' => null,
    ],
    '1-third' => [
        'name' => '1 third top sash',
        'desc' => 'The top sash sized at ⅓ of the overall height (⅓ / ⅔ split).',
        'rows' => [0.5, 1],
        'warning' => null,
    ],
    'swept-head' => [
        'name' => 'Swept-head',
        'desc' => 'Curved top using your own template with fixed top sash.',
        'rows' => [0.6, 1],
        'swept' => true,
        'warning' => 'Please allow an extra 4–5 weeks for delivery.',
    ],
    'true-arch' => [
        'name' => 'True-arch',
        'desc' => 'Fixed top sash with beautifully curved semi-circle arch.',
        'rows' => [0.6, 1],
        'arch' => true,
        'warning' => 'Please allow an extra 4–5 weeks for delivery.',
    ],
];

/* ── Level 2: Glazing Bar / Decorative Designs ── */
$glazingDesigns = [
    'non-georgian' => [
        'name' => 'Non Georgian',
        'desc' => 'Plain clear glass with no decorative glazing bars.',
        'bars' => 'none',
    ],
    'centre-bar' => [
        'name' => 'Centre bar',
        'desc' => 'Single vertical glazing bar down the centre of each sash.',
        'bars' => 'centre',
    ],
    'three-light' => [
        'name' => 'Three light',
        'desc' => 'Two vertical glazing bars dividing sashes into 3 vertical lights.',
        'bars' => 'three-light',
    ],
    'offset-three-light' => [
        'name' => 'Offset three light',
        'desc' => 'Asymmetric vertical glazing bar layout across sashes.',
        'bars' => 'three-light',
    ],
    'asymmetric' => [
        'name' => 'Asymmetric',
        'desc' => 'Custom asymmetric glazing bar configuration.',
        'bars' => 'centre',
    ],
    'half-georgian' => [
        'name' => 'Half Georgian',
        'desc' => 'Georgian grid in top sash only, plain glass in bottom sash.',
        'bars' => 'half-georgian',
    ],
    'georgian-centre-bar' => [
        'name' => 'Georgian centre Bar',
        'desc' => 'Full Georgian grid with prominent central vertical divider.',
        'bars' => 'georgian',
    ],
    'georgian' => [
        'name' => 'Georgian',
        'desc' => 'Classic full Georgian grid across both top and bottom sashes.',
        'bars' => 'georgian',
    ],
    'margin' => [
        'name' => 'Margin',
        'desc' => 'Perimeter margin border glazing bars around sash edges.',
        'bars' => 'margin',
    ],
    'georgian-variant' => [
        'name' => 'Georgian variant',
        'desc' => 'Period decorative Georgian variant bar pattern.',
        'bars' => 'georgian',
    ],
];

$selectedSashKey  = request('sash_style');
$selectedSash     = $selectedSashKey && isset($sashStyles[$selectedSashKey]) ? $sashStyles[$selectedSashKey] : null;
?>

<main id="content">
    <section class="w-full bg-white dark:bg-black wdc-section" aria-labelledby="wdc-heading">
        <div class="wdc-container">

            <?php if(!$selectedSash): ?>
                
                <div class="text-center mb-10 md:mb-14">
                    <h1 id="wdc-heading" class="text-3xl md:text-4xl font-extrabold tracking-tight text-black dark:text-white mb-3" style="letter-spacing:-0.02em;">
                        Choose your Sliding Sash window style and get an instant price
                    </h1>
                    <p class="text-base text-gray-500 dark:text-gray-400 max-w-xl mx-auto leading-relaxed">
                        Select a sash proportion style below to continue to the glazing-bar design selection.
                    </p>
                </div>

                <div class="wdc-grid" role="list">
                    <?php $__currentLoopData = $sashStyles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $style): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="/windows/sash-windows?sash_style=<?php echo e($key); ?>"
                           class="wdc-card"
                           role="listitem"
                           aria-label="Select <?php echo e($style['name']); ?> sliding sash style">

                            <div class="wdc-window-wrap">
                                <?php
                                    $rowsCss = implode(' ', array_map(fn($r) => $r.'fr', $style['rows']));
                                    $isSwept = !empty($style['swept']);
                                    $isArch  = !empty($style['arch']);
                                ?>
                                <div class="upvc-sash-window <?php echo e($isSwept ? 'is-swept' : ''); ?> <?php echo e($isArch ? 'is-arch' : ''); ?>"
                                     style="--sash-rows:<?php echo e($rowsCss); ?>;"
                                     role="img"
                                     aria-label="<?php echo e($style['name']); ?> preview">
                                    <div class="upvc-pane pane-top"></div>
                                    <div class="upvc-pane pane-bottom"></div>
                                </div>
                            </div>

                            <div class="wdc-card-body">
                                <span class="wdc-card-name"><?php echo e($style['name']); ?></span>
                                <span class="wdc-card-desc"><?php echo e($style['desc']); ?></span>
                                
                                <?php if(!empty($style['warning'])): ?>
                                    <div class="delivery-warning">
                                        <span>⚠️</span>
                                        <span><?php echo e($style['warning']); ?></span>
                                    </div>
                                <?php endif; ?>

                                <span class="wdc-card-cta">
                                    SELECT DESIGN &rarr;
                                </span>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            <?php else: ?>
                
                <div class="selected-style-bar">
                    <span>Selected Sash Style: <span class="text-black dark:text-white font-extrabold"><?php echo e($selectedSash['name']); ?></span></span>
                    <a href="/windows/sash-windows" class="underline text-xs text-gray-500 hover:text-black dark:hover:text-white transition-colors">&larr; Change Sash Style</a>
                </div>

                <div class="text-center mb-10 md:mb-14">
                    <h1 id="wdc-heading" class="text-3xl md:text-4xl font-extrabold tracking-tight text-black dark:text-white mb-3" style="letter-spacing:-0.02em;">
                        Choose Glazing-Bar Design for <?php echo e($selectedSash['name']); ?>

                    </h1>
                    <p class="text-base text-gray-500 dark:text-gray-400 max-w-xl mx-auto leading-relaxed">
                        Select a glazing bar design pattern below to configure your dimensions, frame colors, handles, and glass.
                    </p>
                </div>

                <div class="wdc-grid-10" role="list">
                    <?php $__currentLoopData = $glazingDesigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designKey => $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="/windows/size?design=sash&sash_style=<?php echo e($selectedSashKey); ?>&glazing_design=<?php echo e($designKey); ?>"
                           class="wdc-card"
                           role="listitem"
                           aria-label="Select <?php echo e($design['name']); ?> glazing bar design">

                            <div class="wdc-window-wrap">
                                <?php
                                    $rowsCss = implode(' ', array_map(fn($r) => $r.'fr', $selectedSash['rows']));
                                    $isSwept = !empty($selectedSash['swept']);
                                    $isArch  = !empty($selectedSash['arch']);
                                    $barClass = 'bars-' . $design['bars'];
                                ?>
                                <div class="upvc-sash-window <?php echo e($isSwept ? 'is-swept' : ''); ?> <?php echo e($isArch ? 'is-arch' : ''); ?> <?php echo e($barClass); ?>"
                                     style="--sash-rows:<?php echo e($rowsCss); ?>;"
                                     role="img"
                                     aria-label="<?php echo e($design['name']); ?> preview">
                                    <div class="upvc-pane pane-top"></div>
                                    <div class="upvc-pane pane-bottom"></div>
                                </div>
                            </div>

                            <div class="wdc-card-body">
                                <span class="wdc-card-name"><?php echo e($design['name']); ?></span>
                                <span class="wdc-card-desc"><?php echo e($design['desc']); ?></span>

                                <span class="wdc-card-cta">
                                    SELECT DESIGN &rarr;
                                </span>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            
            <p class="text-center text-xs text-gray-400 dark:text-gray-600 mt-12 tracking-wide">
                Need help choosing the right Sliding Sash configuration?
                <a href="/contact" class="underline text-black dark:text-white hover:no-underline ml-1">Contact our window specialists</a>
            </p>

        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/windows/sashwidow.blade.php ENDPATH**/ ?>