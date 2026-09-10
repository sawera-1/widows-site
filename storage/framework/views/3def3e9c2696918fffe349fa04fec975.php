

<?php $__env->startSection('title', 'Configure Your Window — uPVC Windows'); ?>

<?php $__env->startPush('styles'); ?>
<style>
/* ── Container & layout ──────────────────────────────────────────── */
.wdc-container { width:100%; max-width:1440px; margin-inline:auto; padding-inline:16px; }
@media (min-width:768px){ .wdc-container{ padding-inline:24px; } }
.wdc-section { padding-block:48px; }


/* ── Page header ────────────────────────────────────────────────── */
.cfg-header { border-bottom:1px solid #e5e5e5; padding-bottom:18px; margin-bottom:28px; }
[data-theme="dark"] .cfg-header { border-color:#2a2a2a; }
.cfg-header h1 { font-size:1.45rem; font-weight:800; letter-spacing:-0.02em; }
.cfg-header .meta { font-size:13px; color:#737373; font-weight:600; margin-top:3px; }

/* ── Three-column layout ─────────────────────────────────────────── */
.three-col {
    display:grid;
    grid-template-columns: 1fr;
    gap:24px;
}
@media (min-width:900px){
    .three-col {
        grid-template-columns: 340px 1fr 260px;
        align-items:start;
    }
}
@media (min-width:1200px){
    .three-col {
        grid-template-columns: 380px 1fr 280px;
    }
}

/* ── Column 1: Configuration form ──────────────────────────────── */
.cfg-col { display:flex; flex-direction:column; gap:0; }

/* ── Sections within config col ────────────────────────────────── */
.cfg-section { border:1px solid #e5e5e5; border-radius:4px; margin-bottom:16px; overflow:hidden; }
[data-theme="dark"] .cfg-section { border-color:#2a2a2a; }

.cfg-section-head {
    display:flex; align-items:center; justify-content:space-between;
    padding:13px 16px; background:#fafafa; border-bottom:1px solid #e5e5e5;
    cursor:pointer; user-select:none;
}
[data-theme="dark"] .cfg-section-head { background:#111; border-color:#2a2a2a; }
.cfg-section-head h3 { font-size:11px; font-weight:800; text-transform:uppercase; letter-spacing:.07em; }
.cfg-section-head .chevron { width:16px; height:16px; transition:transform .2s; color:#737373; }
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
    width:100%; padding:10px 34px 10px 12px; border:1px solid #d4d4d4; border-radius:3px;
    font-size:14px; font-weight:600; background:#fff; color:#000;
    transition: border-color .15s;
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
    padding:7px 14px; border:1px solid #d4d4d4; border-radius:3px;
    font-size:12px; font-weight:700; cursor:pointer; background:#fff; color:#525252;
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
    width:100%; padding:10px 12px; border:1px solid #d4d4d4; border-radius:3px;
    font-size:13px; font-weight:600; background:#fff; color:#000;
}
select.wdc-select:focus { outline:none; border-color:#000; }
[data-theme="dark"] select.wdc-select { background:#111; border-color:#333; color:#fff; }
[data-theme="dark"] select.wdc-select:focus { border-color:#fff; }

/* ── Info icon ──────────────────────────────────────────────────── */
.info-icon {
    width:14px; height:14px; border-radius:50%; border:1.2px solid #a3a3a3; color:#a3a3a3;
    font-size:9px; font-weight:800; display:inline-flex; align-items:center; justify-content:center;
    cursor:pointer; flex-shrink:0; user-select:none; font-style:normal;
}
.info-icon:hover,.info-icon.is-active { border-color:#000; color:#000; background:#f2f2f2; }
[data-theme="dark"] .info-icon { border-color:#555; color:#777; }
[data-theme="dark"] .info-icon:hover,[data-theme="dark"] .info-icon.is-active { border-color:#fff; color:#fff; background:#1c1c1c; }

/* ── Glass swatch grid ──────────────────────────────────────────── */
.swatch-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(72px,1fr)); gap:8px; }
.swatch-btn {
    border:1px solid #e5e5e5; border-radius:3px; background:#fff;
    padding:7px 5px 8px; text-align:center; cursor:pointer;
    display:flex; flex-direction:column; align-items:center; gap:5px;
    transition: border-color .12s, box-shadow .12s;
}
.swatch-btn:hover { border-color:#000; }
.swatch-btn.is-selected { border-color:#000; box-shadow:0 0 0 1.5px #000; background:#000; color:#fff; }
.swatch-btn .swatch { width:100%; height:34px; border-radius:2px; }
.swatch-btn .sname { font-size:10px; font-weight:700; line-height:1.2; }
.swatch-btn .sprice { font-size:9px; font-weight:700; color:#a3a3a3; }
.swatch-btn.is-selected .sprice { color:#ccc; }
[data-theme="dark"] .swatch-btn { background:#111; border-color:#2a2a2a; }
[data-theme="dark"] .swatch-btn:hover { border-color:#fff; }
[data-theme="dark"] .swatch-btn.is-selected { border-color:#fff; box-shadow:0 0 0 1.5px #fff; background:#fff; color:#000; }

/* Glass tones */
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
.glass-swatch.glass-taffeta          { background:repeating-linear-gradient(0deg,#dfe3e4 0 2px,#c8cdce 2px 5px); }
.glass-swatch.glass-solid-panel      { background:#3a3a3a; }

/* ── Handle cards — pure HTML/CSS ──────────────────────────────── */
.handle-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(88px,1fr)); gap:8px; }
.handle-card {
    border:1px solid #e5e5e5; border-radius:3px; background:#fff;
    padding:10px 8px 9px; text-align:center; cursor:pointer;
    display:flex; flex-direction:column; align-items:center; gap:6px;
    transition: border-color .12s, box-shadow .12s;
}
.handle-card:hover { border-color:#000; }
.handle-card.is-selected { border-color:#000; box-shadow:0 0 0 1.5px #000; }
[data-theme="dark"] .handle-card { background:#111; border-color:#2a2a2a; }
[data-theme="dark"] .handle-card:hover { border-color:#fff; }
[data-theme="dark"] .handle-card.is-selected { border-color:#fff; box-shadow:0 0 0 1.5px #fff; }

.handle-card .hname { font-size:10px; font-weight:700; line-height:1.2; }
.handle-card .hprice { font-size:9px; font-weight:700; color:#a3a3a3; }
.handle-card.is-selected .hprice { color:#737373; }

/* ─ Handle illustration container ─ */
.handle-illus {
    width:52px; height:52px; position:relative;
    display:flex; align-items:center; justify-content:center; flex-shrink:0;
}

/* ─ Espag / Standard cockspur handle ─ */
.h-espag { position:relative; width:14px; height:44px; }
.h-espag .h-backplate {
    position:absolute; left:50%; transform:translateX(-50%);
    width:10px; height:44px; background:linear-gradient(180deg,#d0d0d0,#a0a0a0);
    border-radius:5px; box-shadow:inset -1px 0 0 rgba(0,0,0,.15),inset 1px 0 0 rgba(255,255,255,.3);
}
.h-espag .h-lever {
    position:absolute; top:14px; left:50%; transform:translateX(-50%) rotate(-30deg);
    width:28px; height:8px;
    background:linear-gradient(90deg,#c8c8c8,#e8e8e8,#c0c0c0);
    border-radius:4px; transform-origin:4px 4px;
    box-shadow:0 2px 4px rgba(0,0,0,.25);
}
.h-espag .h-boss {
    position:absolute; top:14px; left:50%; transform:translateX(-50%);
    width:10px; height:10px; background:radial-gradient(circle at 35% 35%,#e8e8e8,#a8a8a8);
    border-radius:50%; box-shadow:0 1px 3px rgba(0,0,0,.3);
    margin-top:-1px;
}

/* ─ Chrome / polished handle ─ */
.h-chrome .h-backplate { background:linear-gradient(180deg,#e8ecf0,#9aa2a8); }
.h-chrome .h-lever { background:linear-gradient(90deg,#b0bfc8,#d8e4ea,#a8b8c0); }
.h-chrome .h-boss { background:radial-gradient(circle at 35% 35%,#eef1f3,#8090a0); }

/* ─ Gold handle ─ */
.h-gold .h-backplate { background:linear-gradient(180deg,#e8cf8a,#a9822f); }
.h-gold .h-lever { background:linear-gradient(90deg,#c8a040,#e8d070,#b09030); }
.h-gold .h-boss { background:radial-gradient(circle at 35% 35%,#f0da90,#a07828); }

/* ─ Satin silver ─ */
.h-satin-silver .h-backplate { background:linear-gradient(180deg,#e3e3e3,#a9a9a9); }
.h-satin-silver .h-lever { background:linear-gradient(90deg,#c0c0c0,#dcdcdc,#b4b4b4); }
.h-satin-silver .h-boss { background:radial-gradient(circle at 35% 35%,#e8e8e8,#a4a4a4); }

/* ─ Matte black ─ */
.h-black .h-backplate { background:linear-gradient(180deg,#333,#111); }
.h-black .h-lever { background:linear-gradient(90deg,#2a2a2a,#444,#222); }
.h-black .h-boss { background:radial-gradient(circle at 35% 35%,#444,#111); }

/* ─ Monkey-tail handle (curved bar) ─ */
.h-monkey-tail { position:relative; width:28px; height:44px; }
.h-monkey-tail .mt-shaft {
    position:absolute; left:8px; top:0; width:8px; height:30px;
    background:linear-gradient(90deg,#2a2a2a,#444,#222);
    border-radius:4px 4px 0 0;
}
.h-monkey-tail .mt-tail {
    position:absolute; left:0; top:22px; width:24px; height:22px;
    border:8px solid #333; border-top:none; border-radius:0 0 14px 14px;
    box-sizing:border-box;
}
.h-monkey-tail .mt-boss {
    position:absolute; left:5px; top:18px; width:10px; height:10px;
    background:radial-gradient(circle at 35% 35%,#555,#111);
    border-radius:50%; box-shadow:0 1px 3px rgba(0,0,0,.4);
}

/* ─ Tear-drop handle ─ */
.h-tear-drop { position:relative; width:18px; height:44px; }
.h-tear-drop .td-shaft {
    position:absolute; left:50%; transform:translateX(-50%);
    width:8px; height:28px; top:0;
    background:linear-gradient(180deg,#333,#111); border-radius:4px 4px 0 0;
}
.h-tear-drop .td-drop {
    position:absolute; left:50%; transform:translateX(-50%);
    top:22px; width:18px; height:22px;
    background:radial-gradient(ellipse at 40% 30%,#555,#111);
    border-radius:50% 50% 50% 50% / 40% 40% 60% 60%;
    box-shadow:0 2px 5px rgba(0,0,0,.4);
}

/* ─ Handle dark mode adjustments ─ */
[data-theme="dark"] .h-espag .h-backplate { background:linear-gradient(180deg,#aaa,#666); }
[data-theme="dark"] .h-espag .h-lever { background:linear-gradient(90deg,#888,#bbb,#777); }
[data-theme="dark"] .h-espag .h-boss { background:radial-gradient(circle at 35% 35%,#bbb,#666); }

/* ── Column 2: Window preview ───────────────────────────────────── */
.preview-col {
    position:sticky; top:24px;
    background:#f5f5f5; border-radius:4px; padding:28px 20px;
    display:flex; flex-direction:column; align-items:center; gap:16px;
    min-height:400px; justify-content:center;
}
[data-theme="dark"] .preview-col { background:#141414; }

.preview-col .pv-label { font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:.08em; color:#737373; }
.preview-col .pv-dims  { font-size:12px; font-weight:600; color:#525252; letter-spacing:.02em; }
[data-theme="dark"] .preview-col .pv-dims { color:#999; }
.preview-col .pv-pane-indicator { font-size:11px; color:#a3a3a3; font-weight:600; }

/* ── The CSS window ─────────────────────────────────────────────── */
.upvc-window {
    --frame:#737373; --frame-dark:#4b4b4b; --mullion:#8a8a8a; --glass-a:#eef2f5; --glass-b:#d7e1e8;
    position:relative; width:100%; max-width:300px; aspect-ratio:4/3;
    display:grid; grid-template-columns:var(--upvc-cols); grid-template-rows:var(--upvc-rows); gap:5px;
    background:var(--mullion); border:6px solid var(--frame); border-radius:2px; padding:5px;
    box-sizing:border-box; box-shadow:inset 0 0 0 1px var(--frame-dark), 0 8px 32px rgba(0,0,0,.12);
}
[data-theme="dark"] .upvc-window { --frame:#9a9a9a; --frame-dark:#666; --mullion:#555; --glass-a:#2b2f33; --glass-b:#1c2024; }

.upvc-pane {
    position:relative; min-width:0; min-height:0;
    background:linear-gradient(135deg,var(--glass-a) 0%,var(--glass-b) 100%);
    box-shadow:inset 0 0 0 1px rgba(0,0,0,.08);
    transition: background .25s;
}
/* Active pane highlight */
.upvc-pane.is-selected-pane { box-shadow:inset 0 0 0 2px #000, 0 0 0 0; }
[data-theme="dark"] .upvc-pane.is-selected-pane { box-shadow:inset 0 0 0 2px #fff; }

/* Opener markers */
.upvc-pane.is-open::after { content:""; position:absolute; inset:8%; border:1.5px dashed rgba(0,0,0,.3); pointer-events:none; }
.upvc-pane.hinge-left::before { content:""; position:absolute; left:3px; top:8%; bottom:8%; width:2.5px; background:rgba(0,0,0,.35); border-radius:1px; }
.upvc-pane.hinge-right::before { content:""; position:absolute; right:3px; top:8%; bottom:8%; width:2.5px; background:rgba(0,0,0,.35); border-radius:1px; }

/* Bars */
.bar-h { position:absolute; left:0; right:0; top:50%; height:2px; background:rgba(0,0,0,.2); transform:translateY(-1px); pointer-events:none; }
.bar-v { position:absolute; top:0; bottom:0; left:50%; width:2px; background:rgba(0,0,0,.2); transform:translateX(-1px); pointer-events:none; }

/* Glass tones on pane */
.upvc-pane[data-glass="arctic"]          { --glass-a:#eef2f4; --glass-b:#c9d3d8; }
.upvc-pane[data-glass="autumn"]          { --glass-a:#e7ded2; --glass-b:#b8a98d; }
.upvc-pane[data-glass="charcoal-sticks"] { background:repeating-linear-gradient(90deg,rgba(138,138,138,.5) 0 2px,var(--glass-a) 2px 7px); }
.upvc-pane[data-glass="contora"]         { --glass-a:#dbe6ea; --glass-b:#a9c1c9; }
.upvc-pane[data-glass="cotswold"]        { --glass-a:#e9e4d8; --glass-b:#b7ae98; }
.upvc-pane[data-glass="digital"]         { background:repeating-linear-gradient(45deg,rgba(199,204,206,.6) 0 3px,var(--glass-a) 3px 7px); }
.upvc-pane[data-glass="everglade"]       { --glass-a:#d6ddd3; --glass-b:#8fa189; }
.upvc-pane[data-glass="florielle"]       { --glass-a:#eee0e0; --glass-b:#c9a9ab; }
.upvc-pane[data-glass="mayflower"]       { --glass-a:#e8e4ee; --glass-b:#b7aec7; }
.upvc-pane[data-glass="minster"]         { --glass-a:#dfe6ea; --glass-b:#a3b6bd; }
.upvc-pane[data-glass="oak"]             { --glass-a:#c9a06a; --glass-b:#7a5432; }
.upvc-pane[data-glass="pelerine"]        { --glass-a:#eceff0; --glass-b:#c4cccf; }
.upvc-pane[data-glass="satin-opal"]      { --glass-a:#f2f2f2; --glass-b:#d9d9d9; }
.upvc-pane[data-glass="stippolyte"]      { background:repeating-radial-gradient(circle at 30% 30%,var(--glass-a) 0 2px,var(--glass-b) 2px 5px); }
.upvc-pane[data-glass="sycamore"]        { --glass-a:#e9d9b8; --glass-b:#b99a68; }
.upvc-pane[data-glass="taffeta"]         { background:repeating-linear-gradient(0deg,var(--glass-a) 0 2px,var(--glass-b) 2px 4px); }
.upvc-pane[data-glass="solid-panel"]     { --glass-a:#3a3a3a; --glass-b:#222; }

/* ── Column 3: Guidance ─────────────────────────────────────────── */
.guidance-col {
    position:sticky; top:24px;
    display:flex; flex-direction:column; gap:14px;
}

.guidance-box {
    border:1px solid #e5e5e5; border-radius:4px; padding:18px; background:#fafafa;
}
[data-theme="dark"] .guidance-box { border-color:#2a2a2a; background:#111; }
.guidance-box h4 { font-size:11px; font-weight:800; text-transform:uppercase; letter-spacing:.07em; margin-bottom:10px; color:#000; }
[data-theme="dark"] .guidance-box h4 { color:#fff; }
.guidance-box p { font-size:12.5px; line-height:1.58; color:#525252; margin-bottom:8px; }
[data-theme="dark"] .guidance-box p { color:#aaa; }
.guidance-box p:last-child { margin-bottom:0; }

.guidance-tag {
    display:inline-flex; align-items:center; gap:5px;
    font-size:10.5px; font-weight:700; color:#525252;
    border:1px solid #d4d4d4; border-radius:3px; padding:3px 8px; margin-top:4px;
}
[data-theme="dark"] .guidance-tag { border-color:#333; color:#888; }

.regs-notice {
    font-size:10.5px; color:#737373; border-top:1px dashed #e5e5e5; margin-top:12px; padding-top:10px; line-height:1.5;
}
[data-theme="dark"] .regs-notice { border-color:#2a2a2a; color:#666; }

/* ── Summary block ──────────────────────────────────────────────── */
.summary-table { width:100%; border-collapse:collapse; font-size:12.5px; }
.summary-table td { padding:5px 0; vertical-align:top; }
.summary-table td:first-child { color:#737373; font-weight:600; width:110px; }
.summary-table td:last-child { font-weight:700; }
[data-theme="dark"] .summary-table td:first-child { color:#666; }
.summary-divider { border:none; border-top:1px dashed #e5e5e5; margin:14px 0; }
[data-theme="dark"] .summary-divider { border-color:#2a2a2a; }

/* ── Price line ─────────────────────────────────────────────────── */
.price-total-line {
    display:flex; align-items:baseline; justify-content:space-between;
    border-top:2px solid #000; padding-top:12px; margin-top:6px;
}
[data-theme="dark"] .price-total-line { border-color:#fff; }
.price-total-line .pt-label { font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:.06em; }
.price-total-line .pt-value { font-size:1.25rem; font-weight:800; }

/* ── Add to cart button ─────────────────────────────────────────── */
.btn-atc {
    display:flex; align-items:center; justify-content:center; gap:10px;
    width:100%; padding:14px 18px; margin-top:14px;
    font-size:13px; font-weight:700; text-transform:uppercase; letter-spacing:.06em;
    background:#000; color:#fff; border:1px solid #000; border-radius:3px; cursor:pointer;
    transition:opacity .15s;
}
.btn-atc:hover { opacity:.85; }
.btn-atc:disabled { background:#d4d4d4; border-color:#d4d4d4; cursor:not-allowed; }
[data-theme="dark"] .btn-atc { background:#fff; color:#000; border-color:#fff; }

/* ── Responsive order on mobile ─────────────────────────────────── */
@media (max-width:899px){
    .preview-col { position:static; order:2; }
    .cfg-col     { order:1; }
    .guidance-col{ position:static; order:3; }
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
    'six-pane-grid' => [
        'name' => 'Six Pane Grid', 'cols' => [1,1,1], 'rows' => [1,1],
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

$hingeTypes   = [ 'standard' => 'Standard', 'fire_escape' => 'Fire Escape', 'egress' => 'Easy Clean / Egress' ];
$trickleVents = [ 'none' => 'None', 'white' => 'White', 'brown' => 'Brown' ];
$blindOptions = [ 'none' => 'None', 'white' => 'White Blind', 'grey' => 'Grey Blind', 'black' => 'Black Blind' ];
$barOptions   = [ 'none' => 'None', 'horizontal' => 'Horizontal', 'vertical' => 'Vertical', 'both' => 'Horizontal + Vertical' ];
$decoOptions  = [ 'none' => 'None', 'georgian' => 'Georgian Bar', 'astragal' => 'Astragal Bar' ];

$handleOptions = [
    ['key'=>'white',        'name'=>'White',        'price'=>0,  'css'=>'h-espag'],
    ['key'=>'chrome',       'name'=>'Chrome',       'price'=>3,  'css'=>'h-espag h-chrome'],
    ['key'=>'gold',         'name'=>'Gold',         'price'=>3,  'css'=>'h-espag h-gold'],
    ['key'=>'satin-silver', 'name'=>'Satin Silver', 'price'=>3,  'css'=>'h-espag h-satin-silver'],
    ['key'=>'black',        'name'=>'Matte Black',  'price'=>3,  'css'=>'h-espag h-black'],
    ['key'=>'monkey-tail',  'name'=>'Monkey Tail',  'price'=>7,  'css'=>''],
    ['key'=>'tear-drop',    'name'=>'Tear Drop',    'price'=>7,  'css'=>''],
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
    'standard-casement'=>189,'two-light'=>249,'french'=>259,
    'two-light-top'=>289,'three-light'=>319,'six-pane-grid'=>369,
    'tilt-and-turn'=>229,'flush'=>239,'sash'=>279,
];

$selected = [
    'slug'   => request('design', 'standard-casement'),
    'name'   => request('name', 'Standard Casement'),
    'width'  => (int) request('width', 1200),
    'height' => (int) request('height', 1500),
];
$cfg       = $windowFrames[$selected['slug']] ?? $windowFrames['standard-casement'];
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

            
            <div class="cfg-section is-open" id="sec-size">
                <div class="cfg-section-head" data-section="sec-size">
                    <h3>Window Size</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="dim-grid">
                        <div class="size-field" id="wrapWidth">
                            <label for="cfgWidth">Width</label>
                            <div class="inp-wrap">
                                <input type="number" id="cfgWidth" value="<?php echo e($selected['width']); ?>" min="300" max="2400" step="1" placeholder="1200">
                                <span class="unit">mm</span>
                            </div>
                            <p class="hint">300 – 2400 mm</p>
                            <p class="err-msg">Enter 300–2400 mm.</p>
                        </div>
                        <div class="size-field" id="wrapHeight">
                            <label for="cfgHeight">Height</label>
                            <div class="inp-wrap">
                                <input type="number" id="cfgHeight" value="<?php echo e($selected['height']); ?>" min="300" max="2400" step="1" placeholder="1500">
                                <span class="unit">mm</span>
                            </div>
                            <p class="hint">300 – 2400 mm</p>
                            <p class="err-msg">Enter 300–2400 mm.</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($paneCount > 1): ?>
            
            <div class="cfg-section is-open" id="sec-pane">
                <div class="cfg-section-head" data-section="sec-pane">
                    <h3>Select Pane</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <p style="font-size:12px;color:#a3a3a3;margin-bottom:10px;">Select a pane to configure it individually.</p>
                    <div class="pane-tabs" id="paneTabs">
                        <?php for($i = 0; $i < $paneCount; $i++): ?>
                            <button type="button" class="pane-tab <?php echo e($i === 0 ? 'is-active' : ''); ?>" data-pane="<?php echo e($i); ?>">
                                Pane <?php echo e($i + 1); ?>

                            </button>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <div class="cfg-section is-open" id="sec-opener">
                <div class="cfg-section-head" data-section="sec-opener">
                    <h3>Opener Options</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body" id="openerBody">
                    <div class="field-group">
                        <label>
                            Opening Type
                            <i class="info-icon" data-g="opener">i</i>
                        </label>
                        <select class="wdc-select" id="sel-opening-type" data-field="opening_type">
                            <option value="casement">Casement (Side-Hung)</option>
                            <option value="fixed">Fixed (Non-Opening)</option>
                            <option value="tilt-turn">Tilt &amp; Turn</option>
                            <option value="top-hung">Top-Hung</option>
                        </select>
                    </div>
                    <div class="field-group" id="wrap-hinged-at">
                        <label>Hinged At</label>
                        <select class="wdc-select" id="sel-hinged-at" data-field="hinged_at">
                            <option value="left">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="field-group" id="wrap-hinge-type">
                        <label>
                            Hinge Type
                            <i class="info-icon" data-g="hinge">i</i>
                        </label>
                        <select class="wdc-select" id="sel-hinge-type" data-field="hinge_type">
                            <?php $__currentLoopData = $hingeTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>
                            Trickle Vent
                            <i class="info-icon" data-g="vent">i</i>
                        </label>
                        <select class="wdc-select" id="sel-trickle-vent" data-field="trickle_vent">
                            <?php $__currentLoopData = $trickleVents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-glass">
                <div class="cfg-section-head" data-section="sec-glass">
                    <h3>Glass Options</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>
                            Glass Type
                            <i class="info-icon" data-g="glass">i</i>
                        </label>
                        <div class="swatch-grid" id="glassGrid">
                            <?php $__currentLoopData = $glassOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button type="button"
                                    class="swatch-btn <?php echo e($loop->first ? 'is-selected' : ''); ?>"
                                    data-field="glass" data-key="<?php echo e($g['key']); ?>">
                                    <span class="swatch glass-swatch glass-<?php echo e($g['key']); ?>"></span>
                                    <span class="sname"><?php echo e($g['name']); ?></span>
                                    <span class="sprice"><?php echo e($g['price'] ? '+£'.$g['price'] : 'Included'); ?></span>
                                </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-handle">
                <div class="cfg-section-head" data-section="sec-handle">
                    <h3>Handle Style</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <p style="font-size:12px;color:#a3a3a3;margin-bottom:12px;">Price shown is per handle.</p>
                    <div class="handle-grid" id="handleGrid">
                        <?php $__currentLoopData = $handleOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button"
                                class="handle-card <?php echo e($loop->first ? 'is-selected' : ''); ?>"
                                data-field="handle" data-key="<?php echo e($h['key']); ?>">
                                <div class="handle-illus">
                                    <?php if($h['key'] === 'monkey-tail'): ?>
                                        
                                        <div class="h-monkey-tail">
                                            <div class="mt-shaft"></div>
                                            <div class="mt-tail"></div>
                                            <div class="mt-boss"></div>
                                        </div>
                                    <?php elseif($h['key'] === 'tear-drop'): ?>
                                        
                                        <div class="h-tear-drop">
                                            <div class="td-shaft"></div>
                                            <div class="td-drop"></div>
                                        </div>
                                    <?php else: ?>
                                        
                                        <div class="h-espag <?php echo e($h['css']); ?>">
                                            <div class="h-backplate"></div>
                                            <div class="h-lever"></div>
                                            <div class="h-boss"></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="hname"><?php echo e($h['name']); ?></div>
                                <div class="hprice"><?php echo e($h['price'] ? '+£'.$h['price'] : 'Included'); ?></div>
                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section" id="sec-blind">
                <div class="cfg-section-head" data-section="sec-blind">
                    <h3>Internal Blind</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>
                            Blind Option
                            <i class="info-icon" data-g="blind">i</i>
                        </label>
                        <select class="wdc-select" id="sel-blind" data-field="internal_blind">
                            <?php $__currentLoopData = $blindOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section" id="sec-bars">
                <div class="cfg-section-head" data-section="sec-bars">
                    <h3>Extra Bars</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>
                            Bar Layout
                            <i class="info-icon" data-g="bars">i</i>
                        </label>
                        <select class="wdc-select" id="sel-bars" data-field="extra_bars">
                            <?php $__currentLoopData = $barOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section" id="sec-deco">
                <div class="cfg-section-head" data-section="sec-deco">
                    <h3>Decoration</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Decoration Type</label>
                        <select class="wdc-select" id="sel-deco" data-field="decoration">
                            <?php $__currentLoopData = $decoOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>"><?php echo e($label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-summary" style="margin-top:8px;">
                <div class="cfg-section-head" data-section="sec-summary">
                    <h3>Your Configuration</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <table class="summary-table" id="summaryTable">
                        <tr><td>Window</td><td id="s-name">—</td></tr>
                        <tr><td>Size</td><td id="s-size">—</td></tr>
                        <tr><td>Pane</td><td id="s-pane">Pane 1</td></tr>
                        <tr><td>Opening</td><td id="s-opening">—</td></tr>
                        <tr><td>Hinged at</td><td id="s-hinge-at">—</td></tr>
                        <tr><td>Hinge type</td><td id="s-hinge-type">—</td></tr>
                        <tr><td>Glass</td><td id="s-glass">—</td></tr>
                        <tr><td>Handle</td><td id="s-handle">—</td></tr>
                        <tr><td>Trickle vent</td><td id="s-vent">—</td></tr>
                        <tr><td>Internal blind</td><td id="s-blind">—</td></tr>
                        <tr><td>Extra bars</td><td id="s-bars">—</td></tr>
                        <tr><td>Decoration</td><td id="s-deco">—</td></tr>
                    </table>
                    <hr class="summary-divider">
                    <div class="price-total-line">
                        <span class="pt-label">Total Price</span>
                        <span class="pt-value" id="totalPrice">£0</span>
                    </div>
                    <form method="POST" action="<?php echo e(url('/cart/add')); ?>" id="addCartForm">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="design"      value="<?php echo e($selected['slug']); ?>">
                        <input type="hidden" name="width"       id="hWidth"      value="<?php echo e($selected['width']); ?>">
                        <input type="hidden" name="height"      id="hHeight"     value="<?php echo e($selected['height']); ?>">
                        <input type="hidden" name="panes_json"  id="hPanesJson">
                        <input type="hidden" name="line_total"  id="hLineTotal">
                        <button type="submit" class="btn-atc">
                            <svg style="width:16px;height:16px;" viewBox="0 0 20 20" fill="currentColor"><path d="M3 1a1 1 0 0 0 0 2h1.22l.305 1.222a.997.997 0 0 0 .01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 0 0 0-2H6.414l1-1H14a1 1 0 0 0 .894-.553l3-6A1 1 0 0 0 17 3H6.28l-.31-1.243A1 1 0 0 0 5 1H3ZM16 16.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM6.5 18a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"/></svg>
                            Add to Cart
                        </button>
                    </form>
                </div>
            </div>

        </div>

        
        <div class="preview-col">
            <div class="pv-label" id="pvLabel"><?php echo e($cfg['name']); ?></div>
            <div id="mainWindowWrap">
                <div id="mainWindow" class="upvc-window"></div>
            </div>
            <div class="pv-dims" id="pvDims"><?php echo e($selected['width']); ?>mm × <?php echo e($selected['height']); ?>mm</div>
            <div class="pv-pane-indicator" id="pvPaneIndicator" style="<?php echo e($paneCount <= 1 ? 'display:none;' : ''); ?>">
                Pane <span id="pvPaneNum">1</span> selected
            </div>
        </div>

        
        <div class="guidance-col" id="guidanceCol">

            
            <div class="guidance-box" id="g-size">
                <h4>Measuring Guide</h4>
                <p>Measure the opening in at least three places — top, middle, and bottom for width; left, centre, and right for height.</p>
                <p>Use the smallest measurement. Allow for any required installation tolerances as advised by your installer.</p>
                <p>Always measure in millimetres for accuracy.</p>
                <span class="guidance-tag">📐 Tip: When in doubt, ask your installer to measure on-site.</span>
                <div class="regs-notice">Requirements vary by installation. Please verify applicable Building Regulations with a qualified professional.</div>
            </div>

            
            <div class="guidance-box" id="g-opener" style="display:none;">
                <h4>Opener Guidance</h4>
                <p>For habitable rooms where emergency egress may be required, an unobstructed opening area of at least 0.33m² with a minimum clear opening height of 450mm and width of 450mm is commonly referenced — but requirements may vary.</p>
                <p><strong>Fire Escape hinges</strong> are designed to open to 90° or beyond and may be required depending on the window's location and applicable regulations.</p>
                <p><strong>Easy Clean / Egress</strong> hinges allow the sash to pivot inward for safe external cleaning from inside.</p>
                <span class="guidance-tag">🔥 Fire escape — verify with your installer</span>
                <div class="regs-notice">Requirements may apply depending on the installation. Please verify the applicable Building Regulations.</div>
            </div>

            
            <div class="guidance-box" id="g-hinge" style="display:none;">
                <h4>Hinge Types</h4>
                <p><strong>Standard hinges</strong> open to approximately 90° and are suitable for most applications.</p>
                <p><strong>Fire Escape hinges</strong> open beyond 90° and are used where unobstructed emergency egress is required.</p>
                <p><strong>Easy Clean / Egress hinges</strong> allow the sash to tilt inwards so external glass surfaces can be cleaned safely from inside the building.</p>
                <div class="regs-notice">Always confirm hinge requirements with your installer and the relevant Building Regulations for your project.</div>
            </div>

            
            <div class="guidance-box" id="g-vent" style="display:none;">
                <h4>Trickle Vents</h4>
                <p>Trickle vents provide background ventilation without opening the window. They are required in many new-build and replacement window installations under current Building Regulations (Part F in England).</p>
                <p>If you are replacing existing windows that already have trickle vents, the replacement windows should also include them unless you can demonstrate equivalent ventilation.</p>
                <span class="guidance-tag">💨 Part F — ventilation requirements</span>
                <div class="regs-notice">Requirements vary by location and project type. Verify with your installer and local authority if unsure.</div>
            </div>

            
            <div class="guidance-box" id="g-glass" style="display:none;">
                <h4>Glass Options</h4>
                <p>All standard glazing units supplied are double-glazed. Prices shown are additions to the base price for obscure or specialist glass types.</p>
                <p><strong>Safety glazing</strong> (toughened or laminated) may be required in critical locations such as within 300mm of a door, below 800mm from floor level, or in bathrooms — refer to Building Regulations Part N / BS 6206.</p>
                <p><strong>Obscure glass</strong> (Arctic, Cotswold, etc.) is commonly used in bathrooms, WCs, and side panels where privacy is required.</p>
                <span class="guidance-tag">🔍 Safety glazing — check Part N</span>
                <div class="regs-notice">Always confirm glazing requirements with your installer and the applicable Building Regulations.</div>
            </div>

            
            <div class="guidance-box" id="g-handle" style="display:none;">
                <h4>Handle Styles</h4>
                <p>The illustrations above show each handle style rendered true to its profile. All espag handles operate the multipoint locking mechanism built into the frame.</p>
                <p><strong>White</strong> — standard cockspur espag lever; suits white frame windows and is included at no extra cost.</p>
                <p><strong>Chrome / Gold / Satin Silver / Black</strong> — premium espag levers in polished or satin finishes.</p>
                <p><strong>Monkey Tail</strong> — traditional curved bar handle, suited to period properties.</p>
                <p><strong>Tear Drop</strong> — slim drop-pull lever, a contemporary alternative to the standard espag.</p>
            </div>

            
            <div class="guidance-box" id="g-blind" style="display:none;">
                <h4>Internal Blinds</h4>
                <p>Integral blinds are sealed between the glass panes and require no cleaning. They are operated by a small magnetic control on the frame.</p>
                <p>Integral blinds are not compatible with all glass types. If you select an obscure glass and an integral blind, the combination will be confirmed at order stage.</p>
                <span class="guidance-tag">🪟 Maintenance-free — no dusting required</span>
            </div>

            
            <div class="guidance-box" id="g-bars" style="display:none;">
                <h4>Extra Bars</h4>
                <p>Glazing bars are solid uPVC bars attached to the glass surface to create the visual effect of divided panes. They do not reduce the sealed unit area.</p>
                <p>Bars are available as horizontal, vertical, or a combination of both. The preview above updates to show the selected bar layout.</p>
                <span class="guidance-tag">🏛️ Popular for traditional-style properties</span>
            </div>

        </div>

    </div>

</div>
</section>
</main>

<script>
(function(){
    const WINDOW_FRAMES  = <?php echo json_encode($windowFrames, 15, 512) ?>;
    const GLASS_OPTIONS  = <?php echo json_encode($glassOptions, 15, 512) ?>;
    const HANDLE_OPTIONS = <?php echo json_encode($handleOptions, 15, 512) ?>;
    const BASE_PRICES    = <?php echo json_encode($basePrices, 15, 512) ?>;
    const SELECTED       = <?php echo json_encode($selected, 15, 512) ?>;

    const cfg       = WINDOW_FRAMES[SELECTED.slug];
    const paneCount = cfg.cells.length;

    /* ── Per-pane state ─────────────────────────────────────────────── */
    const panes = Array.from({ length: paneCount }, () => ({
        opening_type : 'casement',
        hinged_at    : 'left',
        hinge_type   : 'standard',
        trickle_vent : 'none',
        glass        : 'clear',
        handle       : 'white',
        internal_blind: 'none',
        extra_bars   : 'none',
        decoration   : 'none',
    }));

    let activePane = 0;

    /* ── Dimensions ─────────────────────────────────────────────────── */
    let currentW = SELECTED.width;
    let currentH = SELECTED.height;

    /* ── Paint the main preview window ─────────────────────────────── */
    const mainWindow = document.getElementById('mainWindow');

    function paintMainWindow() {
        mainWindow.style.setProperty('--upvc-cols', cfg.cols.map(c => c + 'fr').join(' '));
        mainWindow.style.setProperty('--upvc-rows', cfg.rows.map(r => r + 'fr').join(' '));

        /* Size proportions */
        if (currentW > 0 && currentH > 0) {
            mainWindow.style.aspectRatio = currentW + ' / ' + currentH;
            const ratio = currentW / currentH;
            mainWindow.style.maxWidth = ratio >= 1 ? '340px' : Math.max(180, 340 * ratio) + 'px';
        }

        mainWindow.innerHTML = '';
        cfg.cells.forEach((cell, i) => {
            const st   = panes[i];
            const pane = document.createElement('div');
            pane.className = 'upvc-pane';
            pane.style.gridColumn = cell.c[0] + ' / ' + cell.c[1];
            pane.style.gridRow    = cell.r[0] + ' / ' + cell.r[1];

            /* Highlight active pane */
            if (i === activePane) pane.classList.add('is-selected-pane');

            /* Glass */
            pane.setAttribute('data-glass', st.glass);

            /* Opener */
            if (st.opening_type === 'casement' || st.opening_type === 'tilt-turn' || st.opening_type === 'top-hung') {
                pane.classList.add('is-open', 'hinge-' + st.hinged_at);
            }

            /* Bars */
            if (st.extra_bars === 'horizontal' || st.extra_bars === 'both') {
                const b = document.createElement('div'); b.className = 'bar-h'; pane.appendChild(b);
            }
            if (st.extra_bars === 'vertical' || st.extra_bars === 'both') {
                const b = document.createElement('div'); b.className = 'bar-v'; pane.appendChild(b);
            }

            mainWindow.appendChild(pane);
        });
    }

    /* ── Load form controls for the active pane ─────────────────────── */
    function loadPaneIntoForm() {
        const st = panes[activePane];
        setPillValue('pills-opening-type', st.opening_type);
        setPillValue('pills-hinged-at',    st.hinged_at);
        setPillValue('pills-hinge-type',   st.hinge_type);
        setPillValue('pills-trickle-vent', st.trickle_vent);
        setPillValue('pills-blind',        st.internal_blind);
        setPillValue('pills-bars',         st.extra_bars);
        setPillValue('pills-deco',         st.decoration);

        /* Glass swatches */
        document.querySelectorAll('#glassGrid .swatch-btn').forEach(btn => {
            btn.classList.toggle('is-selected', btn.dataset.key === st.glass);
        });
        /* Handle cards */
        document.querySelectorAll('#handleGrid .handle-card').forEach(btn => {
            btn.classList.toggle('is-selected', btn.dataset.key === st.handle);
        });

        /* Show/hide hinged-at based on opening type */
        toggleHingeFields(st.opening_type);

        /* Update pane indicator */
        const pvInd = document.getElementById('pvPaneIndicator');
        if (pvInd) document.getElementById('pvPaneNum').textContent = activePane + 1;
        document.getElementById('s-pane').textContent = 'Pane ' + (activePane + 1);
    }

    function setPillValue(groupId, value) {
        const group = document.getElementById(groupId);
        if (!group) return;
        group.querySelectorAll('.opt-pill').forEach(btn => {
            btn.classList.toggle('is-active', btn.dataset.value === value);
        });
    }

    function toggleHingeFields(openingType) {
        const hingedWrap = document.getElementById('wrap-hinged-at');
        const hingeWrap  = document.getElementById('wrap-hinge-type');
        const isFixed    = openingType === 'fixed';
        if (hingedWrap) hingedWrap.style.display = isFixed ? 'none' : '';
        if (hingeWrap)  hingeWrap.style.display  = isFixed ? 'none' : '';
    }

    /* ── Wire pane tabs ─────────────────────────────────────────────── */
    document.querySelectorAll('.pane-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            activePane = parseInt(tab.dataset.pane, 10);
            document.querySelectorAll('.pane-tab').forEach(t => t.classList.toggle('is-active', t === tab));
            loadPaneIntoForm();
            paintMainWindow();
            updateSummary();
        });
    });

    /* ── Wire opener pills ────────────────────────────────────────── */
    function wirePills(groupId, field) {
        const group = document.getElementById(groupId);
        if (!group) return;
        group.querySelectorAll('.opt-pill').forEach(btn => {
            btn.addEventListener('click', () => {
                panes[activePane][field] = btn.dataset.value;
                if (field === 'opening_type') toggleHingeFields(btn.dataset.value);
                
                // Update UI state
                group.querySelectorAll('.opt-pill').forEach(b => b.classList.remove('is-active'));
                btn.classList.add('is-active');

                paintMainWindow();
                updateSummary();
                recalcPrice();
            });
        });
    }

    wirePills('pills-opening-type', 'opening_type');
    wirePills('pills-hinged-at',    'hinged_at');
    wirePills('pills-hinge-type',   'hinge_type');
    wirePills('pills-trickle-vent', 'trickle_vent');
    wirePills('pills-blind',        'internal_blind');
    wirePills('pills-bars',         'extra_bars');
    wirePills('pills-deco',         'decoration');

    /* ── Wire glass swatches ────────────────────────────────────────── */
    document.querySelectorAll('#glassGrid .swatch-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            panes[activePane].glass = btn.dataset.key;
            document.querySelectorAll('#glassGrid .swatch-btn').forEach(b => b.classList.remove('is-selected'));
            btn.classList.add('is-selected');
            paintMainWindow();
            updateSummary();
            recalcPrice();
        });
    });

    /* ── Wire handle cards ──────────────────────────────────────────── */
    document.querySelectorAll('#handleGrid .handle-card').forEach(btn => {
        btn.addEventListener('click', () => {
            panes[activePane].handle = btn.dataset.key;
            document.querySelectorAll('#handleGrid .handle-card').forEach(b => b.classList.remove('is-selected'));
            btn.classList.add('is-selected');
            updateSummary();
            recalcPrice();
        });
    });

    /* ── Size inputs ────────────────────────────────────────────────── */
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
    }

    let debT;
    widthInput.addEventListener('input',   () => { clearTimeout(debT); debT = setTimeout(onSizeChange, 200); });
    heightInput.addEventListener('input',  () => { clearTimeout(debT); debT = setTimeout(onSizeChange, 200); });
    widthInput.addEventListener('change',  onSizeChange);
    heightInput.addEventListener('change', onSizeChange);

    /* ── Collapsible sections ───────────────────────────────────────── */
    document.querySelectorAll('.cfg-section-head').forEach(head => {
        head.addEventListener('click', () => {
            const section = head.closest('.cfg-section');
            section.classList.toggle('is-open');

            /* Show relevant guidance */
            const sectionId = head.dataset.section;
            const gMap = {
                'sec-size'   : 'size',
                'sec-opener' : 'opener',
                'sec-glass'  : 'glass',
                'sec-handle' : 'handle',
                'sec-blind'  : 'blind',
                'sec-bars'   : 'bars',
            };
            const gKey = gMap[sectionId];
            if (gKey && section.classList.contains('is-open')) {
                showGuidance(gKey);
            }
        });
    });

    /* ── Info icons trigger guidance ────────────────────────────────── */
    document.querySelectorAll('.info-icon[data-g]').forEach(icon => {
        icon.addEventListener('click', e => {
            e.stopPropagation();
            showGuidance(icon.dataset.g);
        });
    });

    function showGuidance(key) {
        const ids = ['size','opener','hinge','vent','glass','handle','blind','bars'];
        ids.forEach(id => {
            const el = document.getElementById('g-' + id);
            if (el) el.style.display = (id === key) ? '' : 'none';
        });
        /* If none matched, show size */
        const match = document.getElementById('g-' + key);
        if (!match) document.getElementById('g-size').style.display = '';
    }

    /* ── Price calculation ──────────────────────────────────────────── */
    function priceFor(list, key) {
        const item = list.find(i => i.key === key);
        return item ? (item.price || 0) : 0;
    }

    function recalcPrice() {
        const base = BASE_PRICES[SELECTED.slug] || 0;
        let glass = 0, handle = 0, vent = 0, blind = 0, bars = 0;
        panes.forEach(st => {
            glass  += priceFor(GLASS_OPTIONS,  st.glass);
            handle += priceFor(HANDLE_OPTIONS, st.handle);
            vent   += st.trickle_vent   !== 'none' ? 12 : 0;
            blind  += st.internal_blind !== 'none' ? 35 : 0;
            bars   += st.extra_bars === 'both' ? 24 : (st.extra_bars !== 'none' ? 14 : 0);
        });
        const total = base + glass + handle + vent + blind + bars;
        document.getElementById('totalPrice').textContent = '£' + total;
        document.getElementById('hPanesJson').value = JSON.stringify(panes);
        document.getElementById('hLineTotal').value = total;
        return total;
    }

    /* ── Summary update ─────────────────────────────────────────────── */
    function labelOf(arr, key) {
        if (Array.isArray(arr)) {
            const item = arr.find(i => i.key === key);
            return item ? item.name : key;
        }
        return arr[key] || key;
    }

    const HINGE_LABELS = <?php echo json_encode($hingeTypes, 15, 512) ?>;
    const VENT_LABELS  = <?php echo json_encode($trickleVents, 15, 512) ?>;
    const BLIND_LABELS = <?php echo json_encode($blindOptions, 15, 512) ?>;
    const BAR_LABELS   = <?php echo json_encode($barOptions, 15, 512) ?>;
    const DECO_LABELS  = <?php echo json_encode($decoOptions, 15, 512) ?>;
    const OPENING_LABELS = {
        'casement':'Casement (Side-Hung)','fixed':'Fixed','tilt-turn':'Tilt & Turn','top-hung':'Top-Hung'
    };

    function updateSummary() {
        const st = panes[activePane];
        document.getElementById('s-name').textContent      = cfg.name;
        document.getElementById('s-size').textContent      = currentW + 'mm × ' + currentH + 'mm';
        document.getElementById('s-pane').textContent      = 'Pane ' + (activePane + 1) + ' of ' + paneCount;
        document.getElementById('s-opening').textContent   = OPENING_LABELS[st.opening_type] || st.opening_type;
        document.getElementById('s-hinge-at').textContent  = st.hinged_at.charAt(0).toUpperCase() + st.hinged_at.slice(1);
        document.getElementById('s-hinge-type').textContent= HINGE_LABELS[st.hinge_type] || st.hinge_type;
        document.getElementById('s-glass').textContent     = labelOf(GLASS_OPTIONS, st.glass);
        document.getElementById('s-handle').textContent    = labelOf(HANDLE_OPTIONS, st.handle);
        document.getElementById('s-vent').textContent      = VENT_LABELS[st.trickle_vent] || st.trickle_vent;
        document.getElementById('s-blind').textContent     = BLIND_LABELS[st.internal_blind] || st.internal_blind;
        document.getElementById('s-bars').textContent      = BAR_LABELS[st.extra_bars] || st.extra_bars;
        document.getElementById('s-deco').textContent      = DECO_LABELS[st.decoration] || st.decoration;
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