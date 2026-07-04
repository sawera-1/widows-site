@php
$cols = [
    [
        [ 'id' => 1, 'title' => 'Travel & Hospitality', 'desc' => 'Redefining guest experiences through smart digital platforms.', 'img' => 'assets/ind1.webp' ],
        [ 'id' => 2, 'title' => 'Public Sector', 'desc' => 'Empowering governments with transparent digital services.', 'img' => 'assets/ind2.webp' ],
    ],
    [
        [ 'id' => 3, 'title' => 'Telecommunication', 'desc' => 'Connecting people through next-gen telecom infrastructure.', 'img' => 'assets/ind3.webp' ],
        [ 'id' => 4, 'title' => 'Retail & CPG', 'desc' => 'Transforming retail with data-driven customer journeys.', 'img' => 'assets/ind4.webp' ],
        [ 'id' => 5, 'title' => 'Oil, Gas & Energy', 'desc' => 'Optimizing energy operations with intelligent automation.', 'img' => 'assets/ind5.webp' ],
    ],
    [
        [ 'id' => 6, 'title' => 'Startups', 'desc' => 'Accelerating startup growth from idea to market launch.', 'img' => 'assets/ind6.webp' ],
        [ 'id' => 7, 'title' => 'E-commerce', 'desc' => 'Building scalable storefronts that convert and retain.', 'img' => 'assets/ind7.webp' ],
        [ 'id' => 8, 'title' => 'Banking & Fintech', 'desc' => 'Delivering secure, compliant financial technology solutions.', 'img' => 'assets/ind8.webp' ],
    ],
];

// Passing parallax multipliers to JS as data attributes on columns
$parallax_multipliers = [-0.034, -0.011, 0.034];
@endphp

<section class="ind-section " id="indSection">
  <div class="ind-container">
    
    <!-- LEFT CONTENT -->
    <div class="ind-content">
      <div class="ind-label-row">
        <div class="ind-robot-wrapper">
          <img
           src="{{ asset('assets/robo.png') }}"
            alt="Robot"
            width="32"
            height="32"
            loading="lazy"
          />
        </div>
        <div class="ind-label-pill">
          <span class="ind-label-dot"></span>
          <span class="ind-label-text">Our Expertise</span>
        </div>
      </div>

      <h2 class="ind-title">
        Industries<br />
        <span class="ind-accent-text">We Serve</span>
      </h2>

      <p class="ind-sub">We deliver tailored digital solutions across a wide range of industries, helping businesses scale, innovate, and stay competitive in the modern digital landscape.</p>

      <div class="ind-stats-row">
        <div class="ind-stat-item">
          <span class="ind-stat-num">9+</span>
          <span class="ind-stat-label">Industries</span>
        </div>
        <div class="ind-stat-item">
          <span class="ind-stat-num">200+</span>
          <span class="ind-stat-label">Projects</span>
        </div>
        <div class="ind-stat-item">
          <span class="ind-stat-num">98%</span>
          <span class="ind-stat-label">Satisfaction</span>
        </div>
      </div>
      <a href="/industry" class="ind-btn">
        View More Sectors
      </a>
    </div>

    <!-- RIGHT GRID -->
    <div class="ind-grid">
      @foreach($cols as $ci => $col)
        <div class="ind-col" data-parallax="{{ $parallax_multipliers[$ci] }}">
          @foreach($col as $item)
            <div class="ind-card-wrap">
              <div class="ind-card">
                <img src="{{ asset($item['img']) }}" alt="{{ $item['title'] }}" class="ind-card-img" loading="lazy" decoding="async">
                <div class="ind-card-overlay"></div>
                <div class="ind-card-content">
                  <p class="ind-card-title">{{ $item['title'] }}</p>
                  <div class="ind-card-desc-wrap">
                    <p class="ind-card-desc">{{ $item['desc'] }}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    </div>

  </div>
</section>
