@props(['isDark' => false])
@php
$badges = [
  ['label' => "Top\nDevelopers", 'line1' => "TOP", 'line2' => "APP", 'line3' => "2024", 'delay' => 0.22],
  ['label' => "Top\nDevelopers", 'line1' => "TOP", 'line2' => "WEB", 'line3' => "2024", 'delay' => 0.32],
  ['label' => "Top\nDevelopers", 'line1' => "TOP", 'line2' => "DEV", 'line3' => "2024", 'delay' => 0.42],
  ['label' => "Top\nAgencies", 'line1' => "TOP", 'line2' => "B2B", 'line3' => "2024", 'delay' => 0.52],
  ['label' => "Top\nAgency", 'line1' => "TOP", 'line2' => "SEO", 'line3' => "2024", 'delay' => 0.62],
  ['label' => "Top\nDevelopers", 'line1' => "TOP", 'line2' => "SaaS", 'line3' => "2024", 'delay' => 0.72],
  ['label' => "Top\nCompanies", 'line1' => "TOP", 'line2' => "PPC", 'line3' => "2024", 'delay' => 0.82],
  ['label' => "Top\nDevelopers", 'line1' => "TOP", 'line2' => "UI", 'line3' => "2024", 'delay' => 0.92],
  ['label' => "Top\nDesigners", 'line1' => "TOP", 'line2' => "UX", 'line3' => "2024", 'delay' => 1.02],
];

$topRow = array_slice($badges, 0, 5);
$bottomRow = array_slice($badges, 5, 4);
$hexFill = $isDark ? '#242420' : '#f0f4e8';
$hexFill2 = $isDark ? '#1a1a17' : '#e8eedd';
$textMuted = $isDark ? 'rgba(242,242,238,0.52)' : '#666';
$clutchColor = '#ef4335';
$strokeOpacity = $isDark ? '0.6' : '0.45';
@endphp

