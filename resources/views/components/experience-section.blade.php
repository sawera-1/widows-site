@php
$cards = [
  [
    'step' => '01',
    'title' => 'Discovery & Strategy',
    'description' => 'We start by deeply understanding your goals, audience, and challenges to craft a tailored digital strategy.',
    'icon' => '<svg width="36" height="36" viewBox="0 0 36 36" fill="none">
        <circle cx="16" cy="16" r="10" stroke="currentColor" stroke-width="2.2" />
        <line x1="23" y1="23" x2="31" y2="31" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" />
        <circle cx="16" cy="16" r="4" fill="currentColor" opacity="0.35" />
      </svg>',
  ],
  [
    'step' => '02',
    'title' => 'Design & Prototype',
    'description' => 'Our designers craft pixel-perfect interfaces with intuitive UX, validated through rapid interactive prototypes.',
    'icon' => '<svg width="36" height="36" viewBox="0 0 36 36" fill="none">
        <rect x="4" y="4" width="28" height="28" rx="6" stroke="currentColor" stroke-width="2.2" />
        <path d="M10 26 L16 10 L22 22 L26 16" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
        <circle cx="26" cy="16" r="2" fill="currentColor" />
      </svg>',
  ],
  [
    'step' => '03',
    'title' => 'Build & Develop',
    'description' => 'We engineer scalable, performant solutions using modern tech stacks — clean code, tested and production-ready.',
    'icon' => '<svg width="36" height="36" viewBox="0 0 36 36" fill="none">
        <polyline points="10,13 4,18 10,23" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
        <polyline points="26,13 32,18 26,23" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
        <line x1="20" y1="8" x2="16" y2="28" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" />
      </svg>',
  ],
  [
    'step' => '04',
    'title' => 'Launch & Grow',
    'description' => 'We deploy, monitor, and continuously iterate — ensuring your product evolves with your users and market.',
    'icon' => '<svg width="36" height="36" viewBox="0 0 36 36" fill="none">
        <path d="M18 4 C18 4 28 8 28 20 L18 32 L8 20 C8 8 18 4 18 4Z" stroke="currentColor" stroke-width="2.2" stroke-linejoin="round" />
        <circle cx="18" cy="18" r="4" fill="currentColor" opacity="0.45" />
        <circle cx="18" cy="18" r="2" fill="currentColor" />
      </svg>',
  ],
];
@endphp

<section class="exp-section " id="expSection">
  <div class="exp-container">
    
    <div class="exp-header" id="expHeader">
      <div class="exp-label-row">
        <div class="exp-robot-wrapper">
          <img
            src="{{ asset('assets/robo.png') }}"
            alt="Robot"
            width="32"
            height="32"
            loading="lazy"
          />
        </div>
        <div class="exp-label-pill">
          <span class="exp-label-dot"></span>
          <span class="exp-label-text">How We Work</span>
        </div>
      </div>

      <h2 class="exp-title">Our Process</h2>
      <p class="exp-sub">From first idea to final launch, every step is intentional.</p>
    </div>

    <div class="exp-grid">
      @foreach($cards as $card)
        <div class="exp-card">
          <div class="exp-card-step">{{ $card['step'] }}</div>
          <div class="exp-card-icon">{!! $card['icon'] !!}</div>
          <h3 class="exp-card-title">{{ $card['title'] }}</h3>
          <p class="exp-card-desc">{{ $card['description'] }}</p>
        </div>
      @endforeach
    </div>

  </div>
</section>
