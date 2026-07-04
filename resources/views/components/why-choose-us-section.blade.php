@php
$bullets = [
  [
    'title' => 'Expert Team',
    'text' => 'Senior engineers and designers with 5+ years of industry experience across diverse domains.',
    'icon' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="6" r="3.5" stroke="currentColor" stroke-width="1.6" /><path d="M2 16c0-3.314 3.134-6 7-6s7 2.686 7 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" /></svg>',
  ],
  [
    'title' => 'Transparent Process',
    'text' => 'Weekly updates, live dashboards, and open communication — no guesswork, ever.',
    'icon' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><rect x="2" y="3" width="14" height="12" rx="2.5" stroke="currentColor" stroke-width="1.6" /><path d="M6 8.5h6M6 11.5h4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" /><path d="M6 5.5h2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" /></svg>',
  ],
  [
    'title' => 'Performance-First',
    'text' => 'We obsess over load times, Core Web Vitals, and scalable architecture by default.',
    'icon' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M3 13L7 8.5L10.5 11L15 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /><circle cx="15" cy="5" r="1.5" fill="currentColor" /></svg>',
  ],
  [
    'title' => 'Ongoing Support',
    'text' => "We don't disappear after launch. Long-term partnerships are at the heart of what we do.",
    'icon' => '<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 2C5.134 2 2 5.134 2 9c0 1.628.542 3.13 1.453 4.33L2 16l2.82-1.38A6.944 6.944 0 0 0 9 16c3.866 0 7-3.134 7-7s-3.134-7-7-7z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" /><path d="M6.5 9.5s.5 1.5 2.5 1.5 2.5-1.5 2.5-1.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" /><circle cx="7" cy="8" r="0.8" fill="currentColor" /><circle cx="11" cy="8" r="0.8" fill="currentColor" /></svg>',
  ],
];

$stats = [
  [ 'value' => '500+', 'label' => 'Projects' ],
  [ 'value' => '8yr', 'label' => 'Experience' ],
  [ 'value' => '98%', 'label' => 'Retention' ],
];

$trustAvatars = [
  'assets/im1.webp',
  'assets/im2.webp',
  'assets/im3.webp',
];
@endphp

<section class="wcu-section-bg " id="wcuSection">
  <div class="wcu-glow-blob" style="top: 10%; right: -5%;"></div>
  <div class="wcu-glow-blob" style="bottom: 15%; left: -10%; animation-delay: -11s;"></div>

  <div class="wcu-inner">
    <div class="wcu-grid">

      <!-- IMAGE COLUMN -->
      <div class="wcu-img-col" id="wcuImgCol">
        <div class="wcu-img-stack">
          <!-- Accent glow behind -->
          <div class="wcu-img-glow"></div>

          <!-- Corner frame accents -->
          <div class="wcu-frame-tl"></div>
          <div class="wcu-frame-br"></div>

          <!-- Main image -->
          <div class="wcu-img-wrap">
            <img src="{{ asset('assets/chooseSection.webp') }}" alt="Team collaborating on a digital project" loading="lazy" />
            <div class="wcu-img-overlay"></div>

            <!-- Stats strip -->
            <div class="wcu-stats-strip">
              @foreach($stats as $s)
                <div class="wcu-stat-card">
                  <span class="wcu-stat-value">{{ $s['value'] }}</span>
                  <span class="wcu-stat-label">{{ $s['label'] }}</span>
                </div>
              @endforeach
            </div>
          </div>

          <!-- Floating trust badge — top right -->
          <div class="wcu-trust-badge">
            <div class="wcu-trust-avatar-row">
              @foreach($trustAvatars as $url)
                <div class="wcu-trust-avatar">
                  <img src="{{ asset($url) }}" alt="client" loading="lazy" />
                </div>
              @endforeach
            </div>
            <div>
              <p class="wcu-trust-title">Trusted by 200+ clients</p>
              <p class="wcu-trust-subtitle">★★★★★ 5.0 average rating</p>
            </div>
          </div>
        </div>
      </div>

      <!-- CONTENT COLUMN -->
      <div class="wcu-content-col" id="wcuContentCol">
        <div class="wcu-label-row">
          <div class="wcu-robot-badge">
            <img src="{{ asset('assets/robo.png') }}" alt="Robot" width="32" height="32" loading="lazy" />
          </div>
          <div class="wcu-label-group">
            <div class="wcu-label-pill">
              <span class="wcu-label-dot"></span>
              <span class="wcu-label-text">Why Choose Us</span>
            </div>
          </div>
        </div>

        <div class="wcu-divider"></div>

        <h2 class="wcu-heading">
          We Build More Than<br />
          <span class="wcu-heading-underline wcu-accent">Products —</span>
          <span class="wcu-heading-secondary">We Build Trust</span>
        </h2>

        <p class="wcu-para">
          Choosing the right partner is everything. We combine technical
          excellence with creative ambition and a relentless focus on your
          success — from first commit to final launch and beyond.
        </p>

        <!-- Bullet cards -->
        <div class="wcu-bullets-list">
          @foreach($bullets as $index => $b)
            <div class="wcu-bullet-card wcu-bullet-item" style="transition-delay: {{ 0.3 + $index * 0.09 }}s">
              <div class="wcu-bullet-icon-wrap">
                {!! $b['icon'] !!}
              </div>
              <div style="flex: 1;">
                <p class="wcu-bullet-title">{{ $b['title'] }}</p>
                <p class="wcu-bullet-text">{{ $b['text'] }}</p>
              </div>
            </div>
          @endforeach
        </div>

        <!-- CTA Button -->
        <div class="wcu-btn-wrap wcu-cta-btn">
          <a href="/contact" class="wcu-btn-container">
            <div class="wcu-btn-base">
              <span>Start Your Journey</span>
              <div class="wcu-btn-icon">
                 <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                 </svg>
              </div>
            </div>
            <div class="wcu-btn-hover">
              <span>Let's Build It</span>
              <div class="wcu-btn-icon">
                 <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                 </svg>
              </div>
            </div>
          </a>
        </div>

      </div>

    </div>
  </div>
</section>
