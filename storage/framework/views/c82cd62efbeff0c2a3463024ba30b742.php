<?php
    $key = is_array($design ?? null) ? ($design['key'] ?? 'two-panel') : ($design ?? 'two-panel');
?>

<?php if (! $__env->hasRenderedOnce('upvc-door-styles')): $__env->markAsRenderedOnce('upvc-door-styles'); ?>
<style>
/* ── Dynamic HTML/CSS uPVC & Composite Door Component Styles ── */
.upvc-door-graphic {
    --frame-color: #ffffff;
    --border-color: #737373;
    --sash-color: #ffffff;
    --glass-a: #e2eef7;
    --glass-b: #b4d3e8;
    --panel-border: rgba(0,0,0,0.22);

    position: relative;
    height: 100%;
    max-height: 100%;
    width: auto;
    aspect-ratio: 1 / 2.05;
    background: var(--frame-color);
    border: 6px solid var(--border-color);
    border-radius: 2px;
    padding: 4px;
    box-sizing: border-box;
    box-shadow: inset 0 0 0 1px #999, 0 6px 18px rgba(0,0,0,0.12);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    transition: border-color .2s ease, background-color .2s ease;
    margin: 0 auto;
}

.wdc-card:hover .upvc-door-graphic { --border-color: #000000; }

[data-theme="dark"] .upvc-door-graphic {
    --frame-color: #1a1a1a;
    --border-color: #666666;
    --sash-color: #242424;
    --glass-a: #1e2b34;
    --glass-b: #131c23;
    --panel-border: rgba(255,255,255,0.2);
}
[data-theme="dark"] .wdc-card:hover .upvc-door-graphic { --border-color: #ffffff; }

.door-sash {
    position: relative;
    width: 100%;
    height: 100%;
    background: var(--sash-color);
    border: 3px solid var(--border-color);
    border-radius: 1px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    padding: 4px;
    gap: 4px;
}

.door-upper {
    position: relative;
    width: 100%;
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 0;
    overflow: hidden;
}

.door-lower {
    position: relative;
    width: 100%;
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 0;
    overflow: hidden;
}

/* Door Handle */
.door-handle-graphic {
    position: absolute;
    right: 3px;
    top: 52%;
    transform: translateY(-50%);
    width: 6px;
    height: 22px;
    background: linear-gradient(180deg, #cccccc, #888888);
    border-radius: 1.5px;
    z-index: 10;
    box-shadow: 0 1px 3px rgba(0,0,0,0.3);
}

/* Glass Panes */
.door-glass-pane {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, var(--glass-a) 0%, var(--glass-b) 100%);
    border: 1px solid var(--panel-border);
    box-shadow: inset 0 0 4px rgba(0,0,0,0.08);
    box-sizing: border-box;
    position: relative;
    overflow: hidden;
}

.glass-full { height: 100%; }
.glass-half { height: 100%; }
.glass-arch { border-top-left-radius: 50% 35%; border-top-right-radius: 50% 35%; }
.glass-soft-arch { border-top-left-radius: 35% 20%; border-top-right-radius: 35% 20%; }
.glass-oval { width: 70%; height: 85%; border-radius: 50%; }
.glass-diamond { width: 32px; height: 32px; transform: rotate(45deg); border: 1.5px solid var(--panel-border); background: linear-gradient(135deg, var(--glass-a), var(--glass-b)); }
.glass-slit-center { width: 14px; height: 90%; }
.glass-slit-right { width: 14px; height: 90%; margin-left: auto; }
.glass-square-tr { width: 24px; height: 24px; margin-top: 4px; margin-right: 4px; margin-left: auto; border: 1px solid var(--panel-border); background: linear-gradient(135deg, var(--glass-a), var(--glass-b)); }
.glass-tall-arch { width: 75%; height: 100%; border-top-left-radius: 40% 25%; border-top-right-radius: 40% 25%; }

.door-glass-v-split { display: flex; width: 100%; height: 100%; background: linear-gradient(135deg, var(--glass-a), var(--glass-b)); border: 1px solid var(--panel-border); position: relative; }
.door-glass-v-split .bar-v { position: absolute; left: 50%; top: 0; bottom: 0; width: 3px; background: var(--sash-color); transform: translateX(-50%); }

.door-glass-split-arch { display: flex; gap: 4px; width: 100%; height: 100%; }
.glass-arch-half { flex: 1; border-top-left-radius: 50% 30%; border-top-right-radius: 50% 30%; }

.door-glass-split-long-arch { display: flex; gap: 4px; width: 85%; height: 100%; }
.glass-long-arch { flex: 1; border-top-left-radius: 50% 25%; border-top-right-radius: 50% 25%; }

.door-glass-slats { display: flex; gap: 3px; width: 85%; height: 90%; }
.door-glass-slats .slat { flex: 1; background: linear-gradient(135deg, var(--glass-a), var(--glass-b)); border: 1px solid var(--panel-border); }

.door-glass-left-squares { display: flex; flex-direction: column; gap: 4px; width: 18px; height: 90%; margin-right: auto; }
.door-glass-left-squares .sq { width: 100%; height: 18px; background: linear-gradient(135deg, var(--glass-a), var(--glass-b)); border: 1px solid var(--panel-border); }

/* Carter Layout */
.door-style-carter .door-upper { flex-direction: column; gap: 3px; }
.glass-transom-top { width: 100%; height: 35%; border-top-left-radius: 50% 60%; border-top-right-radius: 50% 60%; }
.glass-v-split-mid { width: 100%; height: 65%; display: flex; position: relative; }
.glass-v-split-mid .bar-v { position: absolute; left: 50%; top: 0; bottom: 0; width: 2.5px; background: var(--sash-color); transform: translateX(-50%); }

/* Georgian Grids */
.glass-georgian-9 .gb-h1 { position: absolute; left: 0; right: 0; top: 33.3%; height: 1.5px; background: rgba(0,0,0,0.3); }
.glass-georgian-9 .gb-h2 { position: absolute; left: 0; right: 0; top: 66.6%; height: 1.5px; background: rgba(0,0,0,0.3); }
.glass-georgian-9 .gb-v1 { position: absolute; top: 0; bottom: 0; left: 33.3%; width: 1.5px; background: rgba(0,0,0,0.3); }
.glass-georgian-9 .gb-v2 { position: absolute; top: 0; bottom: 0; left: 66.6%; width: 1.5px; background: rgba(0,0,0,0.3); }

.glass-georgian-6 .gb-h1 { position: absolute; left: 0; right: 0; top: 50%; height: 1.5px; background: rgba(0,0,0,0.3); }
.glass-georgian-6 .gb-v1 { position: absolute; top: 0; bottom: 0; left: 33.3%; width: 1.5px; background: rgba(0,0,0,0.3); }
.glass-georgian-6 .gb-v2 { position: absolute; top: 0; bottom: 0; left: 66.6%; width: 1.5px; background: rgba(0,0,0,0.3); }

/* Panel Styles */
.door-panel-raised { width: 100%; height: 100%; border: 1px solid var(--panel-border); box-shadow: inset 0 0 0 3px var(--sash-color), inset 0 0 0 4px var(--panel-border); }
.door-panel-raised-sq { width: 75%; height: 75%; border: 1px solid var(--panel-border); box-shadow: inset 0 0 0 3px var(--sash-color), inset 0 0 0 4px var(--panel-border); }
.door-style-buckingham .door-lower { flex-direction: column; gap: 4px; align-items: center; justify-content: center; }
.door-panel-circle { width: 32px; height: 32px; border-radius: 50%; border: 1px solid var(--panel-border); box-shadow: inset 0 0 0 2px var(--sash-color), inset 0 0 0 3px var(--panel-border); }
.door-panel-grooved-v { width: 100%; height: 100%; border: 1px solid var(--panel-border); background-image: repeating-linear-gradient(90deg, transparent 0 6px, var(--panel-border) 6px 7px); }
.door-panel-grooved-h { width: 100%; height: 100%; border: 1px solid var(--panel-border); background-image: repeating-linear-gradient(0deg, transparent 0 24px, var(--panel-border) 24px 25px); }
.door-panel-chevron { width: 100%; height: 100%; border: 1px solid var(--panel-border); background: repeating-linear-gradient(45deg, transparent 0 7px, var(--panel-border) 7px 8px), repeating-linear-gradient(-45deg, transparent 0 7px, var(--panel-border) 7px 8px); }

.door-panel-split-2 { display: flex; gap: 4px; width: 100%; height: 100%; }
.door-panel-split-2 .sq-panel { flex: 1; border: 1px solid var(--panel-border); box-shadow: inset 0 0 0 3px var(--sash-color), inset 0 0 0 4px var(--panel-border); }
</style>
<?php endif; ?>

<div class="upvc-door-graphic door-style-<?php echo e($key); ?>" role="img" aria-label="uPVC Door <?php echo e($key); ?>">
    <div class="door-sash">
        <div class="door-upper">
            <?php if($key === 'full-glass' || $key === 'aluminium'): ?>
                <div class="door-glass-pane glass-full"></div>
            <?php elseif($key === 'two-panel' || $key === 'chester' || $key === 'reagan'): ?>
                <div class="door-glass-pane glass-half"></div>
            <?php elseif($key === 'three-panel'): ?>
                <div class="door-glass-pane door-glass-v-split">
                    <span class="bar-v"></span>
                </div>
            <?php elseif($key === 'buckingham'): ?>
                <div class="door-glass-pane glass-arch"></div>
            <?php elseif($key === 'carter'): ?>
                <div class="door-glass-pane glass-transom-top"></div>
                <div class="door-glass-pane glass-v-split-mid">
                    <span class="bar-v"></span>
                </div>
            <?php elseif($key === 'clinton'): ?>
                <div class="door-glass-split-arch">
                    <div class="door-glass-pane glass-arch-half"></div>
                    <div class="door-glass-pane glass-arch-half"></div>
                </div>
            <?php elseif($key === 'grant'): ?>
                <div class="door-glass-split-long-arch">
                    <div class="door-glass-pane glass-long-arch"></div>
                    <div class="door-glass-pane glass-long-arch"></div>
                </div>
            <?php elseif($key === 'harding'): ?>
                <div class="door-glass-slats">
                    <span class="slat"></span><span class="slat"></span><span class="slat"></span><span class="slat"></span>
                </div>
            <?php elseif($key === 'hayes'): ?>
                <div class="door-glass-left-squares">
                    <span class="sq"></span><span class="sq"></span><span class="sq"></span><span class="sq"></span>
                </div>
            <?php elseif($key === 'kennedy'): ?>
                <div class="door-glass-pane glass-oval"></div>
            <?php elseif($key === 'lincoln' || $key === 'roosevelt' || $key === 'truman'): ?>
                <div class="door-glass-pane glass-soft-arch"></div>
            <?php elseif($key === 'lyndon'): ?>
                <div class="door-glass-pane glass-slit-right"></div>
            <?php elseif($key === 'monroe'): ?>
                <div class="door-glass-pane glass-square-tr"></div>
            <?php elseif($key === 'tyler'): ?>
                <div class="door-glass-pane glass-georgian-9">
                    <span class="gb-h1"></span><span class="gb-h2"></span>
                    <span class="gb-v1"></span><span class="gb-v2"></span>
                </div>
            <?php elseif($key === 'washington'): ?>
                <div class="door-glass-pane glass-tall-arch"></div>
            <?php elseif($key === 'wilson'): ?>
                <div class="door-glass-pane glass-georgian-6">
                    <span class="gb-h1"></span>
                    <span class="gb-v1"></span><span class="gb-v2"></span>
                </div>
            <?php elseif($key === 'woodrow-l'): ?>
                <div class="door-glass-pane glass-slit-center"></div>
            <?php elseif($key === 'woodrow-d'): ?>
                <div class="door-glass-pane glass-diamond"></div>
            <?php elseif($key === 'filmore' || $key === 'flush-door'): ?>
                
            <?php else: ?>
                <div class="door-glass-pane glass-half"></div>
            <?php endif; ?>
        </div>

        <div class="door-lower">
            <?php if($key === 'buckingham'): ?>
                <div class="door-panel-circle"></div>
                <div class="door-panel-raised-sq"></div>
            <?php elseif($key === 'chester' || $key === 'harding' || $key === 'lyndon' || $key === 'hayes' || $key === 'woodrow-l' || $key === 'woodrow-d'): ?>
                <div class="door-panel-grooved-v"></div>
            <?php elseif($key === 'filmore'): ?>
                <div class="door-panel-grooved-h"></div>
            <?php elseif($key === 'monroe'): ?>
                <div class="door-panel-chevron"></div>
            <?php elseif($key === 'clinton' || $key === 'grant' || $key === 'reagan' || $key === 'roosevelt' || $key === 'wilson'): ?>
                <div class="door-panel-split-2">
                    <div class="sq-panel"></div>
                    <div class="sq-panel"></div>
                </div>
            <?php elseif($key === 'truman'): ?>
                <div class="door-panel-raised-sq"></div>
            <?php elseif($key === 'full-glass' || $key === 'aluminium' || $key === 'flush-door' || $key === 'washington'): ?>
                
            <?php else: ?>
                <div class="door-panel-raised"></div>
            <?php endif; ?>
        </div>

        
        <div class="door-handle-graphic">
            <span class="dh-lever"></span>
            <span class="dh-keyhole"></span>
        </div>
    </div>
</div><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/doors/framedoor.blade.php ENDPATH**/ ?>