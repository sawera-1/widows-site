@php
$stats = [
  [
    'value' => 500,
    'suffix' => '+',
    'label' => 'Projects Delivered',
    'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" /><polyline points="22 4 12 14.01 9 11.01" /></svg>'
  ],
  [
    'value' => 1,
    'suffix' => 'M+',
    'label' => 'Lines of Code',
    'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6" /><polyline points="8 6 2 12 8 18" /></svg>'
  ],
  [
    'value' => 100,
    'suffix' => '+',
    'label' => 'Happy Clients',
    'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" /></svg>'
  ],
  [
    'value' => 8,
    'suffix' => '+',
    'label' => 'Years of Experience',
    'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7" /><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88" /></svg>'
  ],
];
@endphp

<section class="stats-section-bg " id="statsSection">
  <div class="stats-inner">
    
    <div class="stats-header" id="statsHeader">
      <div class="stats-label-row">
        <div class="stats-robot-badge">
          <img src="{{ asset('assets/robo.png') }}"alt="Robot" width="32" height="32" loading="lazy" />
        </div>
        <div class="stats-label-group">
          <div class="stats-label-pill">
            <span class="stats-label-dot"></span>
            <span class="stats-label-text">Our Impact</span>
          </div>
        </div>
      </div>

      <div class="stats-divider"></div>

      <h2 class="stats-heading">
        Numbers That <span class="stats-accent-text">Speak</span> For Themselves
      </h2>
      <p class="stats-sub">
        Milestones built on trust, craft, and consistent delivery across every project.
      </p>
    </div>

    <div class="stats-grid" id="statsGrid">
      @foreach($stats as $index => $stat)
        <div class="stats-item" data-target="{{ $stat['value'] }}" style="transition-delay: {{ 0.15 + $index * 0.1 }}s">
          <div class="stats-item-glow"></div>
          <div class="stats-item-content">
            <div class="stats-icon">
              {!! $stat['icon'] !!}
            </div>
            <div class="stats-value-wrap">
              <span class="stats-number">0</span><span class="stats-suffix">{{ $stat['suffix'] }}</span>
            </div>
            <p class="stats-label">{{ $stat['label'] }}</p>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
