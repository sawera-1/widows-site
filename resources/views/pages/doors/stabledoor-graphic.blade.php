@php
    $key = is_array($design ?? null) ? ($design['key'] ?? 'kelham') : ($design ?? 'kelham');
@endphp

@once('stable-door-component-styles')
<style>
/* ── Dynamic HTML/CSS Stable Door Visualizer ── */
.stable-door-graphic {
    --frame-color: #ffffff;
    --border-color: #d4d4d4;
    --sash-color: #ffffff;
    --glass-a: #e2eef7;
    --glass-b: #b4d3e8;
    --panel-border: rgba(0,0,0,0.18);

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

.wdc-card:hover .stable-door-graphic { --border-color: #000000; }

[data-theme="dark"] .stable-door-graphic {
    --frame-color: #23342b;
    --border-color: #4b6657;
    --sash-color: #2b3e34;
    --glass-a: #1e2b34;
    --glass-b: #131c23;
    --panel-border: rgba(255,255,255,0.2);
}
[data-theme="dark"] .wdc-card:hover .stable-door-graphic { --border-color: #ffffff; }

.stable-sash-top, .stable-sash-bottom {
    position: relative;
    width: 100%;
    flex: 1;
    background: var(--sash-color);
    border: 2.5px solid var(--border-color);
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 3px;
    overflow: hidden;
}

/* Horizontal Stable Split Bar */
.stable-split-bar {
    width: 100%;
    height: 6px;
    background: var(--border-color);
    box-shadow: 0 1px 3px rgba(0,0,0,0.3);
    z-index: 5;
    flex-shrink: 0;
}

/* Vertical Grooved Panel */
.sd-grooved-v {
    width: 100%;
    height: 100%;
    background-image: repeating-linear-gradient(90deg, transparent 0 6px, var(--panel-border) 6px 7px);
    background-color: var(--sash-color);
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Inset Rectangular Frame Panel (Newstead) */
.sd-inset-panel {
    width: 82%;
    height: 86%;
    border: 2px solid var(--border-color);
    box-shadow: inset 0 0 0 2px var(--sash-color), inset 0 0 0 3px var(--panel-border);
    background-image: repeating-linear-gradient(90deg, transparent 0 5px, var(--panel-border) 5px 6px);
    background-color: var(--sash-color);
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Glass Panes */
.sd-glass-pane {
    background: linear-gradient(135deg, var(--glass-a) 0%, var(--glass-b) 100%);
    border: 1.5px solid var(--border-color);
    box-shadow: inset 0 0 4px rgba(0,0,0,0.12);
    box-sizing: border-box;
    position: relative;
    overflow: hidden;
}

.sd-glass-kelham { width: 78%; height: 82%; }
.sd-glass-slit { width: 28%; height: 70%; z-index: 2; }
.sd-glass-diamond { width: 34px; height: 34px; transform: rotate(45deg); z-index: 2; }

/* Georgian Grids */
.sd-georgian-grid { position: absolute; inset: 0; }
.sd-georgian-grid .gb-h1 { position: absolute; left: 0; right: 0; top: 33.3%; height: 1.5px; background: rgba(0,0,0,0.35); }
.sd-georgian-grid .gb-h2 { position: absolute; left: 0; right: 0; top: 66.6%; height: 1.5px; background: rgba(0,0,0,0.35); }
.sd-georgian-grid .gb-v1 { position: absolute; top: 0; bottom: 0; left: 50%; width: 1.5px; background: rgba(0,0,0,0.35); transform: translateX(-50%); }

/* Handles */
.sd-handle-graphic {
    position: absolute;
    right: 4px;
    top: 50%;
    transform: translateY(-50%);
    width: 6px;
    height: 20px;
    background: linear-gradient(180deg, #cccccc, #777777);
    border-radius: 1px;
    z-index: 10;
    box-shadow: 0 1px 3px rgba(0,0,0,0.4);
}
</style>
@endonce

<div class="stable-door-graphic door-style-{{ $key }}" role="img" aria-label="Stable Door {{ $key }}">
    {{-- Top Sash --}}
    <div class="stable-sash-top">
        @if($key === 'kelham')
            <div class="sd-glass-pane sd-glass-kelham"></div>
        @elseif($key === 'kelham-grill')
            <div class="sd-glass-pane sd-glass-kelham">
                <div class="sd-georgian-grid">
                    <span class="gb-h1"></span><span class="gb-h2"></span>
                    <span class="gb-v1"></span>
                </div>
            </div>
        @elseif($key === 'normanton')
            <div class="sd-grooved-v">
                <div class="sd-glass-pane sd-glass-slit"></div>
            </div>
        @elseif($key === 'tuxford')
            <div class="sd-grooved-v">
                <div class="sd-glass-pane sd-glass-diamond"></div>
            </div>
        @elseif($key === 'newstead-1')
            <div class="sd-inset-panel">
                <div class="sd-glass-pane sd-glass-slit"></div>
            </div>
        @elseif($key === 'newstead-solid')
            <div class="sd-inset-panel"></div>
        @else
            {{-- Carburton / Solid Grooved Top --}}
            <div class="sd-grooved-v"></div>
        @endif

        <div class="sd-handle-graphic"></div>
    </div>

    {{-- Split Bar --}}
    <div class="stable-split-bar"></div>

    {{-- Bottom Sash --}}
    <div class="stable-sash-bottom">
        <div class="sd-grooved-v"></div>
        <div class="sd-handle-graphic" style="top:30%;"></div>
    </div>
</div>
