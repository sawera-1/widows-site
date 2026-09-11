<?php $__env->startSection('title', 'Configure Your uPVC Entrance Door — uPVC Doors'); ?>
<?php $__env->startSection('meta_description', 'Customize dimensions, handing, colors, glazing, and locking hardware for your uPVC entrance door with instant pricing.'); ?>

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
.thermal-free-badge {
    display: inline-flex; align-items: center; gap: 4px;
    font-size: 11px; font-weight: 800; color: #15803d; background: #f0fdf4;
    border: 1px solid #bbf7d0; border-radius: 4px; padding: 3px 8px; margin-top: 6px;
}
[data-theme="dark"] .thermal-free-badge { background: #052e16; color: #86efac; border-color: #14532d; }

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

/* ── Column 1 (LEFT 32%): Configuration form ─────────────────────── */
.cfg-col { display: flex; flex-direction: column; gap: 0; }

.cfg-section { border:1px solid #e5e5e5; border-radius:4px; margin-bottom:14px; overflow:hidden; background:#fff; }
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
[data-theme="dark"] .size-field input { background:#111; border-color:#333; color:#fff; }
.size-field .unit { position:absolute; right:10px; top:50%; transform:translateY(-50%); font-size:11px; color:#a3a3a3; font-weight:600; pointer-events:none; }
.size-field .hint { font-size:10px; color:#a3a3a3; margin-top:3px; }

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

/* Glass textures */
.glass-swatch.glass-obscure { background:linear-gradient(135deg,#e3eaee,#c2d4e0); }
.glass-swatch.glass-clear { background:linear-gradient(135deg,#f5f8fa,#dbe4ea); }
.glass-swatch.glass-arctic { background:linear-gradient(135deg,#eef2f4,#c9d3d8); }
.glass-swatch.glass-autumn { background:linear-gradient(135deg,#e7ded2,#b8a98d); }
.glass-swatch.glass-stippolyte { background:repeating-radial-gradient(circle at 30% 30%,#e4e7e8 0 3px,#c2c8ca 3px 6px); }
.glass-swatch.glass-satin-opal { background:linear-gradient(135deg,#f2f2f2,#d9d9d9); }

/* ── Handle grid ────────────────────────────────────────────────── */
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
.handle-card .hname { font-size:10px; font-weight:700; line-height:1.2; }
.handle-card .hprice { font-size:9px; font-weight:600; color:#888; }

/* ── Column 2 (CENTER 38%): Live Door Preview ──────────────────── */
.preview-col {
    position: sticky; top: 140px;
    max-height: calc(100vh - 160px); overflow-y: auto;
    background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px;
    padding: 24px 20px; display: flex; flex-direction: column; align-items: center; gap: 16px;
    min-height: 480px; justify-content: center;
}
[data-theme="dark"] .preview-col { background: #121212; border-color: #262626; }

.pv-header { width: 100%; text-align: center; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px; margin-bottom: 4px; }
[data-theme="dark"] .pv-header { border-color: #262626; }
.pv-title { font-size: 14px; font-weight: 800; text-transform: uppercase; letter-spacing: .08em; color: #000; }
[data-theme="dark"] .pv-title { color: #fff; }
.pv-dims { font-size: 12px; font-weight: 700; color: #64748b; margin-top: 2px; }

.door-container-outer { position: relative; width: 100%; height: 380px; display: flex; align-items: center; justify-content: center; }

/* Dynamic Door Graphic Scale */
.preview-col .upvc-door-graphic,
.preview-col .flush-door-graphic,
.preview-col .stable-door-graphic {
    height: 100%;
    max-height: 360px;
    width: auto;
    border-width: 7px;
    box-shadow: 0 12px 32px rgba(0,0,0,0.15);
}

/* ── Column 3 (RIGHT 30%): Smart Information Panel ─────────────────── */
.info-col {
    position: sticky; top: 140px;
    max-height: calc(100vh - 160px); overflow-y: auto;
    display: flex; flex-direction: column; gap: 14px;
}

.smart-info-panel {
    border: 1px solid #e5e5e5; border-radius: 6px; padding: 20px; background: #ffffff;
    box-shadow: 0 2px 12px rgba(0,0,0,0.03);
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
.info-badge { display: inline-flex; align-items: center; gap: 6px; font-size: 10.5px; font-weight: 700; color: #1e293b; background: #f1f5f9; border: 1px solid #cbd5e1; border-radius: 4px; padding: 4px 10px; margin-top: 8px; }

/* Summary & Price */
.summary-table { width:100%; border-collapse:collapse; font-size:11.5px; }
.summary-table td { padding:3.5px 0; vertical-align:top; }
.summary-table td:first-child { color:#64748b; font-weight:600; width:125px; }
.summary-table td:last-child { font-weight:700; color:#000; }
[data-theme="dark"] .summary-table td:first-child { color:#94a3b8; }
[data-theme="dark"] .summary-table td:last-child { color:#fff; }
.summary-divider { border:none; border-top:1px dashed #e2e8f0; margin:12px 0; }

.price-total-box { border-top:2px solid #000; padding-top:10px; margin-top:6px; text-align: right; }
[data-theme="dark"] .price-total-box { border-color:#fff; }
.price-total-box .pt-label { font-size:11px; font-weight:800; text-transform:uppercase; letter-spacing:.06em; color:#64748b; }
.price-total-box .pt-value { font-size:1.6rem; font-weight:800; color:#000; }
[data-theme="dark"] .price-total-box .pt-value { color:#fff; }
.price-total-box .pt-vat { font-size:11px; font-weight:600; color:#64748b; margin-top:1px; }

.why-buy-card {
    background: #f0f9ff; border: 1px solid #bae6fd; border-radius: 4px; padding: 10px; margin-top: 14px;
}
[data-theme="dark"] .why-buy-card { background: #0c2a4a; border-color: #1e40af; }
.why-buy-card .wb-title { font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: .05em; color: #0369a1; }
[data-theme="dark"] .why-buy-card .wb-title { color: #38bdf8; }
.why-buy-card p { font-size: 11px; color: #0284c7; margin-top: 3px; line-height: 1.4; margin-bottom: 0; }
[data-theme="dark"] .why-buy-card p { color: #7dd3fc; }

.btn-atc {
    display:flex; align-items:center; justify-content:center; gap:8px;
    width:100%; padding:13px 18px; margin-top:12px;
    font-size:13px; font-weight:700; text-transform:uppercase; letter-spacing:.06em;
    background:#000; color:#fff; border:1px solid #000; border-radius:4px; cursor:pointer;
    transition:background .15s;
}
.btn-atc:hover { background:#222; }
[data-theme="dark"] .btn-atc { background:#fff; color:#000; border-color:#fff; }

@media (max-width:1023px){
    .three-col { display:flex; flex-direction:column; }
    .preview-col { position: static; min-height: 380px; }
    .info-col { position: static; }
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<?php
$doorModels = [
    // Single Entrance Doors
    'full-glass'  => ['name'=>'Full-glass',  'basePrice'=>449.00, 'type'=>'single'],
    'two-panel'   => ['name'=>'2-panel',     'basePrice'=>489.00, 'type'=>'single'],
    'three-panel' => ['name'=>'3-panel',     'basePrice'=>509.00, 'type'=>'single'],
    'buckingham'  => ['name'=>'Buckingham',  'basePrice'=>560.33, 'type'=>'single'],
    'carter'      => ['name'=>'Carter',      'basePrice'=>579.00, 'type'=>'single'],
    'chester'     => ['name'=>'Chester',     'basePrice'=>529.00, 'type'=>'single'],
    'clinton'     => ['name'=>'Clinton',     'basePrice'=>549.00, 'type'=>'single'],
    'filmore'     => ['name'=>'Filmore',     'basePrice'=>499.00, 'type'=>'single'],
    'grant'       => ['name'=>'Grant',       'basePrice'=>589.00, 'type'=>'single'],
    'harding'     => ['name'=>'Harding',     'basePrice'=>539.00, 'type'=>'single'],
    'hayes'       => ['name'=>'Hayes',       'basePrice'=>549.00, 'type'=>'single'],
    'kennedy'     => ['name'=>'Kennedy',     'basePrice'=>559.00, 'type'=>'single'],
    'lincoln'     => ['name'=>'Lincoln',     'basePrice'=>529.00, 'type'=>'single'],
    'lyndon'      => ['name'=>'Lyndon',      'basePrice'=>539.00, 'type'=>'single'],
    'monroe'      => ['name'=>'Monroe',      'basePrice'=>549.00, 'type'=>'single'],
    'reagan'      => ['name'=>'Reagan',      'basePrice'=>529.00, 'type'=>'single'],
    'roosevelt'   => ['name'=>'Roosevelt',   'basePrice'=>539.00, 'type'=>'single'],
    'truman'      => ['name'=>'Truman',      'basePrice'=>549.00, 'type'=>'single'],
    'tyler'       => ['name'=>'Tyler',       'basePrice'=>579.00, 'type'=>'single'],
    'washington'  => ['name'=>'Washington',  'basePrice'=>589.00, 'type'=>'single'],
    'wilson'      => ['name'=>'Wilson',      'basePrice'=>569.00, 'type'=>'single'],
    'woodrow-l'   => ['name'=>'Woodrow-L',   'basePrice'=>539.00, 'type'=>'single'],
    'woodrow-d'   => ['name'=>'Woodrow-D',   'basePrice'=>539.00, 'type'=>'single'],
    'flush-door'  => ['name'=>'Flush door',  'basePrice'=>469.00, 'type'=>'single'],
    'aluminium'   => ['name'=>'Aluminium',   'basePrice'=>649.00, 'type'=>'single'],

    // French & Flush Double / Combination Doors (21 models)
    'prehung-door'                => ['name'=>'Prehung Double Door', 'basePrice'=>749.00, 'type'=>'flush'],
    'with-left-panel'             => ['name'=>'Prehung with Left Panel', 'basePrice'=>949.00, 'type'=>'flush'],
    'with-right-panel'            => ['name'=>'Prehung with Right Panel', 'basePrice'=>949.00, 'type'=>'flush'],
    'with-left-right-panels'      => ['name'=>'Prehung with Left & Right Panels', 'basePrice'=>1149.00, 'type'=>'flush'],
    'with-side-openers'           => ['name'=>'Prehung with Side Panels & Openers', 'basePrice'=>1249.00, 'type'=>'flush'],
    'prehung-toplight'            => ['name'=>'Prehung Door & Top Light', 'basePrice'=>869.00, 'type'=>'flush'],
    'left-panel-toplight'         => ['name'=>'With Left Panel & Top Light', 'basePrice'=>1069.00, 'type'=>'flush'],
    'right-panel-toplight'        => ['name'=>'With Right Panel & Top Light', 'basePrice'=>1069.00, 'type'=>'flush'],
    'left-right-toplight'         => ['name'=>'With Left & Right Panels & Top Light', 'basePrice'=>1289.00, 'type'=>'flush'],
    'prehung-midrail'             => ['name'=>'Prehung Door (Mid-rail)', 'basePrice'=>779.00, 'type'=>'flush'],
    'left-panel-midrail'          => ['name'=>'With Left Panel (Mid-rail)', 'basePrice'=>979.00, 'type'=>'flush'],
    'right-panel-midrail'         => ['name'=>'With Right Panel (Mid-rail)', 'basePrice'=>979.00, 'type'=>'flush'],
    'left-right-midrail'          => ['name'=>'With Left & Right Panels (Mid-rail)', 'basePrice'=>1179.00, 'type'=>'flush'],
    'side-openers-midrail'        => ['name'=>'With Side Panels & Openers (Mid-rail)', 'basePrice'=>1279.00, 'type'=>'flush'],
    'prehung-midrail-toplight'    => ['name'=>'Prehung Door (Mid-rail & Top Light)', 'basePrice'=>899.00, 'type'=>'flush'],
    'left-panel-midrail-toplight' => ['name'=>'Left Panel (Mid-rail & Top Light)', 'basePrice'=>1099.00, 'type'=>'flush'],
    'right-panel-midrail-toplight'=> ['name'=>'Right Panel (Mid-rail & Top Light)', 'basePrice'=>1099.00, 'type'=>'flush'],
    'left-right-midrail-toplight' => ['name'=>'Left & Right Panels (Mid-rail & Top Light)', 'basePrice'=>1319.00, 'type'=>'flush'],
    'flush-door-double'           => ['name'=>'Flush French Door', 'basePrice'=>849.00, 'type'=>'flush'],
    'flush-toplight'              => ['name'=>'Flush French Door & Top Light', 'basePrice'=>969.00, 'type'=>'flush'],
    'aluminium-double'            => ['name'=>'Aluminium Double Door', 'basePrice'=>1499.00, 'type'=>'flush'],

    // Stable Doors (7 models)
    'kelham'         => ['name'=>'Kelham',         'basePrice'=>589.00, 'type'=>'stable'],
    'kelham-grill'   => ['name'=>'Kelham Grill',   'basePrice'=>619.00, 'type'=>'stable'],
    'normanton'      => ['name'=>'Normanton',      'basePrice'=>599.00, 'type'=>'stable'],
    'tuxford'        => ['name'=>'Tuxford',        'basePrice'=>599.00, 'type'=>'stable'],
    'carburton'      => ['name'=>'Carburton',      'basePrice'=>549.00, 'type'=>'stable'],
    'newstead-1'     => ['name'=>'Newstead 1',     'basePrice'=>609.00, 'type'=>'stable'],
    'newstead-solid' => ['name'=>'Newstead Solid', 'basePrice'=>559.00, 'type'=>'stable'],
];

$designKey = request('design', 'buckingham');
$currentDoor = $doorModels[$designKey] ?? $doorModels['buckingham'];

$isFlushDouble = ($currentDoor['type'] ?? 'single') === 'flush';
$isSidePanel1 = in_array($designKey, ['with-left-panel', 'with-right-panel', 'left-panel-toplight', 'right-panel-toplight', 'left-panel-midrail', 'right-panel-midrail', 'left-panel-midrail-toplight', 'right-panel-midrail-toplight']);
$isSidePanel2 = in_array($designKey, ['with-left-right-panels', 'with-side-openers', 'left-right-toplight', 'left-right-midrail', 'side-openers-midrail', 'left-right-midrail-toplight']);
$hasTopLight = str_contains($designKey, 'toplight');

if ($isFlushDouble) {
    $defaultW = $isSidePanel2 ? 3000 : ($isSidePanel1 ? 2400 : 1800);
    $defaultH = $hasTopLight ? 2400 : 2100;
} else {
    $defaultW = 900;
    $defaultH = 2100;
}

$frameColours = [
    ['key' => 'white',        'name' => 'White Flat',        'color' => '#ffffff', 'border' => '#888888', 'price' => 0],
    ['key' => 'anthracite',   'name' => 'Anthracite Grey',   'color' => '#383e42', 'border' => '#222222', 'price' => 35],
    ['key' => 'chartwell',    'name' => 'Chartwell Green',   'color' => '#8ba89c', 'border' => '#6b887c', 'price' => 40],
    ['key' => 'golden-oak',   'name' => 'Golden Oak',        'color' => '#85532b', 'border' => '#5e381b', 'price' => 45],
    ['key' => 'rosewood',     'name' => 'Rosewood',          'color' => '#4a2c1d', 'border' => '#2e190f', 'price' => 45],
    ['key' => 'black-ash',    'name' => 'Black Ash',         'color' => '#222222', 'border' => '#000000', 'price' => 40],
    ['key' => 'smooth-grey',  'name' => 'Smooth Grey',       'color' => '#787d82', 'border' => '#505458', 'price' => 35],
    ['key' => 'agate-grey',   'name' => 'Agate Grey',        'color' => '#8a9296', 'border' => '#62686c', 'price' => 35],
    ['key' => 'cream',        'name' => 'Cream',             'color' => '#f2efdf', 'border' => '#d2cfbf', 'price' => 35],
];

$glassOptions = [
    ['key'=>'obscure','name'=>'Obscure Glazing','price'=>0],
    ['key'=>'clear','name'=>'Clear Glass','price'=>0],
    ['key'=>'arctic','name'=>'Arctic','price'=>28],
    ['key'=>'autumn','name'=>'Autumn','price'=>28],
    ['key'=>'stippolyte','name'=>'Stippolyte','price'=>32],
    ['key'=>'satin-opal','name'=>'Satin Opal','price'=>26],
];

$handleOptions = [
    ['key'=>'white',        'name'=>'White',        'price'=>0,  'color'=>'#ffffff'],
    ['key'=>'chrome',       'name'=>'Chrome',       'price'=>5,  'color'=>'#d8e4ea'],
    ['key'=>'gold',         'name'=>'Gold',         'price'=>5,  'color'=>'#e8cf8a'],
    ['key'=>'satin-silver', 'name'=>'Satin Silver', 'price'=>5,  'color'=>'#c0c0c0'],
    ['key'=>'black',        'name'=>'Matte Black',  'price'=>5,  'color'=>'#222222'],
];

$cillOptions = [
    'none'  => ['name'=>'No Cill', 'price'=>0],
    'stub'  => ['name'=>'85mm Stub Cill', 'price'=>8],
    'std'   => ['name'=>'150mm Standard Cill', 'price'=>12],
    'large' => ['name'=>'180mm Large Cill', 'price'=>16],
];

$letterboxOptions = [
    'none'   => ['name'=>'None', 'price'=>0],
    'white'  => ['name'=>'White Letterbox', 'price'=>16],
    'chrome' => ['name'=>'Chrome Letterbox', 'price'=>18],
    'gold'   => ['name'=>'Gold Letterbox', 'price'=>18],
    'black'  => ['name'=>'Matte Black Letterbox', 'price'=>18],
];

$knockerOptions = [
    'none'    => ['name'=>'None', 'price'=>0],
    'urn'     => ['name'=>'Urn Knocker', 'price'=>14],
    'spyhole' => ['name'=>'Urn Knocker with Spyhole', 'price'=>18],
    'slim'    => ['name'=>'Slimline Oval Knocker', 'price'=>16],
];

$currentW = (int) request('width', 900);
$currentH = (int) request('height', 2100);
?>

<main id="content">
<section class="w-full bg-white dark:bg-black wdc-section">
<div class="wdc-container">

    
    <div class="cfg-header">
        <h1>Door <?php echo e($currentDoor['name']); ?> — Georgian bar</h1>
        <div class="meta" id="headerMeta">with obscure glazing • <?php echo e($currentW); ?>mm × <?php echo e($currentH); ?>mm</div>
        <div class="thermal-free-badge"> Thermal upgrade FREE (A-Rated Insulation Core)</div>
    </div>

    
    <div class="three-col">

        
        <div class="cfg-col">

            
            <div class="cfg-section is-open" id="sec-size" data-info="info-size">
                <div class="cfg-section-head">
                    <h3>Dimensions</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="dim-grid">
                        <div class="size-field">
                            <label for="cfgWidth">Width (mm)</label>
                            <div class="inp-wrap">
                                <input type="number" id="cfgWidth" value="<?php echo e($currentW); ?>" min="700" max="1150" step="1">
                                <span class="unit">mm</span>
                            </div>
                            <p class="hint">700 – 1150 mm</p>
                        </div>
                        <div class="size-field">
                            <label for="cfgHeight">Height (mm)</label>
                            <div class="inp-wrap">
                                <input type="number" id="cfgHeight" value="<?php echo e($currentH); ?>" min="1800" max="2400" step="1">
                                <span class="unit">mm</span>
                            </div>
                            <p class="hint">1800 – 2400 mm</p>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-handing" data-info="info-handing">
                <div class="cfg-section-head">
                    <h3>Opens &amp; Hinged Handing</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Opens</label>
                        <select class="wdc-select" id="sel-opens">
                            <option value="Inwards">Inwards</option>
                            <option value="Outwards">Outwards</option>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Hinged</label>
                        <select class="wdc-select" id="sel-hinged">
                            <option value="Left">Left</option>
                            <option value="Right">Right</option>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-colour" data-info="info-colour">
                <div class="cfg-section-head">
                    <h3>Door &amp; Frame Colour</h3>
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

            
            <div class="cfg-section is-open" id="sec-handle" data-info="info-handle">
                <div class="cfg-section-head">
                    <h3>Handle</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="handle-grid" id="handleGrid">
                        <?php $__currentLoopData = $handleOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button" class="handle-card <?php echo e($loop->first ? 'is-selected' : ''); ?>" data-key="<?php echo e($h['key']); ?>" data-price="<?php echo e($h['price']); ?>">
                                <div class="hname"><?php echo e($h['name']); ?></div>
                                <div class="hprice"><?php echo e($h['price'] ? '+£'.$h['price'] : 'Included'); ?></div>
                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-glass" data-info="info-glass">
                <div class="cfg-section-head">
                    <h3>Glazing &amp; Obscure Glass</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Glass Pattern</label>
                        <div class="swatch-grid" id="glassGrid">
                            <?php $__currentLoopData = $glassOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button type="button" class="swatch-btn <?php echo e($loop->first ? 'is-selected' : ''); ?>" data-key="<?php echo e($g['key']); ?>" data-price="<?php echo e($g['price']); ?>">
                                    <span class="swatch glass-swatch glass-<?php echo e($g['key']); ?>"></span>
                                    <span class="sname"><?php echo e($g['name']); ?></span>
                                    <span class="sprice"><?php echo e($g['price'] ? '+£'.$g['price'] : 'Included'); ?></span>
                                </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-cill" data-info="info-cill">
                <div class="cfg-section-head">
                    <h3>External Cill &amp; Threshold</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>External Cill</label>
                        <select class="wdc-select" id="sel-cill">
                            <?php $__currentLoopData = $cillOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $cill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>" data-price="<?php echo e($cill['price']); ?>"><?php echo e($cill['name']); ?> <?php echo e($cill['price'] ? '(+£'.$cill['price'].')' : ''); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Threshold</label>
                        <select class="wdc-select" id="sel-threshold">
                            <option value="Standard uPVC 70mm" data-price="0">Standard uPVC 70mm</option>
                            <option value="15mm Low Aluminium Disability" data-price="18">15mm Low Aluminium Disability (+£18)</option>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="cfg-section is-open" id="sec-lock" data-info="info-lock">
                <div class="cfg-section-head">
                    <h3>Locking Cylinder &amp; Hardware</h3>
                    <svg class="chevron" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                </div>
                <div class="cfg-section-body">
                    <div class="field-group">
                        <label>Locking Cylinder</label>
                        <select class="wdc-select" id="sel-lock">
                            <option value="5-Point PAS24 Multipoint Lock" data-price="0">5-Point PAS24 Multipoint Lock</option>
                            <option value="Ultion 3-Star Diamond Anti-Snap" data-price="25">Ultion 3-Star Diamond Anti-Snap (+£25)</option>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Letterbox</label>
                        <select class="wdc-select" id="sel-letterbox">
                            <?php $__currentLoopData = $letterboxOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $lb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($lb['name']); ?>" data-price="<?php echo e($lb['price']); ?>"><?php echo e($lb['name']); ?> <?php echo e($lb['price'] ? '(+£'.$lb['price'].')' : ''); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Knocker</label>
                        <select class="wdc-select" id="sel-knocker">
                            <?php $__currentLoopData = $knockerOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $kn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($kn['name']); ?>" data-price="<?php echo e($kn['price']); ?>"><?php echo e($kn['name']); ?> <?php echo e($kn['price'] ? '(+£'.$kn['price'].')' : ''); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Door Vent</label>
                        <select class="wdc-select" id="sel-vent">
                            <option value="None" data-price="0">None</option>
                            <option value="White Trickle Vent" data-price="12">White Trickle Vent (+£12)</option>
                            <option value="Brown Trickle Vent" data-price="12">Brown Trickle Vent (+£12)</option>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Frame Extenders</label>
                        <select class="wdc-select" id="sel-extender">
                            <option value="None" data-price="0">None</option>
                            <option value="20mm Frame Add-on" data-price="14">20mm Frame Add-on (+£14)</option>
                            <option value="50mm Frame Add-on" data-price="22">50mm Frame Add-on (+£22)</option>
                        </select>
                    </div>
                    <div class="field-group">
                        <label>Fixing Kit</label>
                        <select class="wdc-select" id="sel-fixing">
                            <option value="None" data-price="0">None</option>
                            <option value="Standard Installation Kit" data-price="8">Standard Installation Kit (+£8)</option>
                            <option value="Heavy Duty Masonry Kit" data-price="15">Heavy Duty Masonry Kit (+£15)</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        
        <div class="preview-col">
            <div class="pv-header">
                <div class="pv-title" id="pvTitle">Door <?php echo e($currentDoor['name']); ?></div>
                <div class="pv-dims" id="pvDims"><?php echo e($currentW); ?>mm (W) × <?php echo e($currentH); ?>mm (H)</div>
            </div>

            <div class="door-container-outer" id="doorPreviewBox">
                <?php if(($currentDoor['type'] ?? 'single') === 'flush'): ?>
                    <?php echo $__env->make('pages.doors.flushdoor-graphic', ['design' => $designKey], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php elseif(($currentDoor['type'] ?? 'single') === 'stable'): ?>
                    <?php echo $__env->make('pages.doors.stabledoor-graphic', ['design' => $designKey], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php else: ?>
                    <?php echo $__env->make('pages.doors.framedoor', ['design' => $designKey], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endif; ?>
            </div>
        </div>

        
        <div class="info-col">
            <div class="smart-info-panel">

                <div class="info-card is-active" id="info-size">
                    <h4>Door Sizing &amp; Specifications</h4>
                    <p>Measured by outer frame overall width and height dimensions.</p>
                    <div class="info-badge"> Precision Fit Entrance Door</div>
                </div>

                <div class="info-card" id="info-handing">
                    <h4>Opens &amp; Hinge Handing</h4>
                    <p>Select whether the door opens inwards or outwards and which side the hinges are mounted on.</p>
                    <div class="info-badge"> Reversible Hinged System</div>
                </div>

                <div class="info-card" id="info-colour">
                    <h4>Duraflex uPVC Colours</h4>
                    <p>UV-stable foil laminates resistant to weathering and thermal expansion.</p>
                    <div class="info-badge"> 10-Year Colour Fastness Guarantee</div>
                </div>

                <div class="info-card" id="info-glass">
                    <h4>Obscure Safety Glazing</h4>
                    <p>Provides optimal privacy while allowing full natural light entering the hallway.</p>
                    <div class="info-badge"> BS EN 12150 Safety Toughened</div>
                </div>

                <div class="info-card" id="info-handle">
                    <h4>PAS24 Security &amp; Locks</h4>
                    <p>5-point heavy duty hookbolt locking mechanism certified to PAS24 burglar resistance.</p>
                    <div class="info-badge"> £1,000 Anti-Snap Guarantee</div>
                </div>

                <div class="info-card" id="info-cill">
                    <h4>External Cill &amp; Threshold</h4>
                    <p>Directs rainwater away from outer brickwork and provides easy step-over access.</p>
                    <div class="info-badge"> Weathering Seal Protected</div>
                </div>

                <div class="info-card" id="info-lock">
                    <h4>Hardware &amp; Fixing Accessories</h4>
                    <p>Professional grade fixings, trickle vents, and letterboxes built for durability.</p>
                    <div class="info-badge"> Installer Grade Hardware</div>
                </div>

                <hr class="summary-divider">

                
                <table class="summary-table">
                    <tr><td>Door Model:</td><td id="s-model">Door <?php echo e($currentDoor['name']); ?> - Georgian bar</td></tr>
                    <tr><td>Glazing:</td><td id="s-glass">Obscure Glazing</td></tr>
                    <tr><td>Door &amp; frame colour:</td><td id="s-colour">White Flat</td></tr>
                    <tr><td>Handle:</td><td id="s-handle">White Lever</td></tr>
                    <tr><td>External cill:</td><td id="s-cill">No Cill</td></tr>
                    <tr><td>Locking cylinder:</td><td id="s-lock">5-Point PAS24 Multipoint Lock</td></tr>
                    <tr><td>Opens:</td><td id="s-opens">Inwards</td></tr>
                    <tr><td>Hinged:</td><td id="s-hinged">Left</td></tr>
                    <tr><td>Threshold:</td><td id="s-threshold">Standard uPVC 70mm</td></tr>
                    <tr><td>Letterbox:</td><td id="s-letterbox">None</td></tr>
                    <tr><td>Knocker:</td><td id="s-knocker">None</td></tr>
                    <tr><td>Door vent:</td><td id="s-vent">None</td></tr>
                    <tr><td>Frame extenders:</td><td id="s-extender">None</td></tr>
                    <tr><td>Fixing kit:</td><td id="s-fixing">None</td></tr>
                    <tr><td>Thermal upgrade:</td><td class="text-green-600 font-extrabold">FREE</td></tr>
                </table>

                <div class="price-total-box">
                    <div class="pt-label">Total Price</div>
                    <div class="pt-value" id="totalPriceDisplay">£<?php echo e(number_format($currentDoor['basePrice'], 2)); ?></div>
                    <div class="pt-vat">All prices include VAT</div>
                </div>

                <div class="why-buy-card">
                    <div class="wb-title"> Why buy from us — Best price</div>
                    <p>Direct factory prices, FENSA compliance, PAS24 security certification &amp; 10-year frame guarantee included.</p>
                </div>

                <form action="/cart/add" method="POST" id="atcForm">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="product_name" value="Door <?php echo e($currentDoor['name']); ?>">
                    <input type="hidden" name="design" value="<?php echo e($designKey); ?>">
                    <input type="hidden" name="product_type" value="door">
                    <input type="hidden" name="width" id="hiddenW" value="<?php echo e($currentW); ?>">
                    <input type="hidden" name="height" id="hiddenH" value="<?php echo e($currentH); ?>">
                    <input type="hidden" name="panes_json" id="hiddenPanesJson">
                    <input type="hidden" name="price" id="hiddenPrice" value="<?php echo e($currentDoor['basePrice']); ?>">
                    <input type="hidden" name="line_total" id="hiddenLineTotal" value="<?php echo e($currentDoor['basePrice']); ?>">
                    <button type="submit" class="btn-atc">
                         Add Door to Cart
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>
</section>
</main>

<script>
(function(){
    const BASE_PRICE = <?php echo e($currentDoor['basePrice']); ?>;
    let colorPrice = 0;
    let glassPrice = 0;
    let handlePrice = 0;
    let cillPrice = 0;
    let lockPrice = 0;
    let threshPrice = 0;
    let letterboxPrice = 0;
    let knockerPrice = 0;
    let ventPrice = 0;
    let extenderPrice = 0;
    let fixingPrice = 0;

    const doorGraphic = document.querySelector('.preview-col .upvc-door-graphic, .preview-col .flush-door-graphic, .preview-col .stable-door-graphic');
    const widthInp = document.getElementById('cfgWidth');
    const heightInp = document.getElementById('cfgHeight');

    function updatePrice() {
        const total = BASE_PRICE + colorPrice + glassPrice + handlePrice + cillPrice + lockPrice + threshPrice + letterboxPrice + knockerPrice + ventPrice + extenderPrice + fixingPrice;
        document.getElementById('totalPriceDisplay').textContent = '£' + total.toFixed(2);
        document.getElementById('hiddenPrice').value = total.toFixed(2);
        document.getElementById('hiddenLineTotal').value = total.toFixed(2);

        const doorConfig = [{
            opening_type: document.getElementById('s-opens') ? document.getElementById('s-opens').textContent : 'Inwards',
            hinged_at: document.getElementById('s-hinged') ? document.getElementById('s-hinged').textContent : 'Left',
            glass: document.getElementById('s-glass') ? document.getElementById('s-glass').textContent : 'Obscure Glazing',
            handle: document.getElementById('s-handle') ? document.getElementById('s-handle').textContent : 'White Lever',
            colour: document.getElementById('s-colour') ? document.getElementById('s-colour').textContent : 'White Flat',
            cill: document.getElementById('s-cill') ? document.getElementById('s-cill').textContent : 'No Cill',
            lock: document.getElementById('s-lock') ? document.getElementById('s-lock').textContent : '5-Point PAS24',
        }];
        const hJson = document.getElementById('hiddenPanesJson');
        if (hJson) hJson.value = JSON.stringify(doorConfig);
    }

    /* ── Section Accordion Toggle ── */
    document.querySelectorAll('.cfg-section-head').forEach(head => {
        head.addEventListener('click', (e) => {
            e.stopPropagation();
            const sec = head.closest('.cfg-section');
            if (sec) {
                sec.classList.toggle('is-open');
                const infoTarget = sec.dataset.info;
                if (infoTarget) {
                    document.querySelectorAll('.info-card').forEach(card => card.classList.toggle('is-active', card.id === infoTarget));
                }
            }
        });
    });

    /* Size Change */
    function updateDims() {
        const w = widthInp.value || 900;
        const h = heightInp.value || 2100;
        document.getElementById('pvDims').textContent = w + 'mm (W) × ' + h + 'mm (H)';
        document.getElementById('headerMeta').textContent = 'with obscure glazing • ' + w + 'mm × ' + h + 'mm';
        document.getElementById('hiddenW').value = w;
        document.getElementById('hiddenH').value = h;
    }
    widthInp.addEventListener('input', updateDims);
    heightInp.addEventListener('input', updateDims);

    /* Opens & Hinged */
    document.getElementById('sel-opens').addEventListener('change', (e) => {
        document.getElementById('s-opens').textContent = e.target.value;
    });
    document.getElementById('sel-hinged').addEventListener('change', (e) => {
        document.getElementById('s-hinged').textContent = e.target.value;
        const handle = document.querySelector('.door-handle-graphic');
        if (handle) {
            if (e.target.value === 'Right') {
                handle.style.left = '3px'; handle.style.right = 'auto';
            } else {
                handle.style.right = '3px'; handle.style.left = 'auto';
            }
        }
    });

    /* Colour */
    document.querySelectorAll('#frameColorGrid .color-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('#frameColorGrid .color-btn').forEach(b => b.classList.remove('is-selected'));
            btn.classList.add('is-selected');
            colorPrice = parseInt(btn.dataset.price || 0, 10);
            const activeGraphic = document.querySelector('.preview-col .upvc-door-graphic, .preview-col .flush-door-graphic, .preview-col .stable-door-graphic');
            if (activeGraphic) {
                activeGraphic.style.setProperty('--frame-color', btn.dataset.colorHex);
                activeGraphic.style.setProperty('--sash-color', btn.dataset.colorHex);
                if (btn.dataset.borderHex) {
                    activeGraphic.style.setProperty('--border-color', btn.dataset.borderHex);
                }
            }
            document.getElementById('s-colour').textContent = btn.querySelector('.c-name').textContent;
            updatePrice();
        });
    });

    /* Handle Finish Live Preview */
    const handleColors = {
        'white': '#ffffff',
        'chrome': 'linear-gradient(180deg, #ffffff, #aaaaaa)',
        'gold': 'linear-gradient(180deg, #fce8a6, #c49a3c)',
        'satin-silver': 'linear-gradient(180deg, #e0e0e0, #969696)',
        'black': '#222222'
    };
    document.querySelectorAll('#handleGrid .handle-card').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('#handleGrid .handle-card').forEach(b => b.classList.remove('is-selected'));
            btn.classList.add('is-selected');
            handlePrice = parseInt(btn.dataset.price || 0, 10);
            const hKey = btn.dataset.key;
            document.getElementById('s-handle').textContent = btn.querySelector('.hname').textContent;
            const hGraphics = document.querySelectorAll('.door-handle-graphic, .handle-left, .handle-right, .sd-handle-graphic, .door-handle-graphic *');
            hGraphics.forEach(h => {
                if (handleColors[hKey]) {
                    h.style.background = handleColors[hKey];
                }
            });
            updatePrice();
        });
    });

    /* Glass Texture Swatches Live Preview */
    const glassTextures = {
        'obscure': 'linear-gradient(135deg,#e3eaee,#c2d4e0)',
        'clear': 'linear-gradient(135deg,#f5f8fa,#dbe4ea)',
        'arctic': 'linear-gradient(135deg,#eef2f4,#c9d3d8)',
        'autumn': 'linear-gradient(135deg,#e7ded2,#b8a98d)',
        'stippolyte': 'repeating-radial-gradient(circle at 30% 30%,#e4e7e8 0 3px,#c2c8ca 3px 6px)',
        'satin-opal': 'linear-gradient(135deg,#f2f2f2,#d9d9d9)'
    };
    document.querySelectorAll('#glassGrid .swatch-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('#glassGrid .swatch-btn').forEach(b => b.classList.remove('is-selected'));
            btn.classList.add('is-selected');
            glassPrice = parseInt(btn.dataset.price || 0, 10);
            const gKey = btn.dataset.key;
            document.getElementById('s-glass').textContent = btn.querySelector('.sname').textContent;
            if (glassTextures[gKey]) {
                document.querySelectorAll('.door-glass-pane, .transom-pane, .sash-pane-full, .sash-pane-upper, .sash-pane-lower, .side-panel-upper, .side-panel-lower, .sd-glass-pane').forEach(pane => {
                    pane.style.background = glassTextures[gKey];
                });
            }
            updatePrice();
        });
    });

    /* Select Dropdowns Wiring */
    function wireSelect(id, summaryId, priceVarSetter) {
        const el = document.getElementById(id);
        if (!el) return;
        el.addEventListener('change', (e) => {
            const opt = e.target.options[e.target.selectedIndex];
            document.getElementById(summaryId).textContent = opt.value;
            const price = parseInt(opt.dataset.price || 0, 10);
            priceVarSetter(price);
            updatePrice();
        });
    }

    wireSelect('sel-cill',      's-cill',      p => cillPrice = p);
    wireSelect('sel-threshold', 's-threshold', p => threshPrice = p);
    wireSelect('sel-lock',      's-lock',      p => lockPrice = p);
    wireSelect('sel-letterbox', 's-letterbox', p => letterboxPrice = p);
    wireSelect('sel-knocker',   's-knocker',   p => knockerPrice = p);
    wireSelect('sel-vent',      's-vent',      p => ventPrice = p);
    wireSelect('sel-extender',  's-extender',  p => extenderPrice = p);
    wireSelect('sel-fixing',    's-fixing',    p => fixingPrice = p);

    /* Section info switcher */
    document.querySelectorAll('.cfg-section').forEach(sec => {
        sec.addEventListener('click', () => {
            const infoTarget = sec.dataset.info;
            if (infoTarget) {
                document.querySelectorAll('.info-card').forEach(card => card.classList.toggle('is-active', card.id === infoTarget));
            }
        });
    });
})();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/pages/doors/size.blade.php ENDPATH**/ ?>