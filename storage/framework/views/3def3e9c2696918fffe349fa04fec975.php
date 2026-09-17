<?php $__env->startSection('title', 'Configure Your Window — uPVC Windows'); ?>

<?php $__env->startPush('styles'); ?>
<style>
/* ── Container & layout ──────────────────────────────────────────── */
.wdc-container { width:100%; max-width:1440px; margin-inline:auto; padding-inline:16px; }
@media (min-width:768px){ .wdc-container{ padding-inline:24px; } }
.wdc-section { padding-block:36px; }

/* ── Page header ────────────────────────────────────────────────── */
.cfg-header { border-bottom:1px solid #e5e5e5; padding-bottom:16px; margin-bottom:24px; }
[data-theme="dark"] .cfg-header { border-color:#2a2a2a; }
.cfg-header h1 { font-size:1.5rem; font-weight:800; letter-spacing:-0.02em; margin:0; }
.cfg-header .meta { font-size:13px; color:#737373; font-weight:600; margin-top:4px; }

/* ── Three-column layout ─────────────────────────────────────────── */
.three-col {
    display: grid;
    grid-template-columns: 1fr;
    gap: 24px;
}
@media (min-width: 1024px) {
    .three-col {
        grid-template-columns: 32% 38% 30%;
        align-items: start;
    }
}

/* ── Column 1 (LEFT 30%): Configuration form ─────────────────────── */
.cfg-col { display: flex; flex-direction: column; gap: 0; }

.cfg-section { border:1px solid #e5e5e5; border-radius:4px; margin-bottom:14px; overflow:hidden; background:#fff; flex-shrink:0; }
[data-theme="dark"] .cfg-section { border-color:#2a2a2a; background:#111; }

.cfg-section-head {
    display:flex; align-items:center; justify-space-between;
    padding:12px 16px; background:#fafafa; border-bottom:1px solid #e5e5e5;
    cursor:pointer; user-select:none; transition: background .15s;
}
[data-theme="dark"] .cfg-section-head { background:#161616; border-color:#2a2a2a; }
.cfg-section-head:hover { background:#f0f0f0; }
[data-theme="dark"] .cfg-section-head:hover { background:#1e1e1e; }

.cfg-section-head h3 { font-size:12px; font-weight:800; text-transform:uppercase; letter-spacing:.07em; margin:0; display:flex; align-items:center; gap:8px; }
.cfg-section-head .chevron { width:16px; height:16px; transition:transform .2s; color:#737373; margin-left:auto; }
.cfg-section.is-open .chevron { transform:rotate(180deg); }
.cfg-section-body { padding:16px; display:none; }
.cfg-section.is-open .cfg-section-body { display:block; }

/* ── Size fields ────────────────────────────────────────────────── */
.dim-grid { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
.size-field { position:relative; }
.size-field label { display:block; font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:.06em; color:#525252; margin-bottom:5px; }
[data-theme="dark"] .size-field label { color:#999; }
.size-field .inp-wrap { position:relative; }
.size-field input {
    width:100%; padding:9px 34px 9px 12px; border:1px solid #d4d4d4; border-radius:3px;
    font-size:13px; font-weight:600; background:#fff; color:#000;
    transition: border-color .15s; box-sizing:border-box;
}
.size-field input:focus { outline:none; border-color:#000; }
.size-field input.is-valid { border-color:#16a34a; }
.size-field input.is-error { border-color:#c0392b; }
[data-theme="dark"] .size-field input { background:#111; border-color:#333; color:#fff; }
[data-theme="dark"] .size-field input:focus { border-color:#fff; }
.size-field .unit { position:absolute; right:10px; top:50%; transform:translateY(-50%); font-size:11px; color:#a3a3a3; font-weight:600; pointer-events:none; }
.size-field .hint { font-size:10px; color:#a3a3a3; margin-top:3px; }
.size-field .err-msg { font-size:10px; color:#c0392b; margin-top:3px; display:none; }
.size-field.has-error .err-msg { display:block; }

/* ── Pane selector ──────────────────────────────────────────────── */
.pane-tabs { display:flex; gap:6px; flex-wrap:wrap; }
.pane-tab {
    padding:6px 12px; border:1px solid #d4d4d4; border-radius:3px;
    font-size:11px; font-weight:700; cursor:pointer; background:#fff; color:#525252;
    transition: all .15s;
}
.pane-tab:hover { border-color:#000; color:#000; }
.pane-tab.is-active { background:#000; border-color:#000; color:#fff; }
[data-theme="dark"] .pane-tab { background:#111; border-color:#333; color:#999; }
[data-theme="dark"] .pane-tab:hover { border-color:#fff; color:#fff; }
[data-theme="dark"] .pane-tab.is-active { background:#fff; border-color:#fff; color:#000; }

/* ── Field groups ───────────────────────────────────────────────── */
.field-group { margin-bottom:14px; }
.field-group:last-child { margin-bottom:0; }
.field-group label { display:flex; align-items:center; gap:5px; font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:.06em; color:#525252; margin-bottom:5px; }
[data-theme="dark"] .field-group label { color:#999; }

select.wdc-select {
    width:100%; padding:9px 12px; border:1px solid #d4d4d4; border-radius:3px;
    font-size:13px; font-weight:600; background:#fff; color:#000; box-sizing:border-box;
}
select.wdc-select:focus { outline:none; border-color:#000; }
[data-theme="dark"] select.wdc-select { background:#111; border-color:#333; color:#fff; }
[data-theme="dark"] select.wdc-select:focus { border-color:#fff; }

/* ── Color swatch grid ──────────────────────────────────────────── */
.color-swatch-grid { display:grid; grid-template-columns:repeat(auto-fill, minmax(80px, 1fr)); gap:8px; }
.color-btn {
    border:1px solid #e5e5e5; border-radius:3px; background:#fff;
    padding:6px 4px; text-align:center; cursor:pointer;
    display:flex; flex-direction:column; align-items:center; gap:4px;
    transition: border-color .12s, box-shadow .12s;
}
.color-btn:hover { border-color:#000; }
.color-btn.is-selected { border-color:#000; box-shadow:0 0 0 1.5px #000; background:#000; color:#fff; }
.color-btn .c-dot { width:22px; height:22px; border-radius:50%; border:1px solid rgba(0,0,0,0.15); box-shadow:inset 0 1px 2px rgba(0,0,0,0.1); }
.color-btn .c-name { font-size:10px; font-weight:700; line-height:1.2; }
.color-btn .c-price { font-size:9px; font-weight:600; color:#888; }
.color-btn.is-selected .c-price { color:#ccc; }
[data-theme="dark"] .color-btn { background:#111; border-color:#2a2a2a; color:#eee; }
[data-theme="dark"] .color-btn:hover { border-color:#fff; }
[data-theme="dark"] .color-btn.is-selected { border-color:#fff; box-shadow:0 0 0 1.5px #fff; background:#fff; color:#000; }

/* ── Glass swatch grid ──────────────────────────────────────────── */
.swatch-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(72px,1fr)); gap:8px; }
.swatch-btn {
    border:1px solid #e5e5e5; border-radius:3px; background:#fff;
    padding:6px 4px; text-align:center; cursor:pointer;
    display:flex; flex-direction:column; align-items:center; gap:4px;
    transition: border-color .12s, box-shadow .12s;
}
.swatch-btn:hover { border-color:#000; }
.swatch-btn.is-selected { border-color:#000; box-shadow:0 0 0 1.5px #000; background:#000; color:#fff; }
.swatch-btn .swatch { width:100%; height:30px; border-radius:2px; }
.swatch-btn .sname { font-size:10px; font-weight:700; line-height:1.2; }
.swatch-btn .sprice { font-size:9px; font-weight:600; color:#888; }
.swatch-btn.is-selected .sprice { color:#ccc; }
[data-theme="dark"] .swatch-btn { background:#111; border-color:#2a2a2a; }
[data-theme="dark"] .swatch-btn:hover { border-color:#fff; }
[data-theme="dark"] .swatch-btn.is-selected { border-color:#fff; box-shadow:0 0 0 1.5px #fff; background:#fff; color:#000; }

/* Glass textures */
.glass-swatch.glass-clear            { background:linear-gradient(135deg,#f5f8fa,#dbe4ea); }
.glass-swatch.glass-arctic           { background:linear-gradient(135deg,#eef2f4,#c9d3d8); }
.glass-swatch.glass-autumn           { background:linear-gradient(135deg,#e7ded2,#b8a98d); }
.glass-swatch.glass-charcoal-sticks  { background:repeating-linear-gradient(90deg,#8a8a8a 0 3px,#c9c9c9 3px 8px); }
.glass-swatch.glass-contora          { background:linear-gradient(135deg,#dbe6ea,#a9c1c9); }
.glass-swatch.glass-cotswold         { background:linear-gradient(135deg,#e9e4d8,#b7ae98); }
.glass-swatch.glass-digital          { background:repeating-linear-gradient(45deg,#c7ccce 0 4px,#e6e9ea 4px 8px); }
.glass-swatch.glass-everglade        { background:linear-gradient(135deg,#d6ddd3,#8fa189); }
.glass-swatch.glass-florielle        { background:linear-gradient(135deg,#eee0e0,#c9a9ab); }
.glass-swatch.glass-mayflower        { background:linear-gradient(135deg,#e8e4ee,#b7aec7); }
.glass-swatch.glass-minster          { background:linear-gradient(135deg,#dfe6ea,#a3b6bd); }
.glass-swatch.glass-oak              { background:linear-gradient(135deg,#c9a06a,#7a5432); }
.glass-swatch.glass-pelerine         { background:linear-gradient(135deg,#eceff0,#c4cccf); }
.glass-swatch.glass-satin-opal       { background:linear-gradient(135deg,#f2f2f2,#d9d9d9); }
.glass-swatch.glass-stippolyte       { background:repeating-radial-gradient(circle at 30% 30%,#e4e7e8 0 3px,#c2c8ca 3px 6px); }
.glass-swatch.glass-sycamore         { background:linear-gradient(135deg,#e9d9b8,#b99a68); }
.glass-swatch.glass-taffeta          { background:repeating-linear-gradient(0deg,#dfe3e4 0 2px,#c8cdce 2px 4px); }
.glass-swatch.glass-solid-panel      { background:#3a3a3a; }

/* ── Handle cards ────────────────────────────────────────────────── */
.handle-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(84px,1fr)); gap:8px; }
.handle-card {
    border:1px solid #e5e5e5; border-radius:3px; background:#fff;
    padding:8px 6px; text-align:center; cursor:pointer;
    display:flex; flex-direction:column; align-items:center; gap:5px;
    transition: border-color .12s, box-shadow .12s;
}
.handle-card:hover { border-color:#000; }
.handle-card.is-selected { border-color:#000; box-shadow:0 0 0 1.5px #000; }
[data-theme="dark"] .handle-card { background:#111; border-color:#2a2a2a; }
[data-theme="dark"] .handle-card:hover { border-color:#fff; }
[data-theme="dark"] .handle-card.is-selected { border-color:#fff; box-shadow:0 0 0 1.5px #fff; }

.handle-card .hname { font-size:10px; font-weight:700; line-height:1.2; }
.handle-card .hprice { font-size:9px; font-weight:600; color:#888; }
.handle-card.is-selected .hprice { color:#737373; }

.handle-illus {
    width:44px; height:44px; position:relative;
    display:flex; align-items:center; justify-content:center; flex-shrink:0;
}
.h-espag { position:relative; width:12px; height:38px; }
.h-espag .h-backplate {
    position:absolute; left:50%; transform:translateX(-50%);
    width:8px; height:38px; background:linear-gradient(180deg,#d0d0d0,#a0a0a0);
    border-radius:4px;
}
.h-espag .h-lever {
    position:absolute; top:12px; left:50%; transform:translateX(-50%) rotate(-30deg);
    width:24px; height:7px;
    background:linear-gradient(90deg,#c8c8c8,#e8e8e8,#c0c0c0);
    border-radius:3px; transform-origin:3px 3px;
    box-shadow:0 2px 4px rgba(0,0,0,.25);
}
.h-espag .h-boss {
    position:absolute; top:12px; left:50%; transform:translateX(-50%);
    width:8px; height:8px; background:radial-gradient(circle at 35% 35%,#e8e8e8,#a8a8a8);
    border-radius:50%; margin-top:-1px;
}
.h-chrome .h-backplate { background:linear-gradient(180deg,#e8ecf0,#9aa2a8); }
.h-chrome .h-lever { background:linear-gradient(90deg,#b0bfc8,#d8e4ea,#a8b8c0); }
.h-gold .h-backplate { background:linear-gradient(180deg,#e8cf8a,#a9822f); }
.h-gold .h-lever { background:linear-gradient(90deg,#c8a040,#e8d070,#b09030); }
.h-satin-silver .h-backplate { background:linear-gradient(180deg,#e3e3e3,#a9a9a9); }
.h-satin-silver .h-lever { background:linear-gradient(90deg,#c0c0c0,#dcdcdc,#b4b4b4); }
.h-black .h-backplate { background:linear-gradient(180deg,#333,#111); }
.h-black .h-lever { background:linear-gradient(90deg,#2a2a2a,#444,#222); }
.h-monkey-tail { position:relative; width:24px; height:38px; }
.h-monkey-tail .mt-shaft { position:absolute; left:7px; top:0; width:6px; height:24px; background:#333; border-radius:3px; }
.h-monkey-tail .mt-tail { position:absolute; left:0; top:18px; width:20px; height:18px; border:6px solid #333; border-top:none; border-radius:0 0 12px 12px; box-sizing:border-box; }
.h-tear-drop { position:relative; width:16px; height:38px; }
.h-tear-drop .td-shaft { position:absolute; left:50%; transform:translateX(-50%); width:6px; height:22px; top:0; background:#333; border-radius:3px; }
.h-tear-drop .td-drop { position:absolute; left:50%; transform:translateX(-50%); top:18px; width:14px; height:18px; background:#333; border-radius:50% 50% 50% 50% / 40% 40% 60% 60%; }

/* ── Column 2 (CENTER 40%): Live Window Preview ──────────────────── */
.preview-col {
    position: sticky; top: 140px;
    max-height: calc(100vh - 160px); overflow-y: auto;
    background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px;
    padding: 24px 20px; display: flex; flex-direction: column; align-items: center; gap: 16px;
    min-height: 440px; justify-content: center;
}
[data-theme="dark"] .preview-col { background: #121212; border-color: #262626; }

.pv-header { width: 100%; text-align: center; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px; margin-bottom: 4px; }
[data-theme="dark"] .pv-header { border-color: #262626; }
.pv-title { font-size: 14px; font-weight: 800; text-transform: uppercase; letter-spacing: .08em; color: #000; }
[data-theme="dark"] .pv-title { color: #fff; }
.pv-dims { font-size: 12px; font-weight: 700; color: #64748b; margin-top: 2px; }

.window-container-outer {
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* Dynamic CSS Window Component */
.upvc-window {
    --upvc-frame-color: #ffffff;
    --upvc-border-color: #d4d4d4;
    --mullion: #cccccc;
    --glass-a: #eef2f5;
    --glass-b: #d7e1e8;

    position: relative;
    width: 100%;
    max-width: 320px;
    aspect-ratio: 4 / 3;
    display: grid;
    grid-template-columns: var(--upvc-cols);
    grid-template-rows: var(--upvc-rows);
    gap: 6px;
    background: var(--mullion);
    border: 8px solid var(--upvc-frame-color);
    border-radius: 2px;
    padding: 6px;
    box-sizing: border-box;
    box-shadow: 0 0 0 1px var(--upvc-border-color), 0 12px 32px rgba(0,0,0,.15);
    transition: all .25s ease;
    overflow: hidden;
}

.upvc-pane {
    position: relative;
    min-width: 0; min-height: 0;
    background: linear-gradient(135deg, var(--glass-a) 0%, var(--glass-b) 100%);
    box-shadow: inset 0 0 0 1px rgba(0,0,0,.08);
    transition: all .25s ease;
    overflow: hidden;
}

/* Sash sliding arrow indicators */
.upvc-pane.pane-top::after {
    content: "↓"; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);
    font-size: 18px; font-weight: 900; color: rgba(0,0,0,0.3); pointer-events: none; z-index: 2;
}
.upvc-pane.pane-bottom::after {
    content: "↑"; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);
    font-size: 18px; font-weight: 900; color: rgba(0,0,0,0.3); pointer-events: none; z-index: 2;
}

.upvc-pane.is-selected-pane {
    box-shadow: inset 0 0 0 2.5px #000;
}
[data-theme="dark"] .upvc-pane.is-selected-pane { box-shadow: inset 0 0 0 2.5px #fff; }

/* Opener markers */
.upvc-pane.is-open::after { content:""; position:absolute; inset:8%; border:1.8px dashed rgba(0,0,0,.35); pointer-events:none; }
.upvc-pane.hinge-left::before { content:""; position:absolute; left:4px; top:8%; bottom:8%; width:3px; background:rgba(0,0,0,.4); border-radius:1px; }
.upvc-pane.hinge-right::before { content:""; position:absolute; right:4px; top:8%; bottom:8%; width:3px; background:rgba(0,0,0,.4); border-radius:1px; }

/* Handle illustration overlay on sashes */
.upvc-pane .pane-handle-graphic {
    position: absolute;
    width: 6px;
    height: 18px;
    background: #000;
    border-radius: 2px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 5;
    pointer-events: none;
    box-shadow: 0 1px 3px rgba(0,0,0,0.3);
}
.upvc-pane.hinge-left .pane-handle-graphic { right: 6px; }
.upvc-pane.hinge-right .pane-handle-graphic { left: 6px; }

/* Blind overlay */
.upvc-pane .blind-overlay {
    position: absolute;
    inset: 0;
    background-image: repeating-linear-gradient(0deg, rgba(0,0,0,0.15) 0 2px, transparent 2px 6px);
    pointer-events: none;
    z-index: 2;
}

/* Glazing bars */
.bar-h { position:absolute; left:0; right:0; top:50%; height:2px; background:rgba(0,0,0,.3); transform:translateY(-1px); pointer-events:none; z-index:3; }
.bar-v { position:absolute; top:0; bottom:0; left:50%; width:2px; background:rgba(0,0,0,.3); transform:translateX(-1px); pointer-events:none; z-index:3; }
.bar-v1 { position:absolute; top:0; bottom:0; left:33.33%; width:2px; background:rgba(0,0,0,.3); transform:translateX(-1px); pointer-events:none; z-index:3; }
.bar-v2 { position:absolute; top:0; bottom:0; left:66.67%; width:2px; background:rgba(0,0,0,.3); transform:translateX(-1px); pointer-events:none; z-index:3; }
.bar-margin { position:absolute; inset:12%; border:1.8px solid rgba(0,0,0,.3); pointer-events:none; z-index:3; }

/* Curved top head styles */
.upvc-window.is-swept {
    border-top-left-radius: 90px 45px !important;
    border-top-right-radius: 90px 45px !important;
}
.upvc-window.is-arch {
    border-top-left-radius: 160px !important;
    border-top-right-radius: 160px !important;
}

/* Cill graphic */
.cill-bar {
    width: calc(100% + 24px);
    height: 12px;
    background: var(--upvc-frame-color, #ffffff);
    border: 1px solid #b0b0b0;
    border-top: none;
    border-radius: 0 0 3px 3px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    margin-top: -1px;
}

/* ── Column 3 (RIGHT 30%): Smart Information Panel ─────────────────── */
.info-col {
    position: sticky; top: 140px;
    max-height: calc(100vh - 160px);
    display: flex; flex-direction: column; gap: 14px;
}
#sec-summary {
    overflow-y: auto;
    flex-shrink: 1;
}

.smart-info-panel {
    border: 1px solid #e5e5e5; border-radius: 6px; padding: 20px; background: #ffffff;
    box-shadow: 0 2px 12px rgba(0,0,0,0.03);
    flex-shrink: 0;
}
[data-theme="dark"] .smart-info-panel { border-color: #262626; background: #111; }

.info-card { display: none; }
.info-card.is-active { display: block; animation: fadeIn .2s ease-in-out; }

@keyframes fadeIn { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: translateY(0); } }

.info-card h4 {
    font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: .07em;
    margin-top: 0; margin-bottom: 12px; color: #000; border-bottom: 2px solid #000; padding-bottom: 6px;
}
[data-theme="dark"] .info-card h4 { color: #fff; border-color: #fff; }

.info-card p { font-size: 12.5px; line-height: 1.6; color: #475569; margin-bottom: 10px; }
[data-theme="dark"] .info-card p { color: #94a3b8; }
.info-card p strong { color: #000; }
[data-theme="dark"] .info-card p strong { color: #fff; }
.info-card p:last-child { margin-bottom: 0; }

.info-badge {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 10.5px; font-weight: 700; color: #1e293b;
    background: #f1f5f9; border: 1px solid #cbd5e1; border-radius: 4px; padding: 4px 10px; margin-top: 8px;
}
[data-theme="dark"] .info-badge { background: #1e293b; color: #f1f5f9; border-color: #334155; }

.info-notice {
    font-size: 11px; color: #64748b; border-top: 1px dashed #e2e8f0; margin-top: 14px; padding-top: 10px; line-height: 1.5;
}
[data-theme="dark"] .info-notice { border-color: #334155; color: #94a3b8; }

/* Summary & Price Line */
.summary-table { width:100%; border-collapse:collapse; font-size:12px; }
.summary-table td { padding:4px 0; vertical-align:top; }
.summary-table td:first-child { color:#64748b; font-weight:600; width:105px; }
.summary-table td:last-child { font-weight:700; color:#000; }
[data-theme="dark"] .summary-table td:first-child { color:#94a3b8; }
[data-theme="dark"] .summary-table td:last-child { color:#fff; }
.summary-divider { border:none; border-top:1px dashed #e2e8f0; margin:12px 0; }
[data-theme="dark"] .summary-divider { border-color:#2a2a2a; }

.price-total-line {
    display:flex; align-items:baseline; justify-content:space-between;
    border-top:2px solid #000; padding-top:10px; margin-top:6px;
}
[data-theme="dark"] .price-total-line { border-color:#fff; }
.price-total-line .pt-label { font-size:12px; font-weight:800; text-transform:uppercase; letter-spacing:.06em; }
.price-total-line .pt-value { font-size:1.35rem; font-weight:800; }

.btn-atc {
    display:flex; align-items:center; justify-content:center; gap:8px;
    width:100%; padding:13px 18px; margin-top:12px;
    font-size:13px; font-weight:700; text-transform:uppercase; letter-spacing:.06em;
    background:#000; color:#fff; border:1px solid #000; border-radius:4px; cursor:pointer;
    transition:background .15s;
}
.btn-atc:hover { background:#222; }
[data-theme="dark"] .btn-atc { background:#fff; color:#000; border-color:#fff; }
[data-theme="dark"] .btn-atc:hover { background:#e2e8f0; }

/* Responsive adjustments */
@media (max-width:1023px){
    .three-col { display:flex; flex-direction:column; }
    .cfg-col { order: 1; }
    .preview-col { order: 2; position: static; min-height: 360px; }
    .info-col { order: 3; position: static; }
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<?php
$windowFrames = [
    'standard-casement' => [
        'name' => 'Standard Casement', 'cols' => [1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]] ],
    ],
    'two-light' => [
        'name' => 'Two Light', 'cols' => [1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]] ],
    ],
    'french' => [
        'name' => 'French Casement', 'cols' => [1,1.15], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]] ],
    ],
    'two-light-top' => [
        'name' => 'Two Light, Top Light', 'cols' => [1,1], 'rows' => [0.35,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]],
        ],
    ],
    'three-light' => [
        'name' => 'Three Light', 'cols' => [1,1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]] ],
    ],
    'three-light-top' => [
        'name' => 'Three Light, Top Light', 'cols' => [1,1,1], 'rows' => [0.35,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    'horizontal-split' => [
        'name' => 'Horizontal Split', 'cols' => [1], 'rows' => [1,1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]] ],
    ],
    'four-pane-grid' => [
        'name' => 'Four Pane Grid', 'cols' => [1,1], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]],
        ],
    ],
    'six-pane-grid' => [
        'name' => 'Six Pane Grid', 'cols' => [1,1,1], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    'wide-stacked-sidelight' => [
        'name' => 'Wide Sash + Stacked Sidelight', 'cols' => [1.3,1], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,3]],
            ['c'=>[2,3],'r'=>[1,2]], ['c'=>[2,3],'r'=>[2,3]],
        ],
    ],
    'narrow-bookend' => [
        'name' => 'Narrow Bookend Lights', 'cols' => [0.55,1,1,0.55], 'rows' => [1,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]],
            ['c'=>[2,3],'r'=>[1,3]], ['c'=>[3,4],'r'=>[1,3]],
            ['c'=>[4,5],'r'=>[1,2]], ['c'=>[4,5],'r'=>[2,3]],
        ],
    ],
    'georgian-three-light' => [
        'name' => 'Georgian Bar Three Light', 'cols' => [1,0.5,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]] ],
    ],
    'wide-four-light' => [
        'name' => 'Wide Four Light', 'cols' => [1,1,1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]], ['c'=>[4,5],'r'=>[1,2]] ],
    ],
    'wide-five-light' => [
        'name' => 'Wide Five Light', 'cols' => [1,1,1,1,1], 'rows' => [1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[4,5],'r'=>[1,2]], ['c'=>[5,6],'r'=>[1,2]],
        ],
    ],
    'lantern' => [
        'name' => 'Lantern / Roof Light', 'cols' => [1], 'rows' => [1,1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]] ],
    ],
    'bay' => [
        'name' => 'Bay Window Set', 'cols' => [1,1.3,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]] ],
    ],
    'six-light-top' => [
        'name' => 'Six Light, Top Light', 'cols' => [1,1,1], 'rows' => [0.4,1],
        'cells' => [
            ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]], ['c'=>[3,4],'r'=>[1,2]],
            ['c'=>[1,2],'r'=>[2,3]], ['c'=>[2,3],'r'=>[2,3]], ['c'=>[3,4],'r'=>[2,3]],
        ],
    ],
    'tilt-and-turn' => [
        'name' => 'Tilt & Turn', 'cols' => [1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]] ],
    ],
    'flush' => [
        'name' => 'Flush Casement', 'cols' => [1,1], 'rows' => [1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[2,3],'r'=>[1,2]] ],
    ],
    'sash' => [
        'name' => 'Sash Window', 'cols' => [1], 'rows' => [1,1],
        'cells' => [ ['c'=>[1,2],'r'=>[1,2]], ['c'=>[1,2],'r'=>[2,3]] ],
    ],
];

$frameColours = [
    ['key' => 'white',        'name' => 'White Flat',        'color' => '#ffffff', 'border' => '#d4d4d4', 'price' => 0],
    ['key' => 'anthracite',   'name' => 'Anthracite Grey',   'color' => '#383e42', 'border' => '#222222', 'price' => 25],
    ['key' => 'chartwell',    'name' => 'Chartwell Green',   'color' => '#8ba89c', 'border' => '#6b887c', 'price' => 30],
    ['key' => 'golden-oak',   'name' => 'Golden Oak',        'color' => '#85532b', 'border' => '#5e381b', 'price' => 35],
    ['key' => 'rosewood',     'name' => 'Rosewood',          'color' => '#4a2c1d', 'border' => '#2e190f', 'price' => 35],
    ['key' => 'black-ash',    'name' => 'Black Ash',         'color' => '#222222', 'border' => '#000000', 'price' => 30],
    ['key' => 'smooth-grey',  'name' => 'Smooth Grey',       'color' => '#787d82', 'border' => '#505458', 'price' => 25],
    ['key' => 'agate-grey',   'name' => 'Agate Grey',        'color' => '#8a9296', 'border' => '#62686c', 'price' => 25],
    ['key' => 'cream',        'name' => 'Cream',             'color' => '#f2efdf', 'border' => '#d2cfbf', 'price' => 25],
];

$glazingSpecs = [
    'double' => 'Double Glazed (A-Rated)',
    'triple' => 'Triple Glazed (A++ Rated, +£35)',
];

$glazingSafety = [
    'standard'  => 'Standard Glazing',
    'toughened' => 'Toughened Safety Glass (+£18)',
    'laminated' => 'Laminated Security Glass (+£24)',
    'acoustic'  => 'Acoustic Toughened Glass (+£32)',
];

$cillOptions = [
    'none'   => 'No External Cill',
    'stub'   => '85mm Stub Cill (+£8)',
    'std'    => '150mm Standard Cill (+£12)',
    'large'  => '180mm Large Cill (+£16)',
];

$lockOptions = [
    'std'    => '5-Point PAS24 Multipoint Lock',
    'ultion' => 'Ultion 3-Star Diamond Cylinder Upgrade (+£25)',
];

$restrictorOptions = [
    'none'    => 'None',
    'egress'  => 'Egress Child Restrictor (+£12)',
    'flush'   => 'Flush Child Restrictor (+£12)',
];

$fixingKitOptions = [
    'none'     => 'None',
    'standard' => 'Standard Fixing Kit (+£8)',
    'heavy'    => 'Heavy Duty Masonry Kit (+£15)',
];

$extenderOptions = [
    'none' => 'None',
    '20mm' => '20mm Frame Extender (+£14)',
    '50mm' => '50mm Frame Extender (+£22)',
];

$blindColors = [
    'white'      => 'White',
    'light-grey' => 'Light Grey',
    'anthracite' => 'Anthracite Grey',
    'black'      => 'Black',
    'cream'      => 'Cream',
];

$hingeTypes   = [ 'standard' => 'Standard', 'fire_escape' => 'Fire Escape', 'egress' => 'Easy Clean / Egress' ];
$trickleVents = [ 'none' => 'None', 'white' => 'White', 'brown' => 'Brown' ];
$blindOptions = [ 'none' => 'None', 'cordless' => 'Cordless Magnetic', 'cordless-dual' => 'Cordless Dual-Sided', 'corded' => 'Corded System' ];
$barOptions   = [ 'none' => 'None', 'horizontal' => 'Horizontal', 'vertical' => 'Vertical', 'both' => 'Horizontal + Vertical' ];
$decoOptions  = [ 'none' => 'None', 'georgian' => 'Georgian Bar', 'astragal' => 'Astragal Bar' ];

$handleOptions = [
    ['key'=>'white',        'name'=>'White',        'price'=>0,  'color'=>'#ffffff'],
    ['key'=>'chrome',       'name'=>'Chrome',       'price'=>3,  'color'=>'#d8e4ea'],
    ['key'=>'gold',         'name'=>'Gold',         'price'=>3,  'color'=>'#e8cf8a'],
    ['key'=>'satin-silver', 'name'=>'Satin Silver', 'price'=>3,  'color'=>'#c0c0c0'],
    ['key'=>'black',        'name'=>'Matte Black',  'price'=>3,  'color'=>'#222222'],
    ['key'=>'monkey-tail',  'name'=>'Monkey Tail',  'price'=>7,  'color'=>'#333333'],
    ['key'=>'tear-drop',    'name'=>'Tear Drop',    'price'=>7,  'color'=>'#333333'],
];

$glassOptions = [
    ['key'=>'clear','name'=>'Clear','price'=>0],
    ['key'=>'arctic','name'=>'Arctic','price'=>28],
    ['key'=>'autumn','name'=>'Autumn','price'=>28],
    ['key'=>'charcoal-sticks','name'=>'Charcoal Sticks','price'=>32],
    ['key'=>'contora','name'=>'Contora','price'=>28],
    ['key'=>'cotswold','name'=>'Cotswold','price'=>28],
    ['key'=>'digital','name'=>'Digital','price'=>34],
    ['key'=>'everglade','name'=>'Everglade','price'=>30],
    ['key'=>'florielle','name'=>'Florielle','price'=>30],
    ['key'=>'mayflower','name'=>'Mayflower','price'=>30],
    ['key'=>'minster','name'=>'Minster','price'=>28],
    ['key'=>'oak','name'=>'Oak','price'=>32],
    ['key'=>'pelerine','name'=>'Pelerine','price'=>28],
    ['key'=>'satin-opal','name'=>'Satin Opal','price'=>26],
    ['key'=>'stippolyte','name'=>'Stippolyte','price'=>32],
    ['key'=>'sycamore','name'=>'Sycamore','price'=>30],
    ['key'=>'taffeta','name'=>'Taffeta','price'=>30],
    ['key'=>'solid-panel','name'=>'Solid Panel','price'=>45],
];

$basePrices = [
    'standard-casement'       => 189,
    'two-light'              => 249,
    'french'                 => 259,
    'two-light-top'          => 289,
    'three-light'            => 319,
    'three-light-top'        => 349,
    'horizontal-split'       => 219,
    'four-pane-grid'         => 279,
    'six-pane-grid'          => 369,
    'wide-stacked-sidelight' => 329,
    'narrow-bookend'         => 399,
    'georgian-three-light'   => 339,
    'wide-four-light'        => 429,
    'wide-five-light'        => 499,
    'lantern'                => 389,
    'bay'                    => 459,
    'six-light-top'          => 479,
    'tilt-and-turn'          => 229,
    'flush'                  => 239,
    'sash'                   => 279,
];

$rawSlug = request('design', 'standard-casement');
$aliases = [
    'french-windows'        => 'french',
    'tilt-and-turn-windows' => 'tilt-and-turn',
    'flush-windows'         => 'flush',
    'sash-windows'          => 'sash',
    'standard-windows'      => 'standard-casement',
];
$resolvedSlug = $aliases[$rawSlug] ?? $rawSlug;

$selected = [
    'slug'   => $resolvedSlug,
    'name'   => request('name', $windowFrames[$resolvedSlug]['name'] ?? 'Custom Window Frame'),
    'width'  => (int) request('width', 1200),
    'height' => (int) request('height', 1500),
];
$cfg = $windowFrames[$selected['slug']] ?? $windowFrames['standard-casement'];

if ($selected['slug'] === 'sash') {
    $sashStyleMap = [
        'equal'      => ['name' => 'Equal Sashes (50/50)', 'rows' => [1, 1]],
        '2-fifths'   => ['name' => '2 Fifths Top Sash (40/60)', 'rows' => [0.67, 1]],
        '1-third'    => ['name' => '1 Third Top Sash (33/67)', 'rows' => [0.5, 1]],
        'swept-head' => ['name' => 'Swept-head Sash', 'rows' => [0.6, 1]],
        'true-arch'  => ['name' => 'True-arch Sash', 'rows' => [0.6, 1]],
    ];
    $sKey = request('sash_style', 'equal');
    $gKey = request('glazing_design', 'non-georgian');
    if (isset($sashStyleMap[$sKey])) {
        $windowFrames['sash']['rows'] = $sashStyleMap[$sKey]['rows'];
        $cfg['rows'] = $sashStyleMap[$sKey]['rows'];
        $styleTitle = $sashStyleMap[$sKey]['name'];
        $designTitle = ucwords(str_replace('-', ' ', $gKey));
        $cfg['name'] = "Sliding Sash Window — {$styleTitle} ({$designTitle})";
        $windowFrames['sash']['name'] = $cfg['name'];
    }
}

$paneCount = count($cfg['cells']);
?>

<main id="content">
<section class="w-full bg-white dark:bg-black wdc-section">
<div class="wdc-container">

    
    <div class="cfg-header">
        <h1><?php echo e($cfg['name']); ?></h1>
        <div class="meta" id="headerMeta"><?php echo e($selected['width']); ?>mm × <?php echo e($selected['height']); ?>mm</div>
    </div>

    
    <div class="three-col">

        
        <div class="cfg-col">

            
            <div class="cfg-section is-open" id="sec-size" data-info="info-size">
                <div class="cfg-section-head" data-section="sec-size">
                    <h3>Dimensions &amp; Sashes</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="dim-grid">
                        <div class="size-field" id="wrapWidth">
                            <label for="cfgWidth">Width (mm)</label>
                            <div class="inp-wrap">
                                <input type="number" id="cfgWidth" value="<?php echo e($selected['width']); ?>" min="300" max="2400" step="1" placeholder="1200">
                                <span class="unit">mm</span>
                            </div>
                            <p class="hint">300 – 2400 mm</p>
                        </div>
                        <div class="size-field" id="wrapHeight">
                            <label for="cfgHeight">Height (mm)</label>
                            <div class="inp-wrap">
                                <input type="number" id="cfgHeight" value="<?php echo e($selected['height']); ?>" min="300" max="2400" step="1" placeholder="1500">
                                <span class="unit">mm</span>
                            </div>
                            <p class="hint">300 – 2400 mm</p>
                        </div>
                    </div>

                    <?php if($paneCount > 1): ?>
                    <div style="margin-top:14px; padding-top:12px; border-top:1px dashed #e5e5e5;">
                        <label style="display:block;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px;color:#525252;">Select Pane to Configure</label>
                        <div class="pane-tabs" id="paneTabs">
                            <?php for($i = 0; $i < $paneCount; $i++): ?>
                                <button type="button" class="pane-tab <?php echo e($i === 0 ? 'is-active' : ''); ?>" data-pane="<?php echo e($i); ?>">
                                    Pane <?php echo e($i + 1); ?>

                                </button>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-frame-colour" data-info="info-frame-colour">
                <div class="cfg-section-head" data-section="sec-frame-colour">
                    <h3>Frame Colour</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="color-swatch-grid" id="frameColorGrid">
                        <?php $__currentLoopData = $frameColours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button" class="color-btn <?php echo e($loop->first ? 'is-selected' : ''); ?>" data-color-key="<?php echo e($fc['key']); ?>" data-color-hex="<?php echo e($fc['color']); ?>" data-border-hex="<?php echo e($fc['border']); ?>" data-price="<?php echo e($fc['price']); ?>">
                                <span class="c-dot" style="background:<?php echo e($fc['color']); ?>;"></span>
                                <span class="c-name"><?php echo e($fc['name']); ?></span>
                                <span class="c-price"><?php echo e($fc['price'] ? '+£'.$fc['price'] : 'Included'); ?></span>
                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-opener" data-info="info-opener">
                <div class="cfg-section-head" data-section="sec-opener">
                    <h3>Opener Options</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Opening Type</label>
                        <select class="wdc-select" id="sel-opening-type" data-info-trigger="info-opener">
                            <option value="casement">Casement (Side-Hung)</option>
                            <option value="fixed">Fixed (Non-Opening)</option>
                            <option value="tilt-turn">Tilt &amp; Turn</option>
                            <option value="top-hung">Top-Hung</option>
                        </select>
                    </div>
                    <div class="field-group" id="wrap-hinged-at">
                        <label>Hinged At</label>
                        <select class="wdc-select" id="sel-hinged-at" data-info-trigger="info-opener">
                            <option value="left">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="field-group" id="wrap-hinge-type">
                        <label>Hinge Type</label>
                        <select class="wdc-select" id="sel-hinge-type" data-info-trigger="info-hinge">
                            <?php $__currentLoopData = $hingeTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Trickle Vent</label>
                        <select class="wdc-select" id="sel-trickle-vent" data-info-trigger="info-vent">
                            <?php $__currentLoopData = $trickleVents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-glass" data-info="info-glass">
                <div class="cfg-section-head" data-section="sec-glass">
                    <h3>Glazing &amp; Glass</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Glazing Specification</label>
                        <select class="wdc-select" id="sel-glazing-spec" data-info-trigger="info-glass">
                            <?php $__currentLoopData = $glazingSpecs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Glazing Safety</label>
                        <select class="wdc-select" id="sel-glazing-safety" data-info-trigger="info-safety">
                            <?php $__currentLoopData = $glazingSafety; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Glass Pattern / Type</label>
                        <div class="swatch-grid" id="glassGrid">
                            <?php $__currentLoopData = $glassOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button type="button" class="swatch-btn <?php echo e($loop->first ? 'is-selected' : ''); ?>" data-key="<?php echo e($g['key']); ?>" data-info-trigger="info-glass">
                                    <span class="swatch glass-swatch glass-<?php echo e($g['key']); ?>"></span>
                                    <span class="sname"><?php echo e($g['name']); ?></span>
                                    <span class="sprice"><?php echo e($g['price'] ? '+£'.$g['price'] : 'Included'); ?></span>
                                </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-handle" data-info="info-handle">
                <div class="cfg-section-head" data-section="sec-handle">
                    <h3>Handle Style</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="handle-grid" id="handleGrid">
                        <?php $__currentLoopData = $handleOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button" class="handle-card <?php echo e($loop->first ? 'is-selected' : ''); ?>" data-key="<?php echo e($h['key']); ?>" data-handle-color="<?php echo e($h['color']); ?>" data-info-trigger="info-handle">
                                <div class="handle-illus">
                                    <?php if($h['key'] === 'monkey-tail'): ?>
                                        <div class="h-monkey-tail"><div class="mt-shaft"></div><div class="mt-tail"></div></div>
                                    <?php elseif($h['key'] === 'tear-drop'): ?>
                                        <div class="h-tear-drop"><div class="td-shaft"></div><div class="td-drop"></div></div>
                                    <?php else: ?>
                                        <div class="h-espag h-<?php echo e($h['key']); ?>"><div class="h-backplate"></div><div class="h-lever"></div><div class="h-boss"></div></div>
                                    <?php endif; ?>
                                </div>
                                <div class="hname"><?php echo e($h['name']); ?></div>
                                <div class="hprice"><?php echo e($h['price'] ? '+£'.$h['price'] : 'Included'); ?></div>
                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section" id="sec-blind" data-info="info-blind">
                <div class="cfg-section-head" data-section="sec-blind">
                    <h3>Internal Blinds</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Blind System</label>
                        <select class="wdc-select" id="sel-blind" data-info-trigger="info-blind">
                            <?php $__currentLoopData = $blindOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group" id="wrap-blind-color">
                        <label>Blind Colour</label>
                        <select class="wdc-select" id="sel-blind-color" data-info-trigger="info-blind">
                            <?php $__currentLoopData = $blindColors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section" id="sec-cill" data-info="info-cill">
                <div class="cfg-section-head" data-section="sec-cill">
                    <h3>External Cill</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Cill Profile</label>
                        <select class="wdc-select" id="sel-cill" data-info-trigger="info-cill">
                            <?php $__currentLoopData = $cillOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section" id="sec-locks" data-info="info-locks">
                <div class="cfg-section-head" data-section="sec-locks">
                    <h3>Security &amp; Locks</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Locking Mechanism</label>
                        <select class="wdc-select" id="sel-locks" data-info-trigger="info-locks">
                            <?php $__currentLoopData = $lockOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section" id="sec-restrictors" data-info="info-restrictors">
                <div class="cfg-section-head" data-section="sec-restrictors">
                    <h3>Child Restrictors</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Restrictor Latch</label>
                        <select class="wdc-select" id="sel-restrictor" data-info-trigger="info-restrictors">
                            <?php $__currentLoopData = $restrictorOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section" id="sec-fixing" data-info="info-fixing">
                <div class="cfg-section-head" data-section="sec-fixing">
                    <h3>Fixings &amp; Extenders</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Installation Fixing Kit</label>
                        <select class="wdc-select" id="sel-fixing-kit" data-info-trigger="info-fixing">
                            <?php $__currentLoopData = $fixingKitOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Frame Extenders / Add-ons</label>
                        <select class="wdc-select" id="sel-extender" data-info-trigger="info-extenders">
                            <?php $__currentLoopData = $extenderOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section" id="sec-bars" data-info="info-bars">
                <div class="cfg-section-head" data-section="sec-bars">
                    <h3>Glazing Bars &amp; Styling</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Glazing Bar Layout</label>
                        <select class="wdc-select" id="sel-bars" data-info-trigger="info-bars">
                            <?php $__currentLoopData = $barOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Decorative Finish</label>
                        <select class="wdc-select" id="sel-deco" data-info-trigger="info-bars">
                            <?php $__currentLoopData = $decoOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>



        </div>

        
        <div class="preview-col">
            <div class="pv-header">
                <div class="pv-title" id="pvTitle"><?php echo e($cfg['name']); ?></div>
                <div class="pv-dims" id="pvDims"><?php echo e($selected['width']); ?>mm × <?php echo e($selected['height']); ?>mm</div>
            </div>

            <div class="window-container-outer">
                
                <div class="upvc-window" id="mainWindow" role="img" aria-label="Window configuration live visual preview">
                    
                </div>
                
                <div class="cill-bar" id="cillBar" style="display:none;"></div>
            </div>

            <div style="font-size:11px;color:#94a3b8;font-weight:600;text-align:center;margin-top:8px;">
                <span id="pvActivePaneLabel">Active: Pane 1</span> — Live visual preview updates instantly as you select options
            </div>
        </div>

        
        <div class="info-col">

            <div class="smart-info-panel">
                
                
                <div class="info-card is-active" id="info-size">
                    <h4>Measuring &amp; Egress Guidance</h4>
                    <p>Measure the window opening in three places (top, middle, bottom for width; left, centre, right for height) and use the smallest dimension.</p>
                    <p>For habitable rooms where emergency fire egress is required, an unobstructed clear opening of at least <strong>0.33m²</strong> (minimum 450mm clear height/width) is recommended.</p>
                    <div class="info-badge">📐 Measured in Millimetres (mm)</div>
                    <div class="info-notice">Always verify site measurements and local Building Regulations with your installer.</div>
                </div>

                
                <div class="info-card" id="info-frame-colour">
                    <h4>Frame Colour &amp; Finish</h4>
                    <p>All uPVC profiles are co-extruded with durable, weather-resistant foils that retain colour and finish for decades without repainting.</p>
                    <p>Options range from classic <strong>White Flat</strong> to modern <strong>Anthracite Grey</strong> and heritage woodgrain finishes like <strong>Golden Oak</strong> and <strong>Chartwell Green</strong>.</p>
                    <div class="info-badge">🛡️ 10-Year Colour Fastness Guarantee</div>
                </div>

                
                <div class="info-card" id="info-opener">
                    <h4>Window Opener Configuration</h4>
                    <p>If you want a pane to open, select your preferred opening mechanism:</p>
                    <p><strong>Casement (Side-Hung):</strong> Standard outwards opening sash hinged on either left or right.</p>
                    <p><strong>Tilt &amp; Turn:</strong> Opens inwards for ventilation at the top, or opens wide like a door for easy cleaning.</p>
                    <p><strong>Top-Hung:</strong> Pivots from top hinges for rain-protected ventilation.</p>
                    <div class="info-badge">🚪 Egress &amp; Ventilation Compliant</div>
                </div>

                
                <div class="info-card" id="info-hinge">
                    <h4>Hinge Specifications</h4>
                    <p><strong>Standard Friction Hinges:</strong> Smooth 90° opening suited to everyday sashes.</p>
                    <p><strong>Fire Escape Hinges:</strong> Opens past 90° to maximize unobstructed emergency egress area.</p>
                    <p><strong>Easy Clean / Egress:</strong> Allows sash to slide inward along the track to safely clean external glass from inside.</p>
                    <div class="info-badge">🔥 Fire Egress Certified</div>
                </div>

                
                <div class="info-card" id="info-vent">
                    <h4>Trickle Ventilation (Part F)</h4>
                    <p>Trickle vents provide essential background ventilation to prevent condensation and improve indoor air quality without opening the sash.</p>
                    <p>Under <strong>Building Regulations Part F</strong>, replacement windows should include trickle vents if the original windows had them.</p>
                    <div class="info-badge">💨 Part F Ventilation Approved</div>
                </div>

                
                <div class="info-card" id="info-glass">
                    <h4>Glazing Performance</h4>
                    <p><strong>Double Glazing:</strong> A-Rated 28mm sealed units filled with Argon gas and Low-E heat reflective coating.</p>
                    <p><strong>Triple Glazing:</strong> A++ Rated 36mm units offering maximum sound insulation and lowest heat loss (U-values down to 0.8 W/m²K).</p>
                    <div class="info-badge">❄️ Low-E Argon Filled Glass</div>
                </div>

                
                <div class="info-card" id="info-safety">
                    <h4>Safety Glazing Regulations (Part N)</h4>
                    <p>Safety glass (toughened or laminated) is required by law in critical impact zones: within 300mm of a door, or below 800mm from floor level.</p>
                    <p><strong>Toughened Glass:</strong> 5x stronger than float glass; breaks into safe granular pieces.</p>
                    <p><strong>Laminated Glass:</strong> Holds glass together on impact for maximum security.</p>
                    <div class="info-badge">🛡️ BS EN 12150 Safety Certified</div>
                </div>

                
                <div class="info-card" id="info-handle">
                    <h4>Multipoint Lock Handles</h4>
                    <p>All handles operate integrated multipoint shootbolt locking systems. Handles include key locks and push-button release.</p>
                    <p>Choose from contemporary <strong>White, Chrome, Gold, Satin Silver, Matte Black</strong> espags or period <strong>Monkey Tail</strong> and <strong>Tear Drop</strong> designs.</p>
                    <div class="info-badge">🔑 Key Locking Handles</div>
                </div>

                
                <div class="info-card" id="info-blind">
                    <h4>Magnetic Integral Blinds</h4>
                    <p>Sealed inside the double-glazed unit, integral Venetian blinds never get dirty, damaged, or tangled.</p>
                    <p>Operated by smooth magnetic slider controls mounted on the frame. Available in Cordless, Corded, and Dual-sided operation.</p>
                    <div class="info-badge">🪟 100% Maintenance-Free</div>
                </div>

                
                <div class="info-card" id="info-cill">
                    <h4>External Cill Options</h4>
                    <p>External cills project from the bottom of the window to direct rainwater away from outer brickwork and masonry.</p>
                    <p>Choose between <strong>85mm Stub Cill</strong> (for wide stone sills), <strong>150mm Standard Cill</strong>, or <strong>180mm Large Cill</strong> for deep cavity walls.</p>
                    <div class="info-badge">🌧️ Rainwater Deflection System</div>
                </div>

                
                <div class="info-card" id="info-locks">
                    <h4>PAS24 Security &amp; Ultion Locks</h4>
                    <p>Our standard 5-point multipoint lock uses heavy-duty hookbolts and roller cams to resist forced entry.</p>
                    <p><strong>Ultion 3-Star Upgrade:</strong> 11-pin anti-snap cylinder backed by a <strong>£1,000 anti-snap guarantee</strong> against break-ins.</p>
                    <div class="info-badge">🔒 PAS24:2022 Security Certified</div>
                </div>

                
                <div class="info-card" id="info-restrictors">
                    <h4>Child Safety Restrictors</h4>
                    <p>Child safety latches restrict initial window opening to 100mm to prevent falls from upper floors.</p>
                    <p>Includes a quick-release catch that adults can operate to open the sash fully when needed.</p>
                    <div class="info-badge">👶 BS EN 14351 Child Safety</div>
                </div>

                
                <div class="info-card" id="info-fixing">
                    <h4>Installation Fixing Kits</h4>
                    <p>Includes high-tensile direct frame screws, masonry wall plugs, bridge packers, and silicone sealant for complete installation.</p>
                    <div class="info-badge">🔧 Professional Installer Grade</div>
                </div>

                
                <div class="info-card" id="info-extenders">
                    <h4>Frame Extenders (Add-ons)</h4>
                    <p>Frame add-on profiles attach to the outer frame edge to increase overall width or height by 20mm or 50mm.</p>
                    <p>Essential when clearing deep plaster lines, thick render, or accommodating trickle vents in tight brick openings.</p>
                    <div class="info-badge">📏 Precision Fit Profile Add-ons</div>
                </div>

                
                <div class="info-card" id="info-bars">
                    <h4>Glazing Bars &amp; Decorative Finishes</h4>
                    <p><strong>Georgian Bars:</strong> Surface-mounted or internal grid bars creating classic multi-pane aesthetic.</p>
                    <p><strong>Astragal Bars:</strong> Authentic 3D surface bars with back-to-back spacer bars inside glass for traditional period look.</p>
                    <div class="info-badge">🏛️ Period &amp; Heritage Styling</div>
                </div>

            </div>

            
            <div class="cfg-section is-open" id="sec-summary">
                <div class="cfg-section-head" data-section="sec-summary">
                    <h3>Your Configuration</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <table class="summary-table" id="summaryTable">
                        <tr><td>Window Design</td><td id="s-name"><?php echo e($cfg['name']); ?></td></tr>
                        <tr><td>Dimensions</td><td id="s-size"><?php echo e($selected['width']); ?>mm × <?php echo e($selected['height']); ?>mm</td></tr>
                        <tr><td>Frame Colour</td><td id="s-frame-colour">White Flat</td></tr>
                        <tr><td>Configured Pane</td><td id="s-pane">Pane 1 of <?php echo e($paneCount); ?></td></tr>
                        <tr><td>Opening Style</td><td id="s-opening">Casement</td></tr>
                        <tr><td>Glass Pattern</td><td id="s-glass">Clear</td></tr>
                        <tr><td>Handle Style</td><td id="s-handle">White</td></tr>
                        <tr><td>Trickle Vent</td><td id="s-vent">None</td></tr>
                        <tr><td>Internal Blind</td><td id="s-blind">None</td></tr>
                        <tr><td>External Cill</td><td id="s-cill">No Cill</td></tr>
                    </table>
                    <hr class="summary-divider">
                    <div class="price-total-line">
                        <span class="pt-label">Total Price</span>
                        <span class="pt-value" id="totalPrice">£<?php echo e($basePrices[$selected['slug']] ?? 189); ?></span>
                    </div>
                    <form method="POST" action="<?php echo e(url('/cart/add')); ?>" id="addCartForm">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="product_name"   value="<?php echo e($cfg['name']); ?>">
                        <input type="hidden" name="design"         value="<?php echo e($selected['slug']); ?>">
                        <input type="hidden" name="product_type"   value="window">
                        <input type="hidden" name="sash_style"     value="<?php echo e(request('sash_style')); ?>">
                        <input type="hidden" name="glazing_design" value="<?php echo e(request('glazing_design')); ?>">
                        <input type="hidden" name="width"          id="hWidth"      value="<?php echo e($selected['width']); ?>">
                        <input type="hidden" name="height"         id="hHeight"     value="<?php echo e($selected['height']); ?>">
                        <input type="hidden" name="panes_json"     id="hPanesJson">
                        <input type="hidden" name="price"          id="hPrice"      value="<?php echo e($basePrices[$selected['slug']] ?? 189); ?>">
                        <input type="hidden" name="line_total"     id="hLineTotal"  value="<?php echo e($basePrices[$selected['slug']] ?? 189); ?>">
                        <button type="submit" class="btn-atc">
                            <svg style="width:16px;height:16px;" viewBox="0 0 20 20" fill="currentColor"><path d="M3 1a1 1 0 0 0 0 2h1.22l.305 1.222a.997.997 0 0 0 .01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 0 0 0-2H6.414l1-1H14a1 1 0 0 0 .894-.553l3-6A1 1 0 0 0 17 3H6.28l-.31-1.243A1 1 0 0 0 5 1H3ZM16 16.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM6.5 18a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"/></svg>
                            Add to Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
</section>
</main>

<script>
(function(){
    const WINDOW_FRAMES   = <?php echo json_encode($windowFrames, 15, 512) ?>;
    const FRAME_COLOURS   = <?php echo json_encode($frameColours, 15, 512) ?>;
    const GLASS_OPTIONS   = <?php echo json_encode($glassOptions, 15, 512) ?>;
    const HANDLE_OPTIONS  = <?php echo json_encode($handleOptions, 15, 512) ?>;
    const BASE_PRICES     = <?php echo json_encode($basePrices, 15, 512) ?>;
    const SELECTED        = <?php echo json_encode($selected, 15, 512) ?>;
    const SASH_STYLE      = <?php echo json_encode(request('sash_style', 'equal'), 512) ?>;
    const GLAZING_DESIGN   = <?php echo json_encode(request('glazing_design', 'non-georgian'), 512) ?>;

    const cfg       = WINDOW_FRAMES[SELECTED.slug] || WINDOW_FRAMES['standard-casement'];
    const paneCount = cfg.cells.length;

    const defaultOpening = (SELECTED.slug === 'sash') ? 'fixed' : 'casement';

    /* ── Per-pane state ─────────────────────────────────────────────── */
    const panes = Array.from({ length: paneCount }, () => ({
        opening_type   : defaultOpening,
        hinged_at      : 'left',
        hinge_type     : 'standard',
        trickle_vent   : 'none',
        glass          : 'clear',
        glazing_spec   : 'double',
        glazing_safety : 'standard',
        handle         : 'white',
        internal_blind : 'none',
        blind_color    : 'white',
        external_cill  : 'none',
        locks          : 'std',
        child_restrictor: 'none',
        fixing_kit     : 'none',
        extenders      : 'none',
        extra_bars     : 'none',
        decoration     : 'none',
    }));

    let selectedFrameColor = 'white';
    let frameColorHex = '#ffffff';
    let frameBorderHex = '#d4d4d4';
    let activePane = 0;
    let currentW = SELECTED.width;
    let currentH = SELECTED.height;

    const mainWindow = document.getElementById('mainWindow');

    /* ── Paint Live Window Preview ───────────────────────────────────── */
    function paintMainWindow() {
        mainWindow.style.setProperty('--upvc-cols', cfg.cols.map(c => c + 'fr').join(' '));
        mainWindow.style.setProperty('--upvc-rows', cfg.rows.map(r => r + 'fr').join(' '));
        mainWindow.style.setProperty('--upvc-frame-color', frameColorHex);
        mainWindow.style.setProperty('--upvc-border-color', frameBorderHex);

        if (SELECTED.slug === 'sash') {
            mainWindow.classList.toggle('is-swept', SASH_STYLE === 'swept-head');
            mainWindow.classList.toggle('is-arch', SASH_STYLE === 'true-arch');
        }

        /* Aspect ratio */
        if (currentW > 0 && currentH > 0) {
            mainWindow.style.aspectRatio = currentW + ' / ' + currentH;
            const ratio = currentW / currentH;
            mainWindow.style.maxWidth = ratio >= 1 ? '320px' : Math.max(180, 320 * ratio) + 'px';
        }

        mainWindow.innerHTML = '';
        cfg.cells.forEach((cell, i) => {
            const st   = panes[i];
            const pane = document.createElement('div');
            pane.className = 'upvc-pane glass-swatch glass-' + (st.glass || 'clear');
            pane.style.gridColumn = cell.c[0] + ' / ' + cell.c[1];
            pane.style.gridRow    = cell.r[0] + ' / ' + cell.r[1];

            if (SELECTED.slug === 'sash') {
                if (i === 0) pane.classList.add('pane-top');
                if (i === 1) pane.classList.add('pane-bottom');
            }

            if (i === activePane) pane.classList.add('is-selected-pane');
            pane.setAttribute('data-glass', st.glass);

            /* Opener styles */
            if (st.opening_type === 'casement' || st.opening_type === 'tilt-turn' || st.opening_type === 'top-hung') {
                pane.classList.add('is-open', 'hinge-' + st.hinged_at);

                /* Handle Graphic */
                const hG = document.createElement('div');
                hG.className = 'pane-handle-graphic';
                const hOpt = HANDLE_OPTIONS.find(h => h.key === st.handle);
                if (hOpt && hOpt.color) hG.style.background = hOpt.color;
                pane.appendChild(hG);
            }

            /* Blind Overlay */
            if (st.internal_blind !== 'none') {
                const bO = document.createElement('div');
                bO.className = 'blind-overlay';
                pane.appendChild(bO);
            }

            /* Glazing Bars Overlay */
            if (SELECTED.slug === 'sash') {
                const gDesign = GLAZING_DESIGN;
                if (gDesign === 'georgian' || gDesign === 'georgian-centre-bar' || gDesign === 'georgian-variant') {
                    const bh = document.createElement('div'); bh.className = 'bar-h'; pane.appendChild(bh);
                    const bv = document.createElement('div'); bv.className = 'bar-v'; pane.appendChild(bv);
                } else if (gDesign === 'half-georgian') {
                    if (i === 0) { // top sash only
                        const bh = document.createElement('div'); bh.className = 'bar-h'; pane.appendChild(bh);
                        const bv = document.createElement('div'); bv.className = 'bar-v'; pane.appendChild(bv);
                    }
                } else if (gDesign === 'centre-bar' || gDesign === 'asymmetric') {
                    const bv = document.createElement('div'); bv.className = 'bar-v'; pane.appendChild(bv);
                } else if (gDesign === 'three-light' || gDesign === 'offset-three-light') {
                    const bv1 = document.createElement('div'); bv1.className = 'bar-v1'; pane.appendChild(bv1);
                    const bv2 = document.createElement('div'); bv2.className = 'bar-v2'; pane.appendChild(bv2);
                } else if (gDesign === 'margin') {
                    const bm = document.createElement('div'); bm.className = 'bar-margin'; pane.appendChild(bm);
                }
            }

            /* Bars Overlay from manual controls */
            if (st.extra_bars === 'horizontal' || st.extra_bars === 'both') {
                const b = document.createElement('div'); b.className = 'bar-h'; pane.appendChild(b);
            }
            if (st.extra_bars === 'vertical' || st.extra_bars === 'both') {
                const b = document.createElement('div'); b.className = 'bar-v'; pane.appendChild(b);
            }

            mainWindow.appendChild(pane);
        });

        /* External Cill Bar */
        const cillBar = document.getElementById('cillBar');
        if (cillBar) {
            const hasCill = panes.some(p => p.external_cill !== 'none');
            cillBar.style.display = hasCill ? 'block' : 'none';
            cillBar.style.setProperty('--upvc-frame-color', frameColorHex);
        }
    }

    /* ── Load active pane values into controls ─────────────────────── */
    function loadPaneIntoForm() {
        const st = panes[activePane];
        setSelectValue('sel-opening-type',   st.opening_type);
        setSelectValue('sel-hinged-at',      st.hinged_at);
        setSelectValue('sel-hinge-type',     st.hinge_type);
        setSelectValue('sel-trickle-vent',   st.trickle_vent);
        setSelectValue('sel-glazing-spec',   st.glazing_spec);
        setSelectValue('sel-glazing-safety', st.glazing_safety);
        setSelectValue('sel-blind',          st.internal_blind);
        setSelectValue('sel-blind-color',    st.blind_color);
        setSelectValue('sel-cill',           st.external_cill);
        setSelectValue('sel-locks',          st.locks);
        setSelectValue('sel-restrictor',     st.child_restrictor);
        setSelectValue('sel-fixing-kit',     st.fixing_kit);
        setSelectValue('sel-extender',       st.extenders);
        setSelectValue('sel-bars',           st.extra_bars);
        setSelectValue('sel-deco',           st.decoration);

        /* Glass swatches */
        document.querySelectorAll('#glassGrid .swatch-btn').forEach(btn => {
            btn.classList.toggle('is-selected', btn.dataset.key === st.glass);
        });
        /* Handle cards */
        document.querySelectorAll('#handleGrid .handle-card').forEach(btn => {
            btn.classList.toggle('is-selected', btn.dataset.key === st.handle);
        });

        toggleHingeFields(st.opening_type);

        const pvInd = document.getElementById('pvActivePaneLabel');
        if (pvInd) pvInd.textContent = 'Active: Pane ' + (activePane + 1);
        document.getElementById('s-pane').textContent = 'Pane ' + (activePane + 1) + ' of ' + paneCount;
    }

    function setSelectValue(id, value) {
        const el = document.getElementById(id);
        if (el && value !== undefined) el.value = value;
    }

    function toggleHingeFields(openingType) {
        const hingedWrap = document.getElementById('wrap-hinged-at');
        const hingeWrap  = document.getElementById('wrap-hinge-type');
        const isFixed    = openingType === 'fixed';
        if (hingedWrap) hingedWrap.style.display = isFixed ? 'none' : '';
        if (hingeWrap)  hingeWrap.style.display  = isFixed ? 'none' : '';
    }

    /* ── Switch Smart Information Card ─────────────────────────────── */
    function showInfoCard(targetId) {
        if (!targetId) return;
        document.querySelectorAll('.info-card').forEach(card => {
            card.classList.toggle('is-active', card.id === targetId);
        });
    }

    /* ── Wire Section & Input Focus triggers ───────────────────────── */
    document.querySelectorAll('.cfg-section').forEach(sec => {
        sec.addEventListener('click', () => {
            const infoTarget = sec.dataset.info;
            if (infoTarget) showInfoCard(infoTarget);
        });
    });

    document.querySelectorAll('[data-info-trigger]').forEach(el => {
        ['focus', 'change', 'click'].forEach(evt => {
            el.addEventListener(evt, (e) => {
                e.stopPropagation();
                showInfoCard(el.dataset.infoTrigger);
            });
        });
    });

    /* ── Pane Tabs ─────────────────────────────────────────────────── */
    document.querySelectorAll('.pane-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            activePane = parseInt(tab.dataset.pane, 10);
            document.querySelectorAll('.pane-tab').forEach(t => t.classList.toggle('is-active', t === tab));
            loadPaneIntoForm();
            paintMainWindow();
            updateSummary();
            showInfoCard('info-size');
        });
    });

    /* ── Frame Colour Selection ────────────────────────────────────── */
    document.querySelectorAll('#frameColorGrid .color-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            selectedFrameColor = btn.dataset.colorKey;
            frameColorHex = btn.dataset.colorHex;
            frameBorderHex = btn.dataset.borderHex;
            document.querySelectorAll('#frameColorGrid .color-btn').forEach(b => b.classList.remove('is-selected'));
            btn.classList.add('is-selected');
            document.getElementById('s-frame-colour').textContent = btn.querySelector('.c-name').textContent;
            paintMainWindow();
            recalcPrice();
            showInfoCard('info-frame-colour');
        });
    });

    /* ── Wire Select Dropdowns ─────────────────────────────────────── */
    function wireSelect(id, field) {
        const el = document.getElementById(id);
        if (!el) return;
        el.addEventListener('change', () => {
            panes[activePane][field] = el.value;
            if (field === 'opening_type') toggleHingeFields(el.value);
            paintMainWindow();
            updateSummary();
            recalcPrice();
        });
    }

    wireSelect('sel-opening-type',   'opening_type');
    wireSelect('sel-hinged-at',      'hinged_at');
    wireSelect('sel-hinge-type',     'hinge_type');
    wireSelect('sel-trickle-vent',   'trickle_vent');
    wireSelect('sel-glazing-spec',   'glazing_spec');
    wireSelect('sel-glazing-safety', 'glazing_safety');
    wireSelect('sel-blind',          'internal_blind');
    wireSelect('sel-blind-color',    'blind_color');
    wireSelect('sel-cill',           'external_cill');
    wireSelect('sel-locks',          'locks');
    wireSelect('sel-restrictor',     'child_restrictor');
    wireSelect('sel-fixing-kit',     'fixing_kit');
    wireSelect('sel-extender',       'extenders');
    wireSelect('sel-bars',           'extra_bars');
    wireSelect('sel-deco',           'decoration');

    /* ── Glass Swatches ────────────────────────────────────────────── */
    document.querySelectorAll('#glassGrid .swatch-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            panes[activePane].glass = btn.dataset.key;
            document.querySelectorAll('#glassGrid .swatch-btn').forEach(b => b.classList.remove('is-selected'));
            btn.classList.add('is-selected');
            paintMainWindow();
            updateSummary();
            recalcPrice();
            showInfoCard('info-glass');
        });
    });

    /* ── Handle Cards ──────────────────────────────────────────────── */
    document.querySelectorAll('#handleGrid .handle-card').forEach(btn => {
        btn.addEventListener('click', () => {
            panes[activePane].handle = btn.dataset.key;
            document.querySelectorAll('#handleGrid .handle-card').forEach(b => b.classList.remove('is-selected'));
            btn.classList.add('is-selected');
            paintMainWindow();
            updateSummary();
            recalcPrice();
            showInfoCard('info-handle');
        });
    });

    /* ── Size Inputs ───────────────────────────────────────────────── */
    const widthInput  = document.getElementById('cfgWidth');
    const heightInput = document.getElementById('cfgHeight');
    const wrapW       = document.getElementById('wrapWidth');
    const wrapH       = document.getElementById('wrapHeight');

    function validateDim(input, wrap, min, max) {
        const v = parseInt(input.value, 10);
        const ok = Number.isFinite(v) && v >= min && v <= max;
        input.classList.toggle('is-valid', ok);
        input.classList.toggle('is-error', input.value !== '' && !ok);
        wrap.classList.toggle('has-error', input.value !== '' && !ok);
        return ok ? v : null;
    }

    function onSizeChange() {
        const w = validateDim(widthInput,  wrapW, 300, 2400);
        const h = validateDim(heightInput, wrapH, 300, 2400);
        if (w !== null) { currentW = w; document.getElementById('hWidth').value = w; }
        if (h !== null) { currentH = h; document.getElementById('hHeight').value = h; }
        if (w !== null && h !== null) {
            document.getElementById('pvDims').textContent = w + 'mm × ' + h + 'mm';
            document.getElementById('headerMeta').textContent = w + 'mm × ' + h + 'mm';
        }
        paintMainWindow();
        updateSummary();
        recalcPrice();
        showInfoCard('info-size');
    }

    let debT;
    widthInput.addEventListener('input',   () => { clearTimeout(debT); debT = setTimeout(onSizeChange, 200); });
    heightInput.addEventListener('input',  () => { clearTimeout(debT); debT = setTimeout(onSizeChange, 200); });
    widthInput.addEventListener('change',  onSizeChange);
    heightInput.addEventListener('change', onSizeChange);

    /* ── Section Collapse Toggle ────────────────────────────────────── */
    document.querySelectorAll('.cfg-section-head').forEach(head => {
        head.addEventListener('click', (e) => {
            const section = head.closest('.cfg-section');
            section.classList.toggle('is-open');
        });
    });

    /* ── Price Calculation ─────────────────────────────────────────── */
    function recalcPrice() {
        const base = BASE_PRICES[SELECTED.slug] || 189;
        
        // Frame color price
        const activeColorBtn = document.querySelector('#frameColorGrid .color-btn.is-selected');
        const colorPrice = activeColorBtn ? parseInt(activeColorBtn.dataset.price || 0, 10) : 0;

        let glass = 0, handle = 0, vent = 0, blind = 0, bars = 0, extras = 0;

        panes.forEach(st => {
            const gOpt = GLASS_OPTIONS.find(i => i.key === st.glass);
            if (gOpt) glass += (gOpt.price || 0);

            const hOpt = HANDLE_OPTIONS.find(i => i.key === st.handle);
            if (hOpt) handle += (hOpt.price || 0);

            if (st.glazing_spec === 'triple') extras += 35;
            if (st.glazing_safety === 'toughened') extras += 18;
            if (st.glazing_safety === 'laminated') extras += 24;
            if (st.glazing_safety === 'acoustic') extras += 32;

            if (st.trickle_vent !== 'none') vent += 12;
            if (st.internal_blind !== 'none') blind += 35;
            if (st.external_cill === 'stub') extras += 8;
            if (st.external_cill === 'std') extras += 12;
            if (st.external_cill === 'large') extras += 16;
            if (st.locks === 'ultion') extras += 25;
            if (st.child_restrictor !== 'none') extras += 12;
            if (st.fixing_kit === 'standard') extras += 8;
            if (st.fixing_kit === 'heavy') extras += 15;
            if (st.extenders === '20mm') extras += 14;
            if (st.extenders === '50mm') extras += 22;

            if (st.extra_bars === 'both') bars += 24;
            else if (st.extra_bars !== 'none') bars += 14;
        });

        const total = base + colorPrice + glass + handle + vent + blind + bars + extras;

        document.getElementById('totalPrice').textContent = '£' + total;
        document.getElementById('hPanesJson').value = JSON.stringify(panes);
        document.getElementById('hLineTotal').value = total;
        const hPrice = document.getElementById('hPrice');
        if (hPrice) hPrice.value = total;
        return total;
    }

    /* ── Update Summary Table ──────────────────────────────────────── */
    function updateSummary() {
        const st = panes[activePane];
        document.getElementById('s-name').textContent    = cfg.name;
        document.getElementById('s-size').textContent    = currentW + 'mm × ' + currentH + 'mm';
        document.getElementById('s-pane').textContent    = 'Pane ' + (activePane + 1) + ' of ' + paneCount;
        document.getElementById('s-opening').textContent = st.opening_type.charAt(0).toUpperCase() + st.opening_type.slice(1);
        document.getElementById('s-glass').textContent   = st.glass.charAt(0).toUpperCase() + st.glass.slice(1);
        document.getElementById('s-handle').textContent  = st.handle.charAt(0).toUpperCase() + st.handle.slice(1);
        document.getElementById('s-vent').textContent    = st.trickle_vent.charAt(0).toUpperCase() + st.trickle_vent.slice(1);
        document.getElementById('s-blind').textContent   = st.internal_blind !== 'none' ? st.internal_blind : 'None';
        document.getElementById('s-cill').textContent    = st.external_cill !== 'none' ? st.external_cill : 'No Cill';
    }

    /* ── Init ───────────────────────────────────────────────────────── */
    paintMainWindow();
    loadPaneIntoForm();
    updateSummary();
    recalcPrice();

})();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/windows/sizepage.blade.php ENDPATH**/ ?>