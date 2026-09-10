<?php $__env->startSection('title', 'Choose Your Window Design — uPVC Windows'); ?>
<?php $__env->startSection('meta_description', 'Browse all available uPVC window frame designs. Select a style to design, price and order online.'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* ── Container ───────────────────────────────────────── */
    .wdc-container { width: 100%; max-width: 1280px; margin-inline: auto; padding-inline: 16px; }
    @media (min-width: 768px) { .wdc-container { padding-inline: 24px; } }

    /* ── Section spacing ─────────────────────────────────── */
    .wdc-section { padding-block: 64px; }
    @media (min-width: 768px)  { .wdc-section { padding-block: 80px; } }
    @media (min-width: 1024px) { .wdc-section { padding-block: 96px; } }

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

    /* ── Window preview area (replaces old .wdc-img-wrap) ─── */
    .wdc-window-wrap {
        width: 100%; height: 200px;
        display: flex; align-items: center; justify-content: center;
        background: #f8f8f8; padding: 22px; box-sizing: border-box;
    }
    @media (min-width: 768px) { .wdc-window-wrap { height: 220px; } }
    [data-theme="dark"] .wdc-window-wrap { background: #1a1a1a; }

    /* ── HTML/CSS WINDOW COMPONENT ──────────────────────────
       Structure: outer frame (.upvc-window) -> CSS grid ->
       glass panes (.upvc-pane). The grid `gap` IS the mullion/
       transom — no extra divider elements needed.                */
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
        border: 5px solid var(--frame);
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
        min-width: 0;
        min-height: 0;
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

    /* ── Breadcrumb ──────────────────────────────────────── */
    .wdc-breadcrumb {
        display: flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 500;
        letter-spacing: .5px; color: #737373; padding-block: 20px; border-bottom: 1px solid #e5e5e5;
        margin-bottom: 48px;
    }
    .wdc-breadcrumb a { color: #737373; text-decoration: none; transition: color .2s; }
    .wdc-breadcrumb a:hover { color: #000; }
    [data-theme="dark"] .wdc-breadcrumb { border-color: #2a2a2a; color: #555; }
    [data-theme="dark"] .wdc-breadcrumb a { color: #555; }
    [data-theme="dark"] .wdc-breadcrumb a:hover { color: #fff; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<?php
/*
 * ─────────────────────────────────────────────────────────────
 * WINDOW FRAME / PANE CONFIGURATIONS
 * ─────────────────────────────────────────────────────────────
 * Every window is described purely as data — NOT an image path.
 *
 *   cols  : array of relative column widths (CSS `fr` units)
 *   rows  : array of relative row heights   (CSS `fr` units)
 *   cells : one entry per glass pane, using 1-indexed CSS grid
 *           line numbers: 'c' => [colStart, colEnd], 'r' => [rowStart, rowEnd]
 *
 * The Blade partial below turns this data into a real CSS Grid:
 * the grid's own `gap` becomes the mullion/transom bars, and each
 * cell becomes one <div class="upvc-pane">. No <img>, no SVG,
 * no background-image — every frame is drawn with live HTML/CSS.
 *
 * To add a new configuration: add another array entry here.
 * To change a shape: edit its cols/rows/cells — nothing else.
 */
$windowFrames = [
    [
        'name' => 'Standard Casement',
        'desc' => 'Classic single-pane casement frame',
        'url'  => '/windows/size?design=standard-casement',
        'cols' => [1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Two Light',
        'desc' => 'Side-by-side dual-sash window',
        'url'  => '/windows/size?design=two-light',
        'cols' => [1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]] ],
    ],
    [
        'name' => 'French Casement',
        'desc' => 'Twin-sash French opening style',
        'url'  => '/windows/size?design=french',
        'cols' => [1,1.15], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Two Light, Top Light',
        'desc' => 'Dual sash with a full-width fanlight above',
        'url'  => '/windows/size?design=two-light-top',
        'cols' => [1,1], 'rows' => [0.35,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Three Light',
        'desc' => 'Triple-sash wider window opening',
        'url'  => '/windows/size?design=three-light',
        'cols' => [1,1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Three Light, Top Light',
        'desc' => 'Triple sash with a top-hung fanlight row',
        'url'  => '/windows/size?design=three-light-top',
        'cols' => [1,1,1], 'rows' => [0.35,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Horizontal Split',
        'desc' => 'Single sash divided into upper and lower lights',
        'url'  => '/windows/size?design=horizontal-split',
        'cols' => [1], 'rows' => [1,1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]] ],
    ],
    [
        'name' => 'Four Pane Grid',
        'desc' => 'Even 2×2 glazing bar arrangement',
        'url'  => '/windows/size?design=four-pane-grid',
        'cols' => [1,1], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Six Pane Grid',
        'desc' => 'Even 3×2 glazing bar arrangement',
        'url'  => '/windows/size?design=six-pane-grid',
        'cols' => [1,1,1], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Wide Sash + Stacked Sidelight',
        'desc' => 'One full-height light beside two stacked lights',
        'url'  => '/windows/size?design=wide-stacked-sidelight',
        'cols' => [1.3,1], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,3]],
            ['c'=>[2,3],'r'=>[1,2]], ['c'=>[2,3],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Narrow Bookend Lights',
        'desc' => 'Two full-height centre lights flanked by split sidelights',
        'url'  => '/windows/size?design=narrow-bookend',
        'cols' => [0.55,1,1,0.55], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]],
            ['c'=>[2,3],'r'=>[1,3]], ['c'=>[3,4],'r'=>[1,3]],
            ['c'=>[4,5],'r'=>[1,2]], ['c'=>[4,5],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Georgian Bar Three Light',
        'desc' => 'Decorative narrow centre bar for a classic look',
        'url'  => '/windows/size?design=georgian-three-light',
        'cols' => [1,0.5,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Wide Four Light',
        'desc' => 'Four equal sashes across a wide opening',
        'url'  => '/windows/size?design=wide-four-light',
        'wide' => true,
        'cols' => [1,1,1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]], ['c'=>[4,5],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Wide Five Light',
        'desc' => 'Five equal sashes for large openings',
        'url'  => '/windows/size?design=wide-five-light',
        'wide' => true,
        'cols' => [1,1,1,1,1], 'rows' => [1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[4,5],'r'=>[1,2]], ['c'=>[5,6],'r'=>[1,2]],
        ],
    ],
    [
        'name' => 'Lantern / Roof Light',
        'desc' => 'Overhead glazed lantern-style row',
        'url'  => '/windows/size?design=lantern',
        'wide' => true,
        'cols' => [1], 'rows' => [1,1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]] ],
    ],
    [
        'name' => 'Bay Window Set',
        'desc' => 'Three-panel angled bay projection',
        'url'  => '/windows/size?design=bay',
        'wide' => true,
        'cols' => [1,1.3,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]] ],
    ],
    [
        'name' => 'Six Light, Top Light',
        'desc' => 'Three-over-three sashes with fanlight row',
        'url'  => '/windows/size?design=six-light-top',
        'wide' => true,
        'cols' => [1,1,1], 'rows' => [0.4,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    [
        'name' => 'Tilt & Turn',
        'desc' => 'Versatile inward-opening tilt & turn',
        'url'  => '/windows/size?design=tilt-and-turn',
        'cols' => [1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]] ],
    ],
];
?>

<main id="content">
    <section class="w-full bg-white dark:bg-black wdc-section" aria-labelledby="wdc-heading">
        <div class="wdc-container">



            
            <div class="text-center mb-12 md:mb-16">
                <p class="text-xs font-bold uppercase tracking-[3px] text-gray-400 dark:text-gray-500 mb-3">Step 1 of 3</p>
                <h1 id="wdc-heading" class="text-3xl md:text-4xl font-extrabold tracking-tight text-black dark:text-white mb-4" style="letter-spacing:-0.02em;">
                    Choose Your Window Design
                </h1>
                <p class="text-base text-gray-500 dark:text-gray-400 max-w-lg mx-auto leading-relaxed">
                    Select a window frame style to continue. Each design can be fully customised for size, colour and glazing.
                </p>
            </div>

            
            <div class="wdc-grid" role="list">
                <?php $__currentLoopData = $windowFrames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $frame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($frame['url']); ?>"
                       class="wdc-card"
                       role="listitem"
                       aria-label="Select <?php echo e($frame['name']); ?> window design">

                        
                        <div class="wdc-window-wrap">
                            <?php
                                $colsCss = implode(' ', array_map(fn($c) => $c.'fr', $frame['cols']));
                                $rowsCss = implode(' ', array_map(fn($r) => $r.'fr', $frame['rows']));
                                $isWide  = $frame['wide'] ?? false;
                            ?>
                            <div class="upvc-window <?php echo e($isWide ? 'is-wide' : ''); ?>"
                                 style="--upvc-cols:<?php echo e($colsCss); ?>;--upvc-rows:<?php echo e($rowsCss); ?>;"
                                 role="img"
                                 aria-label="<?php echo e($frame['name']); ?> window frame configuration">
                                <?php $__currentLoopData = $frame['cells']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="upvc-pane"
                                         style="grid-column:<?php echo e($cell['c'][0]); ?>/<?php echo e($cell['c'][1]); ?>;grid-row:<?php echo e($cell['r'][0]); ?>/<?php echo e($cell['r'][1]); ?>;"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        
                        <div class="wdc-card-body">
                            <span class="wdc-card-name"><?php echo e($frame['name']); ?></span>
                            <span class="text-xs text-gray-400 dark:text-gray-600 leading-relaxed"><?php echo e($frame['desc']); ?></span>
                            <span class="wdc-card-cta">
                                Select Design
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </span>
                        </div>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <p class="text-center text-xs text-gray-400 dark:text-gray-600 mt-12 tracking-wide">
                Not sure which design to choose?
                <a href="/contact" class="underline text-black dark:text-white hover:no-underline ml-1">Contact our team</a> — we're happy to help.
            </p>

        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/windows/standarddetail.blade.php ENDPATH**/ ?>