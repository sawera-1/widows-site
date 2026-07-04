@props([
    'theme' => 'light'
])

@php
$isDark = $theme === 'dark';
$modeClass = $isDark ? 'bs-dark' : 'bs-light';

$featuredPost = [
    'category' => 'Sales Development',
    'title' => 'The Hidden Cost of "Almost Compliant" Global Hiring (And How EOR Fixes It)',
    'author' => 'Shayan',
    'date' => 'January 12, 2026',
    'avatar' => 'assets/4.webp',
    'image' => 'assets/ind7.webp',
    'href' => '/blog/detail',
];

$gridPosts = [
    [
        'category' => 'Sales Development',
        'title' => 'The Team Growth Calculator: How to Forecast Your Next Hire in 2 Minutes',
        'author' => 'Shayan',
        'date' => 'January 5, 2026',
        'avatar' => 'assets/4.webp',
        'image' => 'assets/ind2.webp',
        'href' => '/blog/detail',
    ],
    [
        'category' => 'Executive Assistant · Learning Center · Marketing',
        'title' => 'Why Most Agencies Overhire in January (And How to Prevent It)',
        'author' => 'Shayan',
        'date' => 'December 29, 2025',
        'avatar' => 'assets/4.webp',
        'image' => 'assets/ind3.webp',
        'href' => '/blog/detail',
    ],
    [
        'category' => 'Executive Assistant · Marketing',
        'title' => 'Team Culture & Virtual Workflows: Building Cohesion Across Borders',
        'author' => 'Shayan',
        'date' => 'December 21, 2025',
        'avatar' => 'assets/4.webp',
        'image' => 'assets/ind4.webp',
        'href' => '/blog/detail',
    ],
    [
        'category' => 'Business · Executive Assistant · Learning Center',
        'title' => 'When Hiring Feels Urgent, You\'re Already Late — Plan Ahead Instead',
        'author' => 'Shayan',
        'date' => 'December 14, 2025',
        'avatar' => 'assets/4.webp',
        'image' => 'assets/ind5.webp',
        'href' => '/blog/detail',
    ],
];
@endphp

<section class="bs-section {{ $modeClass }}" id="bsSection">
  <div class="bs-inner">

    <!-- ── Section Header ── -->
    <div class="bs-section-animate bs-card-1 bs-header-flex">
      <div>
        <!-- Label row -->
        <div class="bs-label-row">
          <!-- Robot badge -->
          <div class="bs-robot-badge">
            <img src="{{ asset($isDark ? 'assets/robo.png' : 'assets/robo.png') }}" alt="" />
          </div>
          <!-- Pill -->
          <div class="bs-pill">
            <span class="bs-pill-dot"></span>
            <span class="bs-pill-text">Latest Insights</span>
          </div>
        </div>
        <!-- Divider -->
        <div class="bs-divider"></div>
        <!-- Heading -->
        <h2 class="bs-heading">
          From Our <span class="bs-accent-text">Blog</span>
        </h2>
        <p class="bs-subtext">
          Expert perspectives on growth, hiring, and digital strategy — written for forward-thinking teams.
        </p>
      </div>

      <!-- View All Button — Split Design -->
      <a href="/blog" class="bs-view-all-link">
        <div class="bs-view-all-container">
          <!-- Base Layer: Primary Visibility -->
          <div class="bs-view-all-base">
            <span class="bs-view-all-text">View All Posts</span>
            <div class="bs-view-all-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
          <!-- Hover Layer: Accent interaction -->
          <div class="bs-view-all-hover">
            <span class="bs-view-all-text">Explore Blog</span>
            <div class="bs-view-all-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- ── Outer 2-column Grid ── -->
    <div class="bs-outer-grid">

      <!-- ══ LEFT: FEATURED CARD ══ -->
      <div class="bs-section-animate bs-card-5">
        <a href="{{ $featuredPost['href'] }}" class="bs-feat-link">
          <article class="bs-featured-card">
            <!-- Background image -->
            <img src="{{ asset($featuredPost['image']) }}" alt="{{ $featuredPost['title'] }}" class="bs-feat-img" />

            <!-- Strong dark gradient overlay -->
            <div class="bs-feat-gradient"></div>

            <!-- Top-right accent line -->
            <div class="bs-feat-accent-line"></div>

            <!-- Read overlay -->
            <div class="bs-read-overlay">
              <div class="bs-read-circle">
                <span class="bs-read-text">Read</span>
              </div>
            </div>

            <!-- Content — bottom left -->
            <div class="bs-feat-content">
              <!-- Category pill -->
              <div class="bs-feat-cat-wrap">
                <span class="bs-feat-cat">
                  <span class="bs-feat-cat-dot"></span>
                  {{ $featuredPost['category'] }}
                </span>
              </div>

              <!-- Title -->
              <h2 class="bs-feat-title">
                {{ $featuredPost['title'] }}
              </h2>

              <!-- Author + date -->
              <div class="bs-author-row-feat">
                <img src="{{ asset($featuredPost['avatar']) }}" alt="{{ $featuredPost['author'] }}" class="bs-avatar-feat" />
                <span class="bs-author-name-feat">{{ $featuredPost['author'] }}</span>
                <span class="bs-author-dot-feat">·</span>
                <span class="bs-author-date-feat">{{ $featuredPost['date'] }}</span>
              </div>
            </div>
          </article>
        </a>
      </div>

      <!-- ══ RIGHT: 2×2 GRID ══ -->
      <div class="bs-right-grid">
        @foreach($gridPosts as $index => $post)
          <div class="bs-section-animate bs-card-{{ $index + 2 }}">
            <a href="{{ $post['href'] }}" class="bs-grid-link">
              <article class="bs-grid-card">
                <!-- Image -->
                <div class="bs-grid-img-wrap">
                  <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="bs-grid-img" />
                  <div class="bs-grid-gradient"></div>
                  <!-- Read overlay -->
                  <div class="bs-read-overlay">
                    <div class="bs-read-circle">
                      <span class="bs-read-text">Read</span>
                    </div>
                  </div>
                </div>

                <!-- Content -->
                <div class="bs-grid-content">
                  <!-- Category -->
                  <p class="bs-grid-cat">{{ $post['category'] }}</p>
                  
                  <!-- Title -->
                  <h3 class="bs-grid-title">{{ $post['title'] }}</h3>

                  <!-- Author + Date -->
                  <div class="bs-author-row-grid">
                    <img src="{{ asset($post['avatar']) }}" alt="{{ $post['author'] }}" class="bs-avatar-grid" />
                    <span class="bs-author-name-grid">{{ $post['author'] }}</span>
                    <span class="bs-author-dot-grid">·</span>
                    <span class="bs-author-date-grid">{{ $post['date'] }}</span>
                  </div>
                </div>
              </article>
            </a>
          </div>
        @endforeach
      </div>

    </div>
  </div>
</section>
