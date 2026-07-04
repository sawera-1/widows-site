@php
$calendlyUrl = 'https://calendly.com/mshayantariq/schedule-a-meeting?hide_event_type_details=1&hide_gdpr_banner=1&primary_color=d81d1f';

$benefits = [
    'Understand your project scope & complexity in 30 minutes',
    'Get an honest technical roadmap — no sales pressure',
    'Expert AI & automation advice tailored to your business',
    'Walk away with clear next steps, regardless of commitment',
];

$steps = [
    'Pick a slot that works for you',
    'Briefly describe your project goal',
    'Meet our team — we listen first',
];
@endphp

<section class="bc-section " id="bcSection">
  <div class="bc-outer">
    <div class="bc-grid">

      <!-- ══ LEFT ══ -->
      <div class="bc-left">
          <div class="bc-eyebrow-row" style="display:flex; align-items:center; gap:12px;">
            <div class="bc-robo-wrap">
              <div class="bc-robo-bg"></div><div class="bc-robo-ring"></div>
              <img
                src="{{ asset('assets/robo.png') }}"
                alt="Robot"
                style="object-fit: contain; display: block; position: relative; z-index: 1;"
              />
            </div>
            <div class="bc-eyebrow-pill">
              <span class="bc-eyebrow-dot"></span>
              Free Consultation
            </div>
          </div>

        <div class="bc-heading-group">
          <div class="bc-title-row">
          
            <h2 class="bc-heading-title">
              Book a <em>Free</em><br />Consultation
            </h2>
          </div>
          <span class="bc-title-underline"></span>
        </div>

        <p class="bc-heading-sub">
          Schedule a free 30-minute session with our team. No commitment just a focused conversation about your project and how AI can accelerate it.
        </p>

        <div class="bc-divider"></div>

        <ul class="bc-benefits">
          @foreach($benefits as $b)
            <li class="bc-benefit-item">
              <span class="bc-check">
                <svg viewBox="0 0 12 12" fill="none"><path d="M2 6.5L4.8 9 10 3" stroke="#d81d1f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" /></svg>
              </span>
              <span>{{ $b }}</span>
            </li>
          @endforeach
        </ul>

        <div class="bc-steps">
          @foreach($steps as $i => $s)
            <div class="bc-step">
              <span class="bc-step-num">{{ $i + 1 }}</span>
              <span>{{ $s }}</span>
            </div>
          @endforeach
        </div>

        <div class="bc-trust">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><rect x="2" y="5" width="8" height="6" rx="1.5" stroke="currentColor" stroke-width="1.2" /><path d="M4 5V3.5a2 2 0 014 0V5" stroke="currentColor" stroke-width="1.2" /></svg>
          <span class="bc-trust-dot"></span>
          No credit card · No commitment · 100% confidential
        </div>
      </div>

      <!-- ══ RIGHT ══ -->
      <div class="bc-right">
        <div class="bc-calendly-card">
          <div class="bc-card-accent"></div>

          <!-- Skeleton -->
          <div class="bc-skeleton" id="bcSkeleton" aria-hidden="true">
            <div class="bc-skel-spinner"></div>
            <div class="bc-skel-label">Loading calendar…</div>
            <div class="bc-bone bc-skel-title"></div>
            <div class="bc-skel-nav">
              <div class="bc-bone bc-skel-nav-arrow"></div>
              <div class="bc-bone bc-skel-nav-month"></div>
              <div class="bc-bone bc-skel-nav-arrow"></div>
            </div>
            <div class="bc-skel-days">
              @for($i = 0; $i < 7; $i++)
                <div class="bc-bone bc-skel-day-lbl" style="animation-delay: {{ $i * 0.07 }}s"></div>
              @endfor
            </div>
            <div class="bc-skel-grid">
              @for($i = 0; $i < 35; $i++)
                <div class="bc-bone bc-skel-cell" style="opacity: {{ $i % 7 >= 5 ? 0.35 : 1 }}; animation-delay: {{ $i * 0.025 }}s"></div>
              @endfor
            </div>
            <div class="bc-skel-tz">
              <div class="bc-bone bc-skel-tz-icon"></div>
              <div class="bc-bone bc-skel-tz-text"></div>
            </div>
          </div>

          <!-- Calendly Widget -->
          <div class="bc-cw" id="bcWidgetContainer">
            <div
              class="calendly-inline-widget"
              data-url="{{ $calendlyUrl }}"
              style="width: 100%; height: 100%; min-height: 100%;"
            ></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
