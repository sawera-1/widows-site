{{-- One Clutch-style hexagon trust badge. $b = ['l1','l2','l3','label'] --}}
<div class="tb-badge">
    <div class="tb-badge-hex">
        <svg viewBox="0 0 54 62" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27 2L51 16V46L27 60L3 46V16L27 2Z" style="fill:var(--tbx-hexfill);stroke:#D81D1F;stroke-width:1.5;stroke-opacity:var(--tbx-stroke-op)"></path>
            <path d="M27 8L46 19.5V42.5L27 54L8 42.5V19.5L27 8Z" style="fill:var(--tbx-hexfill2);stroke:#D81D1F;stroke-width:0.5;stroke-opacity:0.22"></path>
            <text x="27" y="21" text-anchor="middle" style="fill:var(--tbx-textmuted)" font-size="5.2" font-family="Montserrat,sans-serif" font-weight="600" letter-spacing="0.5">{{ $b['l1'] }}</text>
            <text x="27" y="30" text-anchor="middle" style="fill:var(--tbx-textmuted)" font-size="5.2" font-family="Montserrat,sans-serif" font-weight="600" letter-spacing="0.5">{{ $b['l2'] }}</text>
            <text x="27" y="41" text-anchor="middle" fill="#ef4335" font-size="9" font-family="Poppins,sans-serif" font-weight="800">Clutch</text>
            <text x="27" y="51" text-anchor="middle" style="fill:var(--tbx-textmuted)" font-size="4.8" font-family="Montserrat,sans-serif" font-weight="600" letter-spacing="0.5">{{ $b['l3'] }}</text>
        </svg>
    </div>
    <span class="tb-badge-label">{{ $b['label'] }}</span>
</div>
