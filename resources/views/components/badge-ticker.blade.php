@props([
    'badges' => [
        ['l1' => 'TOP', 'l2' => 'JAVA DEVS', 'l3' => 'UNITED STATES 2025', 'label' => 'Top Java Developers'],
        ['l1' => 'TOP', 'l2' => 'WEB DEVS', 'l3' => 'NORTH CAROLINA 2025', 'label' => 'Top Web Developers'],
        ['l1' => 'TOP', 'l2' => 'SOFTWARE', 'l3' => 'NORTH CAROLINA 2025', 'label' => 'Top Software Developers'],
        ['l1' => 'TOP', 'l2' => 'AI AGENTS', 'l3' => 'UNITED STATES 2025', 'label' => 'Top AI Agencies'],
        ['l1' => 'TOP', 'l2' => 'RATED', 'l3' => 'GLOBAL 2025', 'label' => 'Top Rated Agency'],
        ['l1' => 'TOP', 'l2' => 'MOBILE DEV', 'l3' => 'UNITED STATES 2025', 'label' => 'Top Mobile Developers'],
        ['l1' => 'TOP', 'l2' => 'CLOUD', 'l3' => 'NORTH CAROLINA 2025', 'label' => 'Top Cloud Providers'],
    ]
])
@php
    // Triple the array to ensure smooth infinite scrolling
    $tripled = array_merge($badges, $badges, $badges);
@endphp

<section class="bt-section">
    <p class="bt-eyebrow">Certified &amp; Trusted Globally</p>

    <!-- ── TICKER ── -->
    <div class="bt-track-wrap">
        <div class="bt-track">
            @foreach($tripled as $badge)
                <div class="bt-badge">
                    <svg class="bt-hex" viewBox="0 0 54 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27 2L51 16V46L27 60L3 46V16L27 2Z"
                            fill="#242420"
                            stroke="#d81d1f"
                            stroke-width="1.4"
                            stroke-opacity="0.55"
                        />
                        <text x="27" y="20" text-anchor="middle" fill="rgba(242,242,238,0.5)" font-size="5.5" font-family="Roboto,sans-serif" font-weight="600" letter-spacing="0.4">{{ $badge['l1'] }}</text>
                        <text x="27" y="29" text-anchor="middle" fill="rgba(242,242,238,0.5)" font-size="5.5" font-family="Roboto,sans-serif" font-weight="600" letter-spacing="0.4">{{ $badge['l2'] }}</text>
                        <text x="27" y="41" text-anchor="middle" fill="#ef4335" font-size="9.5" font-family="Roboto,sans-serif" font-weight="800">Clutch</text>
                        <text x="27" y="52" text-anchor="middle" fill="rgba(242,242,238,0.5)" font-size="5.5" font-family="Roboto,sans-serif" font-weight="600" letter-spacing="0.4">{{ $badge['l3'] }}</text>
                    </svg>
                    <span class="bt-badge-label">{{ $badge['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- ── TRUST BAR ── -->
    <div class="bt-trust-row">

        <!-- Clutch -->
        <div class="bt-clutch-block">
            <span class="bt-clutch-logo">Clutch</span>
            <div class="bt-clutch-info">
                <div class="bt-rating-row">
                    <span class="bt-score">5.0</span>
                    <div class="bt-stars">
                        @for($i = 0; $i < 5; $i++)
                            <span class="bt-star">★</span>
                        @endfor
                    </div>
                </div>
                <span class="bt-reviews">14 Reviews on Clutch</span>
            </div>
        </div>

        <div class="bt-divider"></div>

        <!-- Tech Behemoths -->
        <div class="bt-tech-block">
            <div class="bt-tech-icon">
                <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="5" width="8" height="3" rx="1" fill="#0050a0" opacity=".8" />
                    <rect x="1" y="10" width="14" height="3" rx="1" fill="#0050a0" />
                    <rect x="1" y="15" width="10" height="3" rx="1" fill="#0050a0" opacity=".6" />
                    <circle cx="17" cy="16.5" r="3.5" fill="#d81d1f" opacity=".9" />
                </svg>
            </div>
            <div class="bt-tech-info">
                <span class="bt-tech-label">Trusted on</span>
                <span class="bt-tech-name">Tech Behemoths</span>
            </div>
        </div>

    </div>
</section>
