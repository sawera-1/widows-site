@php
$reviews = [
  [
    'name' => 'Sarah Mitchell',
    'role' => 'CEO, ProBuild',
've worked with tbh',
    'stars' => 5,
    'image' => 'assets/project/web/1.webp',
    'avatar' => 'assets/im1.webp',
  ],
  [
    'name' => 'James Okafor',
    'role' => 'CTO, EasyBridge',
    'text' => 'needed a system that actually scales and these guys delivered everything works perfectly and the quality is top notch really happy with it',
    'stars' => 5,
    'image' => 'assets/project/custom/3.webm',
    'avatar' => null,
  ],
  [
    'name' => 'Lucas Bernhard',
    'role' => 'Researcher, SpaceBound',
't think it would be this nice but the design is just fire super easy to use too thanks guys',
    'stars' => 5,
    'image' => 'assets/project/mobile/1.webm',
    'avatar' => 'assets/im3.webp',
  ],
  [
    'name' => 'Priya Nair',
    'role' => 'Partner, Robotech',
    'text' => 'handled the complicated ai stuff for our dashboard really well it was a tough project but they made it look easy solid results all around',
    'stars' => 5,
    'image' => 'assets/project/custom/1.webm',
    'avatar' => 'assets/im2.webp',
  ],
  [
    'name' => 'Alex Chen',
    'role' => 'Founder, DesignFlow',
    'text' => 'love how clean the dashboard looks its exactly what i wanted the ui is super minimal and fast they really got our vision from day one',
    'stars' => 5,
    'image' => 'assets/project/uiux/8.webm',
    'avatar' => null,
  ],
  [
    'name' => 'Sophia Kim',
    'role' => 'Manager, StayFit',
    'text' => 'mobile app is super smooth no lag at all just a great user experience u can tell they care about the small details highly recommend',
    'stars' => 5,
    'image' => 'assets/project/mobile/2.webm',
    'avatar' => null,
  ],
  [
    'name' => 'Marcus Thorne',
    'role' => 'Founder, TechFlow',
    'text' => 'the custom software they built is a game changer for our warehouse operations super efficient and easy for the team to pick up definitely the best choice for us',
    'stars' => 5,
    'image' => 'assets/project/custom/2.webm',
    'avatar' => null,
  ],
  [
    'name' => 'Elena Rossi',
    'role' => 'Director, VibeDesign',
    'text' => 'honestly obsessed with the new branding and logo they did it just fits our vibe perfectly and the team was so chill to work with 10/10',
    'stars' => 5,
    'image' => 'assets/project/uiux/6.webm',
    'avatar' => null,
  ],
  [
    'name' => 'Omar Farouq',
    'role' => 'Operations Lead, SyncAI',
    'text' => 'honestly was skeptical about ai automation at first but the workflow they built just runs itself now we cut manual hours by like 70% which is insane',
    'stars' => 5,
    'image' => 'assets/project/aiSol/1.webm',
    'avatar' => null,
  ],
  [
    'name' => 'Nadia Petrov',
    'role' => 'Creative Director, PixelMind',
    'text' => 'the ai design visuals they created blew us away every concept was unique and on brand felt like they really understood our aesthetic from the very first call',
    'stars' => 5,
    'image' => 'assets/project/aiDes/ai3.webp',
    'avatar' => null,
  ],
];

// Duplicate items for infinite scroll effect
$items = array_merge($reviews, $reviews, $reviews);
@endphp

<section class="rev-section-bg " id="revSection">
  <div class="rev-inner">
    
    <div class="rev-header-wrap" id="revHeader">
      <div style="max-width: 700px;">
        <div class="rev-label-row">
          <div class="rev-robot-badge">
            <img
           src="{{ asset('assets/robo.png') }}"
              alt="Robot"
              width="32"
              height="32"
              loading="lazy"
            />
          </div>
          <div class="rev-label-pill">
            <span class="rev-label-dot"></span>
            <span class="rev-label">Testimonials</span>
          </div>
        </div>
        <div class="rev-divider"></div>

        <h2 class="rev-heading">
          Words from our <br />
          <span class="rev-accent-text">Happy Clients</span>
        </h2>
      </div>

      <div class="rev-nav-buttons">
        <button class="rev-nav-btn" id="revPrevBtn" aria-label="Previous">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <button class="rev-nav-btn" id="revNextBtn" aria-label="Next">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>

    <div class="rev-track-wrap" id="revTrackWrap" aria-label="Client reviews carousel">
      <div class="rev-track" id="revTrack">
        @foreach($items as $r)
          @php
             $image = $r['image'] ?? '';
             $isVideo = str_ends_with($image, '.webm');
             $name = $r['name'] ?? 'Anonymous User';
             $role = $r['role'] ?? '';
             $text = $r['text'] ?? 'No review available.';
             $stars = $r['stars'] ?? 5;
             $avatar = $r['avatar'] ?? null;
          @endphp
          <div class="rev-card">
            <div class="rev-card-media-wrap">
              @if($isVideo)
                <video
                  src="{{ asset($image) }}"
                  autoplay loop muted playsinline
                  class="rev-card-media"
                ></video>
              @else
                <img
                  src="{{ asset($image) }}"
                  alt="{{ $name }}"
                  class="rev-card-media"
                  loading="lazy"
                />
              @endif
              <div class="rev-card-media-overlay"></div>
            </div>

            <div class="rev-card-content">
              <div class="rev-stars">
                @for($s = 0; $s < 5; $s++)
                  <svg width="18" height="18" viewBox="0 0 16 16" fill="{{ $s < $stars ? '#ffb33e' : 'none' }}" style="flex-shrink: 0">
                    <path d="M8 1.5L9.7 6H14.3L10.6 8.9L12 13.4L8 10.8L4 13.4L5.4 8.9L1.7 6H6.3L8 1.5Z" stroke="#ffb33e" stroke-width="1.2" stroke-linejoin="round" />
                  </svg>
                @endfor
              </div>

              <p class="rev-text">
                {{ $text }}
              </p>

              <div class="rev-card-footer">
                <div class="rev-avatar-info">
                  <div class="rev-avatar-circle">
                    @if($avatar)
                      <img src="{{ asset($avatar) }}" alt="{{ $name }}" class="rev-avatar-img" loading="lazy" />
                    @else
                      <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="12" fill="currentColor" fill-opacity="0.1" />
                        <path d="M12 11C13.6569 11 15 9.6568 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18 19C18 16.2386 15.3137 14 12 14C8.68629 14 6 16.2386 6 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    @endif
                  </div>
                  <div>
                    <p class="rev-name">{{ $name }}</p>
                    <p class="rev-role">{{ $role }}</p>
                  </div>
                </div>

                <div class="rev-fiverr-fi">fi</div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </div>
</section>
