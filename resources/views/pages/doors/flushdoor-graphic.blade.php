@php
    $key = is_array($design ?? null) ? ($design['key'] ?? 'prehung-door') : ($design ?? 'prehung-door');
    $hasTopLight  = str_contains($key, 'toplight');
    $hasMidRail   = str_contains($key, 'midrail');
    $hasLeftPanel = str_contains($key, 'left-panel') || str_contains($key, 'left-right') || str_contains($key, 'side-openers');
    $hasRightPanel= str_contains($key, 'right-panel') || str_contains($key, 'left-right') || str_contains($key, 'side-openers');
    $hasOpeners   = str_contains($key, 'openers');
@endphp

@once('flush-door-component-styles')
<style>
/* ── Dynamic HTML/CSS Flush Double Door Visualizer ── */
.flush-door-graphic {
    --frame-color: #ffffff;
    --border-color: #737373;
    --sash-color: #ffffff;
    --glass-a: #e2eef7;
    --glass-b: #b4d3e8;
    --panel-border: rgba(0,0,0,0.22);
    --opener-red: #ef4444;

    position: relative;
    height: 100%;
    max-height: 100%;
    width: auto;
    aspect-ratio: var(--flush-aspect, 1.2 / 1);
    background: var(--frame-color);
    border: 6px solid var(--border-color);
    border-radius: 2px;
    padding: 3px;
    box-sizing: border-box;
    box-shadow: inset 0 0 0 1px #999, 0 6px 18px rgba(0,0,0,0.12);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    transition: border-color .2s ease;
    margin: 0 auto;
}

