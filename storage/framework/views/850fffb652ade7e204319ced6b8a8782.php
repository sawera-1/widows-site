<?php $__env->startSection('title', 'Choose Your uPVC Door Design & Instant Quote — uPVC Windows'); ?>
<?php $__env->startSection('meta_description', 'Browse all available uPVC and composite door styles. Select a design to customize sizes, colors, glass, and hardware for instant online pricing.'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* ── Container ───────────────────────────────────────── */
    .wdc-container { width: 100%; max-width: 1280px; margin-inline: auto; padding-inline: 16px; }
    @media (min-width: 768px) { .wdc-container { padding-inline: 24px; } }

    /* ── Section spacing ─────────────────────────────────── */
    .wdc-section { padding-block: 40px; }
    @media (min-width: 768px)  { .wdc-section { padding-block: 56px; } }
    @media (min-width: 1024px) { .wdc-section { padding-block: 72px; } }

    /* ── Grid for 25 Doors ───────────────────────────────── */
    .door-grid { display: grid; grid-template-columns: repeat(1, 1fr); gap: 18px; margin-bottom: 48px; }
    @media (min-width: 480px)  { .door-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 768px)  { .door-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 1024px) { .door-grid { grid-template-columns: repeat(5, 1fr); } }

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

    /* ── Door preview area ─── */
    .wdc-door-wrap {
        width: 100%; height: 230px;
        display: flex; align-items: center; justify-content: center;
        background: #f8f8f8; padding: 14px; box-sizing: border-box;
        position: relative; overflow: hidden;
    }
    [data-theme="dark"] .wdc-door-wrap { background: #1a1a1a; }

    /* ── Card Body ───────────────────────────────────────── */
    .wdc-card-body {
        padding: 12px 14px 14px; display: flex; flex-direction: column; gap: 4px;
        border-top: 1px solid #f0f0f0; flex: 1; text-align: center;
    }
    [data-theme="dark"] .wdc-card-body { border-color: #2a2a2a; }
    .wdc-card-name { font-size: 13px; font-weight: 800; color: #000; line-height: 1.2; letter-spacing: .01em; }
    [data-theme="dark"] .wdc-card-name { color: #fff; }
    .wdc-card-desc { font-size: 11px; color: #64748b; line-height: 1.4; }
    [data-theme="dark"] .wdc-card-desc { color: #94a3b8; }

    .wdc-card-cta {
        display: inline-flex; align-items: center; justify-content: center; gap: 4px; font-size: 10px; font-weight: 700;
        letter-spacing: 1px; text-transform: uppercase; color: #737373; margin-top: auto;
        padding-top: 8px; border-top: 1px solid #f0f0f0; transition: color .2s;
    }
    .wdc-card:hover .wdc-card-cta { color: #000; }
    .wdc-card-cta svg { width: 11px; height: 11px; transition: transform .2s; flex-shrink: 0; }
    .wdc-card:hover .wdc-card-cta svg { transform: translateX(3px); }
    [data-theme="dark"] .wdc-card-cta { color: #555; border-color: #2a2a2a; }
    [data-theme="dark"] .wdc-card:hover .wdc-card-cta { color: #fff; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<?php
/* ── 25 uPVC & Composite Door Models ── */
$doorModels = [
    ['key'=>'full-glass',  'name'=>'Full-glass',  'desc'=>'Full height glazed panel for maximum light transmission.'],
    ['key'=>'two-panel',   'name'=>'2-panel',     'desc'=>'Classic half glass top with solid raised panel bottom.'],
    ['key'=>'three-panel', 'name'=>'3-panel',     'desc'=>'Split dual vertical top glass lights with panel bottom.'],
    ['key'=>'buckingham',  'name'=>'Buckingham',  'desc'=>'Arched top glass with decorative circle motif insert.'],
    ['key'=>'carter',      'name'=>'Carter',      'desc'=>'Semi-circle transom arch and dual vertical glass panes.'],
    ['key'=>'chester',     'name'=>'Chester',     'desc'=>'Full rectangular glass top with vertical tongue-and-groove.'],
    ['key'=>'clinton',     'name'=>'Clinton',     'desc'=>'Twin arched top glass panes with dual square lower panels.'],
    ['key'=>'filmore',     'name'=>'Filmore',     'desc'=>'Solid flush composite door with 3 modern speed grooves.'],
    ['key'=>'grant',       'name'=>'Grant',       'desc'=>'Twin long vertical arch glass panes with dual panels.'],
    ['key'=>'harding',     'name'=>'Harding',     'desc'=>'Four narrow vertical glass slats with grooved lower panel.'],
    ['key'=>'hayes',       'name'=>'Hayes',       'desc'=>'Four small square glass panes stacked vertically on left.'],
    ['key'=>'kennedy',     'name'=>'Kennedy',     'desc'=>'Classic central oval glass pane with raised panel bottom.'],
    ['key'=>'lincoln',     'name'=>'Lincoln',     'desc'=>'Soft arched top glass pane with raised rectangular panel.'],
    ['key'=>'lyndon',      'name'=>'Lyndon',      'desc'=>'Tall narrow vertical glass slit right with grooved panel.'],
    ['key'=>'monroe',      'name'=>'Monroe',      'desc'=>'Small square glass top right with chevron V-grooves.'],
    ['key'=>'reagan',      'name'=>'Reagan',      'desc'=>'Rectangular glass top with dual vertically stacked panels.'],
    ['key'=>'roosevelt',   'name'=>'Roosevelt',   'desc'=>'Soft arch top glass with dual stacked raised square panels.'],
    ['key'=>'truman',      'name'=>'Truman',      'desc'=>'Soft arch glass top with single large inset square panel.'],
    ['key'=>'tyler',       'name'=>'Tyler',       'desc'=>'3×3 Georgian grid (9-pane) glass top with panel bottom.'],
    ['key'=>'washington',  'name'=>'Washington',  'desc'=>'Tall central arched glass panel surrounded by sash frame.'],
    ['key'=>'wilson',      'name'=>'Wilson',      'desc'=>'6-pane Georgian grid glass top with dual square panels.'],
    ['key'=>'woodrow-l',   'name'=>'Woodrow-L',   'desc'=>'Narrow tall vertical glass slit center with grooved panel.'],
    ['key'=>'woodrow-d',   'name'=>'Woodrow-D',   'desc'=>'Diamond shaped glass pane top center with grooved panel.'],
    ['key'=>'flush-door',  'name'=>'Flush door',  'desc'=>'Minimalist flat flush door panel with clean lines.'],
    ['key'=>'aluminium',   'name'=>'Aluminium',   'desc'=>'Sleek modern full-glass aluminum profile entrance door.'],
];
?>

<main id="content">
    <section class="w-full bg-white dark:bg-black wdc-section" aria-labelledby="wdc-heading">
        <div class="wdc-container">

            
            <div class="text-center mb-10 md:mb-14">
                <h1 id="wdc-heading" class="text-3xl md:text-4xl font-extrabold tracking-tight text-black dark:text-white mb-3" style="letter-spacing:-0.02em;">
                    Choose your uPVC door style and get an instant price
                </h1>
                <p class="text-base text-gray-500 dark:text-gray-400 max-w-xl mx-auto leading-relaxed">
                    Select a door model below to configure dimensions, frame colours, glass, handles, and threshold options.
                </p>
            </div>

            
            <div class="door-grid" role="list">
                <?php $__currentLoopData = $doorModels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $door): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/doors/size?design=<?php echo e($door['key']); ?>"
                       class="wdc-card"
                       role="listitem"
                       aria-label="Select <?php echo e($door['name']); ?> door style">

                        <div class="wdc-door-wrap">
                            <?php echo $__env->make('pages.doors.framedoor', ['design' => $door['key']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>

                        <div class="wdc-card-body">
                            <span class="wdc-card-name"><?php echo e($door['name']); ?></span>
                            <span class="wdc-card-desc"><?php echo e($door['desc']); ?></span>
                            <span class="wdc-card-cta">
                                Select Design &rarr;
                            </span>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="text-center mt-8">
                <a href="/products" class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs uppercase tracking-wider rounded shadow transition-colors">
                    &hookleftarrow; Return to windows &amp; doors
                </a>
            </div>

        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/doors/upvcdoor.blade.php ENDPATH**/ ?>