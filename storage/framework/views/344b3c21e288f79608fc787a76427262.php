<?php $__env->startSection('title', 'Choose Your French Window Style — uPVC Windows'); ?>
<?php $__env->startSection('meta_description', 'Browse 7 French window frame designs across Standard French and Flush French styles. Select a design to price and order online.'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* ── Container ───────────────────────────────────────── */
    .wdc-container { width: 100%; max-width: 1280px; margin-inline: auto; padding-inline: 16px; }
    @media (min-width: 768px) { .wdc-container { padding-inline: 24px; } }

    /* ── Section spacing ─────────────────────────────────── */
    .wdc-section { padding-block: 40px; }
    @media (min-width: 768px)  { .wdc-section { padding-block: 56px; } }
    @media (min-width: 1024px) { .wdc-section { padding-block: 72px; } }

    /* ── Section Dividers & Titles ──────────────────────── */
    .french-section-title {
        font-size: 18px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em;
        color: #000; margin-bottom: 20px; padding-bottom: 8px; border-bottom: 2px solid #000;
        display: flex; align-items: center; justify-content: space-between;
    }
    [data-theme="dark"] .french-section-title { color: #fff; border-color: #fff; }

    /* ── Grid ────────────────────────────────────────────── */
    .wdc-grid { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 48px; }
    @media (min-width: 540px)  { .wdc-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 900px)  { .wdc-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 1200px) { .wdc-grid { grid-template-columns: repeat(4, 1fr); } }

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
        width: 100%; height: 180px;
        display: flex; align-items: center; justify-content: center;
        background: #f8f8f8; padding: 18px; box-sizing: border-box;
    }
    @media (min-width: 768px) { .wdc-window-wrap { height: 200px; } }
    [data-theme="dark"] .wdc-window-wrap { background: #1a1a1a; }

    /* ── Dynamic HTML/CSS UPVC Window Visualizer ───────── */
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
        min-width: 0; min-height: 0; position: relative;
    }
    .upvc-pane.is-open::after {
        content: ""; position: absolute; inset: 10%; border: 1.2px dashed rgba(0,0,0,0.3); pointer-events: none;
    }

    /* Wide windows read better a bit shorter */
    .upvc-window.is-wide { max-width: 100%; aspect-ratio: 16 / 9; }

    /* Flush style frame modifier */
    .upvc-window.is-flush { border-width: 7px; }

    /* ── Card body ───────────────────────────────────────── */
    .wdc-card-body {
        padding: 14px 18px 18px; display: flex; flex-direction: column; gap: 6px;
        border-top: 1px solid #f0f0f0; flex: 1;
    }
    [data-theme="dark"] .wdc-card-body { border-color: #2a2a2a; }
    .wdc-card-name { font-size: 13px; font-weight: 700; color: #000; line-height: 1.3; letter-spacing: .01em; }
    [data-theme="dark"] .wdc-card-name { color: #fff; }
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

    /* ── Breadcrumb ──────────────────────────────────────── */
    .wdc-breadcrumb {
        display: flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 500;
        letter-spacing: .5px; color: #737373; padding-block: 16px; border-bottom: 1px solid #e5e5e5;
        margin-bottom: 32px;
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
$frenchCases = [
    [
        'slug' => 'french',
        'name' => 'Two Light French',
        'desc' => 'Classic twin opening French sashes side-by-side',
        'cols' => [1, 1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2],'o'=>true], ['c'=>[2,3],'r'=>[1,2],'o'=>true] ],
    ],
    [
        'slug' => 'two-light-top',
        'name' => 'Two Light, Top Light',
        'desc' => 'Dual French sashes with full-width top transom light',
        'cols' => [1, 1], 'rows' => [0.35, 1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3],'o'=>true], ['c'=>[2,3],'r'=>[2,3],'o'=>true],
        ],
    ],
    [
        'slug' => 'three-light',
        'name' => 'Three Light French',
        'desc' => 'Triple light frame with central French opening sashes',
        'cols' => [1, 1, 1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2],'o'=>true], ['c'=>[3,4],'r'=>[1,2],'o'=>true] ],
    ],
    [
        'slug' => 'georgian-three-light',
        'name' => 'Three Light Sidelights',
        'desc' => 'French sashes flanked by narrow side lights',
        'cols' => [1, 0.6, 1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2],'o'=>true], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2],'o'=>true] ],
    ],
    [
        'slug' => 'three-light-top',
        'name' => 'Three Light, Top Light',
        'desc' => 'Triple sashes with a full top-hung fanlight row',
        'cols' => [1, 1, 1], 'rows' => [0.35, 1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3],'o'=>true], ['c'=>[2,3],'r'=>[2,3],'o'=>true], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    [
        'slug' => 'six-light-top',
        'name' => 'Three Light, Split Fanlight',
        'desc' => 'Triple sashes with divided top fanlights',
        'cols' => [1, 1, 1], 'rows' => [0.4, 1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3],'o'=>true], ['c'=>[2,3],'r'=>[2,3],'o'=>true], ['c'=>[3,4],'r'=>[2,3],'o'=>true],
        ],
    ],
    [
        'slug' => 'wide-four-light',
        'name' => 'Four Light French',
        'desc' => 'Four sashes across wide opening',
        'wide' => true,
        'cols' => [1, 1, 1, 1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2],'o'=>true], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]], ['c'=>[4,5],'r'=>[1,2],'o'=>true] ],
    ],
];
?>

