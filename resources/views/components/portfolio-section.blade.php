@php
$collageItems = [
    [
        'id' => 1,
        'src' => 'assets/project/web/1.webp',
        'title' => 'ProBuild — Construction',
        'desc' => 'Next-gen architectural excellence',
        'gridCol' => '1/2',
        'gridRow' => '1/3',
        'height' => 420,
        'className' => 'pf-collage-card-tall',
        'type' => 'web'
    ],
    [
        'id' => 2,
        'src' => 'assets/project/custom/3.webm',
        'title' => 'EasyBridge — Fintech',
        'desc' => 'Seamless mortgage application platform',
        'gridCol' => '2/3',
        'gridRow' => '1/2',
        'height' => 200,
        'className' => '',
        'type' => 'video'
    ],
    [
        'id' => 3,
        'src' => 'assets/project/mobile/1.webm',
        'title' => 'NASA Explorer',
        'desc' => 'interactive space exploration interface',
        'gridCol' => '3/4',
        'gridRow' => '1/2',
        'height' => 200,
        'className' => '',
        'type' => 'video'
    ],
    [
        'id' => 4,
        'src' => 'assets/project/aiSol/3.webm',
        'title' => 'n8n',
        'desc' => 'AI',
        'gridCol' => '2/3',
        'gridRow' => '2/3',
        'height' => 210,
        'className' => '',
        'type' => 'video'
    ],
    [
        'id' => 5,
        'src' => 'assets/project/uiux/7.webm',
        'title' => 'Logo',
        'desc' => 'FlexFlox',
        'gridCol' => '3/4',
        'gridRow' => '2/3',
        'height' => 210,
        'className' => '',
        'type' => 'video'
    ],
];

$stats = [
    ['value' => '50+', 'label' => 'Projects'],
    ['value' => '5+', 'label' => 'Years'],
];
@endphp

<section class="pf-section " id="pfSection">
  <div class="pf-home-inner">
    
    <!-- Left Panel -->
    <div class="pf-left-panel" id="pfLeftPanel">
      <div class="pf-label-row">
        <div class="pf-robot-badge">
          <img
           src="{{ asset('assets/robo.png') }}"
            width="32"
            height="32"
            alt="Robot"
            loading="lazy"
          />
        </div>

        <div class="pf-label-pill">
          <span class="pf-label-dot"></span>
          <span class="pf-label">Our Work</span>
        </div>
      </div>

      <h2 class="pf-heading">Work That <br /> <span class="pf-accent-text">Speaks</span> Loudly</h2>

      <p class="pf-sub">From high-performance SaaS dashboards to immersive mobile experiences — every project we ship is crafted with precision.</p>

      <div class="pf-stats-row">
        @foreach($stats as $stat)
          <div class="pf-stat-col">
            <span class="pf-stat-val">{{ $stat['value'] }}</span>
            <span class="pf-stat-label">{{ $stat['label'] }}</span>
          </div>
        @endforeach
      </div>

      <a href="/portfolio" class="pf-btn">
        <span class="pf-btn-text">View Portfolio</span>
      </a>
    </div>

    <!-- Right Panel -->
    <div class="pf-home-collage" id="pfCollage">
      @foreach($collageItems as $item)
        <div 
          class="pf-collage-card {{ $item['className'] }}" 
          data-type="{{ $item['type'] }}"
          data-height="{{ $item['height'] }}"
          style="grid-column: {{ $item['gridCol'] }}; grid-row: {{ $item['gridRow'] }}; height: {{ $item['height'] }}px;"
          onclick="window.location.href='/portfolio'"
          role="button"
          tabindex="0"
        >
          <div class="pf-collage-media-wrap">
            @if($item['type'] === 'web')
              <img
                src="{{ asset($item['src']) }}"
                alt="{{ $item['title'] }}"
                class="pf-collage-media pf-web-img"
                loading="lazy"
                decoding="async"
              />
            @else
              <video
                src="{{ asset($item['src']) }}"
                autoplay loop muted playsinline preload="none"
                poster="{{ asset(str_replace('.webm', '.webp', $item['src'])) }}"
                class="pf-collage-media"
              ></video>
            @endif
          </div>

          <div class="pf-collage-overlay"></div>

          <div class="pf-collage-content">
            <h4 class="pf-collage-title">{{ $item['title'] }}</h4>
            <p class="pf-collage-desc">{{ $item['desc'] }}</p>
            <div class="pf-explore-btn">
              <span>Explore</span>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