.wdc-card:hover .flush-door-graphic { --border-color: #000000; }

[data-theme="dark"] .flush-door-graphic {
    --frame-color: #1a1a1a;
    --border-color: #666666;
    --sash-color: #242424;
    --glass-a: #1e2b34;
    --glass-b: #131c23;
    --panel-border: rgba(255,255,255,0.2);
}
[data-theme="dark"] .wdc-card:hover .flush-door-graphic { --border-color: #ffffff; }

/* Transom Top Light */
.transom-top-light {
    position: relative;
    width: 100%;
    height: 25%;
    border-bottom: 3.5px solid var(--border-color);
    box-sizing: border-box;
    display: flex;
    gap: 3px;
}

.transom-pane {
    flex: 1;
    height: 100%;
    background: linear-gradient(135deg, var(--glass-a) 0%, var(--glass-b) 100%);
    border: 1px solid var(--panel-border);
    box-sizing: border-box;
}

/* Main Door Area */
.main-door-area {
    position: relative;
    width: 100%;
    flex: 1;
    display: flex;
    gap: 3px;
    min-height: 0;
}

/* Side Panels */
.side-panel {
    flex: 1;
    height: 100%;
    background: var(--sash-color);
    border: 2.5px solid var(--border-color);
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    gap: 3px;
    padding: 2px;
    position: relative;
}

.side-panel-upper, .side-panel-lower {
    width: 100%;
    flex: 1;
    background: linear-gradient(135deg, var(--glass-a) 0%, var(--glass-b) 100%);
    border: 1px solid var(--panel-border);
    box-sizing: border-box;
    position: relative;
}

/* Side Panel Opener Indicator (V-Triangle) */
.side-panel-opener-top {
    position: relative;
}
.side-panel-opener-top::after {
    content: "";
    position: absolute;
    top: 3px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-top: 11px solid var(--opener-red);
    opacity: 0.85;
}

/* Double Doors Center */
.double-door-center {
    flex: 2;
    height: 100%;
    display: flex;
    gap: 2px;
    position: relative;
}

.door-sash-half {
    flex: 1;
    height: 100%;
    background: var(--sash-color);
    border: 2.5px solid var(--border-color);
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    padding: 2px;
    gap: 2px;
    position: relative;
}

.sash-pane-full, .sash-pane-upper, .sash-pane-lower {
    width: 100%;
    flex: 1;
    background: linear-gradient(135deg, var(--glass-a) 0%, var(--glass-b) 100%);
    border: 1px solid var(--panel-border);
    box-sizing: border-box;
}

.sash-midrail {
    width: 100%;
    height: 4px;
    background: var(--border-color);
}

/* Meeting Stile & Handles */
.meeting-stile {
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 3px;
    background: var(--border-color);
    transform: translateX(-50%);
    z-index: 5;
}

.center-handles {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    gap: 4px;
    z-index: 10;
}

.handle-left, .handle-right {
    width: 4px;
    height: 18px;
    background: linear-gradient(180deg, #cccccc, #777777);
    border-radius: 1px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.4);
}

/* Door Specific Aspect Ratios */
.door-style-prehung-door, .door-style-prehung-midrail, .door-style-flush-door-double, .door-style-aluminium-double { --flush-aspect: 1 / 1.35; }
.door-style-with-left-panel, .door-style-with-right-panel, .door-style-left-panel-midrail, .door-style-right-panel-midrail { --flush-aspect: 1.05 / 1; }
.door-style-with-left-right-panels, .door-style-with-side-openers, .door-style-left-right-midrail, .door-style-side-openers-midrail { --flush-aspect: 1.35 / 1; }
.door-style-prehung-toplight, .door-style-prehung-midrail-toplight, .door-style-flush-toplight { --flush-aspect: 1 / 1.5; }
.door-style-left-panel-toplight, .door-style-right-panel-toplight, .door-style-left-panel-midrail-toplight, .door-style-right-panel-midrail-toplight { --flush-aspect: 1 / 1.1; }
.door-style-left-right-toplight, .door-style-left-right-midrail-toplight { --flush-aspect: 1.25 / 1; }

/* Aluminium modifier */
.door-style-aluminium-double { border-width: 4px; }
.door-style-aluminium-double .door-sash-half { border-width: 1.8px; }
</style>
@endonce

<div class="flush-door-graphic door-style-{{ $key }}" role="img" aria-label="Flush Door {{ $key }}">
    @if($hasTopLight)
        <div class="transom-top-light">
            @if($hasLeftPanel) <div class="transom-pane"></div> @endif
            <div class="transom-pane" style="flex:2;"></div>
            @if($hasRightPanel) <div class="transom-pane"></div> @endif
        </div>
    @endif

    <div class="main-door-area">
        {{-- Left Side Panel --}}
        @if($hasLeftPanel)
            <div class="side-panel">
                @if($hasOpeners)
                    <div class="side-panel-upper side-panel-opener-top"></div>
                    <div class="side-panel-lower"></div>
                @elseif($hasMidRail)
                    <div class="side-panel-upper"></div>
                    <div class="sash-midrail"></div>
                    <div class="side-panel-lower"></div>
                @else
                    <div class="side-panel-upper" style="height:100%;"></div>
                @endif
            </div>
        @endif

        {{-- Double Door Center --}}
        <div class="double-door-center">
            <div class="door-sash-half">
                @if($hasMidRail)
                    <div class="sash-pane-upper"></div>
                    <div class="sash-midrail"></div>
                    <div class="sash-pane-lower"></div>
                @else
                    <div class="sash-pane-full"></div>
                @endif
            </div>
            <div class="door-sash-half">
                @if($hasMidRail)
                    <div class="sash-pane-upper"></div>
                    <div class="sash-midrail"></div>
                    <div class="sash-pane-lower"></div>
                @else
                    <div class="sash-pane-full"></div>
                @endif
            </div>

            <div class="meeting-stile"></div>
            <div class="center-handles">
                <span class="handle-left"></span>
                <span class="handle-right"></span>
            </div>
        </div>

        {{-- Right Side Panel --}}
        @if($hasRightPanel)
            <div class="side-panel">
                @if($hasOpeners)
                    <div class="side-panel-upper side-panel-opener-top"></div>
                    <div class="side-panel-lower"></div>
                @elseif($hasMidRail)
                    <div class="side-panel-upper"></div>
                    <div class="sash-midrail"></div>
                    <div class="side-panel-lower"></div>
                @else
                    <div class="side-panel-upper" style="height:100%;"></div>
                @endif
            </div>
        @endif
    </div>
</div>