<main id="content">
    <section class="w-full bg-white dark:bg-black wdc-section" aria-labelledby="wdc-heading">
        <div class="wdc-container">

            
            <div class="text-center mb-10 md:mb-14">
                <h1 id="wdc-heading" class="text-3xl md:text-4xl font-extrabold tracking-tight text-black dark:text-white mb-3" style="letter-spacing:-0.02em;">
                    Choose your French window style and get an instant price
                </h1>
                <p class="text-base text-gray-500 dark:text-gray-400 max-w-xl mx-auto leading-relaxed">
                    Select any of the 7 French window frame cases below to configure dimensions, frame colors, handles, and glass.
                </p>
            </div>

            
            <div class="french-section-title">
                <span>Standard French windows</span>
            </div>

            <div class="wdc-grid" role="list">
                <?php $__currentLoopData = $frenchCases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/windows/size?design=<?php echo e($case['slug']); ?>"
                       class="wdc-card"
                       role="listitem"
                       aria-label="Select <?php echo e($case['name']); ?> Standard French window">

                        <div class="wdc-window-wrap">
                            <?php
                                $colsCss = implode(' ', array_map(fn($c) => $c.'fr', $case['cols']));
                                $rowsCss = implode(' ', array_map(fn($r) => $r.'fr', $case['rows']));
                                $isWide  = $case['wide'] ?? false;
                            ?>
                            <div class="upvc-window <?php echo e($isWide ? 'is-wide' : ''); ?>"
                                 style="--upvc-cols:<?php echo e($colsCss); ?>;--upvc-rows:<?php echo e($rowsCss); ?>;"
                                 role="img"
                                 aria-label="<?php echo e($case['name']); ?> frame preview">
                                <?php $__currentLoopData = $case['cells']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="upvc-pane <?php echo e(!empty($cell['o']) ? 'is-open' : ''); ?>"
                                         style="grid-column:<?php echo e($cell['c'][0]); ?>/<?php echo e($cell['c'][1]); ?>;grid-row:<?php echo e($cell['r'][0]); ?>/<?php echo e($cell['r'][1]); ?>;"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="wdc-card-body">
                            <span class="wdc-card-name"><?php echo e($case['name']); ?></span>
                            <span class="text-xs text-gray-400 dark:text-gray-600 leading-relaxed"><?php echo e($case['desc']); ?></span>
                            <span class="wdc-card-cta">
                                Select Design
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <p class="text-center text-xs text-gray-400 dark:text-gray-600 mt-12 tracking-wide">
                Need help choosing the right French window design?
                <a href="/contact" class="underline text-black dark:text-white hover:no-underline ml-1">Contact our window specialists</a>
            </p>

        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/windows/frenchwindow.blade.php ENDPATH**/ ?>