<section class="tb-section " id="tbSection">
  <div class="tb-inner">
    <div class="tb-grid">

      <!-- ════════════ LEFT ════════════ -->
      <div class="tb-left">
        <div class="tb-eyebrow">
          <span class="tb-eyebrow-dot"></span>
          Certified &amp; Trusted
        </div>

        <h2 class="tb-heading">
          Custom <span class="tb-hi">AI Agents</span> That
          <br />Think, Act, &amp; Deliver
          <br /><span class="tb-hi">Real Results</span>
        </h2>

        <p class="tb-subtext">
          Recognised globally for building intelligent automation
          that drives measurable outcomes — not just demos.
        </p>

        <a href="#contact" class="tb-btn">
          Let's Talk
        </a>
      </div>

      <!-- ════════════ RIGHT ════════════ -->
      <div class="tb-right">
        <!-- Badges wrapper -->
        <div class="tb-badges-wrap">
          <!-- Row 1 -->
          <div class="tb-badges-row-top">
            @foreach($topRow as $b)
              <div class="tb-badge" style="--anim-delay: {{ $b['delay'] }}s;">
                <div class="tb-badge-hex">
                  <svg viewBox="0 0 54 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 2L51 16V46L27 60L3 46V16L27 2Z" fill="{{ $hexFill }}" stroke="#d81d1f" stroke-width="1.5" stroke-opacity="{{ $strokeOpacity }}"/>
                    <path d="M27 8L46 19.5V42.5L27 54L8 42.5V19.5L27 8Z" fill="{{ $hexFill2 }}" stroke="#d81d1f" stroke-width="0.5" stroke-opacity="0.22"/>
                    <text x="27" y="21" text-anchor="middle" fill="{{ $textMuted }}" font-size="5.2" font-family="Roboto,sans-serif" font-weight="600" letter-spacing="0.5">{{ $b['line1'] }}</text>
                    <text x="27" y="30" text-anchor="middle" fill="{{ $textMuted }}" font-size="5.2" font-family="Roboto,sans-serif" font-weight="600" letter-spacing="0.5">{{ $b['line2'] }}</text>
                    <text x="27" y="41" text-anchor="middle" fill="{{ $clutchColor }}" font-size="9" font-family="Roboto,sans-serif" font-weight="800">Clutch</text>
                    <text x="27" y="51" text-anchor="middle" fill="{{ $textMuted }}" font-size="4.8" font-family="Roboto,sans-serif" font-weight="600" letter-spacing="0.5">{{ $b['line3'] }}</text>
                  </svg>
                </div>
                <span class="tb-badge-label">{!! nl2br(e($b['label'])) !!}</span>
              </div>
            @endforeach
          </div>

          <!-- Row 2 -->
          <div class="tb-badges-row-bot">
            @foreach($bottomRow as $b)
              <div class="tb-badge" style="--anim-delay: {{ $b['delay'] }}s;">
                <div class="tb-badge-hex">
                  <svg viewBox="0 0 54 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 2L51 16V46L27 60L3 46V16L27 2Z" fill="{{ $hexFill }}" stroke="#d81d1f" stroke-width="1.5" stroke-opacity="{{ $strokeOpacity }}"/>
                    <path d="M27 8L46 19.5V42.5L27 54L8 42.5V19.5L27 8Z" fill="{{ $hexFill2 }}" stroke="#d81d1f" stroke-width="0.5" stroke-opacity="0.22"/>
                    <text x="27" y="21" text-anchor="middle" fill="{{ $textMuted }}" font-size="5.2" font-family="Roboto,sans-serif" font-weight="600" letter-spacing="0.5">{{ $b['line1'] }}</text>
                    <text x="27" y="30" text-anchor="middle" fill="{{ $textMuted }}" font-size="5.2" font-family="Roboto,sans-serif" font-weight="600" letter-spacing="0.5">{{ $b['line2'] }}</text>
                    <text x="27" y="41" text-anchor="middle" fill="{{ $clutchColor }}" font-size="9" font-family="Roboto,sans-serif" font-weight="800">Clutch</text>
                    <text x="27" y="51" text-anchor="middle" fill="{{ $textMuted }}" font-size="4.8" font-family="Roboto,sans-serif" font-weight="600" letter-spacing="0.5">{{ $b['line3'] }}</text>
                  </svg>
                </div>
                <span class="tb-badge-label">{!! nl2br(e($b['label'])) !!}</span>
              </div>
            @endforeach
          </div>
        </div>

        <!-- Trust bar -->
        <div class="tb-trust-row">
          <!-- Clutch block -->
          <div class="tb-clutch-block">
            <span class="tb-clutch-logo">Clutch</span>
            <div class="tb-clutch-info">
              <div class="tb-clutch-rating">
                <span class="tb-rating-score">5.0</span>
                <div class="tb-stars">
                  @for($i = 0; $i < 5; $i++)
                    <span class="tb-star" style="--star-delay: {{ 0.6 + $i * 0.07 }}s;">★</span>
                  @endfor
                </div>
              </div>
              <span class="tb-clutch-reviews">14 Reviews on Clutch</span>
            </div>
          </div>

          <div class="tb-trust-divider"></div>

          <!-- Tech Behemoths block -->
          <div class="tb-tech-block">
            <div class="tb-tech-icon">
              <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" y="5" width="8" height="3" rx="1" fill="#0050a0" opacity=".8" />
                <rect x="1" y="10" width="14" height="3" rx="1" fill="#0050a0" />
                <rect x="1" y="15" width="10" height="3" rx="1" fill="#0050a0" opacity=".6" />
                <circle cx="17" cy="16.5" r="3.5" fill="#d81d1f" opacity=".9" />
              </svg>
            </div>
            <div class="tb-tech-info">
              <span class="tb-tech-label">Trusted on</span>
              <span class="tb-tech-name">Tech Behemoths</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
